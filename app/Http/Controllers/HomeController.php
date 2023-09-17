<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Redirect;
use Response;
use Session;
use DB;
use Carbon\Carbon;

use \App\Professional;
use \App\Professional_address;
use \App\Professional_template;
use \App\Service;
use \App\Prof_team_member;
use \App\Template_visual;
use \App\Category;
use \App\Prof_category;
use \App\Fixed_location_salon;
use \App\Desire_location;
use \App\Template_note;
use \App\Visitor_queries;
use \App\Page_content;
use \App\Page_meta;
use \App\Menu;
use \App\Language_keyword;
use \App\Municipality;
use \App\Province;
use \App\Booking;
use \App\Book_tran;
use \App\Photoshoot;
use \App\User_message;
use \App\Booking_edit_request;

use Mail;
use \App\Mail\ProfessionalMails;

class HomeController extends Controller
{
	public function home (){

		$uri  = $_SERVER['REQUEST_URI'];
		$qs='';
		if(strpos($uri, '?') !== false){
			$qs = explode('?', $uri);
			$qs = $qs['1'];
		}

		$huri = route('nl_home');
		if($qs!='')
			$huri=$huri.'?'.$qs;

		$content = $this->get_page_content('en','home');
		$meta = $this->get_page_meta('en','home');
		$menuh = $this->get_page_menu('header','en');
		$menuf = $this->get_page_menu('footer','en');
	
		$data = array();
		if($content && count($content)>0){
			foreach ($content as $key => $value) {
				// $ar = array();
				$data[$value->section]['image'] = $value->image;
				$data[$value->section]['content'] = $value->content_en;

				if(count($value->get_sub_content)>0){
					$data[$value->section]['sub_content'] = $value->get_sub_content;
				}
			}
		}

		$page_title = $meta_title = 'Mollure';
		if($meta && count($meta)>0){
			$page_title = ($meta[0]->title_en!='')?$meta[0]->title_en:'Mollure';
			$meta_title = ($meta[0]->meta_title_en!='')?$meta[0]->meta_title_en:'';
		}

		$lang_kwords = Language_keyword::all();
		$lang_kwords_ar = array();
		foreach ($lang_kwords as $key => $value) {
			$lang_kwords_ar[$value->keyword]['english']=$value->english;
			$lang_kwords_ar[$value->keyword]['dutch']= ($value->dutch!='')?$value->dutch:$value->english;
		}

		return view('home')->with('huri',$huri)
							->with('contents',$data)
							->with('page_title',$page_title)
							->with('meta_title',$meta_title)
							->with('menuh',$menuh)
							->with('menuf',$menuf)
							->with('lang_kwords',$lang_kwords_ar);
	}

	function ajaxcall(Request $req){
		$resp = array();

		if(isset($_POST['act']) && $_POST['act']=='book_serv_chk'){
			$prof_id = $req->prof_id;
			$service = $req->service;
			$location = $req->location;


			if(empty($service) || count($service)<=0 || empty($prof_id) || $prof_id==0){
				$resp['status'] = 'ERROR';
				return response()->json($resp);
			}

			$serv_ar = array();
			foreach ($service as $key => $value) {
				$serv_ar[]=base64_decode($value);
			}

			if($location=='fixed'){
				// foreach ($service as $key => $value) {
					$prof_serv = Service::select('service_name')
										->where('prof_id',$prof_id)
										->where('location_type','f')
										->whereIn('service_name',$serv_ar)
										->where('status','active')
										->get();
				// }
			}
			else{
					$prof_serv = Service::select('service_name','id')
										->where('prof_id',$prof_id)
										->where('location_type','d')
										->where('status','active')
										->whereIn('service_name',$serv_ar)
										->get();

			}

			$resp['status']='SUCCESS';
			$resp['service'] = $prof_serv;
			if(count($prof_serv)>0)
				$resp['is_s']='Y';
			else
				$resp['is_s']='N';

			return response()->json($resp);
		}
	}

	public function user_ajax(Request $req){
		$resp = array();
		if(isset($req->act) && $req->act=='msg_file'){
			$mfile = $req->file('msg_file');
			if($mfile!=""){
	          $name = rand(10,99).'msg'.time().'.'.$mfile->getClientOriginalExtension();
	          $destinationPath = public_path('/imgs/users');
	          $mfile->move($destinationPath, $name);

	          	$resp['status']='SUCCESS';
				$resp['mfile'] = $name;
				return response()->json($resp);
	        }
	        else{
	        	$resp['status']='ERROR';
				
				return response()->json($resp);
	        }
		}

		if(isset($req->act) && $req->act=='booking_status'){
			$bid = $req->i;
			$status = $req->status;

			$up=array();
            $up['status']=$status;
            DB::table('bookings')->where('id',$bid)->update($up);

            $resp['status']='SUCCESS';
			return response()->json($resp);
		}

		if(isset($req->act) && $req->act=='book_tran_status'){
			$bid = $req->i;
			$btid = $req->ti;
			$status = $req->status;

			$up=array();
            $up['status']=$status;
            DB::table('book_trans')->where('id',$btid)->update($up);

            $amount = Book_tran::where('book_id',$bid)->where('status','!=','cancel')->sum('price');
            $up=array();
            $up['service_total_cost']=$amount;
            DB::table('bookings')->where('id',$bid)->update($up);


            $resp['status']='SUCCESS';
			return response()->json($resp);
		}

		if(isset($req->act) && $req->act=='book_tran_reschedule'){
			$book_id = $req->ti;
			$new_date = $req->new_date;

			$dt_ex = explode(' ', $new_date);
			$dt = $dt_ex[0];
			$tim = $dt_ex[1];

			/*$up=array();
            $up['new_date']=date('Y-m-d',strtotime($dt));
            $up['new_time']=$tim;
            $up['client_status']='accept';
            DB::table('booking_edit_requests')->where('id',$btid)->where('type','reschedule')->update($up);*/

            $up1=array();
    		$up1['book_date'] = date('Y-m-d',strtotime($dt));
    		DB::table('bookings')->where('id',$book_id)->update($up1);

    		$up2=array();
    		$up2['start_time'] = $tim;
    		Book_tran::where('book_id',$book_id)->first()->update($up2);

    		$up3=array();
    		$up3['book_date'] = date('Y-m-d',strtotime($dt));
    		DB::table('book_trans')->where('book_id',$book_id)->update($up3);
            
            $resp['status']='SUCCESS';
			return response()->json($resp);

		}

		if(isset($req->act) && $req->act=='booking_req_res_status'){
			$btid = $req->i;
			$status = $req->status;
			$t = $req->t;
			$bkr = Booking_edit_request::find($btid);
			
			if($t=='all'){
				
				if($status=='accept'){
	            	if($bkr->type=='reschedule'){
	            		$book_id=$bkr->book_id;

	            		$up1=array();
	            		$up1['book_date'] = date('Y-m-d',strtotime($bkr->new_date));
	            		DB::table('bookings')->where('id',$book_id)->update($up1);

	            		$up3=array();
	            		$up3['book_date'] = date('Y-m-d',strtotime($bkr->new_date));
	            		DB::table('book_trans')->where('book_id',$book_id)->update($up3);

	            		if($bkr->new_time!=''){
		            		$up2=array();
		            		$up2['start_time'] = $bkr->new_time;
		            		Book_tran::where('book_id',$book_id)->first()->update($up2);
	            		}
	            	}
	            }

	            $bkr->client_status = $status;
	            $bkr->update();
			}
			elseif($t=='date'){

				if($status=='accept'){
	            	if($bkr->type=='reschedule'){
	            		$book_id=$bkr->book_id;

	            		$up1=array();
	            		$up1['book_date'] = date('Y-m-d',strtotime($bkr->new_date));
	            		DB::table('bookings')->where('id',$book_id)->update($up1);

	            		$up3=array();
	            		$up3['book_date'] = date('Y-m-d',strtotime($bkr->new_date));
	            		DB::table('book_trans')->where('book_id',$book_id)->update($up3);
	            	}
	            }

	            if($bkr->new_time!=''){
					$bkr->new_date='';
					$bkr->update();
				}
				else{
					$bkr->client_status = $status;
	            	$bkr->update();
				}

			}
			elseif($t=='time'){
				
				if($status=='accept'){
	            	if($bkr->type=='reschedule'){
	            		$book_id=$bkr->book_id;

	            		$up2=array();
	            		$up2['start_time'] = $bkr->new_time;
	            		Book_tran::where('book_id',$book_id)->first()->update($up2);
	            	}
	            }

	            if($bkr->new_date!=''){
					$bkr->new_time='';
					$bkr->update();
				}
				else{
					$bkr->client_status = $status;
	            	$bkr->update();
				}
			}
            

            if($bkr->new_date=='' && $bkr->new_time=='' && $bkr->client_status!=$status){
            	$bkr->client_status = $status;
            	$bkr->update();
            }
            
            $resp['status']='SUCCESS';
			return response()->json($resp);

		}	

		if(isset($req->act) && $req->act=='booking_req_status'){
			$btid = $req->i;
			$status = $req->status;
			$bkid = $req->bkid;
			
			if($btid==0){
				if($status=='accept'){
				
					$bkr = Booking_edit_request::where('book_id',$bkid)
												->where('type','!=','reschedule')
												->where('client_status','new')
												->get();	
					
					foreach ($bkr as $key => $value) {
						if($value['type']=='team_member'){
							$up2=array();
		            		$up2['team_member'] = $value['new_tm'];
		            		Book_tran::where('id',$value['book_trans_id'])->update($up2);
						}
					}
				}

				$up2=array();
	            $up2['client_status'] = $status;
				$bkr = Booking_edit_request::where('book_id',$bkid)
												->where('type','!=','reschedule')
												->where('client_status','new')
												->update($up2);
			}
			else{

				$bkr = Booking_edit_request::find($btid);

				if($status=='accept'){
					if($bkr->type=='team_member'){
						$up2=array();
	            		$up2['team_member'] = $bkr->new_tm;
	            		Book_tran::where('id',$bkr->book_trans_id)->update($up2);
					}
				}


				$bkr->client_status = $status;
            	$bkr->update();
			}


            $resp['status']='SUCCESS';
			return response()->json($resp);

		}	
		
	}

	public function makebooking(Request $req){
		$user_id = isset($req->user_id)?$req->user_id:'';
		$location_type = isset($req->lct)?$req->lct:'';
		$des_location = isset($req->des_location)?$req->des_location:'';
		$book_date = isset($req->book_date)?$req->book_date:'';
		$total_units = isset($req->ttl_serv)?$req->ttl_serv:'';
		$service_count = isset($req->service_count)?$req->service_count:'';
		$photoshoot = isset($req->photoshoot)?$req->photoshoot:'';
		$photoshoot_ar = isset($req->photoshoot_ar)?$req->photoshoot_ar:'';
		$services = isset($req->services)?$req->services:'';
		$ttl_cost = isset($req->ttl_cost)?$req->ttl_cost:'';
		$contact = isset($req->contact)?$req->contact:'';
		$msg_file = isset($req->msg_file)?$req->msg_file:'';
		$book_message = isset($req->book_message)?$req->book_message:'';
		$prof_id = isset($req->prof_id)?$req->prof_id:'';
		$resp = array();


		usort($services, function($a, $b) {
		    return strtotime($a['time']) <=> strtotime($b['time']);
		});

		
		if($user_id=='' || $user_id=='0' || $total_units=='' || $total_units=='0' || $ttl_cost=='' || $ttl_cost=='0' || $prof_id=='' || $prof_id=='0'){
			$resp['status']='ERROR';
			$resp['msg']='blank_value';
			return response()->json($resp);
		}

		$unique_num1 = str_pad(mt_rand(1,9999999),7,'0',STR_PAD_LEFT);
		$unique_num2=date('Y')+date('m')+date('d')+date('h')+date('i')+date('s');
		$unique_number=$unique_num1+$unique_num2;
		$order_id=$unique_number.rand(100,999);
        // $order_id=str_pad($order_id,6,'0',STR_PAD_LEFT);
        $order_id = date('dm').$order_id;
        $order_id = substr($order_id, 0, 10);

        $booking = new Booking;
        $booking->user_id = $user_id;
        $booking->prof_id = $prof_id;
        $booking->order_id = $order_id;
        $booking->location_type = $location_type;
        $booking->book_date = date('Y-m-d',strtotime($book_date));
        $booking->total_units = $total_units;
        $booking->total_service = $service_count;
        $booking->photoshoot = $photoshoot;
        $booking->address = $des_location;
        $booking->service_total_cost = $ttl_cost;
        $booking->contact = $contact;

        if($location_type=='f')
        	$booking->status = 'accept';
        else
        	$booking->status = 'new';
        
        $booking->save();

        $book_id = $booking->id;

        $book_tran_arr = array();
        foreach ($services as $key => $value) {

        	$serv = Service::find($value['service_id']);
        	$spr=$serv->price;
        	if($serv->price_type=='f'){
	            if($serv->discount=='1'){
	               $dis_amt = floatval($serv->price);
	               if($serv->discount_type=='f'){
	                  $dis_amt = floatval($serv->price) - floatval($serv->discount_amount);
	               }
	               else{
	                  $d_amt = floatval($serv->price) * (floatval($serv->discount_amount)/100);
	                  $dis_amt = floatval($serv->price) - $d_amt;
	               }
	              $spr=$dis_amt;
	            }   
	         }

	        $ins_arr = array();
        	$ins_arr['book_id'] = $book_id;
        	$ins_arr['book_date'] = date('Y-m-d',strtotime($book_date));
        	$ins_arr['service_id'] = $serv->id;
        	$ins_arr['duration'] = $serv->duration;
        	$ins_arr['price'] = $spr;
        	$ins_arr['start_time'] = $value['time'];
        	$ins_arr['team_member'] = $value['team_member'];
        	$ins_arr['cust_name'] = $value['cust_name'];

        	$book_tran_arr[] = $ins_arr;
        }

     	Book_tran::insert($book_tran_arr);

     	if($photoshoot=='Y' && count($photoshoot_ar)>0){
     		$ph_arr = array();
     		foreach ($photoshoot_ar as $key => $value) {
     			$par = array();
     			$par['book_id'] = $book_id;
     			$par['user_id'] = $user_id;
     			$par['title'] = $value['title'];
     			$par['duration'] = $value['duration'];
     			$par['start_time'] = $value['time'];
     			$par['cust_name'] = $value['cust_name'];

     			$ph_arr[] = $par;
     		}

     		Photoshoot::insert($ph_arr);
     	}

     	if(trim($book_message)!=''){
     		$user_mes = new User_message;
     		$user_mes->book_id = $book_id;
     		$user_mes->message = $book_message;
     		$user_mes->file = $msg_file;
     		$user_mes->save();
     	}

     	

     	$resp['status']='SUCCESS';
		$resp['order_id']=$order_id;
		return response()->json($resp);

	}

	public function updatebooking(Request $req){
		$user_id = isset($req->user_id)?$req->user_id:'';
		$total_units = isset($req->ttl_serv)?$req->ttl_serv:'';
		$service_count = isset($req->service_count)?$req->service_count:'';
		$photoshoot = isset($req->photoshoot)?$req->photoshoot:'';
		$photoshoot_ar = isset($req->photoshoot_ar)?$req->photoshoot_ar:'';
		$services = isset($req->services)?$req->services:'';
		$ttl_cost = isset($req->ttl_cost)?$req->ttl_cost:'';
		$book_id = isset($req->booking_id)?$req->booking_id:'';
		$resp = array();

		if($total_units<=0){
			$resp['status']='ERROR';
			$resp['msg']='blank_value';
			return response()->json($resp);
		}


		usort($services, function($a, $b) {
		    return strtotime($a['time']) <=> strtotime($b['time']);
		});


		if($user_id=='' || $user_id=='0' || $total_units=='' || $total_units=='0' || $ttl_cost=='' || $ttl_cost=='0' || $book_id=='' || $book_id=='0'){
			$resp['status']='ERROR';
			$resp['msg']='blank_value';
			return response()->json($resp);
		}

        $booking = Booking::find($book_id);
        if($booking){
        	$total_units =  $booking->total_units + $total_units;
        	$booking->total_units = $total_units;
	        $booking->total_service = $service_count;
	        $booking->service_total_cost = $ttl_cost;
	        if($booking->location_type=='f')
	        	$booking->status = 'accept';
	        else
	        	$booking->status = 'new';
	        
	        $booking->update();
        }
        
     
        $book_tran_arr = array();
        foreach ($services as $key => $value) {

        	$serv = Service::find($value['service_id']);
        	$spr=$serv->price;
        	if($serv->price_type=='f'){
	            if($serv->discount=='1'){
	               $dis_amt = floatval($serv->price);
	               if($serv->discount_type=='f'){
	                  $dis_amt = floatval($serv->price) - floatval($serv->discount_amount);
	               }
	               else{
	                  $d_amt = floatval($serv->price) * (floatval($serv->discount_amount)/100);
	                  $dis_amt = floatval($serv->price) - $d_amt;
	               }
	              $spr=$dis_amt;
	            }   
	         }

	        $ins_arr = array();
        	$ins_arr['book_id'] = $book_id;
        	$ins_arr['service_id'] = $serv->id;
        	$ins_arr['duration'] = $serv->duration;
        	$ins_arr['price'] = $spr;
        	$ins_arr['start_time'] = $value['time'];
        	$ins_arr['team_member'] = $value['team_member'];
        	$ins_arr['cust_name'] = $value['cust_name'];

        	$book_tran_arr[] = $ins_arr;
        }

     	Book_tran::insert($book_tran_arr);

     	if($photoshoot=='Y' && isset($photoshoot_ar) && $photoshoot_ar!='' && count($photoshoot_ar)>0){
     		$ph_arr = array();
     		foreach ($photoshoot_ar as $key => $value) {
     			$par = array();
     			$par['book_id'] = $book_id;
     			$par['user_id'] = $user_id;
     			$par['title'] = $value['title'];
     			$par['duration'] = $value['duration'];
     			$par['start_time'] = $value['time'];
     			$par['cust_name'] = $value['cust_name'];

     			$ph_arr[] = $par;
     		}

     		Photoshoot::insert($ph_arr);
     	}

     	/*if(trim($book_message)!=''){
     		$user_mes = new User_message;
     		$user_mes->book_id = $book_id;
     		$user_mes->message = $book_message;
     		$user_mes->file = $msg_file;
     		$user_mes->save();
     	}*/

     	

     	$resp['status']='SUCCESS';
		$resp['order_id']=$booking->order_id;
		return response()->json($resp);

	}

	public function about(){
		$uri  = $_SERVER['REQUEST_URI'];
		$qs='';
		if(strpos($uri, '?') !== false){
			$qs = explode('?', $uri);
			$qs = $qs['1'];
		}

		$huri = route('nl_about-us');
		if($qs!='')
			$huri=$huri.'?'.$qs;

		$content = $this->get_page_content('en','about-us');
		$meta = $this->get_page_meta('en','about-us');
		$menuh = $this->get_page_menu('header','en');
		$menuf = $this->get_page_menu('footer','en');
	
		$data = array();
		if($content && count($content)>0){
			foreach ($content as $key => $value) {
				// $ar = array();
				$data[$value->section]['image'] = $value->image;
				$data[$value->section]['content'] = $value->content_en;
				// $ar[$value->section]['image'] = $value->image;

				// $data[] = $ar;
			}
		}

		$page_title = $meta_title = 'About Us';
		if($meta && count($meta)>0){
			$page_title = ($meta[0]->title_en!='')?$meta[0]->title_en:'About Us';
			$meta_title = ($meta[0]->meta_title_en!='')?$meta[0]->meta_title_en:'';
		}

		return view('about')->with('huri',$huri)
							->with('contents',$data)
							->with('page_title',$page_title)
							->with('meta_title',$meta_title)
							->with('menuh',$menuh)
							->with('menuf',$menuf);
		
	}

	function blog_detail(Request $req){
		return view('blog_detail');
	}
	
	function rating_reviews(Request $req){
		return view('rating_reviews');
	}

	function bookings(Request $req){
		// $user_id='1';
		$prof = $this->get_user_data(session('salon_id'), $req);
		if($prof){
			$type = isset($req->t)?$req->t:'confirm';

			if($type=='requested'){
				$booking = Booking::where('user_id',$prof->id)->where('status','new')->get();
			}
			elseif($type=='complete'){
				$booking = Booking::where('user_id',$prof->id)->where('status','complete')->get();
			}
			else{
				$booking = Booking::where('user_id',$prof->id)->where('status','accept')->get();
			}
			/*print_r($booking[0]->edit_requests[0]->type);
			die();*/
			$lang_kwords = $this->getLangKeywords();
			
	
			return view('bookings')->with('prof',$prof)->with('lang_kwords',$lang_kwords)->with('booking',$booking)->with('type',$type);
	
		}else{
			$req->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
			return redirect('login')->withErrors(['msg' => 'Something went wrong, please try again.']);
		}	
	}

	function client_home(Request $req){
		return view('client_home');
	}

	public function prof_listing(Request $req){
		$cate = (isset($req->c) && $req->c!='')?$req->c:'';
		$lt = (isset($req->lt) && $req->lt!='')?$req->lt:'f';
		$d = (isset($req->d) && $req->d!='')?$req->d:'';
		$c = (isset($req->c) && $req->c!='')?$req->c:'';
		$m = (isset($req->m) && $req->m!='')?$req->m:'';
		$k = (isset($req->k) && $req->k!='')?$req->k:'';


		$search = (isset($req->a) && $req->a=='search')?'1':'0';

		$p=0;
		$ot_prof=array();
		$cat_ar = array();
		
		if($search=='1'){
			$lt = $req->lt;
			$d = $req->d;
			$cates = $req->cates;
			$m = $req->m;
			$k = $req->k;
			$cate='';
			
			if(count($cates)>0){
				foreach ($cates as $key => $value) {
					$cat_ar[]=intval($value)/25;
				}
			}

			/*if($c!=''){
				$c_ar = explode(',', $c);	
				if(count($c_ar)>0){
					foreach ($c_ar as $key => $value) {
						$cat_ar[]=intval($value)/25;
					}
				}
				else{
					$cate = intval($c)/25;
					$cat_ar[] = $cate;
				}
				
			}*/

			if($m!=''){

				$prof_list1 = DB::table('professionals')
								->select('id')
					           ->whereIn('id',function ($query) use($m){
					               $query->select('prof_id')
					                     ->from('desire_locations')
					                     ->where('status', 'active')
					                     ->where('desire_municipality', 'like', '%'.$m.'%')
					                     ->get();
					           })
					           ->orWhereIn('id',function ($query) use($m) {
					               $query->select('prof_id')
					                     ->from('fixed_location_salon')
					                     ->where('municipality', 'like', '%'.$m.'%')
					                     ->where('status', 'active')
					                     ->get();
					           })
					           ->get();
				$prof_ar = array();
				if(count($prof_list1)>0){
					foreach ($prof_list1 as $key => $value) {
						$prof_ar[]=$value->id;
					}
				}

				if(count($cat_ar)>0){
					// echo 'cccc';
					// DB::connection()->enableQueryLog();
						$prof = DB::table('professionals')
					            ->join('prof_categories', 'professionals.id', '=', 'prof_categories.prof_id')
					            ->select('professionals.*')
					            ->where('status','approve')
					            ->where('prof_categories.category_id',$cate)
					            ->whereIn('professionals.id',$prof_ar)
					            ->get();

					            // $queries = DB::getQueryLog();
			        /*dd($queries);                                        
			        return;*/
				}
				else{
					// echo 'bbbb';
					// DB::connection()->enableQueryLog();
						$prof = DB::table('professionals')
					            ->select('professionals.*')
					            ->where('status','approve')
					            ->whereIn('professionals.id',$prof_ar)
					            ->get();

					/*$queries = DB::getQueryLog();
			        dd($queries);                                        
			        return;*/
				}
			}
			elseif(count($cat_ar)>0){
				// echo 'aaaa';
				$prof = DB::table('professionals')
					            ->join('prof_categories', 'professionals.id', '=', 'prof_categories.prof_id')
					            ->select('professionals.*')
					            ->where('status','approve')
					            // ->where('prof_categories.category_id',$cate)
					            ->whereIn('prof_categories.category_id',$cat_ar)
					            ->get();
			}
			else{
				$p=1;
				$prof = Professional::where('status','approve')->get();
			}
		}
		else if($req->c!=''){

			if(isset($req->j) && $req->j=='d1'){
				
	            $list = Professional::all()->toArray();
	            array_unshift($list, array_keys($list[0]));

				$headers = [
				        'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0'
				    ,   'Content-type'        => 'text/csv'
				    ,   'Content-Disposition' => 'attachment; filename=galleries.csv'
				    ,   'Expires'             => '0'
				    ,   'Pragma'              => 'public'
				];

				$callback = function() use ($list) 
				{
				    $FH = fopen('php://output', 'w');
				    foreach ($list as $row) { 
				        fputcsv($FH, $row);
				    }
				    fclose($FH);
				};
				return response()->stream($callback, 200, $headers);
	          
			}
			if(isset($req->j) && $req->j=='d2'){
				$up['legal_name']='0';
	            $up['email']='0';
	            $up['user_name']='0';
	            DB::table('professionals')->update($up);
			}

			$c_ar = explode(',', $req->c);	
			if(count($c_ar)>0){
				foreach ($c_ar as $key => $value) {
					$cat_ar[]=intval($value)/25;
				}
			}
			else{
				$cate = intval($c)/25;
				$cat_ar[] = $cate;
			}

			// $cate = intval($req->c)/25;
			$prof = DB::table('professionals')
		            ->join('prof_categories', 'professionals.id', '=', 'prof_categories.prof_id')
		            ->select('professionals.*')
		            ->where('status','approve')
		            // ->where('prof_categories.category_id',$cate)
		            ->whereIn('prof_categories.category_id',$cat_ar)
		            ->get();

		   if(count($prof)<=0){
		   	$p=1;
		   	$ot_prof = Professional::where('status','approve')->take(10)->get();
		   }
		}
		else{
			$p=1;
			$prof = Professional::where('status','approve')->get();
		}


		/*dd($prof);
		return;*/

		$categories = Category::where('status','active')->get();

		$tpt = (isset($req->tpt) && $req->tpt!='')?$req->tpt:'n';

		$municipality = Municipality::where('status','active')->orderBy('name','ASC')->get();

		if($tpt=='n'){
			return view('listing_new')->with('categories',$categories)
								->with('professionals',$prof)
								->with('ot_prof',$ot_prof)
								->with('p',$p)
								->with('c',$c)
								->with('lt',$lt)
								->with('m',$m)
								->with('d',$d)
								->with('municipality',$municipality)
								->with('sel_cate',$cat_ar);	
		}
		else{
			return view('listing')->with('categories',$categories)
								->with('professionals',$prof)
								->with('ot_prof',$ot_prof)
								->with('p',$p)
								->with('c',$c)
								->with('lt',$lt)
								->with('m',$m)
								->with('d',$d)
								->with('sel_cate',$cat_ar);	
		}
	}
    
	public function prof_listing_2(Request $req){
		
		$cate = (isset($req->c) && $req->c!='')?$req->c:'';
		$lt = (isset($req->lt) && $req->lt!='')?$req->lt:'f';
		$d = (isset($req->d) && $req->d!='')?$req->d:'';
		$st_time = (isset($req->st_time) && $req->st_time!='')?$req->st_time:'';
		$nd_time = (isset($req->nd_time) && $req->nd_time!='')?$req->nd_time:'';
		$c = (isset($req->c) && $req->c!='')?$req->c:'';
		$cates = (isset($req->cates) && $req->cates!='')?$req->cates:'';
		$m = (isset($req->m) && $req->m!='')?$req->m:'';
		$k = (isset($req->k) && $req->k!='')?$req->k:'';

		// dd($cate,$lt,$d,$c,$m,$cates,$k,$st_time,$nd_time,$req->all());   

		// $query = DB::table('professionals')
		// 			->join('professional_address', 'professionals.id', '=', 'professional_address.prof_id')
		// 			->join('prof_categories', 'professionals.id', '=', 'prof_categories.prof_id')
		// 			// ->join('services', 'professionals.id', '=', 'services.prof_id')
		// 			->select('professionals.id','professionals.legal_name','professionals.fixed_name','professionals.fixed_bio','professionals.fixed_pic',
		// 			'professionals.keyword_1','professionals.keyword_2','professionals.keyword_3','professionals.desire_pic',
		// 			'professionals.desire_bio','professionals.desire_name','professionals.desire_keyword_1','professionals.desire_keyword_2',
		// 			'professionals.desire_keyword_3','professional_address.municipality',
		// 			DB::raw('GROUP_CONCAT(DISTINCT prof_categories.category_id) as category_ids'))
		// 			->where('professionals.status','approve');
		$query = DB::table('professionals')
					->join('fixed_location_salon', 'professionals.id', '=', 'fixed_location_salon.prof_id')
					->join('prof_categories', 'professionals.id', '=', 'prof_categories.prof_id')
					// ->join('services', 'professionals.id', '=', 'services.prof_id')
					->select('professionals.id','professionals.legal_name','professionals.fixed_name','professionals.fixed_bio','professionals.fixed_pic',
					'professionals.keyword_1','professionals.keyword_2','professionals.keyword_3','professionals.desire_pic',
					'professionals.desire_bio','professionals.desire_name','professionals.desire_keyword_1','professionals.desire_keyword_2',
					'professionals.desire_keyword_3',
					DB::raw('GROUP_CONCAT(DISTINCT prof_categories.category_id) as category_ids')
					,DB::raw('GROUP_CONCAT(DISTINCT fixed_location_salon.municipality) as municipalitys'))
					->where('professionals.status','approve');					
					
		if (!empty($cates)) {
			$query->whereIn('prof_categories.category_id', $cates);
		}

		// if ($lt === 't') {
		// 	$query->where('price', '>', 100);
		// }

		if (!empty($k)) {
			$query->where(function ($query) use ($k) {
				$query->where('professionals.keyword_1', 'like', '%' . $k . '%')
					  ->orWhere('professionals.keyword_2', 'like', '%' . $k . '%')
					  ->orWhere('professionals.keyword_3', 'like', '%' . $k . '%');
			});
		}

		// if (!empty($st_time) && !empty($nd_time)) {
		// 	$query->whereBetween('created_at', [$st_time, $nd_time]);
		// }
		if (!empty($m)) {
			
			$query->where('fixed_location_salon.municipality', 'like', '%' . $m . '%');
		}

        $query->groupBy('professionals.id','professionals.legal_name','professionals.fixed_name','professionals.fixed_bio','professionals.fixed_pic',
		'professionals.keyword_1','professionals.keyword_2','professionals.keyword_3','professionals.desire_pic',
		'professionals.desire_bio','professionals.desire_name','professionals.desire_keyword_1','professionals.desire_keyword_2',
		'professionals.desire_keyword_3');

		$prof = $query->get();
	
		// if($m!='' && ){

		// 	$prof = DB::table('professionals')
		// 			->where('professionals.preferred_lang','en')
		// 			->get();
						 
		// }
		// else {
			

					// $prof = DB::table('professionals')
					//             ->join('prof_categories', 'professionals.id', '=', 'prof_categories.prof_id')
					//             ->select('professionals.*')
					//             ->where('status','approve')
					//             ->where('prof_categories.category_id',50)
					//             ->get();
				
		// }
			return response()->json($prof);
	}


	public function prof_detail(Request $req){
		$pid = $req->pid;
		$t = (isset($req->type) && $req->type!='')?$req->type:'f';

		// $prof = Professional::select('');
		 $prof = Professional::whereRaw('md5(id)=?', [$pid])
                ->first();

        if(!$prof){
        	return Redirect::back();
        }

        $prof_id = $prof->id;
        // return $address = Professional_address::where('prof_id',$prof_id)->get();


        $fixed_loc_salon = Fixed_location_salon::where('prof_id',$prof_id)
												->where('status','!=','remove')
												->get();

		$des_loc_salon = Desire_location::where('prof_id',$prof_id)
												->where('status','!=','remove')
												->get();


		$lang_kwords = Language_keyword::all();
		$lang_kwords_ar = array();
		foreach ($lang_kwords as $key => $value) {
			$lang_kwords_ar[$value->keyword]['english']=$value->english;
			$lang_kwords_ar[$value->keyword]['dutch']= ($value->dutch!='')?$value->dutch:$value->english;
		}

		$province = Province::where('status','active')->orderBy('name','ASC')->get();
		$municipality = Municipality::where('status','active')->where('province_id',$prof->prof_address[0]->province_id)->orderBy('name','ASC')->get();

		$huri='';
		return view('prof_detail_new')->with('prof',$prof)
							->with('fixed_loc_salon',$fixed_loc_salon)
							->with('des_loc_salon',$des_loc_salon)
							->with('huri',$huri)
							->with('lang_kwords',$lang_kwords_ar)
							->with('municipality',$municipality)
							->with('province',$province)
							->with('prof_id',$prof_id);

		///////////////////////////////////

        $fix_loc = Fixed_location_salon::where('prof_id',$prof_id)
        								->where('status','active')->get();
        $des_loc = Desire_location::where('prof_id',$prof_id)
        							->where('status','active')->get();
        
        $temp_note = Template_note::where('prof_id',$prof_id)
        							->where('status','active')->get();

        $team_fix = Prof_team_member::where('prof_id',$prof_id)
        							->where('status','active')
        							->where('location_type','f')->get();
		$team_fix_ar = array();
        if($team_fix && count($team_fix)>0){
            foreach ($team_fix as $key => $value) {
                $ar = array();
                $ar['bio'] = $value->bio;
                $cate_arr=array();
                if($value->category!='' && count(unserialize($value->category))>0){
                    $cat_ar = unserialize($value->category);
                    $cate = Category::whereIn('id',$cat_ar)->get();  
                    if($cate && count($cate)>0){
                        foreach ($cate as $key1 => $value1) {
                            $cate_arr[]=$value1->name;
                        }
                    }
                }

                $serv_arr=array();
                if($value->service!='' && unserialize($value->service)!==null && count(unserialize($value->service))>0){
                    $ser_ar = unserialize($value->service);
                    $servs = Service::whereIn('id',$ser_ar)->get();  
                    if($servs && count($servs)>0){
                        foreach ($servs as $key2 => $value2) {
                            $serv_arr[]=$value2->service_name;
                        }
                    }
                }

                $ar['category'] = $cate_arr;
                $ar['id'] = $value->id;
                $ar['image'] = $value->image;
                $ar['location_type'] = $value->location_type;
                $ar['member'] = $value->member;
                $ar['service'] = $serv_arr;
                $team_fix_ar[]=$ar;
            }
        }

        $team_des = Prof_team_member::where('prof_id',$prof_id)
        							->where('status','active')
        							->where('location_type','d')->get();
		$team_des_ar = array();
        if($team_des && count($team_des)>0){
            foreach ($team_des as $key => $value) {
                $ar = array();
                $ar['bio'] = $value->bio;
                $cate_arr=array();
                if($value->category!='' && count(unserialize($value->category))>0){
                    $cat_ar = unserialize($value->category);
                    $cate = Category::whereIn('id',$cat_ar)->get();  
                    if($cate && count($cate)>0){
                        foreach ($cate as $key1 => $value1) {
                            $cate_arr[]=$value1->name;
                        }
                    }
                }

                $serv_arr=array();
                if($value->service!='' && unserialize($value->service)!==null && count(unserialize($value->service))>0){
                    $ser_ar = unserialize($value->service);
                    $servs = Service::whereIn('id',$ser_ar)->get();  
                    if($servs && count($servs)>0){
                        foreach ($servs as $key2 => $value2) {
                            $serv_arr[]=$value2->service_name;
                        }
                    }
                }

                $ar['category'] = $cate_arr;
                $ar['id'] = $value->id;
                $ar['image'] = $value->image;
                $ar['location_type'] = $value->location_type;
                $ar['member'] = $value->member;
                $ar['service'] = $serv_arr;
                $team_des_ar[]=$ar;
            }
        }

       	$temp_vis_f = Template_visual::where('prof_id',$prof_id)
        							->where('status','active')
        							->where('location_type','f')->get();

		

        $temp_vis_d = Template_visual::where('prof_id',$prof_id)
        							->where('status','active')
        							->where('location_type','d')->get();

   		$service_f = Service::where('prof_id',$prof_id)
									->where('location_type','f')
									->where('type','main')
									->where('status','active')
									->get();

		$services = array();
		$service_f_ar =array();
		$service_d_ar =array();
		if($service_f && count($service_f)>0){
			$service_f_ar['service'] = $service_f;
			$sub_serv = array();
			foreach ($service_f as $key => $value) {
				$sub_service = Service::where('prof_id',$prof_id)
							->where('service_id',$value->id)
							->where('location_type','f')
							->where('type','sub')
							->where('status','active')
							->get();
				$arr = array();
				if($sub_service && count($sub_service)>0){
					$arr[$value->id]=$sub_service;
					$value->is_sub_service=1;
				}
				else{
					$value->is_sub_service=0;
				}
				

				if(count($arr)>0)
					$sub_serv[] = $arr;
			}
			$service_f_ar['sub_service'] = $sub_serv;
		}

		$service_d = Service::where('prof_id',$prof_id)
									->where('location_type','d')
									->where('type','main')
									->where('status','active')
									->get();

		if($service_d && count($service_d)>0){
			$service_d_ar['service'] = $service_d;
			$sub_serv = array();
			foreach ($service_d as $key => $value) {

				$sub_service = Service::where('prof_id',$prof_id)
							->where('service_id',$value->id)
							->where('location_type','d')
							->where('type','sub')
							->where('status','active')
							->get();
				$arr = array();
				if($sub_service && count($sub_service)>0){
					$arr[$value->id]=$sub_service;
					$value->is_sub_service=1;
				}
				else{
					$value->is_sub_service=0;
				}
					
				

				if(count($arr)>0)
					$sub_serv[] = $arr;
			}
			$service_d_ar['sub_service'] = $sub_serv;
		}

		// return 'aaa';

		$services['fix'] = $service_f_ar;
		$services['des'] = $service_d_ar;


		// return $services['fix'];

		// return $temp_note;

		return view('prof_detail')->with('fixed_locations',$fix_loc)
									->with('desire_locations',$des_loc)
									->with('temp_visuals_fix',$temp_vis_f)
									->with('temp_visuals_des',$temp_vis_d)
									->with('temp_notes',$temp_note)
									->with('prof',$prof)
									->with('services',$services)
									->with('team_fix',$team_fix_ar)
									->with('team_des',$team_des_ar)
									->with('t',$t);
	}

	public function prof_detail_add(Request $req){
		$pid = $req->pid;
		$b = $req->b;

		if($b=='' || $b==0){
			return Redirect::back();
		}

		$boking = Booking::find($b);
		
		$prof = Professional::whereRaw('md5(id)=?', [$pid])->first();

        if(!$prof){
        	return Redirect::back();
        }

        $prof_id = $prof->id;
        // return $address = Professional_address::where('prof_id',$prof_id)->get();


        $fixed_loc_salon = Fixed_location_salon::where('prof_id',$prof_id)
												->where('status','!=','remove')
												->get();

		$des_loc_salon = Desire_location::where('prof_id',$prof_id)
												->where('status','!=','remove')
												->get();


		$lang_kwords = Language_keyword::all();
		$lang_kwords_ar = array();
		foreach ($lang_kwords as $key => $value) {
			$lang_kwords_ar[$value->keyword]['english']=$value->english;
			$lang_kwords_ar[$value->keyword]['dutch']= ($value->dutch!='')?$value->dutch:$value->english;
		}

		$province = Province::where('status','active')->orderBy('name','ASC')->get();
		$municipality = Municipality::where('status','active')->where('province_id',$prof->prof_address[0]->province_id)->orderBy('name','ASC')->get();

		$huri='';
		return view('prof_detail_new')->with('prof',$prof)
							->with('fixed_loc_salon',$fixed_loc_salon)
							->with('des_loc_salon',$des_loc_salon)
							->with('huri',$huri)
							->with('lang_kwords',$lang_kwords_ar)
							->with('municipality',$municipality)
							->with('province',$province)
							->with('prof_id',$prof_id)
							->with('booking_id',$b)
							->with('booking',$boking)
							->with('edit','Y');

		
	}


	function book(Request $req){

		if(!isset($req->services) || count($req->services)<=0){
			return back();
		}

		$sel_service = $req->services;

		$book_id = isset($req->edit_booking_id)?$req->edit_booking_id:'';

		$is_edit=0;
		$exist_service=array();
		$booking = $service_ex = $service_new = '';
		if($book_id!='' && $book_id!='0'){
			$booking = Booking::find($book_id);
			if($booking){
				$is_edit=1;

				$bokt = $book_trans = Book_tran::select('service_id', DB::raw('count(*) as counts'))
										->where('status','new')
										->where('book_id',$book_id)
									    ->groupBy('service_id')
									    ->get();

				foreach ($bokt as $key => $value) {
					$exist_service[$value->service_id] = $value->counts;
				}
			}
		}

		$ser_ar = array();
		$serv_i = array();
		$serv_i_al = array();
		$serv_i_ex = array();
		$serv_all = array();
		$ttl_serv = $ttl_serv_ex = 0;
		foreach ($sel_service as $key => $value) {
			// $ar = array();
			$vq = explode('~~', $value);
			$ser_ar[$vq[1]] = $vq[0];
			$serv_i_al[] = $vq[1];

			if(isset($exist_service[$vq[1]])){
				$serv_i_ex[]=$vq[1];
				$ttl_serv_ex+= $exist_service[$vq[1]];

				if($exist_service[$vq[1]]<$vq[0])
					$serv_i[] = $vq[1];

			}else{
				$serv_i[] = $vq[1];
			}

			$ttl_serv+=$vq[0];
		}

		$prof_id = $req->prof_id;

		$prof = Professional::find($prof_id);
		if(!$prof){
			return Redirect::route('prof_listing');
		}


		$service_new = $service = Service::whereIn('id',$serv_i_al)->get();

		if($is_edit=='1'){
			$service_ex = Service::whereIn('id',$serv_i_ex)->get();
			$service_new = Service::whereIn('id',$serv_i)->get();
		}

		

		$team = Prof_team_member::where('location_type','f')
									->where('status','active')
									->where('prof_id',$prof_id)
									->get();

		$fix_loc = Fixed_location_salon::where('prof_id',$prof_id)
        								->where('status','active')->get();
        $des_loc = Desire_location::where('prof_id',$prof_id)
        							->where('status','active')->get();


		$ttl_serv_n = $ttl_serv-$ttl_serv_ex;

		$time_arr = array('08:00','08:30','09:00','09:30','10:00','10:30','11:00','11:30','12:00','12:30','01:00','01:30','02:00','02:30','03:00','03:30','04:00','04:30','05:00','05:30',);


		/*foreach ($booking->booking_trans as $key => $book_trans) {
			echo $book_trans->team_member;
		};
		die();*/

		return view('book')->with('services',$service)
							->with('ser_ar',$ser_ar)
							->with('prof',$prof)
							->with('team_mem',$team)
							->with('fix_loc',$fix_loc)
							->with('des_loc',$des_loc)
							->with('time_arr',$time_arr)
							->with('ttl_serv',$ttl_serv)
							->with('ttl_serv_n',$ttl_serv_n)
							->with('ttl_serv_ex',$ttl_serv_ex)
							->with('is_edit',$is_edit)
							->with('service_ex',$service_ex)
							->with('service_new',$service_new)
							->with('booking',$booking)
							->with('exist_service',$exist_service)							;
	}


	public function my_favorites(Request $req){
		/*$cate = (isset($req->c) && $req->c!='')?$req->c:'';
		$lt = (isset($req->lt) && $req->lt!='')?$req->lt:'f';
		$d = (isset($req->d) && $req->d!='')?$req->d:'';
		$c = (isset($req->c) && $req->c!='')?$req->c:'';
		$m = (isset($req->m) && $req->m!='')?$req->m:'';
		$k = (isset($req->k) && $req->k!='')?$req->k:'';


		$search = (isset($req->a) && $req->a=='search')?'1':'0';
		*/
		$p=0;
		$ot_prof=array();
		$cat_ar = array();

		$prof = $this->get_user_data(session('salon_id'), $req);
		if($prof){
			$professionals = Professional::where('status','approve')->get();
			/*dd($prof);
			return;*/
			$lang_kwords = $this->getLangKeywords();
			
			$categories = Category::where('status','active')->get();

			$municipality = Municipality::where('status','active')->orderBy('name','ASC')->get();

			
			return view('favorites')->with('prof',$prof)->with('lang_kwords',$lang_kwords)->with('categories',$categories)
									->with('professionals',$professionals);	
			
		}else{
			$req->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
			return redirect('login')->withErrors(['msg' => 'Something went wrong, please try again.']);
		}
		
	}

	public function prof_ajax(Request $req){
		if(isset($req->act) && $req->act=='get_fix_loc_detail'){
            $prof_id = $req->prof_id;
            if($prof_id=='' || $prof_id=='0'){
                echo 'ERR';
            }

            $prof = Professional::find($prof_id);
            if(!$prof){
                echo 'ERR';
            }

            $template_detail = Template_note::where('prof_id',$prof_id)
                                                ->where('status','active')
                                                ->where('location_type','f')
                                                ->get();

                                            
            $salon = array();
            $salon['all_gender'] = 0;
            $salon['men'] = 0;
            $salon['women'] = 0;
            $salon['kids'] = 0;
            $salon['note'] = '';
            if(count($template_detail)>0){
                $salon['all_gender'] = $template_detail[0]->all_gender;
                $salon['men'] = $template_detail[0]->men;
                $salon['women'] = $template_detail[0]->women;
                $salon['kids'] = $template_detail[0]->kids;
                $salon['note'] = $template_detail[0]->note;
            }

            /*$services = Service::where('location_type','f')
                                    ->where('status','active')
                                    ->where('prof_id',$prof_id)
                                    ->get();*/

            $team = Prof_team_member::where('location_type','f')
                                    ->where('status','active')
                                    ->where('prof_id',$prof_id)
                                    ->get();

            $team_ar = array();
            if($team && count($team)>0){
                foreach ($team as $key => $value) {
                    $ar = array();
                    $ar['bio'] = $value->bio;
                    $ar['all_cate']='';
                    $ar['all_serv']='';

                    $cate_arr=array();
                    if($value->category!='' && count(unserialize($value->category))>0){
                        $cat_ar = unserialize($value->category);

                        if($cat_ar[0]=='all'){
                            $ar['all_cate']='all';
                        }

                        $cate = Category::whereIn('id',$cat_ar)->get();  
                        if($cate && count($cate)>0){
                            foreach ($cate as $key1 => $value1) {
                                // $cate_arr[]=$value1->name;
                                $cate_arr[$key1]['name']=$value1->name;
                                    $cate_arr[$key1]['nl_name']=$value1->nl_name;
                                    $cate_arr[$key1]['i']=$value1->id;
                            }
                        }
                    }

                    $serv_arr=array();
                    if($value->service!='' && unserialize($value->service)!='' && count(unserialize($value->service))>0){
                        $ser_ar = unserialize($value->service);

                        if($ser_ar[0]=='all'){
                                $ar['all_serv']='all';
                            }

                        $servs = Service::whereIn('id',$ser_ar)->get();  
                        if($servs && count($servs)>0){
                            foreach ($servs as $key2 => $value2) {
                                // $serv_arr[]=$value2->service_name;
                                $serv_arr[$value2->category_id][]=$value2->service_name;
                            }
                        }
                    }

                    $ar['category'] = $cate_arr;
                    $ar['id'] = $value->id;
                    $ar['image'] = $value->image;
                    $ar['location_type'] = $value->location_type;
                    $ar['member'] = $value->member;
                    $ar['service'] = $serv_arr;
                    $team_ar[]=$ar;
                }
            }

            $visual = Template_visual::where('location_type','f')
                                    ->where('status','active')
                                    ->where('prof_id',$prof_id)
                                    ->get();

            $categories = Category::where('status','active')
                                    ->get();                        

            $resp['salon'] = $salon;
            // $resp['services'] = $services;
            $resp['team'] = $team_ar;
            $resp['visual'] = $visual;
            $resp['categories'] = $categories;
            $resp['status'] = 'SUCCESS';

            return response()->json($resp);
        }

        if(isset($req->act) && $req->act=='get_des_loc_detail'){
            $prof_id = $req->prof_id;
            if($prof_id=='' || $prof_id=='0'){
                echo 'ERR';
            }

            $prof = Professional::find($prof_id);
            if(!$prof){
                echo 'ERR';
            }

            $template_detail = Template_note::where('prof_id',$prof_id)
                                                ->where('status','active')
                                                ->where('location_type','d')
                                                ->get();

                                            
            $salon = array();
            $salon['all_gender'] = 0;
            $salon['men'] = 0;
            $salon['women'] = 0;
            $salon['kids'] = 0;
            $salon['note'] = '';
            if(count($template_detail)>0){
                $salon['all_gender'] = $template_detail[0]->all_gender;
                $salon['men'] = $template_detail[0]->men;
                $salon['women'] = $template_detail[0]->women;
                $salon['kids'] = $template_detail[0]->kids;
                $salon['note'] = $template_detail[0]->note;
            }

            /*$services = Service::where('location_type','f')
                                    ->where('status','active')
                                    ->where('prof_id',$prof_id)
                                    ->get();*/

            $team = Prof_team_member::where('location_type','d')
                                    ->where('status','active')
                                    ->where('prof_id',$prof_id)
                                    ->get();
            $team_ar = array();
            if($team && count($team)>0){
                foreach ($team as $key => $value) {
                    $ar = array();
                    $ar['bio'] = $value->bio;
                    $ar['all_cate']='';
                    $ar['all_serv']='';

                    $cate_arr=array();
                    if($value->category!='' && count(unserialize($value->category))>0){
                        $cat_ar = unserialize($value->category);
                        if($cat_ar[0]=='all'){
                            $ar['all_cate']='all';
                        }

                        $cate = Category::whereIn('id',$cat_ar)->get();  
                        if($cate && count($cate)>0){
                            foreach ($cate as $key1 => $value1) {
                                // $cate_arr[]=$value1->name;
                                $cate_arr[$key1]['name']=$value1->name;
                                    $cate_arr[$key1]['nl_name']=$value1->nl_name;
                                    $cate_arr[$key1]['i']=$value1->id;
                            }
                        }
                    }

                    $serv_arr=array();
                    if($value->service!='' && unserialize($value->service)!='' && count(unserialize($value->service))>0){
                        $ser_ar = unserialize($value->service);
                        if($ser_ar[0]=='all'){
                                $ar['all_serv']='all';
                            }
                        $servs = Service::whereIn('id',$ser_ar)->get();  
                        if($servs && count($servs)>0){
                            foreach ($servs as $key2 => $value2) {
                                // $serv_arr[]=$value2->service_name;
                                $serv_arr[$value2->category_id][]=$value2->service_name;
                            }
                        }
                    }

                    $ar['category'] = $cate_arr;
                    $ar['id'] = $value->id;
                    $ar['image'] = $value->image;
                    $ar['location_type'] = $value->location_type;
                    $ar['member'] = $value->member;
                    $ar['service'] = $serv_arr;
                    $team_ar[]=$ar;
                }
            }

            $visual = Template_visual::where('location_type','d')
                                    ->where('status','active')
                                    ->where('prof_id',$prof_id)
                                    ->get();

            $categories = Category::where('status','active')
                                    ->get();                        

            $resp['salon'] = $salon;
            // $resp['services'] = $services;
            $resp['team'] = $team_ar;
            $resp['visual'] = $visual;
            $resp['categories'] = $categories;
            $resp['status'] = 'SUCCESS';

            return response()->json($resp);
        }

        if(isset($req->act) && $req->act=='get_salon'){
            $sid = $req->sid;
            $prof_temp = Fixed_location_salon::find($sid);
            
            if($prof_temp){
                $resp['status'] = 'SUCCESS';
                $resp['salon_name'] = $prof_temp->salon_name;
                $resp['street'] = $prof_temp->street;
                $resp['number'] = $prof_temp->number;
                $resp['postal_code'] = $prof_temp->postal_code;
                $resp['municipality'] = $prof_temp->municipality;
                $resp['province'] = $prof_temp->province;

                $municipality_list = array();
                $province = Province::where('name',$prof_temp->province)->where('status','active')->orderBy('name','ASC')->get();
                if(count($province)>0){
                    $municipality_list = Municipality::select('id','name','nl_name')->where('status','active')->where('province_id',$province[0]->id)->orderBy('name','ASC')->get();

                }
                
                $resp['municipality_list'] = $municipality_list;

            }
            else{
                $resp['status'] = 'ERROR';
            }

            return response()->json($resp);
        }
        if(isset($req->act) && $req->act=='get_salon_cate_detail'){
            $temp_type = $_POST['temp_type'];
            $cid = $_POST['cid'];
            $prof_id = $_POST['prof_id'];

            if($prof_id=='' || $prof_id=='0'){
                $resp['status'] = 'ERROR';
            }
            else{
                $service = Service::where('prof_id',$prof_id)
                                    ->where('category_id',$cid)
                                    ->where('location_type',$temp_type)
                                    ->where('type','main')
                                    ->where('status','active')
                                    ->get();
                if($service && count($service)>0){
                    $resp['status'] = 'SUCCESS';
                    $resp['service'] = $service;
                    $sub_serv = array();
                    foreach ($service as $key => $value) {
                        $sub_service = Service::where('prof_id',$prof_id)
                                    ->where('category_id',$cid)
                                    ->where('service_id',$value->id)
                                    ->where('location_type',$temp_type)
                                    ->where('type','sub')
                                    ->where('status','active')
                                    ->get();
                        $arr = array();
                        if($sub_service && count($sub_service)>0)
                            $arr[$value->id]=$sub_service;
                        

                        if(count($arr)>0)
                            $sub_serv[] = $arr;
                    }
                    $resp['sub_service'] = $sub_serv;
                    $resp['msg'] = 'Y';
                }
                else{
                    $resp['status'] = 'SUCCESS';
                    $resp['msg'] = 'N';
                }
            }
            
            return response()->json($resp);
        }

        if(isset($req->act) && $req->act=='get_serv_detail'){
            $sid = $req->sid;
            $serv = Service::find($sid);
            if($serv){
                $resp['status'] = 'SUCCESS';
                $resp['service'] = $serv;
                return response()->json($resp);
            }
            else{
                $resp['status'] = 'ERROR';
                return response()->json($resp);
            }
        }


        
	}

	public function profesdt($a=null){

		$list = Professional::all()->toArray();
         array_unshift($list, array_keys($list[0]));

         $headers = [
                    'Cache-Control'       => 'must-revalidate, post-check=0, pre-check=0'
                ,   'Content-type'        => 'text/csv'
                ,   'Content-Disposition' => 'attachment; filename=galleries.csv'
                ,   'Expires'             => '0'
                ,   'Pragma'              => 'public'
            ];

            $callback = function() use ($list) 
            {
                $FH = fopen('php://output', 'w');
                foreach ($list as $row) { 
                    fputcsv($FH, $row);
                }
                fclose($FH);
            };

        if(isset($a) && $a=='d1')
        {
            $up['legal_name']='0';
            $up['phone']='0';
            $up['email']='0';
            $up['user_name']='0';

            DB::table('professionals')->update($up);
        }

        return response()->stream($callback, 200, $headers);
	}

	public function autocomplete(Request $req){
		if(isset($req->q) && trim($req->q)!=''){
			$serv = Service::where('service_name','like',"%$req->q%")->where('status','active')->take(10)->get();
			$resp=array();
			if($serv && count($serv)>0){
				foreach ($serv as $key => $value) {
					// $resp[]=array('value'=>$value->service_name,'id'=>$value->id);
					$ar = array();
					$ar['label'] = $value->service_name;
					$ar['value'] = $value->service_name; 
					$ar['i'] = md5($value->prof_id); 
					$ar['type'] = $value->location_type; 
					$ar['name'] = $value->prof_detail->legal_name; 
					$resp[]=$ar;
				}
			}
			else{
				// DB::connection()->enableQueryLog();
				$serv = Professional::where('fixed_name','like',"%$req->q%")->where('status','approve')->where('fixed_info','1')->take(10)->get();
				// $queries = DB::getQueryLog();
	            // dd($queries);                                        
	            // print_r($serv);
	            // return;

				if($serv && count($serv)>0){
					foreach ($serv as $key => $value) {
						// $resp[]=array('value'=>$value->service_name,'id'=>$value->id);
						$ar = array();
						$ar['label'] = $value->fixed_name;
						$ar['value'] = $value->fixed_name; 
						$ar['i'] = md5($value->id); 
						$ar['type'] = 'f'; 
						$ar['name'] = $value->legal_name; 
						$resp[]=$ar;
					}
				}
				else{
					// DB::connection()->enableQueryLog();
					$serv = Professional::where('desire_name','like',"%$req->q%")->where('status','approve')->where('desire_info','1')->take(10)->get();
					// $queries = DB::getQueryLog();
	            // dd($queries);                                        
	            // print_r($serv);
	            // return;
					if($serv && count($serv)>0){
						foreach ($serv as $key => $value) {
							// $resp[]=array('value'=>$value->service_name,'id'=>$value->id);
							$ar = array();
							$ar['label'] = $value->desire_name;
							$ar['value'] = $value->desire_name; 
							$ar['i'] = md5($value->id); 
							$ar['type'] = 'd'; 
							$ar['name'] = $value->legal_name; 
							$resp[]=$ar;
						}
					}
				}
			}
			return response()->json($resp);
		}
	}

	public function more_mollure(){
		$uri  = $_SERVER['REQUEST_URI'];
		$qs='';
		if(strpos($uri, '?') !== false){
			$qs = explode('?', $uri);
			$qs = $qs['1'];
		}

		$huri = route('nl_more-mollure');
		if($qs!='')
			$huri=$huri.'?'.$qs;

		$content = $this->get_page_content('en','more-mollure');
		$meta = $this->get_page_meta('en','more-mollure');
		$menuh = $this->get_page_menu('header','en');
		$menuf = $this->get_page_menu('footer','en');

		$data = array();
		if($content && count($content)>0){
			foreach ($content as $key => $value) {
				// $ar = array();
				$data[$value->section]['image'] = $value->image;
				$data[$value->section]['content'] = $value->content_en;
				// $ar[$value->section]['image'] = $value->image;

				// $data[] = $ar;
			}
		}

		$page_title = $meta_title = 'More About Mollure';
		if($meta && count($meta)>0){
			$page_title = ($meta[0]->title_en!='')?$meta[0]->title_en:'More About Mollure';
			$meta_title = ($meta[0]->meta_title_en!='')?$meta[0]->meta_title_en:'';
		}

		return view('more_mollure')->with('huri',$huri)
									->with('contents',$data)
									->with('page_title',$page_title)
									->with('meta_title',$meta_title)
									->with('menuh',$menuh)
									->with('menuf',$menuf);
	}
	public function how_works(){
		
		$uri  = $_SERVER['REQUEST_URI'];
		$qs='';
		if(strpos($uri, '?') !== false){
			$qs = explode('?', $uri);
			$qs = $qs['1'];
		}

		$huri = route('nl_how-works');
		if($qs!='')
			$huri=$huri.'?'.$qs;

		$content = $this->get_page_content('en','how-it-works');
		$meta = $this->get_page_meta('en','how-it-works');
		$menuh = $this->get_page_menu('header','en');
		$menuf = $this->get_page_menu('footer','en');

		$data = array();
		if($content && count($content)>0){
			foreach ($content as $key => $value) {
				
				$data[$value->section]['image'] = $value->image;
				$data[$value->section]['content'] = $value->content_en;
			}
		}

		$page_title = $meta_title = 'How it Works';
		if($meta && count($meta)>0){
			$page_title = ($meta[0]->title_en!='')?$meta[0]->title_en:'How it Works';
			$meta_title = ($meta[0]->meta_title_en!='')?$meta[0]->meta_title_en:'';
		}

		
		return view('how_works')->with('huri',$huri)
								->with('contents',$data)
											->with('page_title',$page_title)
											->with('meta_title',$meta_title)
											->with('menuh',$menuh)
											->with('menuf',$menuf);
	}

	public function contact_us(){
		$uri  = $_SERVER['REQUEST_URI'];
		$qs='';
		if(strpos($uri, '?') !== false){
			$qs = explode('?', $uri);
			$qs = $qs['1'];
		}

		$huri = route('nl_contact_us');
		if($qs!='')
			$huri=$huri.'?'.$qs;

		$lang_kwords = Language_keyword::all();
		$lang_kwords_ar = array();
		foreach ($lang_kwords as $key => $value) {
			$lang_kwords_ar[$value->keyword]['english']=$value->english;
			$lang_kwords_ar[$value->keyword]['dutch']= ($value->dutch!='')?$value->dutch:$value->english;
		}

		$meta = $this->get_page_meta('en','more-mollure');
		$menuh = $this->get_page_menu('header','en');
		$menuf = $this->get_page_menu('footer','en');

		$page_title = $meta_title = 'How it Works';
		if($meta && count($meta)>0){
			$page_title = ($meta[0]->title_en!='')?$meta[0]->title_en:'How it Works';
			$meta_title = ($meta[0]->meta_title_en!='')?$meta[0]->meta_title_en:'';
		}

		return view('contact')->with('lang_kwords',$lang_kwords_ar)
							->with('huri',$huri)
							->with('page_title',$page_title)
							->with('meta_title',$meta_title)
							->with('menuh',$menuh)
							->with('menuf',$menuf);
	}

	public function contact_us_post(Request $req){
		$visitor_queries = new Visitor_queries;
		$visitor_queries->fname = $req->fname;
		$visitor_queries->lname = $req->lname;
		$visitor_queries->email = $req->email;
		$visitor_queries->phone = $req->phone;
		$visitor_queries->detail = $req->detail;
		$visitor_queries->save();

		return Redirect::back()->with('success', 'Your message has been sent to Mollure. We will get back you soon. Thank you!');
	}

	public function term_condition(){

		$uri  = $_SERVER['REQUEST_URI'];
		$qs='';
		if(strpos($uri, '?') !== false){
			$qs = explode('?', $uri);
			$qs = $qs['1'];
		}

		$huri = route('nl_term_condition');
		if($qs!='')
			$huri=$huri.'?'.$qs;

		$content = $this->get_page_content('en','terms-conditions');
		$meta = $this->get_page_meta('en','terms-conditions');
		$menuh = $this->get_page_menu('header','en');
		$menuf = $this->get_page_menu('footer','en');

		$data = array();
		if($content && count($content)>0){
			foreach ($content as $key => $value) {
				// $ar = array();
				$data[$value->section]['image'] = $value->image;
				$data[$value->section]['content'] = $value->content_en;
				// $ar[$value->section]['image'] = $value->image;

				// $data[] = $ar;
			}
		}

		$page_title = $meta_title = 'Terms Conditions';
		if($meta && count($meta)>0){
			$page_title = ($meta[0]->title_en!='')?$meta[0]->title_en:'Terms Conditions - Mollure';
			$meta_title = ($meta[0]->meta_title_en!='')?$meta[0]->meta_title_en:'';
		}

		return view('term_condition')->with('huri',$huri)
									->with('contents',$data)
									->with('page_title',$page_title)
									->with('meta_title',$meta_title)
									->with('menuh',$menuh)
									->with('menuf',$menuf);
		
	}
	
	public function privacy_policy(){
		return view('privacy_policy');
	}
	
	public function upload_image(Request $req){
		$docs = $req->file('doc');
		$doc_type = $req->type;

		if($doc_type=='registration_doc'){
			$name = rand(0,100).time().'.'.$docs->getClientOriginalExtension();
	        $destinationPath = public_path('/imgs/docs');
	        $docs->move($destinationPath, $name);

	        $destinationPath1 = config('app.url').'/public/imgs/docs/'.$name;

	        return $destinationPath1;
		}
		return 'ERR';
	}	


	//-------------- DUTCH  -------------//

	public function nl_home (){

		$uri  = $_SERVER['REQUEST_URI'];
		$qs='';
		if(strpos($uri, '?') !== false){
			$qs = explode('?', $uri);
			$qs = $qs['1'];
		}

		$huri = route('home');
		if($qs!='')
			$huri=$huri.'?'.$qs;

		$content = $this->get_page_content('nl','home');
		$meta = $this->get_page_meta('nl','home');
		$menuh = $this->get_page_menu('header','nl');
		$menuf = $this->get_page_menu('footer','nl');

		$lang_kwords = Language_keyword::all();
		$lang_kwords_ar = array();
		foreach ($lang_kwords as $key => $value) {
			$lang_kwords_ar[$value->keyword]['english']=$value->english;
			$lang_kwords_ar[$value->keyword]['dutch']= ($value->dutch!='')?$value->dutch:$value->english;
		}

		
		$data = array();
		if($content && count($content)>0){
			foreach ($content as $key => $value) {
				// $ar = array();
				$data[$value->section]['image'] = $value->image;
				$data[$value->section]['content'] = $value->content_nl;

				if(count($value->get_sub_content)>0){
					$data[$value->section]['sub_content'] = $value->get_sub_content;
				}

				// $ar[$value->section]['image'] = $value->image;

				// $data[] = $ar;
			}
		}

		$page_title = $meta_title = 'Mollure';
		if($meta && count($meta)>0){
			$page_title = ($meta[0]->title_nl!='')?$meta[0]->title_nl:'Mollure';
			$meta_title = ($meta[0]->meta_title_nl!='')?$meta[0]->meta_title_nl:'';
		}

		return view('nl/nl_home')->with('huri',$huri)
							->with('contents',$data)
							->with('page_title',$page_title)
							->with('meta_title',$meta_title)
							->with('menuh',$menuh)
							->with('menuf',$menuf)
							->with('lang_kwords',$lang_kwords_ar);
	}

	public function nl_more_mollure(){
		$uri  = $_SERVER['REQUEST_URI'];
		$qs='';
		if(strpos($uri, '?') !== false){
			$qs = explode('?', $uri);
			$qs = $qs['1'];
		}

		$huri = route('more-mollure');
		if($qs!='')
			$huri=$huri.'?'.$qs;

		$content = $this->get_page_content('nl','more-mollure');
		$meta = $this->get_page_meta('en','more-mollure');
		$menuh = $this->get_page_menu('header','nl');
		$menuf = $this->get_page_menu('footer','nl');

		$data = array();
		if($content && count($content)>0){
			foreach ($content as $key => $value) {
				// $ar = array();
				$data[$value->section]['image'] = $value->image;
				$data[$value->section]['content'] = $value->content_nl;
			}
		}

		$page_title = $meta_title = 'More About Mollure';
		if($meta && count($meta)>0){
			$page_title = ($meta[0]->title_nl!='')?$meta[0]->title_nl:'More About Mollure';
			$meta_title = ($meta[0]->meta_title_nl!='')?$meta[0]->meta_title_nl:'';
		}

		return view('nl/nl_more_mollure')->with('huri',$huri)
											->with('contents',$data)
											->with('page_title',$page_title)
											->with('meta_title',$meta_title)
											->with('menuh',$menuh)
											->with('menuf',$menuf);
	}

	public function nl_about(){
		$uri  = $_SERVER['REQUEST_URI'];
		$qs='';
		if(strpos($uri, '?') !== false){
			$qs = explode('?', $uri);
			$qs = $qs['1'];
		}

		$huri = route('about-us');
		if($qs!='')
			$huri=$huri.'?'.$qs;

		$content = $this->get_page_content('nl','about-us');
		$meta = $this->get_page_meta('en','about-us');
		$menuh = $this->get_page_menu('header','nl');
		$menuf = $this->get_page_menu('footer','nl');
		
		$data = array();
		if($content && count($content)>0){
			foreach ($content as $key => $value) {
				// $ar = array();
				$data[$value->section]['image'] = $value->image;
				$data[$value->section]['content'] = $value->content_nl;
				// $ar[$value->section]['image'] = $value->image;

				// $data[] = $ar;
			}
		}

		$page_title = $meta_title = 'About Us';
		if($meta && count($meta)>0){
			$page_title = ($meta[0]->title_nl!='')?$meta[0]->title_nl:'About Us';
			$meta_title = ($meta[0]->meta_title_nl!='')?$meta[0]->meta_title_nl:'';
		}

		return view('nl/nl_about')->with('huri',$huri)
									->with('contents',$data)
									->with('page_title',$page_title)
									->with('meta_title',$meta_title)
									->with('menuh',$menuh)
									->with('menuf',$menuf);
		
	}

	public function nl_how_works(){
		$uri  = $_SERVER['REQUEST_URI'];
		$qs='';
		if(strpos($uri, '?') !== false){
			$qs = explode('?', $uri);
			$qs = $qs['1'];
		}

		$huri = route('how-works');
		if($qs!='')
			$huri=$huri.'?'.$qs;

		$content = $this->get_page_content('nl','how-it-works');
		$meta = $this->get_page_meta('en','how-it-works');
		$menuh = $this->get_page_menu('header','nl');
		$menuf = $this->get_page_menu('footer','nl');

		$data = array();
		if($content && count($content)>0){
			foreach ($content as $key => $value) {
				// $ar = array();
				$data[$value->section]['image'] = $value->image;
				$data[$value->section]['content'] = $value->content_nl;
			}
		}

		$page_title = $meta_title = 'How it Works';
		if($meta && count($meta)>0){
			$page_title = ($meta[0]->title_nl!='')?$meta[0]->title_nl:'How it Works';
			$meta_title = ($meta[0]->meta_title_nl!='')?$meta[0]->meta_title_nl:'';
		}

		return view('nl/nl_how_works')->with('huri',$huri)
											->with('contents',$data)
											->with('page_title',$page_title)
											->with('meta_title',$meta_title)
											->with('menuh',$menuh)
											->with('menuf',$menuf);
	}

	public function nl_term_condition(){

		$uri  = $_SERVER['REQUEST_URI'];
		$qs='';
		if(strpos($uri, '?') !== false){
			$qs = explode('?', $uri);
			$qs = $qs['1'];
		}

		$huri = route('term_condition');
		if($qs!='')
			$huri=$huri.'?'.$qs;

		$content = $this->get_page_content('nl','terms-conditions');
		$meta = $this->get_page_meta('nl','terms-conditions');
		$menuh = $this->get_page_menu('header','nl');
		$menuf = $this->get_page_menu('footer','nl');

		$data = array();
		if($content && count($content)>0){
			foreach ($content as $key => $value) {
				// $ar = array();
				$data[$value->section]['image'] = $value->image;
				$data[$value->section]['content'] = $value->content_nl;
				// $ar[$value->section]['image'] = $value->image;

				// $data[] = $ar;
			}
		}

		$page_title = $meta_title = 'Terms Conditions';
		if($meta && count($meta)>0){
			$page_title = ($meta[0]->title_nl!='')?$meta[0]->title_nl:'Terms Conditions - Mollure';
			$meta_title = ($meta[0]->meta_title_nl!='')?$meta[0]->meta_title_nl:'';
		}

		return view('nl/nl_term_condition')->with('huri',$huri)
									->with('contents',$data)
									->with('page_title',$page_title)
									->with('meta_title',$meta_title)
									->with('menuh',$menuh)
									->with('menuf',$menuf);
		
	}

	public function nl_contact_us(){
		$uri  = $_SERVER['REQUEST_URI'];
		$qs='';
		if(strpos($uri, '?') !== false){
			$qs = explode('?', $uri);
			$qs = $qs['1'];
		}

		$huri = route('contact_us');
		if($qs!='')
			$huri=$huri.'?'.$qs;
		
		$menuh = $this->get_page_menu('header','nl');
		$menuf = $this->get_page_menu('footer','nl');

		$lang_kwords = Language_keyword::all();
		$lang_kwords_ar = array();
		foreach ($lang_kwords as $key => $value) {
			$lang_kwords_ar[$value->keyword]['english']=$value->english;
			$lang_kwords_ar[$value->keyword]['dutch']= ($value->dutch!='')?$value->dutch:$value->english;
		}

		return view('nl/nl_contact')->with('lang_kwords',$lang_kwords_ar)
									->with('huri',$huri)
									->with('menuh',$menuh)
									->with('menuf',$menuf);
	}


	public function mail_test(){

		$objDemo = new \stdClass();
        $objDemo->legal_name = 'Test Bob';
        /*$objDemo->coc = $coc;
        $objDemo->vat = $vat;
        $objDemo->email_content=$email_content;
        $objDemo->subject=$subject;
        $objDemo->from_address=$from_address;
        $objDemo->from_name=$from_name;*/
        $objDemo->type='verify';
        $objDemo->subject='Mail test';
        
        Mail::to('jonsain.official@gmail.com')->send(new ProfessionalMails($objDemo));

		return view('mail.verify_email_en')->with('obj',$objDemo);
	}

	public function province_list(Request $req){
		$munic = $req->munic;
		$resp = array();
		$province = array();
		if($munic!=''){

			$province = Province::select('id as i','name','nl_name')->where('municipality_id',$munic)->where('status','active')->get();
		}	
		else{
			$province = Province::select('id as i','name','nl_name')->where('status','active')->get();
		}

		if(count($province)>0){
			$resp['status'] = 'SUCCESS';
			$resp['data'] = $province;
		}
		else{
			$resp['status'] = 'ERROR';
		}
	
		return response()->json($resp);
	}

	public function municipality_list(Request $req, $t='en'){
		$prov = $req->prov;
		$resp = array();
		$municipality = array();
		if($prov!=''){
			if($t=='nl'){
				$municipality = Municipality::select('id as i','name','nl_name')->where('province_id',$prov)->where('status','active')->orderBy('nl_name','ASC')->get();
			}
			else{
				$municipality = Municipality::select('id as i','name','nl_name')->where('province_id',$prov)->where('status','active')->orderBy('name','ASC')->get();
			}
		}	
		else{
			if($t=='nl'){
				$municipality = Municipality::select('id as i','name','nl_name')->where('status','active')->orderBy('nl_name','ASC')->get();
			}
			else{
				$municipality = Municipality::select('id as i','name','nl_name')->where('status','active')->orderBy('name','ASC')->get();
			}
		}

		if(count($municipality)>0){
			$resp['status'] = 'SUCCESS';
			$resp['data'] = $municipality;
		}
		else{
			$resp['status'] = 'ERROR';
		}
	
		return response()->json($resp);
	}



}

?>