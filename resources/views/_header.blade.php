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
    <link href="{{ URL::asset('public/css/style.css?22')}}" rel="stylesheet">
    <link href="{{ URL::asset('public/css/custom.css')}}" rel="stylesheet">
    <title>@if(isset($meta_title) && $meta_title!='') {{ $meta_title }} @else Mollure @endif</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <meta content="" name="description">
   <style type="text/css">
   /*p,a,span,div{font-family: 'Poppins', sans-serif;}*/
   *,h1,h2,h3,h4,h5,h6, h1>span,h2>span,h3>span,h4>span,h5>span,h6>span{
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
                            <ul class="navbar-nav ms-auto my_navbar" @if(Route::currentRouteName() == 'login') style="visibility:hidden" @endif>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}#result_expert">@if(isset($menuh['result'])) {{$menuh['result']}} @else Result @endif</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">@if(isset($menuh['mollure'])) {{$menuh['mollure']}} @else Mollure @endif</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="{{route('home')}}#whymollue">@if(isset($menuh['whymollue'])) {{$menuh['whymollue']}} @else Why Mollure @endif</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{route('more-mollure')}}">@if(isset($menuh['more-mollure'])) {{$menuh['more-mollure']}} @else More Mollure @endif </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{route('about-us')}}">@if(isset($menuh['about-us'])) {{$menuh['about-us']}} @else About Us @endif </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('home')}}#guarantee">@if(isset($menuh['guarantee'])) {{$menuh['guarantee']}} @else Guarantee @endif </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('home')}}#price">@if(isset($menuh['price'])) {{$menuh['price']}} @else Price @endif </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('how-works')}}">@if(isset($menuh['how-it-works'])) {{$menuh['how-it-works']}} @else How It Works? @endif </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('contact_us')}}">@if(isset($menuh['contact-us'])) {{$menuh['contact-us']}} @else Contact @endif </a>
                                </li>
                            </ul>
                            <div class="dropdown lang-btn me-2">
                              @if(isset($huri) && $huri!='')
                              <button class="ml-primary dropdown-toggle d-flex align-items-center" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" >
                                EN
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li class="p-2">
                                  <a href="{{$huri}}">NL</a>
                                </li>
                              </ul>
                              @endif
                            </div>
                            @if(Route::currentRouteName() != 'login')
                            <a href="{{route('login')}}"><button style="font-size: 14px;" class="header_btn my_bg_color_green mt-2 mb-2 mt-xl-0 mb-xl-0">@if(isset($menuh['for_professional'])) {{$menuh['for_professional']}} @else For Professional @endif </button></a>
                            @endif
                        </div>
                    </div>
                </nav>
            </div>
        </header>



        <!-- Ajram -->
    <!--Navbar Start-->
    <!-- <nav class="container-fluid navbar navbar-desktop px-4 py-4 d-flex flex-column flex-lg-row align-items-center justify-content-between mb-5">
      <div class="d-flex align-items-center mb-2 me-lg-4">
        <img src="{{ URL::asset('public/images/logo.png')}}" alt="logo" style="width:70px"/>
        <span class="fs-5 fw-medium ms-1">Mollure</span>
      </div>
      <div class="d-flex flex-wrap align-items-center justify-content-center fs-5 fw-medium mb-2 px-2 me-lg-3 mx-auto">
        <span class="me-4">Home</span>
        <span class="me-4">Mollure</span>
        <span class="me-4">Guarantee</span>
        <span class="me-4">Price</span>
        <span class="me-4">How It Works?</span>
        <span class="">About Us</span>
      </div>
      <div class="d-flex flex-wrap justify-content-center align-items-center nav-auto-row">
        <div class="dropdown me-3">
          <button
            class="btn dropdown-toggle fs-6 fw-normal d-flex align-items-center"
            type="button"
            id="dropdownMenuButton1"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            En <img src="{{ URL::asset('public/images/united-kingdom.png')}}" alt="uk flag" height="24" width="24" class="ms-1" />
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li class="p-2">
              Ger <img src="{{ URL::asset('public/images/germany.png')}}" alt="germany flag" height="24" width="24" class="ms-1" />
            </li>
            <li class="p-2">
              Ind <img src="{{ URL::asset('public/images/india.png')}}" alt="india flag" height="24" width="24" class="ms-1" />
            </li>
          </ul>
        </div>

        @if(session('salon_login')=='1')
        <div class="me-4 fs-6 fw-medium">
          <a style="text-decoration:none" href="{{route('dashboard')}}"><i class="ri-user-line"></i>{{session('salon_name')}}</a></div>
        <a href="{{route('logout')}}" style="text-decoration:none">
          <button class="btn btn-outline-secondary d-flex align-items-center fw-medium p-1" style="font-size:16px">
            <i class="ri-logout-box-line"></i>Sign Out
          </button>
        </a>
        @else
        <a href="{{route('login')}}" style="text-decoration:none">
          <button class="btn btn-outline-secondary d-flex align-items-center fs-6 fw-medium">
            <i class="ri-user-fill me-1"></i>Sign In
          </button>
        </a>
        @endif
      </div>
    </nav> -->
    <!-- Navbar End -->
    <!--Navbar Mobile start-->
   <!--  <nav class="navbar navbar-expand-lg navbar-light navbar-mobile">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <div class="d-flex align-items-center mb-2 me-lg-4">
            <img src="{{ URL::asset('public/images/logo.png')}}" alt="logo" />
            <span class="fs-3 fw-medium ms-1">Mollure</span>
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse fs-4" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ps-3 ps-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">RESULT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">MOLLURE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">GUARANTEE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">PRICE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">HOW IT WORKS?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ABOUT US</a>
            </li>
          </ul>
          <div class="d-flex ps-3 ps-md-0">
           <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item dropdown mb-2">
              <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                En <img src="{{ URL::asset('public/images/united-kingdom.png')}}" alt="uk flag" height="24" width="24" class="ms-1" />
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#"> Ger <img src="{{ URL::asset('public/images/germany.png')}}" alt="germany flag" height="24" width="24" class="ms-1" /></a></li>
                <li><a class="dropdown-item" href="#"> Ind <img src="{{ URL::asset('public/images/india.png')}}" alt="india flag" height="24" width="24" class="ms-1" /></a></li>
              </ul>
            </li>
            <li class="nav-item mb-2">
              <a class="nav-link" href="{{route('dashboard')}}">MORGAN FREEMAN</a>
            </li>
            <li class="nav-item mb-2">
              <a href="{{route('login')}}" class="nav-link btn btn-outline-secondary d-flex align-items-center justify-content-center">
                <i class="ri-user-fill me-2"></i>Sign In
              </a>
            </li>
           </ul>
          </div>
        </div>
      </div>
    </nav> -->
    <!--Navbar Mobile End-->