<?php
   use App\Http\Controllers\Controller;
   $setting = Controller::get_settings('nl');
?>


@include('nl/_header',['setting' => $setting])

<section class="pt-5 pb-5 mb-5 ">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="main_heading_container">
               <span>
                  <h2>{{$page_title}}</h2>
                  <img src="https://cynnaenterprises.com/mollure/public/images/logo.png">
               </span>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">

            {!! $contents[1]['content'] !!}

         </div>
      </div>
   </div>
</section>
@include('salon/nl/footer')
</body>
</html>