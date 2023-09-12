<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Redirect;
use Response;
use Session;
use DB;
use Carbon\Carbon;

use \App\Admin;
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
use \App\Visitor_queries;
use \App\Language_keyword;
use \App\Page_content;
use \App\Page_meta;
use \App\Menu;
use \App\Setting;
use \App\Page_content_tran;
use \App\Email_template;
use \App\Email_log;
use \App\Municipality;
use \App\Province;

use Mail;
use \App\Mail\ManualMail;

use \App\Nl_desire_location;
use \App\Nl_fixed_location_salon;
use \App\Nl_template_note;
use \App\Nl_service;
use \App\Nl_prof_team_member;


class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function loginAct(Request $req){
    	$username = $req->username;
    	$password = $req->password;
    	if(trim($username)=='' || trim($password)==''){
    		return Redirect::back()->withErrors(['msg' => 'Enter Username and Password']);
    	}

    	$chk = Admin::where('password',$password)->where('username',$username)->get();
    	if(count($chk)>0){

    		session(['admin_login' => '1']);
    		session(['admin_name' => $chk[0]->name]);
    		$curr_time=Carbon::now();

    		DB::table('admins')->where('id',$chk[0]->id)->update(['last_login'=>$curr_time]);
    		return redirect()->route('admin_dashboard');
    	}
    	else{
    		return Redirect::back()->withErrors(['msg' => 'Please check Username and Password']);
    	}
    }

    public function dashboard(){
        $prof = Professional::where('status','pending')->count(); //new professionals...
        $prof_approved = Professional::where('status','approve')->count(); // user data approved...

        // DB::connection()->enableQueryLog();
        $details = Professional::where('fixed_info','1')
                                ->orWhere('desire_info', '1')->count(); // professional templates approved...
        
        $total_professionals = Professional::count(); //total professionals.
        
                                /*$queries = DB::getQueryLog();
        dd($queries);                                        
        return;*/
                                
        return view('admin.dashboard')->with('prof',$prof)->with('pending_detail',$details)
                                        ->with('prof_approved',$prof_approved)->with('total_professionals', $total_professionals);
    }

    public function add_professionals(){
        return view('admin.add_professional');
    }

    public function professionals(Request $req, $status='approve'){

        $ft = isset($req->ft)?$req->ft:'a';

        $condition = array();

        if($status=='all'){
            $condition[]=['status','!=','remove'];
        }
        else{
            $condition[]=['status','=',$status];
        }
        if($ft=='f'){
            $condition[]=['fixed_info','!=','2'];
        }
        if($ft=='d'){
            $condition[]=['desire_info','!=','2'];
        }
        if($ft=='fd'){
            $condition[]=['fixed_info','!=','2'];
            $condition[]=['desire_info','!=','2'];
        }

        $prof = Professional::where($condition)
                                    ->orderBy('id','desc')->get();

        /*if($status=='all')
            $prof = Professional::where('status','!=','remove')
                                    ->orderBy('id','desc')->get();
        else
            $prof = Professional::where('status',$status)
                                    ->orderBy('id','desc')->get();*/

        return view('admin.professional_list')->with('professional',$prof)->with('status',$status)->with('ft',$ft);
    }

    public function update_cate(Request $req){
        if(isset($req->act) && $req->act=='update_cate'){

            $cid = $req->cid;
            $cate_name = $req->cate_name;
            $nl_name = $req->nl_name;
            $cate_icon = $req->file('cate_icon');

            $cate = Category::find($cid);
            if($cate){
                $cate->name =  $cate_name;
                $cate->nl_name =  $nl_name;

                if($cate_icon!=''){
                    $name = time().'.'.$cate_icon->getClientOriginalExtension();
                    $destinationPath = public_path('/imgs/category');
                    $cate_icon->move($destinationPath, $name);

                    $cate->image=$name;
                }

                $cate->update();

                return Redirect::back()->withSuccess(['msg' => 'Detail Updated']);
            }
            else{
                return Redirect::back()->withErrors(['msg' => 'Something went wrong']);
            }
        }

        if(isset($req->act) && $req->act=='remove_cate'){
            $cid = $req->f_cate_id;

            $cate = Category::find($cid);
            if($cate){
                $cate->status='remove';
                $cate->update();

                return Redirect::back();
            }
            else{
                return Redirect::back()->withErrors(['msg' => 'Something went wrong']);
            }
        }

        if(isset($req->act) && $req->act=='add_cate'){
            $cate_name = $req->cate_name;
            $nl_name = $req->nl_name;
            $cate_icon = $req->file('cate_icon');

            $cate = New Category;

            $cate->name =  $cate_name;
            $cate->nl_name =  $nl_name;
            
            if($cate_icon!=''){
                $name = time().'.'.$cate_icon->getClientOriginalExtension();
                $destinationPath = public_path('/imgs/category');
                $cate_icon->move($destinationPath, $name);

                $cate->image=$name;
            }

            $cate->save();

            return Redirect::back()->withSuccess(['msg' => 'New Category Added']);
            
        }

        return Redirect::back();
    }

    public function email_template(Request $req){
        $temp = $email_temp =  '';
        $data=0;
        $pf_ar = array();
        if(isset($req->temp) && $req->temp!=''){
            $temp = $req->temp;
            $email_temp = Email_template::where('email_type',$temp)->get();
            if($email_temp && count($email_temp)>0){
                $data=1;

                $pf = (isset($req->pf) && $req->pf!='')?$req->pf:'';
                if($pf!=''){
                    $pf_ar = explode(',', urldecode($pf));
                }

            }
        }

        
        $prof = Professional::select('id', 'legal_name', 'email', 'preferred_lang')->where('status','!=','remove')->get();

        return view('admin.email_templates')->with('email_temp',$email_temp)
                                            ->with('temp',$temp)
                                            ->with('data',$data)
                                            ->with('professionals',$prof)
                                            ->with('pf_ar',$pf_ar);
        
    }

    public function update_email_template(Request $req){

    
        $tid = $req->tid;
        $msg = $req->msg;
        $subject = $req->subject;
        /*$from_address = $req->from_address;
        $from_name = $req->from_name;*/

        $email_template = Email_template::find($tid);
        if($email_template){
            $email_template->msg = $msg;
            $email_template->subject = $subject;
            /*$email_template->from_name = $from_name;
            $email_template->from_address = $from_address;*/
            $email_template->update();

            /*print_r($msg);
            die();*/

            return Redirect::back()->withSuccess(['msg' => 'Detail Updated']);
        }
        else{
            return Redirect::back()->withErrors(['msg' => 'Something went wrong']);
        }
    }

    public function page_content(Request $req){
        $page = $page_content = $page_meta = '';
        $data=$data1=0;
        if(isset($req->page) && $req->page!=''){
            $page = $req->page;
            $page_content = Page_content::where('page',$page)->get();
            if($page_content && count($page_content)>0){
                $data=1;
            }

            $page_meta = Page_meta::where('page',$page)->get();
            if($page_meta && count($page_meta)>0)$data1=1;
        }

        if($page=='home'){

            /*print_r($page_content[1]->get_sub_content);
            die();*/

            return view('admin.page_content_2')->with('page_content',$page_content)
                                            ->with('page',$page)
                                            ->with('page_meta',$page_meta)
                                            ->with('data',$data)
                                            ->with('data1',$data1);
        }
        else{
            return view('admin.page_content')->with('page_content',$page_content)
                                            ->with('page',$page)
                                            ->with('page_meta',$page_meta)
                                            ->with('data',$data)
                                            ->with('data1',$data1);
        }
    }

    public function update_content(Request $req){
        $act = $req->act;

        if($act=='content'){
            $cid = $req->cid;
            $content_en = $req->content_en;
            $content_nl = $req->content_nl;
            $image = $req->file('image');
            
            if($cid!=''){
                $page_cnt = Page_content::find($cid);
                if($page_cnt){

                    $page_cnt->content_en =  $content_en;
                    $page_cnt->content_nl =  $content_nl;

                    if($image!=''){
                        $name = time().'.'.$image->getClientOriginalExtension();
                        $destinationPath = public_path('/images/page');
                        $image->move($destinationPath, $name);

                        $destinationPath1 = '/images/page/'.$name;
                        $page_cnt->image=$destinationPath1;
                    }

                    $page_cnt->update();

                    return Redirect::back()->withSuccess(['msg' => 'Detail Updated']);
                }
                else{
                    return Redirect::back()->withErrors(['msg' => 'Something went wrong']);
                }
            }
            else{
                    return Redirect::back()->withErrors(['msg' => 'Something went wrong']);
            }
        }
        else if($act=='meta'){
            $title_en = $req->title_en;
            $title_nl = $req->title_nl;
            $meta_title_en = $req->meta_title_en;
            $meta_title_nl = $req->meta_title_nl;
            $page = $req->page;

            $pagem = Page_meta::select('id')->where('page',$page)->get();
            if($pagem && count($pagem)>0){
                $id = $pagem[0]->id;

                DB::table('page_metas')
                    ->where('id', $id)
                    ->update(['title_en' => $title_en,'title_nl' => $title_nl,'meta_title_en' => $meta_title_en,'meta_title_nl' => $meta_title_nl,]);
            }
            else{
                $page_m = New Page_meta;
                $page_m->title_en = $title_en;
                $page_m->title_nl = $title_nl;
                $page_m->meta_title_en = $meta_title_en;
                $page_m->meta_title_nl = $meta_title_nl;
                $page_m->page = $page;
                $page_m->save();
            }

            return Redirect::back()->withSuccess(['msg' => 'Detail Updated']);
        }
        elseif($act=='sub_content'){
            $cid = $req->cid;
            $content_en = $req->content_en;
            $content_nl = $req->content_nl;
            $image = $req->file('image');
            
            if($cid!=''){
                $page_cnt = Page_content_tran::find($cid);
                if($page_cnt){

                    $page_cnt->content_en =  $content_en;
                    $page_cnt->content_nl =  $content_nl;

                    if($image!=''){
                        $name = time().'.'.$image->getClientOriginalExtension();
                        $destinationPath = public_path('/images/page');
                        $image->move($destinationPath, $name);

                        $destinationPath1 = '/images/page/'.$name;
                        $page_cnt->image=$destinationPath1;
                    }

                    $page_cnt->update();

                    return Redirect::back()->withSuccess(['msg' => 'Detail Updated']);
                }
                else{
                    return Redirect::back()->withErrors(['msg' => 'Something went wrong']);
                }
            }
            else{
                    return Redirect::back()->withErrors(['msg' => 'Something went wrong']);
            }
        }
    }

    public function ajax_req(Request $req){
        $resp = array();
        if(isset($req->act) && $req->act=='prof_status'){
            $status = $req->status;
            $prof_id = $req->prof_id;
            if($prof_id=='' || $status==''){
                $resp['status']='ERROR';
                return response()->json($resp);
            }

            DB::table('professionals')
              ->where('id', $prof_id)
              ->update(['status' => $status]);
            // send email notification stating user info was approved...
            $prof = Professional::select('id','email','legal_name','coc','vat','phone','email_verified','rand_num','preferred_lang')->where('id',$prof_id)->get();
			if($prof && count($prof)>0){
                // based on user_type select specific template for step2 approval...
                // professional shall receive proceed to step3 template...
                // company clients shall receive info approved...
                // currently info approved email template selected...
                if($status == 'approved'){
                    if($prof[0]->preferred_lang=='NL'){
                        $email_template = Email_template::where('email_type','step2_validated_NL')->get();
                    }else{
                        $email_template = Email_template::where('email_type','step2_validated_ENG')->get();
                    }
                }else{
                    // fetch info rejected e-mail template...
                    if($prof[0]->preferred_lang=='NL'){
                        $email_template = Email_template::where('email_type','step2_rejected_NL')->get();
                    }else{
                        $email_template = Email_template::where('email_type','step2_rejected_ENG')->get();
                    }
                }
                
                $email_content = $email_template[0]->msg;
                $subject = $email_template[0]->subject;

                $this->send_mail($email_content, $subject, [$prof_id]);
                
                $resp['status']='SUCCESS';
            }else{
                $resp['status']='ERROR';
            }
            
            return response()->json($resp);  
        }

        if(isset($req->act) && $req->act=='prof_temp_status'){
            $status = $req->status;
            $prof_id = $req->prof_id;
            if($prof_id=='' || $status==''){
                $resp['status']='ERROR';
                return response()->json($resp);
            }

            DB::table('professionals')
              ->where('id', $prof_id)
              ->update(['desire_info'=>'1','fixed_info'=>'1',]);

            $resp['status']='SUCCESS';
            return response()->json($resp);  
        }

        if(isset($req->act) && $req->act=='query_status'){
            $status = $req->status;
            $q_id = $req->q_id;
            if($q_id=='' || $status==''){
                $resp['status']='ERROR';
                return response()->json($resp);
            }

            DB::table('visitor_queries')
              ->where('id', $q_id)
              ->update(['status' => $status]);

            $resp['status']='SUCCESS';
            return response()->json($resp);  
        }

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

        if(isset($req->act) && $req->act=='update_service_for'){
        
            $all_gender = $req->all_gender;
            $men = $req->men;
            $women = $req->women;
            $kids = $req->kids;
            $temp_type = $req->temp_type;

            $prof_id = $req->prof_id;

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
            if(count($temp)>0)  {
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

            $prof_id = $req->prof_id;
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


            $this->set_prof_cate($serv->prof_id);

            $resp['status'] = 'SUCCESS';
            $resp['i'] = $serv->id;
            return response()->json($resp);
        }

        if(isset($req->act) && $req->act=='remove_service'){
            $sid = (isset($req->sid) && $req->sid!='')?$req->sid:'';
            if($sid!=''){

                $prof_id = $req->prof_id;
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

                DB::table('services')->where('id', $sid)->update([
                        'status'=>'remove',
                        ]);

                $this->set_prof_cate($prof_id);

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
                $prof_id = $req->prof_id;
                if($prof_id=='' || $prof_id=='0'){
                    $resp['status'] = 'ERROR';
                    $resp['msg'] = 'login';
                    return response()->json($resp);
                }
                
                $temp = Template_note::where('location_type',$tmp_type)
                                    ->where('prof_id',$prof_id)
                                    ->where('status','active')
                                    ->get();
                if(count($temp)>0)  {
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
                    $resp['status'] = 'ERROR';
                    return response()->json($resp);
                }

                $team_member_bio = $req->team_member_bio;
                $team_mem_img = $req->file('team_mem_img');
                
                $prof_id = $req->prof_id;
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
                $service = $req->team_service;

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
            
            $prof_id = $req->prof_id;
            if($prof_id=='' || $prof_id=='0'){
                $resp['status'] = 'ERROR';
                $resp['msg'] = 'login';
                return response()->json($resp);
            }
            

                $visual_type = $req->visual_type;
                $prof_id = $req->prof_id;

                if(trim($visual_type)=='link'){
                    $visual_link = $req->visual_link;
                    $template_visual = new Template_visual;
                    $template_visual->visual = $visual_link;
                    $template_visual->location_type = $tmp_type;
                    $template_visual->prof_id = $prof_id;
                    $template_visual->type = $visual_type;
                    $template_visual->save();

                    return 'SUC';
                }
                else{
                    // $visual_img = $req->file('visual_img');
                    $vfiles = $req->file('visual_img');
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

        if(isset($req->act) && $req->act=='update_team_member'){
            
            $tm_i = $req->tm_i;
            if($tm_i!=''){

                $team_member_name = $req->team_member_name;

                if(trim($team_member_name)==''){
                    return 'ERR';
                }

                $team_m = Prof_team_member::find($tm_i);
                if(!$team_m){
                    return 'ERR';
                }

                $team_member_bio = $req->team_member_bio;
                $team_mem_img = $req->file('team_mem_img');
                // $prof_id = session('salon_id');
                if($team_mem_img!=""){
                  $name = time().'.'.$team_mem_img->getClientOriginalExtension();
                  $destinationPath = public_path('/imgs/team');
                  $team_mem_img->move($destinationPath, $name);
                  $team_m->image=$name;
                }

                $category = $req->team_cate;
                $service = $req->team_service;

                if($category && count($category)>0){
                    $team_m->category = serialize($category);
                }
                if($category && count($category)>0){
                    $team_m->service = serialize($service);
                }
                
                $team_m->member = $team_member_name;
                $team_m->bio = $team_member_bio;
                $team_m->update();

                $prof_id=$req->prof_id;

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

        if(isset($req->act) && $req->act=='get_des_location'){
            $di = $req->di;
            $dl = Desire_location::find($di);
            if($dl){
                $resp['status'] = 'SUCCESS';

                $ar = array();
                $ar['desire_province'] = $dl->desire_province;
                $ar['desire_municipality'] = unserialize($dl->desire_municipality);
                $ar['desire_location_type'] = $dl->desire_location_type;

                $municipality_list = array();
                $province = Province::where('name',$dl->desire_province)->where('status','active')->orderBy('name','ASC')->get();
                // return $province;
                if(count($province)>0){
                    $municipality_list = Municipality::select('id','name','nl_name')->where('status','active')->where('province_id',$province[0]->id)->orderBy('name','ASC')->get();

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
            
            $prof_id=$req->prof_id;
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
                if($is_u == 1){
                    $prof->update();
                }
            }
            else{
                $desire_name = $prof->desire_name;
                $desire_bio = $prof->desire_bio;
                $desire_pic = $prof->desire_pic;

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
                if($is_u == 1){
                    $prof->update();
                }
            }
            
            if($req->temp_type=='f'){

                $template_note=Template_note::where('prof_id',$prof_id)->where('location_type','f')->first();
                if($template_note){
                    $chk=Template_note::where('prof_id',$prof_id)->where('location_type','d')->first();
                    if(!$chk){
                        $new = $template_note->replicate();
                        $new->location_type = 'd';
                        $new->save();
                    }
                    else{
                        /*$new = new Template_note;
                        if($chk->note==''){
                            $new->note = $template_note->note;
                        }

                        $new->all_gender = $template_note->all_gender;
                        $new->men = $template_note->men;
                        $new->women = $template_note->women;
                        $new->kids = $template_note->kids;
                        $new->update();*/
                    }
                }

                $services=Service::where('prof_id',$prof_id)->where('location_type','f')->where('type','main')->where('status','active')->get();
                if(count($services)>0){
                    foreach ($services as $item) 
                    {
                        $items = Service::find($item->id);
                        $new = $items->replicate();
                        $new->location_type = 'd';
                        $new->copy_id = $item->id;
                        $new->save();
                    }

                    $this->set_prof_cate($services[0]->prof_id);
                }

                $sb_services=Service::where('prof_id',$prof_id)->where('location_type','f')->where('type','sub')->where('status','active')->get();
                if(count($sb_services)>0){
                    foreach ($sb_services as $item) 
                    {   $mserv=0;
                        $serv_id = Service::where('copy_id',$item->service_id)->where('location_type','d')->take(1)->get();
                        if($serv_id && count($serv_id)>0){
                            $mserv = $serv_id[0]->id;
                        }
                        $items = Service::find($item->id);
                        $new = $items->replicate();
                        $new->location_type = 'd';
                        $new->service_id = $mserv;
                        $new->save();
                    }

                    $this->set_prof_cate($sb_services[0]->prof_id);
                }



                $team_memb=Prof_team_member::where('prof_id',$prof_id)->where('location_type','f')->where('status','active')->get();
                if(count($team_memb)>0){
                    foreach ($team_memb as $item) 
                    {
                        $items = Prof_team_member::find($item->id);
                        $new = $items->replicate();
                        $new->location_type = 'd';
                        $new->save();
                    }
                }


                $visual=Template_visual::where('prof_id',$prof_id)->where('location_type','f')->where('status','active')->get();
                if(count($visual)>0){
                    foreach ($visual as $item) 
                    {
                        $items = Template_visual::find($item->id);
                        $new = $items->replicate();
                        $new->location_type = 'd';
                        $new->save();
                    }
                }
            }
            else{
                $template_note=Template_note::where('prof_id',$prof_id)->where('location_type','d')->first();
                if($template_note){
                    $chk=Template_note::where('prof_id',$prof_id)->where('location_type','f')->first();
                    if(!$chk){
                        $new = $template_note->replicate();
                        $new->location_type = 'f';
                        $new->save();
                    }
                    else{
                        /*$new = new Template_note;
                        if($chk->note==''){
                            $new->note = $template_note->note;
                        }

                        $new->all_gender = $template_note->all_gender;
                        $new->men = $template_note->men;
                        $new->women = $template_note->women;
                        $new->kids = $template_note->kids;
                        $new->update();*/
                    }
                }

                $services=Service::where('prof_id',$prof_id)->where('location_type','d')->where('type','main')->where('status','active')->get();

                if(count($services)>0){
                    foreach ($services as $item) 
                    {
                        $items = Service::find($item->id);
                        $new = $items->replicate();
                        $new->location_type = 'f';
                        $new->copy_id = $item->id;
                        $new->save();
                    }

                    $this->set_prof_cate($services[0]->prof_id);
                }

                $sb_services=Service::where('prof_id',$prof_id)->where('location_type','d')->where('type','sub')->where('status','active')->get();
                if(count($sb_services)>0){
                    foreach ($sb_services as $item) 
                    {   $mserv=0;
                        $serv_id = Service::where('copy_id',$item->service_id)->where('location_type','f')->take(1)->get();
                        if($serv_id && count($serv_id)>0){
                            $mserv = $serv_id[0]->id;
                        }
                        $items = Service::find($item->id);
                        $new = $items->replicate();
                        $new->location_type = 'f';
                        $new->service_id = $mserv;
                        $new->save();
                    }

                    $this->set_prof_cate($sb_services[0]->prof_id);
                }


                $team_memb=Prof_team_member::where('prof_id',$prof_id)->where('location_type','d')->where('status','active')->get();
                if(count($team_memb)>0){
                    foreach ($team_memb as $item) 
                    {
                        $items = Prof_team_member::find($item->id);
                        $new = $items->replicate();
                        $new->location_type = 'f';
                        $new->save();
                    }
                }


                $visual=Template_visual::where('prof_id',$prof_id)->where('location_type','d')->where('status','active')->get();
                if(count($visual)>0){
                    foreach ($visual as $item) 
                    {
                        $items = Template_visual::find($item->id);
                        $new = $items->replicate();
                        $new->location_type = 'f';
                        $new->save();
                    }
                }
            }

            $resp['status'] = 'SUCCESS';        
            return response()->json($resp);

        }

        if(isset($req->act) && $req->act=='get_cate_serv'){
            $prof_id=$req->prof_id;
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
            // DB::connection()->enableQueryLog();

            $service = Service::where('prof_id',$prof_id)
                                ->where('status','active')
                                ->where('location_type',$temp_type)
                                // ->where('type','main')
                                ->get();

            /*$queries = DB::getQueryLog();
            dd($queries);                                        
            return;*/

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
            $prof_id=$req->prof_id;
           
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

    public function approve_detail(){
        DB::table('professionals')->update(['desire_info'=>'1','fixed_info'=>'1',]);

        return redirect()->route('admin_dashboard');
    }   

    public function professionals_service_list($status='all'){

        if($status=='pending')
            $prof = Professional::
                            select('legal_name','id', 'fixed_info','fixed_name','fixed_bio','fixed_pic','desire_name','desire_bio','desire_pic')
                            ->where('status','approve')
                            ->where('fixed_info','2')
                            ->orderBy('updated_at','desc')->get();

        else if($status=='approve')
            $prof = Professional::
                            select('legal_name','id','fixed_info', 'fixed_name','fixed_bio','fixed_pic','desire_name','desire_bio','desire_pic')
                            ->where('status','approve')
                            ->where('fixed_info','1')
                            ->orderBy('id','desc')->get();

        else 
            $prof = Professional::
                            select('legal_name','id', 'fixed_info', 'fixed_name','fixed_bio','fixed_pic','desire_name','desire_bio','desire_pic')
                            ->where('status','approve')
                            ->where('fixed_info','!=','2')
                            ->orderBy('id','desc')->get();
                            
        return view('admin.prof_serv_list')
                                ->with('professional',$prof)
                                ->with('status',$status);
    }

    public function service_detail(Request $req){
        if(!isset($req->p) || $req->p==''){
            return redirect()->route('professionals');
        }

        $prof_id = $req->p;
        $prof = Professional::find($prof_id);
        if($prof){

            $fixed_loc_salon = Fixed_location_salon::where('prof_id',$prof_id)
                                                ->where('status','!=','remove')
                                                ->get();

            $des_loc_salon = Desire_location::where('prof_id',$prof_id)
                                                ->where('status','!=','remove')
                                                ->get();

            $uri  = $_SERVER['REQUEST_URI'];
            $qs=$huri='';
            if(strpos($uri, '?') !== false){
                $qs = explode('?', $uri);
                $qs = $qs['1'];
            }

            // if($prof->fixed_info_nl!=2 || $prof->desire_info_nl!=2)
            $huri = route('nl_service_detail').'?'.$qs;

            $lang_kwords = Language_keyword::all();
            $lang_kwords_ar = array();
            foreach ($lang_kwords as $key => $value) {
                $lang_kwords_ar[$value->keyword]['english']=$value->english;
                $lang_kwords_ar[$value->keyword]['dutch']= ($value->dutch!='')?$value->dutch:$value->english;
            }

            $province = Province::where('status','active')->orderBy('name','ASC')->get();
            $municipality = Municipality::where('status','active')->where('province_id',$prof->prof_address[0]->province_id)->orderBy('name','ASC')->get();

            return view('admin.service_detail')->with('prof',$prof)
                            ->with('fixed_loc_salon',$fixed_loc_salon)
                            ->with('des_loc_salon',$des_loc_salon)
                            ->with('prof_id',$prof_id)
                            ->with('lang_kwords',$lang_kwords_ar)
                            // ->with('huri',$huri)
                            ->with('municipality',$municipality)
                            ->with('province',$province);
                            // ->with('all_province',$all_province);
        }
        else{
            return Redirect::back()->withErrors(['msg' => 'No Professional Found']);
        }
    }

    public function admin_prof_update(Request $req){
        $legal_name = $req->legal_name;
        $coc = $req->coc;
        $vat = $req->vat;
        $street = $req->street;
        $number = $req->number;
        $postal = $req->postal;
        $municipality = $req->municipality;
        $province = $req->province;
        $registration_docs = $req->file('registration_doc');
        $contact_person_first_name = $req->contact_person_first_name;
        $contact_person_last_name = $req->contact_person_last_name;
        $insta_link = $req->insta_link;
        $email = $req->email;
        $gender = $req->gender;
        $password = $req->password;
        $contact_number = $req->contact_number;
        $prof_id = $req->prof_id;
        
        
        if($prof_id=='' || $prof_id=='0'){

            return redirect()->back()->withErrors(['msg' => 'Something went wrong, please try again.']);
        }

        $prof = Professional::find($prof_id);
        if(!$prof){
           return redirect()->back()->withErrors(['msg' => 'Something went wrong, please try again.']);
        }
        
        $prof->legal_name = $legal_name;
        $prof->coc = $coc;
        $prof->vat = $vat;
        $prof->update();

        $prof_add = Professional_address::where('prof_id',$prof_id)->first();
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

        /*if($registration_doc!=""){
            $name = time().'.'.$registration_doc->getClientOriginalExtension();
          $destinationPath = public_path('/imgs/docs');
          $registration_doc->move($destinationPath, $name);
          $prof_add->registration_doc=$name;
          // die();
        }*/
        $prof_add->update();

        if(!empty($registration_docs) && count($registration_docs)>0){
            foreach ($registration_docs as $key => $registration_doc) {
                $name = rand(0,100).time().'.'.$registration_doc->getClientOriginalExtension();
                $destinationPath = public_path('/imgs/docs');
                $registration_doc->move($destinationPath, $name);

                $destinationPath1 = config('app.url').'/public/imgs/docs/'.$name;

                $reg_doc = new Professional_registration_doc;
                $reg_doc->doc    = $destinationPath1;
                $reg_doc->prof_id = $prof_id;
                $reg_doc->save();
            }
        }

        return Redirect::back()->withSuccess(['msg' => 'Detail Updated']);

    }

    public function fixed_location_update(Request $req){
        $fixed_name = $req->fixed_name;
        $fixed_bio = $req->fixed_bio;
        $fixed_pic = $req->file('fixed_pic');
        $prof_id = $req->prof_id;
    
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
        $prof_id = $req->prof_id;

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

            // $prof_id = session('salon_id');
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
                                            ->whereNotIn('category_id', $cate_arr)
                                            ->where('lang','en')
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

    public function desire_location_update(Request $req){
        $desire_name = $req->desire_name;
        $desire_bio = $req->desire_bio;
        $desire_pic = $req->file('desire_pic');

        $prof_id = $req->prof_id;
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
        $prof->desire_bio = $desire_bio;
        $prof->desire_name = $desire_name;
        $prof->update();

        echo 'SUC';

    }

    public function desire_add_province(Request $req){
    
        $resp = array();
        if($req->act=='add_province'){
            $prof_id = $req->prof_id;
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
                if(isset($req->fc) && $req->fc=='1'){
                    $prov = $req->province;
                    $municipality = isset($req->municipality)?$req->municipality:'';
                    $prof_temp->desire_province = $prov;

                    if($municipality!='')
                        $prof_temp->desire_municipality = serialize($municipality);
                    
                    $prof_temp->save();
                }

                DB::table('desire_locations')->where('prof_id',$prof_id)->where('desire_location_type','everywhere')->update(['status'=>'remove']);
            }
            else{
                $prof_temp->desire_province = 'Everywhere';
                $prof_temp->save();
            }

            

            $resp['status']='SUCCESS';
            return response()->json($resp);
        }

        if($req->act=='edit_province'){
           

            $lid = $req->lid;

            $prof_temp = Desire_location::find($lid);
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

    public function visitor_query_list($st='new'){
        if($st=='all')
            $visitor_queries = Visitor_queries::orderBy('id','desc')->get();
        else
            $visitor_queries = Visitor_queries::where('status',$st)->orderBy('id','desc')->get();
        return view('admin.visitor_queries_list')->with('visitor_queries',$visitor_queries)->with('status',$st);
    }

    public function language_keyword(){
        $lang_kwords = Language_keyword::orderBy('english')->get();
        return view('admin.language_keyword')->with('lang_kwords',$lang_kwords);
    }

    public function save_language_keyword(Request $req){

        $keywords = $req->keyword;
        $english = $req->english;
        $dutch = $req->dutch;

        foreach ($keywords as $key => $keyword) {

            if(trim($keyword)=='')continue;

            $keyword = str_replace(' ', '-', $keyword);
            $keyword = str_replace('’', '', $keyword);
            $keyword = str_replace(',', '', $keyword);
            $keyword = str_replace('"', '', $keyword);
            $keyword = str_replace("'", '', $keyword);
            $keyword = str_replace('`', '', $keyword);
            $keyword = str_replace('&', '', $keyword);
            $keyword = str_replace('(', '', $keyword);
            $keyword = str_replace(')', '', $keyword);
            $keyword = str_replace('.', '', $keyword);
            $keyword = str_replace('/', '-', $keyword);
            $keyword = str_replace('–', '-', $keyword);
            $keyword = str_replace('---', '-', $keyword);
            $keyword = str_replace('--', '-', $keyword);
            $keyword = strtolower($keyword);

            $englishv = $english[$key];
            $dutchv = $dutch[$key];

            $chk = Language_keyword::where('keyword',$keyword)->get();
           // print_r($chk);

            if($chk && count($chk)>0){

                $up = array('english'=>$english[$key],'dutch'=>$dutch[$key]);

                DB::table('language_keywords')->where('keyword',$keyword)
                    ->update($up);
            }
            else{
                $lang_keyw = new Language_keyword;
                $lang_keyw->keyword=$keyword;
                $lang_keyw->english=$englishv;
                $lang_keyw->dutch=$dutchv;
                $lang_keyw->save();
                // echo 'aaaaaaa->'.$prof_id = $lang_keyw->id;
            }
        }

        return Redirect::back();

    }

    public function settings(){
        $setting = Setting::where('status','active')->get();
        return view('admin.setting')->with('settings',$setting);
    }

    public function update_setting(Request $req){
        $sid = $req->sid;

        if($req->key_name == 'site_logo' || $req->key_name == 'footer_logo' || $req->key_name == 'logo_icon1' || $req->key_name == 'logo_icon2'){
            $image = $req->file('image');

            if($image!=''){
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $name);

                $destinationPath1 = config('app.url').'/public/images/'.$name;
                // $page_cnt->image=$destinationPath1;

                DB::table('settings')->where('id',$sid)
                    ->update(['value_en'=>$destinationPath1,'value_nl'=>$destinationPath1]);
            }
        }
        else{

            $item_en = $req->item_en;
            $item_nl = $req->item_nl;

            DB::table('settings')->where('id',$sid)
                    ->update(['value_en'=>$item_en,'value_nl'=>$item_nl]);
        }

        return 'SUCCESS';

    }

    public function menus(){
        $menus_header = Menu::where('status','active')->where('menu_type','header')->get();
        $menus_footer = Menu::where('status','active')->where('menu_type','footer')->get();
        return view('admin.menus')->with('menus_header',$menus_header)->with('menus_footer',$menus_footer);
    }

    public function update_menu(Request $req){
        $mid = $req->mid;
        $item_en = $req->item_en;
        $item_nl = $req->item_nl;

        if(count($mid)>0){
            foreach($mid as $k=>$m){
                DB::table('menus')->where('id',$m)->update(['item_nl'=>$item_nl[$k],'item_en'=>$item_en[$k]]);
            }

            return Redirect::back()->withSuccess(['msg' => 'Detail Updated']);
        }
        else{
            return Redirect::back()->withErrors(['msg' => 'No Menus found']);
        }
    }

    public function category(){
        $cate = Category::where('status','active')->get();
        return view('admin.category')->with('cates',$cate);
    }

    public function common_ajax(Request $req){
        $resp = array();

        if(isset($req->act) && $req->act=='remove_province'){
            $id = $req->id;
            $sts = $req->sts;

            DB::table('provinces')->where('id',$id)->update(['status'=>$sts]);

            $resp['status']='SUCCESS';
            return response()->json($resp);
        }

        if(isset($req->act) && $req->act=='remove_muninipality'){
            $id = $req->id;
            $sts = $req->sts;

            DB::table('municipality')->where('id',$id)->update(['status'=>$sts]);

            $resp['status']='SUCCESS';
            return response()->json($resp);
        }

        if(isset($req->act) && $req->act=='lang_kw_dup'){
            $keyword = $req->key;
            $keyword = str_replace(' ', '-', $keyword);
            $keyword = str_replace('’', '', $keyword);
            $keyword = str_replace(',', '', $keyword);
            $keyword = str_replace('"', '', $keyword);
            $keyword = str_replace("'", '', $keyword);
            $keyword = str_replace('`', '', $keyword);
            $keyword = str_replace('&', '', $keyword);
            $keyword = str_replace('(', '', $keyword);
            $keyword = str_replace(')', '', $keyword);
            $keyword = str_replace('.', '', $keyword);
            $keyword = str_replace('/', '-', $keyword);
            $keyword = str_replace('–', '-', $keyword);
            $keyword = str_replace('---', '-', $keyword);
            $keyword = str_replace('--', '-', $keyword);
            $keyword = strtolower($keyword);

            $chk = Language_keyword::where('keyword',$keyword)->get();

            if($chk && count($chk)>0){
                $resp['status']='ERROR';
                $resp['keyword'] = $chk[0];
            }
            else{
                $resp['status']='SUCCESS';
            }

            return response()->json($resp);
        }
    }

    //------- Dutch language ----------//

    public function nl_service_detail(Request $req){
        if(!isset($req->p) || $req->p==''){
            return redirect()->route('professionals');
        }

        $prof_id = $req->p;
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

            $huri = route('service_detail').'?'.$qs;

            $province = Province::where('status','active')->orderBy('name','ASC')->get();
            $municipality = Municipality::where('status','active')->where('province_id',$prof->prof_address[0]->province_id)->orderBy('name','ASC')->get();
            // $all_province = Province::where('status','active')->get();

            return view('admin.nl.nl_service_detail')->with('prof',$prof)
                            ->with('fixed_loc_salon',$fixed_loc_salon)
                            ->with('des_loc_salon',$des_loc_salon)
                            ->with('prof_id',$prof_id)
                            ->with('lang_kwords',$lang_kwords_ar)
                            ->with('huri',$huri)
                            ->with('municipality',$municipality)
                            ->with('province',$province);
                            // ->with('all_province',$all_province);
        }
        else{
            return Redirect::back()->withErrors(['msg' => 'No Professional Found']);
        }
    }

    public function nl_fixed_location_update(Request $req){
        $fixed_name = $req->fixed_name;
        $fixed_bio = $req->fixed_bio;
        $fixed_pic = $req->file('fixed_pic');
        $prof_id = $req->prof_id;
    
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
        $prof_id = $req->prof_id;

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

            // $prof_id = session('salon_id');
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

    public function nl_ajax_req(Request $req){
        $resp = array();
        if(isset($req->act) && $req->act=='prof_status'){
            $status = $req->status;
            $prof_id = $req->prof_id;
            if($prof_id=='' || $status==''){
                $resp['status']='ERROR';
                return response()->json($resp);
            }

            DB::table('professionals')
              ->where('id', $prof_id)
              ->update(['status' => $status]);

            $resp['status']='SUCCESS';
            return response()->json($resp);  
        }

        if(isset($req->act) && $req->act=='prof_temp_status'){
            $status = $req->status;
            $prof_id = $req->prof_id;
            if($prof_id=='' || $status==''){
                $resp['status']='ERROR';
                return response()->json($resp);
            }

            DB::table('professionals')
              ->where('id', $prof_id)
              ->update(['desire_info'=>'1','fixed_info'=>'1',]);

            $resp['status']='SUCCESS';
            return response()->json($resp);  
        }

        if(isset($req->act) && $req->act=='query_status'){
            $status = $req->status;
            $q_id = $req->q_id;
            if($q_id=='' || $status==''){
                $resp['status']='ERROR';
                return response()->json($resp);
            }

            DB::table('visitor_queries')
              ->where('id', $q_id)
              ->update(['status' => $status]);

            $resp['status']='SUCCESS';
            return response()->json($resp);  
        }

        if(isset($req->act) && $req->act=='get_fix_loc_detail'){
            $prof_id = $req->prof_id;
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
                        if(unserialize($value->category)!=''  && count(unserialize($value->category))>0){
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
                    if($value->service!='' ){
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
            $prof_id = $req->prof_id;
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
            $prof_temp = Nl_fixed_location_salon::find($sid);
            
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

        if(isset($req->act) && $req->act=='update_service_for'){
        
            $all_gender = $req->all_gender;
            $men = $req->men;
            $women = $req->women;
            $kids = $req->kids;
            $temp_type = $req->temp_type;

            $prof_id = $req->prof_id;

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
            if(count($temp)>0)  {
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

        if(isset($req->act) && $req->act=='get_salon_cate_detail'){
            $temp_type = $_POST['temp_type'];
            $cid = $_POST['cid'];
            $prof_id = $_POST['prof_id'];

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

            $prof_id = $req->prof_id;
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

                $prof_id = $req->prof_id;
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

                DB::table('nl_services')->where('id', $sid)->update([
                        'status'=>'remove',
                        ]);

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
                $prof_id = $req->prof_id;
                if($prof_id=='' || $prof_id=='0'){
                    $resp['status'] = 'ERROR';
                    $resp['msg'] = 'login';
                    return response()->json($resp);
                }
                
                $temp = Nl_template_note::where('location_type',$tmp_type)
                                    ->where('prof_id',$prof_id)
                                    ->where('status','active')
                                    ->get();
                if(count($temp)>0)  {
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
                    $resp['status'] = 'ERROR';
                    return response()->json($resp);
                }

                $team_member_bio = $req->team_member_bio;
                $team_mem_img = $req->file('team_mem_img');
                
                $prof_id = $req->prof_id;
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
                $service = $req->team_service;

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
            
            $prof_id = $req->prof_id;
            if($prof_id=='' || $prof_id=='0'){
                $resp['status'] = 'ERROR';
                $resp['msg'] = 'login';
                return response()->json($resp);
            }
            

                $visual_type = $req->visual_type;
                $prof_id = $req->prof_id;

                if(trim($visual_type)=='link'){
                    $visual_link = $req->visual_link;
                    $template_visual = new Template_visual;
                    $template_visual->visual = $visual_link;
                    $template_visual->location_type = $tmp_type;
                    $template_visual->prof_id = $prof_id;
                    $template_visual->type = $visual_type;
                    $template_visual->save();

                    return 'SUC';
                }
                else{
                    // $visual_img = $req->file('visual_img');
                    $vfiles = $req->file('visual_img');
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

        if(isset($req->act) && $req->act=='update_team_member'){
            
            $tm_i = $req->tm_i;
            if($tm_i!=''){

                $team_member_name = $req->team_member_name;

                if(trim($team_member_name)==''){
                    return 'ERR';
                }

                $team_m = Nl_prof_team_member::find($tm_i);
                if(!$team_m){
                    return 'ERR';
                }

                $team_member_bio = $req->team_member_bio;
                $team_mem_img = $req->file('team_mem_img');
                // $prof_id = session('salon_id');
                if($team_mem_img!=""){
                  $name = time().'.'.$team_mem_img->getClientOriginalExtension();
                  $destinationPath = public_path('/imgs/team');
                  $team_mem_img->move($destinationPath, $name);
                  $team_m->image=$name;
                }

                $category = $req->team_cate;
                $service = $req->team_service;

                if($category && count($category)>0){
                    $team_m->category = serialize($category);
                }
                if($category && count($category)>0){
                    $team_m->service = serialize($service);
                }
                
                $team_m->member = $team_member_name;
                $team_m->bio = $team_member_bio;
                $team_m->update();

                $prof_id=$req->prof_id;

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
                $province = Province::where('nl_name',$dl->desire_province)->get();
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
            
            $prof_id=$req->prof_id;
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
                        /*$new = new Template_note;
                        if($chk->note==''){
                            $new->note = $template_note->note;
                        }

                        $new->all_gender = $template_note->all_gender;
                        $new->men = $template_note->men;
                        $new->women = $template_note->women;
                        $new->kids = $template_note->kids;
                        $new->update();*/
                    }
                }

                $services=Nl_service::where('prof_id',$prof_id)->where('location_type','f')->where('type','main')->where('status','active')->get();
                if(count($services)>0){
                    foreach ($services as $item) 
                    {
                        $items = Nl_service::find($item->id);
                        $new = $items->replicate();
                        $new->location_type = 'd';
                        $new->copy_id = $item->id;
                        $new->save();
                    }

                    $this->set_prof_cate_nl($services[0]->prof_id);
                }

                $sb_services=Nl_service::where('prof_id',$prof_id)->where('location_type','f')->where('type','sub')->where('status','active')->get();
                if(count($sb_services)>0){
                    foreach ($sb_services as $item) 
                    {   $mserv=0;
                        $serv_id = Nl_service::where('copy_id',$item->service_id)->where('location_type','d')->take(1)->get();
                        if($serv_id && count($serv_id)>0){
                            $mserv = $serv_id[0]->id;
                        }
                        $items = Nl_service::find($item->id);
                        $new = $items->replicate();
                        $new->location_type = 'd';
                        $new->service_id = $mserv;
                        $new->save();
                    }

                    $this->set_prof_cate_nl($sb_services[0]->prof_id);
                }



                $team_memb=Nl_prof_team_member::where('prof_id',$prof_id)->where('location_type','f')->where('status','active')->get();
                if(count($team_memb)>0){
                    foreach ($team_memb as $item) 
                    {
                        $items = Nl_prof_team_member::find($item->id);
                        $new = $items->replicate();
                        $new->location_type = 'd';
                        $new->save();
                    }
                }


                $visual=Template_visual::where('prof_id',$prof_id)->where('location_type','f')->where('status','active')->get();
                if(count($visual)>0){
                    foreach ($visual as $item) 
                    {
                        $items = Template_visual::find($item->id);
                        $new = $items->replicate();
                        $new->location_type = 'd';
                        $new->save();
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
                        /*$new = new Template_note;
                        if($chk->note==''){
                            $new->note = $template_note->note;
                        }

                        $new->all_gender = $template_note->all_gender;
                        $new->men = $template_note->men;
                        $new->women = $template_note->women;
                        $new->kids = $template_note->kids;
                        $new->update();*/
                    }
                }

                $services=Nl_service::where('prof_id',$prof_id)->where('location_type','d')->where('type','main')->where('status','active')->get();

                if(count($services)>0){
                    foreach ($services as $item) 
                    {
                        $items = Nl_service::find($item->id);
                        $new = $items->replicate();
                        $new->location_type = 'f';
                        $new->copy_id = $item->id;
                        $new->save();
                    }

                    $this->set_prof_cate_nl($services[0]->prof_id);
                }

                $sb_services=Nl_service::where('prof_id',$prof_id)->where('location_type','d')->where('type','sub')->where('status','active')->get();
                if(count($sb_services)>0){
                    foreach ($sb_services as $item) 
                    {   $mserv=0;
                        $serv_id = Nl_service::where('copy_id',$item->service_id)->where('location_type','f')->take(1)->get();
                        if($serv_id && count($serv_id)>0){
                            $mserv = $serv_id[0]->id;
                        }
                        $items = Nl_service::find($item->id);
                        $new = $items->replicate();
                        $new->location_type = 'f';
                        $new->service_id = $mserv;
                        $new->save();
                    }

                    $this->set_prof_cate_nl($sb_services[0]->prof_id);
                }


                $team_memb=Nl_prof_team_member::where('prof_id',$prof_id)->where('location_type','d')->where('status','active')->get();
                if(count($team_memb)>0){
                    foreach ($team_memb as $item) 
                    {
                        $items = Nl_prof_team_member::find($item->id);
                        $new = $items->replicate();
                        $new->location_type = 'f';
                        $new->save();
                    }
                }


                $visual=Template_visual::where('prof_id',$prof_id)->where('location_type','d')->where('status','active')->get();
                if(count($visual)>0){
                    foreach ($visual as $item) 
                    {
                        $items = Template_visual::find($item->id);
                        $new = $items->replicate();
                        $new->location_type = 'f';
                        $new->save();
                    }
                }
            }

            $resp['status'] = 'SUCCESS';        
            return response()->json($resp);

        }

        if(isset($req->act) && $req->act=='get_cate_serv'){
            $prof_id=$req->prof_id;
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
            // DB::connection()->enableQueryLog();

            $service = Nl_service::where('prof_id',$prof_id)
                                ->where('status','active')
                                ->where('location_type',$temp_type)
                                // ->where('type','main')
                                ->get();

            /*$queries = DB::getQueryLog();
            dd($queries);                                        
            return;*/

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

    public function nl_desire_location_update(Request $req){
        $desire_name = $req->desire_name;
        $desire_bio = $req->desire_bio;
        $desire_pic = $req->file('desire_pic');

        $prof_id = $req->prof_id;
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
        $prof->desire_bio_nl = $desire_bio;
        $prof->desire_name_nl = $desire_name;
        $prof->update();

        echo 'SUC';

    }

    public function nl_desire_add_province(Request $req){
    
        $resp = array();
        if($req->act=='add_province'){
            $prof_id = $req->prof_id;
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
            }

            

            $resp['status']='SUCCESS';
            return response()->json($resp);
        }

        if($req->act=='edit_province'){
           

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


    ////////////////////////////////////////////////////

    /*public function send_manual_mail(Request $req){
        $content = $req->content;
        $subject = $req->subject;

        $objDemo = new \stdClass();
        $objDemo->content = $content;
        $objDemo->subject = $subject;
        
        Mail::to('jonsain.official@gmail.com')->send(new ManualMail($objDemo));
    }*/

    public function preview_manual_mail(Request $req){
        $content = $req->msg;
        $subject = $req->subject;

        $objDemo = new \stdClass();
        $objDemo->content = $content;
        $objDemo->subject = $subject;

        return view('mail.manual_mails')->with('obj',$objDemo);
    }

    public function send_manual_mail(Request $req){

        $email_content = $req->msg;
        $subject = $req->subject;
        $professional = $req->professional;
        $template = $req->template;


        $resp=array();

        $email_logs=array();

        $emails=0;

        if(!empty($professional) && count($professional)>0){
            $emails = 1;

            $prof = Professional::whereIn('id',$professional)->get();

            foreach ($prof as $key => $value) {
                
                try {

                    $legal_name = $value->legal_name;
                    $coc = $value->coc;
                    $vat = $value->vat;
                    $email = $value->email;
                    $fixed_name = $value->fixed_name;
                    $desire_name = $value->desire_name;
                    $contact_number = $value->prof_address[0]->contact_number;
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

                    $email_content = str_replace('##pro_legal_name##', $legal_name, $email_content);
                    $email_content = str_replace('##pro_email##', $email, $email_content);
                    $email_content = str_replace('##pro_phone##', $contact_number, $email_content);
                    $email_content = str_replace('##pro_coc##', $coc, $email_content);
                    $email_content = str_replace('##pro_vat##', $vat, $email_content);
                    $email_content = str_replace('##contact_person_first_name##', $contact_person_first_name, $email_content);
                    $email_content = str_replace('##contact_person_last_name##', $contact_person_last_name, $email_content);
                    $email_content = str_replace('##pro_fx_ds_lg_name##', $fx_ds_lg_name, $email_content);
                    $email_content = str_replace('##pro_fx_ds_name##', $fx_ds_name, $email_content);

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
                    
                    $resp['step1']='DONE';

                    // $email = 'jonsain.official@gmail.com';
                    Mail::to($email)->send(new ManualMail($objDemo));
                    $resp['step2']='DONE';

                    $arr = array();

                    $arr['from_address'] = config('app.MAIL_FROM_ADDRESS');
                    $arr['to_address'] = $email;
                    $arr['subject'] = $subject;
                    $arr['content'] = $email_content;
                    $arr['type'] = "manual";
                    $arr['script'] = basename(__FILE__);

                    $email_logs[]=$arr;

                } catch (\Exception $e) {
                    $resp['step3']=$e->getMessage();
                    continue;
                }
            }

            Email_log::insert($email_logs);

        }

        if($template=='static' && isset($req->prof_emails)) 
        {
            $prof_emails = $req->prof_emails;
            if(count($prof_emails)>0){
                $emails = 1;

                foreach ($prof_emails as $key => $value) {
                    try {

                        $email = $value;

                        $objDemo = new \stdClass();
                        $objDemo->content=$email_content;
                        $objDemo->subject=$subject;
                        
                        $resp['step1']='DONE';

                        // $email = 'jonsain.official@gmail.com';
                        Mail::to($email)->send(new ManualMail($objDemo));
                        $resp['step2']='DONE';

                        $arr = array();

                        $arr['from_address'] = config('app.MAIL_FROM_ADDRESS');
                        $arr['to_address'] = $email;
                        $arr['subject'] = $subject;
                        $arr['content'] = $email_content;
                        $arr['type'] = "manual";
                        $arr['script'] = basename(__FILE__);

                        $email_logs[]=$arr;

                    } catch (\Exception $e) {
                        $resp['step3']=$e->getMessage();
                        continue;
                    }
                }

                Email_log::insert($email_logs);
            }
        }

        if($emails == 1){
            $resp['status']='SUCCESS';
            $resp['msg']='Mail sent';
            return response()->json($resp);
        }
        else{
            $resp['status']='ERROR';
            $resp['msg']='No professional selected';
            return response()->json($resp);
        }

    }

    public function send_mail($email_content, $subject, $professional){
        
        // this method might not support sending static emails.


        // $email_content = $req->msg;
        // $subject = $req->subject;
        // $professional = $req->professional;
        // $template = $req->template;
        $resp=array();
        $email_logs=array();
        $emails=0;

        if(!empty($professional) && intval($professional)>0){
            $emails = 1;

            $prof = Professional::whereIn('id',$professional)->get();

            foreach ($prof as $key => $value) {
                
                try {

                    $legal_name = $value->legal_name;
                    $coc = $value->coc;
                    $vat = $value->vat;
                    $email = $value->email;
                    $fixed_name = $value->fixed_name;
                    $desire_name = $value->desire_name;
                    $contact_number = $value->prof_address[0]->contact_number;
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

                    $email_content = str_replace('##pro_legal_name##', $legal_name, $email_content);
                    $email_content = str_replace('##pro_email##', $email, $email_content);
                    $email_content = str_replace('##pro_phone##', $contact_number, $email_content);
                    $email_content = str_replace('##pro_coc##', $coc, $email_content);
                    $email_content = str_replace('##pro_vat##', $vat, $email_content);
                    $email_content = str_replace('##contact_person_first_name##', $contact_person_first_name, $email_content);
                    $email_content = str_replace('##contact_person_last_name##', $contact_person_last_name, $email_content);
                    $email_content = str_replace('##pro_fx_ds_lg_name##', $fx_ds_lg_name, $email_content);
                    $email_content = str_replace('##pro_fx_ds_name##', $fx_ds_name, $email_content);

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
                    
                    $resp['step1']='DONE';

                    // $email = 'jonsain.official@gmail.com';
                    Mail::to($email)->send(new ManualMail($objDemo));
                    $resp['step2']='DONE';

                    $arr = array();

                    $arr['from_address'] = config('app.MAIL_FROM_ADDRESS');
                    $arr['to_address'] = $email;
                    $arr['subject'] = $subject;
                    $arr['content'] = $email_content;
                    $arr['type'] = "manual";
                    $arr['script'] = basename(__FILE__);

                    $email_logs[]=$arr;

                } catch (\Exception $e) {
                    $resp['step3']=$e->getMessage();
                    continue;
                }
            }

            Email_log::insert($email_logs);

        }

        if($emails == 1){
            $resp['status']='SUCCESS';
            $resp['msg']='Mail sent';
            return response()->json($resp);
        }
        else{
            $resp['status']='ERROR';
            $resp['msg']='No professional selected';
            return response()->json($resp);
        }

    }

    public function municiplaity(Request $req){
        $municiplaity = Municipality::where('status','active')->orderBy('name','ASC')->get();
        $province = Province::where('status','active')->orderBy('name','ASC')->get();
        return view('admin.addMunicipality')->with('municipalitlist',$municiplaity)->with('province',$province);
    }

    public function save_municipality(Request $req){
        $municipality_ids = isset($req->ids)?$req->ids:'';
        $names =  isset($req->name)?$req->name:'';
        $nl_names =  isset($req->nl_name)?$req->nl_name:'';
        $province =  isset($req->province)?$req->province:'';

        $namens =  isset($req->namen)?$req->namen:'';
        $nl_namens =  isset($req->nl_namen)?$req->nl_namen:'';
        $provinces =  isset($req->provincen)?$req->provincen:'';

        if($municipality_ids!='' && count($municipality_ids)>0){
            foreach ($municipality_ids as $key => $value) {
                $name = $names[$key];
                $nl_name = $nl_names[$key];
                $province_id = $province[$key];

                $up = array('name'=>$name,'nl_name'=>$nl_name, 'province_id'=>$province_id);

                DB::table('municipality')->where('id',$value)
                    ->update($up);
            }
        }

        if($namens!='' && count($namens)>0){
            foreach ($namens as $key => $value) {

                if(trim($value)=='')continue;

                $munic = new Municipality;

                $munic->name=$value;
                $munic->nl_name=$nl_namens[$key];
                $munic->province_id=$provinces[$key];

                $munic->save();
            }
        }

        return Redirect::back()->withSuccess(['msg' => 'Detail Updated']);
    }

    public function provinces(Request $req){
        $province = Province::where('status','active')->orderBy('name','ASC')->get();
        return view('admin.provinces')->with('provinces',$province);
    }

    public function save_province(Request $req){
        $province_ids = isset($req->ids)?$req->ids:'';
        $names =  isset($req->name)?$req->name:'';
        $nl_names =  isset($req->nl_name)?$req->nl_name:'';
        // $municipality_ids =  isset($req->municipality)?$req->municipality:'';

        $namens =  isset($req->namen)?$req->namen:'';
        $nl_namens =  isset($req->nl_namen)?$req->nl_namen:'';
        // $municipalityns =  isset($req->municipalityn)?$req->municipalityn:'';

        if($province_ids!='' && count($province_ids)>0){
            foreach ($province_ids as $key => $value) {
                $name = $names[$key];
                $nl_name = $nl_names[$key];
                // $municipality_id = $municipality_ids[$key];

                $up = array('name'=>$name,'nl_name'=>$nl_name);

                DB::table('provinces')->where('id',$value)
                    ->update($up);
            }
        }



        if($namens!='' && count($namens)>0){

            foreach ($namens as $key => $value) {

                if(trim($value)=='')continue;

                $munic = new Province;

                $munic->name=$value;
                $munic->nl_name=$nl_namens[$key];

                $munic->save();

                
            }
        }

        return Redirect::back()->withSuccess(['msg' => 'Detail Updated']);
    }

}