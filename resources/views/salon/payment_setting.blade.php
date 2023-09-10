@include('salon/header1')
<style type="text/css">
  .nav .nav-item .nav-link.active{
    border-width: 5px;
  }

   .cursor-pointer{cursor: pointer;}
   .cs_btn{font-size: 14px!important;
   width: fit-content;
   padding: 3px 8px!important;}
   .loc_type_card.active{background-color: #78c694;color:#fff;}
   .sub-temp-card.active{background-color: #78c694!important}
   .sub-temp-fixed-loc-card{cursor: pointer;}
   .sub-temp-table tr td textarea, .sub-temp-table tr td select{min-width: 100px}

   .tooltip {
  /*display: inline-block !important;*/
  opacity:1 !important;
  font-size: 15px !important;
  position: relative !important;
  /*top: -20px;*/
  /*display: none !important;*/
}
.tooltip .tooltiptext {
  visibility: hidden;
  color:#ffffff;
  text-align: center;
  padding: 5px 5px;
  border-radius: 3px;
  top: 5px;
  position: absolute;
  z-index: 1;
  border: 1px solid #fff;
  left: 0px;
  /*width: 70vw;*/
      min-width: 100%;
  background-color: #0d9da3;
}
.tooltip_spn, .tooltip_spn1, .tooltip_spn_0{cursor: pointer;    font-size: 16px;}
.tooltip_spn_1{    float: right;margin-top: -28px;}
.tooltip_spn:hover + .tooltip .tooltiptext, .tooltip_spn1:hover + .tooltip .tooltiptext, .tooltip_spn_0:hover + .tooltip .tooltiptext {
  visibility: visible;
}

.bdr_left{border-left: 1px solid #EFEFEF;}.bdr_right{border-right: 1px solid #EFEFEF;}.bdr_bottom{border-bottom: 1px solid #EFEFEF;}.bdr_top{border-top: 1px solid #EFEFEF;}
.border-top-left-radius{border-top-left-radius: 8px}
.border-top-right-radius{border-top-right-radius: 8px}
.border-bottom-left-radius{border-bottom-left-radius: 8px}
.border-bottom-right-radius{border-bottom-right-radius: 8px}
.top_nav_sec{
  /*border: 1px solid #EFEFEF;*/
  border-radius: 8px;
}
.top_nav{
  width: 34%;
  padding: 2px;
}
.top_nav span{
  padding: 11px 0;
  font-weight: 600;
  font-size: 20px;
  line-height: 27px;
  color: #000000;
  display: block;
  width: 100%;
  text-align: center;
}
.top_nav.active span{
  background: #21B8BF;
  border-radius: 8px;
  color: #fff;
}
.pg_ttl{
  font-weight: 500;
  font-size: 32px!important;
  line-height: 43px;
}
.mt-40{margin-top: 40px;}
.mt-20{margin-top: 20px;}
.mb-20{margin-bottom: 20px;}
.p-20{padding: 20px;}
.f-16{font-size: 16px;}
.f-14{font-size: 14px;}
.f-8{font-size: 8px!important;}
.f-10{font-size: 10px!important}
.bg-grey{  background: #f8f8f8; }

.my_btn_gr{
  background: linear-gradient(90.14deg, #66C68F 1.34%, #21B8BF 99.89%);
  border-radius: 8px;
  border: none;
  color: #fff;
}

.mbtn{
  width: 191px;
  height: 50px;
}

.pgh{
  color: #000000;
  text-decoration-line: underline;
  font-weight: 600;
  font-size: 18px;
  line-height: 24px;
}
.ul1 li{
  margin: 8px 0;
}
.mclr{
  color:#66C68F;
}

</style>

<!--Tabs Start-->
<div class="container mb-4">
   <ul class="nav nav-pills nav-fill">
      <li class="nav-item">
         <a class="nav-link active pg_ttl" aria-current="page" href="#">Payments</a>
      </li>
   </ul>
</div>
<!--Tabs End-->

<div class="container">
  <div class="top_nav_sec d-flex">
    <div class="top_nav bdr_right bdr_top bdr_left bdr_bottom border-top-left-radius border-bottom-left-radius active">
      <span>Card</span>
    </div>
    <div class="top_nav bdr_right bdr_top bdr_bottom">
      <span>Transaction Option</span>
    </div>
    <div class="top_nav bdr_bottom bdr_top bdr_right border-top-right-radius border-bottom-right-radius ">
      <span>Invoice</span>
    </div>
  </div>
</div>  

  

<div class="container booking_calendar_sec mt-40 p-0">
  <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3">
    Stripe-Mollure on boarding
  </div>
  
  <div class="d-flex justify-content-between align-items-center mt-40">
    <div><p style="font-size: 18px;font-weight:600;">Mollure partners with Stripe for secure payment</p></div>
    <div>
      <button class="my_btn_gr mbtn">Stripe-Mollure</button>
    </div>
  </div>
  <br>
  <p class="pgh">Business details:</p>
  <ul class="ul1">
    <li>Glamourize Salon LLC</li>
    <li class="mclr">LocksAndLashes.com</li>
    <li class="mclr"><i class="fa fa-facebook"></i> Locks_And_Lashes</li>
    <li>123 Main Street Anytown, CA 12345 (555) 123-4567</li>
    <li><b>Designation:</b> Salon Owner</li>
    <li><b>KVK:</b> 9% &nbsp; &nbsp; <b>VAT:</b> 12%</li>
    <li><b>Product description:</b> Provides beauty services</li>
  </ul>
  <p class="pgh">Public details:</p>
  <ul class="ul1">
    <li>Lorem ipsum dolor sit amet consectetur. Curabitur non etiam bibendum at aliquet lacus massa. Etiam viverra velit vel morbi mi vitae congue et elit.</li>
    <li>(555) 123-4567</li>
  </ul>
  <p class="pgh">Management and ownership:</p>
  <ul class="ul1">
    <li>Shear Perfection Inc.</li>
    <li class="mclr">shearperfection@gmail.com</li>
    <li><b>date of birth:</b> 13-08-1002</li>
    <li>123 Main Street Anytown, CA 12345 (555) 123-4567</li>
    <li>
      <b>About:</b>
      <ul class="ul1">
        <li><b>People who represent the business:</b> Craig Martha, Sara Lenning</li>
        <li><b>Owners:</b> Craig Martha, Sara Lenning</li>
        <li><b>Business directors:</b> Craig Martha, Sara Lenning</li>
      </ul>
    </li>
  </ul>
  <p class="pgh">Payout details:</p>
  <ul>
    <li><b>IBAN number:</b> 12345678432131r123</li>
  </ul>
</div>

<!-- Modal -->
<div class="modal fade" id="modalajx" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: transparent;border:0;">
      <img src="{{URL::asset('public/images/ajax-loader.gif')}}" style="margin:auto;width:100px">
      <!-- <div class="modal-body border-custom rounded p-4" style="max-height: 95vh;height: 400px;">
        <div class="text-center">
          <img src="{{ URL::asset('public/images/logo-lg.png')}}" alt="logo" class="mt-3" style="width:100px"/>
          <h3 class="text-custom-primary my-4">Thank you <br> for registering with Mollure!</h3>
          <p class="mt-4" style="font-size:24px;">We shall get back to you as the earliest.</p>
          <p class="mt-4" style="font-size:20px;"><a href="{{config('app.url')}}">Bakc To Home</a></p>
        </div>
      </div> -->
     
    </div>
  </div>
</div>



@include('salon/footer')

<script type="text/javascript">
$(document).on('click','.custom_sel_ic',function(){
    if($(this).closest('.custom_sel').hasClass('open')){
        $(this).closest('.custom_sel').removeClass('open');
    }
    else{
        $(this).closest('.custom_sel').addClass('open');
    }    
});

  $('.add_n_cls_spn').on('click',function(){    
      $(".add_inp_sec").slideUp("slow");
  })
</script>
</body>
</html>