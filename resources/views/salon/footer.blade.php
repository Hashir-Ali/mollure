<!--Footer Start-->
    <!-- <div class="container d-flex flex-column align-items-center footer">
      <div class="d-flex justify-content-center mb-4">
        <img src="{{ URL::asset('public/images/logo-lg.png')}}" alt="logo" />
      </div>
      <div class="d-flex flex-column flex-lg-row justify-content-between align-items-center w-75 mb-4">
        <div class="d-flex align-items-center footer-text">
          <i class="ri-map-2-fill me-2"></i>
          No 40 Baria Street 133/2
        </div>
        <div class="d-flex align-items-center footer-text">
          <i class="ri-mail-fill me-2"></i>
          marie-olson@example.com
        </div>
      </div>
      <div class="d-flex justify-content-between flex-column flex-lg-row align-items-md-center w-75 mb-5 px-5">
        <div class="d-flex align-items-center footer-text">
          <i class="ri-earth-fill me-2"></i>
          www.mollure.com
        </div>
        <div class="d-flex align-items-center footer-text">
          <i class="ri-phone-fill me-2"></i>
          + (295) 146 8067
        </div>
      </div>
      <div class="footer-text text-center mb-4">Lorem Ipsum is simply dummy text of the printing</div>
      <div class="form-icon icon-right-align mb-2 w-50">
        <input class="form-control form-control-icon py-3 ps-4 border-0" type="text" placeholder="Enter your mail"/>
        <i class="ri-mail-send-line fs-4" style="color: #9FB7F2;"></i>
      </div>
    </div> -->
    <!--Footer End-->

<style type="text/css">
.mail_box button {
    position: absolute;
    right: 10px;
    top: 8px;
    border: none;
    background-color: transparent;
}
footer {
    background-color: #f7f7f7;
    margin-top: 45px;
    padding-top: 50px;
}
.mail_box input {
    width: 100%;
    height: 40px;
}
.mail_box {
    width: 100%;
    position: relative;
}
a{text-decoration: none}
/*.ftr_links li{display: inline-block;}*/
</style>

<?php

use App\Http\Controllers\Controller;

if(!isset($setting)){
  $setting = Controller::get_settings('en');
}
if(!isset($menuf)){
  $menuf = Controller::get_page_menu('footer','en');
}

$ftlng = Controller::get_translation('enter-your-email');

?>

    <!--Start footer-->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <aside class="text-center">
                          @if(isset($setting['footer_logo']) && $setting['footer_logo']!='')
                            <img src="{{ $setting['footer_logo'] }}" alt="logo" style="width:100px" />
                          @endif
                        </aside>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4 offset-md-2">
                        <div class="text-center">
                            <!-- <i class="ri-map-2-fill me-2"></i> --> {{ $setting['site_address'] }}
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="text-center">
                            <!-- <i class="ri-mail-fill me-2"></i> --> {{ $setting['site_email'] }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-4 offset-md-2">
                        <div class="text-center">
                            <!-- <i class="ri-earth-fill me-2"></i> --> 
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="text-center">
                            <!-- <i class="ri-phone-fill me-2"></i> --> {{ $setting['site_phone'] }}
                        </div>
                    </div>
                </div>
                <div class="footer-text text-center mb-4 mt-5">@if(isset($menuf['footer_text'])) {{$menuf['footer_text']}} @endif</div>
                <div class="row">
                    <div class="col-sm-6 offset-sm-3">
                        <div class="mail_box">
                            <input class="form-control form-control-icon py-3 ps-4 border-0" type="text" placeholder="{{$ftlng['enter-your-email']['english']}}" />
                            <button>
                                <i class="fa fa-envelope-o" aria-hidden="true" style="color: #9FB7F2;"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <hr class="mb-4 mt-4 bg-secondary">
                  </div>
                    <div class="col-sm-12">
                        <ul class="text-center ">
                          <li class="d-sm-inline-block"><a class="text-body" href="{{route('term_condition')}}">@if(isset($menuf['terms-conditions'])) {{$menuf['terms-conditions']}} @else Terms & Conditions @endif</a></li>
                          <li class="d-sm-inline-block d-xs-none text-secondary">&nbsp;|&nbsp;</li>
                          <li class="d-sm-inline-block"><a class="text-body" href="{{route('privacy_policy')}}">@if(isset($menuf['privacy-policy'])) {{$menuf['privacy-policy']}} @else Privacy Policy @endif</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <p class="text-center mb-4 mt-4">{{ $setting['copy_right'] }}</p>
                    </div>
                </div>
            </div>
        </footer>
        <!--Footer End-->

<link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous">
</script>
<script src="{{ URL::asset('public/js/carbon-components.js')}}"></script>
<script>
    window.addEventListener('DOMContentLoaded', function() {
        var navItems = document.querySelectorAll('.navbar li');

        // Add click event listener to each navigation item
        navItems.forEach(function(item) {
            item.addEventListener('click', function() {
                // Remove active class from all items
                navItems.forEach(function(navItem) {
                    navItem.classList.remove('active');
                });

                // Add active class to the clicked item
                item.classList.add('active');
            });
        });
    });

    const langBox = document.querySelector('.lang_box');
    const langOp = document.querySelector('.lang_op');

    langBox.addEventListener('click', () => {
        if (langOp.style.display === "block") {
            langOp.style.display = "none";
        } else {
            langOp.style.display = "block";
        }
    });

    langOp.addEventListener('click', () => {
        langOp.style.display = 'none';
    });

    var profselector = document.querySelector(".profile_name");
    var logitem = document.querySelector(".log");

    // Add event listener to the "Select Category" element
    profselector.addEventListener("click", function() {
        // Toggle the display property of the serviceItems element
        if (logitem.style.display === "block") {
            logitem.style.display = "none";
        } else {
            logitem.style.display = "block";
        }
    });


    function refreshPage() {
        location.reload();
    }

    // const icon = document.querySelector('.bx--date-picker__icon');
    // icon.addEventListener('click', function() {
    //     this.style.display = 'none';
    // });
</script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->