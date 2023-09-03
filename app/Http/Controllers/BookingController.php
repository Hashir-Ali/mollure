<?php

namespace App\Http\Controllers;

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

class BookingController extends Controller
{
    public function get_reschedule_request($book_id,$utype='all'){
    	if($utype=='all'){
    		$req = Booking_edit_request::where('book_id',$book_id)->where('type','reschedule')->get();
    	}
    	elseif($utype=='client'){
    		$req = Booking_edit_request::where('book_id',$book_id)->where('type','reschedule')->where('client_status','new')->get();
    	}
    	else{
    		$req = Booking_edit_request::where('book_id',$book_id)->where('type','reschedule')->where('prof_status','new')->get();
    	}

   		return $req;
    	
    }

    public function get_tm_request($book_id,$book_tran_id='0',$utype='all'){
    	if($utype=='all'){
    		if($book_tran_id=='0')
    			$req = Booking_edit_request::where('book_id',$book_id)->where('type','team_member')->get();
    		else
    			$req = Booking_edit_request::where('book_id',$book_id)->where('type','team_member')->where('book_trans_id',$book_tran_id)->get();
    	}
    	elseif($utype=='client'){
    		if($book_tran_id=='0')
    			$req = Booking_edit_request::where('book_id',$book_id)->where('type','team_member')->where('client_status','new')->get();
    		else
    			$req = Booking_edit_request::where('book_id',$book_id)->where('type','team_member')->where('client_status','new')->where('book_trans_id',$book_tran_id)->get();
    	}
    	else{
    		if($book_tran_id=='0')
    			$req = Booking_edit_request::where('book_id',$book_id)->where('type','team_member')->where('prof_status','new')->get();
    		else
    			$req = Booking_edit_request::where('book_id',$book_id)->where('type','team_member')->where('prof_status','new')->where('book_trans_id',$book_tran_id)->get();
    	}

   		return json_decode($req);
    	
    }

    public function get_team_member($id){
    	$tm = Prof_team_member::find($id);
    	return json_decode($tm);
    }
}
