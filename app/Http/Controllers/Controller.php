<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use \App\Page_content;
use \App\Page_meta;
use \App\Menu;
use \App\Setting;
use \App\Language_keyword;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function get_page_content($lang='en',$page='home'){

    	if($lang=='en'){
    		$content = Page_content::where('page',$page)
                                ->with('get_sub_content')
    							->where('status','active')->get();
		}elseif($lang=='nl'){
			$content = Page_content::where('page',$page)
    							->where('status','active')
                                ->with('get_sub_content')
                                ->get();
		}
		else{
			$content = Page_content::where('page',$page)
                                ->with('get_sub_content')
    							->where('status','active')->get();
		}
		
		return $content;
    }

    public function get_page_meta($lang='en',$page='home'){

		$content = Page_meta::where('page',$page)
    							->where('status','active')->get();
		
		return $content;
    }

    public function get_page_menu($type='',$lang='en'){

    	if($type=='header')
    		$menu = Menu::where('menu_type','header')->where('status','active')->get();
    	else if($type=='footer')
    		$menu = Menu::where('menu_type','footer')->where('status','active')->get();
    	else
    		$menu = Menu::where('status','active')->get();

    	$resp = array();
    	if($menu && count($menu)>0){
    		foreach ($menu as $key => $value) {
    			if($lang=='nl')
    				$resp[$value->sname] = $value->item_nl;
    			else
    				$resp[$value->sname] = $value->item_en;
    		}
    	}

    	return $resp;
    }

    public function get_settings($lang='en'){
        $setting = Setting::all();
        $resp = array();
        if($setting && count($setting)>0){
            foreach ($setting as $key => $value) {
                if($lang=='nl')
                    $resp[$value->key_name] = $value->value_nl;
                else
                    $resp[$value->key_name] = $value->value_en;
            }
        }

        return $resp;
    }

    public function get_translation($key=""){
        if($key==''){
            $lang_kwords = Language_keyword::all();
            $lang_kwords_ar = array();
            foreach ($lang_kwords as $key => $value) {
                $lang_kwords_ar[$value->keyword]['english']=$value->english;
                $lang_kwords_ar[$value->keyword]['dutch']= ($value->dutch!='')?$value->dutch:$value->english;
            }
            return $lang_kwords_ar;
        }
        else{
            $lang_kwords = Language_keyword::where('keyword',$key)->get();
            $lang_kwords_ar = array();
            if($lang_kwords && count($lang_kwords)>0){
                foreach ($lang_kwords as $key => $value) {
                    $lang_kwords_ar[$value->keyword]['english']=$value->english;
                    $lang_kwords_ar[$value->keyword]['dutch']= ($value->dutch!='')?$value->dutch:$value->english;
                }
            }
            return $lang_kwords_ar;   
        }
        
    }

}
