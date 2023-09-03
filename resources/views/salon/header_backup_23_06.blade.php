<?php
use App\Http\Controllers\Controller;
$menuh = Controller::get_page_menu('header','en');
$menuf = Controller::get_page_menu('footer','en');

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
    <link href="{{ URL::asset('public/css/styles.css')}}?12" rel="stylesheet">
    <script src="{{ URL::asset('public/js/jquery-3.4.1.min.js')}}"></script>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
    />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Mollure</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <meta content="" name="description">
    <style type="text/css">
        nav a{text-decoration: none;color: inherit;}
        *,h1,h2,h3,h4,h5,h6, h1>span,h2>span,h3>span,h4>span,h5>span,h6>span{
            font-family: 'Playfair Display', serif !important;
        }
        /*------ header --------*/
        ul.my_navbar li a{
            font-family: myFirstFont;
            color: #282828;
            padding-right: 25px!important;
            text-transform: capitalize;

        }
        .header_btn {
            font-family: myFirstFont;
            background-color: #fff;
            border: none;
            border-radius: 37px;
            color: #000;
            padding: 3px 14px;
            border: 1px solid #b1b1b1;
            width: 146px;
        }

        .header_btn1 {
            font-family: myFirstFont;
            background-color: #fff;
            border: none;
            border-radius: 37px;
            color: #fff;
            padding: 3px 14px;
            margin-right: 10px;
            font-weight: 400;
            border: 1px solid #66C68F;
        }

        .lang_btn_head{
            border: 1px solid #b1b1b1;
            border-radius: 37px;
            width: 98px;
            padding: 2px 14px;

        }
        .my_bg_color_green1 {
            background-color: #66C68F!important;
        }

        ul.my_navbar li .dropdown-menu {
            background-color: var(--theme_green);
        }
        ul.my_navbar li .dropdown-menu li a {
            color: white;
        }
        ul.my_navbar li .dropdown-menu li a:hover {
            background-color: #0a8d93;
        }

    </style>
</head>
<body>
<!--Navbar Start-->
<nav class="container navbar navbar-desktop px-4 py-2 d-flex flex-column flex-lg-row align-items-center justify-content-between mb-5" style="margin-top: 5px;">
    <div class="d-flex align-items-center mb-0 me-lg-4">
        <a href="{{ config('app.url') }}"><img src="{{ $setting['site_logo'] }}" alt="logo" style="    max-height: 70px;"/>
            <!-- <span class="fs-5 fw-medium ms-1">Mollure</span> -->
        </a>
    </div>
    <div class="d-flex flex-wrap align-items-center justify-content-center fw-medium px-2 mx-auto">

    </div>
    <div class="d-flex flex-wrap justify-content-center align-items-center nav-auto-row">
        <div class="dropdown me-3">

        @if(isset($huri) && $huri!='')
            <!-- <button
            class="btn dropdown-toggle fs-6 fw-normal d-flex align-items-center"
            type="button"
            id="dropdownMenuButton1"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            EN <img src="{{ URL::asset('public/images/united-kingdom.png')}}" alt="EN" height="24" width="24" class="ms-1" />
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li class="p-2">
              <a href="{{$huri}}">NL <img src="{{ URL::asset('public/images/nlflg.png')}}" alt="Nl" height="24" width="24" class="ms-1" /></a>
            </li>

          </ul> -->
            @endif

            <button class="lang_btn_head btn dropdown-toggle d-flex align-items-center" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style='    font-size: 15px;'>
                <img src="{{ URL::asset('public/icons/lang_ic.png')}}" alt="EN" height="20" width="20" class="ms-1" style="margin-right:10px;" /> EN
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li class="py-0 px-3">
                    <a href="#">NL</a>
                </li>
            </ul>
        </div>

        @if(Route::currentRouteName() != 'service_detail')

            @if(session('salon_login')=='1')
                <div class="me-4 fs-6 fw-medium">
                    <a style="text-decoration:none" href="{{route('dashboard')}}"><i class="ri-user-line"></i>{{session('salon_name')}}</a></div>
                <a href="{{route('logout')}}" style="text-decoration:none">
                    <button class="btn btn-outline-secondary d-flex align-items-center fw-medium p-1" style="font-size:16px">
                        <i class="ri-logout-box-line"></i>Sign Out
                    </button>
                </a>
            @else
                <a href="{{route('login')}}"><button style="font-size: 15px;" class="header_btn1 my_bg_color_green1 mt-2 mb-2 mt-xl-0 mb-xl-0">Login</button></a>
                <a href="{{route('login')}}"><button style="font-size: 15px;" class="header_btn mt-2 mb-2 mt-xl-0 mb-xl-0">@if(isset($menuh['for_professional'])) {{$menuh['for_professional']}} @else For Professional @endif </button></a>
            @endif

        @endif
    </div>
</nav>
<!-- Navbar End -->
