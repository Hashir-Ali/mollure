<?php
   use App\Http\Controllers\Controller;
   $setting = Controller::get_settings('en');
?>


@include('_header',['setting' => $setting])
<!-- start Banner -->
<style type="text/css">
   * {
   font-family: 'myFirstFont1';
   }
   .why_mollure_box span img {
   min-width: 160px;
   width: 160px;
   }
   .content {
   padding: 0px 20px;
   }
   @media only screen and (max-width: 600px) {
   .why_mollure_box {
    display: inherit !important;
    float: inherit !important;
   }
   .content {
   padding-top: 10px;
   }
   }
</style>
<!-- why mollure -->
<section class="pt-5 pb-5 mb-5 ">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="main_heading_container">
               <span>
                  <h2>{{$page_title}}</h2>
                  <!-- <img src="https://cynnaenterprises.com/mollure/public/images/logo.png"> -->
                  @if($setting['logo_icon1'] && $setting['logo_icon1']!='')
                    <img src="{{$setting['logo_icon1']}}">
                    @endif
               </span>
            </div>
         </div>
      </div>
      <div class="row" style="margin-top: 5%;margin-bottom: 5%;">
         <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="why_mollure_box" style="display: flex;float:left;">
               <span>
                  @if(isset($contents['1']))
                     <img src="{{asset('public')}}/{{$contents['1']['image']}}">
                  @endif
               <!-- <img src="{{ URL::asset('public/icons/1.jpg')}}"> -->
               </span>
               <div class="content" style="text-align: left;">
                  @if(isset($contents['1']))
                     {!! $contents['1']['content'] !!}
                  @endif
                  <!-- <h3>Account is online after validation</h3>
                  <p>Only registered professionals (with 
                     COC and VAT number) can register 
                     on Mollure. 
                  </p> -->
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="why_mollure_box" style="display: flex;float:left;">
               <span>
                  @if(isset($contents['2']))
                     <img src="{{asset('public')}}/{{$contents['2']['image']}}">
                  @endif
               <!-- <img src="{{ URL::asset('public/icons/2.jpg')}}"> -->
               </span>
               <div class="content" style="text-align: left;">
                  @if(isset($contents['2']))
                     {!! $contents['2']['content'] !!}
                  @endif
                  <!-- <h3>Individual and company 
                     clients
                  </h3>
                  <p>Only registered company clients (with 
                     COC and VAT number) can register 
                     on Mollure.
                  </p> -->
               </div>
            </div>
         </div>
      </div>
      <div class="row" style="margin-top: 5%;margin-bottom: 5%;">
         <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="why_mollure_box" style="display: flex;float:left;">
               <span>
                  @if(isset($contents['3']))
                     <img src="{{asset('public')}}/{{$contents['3']['image']}}">
                  @endif
               <!-- <img src="{{ URL::asset('public/icons/3.jpg')}}"> -->
               </span>
               <div class="content" style="text-align: left;">
                  @if(isset($contents['3']))
                     {!! $contents['3']['content'] !!}
                  @endif
                 <!--  <h3>Categories and 
                     (sub)services
                  </h3>
                  <p>
                  <ul>
                     <li>Categories: Hair, Make up, Eyebrows, 
                        Eyelashes, Nails, Face treatments, 
                        Body treatments, Hair removal
                     </li>
                     <li>Services and subservices, additional 
                        information per (sub)service, duration, 
                        price (fixed and starting price) and the 
                        option feature a discount
                     </li>
                  </ul>
                  </p> -->
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="why_mollure_box" style="display: flex;float:left;">
               <span>
                  @if(isset($contents['4']))
                     <img src="{{asset('public')}}/{{$contents['4']['image']}}">
                  @endif
               <!-- <img src="{{ URL::asset('public/icons/4.jpg')}}"> -->
               </span>
               <div class="content" style="text-align: left;">
                  @if(isset($contents['4']))
                     {!! $contents['4']['content'] !!}
                  @endif
                  <!-- <h3>Bio</h3>
                  <p>Information about the professional 
                     (freelancer or salon)
                  </p> -->
               </div>
            </div>
         </div>
      </div>
      <div class="row" style="margin-top: 5%;margin-bottom: 5%;">
         <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="why_mollure_box" style="display: flex;float:left;">
               <span>
                  @if(isset($contents['5']))
                     <img src="{{asset('public')}}/{{$contents['5']['image']}}">
                  @endif
               <!-- <img src="{{ URL::asset('public/icons/5.jpg')}}"> -->
               </span>
               <div class="content" style="text-align: left;">
                  @if(isset($contents['5']))
                     {!! $contents['5']['content'] !!}
                  @endif
                  <!-- <h3>General Note</h3>
                  <p>Additional general information for 
                     your clients
                  </p> -->
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="why_mollure_box" style="display: flex;float:left;">
               <span>
                  @if(isset($contents['6']))
                     <img src="{{asset('public')}}/{{$contents['6']['image']}}">
                  @endif
               <!-- <img src="{{ URL::asset('public/icons/6.jpg')}}"> -->
               </span>
               <div class="content" style="text-align: left;">
                  @if(isset($contents['6']))
                     {!! $contents['6']['content'] !!}
                  @endif
                  <!-- <h3>Team Members</h3>
                  <p>Optional for salons</p> -->
               </div>
            </div>
         </div>
      </div>
     
      <div class="row" style="margin-top: 5%;margin-bottom: 5%;">
         <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="why_mollure_box" style="display: flex;float:left;">
               <span>
                  @if(isset($contents['7']))
                     <img src="{{asset('public')}}/{{$contents['7']['image']}}">
                  @endif
               <!-- <img src="{{ URL::asset('public/icons/9.jpg')}}"> -->
               </span>
               <div class="content" style="text-align: left;">
                  @if(isset($contents['7']))
                     {!! $contents['7']['content'] !!}
                  @endif
                  <!-- <h3>Calendar</h3>
                  <p>One central calendar for the online 
                     bookings, offline appointments and 
                     other work related planning 
                     e.g. meetings
                  </p> -->
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="why_mollure_box" style="display: flex;float:left;">
               <span>
                  @if(isset($contents['8']))
                     <img src="{{asset('public')}}/{{$contents['8']['image']}}">
                  @endif
               <!-- <img src="{{ URL::asset('public/icons/10.jpg')}}"> -->
               </span>
               <div class="content" style="text-align: left;">
                  @if(isset($contents['8']))
                     {!! $contents['8']['content'] !!}
                  @endif
                  <!-- <h3>Appointment Reminders</h3>
                  <p>Via email and the Mollure web app</p> -->
               </div>
            </div>
         </div>
      </div>
      <div class="row" style="margin-top: 5%;margin-bottom: 5%;">
         <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="why_mollure_box" style="display: flex;float:left;">
               <span>
                  @if(isset($contents['9']))
                     <img src="{{asset('public')}}/{{$contents['9']['image']}}">
                  @endif
               <!-- <img src="{{ URL::asset('public/icons/11.jpg')}}"> -->
               </span>
               <div class="content" style="text-align: left;">
                  @if(isset($contents['9']))
                     {!! $contents['9']['content'] !!}
                  @endif
                  <!-- <h3>Transactions</h3>
                  <p>Online and offline payments</p> -->
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="why_mollure_box" style="display: flex;float:left;">
               <span>
                  @if(isset($contents['10']))
                     <img src="{{asset('public')}}/{{$contents['10']['image']}}">
                  @endif
               <!-- <img src="{{ URL::asset('public/icons/12.jpg')}}"> -->
               </span>
               <div class="content" style="text-align: left;">
                  @if(isset($contents['10']))
                     {!! $contents['10']['content'] !!}
                  @endif
                  <!-- <h3>Analysis</h3>
                  <p>Overview of the revenue, the number of 
                     completed online booking and online 
                     transactions for a selected period
                  </p> -->
               </div>
            </div>
         </div>
      </div>
      <div class="row" style="margin-top: 5%;margin-bottom: 5%;">
         <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="why_mollure_box" style="display: flex;float:left;">
               <span>
                  @if(isset($contents['11']))
                     <img src="{{asset('public')}}/{{$contents['11']['image']}}">
                  @endif
               <!-- <img src="{{ URL::asset('public/icons/13.jpg')}}"> -->
               </span>
               <div class="content" style="text-align: left;">
                  @if(isset($contents['11']))
                     {!! $contents['11']['content'] !!}
                  @endif
                  <!-- <h3>General Inbox</h3>
                  <p>Inbox of all incoming messages</p> -->
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="why_mollure_box" style="display: flex;float:left;">
               <span>
                  @if(isset($contents['12']))
                     <img src="{{asset('public')}}/{{$contents['12']['image']}}">
                  @endif
               <!-- <img src="{{ URL::asset('public/icons/14.jpg')}}"> -->
               </span>
               <div class="content" style="text-align: left;">
                  @if(isset($contents['12']))
                     {!! $contents['12']['content'] !!}
                  @endif
                  <!-- <h3>Validated Ratings and Reviews</h3>
                  <p>Only clients that pay online can rate and review 
                     the services
                  </p> -->
               </div>
            </div>
         </div>
      </div>
       <div class="row" style="margin-top: 5%;margin-bottom: 5%;">
         <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="why_mollure_box" style="display: flex;float:left;">
               <span>
                  @if(isset($contents['13']))
                     <img src="{{asset('public')}}/{{$contents['13']['image']}}">
                  @endif
               <!-- <img src="{{ URL::asset('public/icons/7.jpg')}}"> -->
               </span>
               <div class="content" style="text-align: left;">
                  @if(isset($contents['13']))
                     {!! $contents['13']['content'] !!}
                  @endif
                  <!-- <h3>Instagram Visuals</h3> -->
               </div>
            </div>
         </div>
       
       
      </div>
   </div>
</section>
@include('salon/footer',['setting' => $setting])
</body>
</html>