
    @include('_header1')
  
    <style>

    .navbar-expand-xl .navbar-collapse{justify-content: end;}
            .home_banner_left h1{
                font-style: normal;
                font-weight: 400;
                font-size: 37px;
                line-height: 49px;
                text-transform: capitalize;
            }
            .home_banner_left p{
                font-style: normal;
                font-weight: 400;
                font-size: 16px;
                line-height: 21px;
                text-transform: capitalize;
            }
            
            .form_box{
                width: 100%;
                /*border: 7px solid blue;*/
                padding: 40px 30px;
                background-color: white;
                
/*                border-image: linear-gradient(#66C68F, #0d9da3) 30;*/
                border-width: 15px;
                border-style: solid;
                border-radius: 18px;

                border:8px solid #0000;
                border-radius:18px;
                background:
                    linear-gradient(white,white) padding-box,
    linear-gradient(#66C68F, #0d9da3) border-box;
            }
            .form_box form select{
                width:100%;
                border:none;
                border-bottom: 1px solid gray;
                font-style: normal;
                font-weight: 400;
                font-size: 16px;
                color: rgb(0 0 0 / 60%);
                padding-bottom: 8px;
            }
            .form_box button{
                /*width: 182px;*/
                height: 40px;
                text-align: center;
                border-radius: 6px;
                border: 2px solid #656565;
                background-color: transparent;
                color: #656565;


            }
            .form_box button.myactive152{
                border: 2px solid #66C68F;
            }
            .form_box button i{
                font-size: 19px;
                margin-right: 6px;
            }

            .form_box button[type="submit"]{
                width: 305px;
                height: 40px;
                border:none;
                background: #1960EC;
                border-radius: 80px;
                color: white;
                max-width: 100%;
            }


            .form_box .row>div{
                    margin-bottom: 35px;
            }
            .form_box .row>div{
                position: relative;
            }
			.curved_section{
				width: 100%;
                margin-top: 45px;
                margin-bottom: 25px;
			
			}
            .curved_section img{
                width:100%;
            }
            .icon_and_content_container{
                width:100%;
            }
            .icon_and_content_container figure{
                width: 150px;
                height: 150px;
                margin-left: auto;
                margin-right: auto;
            }
            .icon_and_content_container figure img{
                width: 100%;
                height: 100%;

            }
            .icon_and_content_container h4{
                font-style: normal;
                font-weight: 400;
                font-size: 22px;
                text-align: center;
                text-transform: capitalize;

            }
            .icon_and_content_container p{
                font-style: normal;
                font-weight: 400;
                font-size: 16px;
                text-align: center;
                text-transform: capitalize;
            }
            .icon_and_content_container div.expendable_div{
                height: 50px;
                overflow: hidden;
            }
            .icon_and_content_container div#expendableDiv2{
                height: 100px;
                overflow: hidden;
            }
            .icon_and_content_container div.expendable_div ul li{
                font-style: normal;
                font-weight: 400;
                font-size: 16px;
                text-transform: capitalize;
            }
            #expendBtn1,#expendBtn2{
                border: none;
                background-color: transparent;
            }
            #expendBtn1>i:last-child,#expendBtn2>i:last-child{
                display: none;
            }
            .expended{
                height: auto!important;
                overflow: unset!important;
            }
            


            @media screen and (max-width: 767px) {
                 .home_banner_left p{
                    text-align: justify;
                }
                .form_box{
                    margin-top:20px;
                }
                .form_box button{
                    width: 100%;
                }
                .curved_section{
                    margin-bottom: 0px;
                }
            }
            @media screen and (max-width: 991px) {
                .form_box button{
                    width: 100%;
                }
                .icon_and_content_container{
                    margin-bottom: 40px;
                }
            }
            .mb-60{
                margin-bottom: 60px;
            }
        </style>


	<section class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="home_banner_left">
                            <h1 style="margin-bottom:40px;">Find and book your 
                                beauty professional easily 
                                from anywhere</h1>
                            <p>Welcome to Mollure!<br /> <br />

                            In a world that increasingly demands efficiency, flexibility and innovation, 
                            Mollure provides a unique solution. <br /><br />

                            We make booking an appointment with a beauty professional quick and easy. 
                            Mollure is completely online, user-friendly and all-encompassing. With Mollure, 
                            you will find the right professional for you. This means no phone calls, no e-mails, 
                            no wasted time and no hassle.<br /><br />

                            Book your appointment today.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form_box">
                            <form class="p-0">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <select>
                                            <option>Select Date and Time</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <select>
                                            <option>Select Category</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-12 text-end">
                                        <button class="myactive152">
                                            <img src="{{URL::asset('public/icons/fxl.png')}}"> Fixed Location</button>
                                    </div>
                                    <div class="col-lg-6 col-sm-12 text-start">
                                        <button>
                                            <img src="{{URL::asset('public/icons/dsl.png')}}"> Desired Location</button>
                                    </div>
                                </div>
                                
                                 <div class="row">
                                    <div class="col-sm-12">
                                        <select>
                                            <option>Select your desired municipality  </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-center mb-0">
                                        <button type="submit">Search Mollure</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

        <section class="curved_section" >
            <img src="{{URL::asset('public/images/home/frame2233.png')}}">
        </section>
		
		
		<section class="pt-5 mb-5 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="main_heading_container">
                            <span>
                                <h2>Why Mollure</h2>
                                <img src="public/images/logo.png">
                            </span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-60">
                        <div class="icon_and_content_container">
                            <figure>
                                <img src="{{URL::asset('public/images/page/1000007876.svg')}}" />
                            </figure>
                            <h4>24/7 Online booking</h4>
                            <p>Book at any place, at any time</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-60">
                        <div class="icon_and_content_container">
                            <figure>
                                <img src="{{URL::asset('public/images/page/1000007877.svg')}}" />
                            </figure>
                            <h4>Choose location</h4>
                            <p>Fixed or desired location</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6  mb-60">
                        <div class="icon_and_content_container">
                            <figure>
                                <img src="{{URL::asset('public/images/page/1000007878.svg')}}" />
                            </figure>
                            <h4>Search specific professional</h4>
                            <p>For all, only woman, only men or kids</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-60">
                        <div class="icon_and_content_container">
                            <figure>
                                <img src="{{URL::asset('public/images/page/1000007942.svg')}}" />
                            </figure>
                            <h4>Validated Rating/reviews & visuals</h4>
                            <p>Review written & visual work</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 offset-lg-3 mb-60">
                        <div class="icon_and_content_container">
                            <figure>
                                <img src="{{URL::asset('public/images/page/1000007880.svg')}}" />
                            </figure>
                            <h4>Book professional</h4>
                            <div id="expendableDiv1" class="expendable_div">
                                <ul>
                                    <li>For you and others</li>
                                    <li>For a photoshoot</li>
                                    <li>Conditions for more than 1 person booking: Person with booking account must be included, booking at same time and/or follow-up time</li>
                                    <li>Photoshoot booking option only for company clients</li>
                                    <li>Booking for fixed location is confirmed after booking</li>
                                    <li>Booking for desired location is requested by clients</li>
                                </ul>
                            </div>
                            <div class="text-center">
                                <button id="expendBtn1">
                                    <i class="fa fa-angle-double-down" aria-hidden="true"></i>

                                    <i class="fa fa-angle-double-up" aria-hidden="true"></i>
                                </button>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-60">
                        <div class="icon_and_content_container">
                            <figure>
                                <img src="{{URL::asset('public/images/page/1000007881.svg')}}" />
                            </figure>
                            <h4>Secure Payment</h4>
                            <div id="expendableDiv2" class="expendable_div">
                                <ul>
                                    <li>By default after the treatment(s)</li>
                                    <li>Tax ready invoice for company clients</li>
                                    <li>Before treatment payment can be requested by the professional for more than 1 person booking and for a long timeslot booking</li>
                                    <li>online & offline options, which includes invoice with a due date for company clients when offered by the professional</li>
                                </ul>
                            </div>
                            <div class="text-center">
                                <button id="expendBtn2">
                                    <i class="fa fa-angle-double-down" aria-hidden="true"></i>

                                    <i class="fa fa-angle-double-up" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        
    
    @include('salon/footer')
	
	<script>
    $(document).ready(function(){
        var flag1 = 0;
        var flag2 = 0;
          $("#expendBtn1").click(function(){
            $("#expendableDiv1").toggleClass("expended");
            if(flag1 == 0){
                $("#expendBtn1 i.fa-angle-double-down").hide()
                $("#expendBtn1 i.fa-angle-double-up").show()
                flag1 = 1;
            }else{
                $("#expendBtn1 i.fa-angle-double-up").hide()
                $("#expendBtn1 i.fa-angle-double-down").show()
                flag1 = 0;
            }

          });

      $("#expendBtn2").click(function(){
            $("#expendableDiv2").toggleClass("expended");
            if(flag2 == 0){
                $("#expendBtn2 i.fa-angle-double-down").hide()
                $("#expendBtn2 i.fa-angle-double-up").show()
                flag2 = 1;
            }else{
                $("#expendBtn2 i.fa-angle-double-up").hide()
                $("#expendBtn2 i.fa-angle-double-down").show()
                flag2 = 0;
            }

          });
    });
    </script>
	

  
    </body>
</html>