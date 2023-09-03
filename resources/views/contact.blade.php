<?php
   use App\Http\Controllers\Controller;
   $setting = Controller::get_settings('en');
?>

@include('_header',['setting' => $setting])

<style type="text/css">
   /** {
   font-family: 'myFirstFont1';
   }*/
   .why_mollure_box span img {
   min-width: 160px;
   width: 160px;
   }
   .content {
   padding: 0px 20px;
   }
   .checklist {
   list-style: none;
   padding-left: 0px;
   }
   .checklist li:before {
   padding: 10px;
   content: '✓';
   }
   @media only screen and (min-width: 1199px) {
   .why_mollure_box img {
   min-width: 400px;
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
   input[type="text"], textarea {
   width: 100%;
   padding: 10px;
   border: 0;
   border-bottom: 1px solid;
   margin: 10px;
   }
   img.img-responsive {
   max-width: 100%;
   }
</style>
<!-- why mollure -->
<section class="pt-5 pb-5 mb-5 ">
   <div class="container">
      <div class="row" style="margin-top: 5%;margin-bottom: 5%;">
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="why_mollure_box">
               <img class="img-responsive" src="{{URL::asset('public/images/img-left.jpg')}}">
            </div>
         </div>
         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="why_mollure_box">
               <div class="content" style="text-align: left;">
                  @if (session('success'))
                  <div class="text-center">
                  
                       <div class="alert alert-success">
                         
                                  <p>{{ session('success') }}</p>
                         
                      </div>
                  </div>
                   @endif
                  <form action="{{route('contact_us_post')}}" method="post">
                     <input type="hidden" name="_token" value="{{ Session::token() }}" />
                     <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                           <input type="text" placeholder="{{$lang_kwords['first-name']['english']}}" name="fname" required>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                           <input type="text" placeholder="{{$lang_kwords['last-name']['english']}}" name="lname">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                           <input type="text" placeholder="{{$lang_kwords['email']['english']}}" name="email" required>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                           <input type="text" placeholder="{{$lang_kwords['contact-number']['english']}}" name="phone">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           <textarea rows="1" placeholder="{{$lang_kwords['detail']['english']}}" name="detail"></textarea>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           <button class="more_mollure_btn">{{$lang_kwords['submit']['english']}}</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@include('salon/footer',['setting' => $setting])
</body>
</html>