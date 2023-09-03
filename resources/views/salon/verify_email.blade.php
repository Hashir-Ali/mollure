@include('_header')

<section class="pt-5 pb-5 mb-5 ">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="main_heading_container">
               <span>
                  <!-- <h2>Privacy Policy</h2> -->
                  <!-- <img src="https://cynnaenterprises.com/mollure/public/images/logo.png"> -->
                  @if(isset($contents['success_msg']))
                     <img src="{{asset('public')}}{{$contents['success_msg']['image']}}" alt="logo">
                  @endif
               </span>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12 text-center">
            @if($status=='ERR')
               <h3 class="text-danger">Something went wrong.</h3>
            @else
            @if(isset($contents['success_msg']))
                {!! $contents['success_msg']['content'] !!}
            @endif   
               <!-- <h3 class="text-custom-primary my-4">Thank you <br> for registering with Mollure!</h3>
               <p class="mt-4" style="font-size:24px;">We will reach you soon.</p>
               <p class="mt-4" style="font-size:20px;"><a href="{{config('app.url')}}">Bakc To Home</a></p> -->
            @endif
         </div>
      </div>
   </div>
</section>
@include('salon/footer')
</body>
</html>