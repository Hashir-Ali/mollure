<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \App\universalHelper;

use Response;
use \App\Admin;
use Session;

use DB;

class LoginController extends Controller
{

	public function index(Request $request)
	{
    // return $request->session()->get('admin_id');
    if($request->session()->get('admin_id')=='undefined' || $request->session()->get('admin_id')=='')
      return view('admin.index');
    else
      return redirect('/gw_dmin_login/dashboard');
	}


}

?>