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
use \App\Professional_registration_doc;
use \App\Category;
use \App\Desire_location;
use \App\Template_note;
use \App\Fixed_location_salon;
use \App\Prof_category;
use \App\Language_keyword;

use \App\Nl_desire_location;
use \App\Nl_fixed_location_salon;
use \App\Nl_template_note;
use \App\Nl_service;
use \App\Nl_prof_team_member;
use \App\Email_template;
use \App\Municipality;
use \App\Province;
use \App\Booking;
use \App\Book_tran;
use \App\Photoshoot;
use \App\User_message;
use \App\Booking_edit_request;
use \App\Book_trans_slave;
use \App\Salon_log;
use \App\Team_mem_availability;
use \App\Prof_client;
use \App\Client_note;
use \App\Blocked_Time;

use Mail;
use \App\Mail\ProfessionalMails;
use \App\Mail\ManualMail;

class SalonController extends Controller
{

    public function intersection_register(){
        return view('intersection_register');
    }


    public function intersection_register_nl(){
        return view('intersection_register_nl');
    }



    public function register($user_type){
        $uri  = $_SERVER['REQUEST_URI'];
        $qs='';
        if(strpos($uri, '?') !== false){
            $qs = explode('?', $uri);
            $qs = $qs['1'];
        }

        $huri = url('nl/register').'?'.$qs;

        $lang_kwords = Language_keyword::all();
        $lang_kwords_ar = array();
        foreach ($lang_kwords as $key => $value) {
            $lang_kwords_ar[$value->keyword]['english']=$value->english;
            $lang_kwords_ar[$value->keyword]['dutch']= ($value->dutch!='')?$value->dutch:$value->english;
        }

        $content = $this->get_page_content('en','register');
        $meta = $this->get_page_meta('en','register');
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

        $province = Province::where('status','active')->orderBy('name','ASC')->get();

        if ($user_type == "professional"){
            return view('salon.register')->with('huri',$huri)
                ->with('contents',$data)
                ->with('page_title',$page_title)
                ->with('meta_title',$meta_title)
                ->with('menuh',$menuh)
                ->with('menuf',$menuf)
                ->with('lang_kwords',$lang_kwords_ar)
                ->with('province',$province);
        }elseif ($user_type == "individual"){
            return view('salon.individual_register')->with('huri',$huri)
                ->with('contents',$data)
                ->with('page_title',$page_title)
                ->with('meta_title',$meta_title)
                ->with('menuh',$menuh)
                ->with('menuf',$menuf)
                ->with('lang_kwords',$lang_kwords_ar)
                ->with('province',$province);
        }elseif ($user_type == "company"){
            return view('salon.company_register')->with('huri',$huri)
                ->with('contents',$data)
                ->with('page_title',$page_title)
                ->with('meta_title',$meta_title)
                ->with('menuh',$menuh)
                ->with('menuf',$menuf)
                ->with('lang_kwords',$lang_kwords_ar)
                ->with('province',$province);
        }
    }


    public function register_nl($user_type){
        $uri  = $_SERVER['REQUEST_URI'];
        $qs='';
        if(strpos($uri, '?') !== false){
            $qs = explode('?', $uri);
            $qs = $qs['1'];
        }

        $huri = url('nl_register').'?'.$qs;

        $lang_kwords = Language_keyword::all();
        $lang_kwords_ar = array();
        foreach ($lang_kwords as $key => $value) {
            $lang_kwords_ar[$value->keyword]['english']=$value->english;
            $lang_kwords_ar[$value->keyword]['dutch']= ($value->dutch!='')?$value->dutch:$value->english;
        }

        $content = $this->get_page_content('nl','register');
        $meta = $this->get_page_meta('nl','register');
        $menuh = $this->get_page_menu('header','nl');
        $menuf = $this->get_page_menu('footer','nl');

        $data = array();
        if($content && count($content)>0){
            foreach ($content as $key => $value) {
                // $ar = array();
                $data[$value->section]['image'] = $value->image;
                $data[$value->section]['content'] = $value->content_nl;

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

        $province = Province::where('status','active')->orderBy('name','ASC')->get();

        if ($user_type == "professional"){
            return view('salon.nl.nl_register')->with('huri',$huri)
                ->with('contents',$data)
                ->with('page_title',$page_title)
                ->with('meta_title',$meta_title)
                ->with('menuh',$menuh)
                ->with('menuf',$menuf)
                ->with('lang_kwords',$lang_kwords_ar)
                ->with('province',$province);
        }elseif ($user_type == "individual"){
            return view('salon.nl.nl_individual_register')->with('huri',$huri)
                ->with('contents',$data)
                ->with('page_title',$page_title)
                ->with('meta_title',$meta_title)
                ->with('menuh',$menuh)
                ->with('menuf',$menuf)
                ->with('lang_kwords',$lang_kwords_ar)
                ->with('province',$province);
        }elseif ($user_type == "company"){
            return view('salon.nl.nl_company_register')->with('huri',$huri)
                ->with('contents',$data)
                ->with('page_title',$page_title)
                ->with('meta_title',$meta_title)
                ->with('menuh',$menuh)
                ->with('menuf',$menuf)
                ->with('lang_kwords',$lang_kwords_ar)
                ->with('province',$province);
        }
    }


	public function profile_save(Request $req)
	{
		$legal_name = $req->legal_name;
		$coc = $req->coc;
		$vat = $req->vat;
		$street = $req->street;
		$number = $req->number;
		$postal = $req->postal;
		$municipality = $req->municipality;
		$province = $req->province;
		$municipality_id = $req->municipality_id;
		$province_id = $req->province_id;
		// $registration_docs = $req->file('registration_doc');
		$registration_docs = $req->registration_doc;
		$contact_person_first_name = $req->contact_person_first_name;
		$contact_person_last_name = $req->contact_person_last_name;
		$insta_link = $req->insta_link;
		$facebook_link = $req->facebook_link;
		$youtube_link = $req->youtube_link;
		$email = $req->email;
		$gender = $req->gender;
		$password = $req->password;
		$contact_number = $req->contact_number;
		$preferred_lang = $req->preferred_lang;
		$user_type = $req->user_type;
		$dob = $req->dob;
		$name_for_rating = $req->name_for_rating;

		$chk_p = Professional::where('email',$email)->where('user_type',$user_type)->get();
		if(count($chk_p)>0){
			return 'email';
			//return Redirect::back()->withInput()->withErrors(['msg' => 'Email already exist.']);
		}

		$rnd = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);

		$prof = new Professional;
		$prof->legal_name = isset($legal_name) ? $legal_name : $contact_person_first_name;
		$prof->coc = $coc;
		$prof->vat = $vat;
		$prof->email = $email;
		$prof->user_name = $email;
		// $prof->status = 'approve';
		$prof->password = md5($password);
		$prof->preferred_lang = $preferred_lang;
		$prof->rand_num = $rnd;
		$prof->user_type = $user_type;
		$prof->name_for_rating = $name_for_rating;
		$prof->dob = $dob;
		$prof->save();

		$prof_id = $prof->id;

		$prof_add = new Professional_address;
		$prof_add->prof_id=$prof_id;
		$prof_add->street = $street;
		$prof_add->number = $number;
		$prof_add->postal = $postal;
		$prof_add->municipality = $municipality;
		$prof_add->province = $province;
		$prof_add->contact_person_first_name = $contact_person_first_name;
		$prof_add->contact_person_last_name = $contact_person_last_name;
		$prof_add->gender = $gender;
		$prof_add->contact_number=$contact_number;
		$prof_add->insta_link = $insta_link;
		$prof_add->facebook_link = $facebook_link;
		$prof_add->youtube_link = $youtube_link;
		$prof_add->municipality_id = $municipality_id;
		$prof_add->province_id = $province_id;
		

		/*if($registration_doc!=""){
          $name = time().'.'.$registration_doc->getClientOriginalExtension();
          $destinationPath = public_path('/imgs/docs');
          $registration_doc->move($destinationPath, $name);
          $prof_add->registration_doc=$name;
        }*/
        $prof_add->save();

        if (!empty($registration_docs)){
            foreach ($registration_docs as $key => $registration_doc) {
                /*$name = rand(0,100).time().'.'.$registration_doc->getClientOriginalExtension();
                $destinationPath = public_path('/imgs/docs');
                $registration_doc->move($destinationPath, $name);

                $destinationPath1 = config('app.url').'/public/imgs/docs/'.$name;*/

                $reg_doc = new Professional_registration_doc;
                $reg_doc->doc	 = $registration_doc;
                $reg_doc->prof_id = $prof_id;
                $reg_doc->save();
            }
        }

	    if($preferred_lang=='nl'){
	    	
	    	$lang_kwords  = Language_keyword::select('dutch')->where('keyword','verify-your-email-button')->get();
	    	$email_template = Email_template::where('email_type','verify_email_NL')->get();
	    	$verifybtntext = $lang_kwords[0]['dutch'];
	    }
	    else{
	    	$lang_kwords  = Language_keyword::select('english')->where('keyword','verify-your-email-button')->get();
	    	$email_template = Email_template::where('email_type','verify_email_ENG')->get();
	    	$verifybtntext = $lang_kwords[0]['english'];
	    }

	    $email_content = $email_template[0]->msg;
	    $from_address = $email_template[0]->from_address;
	    $from_name = $email_template[0]->from_name;
	    $subject = $email_template[0]->subject;
	   
	    $st = base64_encode($email."##".$rnd);

	    $verify_btn = '<a href="'.route('verify_email').'?e='.urlencode($email).'&u='.$st.'"><button type="button" style="background: #0d9da3;padding: 10px 27px;font-size: 18px;color: #fff;border: none;">'.$verifybtntext.'</button></a>';

	    $email_content = str_replace('##pro_legal_name##', $legal_name, $email_content);
	    $email_content = str_replace('##pro_email##', $email, $email_content);
	    $email_content = str_replace('##pro_phone##', $contact_number, $email_content);
	    $email_content = str_replace('##pro_coc##', $coc, $email_content);
	    $email_content = str_replace('##pro_vat##', $vat, $email_content);
	    $email_content = str_replace('##email_verify_button##', $verify_btn, $email_content);
	    $email_content = str_replace('##contact_person_first_name##', $contact_person_first_name, $email_content);
        $email_content = str_replace('##contact_person_last_name##', $contact_person_last_name, $email_content);

	    $subject = str_replace('##pro_legal_name##', $legal_name, $subject);
	    $subject = str_replace('##pro_email##', $email, $subject);
	    $subject = str_replace('##pro_phone##', $contact_number, $subject);
	    $subject = str_replace('##pro_coc##', $coc, $subject);
	    $subject = str_replace('##pro_vat##', $vat, $subject);
	    $subject = str_replace('##contact_person_first_name##', $contact_person_first_name, $subject);
        $subject = str_replace('##contact_person_last_name##', $contact_person_last_name, $subject);

	    $objDemo = new \stdClass();
        $objDemo->content=$email_content;
        $objDemo->subject=$subject;
        
        Mail::to($email)->send(new ProfessionalMails($objDemo));

        // return $email_content;
        return 'SUC';

        //return Redirect::back()->withSuccess(['msg' => 'You have registered succefully.']);
        /*session(['salon_login' => '1']);
		session(['salon_name' => $legal_name]);
		session(['salon_id' => $prof_id]);
		session(['salon_email' => $emailemail]);
		
		return redirect()->route('dashboard');*/
	}

	public function verify_email(Request $req){
		$email = isset($req->e)?$req->e:'';
		$us = isset($req->u)?$req->u:'';

		$preferred_lang = 'en';

		if($email=='' || $us==''){
			$type='ERR';
		}
		else{

			$u = base64_decode($us);
			$au = explode('##', $u);
			if(count($au)==2){
				$email = $au[0];
				$rnd = $au[1];

				$prof = Professional::select('id','email','legal_name','coc','vat','phone','email_verified','rand_num','preferred_lang')->where('email',$email)->get();
				if($prof && count($prof)>0){

					if($prof[0]->email_verified=='YES'){
						return redirect()->route('login');
					}

					if($prof[0]->rand_num==$rnd){
						DB::table('professionals')->where('id',$prof[0]->id)->update(['email_verified'=>'YES','rand_num'=>'']);

						$legal_name = $prof[0]->legal_name;
	                    $coc = $prof[0]->coc;
	                    $vat = $prof[0]->vat;
	                    $email = $prof[0]->email;
	                    $contact_number = $prof[0]->prof_address[0]->contact_number;
	                    $contact_person_first_name = $prof[0]->prof_address[0]->contact_person_first_name;
	                    $contact_person_last_name = $prof[0]->prof_address[0]->contact_person_last_name;

	                    $preferred_lang = $prof[0]->preferred_lang;

						if($prof[0]->preferred_lang=='NL')
					    	$email_template = Email_template::where('email_type','emailverified_NL')->get();
					    else
					    	$email_template = Email_template::where('email_type','emailverified_ENG')->get();

					    $email_content = $email_template[0]->msg;
					    $from_address = $email_template[0]->from_address;
					    $from_name = $email_template[0]->from_name;
					    $subject = $email_template[0]->subject;

					    $st = base64_encode($email."##".$rnd);

					    $email_content = str_replace('##pro_legal_name##', $legal_name, $email_content);
					    $email_content = str_replace('##pro_email##', $email, $email_content);
					    $email_content = str_replace('##pro_phone##', $contact_number, $email_content);
					    $email_content = str_replace('##pro_coc##', $coc, $email_content);
					    $email_content = str_replace('##pro_vat##', $vat, $email_content);
					    $email_content = str_replace('##contact_person_first_name##', $contact_person_first_name, $email_content);
                        $email_content = str_replace('##contact_person_last_name##', $contact_person_last_name, $email_content);

					    $subject = str_replace('##pro_legal_name##', $legal_name, $subject);
					    $subject = str_replace('##pro_email##', $email, $subject);
					    $subject = str_replace('##pro_phone##', $contact_number, $subject);
					    $subject = str_replace('##pro_coc##', $coc, $subject);
					    $subject = str_replace('##pro_vat##', $vat, $subject);
					    $subject = str_replace('##contact_person_first_name##', $contact_person_first_name, $subject);
                        $subject = str_replace('##contact_person_last_name##', $contact_person_last_name, $subject);

					    $objDemo = new \stdClass();
				        $objDemo->content=$email_content;
				        $objDemo->subject=$subject;
				        
				        Mail::to($email)->send(new ProfessionalMails($objDemo));


						$type='SUC';
					}
					else{
						$type='ERR';
					}
				}
				else{
					$type='ERR';
				}
			}
			else{
				$type='ERR';
			}
		}

		if($preferred_lang=='nl'){
			$content = $this->get_page_content('nl','verify_email');
			$meta = $this->get_page_meta('nl','verify_email');
			$menuh = $this->get_page_menu('header','nl');
			$menuf = $this->get_page_menu('footer','nl');

			$data = array();
			if($content && count($content)>0){
				foreach ($content as $key => $value) {
					$data[$value->section]['image'] = $value->image;
					$data[$value->section]['content'] = $value->content_nl;

					if(count($value->get_sub_content)>0){
						$data[$value->section]['sub_content'] = $value->get_sub_content;
					}
				}
			}

			$page_title = $meta_title = 'Mollure';
			if($meta && count($meta)>0){
				$page_title = ($meta[0]->title_nl!='')?$meta[0]->title_nl:'Mollure';
				$meta_title = ($meta[0]->meta_title_nl!='')?$meta[0]->meta_title_nl:'';
			}
		}
		else{
			$content = $this->get_page_content('en','verify_email');
			$meta = $this->get_page_meta('en','verify_email');
			$menuh = $this->get_page_menu('header','en');
			$menuf = $this->get_page_menu('footer','en');

			$data = array();
			if($content && count($content)>0){
				foreach ($content as $key => $value) {
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
		}

		

		return view('salon.verify_email')->with('email',$email)
							->with('status',$type)
							->with('contents',$data)
							->with('page_title',$page_title)
							->with('meta_title',$meta_title)
							->with('menuh',$menuh)
							->with('menuf',$menuf);
	}

	public function login(Request $request){
		if ($request->session()->has('salon_login') && $request->session()->get('salon_login')=='1') {
			$prof_id = session('salon_id');
			if($prof_id=='' || $prof_id=='0'){
				$request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
				return redirect('login');
			}

			$prof = Professional::find($prof_id);

			if($prof){
				return redirect()->route('dashboard');
			}
			else{
				$request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
				return redirect('login');
			}
		}
		else{

			$lang_kwords = Language_keyword::all();
			$lang_kwords_ar = array();
			foreach ($lang_kwords as $key => $value) {
				$lang_kwords_ar[$value->keyword]['english']=$value->english;
				$lang_kwords_ar[$value->keyword]['dutch']= ($value->dutch!='')?$value->dutch:$value->english;
			}

			$content = $this->get_page_content('en','login');
			$meta = $this->get_page_meta('en','login');
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

			$uri  = $_SERVER['REQUEST_URI'];
			$qs='';
			if(strpos($uri, '?') !== false){
				$qs = explode('?', $uri);
				$qs = $qs['1'];
			}

			$huri = route('nl_login');
			if($qs!='')
				$huri=$huri.'?'.$qs;

			
			$request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);

			return view('salon.login')->with('huri',$huri)
							->with('contents',$data)
							->with('page_title',$page_title)
							->with('meta_title',$meta_title)
							->with('menuh',$menuh)
							->with('menuf',$menuf)
							->with('lang_kwords',$lang_kwords_ar);

			
			// return view('salon.login');
		}
	}

	public function login_post(Request $req){
		$email = $req->email;
		$password = $req->password;

		$prof = Professional::where('email',$email)
							->where('password',md5($password))
							->where('status','!=','remove')
							->where('status','!=','hold')
							->where('email_verified','YES');
		if (!empty($req->user_type)){
            $prof = $prof->where('user_type',$req->user_type);
        }
        $prof = $prof->get();


		if(count($prof)>0){
            if(count($prof)>1){
                return view("intersection_login",compact("prof","email","password"));
            }else{
                session(['salon_login' => '1']);
                session(['salon_name' => $prof[0]->legal_name]);
                session(['salon_id' => $prof[0]->id]);
                session(['salon_email' => $prof[0]->email]);
                $curr_time=Carbon::now();

                DB::table('professionals')->where('id',$prof[0]->id)->update(['last_login'=>$curr_time]);
                return redirect()->route('dashboard');
            }
		}
		else{
			return Redirect::back()->withInput()->withErrors(['msg' => 'Please check email and password.']);
		}
	}

	public function logout(Request $request){
		$request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
			return redirect('login');
	}

	public function dashboard_o(Request $req)
	{
		$prof_id = session('salon_id');
		if($prof_id=='' || $prof_id=='0'){
			$request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
			return redirect('login');
		}

		$prof = Professional::find($prof_id);

		if($prof){

			$fixed_loc_salon = Professional_template::where('type','f')
												->where('prof_id',$prof_id)
												->where('status','!=','remove')
												->get();

			return view('salon.dashboard')->with('prof',$prof)->with('fixed_loc_salon',$fixed_loc_salon);
		}
		else{
			$request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
			return redirect('login')->withErrors(['msg' => 'Something went wrong, please try again.']);
		}
	}

	public function dashboard(Request $req)
	{
		$prof_id = session('salon_id');
		if($prof_id=='' || $prof_id=='0'){
			$request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
			return redirect('login');
		}


		$prof = Professional::find($prof_id);
		
		if($prof){

			$fixed_loc_salon = Fixed_location_salon::where('prof_id',$prof_id)
												->where('status','!=','remove')
												->get();

			$des_loc_salon = Desire_location::where('prof_id',$prof_id)
												->where('status','!=','remove')
												->get();


			$uri  = $_SERVER['REQUEST_URI'];
			$qs='';
			if(strpos($uri, '?') !== false){
				$qs = explode('?', $uri);
				$qs = $qs['1'];
			}

			$huri = route('nl_dashboard').'?'.$qs;


			$lang_kwords = Language_keyword::all();
			$lang_kwords_ar = array();
			foreach ($lang_kwords as $key => $value) {
				$lang_kwords_ar[$value->keyword]['english']=$value->english;
				$lang_kwords_ar[$value->keyword]['dutch']= ($value->dutch!='')?$value->dutch:$value->english;
			}

			$province = Province::where('status','active')->orderBy('name','ASC')->get();
			$municipality = Municipality::where('status','active')->where('province_id',$prof->prof_address[0]->province_id)->orderBy('name','ASC')->get();
			// $all_municipality = Municipality::where('status','active')->get();
		  

			// dd($des_loc_salon);
			return view('salon.profile')->with('prof',$prof)
							->with('fixed_loc_salon',$fixed_loc_salon)
							->with('des_loc_salon',$des_loc_salon)
							->with('huri',$huri)
							->with('lang_kwords',$lang_kwords_ar)
							->with('municipality',$municipality)
							->with('province',$province);
							// ->with('all_municipality',$all_municipality);
		}
		else{
			$request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
			return redirect('login')->withErrors(['msg' => 'Something went wrong, please try again.']);
		}
	}

	public function password_update(Request $req){
        $legal_name = $req->legal_name;
        $coc = $req->coc;
        $vat = $req->vat;
		$contact_person_first_name = $req->contact_person_first_name;
		$contact_person_last_name = $req->contact_person_last_name;
		$contact_number = $req->contact_number;
        $street = $req->street;
        $number = $req->number;
        $postal = $req->postal;
        $gender = $req->gender;
        $dob = $req->dob;
        $municipality = $req->municipality;
        $name_for_rating = $req->name_for_rating;
        $province = $req->province;
        $insta_link = $req->insta_link;
        $facebook_link = $req->facebook_link;
        $youtube_link = $req->youtube_link;

		$prof_id = session('salon_id');
		if($prof_id=='' || $prof_id=='0'){
			$request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
			return redirect('login');
		}

		$prof = Professional::find($prof_id);
		if(!$prof){
			$request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
			return redirect('login')->withErrors(['msg' => 'Something went wrong, please try again.']);
		}
        isset($legal_name) ? $prof->legal_name = $legal_name : '';
        isset($coc) ? $prof->coc = $coc : '';
        isset($vat) ? $prof->vat = $vat : '';
        isset($name_for_rating) ? $prof->name_for_rating = $name_for_rating : '';
        isset($dob) ? $prof->dob = $dob : '';

		if($req->upty=='p'){
			$password = $req->password;
			$prof->password = md5($password);
		}
//        dd($prof,$name_for_rating,$req->all());
        $prof->update();

		$prof_add = Professional_address::where('prof_id',$prof_id)->first();
		isset($contact_person_first_name) ? $prof_add->contact_person_first_name = $contact_person_first_name : '';
		isset($contact_person_last_name) ? $prof_add->contact_person_last_name = $contact_person_last_name : '';
		isset($contact_number) ? $prof_add->contact_number=$contact_number : '';
        isset($street) ? $prof_add->street = $street : '';
        isset($number) ? $prof_add->number = $number : '';
        isset($postal) ? $prof_add->postal = $postal : '';
        isset($municipality) ? $prof_add->municipality = $municipality : '';
        isset($province) ? $prof_add->province = $province : '';
        isset($gender) ? $prof_add->gender = $gender : '';
        isset($insta_link) ? $prof_add->insta_link = $insta_link : '';
        isset($facebook_link) ? $prof_add->facebook_link = $facebook_link : '';
        isset($youtube_link) ? $prof_add->youtube_link = $youtube_link : '';
		$prof_add->update();

		return Redirect::back()->withSuccess(['msg' => 'Detail_Updated']);
	}

	public function dashboard_update(Request $req){
		$legal_name = $req->legal_name;
		$coc = $req->coc;
		$vat = $req->vat;
		$street = $req->street;
		$number = $req->number;
		$postal = $req->postal;
		$municipality = $req->municipality;
		$province = $req->province;
		$municipality_id = $req->municipality_id;
		$province_id = $req->province_id;
		$registration_doc = $req->file('registration_doc');
		$contact_person_first_name = $req->contact_person_first_name;
		$contact_person_last_name = $req->contact_person_last_name;
		$insta_link = $req->insta_link;
		$facebook_link = $req->facebook_link;
		$youtube_link = $req->youtube_link;
		$email = $req->email;
		$gender = $req->gender;
		$password = $req->password;
		$contact_number = $req->contact_number;
		
		$prof_id = session('salon_id');
		if($prof_id=='' || $prof_id=='0'){
			$request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
			return redirect('login');
		}

		$prof = Professional::find($prof_id);
		if(!$prof){
			$request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
			return redirect('login')->withErrors(['msg' => 'Something went wrong, please try again.']);
		}
		
		if($password!=''){
			$prof->password = md5($password);
			$prof->update();
		}

		/*$prof->legal_name = $legal_name;
		$prof->coc = $coc;
		$prof->vat = $vat;
		$prof->update();*/

		$prof_add = Professional_address::where('prof_id',$prof_id)->first();
		/*$prof_add->street = $street;
		$prof_add->number = $number;
		$prof_add->postal = $postal;
		$prof_add->municipality = $municipality;
		$prof_add->province = $province;
		$prof_add->municipality_id = $municipality_id;
		$prof_add->province_id = $province_id;*/
		$prof_add->contact_person_first_name = $contact_person_first_name;
		$prof_add->contact_person_last_name = $contact_person_last_name;
		// $prof_add->gender = $gender;
		$prof_add->contact_number=$contact_number;
		/*$prof_add->insta_link = $insta_link;
		$prof_add->facebook_link = $facebook_link;
		$prof_add->youtube_link = $youtube_link;*/

		/*if($registration_doc!=""){
          $name = time().'.'.$registration_doc->getClientOriginalExtension();
          $destinationPath = public_path('/imgs/docs');
          $registration_doc->move($destinationPath, $name);
          $prof_add->registration_doc=$name;
        }*/
        $prof_add->update();

        return Redirect::back()->withSuccess(['msg' => 'Detail_Updated']);

	}

	public function fixed_location_update(Request $req){
		$fixed_name = $req->fixed_name;
		$fixed_bio = $req->fixed_bio;
		$fixed_pic = $req->file('fixed_pic');

		$prof_id = session('salon_id');
		if($prof_id=='' || $prof_id=='0'){
			echo 'ERR';
		}

		$prof = Professional::find($prof_id);
		if(!$prof){
			echo 'ERR';
		}

		if($fixed_pic!=""){
          $name = time().'.'.$fixed_pic->getClientOriginalExtension();
          $destinationPath = public_path('/imgs/template');
          $fixed_pic->move($destinationPath, $name);
          $prof->fixed_pic=$name;
        }

        $prof->keyword_1 = $req->keyword_1;
        $prof->keyword_2 = $req->keyword_2;
        $prof->keyword_3 = $req->keyword_3;
        $prof->fixed_bio = $fixed_bio;
        $prof->fixed_name = $fixed_name;
        $prof->update();

        echo 'SUC';

	}

	public function salon_add(Request $req){
		$salon_name = $req->salon_name;
		$street = $req->street;
		$number = $req->number;
		$postal_code = $req->postal_code;
		$municipality = $req->municipality;
		$province = $req->province;
		$type = $req->type;
		$act = $req->act;

		if($act=='update'){
			$sid=$req->sid;
			$prof_temp = Fixed_location_salon::find($sid);
			$prof_temp->salon_name = $salon_name;
			$prof_temp->street = $street;
			$prof_temp->number = $number;
			$prof_temp->postal_code = $postal_code;
			$prof_temp->municipality = $municipality;
			$prof_temp->province = $province;
			$prof_temp->update();

		}else{

			$prof_id = session('salon_id');
			if($prof_id=='' || $prof_id=='0'){
				echo 'ERR';
			}

			$prof = Professional::find($prof_id);
			if(!$prof){
				echo 'ERR';
			}

			$prof_temp = new Fixed_location_salon;
			$prof_temp->prof_id = $prof_id;
			$prof_temp->salon_name = $salon_name;
			$prof_temp->street = $street;
			$prof_temp->number = $number;
			$prof_temp->postal_code = $postal_code;
			$prof_temp->municipality = $municipality;
			$prof_temp->province = $province;
			$prof_temp->save();
		}

		echo 'SUC';
	}

	public function salon_ajx(Request $req){
		$resp = array();

		if(isset($req->act) && $req->act=='info_verify'){
			$prof_id = session('salon_id');
			if($prof_id=='' || $prof_id=='0'){
				$resp['status'] = 'ERROR';
			}

			$prof = Professional::find($prof_id);
			if(!$prof){
				$resp['status'] = 'ERROR';
			}
			$temp_type = $req->temp_type;
			if($temp_type=='f')
				$prof->fixed_info='0';
			else
				$prof->desire_info='0';
			$prof->update();
			$resp['status'] = 'SUCCESS';
			return response()->json($resp);
		}

		if(isset($req->act) && $req->act=='get_salon'){
			$sid = $req->sid;
			$prof_temp = Fixed_location_salon::find($sid);
			$lt = isset($req->lt)?$req->lt:'';
			
			if($prof_temp){
				$resp['status'] = 'SUCCESS';
				$resp['salon_name'] = $prof_temp->salon_name;
				$resp['street'] = $prof_temp->street;
				$resp['number'] = $prof_temp->number;
				$resp['postal_code'] = $prof_temp->postal_code;
				$resp['municipality'] = $prof_temp->municipality;
				$resp['province'] = $prof_temp->province;

				$municipality_list = array();

				$spr = $prof_temp->province;


				$province = Province::where('status','active')
										->where(function($query) use ($spr){
									        $query->where('name', $spr);
									        $query->orWhere('nl_name', $spr);
									    })
										->orderBy('name','ASC')->get();

				

				if(count($province)>0){
					if($lt=='nl')
						$municipality_list = Municipality::select('id','name','nl_name')->where('status','active')->where('province_id',$province[0]->id)->orderBy('nl_name','ASC')->get();
					else
						$municipality_list = Municipality::select('id','name','nl_name')->where('status','active')->where('province_id',$province[0]->id)->orderBy('name','ASC')->get();

				}
				
				$resp['municipality_list'] = $municipality_list;
			}
			else{
				$resp['status'] = 'ERROR';
			}

			return response()->json($resp);
		}

		if(isset($req->act) && $req->act=='delete_salon'){
			$sid = $req->sid;
			$prof_temp = Fixed_location_salon::find($sid);
			
			if($prof_temp){
				$prof_temp->status='remove';
				$prof_temp->update();
				$resp['status'] = 'SUCCESS';
			}
			else{
				$resp['status'] = 'ERROR';
			}
			return response()->json($resp);
		}

		if(isset($req->act) && $req->act=='delete_des_location'){
            $sid = $req->sid;
            $prof_temp = Desire_location::find($sid);
            
            if($prof_temp){
                $prof_temp->status='remove';
                $prof_temp->update();
                $resp['status'] = 'SUCCESS';
            }
            else{
                $resp['status'] = 'ERROR';
            }
            return response()->json($resp);
        }

		if(isset($req->act) && $req->act=='get_fix_loc_detail'){
			$prof_id = session('salon_id');
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
                        if($value->category!='' && unserialize($value->category)!='' && count(unserialize($value->category))>0){
                            $cat_ar = unserialize($value->category);
                            if($cat_ar[0]=='all'){
                            	$ar['all_cate']='all';
                            }
                            $cate = Category::whereIn('id',$cat_ar)->get();  
                            if($cate && count($cate)>0){
                                foreach ($cate as $key1 => $value1) {
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
                                    $serv_arr[$value2->category_id][]=$value2->service_name;
                                    // $serv_arr[$key2]['c']=$value2->category_id;
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
			$prof_id = session('salon_id');
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
                        if($value->service!='' && unserialize($value->service)!==null && count(unserialize($value->service))>0){
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

		/*if(isset($req->act) && $req->act=='get_salon_detail'){
			$sid = $req->sid;
			$prof_temp = Professional_template::find($sid);
			if($prof_temp){
				$salon = array();
				$salon['all_gender'] = $prof_temp->all_gender;
				$salon['men'] = $prof_temp->men;
				$salon['women'] = $prof_temp->women;
				$salon['kids'] = $prof_temp->kids;
				$salon['note'] = $prof_temp->note;

				$services = Service::where('template_id',$sid)
										->where('status','active')
										->get();

				$team = Prof_team_member::where('template_id',$sid)
										->where('status','active')
										->get();

				$visual = Template_visual::where('template_id',$sid)
										->where('status','active')
										->get();

				$categories = Category::where('status','active')
										->get();						

				$resp['salon'] = $salon;
				$resp['services'] = $services;
				$resp['team'] = $team;
				$resp['visual'] = $visual;
				$resp['categories'] = $categories;
				$resp['status'] = 'SUCCESS';

			}
			else{
				$resp['status'] = 'ERROR';
			}

			return response()->json($resp);
		}*/

		if(isset($req->act) && $req->act=='get_salon_cate_detail'){
			$temp_type = $_POST['temp_type'];
			$cid = $_POST['cid'];

			$prof_id = session('salon_id');
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

		if(isset($req->act) && $req->act=='save_service'){
			$payload = $req->payload;
			$temp_type = $payload['temp_type'];
			$category_id = $payload['category_id'];
			$type = $payload['type'];
			$service_id = $payload['service_id'];
			$service_name = $payload['service_name'];
			$duration = $payload['duration'];
			$price_type = $payload['price_type'];
			$price = $payload['price'];
			$discount = $payload['discount'];
			$discount_amt = $payload['discount_amt'];
			$discount_type = $payload['discount_type'];
			$discount_valid_from = $payload['discount_valid_from'];
			$discount_valid_to = $payload['discount_valid_to'];
			$discount_info = $payload['discount_info'];
			$additional_info = $payload['additional_info'];

			$prof_id = session('salon_id');
			if($prof_id=='' || $prof_id=='0'){
				$resp['status'] = 'ERROR';
				$resp['msg'] = 'login';
				return response()->json($resp);
			}

			$prof = Professional::find($prof_id);
			if(!$prof){
				$resp['status'] = 'ERROR';
				$resp['msg'] = 'login';
				return response()->json($resp);
			}

			if(trim($category_id)=='' || trim($category_id)=='0' || trim($service_name)=='' || trim($price)==''){
				$resp['status'] = 'ERROR';
				return response()->json($resp);
			}

			$serv = new Service;
			$serv->prof_id = $prof_id;
			$serv->location_type = $temp_type;
			$serv->category_id = $category_id;
			$serv->type = $type;
			if($type=='sub'){
				$mainService = Service::find($service_id);
				$mainPrice = $mainService->price;
				$mainDuration = explode(' - ', $mainService->duration);
				$subDuration = explode(' - ', $duration);
				$mainStartHour = intval($mainDuration[0]);
				$mainLastHour = isset($mainDuration[1]) ? intval($mainDuration[1]) : null;
				$subStartHour = intval($subDuration[0]);
				$subLastHour = isset($subDuration[1]) ? intval($subDuration[1]) : null;

				if ($mainLastHour === null) {
					if ($subLastHour !== null && ($subLastHour > $mainStartHour || $subStartHour > $subLastHour)) {
						$resp['status'] = 'ERROR';
						$resp['msg'] = 'Sub-service duration cannot exceed the range of the main service duration.';
						return response()->json($resp);
					} elseif ($subLastHour === null && ($subStartHour > $mainStartHour)) {
						$resp['status'] = 'ERROR';
						$resp['msg'] = 'Sub-service start hour must be equal to or greater than the main service start hour.';
						return response()->json($resp);
					}
				} else {
					if ($subLastHour !== null && ($subStartHour < $mainStartHour || $subLastHour > $mainLastHour)) {
						$resp['status'] = 'ERROR';
						$resp['msg'] = 'Sub-service duration cannot exceed the range of the main service duration.';
						return response()->json($resp);
					} elseif ($subLastHour === null && ($subStartHour < $mainStartHour || $subStartHour > $mainLastHour)) {
						$resp['status'] = 'ERROR';
						$resp['msg'] = 'Sub-service duration cannot exceed the range of the main service duration.';
						return response()->json($resp);
					}
				}
				if($price < $mainPrice){
					$resp['status'] = 'ERROR';
					$resp['msg'] = 'Sub-service price cannot be less than the main service price.';
					return response()->json($resp);
				}
				$serv->service_id = $service_id;
			}
			$serv->service_name = $service_name;
			$serv->duration = $duration;
			$serv->price_type = $price_type;
			$serv->price = $price;
			$serv->discount = $discount;
			if($discount=='1'){
				$serv->discount_type = $discount_type;
				$serv->discount_amount = $discount_amt;
				$serv->discount_valid_from = $discount_valid_from;
				$serv->discount_valid_to = $discount_valid_to;
			}
			else{
				$serv->discount_amount = '';
				$serv->discount_valid_from = '';
				$serv->discount_valid_to = '';
			}

			$serv->discount_info = $discount_info;
			$serv->additional_info = $additional_info;
			$serv->save();
            if ($type == "sub"){
                $servs = Service::find($serv->service_id);
                $servs->price_type = 's';
                $servs->update();
            }
			$this->set_prof_cate($prof_id);

			$resp['status'] = 'SUCCESS';
			$resp['i'] = $serv->id;
			return response()->json($resp);
		}

		if(isset($req->act) && $req->act=='update_service'){
			$payload = $req->payload;
			// $template_id = $payload['template_id'];
			$sid =  $req->sid;
			$category_id = $payload['category_id'];
			$type = $payload['type'];
			$service_id = $payload['service_id'];
			$service_name = $payload['service_name'];
			$duration = $payload['duration'];
			$price_type = $payload['price_type'];
			$price = $payload['price'];
			$discount = $payload['discount'];
			$discount_amt = $payload['discount_amt'];
			$discount_type = $payload['discount_type'];
			$discount_valid_from = $payload['discount_valid_from'];
			$discount_valid_to = $payload['discount_valid_to'];
			$discount_info = $payload['discount_info'];
			$additional_info = $payload['additional_info'];

			if($sid=='' || $sid=='0'){
				$resp['status'] = 'ERROR';
				$resp['msg'] = 'Service not exist';
				return response()->json($resp);
			}

			$serv = Service::find($sid);
            $chk_type = $serv->type;
			if(!$serv){
				$resp['status'] = 'ERROR';
				$resp['msg'] = 'Service not found';
				return response()->json($resp);
			}

			$serv->service_name = $service_name;
			$serv->duration = $duration;
			$serv->price_type = $price_type;
			$serv->price = $price;
			$serv->discount = $discount;
			if($discount=='1'){
				$serv->discount_type = $discount_type;
				$serv->discount_amount = $discount_amt;
				$serv->discount_valid_from = $discount_valid_from;
				$serv->discount_valid_to = $discount_valid_to;
			}
			else{
				$serv->discount_type = '';
				$serv->discount_amount = '';
				$serv->discount_valid_from = '';
				$serv->discount_valid_to = '';
			}

			$serv->discount_info = $discount_info;
			$serv->additional_info = $additional_info;
			$serv->update();


			if ($chk_type == "sub"){
                $servs = Service::find($serv->service_id);
                $servs->price_type = 's';
                $servs->update();
            }


			$this->set_prof_cate($serv->prof_id);

			$resp['status'] = 'SUCCESS';
			$resp['i'] = $serv->id;
			return response()->json($resp);
		}

		if(isset($req->act) && $req->act=='remove_service'){
			$sid = (isset($req->sid) && $req->sid!='')?$req->sid:'';
			if($sid!=''){

				$prof_id = session('salon_id');
				if($prof_id=='' || $prof_id=='0'){
					$resp['status'] = 'ERROR';
					$resp['msg'] = 'login';
					return response()->json($resp);
				}

				$prof = Professional::find($prof_id);
				if(!$prof){
					$resp['status'] = 'ERROR';
					$resp['msg'] = 'login';
					return response()->json($resp);
				}

				// DB::table('services')->where('id', $sid)->delete();

				Service::where('id', $sid)->update(['status' => 'remove']);

				$this->set_prof_cate($prof_id);

				$resp['status'] = 'SUCCESS';
				return response()->json($resp);
			}
			else{
				$resp['status'] = 'ERROR';
				return response()->json($resp);
			}
		}

        if(isset($req->act) && $req->act=='clear_all'){
            $prof_id = session('salon_id');
            $temp_type=$req->temp_type;
            if($prof_id=='' || $prof_id=='0'){
                $resp['status'] = 'ERROR';
                $resp['msg'] = 'login';
                return response()->json($resp);
            }

            $prof = Professional::find($prof_id);
            if(!$prof){
                $resp['status'] = 'ERROR';
                $resp['msg'] = 'login';
                return response()->json($resp);
            }
            if ($req->type == "f"){
				 $prof->update(["status" => "remove"]);
                // $prof->update(["fixed_name" => null,"fixed_bio" => null,"fixed_pic" => null,"keyword_1" => null,"keyword_2" => null,"keyword_3" => null]);
                Fixed_location_salon::where("prof_id",$prof_id)->where("status","active")->update(["status" => "remove"]);
                DB::table('template_details')->where('prof_id',$prof_id)->where("location_type","f")->where("status","active")->update(["status" => "remove"]);
                DB::table('services')->where('prof_id',$prof_id)->where("location_type","f")->where("status","active")->update(["status" => "remove"]);
                DB::table('prof_team_members')->where('prof_id',$prof_id)->where("location_type","f")->where("status","active")->update(["status" => "remove"]);
                DB::table('template_visuals')->where('prof_id',$prof_id)->where("location_type","f")->where("status","active")->update(["status" => "remove"]);
				
            }else{
			    
				$prof->update(["status" => "remove"]);
                // $prof->update(["desire_name" => null,"desire_bio" => null,"desire_pic" => null,"desire_keyword_1" => null,"desire_keyword_2" => null,"desire_keyword_3" => null]);
                Desire_location::where("prof_id",$prof_id)->where("status","active")->update(["status" => "remove"]);
                DB::table('template_details')->where('prof_id',$prof_id)->where("location_type","d")->where("status","active")->update(["status" => "remove"]);
                DB::table('services')->where('prof_id',$prof_id)->where("location_type","d")->where("status","active")->update(["status" => "remove"]);
                DB::table('prof_team_members')->where('prof_id',$prof_id)->where("location_type","d")->where("status","active")->update(["status" => "remove"]);
                DB::table('template_visuals')->where('prof_id',$prof_id)->where("location_type","d")->where("status","active")->update(["status" => "remove"]);
            }
            $resp['status'] = 'SUCCESS';
            return response()->json($resp);
        }

		if(isset($req->act) && $req->act=='add_gen_note'){
			$tmp_type = $req->tmp_type;
			$note = $req->note;
			if($tmp_type!=''){
				$prof_id = session('salon_id');
				if($prof_id=='' || $prof_id=='0'){
					$resp['status'] = 'ERROR';
					$resp['msg'] = 'login';
					return response()->json($resp);
				}
				
				$temp = Template_note::where('location_type',$tmp_type)
									->where('prof_id',$prof_id)
									->where('status','active')
									->get();
				if(count($temp)>0)	{
					DB::table('template_details')->where('id',$temp[0]->id)
					->update([
						'note'=>$note,
						]);
				}else{
					$temp = new Template_note;
					$temp->prof_id = $prof_id;
					$temp->note = $note;
					$temp->save();
				}
				$resp['status'] = 'SUCCESS';
				
			}
			else{
				$resp['status'] = 'ERROR';
			}
			return response()->json($resp);
		}
		if(isset($req->act) && $req->act=='add_team_member'){
			$tmp_type = $req->tmp_type;
			if($tmp_type!=''){

				$team_member_name = $req->team_member_name;

				if(trim($team_member_name)==''){
					return 'ERR';
				}

				$team_member_bio = $req->team_member_bio;
				$team_mem_img = $req->file('team_mem_img');
				
				$prof_id = session('salon_id');
				if($prof_id=='' || $prof_id=='0'){
					$resp['status'] = 'ERROR';
					$resp['msg'] = 'login';
					return response()->json($resp);
				}
				
				$prof_team_member = new Prof_team_member;

				if($team_mem_img!=""){
		          $name = time().'.'.$team_mem_img->getClientOriginalExtension();
		          $destinationPath = public_path('/imgs/team');
		          $team_mem_img->move($destinationPath, $name);
		          $prof_team_member->image=$name;
		        }

		         $category = $req->team_cate;
                $category = $this->array_move($category, array_search('all', $category), 0);
                $service = $req->team_service;
                $service = $this->array_move($service, array_search('all', $service), 0);

                if($category && count($category)>0){
                    $prof_team_member->category = serialize($category);
                }
                if($service && count($service)>0){
                    $prof_team_member->service = serialize($service);
                }

		        $prof_team_member->location_type = $tmp_type;
		        $prof_team_member->prof_id = $prof_id;
		        $prof_team_member->member = $team_member_name;
		        $prof_team_member->bio = $team_member_bio;
		        $prof_team_member->save();

		        $team = Prof_team_member::where('location_type',$tmp_type)
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


		        $resp['status']='SUCCESS';
		        $resp['team_memb']=$team_ar;
				return response()->json($resp);

			}
			else{
				$resp['status'] = 'ERROR';
				return response()->json($resp);
			}
		}

		if(isset($req->act) && $req->act=='add_visual'){
			$tmp_type = $req->tmp_type;
			
			$prof_id = session('salon_id');
			if($prof_id=='' || $prof_id=='0'){
				$resp['status'] = 'ERROR';
				$resp['msg'] = 'login';
				return response()->json($resp);
			}
			

				$visual_type = $req->visual_type;
				$prof_id = session('salon_id');

				if(trim($visual_type)=='link'){
					$visual_link = $req->visual_link;
					$template_visual = new Template_visual;
					$template_visual->visual = $visual_link;
					$template_visual->location_type = $tmp_type;
					$template_visual->prof_id = $prof_id;
					$template_visual->type = $visual_type;
					$template_visual->save();

					
				}
				else{
					$vfiles = $req->file('visual_img');
					/*print_r(count($visual_img));
					die();*/

					foreach ($vfiles as $key => $visual_img) {
						$name = rand(0,100).time().'.'.$visual_img->getClientOriginalExtension();
						$destinationPath = public_path('/imgs/visual');
						$visual_img->move($destinationPath, $name);

						$destinationPath1 = config('app.url').'/public/imgs/visual/'.$name;

						$template_visual = new Template_visual;
						$template_visual->visual = $destinationPath1;
						$template_visual->location_type = $tmp_type;
						$template_visual->prof_id = $prof_id;
						$template_visual->type = $visual_type;
						$template_visual->save();
					}
					// return 'SUC';

					/*if($visual_img!=""){
			          $name = time().'.'.$visual_img->getClientOriginalExtension();
			          $destinationPath = public_path('/imgs/visual');
			          $visual_img->move($destinationPath, $name);
			          
			          $destinationPath1 = config('app.url').'/public/imgs/visual/'.$name;

			          	$template_visual = new Template_visual;
						$template_visual->visual = $destinationPath1;
						$template_visual->location_type = $tmp_type;
						$template_visual->prof_id = $prof_id;
						$template_visual->type = $visual_type;
						$template_visual->save();
						return 'SUC';

			        }
			        else
			        	return 'ERR';*/

				}

				$visual = Template_visual::where('location_type',$tmp_type)
									->where('status','active')
									->where('prof_id',$prof_id)
									->get();
				$resp['status'] = 'SUCCESS';
				$resp['vis'] = $visual;
				return response()->json($resp);
			
		}

		if(isset($req->act) && $req->act=='get_tm_detail'){
			$tm_i = $req->tm_i;
			if($tm_i!=''){
				$team_memb = Prof_team_member::find($tm_i);
				if($team_memb){
					$resp['status']='SUCCESS';
					$resp['member']['name']=$team_memb->member;
					$resp['member']['bio']=$team_memb->bio;
					$resp['member']['img']=$team_memb->image;
					$resp['member']['category']=($team_memb->category!='')?unserialize($team_memb->category):'';
                    $resp['member']['service']=($team_memb->service!='')?unserialize($team_memb->service):'';

					$service = Service::where('prof_id',$team_memb->prof_id)
                                ->where('status','active')
                                ->where('location_type',$team_memb->location_type)
                                 ->where('type','main')
                                ->get();

		            $ar = array();
		            $cate = array();
		            if(count($service)>0){
		                $chk_cate = array();
		                foreach ($service as $key => $value) {
		                    $serv = array();
		                    $serv['service_name'] = $value->service_name;
		                    $serv['i'] = $value->id;
		                    $serv['c'] = $value->category_id;
		                    $ar[] = $serv;

		                    if(!in_array($value->category->id, $chk_cate)){
		                        $chk_cate[]=$value->category->id;
		                        $car = array();
		                        $car['i'] = $value->category->id;
		                        $car['cat'] = $value->category->name;
		                        $car['nl_cat'] = $value->category->nl_name;
		                        $cate[]=$car;
		                    }
		                }
		            }
		            else{
		                $cate = array();
		                $categ = Category::where('status','active')->get();
		                foreach ($categ as $key => $value) {
		                    $car = array();
		                    $car['i'] = $value->id;
		                    $car['cat'] = $value->name;
		                    $car['nl_cat'] = $value->nl_name;
		                    $cate[]=$car;
		                }
		            }

		            $resp['service'] = $ar;
		            $resp['category'] = $cate;

					return response()->json($resp);
				}
				else{
					$resp['status']='ERROR';
					return response()->json($resp);
				}
			}
			else{
				$resp['status']='ERROR';
				return response()->json($resp);
			}
		}

		if(isset($req->act) && $req->act=='remove_reg_doc'){
            $id = $req->id;
            $p_reg = Professional_registration_doc::find($id);
            if($p_reg){
                
                $p_reg->forceDelete();
                
                $resp['status'] = 'SUCCESS';
                return response()->json($resp);
            }
            else{
                $resp['status'] = 'ERROR';
                return response()->json($resp);
            }
        }

		if(isset($req->act) && $req->act=='update_team_member'){
			
			$tm_i = $req->tm_i;
			if($tm_i!=''){

				$team_member_name = $req->team_member_name;

				if(trim($team_member_name)==''){
					$resp['status']='ERROR';
					return response()->json($resp);
				}

				$team_m = Prof_team_member::find($tm_i);
				if(!$team_m){
					$resp['status']='ERROR';
					return response()->json($resp);
				}

				$team_member_bio = $req->team_member_bio;
				$team_mem_img = $req->file('team_mem_img');
				$prof_id = session('salon_id');
				if($team_mem_img!=""){
		          $name = time().'.'.$team_mem_img->getClientOriginalExtension();
		          $destinationPath = public_path('/imgs/team');
		          $team_mem_img->move($destinationPath, $name);
		          $team_m->image=$name;
		        }
		        
		        $category = $req->team_cate;
                $category = $this->array_move($category, array_search('all', $category), 0);
                $service = $req->team_service;
                $service = $this->array_move($service, array_search('all', $service), 0);

                if($category && count($category)>0){
                    $team_m->category = serialize($category);
                }
                if($category && count($category)>0){
                    $team_m->service = serialize($service);
                }
		        
		        $team_m->member = $team_member_name;
		        $team_m->bio = $team_member_bio;
		        $team_m->update();

		        $team = Prof_team_member::where('location_type',$req->tmp_type)
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
                                    $cate_arr[$key1]['name']=$value1->name;
                                    $cate_arr[$key1]['nl_name']=$value1->nl_name;
                                    $cate_arr[$key1]['i']=$value1->id;
                                }
                            }
                        }

                        $serv_arr=array();

                        // $cn_serv = unserialize($value->service);
                        /*var_dump(count($cn_serv));
                        die();*/

                        if($value->service!='' && unserialize($value->service)!==null && count(unserialize($value->service))>0){
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
                
		        $resp['status']='SUCCESS';
		        $resp['team_memb']=$team_ar;
				return response()->json($resp);
			}
			else{
				$resp['status']='ERROR';
				return response()->json($resp);
			}
		}

		if(isset($req->act) && $req->act=='remove_tm_detail'){
			$tm_i = $req->tm_i;
			if($tm_i!=''){
				$team_memb = Prof_team_member::find($tm_i);
				if($team_memb){
					
					$team_memb->status = 'remove';
					$team_memb->update();
					$resp['status']='SUCCESS';
					return response()->json($resp);
				}
				else{
					$resp['status']='ERROR';
					return response()->json($resp);
				}
			}
			else{
				$resp['status']='ERROR';
				return response()->json($resp);
			}
		}

		if(isset($req->act) && $req->act=='remove_visual'){
			// $tm_i = $req->tmp_id;
			$vis = $req->vis;
			if($vis!='' && count($vis)>0){

				foreach ($vis as $key => $value) {
					Template_visual::where('id', $value)
				      					->update(['status' => 'remove']);
				}

				$resp['status']='SUCCESS';
				return response()->json($resp);
			}
			else{
				$resp['status']='ERROR';
				return response()->json($resp);
			}
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

		if(isset($req->act) && $req->act=='update_service_for'){
		
			$all_gender = $req->all_gender;
			$men = $req->men;
			$women = $req->women;
			$kids = $req->kids;
			$temp_type = $req->temp_type;

			$prof_id = session('salon_id');
			if($prof_id=='' || $prof_id=='0'){
				$resp['status'] = 'ERROR';
				$resp['msg'] = 'login';
				return response()->json($resp);
			}

			// $prof = Professional::find($prof_id);

			$temp = Template_note::where('location_type',$temp_type)
									->where('prof_id',$prof_id)
									->where('status','active')
									->get();
			if(count($temp)>0)	{
				DB::table('template_details')->where('id',$temp[0]->id)
				->update([
					'all_gender'=>$all_gender,
					'men'=>$men,
					'women'=>$women,
					'kids'=>$kids
					]);
			}else{
				$temp = new Template_note;
				$temp->prof_id = $prof_id;
				$temp->all_gender = $all_gender;
				$temp->men = $men;
				$temp->women = $women;
				$temp->kids = $kids;
				$temp->location_type = $temp_type;
				$temp->save();
			}


			$resp['status'] = 'SUCCESS';
						
			return response()->json($resp);
		}

		if(isset($req->act) && $req->act=='get_des_location'){
			$di = $req->di;
            $prof_id = session('salon_id');
			$lt = isset($req->lt)?$req->lt:'en';
             //			$dl = Desire_location::find($di);
			$data = Desire_location::where("prof_id",$prof_id)->where("status","active")->get();
			$Province = Province::where("status","active")->get();
			if(count($data) != 0){
                $resp['status'] = 'SUCCESS';
                $array = array();
                foreach ($data as $dl){
                    $ar = array();
                    $ar['desire_province_id'] = $dl->id;
                    $ar['desire_province'] = $dl->desire_province;
                    $ar['desire_municipality'] = unserialize($dl->desire_municipality);
                    $ar['desire_location_type'] = $dl->desire_location_type;

                    $spr = $dl->desire_province;

                    $municipality_list = array();
                    $province = Province::where('status','active')
                        ->where(function($query) use ($spr){
                            $query->where('name', $spr);
                            $query->orWhere('nl_name', $spr);
                        })
                        ->orderBy('name','ASC')->get();
                    if(count($province)>0){
                        if($lt=='nl')
                            $municipality_list = Municipality::select('id','name','nl_name')->where('status','active')->where('province_id',$province[0]->id)->orderBy('nl_name','ASC')->get();
                        else
                            $municipality_list = Municipality::select('id','name','nl_name')->where('status','active')->where('province_id',$province[0]->id)->orderBy('name','ASC')->get();

                    }

                    $ar['municipality_list'] = $municipality_list;

                    array_push($array,$ar);
                }
                $resp['province'] = $Province;
                $resp['data'] = $array;
                return response()->json($resp);
			}
			else{
				$resp['status'] = 'ERROR';
				return response()->json($resp);
			}
		}

		if(isset($req->act) && $req->act=='copy_desire'){
			
			$prof_id = session('salon_id');
			if($prof_id=='' || $prof_id=='0'){
				$resp['status'] = 'ERROR';
				$resp['msg'] = 'login';
				return response()->json($resp);
			}

			$prof = Professional::find($prof_id);
			if(!$prof){
				$resp['status'] = 'ERROR';
				$resp['msg'] = 'login';
				return response()->json($resp);
			}

			$is_u = 0;

			if($req->temp_type=='f'){
				$fixed_name = $prof->fixed_name;
				$fixed_bio = $prof->fixed_bio;
				$fixed_pic = $prof->fixed_pic;

				/*$prof->desire_name = $fixed_name;
				$prof->desire_pic = $fixed_pic;
				$prof->desire_bio = $fixed_bio;
				$prof->update();*/

				if($prof->desire_name==''){
					$prof->desire_name = $fixed_name;
					$is_u = 1;
				}
				if($prof->desire_pic==''){
					$prof->desire_pic = $fixed_pic;
					$is_u = 1;
				}
				if($prof->desire_bio==''){
					$prof->desire_bio = $fixed_bio;
					$is_u = 1;
				}
				if ($prof->desire_keyword_1==''){
                    $prof->desire_keyword_1 = $prof->keyword_1;
                }
				if ($prof->desire_keyword_2==''){
                    $prof->desire_keyword_2 = $prof->keyword_2;
                }
				if ($prof->desire_keyword_3==''){
                    $prof->desire_keyword_3 = $prof->keyword_3;
                }
				if($is_u == 1){
					$prof->update();
				}
			}
			else{
				$desire_name = $prof->desire_name;
				$desire_bio = $prof->desire_bio;
				$desire_pic = $prof->desire_pic;

				/*$prof->fixed_name = $desire_name;
				$prof->fixed_pic = $desire_pic;
				$prof->fixed_bio = $desire_bio;
				$prof->update();*/

				if($prof->fixed_name==''){
					$prof->fixed_name = $desire_name;
					$is_u = 1;
				}
				if($prof->fixed_pic==''){
					$prof->fixed_pic = $desire_pic;
					$is_u = 1;
				}
				if($prof->fixed_bio==''){
					$prof->fixed_bio = $desire_bio;
					$is_u = 1;
				}
                if ($prof->keyword_1==''){
                    $prof->keyword_1 = $prof->desire_keyword_1;
                }
                if ($prof->keyword_2==''){
                    $prof->keyword_2 = $prof->desire_keyword_2;
                }
                if ($prof->keyword_3==''){
                    $prof->keyword_3 = $prof->desire_keyword_3;
                }
				if($is_u == 1){
					$prof->update();
				}
			}
			
			if($req->temp_type=='f'){

				$template_note=Template_note::where('prof_id',$prof_id)->where('location_type','f')->where('status','active')->first();
				if($template_note){
					$chk=Template_note::where('prof_id',$prof_id)->where('location_type','d')->where('status','active')->first();
					if(!$chk){
						$new = $template_note->replicate();
						$new->location_type = 'd';
						$new->save();
					}
					else{
						$new = Template_note::find($chk->id);

						$new->note = $template_note->note;
						
						/*if($chk->note==''){
							$new->note = $template_note->note;
						}*/

						$new->all_gender = $template_note->all_gender;
						$new->men = $template_note->men;
						$new->women = $template_note->women;
						$new->kids = $template_note->kids;
						$new->update();
					}
				}

				$services=Service::where('prof_id',$prof_id)->where('location_type','f')->where('type','main')->where('status','active')->get();
                if(count($services)>0){
                    foreach ($services as $item) 
                    {
                    	$chk_serv = Service::where('location_type','d')
                    							->where('prof_id',$prof_id)
                    							->where('category_id',$item->category_id)
                    							->where('service_name',$item->service_name)
                    							->where('duration',$item->duration)
                    							->where('status','active')
                    							->where('type','main')
                    							->count();
						
						if($chk_serv==0){
	                        $items = Service::find($item->id);
	                        $new = $items->replicate();
	                        $new->location_type = 'd';
	                        $new->copy_id = $item->id;
	                        $new->save();
                    	}
                    }

                    $this->set_prof_cate($services[0]->prof_id);
                }else{
                    // Service::where('prof_id',$prof_id)->where('location_type','d')->where('type','main')->where('status','active')->delete();
                    Service::where('prof_id',$prof_id)->where('location_type','d')->where('type','main')->update(['status'=>'remove']);
                }

                $sb_services=Service::where('prof_id',$prof_id)->where('location_type','f')->where('type','sub')->where('status','active')->get();
                if(count($sb_services)>0){
                    foreach ($sb_services as $item) 
                    {   

                    	$mserv=0;
                        $serv_id = Service::where('copy_id',$item->service_id)->where('location_type','d')->take(1)->get();
                        if($serv_id && count($serv_id)>0){
                            $mserv = $serv_id[0]->id;
                        }

                    	$chk_serv = Service::where('location_type','d')
                    							->where('prof_id',$prof_id)
                    							->where('category_id',$item->category_id)
                    							->where('service_name',$item->service_name)
                    							->where('duration',$item->duration)
                    							->where('status','active')
                    							->where('type','sub')
                    							->where('service_id',$mserv)
                    							->count();
						if($chk_serv==0){

	                        $items = Service::find($item->id);
	                        $new = $items->replicate();
	                        $new->location_type = 'd';
	                        $new->service_id = $mserv;
	                        $new->save();
	                    }
                    }

                    $this->set_prof_cate($sb_services[0]->prof_id);
                }



				$team_memb=Prof_team_member::where('prof_id',$prof_id)->where('location_type','f')->where('status','active')->get();
				if(count($team_memb)>0){
					foreach ($team_memb as $item) 
			        {	
			        	$chk_tm = Prof_team_member::where('prof_id',$prof_id)
			        								->where('location_type','d')
			        								->where('member',$item->member)
			        								->where('status','active')->count();

						if($chk_tm==0){
				            $items = Prof_team_member::find($item->id);
				            $new = $items->replicate();
							$new->location_type = 'd';
							$new->service = '';
							$new->save();
						}
			        }
				}


				$visual=Template_visual::where('prof_id',$prof_id)->where('location_type','f')->where('status','active')->get();
				if(count($visual)>0){
					foreach ($visual as $item) 
			        {
			        	$chk_vis = Template_visual::where('prof_id',$prof_id)
			        							->where('location_type','d')
			        							->where('visual',$item->visual)
			        							->where('status','active')
			        							->count();
						
						if($chk_vis==0){
				            $items = Template_visual::find($item->id);
				            $new = $items->replicate();
							$new->location_type = 'd';
							$new->save();
						}
			        }
				}
			}
			else{
				$template_note=Template_note::where('prof_id',$prof_id)->where('location_type','d')->where('status','active')->first();
				if($template_note){
					$chk=Template_note::where('prof_id',$prof_id)->where('location_type','f')->where('status','active')->first();
					if(!$chk){
						$new = $template_note->replicate();
						$new->location_type = 'f';
						$new->save();
					}
					else{
						$new = Template_note::find($chk->id);
						$new->note = $template_note->note;
						
						/*if($chk->note==''){
							$new->note = $template_note->note;
						}*/

						$new->all_gender = $template_note->all_gender;
						$new->men = $template_note->men;
						$new->women = $template_note->women;
						$new->kids = $template_note->kids;
						$new->update();
					}
				}

				$services=Service::where('prof_id',$prof_id)->where('location_type','d')->where('type','main')->where('status','active')->get();

                if(count($services)>0){
                    foreach ($services as $item) 
                    {

                    	$chk_serv = Service::where('location_type','f')
                    							->where('prof_id',$prof_id)
                    							->where('category_id',$item->category_id)
                    							->where('service_name',$item->service_name)
                    							->where('duration',$item->duration)
                    							->where('status','active')
                    							->where('type','main')
                    							->count();
						
						if($chk_serv==0){

	                        $items = Service::find($item->id);
	                        $new = $items->replicate();
	                        $new->location_type = 'f';
	                        $new->copy_id = $item->id;
	                        $new->save();
	                    }
                    }

                    $this->set_prof_cate($services[0]->prof_id);
                }

                $sb_services=Service::where('prof_id',$prof_id)->where('location_type','d')->where('type','sub')->where('status','active')->get();
                if(count($sb_services)>0){
                    foreach ($sb_services as $item) 
                    {   
                    	$mserv=0;
                        $serv_id = Service::where('copy_id',$item->service_id)->where('location_type','f')->take(1)->get();
                        if($serv_id && count($serv_id)>0){
                            $mserv = $serv_id[0]->id;
                        }

                    	$chk_serv = Service::where('location_type','f')
                    							->where('prof_id',$prof_id)
                    							->where('category_id',$item->category_id)
                    							->where('service_name',$item->service_name)
                    							->where('duration',$item->duration)
                    							->where('status','active')
                    							->where('type','sub')
                    							->where('service_id',$mserv)
                    							->count();
						if($chk_serv==0){

	                    	
	                        $items = Service::find($item->id);
	                        $new = $items->replicate();
	                        $new->location_type = 'f';
	                        $new->service_id = $mserv;
	                        $new->save();
	                    }
                    }

                    $this->set_prof_cate($sb_services[0]->prof_id);
                }




				$team_memb=Prof_team_member::where('prof_id',$prof_id)->where('location_type','d')->where('status','active')->get();
				if(count($team_memb)>0){
					foreach ($team_memb as $item) 
			        {

			        	$chk_tm = Prof_team_member::where('prof_id',$prof_id)
			        								->where('location_type','f')
			        								->where('member',$item->member)
			        								->where('status','active')->count();

			        	if($chk_tm==0){
				            $items = Prof_team_member::find($item->id);
				            $new = $items->replicate();
							$new->location_type = 'f';
							$new->save();
						}
			        }
				}


				$visual=Template_visual::where('prof_id',$prof_id)->where('location_type','d')->where('status','active')->get();
				if(count($visual)>0){
					foreach ($visual as $item) 
			        {
			        	$chk_vis = Template_visual::where('prof_id',$prof_id)
			        							->where('location_type','f')
			        							->where('visual',$item->visual)
			        							->where('status','active')
			        							->count();
			        	if($chk_vis==0){
				            $items = Template_visual::find($item->id);
				            $new = $items->replicate();
							$new->location_type = 'f';
							$new->save();
						}
			        }
				}
			}

			$resp['status'] = 'SUCCESS';		
			return response()->json($resp);

		}

		if(isset($req->act) && $req->act=='get_cate_serv'){
            $prof_id = session('salon_id');
            $temp_type=$req->temp_type;
            if($prof_id=='' || $prof_id=='0'){
                $resp['status'] = 'ERROR';
                $resp['msg'] = 'login';
                return response()->json($resp);
            }

            $prof = Professional::find($prof_id);
            if(!$prof){
                $resp['status'] = 'ERROR';
                $resp['msg'] = 'login';
                return response()->json($resp);
            }
           

            $service = Service::where('prof_id',$prof_id)
                                ->where('status','active')
                                ->where('location_type',$temp_type)
                                 ->where('type','main')
                                ->get();

           
            $ar = array();
            $cate = array();
            if(count($service)>0){
                $chk_cate = array();
                foreach ($service as $key => $value) {
                    $serv = array();
                    $serv['service_name'] = $value->service_name;
                    $serv['i'] = $value->id;
                    $serv['c'] = $value->category_id;
                    $ar[] = $serv;

                    if(!in_array($value->category->id, $chk_cate)){
                        $chk_cate[]=$value->category->id;
                        $car = array();
                        $car['i'] = $value->category->id;
                        $car['cat'] = $value->category->name;
                        $car['nl_cat'] = $value->category->nl_name;
                        $cate[]=$car;
                    }
                }
            }
            else{
                $cate = array();
                $categ = Category::where('status','active')->get();
                foreach ($categ as $key => $value) {
                    $car = array();
                    $car['i'] = $value->id;
                    $car['cat'] = $value->name;
                    $car['nl_cat'] = $value->nl_name;
                    $cate[]=$car;
                }
            }

            $resp['service'] = $ar;
            $resp['category'] = $cate;
            $resp['status'] = 'SUCCESS';        
            return response()->json($resp);
        }

        if(isset($req->act) && $req->act=='team_meme_f'){
        	$f = $req->f;
        	$prof_id = session('salon_id');
			if($prof_id=='' || $prof_id=='0'){
				$resp['status'] = 'ERROR';
                $resp['msg'] = 'login';
                return response()->json($resp);
			}

			$prof = Professional::find($prof_id);
			if(!$prof){
				$resp['status'] = 'ERROR';
                $resp['msg'] = 'login';
                return response()->json($resp);
			}

			$prof->team_mem_f = $f;
			$prof->update();
			$resp['status'] = 'SUCCESS';        
            return response()->json($resp);
			// DB::table('professionals')->update(['team_mem_f'=>$f])->where('id',$prof_id)
        }
		
	}
	

	public function desire_location_update(Request $req){
		$desire_name = $req->desire_name;
		$desire_bio = $req->desire_bio;
		$desire_pic = $req->file('desire_pic');

		$prof_id = session('salon_id');
		if($prof_id=='' || $prof_id=='0'){
			echo 'ERR';
		}

		$prof = Professional::find($prof_id);
		if(!$prof){
			echo 'ERR';
		}

		if($desire_pic!=""){
          $name = time().'.'.$desire_pic->getClientOriginalExtension();
          $destinationPath = public_path('/imgs/template');
          $desire_pic->move($destinationPath, $name);
          $prof->desire_pic=$name;
        }

        $prof->desire_keyword_1 = $req->desire_keyword_1;
        $prof->desire_keyword_2 = $req->desire_keyword_2;
        $prof->desire_keyword_3 = $req->desire_keyword_3;
        $prof->desire_bio = $desire_bio;
        $prof->desire_name = $desire_name;
        $prof->update();

        echo 'SUC';

	}

	public function desire_add_province(Request $req){
	
		$resp = array();
		// dd($req->all());
		if($req->act=='add_province'){
			$prof_id = session('salon_id');
			if($prof_id=='' || $prof_id=='0'){
				echo 'ERR';
			}

			$prof = Professional::find($prof_id);
			if(!$prof){
				echo 'ERR';
			}
			$prof_temp = new Desire_location;
			$prof_temp->prof_id = $prof_id;

			$loc_type = $req->loc_type;

			$prof_temp->desire_location_type = $loc_type;
            
			if($loc_type=='specific'){
				if (isset($req->fc) && $req->fc == '1') {
					foreach ($req->data as $data){
					$prov = $data['province'];
					$municipality = isset($data['municipality'])?$data['municipality']:'';
				
					// Make sure to validate and sanitize $prov and $municipality before updating the model
				
					$prof_temp->desire_province = $prov;
					$prof_temp->desire_municipality = serialize($municipality);
					
					$prof_temp->save();
					}
				}
				// DB::table('desire_locations')->where('prof_id',$prof_id)->where('desire_location_type','everywhere')->update(['status'=>'remove']);
			}
			else{
				$prof_temp->desire_province = 'Everywhere';
				$prof_temp->save();

				// DB::table('desire_locations')->where('prof_id',$prof_id)->where('desire_location_type','specific')->update(['status'=>'remove']);
			}



			$resp['status']='SUCCESS';
			return response()->json($resp);
		}

		if($req->act=='edit_province'){
			$prof_id = session('salon_id');
			if($prof_id=='' || $prof_id=='0'){
				$resp['status']='ERROR';
				return response()->json($resp);
			}

			$prof = Professional::find($prof_id);
			if(!$prof){
				$resp['status']='ERROR';
				return response()->json($resp);
			}
			if (!isset($req->data) || count($req->data) == 0){
			    if ($req['loc_type'] == "everywhere"){
                    $prof_temp = new Desire_location;
                    $prof_temp->prof_id = $prof_id;
                    $loc_type = $req['loc_type'];
                    $prof_temp->desire_location_type = $loc_type;
                    $prof_temp->desire_province = 'Everywhere';
                    $prof_temp->save();
                }else{
                    // DB::table('desire_locations')->where('prof_id',$prof_id)->where('desire_location_type','everywhere')->update(['status'=>'remove']);
                }
                $resp['status']='SUCCESS';
                return response()->json($resp);
            }
			foreach ($req->data as $data){
                $lid = $data['id'];
                if (isset($lid)){
                    $prof_temp = Desire_location::find($lid);
                    if($prof_temp){
                        $municipality = isset($data['municipality'])?$data['municipality']:'';
                        if($municipality!='')
                            $prof_temp->desire_municipality = serialize($municipality);
                        else
                            $prof_temp->desire_municipality = '';
                        $prov = $data['province'];
                        $prof_temp->desire_province = $prov;
                        $prof_temp->update();
                    }
                }else{
                    $prof_temp = new Desire_location;
                    $prof_temp->prof_id = $prof_id;
                    $loc_type = $req['loc_type'];
                    $prof_temp->desire_location_type = $loc_type;
                    if($loc_type=='specific'){
                        $municipality = isset($data['municipality'])?$data['municipality']:'';
                        if($municipality!='')
                            $prof_temp->desire_municipality = serialize($municipality);
                        else
                            $prof_temp->desire_municipality = '';

                        $prov = $data['province'];
                        $prof_temp->desire_province = $prov;
                        $prof_temp->save();
                        DB::table('desire_locations')->where('prof_id',$prof_id)->where('desire_location_type','everywhere')->update(['status'=>'remove']);
                    }else{
						$municipality = isset($data['municipality'])?$data['municipality']:'';
                        if($municipality!='')
                            $prof_temp->desire_municipality = serialize($municipality);
                        else
                        $prof_temp->desire_municipality = '';
                        $prof_temp->desire_province = $data['province'];
                        $prof_temp->save();
                    }
                }
            }
            $resp['status']='SUCCESS';
            return response()->json($resp);
		}

	}

	public function set_prof_cate($prof){
		$cates = DB::table('services')->SELECT('category_id')
						->where('prof_id',$prof)
						->where('status','active')
						->groupBy('category_id')
						->get();
		if(count($cates)>0){
			$cate_arr = array();
			foreach ($cates as $key => $value) {
				$cate_arr[] = $value->category_id;
			}

			DB::table('prof_categories')->where('prof_id',$prof)
											->where('lang','en')
											->whereNotIn('category_id', $cate_arr)
											->delete();

			$prof_cate = DB::table('prof_categories')->SELECT('category_id')
						->where('prof_id',$prof)
						->where('lang','en')
						->get();
			if(count($prof_cate)==0){
				$ins = array();
				foreach ($cates as $key => $value) {
					$arr = array();
					$arr['prof_id']=$prof;
					$arr['lang']='en';
					$arr['category_id']=$value->category_id;
					$ins[]=$arr;
				}
				
				DB::table('prof_categories')->insert($ins);
			}
			else{
				$prof_cate_arr = array();
				foreach ($prof_cate as $key => $value) {
					$prof_cate_arr[] = $value->category_id;
				}

				$result=array_diff($cate_arr,$prof_cate_arr);
				
				if(count($result)>0){
					foreach ($result as $key => $value) {
						$arr = array();
						$arr['prof_id']=$prof;
						$arr['category_id']=$value;
						$arr['lang']='en';
						$ins[]=$arr;
					}
					
					DB::table('prof_categories')->insert($ins);
				}
			}
		}
		else{
			DB::table('prof_categories')->where('prof_id', $prof)->where('lang','en')->delete();
		}
	}

    function array_move(array $arr, int $old_index, int $new_index) {
        if ($new_index >= count($arr)) {
            $k = $new_index - count($arr) + 1;
            while ($k--) {
                array_push($arr, null);
            }
        }

        $element = array_splice($arr, $old_index, 1)[0];
        array_splice($arr, $new_index, 0, $element);

        return $arr;
    }



    public function set_prof_cate_nl($prof){
		$cates = DB::table('nl_services')->SELECT('category_id')
						->where('prof_id',$prof)
						->where('status','active')
						->groupBy('category_id')
						->get();
		if(count($cates)>0){
			$cate_arr = array();
			foreach ($cates as $key => $value) {
				$cate_arr[] = $value->category_id;
			}

			DB::table('prof_categories')->where('prof_id',$prof)
											->where('lang','nl')
											->whereNotIn('category_id', $cate_arr)
											->delete();

			$prof_cate = DB::table('prof_categories')->SELECT('category_id')
						->where('prof_id',$prof)
						->where('lang','nl')
						->get();
			if(count($prof_cate)==0){
				$ins = array();
				foreach ($cates as $key => $value) {
					$arr = array();
					$arr['prof_id']=$prof;
					$arr['lang']='nl';
					$arr['category_id']=$value->category_id;
					$ins[]=$arr;
				}
				
				DB::table('prof_categories')->insert($ins);
			}
			else{
				$prof_cate_arr = array();
				foreach ($prof_cate as $key => $value) {
					$prof_cate_arr[] = $value->category_id;
				}

				$result=array_diff($cate_arr,$prof_cate_arr);
				
				if(count($result)>0){
					foreach ($result as $key => $value) {
						$arr = array();
						$arr['prof_id']=$prof;
						$arr['category_id']=$value;
						$arr['lang']='nl';
						$ins[]=$arr;
					}
					
					DB::table('prof_categories')->insert($ins);
				}
			}
		}
		else{
			DB::table('prof_categories')->where('prof_id', $prof)->where('lang','nl')->delete();
		}
	}


	public function forget_pass(Request $req){
		$act = $req->act;
		$resp=array();
		if($act=='c'){
			$lt = (isset($req->lt) && $req->lt!='')?$req->lt:'en';
			$email = $req->email;

			$prof = Professional::where('email',$email)
							->where('status','!=','remove')
							->where('status','!=','hold')
							->where('email_verified','YES')
							->get();
			if(count($prof)>0){
				
				$resp['status'] = 'SUCCESS';

				$legal_name = $prof[0]->legal_name;
                $coc = $prof[0]->coc;
                $vat = $prof[0]->vat;
                $email = $prof[0]->email;
                $fixed_name = $prof[0]->fixed_name;
                $desire_name = $prof[0]->desire_name;
                $contact_number = $prof[0]->prof_address[0]->contact_number;
                $contact_person_first_name = $prof[0]->prof_address[0]->contact_person_first_name;
                $contact_person_last_name = $prof[0]->prof_address[0]->contact_person_last_name;

                $fx_ds_lg_name='';
                if(trim($fixed_name)!=''){
                	$fx_ds_lg_name = $fixed_name;
                }
                else if(trim($desire_name)!=''){
                	$fx_ds_lg_name = $desire_name;
                }
                else if(trim($legal_name)!=''){
                	$fx_ds_lg_name = $legal_name;
                }
                else{
                	$fx_ds_lg_name='Professional';
                }

                $fx_ds_name='';
                if(trim($fixed_name)!=''){
                	$fx_ds_name = $fixed_name;
                }
                else if(trim($desire_name)!=''){
                	$fx_ds_name = $desire_name;
                }
                else{
                	$fx_ds_name='Professional';
                }

                $preferred_lang = $prof[0]->preferred_lang;

				$rnd = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);

				DB::table('professionals')->where('id',$prof[0]->id)->update(['rand_num'=>$rnd]);

				if($lt=='nl'){
			    	
			    	$lang_kwords  = Language_keyword::select('dutch')->where('keyword','password_reset')->get();
			    	$email_template = Email_template::where('email_type','forgot_password_nl')->get();
			    	$verifybtntext = $lang_kwords[0]['dutch'];
			    }
			    else{
			    	$lang_kwords  = Language_keyword::select('english')->where('keyword','password_reset')->get();
			    	$email_template = Email_template::where('email_type','forgot_password_eng')->get();
			    	$verifybtntext = $lang_kwords[0]['english'];
			    }

			    $email_content = $email_template[0]->msg;
			    $from_address = $email_template[0]->from_address;
			    $from_name = $email_template[0]->from_name;
			    $subject = $email_template[0]->subject;
			    
			   
			    $st = base64_encode($email."##".$rnd);

			    $reset_link = '<a href="'.route('password_recovery').'?e='.urlencode($email).'&l_type='.$lt.'&u='.$st.'"><button type="button" style="background: #0d9da3;padding: 10px 27px;font-size: 18px;color: #fff;border: none;">'.$verifybtntext.'</button></a>';

			    $email_content = str_replace('##pro_legal_name##', $legal_name, $email_content);
			    $email_content = str_replace('##pro_fx_ds_lg_name##', $fx_ds_lg_name, $email_content);
			    $email_content = str_replace('##pro_fx_ds_name##', $fx_ds_name, $email_content);
			    $email_content = str_replace('##pro_email##', $email, $email_content);
			    $email_content = str_replace('##pro_phone##', $contact_number, $email_content);
			    $email_content = str_replace('##pro_coc##', $coc, $email_content);
			    $email_content = str_replace('##pro_vat##', $vat, $email_content);
			    $email_content = str_replace('##password_reset_link##', $reset_link, $email_content);
			    $email_content = str_replace('##contact_person_first_name##', $contact_person_first_name, $email_content);
			    $email_content = str_replace('##contact_person_last_name##', $contact_person_last_name, $email_content);

			    $subject = str_replace('##pro_legal_name##', $legal_name, $subject);
			    $subject = str_replace('##pro_email##', $email, $subject);
			    $subject = str_replace('##pro_phone##', $contact_number, $subject);
			    $subject = str_replace('##pro_coc##', $coc, $subject);
			    $subject = str_replace('##pro_vat##', $vat, $subject);
			    $subject = str_replace('##contact_person_first_name##', $contact_person_first_name, $subject);
			    $subject = str_replace('##contact_person_last_name##', $contact_person_last_name, $subject);
			    $subject = str_replace('##pro_fx_ds_lg_name##', $fx_ds_lg_name, $subject);
			    $subject = str_replace('##pro_fx_ds_name##', $fx_ds_name, $subject);
			    

			    $objDemo = new \stdClass();
		        $objDemo->content=$email_content;
		        $objDemo->subject=$subject;

		         // print_r($email_content);
		        
		        Mail::to($email)->send(new ManualMail($objDemo));

	    		$resp['msg'] = 'Check Email';

			}
			else{
				$resp['status'] = 'ERROR';
				$resp['msg'] = 'Not found';
			}

			return response()->json($resp);
		}

		if($act=='r'){
			$lt = (isset($req->lt) && $req->lt!='')?$req->lt:'en';
			$pi = $req->pi;
			$password = $req->password;

			$prof = Professional::find($pi);

			if($prof){
				$prof->rand_num='';
				$prof->password=md5($password);
				$prof->update();

				if($lt=='nl'){
			    	
			    	$email_template = Email_template::where('email_type','password_recovery_nl')->get();
			    }
			    else{
			    	$email_template = Email_template::where('email_type','password_recovery_eng')->get();
			    }

			    $email_content = $email_template[0]->msg;
			    $from_address = $email_template[0]->from_address;
			    $from_name = $email_template[0]->from_name;
			    $subject = $email_template[0]->subject;

			    $fixed_name = $prof->fixed_name;
                $desire_name = $prof->desire_name;
                $contact_number = $prof->prof_address[0]->contact_number;
			    $contact_person_first_name = $prof->prof_address[0]->contact_person_first_name;
                $contact_person_last_name = $prof->prof_address[0]->contact_person_last_name;

			    $fx_ds_lg_name='';
                if(trim($fixed_name)!=''){
                	$fx_ds_lg_name = $fixed_name;
                }
                else if(trim($desire_name)!=''){
                	$fx_ds_lg_name = $desire_name;
                }
                else if(trim($legal_name)!=''){
                	$fx_ds_lg_name = $legal_name;
                }
                else{
                	$fx_ds_lg_name='Professional';
                }

                $fx_ds_name='';
                if(trim($fixed_name)!=''){
                	$fx_ds_name = $fixed_name;
                }
                else if(trim($desire_name)!=''){
                	$fx_ds_name = $desire_name;
                }
                else{
                	$fx_ds_name='Professional';
                }
			    

			    $email_content = str_replace('##pro_legal_name##', $prof->legal_name, $email_content);
			    $email_content = str_replace('##pro_email##', $prof->email, $email_content);
			    $email_content = str_replace('##pro_phone##', $prof->prof_address[0]->contact_number, $email_content);
			    $email_content = str_replace('##pro_coc##', $prof->coc, $email_content);
			    $email_content = str_replace('##pro_vat##', $prof->vat, $email_content);
			    $email_content = str_replace('##pro_fx_ds_lg_name##', $fx_ds_lg_name, $email_content);
			    $email_content = str_replace('##pro_fx_ds_name##', $fx_ds_name, $email_content);
			    $email_content = str_replace('##contact_person_first_name##', $contact_person_first_name, $email_content);
			    $email_content = str_replace('##contact_person_last_name##', $contact_person_last_name, $email_content);

			    $subject = str_replace('##pro_legal_name##', $prof->legal_name, $subject);
			    $subject = str_replace('##pro_email##', $prof->email, $subject);
			    $subject = str_replace('##pro_phone##', $prof->prof_address[0]->contact_number, $subject);
			    $subject = str_replace('##pro_coc##', $prof->coc, $subject);
			    $subject = str_replace('##pro_vat##', $prof->vat, $subject);
			    $subject = str_replace('##pro_fx_ds_lg_name##', $fx_ds_lg_name, $subject);
			    $subject = str_replace('##pro_fx_ds_name##', $fx_ds_name, $subject);
			    $subject = str_replace('##contact_person_first_name##', $contact_person_first_name, $subject);
			    $subject = str_replace('##contact_person_last_name##', $contact_person_last_name, $subject);

			    $objDemo = new \stdClass();
		        $objDemo->content=$email_content;
		        $objDemo->subject=$subject;

		         // print_r($email_content);
		        $email = $prof->email;
		        Mail::to($email)->send(new ManualMail($objDemo));

				$resp['status'] = 'SUCCESS';
				return response()->json($resp);
			}
			else{
				$resp['status'] = 'ERROR';
				return response()->json($resp);
			}
		}
	}

	public function password_recovery(Request $req){
		$email = isset($req->e)?$req->e:'';
		$us = isset($req->u)?$req->u:'';
		$lt = isset($req->l_type)?$req->l_type:'';

		$preferred_lang = $lt;
		$prof = '';

		if($email=='' || $us==''){
			$type='ERR';
		}
		else{

			$u = base64_decode($us);
			$au = explode('##', $u);
			if(count($au)==2){
				$email = $au[0];
				$rnd = $au[1];

				$prof = Professional::select('id','email','legal_name','coc','vat','phone','email_verified','rand_num','preferred_lang')
									->where('email',$email)
									->where('rand_num',$rnd)
									->get();
				if($prof && count($prof)>0){

					$type='SUC';
				}
				else{
					$type='ERR';
				}
			}
			else{
				$type='ERR';
			}
		}
		$lang='english';

		if($preferred_lang=='nl'){
			$menuh = $this->get_page_menu('header','nl');
			$menuf = $this->get_page_menu('footer','nl');
			$lang='dutch';
			
			$page_title = $meta_title = 'wachtwoord herstel - Mollure';
		}
		else{
			$menuh = $this->get_page_menu('header','en');
			$menuf = $this->get_page_menu('footer','en');

			$page_title = $meta_title = 'Password Recovery - Mollure';
		}

		$lang_kwords = Language_keyword::all();
		$lang_kwords_ar = array();
		foreach ($lang_kwords as $key => $value) {
			$lang_kwords_ar[$value->keyword]['english']=$value->english;
			$lang_kwords_ar[$value->keyword]['dutch']= ($value->dutch!='')?$value->dutch:$value->english;
		}
		
		return view('salon.password_recovery')->with('email',$email)
							->with('status',$type)
							->with('page_title',$page_title)
							->with('meta_title',$meta_title)
							->with('menuh',$menuh)
							->with('menuf',$menuf)
							->with('lang_kwords',$lang_kwords_ar)
							->with('prof',$prof)
							->with('lt',$lt)
							->with('lang',$lang);
	}


	public function prof_calendar(){
		$prof_id = session('salon_id');
		if($prof_id=='' || $prof_id=='0'){
			$request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
			return redirect('login');
		}

		/*$team_memb = "79";
		$team_member = Prof_team_member::find($team_memb);*/
		$all_team_member = Prof_team_member::where('status','active')->where('prof_id',$prof_id)->get();


		// $bookt = Book_tran::where('team_member',$team_memb)->where('status','!=','cancel')->get();
		return view('salon.calendar')
					/*->with('book_trans',$bookt)
					->with('team_member',$team_member)*/
					->with('all_team_member',$all_team_member);
	}

	public function ajx_calendar(Request $req){
		$resp = array();
		
		if(isset($req->act) && $req->act=='all_tm_booking'){
			$tm = isset($req->tm)?$req->tm:'';
			$tm_sel = $req->tm_sel;
			$day = $req->day;

			if($tm_sel=='all'){
				
				$prof_id = session('salon_id');
				if($prof_id=='' || $prof_id=='0'){
					$request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
					return redirect('login');
				}

				if($day==''){
					$day=date('Y-m-d');
				}

				$ar = array();
				$team_members=array();
				$all_team_member = Prof_team_member::where('prof_id',$prof_id)->get();
				if($all_team_member && count($all_team_member)>0){
					foreach ($all_team_member as $key => $tm) {

						$team_members[$tm->id]['name']=$tm->member;
						$team_members[$tm->id]['image']=$tm->image;

						$bookt = Book_tran::with('booking_detail')->with('booking_service')->where('team_member',$tm->id)->where('book_date',date('Y-m-d',strtotime($day)))->where('status','!=','cancel')->get();
						$bk_ar= array();
						if(count($bookt)>0){
							$ar_hr = array();
							foreach ($bookt as $key => $value) {
								$ar_h = $this->get_hr_service($value);
								$bk_ar[$ar_h->hr]=$ar_h;
							}
							ksort($bk_ar);
							$ar[$tm->id]=$bk_ar;
						}
						
					}
				}

				$resp['status']='SUCCESS';
				$resp['bookings']=$ar;
				$resp['date']=date('d',strtotime($day)).' <span>'.date('l',strtotime($day)).'</span>';
				$resp['team_member']=$team_members;
				return response()->json($resp);
			}

			else if($tm_sel=='sel'){
				
				if($tm=='' || count($tm)<=0){
					$resp['status']='ERROR';
					$resp['msg']="No TM selected";
					return response()->json($resp);
				}


				$prof_id = session('salon_id');
				if($prof_id=='' || $prof_id=='0'){
					$request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
					return redirect('login');
				}

				if($day==''){
					$day=date('Y-m-d');
				}

				$ar = array();
				$team_members=array();
				$all_team_member = Prof_team_member::where('status','active')->whereIn('id',$tm)->get();
				if($all_team_member && count($all_team_member)>0){
					foreach ($all_team_member as $key => $tm) {

						$team_members[$tm->id]['name']=$tm->member;
						$team_members[$tm->id]['image']=$tm->image;

						$bookt = Book_tran::with('booking_detail')->with('booking_service')->where('team_member',$tm->id)->where('book_date',date('Y-m-d',strtotime($day)))->where('status','!=','cancel')->get();
						$bk_ar= array();
						if(count($bookt)>0){
							$ar_hr = array();
							foreach ($bookt as $key => $value) {
								$ar_h = $this->get_hr_service($value);
								$bk_ar[$ar_h->hr]=$ar_h;
							}
							ksort($bk_ar);
							
						}
						$ar[$tm->id]=$bk_ar;
					}
				}

				$resp['status']='SUCCESS';
				$resp['bookings']=$ar;
				$resp['date']=date('d',strtotime($day)).'<span>'.date('l',strtotime($day)).'</span>';
				$resp['team_member']=$team_members;
				return response()->json($resp);
			}

		}

		if(isset($req->act) && $req->act=='tm_booking'){
			$tm = $req->tm;
			$day = $req->day;

			if($tm!='' && $day=='week'){
				$team_member = Prof_team_member::find($tm);

				$monday = strtotime('monday this week');
				$tuesday = strtotime('tuesday this week');
				$wednesday = strtotime('wednesday this week');
				$thursday = strtotime('thursday this week');
				$friday = strtotime('friday this week');
				$saturday = strtotime('saturday this week');
				$sunday = strtotime('sunday this week');

				/*$mo_bk = Booking::where('book_date',date('Y-m-d',$monday))->where('status','accept')->get();
				$tu_bk = Booking::where('book_date',date('Y-m-d',$tuesday))->where('status','accept')->get();
				$we_bk = Booking::where('book_date',date('Y-m-d',$wednesday))->where('status','accept')->get();
				$th_bk = Booking::where('book_date',date('Y-m-d',$thursday))->where('status','accept')->get();
				$fr_bk = Booking::where('book_date',date('Y-m-d',$friday))->where('status','accept')->get();
				$st_bk = Booking::where('book_date',date('Y-m-d',$saturday))->where('status','accept')->get();
				$su_bk = Booking::where('book_date',date('Y-m-d',$sunday))->where('status','accept')->get();*/

				$mo_bookt = Book_tran::with('booking_detail')->with('booking_service')->where('team_member',$tm)->where('book_date',date('Y-m-d',$monday))->where('status','!=','cancel')->get();
				$mon_ar= array();
				if(count($mo_bookt)>0){
					$ar_hr = array();
					foreach ($mo_bookt as $key => $value) {
						$ar_h = $this->get_hr_service($value);
						$mon_ar[$ar_h->hr]=$ar_h;
						
						// $mon_ar[]=$ar_hr;
					}

					
				}
				
				$tu_bookt = Book_tran::with('booking_detail')->with('booking_service')->where('team_member',$tm)->where('book_date',date('Y-m-d',$tuesday))->where('status','!=','cancel')->get();
				$tue_ar= array();
				if(count($tu_bookt)>0){
					$ar_hr = array();
					foreach ($tu_bookt as $key => $value) {
						$ar_h = $this->get_hr_service($value);
						$tue_ar[$ar_h->hr]=$ar_h;
						// $ar_hr['book_detail']=$value->booking_detail;
						// $tue_ar[]=$ar_hr;
					}

				}
				
				$we_bookt = Book_tran::with('booking_detail')->with('booking_service')->where('team_member',$tm)->where('book_date',date('Y-m-d',$wednesday))->where('status','!=','cancel')->get();
				$wed_ar= array();
				if(count($we_bookt)>0){
					$ar_hr = array();
					foreach ($we_bookt as $key => $value) {
						$ar_h = $this->get_hr_service($value);
						$wed_ar[$ar_h->hr]=$ar_h;
						// $ar_hr['book_detail']=$value->booking_detail;
						// $wed_ar[]=$ar_hr;
					}

				}
				
				$th_bookt = Book_tran::with('booking_detail')->with('booking_service')->where('team_member',$tm)->where('book_date',date('Y-m-d',$thursday))->where('status','!=','cancel')->get();
				$thu_ar= array();
				if(count($th_bookt)>0){
					$ar_hr = array();
					foreach ($th_bookt as $key => $value) {
						$ar_h = $this->get_hr_service($value);
						$thu_ar[$ar_h->hr]=$ar_h;
						// $ar_hr['book_detail']=$value->booking_detail;
						// $thu_ar[]=$ar_hr;
					}

				}

				$fr_bookt = Book_tran::with('booking_detail')->with('booking_service')->where('team_member',$tm)->where('book_date',date('Y-m-d',$friday))->where('status','!=','cancel')->get();
				$fri_ar= array();
				if(count($fr_bookt)>0){
					$ar_hr = array();

					foreach ($fr_bookt as $key => $value) {
						$ar_h = $this->get_hr_service($value);
						$fri_ar[$ar_h->hr]=$ar_h;
						// $ar_hr['book_detail']=$value->booking_detail;
						// $fri_ar[]=$ar_hr;
					}
					
				}

				$sa_bookt = Book_tran::with('booking_detail')->with('booking_service')->where('team_member',$tm)->where('book_date',date('Y-m-d',$saturday))->where('status','!=','cancel')->get();
				$sat_ar= array();
				if(count($sa_bookt)>0){
					$ar_hr = array();
					foreach ($sa_bookt as $key => $value) {
						$ar_h = $this->get_hr_service($value);
						$sat_ar[$ar_h->hr]=$ar_h;
						// $ar_hr['book_detail']=$value->booking_detail;
						// $sat_ar[]=$ar_hr;
					}

				}

				$su_bookt = Book_tran::with('booking_detail')->with('booking_service')->where('team_member',$tm)->where('book_date',date('Y-m-d',$sunday))->where('status','!=','cancel')->get();
				$sun_ar= array();
				if(count($su_bookt)>0){
					$ar_hr = array();
					foreach ($su_bookt as $key => $value) {
						$ar_h = $this->get_hr_service($value);
						$sun_ar[$ar_h->hr]=$ar_h;
						// $ar_hr['book_detail']=$value->booking_detail;
						// $sun_ar[]=$ar_hr;
					}

				}

				/*print_r($mon_ar);
				die();*/

				/*usort($mon_ar, function($a, $b) {
				    return ($a['booking']->hr <=> $b['booking']->hr);
				});
				usort($tue_ar, function($a, $b) {
				    return ($a['booking']->hr <=> $b['booking']->hr);
				});
				usort($wed_ar, function($a, $b) {
				    return ($a['booking']->hr <=> $b['booking']->hr);
				});
				usort($thu_ar, function($a, $b) {
				    return ($a['booking']->hr <=> $b['booking']->hr);
				});
				usort($fri_ar, function($a, $b) {
				    return ($a['booking']->hr <=> $b['booking']->hr);
				});
				usort($sat_ar, function($a, $b) {
				    return ($a['booking']->hr <=> $b['booking']->hr);
				});
				usort($sun_ar, function($a, $b) {
				    return ($a['booking']->hr <=> $b['booking']->hr);
				});*/

				ksort($mon_ar);
				ksort($tue_ar);
				ksort($wed_ar);
				ksort($thu_ar);
				ksort($fri_ar);
				ksort($sat_ar);
				ksort($sun_ar);

				$ar = array();
				$ar['mon'] = $mon_ar;
				$ar['tue'] = $tue_ar;
				$ar['wed'] = $wed_ar;
				$ar['thu'] = $thu_ar;
				$ar['fri'] = $fri_ar;
				$ar['sat'] = $sat_ar;
				$ar['sun'] = $sun_ar;


				$resp['status']='SUCCESS';
				$resp['bookings']=$ar;
				$resp['team_member']=$team_member;
				return response()->json($resp);

				// $book_t = Book_tran::where()
			}
		}
	}

	public function ajx_booking_detail(Request $req){

		$prof_id = session('salon_id');
		if($prof_id=='' || $prof_id=='0'){
			$request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
			return 'LOGIN';
		}

		$prof = Professional::find($prof_id);

		if(isset($req->bi) && $req->bi!=''){
			$book_id = $req->bi;
			$booking = Booking::find($book_id);
			$serv_i_al = array();
			if($booking){
				$is_edit=1;

				$bokt = $book_trans = Book_tran::select('service_id', DB::raw('count(*) as counts'))
										->where('status','new')
										->where('book_id',$book_id)
									    ->groupBy('service_id')
									    ->get();

				foreach ($bokt as $key => $value) {
					$exist_service[$value->service_id] = $value->counts;
					$serv_i_al[] = $value->service_id;
				}

				$ser_ar = $exist_service;

				$service = Service::whereIn('id',$serv_i_al)->get();
				

				$team = Prof_team_member::where('location_type','f')
									->where('status','active')
									->where('prof_id',$prof_id)
									->get();

				$fix_loc = Fixed_location_salon::where('prof_id',$prof_id)
        								->where('status','active')->get();
        		
        		$des_loc = Desire_location::where('prof_id',$prof_id)
        							->where('status','active')->get();

				$ttl_serv_n = $booking->total_service;
				$ttl_serv = $ttl_serv_n = $booking->total_units;

				$time_arr = array('08:00','08:30','09:00','09:30','10:00','10:30','11:00','11:30','12:00','12:30','01:00','01:30','02:00','02:30','03:00','03:30','04:00','04:30','05:00','05:30',);


				return view('salon.ajax.edit_booking')->with('services',$service)
									->with('ser_ar',$ser_ar)
									->with('prof',$prof)
									->with('team_mem',$team)
									->with('fix_loc',$fix_loc)
									->with('des_loc',$des_loc)
									->with('time_arr',$time_arr)
									->with('ttl_serv',$ttl_serv)
									->with('ttl_serv_n',$ttl_serv_n)
									->with('service_new',$service)
									->with('booking',$booking)
									->with('exist_service',$exist_service)							;
			}
		}
		else{
			return 'ERROR';
		}
	}

    function ajx_booking_update(Request $req){
        if(isset($req->act) && $req->act=='update_bt'){
            
            $bookt = Book_tran::find($req->bt);
            if($bookt){
                $chk_bts = Book_trans_slave::where('book_trans_id',$bookt->id)->get();
                if(count($chk_bts)<=0){
                    $bts = new Book_trans_slave;
                    $bts->book_trans_id = $bookt->id;
                    $bts->book_id = $bookt->book_id;
                    $bts->service_id = $bookt->service_id;
                    $bts->duration = $bookt->duration;
                    $bts->start_time = $bookt->start_time;
                    $bts->book_date = $bookt->book_date;
                    $bts->price = $bookt->price;
                    $bts->team_member = $bookt->team_member;
                    $bts->cust_name = $bookt->cust_name;
                    $bts->status = $bookt->status;
                    $bts->save();
                }

                if(isset($req->field) && isset($req->field)!=''){
                    $fld = $req->field;

                    if($fld=='team_member'){
                        if($bookt->team_member!='0'){
                            $chk_bk_e_r = Booking_edit_request::where('book_trans_id',$bookt->id)->where('type','team_member')->get();
                            if(count($chk_bk_e_r)>0){
                                Booking_edit_request::where('id',$chk_bk_e_r[0]->id)->update(['new_tm'=>$req->team_member, 'client_status'=>'new','prof_status'=>'request']);
                            }
                            else{
                                $bked_r = new Booking_edit_request; 
                                $bked_r->book_id = $bookt->book_id;
                                $bked_r->book_trans_id = $bookt->id;
                                $bked_r->type = "team_member";
                                $bked_r->new_tm = $req->team_member;
                                $bked_r->client_status = "new";
                                $bked_r->prof_status = "request";
                                $bked_r->save();
                            }
                        }
                        else{
                            $bookt->$fld = $req->$fld;
                            $bookt->tm_by = 'prof';
                            $bookt->update();
                        }
                    }
                    else if($fld=='service_id'){
                        
                            $chk_bk_e_r = Booking_edit_request::where('book_trans_id',$bookt->id)->where('type','service')->get();
                            if(count($chk_bk_e_r)>0){
                                Booking_edit_request::where('id',$chk_bk_e_r[0]->id)->update(['service_id'=>$req->service_id, 'client_status'=>'new','prof_status'=>'request']);
                            }
                            else{
                                $bked_r = new Booking_edit_request; 
                                $bked_r->book_id = $bookt->book_id;
                                $bked_r->book_trans_id = $bookt->id;
                                $bked_r->type = "service";
                                $bked_r->service_id = $req->service_id;
                                $bked_r->client_status = "new";
                                $bked_r->prof_status = "request";
                                $bked_r->save();
                            }
                        
                    }
                    else if($fld=='duration'){
                        
                            $chk_bk_e_r = Booking_edit_request::where('book_trans_id',$bookt->id)->where('type','duration')->get();
                            if(count($chk_bk_e_r)>0){
                                Booking_edit_request::where('id',$chk_bk_e_r[0]->id)->update(['new_duration'=>$req->duration, 'client_status'=>'new','prof_status'=>'request']);
                            }
                            else{
                                $bked_r = new Booking_edit_request; 
                                $bked_r->book_id = $bookt->book_id;
                                $bked_r->book_trans_id = $bookt->id;
                                $bked_r->type = "duration";
                                $bked_r->new_duration = $req->duration;
                                $bked_r->client_status = "new";
                                $bked_r->prof_status = "request";
                                $bked_r->save();
                            }
                        
                    }

                    $resp['status']='SUCCESS';
                    return response()->json($resp);
                }
                
            }
        }

        if(isset($req->act) && $req->act=='bt_del'){
            $bt = $req->bt;
            if($bt!=''){
                $bookt = Book_tran::find($req->bt);
                Book_tran::where('id',$bt)->update(['status'=>'cancel']);

                $resp['status']='SUCCESS';
                return response()->json($resp);
            }

            $resp['status']='ERROR';
            return response()->json($resp);
        }

        if(isset($req->act) && $req->act=='undo'){
            $bt = $req->bt;
            DB::table('book_trans')->where('id',$bt)->update(['status'=>'new']);
            $resp['status']='SUCCESS';
            return response()->json($resp);
        }

        $resp['status']='ERROR';
        return response()->json($resp);
    }

	public function prof_setting(){
		$prof_id = session('salon_id');
        if($prof_id=='' || $prof_id=='0'){
            $request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
            return 'LOGIN';
        }

        // $prof = Professional::find($prof_id);

        $team_member = Prof_team_member::where('prof_id',$prof_id)->where('status','active')->orderBy('member')->get();

      

        return view('salon.prof_setting')->with('team_member',$team_member);

	}


    public function ajx_prof_setting(Request $req){
		
        $resp = array();

        if(isset($req->act) && $req->act=='delete_tech_note'){
			$prof_id = session('salon_id');
			if($prof_id=='' || $prof_id=='0'){
				$request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
				$resp['status'] = 'Login';
				return response()->json($resp);
			}

			$ni = $req->ni;
			if($ni!='' && $ni!='0'){
				
				DB::table('client_notes')->where('id',$ni)->update(['status'=>'remove']);
				$resp['status'] = 'SUCCESS';
				return response()->json($resp);
			}
			else{
				$resp['status'] = 'ERROR';
				return response()->json($resp);
			}
		}

		if(isset($req->act) && $req->act=='save_tech_note'){
			$prof_id = session('salon_id');
			if($prof_id=='' || $prof_id=='0'){
				$request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
				$resp['status'] = 'Login';
				return response()->json($resp);
			}

			$ni = $req->ni;
			$u = $req->u;	
			$note = $req->note;

			if($u=='' || $u=='0' || trim($note)==''){
				$resp['status'] = 'ERROR';
				return response()->json($resp);
			}

			if($ni!='' && $ni!='0'){
				
				DB::table('client_notes')->where('id',$ni)->update(['note'=>$note]);
			}
			else{
				$client_note = new Client_note;
				$client_note->user_id = $u;
				$client_note->prof_id = $prof_id;
				$client_note->note = $note;
				$client_note->added_by = 'prof';	
				$client_note->save();

				$ni = $client_note->id;
			}
			$resp['ni'] = $ni;
			$resp['status'] = 'SUCCESS';
			return response()->json($resp);
			
		}
		
        if(isset($req->act) && $req->act=='get_clients'){
            $prof_id = session('salon_id');
            if($prof_id=='' || $prof_id=='0'){
                $request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
                return 'NeedProfLogin';
            }

            $cl_type = $req->cl;

			
            if($cl_type && $cl_type!=''){
                $prof_client_ar = array();

                $prof_client = Prof_client::where('prof_id',$prof_id)->get();
                if($prof_client && count($prof_client)>0){
                    foreach ($prof_client as $key => $value) {
                        $prof_client_ar[$value->user_id] = $value->status;
                    }
                }


                // if(in_array('all', $cl_type)){
                if('all' == $cl_type){

                   

                    $clist = Professional::where('status','approve')->where('user_type','!=','professional')
                                ->whereIn('id',function ($query) use($prof_id){
                                   $query->select('user_id')
                                         ->from('bookings')
                                         ->where('prof_id', $prof_id)
                                         ->distinct()
                                         ->get();
                                })
                                ->whereNotIn('id',function ($query) use($prof_id){
                                   $query->select('user_id')
                                         ->from('prof_clients')
                                         ->where('prof_id', $prof_id)
                                         ->where('status', 'remove')
                                         ->distinct()
                                         ->get();
                                })
                                ->get();


                    return view('salon.ajax.client_list')->with('clients',$clist)->with('prof_client',$prof_client_ar);         
                }
                else if('individual' == $cl_type){
                    $clist = Professional::where('status','approve')->where('user_type', 'individual')
                                ->whereIn('id',function ($query) use($prof_id){
                                   $query->select('user_id')
                                         ->from('bookings')
                                         ->where('prof_id', $prof_id)
                                         ->distinct()
                                         ->get();
                                })
                                ->whereNotIn('id',function ($query) use($prof_id){
                                   $query->select('user_id')
                                         ->from('prof_clients')
                                         ->where('prof_id', $prof_id)
                                         ->where('status', 'remove')
                                         ->distinct()
                                         ->get();
                                })
                                ->get();
                    return view('salon.ajax.client_list')->with('clients',$clist)->with('prof_client',$prof_client_ar);         
                }
                else if('company' == $cl_type){
                    $clist = Professional::where('status','approve')->where('user_type', 'company')
                                ->whereIn('id',function ($query) use($prof_id){
                                   $query->select('user_id')
                                         ->from('bookings')
                                         ->where('prof_id', $prof_id)
                                         ->distinct()
                                         ->get();
                                })
                                ->whereNotIn('id',function ($query) use($prof_id){
                                   $query->select('user_id')
                                         ->from('prof_clients')
                                         ->where('prof_id', $prof_id)
                                         ->where('status', 'remove')
                                         ->distinct()
                                         ->get();
                                })
                                ->get();    
                    return view('salon.ajax.client_list')->with('clients',$clist)->with('prof_client',$prof_client_ar);
                }

                else if('blocked' == $cl_type){
                    $clist = Professional::where('status','approve')->where('user_type', 'company')
                                ->whereIn('id',function ($query) use($prof_id){
                                   $query->select('user_id')
                                         ->from('prof_clients')
                                         ->where('prof_id', $prof_id)
                                         ->where('status', 'block')
                                         ->distinct()
                                         ->get();
                                })
                                ->get();    
                    return view('salon.ajax.client_list')->with('clients',$clist)->with('prof_client',$prof_client_ar);
                }   

                return '';


                    return view('salon.ajax.client_list')->with('clients',$clist);  
                
            }
        }

		if (isset($req->act) && $req->act == 'edit_avail') {

		
			if (!isset($req->team_member) || 
				$req->team_member == '' ||
				!isset($req->availability_id) ||
				$req->availability_id == ''
			) {
				$resp['status'] = 'ERROR';
				return response()->json($resp);
			}
		
			$availability_id = $req->availability_id;
			$team_member = $req->team_member;
			$location = isset($req->location) ? $req->location : '';
			$av_from_date = isset($req->av_from_date) ? $req->av_from_date : '';
			$av_to_date = isset($req->av_to_date) ? $req->av_to_date : '';
			$av_from_time = isset($req->av_from_time) ? $req->av_from_time : '';
			$av_to_time = isset($req->av_to_time) ? $req->av_to_time : '';
			$av_from_day = isset($req->av_from_day) ? $req->av_from_day : '';
			$av_to_day = isset($req->av_to_day) ? $req->av_to_day : '';
			$av_serv_interval = isset($req->av_serv_interval) ? $req->av_serv_interval : '';

			
		
			// Assuming Team_mem_availability model has been defined
			$tm_avail = Team_mem_availability::find($availability_id);
			

			
			if (!$tm_avail) {
				$resp['status'] = 'ERROR';
				return response()->json($resp);
			}
		
			// Update the availability
			$tm_avail->team_member = $team_member;
			$tm_avail->location = $location;
			$tm_avail->from_date = $av_from_date;
			$tm_avail->to_date = $av_to_date;
			$tm_avail->from_time = $av_from_time;
			$tm_avail->to_time = $av_to_time;
			$tm_avail->from_day = $av_from_day;
			$tm_avail->to_day = $av_to_day;
			$tm_avail->serv_interval = $av_serv_interval;
			$tm_avail->save();

			
			$resp['status'] = 'SUCCESS';
			return response()->json($resp);
		}

        if(isset($req->act) && $req->act=='save_avail'){
            if(!isset($req->team_member) || $req->team_member==''){
                $resp['status']='ERROR';
                return response()->json($resp);
            }

            $team_member = $req->team_member;
            $location = isset($req->location)?$req->location:'';
            $av_from_date = isset($req->av_from_date)?$req->av_from_date:'';
            $av_to_date = isset($req->av_to_date)?$req->av_to_date:'';
            $av_from_time = isset($req->av_from_time)?$req->av_from_time:'';
            $av_to_time = isset($req->av_to_time)?$req->av_to_time:'';
            $av_from_day = isset($req->av_from_day)?$req->av_from_day:'';
            $av_to_day = isset($req->av_to_day)?$req->av_to_day:'';
            $av_serv_interval = isset($req->av_serv_interval)?$req->av_serv_interval:'';

            $tm_avail = new Team_mem_availability;
            $tm_avail->team_member = $team_member;
            $tm_avail->location = $location;
            $tm_avail->from_date = $av_from_date;
            $tm_avail->to_date = $av_to_date;
            $tm_avail->from_time = $av_from_time;
            $tm_avail->to_time = $av_to_time;
            $tm_avail->from_day = $av_from_day;
            $tm_avail->to_day = $av_to_day;
            $tm_avail->serv_interval = $av_serv_interval;
            $tm_avail->save();

            $resp['status']='SUCCESS';
            $resp['i']=$tm_avail->id;
            return response()->json($resp);
        }

        if(isset($req->act) && $req->act=='remove_client'){
            $prof_id = session('salon_id');
            if($prof_id=='' || $prof_id=='0'){
                $request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
                $resp['status']='LOGIN';
                return response()->json($resp);
            }

            $cid = $req->id;
            $status = $req->status;

            if($cid!='' || $status==''){

                $chk = Prof_client::select('id')->where('prof_id',$prof_id)->where('user_id',$cid)->first();
                if($chk){
                    $chk->status = $status;
                    $chk->update();
                }
                else{
                    $prof_client = new Prof_client;
                    $prof_client->prof_id = $prof_id;
                    $prof_client->user_id = $cid;
                    $prof_client->status = $status;
                    $prof_client->save();
                }

                $resp['status']='SUCCESS';
                return response()->json($resp);
            }
            else{
                $resp['status']='ERROR';
                return response()->json($resp);
            }
        }

        if(isset($req->act) && $req->act=='active_client'){
            $prof_id = session('salon_id');
            if($prof_id=='' || $prof_id=='0'){
                $request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
                $resp['status']='LOGIN';
                return response()->json($resp);
            }

            $cid = $req->id;
            
            if($cid!=''){

                $chk = Prof_client::where('prof_id',$prof_id)->where('user_id',$cid)->delete();
                
                $resp['status']='SUCCESS';
                return response()->json($resp);
            }
            else{
                $resp['status']='ERROR';
                return response()->json($resp);
            }
        }

        if(isset($req->act) && $req->act=='delete_avail'){
            $prof_id = session('salon_id');
            if($prof_id=='' || $prof_id=='0'){
                $request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
                $resp['status'] = 'Login';
                return response()->json($resp);
            }

            $ni = $req->id;


            if($ni!='' && $ni!='0'){

                DB::table('team_mem_availability')->where('id',$ni)->update(['status'=>'remove']);
                $resp['status'] = 'SUCCESS';
                return response()->json($resp);
            }
            else{
                $resp['status'] = 'ERROR';
                return response()->json($resp);
            }
        }

        if(isset($req->act) && $req->act=='save_blocked_time'){
            if(!isset($req->team_member) || $req->team_member==''){
                $resp['status']='ERROR';
                return response()->json($resp);
            }

            $team_member = $req->team_member;
            $av_from_date = isset($req->av_from_date)?$req->av_from_date:'';
            $av_to_date = isset($req->av_to_date)?$req->av_to_date:'';
            $av_from_time = isset($req->av_from_time)?$req->av_from_time:'';
            $av_to_time = isset($req->av_to_time)?$req->av_to_time:'';
            $av_from_day = isset($req->av_from_day)?$req->av_from_day:'';
            $av_to_day = isset($req->av_to_day)?$req->av_to_day:'';
            $description = isset($req->description)?$req->description:'';

            $tm_avail = new Blocked_Time;
            $tm_avail->team_member = $team_member;
            $tm_avail->from_date = $av_from_date;
            $tm_avail->to_date = $av_to_date;
            $tm_avail->from_time = $av_from_time;
            $tm_avail->to_time = $av_to_time;
            $tm_avail->from_day = $av_from_day;
            $tm_avail->to_day = $av_to_day;
            $tm_avail->description = $description;
            $tm_avail->save();


            $resp['status']='SUCCESS';
            $resp['i']=$tm_avail->id;
            return response()->json($resp);
        }

        if(isset($req->act) && $req->act=='delete_blocked_time'){

            $prof_id = session('salon_id');
            if($prof_id=='' || $prof_id=='0'){
                $request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
                $resp['status'] = 'Login';
                return response()->json($resp);
            }

            $ni = $req->id;

            if($ni!='' && $ni!='0'){

                DB::table('blocked_time')->where('id',$ni)->update(['status'=>'remove']);
                $resp['status'] = 'SUCCESS';
                return response()->json($resp);
            }
            else{
                $resp['status'] = 'ERROR';
                return response()->json($resp);
            }
        }

        if (isset($req->act) && $req->act == 'edit_blocked_time') {

            if (!isset($req->team_member) ||
                $req->team_member == '' ||
                !isset($req->blocked_time_id) ||
                $req->blocked_time_id == ''
            ) {
                $resp['status'] = 'ERROR';
                return response()->json($resp);
            }

            $blocked_time_id = $req->blocked_time_id;
            $team_member = $req->team_member;
            $av_from_date = isset($req->av_from_date) ? $req->av_from_date : '';
            $av_to_date = isset($req->av_to_date) ? $req->av_to_date : '';
            $av_from_time = isset($req->av_from_time) ? $req->av_from_time : '';
            $av_to_time = isset($req->av_to_time) ? $req->av_to_time : '';
            $av_from_day = isset($req->av_from_day) ? $req->av_from_day : '';
            $av_to_day = isset($req->av_to_day) ? $req->av_to_day : '';
            $description = isset($req->description) ? $req->description : '';

            $tm_blocked_time = blocked_Time::find($blocked_time_id);

            if (!$tm_blocked_time) {
                $resp['status'] = 'ERROR';
                return response()->json($resp);
            }

            $tm_blocked_time->team_member = $team_member;
            $tm_blocked_time->from_date = $av_from_date;
            $tm_blocked_time->to_date = $av_to_date;
            $tm_blocked_time->from_time = $av_from_time;
            $tm_blocked_time->to_time = $av_to_time;
            $tm_blocked_time->from_day = $av_from_day;
            $tm_blocked_time->to_day = $av_to_day;
            $tm_blocked_time->description = $description;
            $tm_blocked_time->save();


            $resp['status'] = 'SUCCESS';
            return response()->json($resp);
        }




    }

	// public function ajx_prof_setting_booking(Request $req){
		
    //     $resp = array();

      
		
		
    //     if(isset($req->act) && $req->act=='get_bookings'){
    //         $prof_id = session('salon_id');
    //         if($prof_id=='' || $prof_id=='0'){
    //             $request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
    //             return 'NeedProfLogin';
    //         }

    //         $cl_type = $req->cl;

			
    //         if($cl_type && $cl_type!=''){
    //             $prof_client_ar = array();

    //             $prof_client = Prof_client::where('prof_id',$prof_id)->get();
    //             if($prof_client && count($prof_client)>0){
    //                 foreach ($prof_client as $key => $value) {
    //                     $prof_client_ar[$value->user_id] = $value->status;
    //                 }
    //             }


    //             // if(in_array('all', $cl_type)){
    //             if('all' == $cl_type){

                   

    //                 $clist = Professional::where('status','approve')->where('user_type','!=','professional')
    //                             ->whereIn('id',function ($query) use($prof_id){
    //                                $query->select('user_id')
    //                                      ->from('bookings')
    //                                      ->where('prof_id', $prof_id)
    //                                      ->distinct()
    //                                      ->get();
    //                             })
    //                             ->whereNotIn('id',function ($query) use($prof_id){
    //                                $query->select('user_id')
    //                                      ->from('prof_clients')
    //                                      ->where('prof_id', $prof_id)
    //                                      ->where('status', 'remove')
    //                                      ->distinct()
    //                                      ->get();
    //                             })
    //                             ->get();


    //                 return view('salon.ajax.client_list')->with('clients',$clist)->with('prof_client',$prof_client_ar);         
    //             }
    //             else if('individual' == $cl_type){
    //                 $clist = Professional::where('status','approve')->where('user_type', 'individual')
    //                             ->whereIn('id',function ($query) use($prof_id){
    //                                $query->select('user_id')
    //                                      ->from('bookings')
    //                                      ->where('prof_id', $prof_id)
    //                                      ->distinct()
    //                                      ->get();
    //                             })
    //                             ->whereNotIn('id',function ($query) use($prof_id){
    //                                $query->select('user_id')
    //                                      ->from('prof_clients')
    //                                      ->where('prof_id', $prof_id)
    //                                      ->where('status', 'remove')
    //                                      ->distinct()
    //                                      ->get();
    //                             })
    //                             ->get();
    //                 return view('salon.ajax.client_list')->with('clients',$clist)->with('prof_client',$prof_client_ar);         
    //             }
    //             else if('company' == $cl_type){
    //                 $clist = Professional::where('status','approve')->where('user_type', 'company')
    //                             ->whereIn('id',function ($query) use($prof_id){
    //                                $query->select('user_id')
    //                                      ->from('bookings')
    //                                      ->where('prof_id', $prof_id)
    //                                      ->distinct()
    //                                      ->get();
    //                             })
    //                             ->whereNotIn('id',function ($query) use($prof_id){
    //                                $query->select('user_id')
    //                                      ->from('prof_clients')
    //                                      ->where('prof_id', $prof_id)
    //                                      ->where('status', 'remove')
    //                                      ->distinct()
    //                                      ->get();
    //                             })
    //                             ->get();    
    //                 return view('salon.ajax.client_list')->with('clients',$clist)->with('prof_client',$prof_client_ar);
    //             }

    //             else if('blocked' == $cl_type){
    //                 $clist = Professional::where('status','approve')->where('user_type', 'company')
    //                             ->whereIn('id',function ($query) use($prof_id){
    //                                $query->select('user_id')
    //                                      ->from('prof_clients')
    //                                      ->where('prof_id', $prof_id)
    //                                      ->where('status', 'block')
    //                                      ->distinct()
    //                                      ->get();
    //                             })
    //                             ->get();    
    //                 return view('salon.ajax.client_list')->with('clients',$clist)->with('prof_client',$prof_client_ar);
    //             }   

    //             return '';


    //                 return view('salon.ajax.client_list')->with('clients',$clist);  
                
    //         }
    //     }

	// 	if (isset($req->act) && $req->act == 'edit_booking') {

		
	// 		if (!isset($req->team_member) || 
	// 			$req->team_member == '' ||
	// 			!isset($req->availability_id) ||
	// 			$req->availability_id == ''
	// 		) {
	// 			$resp['status'] = 'ERROR';
	// 			return response()->json($resp);
	// 		}
		
	// 		$availability_id = $req->availability_id;
	// 		$team_member = $req->team_member;
	// 		$location = isset($req->location) ? $req->location : '';
	// 		$av_from_date = isset($req->av_from_date) ? $req->av_from_date : '';
	// 		$av_to_date = isset($req->av_to_date) ? $req->av_to_date : '';
	// 		$av_from_time = isset($req->av_from_time) ? $req->av_from_time : '';
	// 		$av_to_time = isset($req->av_to_time) ? $req->av_to_time : '';
	// 		$av_from_day = isset($req->av_from_day) ? $req->av_from_day : '';
	// 		$av_to_day = isset($req->av_to_day) ? $req->av_to_day : '';
	// 		$av_serv_interval = isset($req->av_serv_interval) ? $req->av_serv_interval : '';

			
		
	// 		// Assuming Team_mem_availability model has been defined
	// 		$tm_avail = Team_mem_availability::find($availability_id);
			

			
	// 		if (!$tm_avail) {
	// 			$resp['status'] = 'ERROR';
	// 			return response()->json($resp);
	// 		}
		
	// 		// Update the availability
	// 		$tm_avail->team_member = $team_member;
	// 		$tm_avail->location = $location;
	// 		$tm_avail->from_date = $av_from_date;
	// 		$tm_avail->to_date = $av_to_date;
	// 		$tm_avail->from_time = $av_from_time;
	// 		$tm_avail->to_time = $av_to_time;
	// 		$tm_avail->from_day = $av_from_day;
	// 		$tm_avail->to_day = $av_to_day;
	// 		$tm_avail->serv_interval = $av_serv_interval;
	// 		$tm_avail->save();

			
	// 		$resp['status'] = 'SUCCESS';
	// 		return response()->json($resp);
	// 	}

    //     if(isset($req->act) && $req->act=='save_booking'){
    //         if(!isset($req->team_member) || $req->team_member==''){
    //             $resp['status']='ERROR';
    //             return response()->json($resp);
    //         }

    //         $team_member = $req->team_member;
    //         $location = isset($req->location)?$req->location:'';
    //         $av_from_date = isset($req->av_from_date)?$req->av_from_date:'';
    //         $av_to_date = isset($req->av_to_date)?$req->av_to_date:'';
    //         $av_from_time = isset($req->av_from_time)?$req->av_from_time:'';
    //         $av_to_time = isset($req->av_to_time)?$req->av_to_time:'';
    //         $av_from_day = isset($req->av_from_day)?$req->av_from_day:'';
    //         $av_to_day = isset($req->av_to_day)?$req->av_to_day:'';
    //         $av_serv_interval = isset($req->av_serv_interval)?$req->av_serv_interval:'';

    //         $tm_avail = new Team_mem_availability;
    //         $tm_avail->team_member = $team_member;
    //         $tm_avail->location = $location;
    //         $tm_avail->from_date = $av_from_date;
    //         $tm_avail->to_date = $av_to_date;
    //         $tm_avail->from_time = $av_from_time;
    //         $tm_avail->to_time = $av_to_time;
    //         $tm_avail->from_day = $av_from_day;
    //         $tm_avail->to_day = $av_to_day;
    //         $tm_avail->serv_interval = $av_serv_interval;
    //         $tm_avail->save();

    //         $resp['status']='SUCCESS';
    //         $resp['i']=$tm_avail->id;
    //         return response()->json($resp);
    //     }

       
        

    //     if(isset($req->act) && $req->act=='delete_booking'){
    //         $prof_id = session('salon_id');
    //         if($prof_id=='' || $prof_id=='0'){
    //             $request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
    //             $resp['status'] = 'Login';
    //             return response()->json($resp);
    //         }

    //         $ni = $req->id;


    //         if($ni!='' && $ni!='0'){

    //             DB::table('team_mem_availability')->where('id',$ni)->update(['status'=>'remove']);
    //             $resp['status'] = 'SUCCESS';
    //             return response()->json($resp);
    //         }
    //         else{
    //             $resp['status'] = 'ERROR';
    //             return response()->json($resp);
    //         }
    //     }

    // }

	public function client_list(Request $request){
        $prof_id = session('salon_id');
        if($prof_id=='' || $prof_id=='0'){
            $request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
            return redirect('login');
        }

		return view('salon.client_list');
	}
	public function prof_messages(){
		return view('salon.messages');
	}
	public function payment_setting(){
		return view('salon.payment_setting');
	}
	
	
	public function get_hr_service($value){
		$hr='';
		if($value->start_time=='07:00'){
			$d1 = explode('-', $value->duration);
			if(count($d1)==2){
				$d2 = explode(':', $d1[1]);
			}
			else{
				$d2 = explode(':', $d1[0]);
			}
			

			$value->hr = '7';

			if(strrpos($d2[0], 'm')){
				if(intval($d2[0])<=30){
					$value->thr = '7.5';
					$value->end_time = '7:30';
					$value->max_time = '0';
				}
				else{
					$value->thr = '8';
					$value->end_time = '8:00';
					$value->max_time = '1';
				}
			}
			elseif(strrpos($d2[0], 'h')){
				$value->thr = 7+intval($d2[0]);
				$value->end_time = 7+intval($d2[0]) .":00";
				$value->max_time = intval($d2[0]);
			}
		}

		if($value->start_time=='07:30'){
			$d1 = explode('-', $value->duration);
			if(count($d1)==2){
				$d2 = explode(':', $d1[1]);
			}
			else{
				$d2 = explode(':', $d1[0]);
			}

			$value->hr = '7.5';

			if(strrpos($d2[0], 'm')){
				if(intval($d2[0])<=30){
					$value->thr = '8';
					$value->end_time = '8:00';
					$value->max_time = '0';
				}
				else{
					$value->thr = '8.5';
					$value->end_time = '8:30';
					$value->max_time = '2';
				}
			}
			elseif(strrpos($d2[0], 'h')){
				$value->thr = (7.5)+intval($d2[0]);
				$value->end_time = (7)+intval($d2[0]). ':30';
				$value->max_time = intval($d2[0]);
			}
		}

		if($value->start_time=='08:00'){
			$d1 = explode('-', $value->duration);
			if(count($d1)==2){
				$d2 = explode(':', $d1[1]);
			}
			else{
				$d2 = explode(':', $d1[0]);
			}

			$value->hr = '8';

			if(strrpos($d2[0], 'm')){
				if(intval($d2[0])<=30){
					$value->thr = '8.5';
					$value->end_time = '8:30';
					$value->max_time = '0';
				}
				else{
					$value->thr = '9';
					$value->end_time = '9:00';
					$value->max_time = '1';
				}
			}
			elseif(strrpos($d2[0], 'h')){
				$value->thr = 8+intval($d2[0]);
				$value->end_time = (8)+intval($d2[0]). ':00';
				$value->max_time = intval($d2[0]);
			}
		}

		if($value->start_time=='08:30'){
			$d1 = explode('-', $value->duration);
			if(count($d1)==2){
				$d2 = explode(':', $d1[1]);
			}
			else{
				$d2 = explode(':', $d1[0]);
			}

			$value->hr = '8.5';

			if(strrpos($d2[0], 'm')){
				if(intval($d2[0])<=30){
					$value->thr = '9';
					$value->end_time = '9:00';
					$value->max_time = '0';
				}
				else{
					$value->thr = '9.5';
					$value->end_time = '9:30';
					$value->max_time = '2';
				}
			}
			elseif(strrpos($d2[0], 'h')){
				$value->thr = (8.5)+intval($d2[0]);
				$value->end_time = (8)+intval($d2[0]). ':30';
				$value->max_time = intval($d2[0]);
			}
		}

		if($value->start_time=='09:00'){
			$d1 = explode('-', $value->duration);
			if(count($d1)==2){
				$d2 = explode(':', $d1[1]);
			}
			else{
				$d2 = explode(':', $d1[0]);
			}

			$value->hr = '9';

			if(strrpos($d2[0], 'm')){
				if(intval($d2[0])<=30){
					$value->thr = '9.5';
					$value->end_time = '9:30';
					$value->max_time = '0';
				}
				else{
					$value->thr = '10';
					$value->end_time = '10:00';
					$value->max_time = '1';
				}
			}
			elseif(strrpos($d2[0], 'h')){
				$value->thr = 9+intval($d2[0]);
				$value->end_time = (9)+intval($d2[0]). ':00';
				$value->max_time = intval($d2[0]);
			}
		}

		if($value->start_time=='09:30'){
			$d1 = explode('-', $value->duration);
			if(count($d1)==2){
				$d2 = explode(':', $d1[1]);
			}
			else{
				$d2 = explode(':', $d1[0]);
			}

			$value->hr = '9.5';

			if(strrpos($d2[0], 'm')){
				if(intval($d2[0])<=30){
					$value->thr = '10';
					$value->end_time = '10:00';
					$value->max_time = '0';
				}
				else{
					$value->thr = '10.5';
					$value->end_time = '10:30';
					$value->max_time = '2';
				}
			}
			elseif(strrpos($d2[0], 'h')){
				$value->thr = (9.5)+intval($d2[0]);
				$value->end_time = (9)+intval($d2[0]). ':30';
				$value->max_time = intval($d2[0]);
			}
		}

		if($value->start_time=='10:00'){
			$d1 = explode('-', $value->duration);
			if(count($d1)==2){
				$d2 = explode(':', $d1[1]);
			}
			else{
				$d2 = explode(':', $d1[0]);
			}

			$value->hr = '10';

			if(strrpos($d2[0], 'm')){
				if(intval($d2[0])<=30){
					$value->thr = '10.5';
					$value->end_time = '10:30';
					$value->max_time = '0';
				}
				else{
					$value->thr = '11';
					$value->end_time = '11:00';
					$value->max_time = '1';
				}
			}
			elseif(strrpos($d2[0], 'h')){
				$value->thr = 10+intval($d2[0]);
				$value->end_time = (10)+intval($d2[0]). ':00';
				$value->max_time = intval($d2[0]);
			}
		}

		if($value->start_time=='10:30'){
			$d1 = explode('-', $value->duration);
			if(count($d1)==2){
				$d2 = explode(':', $d1[1]);
			}
			else{
				$d2 = explode(':', $d1[0]);
			}

			$value->hr = '10.5';

			if(strrpos($d2[0], 'm')){
				if(intval($d2[0])<=30){
					$value->thr = '11';
					$value->end_time = '11:00';
					$value->max_time = '0';
				}
				else{
					$value->thr = '11.5';
					$value->end_time = '11:30';
					$value->max_time = '2';
				}
			}
			elseif(strrpos($d2[0], 'h')){
				$value->thr = (10.5)+intval($d2[0]);
				$value->end_time = (10)+intval($d2[0]). ':30';
				$value->max_time = intval($d2[0]);
			}
		}

		if($value->start_time=='11:00'){
			$d1 = explode('-', $value->duration);
			if(count($d1)==2){
				$d2 = explode(':', $d1[1]);
			}
			else{
				$d2 = explode(':', $d1[0]);
			}

			$value->hr = '11';

			if(strrpos($d2[0], 'm')){
				if(intval($d2[0])<=30){
					$value->thr = '11.5';
					$value->end_time = '11:30';
					$value->max_time = '0';
				}
				else{
					$value->thr = '12';
					$value->end_time = '12:00';
					$value->max_time = '1';
				}
			}
			elseif(strrpos($d2[0], 'h')){
				$value->thr = 11+intval($d2[0]);
				$value->end_time = (11)+intval($d2[0]). ':00';
				$value->max_time = intval($d2[0]);
			}
		}

		if($value->start_time=='11:30'){
			$d1 = explode('-', $value->duration);
			if(count($d1)==2){
				$d2 = explode(':', $d1[1]);
			}
			else{
				$d2 = explode(':', $d1[0]);
			}

			$value->hr = '11.5';

			if(strrpos($d2[0], 'm')){
				if(intval($d2[0])<=30){
					$value->thr = '12';
					$value->end_time = '12:00';
					$value->max_time = '0';
				}
				else{
					$value->thr = '12.5';
					$value->end_time = '12:30';
					$value->max_time = '2';
				}
			}
			elseif(strrpos($d2[0], 'h')){
				$value->thr = (11.5)+intval($d2[0]);
				$value->end_time = (11)+intval($d2[0]). ':30';
				$value->max_time = intval($d2[0]);
			}
		}

		if($value->start_time=='12:00'){
			$d1 = explode('-', $value->duration);
			if(count($d1)==2){
				$d2 = explode(':', $d1[1]);
			}
			else{
				$d2 = explode(':', $d1[0]);
			}

			$value->hr = '12';

			if(strrpos($d2[0], 'm')){
				if(intval($d2[0])<=30){
					$value->thr = '12.5';
					$value->end_time = '12:30';
					$value->max_time = '0';
				}
				else{
					$value->thr = '13';
					$value->end_time = '13:00';
					$value->max_time = '1';
				}
			}
			elseif(strrpos($d2[0], 'h')){
				$value->thr = 12+intval($d2[0]);
				$value->end_time = (12)+intval($d2[0]). ':00';
				$value->max_time = intval($d2[0]);
			}
		}

		if($value->start_time=='12:30'){
			$d1 = explode('-', $value->duration);
			if(count($d1)==2){
				$d2 = explode(':', $d1[1]);
			}
			else{
				$d2 = explode(':', $d1[0]);
			}

			$value->hr = '12.5';

			if(strrpos($d2[0], 'm')){
				if(intval($d2[0])<=30){
					$value->thr = '13';
					$value->end_time = '13:00';
					$value->max_time = '0';
				}
				else{
					$value->thr = '13.5';
					$value->end_time = '13:30';
					$value->max_time = '2';
				}
			}
			elseif(strrpos($d2[0], 'h')){
				$value->thr = (12.5)+intval($d2[0]);
				$value->end_time = (12)+intval($d2[0]). ':30';
				$value->max_time = intval($d2[0]);
			}
		}

		if($value->start_time=='01:00'){
			$d1 = explode('-', $value->duration);
			if(count($d1)==2){
				$d2 = explode(':', $d1[1]);
			}
			else{
				$d2 = explode(':', $d1[0]);
			}

			$value->hr = '13';

			if(strrpos($d2[0], 'm')){
				if(intval($d2[0])<=30){
					$value->thr = '13.5';
					$value->end_time = '13:30';
					$value->max_time = '0';
				}
				else{
					$value->thr = '14';
					$value->end_time = '14:00';
					$value->max_time = '1';
				}
			}
			elseif(strrpos($d2[0], 'h')){
				$value->thr = 13+intval($d2[0]);
				$value->end_time = (13)+intval($d2[0]). ':00';
				$value->max_time = intval($d2[0]);
			}
		}

		if($value->start_time=='01:30'){
			$d1 = explode('-', $value->duration);
			if(count($d1)==2){
				$d2 = explode(':', $d1[1]);
			}
			else{
				$d2 = explode(':', $d1[0]);
			}

			$value->hr = '13.5';

			if(strrpos($d2[0], 'm')){
				if(intval($d2[0])<=30){
					$value->thr = '14';
					$value->end_time = '14:00';
					$value->max_time = '0';
				}
				else{
					$value->thr = '14.5';
					$value->end_time = '14:30';
					$value->max_time = '2';
				}
			}
			elseif(strrpos($d2[0], 'h')){
				$value->thr = (13.5)+intval($d2[0]);
				$value->end_time = (13)+intval($d2[0]). ':30';
				$value->max_time = intval($d2[0]);
			}
		}

		if($value->start_time=='02:00'){
			$d1 = explode('-', $value->duration);
			if(count($d1)==2){
				$d2 = explode(':', $d1[1]);
			}
			else{
				$d2 = explode(':', $d1[0]);
			}

			$value->hr = '14';

			if(strrpos($d2[0], 'm')){
				if(intval($d2[0])<=30){
					$value->thr = '14.5';
					$value->end_time = '14:30';
					$value->max_time = '0';
				}
				else{
					$value->thr = '15';
					$value->end_time = '15:00';
					$value->max_time = '1';
				}
			}
			elseif(strrpos($d2[0], 'h')){
				$value->thr = 14+intval($d2[0]);
				$value->end_time = (14)+intval($d2[0]). ':00';
				$value->max_time = intval($d2[0]);
			}
		}

		if($value->start_time=='02:30'){
			$d1 = explode('-', $value->duration);
			if(count($d1)==2){
				$d2 = explode(':', $d1[1]);
			}
			else{
				$d2 = explode(':', $d1[0]);
			}

			$value->hr = '14.5';

			if(strrpos($d2[0], 'm')){
				if(intval($d2[0])<=30){
					$value->thr = '15';
					$value->end_time = '15:00';
					$value->max_time = '0';
				}
				else{
					$value->thr = '15.5';
					$value->end_time = '15:30';
					$value->max_time = '2';
				}
			}
			elseif(strrpos($d2[0], 'h')){
				$value->thr = (14.5)+intval($d2[0]);
				$value->end_time = (14)+intval($d2[0]). ':30';
				$value->max_time = intval($d2[0]);
			}
		}

		if($value->start_time=='03:00'){
			$d1 = explode('-', $value->duration);
			if(count($d1)==2){
				$d2 = explode(':', $d1[1]);
			}
			else{
				$d2 = explode(':', $d1[0]);
			}

			$value->hr = '15';

			if(strrpos($d2[0], 'm')){
				if(intval($d2[0])<=30){
					$value->thr = '15.5';
					$value->end_time = '15:30';
					$value->max_time = '0';
				}
				else{
					$value->thr = '16';
					$value->end_time = '16:00';
					$value->max_time = '1';
				}
			}
			elseif(strrpos($d2[0], 'h')){
				$value->thr = 15+intval($d2[0]);
				$value->end_time = (15)+intval($d2[0]). ':00';
				$value->max_time = intval($d2[0]);
			}
		}

		if($value->start_time=='03:30'){
			$d1 = explode('-', $value->duration);
			if(count($d1)==2){
				$d2 = explode(':', $d1[1]);
			}
			else{
				$d2 = explode(':', $d1[0]);
			}

			$value->hr = '15.5';

			if(strrpos($d2[0], 'm')){
				if(intval($d2[0])<=30){
					$value->thr = '16';
					$value->end_time = '16:00';
					$value->max_time = '0';
				}
				else{
					$value->thr = '16.5';
					$value->end_time = '16:30';
					$value->max_time = '2';
				}
			}
			elseif(strrpos($d2[0], 'h')){
				$value->thr = (15.5)+intval($d2[0]);
				$value->end_time = (15)+intval($d2[0]). ':30';
				$value->max_time = intval($d2[0]);
			}
		}

		if($value->start_time=='04:00'){
			$d1 = explode('-', $value->duration);
			if(count($d1)==2){
				$d2 = explode(':', $d1[1]);
			}
			else{
				$d2 = explode(':', $d1[0]);
			}

			$value->hr = '16';

			if(strrpos($d2[0], 'm')){
				if(intval($d2[0])<=30){
					$value->thr = '16.5';
					$value->end_time = '16:30';
					$value->max_time = '0';
				}
				else{
					$value->thr = '17';
					$value->end_time = '17:00';
					$value->max_time = '1';
				}
			}
			elseif(strrpos($d2[0], 'h')){
				$value->thr = 16+intval($d2[0]);
				$value->end_time = (16)+intval($d2[0]). ':00';
				$value->max_time = intval($d2[0]);
				
			}
		}

		if($value->start_time=='04:30'){
			$d1 = explode('-', $value->duration);
			if(count($d1)==2){
				$d2 = explode(':', $d1[1]);
			}
			else{
				$d2 = explode(':', $d1[0]);
			}

			$value->hr = '16.5';

			if(strrpos($d2[0], 'm')){
				if(intval($d2[0])<=30){
					$value->thr = '17';
					$value->end_time = '17:00';
					$value->max_time = '0';
				}
				else{
					$value->thr = '17.5';
					$value->end_time = '17:30';
					$value->max_time = '2';
				}
			}
			elseif(strrpos($d2[0], 'h')){
				$value->thr = (16.5)+intval($d2[0]);
				$value->end_time = (16)+intval($d2[0]). ':30';
				$value->max_time = intval($d2[0]);
				
			}
		}

		if($value->start_time=='05:00'){
			$d1 = explode('-', $value->duration);
			if(count($d1)==2){
				$d2 = explode(':', $d1[1]);
			}
			else{
				$d2 = explode(':', $d1[0]);
			}

			$value->hr = '17';

			if(strrpos($d2[0], 'm')){
				if(intval($d2[0])<=30){
					$value->thr = '17.5';
					$value->end_time = '17:30';
					$value->max_time = '0';
				}
				else{
					$value->thr = '18';
					$value->end_time = '18:00';
					$value->max_time = '1';
				}
			}
			elseif(strrpos($d2[0], 'h')){
				$value->thr = 17+intval($d2[0]);
				$value->end_time = (17)+intval($d2[0]). ':00';
				$value->max_time = intval($d2[0]);
				
			}
		}

		if($value->start_time=='05:30'){
			$d1 = explode('-', $value->duration);
			if(count($d1)==2){
				$d2 = explode(':', $d1[1]);
			}
			else{
				$d2 = explode(':', $d1[0]);
			}

			$value->hr = '17.5';

			if(strrpos($d2[0], 'm')){
				if(intval($d2[0])<=30){
					$value->thr = '18';
					$value->end_time = '18:00';
					$value->max_time = '0';
				}
				else{
					$value->thr = '18.5';
					$value->end_time = '18:30';
					$value->max_time = '2';
				}
			}
			elseif(strrpos($d2[0], 'h')){
				$value->thr = (17.5)+intval($d2[0]);
				$value->end_time = (17)+intval($d2[0]). ':30';
				$value->max_time = intval($d2[0]);
				
			}
		}

		return $value;

		/*$ar_hr = array();

		if($value->start_time=='07:00' || $value->start_time=='07:30'){
			$ar_hr['7'] = $value;
			$value->hr = '7';
		}
		if($value->start_time=='08:00' || $value->start_time=='08:30'){
			$ar_hr['8'] = $value;
			$value->hr = '8';
		}
		if($value->start_time=='09:00' || $value->start_time=='09:30'){
			$ar_hr['9'] = $value;
			$value->hr = '9';
		}
		if($value->start_time=='10:00' || $value->start_time=='10:30'){
			$ar_hr['10'] = $value;
			$value->hr = '10';
		}
		if($value->start_time=='11:00' || $value->start_time=='11:30'){
			$ar_hr['11'] = $value;
			$value->hr = '11';
		}
		if($value->start_time=='12:00' || $value->start_time=='12:30'){
			$ar_hr['12'] = $value;
			$value->hr = '12';
		}
		if($value->start_time=='01:00' || $value->start_time=='01:30'){
			$ar_hr['13'] = $value;
			$value->hr = '13';
		}
		if($value->start_time=='02:00' || $value->start_time=='02:30'){
			$ar_hr['14'] = $value;
			$value->hr = '14';
		}
		if($value->start_time=='03:00' || $value->start_time=='03:30'){
			$ar_hr['15'] = $value;
			$value->hr = '15';
		}
		if($value->start_time=='04:00' || $value->start_time=='04:30'){
			$ar_hr['16'] = $value;
			$value->hr = '16';
		}
		if($value->start_time=='05:00' || $value->start_time=='05:30'){
			$ar_hr['17'] = $value;
			$value->hr = '17';
		}

		return $value;*/
	}





	//====================================//
	//	------ DUTCH Language start------//
	//====================================//


	public function nl_dashboard(Request $req)
	{

		$prof_id = session('salon_id');
		if($prof_id=='' || $prof_id=='0'){
			$request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
			return redirect('login');
		}


		$prof = Professional::find($prof_id);
		
		if($prof){

			/*$fixed_loc_salon = Nl_fixed_location_salon::where('prof_id',$prof_id)
												->where('status','!=','remove')
												->get();

			$des_loc_salon = Nl_desire_location::where('prof_id',$prof_id)
												->where('status','!=','remove')
												->get();*/

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

			$uri  = $_SERVER['REQUEST_URI'];
			$qs='';
			if(strpos($uri, '?') !== false){
				$qs = explode('?', $uri);
				$qs = $qs['1'];
			}

			$huri = route('dashboard').'?'.$qs;

			$province = Province::where('status','active')->orderby('nl_name')->get();
			$municipality = Municipality::where('status','active')->where('province_id',$prof->prof_address[0]->province_id)->orderby('nl_name')->get();
		
		
			return view('salon.nl.nl_profile')->with('prof',$prof)
							->with('fixed_loc_salon',$fixed_loc_salon)
							->with('des_loc_salon',$des_loc_salon)
							->with('lang_kwords',$lang_kwords_ar)
							->with('huri',$huri)
							->with('municipality',$municipality)
							->with('province',$province);
							// ->with('all_municipality',$all_municipality);
		}
		else{
			$request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
			return redirect('login')->withErrors(['msg' => 'Something went wrong, please try again.']);
		}
	}

	public function nl_fixed_location_update(Request $req){
		$fixed_name = $req->fixed_name;
		$fixed_bio = $req->fixed_bio;
		$fixed_pic = $req->file('fixed_pic');

		$prof_id = session('salon_id');
		if($prof_id=='' || $prof_id=='0'){
			echo 'ERR';
		}

		$prof = Professional::find($prof_id);
		if(!$prof){
			echo 'ERR';
		}

		if($fixed_pic!=""){
          $name = time().'.'.$fixed_pic->getClientOriginalExtension();
          $destinationPath = public_path('/imgs/template');
          $fixed_pic->move($destinationPath, $name);
          $prof->fixed_pic=$name;
        }
        $prof->fixed_bio_nl = $fixed_bio;
        $prof->fixed_name_nl = $fixed_name;
        $prof->update();

        echo 'SUC';

	}

	public function nl_salon_add(Request $req){
		$salon_name = $req->salon_name;
		$street = $req->street;
		$number = $req->number;
		$postal_code = $req->postal_code;
		$municipality = $req->municipality;
		$province = $req->province;
		$type = $req->type;
		$act = $req->act;

		if($act=='update'){
			$sid=$req->sid;
			$prof_temp = Nl_fixed_location_salon::find($sid);
			$prof_temp->salon_name = $salon_name;
			$prof_temp->street = $street;
			$prof_temp->number = $number;
			$prof_temp->postal_code = $postal_code;
			$prof_temp->municipality = $municipality;
			$prof_temp->province = $province;
			$prof_temp->update();

		}else{

			$prof_id = session('salon_id');
			if($prof_id=='' || $prof_id=='0'){
				echo 'ERR';
			}

			$prof = Professional::find($prof_id);
			if(!$prof){
				echo 'ERR';
			}

			$prof_temp = new Nl_fixed_location_salon;
			$prof_temp->prof_id = $prof_id;
			$prof_temp->salon_name = $salon_name;
			$prof_temp->street = $street;
			$prof_temp->number = $number;
			$prof_temp->postal_code = $postal_code;
			$prof_temp->municipality = $municipality;
			$prof_temp->province = $province;
			$prof_temp->save();
		}

		echo 'SUC';
	}

	public function nl_salon_ajx(Request $req){
		$resp = array();

		if(isset($req->act) && $req->act=='info_verify'){
			$prof_id = session('salon_id');
			if($prof_id=='' || $prof_id=='0'){
				$resp['status'] = 'ERROR';
			}

			$prof = Professional::find($prof_id);
			if(!$prof){
				$resp['status'] = 'ERROR';
			}
			$temp_type = $req->temp_type;
			if($temp_type=='f')
				$prof->fixed_info_nl='0';
			else
				$prof->desire_info_nl='0';
			$prof->update();
			$resp['status'] = 'SUCCESS';
			return response()->json($resp);
		}

		if(isset($req->act) && $req->act=='get_salon'){
			$sid = $req->sid;
			$prof_temp = NL_fixed_location_salon::find($sid);
			
			if($prof_temp){
				$resp['status'] = 'SUCCESS';
				$resp['salon_name'] = $prof_temp->salon_name;
				$resp['street'] = $prof_temp->street;
				$resp['number'] = $prof_temp->number;
				$resp['postal_code'] = $prof_temp->postal_code;
				$resp['municipality'] = $prof_temp->municipality;
				$resp['province'] = $prof_temp->province;

				$municipality_list = array();
				$prov = Province::where('nl_name',$prof_temp->province)->get();
				if(count($prov)>0){
					$municipality_list = Municipality::select('id','name','nl_name')->where('status','active')->where('province_id',$prov[0]->id)->get();
				}

				$resp['municipality_list'] = $municipality_list;
				
			}
			else{
				$resp['status'] = 'ERROR';
			}

			return response()->json($resp);
		}

		if(isset($req->act) && $req->act=='delete_salon'){
			$sid = $req->sid;
			$prof_temp = Nl_fixed_location_salon::find($sid);
			
			if($prof_temp){
				$prof_temp->status='remove';
				$prof_temp->update();
				$resp['status'] = 'SUCCESS';
			}
			else{
				$resp['status'] = 'ERROR';
			}
			return response()->json($resp);
		}

		if(isset($req->act) && $req->act=='delete_des_location'){
            $sid = $req->sid;
            $prof_temp = Nl_desire_location::find($sid);
            
            if($prof_temp){
                $prof_temp->status='remove';
                $prof_temp->update();
                $resp['status'] = 'SUCCESS';
            }
            else{
                $resp['status'] = 'ERROR';
            }
            return response()->json($resp);
        }

		if(isset($req->act) && $req->act=='get_fix_loc_detail'){
			$prof_id = session('salon_id');
			if($prof_id=='' || $prof_id=='0'){
				echo 'ERR';
			}

			$prof = Professional::find($prof_id);
			if(!$prof){
				echo 'ERR';
			}

			$template_detail = Nl_template_note::where('prof_id',$prof_id)
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

			$team = Nl_prof_team_member::where('location_type','f')
									->where('status','active')
									->where('prof_id',$prof_id)
									->get();
			$team_ar = array();
                if($team && count($team)>0){
                    foreach ($team as $key => $value) {
                        $ar = array();
                        $ar['bio'] = $value->bio;
                        $cate_arr=array();
                        if($value->category!=''){
                        	if(unserialize($value->category)!='' && count(unserialize($value->category))>0){
	                            $cat_ar = unserialize($value->category);
	                            $cate = Category::whereIn('id',$cat_ar)->get();  
	                            if($cate && count($cate)>0){
	                                foreach ($cate as $key1 => $value1) {
	                                    $cate_arr[]=$value1->name;
	                                }
	                            }
                        	}
                        }

                        $serv_arr=array();
                        if($value->service!=''){
                        	if(unserialize($value->service)!='' && count(unserialize($value->service))>0){
	                            $ser_ar = unserialize($value->service);
	                            $servs = Nl_service::whereIn('id',$ser_ar)->get();  
	                            if($servs && count($servs)>0){
	                                foreach ($servs as $key2 => $value2) {
	                                    $serv_arr[]=$value2->service_name;
	                                }
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
			$prof_id = session('salon_id');
			if($prof_id=='' || $prof_id=='0'){
				echo 'ERR';
			}

			$prof = Professional::find($prof_id);
			if(!$prof){
				echo 'ERR';
			}

			$template_detail = Nl_template_note::where('prof_id',$prof_id)
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

			$team = Nl_prof_team_member::where('location_type','d')
									->where('status','active')
									->where('prof_id',$prof_id)
									->get();
			$team_ar = array();
                if($team && count($team)>0){
                    foreach ($team as $key => $value) {
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
                            $servs = Nl_service::whereIn('id',$ser_ar)->get();  
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

	
		if(isset($req->act) && $req->act=='get_salon_cate_detail'){
			$temp_type = $_POST['temp_type'];
			$cid = $_POST['cid'];

			$prof_id = session('salon_id');
			if($prof_id=='' || $prof_id=='0'){
				$resp['status'] = 'ERROR';
			}
			else{
				$service = Nl_service::where('prof_id',$prof_id)
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
						$sub_service = Nl_service::where('prof_id',$prof_id)
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

		if(isset($req->act) && $req->act=='save_service'){
			$payload = $req->payload;
			$temp_type = $payload['temp_type'];
			$category_id = $payload['category_id'];
			$type = $payload['type'];
			$service_id = $payload['service_id'];
			$service_name = $payload['service_name'];
			$duration = $payload['duration'];
			$price_type = $payload['price_type'];
			$price = $payload['price'];
			$discount = $payload['discount'];
			$discount_amt = $payload['discount_amt'];
			$discount_type = $payload['discount_type'];
			$discount_valid_from = $payload['discount_valid_from'];
			$discount_valid_to = $payload['discount_valid_to'];
			$discount_info = $payload['discount_info'];
			$additional_info = $payload['additional_info'];

			$prof_id = session('salon_id');
			if($prof_id=='' || $prof_id=='0'){
				$resp['status'] = 'ERROR';
				$resp['msg'] = 'login';
				return response()->json($resp);
			}

			$prof = Professional::find($prof_id);
			if(!$prof){
				$resp['status'] = 'ERROR';
				$resp['msg'] = 'login';
				return response()->json($resp);
			}

			if(trim($category_id)=='' || trim($category_id)=='0' || trim($service_name)=='' || trim($price)==''){
				$resp['status'] = 'ERROR';
				return response()->json($resp);
			}

			$serv = new Nl_service;
			$serv->prof_id = $prof_id;
			$serv->location_type = $temp_type;
			$serv->category_id = $category_id;
			$serv->type = $type;
			if($type=='sub'){
				$serv->service_id = $service_id;
			}
			$serv->service_name = $service_name;
			$serv->duration = $duration;
			$serv->price_type = $price_type;
			$serv->price = $price;
			$serv->discount = $discount;
			if($discount=='1'){
				$serv->discount_type = $discount_type;
				$serv->discount_amount = $discount_amt;
				$serv->discount_valid_from = $discount_valid_from;
				$serv->discount_valid_to = $discount_valid_to;
			}
			else{
				$serv->discount_amount = '';
				$serv->discount_valid_from = '';
				$serv->discount_valid_to = '';
			}

			$serv->discount_info = $discount_info;
			$serv->additional_info = $additional_info;
			$serv->save();

			$this->set_prof_cate_nl($prof_id);

			$resp['status'] = 'SUCCESS';
			$resp['i'] = $serv->id;
			return response()->json($resp);
		}

		if(isset($req->act) && $req->act=='update_service'){
			$payload = $req->payload;
			// $template_id = $payload['template_id'];
			$sid =  $req->sid;
			$category_id = $payload['category_id'];
			$type = $payload['type'];
			$service_id = $payload['service_id'];
			$service_name = $payload['service_name'];
			$duration = $payload['duration'];
			$price_type = $payload['price_type'];
			$price = $payload['price'];
			$discount = $payload['discount'];
			$discount_amt = $payload['discount_amt'];
			$discount_type = $payload['discount_type'];
			$discount_valid_from = $payload['discount_valid_from'];
			$discount_valid_to = $payload['discount_valid_to'];
			$discount_info = $payload['discount_info'];
			$additional_info = $payload['additional_info'];

			if($sid=='' || $sid=='0'){
				$resp['status'] = 'ERROR';
				$resp['msg'] = 'Service not exist';
				return response()->json($resp);
			}

			$serv = Nl_service::find($sid);
			if(!$serv){
				$resp['status'] = 'ERROR';
				$resp['msg'] = 'Service not found';
				return response()->json($resp);
			}

			$serv->service_name = $service_name;
			$serv->duration = $duration;
			$serv->price_type = $price_type;
			$serv->price = $price;
			$serv->discount = $discount;
			if($discount=='1'){
				$serv->discount_type = $discount_type;
				$serv->discount_amount = $discount_amt;
				$serv->discount_valid_from = $discount_valid_from;
				$serv->discount_valid_to = $discount_valid_to;
			}
			else{
				$serv->discount_amount = '';
				$serv->discount_valid_from = '';
				$serv->discount_valid_to = '';
			}

			$serv->discount_info = $discount_info;
			$serv->additional_info = $additional_info;
			$serv->update();


			$this->set_prof_cate_nl($serv->prof_id);

			$resp['status'] = 'SUCCESS';
			$resp['i'] = $serv->id;
			return response()->json($resp);
		}

		if(isset($req->act) && $req->act=='remove_service'){
			$sid = (isset($req->sid) && $req->sid!='')?$req->sid:'';
			if($sid!=''){

				$prof_id = session('salon_id');
				if($prof_id=='' || $prof_id=='0'){
					$resp['status'] = 'ERROR';
					$resp['msg'] = 'login';
					return response()->json($resp);
				}

				$prof = Professional::find($prof_id);
				if(!$prof){
					$resp['status'] = 'ERROR';
					$resp['msg'] = 'login';
					return response()->json($resp);
				}

				DB::table('nl_services')->where('id', $sid)->delete();

				$this->set_prof_cate_nl($prof_id);

				$resp['status'] = 'SUCCESS';
				return response()->json($resp);
			}
			else{
				$resp['status'] = 'ERROR';
				return response()->json($resp);
			}
		}

		if(isset($req->act) && $req->act=='add_gen_note'){
			$tmp_type = $req->tmp_type;
			$note = $req->note;
			if($tmp_type!=''){
				$prof_id = session('salon_id');
				if($prof_id=='' || $prof_id=='0'){
					$resp['status'] = 'ERROR';
					$resp['msg'] = 'login';
					return response()->json($resp);
				}
				
				$temp = Nl_template_note::where('location_type',$tmp_type)
									->where('prof_id',$prof_id)
									->where('status','active')
									->get();
				if(count($temp)>0)	{
					DB::table('nl_template_details')->where('id',$temp[0]->id)
					->update([
						'note'=>$note,
						]);
				}else{
					$temp = new Nl_template_note;
					$temp->prof_id = $prof_id;
					$temp->note = $note;
					$temp->save();
				}
				$resp['status'] = 'SUCCESS';
				
			}
			else{
				$resp['status'] = 'ERROR';
			}
			return response()->json($resp);
		}

		if(isset($req->act) && $req->act=='add_team_member'){
			$tmp_type = $req->tmp_type;
			if($tmp_type!=''){

				$team_member_name = $req->team_member_name;

				if(trim($team_member_name)==''){
					return 'ERR';
				}

				$team_member_bio = $req->team_member_bio;
				$team_mem_img = $req->file('team_mem_img');
				
				$prof_id = session('salon_id');
				if($prof_id=='' || $prof_id=='0'){
					$resp['status'] = 'ERROR';
					$resp['msg'] = 'login';
					return response()->json($resp);
				}
				
				$prof_team_member = new Nl_prof_team_member;

				if($team_mem_img!=""){
		          $name = time().'.'.$team_mem_img->getClientOriginalExtension();
		          $destinationPath = public_path('/imgs/team');
		          $team_mem_img->move($destinationPath, $name);
		          $prof_team_member->image=$name;
		        }

		         $category = $req->team_cate;
                $category = $this->array_move($category, array_search('all', $category), 0);
                $service = $req->team_service;
                $service = $this->array_move($service, array_search('all', $service), 0);

                if($category && count($category)>0){
                    $prof_team_member->category = serialize($category);
                }
                if($category && count($category)>0){
                    $prof_team_member->service = serialize($service);
                }

		        $prof_team_member->location_type = $tmp_type;
		        $prof_team_member->prof_id = $prof_id;
		        $prof_team_member->member = $team_member_name;
		        $prof_team_member->bio = $team_member_bio;
		        $prof_team_member->save();

		        $team = Nl_prof_team_member::where('location_type',$tmp_type)
									->where('status','active')
									->where('prof_id',$prof_id)
									->get();
				$team_ar = array();
                if($team && count($team)>0){
                    foreach ($team as $key => $value) {
                        $ar = array();
                        $ar['bio'] = $value->bio;
                        $cate_arr=array();
                        if($value->category!=''){
                        	if(unserialize($value->category)!='' && count(unserialize($value->category))>0){
	                            $cat_ar = unserialize($value->category);
	                            $cate = Category::whereIn('id',$cat_ar)->get();  
	                            if($cate && count($cate)>0){
	                                foreach ($cate as $key1 => $value1) {
	                                    $cate_arr[]=$value1->name;
	                                }
	                            }
                        	}
                        }

                        $serv_arr=array();

                        if($value->service!=''){
                        	if(unserialize($value->service)!='' && count(unserialize($value->service))>0){
	                            $ser_ar = unserialize($value->service);
	                            $servs = Nl_service::whereIn('id',$ser_ar)->get();  
	                            if($servs && count($servs)>0){
	                                foreach ($servs as $key2 => $value2) {
	                                    $serv_arr[]=$value2->service_name;
	                                }
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


		        $resp['status']='SUCCESS';
		        $resp['team_memb']=$team_ar;
				return response()->json($resp);

			}
			else{
				$resp['status'] = 'ERROR';
				return response()->json($resp);
			}
		}

		if(isset($req->act) && $req->act=='add_visual'){
			$tmp_type = $req->tmp_type;
			
			$prof_id = session('salon_id');
			if($prof_id=='' || $prof_id=='0'){
				$resp['status'] = 'ERROR';
				$resp['msg'] = 'login';
				return response()->json($resp);
			}
			

				$visual_type = $req->visual_type;
				$prof_id = session('salon_id');

				if(trim($visual_type)=='link'){
					$visual_link = $req->visual_link;
					$template_visual = new Template_visual;
					$template_visual->visual = $visual_link;
					$template_visual->location_type = $tmp_type;
					$template_visual->prof_id = $prof_id;
					$template_visual->type = $visual_type;
					$template_visual->save();

					
				}
				else{
					$vfiles = $req->file('visual_img');
					/*print_r(count($visual_img));
					die();*/

					foreach ($vfiles as $key => $visual_img) {
						$name = rand(0,100).time().'.'.$visual_img->getClientOriginalExtension();
						$destinationPath = public_path('/imgs/visual');
						$visual_img->move($destinationPath, $name);

						$destinationPath1 = config('app.url').'/public/imgs/visual/'.$name;

						$template_visual = new Template_visual;
						$template_visual->visual = $destinationPath1;
						$template_visual->location_type = $tmp_type;
						$template_visual->prof_id = $prof_id;
						$template_visual->type = $visual_type;
						$template_visual->save();
					}
					// return 'SUC';

				}

				$visual = Template_visual::where('location_type',$tmp_type)
									->where('status','active')
									->where('prof_id',$prof_id)
									->get();
				$resp['status'] = 'SUCCESS';
				$resp['vis'] = $visual;
				return response()->json($resp);
			
		}

		if(isset($req->act) && $req->act=='get_tm_detail'){
			$tm_i = $req->tm_i;
			if($tm_i!=''){
				$team_memb = Nl_prof_team_member::find($tm_i);
				if($team_memb){
					$resp['status']='SUCCESS';
					$resp['member']['name']=$team_memb->member;
					$resp['member']['bio']=$team_memb->bio;
					$resp['member']['img']=$team_memb->image;
					$resp['member']['category']=($team_memb->category!='')?unserialize($team_memb->category):'';
                    $resp['member']['service']=($team_memb->service!='')?unserialize($team_memb->service):'';

					$service = Nl_service::where('prof_id',$team_memb->prof_id)
                                ->where('status','active')
                                ->where('location_type',$team_memb->location_type)
                                // ->where('type','main')
                                ->get();

		            $ar = array();
		            $cate = array();
		            if(count($service)>0){
		                $chk_cate = array();
		                foreach ($service as $key => $value) {
		                    $serv = array();
		                    $serv['service_name'] = $value->service_name;
		                    $serv['i'] = $value->id;
		                    $serv['c'] = $value->category_id;
		                    $ar[] = $serv;

		                    if(!in_array($value->category->id, $chk_cate)){
		                        $chk_cate[]=$value->category->id;
		                        $car = array();
		                        $car['i'] = $value->category->id;
		                        $car['cat'] = $value->category->name;
		                        $cate[]=$car;
		                    }
		                }
		            }
		            else{
		                $cate = array();
		                $categ = Category::where('status','active')->get();
		                foreach ($categ as $key => $value) {
		                    $car = array();
		                    $car['i'] = $value->id;
		                    $car['cat'] = $value->name;
		                    $cate[]=$car;
		                }
		            }

		            $resp['service'] = $ar;
		            $resp['category'] = $cate;

					return response()->json($resp);
				}
				else{
					$resp['status']='ERROR';
					return response()->json($resp);
				}
			}
			else{
				$resp['status']='ERROR';
				return response()->json($resp);
			}
		}

		if(isset($req->act) && $req->act=='remove_reg_doc'){
            $id = $req->id;
            $p_reg = Professional_registration_doc::find($id);
            if($p_reg){
                
                $p_reg->forceDelete();
                
                $resp['status'] = 'SUCCESS';
                return response()->json($resp);
            }
            else{
                $resp['status'] = 'ERROR';
                return response()->json($resp);
            }
        }

		if(isset($req->act) && $req->act=='update_team_member'){
			
			$tm_i = $req->tm_i;
			if($tm_i!=''){

				$team_member_name = $req->team_member_name;

				if(trim($team_member_name)==''){
					$resp['status']='ERROR';
					return response()->json($resp);
				}

				$team_m = Nl_prof_team_member::find($tm_i);
				if(!$team_m){
					$resp['status']='ERROR';
					return response()->json($resp);
				}

				$team_member_bio = $req->team_member_bio;
				$team_mem_img = $req->file('team_mem_img');
				$prof_id = session('salon_id');
				if($team_mem_img!=""){
		          $name = time().'.'.$team_mem_img->getClientOriginalExtension();
		          $destinationPath = public_path('/imgs/team');
		          $team_mem_img->move($destinationPath, $name);
		          $team_m->image=$name;
		        }
		        
		         $category = $req->team_cate;
                $category = $this->array_move($category, array_search('all', $category), 0);
                $service = $req->team_service;
                $service = $this->array_move($service, array_search('all', $service), 0);

                if($category && count($category)>0){
                    $team_m->category = serialize($category);
                }
                if($category && count($category)>0){
                    $team_m->service = serialize($service);
                }
		        
		        $team_m->member = $team_member_name;
		        $team_m->bio = $team_member_bio;
		        $team_m->update();

		        $team = Nl_prof_team_member::where('location_type',$req->tmp_type)
									->where('status','active')
									->where('prof_id',$prof_id)
									->get();


		        $team_ar = array();
                if($team && count($team)>0){
                    foreach ($team as $key => $value) {
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

                        // $cn_serv = unserialize($value->service);
                        /*var_dump(count($cn_serv));
                        die();*/

                        if($value->service!='' && unserialize($value->service)!==null && count(unserialize($value->service))>0){
                            $ser_ar = unserialize($value->service);
                            $servs = Nl_service::whereIn('id',$ser_ar)->get();  
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
                        $team_ar[]=$ar;
                    }
                }
                
		        $resp['status']='SUCCESS';
		        $resp['team_memb']=$team_ar;
				return response()->json($resp);
			}
			else{
				$resp['status']='ERROR';
				return response()->json($resp);
			}
		}

		if(isset($req->act) && $req->act=='remove_tm_detail'){
			$tm_i = $req->tm_i;
			if($tm_i!=''){
				$team_memb = Nl_prof_team_member::find($tm_i);
				if($team_memb){
					
					$team_memb->status = 'remove';
					$team_memb->update();
					$resp['status']='SUCCESS';
					return response()->json($resp);
				}
				else{
					$resp['status']='ERROR';
					return response()->json($resp);
				}
			}
			else{
				$resp['status']='ERROR';
				return response()->json($resp);
			}
		}

		if(isset($req->act) && $req->act=='remove_visual'){
			// $tm_i = $req->tmp_id;
			$vis = $req->vis;
			if($vis!='' && count($vis)>0){

				foreach ($vis as $key => $value) {
					Template_visual::where('id', $value)
				      					->update(['status' => 'remove']);
				}

				$resp['status']='SUCCESS';
				return response()->json($resp);
			}
			else{
				$resp['status']='ERROR';
				return response()->json($resp);
			}
		}

		if(isset($req->act) && $req->act=='get_serv_detail'){
			$sid = $req->sid;
			$serv = Nl_service::find($sid);
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

		if(isset($req->act) && $req->act=='update_service_for'){
		
			$all_gender = $req->all_gender;
			$men = $req->men;
			$women = $req->women;
			$kids = $req->kids;
			$temp_type = $req->temp_type;

			$prof_id = session('salon_id');
			if($prof_id=='' || $prof_id=='0'){
				$resp['status'] = 'ERROR';
				$resp['msg'] = 'login';
				return response()->json($resp);
			}

			// $prof = Professional::find($prof_id);

			$temp = Nl_template_note::where('location_type',$temp_type)
									->where('prof_id',$prof_id)
									->where('status','active')
									->get();
			if(count($temp)>0)	{
				DB::table('nl_template_details')->where('id',$temp[0]->id)
				->update([
					'all_gender'=>$all_gender,
					'men'=>$men,
					'women'=>$women,
					'kids'=>$kids
					]);
			}else{
				$temp = new Nl_template_note;
				$temp->prof_id = $prof_id;
				$temp->all_gender = $all_gender;
				$temp->men = $men;
				$temp->women = $women;
				$temp->kids = $kids;
				$temp->location_type = $temp_type;
				$temp->save();
			}


			$resp['status'] = 'SUCCESS';
						
			return response()->json($resp);
		}

		if(isset($req->act) && $req->act=='get_des_location'){
			$di = $req->di;
			$dl = NL_desire_location::find($di);
			if($dl){
				$resp['status'] = 'SUCCESS';

				$ar = array();
				$ar['desire_province'] = $dl->desire_province;
				$ar['desire_municipality'] = unserialize($dl->desire_municipality);
				$ar['desire_location_type'] = $dl->desire_location_type;

				$municipality_list = array();
				$province = Province::where('nl_name',$dl->desire_province)->where('status','active')->get();
				if(count($province)>0){
					$municipality_list = Municipality::select('id','name','nl_name')->where('status','active')->where('province_id',$province[0]->id)->get();

				}
				
				$ar['municipality_list'] = $municipality_list;

				$resp['data'] = $ar;
				return response()->json($resp);
			}
			else{
				$resp['status'] = 'ERROR';
				return response()->json($resp);
			}
		}

		if(isset($req->act) && $req->act=='copy_desire'){
			
			$prof_id = session('salon_id');
			if($prof_id=='' || $prof_id=='0'){
				$resp['status'] = 'ERROR';
				$resp['msg'] = 'login';
				return response()->json($resp);
			}

			$prof = Professional::find($prof_id);
			if(!$prof){
				$resp['status'] = 'ERROR';
				$resp['msg'] = 'login';
				return response()->json($resp);
			}

			$is_u = 0;

			if($req->temp_type=='f'){
				$fixed_name = $prof->fixed_name_nl;
				$fixed_bio = $prof->fixed_bio_nl;
				$fixed_pic = $prof->fixed_pic;

				if($prof->desire_name_nl==''){
					$prof->desire_name_nl = $fixed_name;
					$is_u = 1;
				}
				if($prof->desire_pic==''){
					$prof->desire_pic = $fixed_pic;
					$is_u = 1;
				}
				if($prof->desire_bio_nl==''){
					$prof->desire_bio_nl = $fixed_bio;
					$is_u = 1;
				}
				if($is_u == 1){
					$prof->update();
				}
			}
			else{
				$desire_name = $prof->desire_name_nl;
				$desire_bio = $prof->desire_bio_nl;
				$desire_pic = $prof->desire_pic;

				if($prof->fixed_name_nl==''){
					$prof->fixed_name_nl = $desire_name;
					$is_u = 1;
				}
				if($prof->fixed_pic==''){
					$prof->fixed_pic = $desire_pic;
					$is_u = 1;
				}
				if($prof->fixed_bio_nl==''){
					$prof->fixed_bio_nl = $desire_bio;
					$is_u = 1;
				}
				if($is_u == 1){
					$prof->update();
				}
			}
			
			if($req->temp_type=='f'){

				$template_note=Nl_template_note::where('prof_id',$prof_id)->where('location_type','f')->first();
				if($template_note){
					$chk=Nl_template_note::where('prof_id',$prof_id)->where('location_type','d')->first();
					if(!$chk){
						$new = $template_note->replicate();
						$new->location_type = 'd';
						$new->save();
					}
					else{
						$new = Template_note::find($chk->id);
						$new->note = $template_note->note;

						/*if($chk->note==''){
							$new->note = $template_note->note;
						}*/

						$new->all_gender = $template_note->all_gender;
						$new->men = $template_note->men;
						$new->women = $template_note->women;
						$new->kids = $template_note->kids;
						$new->update();
					}
				}

				$services=Nl_service::where('prof_id',$prof_id)->where('location_type','f')->where('type','main')->where('status','active')->get();
                if(count($services)>0){
                    foreach ($services as $item) 
                    {
                    	$chk_serv = Nl_service::where('location_type','d')
                    							->where('prof_id',$prof_id)
                    							->where('category_id',$item->category_id)
                    							->where('service_name',$item->service_name)
                    							->where('duration',$item->duration)
                    							->where('status','active')
                    							->where('type','main')
                    							->count();
						
						if($chk_serv==0){
	                        $items = Nl_service::find($item->id);
	                        $new = $items->replicate();
	                        $new->location_type = 'd';
	                        $new->copy_id = $item->id;
	                        $new->save();
	                    }
                    }

                    $this->set_prof_cate_nl($services[0]->prof_id);
                }

                $sb_services=Nl_service::where('prof_id',$prof_id)->where('location_type','f')->where('type','sub')->where('status','active')->get();
                if(count($sb_services)>0){
                    foreach ($sb_services as $item) 
                    {   
                    	$mserv=0;
                        $serv_id = Nl_service::where('copy_id',$item->service_id)->where('location_type','d')->take(1)->get();
                        if($serv_id && count($serv_id)>0){
                            $mserv = $serv_id[0]->id;
                        }

                    	$chk_serv = Nl_service::where('location_type','d')
                    							->where('prof_id',$prof_id)
                    							->where('category_id',$item->category_id)
                    							->where('service_name',$item->service_name)
                    							->where('duration',$item->duration)
                    							->where('status','active')
                    							->where('type','sub')
                    							->where('service_id',$mserv)
                    							->count();
						if($chk_serv==0){
	                    	
	                        $items = Nl_service::find($item->id);
	                        $new = $items->replicate();
	                        $new->location_type = 'd';
	                        $new->service_id = $mserv;
	                        $new->save();
	                    }
                    }

                    $this->set_prof_cate_nl($sb_services[0]->prof_id);
                }



				$team_memb=Nl_prof_team_member::where('prof_id',$prof_id)->where('location_type','f')->where('status','active')->get();
				if(count($team_memb)>0){
					foreach ($team_memb as $item) 
			        {
			        	$chk_tm = Nl_prof_team_member::where('prof_id',$prof_id)
			        								->where('location_type','d')
			        								->where('member',$item->member)
			        								->where('status','active')->count();

						if($chk_tm==0){
				            $items = Nl_prof_team_member::find($item->id);
				            $new = $items->replicate();
							$new->location_type = 'd';
							$new->save();
						}
			        }
				}


				$visual=Template_visual::where('prof_id',$prof_id)->where('location_type','f')->where('status','active')->get();
				if(count($visual)>0){
					foreach ($visual as $item) 
			        {
			        	$chk_vis = Template_visual::where('prof_id',$prof_id)
			        							->where('location_type','d')
			        							->where('visual',$item->visual)
			        							->where('status','active')
			        							->count();
			        	if($chk_vis==0){

				            $items = Template_visual::find($item->id);
				            $new = $items->replicate();
							$new->location_type = 'd';
							$new->save();
						}
			        }
				}
			}
			else{
				$template_note=Nl_template_note::where('prof_id',$prof_id)->where('location_type','d')->first();
				if($template_note){
					$chk=Nl_template_note::where('prof_id',$prof_id)->where('location_type','f')->first();
					if(!$chk){
						$new = $template_note->replicate();
						$new->location_type = 'f';
						$new->save();
					}
					else{
						$new = Template_note::find($chk->id);
						// if($chk->note==''){
							$new->note = $template_note->note;
						// }

						$new->all_gender = $template_note->all_gender;
						$new->men = $template_note->men;
						$new->women = $template_note->women;
						$new->kids = $template_note->kids;
						$new->update();
					}
				}

				$services=Nl_service::where('prof_id',$prof_id)->where('location_type','d')->where('type','main')->where('status','active')->get();

                if(count($services)>0){
                    foreach ($services as $item) 
                    {
                    	$chk_serv = Nl_service::where('location_type','f')
                    							->where('prof_id',$prof_id)
                    							->where('category_id',$item->category_id)
                    							->where('service_name',$item->service_name)
                    							->where('duration',$item->duration)
                    							->where('status','active')
                    							->where('type','main')
                    							->count();
						
						if($chk_serv==0){
	                        $items = Nl_service::find($item->id);
	                        $new = $items->replicate();
	                        $new->location_type = 'f';
	                        $new->copy_id = $item->id;
	                        $new->save();
	                    }
                    }

                    $this->set_prof_cate_nl($services[0]->prof_id);
                }

                $sb_services=Nl_service::where('prof_id',$prof_id)->where('location_type','d')->where('type','sub')->where('status','active')->get();
                if(count($sb_services)>0){
                    foreach ($sb_services as $item) 
                    {   
                    	$mserv=0;
                        $serv_id = Nl_service::where('copy_id',$item->service_id)->where('location_type','f')->take(1)->get();
                        if($serv_id && count($serv_id)>0){
                            $mserv = $serv_id[0]->id;
                        }

                    	$chk_serv = Nl_service::where('location_type','f')
                    							->where('prof_id',$prof_id)
                    							->where('category_id',$item->category_id)
                    							->where('service_name',$item->service_name)
                    							->where('duration',$item->duration)
                    							->where('status','active')
                    							->where('type','sub')
                    							->where('service_id',$mserv)
                    							->count();
						if($chk_serv==0){
	                    	
	                        $items = Nl_service::find($item->id);
	                        $new = $items->replicate();
	                        $new->location_type = 'f';
	                        $new->service_id = $mserv;
	                        $new->save();
	                    }
                    }

                    $this->set_prof_cate_nl($sb_services[0]->prof_id);
                }




				$team_memb=Nl_prof_team_member::where('prof_id',$prof_id)->where('location_type','d')->where('status','active')->get();
				if(count($team_memb)>0){
					foreach ($team_memb as $item) 
			        {
			        	$chk_tm = Nl_prof_team_member::where('prof_id',$prof_id)
			        								->where('location_type','d')
			        								->where('member',$item->member)
			        								->where('status','active')->count();

						if($chk_tm==0){
				            $items = Nl_prof_team_member::find($item->id);
				            $new = $items->replicate();
							$new->location_type = 'f';
							$new->save();
						}
			        }
				}


				$visual=Template_visual::where('prof_id',$prof_id)->where('location_type','d')->where('status','active')->get();
				if(count($visual)>0){
					foreach ($visual as $item) 
			        {
			        	$chk_vis = Template_visual::where('prof_id',$prof_id)
			        							->where('location_type','f')
			        							->where('visual',$item->visual)
			        							->where('status','active')
			        							->count();
			        	if($chk_vis==0){

				            $items = Template_visual::find($item->id);
				            $new = $items->replicate();
							$new->location_type = 'f';
							$new->save();
						}
			        }
				}
			}

			$resp['status'] = 'SUCCESS';		
			return response()->json($resp);

		}

		if(isset($req->act) && $req->act=='get_cate_serv'){
            $prof_id = session('salon_id');
            $temp_type=$req->temp_type;
            if($prof_id=='' || $prof_id=='0'){
                $resp['status'] = 'ERROR';
                $resp['msg'] = 'login';
                return response()->json($resp);
            }

            $prof = Professional::find($prof_id);
            if(!$prof){
                $resp['status'] = 'ERROR';
                $resp['msg'] = 'login';
                return response()->json($resp);
            }
         
            $service = Nl_service::where('prof_id',$prof_id)
                                ->where('status','active')
                                ->where('location_type',$temp_type)
                                // ->where('type','main')
                                ->get();

         
            $ar = array();
            $cate = array();
            if(count($service)>0){
                $chk_cate = array();
                foreach ($service as $key => $value) {
                    $serv = array();
                    $serv['service_name'] = $value->service_name;
                    $serv['i'] = $value->id;
                    $serv['c'] = $value->category_id;
                    $ar[] = $serv;

                    if(!in_array($value->category->id, $chk_cate)){
                        $chk_cate[]=$value->category->id;
                        $car = array();
                        $car['i'] = $value->category->id;
                        $car['cat'] = $value->category->name;
                        $cate[]=$car;
                    }
                }
            }
            else{
                $cate = array();
                $categ = Category::where('status','active')->get();
                foreach ($categ as $key => $value) {
                    $car = array();
                    $car['i'] = $value->id;
                    $car['cat'] = $value->name;
                    $cate[]=$car;
                }
            }

            $resp['service'] = $ar;
            $resp['category'] = $cate;
            $resp['status'] = 'SUCCESS';        
            return response()->json($resp);
        }
	}

	public function nl_desire_add_province(Request $req){
	
		$resp = array();
		if($req->act=='add_province'){
			$prof_id = session('salon_id');
			if($prof_id=='' || $prof_id=='0'){
				echo 'ERR';
			}

			$prof = Professional::find($prof_id);
			if(!$prof){
				echo 'ERR';
			}
			$prof_temp = new Nl_desire_location;
			$prof_temp->prof_id = $prof_id;
			
			$loc_type = $req->loc_type;

			$prof_temp->desire_location_type = $loc_type;

			if($loc_type=='specific'){
				if(isset($req->fc) && $req->fc=='1'){
					$prov = $req->province;
					$municipality = isset($req->municipality)?$req->municipality:'';
					$prof_temp->desire_province = $prov;

					if($municipality!='')
						$prof_temp->desire_municipality = serialize($municipality);

					$prof_temp->save();
				}

				DB::table('nl_desire_locations')->where('prof_id',$prof_id)->where('desire_location_type','everywhere')->update(['status'=>'remove']);
			}
			else{
				$prof_temp->desire_province = 'Everywhere';
				$prof_temp->save();

				// DB::table('desire_locations')->where('prof_id',$prof_id)->where('desire_location_type','specific')->update(['status'=>'remove']);
			}

			

			$resp['status']='SUCCESS';
			return response()->json($resp);
		}

		if($req->act=='edit_province'){
			$prof_id = session('salon_id');
			if($prof_id=='' || $prof_id=='0'){
				$resp['status']='ERROR';
				return response()->json($resp);
			}

			$prof = Professional::find($prof_id);
			if(!$prof){
				$resp['status']='ERROR';
				return response()->json($resp);
			}

			$lid = $req->lid;

			$prof_temp = Nl_desire_location::find($lid);
			if($prof_temp){
				$municipality = isset($req->municipality)?$req->municipality:'';
				if($municipality!='')
					$prof_temp->desire_municipality = serialize($municipality);
				else
					$prof_temp->desire_municipality = '';

				$prof_temp->update();

				$resp['status']='SUCCESS';
				return response()->json($resp);
			}
		}

	}

	public function nl_login(Request $request){
		if ($request->session()->has('salon_login') && $request->session()->get('salon_login')=='1') {
			$prof_id = session('salon_id');
			if($prof_id=='' || $prof_id=='0'){
				$request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
				return redirect('login');
			}

			$prof = Professional::find($prof_id);

			if($prof){
				return redirect()->route('dashboard');
			}
			else{
				$request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);
				return redirect('login');
			}
		}
		else{

			$lang_kwords = Language_keyword::all();
			$lang_kwords_ar = array();
			foreach ($lang_kwords as $key => $value) {
				$lang_kwords_ar[$value->keyword]['english']=$value->english;
				$lang_kwords_ar[$value->keyword]['dutch']= ($value->dutch!='')?$value->dutch:$value->english;
			}

			$content = $this->get_page_content('nl','login');
			$meta = $this->get_page_meta('nl','login');
			$menuh = $this->get_page_menu('header','nl');
			$menuf = $this->get_page_menu('footer','nl');
		
			$data = array();
			if($content && count($content)>0){
				foreach ($content as $key => $value) {
					// $ar = array();
					$data[$value->section]['image'] = $value->image;
					$data[$value->section]['content'] = $value->content_nl;

					if(count($value->get_sub_content)>0){
						$data[$value->section]['sub_content'] = $value->get_sub_content;
					}
				}
			}

			$page_title = $meta_title = 'Mollure';
			if($meta && count($meta)>0){
				$page_title = ($meta[0]->title_nl!='')?$meta[0]->title_nl:'Mollure';
				$meta_title = ($meta[0]->meta_title_nl!='')?$meta[0]->meta_title_nl:'';
			}

			$uri  = $_SERVER['REQUEST_URI'];
			$qs='';
			if(strpos($uri, '?') !== false){
				$qs = explode('?', $uri);
				$qs = $qs['1'];
			}

			$huri = route('login');
			if($qs!='')
				$huri=$huri.'?'.$qs;

			
			$request->session()->forget(['salon_id', 'salon_name', 'salon_login', 'salon_email']);

			return view('salon.nl.nl_login')->with('huri',$huri)
							->with('contents',$data)
							->with('page_title',$page_title)
							->with('meta_title',$meta_title)
							->with('menuh',$menuh)
							->with('menuf',$menuf)
							->with('lang_kwords',$lang_kwords_ar);

			
			// return view('salon.login');
		}
	}


}