@include('salon/header1')
<style type="text/css">
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
  width: max-content;
}
.tooltip_spn, .tooltip_spn1, .tooltip_spn_0{cursor: pointer;    font-size: 18px;}
/*.tooltip_spn_1{    float: right;margin-top: -28px;}*/
.tooltip_spn:hover + .tooltip .tooltiptext, .tooltip_spn1:hover + .tooltip .tooltiptext,  .tooltip_spn_0:hover + .tooltip .tooltiptext {
  visibility: visible;
}
.sub-temp-fixed-loc-card.active span{color: #fff!important}
.des_mun_ul{position: absolute;background-color: #fff;border-radius: 8px;box-shadow:0px 0px 20px rgb(16 8 63 / 9%);list-style: none;padding: 8px 15px;display: none;margin-top: 6px;}
.des_mun_ul li{margin-bottom: 4px;padding: 9px 7px;}
.des_mun_ul li:not(:first-child){border-top: 1px solid #ebebeb;}
.img1{max-width: 100%}
.reg_doc_img{max-width: 150px;max-height: 150px;}
.team_mem_cate_serv{margin-bottom: 1px;}
.team_mem_cate_serv ul{margin-bottom: 1px;list-style: none;font-size: 12px;color: #FFFFFF;line-height: 16px;padding-left: 0;}
.licls{display: inline-block;}
.licls + .licls::before{display: inline-block;content: '|';margin-right: 3px;margin-left: 3px;}
.salon_cate_sec .cate_sec{/*width: 12%;min-width: 150px;*/height: 149px;width: 147px;}
.salon_cate_sec .cate_sec img{height: 55px;margin: auto;display: block;}
.salon_cate_sec .cate_sec .cate_cards{position: relative;box-shadow: 0px 0px 20px rgba(12, 7, 63, 0.07);}
.salon_cate_sec .cate_sec .cate_cards span{position: absolute;bottom: 20px;width: 100%;text-align: center;    font-size: 16px;line-height: 21px;font-weight: 500;word-break: break-all;color: #000000}
.cate_img_sec{height: 108px;display: flex;align-items:center;}
.rotate{
  animation: rotate 1.5s linear infinite; 
}
@keyframes rotate{
  to{ transform: rotate(360deg); }
}

.spinner{
  display:inline-block; width: 18px; height: 18px;
  vertical-align: middle;
  border-radius: 50%;
  box-shadow: inset -2px 0 0 2px #0bf;
}
.tmctli{padding: 8px 15px;background: #21B8BF;color: #fff;display: inline-block;margin-bottom: 10px;border-radius: 8px;}
.tmctli:not(:last-child){margin-right: 10px}
.tmctli select{width: 24px;color: #fff;background: #21B8BF;border: 0;}
.swal-text,.swal-button--cancel{color:#111;text-align: center;} .swal-button--catch{background-color: #009688;}.swal-button--catch:not([disabled]):hover{    background-color: #026a61;}





.accordion-item{border: none;}
.prof_img_lbl{
        border: 1px solid #dddddd;
    border-radius: 50%;
    height: 125px;
    width: 125px;
}
.prof_sec1_3{width: 316px;}
.rating_sec{margin-left: 10px;}
.rating_sec,.review_p{display: inline-block;font-size: 14px;}
.prof_rating_sec{width: 316px}
.lc_t_tbl{width: 98%;border-spacing: 0;border-collapse: separate;}
.lc_t_tbl1{width: 50%;margin: auto;border-spacing: 0;border-collapse: separate;}
.lc_t_tbl tr td, .lc_t_tbl1 tr td{border: 1px solid #EAEAEA;padding: 1px;}
span.lc_t_spn.myactive {
    background-color: #66C68F;
    color: #fff;
}
.lc_t_tbl span.lc_t_spn{width: 152px}
.sub-temp-card {
    background-color: #fff;
    position: relative;
    border: 1px solid #E4E4E4;
    padding: 20px;
    border-radius: 8px;
}
.sub-temp-card label{
  font-style: normal;
  font-weight: 400;
  font-size: 14px;
  line-height: 19px;
  /* identical to box height */

  text-transform: capitalize;

  color: #000000;
  margin-bottom: 10px;
  
}
.salon_serv_for_sec label, .des_salon_serv_for_sec label{height: 40px;border-radius: 37px;border: 1px solid #E4E4E4;margin-right: 10px;padding: 8px 20px;font-size: 16px;font-weight: 400;}
.serv_border_spn, .sserv_border_spn{
  display: flex;
  padding-left: 22px!important;
  align-items: center;
  justify-content: space-around;
}
.serv_border_spn:before{
    left: 0;
    position: absolute;
    /* display: block; */
    content: ' ';
    width: 8px;
    background: #3bb0b7;
    height: 100%;
    border-top-right-radius: 8px;
    border-bottom-right-radius: 8px;
}

.category-table .bg-light-primary{background-color: #f6fcfc}
.f-18{font-size: 18px}
.mb-40{margin-bottom: 40px!important}
.border-bottom{border-bottom: #EAEAEA}
.serv_radio{width: 20px;height: 20px;margin-right: 15px;}
.minus_spn,.plus_spn{width: 30px;height: 30px;border: 1px solid #D9D9D9;display: inline-block;    border-radius: 15px;background: #fff;padding-top: 2px;cursor: pointer;}
.unit_spn{font-size: 16px;padding: 10px;}
.category-table-row{min-height: 60px}
.block-heading{height: 44px;font-weight: 600;}
.tem_m_sec{
  background: #FFFFFF;
  box-shadow: 0px 0px 20px rgba(12, 7, 63, 0.07);
  border-radius: 8px;
  width: 327px;
  padding: 20px;
  margin-bottom: 20px;
}
.tem_m_sec{
  margin-left: 10px;
}
.tem_m_sec_main{
  display: flex;
  justify-content:flex-start;
  flex-wrap: wrap;
}
.tm_name_p{
  font-weight: 400;
  font-size: 16px;
  line-height: 21px;
  text-transform: capitalize;
  color: #000000;
  margin-bottom: 10px
}
.tm_bio_p{
  font-weight: 400;
  font-size: 14px;
  line-height: 19px;
  text-transform: capitalize;
  color: #000000;
  opacity: 0.6;
  margin-bottom: 0px;
}
#cart_sec_footer{
  position: fixed;
  bottom: 0;
  width: 100%;
  max-width: 100%;
 
  z-index: 100;
  display: none;
}
.cart_sec_s{
  background: #3BB0B7 ;
  color: #fff;
  display: flex;
  justify-content: space-between;
  padding: 15px 20px;
  /*border-radius: 5px;*/
  width: 900px;
  max-width: 100%;
  margin: auto;
  box-shadow: 0px -1px 11px -3px #3bb0b7;
}
.cart_sec_s input.book_btn{
width: 99px;
height: 41px;
left: 1221px;
top: 2564px;

background: #FFFFFF;
border-radius: 8px;
color:#21B8BF;
font-weight: 500;
font-size: 16px;
}
.fx_img1,.ds_img1{max-height: 100%;border-radius: 50%;}
.tmp_name_sc{border: 1px solid #EFEFEF;
    border-radius: 8px;
    padding: 17px;
}
.tmp_bio_sec{
  background: #FFFFFF;
  border: 1px solid #EFEFEF;
  border-radius: 8px;
  padding: 17px;
}


.customcb {
  width: 20px;
  height: 20px;
  margin: 2px 0 2px 0;
  /*background: #ddd;*/
  border-radius: 100%;
  position: relative;
  border: 1px solid #b1b1b1;
  margin-right: 15px;
  /*-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .5);
  -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, .5);
  box-shadow: 0 1px 1px rgba(0, 0, 0, .5);*/
}

.customcb label.inner {
  display: block;
  width: 12.75px;
  height: 12.75px;
  border-radius: 100px;
  -webkit-transition: all .5s ease;
  -moz-transition: all .5s ease;
  -o-transition: all .5s ease;
  -ms-transition: all .5s ease;
  transition: all .5s ease;
  cursor: pointer;
  position: absolute;
  top: 2.5px;
    left: 2.5px;
  z-index: 1;
  /*background: #eee;*/
  /*-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .5);
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .5);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .5)*/
}
.customcb label.outer {
  margin-left: 25px;
}
.customcb [type=checkbox] {
  display: none
}
.customcb input[type=checkbox]:checked+label.inner {
  background: #093ed5
}

.customcb! > input[type=checkbox]:checked { background: #000; }
</style>
<!--Tabs Start-->
<!-- <div class="container mb-4">
   <ul class="nav nav-pills nav-fill">
      <li class="nav-item">
         <a class="nav-link active" aria-current="page" href="#">PROFILE</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="#">BOOKING</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="#">CALENDAR</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">TRANSACTION</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">ANALYSIS</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">CARD SETTINGS</a>
      </li>
   </ul>
</div> -->
<!--Tabs End-->
<input type="hidden" id="csrf-token" value="{{ Session::token() }}" />
<input type="hidden" id="prof_id" value="{{ $prof_id }}" />
@if($prof->status=='approve')
<!--Professional Template Start-->
<div class="container mb-0">
   <div class="accordion">
      <div class="accordion-item">
         <!-- <h2 class="accordion-header" id="professional-template-heading">
            <button class="block-heading accordion-button p-2 text-white rounded fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#professional-template-body" aria-expanded="true" aria-controls="professional-template-body">
            Profile
            </button>
         </h2> -->
         <!-- <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3">Professional Template</div> -->
         <div id="professional-template-body" class="accordion-collapse collapse show" aria-labelledby="professional-template-heading" data-bs-parent="#professional-template">
            <div class="accordion-body px-0">
               <div class="bg-white rounded">
                  <!-- <div class="d-flex border mb-3">
                     <div class="w-50 border-end p-2">
                        <div class="loc_type_card _fix_loc active text-custom-dark fw-custom-bold fs-5 text-center p-2 cursor-pointer" onclick="show_fix_loc_sec()">{{$lang_kwords['fixed-location']['english']}}</div>
                     </div>
                     <div class="w-50  p-2">
                        <div class="loc_type_card _des_loc text-custom-dark fw-custom-bold fs-5 text-center p-2 cursor-pointer" onclick="show_des_loc_sec()">{{$lang_kwords['desired-location']['english']}}</div>
                     </div>
                  </div> -->
                  <div class="fix_loc_sec">
                    <div class="block-heading text-white px-3 py-2 rounded f-18 mb-40 mx-0 text-center">
                      Profile
                    </div>
                     <form action="{{route('fixed_location_update')}}" id="frm1" class="fix_loc_form" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ Session::token() }}" />
                        <input type="hidden" name="prof_id" value="{{ $prof_id }}" />
                        <div class="d-flex px-0 pe-sm-4 ps-sm-4  sub-temp-fixed-loc mb-4 justify-content-between">
                           <div class="">
                              
                              <label for="fixed_pic" class=" d-flex align-items-center justify-content-center prof_img_lbl">
                              @if($prof->fixed_pic!='')
                              <img src="{{asset('public/imgs/template/'.$prof->fixed_pic)}}" class="img1 fx_img1">
                              @else
                              <img src="{{asset('public/imagesdefault-user.png')}}"  class="img1 fx_img1">
                              @endif
                              </label>
                           </div>
                           <div class="w-100 mx-4">
                              <div class="form-icon icon-right-align mb-3 tmp_name_sc">
                                 {{$prof->fixed_name}}
                              </div>
                              <div class="form-icon icon-right-align tmp_bio_sec">
                                 {{$prof->fixed_bio}}
                                 Lorem ipsum dolor sit amet consectetur. Commodo ut vestibulum praesent duis. Imperdiet nunc quisque vitae ante ornare imperdiet diam sed. Pretium ut malesuada velit convallis tortor nulla mattis amet. Lectus nulla integer libero ornare aliquam sagittis posuere. Nec lacinia aliquet quam suspendisse. Elementum nunc ac sit id vel. Non facilisis dictumst egestas sit.
                                 <!-- <i class="ri-edit-box-line text-custom-primary icon-textarea fs-5"></i> -->
                              </div>
                           </div>
                           <div class="prof_sec1_3">
                            <div class="prof_rating_sec">
                                <div class="second text-center rating_sec">
                                <span class="myactive">
                                    <img src="{{URL::asset('public/icons/rating_ic.png')}}">
                                </span>
                                <span class="myactive">
                                    <img src="{{URL::asset('public/icons/rating_ic.png')}}">
                                </span>
                                <span class="myactive">
                                    <img src="{{URL::asset('public/icons/rating_ic.png')}}">
                                </span>
                                <span>
                                    <img src="{{URL::asset('public/icons/rating_ic.png')}}">
                                </span>
                                <span>
                                    <img src="{{URL::asset('public/icons/rating_ic.png')}}">
                                </span>
                            </div>
                            <p class="review_p" style="margin-left:10px">100 Reviews</p>
                            </div>
                            <div class="prof_tmt_sec d-flex">
                                <table class="@if($prof->desire_info=='1') lc_t_tbl @else lc_t_tbl1 @endif ">
                                    <tr>
                                        <td class="@if($prof->desire_info=='1') border-radius-left @else border-radius @endif ">
                                            <span class="lc_t_spn myactive btn _fix_loc" onclick="show_fix_loc_sec()">Fixed Location</span>
                                        </td>
                                        @if($prof->desire_info=='1')
                                        <td class="border-radius-right">
                                            <span class="lc_t_spn _des_loc btn" onclick="show_des_loc_sec()">Desired Location</span>
                                        </td>
                                        @endif
                                    </tr>
                                </table>
                                <!-- <div class="loc_type_card _fix_loc active text-custom-dark fw-custom-bold fs-5 text-center p-2 cursor-pointer" onclick="show_fix_loc_sec()">{{$lang_kwords['fixed-location']['english']}}</div>
                                <div class="loc_type_card _des_loc text-custom-dark fw-custom-bold fs-5 text-center p-2 cursor-pointer" onclick="show_des_loc_sec()">{{$lang_kwords['desired-location']['english']}}</div> -->
                            </div>
                           </div>
                        </div>
                        
                     </form>
                    
                     
                     <div class="row px-4 mb-5" style="margin-top: 75px;">
                        @if($fixed_loc_salon && count($fixed_loc_salon)>0)
                          <input type="hidden" value="Y" id="is_salon">
                        @foreach($fixed_loc_salon as $k=>$salon)
                        <input type="hidden" id="salon_id_inp" value="{{$salon->id}}" data-name = "{{$salon->salon_name}}">
                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                           <div class="sub-temp-card d-flex justify-content-between" id="sub-temp-card_{{$salon->id}}">
                             
                              <div class="d-flex flex-column fs-6 z-index-1">
                                 <label>{{$lang_kwords['salon-name']['english']}}: {{$salon->salon_name}}</label>
                                 <label>{{$lang_kwords['street']['english']}}: {{$salon->street}}</label>
                                 <label>{{$lang_kwords['postal-code']['english']}}: {{$salon->number}}</label>
                                 <label>{{$lang_kwords['number']['english']}}: {{$salon->postal_code}}</label>
                                 <label>{{$lang_kwords['municipality']['english']}}: {{$salon->municipality}}</label>
                                 <label>{{$lang_kwords['province']['english']}}: {{$salon->province}}</label>
                              </div>
                             
                           </div>
                        </div>
                        @endforeach
                        @else
                        <input type="hidden" value="N" id="is_salon">
                        @endif
                     </div>
                     <div class="px-0">
                        <div class="rounded salon_serv_for_sec" style="display:none">
                          <div class="block-heading text-white px-3 py-2 rounded f-18">
                            {{$lang_kwords['services-for']['english']}}
                          </div>
                           <!-- <h5 style="color: #3bb0b7" class="mb-3">SERVICES FOR</h5> -->
                           <div class="d-flex flex-wrap my-4">
                              <div class="" id="serv_all_sec">
                                 <label class="form-check-label " for="all_gender_chk"> {{$lang_kwords['all-genders']['english']}} </label>
                              </div>
                              <div class="" id="serv_men_sec">
                                 <label class="form-check-label " for="men_chk"> {{$lang_kwords['male-only']['english']}} </label>
                              </div>
                              <div class="" id="ser_women_sec">
                                 <label class="form-check-label " for="women_chk"> {{$lang_kwords['female-only']['english']}} </label>
                              </div>
                              <div class="" id="serv_kid_sec">
                                 <label class="form-check-label " for="kids_chk"> {{$lang_kwords['kids-only']['english']}} </label>
                              </div>
                           </div>
                          
                        </div>
                     </div>
                  </div>

                  <!-- Desire location -->
                  <div class="dis_loc_sec" style="display:none">
                    <div class="block-heading text-white px-3 py-2 rounded f-18 mb-40 mx-0 text-center">
                      Profile
                    </div>
                    <form action="{{route('fixed_location_update')}}" id="frm1" class="fix_loc_form" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ Session::token() }}" />
                        <input type="hidden" name="prof_id" value="{{ $prof_id }}" />
                        <div class="d-flex px-0 pe-sm-4 ps-sm-4  sub-temp-fixed-loc mb-4 justify-content-between">
                           <div class="">
                              
                              <label class=" d-flex align-items-center justify-content-center prof_img_lbl">
                             
                              @if($prof->desire_pic!='')
                                <img src="{{asset('public/imgs/template/'.$prof->desire_pic)}}" style="" class="img1 ds_img1">
                              @else
                                <img src="{{asset('public/images/default-user.png')}}"  class="img1 ds_img1">
                              @endif

                              </label>
                           </div>
                           <div class="w-100 mx-4">
                              <div class="form-icon icon-right-align mb-3 tmp_name_sc">
                                 {{$prof->desire_name}}
                              </div>
                              <div class="form-icon icon-right-align tmp_bio_sec">
                                 {{$prof->desire_bio}}
                                 Lorem ipsum dolor sit amet consectetur. Commodo ut vestibulum praesent duis. Imperdiet nunc quisque vitae ante ornare imperdiet diam sed. Pretium ut malesuada velit convallis tortor nulla mattis amet. Lectus nulla integer libero ornare aliquam sagittis posuere. Nec lacinia aliquet quam suspendisse. Elementum nunc ac sit id vel. Non facilisis dictumst egestas sit.
                                 <!-- <i class="ri-edit-box-line text-custom-primary icon-textarea fs-5"></i> -->
                              </div>
                           </div>
                           <div class="prof_sec1_3">
                            <div class="prof_rating_sec">
                                <div class="second text-center rating_sec">
                                <span class="myactive">
                                    <img src="{{URL::asset('public/icons/rating_ic.png')}}">
                                </span>
                                <span class="myactive">
                                    <img src="{{URL::asset('public/icons/rating_ic.png')}}">
                                </span>
                                <span class="myactive">
                                    <img src="{{URL::asset('public/icons/rating_ic.png')}}">
                                </span>
                                <span>
                                    <img src="{{URL::asset('public/icons/rating_ic.png')}}">
                                </span>
                                <span>
                                    <img src="{{URL::asset('public/icons/rating_ic.png')}}">
                                </span>
                            </div>
                            <p class="review_p" style="margin-left:10px">100 Reviews</p>
                            </div>
                            <div class="prof_tmt_sec d-flex">
                                <table class="@if($prof->desire_info=='1') lc_t_tbl @else lc_t_tbl1 @endif ">
                                    <tr>
                                      @if($prof->fixed_info=='1')
                                        <td class="@if($prof->desire_info=='1') border-radius-left @else border-radius @endif ">
                                            <span class="lc_t_spn  btn _fix_loc" onclick="show_fix_loc_sec()">Fixed Location</span>
                                        </td>
                                      @endif

                                        <td class="border-radius-right">
                                            <span class="lc_t_spn myactive _des_loc btn" onclick="show_des_loc_sec()">Desired Location</span>
                                        </td>
                                        
                                    </tr>
                                </table>
                              
                            </div>
                           </div>
                        </div>
                        
                     </form>
                    
                     <div class="px-0 py-2 des_loc_type_sec">
                        <div class="ps-sm-4 pb-3 pt-4 rounded">
                          <p style="font-size: 18px;font-weight: 600;color: #000000;line-height: 24px;margin-bottom:30px;">Operating area</p>
                           <div class="">
                              <div class="form-check" id="des_serv_lc_e">
                                 <label class="form-check-label" for="des_serv_lc_e"> {{$lang_kwords['everywhere']['english']}} in Netherland</label>
                              </div>
                              <div class="form-check p-0" id="des_serv_lc_s">
                                 <label class="form-check-label" for="des_serv_lc_s" style="border: 1px solid #EFEFEF;border-radius: 8px;width: 229px;padding: 12px 0 12px 1.5em;font-size: 16px;color: #000000;"> {{$lang_kwords['specific-provinces']['english']}} </label>
                              </div>
                             
                           </div>
                        </div>
                     </div>
                     <div class="row px-4 mb-5" id="des_specific_prov_sec">
                        @if($des_loc_salon && count($des_loc_salon)>0)
                        
                        <div class="d-flex flex-wrap">
                        @foreach($des_loc_salon as $k=>$des_loc)
                        <div class="d-flex align-items-center  me-3  mb-2 des_loc_main_sec des_loc_main_sec_{{$des_loc->id}}">
                           <div class="d-flex align-items-center">
                              <div class="flex-column px-2 py-1 me-2">
                                <div class="form-check ps-0">
                                   <!-- <input class="form-check-input me-2" name="selected_des_provinces" type="radio" value="{{$des_loc->id}}" id="des_serv_lc_{{$des_loc->id}}" onchange="show_des_detail('{{$des_loc->id}}','{{$des_loc->desire_province}}')"/> -->
                                   <label class="form-check-label des_loc_lbl" data-v="{{$des_loc->desire_province}}" for="des_serv_lc_{{$des_loc->id}}" data-i="{{$des_loc->id}}"> {{$des_loc->desire_province}} </label>

                                  @if($des_loc->desire_municipality)
                                    @php
                                      $des_muni = unserialize($des_loc->desire_municipality);
                                    @endphp

                                    @if(count($des_muni)>0)
                                    <i class="fa ri-arrow-down-s-line cursor-pointer" style="font-size: 22px;vertical-align: bottom;" onclick="show_hide_des_mun_ul($(this))"></i>
                                    <ul class="des_mun_ul">
                                      @foreach($des_muni as $des_m)
                                        <li>{{$des_m}}</li>
                                      @endforeach
                                    </ul>
                                    @endif
                                  @endif
                                </div>

                                
                              </div>
                              
                           </div>
                        </div>
                        @endforeach
                        </div>
                        @endif
                     </div>
                    
                     <div class="px-0 ">
                        <div class="roundedrounded des_salon_serv_for_sec" style="display:none">
                           <div class="block-heading text-white px-3 py-2 text-white rounded f-18">
                            {{$lang_kwords['services-for']['english']}}
                          </div>
                           <div class="d-flex flex-wrap my-4">
                              <div class="" id="des_serv_all_sec">
                                 <label class="form-check-label" for="des_all_gender_chk"> {{$lang_kwords['all-genders']['english']}} </label>
                              </div>
                              <div class="" id="des_serv_men_sec">
                                 <label class="form-check-label" for="des_men_chk"> {{$lang_kwords['male-only']['english']}} </label>
                              </div>
                              <div class="" id="des_serv_women_sec">
                                 <label class="form-check-label" for="des_women_chk"> {{$lang_kwords['female-only']['english']}} </label>
                              </div>
                              <div class="" id="des_serv_kid_sec">
                                 <label class="form-check-label" for="des_kids_chk"> {{$lang_kwords['kids-only']['english']}} </label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Desire location  -->


                  <!--Subtemplate Fixed Location Start-->
<div class="container mb-4 sub_tem_fix_sec p-0" style="display:none">
   <div class="accordion" id="subtemplate-fixed-location">
      <div class="accordion-item">
         <!-- <div class="block-heading text-white px-3 py-2 rounded mb-3">Subtemplate Fixed Location</div> -->
         <h2 class="accordion-header" id="subtemplate-fixed-location-heading">
            <button class="block-heading accordion-button px-3 py-2 text-white rounded f-18" type="button" data-bs-toggle="collapse" data-bs-target="#subtemplate-fixed-location-body" aria-expanded="true" aria-controls="subtemplate-fixed-location-body" >
            {{$lang_kwords['category']['english']}}
            </button>
         </h2>
         <div id="subtemplate-fixed-location-body" class="accordion-collapse collapse show" aria-labelledby="subtemplate-fixed-location-heading" data-bs-parent="#subtemplate-fixed-location">
            <div class="accordion-body px-0">
               <div class="bg-white p-2 rounded salon_cate_sec" style="display:none;margin-top: 12px;">
                  <!-- <div class="d-flex justify-content-end">
                     <button class="btn gradient-btn">+ SERVICE</button>
                     </div> -->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Subtemplate Fixed Location End-->
<!--Category Start-->
<div class="container mb-4 salon_cate_dt_sec p-0" style="display:none">
   <div class="accordion" id="category">
      <div class="accordion-item">
         <!-- <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3 title1">Category</div> -->
         <h2 class="accordion-header" id="category-heading">
            <button class="text-center block-heading accordion-button px-3 py-2 text-white rounded f-18 title1" type="button" data-bs-toggle="collapse" data-bs-target="#category-body" aria-expanded="true" aria-controls="category-body">
            {{$lang_kwords['category']['english']}}
            </button>
         </h2>
         <div id="category-body" class="accordion-collapse collapse show" aria-labelledby="category-heading" data-bs-parent="#category">
            <div class="accordion-body px-0">
               <div class="bg-white px-0 py-4 rounded">
                  
                  <div class="overflow-auto" id="serv_frm_sec">
                     <div class="category-table mb-4" style="min-width: 800px;">
                        <div class="category-table-row d-flex">
                           <div class="heading py-3 w-28 border-end">{{$lang_kwords['service-name']['english']}}</div>
                           <div class="heading py-3 w-28 border-end">{{$lang_kwords['duration']['english']}}</div>
                           <div class="heading py-3 w-28 border-end">{{$lang_kwords['price']['english']}}</div>
                           <div class="heading py-3 w-15">Units</div>
                        </div>
                        <div class="tbody">
                        </div>
                     </div>
                  </div>
                  
                 
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Category End-->
<!--General Note Start-->
<div class="container general-note-container mb-4 salon_note_sec p-0"  style="display:none">
   <div class="accordion" id="general-note">
      <div class="accordion-item">
         <!-- <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3">General Note</div> -->
         <h2 class="accordion-header" id="general-note-heading">
            <button class="block-heading accordion-button px-3 py-2 text-white rounded f-18" type="button" data-bs-toggle="collapse" data-bs-target="#general-note-body" aria-expanded="true" aria-controls="general-note-body">
            {{$lang_kwords['general-note']['english']}}
            </button>
         </h2>
         <div id="general-note-body" class="accordion-collapse collapse show" aria-labelledby="general-note-heading" data-bs-parent="#general-note">
            <div class="accordion-body  px-0">
               <div class="bg-white px-2 py-4 ps-sm-4 pe-sm-4 rounded">
                  <div class="form-icon icon-right-align mb-2">
                     <div id="gen_note_txt"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--General Note End-->
<!--Team Members Start-->
<div class="container general-note-container mb-4 team_mem_sec p-0" style="display:none">
   <div class="accordion" id="team-members">
      <div class="accordion-item">
         <!-- <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3">Team Members</div> -->
         <h2 class="accordion-header" id="team-members-heading">
            <button class="block-heading accordion-button py-2 px-3 text-white rounded f-18" type="button" data-bs-toggle="collapse" data-bs-target="#team-members-body" aria-expanded="true" aria-controls="team-members-body">
            {{$lang_kwords['team-members']['english']}}
            </button>
         </h2>
         <div id="team-members-body" class="accordion-collapse collapse show" aria-labelledby="team-members-heading" data-bs-parent="#team-members">
            <div class="accordion-body px-0">
               
               <div class="bg-white p-4 rounded">
                  <div class="team_mem_lst_sec">
                  </div>                  
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Team Members End-->
<!--Visual Start-->
<div class="container general-note-container mb-0 visual_sec p-0" style="display:none">
   <div class="accordion" id="visual">
      <div class="accordion-item">
         <!-- <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3">Visual</div> -->
         <h2 class="accordion-header" id="visual-heading">
            <button class="block-heading accordion-button py-2 px-3 text-white rounded f-18" type="button" data-bs-toggle="collapse" data-bs-target="#visual-body" aria-expanded="true" aria-controls="visual-body">
            {{$lang_kwords['visual']['english']}}
            </button>
         </h2>
         <div id="visual-body" class="accordion-collapse collapse show" aria-labelledby="visual-heading" data-bs-parent="#visual">
            <div class="accordion-body px-0">
               

               <div class="bg-white px-1 py-4 ps-sm-4 pe-sm-4 ">
                  
                  <div class="visual_lst_sec">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Visual End-->


               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Professional Template End-->



@endif


<div class=" p-0" id="cart_sec_footer">
  <div class="cart_sec_s">
    <div class="d-flex align-items-center">
      <span id="ttl_serv_spn">0 Service</span>&nbsp; 
      <span id="ttl_p_spn">0 EUR</span>
    </div>

    @if(isset($edit) && $edit=='Y')
    <div>
    <input type="button" value="Confirm" class="btn book_btn" onclick="save_cart()">
    &nbsp;
    &nbsp;
    <a href="{{route('bookings')}}" class="btn btn-danger">Cancel</a>
    </div>

    <input type="hidden" id="ttl_booking_s" value="{{count($booking->booking_trans_active)}}">
    @else
    <input type="button" value="Book" class="btn book_btn" onclick="save_cart()">
    <input type="hidden" id="ttl_booking_s" value="0">
    @endif
    
  </div>
</div>

<form id="ttl_s_frm" action="{{route('book')}}" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="prof_id" value="{{ $prof_id }}" />

  @if(isset($edit) && $edit=='Y')
  <input type="hidden" name="edit_booking_id" value="{{$booking_id}}">
  @endif

  <input type="hidden" name="act" value="cart_proceed">
</form>

@php
  if(isset($_GET['t']) && $_GET['t']=='f')
    $tt='f';
  else if(isset($_GET['t']) && $_GET['t']=='d')
    $tt='d';
  else  
    $tt='f';
@endphp

<input type="hidden" id="template_id">
<input type="hidden" id="template_type" value="{{$tt}}">
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

<!-- Modal -->
<div id="myModalImg" class="modal fade" role="dialog">
 <div class="modal-dialog" style="width:90%;max-width: 90%;">
   <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" onclick="closeModal('myModalImg')">&times;</button>
       <!-- <h4 class="modal-title">Prei</h4> -->
     </div>
     <div class="modal-body text-center">
       <img src="" id="doc_prev_img" style="max-width:100%">
       <iframe src="" style="display:none;max-width:100%;width:90%;height:90vh" id="doc_prev_pdf"></iframe>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeModal('myModalImg')">Close</button>
     </div>
   </div>

 </div>
</div>

@include('salon/footer')
<script src="{{URL::asset('public/js/sweetalert.min.js')}} "></script>

<script type="text/javascript">
   $(document).ready(function(){

    var ckpf = getCookie('profId');
    if(ckpf){
      if(ckpf!=$('#prof_id').val())
      {
        var json_str = null;
        document.cookie = 'services' + '=' + json_str + ';expires=-1;path=/';
      }
    }


    @if(!isset($edit) || $edit!='Y')

    var ckpf1 = getCookie('edit_booking');
    if(ckpf1){
      if(ckpf1!='' && ckpf1!='0' && ckpf1!='null')
      {
        
        var json_str = null;
        document.cookie = 'services' + '=' + json_str + ';expires=-1;path=/';
        
        var date = new Date();
        date.setTime(date.getTime() + (1 * 1000));
        document.cookie = 'edit_booking' + '=;expires='+date+';path=/';
      }
    }

    @endif

    document.cookie = 'profId' + '=' + $('#prof_id').val() + ';expires=-1;path=/';
    


    if($('#template_type').val()=='d'){
      show_des_loc_sec();
    }
    else{
      show_fixed_loc_detail();
    }
    


    $(document).on('change','.serv_radio',function(event){
      // event.preventDefault();

      if($(this).prop('checked')===true){
        $(this).closest('.customcb').siblings('.cart_sec').show();
        $(this).attr('data-q','1');
        $(this).closest('.customcb').siblings('.cart_sec').find('.unit_spn').html('1');
        $(this).closest('.customcb').siblings('.cart_sec').find('.unit_spn').attr('data-q','1');

        let i = $(this).attr('data-id');
        let p = $(this).attr('data-p');
        setCookie(i, '1', p);
      }
      else{
        $(this).closest('.customcb').siblings('.cart_sec').hide();
        $(this).attr('data-q','0');
        $(this).closest('.customcb').siblings('.cart_sec').find('.unit_spn').html('0');
        $(this).closest('.customcb').siblings('.cart_sec').find('.unit_spn').attr('data-q','0');

        let i = $(this).attr('data-id');
        removeCookieItem(i);
      }

      calculate_ttl_price();
    });

    $(document).on('click','.plus_spn',function(){
      let q = $(this).siblings('.unit_spn').attr('data-q');
      q = parseInt(q)+1;
      $(this).siblings('.unit_spn').attr('data-q',q).html(q);
      $(this).closest('.cart_sec').siblings('.customcb').find('.serv_radio').attr('data-q',q);

      let i = $(this).closest('.cart_sec').siblings('.customcb').find('.serv_radio').attr('data-id');
      let p = $(this).closest('.cart_sec').siblings('.customcb').find('.serv_radio').attr('data-p');

      updateCookie(i, q, p);

      calculate_ttl_price();
    });

    $(document).on('click','.minus_spn',function(){
      let q = $(this).siblings('.unit_spn').attr('data-q');

      let min_q = $(this).closest('.cart_sec').siblings('.customcb').find('.serv_radio').attr('data-min_q');

      if(min_q>=q)return false;

      q = parseInt(q)-1;
      if(q<=0){
        q=0;
        let i = $(this).closest('.cart_sec').siblings('.customcb').find('.serv_radio').attr('data-id');

        $(this).closest('.cart_sec').hide();
        $(this).closest('.cart_sec').siblings('.customcb').find('.serv_radio').attr('data-q',q).prop('checked',false);

        $(this).siblings('.unit_spn').attr('data-q',q).html(q);
        
        removeCookieItem(i);

        // return false;
        /*$(this).closest('.cart_sec').hide(); 
        $(this).closest('.cart_sec').siblings('.customcb').find('.serv_radio').prop('checked',false);*/
      }
      else{

        $(this).siblings('.unit_spn').attr('data-q',q).html(q);
        $(this).closest('.cart_sec').siblings('.customcb').find('.serv_radio').attr('data-q',q);

        let i = $(this).closest('.cart_sec').siblings('.customcb').find('.serv_radio').attr('data-id');
        let p = $(this).closest('.cart_sec').siblings('.customcb').find('.serv_radio').attr('data-p');
        updateCookie(i, q, p);
      }

      calculate_ttl_price();
    });

  });

  function calculate_ttl_price(){
    let tp = 0;
    let ttl_s = 0;

    // json_str = null;
    // document.cookie = 'services' + '=' + json_str + ';expires=-1;path=/';

    /*$('.serv_radio:checked').each(function(){
      let q = $(this).attr('data-q');
      let p = $(this).attr('data-p');
      let i = $(this).attr('data-id');

      tp+= parseFloat(q)*parseFloat(p);
      ttl_s= parseInt(ttl_s)+parseInt(q);

      // setCookie(i, q);
      
    });*/
  
    var created_p = getCookie('services');
    if(created_p!==undefined && created_p!='' && created_p!=null && created_p!='null'){
      prdct = JSON.parse(created_p);

      for(var i=0;i<prdct.length;i++){
        let q = prdct[i][1];
        let p = prdct[i][2];

        tp+= parseFloat(q)*parseFloat(p);
        ttl_s= parseInt(ttl_s)+parseInt(q);
      }
    }

    if($('#ttl_booking_s').val()>=ttl_s){
      $('.book_btn').prop('disabled',true);
    }
    else{
      $('.book_btn').prop('disabled',false);
    }

    $('#ttl_serv_spn').html(ttl_s+' Services');
    $('#ttl_p_spn').html(tp+' EUR');

    if(tp>0){
      $('#cart_sec_footer').show('slow');
    }
    else{
      $('#cart_sec_footer').hide('slow');
    }
  }

  function save_cart(){
    let f=0;

    var created_p = getCookie('services');
    if(created_p!==undefined && created_p!='' && created_p!=null && created_p!='null'){
      prdct = JSON.parse(created_p);

      for(var ci=0;ci<prdct.length;ci++){
        let i = prdct[ci][0];
        let q = prdct[ci][1];
        let p = prdct[ci][2];

        let str = '<input type="hidden" name="services[]" value="'+q+'~~'+i+'">';
        $('#ttl_s_frm').append(str);
        f=1;
      }
    }

    /*$('.serv_radio:checked').each(function(){
      
      let q = $(this).attr('data-q');
      let i = $(this).val();

      let str = '<input type="hidden" name="services[]" value="'+q+'~~'+i+'">';
      $('#ttl_s_frm').append(str);
      f=1;
    });*/

    if(f==1)
      $('#ttl_s_frm').submit();
  }

function setCookie(sid, q, p){ 
  
    var prdct = [];
    var arr = [sid, q, p];  //[m, t]
  
    var created_p = getCookie('services');

    if(created_p!==undefined && created_p!='' && created_p!=null && created_p!='null')
        prdct = JSON.parse(created_p);

     prdct.push(arr);

    var expires = new Date();
    expires.setTime(expires.getTime() + (1 * 24 * 60 * 60 * 1000));
    var json_str = JSON.stringify(prdct);

    document.cookie = 'services' + '=' + json_str + ';expires=' + expires.toUTCString()+';path=/';

}

function updateCookie(sid, q, p){
  var prdct = [];
    var arr = [sid, q, p];  //[m, t]
  
    var created_p = getCookie('services');

    if(created_p!==undefined && created_p!='' && created_p!=null && created_p!='null')
        prdct = JSON.parse(created_p);

    for(var i=0;i<prdct.length;i++){

       if(prdct[i][0]==sid){
            prdct[i][1]=q;
       }
    }  

     // prdct.push(arr);

    var expires = new Date();
    expires.setTime(expires.getTime() + (1 * 24 * 60 * 60 * 1000));
    var json_str = JSON.stringify(prdct);

    document.cookie = 'services' + '=' + json_str + ';expires=' + expires.toUTCString()+';path=/';
}

function removeCookieItem(i){
  var prdct = [];
    var created_p = getCookie('services');

    if(created_p!==undefined && created_p!='' && created_p!=null && created_p!='null')
        prdct = JSON.parse(created_p);

    var myNewArray = prdct.filter(function(item) { return item[0] != i })

    var expires = new Date();
    expires.setTime(expires.getTime() + (1 * 24 * 60 * 60 * 1000));
    var json_str = JSON.stringify(myNewArray);

    document.cookie = 'services' + '=' + json_str + ';expires=' + expires.toUTCString()+';path=/';
}

function getCookie(key) {
    var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
    return keyValue ? keyValue[2] : null;
}



  function show_des_detail(){

    $('#des_all_gender_chk').prop('checked',false);
    $('#des_men_chk').prop('checked',false);
    $('#des_women_chk').prop('checked',false);
    $('#des_kids_chk').prop('checked',false);
    $('.team_mem_lst_sec, .visual_lst_sec').html('');
    $('#team_mem_f_sec').hide();
    $('.salon_cate_sec').html('');
    $('#gen_note_txt').html('');    
    $('.des_salon_serv_for_sec,.sub_tem_fix_sec,.salon_cate_sec,.salon_note_sec,.team_mem_sec,.visual_sec').hide();
    $('.tbody').html('');
    $('.salon_cate_dt_sec,#copy_btn,#frm3').hide();

    /*if(sname!='')
      $('#tem_title').html(sname+' Template');
    else
      $('#tem_title').html('Location Template');*/


    // $('#modalajx').modal('show');
   set_url('d');

    $.ajax({
      url:"{{route('prof_ajax')}}",
      type:'post',
      data:{'act':'get_des_loc_detail', '_token' : '{{ csrf_token() }}','prof_id':$('#prof_id').val()},
      dataType:'json',
      success: function(r)
      {
        if(r.status=='SUCCESS')
        { 
          var salon = r.salon;
          var services = r.services;
          var team = r.team;
          var visual = r.visual;
          var categories = r.categories;
   
          if(salon.all_gender=='1')
            $('#des_serv_all_sec').show();
          else
            $('#des_serv_all_sec').hide();
          
          if(salon.men=='1')
            $('#des_serv_men_sec').show();
          else
            $('#des_serv_men_sec').hide();
          
          if(salon.women=='1')
            $('#des_serv_women_sec').show();
          else
            $('#des_serv_women_sec').hide();

          if(salon.kids=='1')
            $('#des_serv_kid_sec').show();
          else
            $('#des_serv_kid_sec').hide();
   
        var cate_str='<div class=""  style="justify-content: space-between;display: flex;flex-wrap:wrap">';
          $.each(categories,function(k,v){
            if(k==0)var cls='active';
            else var cls='';
            cate_str+='<div class="cate_sec mb-3 cate_sec_'+v.id+'" onclick="show_salon_cate_detail(\'d\', \''+v.id+'\' ,\''+v.name+'\',\'0\')" data-cate="'+v.name+'"><div class="cate_cards sub-temp-fixed-loc-card '+cls+'" id="cate_card_'+v.id+'">';
              console.log(v.image);
              if(v.image!='' && v.image!==null)
                cate_str+='<img src="{{asset("public/imgs/category/")}}/'+v.image+'" style="width:auto;max-width:100%;">';
              else
                cate_str+='<img src="{{asset("public/imgs/placeholder-img.jpg")}}" style="width:auto;max-width:100%;">';
   
              cate_str+='<span>'+v.name+'</span>';
   
              
            cate_str+='</div></div>';
   
          });
          cate_str+='</div>';
          show_salon_cate_detail('d', categories[0].id ,categories[0].name,'0');
         
         var team_str='';
          if(team!='' && team.length>0){
            team_str = create_team_sec(team);
            $('#team_mem_f_sec').show();
            
          }
          $('.team_mem_lst_sec').html(team_str);

          if(visual!='' && visual.length>0){
            var visual_str='';
            visual_str+="<div style='' class='row mb-3'>";
            $.each(visual,function(k,v){
              if(v.visual!='' && v.visual!==null){
                visual_str+="<div class=' col-6 col-sm-4 col-md-3 mb-3' id='vis_sec_"+v.id+"'>";
                visual_str+="<div class='' style='height: 100%;'>";
                
                  visual_str+='<img src="'+v.visual+'" style="max-width:100%;max-height: 100%;border-radius:8px;border: 1px solid #f1f1f1;">';
                  visual_str+="</div>";
                visual_str+="</div>";
              }
            });

            visual_str+="</div>";
            $('.visual_lst_sec').html(visual_str);
          }
          else{
            $('.visual_lst_sec').html(visual_str);
          }


          $('.salon_cate_sec').html(cate_str);

          if(salon.note!=''){
            var gen_note = salon.note;
            gen_note = gen_note.replace(/\n/g,"<br>");
          }
          else{
            var gen_note='';
          }

          $('#gen_note_txt').html(gen_note);
        
          $('.des_salon_serv_for_sec,.sub_tem_fix_sec,.salon_cate_sec,.salon_note_sec,.team_mem_sec,.visual_sec,#copy_btn').show();
          $('#copy_btn').val('{{$lang_kwords["copy-to-fixed-location"]["english"]}}');
        }
        if(r.status=='ERROR')
        {
          alert('Something went wrong. Please contact');
        }

        setTimeout(function(){
          $('#modalajx').modal('hide');
        },1000);
      },
      error:function(){
        setTimeout(function(){
          $('#modalajx').modal('hide');
        },2000);
        alert('Something went wrong. Please contact');
      }
    });
    // $('#template_id').val(sid);


   }

  function get_municiplaity(){
    var prov = $('#des_province').val();
    if(prov!=''){
      var pro_i = $('#des_province').find('option:selected').attr('data-i');
      all_pro_municipality(pro_i);
      $('#des_form_submit2,.add_mun_spn').show();
    }
    else{
      $('#des_form_submit2').hide();
    }
  }

  function all_pro_municipality(pro_i){
    if(pro_i!='' && pro_i!='0'){
      $('#des_municipality').val('');
      $('#des_municipality').find('option.pv').remove();

      $('#des_prov_spn').show();

      $.ajax({
        url:'{{route("municipality_list")}}',
        type:'post',
        data:{'prov':pro_i,'_token' : '{{ csrf_token() }}',},
        dataType:'json',
        success:function(r){
          $('#des_prov_spn').hide();
          if(r.status=='SUCCESS'){
            var prov = r.data;
            var str='';
            $.each(prov,function(k,v){
              str+='<option class="pv" data-i="'+v.i+'" value="'+v.name+'">'+v.name+'</option>';
            });

            $('#des_municipality').append(str);
          }
        },
        error:function(e){
          $('#des_prov_spn').hide();
        }
      });
    }
  }

  function show_pro_municipality(){
    $('#des_municipality').show();
  }
   
  
   function show_salon_cate_detail(temp_type, cateid, catename,f){
      
    $('.cate_cards').removeClass('active');
    $('#cate_card_'+cateid).addClass('active');
    // $('#modalajx').modal('show');
    $('#serv_frm_sec').hide();
    $.ajax({
      url:"{{route('prof_ajax')}}",
      type:'post',
      data:{'act':'get_salon_cate_detail','temp_type':temp_type,'cid':cateid, '_token' : '{{ csrf_token() }}','prof_id':$('#prof_id').val()},
      dataType:'json',
      success:function(r){
        
        if(r.status=='SUCCESS'){
          if(r.msg=='Y'){

            var created_p = getCookie('services');

            var prdct= new Array;
            if(created_p!==undefined && created_p!='' && created_p!=null && created_p!='null')
                prdct = JSON.parse(created_p);

            
            $('#serv_frm_sec').show();
            var service = r.service;
            var sub_service = r.sub_service;
            var str='';
            $.each(service,function(k,v){
              str+='<div class="category-table-row d-flex bg-light-primary mt-2" id="serv_sec_m_'+v.id+'">';
                str+='<div class="text-center fs-5 text-custom-primary p-1 w-28 border-end position-relative serv_border_spn">';
                // str+= '<span class="serv_border_spn position-relative"></span>';
                  str+= '<span class="f-18">'+v.service_name+'</span>';
                  str+='<div class="d-flex align-items-center">';
                  if(v.additional_info!='' && v.additional_info!==null && v.additional_info){
                    str+= '<i class="ri-information-line tooltip_spn1 tooltip_spn_1"></i><div class="tooltip"  style="margin-top:34px"><span class="tooltiptext">'+v.additional_info+'</span></div>';
                  }
                str+='</div></div>';
                str+='<div class="text-center f-18 text-custom-primary  w-28 border-end d-flex align-items-center justify-content-center">';
                  str+= v.duration;
                str+='</div>';
                str+='<div class="text-center f-18 text-custom-primary  w-28 border-end d-flex align-items-center justify-content-center"><div class="text-center">';

                let spr=v.price;

                if(v.price_type=='f'){
                
                  if(v.discount=='1'){
                     var dis_amt = parseFloat(v.price);
                     if(v.discount_type=='f'){
                        var dis_amt = parseFloat(v.price) - parseFloat(v.discount_amount);
                     }
                     else{
                        var d_amt = parseFloat(v.price) * (parseFloat(v.discount_amount)/100);
                        var dis_amt = parseFloat(v.price) - d_amt;
                     }
                     spr=dis_amt;
                     str+= '<span style="font-size:15px;text-decoration: line-through;">'+v.price+'</span> '+dis_amt+'EUR';
                  }
                  else
                    str+= v.price+' EUR';
                  
                }
                else{
                  
                    str+= 'Starting from '+v.price+' EUR';
                  
                }
                if(v.discount=='1'){
                 str+='<div class="d-flex align-items-center justify-content-center w-100"><span>{{$lang_kwords["discount"]["english"]}} ';   
                // str+='<br>';   
                 if(v.discount_type=='f'){
                  str+=v.discount_amount+'EUR';   
                 }
                 else{
                  str+= v.discount_amount+'%';   
                 }
                 str+='</span>';
                 if(v.discount_info!='' && v.discount_info!==null && v.discount_info){
                    str+= '<span class="px-2 pt-1"><i class="ri-information-line tooltip_spn1" style="font-size:19px"></i><div class="tooltip"><span class="tooltiptext">'+v.discount_info+'</span></div></span>';
                  }
                  str+='</div>';
                  if(v.discount_valid_from && v.discount_valid_to){
                     var dis_st_fr_ar = v.discount_valid_from.split('-');
                     var dis_st_tp_ar = v.discount_valid_to.split('-');
                     if(dis_st_fr_ar.length==3 && dis_st_tp_ar.length==3){
                        dis_st_fr = dis_st_fr_ar[2]+'-'+dis_st_fr_ar[1]+'-'+dis_st_fr_ar[0];
                        dis_st_tp = dis_st_tp_ar[2]+'-'+dis_st_tp_ar[1]+'-'+dis_st_tp_ar[0];

                        str+='<span style="font-size:15px">'+dis_st_fr+' - '+dis_st_tp+'</span>';
                     }
                  }
                }
                str+='</div></div>';  
                
                str+='<div class="p-1 w-15  d-flex align-items-center justify-content-center text-center">';
                  str+='<div class="d-flex justify-content-center align-items-center">';

                  
                  let sind = $.inArray(v.id, $.map(prdct, function(vls) { return parseInt(vls[0]); }));

                  let sq=0;
                  let min_q=0;
                  let inp_dib="";
                  let cart_sec_cls = 'style="display:none;"';
                  let cart_serv_chk='';
                  if (sind > -1) {
                      var csar = prdct[sind];
                      sq = csar[1];
                      cart_sec_cls='';
                      cart_serv_chk='checked';
                  }

                  if(parseInt(sq)>0){

                    @if(isset($edit) && $edit=='Y')
                      min_q=sq;
                      inp_dib="disabled";
                    @endif

                  }else{
                    sq=0;
                    cart_serv_chk='';
                    cart_sec_cls = 'style="display:none;"';
                  }

                    str+='<div class="customcb"><input type="checkbox" data-p="'+spr+'" class="serv_radio" name="service_'+v.id+'" id="service_'+v.id+'" data-id="'+v.id+'" value="'+v.id+'" data-min_q="'+min_q+'" '+inp_dib+' data-q="'+sq+'"  '+cart_serv_chk+'><label class="inner" for="service_'+v.id+'"></label></div> &nbsp;';
                    str+='<div class="cart_sec" '+cart_sec_cls+'>';
                      str+='<span class="minus_spn"><i class="ri-subtract-line"></i></span>';
                      str+='<span class="unit_spn" data-q="'+sq+'">'+sq+'</span>';
                      str+='<span class="plus_spn"><i class="ri-add-line"></i></span>';
                    str+='</div>';
                  str+='</div>';
                  /*str+= '<i class="ri-edit-box-line text-custom-primary me-2  cursor-pointer" onclick="edit_service(\''+v.id+'\')"></i>   <i class="ri-delete-bin-line text-danger  cursor-pointer" onclick="delete_service(\''+v.id+'\')"></i> <br> <button type="button" class="btn cs_btn gradient-btn" onclick="add_subservice_act(\''+v.id+'\')">+ {{$lang_kwords["sub-service"]["english"]}}</button>';*/
                str+='</div>';
              str+='</div>';
   
              if(sub_service!='' && sub_service.length>0){
                $.each(sub_service,function(k1,v1){
                  
                  var ssserv = v1[v.id];
                  if(typeof ssserv === 'undefined')return true;
                  // if(k1!=v.id)return true;
              
                  $.each(ssserv,function(k2,v2){
                    let cls="border-bottom";
                    if((k2+1) == ssserv.length){
                      cls = " border-bottom";
                    }
   
                    str+='<div class="category-table-row d-flex "  id="serv_sec_m_'+v2.id+'">';
                      str+='<div class="text-center w-28 border-end '+cls+' align-items-center  position-relative sserv_border_spn" style="padding-left:12px!important;font-weight:500;">';
                        str+= '<span class="f-18">'+v2.service_name+'</span>';

                        str+='<div class="d-flex align-items-center">';
                        if(v2.additional_info!='' && v2.additional_info!==null && v2.additional_info){
                          str+= '<i class="ri-information-line tooltip_spn1 tooltip_spn_1"></i><div class="tooltip" style="margin-top:34px"><span class="tooltiptext">'+v2.additional_info+'</span></div>';
                        }
                      str+='</div></div>';
                      str+='<div class="text-center f-18 w-28 border-end '+cls+' d-flex align-items-center justify-content-center">';
                        str+= v2.duration;
                      str+='</div>';
                      str+='<div class="text-center f-18 w-28 border-end '+cls+' d-flex align-items-center justify-content-center"><div>';

                      let spr=v2.price;
                      if(v2.price_type=='f'){
                        

                        if(v2.discount=='1'){
                           var dis_amt = parseFloat(v2.price);
                           if(v2.discount_type=='f'){
                              var dis_amt = parseFloat(v2.price) - parseFloat(v2.discount_amount);
                           }
                           else{
                              var d_amt = parseFloat(v2.price) * (parseFloat(v2.discount_amount)/100);
                              var dis_amt = parseFloat(v2.price) - d_amt;
                           }
                          spr=dis_amt;
                           str+= '<span style="font-size:15px;text-decoration: line-through;">'+v2.price+'</span> '+dis_amt+'EUR';
                        }
                        else
                          str+= v2.price+' EUR';
                        
                      }
                      else{
                        
                          str+= 'Starting from '+v2.price+' EUR';
                        
                      }
                      

                      if(v2.discount=='1'){
                       str+='<div class="d-flex align-items-center w-100"><span>{{$lang_kwords["discount"]["english"]}} ';   
                        
                      // str+='<br>';   
                       if(v2.discount_type=='f'){
                        str+= v2.discount_amount+'EUR';   
                       }
                       else{
                        str+= v2.discount_amount+'%';   
                       }
                       str+='</span>';

                       if(v2.discount_info!='' && v2.discount_info!==null && v2.discount_info){
                          str+= '<span class="px-2 pt-1"><i class="ri-information-line tooltip_spn1" style="font-size:19px"></i><div class="tooltip"><span class="tooltiptext">'+v2.discount_info+'</span></div></span>';
                        }
                        str+='</div>';
                        if(v2.discount_valid_from && v2.discount_valid_to){
                           var dis_st_fr_ar = v2.discount_valid_from.split('-');
                           var dis_st_tp_ar = v2.discount_valid_to.split('-');
                           if(dis_st_fr_ar.length==3 && dis_st_tp_ar.length==3){
                              dis_st_fr = dis_st_fr_ar[2]+'-'+dis_st_fr_ar[1]+'-'+dis_st_fr_ar[0];
                              dis_st_tp = dis_st_tp_ar[2]+'-'+dis_st_tp_ar[1]+'-'+dis_st_tp_ar[0];

                              str+='<span style="font-size:15px">'+dis_st_fr+' - '+dis_st_tp+'</span>';
                           }
                        }
                      }
                      str+='</div></div>';
                      
                      str+='<div class="p-1 w-15 d-flex align-items-center justify-content-center text-center border-bottom">';
                        str+='<div class="d-flex justify-content-center align-items-center">';

                        let sind = $.inArray(v2.id, $.map(prdct, function(vls) { return parseInt(vls[0]); }));

                        let sq=0;
                        let min_q=0;
                        let inp_dib="";
                        let cart_sec_cls = 'style="display:none;"';
                        let cart_serv_chk='';
                        if (sind > -1) {
                            var csar = prdct[sind];
                            sq = csar[1];
                            cart_sec_cls='';
                            cart_serv_chk='checked';
                        }

                        if(parseInt(sq)>0){
                          @if(isset($edit) && $edit=='Y')
                          min_q=sq;
                          inp_dib="disabled";
                          @endif

                        }else{
                          sq=0;
                          cart_serv_chk='';
                          cart_sec_cls = 'style="display:none;"';
                        }

                          str+='<div class="customcb"><input type="checkbox" data-p="'+spr+'" class="serv_radio" name="service_'+v2.id+'" id="service_'+v2.id+'" data-id="'+v2.id+'" value="'+v2.id+'" data-min_q="'+min_q+'" '+inp_dib+' data-q="'+sq+'" '+cart_serv_chk+'><label class="inner" for="service_'+v2.id+'"></label></div> &nbsp;';
                          str+='<div class="cart_sec" '+cart_sec_cls+'>';
                            str+='<span class="minus_spn"><i class="ri-subtract-line"></i></span>';
                            str+='<span class="unit_spn" data-q="'+sq+'">'+sq+'</span>';
                            str+='<span class="plus_spn"><i class="ri-add-line"></i></span>';
                          str+='</div>';
                        str+='</div>';
                      str+='</div>';
                    str+='</div>';
                  })
                })
              }
            });
            $('.tbody').html(str);
            $('.salon_cate_dt_sec').show();
            
          }
          else{
            var str='<tr><td colspan="4">Not Service Registered for selected Category</td></tr>';
            $('.tbody').html(str);
            $('.salon_cate_dt_sec').show();
          }
          $('.title1').html(catename);
          if(f!='0' && $('#serv_sec_m_'+f).length>0){
              $('html, body').animate({
                   scrollTop: $('#serv_sec_m_'+f).offset().top-50
               }, 200);
            }

            calculate_ttl_price();
        }
        else{
          alert('Something went wrong.');
        } 
        /*setTimeout(function(){
          $('#modalajx').modal('hide');
          console.log('1');
        },1000)*/
        $('#modalajx').modal('hide');
      },
      error:function(e){
        $('#modalajx').modal('hide');
        alert('Something went wrong.');
      }
    });
   
    // $('#temp_id').val(sid);
    $('#cate_id').val(cateid);
   
   }
   
   
   function show_fixed_loc_detail(){

    $('#all_gender_chk').prop('checked',false);
    $('#men_chk').prop('checked',false);
    $('#women_chk').prop('checked',false);
    $('#kids_chk').prop('checked',false);
    $('.team_mem_lst_sec, .visual_lst_sec').html('');
    $('#team_mem_f_sec').hide();
    $('.salon_cate_sec').html('');
    $('#gen_note_txt').html('');    
    $('.salon_serv_for_sec,.sub_tem_fix_sec,.salon_cate_sec,.salon_note_sec,.team_mem_sec,.visual_sec').hide();
    $('.tbody').html('');
    $('.salon_cate_dt_sec,#frm3').hide();

    $('.sub-temp-card').removeClass('active');
    // $('#sub-temp-card_'+sid).addClass('active');

    /*if(sname!='')
      $('#tem_title').html(sname+' Template');
    else
      $('#tem_title').html('Location Template');*/

    // $('#modalajx').modal('show');

    set_url('f');

    $.ajax({
      url:"{{route('prof_ajax')}}",
      type:'post',
      data:{'act':'get_fix_loc_detail','_token' : '{{ csrf_token() }}','prof_id':$('#prof_id').val()},
      dataType:'json',
      success: function(r)
      {
        // $('#modalajx').modal('hide');
        if(r.status=='SUCCESS')
        { 
          var salon = r.salon;
          var services = r.services;
          var team = r.team;
          var visual = r.visual;
          var categories = r.categories;
   
          if(salon.all_gender=='1')
            $('#serv_all_sec').show();
          else
            $('#serv_all_sec').hide();
          
          if(salon.men=='1')
            $('#serv_men_sec').show();
          else
            $('#serv_men_sec').hide();
          
          if(salon.women=='1')
            $('#serv_women_sec').show();
          else
            $('#serv_women_sec').hide();

          if(salon.kids=='1')
            $('#serv_kid_sec').show();
          else
            $('#serv_kid_sec').hide();
   
        var cate_str='<div class="" style="justify-content: space-between;display: flex;flex-wrap:wrap">';
          $.each(categories,function(k,v){
            if(k==0)var cls='active';
            else var cls='';
            cate_str+='<div class="cate_sec mb-3 cate_sec_'+v.id+'" onclick="show_salon_cate_detail(\'f\', \''+v.id+'\' ,\''+v.name+'\',\'0\')" data-cate="'+v.name+'"><div class="cate_cards sub-temp-fixed-loc-card '+cls+'" id="cate_card_'+v.id+'">';
              // console.log(v.image);

              cate_str+='<div class="cate_img_sec">';
              
                if(v.image!='' && v.image!==null)
                  cate_str+='<img src="{{asset("public/imgs/category/")}}/'+v.image+'" style="width:auto;max-width:100%;">';
                else
                  cate_str+='<img src="{{asset("public/imgs/placeholder-img.jpg")}}" style="width:auto;max-width:100%;">';

              cate_str+='</div>';
   
              cate_str+='<span>'+v.name+'</span>';
   
              
            cate_str+='</div></div>';
   
          });
          cate_str+='</div>';

          show_salon_cate_detail('f', categories[0].id ,categories[0].name,'0');
          
           var team_str='';
           if(team!='' && team.length>0){
            team_str = create_team_sec(team);
            $('#team_mem_f_sec').show();
            
          } 
          $('.team_mem_lst_sec').html(team_str);

          if(visual!='' && visual.length>0){
            var visual_str='';
            visual_str+="<div style='' class='row mb-3'>";
            $.each(visual,function(k,v){
              if(v.visual!='' && v.visual!==null){
                visual_str+="<div class=' col-6 col-sm-4 col-md-3 mb-3' id='vis_sec_"+v.id+"'>";
                visual_str+="<div class=' p-2' style='height: 100%;'>";
                  
                  visual_str+='<img src="'+v.visual+'" style="max-width:100%;max-height: 100%;border-radius:8px;border: 1px solid #f1f1f1;">';
                  visual_str+="</div>";
                visual_str+="</div>";
              }
            });

            visual_str+="</div>";
            $('.visual_lst_sec').html(visual_str);
          } 

         
   
          $('.salon_cate_sec').html(cate_str);
          if(salon.note!=''){
            var gen_note = salon.note;
            gen_note = gen_note.replace(/\n/g,"<br>");
          }
          else{
            var gen_note='';
          }

          $('#gen_note_txt').html(gen_note);
        
          $('.salon_serv_for_sec,.sub_tem_fix_sec,.salon_cate_sec,.salon_note_sec,.team_mem_sec,.visual_sec, #copy_btn').show();
          /*$('html, body').animate({
               scrollTop: $('.sub_tem_fix_sec').offset().top-30
           }, 500);*/

            $('#copy_btn').val('{{$lang_kwords["copy-to-desire-location"]["english"]}}');
        }
        if(r.status=='ERROR')
        {
          // $('#modalajx').modal('hide');
          alert('Something went wrong. Please contact');
        }

        /*setTimeout(function(){
          $('#modalajx').modal('hide');
        },1000);*/
         $('#modalajx').modal('hide');
      },
      error:function(){
        alert('Something wennt wrong');
        location.reload();
      }
    });
    // $('#template_id').val(sid);
   }
 
   
   function show_fix_loc_sec(){
    $('.fix_loc_sec').show();
    $('.dis_loc_sec').hide();
    $('._fix_loc').addClass('active');
    $('._des_loc').removeClass('active');

    $('#des_all_gender_chk').prop('checked',false);
    $('#des_men_chk').prop('checked',false);
    $('#des_women_chk').prop('checked',false);
    $('#des_kids_chk').prop('checked',false);
    $('.team_mem_lst_sec').html('');
    $('.salon_cate_sec').html('');
    $('#gen_note_txt').html('');    
    $('.des_salon_serv_for_sec,.sub_tem_fix_sec,.salon_cate_sec,.salon_note_sec,.team_mem_sec,.visual_sec').hide();
    $('.tbody').html('');
    $('.salon_cate_dt_sec').hide();
    $('#template_type').val('f');
    $('#fix_info_reg_sec').show();
    $('#des_info_reg_sec').hide();

    show_fixed_loc_detail();
   }
   
   function show_des_loc_sec(){
    $('.fix_loc_sec').hide();
    $('.dis_loc_sec').show();
    $('._fix_loc').removeClass('active');
    $('._des_loc').addClass('active');

    $('#all_gender_chk').prop('checked',false);
    $('#men_chk').prop('checked',false);
    $('#women_chk').prop('checked',false);
    $('#kids_chk').prop('checked',false);
    $('.team_mem_lst_sec').html('');
    $('.salon_cate_sec').html('');
    $('#gen_note_txt').html('');    
    $('.salon_serv_for_sec,.sub_tem_fix_sec,.salon_cate_sec,.salon_note_sec,.team_mem_sec,.visual_sec').hide();
    $('.tbody').html('');
    $('.salon_cate_dt_sec').hide();
    $('#template_type').val('d');
    $('#fix_info_reg_sec').hide();
    $('#des_info_reg_sec').show();

    show_des_detail();
   }
   
  
function set_url(t){
    const url = new URL(window.location.href);
    url.searchParams.set('t', t);
    window.history.replaceState(null, null, url);
}  

  function show_hide_des_mun_ul(el){
    console.log('aaaa');
    var el1 = el.siblings('.des_mun_ul');
    console.log(el1);
    el1.toggle();
  }

  function create_team_sec(team){
    var team_str="<div style='' class='tem_m_sec_main'>";
    $.each(team,function(k,v){

      if(!v.bio)
         v.bio='';

      team_str+="<div class='tem_m_sec' id='tm_sec_"+v.id+"'>";
        
        team_str+="<div class='d-flex' style='margin-bottom: 20px;'>";
          team_str+="<div class='mb-2' style='margin-right:15px;'>";
            if(v.image!='' && v.image!==null)
              team_str+='<img src="{{asset("public/imgs/team/")}}/'+v.image+'" style="border: 1px solid #b1abab;width:60px;height: 60px;border-radius:35px">';
            else
              team_str+='<img src="{{asset("public/imgs/placeholder-img.jpg")}}" style="border: 1px solid #b1abab;height: 60px;width:60px;border-radius:35px">';
          team_str+="</div>";

          team_str+="<div class='mb-2'>";
            team_str+="<p class='tm_name_p'>"+v.member+"</p>";
            team_str+="<p class='tm_bio_p'>"+v.bio+"</p>";
          team_str+="</div>";

        team_str+="</div>";


        team_str+="<div class='team_mem_cate_serv'>";
          team_str+='<ul>';

          if(v.all_cate=='all' && v.all_serv=='all'){
           team_str+='<li class="tmctli">{{$lang_kwords["all-categories-and-services"]["english"]}}</li>'; 
          }
          /*else if(v.all_cate=='all' && v.all_serv.length<=0){
            team_str+='<li class="tmctli">All Categories</li>'; 
          }*/
          else{

              var tcate = v.category;
              var tserv = v.service;

              if(tcate.length>0){
                 $.each(tcate,function(ck,cv){
                    // team_str+='<li class="licls">'+cv+'</li>';
                    team_str+='<li class="tmctli">'+cv.name;
                    if(v.all_serv!='all' && tserv[cv.i]){
                      team_str+='&nbsp; <select id="">';

                      team_str+='<option style="display:none"></option>';
                      $.each(tserv[cv.i],function(sk,sv){
                        team_str+='<option>'+sv+'</option>';
                      })
                      
                      team_str+='</select>';
                    }
                  team_str+='</li>';
                 })
              }
            team_str+='</ul>';

            /*team_str+='<ul>';
              var tserv = v.service;
              if(tserv.length>0){
                 $.each(tserv,function(sk,sv){
                    team_str+='<li class="licls">'+sv+'</li>';
                 })
              }
            team_str+='</ul>';*/
          }
        team_str+="</div>";

        
        team_str+="</div>";
    });

    team_str+="</div>";

    return team_str;
  }


function show_h_temp_service(){
  let car = new Array;
  $('.temp_ct:checked').each(function(){
      car.push($(this).val());
  });

  $('.temp_serv').each(function(){

    if(jQuery.inArray($(this).attr('data-c'), car) != -1) {
        $(this).closest('label').show();
    } else {
        $(this).prop('checked',false);
        $(this).closest('label').hide();
        $('.temp_serv_all').prop('checked',false);
    } 
  })
}

$(document).on('change','.temp_serv',function(){
  check_all_tmserv();
});

function check_all_tmserv(){

  let car = new Array;
  $('.temp_ct:checked').each(function(){
      car.push($(this).val());
  });

  if(car.length<=0){
    $('.temp_serv_all').prop('checked',false);
    return;
  }

  let sc=1;
   $('.temp_serv').each(function(){

      console.log($(this).closest('label').is(":visible"));

      if($(this).closest('label').is(":visible")){
        if($(this).prop('checked')===false){
          $('.temp_serv_all').prop('checked',false);
          sc=0;
        }
      }
   });

   if(sc==1){
    $('.temp_serv_all').prop('checked',true);
   }
}

function check_all_tmcate(){
  let cc=1;
  $('.temp_ct').each(function(){
      if($(this).prop('checked')===false){
         $('.temp_ct_all').prop('checked',false);
         cc=0;
       }
   });

   if(cc==1){
    $('.temp_ct_all').prop('checked',true);
   }
}

$(document).on('change','.temp_ct',function(){
  show_h_temp_service();
  check_all_tmcate();
  check_all_tmserv();
});



function close_add_pr_des(){
  $('.add_province_sec,#des_form_submit2').hide();
}

function show_preview(img, type){
   
      if(type=='pdf'){
        $('#doc_prev_pdf').attr('src',img).show();
        $('#doc_prev_img').hide().attr('src','');
      }else{
        $('#doc_prev_img').attr('src',img).show();
        $('#doc_prev_pdf').hide().attr('src','');
      }
      
      $('#myModalImg').modal('show');
}
function closeModal(modl){
 $('#'+modl).modal('hide'); 
}


$('#salon_province').on('change',function(){
  let i = $(this).find('option:selected').attr('data-i')
  get_municiplaity1(i);

});

var tr=0;
function get_municiplaity1(i){

  $('#salon_municipality').val('');
  $('#salon_municipality').find('option.pv').remove();

  if(!i){
    return false;
  }

  tr++;

  $('#prov_spn').show();

  $.ajax({
    url:'{{route("municipality_list")}}',
    type:'post',
    data:{'prov':i,'_token' : '{{ csrf_token() }}',},
    dataType:'json',
    success:function(r){
      $('#prov_spn').hide();
      if(r.status=='SUCCESS'){
        var prov = r.data;
        var str='';
        $.each(prov,function(k,v){
          str+='<option class="pv" data-i="'+v.i+'" value="'+v.name+'">'+v.name+'</option>';
        });

        $('#salon_municipality').append(str);
      }
    },
    error:function(e){
      $('#prov_spn').hide();
      if(tr<3){
        get_municiplaity1(i);
      }
    }
  });
}

</script>
</body>
</html>