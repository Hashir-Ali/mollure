<?php
   use App\Http\Controllers\Controller;
   $setting = Controller::get_settings('en');

   $home_price_buton = Controller::get_translation('home-price-button');

?>


@include('_header',['setting' => $setting])

<style type="text/css">
* {
    font-family: 'myFirstFont';
}
.li_angle_right:before{content: "\2713";font-size: 16px;line-height: 32px;    margin-right: 10px;}
</style>
<!-- start Banner -->
        <section class="mt-5 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5 order-last order-md-first">
                        <div class="banner_box">
                            @if(isset($contents['1']))
                                {!! $contents['1']['content'] !!}
                            @endif
                            <!-- <h2>Let Mollure <br />Work For You </h2>
                            <p>With Mollure, SALONS and FREELANCERS can manage their own professional appointments in one central location. From booking to invoicing, and client communications in between—Mollure is made for your convenience. It is the most modern, time-efficient and user-friendly way to organize your daily activities.</p>
                            <h4>One-time and limited promotion</h4>
                            <p>
                                <strong>for the first 90 registered professionals:</strong>
                            </p>
                            <h4>0,00 EUR/transaction (iDeal Debit)</h4>
                            <p>
                                <strong>For the first 50 transactions within 3 months</strong>
                            </p> -->
                            <div>
                                <a href="{{url('en/register')}}"><button class="my_bg_color_red banner_btn">{{$lang_kwords['sign-up-now']['english']}}</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7 col-lg-7 col-xl-7 col-xxl-7 order-first order-md-last">
                        @if(isset($contents['1']['image']))
                                <img src="{{asset('public')}}{{$contents['1']['image']}}" class="img-fluid" />
                        @endif
                        <!-- <img src="{{ URL::asset('public/images/img3.jpg')}}" class="img-fluid" /> -->
                    </div>
                </div>
            </div>
        </section>

        <!-- start result you can expect -->
        <section class="result_expert" id="result_expert">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main_heading_container">
                            <span>
                                <h2 class="text-white">@if(isset($contents['2']))
                                {!! $contents['2']['content'] !!}
                            @endif</h2>
                                @if($setting['logo_icon2'] && $setting['logo_icon2']!='')
                                <img src="{{$setting['logo_icon2']}}">
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="result_box">
                            <span>
                                <!-- <img src="{{ URL::asset('public/images/i7.png')}} "> -->
                                @if(isset($contents['2']['sub_content']))
                                <img src="{{asset('public')}}/{{$contents['2']['sub_content'][0]['image']}}">
                                @endif
                            </span>
                            @if(isset($contents['2']['sub_content']))
                                {!! $contents['2']['sub_content'][0]['content_en'] !!}
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="result_box">
                            <span>
                                <!-- <img src="{{ URL::asset('public/images/i8.png')}}"> -->
                                @if(isset($contents['2']['sub_content']))
                                <img src="{{asset('public')}}/{{$contents['2']['sub_content'][1]['image']}}">
                                @endif
                            </span>
                            @if(isset($contents['2']['sub_content']))
                                {!! $contents['2']['sub_content'][1]['content_en'] !!}
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="result_box">
                            <span>
                                <!-- <img src="{{ URL::asset('public/images/i9.png') }}"> -->
                                @if(isset($contents['2']['sub_content']))
                                <img src="{{asset('public')}}/{{$contents['2']['sub_content'][2]['image']}}">
                                @endif
                            </span>
                            @if(isset($contents['2']['sub_content']))
                                {!! $contents['2']['sub_content'][2]['content_en'] !!}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- why mollure -->
        <section class="pt-5 pb-5 mb-5 " id="whymollue">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main_heading_container">
                            <span>
                                <h2>@if(isset($contents['3']))
                                {!! $contents['3']['content'] !!}
                            @endif</h2>
                                <!-- <img src="{{ URL::asset('public/images/logo.png')}}"> -->
                                @if($setting['logo_icon1'] && $setting['logo_icon1']!='')
                                <img src="{{$setting['logo_icon1']}}">
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="why_mollure_box">
                            <span>
                                <!-- <img src="{{ URL::asset('public/images/i1.png')}}"> -->
                                @if(isset($contents['3']['sub_content']))
                                <img src="{{asset('public')}}/{{$contents['3']['sub_content'][0]['image']}}">
                                @endif
                            </span>
                            @if(isset($contents['3']['sub_content']))
                                {!! $contents['3']['sub_content'][0]['content_en'] !!}
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="why_mollure_box">
                            <span>
                                @if(isset($contents['3']['sub_content']))
                                <!-- <img src="{{ URL::asset('public/icons/h1.jpg')}}"> -->
                                <img src="{{asset('public')}}/{{$contents['3']['sub_content'][1]['image']}}">
                                @endif
                            </span>
                            @if(isset($contents['3']['sub_content']))
                                {!! $contents['3']['sub_content'][1]['content_en'] !!}
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="why_mollure_box">
                            <span>
                                @if(isset($contents['3']['sub_content']))
                                <!-- <img src="{{ URL::asset('public/icons/h1.jpg')}}"> -->
                                <img src="{{asset('public')}}/{{$contents['3']['sub_content'][2]['image']}}">
                                @endif
                            </span>
                            @if(isset($contents['3']['sub_content']))
                                {!! $contents['3']['sub_content'][2]['content_en'] !!}
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="why_mollure_box">
                            <span>
                                @if(isset($contents['3']['sub_content']))
                                <!-- <img src="{{ URL::asset('public/icons/h1.jpg')}}"> -->
                                <img src="{{asset('public')}}/{{$contents['3']['sub_content'][3]['image']}}">
                                @endif
                            </span>
                            @if(isset($contents['3']['sub_content']))
                                {!! $contents['3']['sub_content'][3]['content_en'] !!}
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="why_mollure_box">
                            <span>
                                @if(isset($contents['3']['sub_content']))
                                <!-- <img src="{{ URL::asset('public/icons/h1.jpg')}}"> -->
                                <img src="{{asset('public')}}/{{$contents['3']['sub_content'][4]['image']}}">
                                @endif
                            </span>
                            @if(isset($contents['3']['sub_content']))
                                {!! $contents['3']['sub_content'][4]['content_en'] !!}
                            @endif
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4 col-xxl-4">
                        <div class="why_mollure_box">
                            <span>
                                @if(isset($contents['3']['sub_content']))
                                <!-- <img src="{{ URL::asset('public/icons/h1.jpg')}}"> -->
                                <img src="{{asset('public')}}/{{$contents['3']['sub_content'][5]['image']}}">
                                @endif
                            </span>
                            @if(isset($contents['3']['sub_content']))
                                {!! $contents['3']['sub_content'][5]['content_en'] !!}
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <a href="{{route('more-mollure')}}"><button class="more_mollure_btn">More Mollure</button></a>
                    </div>
                </div>
        </section>


        <!-- --- start mollure guarantee ---- -->
        <section class="mollure_guarantee_section" id="guarantee">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mollure_guarantee_box">
                            @if(isset($contents['4']))
                                {!! $contents['4']['content'] !!}
                            @endif
                            <!-- <div class="">
                                <span>
                                    <h2>Mollure <br /> Guarntees </h2>
                                    <img src="{{ URL::asset('public/images/logo.png')}}">
                                </span>
                            </div>
                            <ul>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i> No Sign-up fee
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i> No Monthly Subscriptions
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i> No New / Repeating Customer Fees
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i> No Hidden Costs
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i> Direct Deposits
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i> Efficiency, Growth And More Time To Do What You Love
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- start price -->
        <section id="price">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main_heading_container">
                            <span>
                                <h2>@if(isset($contents['5']))
                                {!! $contents['5']['content'] !!}
                            @endif</h2>
                                <!-- <img src="{{ URL::asset('public/images/logo.png')}}"> -->
                                @if($setting['logo_icon1'] && $setting['logo_icon1']!='')
                                <img src="{{$setting['logo_icon1']}}">
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="price_box">
                            <div class="first">
                                @if(isset($contents['5']['sub_content']))
                                {!! $contents['5']['sub_content'][0]['content_en'] !!}
                            @endif
                            </div>
                            <div class="last">
                                <div class="one">
                                    @if(isset($contents['5']['sub_content']))
                                {!! $contents['5']['sub_content'][1]['content_en'] !!}
                            @endif
                                    <!-- <h2>Debit (iDeal):</h2>
                                    <p>+ 88% - Netherlands</p>
                                    <p>
                                        <del>1% +0,29 EUR/transaction</del>
                                    </p>
                                    <h2>0,00 EUR/transaction</h2>
                                    <p>for the first 50 transactions within 3 month</p> -->
                                </div>
                                <div class="two">
                                    @if(isset($contents['5']['sub_content']))
                                {!! $contents['5']['sub_content'][2]['content_en'] !!}
                            @endif
                                    <span>{{$home_price_buton['home-price-button']['english']}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('salon/footer',['setting' => $setting])
        </body>
</html>