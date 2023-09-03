<?php
use App\Http\Controllers\Controller;

if(!isset($setting)){
  $setting = Controller::get_settings('nl');
}

?>
<style type="text/css">
i.fa-facebook1:before{content: "\f09a";}
i.fa-facebook1{display: inline-block;font: normal normal normal 14px/1 FontAwesome;font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;}
</style>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<div style="padding:20px;border:3px solid #0d9da3;width:90%;margin:auto;">
	<div style="text-align:center;border-bottom:1px solid #e1e0e0">
		<img src="{{ $setting['site_logo'] }}" alt="logo"  style="max-height:70px"  />
	</div>
	<div style="padding:10px">
		<p style="font-size: 18px;">Dear <b>{{$obj->legal_name}}</b></p>
		<p style="font-size: 18px;">Please verify your email by clicking on the button below.</p>
		<p><br></p>
		<p><br></p>
		<p style="text-align:center;">
			<button type="button" style="background: #0d9da3;padding: 10px 27px;font-size: 18px;color: #fff;border: none;">Verify your email</button>
		</p>
		<p><br></p>
		<p>
			Kind Regards,<br>
			Mollure
		</p>
		<p><br></p>
	</div>
	<div style="text-align:center;padding:10px 0 0 0;border-top:1px solid #e1e0e0">
		<a href="https://facebook.com"><img src="{{ asset('public/icons/facebook_ic.png') }}" alt="logo"  style="height:35px"  /></a> &nbsp; 
		<a href="https://facebook.com"><img src="{{ asset('public/icons/twitter_ic.png') }}" alt="logo"  style="height:35px"  /></a> &nbsp; 
		<a href="https://facebook.com"><img src="{{ asset('public/icons/insta_ic.png') }}" alt="logo"  style="height:35px"  /></a> &nbsp; 
		<a href="https://facebook.com"><img src="{{ asset('public/icons/linkin_ic.png') }}" alt="logo"  style="height:35px"  /></a> &nbsp; 
	</div>
</div>