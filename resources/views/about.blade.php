<?php
   use App\Http\Controllers\Controller;
   $setting = Controller::get_settings('en');
?>


@include('_header',['setting' => $setting])
<!-- start Banner -->
        <section class="about_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="about_left_box">
                            <aside>
                                @if(isset($contents['1']))
                                    <img src="{{asset('public')}}/{{$contents['1']['image']}}">
                                @endif
                                <!-- <img src="{{ URL::asset('public/images/Layer2.png')}}" /> -->
                            </aside>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="about_right_box">
                            <span>Our Story </span>
                            @if(isset($contents['1']))
                                {!! $contents['1']['content'] !!}
                            @endif
                            <!-- <h1 class="mb-4">About us</h1>
                            <p>At Mollure, we have a great passion for innovation. Our goal is to improve outdated processes into the 21st century. A crucial part of this is modernizing the efficiency and ease of booking appointments between clients and beauty professionals. 
                            <br /><br />
                            Through Mollure’s unique user-friendly platform, we successfully connect clients and beauty professionals in a manner that is both transparent and flexible.    
                            <br /><br />
                            We are constantly innovating to meet the demands of clients and beauty professionals.  </p> -->
                        </div>
                    </div>
                </div>

              
            </div>
        </section>

        <section class="frequent_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="frequent_left_box">
                            <h1>Frequently <br />
                                Asked <br />
                                Questions</h1>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="frequent_right_box">
                            @if(isset($contents['2']))
                                {!! $contents['2']['content'] !!}
                            @endif
                           <!--  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. ?</p>
                            <p>
                            
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. ?    
                            </p>
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. ? </p> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('salon/footer',['setting' => $setting])
        </body>
</html>