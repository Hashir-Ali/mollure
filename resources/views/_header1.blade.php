<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

if(!isset($setting)){
  $setting = Controller::get_settings('en');
}

?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="theme-color" content="#4a4a4a">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" href="{{URL::asset('public/images/favicon.png')}}">
    <script src="{{ URL::asset('public/js/jquery-3.4.1.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL::asset('public/css/style.css?2233')}}" rel="stylesheet">
    <link href="{{ URL::asset('public/css/custom.css')}}" rel="stylesheet">
    <title>@if(isset($meta_title) && $meta_title!='') {{ $meta_title }} @else Mollure @endif</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <meta content="" name="description">
   <style type="text/css">
   /*p,a,span,div{font-family: 'Poppins', sans-serif;}*/
   h1,h2,h3,h4,h5,h6, h1>span,h2>span,h3>span,h4>span,h5>span,h6>span{
       font-family: 'Playfair Display', serif !important;
   }
   </style>
</head>
<body>

  <!-- start Header -->
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-xl ">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{ config('app.url') }}">
                            <!-- <img src="images/blender_logo.png" style="width:150px;" /> -->
                            <div class="d-flex align-items-center me-lg-4">
                                <img src="{{ $setting['site_logo'] }}" alt="logo" style="max-height:70px" />
                                <!-- <span class="fs-3 fw-medium ms-1">Mollure</span> -->
                            </div>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            
                            <div class="dropdown me-3">
                              <button class="lang_btn_head btn dropdown-toggle d-flex align-items-center" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style='    font-size: 15px;'>
                                <img src="{{ URL::asset('public/icons/lang_ic.png')}}" alt="EN" height="20" width="20" class="ms-1" style="margin-right:10px;" /> EN 
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li class="py-0 px-3">
                                  <a href="#">NL</a>
                                </li>
                              </ul>
                              <!-- @if(isset($huri) && $huri!='')
                              <button class="lang_btn_head btn dropdown-toggle fs-6 fw-normal d-flex align-items-center" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" >
                                EN <img src="{{ URL::asset('public/images/united-kingdom.png')}}" alt="EN" height="24" width="24" class="ms-1" />
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li class="p-2">
                                  <a href="{{$huri}}">NL <img src="{{ URL::asset('public/images/nlflg.png')}}" alt="Nl" height="24" width="24" class="ms-1" /></a>
                                </li>
                              </ul>
                              @endif -->
                            </div>
                            <a href="{{route('login')}}"><button style="font-size: 15px;" class="header_btn1 my_bg_color_green1 mt-2 mb-2 mt-xl-0 mb-xl-0">Login</button></a>
                            @if(Route::currentRouteName() != 'login')
                            <a href="{{route('login')}}"><button style="font-size: 15px;" class="header_btn mt-2 mb-2 mt-xl-0 mb-xl-0">@if(isset($menuh['for_professional'])) {{$menuh['for_professional']}} @else For Professional @endif </button></a>
                            @endif
                        </div>
                    </div>
                </nav>
            </div>
        </header>

