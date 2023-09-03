<?php
use App\Http\Controllers\Controller;

$setting = Controller::get_settings('nl');

?>

@include('nl/_header',['setting' => $setting])
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
   .checklist li:before {
   padding: 10px;
   }
   .why_mollure_box img {
      max-width: 100%;
   }
   @media only screen and (min-width: 1199px) {
   .why_mollure_box img {
      /*min-width: 400px;*/
   }
   }
   @media only screen and (max-width: 600px) {
   .why_mollure_box {
   display: inherit !important;
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
         <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="why_mollure_box">
               @if(isset($contents['1']))
               <!-- <img src="{{ URL::asset('public/icons/h1.jpg')}}"> -->
               <img src="{{asset('public')}}/{{$contents['1']['image']}}">
               @endif
            </div>
         </div>
         <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <div class="why_mollure_box">
               <div class="content" style="text-align: left;">

                  @if(isset($contents['1']))
                       {!! $contents['1']['content'] !!}
                   @endif
                  <!-- <h3>Requirement</h3>
                  <p>Professional provides services(s) in the Netherland</p>
                  <p>Professional is registered and has a COC and VAT number</p>
                  <p>Professional provides services that fall under minimum one the following categories:</p>
                  <ul class="checklist">
                     <li>Hair</li>
                     <li>Make up</li>
                     <li>Eyelashes</li>
                     <li>Eyebrows</li>
                     <li>Nails</li>
                     <li>Face Treatments</li>
                     <li>Body Treatments</li>
                     <li>Hair Removal</li>
                  </ul>
                  <p>Professional must provide examples of past work that satisfy Mollure’s quality and professional standards</p> -->
               </div>
            </div>
         </div>
      </div>
      <div class="row" style="margin-top: 5%;margin-bottom: 5%;">
         <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 order-sm-last">
            <div class="why_mollure_box">
               @if(isset($contents['2']))
               <img src="{{asset('public')}}/{{$contents['2']['image']}}">
               @endif
               <!-- <img src="{{ URL::asset('public/icons/h2.jpg')}}"> -->
            </div>
         </div>
         <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <div class="why_mollure_box">
               <div class="content" style="text-align: left;">
                  @if(isset($contents['2']))
                                {!! $contents['2']['content'] !!}
                            @endif
                  <!-- <h3>2 Step Validation</h3>
                  <b>Step 1:</b>
                  <ul class="checklist">
                     <li>
                        Professional signs up and will be prompted to provide user info and examples of  past work (e.g.,   Business Page on Instagram, Website, etc.)
                     </li>
                     <li>Subject to Mollure's validation of the submitted information, the Professional will be permitted to  proceed with Step 2.</li>
                  </ul>
                  <b>Step 2:</b>
                  <ul class="checklist">
                     <li>Professional will be prompted to complete his/her "Professional Template"</li>
                     <li>Subject to Mollure's validation, the Professional will be prompted to sign-in or sign-up for a stripe account under "Card Setting".</li>
                     <li>2-Step validation is complete and the Professional's account is active</li>
                  </ul> -->
               </div>
            </div>
         </div>
         
      </div>
      <div class="row" style="margin-top: 5%;margin-bottom: 5%;">
         <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="why_mollure_box">
               @if(isset($contents['3']))
               <img src="{{asset('public')}}/{{$contents['3']['image']}}">
               @endif
               <!-- <img src="{{ URL::asset('public/icons/h3.jpg')}}"> -->
            </div>
         </div>
         <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <div class="why_mollure_box">
               <div class="content" style="text-align: left;">
                  @if(isset($contents['3']))
                                {!! $contents['3']['content'] !!}
                            @endif
                  <!-- <h3>Online Booking</h3>
                  <p>Booking for Fixed locations are automatically confirmed</p>
                  <p>Booking for Desired locations are requested by the client</p>
                  <p>Rescheduling a booking:</p>
                  <ul class="checklist">
                     <li>Client needs to comply with the rules of the professional </li>
                     <li>For a fixed location, the client can reschedule a booking depending on the availability of the
                        professional without the professional’s approval
                     </li>
                     <li> For a desired location, the professional needs to approve the rescheduling and is therefore a
                        request for a reschedule
                     </li>
                  </ul>
                  <p>Cancelling a booking:</p>
                  <ul class="checklist">
                     <li> Client needs to comply with the rules of the professional</li>
                  </ul>
                  <p>Online booking process:</p>
                  <ul class="checklist">
                     <li>Client selects the (sub)services</li>
                     <li>Client selects the number of units for the selected services - optional</li>
                     <li>Client selects team member if they are featured - optional</li>
                     <li>Client selects the location in order to book in the right availability calendar. In case of fixed
                        location (s)he selects the preferred address and for desired location, (s)he selects desired
                        location.
                     </li>
                     <li>Client selects date and time</li>
                     <li>Client can “add (sub)services” - optional</li>
                     <li>Client provides his/her phone number</li>
                     <li>Client provides location in case of desired location</li>
                     <li>Client completes booking</li>
                     <li>Client receives a summary of the booking</li>
                     <li>For professional, the booking will be featured for fixed locations under "confirmed bookings"
                        and for desired locations under "requested bookings"
                     </li>
                  </ul> -->
               </div>
            </div>
         </div>
      </div>
      <div class="row" style="margin-top: 5%;margin-bottom: 5%;">
         <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 order-sm-last">
            <div class="why_mollure_box">
               <!-- <img src="{{ URL::asset('public/icons/h4.jpg')}}"> -->
               @if(isset($contents['4']))
               <img src="{{asset('public')}}/{{$contents['4']['image']}}">
               @endif
            </div>
         </div>
         <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <div class="why_mollure_box">
               <div class="content" style="text-align: left;">
                  @if(isset($contents['4']))
                       {!! $contents['4']['content'] !!}
                   @endif
                  <!-- <h3>Payment & Invoice</h3>
                  <p>  Payment is done after the treatment(s)</p>
                  <p>Payment options:</p>
                  <ul class="checklist">
                     <li> Online – Direct Payment</li>
                     Debit or credit card 
                     For individual and company client
                     <li> Online –  Non-Direct Payment</li>
                     Invoice with a due date
                     Only for company client
                     <li> Offline – Direct Payment:</li>
                     Cash or by card at location
                     For individual and company client
                     <li> Offline – Non-Direct Payment:</li>
                     >       Send invoice with a due date via email to Accounts Payable <br>
                     >       Only for company client
                  </ul>
                  <p>Non-Direct Payment – Invoice with a due date: Company clients only</p>
                  <p>Invoice: </p>
                  <p>It is possible to adjust items on the invoice e.g. add or delete services, add a discount, add a                due date for company clients.</p>
                  <p>Payment Process</p>
                  <ul class="checklist">
                     <li> After the services are completed, professional clicks on the “Complete” button in the “Booking” section</li>
                     <li>A predefined invoice is generated on the professional’s screen, which can be adjusted if needed</li>
                     <li>Meanwhile client has to select the payment method</li>
                     <li>Professional receives a notification of the selected payment and proceeds by sending the invoice to the client</li>
                     <li>Client receives incoming invoice in the “Transaction” section and via email and can pay the invoice online by clicking 
                        on the “Pay Now” button in the invoice. Invoices with a due date for company client can be paid until the due date. 
                        Company client will be notified a few days before the due date to make the online payment.
                     </li>
                     <li>Once the payment is done, client receives a “Thank you” note and professional receives a notification that the “Payment is successful” </li>
                     <li>In the “Transaction” section of both professional and client, there will be a summary of the services, duration, price, payment method, payment status and a pdf of the invoice.</li>
                     <li>For offline payment:</li>
                     > Once the invoice is sent to the client, the status in the “Transaction” section will be unpaid until the payment is successful.<br>
                     > Status of the transaction has to be changed manually by the client and the professional and both of them will be notified once the status has changed.
                  </ul> -->
               </div>
            </div>
         </div>
         
      </div>
   </div>
</section>
@include('salon/nl/footer',['setting' => $setting])
</body>
</html>