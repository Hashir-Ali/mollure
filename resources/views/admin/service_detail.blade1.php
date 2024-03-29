@include('salon/header')
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
}
.tooltip_spn, .tooltip_spn1, .tooltip_spn_0{cursor: pointer;    font-size: 16px;}
.tooltip_spn_1{    float: right;margin-top: -28px;}
.tooltip_spn:hover + .tooltip .tooltiptext, .tooltip_spn1:hover + .tooltip .tooltiptext,  .tooltip_spn_0:hover + .tooltip .tooltiptext {
  visibility: visible;
}
.des_mun_ul{position: absolute;background-color: #fff;border: 1px solid #dbd7d7;list-style: none;padding: 8px 0px;display: none;margin-top: 6px;}
.des_mun_ul li{background-color: #edeaea;margin-bottom: 4px;padding: 2px 7px;}
.img1{max-width: 100%}
.reg_doc_img{max-width: 150px;max-height: 150px;}
.team_mem_cate_serv{margin-bottom: 18px;}
.team_mem_cate_serv ul{margin-bottom: 1px;list-style: none;font-size: 13px;color: #484747;padding-left: 0;}
.licls{display: inline-block;}
.licls + .licls::before{display: inline-block;content: '|';margin-right: 3px;margin-left: 3px;}
.salon_cate_sec .cate_sec{/*width: 12%;min-width: 150px;*/height: 115px;width: 125px;}
.salon_cate_sec .cate_sec img{max-height: 56px;margin: auto;display: block;}
.salon_cate_sec .cate_sec .cate_cards{position: relative;}
.salon_cate_sec .cate_sec .cate_cards span{position: absolute;bottom: 10px;width: 90%;text-align: center;    font-size: 11px;word-break: break-all;}
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
.tmctli{padding: 1px 4px;background: #3bb0b7;color: #fff;display: inline-block;margin-right: 4px;}
.tmctli select{width: 24px;color: #fff;background: #3bb0b7;border: 0;}
.swal-text,.swal-button--cancel{color:#111;text-align: center;} .swal-button--catch{background-color: #009688;}.swal-button--catch:not([disabled]):hover{    background-color: #026a61;}
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
<!--Professional Profile Start-->
<div class="container mb-4 info_form">
   <div class="accordion">
      <div class="accordion-item border-0 rounded">
         <input type="hidden" id="csrf-token" value="{{ Session::token() }}" />
         <input type="hidden" id="prof_id" value="{{ $prof_id }}" />
         <h2 class="accordion-header" id="user-info-heading">
            <button class="block-heading accordion-button p-2 text-white rounded fs-5 @if($prof->status=='approve') collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#user-info-body" aria-expanded="true" aria-controls="user-info-body">
            {{$lang_kwords['user_info']['english']}}
            </button>
         </h2>
         
         <!-- <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3">Professional Profile</div> -->
         <div id="user-info-body" class="accordion-collapse collapse @if($prof->status!='approve') show @endif border mt-2" aria-labelledby="user-info-heading" data-bs-parent="#user-info">
            <div class="accordion-body px-0">
               <div class="bg-white px-2 ps-sm-4 pe-sm-4">
                  <div class="text-end"><span onclick="edit_frm()" class="cursor-pointer"><i class="ri-edit-box-line text-custom-primary icon-textarea "></i>{{$lang_kwords['edit']['english']}}</span></div>
                  <form action="{{route('admin_prof_update')}}" id="frm" class="info_form" method="post" enctype="multipart/form-data">
                     <input type="hidden" name="_token" value="{{ Session::token() }}" />
                     <input type="hidden" name="act" value="profile">
                     <input type="hidden" name="prof_id" value="{{$prof_id}}">

                     @if($errors->any())
                     <div class="alert alert-danger">
                        <ul>
                           @foreach ($errors->all() as $error)
                           <li>{{ $error }}</li>
                           @endforeach
                        </ul>
                     </div>
                     @endif
                     @if(session('success'))
                     <div class="alert alert-success fw-bold text-center" role="alert">
                        {{$lang_kwords['your-detail-has-been-updated']['english']}}
                     </div>
                     @endif
                     
                     <div class="d-flex mb-4">
                        <!-- <div class="form-number d-flex justify-content-center me-4" style="line-height: 24px;">1</div>
                        <span class="form-number-label me-2">{{$lang_kwords['user_info']['english']}}</span>
                        <div class="form-header-line flex-grow-1"></div> -->
                     </div>
                     <div class="form-block mb-5">
                        <div class="form-row mb-4" style="flex-wrap: wrap;">
                           <div class="label-container">
                              <label class="fs-5 text-nowrap d-block">{{$lang_kwords['legal-name']['english']}} <i class="ri-information-fill tooltip_spn1 tooltip_spn_0"></i><div class="tooltip"><span class="tooltiptext"><small>{{$lang_kwords['name-with-a-legal-form']['english']}}</small></div></span></label>
                           </div>
                           <div class="field-container"><input type="text" class="form-control frm_inp" disabled name="legal_name" id="legal_name" value="{{ $prof->legal_name }}" /></div>
                           <!-- <small>{{$lang_kwords['name-with-a-legal-form']['english']}}</small> -->
                        </div>
                        <div class="form-row mb-4">
                           <div class="label-container"><label class="fs-5 text-nowrap d-block">{{$lang_kwords['coc-number']['english']}}</label></div>
                           <div class="field-container"><input type="text" class="form-control frm_inp" disabled name="coc" id="coc" value="{{ $prof->coc }}" /></div>
                        </div>
                        <div class="form-row mb-4">
                           <div class="label-container"><label class="fs-5 text-nowrap d-block">{{$lang_kwords['vat-number']['english']}}</label></div>
                           <div class="field-container"><input type="text" class="form-control frm_inp" disabled name="vat" id="vat" value="{{ $prof->vat }}" /></div>
                        </div>
                     </div>
                     <div class="d-flex mb-4">
                        <!-- <div class="form-number d-flex justify-content-center me-4 mt-1" style="line-height: 24px;">2</div> -->
                        <div class="w-100">
                           <span class="form-number-label me-2">{{$lang_kwords['address']['english']}}</span>
                           <i class="ri-information-fill tooltip_spn1"></i>
                          <div class="tooltip">
                            <span class="tooltiptext" style="min-width: fit-content;">
                              <small>{{$lang_kwords['linked-to-coc-and-vat-number']['english']}}</small>
                            </span>
                          </div>
                           <!-- <small>{{$lang_kwords['linked-to-coc-and-vat-number']['english']}}</small> -->
                        </div>
                        <!-- <div class="form-header-line flex-grow-1"></div> -->
                     </div>
                     <div class="form-block">
                        <div class="form-row mb-4">
                           <div class="label-container"><label class="fs-5 text-nowrap d-block">{{$lang_kwords['street']['english']}}</label></div>
                           <div class="field-container"><input type="text" class="form-control frm_inp" disabled name="street" id="street" value="{{ $prof->prof_address[0]->street }}" /></div>
                        </div>
                        <div class="form-row mb-4">
                           <div class="label-container"><label class="fs-5 text-nowrap d-block">{{$lang_kwords['number']['english']}}</label></div>
                           <div class="field-container"><input type="text" class="form-control frm_inp" disabled name="number" id="number" value="{{ $prof->prof_address[0]->number }}" /></div>
                        </div>
                        <div class="form-row mb-4">
                           <div class="label-container"><label class="fs-5 text-nowrap d-block">{{$lang_kwords['postal-code']['english']}}</label></div>
                           <div class="field-container"><input type="text" class="form-control frm_inp" disabled name="postal" id="postal" value="{{ $prof->prof_address[0]->postal }}" /></div>
                        </div>
                        <div class="form-row mb-4">
                           <div class="label-container"><label class="fs-5 text-nowrap d-block">{{$lang_kwords['province']['english']}}</label></div>
                           <div class="field-container">
                              <select class="form-select bg-light frm_inp" disabled name="province" id="province">
                                 <option value='' data-i=''>{{$lang_kwords['select']['english']}}</option>
                                 @foreach($province as $k=>$v)
                                  <option @if( $prof->prof_address[0]->province_id == $v->id) selected @endif value="{{$v->name}}" data-i="{{$v->id}}">{{$v->name}}</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                        <div class="form-row mb-4">
                           <div class="label-container"><label class="fs-5 text-nowrap d-block">{{$lang_kwords['municipality']['english']}}</label></div>
                           <div class="field-container">
                              <select class="form-select bg-light frm_inp" disabled name="municipality" id="municipality">
                                 <option value='' data-i=''>{{$lang_kwords['select']['english']}}</option>
                                 @foreach($municipality as $k=>$v)
                                  <option @if( $prof->prof_address[0]->municipality_id == $v->id) selected @endif value="{{$v->name}}" data-i="{{$v->id}}">{{$v->name}}</option>
                                  @endforeach
                              </select>
                           </div>
                        </div>
                        <div class="mb-4">
                           <div class=" justify-content-between">
                            <div class="row">
                              <div class="col-md-10 col-sm-8 col-12">
                                 <label class="fs-5 text-wrap form-label ">{{$lang_kwords['professional-must-provide-documentation-of-registration-in-chamber-of-commerce']['english']}}
                                    <div style="display:inline-block;width:20px">
                                      <i class="ri-information-fill tooltip_spn1"></i>
                                        <div class="tooltip" style="width:200px;left:-30px">
                                          <span class="tooltiptext">
                                            <small>{{$lang_kwords['registration-doc-tooltip']['english']}}</small>
                                          </span>
                                        </div>
                                    </div>
                                 </label>
                              </div>
                              <div class="col-md-2 col-sm-3 col-12">
                                 
                                 <label
                                    for="doc-reg-coc"
                                    class="form-control d-flex align-items-center justify-content-between w-lg-25 w-sm-100 bg-light frm_inp">
                                 <span id="reg_spn_img">Upload Files</span>
                                 <i class="ri-upload-2-line"></i>
                                 </label>
                                 <input id="doc-reg-coc" name="registration_doc[]" type="file" class="d-none frm_inp" accept="image/png,image/jpeg,application/pdf" multiple disabled/>
                                 
                              </div>
                              <div class="col-md-12 col-sm-12 col-12 d-flex">
                                 @if(count($prof->registration_docs)>0)
                                    @foreach($prof->registration_docs as $reg_docs) 
                                    
                                       @php
                                          $img_d = $reg_docs->doc;
                                          $v = @get_headers($reg_docs->doc);
                                          if(preg_match("|200|", $v[0])){

                                            $type = pathinfo($reg_docs->doc, PATHINFO_EXTENSION);

                                            if($type=='pdf')
                                                $img_d = URL::to("/").'/public/imgs/docs/pdf_logo.jpg';
                                          }
                                            
                                       @endphp
                                    <div style="position: relative;padding: 10px;border: 1px solid #dfdfdf;margin-right: 10px;" id="reg_doc_sec_{{$reg_docs->id}}">
                                       <p style="position: absolute;right: 1px;top: -13px;color: red;font-size: 29px;font-weight: bold;"><label class="cursor-pointer" onclick="remove_reg_doc('{{$reg_docs->id}}')"> &times; </label></p>
                                       <img src="{{$img_d}}" onclick="show_preview('{{$reg_docs->doc}}','{{$type}}')" class="reg_doc_img"> &nbsp;
                                    </div>
                                     
                                    @endforeach
                                 @endif
                              </div>
                            </div>
                           </div>
                        </div>
                        <div class="form-row mb-4">
                           <div class="label-container"><label class="fs-5 text-nowrap d-block">{{$lang_kwords['contact-person']['english']}}</label></div>
                           <div class="field-container d-flex">
                              <div class="flex-fill me-4">
                                 <input type="text" placeholder="First Name" class="form-control frm_inp" disabled name="contact_person_first_name" id="contact_person_first_name" value="{{ $prof->prof_address[0]->contact_person_first_name }}" />
                              </div>
                              <div class="flex-fill">
                                 <input type="text" placeholder="Last Name" class="form-control frm_inp" disabled name="contact_person_last_name" id="contact_person_last_name" value="{{ $prof->prof_address[0]->contact_person_last_name }}" />
                              </div>
                           </div>
                        </div>
                        <div class="form-row mb-4">
                           <div class="label-container"><label class="fs-5 text-nowrap d-block">{{$lang_kwords['contact-number']['english']}}</label></div>
                           <div class="field-container"><input type="text" class="form-control frm_inp" disabled name="contact_number" id="contact_number" value="{{ $prof->prof_address[0]->contact_number }}" /></div>
                        </div>
                        <div class="mb-4">
                           <label class="fs-5 text-wrap d-block mb-3 form-label"
                              >{{$lang_kwords['professional-must-provide-examples-of-past-work-that-satisfy-mollures-quality-and-professional-standards']['english']}}</label
                              >
                           <input type="text" class="form-control frm_inp" placeholder="{{$lang_kwords['examples-of-past-work_1']['english']}}" disabled name="insta_link" id="insta_link" value="{{ $prof->prof_address[0]->insta_link }}" />
                           <input type="text" class="form-control frm_inp mt-2" placeholder="{{$lang_kwords['examples-of-past-work_2']['english']}}" disabled name="facebook_link" id="facebook_link" value="{{ $prof->prof_address[0]->facebook_link }}" />
                           <input type="text" class="form-control frm_inp mt-2" placeholder="{{$lang_kwords['examples-of-past-work_3']['english']}}" disabled name="youtube_link" id="youtube_link" value="{{ $prof->prof_address[0]->youtube_link }}" />
                        </div>
                        <div class="form-row mb-4">
                           <div class="label-container"><label class="fs-5 text-nowrap d-block">{{$lang_kwords['passwords']['english']}}</label></div>
                           <div class="field-container"><input type="password" class="form-control frm_inp" disabled name="password" id="password" value="" /></div>
                        </div>
                        <div class="form-row mb-4">
                           <div class="label-container"><label class="fs-5 text-nowrap d-block">{{$lang_kwords['repeat-password']['english']}}</label></div>
                           <div class="field-container"><input type="password" class="form-control frm_inp" disabled name="conf_password" id="conf_password" value="" /></div>
                        </div>
                        <div class="form-row mb-4">
                           <div class="label-container"><label class="fs-5 text-nowrap d-block">{{$lang_kwords['gender']['english']}}</label></div>
                           <div class="field-container d-flex align-items-center flex-wrap">
                              <div class="form-check me-5">
                                 <input class="form-check-input frm_inp" type="radio" disabled name="gender" id="male"  value="male" <?=$c = ($prof->prof_address[0]->gender=='male')?'checked':'';?>/>
                                 <label class="form-check-label" for="male"> {{$lang_kwords['male']['english']}} </label>
                              </div>
                              <div class="form-check me-5">
                                 <input class="form-check-input frm_inp" type="radio" disabled name="gender" id="female"  value="female" <?=$c = ($prof->prof_address[0]->gender=='female')?'checked':'';?>/>
                                 <label class="form-check-label" for="female"> {{$lang_kwords['female']['english']}} </label>
                              </div>
                              <div class="form-check me-5">
                                 <input class="form-check-input frm_inp" type="radio" disabled name="gender" id="neutral"  value="neutral" <?=$c = ($prof->prof_address[0]->gender=='neutral')?'checked':'';?>/>
                                 <label class="form-check-label" for="neutral"> {{$lang_kwords['gender-neutral']['english']}} </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input me-2 frm_inp" type="radio" disabled name="gender" id="not_prefer"  value="not_prefer" <?=$c = ($prof->prof_address[0]->gender=='not_prefer')?'checked':'';?>/>
                                 <label class="form-check-label" for="not_prefer"> {{$lang_kwords['i-prefer-not-to-answer']['english']}} </label>
                              </div>
                           </div>
                        </div>
                        <!-- <div class="form-check d-flex align-items-center mb-4">
                           <input class="form-check-input me-3" type="checkbox" value="" id="flexCheckDefault" />
                           <label class="form-check-label fs-5 form-label" for="flexCheckDefault"> Accept our terms and conditions </label>
                           </div> -->
                        <div class="d-flex justify-content-center">
                           <button class="btn custom-btn-primary fs-5" type="button" name="form_submit" id="form_submit" style="display:none" value="Update" onclick="form_validate()">{{$lang_kwords['submit']['english']}}</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Professional Profile End-->
@if($prof->status=='approve')
<!--Professional Template Start-->
<div class="container mb-4">
   <div class="accordion">
      <div class="accordion-item">
         <h2 class="accordion-header" id="professional-template-heading">
            <button class="block-heading accordion-button p-2 text-white rounded fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#professional-template-body" aria-expanded="true" aria-controls="professional-template-body">
            {{$lang_kwords['professional-template']['english']}}
            </button>
         </h2>
         <!-- <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3">Professional Template</div> -->
         <div id="professional-template-body" class="accordion-collapse collapse show" aria-labelledby="professional-template-heading" data-bs-parent="#professional-template">
            <div class="accordion-body px-0">
               <div class="bg-white rounded">
                  <div class="d-flex border mb-3">
                     <div class="w-50 border-end p-2">
                        <div class="loc_type_card _fix_loc active text-custom-dark fw-custom-bold fs-5 text-center p-2 cursor-pointer" onclick="show_fix_loc_sec()">{{$lang_kwords['fixed-location']['english']}}</div>
                     </div>
                     <div class="w-50  p-2">
                        <div class="loc_type_card _des_loc text-custom-dark fw-custom-bold fs-5 text-center p-2 cursor-pointer" onclick="show_des_loc_sec()">{{$lang_kwords['desired-location']['english']}}</div>
                     </div>
                  </div>
                  <div class="fix_loc_sec">
                    <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3 mx-0 me-sm-2 ms-sm-2">
                      {{$lang_kwords['profile-pic-name-and-bio']['english']}} 
                    </div>
                     <form action="{{route('fixed_location_update')}}" id="frm1" class="fix_loc_form" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ Session::token() }}" />
                        <input type="hidden" name="prof_id" value="{{ $prof_id }}" />
                        <div class="row px-0 pe-sm-4 ps-sm-4  sub-temp-fixed-loc mb-4">
                           <div class="col-12 mb-2 mb-lg-0 col-lg-3 pe-lg-4">
                              <input type="file" class="frm_inp1 d-none" disabled name="fixed_pic" id="fixed_pic"  accept="image/png,image/jpeg"/>
                              <label
                                 for="fixed_pic"
                                 class="h-100 bg-custom-light d-flex align-items-center justify-content-center"
                                 >
                              @if($prof->fixed_pic!='')
                              <img src="{{asset('public/imgs/template/'.$prof->fixed_pic)}}" style="width:90px" class="img1 fx_img1">
                              @else
                              <i class="ri-upload-2-line fx_iu" style="font-size: 64px; color: #929292"></i>
                              <img src="" style="display:none" class="img1 fx_img1">
                              @endif
                              </label>
                           </div>
                           <div class="col-12 col-lg-9">
                              <div class="form-icon icon-right-align mb-2">
                                 <input class="form-control form-control-icon frm_inp1" type="text" placeholder="{{$lang_kwords['professional-name-salon-name']['english']}}"  disabled name="fixed_name" id="fixed_name" value="{{$prof->fixed_name}}"/>
                                 <i class="ri-edit-box-line text-custom-primary fs-5 cursor-pointer" onclick="edit_fix_bio_frm()"></i>
                              </div>
                              <div class="form-icon icon-right-align">
                                 <textarea class="form-control form-control-icon frm_inp1" type="text" placeholder="Bio" disabled name="fixed_bio" id="fixed_bio">{{$prof->fixed_bio}}</textarea>
                                 <!-- <i class="ri-edit-box-line text-custom-primary icon-textarea fs-5"></i> -->
                              </div>
                           </div>
                        </div>
                        <div class="d-flex justify-content-center mb-5">
                           <button class="btn custom-btn-primary fs-5" type="button" name="form_submit1" id="form_submit1" style="display:none" value="Save" onclick="form_validate1()">{{$lang_kwords['save']['english']}}</button>
                        </div>
                     </form>
                     <div class="p-4 salon_frm_sec" @if($fixed_loc_salon && count($fixed_loc_salon)>0) style="display:none" @endif >
                      <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3">
                      {{$lang_kwords['fixed-location']['english']}}: {{$lang_kwords['add-address']['english']}}
                    </div>
                        <div class="overflow-scroll-x ">
                           <form action="{{route('fixed_location_update')}}" id="frm2" class="fix_loc_form" method="post" enctype="multipart/form-data" >
                              <input type="hidden" name="_token" value="{{ Session::token() }}" />
                              <input type="hidden" name="type" value="f" />
                              <input type="hidden" name="act" id="salon_act" value="add" />
                              <input type="hidden" name="sid" id="sid" value="" />
                              <input type="hidden" name="prof_id" value="{{ $prof_id }}" />
                              <table class="sub-temp-table">
                                 <tr>
                                    <th>{{$lang_kwords['salon-name']['english']}}</th>
                                    <th>{{$lang_kwords['street']['english']}}</th>
                                    <th>{{$lang_kwords['number']['english']}}</th>
                                    <th>{{$lang_kwords['postal-code']['english']}}</th>
                                    <th>{{$lang_kwords['province']['english']}}</th>
                                    <th>{{$lang_kwords['municipality']['english']}} <span class="rotate spinner" style="display:none" id="prov_spn"></span></th>
                                 </tr>
                                 <tr>
                                    <td>
                                       <textarea type="text" class="form-control" name="salon_name" id="salon_name"></textarea>
                                    </td>
                                    <td>
                                       <textarea type="text" class="form-control" name="street" id="salon_street"></textarea>
                                    </td>
                                    <td>
                                       <textarea type="text" class="form-control" name="number" id="salon_number"></textarea>
                                    </td>
                                    <td>
                                       <textarea type="text" class="form-control" name="postal_code" id="salon_postal_code"></textarea>
                                    </td>
                                    <td>
                                       <select class="form-select" name="province" id="salon_province">
                                          <option value=''>{{$lang_kwords['select']['english']}}</option>
                                          @foreach($province as $mk=>$mv)
                                            <option value='{{$mv->name}}' data-i="{{$mv->id}}">{{$mv->name}}</option>
                                          @endforeach
                                       </select>
                                    </td>
                                    <td>
                                       <select class="form-select" name="municipality" id="salon_municipality">
                                          <option value=''>{{$lang_kwords['select']['english']}}</option>
                                       </select>
                                    </td>
                                 </tr>
                              </table>
                           </form>
                        </div>
                     </div>
                     <div class="d-flex justify-content-end mb-5 px-4">
                        <button class="btn custom-btn-primary fs-5" type="button" name="form_submit2" id="form_submit2"value="Save" onclick="form_validate2()" @if($fixed_loc_salon && count($fixed_loc_salon)>0) style="display:none" @endif >{{$lang_kwords['save']['english']}}</button>
                     </div>
                     <div class="row px-4 mb-5">
                        @if($fixed_loc_salon && count($fixed_loc_salon)>0)
                          <input type="hidden" value="Y" id="is_salon">
                        @foreach($fixed_loc_salon as $k=>$salon)
                        <input type="hidden" id="salon_id_inp" value="{{$salon->id}}" data-name = "{{$salon->salon_name}}">
                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                           <div class="sub-temp-card d-flex justify-content-between p-4 rounded" id="sub-temp-card_{{$salon->id}}">
                              <i class="ri-map-pin-2-fill location-icon"></i>
                              <div class="d-flex flex-column text-white fs-6 z-index-1">
                                 <label class="mb-2">{{$lang_kwords['salon-name']['english']}}: {{$salon->salon_name}}</label>
                                 <label class="mb-2">{{$lang_kwords['street']['english']}}: {{$salon->street}}</label>
                                 <label class="mb-2">{{$lang_kwords['postal-code']['english']}}: {{$salon->number}}</label>
                                 <label class="mb-2">{{$lang_kwords['number']['english']}}: {{$salon->postal_code}}</label>
                                 <label class="mb-2">{{$lang_kwords['municipality']['english']}}: {{$salon->municipality}}</label>
                                 <label class="mb-2">{{$lang_kwords['province']['english']}}: {{$salon->province}}</label>
                              </div>
                              <div class="d-flex flex-column justify-content-between align-items-end z-index-1">
                                 <div class="d-flex text-white fs-4">
                                    <i class="ri-check-fill me-2 cursor-pointer" ></i>
                                    <i class="ri-edit-box-line cursor-pointer" onclick="edit_salon('{{$salon->id}}')"></i>
                                 </div>
                                 <i class="ri-delete-bin-line fs-4 text-danger cursor-pointer" onclick="delete_salon('{{$salon->id}}')"></i>
                              </div>
                           </div>
                        </div>
                        @endforeach
                        @else
                        <input type="hidden" value="N" id="is_salon">
                        @endif
                     </div>
                     <div class="px-1 ps-sm-4 pe-sm-4 pb-4">
                        <div class="py-4 rounded salon_serv_for_sec" style="display:none">
                          <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3">
                            {{$lang_kwords['services-for']['english']}}
                          </div>
                           <!-- <h5 style="color: #3bb0b7" class="mb-3">SERVICES FOR</h5> -->
                           <div class="d-flex flex-wrap px-5 mt-2">
                              <div class="form-check d-flex align-items-center me-5">
                                 <input class="form-check-input me-3 serv_for_fx_inp" type="checkbox" name="all_gender_chk" value=""  id="all_gender_chk" />
                                 <label class="form-check-label fs-5" for="all_gender_chk"> {{$lang_kwords['all-genders']['english']}} </label>
                              </div>
                              <div class="form-check d-flex align-items-center me-5">
                                 <input class="form-check-input me-3 serv_for_fx_inp" type="checkbox" name="men_chk" value=""  id="men_chk" />
                                 <label class="form-check-label fs-5" for="men_chk"> {{$lang_kwords['male-only']['english']}} </label>
                              </div>
                              <div class="form-check d-flex align-items-center me-5">
                                 <input class="form-check-input me-3 serv_for_fx_inp" type="checkbox" name="women_chk" value=""  id="women_chk" />
                                 <label class="form-check-label fs-5" for="women_chk"> {{$lang_kwords['female-only']['english']}} </label>
                              </div>
                              <div class="form-check d-flex align-items-center me-5">
                                 <input class="form-check-input me-3 serv_for_fx_inp" type="checkbox" name="kids_chk" value=""  id="kids_chk" />
                                 <label class="form-check-label fs-5" for="kids_chk"> {{$lang_kwords['kids-only']['english']}} </label>
                              </div>
                           </div>
                           <div class="d-flex justify-content-end mb-0 px-4">
                              <button class="btn custom-btn-primary fs-5" id="serv_for_btn" type="button" value="Save" onclick="save_service_for()" style="display:none">{{$lang_kwords['save']['english']}}</button>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- Desire location -->
                  <div class="dis_loc_sec" style="display:none">
                    <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3 mx-2 des_title2">
                      {{$lang_kwords['profile-pic-name-and-bio']['english']}}
                    </div>
                     <form action="" id="des_frm1" class="des_loc_form" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ Session::token() }}" />
                        <input type="hidden" name="prof_id" value="{{ $prof_id }}" />
                        <div class="row px-4 sub-temp-fixed-loc mb-4">
                           <div class="col-12 mb-2 mb-lg-0 col-lg-3 pe-lg-4">
                              <input type="file" class="des_frm_inp1 d-none" disabled name="desire_pic" id="desire_pic" accept="image/png,image/jpeg"/>
                              <label
                                 for="desire_pic"
                                 class="h-100 bg-custom-light d-flex align-items-center justify-content-center"
                                 >
                              @if($prof->desire_pic!='')
                              <img src="{{asset('public/imgs/template/'.$prof->desire_pic)}}" style="width:90px" class="img1 ds_img1">
                              @else
                              <i class="ri-upload-2-line ds_iu" style="font-size: 64px; color: #929292"></i>
                              <img src="" style="display:none" class="img1 ds_img1">
                              @endif
                              </label>
                           </div>
                           <div class="col-12 col-lg-9">
                              <div class="form-icon icon-right-align mb-2">
                                 <input class="form-control form-control-icon des_frm_inp1" type="text" placeholder="{{$lang_kwords['professional-name-salon-name']['english']}}"  disabled name="desire_name" id="desire_name" value="{{$prof->desire_name}}"/>
                                 <i class="ri-edit-box-line text-custom-primary fs-5 cursor-pointer" onclick="edit_des_bio_frm()"></i>
                              </div>
                              <div class="form-icon icon-right-align">
                                 <textarea class="form-control form-control-icon des_frm_inp1" type="text" placeholder="Bio" disabled name="desire_bio" id="desire_bio">{{$prof->desire_bio}}</textarea>
                                 <!-- <i class="ri-edit-box-line text-custom-primary icon-textarea fs-5"></i> -->
                              </div>
                           </div>
                        </div>
                        <div class="d-flex justify-content-center mb-5">
                           <button class="btn custom-btn-primary fs-5" type="button" name="des_form_submit1" id="des_form_submit1" style="display:none" value="Save" onclick="des_form_validate1()">{{$lang_kwords['save']['english']}}</button>
                        </div>
                     </form>
                     <div class="px-4 py-2 mb-4 des_loc_type_sec" style="background-color: #f5f3f4;">
                        <div class="px-5 py-4 rounded " style="background-color: #f5f3f4;">
                           <div class="d-flex flex-wrap">
                              <div class="form-check d-flex align-items-center mx-auto">
                                 <input class="form-check-input me-2 des_loc_type" type="radio" name="des_serv_lc" value="everywhere"  id="des_serv_lc_e" />
                                 <label class="form-check-label fs-5" for="des_serv_lc_e"> {{$lang_kwords['everywhere']['english']}} in Netherland</label>
                              </div>
                              <div class="form-check d-flex align-items-center mx-auto">
                                 <input class="form-check-input me-2 des_loc_type" type="radio" name="des_serv_lc" value="specific"  id="des_serv_lc_s" />
                                 <label class="form-check-label fs-5" for="des_serv_lc_s"> {{$lang_kwords['specific-provinces']['english']}} </label>
                              </div>
                              <div class="form-check d-flex align-items-center mx-auto">
                                 <button type="button" id="des_add_prov_btn" style="display:none" class="btn cs_btn gradient-btn" onclick="add_province_act()">+ Add {{$lang_kwords['province']['english']}}</button>
                              </div>
                           </div>
                        </div>
                     

                        <div class="add_province_sec" style="display:none">
                          <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-2 mx-2">
                            Add {{$lang_kwords['province']['english']}}
                          </div>
                          <div class="px-4 pb-4 pt-1">
                              <div class="text-end  mb-2">
                                <span class="bg-light" onclick="close_add_pr_des()" style=" cursor: pointer;border-radius: 50px;font-weight: bold;color: #000;padding: 0px 9px;font-size: 20px;">&times;</span>
                              </div>
                              <form action="" id="des_frm2" class="" method="post" enctype="multipart/form-data">
                                  <input type="hidden" name="_token" value="{{ Session::token() }}" />
                                  <input type="hidden" name="type" value="d" />
                                  <input type="hidden" name="act" id="" value="add" />
                                  <input type="hidden" name="lid" id="lid" value="" />
                                  <div class="row">
                                    <div class="col-md-4">
                                      <select class="form-select" name="des_province" id="des_province" onchange="get_municiplaity()">
                                          <option value="">{{$lang_kwords['select']['english']}} {{$lang_kwords['province']['english']}}</option>
                                          <!-- <option value="Test Province">Test Province</option> -->
                                          @foreach($province as $k=>$v)
                                            <option data-i="{{$v->id}}" value="{{$v->name}}">{{$v->name}}</option>
                                          @endforeach
                                       </select>
                                    </div>
                                    <div class="col-md-4">
                                      <select class="form-select" name="des_municipality" id="des_municipality" style="display:none" onchange="add_pro_municipality()">
                                          <option value="">{{$lang_kwords['select']['english']}} {{$lang_kwords['municipality']['english']}}</option>
                                       </select>
                                    </div>
                                    <div class="col-md-4 text-end">
                                      <span class="cursor-pointer add_mun_spn" style="display:none" onclick="show_pro_municipality()">+ Add {{$lang_kwords['municipality']['english']}}</span>
                                    </div>
                                  </div>
                              </form>
                          </div>
                          <div class="px-4 py-2">
                            <div class="sel_mun_list d-flex" style="display:none">
                            </div>
                          </div>
                        </div>
                       <div class="d-flex justify-content-center mb-2 px-4">
                          <button class="btn custom-btn-primary fs-5" style="display:none" type="button" name="des_form_submit2" id="des_form_submit2"value="Save" onclick="des_form_validate2()">{{$lang_kwords['save']['english']}}</button>
                       </div>

                        <div class="alert alert-success py-1 w-100 text-center" id="spn_des_frm2" style="display:none"><b>Updated</b></div>
                     </div>
                     <div class="row px-4 mb-5" id="des_specific_prov_sec">
                        @if($des_loc_salon && count($des_loc_salon)>0)
                        <h5 class="text-custom-primary">Selected Provinces and Municipality</h5>
                        <div class="d-flex flex-wrap">
                        @foreach($des_loc_salon as $k=>$des_loc)
                        <div class="d-flex align-items-center rounded border me-2  mb-2 des_loc_main_sec des_loc_main_sec_{{$des_loc->id}}">
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
                              @if($des_loc->desire_location_type=='specific')
                              <div class="flex-column block-heading px-1 border-end"><i class="ri-edit-box-line icon-textarea fs-4 cursor-pointer text-white" onclick="edit_des_location('{{$des_loc->id}}')"></i></div>
                              @endif
                              <div class="flex-column block-heading px-1"><i class="ri-delete-bin-line fs-4 text-danger cursor-pointer" onclick="delete_des_location('{{$des_loc->id}}')"></i></div>
                           </div>
                        </div>
                        @endforeach
                        </div>
                        @endif
                     </div>
                     <div class="px-1 ps-sm-4 pe-sm-4 pb-4">
                        <div class="py-4 rounded des_salon_serv_for_sec" style="display:none">
                           <!-- <h5 style="color: #3bb0b7" class="mb-3">SERVICES FOR</h5> -->
                           <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3">
                            {{$lang_kwords['services-for']['english']}}
                          </div>
                           <div class="d-flex flex-wrap  px-5 mt-2">
                              <div class="form-check d-flex align-items-center me-5">
                                 <input class="form-check-input me-3 serv_for_des_inp" type="checkbox" name="des_all_gender_chk" value=""  id="des_all_gender_chk" />
                                 <label class="form-check-label fs-5" for="des_all_gender_chk"> {{$lang_kwords['all-genders']['english']}} </label>
                              </div>
                              <div class="form-check d-flex align-items-center me-5">
                                 <input class="form-check-input me-3 serv_for_des_inp" type="checkbox" name="des_men_chk" value=""  id="des_men_chk" />
                                 <label class="form-check-label fs-5" for="des_men_chk"> {{$lang_kwords['male-only']['english']}} </label>
                              </div>
                              <div class="form-check d-flex align-items-center me-5">
                                 <input class="form-check-input me-3 serv_for_des_inp" type="checkbox" name="des_women_chk" value=""  id="des_women_chk" />
                                 <label class="form-check-label fs-5" for="des_women_chk"> {{$lang_kwords['female-only']['english']}} </label>
                              </div>
                              <div class="form-check d-flex align-items-center me-5">
                                 <input class="form-check-input me-3 serv_for_des_inp" type="checkbox" name="des_kids_chk" value=""  id="des_kids_chk" />
                                 <label class="form-check-label fs-5" for="des_kids_chk"> {{$lang_kwords['kids-only']['english']}} </label>
                              </div>
                           </div>
                           <div class="d-flex justify-content-end mb-0 px-4">
                              <button class="btn custom-btn-primary fs-5" id="des_serv_for_btn" type="button" value="Save" onclick="save_des_service_for()"  style="display:none">{{$lang_kwords['save']['english']}}</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Desire location  -->


                  <!--Subtemplate Fixed Location Start-->
<div class="container mb-4 sub_tem_fix_sec" style="display:none">
   <div class="accordion" id="subtemplate-fixed-location">
      <div class="accordion-item">
         <!-- <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3">Subtemplate Fixed Location</div> -->
         <h2 class="accordion-header" id="subtemplate-fixed-location-heading">
            <button class="block-heading accordion-button p-2 text-white rounded fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#subtemplate-fixed-location-body" aria-expanded="true" aria-controls="subtemplate-fixed-location-body" >
            {{$lang_kwords['category']['english']}}
            </button>
         </h2>
         <div id="subtemplate-fixed-location-body" class="accordion-collapse collapse show" aria-labelledby="subtemplate-fixed-location-heading" data-bs-parent="#subtemplate-fixed-location">
            <div class="accordion-body px-0">
               <div class="bg-white p-2 rounded salon_cate_sec" style="display:none">
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
<div class="container mb-4 salon_cate_dt_sec" style="display:none">
   <div class="accordion" id="category">
      <div class="accordion-item">
         <!-- <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3 title1">Category</div> -->
         <h2 class="accordion-header" id="category-heading">
            <button class="text-center block-heading accordion-button p-2 text-white rounded fs-5 title1" type="button" data-bs-toggle="collapse" data-bs-target="#category-body" aria-expanded="true" aria-controls="category-body">
            {{$lang_kwords['category']['english']}}
            </button>
         </h2>
         <div id="category-body" class="accordion-collapse collapse show" aria-labelledby="category-heading" data-bs-parent="#category">
            <div class="accordion-body px-0">
               <div class="bg-white p-4 rounded">
                  
                  <div class="overflow-scroll" id="serv_frm_sec">
                     <div class="category-table mb-4" style="min-width: 800px;">
                        <div class="category-table-row d-flex">
                           <div class="heading py-3 w-28 border-end">{{$lang_kwords['service-name']['english']}}</div>
                           <div class="heading py-3 w-28 border-end">{{$lang_kwords['duration']['english']}}</div>
                           <div class="heading py-3 w-28 border-end">{{$lang_kwords['price']['english']}}</div>
                           <div class="heading py-3 w-15">{{$lang_kwords['action']['english']}}</div>
                        </div>
                        <div class="tbody">
                        </div>
                     </div>
                  </div>
                  
                  <div class="row custom-category-cont px-2 pb-4 my-4" id="add_serv_frm" style="background-color: #f7f7f7;display:none;">
                     <div class="col-12 col-md-12 col-lg-12 text-end">
                        <span class="fs-4 cursor-pointer" onclick="close_service_form('0')">&times;</span>
                     </div>
                     <input type="hidden" id="cate_id">
                     <input type="hidden" id="temp_id">
                     <input type="hidden" id="prof_id">
                     <input type="hidden" id="serv_id">
                     <input type="hidden" id="serv_act" value="add">
                     <input type="hidden" id="edit_serv_i" value="">
                     <input type="hidden" id="serve_type" value="main">
                     <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <label class="h5 mb-3 pb-3 border-bottom w-100 text-center">{{$lang_kwords['service-name']['english']}}</label>
                        <textarea class="w-100 mb-2 h-100px form-control" id="serv_name_inp"></textarea>
                        <div class="text-decoration-underline text-custom-primary mb-2">+ {{$lang_kwords['additional-info']['english']}}</div>
                        <textarea class="w-100 h-150px form-control" id="serv_add_info"></textarea>
                     </div>
                     <div class="col-12 col-md-6 col-lg-3 mb-3">
                        <label class="h5 mb-3 pb-3 border-bottom w-100 text-center">{{$lang_kwords['duration']['english']}}</label>
                        <div class="d-flex justify-content-center">
                           <select class="me-2" id="duration_start_hr">
                            <option value=""></option>
                              <option value="1h">1h</option>
                              <option value="2h">2h</option>
                              <option value="3h">3h</option>
                              <option value="4h">4h</option>
                              <option value="5h">5h</option>
                           </select>
                           <span class="me-2">:</span>
                           <select class="me-2" id="duration_start_min">
                            <option value=""></option>
                              <option value="5m">5m</option>
                              <option value="10m">10m</option>
                              <option value="15m">15m</option>
                              <option value="20m">20m</option>
                              <option value="25m">25m</option>
                              <option value="30m">30m</option>
                              <option value="35m">35m</option>
                              <option value="40m">40m</option>
                              <option value="45m">45m</option>
                              <option value="50m">50m</option>
                           </select>
                           <span class="me-2">-</span>
                           <select class="me-2" id="duration_end_hr">
                            <option value=""></option>
                              <option value="1h">1h</option>
                              <option value="2h">2h</option>
                              <option value="3h">3h</option>
                              <option value="4h">4h</option>
                              <option value="5h">5h</option>
                           </select>
                           <span class="me-2">:</span>
                           <select id="duration_end_min">
                            <option value=""></option>
                              <option value="5m">5m</option>
                              <option value="10m">10m</option>
                              <option value="15m">15m</option>
                              <option value="20m">20m</option>
                              <option value="25m">25m</option>
                              <option value="30m">30m</option>
                              <option value="35m">35m</option>
                              <option value="40m">40m</option>
                              <option value="45m">45m</option>
                              <option value="50m">50m</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-12 col-md-6 col-lg-5">
                        <label class="h5 mb-3 pb-3 border-bottom w-100 text-center">{{$lang_kwords['price']['english']}}</label>
                        <div class="d-flex mb-2">
                           <div class="form-check me-5">
                              <input class="form-check-input price_type_inp" type="radio" name="price_type"  checked value="f" id="fixed-price" />
                              <label class="form-check-label" for="fixed-price"> {{$lang_kwords['select-fixed-price']['english']}} </label>
                           </div>
                           <div id="serv_p_typ1"><input type="text" class="w-80px"  id="serv_p_fix"/></div>
                        </div>
                        <div class="d-flex mb-2">
                           <div class="form-check me-5">
                              <input class="form-check-input price_type_inp" type="radio" name="price_type"  value="s" id="starting-price" />
                              <label class="form-check-label" for="starting-price"> {{$lang_kwords['select-starting-price']['english']}} </label>
                           </div>
                           <div id="serv_p_typ2" style="display:none;"><input type="text" class="w-80px" id="serv_p_st_fr"/></div>
                        </div>
                        <div class="form-check d-flex align-items-center me-5 mb-2">
                           <input class="form-check-input me-3" type="checkbox" value="" id="is_discount" />
                           <label class="form-check-label fs-5 text-custom-primary" for="is_discount">
                           {{$lang_kwords['discount']['english']}}
                           </label>
                        </div>
                        <div class="form-check mb-2 discount_sec"  style="display:none">
                           <input class="form-check-input discount_inp" type="radio" name="discount_type" checked value="f" id="discount_type" />
                           <div class="d-flex flex-column">
                              <label class="form-check-label" for="discount_type"> {{$lang_kwords['select-fixed-discount']['english']}} </label>
                              <div class="fixed-disc-cont d-flex align-items-center px-2 py-1" id="serv_d_typ1">
                                 <label class="me-2"><small>{{$lang_kwords['amount']['english']}}:</small></label>
                                 <input type="text" class="w-60px form-ontrol me-2" id="serv_d_fix"/>
                                 <label class="text-nowrap me-2"><small>{{$lang_kwords['valid-from']['english']}}:</small></label>
                                 <input type="date" class="me-2" id="serv_d_fx_fr_dt"/> <span class="me-2">-</span> <input type="date" id="serv_d_fx_to_dt"/>
                              </div>
                           </div>
                        </div>
                        <div class="form-check discount_sec" style="display:none">
                           <input class="form-check-input discount_inp" type="radio" name="discount_type" value="p" id="discount_typep" />
                           <div class="d-flex flex-column">
                              <label class="form-check-label" for="discount_typep"> {{$lang_kwords['select-percent-discount']['english']}} </label>
                              <div class="fixed-disc-cont d-flex align-items-center px-2 py-1 mb-2"  id="serv_d_typ2" style="display:none!important">
                                 <label class="me-2"><small>{{$lang_kwords['percent']['english']}}:</small></label>
                                 <input type="text" class="w-60px form-ontrol me-2"  id="serv_d_per"/>
                                 <label class="text-nowrap me-2"><small>{{$lang_kwords['valid-from']['english']}}:</small></label>
                                 <input type="date" class="me-2"  id="serv_d_pr_fr_dt"/> <span class="me-2">-</span> <input type="date" id="serv_d_pr_to_dt"/>
                              </div>
                              <div class="text-decoration-underline text-custom-primary mb-1">+ {{$lang_kwords['additional-info']['english']}}</div>
                              <textarea id="serv_p_add_info"></textarea>
                           </div>
                        </div>
                     </div>
                     <div class="d-flex justify-content-center">
                     <button class="btn custom-btn-primary fs-5" type="button" id="serv_add_btn" onclick="save_service()">{{$lang_kwords['save']['english']}}</button>
                  </div>
                  </div>
                  <div class="d-flex justify-content-end my-4">
                     <button class="btn gradient-btn me-2" type="button" onclick="add_serv_act()">+ {{$lang_kwords['service']['english']}}</button>
                     <!-- <button class="btn gradient-btn me-2">+ SUB SERVICE</button> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Category End-->
<!--General Note Start-->
<div class="container general-note-container mb-4 salon_note_sec"  style="display:none">
   <div class="accordion" id="general-note">
      <div class="accordion-item">
         <!-- <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3">General Note</div> -->
         <h2 class="accordion-header" id="general-note-heading">
            <button class="block-heading accordion-button p-2 text-white rounded fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#general-note-body" aria-expanded="true" aria-controls="general-note-body">
            {{$lang_kwords['general-note']['english']}}
            </button>
         </h2>
         <div id="general-note-body" class="accordion-collapse collapse show" aria-labelledby="general-note-heading" data-bs-parent="#general-note">
            <div class="accordion-body  px-0">
               <div class="bg-white px-2 py-4 ps-sm-4 pe-sm-4 rounded">
                  <div class="form-icon icon-right-align mb-4">
                     <textarea class="form-control form-control-icon" readonly="true" type="text" id="gen_note_txt"></textarea>
                     <i class="ri-edit-box-line text-custom-primary icon-textarea fs-4 cursor-pointer" onclick="enable_gen_note()"></i>
                  </div>
                  <div class="d-flex justify-content-center">
                     <button class="btn custom-btn-primary fs-5" style="display:none" id="gen_not_btn" type="button"  onclick="save_gen_note()">{{$lang_kwords['save']['english']}}</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--General Note End-->
<!--Team Members Start-->
<div class="container general-note-container mb-4 team_mem_sec" style="display:none">
   <div class="accordion" id="team-members">
      <div class="accordion-item">
         <!-- <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3">Team Members</div> -->
         <h2 class="accordion-header" id="team-members-heading">
            <button class="block-heading accordion-button p-2 text-white rounded fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#team-members-body" aria-expanded="true" aria-controls="team-members-body">
            {{$lang_kwords['team-members']['english']}}
            </button>
         </h2>
         <div id="team-members-body" class="accordion-collapse collapse show" aria-labelledby="team-members-heading" data-bs-parent="#team-members">
            <div class="accordion-body px-0">
               <div class="col-12 col-md-12 col-lg-12 text-end">
                   <button class="btn gradient-btn" style="width:190px;line-height:1" onclick="enable_team_frm()">+ {{$lang_kwords['team-members']['english']}}</button>
                </div>
               <div class="bg-white px-2 py-4 ps-sm-4 pe-sm-4 rounded">

                  <form id="frm3" style="display:none" class="bg-light pb-3">
                     <div class="px-2 text-end mb-2">
                      <span class="fs-4 cursor-pointer" onclick="close_team_form()">×</span>
                    </div>
                     <input type="hidden" name="_token" value="{{ Session::token() }}" />
                     <input type="hidden" name="tm_i" id="tm_i" value="" />
                     <input type="hidden" name="tm_act" id="tm_act" value="add" />
                     <input type="hidden" name="prof_id" value="{{$prof_id}}" />
                     <div class="row px-2 ps-sm-4 pe-sm-4 sub-temp-fixed-loc mb-4">
                        <div class="col-12 col-md-6 col-lg-3 pe-3 pe-md-4 mb-md-2 mb-2">
                           <input type="file" id="team_mem_img" name='team_mem_img' class="d-none" accept="image/png,image/jpeg"/>
                           <label
                              for="team_mem_img"
                              class="h-100 bg-custom-light d-flex align-items-center justify-content-center"
                              >
                           <i class="ri-upload-2-line tm_iu" style="font-size: 64px; color: #929292"></i>
                           <img src="" style="display:none" class="img1 tm_img1">
                           </label>
                        </div>
                        <div class="col-12 col-md-6 col-lg-9 mb-md-2 mb-2">
                           <div class="form-icon icon-right-align mb-2">
                              <input class="form-control form-control-icon" id="team_member_name" name="team_member_name" type="text" placeholder="{{$lang_kwords['team_member_name']['english']}}" />
                              <!-- <i class="ri-edit-box-line text-custom-primary fs-5"></i> -->
                           </div>
                           <div class="form-icon icon-right-align">
                              <textarea class="form-control form-control-icon" id="team_member_bio" name="team_member_bio" type="text" placeholder="{{$lang_kwords['team_member_bio']['english']}}"></textarea>
                              <!-- <i class="ri-edit-box-line text-custom-primary icon-textarea fs-5"></i> -->
                           </div>
                           <div class="mt-3" id="team_c_sec_mn">
                              <p class="fw-bold mb-0">{{$lang_kwords['select-category']['english']}}</p>
                              <div class="" id="team_cate_sec">

                              </div>
                           </div>
                           <div class="mt-3" id="team_s_sec_mn" style="display:none">
                              <p class="fw-bold mb-0">{{$lang_kwords['select']['english']}} Service</p>
                              <div class="" id="team_serv_sec">

                              </div>
                           </div>
                        </div>
                        
                     </div>
                     <div class="d-flex justify-content-center">
                        <button class="btn custom-btn-primary fs-5" id="team_mem_btn" type="button" onclick="save_team_member()">{{$lang_kwords['save']['english']}}</button>
                     </div>
                  </form>
               </div>
               <div class="bg-white p-4 rounded">
                  <div class="team_mem_lst_sec">
                  </div>
                  <div id="team_mem_f_sec" style="display:none">
                    <div class="row">
                      <label class="p-0">{{$lang_kwords['is_team_member_feature']['english']}} &nbsp;
                        <input type="checkbox" style="vertical-align: middle;width:16px;height:16px;" value="Y" id="team_mem_f" <?=$c=($prof->team_mem_f=='Y')?'checked':'';?> ></label>
                    </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Team Members End-->
<!--Visual Start-->
<div class="container general-note-container mb-5 visual_sec" style="display:none">
   <div class="accordion" id="visual">
      <div class="accordion-item">
         <!-- <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3">Visual</div> -->
         <h2 class="accordion-header" id="visual-heading">
            <button class="block-heading accordion-button p-2 text-white rounded fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#visual-body" aria-expanded="true" aria-controls="visual-body">
            {{$lang_kwords['visual']['english']}}
            </button>
         </h2>
         <div id="visual-body" class="accordion-collapse collapse show" aria-labelledby="visual-heading" data-bs-parent="#visual">
            <div class="accordion-body px-0">
               <div class="bg-white px-2 py-4 ps-sm-4 pe-sm-4 rounded">
                  <form id="frm4">
                     <input type="hidden" name="_token" value="{{ Session::token() }}" />
                     <input type="hidden" value="link" name="visual_type" id="visual_type">
                     <input type="hidden" value="{{$prof_id}}" name="prof_id">
                     <div class="row px-2 ps-sm-4 pe-sm-4 mb-5">
                        <div class="col-md-12 col-lg-9 mb-md-0 mb-2 pe-4 d-flex flex-column">
                           <input class="form-control mb-2 insta_link_sec" type="text" id="visual_link" name="visual_link" placeholder="Copy images from instagram and paste link here" style="display:none!important"/>
                           <input type="file" id="visual_img" name='visual_img[]' multiple class="d-none" accept="image/png,image/jpeg"/>
                           <label
                              for="visual_img"
                              class="border-custom-dark flex-grow-1 rounded py-5 bg-custom-light d-flex flex-column align-items-center justify-content-center  ur_img_sec" data-t="h" style="display:none!important" id="visual_img_lbl">
                           <i class="ri-upload-2-line" style="font-size: 64px; color: #929292"></i>
                           <span id="vis_img_sct">{{$lang_kwords['choose-one-or-multiple-images']['english']}}</span>
                           </label>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="text-end">
                             <!--  <div class="cursor-pointer visual_spn_link visual_spn p-2 text-custom-primary fs-5 btn-text text-center" onclick="show_insta_link_sec()">Add instagram image links</div>
                              <div class="border"></div> -->
                              <!-- <div class="cursor-pointer visual_spn_img visual_spn p-2 fs-5 text-center btn-text" onclick="show_ur_img_sec()">+ Upload your own images</div> -->
                              <button type="button" class="btn gradient-btn" style="width:190px;line-height:1" onclick="show_ur_img_sec()">+ {{$lang_kwords['images']['english']}}</button>
                           </div>
                        </div>
                     </div>
                     <div class="d-flex justify-content-center">
                        <button class="btn custom-btn-primary fs-5" id="submit_btn_visual" type="button" onclick="save_visual()" style="display:none!important">{{$lang_kwords['save']['english']}}</button>
                     </div>
                  </form>
               </div>

               <div class="bg-white px-1 py-4 ps-sm-4 pe-sm-4 rounded border-top">
                  <div><p class="text-end"><span class="cursor-pointer del_vis_spn" onclick="delete_visuals()"><i class="ri-delete-bin-line text-danger cursor-pointer" style="vertical-align: bottom;"></i> <b id="del_vis_txt">{{$lang_kwords['delete-selected']['english']}}</b></span></p></div>
                  <div class="visual_lst_sec">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Visual End-->

                  <div class="container general-note-container mb-5 text-center">
                    <input type="button" value='{{$lang_kwords["copy-to-desire-location"]["english"]}}' class="btn btn-primary rounded-pill" id="copy_btn" onclick="copy_desire()">
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Professional Template End-->


<div class="container mb-5">
  <div class="row" id="fix_info_reg_sec">
    <div class="col-md-12 text-center">
      @if($prof->fixed_info=='2' || $prof->fixed_info=='')
        <input type="button" class="btn gradient-btn me-2 fix_reg_btn" value="{{$lang_kwords['profile-register-button']['english']}}" onclick="info_verify('f')" style="padding: 10px!important;width: auto;min-width: 300px;"> 
      @elseif($prof->fixed_info=='0')
        <span class="inf_msg_spn alert alert-success">Your Fixed Location details are under process to review.</span>
      @endif
    </div>
  </div>
  <div class="row" id="des_info_reg_sec" style="display:none">
    <div class="col-md-12 text-center">
      @if($prof->desire_info=='2'  || $prof->desire_info=='')
        <input type="button" class="btn gradient-btn me-2 des_reg_btn" value="{{$lang_kwords['profile-register-button']['english']}}" onclick="info_verify('d')" style="padding: 10px!important;width: auto;min-width: 300px;"> 
      @elseif($prof->desire_info=='0')
        <span class="inf_msg_spn alert alert-success">Your Desire Location details are under process to review.</span>
      @endif
    </div>
  </div>
</div>

@endif


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

    if($('#template_type').val()=='d'){
      show_des_loc_sec();
    }
    else{
      show_fixed_loc_detail();
    }
    
    $('.des_loc_type').on('change',function(){
      $('#des_form_submit2').hide();
      if($('.des_loc_type:checked').val()=='everywhere'){
         $('.add_province_sec, #des_add_prov_btn').hide();

         if($('#des_form_submit2').attr('data-e')==1)
            $('#des_form_submit2').hide();
         else
            $('#des_form_submit2').show();

         $('#des_specific_prov_sec').hide();
      }
      else{
        // $('.add_province_sec').show();
        $('#des_specific_prov_sec').show();
        $('#des_add_prov_btn').show();
        $('#des_form_submit2').hide();
        $('#des_province').val('').attr('disabled',false);
        $('.sel_mun_list').html('');
        $('#des_frm2').find('input[name="act"]').val('add');
        $('#des_frm2').find('input#lid').val('');
        if($('#des_form_submit2').attr('data-s')=='1' && $('#des_form_submit2').attr('data-e')==1){
          $('#des_form_submit2').show();
        }
      }
    })
   
    $('.price_type_inp').on('change',function(){
      if($('.price_type_inp:checked').val()=='f'){
        $('#serv_p_typ1').show();
        $('#serv_p_typ2').hide();
      }
      else{
        $('#serv_p_typ1').hide();
        $('#serv_p_typ2').show();
      }
    });
   
    $('#is_discount').on('change',function(){
      if($(this).prop('checked')===true){
        $('.discount_sec').show();
      }
      else{
        $('.discount_sec').hide();
      }
    });
   
    $('.discount_inp').on('change',function(){
      if($('.discount_inp:checked').val()=='f'){
        // console.log('1111');
        $('#serv_d_typ1').removeClass('d-none').show();
        $('#serv_d_typ2').addClass('d-none');
      }
      else{
        // console.log('2222');
        $('#serv_d_typ1').addClass('d-none');
        $('#serv_d_typ2').removeClass('d-none').show();
      }
      // console.log('3333');
    });


    $("#doc-reg-coc").on('change',function() {
      var fcnt = ($(this)[0].files.length);

        if(fcnt>5){
         alert("You can select only 5 images");
         $("#registration_doc").val('');
         return false;
        }

        if(fcnt>0){
          $('#reg_spn_img').html(fcnt+' files selected');
        }
        else{
          $('#reg_spn_img').html('Upload Files');
        }

        return;
    });

    $("#fixed_pic").on('change',function() {
      var rtn=ValidateSize(this,'fixed_pic');
      if(rtn!=0)
        readURL(this,'fixed_pic');
    });

    $("#desire_pic").on('change',function() {
      var rtn=ValidateSize(this,'desire_pic');
      if(rtn!=0)
        readURL(this,'desire_pic');
    });

    $("#team_mem_img").on('change',function() {
      var rtn=ValidateSize(this,'team_mem_img');
      if(rtn!=0)
        readURL(this,'team_mem_img');
    });

    $("#visual_img").on('change',function() {
      var fcnt = ($(this)[0].files.length);
      if(fcnt>0){
        $('#vis_img_sct').html(fcnt+' files selected');
      }
      else{
        $('#vis_img_sct').html('Choose one or multiple images');
      }

      return;
    });
    
    $('.des_loc_lbl').each(function(){
      if($(this).attr('data-v')=='Everywhere'){
        // $('.des_loc_type_sec').hide();
        $('#des_add_prov_btn').hide();
        // $('.des_loc_main_sec').hide().removeClass('d-flex');
        $('.des_loc_main_sec_'+$(this).attr('data-i')).hide().removeClass('d-flex');
        $('#des_serv_lc_e').prop('checked',true);
         $('#des_serv_lc_s').prop('checked',false);
         $('#des_form_submit2').attr('data-e','1');
         $('#des_specific_prov_sec').hide();
      }
      else{
         $('#des_serv_lc_e').prop('checked',false);
         $('#des_serv_lc_s').prop('checked',true);
         $('#des_serv_lc_s').prop('checked',true);
         $('#des_add_prov_btn').show();
         $('#des_form_submit2').attr('data-s','1');
         $('#des_specific_prov_sec').show();
      }
    })

    $('.serv_for_fx_inp').on('change',function(){
      $('#serv_for_btn').show();
    })

    $('.serv_for_des_inp').on('change',function(){
      $('#des_serv_for_btn').show();
    })

    $('#team_mem_f').on('change',function(){

      if($(this).prop('checked')===true)
        var f='Y';
      else
        var f='N';

      $(this).attr('disabled',true);

      var el = $(this);

      // $('#modalajx').modal('show');
      $.ajax({
        url:"{{route('admin_ajx')}}",
        type:"post",
        data:{'act':'team_meme_f','_token' : '{{ csrf_token() }}','f':f,'prof_id':$('#prof_id').val()},
        dataType:'json',
        success:function(r){
          el.attr('disabled',false);
          // $('#modalajx').modal('hide');
        },
        error:function(){
          el.attr('disabled',false);
          // $('#modalajx').modal('hide');
        }
      })
    })

   });


  function copy_desire(){
    swal(
      '{{$lang_kwords["copy_template_msg"]["english"]}}',
      {
        buttons: {
          cancel: "{{$lang_kwords['alert_cancel']['english']}}",
          catch: {
            text: "{{$lang_kwords['alert_ok']['english']}}",
          },
          defeat: false,
        },
      }
    )
    .then((value) => {
      switch (value) {
     
        case "defeat":
          swal("Got away safely!");
          break;
     
        case "catch":
          copy_desire_act();
          break;
     
        default:
          // swal("Got away safely!");
          return false;
      }
    });
  }

  function copy_desire_act(){

    // if(!confirm('{{$lang_kwords["copy_template_msg"]["english"]}}'))return true;

    $('#copy_btn').val('Wait..!').attr('disabled',true);

     $.ajax({
      url:"{{route('admin_ajx')}}",
        type:'post',
        data:{'act':'copy_desire', '_token' : '{{ csrf_token() }}','temp_type':$('#template_type').val(),'prof_id':$('#prof_id').val()},
        dataType:'json',
        success:function(r){
          $('#copy_btn').val('Copied').attr('disabled',true);
          location.reload();
        },
        error:function(e){
          alert("Something went wrong");
        }
    })
  }

  function info_verify(temp_type){
      if(temp_type=='f'){
        var fna = $('#fixed_name').val();
        if($.trim(fna)==''){
          $('#fixed_name').focus();
          return false;
        }
        $('.fix_reg_btn').val('Wait..!').attr('disabled',true);
      }
      else{
        var fna = $('#desire_name').val();
        if($.trim(fna)==''){
          $('#desire_name').focus();
          return false;
        }
        $('.des_reg_btn').val('Wait..!').attr('disabled',true);
      }

    $.ajax({
      url:"{{route('admin_ajx')}}",
        type:'post',
        data:{'act':'info_verify','temp_type':temp_type, '_token' : '{{ csrf_token() }}'},
        dataType:'json',
        success:function(r){
          if(temp_type=='f')
            $('.fix_reg_btn').val('{{$lang_kwords["info_verify_submit"]["english"]}}');
          else
            $('.des_reg_btn').val('{{$lang_kwords["info_verify_submit"]["english"]}}');
        },
        error:function(e){
          alert("Something went wrong");
        }
    })
  }

  function save_des_service_for(){
    var tmp_type = $('#template_type').val();
    
    
      $('#des_serv_for_btn').html('Wait..!').attr('disabled',true);

      var all_gender=0;
      var men=0;
      var women=0;
      var kids=0;
      if($('#des_all_gender_chk').prop('checked')===true)
        all_gender=1;
      if($('#des_men_chk').prop('checked')===true)
        men=1;
      if($('#des_women_chk').prop('checked')===true)
        women=1;
      if($('#des_kids_chk').prop('checked')===true)
        kids=1;

      
      $.ajax({
        url:"{{route('admin_ajx')}}",
        type:'post',
        data:{'act':'update_service_for', 'all_gender':all_gender, 'men':men, 'women':women, 'kids':kids, '_token' : '{{ csrf_token() }}','temp_type':'d','prof_id':$('#prof_id').val()},
        dataType:'json',
        success:function(r){
          $('#des_serv_for_btn').html('Save').attr('disabled',false);
          $('#des_serv_for_btn').hide();
        },
        error:function(e){
          $('#des_serv_for_btn').html('Save').attr('disabled',false);
          alert("Something went wrong");
        }
      })
    
  }

  function show_des_detail(){

    $('#des_all_gender_chk').prop('checked',false);
    $('#des_men_chk').prop('checked',false);
    $('#des_women_chk').prop('checked',false);
    $('#des_kids_chk').prop('checked',false);
    $('.team_mem_lst_sec, .visual_lst_sec').html('');
    $('#team_mem_f_sec').hide();
    $('.salon_cate_sec').html('');
    $('#gen_note_txt').val('');    
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
      url:"{{route('admin_ajx')}}",
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
            $('#des_all_gender_chk').prop('checked',true);
          if(salon.men=='1')
            $('#des_men_chk').prop('checked',true);
          if(salon.women=='1')
            $('#des_women_chk').prop('checked',true);
          if(salon.kids=='1')
            $('#des_kids_chk').prop('checked',true);
   
        var cate_str='<div class=""  style="justify-content: space-between;display: flex;flex-wrap:wrap">';
          $.each(categories,function(k,v){
            if(k==0)var cls='active';
            else var cls='';
            cate_str+='<div class="cate_sec mb-3 cate_sec_'+v.id+'" onclick="show_salon_cate_detail(\'d\', \''+v.id+'\' ,\''+v.name+'\',\'0\')" data-cate="'+v.name+'"><div class="cate_cards shadow p-2 sub-temp-fixed-loc-card '+cls+'" id="cate_card_'+v.id+'">';
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
            /*var team_str='';
            team_str+="<div style='' class='border row mb-3'>";
            $.each(team,function(k,v){
            
                team_str+="<div class='border col-12 col-sm-5 col-md-3 mb-3 me-2 p-2' id='tm_sec_"+v.id+"' style='    position: relative;'>";
                team_str+="<p class='mb-4'>\""+v.bio+"\"</p>";
                team_str+="<div class='d-flex' style='align-items: flex-end;    height: 55px;margin-bottom: 37px;'>";
                  team_str+="<div class='mb-2 me-2'>";
                    if(v.image!='' && v.image!==null)
                      team_str+='<img src="{{asset("public/imgs/team/")}}/'+v.image+'" style="border: 1px solid #b1abab;width:50px;height: 50px;border-radius:35px">';
                    else
                      team_str+='<img src="{{asset("public/imgs/placeholder-img.jpg")}}" style="border: 1px solid #b1abab;height: 50px;width:50px;border-radius:35px">';
                  team_str+="</div>";

                  team_str+="<div class='mb-2'>";
                    team_str+="<p>"+v.member+"</p>";
                  team_str+="</div>";

                team_str+="</div>";

                team_str+='<p style="    position: absolute;right: 10px;bottom: 0;"><i class="ri-edit-box-line cursor-pointer" onclick="edit_team_member(\''+v.id+'\')"></i> &nbsp; <i class="ri-delete-bin-line text-danger cursor-pointer" onclick="delete_team_member(\''+v.id+'\')"></i></p>';
                
                
                team_str+="</div>";
            });

            team_str+="</div>";
            $('.team_mem_lst_sec').html(team_str);*/
          }
          $('.team_mem_lst_sec').html(team_str);

          if(visual!='' && visual.length>0){
            var visual_str='';
            visual_str+="<div style='' class='row mb-3'>";
            $.each(visual,function(k,v){
              if(v.visual!='' && v.visual!==null){
                visual_str+="<div class=' col-6 col-sm-4 col-md-3 mb-3' id='vis_sec_"+v.id+"'>";
                visual_str+="<div class='border p-2' style='position: relative;height: 100%;'>";
                  visual_str+="<p style='position: absolute;left: 10px;top: 0;' ><label><input type='checkbox' name='vis_radio' class='vis_radio' value='"+v.id+"'></label></p>";
                  visual_str+='<img src="'+v.visual+'" style="max-width:100%;max-height: 100%;border-radius:35px">';
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
          $('#gen_note_txt').val(salon.note);
        
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


  function des_form_validate2(){

    var loc_type = $('.des_loc_type:checked').val();
    var municipality='';
    var fc=1;
    if(loc_type=='everywhere'){
      var des_province='';
    }
    else{
      var des_province = $('#des_province').val();

      if($('#des_form_submit2').attr('data-s')=='1' && $('#des_form_submit2').attr('data-e')==1){
        var fc=0;
      }
      else{
        if($.trim(des_province)==''){
          $('#des_province').focus();
          return false;
        }
      }
      if($.trim(des_province)!=''){
        fc=1;
      }
      
      if($('.sel_mun_list').find('.sel_municipality_box').length>0){
        var municipality = new Array;
        $('.sel_municipality_box').each(function(){
          var munc = $(this).find('.selected_municipality').text();
          municipality.push(munc);
        })
      }
    }

    $('#des_form_submit2').html('Wait..!').attr('disabled',true);

      if($('#des_frm2').find('input[name="act"]').val()=='add'){
          $.ajax({
            url:"{{route('admin_desire_add_province')}}",
            type:'post',
            data:{'act':'add_province','province':des_province,'municipality':municipality,'loc_type':loc_type, '_token' : '{{ csrf_token() }}','prof_id':$('#prof_id').val(),'fc':fc},
            dataType:'json',
            success: function(r)
            {
              $('#des_form_submit2').html('Save').attr('disabled',false);
              if(r.status=='SUCCESS')
              { 
                $('#spn_des_frm2').show();
                location.reload();
              }
              if(r=='ERR')
              {
                alert('Something went wrong. Please contact');
              }
            }
          })
      }
      if($('#des_frm2').find('input[name="act"]').val()=='edit'){
         $.ajax({
           url:"{{route('admin_desire_add_province')}}",
           type:'post',
           data:{'act':'edit_province','province':des_province,'municipality':municipality,'loc_type':loc_type, '_token' : '{{ csrf_token() }}','lid':$('#lid').val()},
           dataType:'json',
           success: function(r)
           {
             $('#des_form_submit2').html('Save').attr('disabled',false);
             if(r.status=='SUCCESS')
             { 
               $('#spn_des_frm2').show();
               location.reload();
             }
             if(r=='ERR')
             {
               alert('Something went wrong. Please contact');
             }
           }
         });
       }
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

  function remove_municipality(el){
    el.closest('.sel_municipality_box').remove();
  }

  function add_pro_municipality(){
    var mun = $('#des_municipality').val();
    if(mun!=''){
      var str='<div class="d-flex border px-2 py-1 me-2 sel_municipality_box">';
        str+='<span class="d-flex align-items-center selected_municipality">'+mun+'</span>&nbsp;&nbsp;<span class="d-flex align-items-center cursor-pointer" onclick="remove_municipality($(this))">&times;</span>';
      str+='</div>';

      $('.sel_mun_list').append(str).show();
      $('#des_municipality').val('').hide();
    }
  }

  function show_pro_municipality(){
    $('#des_municipality').show();
  }
   
   function save_visual(){
    var tmp_type = $('#template_type').val();
    
    if($('#visual_type').val()=='link'){
      if($.trim($('#visual_link').val())==''){
        $('#visual_link').focus();
        return false;
      }
    }
    else{
      if($.trim($('#visual_img').val())==''){
        alert('{{$lang_kwords["select_visual_add"]["english"]}}');
        return false;
      }
    }
   
    var frm=new FormData($('#frm4')[0]);
    frm.append('act', 'add_visual');
    frm.append('tmp_type', tmp_type);
    $('#submit_btn_visual').html('Wait..!').attr('disabled',true);
   
    $.ajax({
      url:"{{route('admin_ajx')}}",
      type:'post',
      data:frm,
      contentType: false,
      processData:false,
      success: function(r)
      {
        $('#submit_btn_visual').html('Save').attr('disabled',false);
        resp  =r;
        if(resp.status=='SUCCESS')
        { 
          $('#visual_link').val('');
          $('#visual_img').val('');
          // alert('Added');       
          var visual = resp.vis;

          if(visual!='' && visual.length>0){
            var visual_str='';
            visual_str+="<div style='' class='row mb-3'>";
            $.each(visual,function(k,v){
              if(v.visual!='' && v.visual!==null){
                visual_str+="<div class=' col-6 col-sm-4 col-md-3 mb-3' id='vis_sec_"+v.id+"'>";
                visual_str+="<div class='border p-2' style='position: relative;height: 100%;'>";
                  visual_str+="<p style='position: absolute;left: 10px;top: 0;' ><label><input type='checkbox' name='vis_radio' class='vis_radio' value='"+v.id+"'></label></p>";
                  visual_str+='<img src="'+v.visual+'" style="max-width:100%;max-height: 100%;border-radius:35px">';
                  visual_str+="</div>";
                visual_str+="</div>";
              }
            });

            visual_str+="</div>";
            $('.visual_lst_sec').html(visual_str);
          } 

          $('.insta_link_sec,#submit_btn_visual').hide();
          $('.ur_img_sec').hide().removeClass('d-flex');
          $('.visual_spn_img, .visual_spn_link').removeClass('text-custom-primary');
        }
        /*if(r=='SUC')
        { 
          $('#visual_link').val('');
          $('#visual_img').val('');
          alert('Added');       
        }*/
        if(r=='ERR')
        {
          alert('Something went wrong. Please contact');
        }
      }
    })
   }
   
   function save_service_for(){
    /*var tmp_id = $('#template_id').val();
    if(tmp_id=='' || tmp_id==0){
      alert('Something went wrong.');
      return false;
    }*/
    

      $('#serv_for_btn').html('Wait..!').attr('disabled',true);

      var all_gender=0;
      var men=0;
      var women=0;
      var kids=0;
      if($('#all_gender_chk').prop('checked')===true)
        all_gender=1;
      if($('#men_chk').prop('checked')===true)
        men=1;
      if($('#women_chk').prop('checked')===true)
        women=1;
      if($('#kids_chk').prop('checked')===true)
        kids=1;
     
      $.ajax({
        url:"{{route('admin_ajx')}}",
        type:'post',
        data:{'act':'update_service_for', 'all_gender':all_gender, 'men':men, 'women':women, 'kids':kids, '_token' : '{{ csrf_token() }}','temp_type':'f','prof_id':$('#prof_id').val()},
        dataType:'json',
        success:function(r){
          $('#serv_for_btn').html('Save').attr('disabled',false);
          $('#serv_for_btn').hide();
        },
        error:function(e){
          $('#serv_for_btn').html('Save').attr('disabled',false);
          alert("Something went wrong");
        }
      })
    
  }

   function sel_image1 (argument) {
    $('#visual_img').trigger('click');
   }

   function delete_visuals(){

    if($('.vis_radio:checked').length<=0){
      // alert('{{$lang_kwords["select_visual_delete"]["english"]}}');
      swal('{{$lang_kwords["select_visual_delete"]["english"]}}',
        {
          buttons: {
            catch: {
              text: "{{$lang_kwords['alert_ok']['english']}}",
            },
          }
      });
      return false;
    }


    swal(
      '{{$lang_kwords["confirm_visual_delete"]["english"]}}',
      {
        buttons: {
          cancel: "{{$lang_kwords['alert_cancel']['english']}}",
          catch: {
            text: "{{$lang_kwords['alert_ok']['english']}}",
          },
          defeat: false,
        },
      }
    )
    .then((value) => {
      switch (value) {
     
        case "defeat":
          swal("Got away safely!");
          break;
     
        case "catch":
          delete_visuals_act();
          break;
     
        default:
          // swal("Got away safely!");
          return false;
      }
    });
  }
   
   function delete_visuals_act(){
    /*if($('.vis_radio:checked').length<=0){
      alert('{{$lang_kwords["select_visual_delete"]["english"]}}');
      return false;
    }

    if(!confirm('{{$lang_kwords["confirm_visual_delete"]["english"]}}'))return false;*/

    var vis = new Array;
    $('.vis_radio:checked').each(function(){
      vis.push($(this).val());
    });

    /*var tmp_id = $('#template_id').val();
    if(tmp_id=='' || tmp_id==0){
      alert('Something went wrong.');
    }*/
    
    $('#del_vis_txt').html('Wait..!');
    $('#del_vis_spn').attr('disabled',true);

    $.ajax({
      url:"{{route('admin_ajx')}}",
      type:'post',
      data:{'act':'remove_visual', 'tmp_id':tmp_id, 'vis':vis, '_token' : '{{ csrf_token() }}'},
      dataType:'json',
      success:function(r){
        $('#del_vis_txt').html('Delete Selected');
        $('#del_vis_spn').attr('disabled',false);
        $.each(vis,function(k,v){
          $('#vis_sec_'+v).remove();
        })
      },
      error:function(e){
        alert("Something went wrong");
        $('#del_vis_txt').html('Delete Selected');
        $('#del_vis_spn').attr('disabled',false);
      }
    })

   }

   function  show_insta_link_sec() {
     $('.insta_link_sec').show();
     $('.ur_img_sec').hide().removeClass('d-flex');
     $('#visual_type').val('link');
     $('.visual_spn_link').addClass('text-custom-primary');
     $('.visual_spn_img').removeClass('text-custom-primary');
   }
   function  show_ur_img_sec() {
     $('.insta_link_sec').hide();
     if($('#visual_img_lbl').attr('data-t')=='h'){
      $('.ur_img_sec').show().addClass('d-flex').attr('data-t','s');
    }
    else{
      $('.ur_img_sec').hide().removeClass('d-flex').attr('data-t','h');
    }
     $('#visual_type').val('image');
     $('.visual_spn_link').removeClass('text-custom-primary');
     $('.visual_spn_img').addClass('text-custom-primary');
     $("#submit_btn_visual").toggle();
   }
   
   function save_team_member(){
    var tmp_type = $('#template_type').val();
    
    if($.trim($('#team_member_name').val())==''){
      $('#team_member_name').focus();
      return false;
    }
   

    var cate_a = new Array;
    $('.temp_ct:checked').each(function(){
      cate_a.push($(this).val());
    });

    if(cate_a.length<=0){
      alert('{{$lang_kwords["team_member_select_category_service"]["english"]}}');
      return false;
    }
  // console.log(cate_a);

    var serv_a = new Array;
    var serv_a_c = new Array;
    $('.temp_serv:checked').each(function(){
      serv_a.push($(this).val());
      
      if($.inArray($(this).attr('data-c'),serv_a_c)==-1)
        serv_a_c.push($(this).attr('data-c'));

    });

    if(serv_a.length<=0){
      alert('{{$lang_kwords["team_member_select_service"]["english"]}}');
      return false;
    }

    // console.log(serv_a_c);

    var c_bs_a = new Array;
    $.each( cate_a, function( key, value ) {
        var index = $.inArray( value, serv_a_c );
        if( index == -1 ) {
            c_bs_a.push(value);
        }
    });

    if(c_bs_a.length>0){
      // console.log(c_bs_a);
      alert('{{$lang_kwords["team_member_select_service_for_each_category"]["english"]}}');
      return false;
    }

    var frm=new FormData($('#frm3')[0]);
   
    if($('#tm_act').val()=='add')
      frm.append('act', 'add_team_member');
    else{
      frm.append('act', 'update_team_member');
      if($('#tm_i').val()==''){
        alert('Something went wrong.');
        return false;
      }
    }
   
    frm.append('tmp_type', tmp_type);
    $('#team_mem_btn').html('Wait..!').attr('disabled',true);
   
    $.ajax({
      url:"{{route('admin_ajx')}}",
      type:'post',
      data:frm,
      contentType: false,
      processData:false,
      success: function(r)
      {
        $('#team_mem_btn').html('Save').attr('disabled',false);
        if(r.status=='SUCCESS')
        { 
          /*if($('#tm_act').val()=='add'){
            alert('Added');     
          } 
          else{
            alert('Updated');       
          }*/
          $('#frm3').hide();
          $('#team_member_name').val('');
          $('#team_member_bio').val('');
          $('#tm_i').val('');
          $('#team_mem_img').val('');
          $('#tm_act').val('add');
          $('#tm_img_preview').attr('src',"{{ URL::asset('public/images/blank_img_icon.png')}}");
          $('.tm_img1').hide().attr('src','');
          $('.tm_iu').show();
          $('#team_cate_sec,#team_serv_sec').html('');
         $('#team_s_sec_mn').hide();
          
          var team = r.team_memb;
          var team_str='';
          if(team!='' && team.length>0){
            team_str = create_team_sec(team);
          } 
          $('.team_mem_lst_sec').html(team_str);
          $('#team_mem_f_sec').show();

        }
        if(r.status=='ERROR')
        {
          alert('Something went wrong. Please contact');
        }
      }
    })
   }
   
   function sel_image(){
          $('#team_mem_img').trigger('click');
       }
   
   function save_gen_note(){
    var tmp_type = $('#template_type').val();
    if(tmp_type==''){
      alert('Something went wrong.');
    }
    var note = $('#gen_note_txt').val();
    
    $('#gen_not_btn').html('Wait..!').attr('disabled',true);

    $.ajax({
      url:"{{route('admin_ajx')}}",
      type:'post',
      data:{'act':'add_gen_note', 'tmp_type':tmp_type, 'note':note, '_token' : '{{ csrf_token() }}','prof_id':$('#prof_id').val()},
      dataType:'json',
      success:function(r){
        $('#gen_not_btn').html('Save').attr('disabled',false);
        $('#gen_not_btn').hide();
        $('#gen_note_txt').attr('readonly',true);
      },
      error:function(e){
        alert("Something went wrong");
        $('#gen_not_btn').html('Save').attr('disabled',false);
      }
    })
   }
   
   function add_serv_act(){
      $('#edit_serv_i').val('');
      $('#serv_act').val('add');
      $('#serve_type').val('main');
      $('#serv_name_inp').val('');
      $('#serv_name_inp').val('');
      $('#serv_add_info').val('');
      $('#duration_start_hr').val('');
      $('#duration_start_min').val('');
      $('#duration_end_hr').val('');
      $('#duration_end_min').val('');
      $('input[name="price_type"][value="f"]').prop('checked',true);
      $('#serv_p_typ1').show();
      $('#serv_p_typ2').hide();
      $('input[name="price_type"][value="s"]').prop('checked',false);
      $('#serv_p_fix').val('');
      $('#serv_p_st_fr').val('');
      
      $('#is_discount').prop('checked',false);
      $('#serv_d_fix').val('');
      $('input[name="discount_type"][value="f"]').prop('checked',true);
      $('#serv_d_typ1').show();
      $('#serv_d_typ2').hide();
      $('#serv_d_per').val('');
      $('#serv_d_pr_fr_dt').val('');
      $('#serv_d_pr_to_dt').val('');
      $('#serv_p_add_info').val('');
      $('.discount_sec').hide();
      $('#add_serv_frm').show();
      $('html, body').animate({
         scrollTop: $('#add_serv_frm').offset().top-30
       }, 500);
   }

   function close_service_form(f){
      $('#edit_serv_i').val('');
      $('#serv_act').val('add');
      $('#serve_type').val('main');
      $('#serv_name_inp').val('');
      $('#serv_name_inp').val('');
      $('#serv_add_info').val('');
      $('#duration_start_hr').val('');
      $('#duration_start_min').val('');
      $('#duration_end_hr').val('');
      $('#duration_end_min').val('');
      $('input[name="price_type"][value="f"]').prop('checked',true);
      $('#serv_p_typ1').show();
      $('#serv_p_typ2').hide();
      $('input[name="price_type"][value="s"]').prop('checked',false);
      $('#serv_p_fix').val('');
      $('#serv_p_st_fr').val('');
      
      $('#is_discount').prop('checked',false);
      $('#serv_d_fix').val('');
      $('input[name="discount_type"][value="f"]').prop('checked',true);
      $('#serv_d_typ1').show();
      $('#serv_d_typ2').hide();
      $('#serv_d_per').val('');
      $('#serv_d_pr_fr_dt').val('');
      $('#serv_d_pr_to_dt').val('');
      $('#serv_p_add_info').val('');
      $('.discount_sec').hide();
      $('#add_serv_frm').hide();
      if(f=='0'){
         $('html, body').animate({
                   scrollTop: $('.salon_cate_dt_sec').offset().top+30
               }, 200);
      }
   }

   function save_service(){
    var temp_type=$('#template_type').val();
    var cate=$('#cate_id').val();
    if(temp_type=='' || cate==''){
      alert('Something went wrong');
      return false;
    }
   
    if($.trim($("#serv_name_inp").val())==''){
      $("#serv_name_inp").focus();
      return false;
    }
   
    if($('.price_type_inp:checked').val()=='f'){
      if($.trim($("#serv_p_fix").val())==''){
        $("#serv_p_fix").focus();
        // console.log('1111');
        return false;
      }
    }
    else
    {
      if($.trim($("#serv_p_st_fr").val())==''){
        $("#serv_p_st_fr").focus();
        // console.log('222');
        return false;
      }
    }
   
    var discount = '0';
    var discount_type = 'f';
    if($('#is_discount').prop('checked')===true){
      discount = '1';
      // console.log($('.discount_inp:checked'));
      if($('.discount_inp:checked').val()=='f'){
        var discount_type = 'f';
        if($.trim($("#serv_d_fix").val())==''){
          $("#serv_d_fix").focus();
          // console.log('333');
          return false;
        }
      }
      else
      {
        var discount_type = 'p';
        if($.trim($("#serv_d_per").val())==''){
          $("#serv_d_per").focus();
          console.log('4444');
          return false;
        }
      }
    }
    else{
      discount = '0';
    }
   
    if($('.price_type_inp:checked').val()=='f'){
      var price = $.trim($("#serv_p_fix").val());
      var p_type = 'f';
    }
    else{
      var price = $.trim($("#serv_p_st_fr").val());
        var p_type = 's';
    }
   
    if(discount_type=='f'){
      var discount_amt = $.trim($("#serv_d_fix").val());
      var discount_valid_from = $('#serv_d_fx_fr_dt').val();
      var discount_valid_to = $('#serv_d_fx_to_dt').val();
    }
    else{
      var discount_amt = $.trim($("#serv_d_per").val());
      var discount_valid_from = $('#serv_d_pr_fr_dt').val();
      var discount_valid_to = $('#serv_d_pr_to_dt').val();
    }

    var duration ='';
    
   if(!$('#duration_start_hr').val() && !$('#duration_start_min').val())
   {
    $("#duration_start_min").focus();
    alert('{{$lang_kwords["select-duration-save"]["english"]}}');
    return false;
   }
   
    if($('#duration_start_hr').val()){
      duration = $('#duration_start_hr').val();
    }

    if($('#duration_start_hr').val() && $('#duration_start_min').val()){
      duration+=':';
    }

    if($('#duration_start_min').val()){
      duration+= $('#duration_start_min').val();
    }

    if($('#duration_end_hr').val() || $('#duration_end_min').val()){
      duration+=' - ';
    }

    if($('#duration_end_hr').val()){
      duration+= $('#duration_end_hr').val();
    }

    if($('#duration_end_hr').val() && $('#duration_end_min').val()){
      duration+=':';
    }

    if($('#duration_end_min').val()){
      duration+= $('#duration_end_min').val();
    }
   
    /*var duration = $('#duration_start_hr').val()+':'+$('#duration_start_min').val()+' - '+$('#duration_end_hr').val()+':'+$('#duration_end_min').val();*/
    var payload={
      temp_type:temp_type,
      category_id:cate,
      type:$('#serve_type').val(),
      service_id:$('#serv_id').val(),
      service_name:$('#serv_name_inp').val(),
      duration:duration,
      price_type:p_type,
      price:price,
      discount:discount,
      discount_amt:discount_amt,
      discount_type:discount_type,
      discount_valid_from:discount_valid_from,
      discount_valid_to:discount_valid_to,
      discount_info:$('#serv_p_add_info').val(),
      additional_info:$('#serv_add_info').val(),
    }
   
    if($('#serv_act').val()=='add'){

      $('#serv_add_btn').html('Wait..!').attr('disabled',true);

      $.ajax({
        url:"{{route('admin_ajx')}}",
        type:'post',
        data:{'act':'save_service','payload':payload, '_token' : '{{ csrf_token() }}','prof_id':$('#prof_id').val()},
        dataType:'json',
        success:function(r){
         $('#serv_add_btn').html('Save').attr('disabled',false);
          if(r.status=="SUCCESS"){
            $('#add_serv_frm').hide();
            show_salon_cate_detail(temp_type, cate, $('.cate_sec_'+cate).attr('data-cate'),r.i)
          }
          else{
            alert("Something went wrong");  
          }
        },
        error:function(e){
         $('#serv_add_btn').html('Save').attr('disabled',false);
          alert("Something went wrong");
        }
      });
    }
    else{
      if($('#edit_serv_i').val()==''){
        alert('Something went wrong');
        return false;
      }
   
      $('#serv_add_btn').html('Save').attr('disabled',false);
      $.ajax({
        url:"{{route('admin_ajx')}}",
        type:'post',
        data:{'act':'update_service','sid':$('#edit_serv_i').val(),'payload':payload, '_token' : '{{ csrf_token() }}'},
        dataType:'json',
        success:function(r){
         $('#serv_add_btn').html('Save').attr('disabled',false);
          if(r.status=="SUCCESS"){
            // alert('Updated');
            $('#add_serv_frm').hide();
            show_salon_cate_detail(temp_type, cate, $('.cate_sec_'+cate).attr('data-cate'),r.i)
          }
          else{
            alert("Something went wrong");  
          }
        },
        error:function(e){
         $('#serv_add_btn').html('Save').attr('disabled',false);
          alert("Something went wrong");
        }
      });
    }
   }
   
   function edit_service (i) {
      $.ajax({
        url:"{{route('admin_ajx')}}",
        type:'post',
        data:{'act':'get_serv_detail','sid':i, '_token' : '{{ csrf_token() }}'},
        dataType:'json',
        success:function(r){
          if(r.status=='SUCCESS'){
            $('#serv_act').val('update');
            $('#edit_serv_i').val(i);
            $('#serv_name_inp').val(r.service.service_name);
            $('#serv_add_info').val(r.service.additional_info);
            var durat = r.service.duration;
            var exp1 = durat.split(' - ');
            var  st_hr='';
            var  st_mn='';
            var  nd_hr='';
            var  nd_mn='';

            if(exp1[0]){
              var exp2 = exp1[0].split(':');
              if(exp2[0]){
                if(exp2[0].indexOf('h')>0)
                  st_hr = exp2[0];
                if(exp2[0].indexOf('m')>0)
                  st_mn = exp2[0];
              }

              if(exp2[1] && exp2[1].indexOf('m')>0)
                st_mn = exp2[1];
            }

            if(exp1[1]){
              var exp3 = exp1[1].split(':');
              if(exp3[0]){
                if(exp3[0].indexOf('h')>0)
                  nd_hr = exp3[0];
                if(exp3[0].indexOf('m')>0)
                  nd_mn = exp3[0];
              }

              if(exp2[1] && exp2[1].indexOf('m')>0)
                nd_mn = exp2[1];
            }

            /*if(exp1.length==2){
              var exp2 = exp1[0].split(':');
              if(exp2.length==2){
                var  st_hr = exp2[0];
                var  st_mn = exp2[1];
              }
   
              var exp3 = exp1[1].split(':');
              if(exp3.length==2){
                var  nd_hr = exp3[0];
                var  nd_mn = exp3[1];
              }
            }*/
            $('#duration_start_hr').val(st_hr);
            $('#duration_start_min').val(st_mn);
            $('#duration_end_hr').val(nd_hr);
            $('#duration_end_min').val(nd_mn);
   
            var ptype = r.service.price_type;
            if(ptype=='f'){
              $('input[name="price_type"][value="f"]').prop('checked',true);
              $('#serv_p_typ1').show();
              $('#serv_p_typ2').hide();
              $('#serv_p_fix').val(r.service.price);
              $('#serv_p_st_fr').val('');
            }
            else{
              $('input[name="price_type"][value="s"]').prop('checked',true);
              $('#serv_p_typ2').show();
              $('#serv_p_typ1').hide();
              $('#serv_p_st_fr').val(r.service.price);
              $('#serv_p_fix').val('');
            }
   
            if(r.service.discount=='1'){
              $('#is_discount').prop('checked',true);
              if(r.service.discount_type=='f'){
                $('#serv_d_fix').val(r.service.discount_amount);
                $('input[name="discount_type"][value="f"]').prop('checked',true);
                $('#serv_d_typ1').removeClass('d-none').show();
                $('#serv_d_typ2').addClass('d-none');
                $('#serv_d_pr_fr_dt').val(r.service.discount_valid_from);
                $('#serv_d_pr_to_dt').val(r.service.discount_valid_to);
              }
              else{
                $('#serv_d_per').val(r.service.discount_amount);
                $('input[name="discount_type"][value="p"]').prop('checked',true);
                $('#serv_d_typ1').addClass('d-none');
                $('#serv_d_typ2').removeClass('d-none').show();
                $('#serv_d_pr_fr_dt').val(r.service.discount_valid_from);
                $('#serv_d_pr_to_dt').val(r.service.discount_valid_to);
              }
              $('.discount_sec').show();
            }
            else{
               $('#serv_d_pr_fr_dt').val('');
                $('#serv_d_pr_to_dt').val('');
               $('#serv_d_fix').val('');
               $('#serv_d_per').val('');
               $('input[name="discount_type"][value="p"]').prop('checked',false);
               $('input[name="discount_type"][value="f"]').prop('checked',true);
               $('#serv_d_typ1').removeClass('d-none').show();
                $('#serv_d_typ2').addClass('d-none');
               // console.log($('.discount_inp'));
               $('#is_discount').prop('checked',false);
              $('.discount_sec').hide();
            }
   
            $('#serv_p_add_info').val(r.service.discount_info);
            $('#add_serv_frm').show();
            $('html, body').animate({
                       scrollTop: $('#add_serv_frm').offset().top-30
                     }, 500);
   
          }
          else{
            alert("Something went wrong");
          }
        },
        error:function(e){
          alert("Something went wrong");
        }
      })
   }
   
   function add_subservice_act(serv_id){
     $('#edit_serv_i').val('');
      $('#serv_act').val('add');
      $('#serve_type').val('main');
      $('#serv_name_inp').val('');
      $('#serv_name_inp').val('');
      $('#serv_add_info').val('');
      $('#duration_start_hr').val('');
      $('#duration_start_min').val('');
      $('#duration_end_hr').val('');
      $('#duration_end_min').val('');
      $('input[name="price_type"][value="f"]').prop('checked',true);
      $('#serv_p_typ1').show();
      $('#serv_p_typ2').hide();
      $('input[name="price_type"][value="s"]').prop('checked',false);
      $('#serv_p_fix').val('');
      $('#serv_p_st_fr').val('');

      $('#is_discount').prop('checked',false);
      $('#serv_d_fix').val('');
      $('input[name="discount_type"][value="f"]').prop('checked',true);
      $('#serv_d_typ1').show();
      $('#serv_d_typ2').hide();
      $('#serv_d_per').val('');
      $('#serv_d_pr_fr_dt').val('');
      $('#serv_d_pr_to_dt').val('');
      $('#serv_p_add_info').val('');
      $('.discount_sec').hide();

    $('#serve_type').val('sub');
    $('#serv_id').val(serv_id);
    $('#add_serv_frm').show();
    $('html, body').animate({
                       scrollTop: $('#add_serv_frm').offset().top-30
                     }, 500);
   
   }
   
   function show_salon_cate_detail(temp_type, cateid, catename,f){
      close_service_form('1');
    $('.cate_cards').removeClass('active');
    $('#cate_card_'+cateid).addClass('active');
    // $('#modalajx').modal('show');
    $('#serv_frm_sec').hide();
    $.ajax({
      url:"{{route('admin_ajx')}}",
      type:'post',
      data:{'act':'get_salon_cate_detail','temp_type':temp_type,'cid':cateid, '_token' : '{{ csrf_token() }}','prof_id':$('#prof_id').val()},
      dataType:'json',
      success:function(r){
        
        if(r.status=='SUCCESS'){
          if(r.msg=='Y'){
            $('#serv_frm_sec').show();
            var service = r.service;
            var sub_service = r.sub_service;
            var str='';
            $.each(service,function(k,v){
              str+='<div class="category-table-row d-flex bg-light-primary mt-2" id="serv_sec_m_'+v.id+'">';
                str+='<div class="border-right-primary border-bottom text-center fs-5 text-custom-primary p-1 w-28 border-end">';
                  str+= '<span style="float:left">'+v.service_name+'</span>';
                  if(v.additional_info!='' && v.additional_info!==null && v.additional_info){
                    str+= '<div><i class="ri-information-fill tooltip_spn1 tooltip_spn_1"></i><div class="tooltip"  style="margin-top:34px"><span class="tooltiptext">'+v.additional_info+'</span></div></div>';
                  }
                str+='<div class="clearfix"></div></div>';
                str+='<div class="text-center fs-5 border-bottom text-custom-primary p-1 w-28 border-end">';
                  str+= v.duration;
                str+='</div>';
                str+='<div class="text-center fs-5 border-bottom text-custom-primary p-1 w-28 border-end">';
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

                     str+= '<span style="font-size:15px;text-decoration: line-through;">'+v.price+'</span> '+dis_amt+'EUR';
                  }
                  else
                    str+= v.price+' EUR';
                  
                }
                else{
                  
                    str+= 'Starting from '+v.price+' EUR';
                  
                }
                if(v.discount=='1'){
                 str+='<br><b class="fs-6">{{$lang_kwords["discount"]["english"]}}: </b>';   
                // str+='<br>';   
                 if(v.discount_type=='f'){
                  str+= '<span class="fs-6">'+v.discount_amount+'EUR</span>';   
                 }
                 else{
                  str+= '<span class="fs-6">'+v.discount_amount+'%</span>';   
                 }
                 if(v.discount_info!='' && v.discount_info!==null && v.discount_info){
                    str+= ' <i class="ri-information-fill tooltip_spn1"></i><div class="tooltip"><span class="tooltiptext">'+v.discount_info+'</span></div>';
                  }
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
                str+='</div>';  
                
                str+='<div class="fs-4 p-1 w-15 border-bottom justify-content-center text-center">';
                  str+= '<i class="ri-edit-box-line text-custom-primary me-2  cursor-pointer" onclick="edit_service(\''+v.id+'\')"></i>   <i class="ri-delete-bin-line text-danger  cursor-pointer" onclick="delete_service(\''+v.id+'\')"></i> <br> <button type="button" class="btn cs_btn gradient-btn" onclick="add_subservice_act(\''+v.id+'\')">+ {{$lang_kwords["sub-service"]["english"]}}</button>';
                str+='</div>';
              str+='</div>';
   
              if(sub_service!='' && sub_service.length>0){
                $.each(sub_service,function(k1,v1){
                  
                  var ssserv = v1[v.id];
                  if(typeof ssserv === 'undefined')return true;
                  // if(k1!=v.id)return true;
   
                  $.each(ssserv,function(k2,v2){
   
                    str+='<div class="category-table-row d-flex bg-light-primary" style="margin-left:7px" id="serv_sec_m_'+v2.id+'">';
                      str+='<div class="text-center fs-6 p-1 w-28 border-end border-bottom justify-content-between align-items-center" style="padding-left:12px!important;font-weight:500;">';
                        str+= '<span style="float:left">'+v2.service_name+'</span>';
                        if(v2.additional_info!='' && v2.additional_info!==null && v2.additional_info){
                          str+= '<div><i class="ri-information-fill tooltip_spn1 tooltip_spn_1"></i><div class="tooltip" style="margin-top:34px"><span class="tooltiptext">'+v2.additional_info+'</span></div></div>';
                        }
                      str+='<div class="clearfix"></div></div>';
                      str+='<div class="text-center fs-6 p-1 w-28 border-end border-bottom">';
                        str+= v2.duration;
                      str+='</div>';
                      str+='<div class="text-center fs-6 p-1 w-28 border-end border-bottom">';
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

                           str+= '<span style="font-size:15px;text-decoration: line-through;">'+v2.price+'</span> '+dis_amt+'EUR';
                        }
                        else
                          str+= v2.price+' EUR';
                        
                      }
                      else{
                        
                          str+= 'Starting from '+v2.price+' EUR';
                        
                      }
                      

                      if(v2.discount=='1'){
                       str+='<br><b class="fs-6">{{$lang_kwords["discount"]["english"]}}: </b>';   
                        
                      // str+='<br>';   
                       if(v2.discount_type=='f'){
                        str+= '<span class="fs-6">'+v2.discount_amount+'EUR</span>';   
                       }
                       else{
                        str+= '<span class="fs-6">'+v2.discount_amount+'%</span>';   
                       }
                       if(v2.discount_info!='' && v2.discount_info!==null && v2.discount_info){
                          str+= ' <i class="ri-information-fill tooltip_spn1"></i><div class="tooltip"><span class="tooltiptext">'+v2.discount_info+'</span></div>';
                        }
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
                      str+='</div>';
                      
                      str+='<div class="fs-4 p-1 w-15 border-bottom d-flex justify-content-center">';
                        str+= '<i class="ri-edit-box-line text-custom-primary me-2 cursor-pointer" onclick="edit_service(\''+v2.id+'\')"></i>  <i class="ri-delete-bin-line text-danger  cursor-pointer" onclick="delete_service(\''+v2.id+'\')"></i>';
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
   
   function edit_team_member(id){
      $('#team_serv_sec').html('');
      $('#team_s_sec_mn').hide();
      $('#team_cate_sec').html('');

      $.ajax({
        url:"{{route('admin_ajx')}}",
        type:'post',
        data:{'act':'get_tm_detail','tm_i':id, '_token' : '{{ csrf_token() }}','prof_id':$('#prof_id').val()},
        dataType:'json',
        success:function(r){
          if(r.status=='SUCCESS'){
            $('#team_member_name').val(r.member.name);
            $('#team_member_bio').val(r.member.bio);

            if(r.member.img && r.member.img!=''){
              $('.tm_img1').attr('src','{{asset("public/imgs/team/")}}/'+r.member.img).show();
              $('.tm_iu').hide();
            }

            var temp_serv = r.member.service;
            var temp_cate = r.member.category;

            var service = r.service;
            var category = r.category;

            if(service.length>0){
               var str='<label class="me-3"><input type="checkbox" name="team_service[]" class="temp_serv_all" value="all" onclick="sel_all_temp_serv()"> {{$lang_kwords["all"]["english"]}}</label>';
               $.each(service, function(k,v){
                  var chk='';
                  var shd='style="display:none"';
                  var vi = ''+v.i+'';
                  var vc = ''+v.c+'';

                  if(jQuery.inArray(vi, temp_serv) !== -1)
                     chk='checked';

                  if(jQuery.inArray(vc, temp_cate) !== -1) 
                    shd='style=""';


                  str+='<label class="me-3" '+shd+'><input type="checkbox" data-c="'+v.c+'" name="team_service[]" class="temp_serv" value="'+v.i+'" '+chk+'> '+v.service_name+'</label>';
               });
               $('#team_serv_sec').html(str);
               $('#team_s_sec_mn').show();
            }
            else{
               $('#team_s_sec_mn').hide();
            }

            var str1='<label class="me-3"><input type="checkbox" name="team_cate[]" class="temp_ct_all" value="all" onclick="sel_all_temp_ct()"> {{$lang_kwords["all"]["english"]}}</label>';
            $.each(category, function(k,v){
               var chk='';
               var vi = ''+v.i+'';

                  if(jQuery.inArray(vi, temp_cate) !== -1)
                     chk='checked';

               str1+='<label class="me-3"><input type="checkbox" data-c="'+v.i+'" class="temp_ct" name="team_cate[]" value="'+v.i+'" '+chk+'> '+v.cat+'</label>';
            });

            $('#team_cate_sec').html(str1);



            $('#tm_i').val(id);
            $('#tm_act').val('update');
            $('#frm3').show();
            $('html, body').animate({
                       scrollTop: $('#frm3').offset().top-30
                   }, 500);

            check_all_tmserv();
            check_all_tmcate();

          }
          else{
            alert('Something went wrong.');
          }
        },
        error:function(e){
    alert('Something went wrong.');
        }
      })
   
   }

   function delete_team_member(id){
    swal(
      '{{$lang_kwords["confirm_teammem_delete"]["english"]}}',
      {
        buttons: {
          cancel: "{{$lang_kwords['alert_cancel']['english']}}",
          catch: {
            text: "{{$lang_kwords['alert_ok']['english']}}",
          },
          defeat: false,
        },
      }
    )
    .then((value) => {
      switch (value) {
     
        case "defeat":
          swal("Got away safely!");
          break;
     
        case "catch":
          delete_team_member_act(id);
          break;
     
        default:
          // swal("Got away safely!");
          return false;
      }
    });
   }

   function delete_team_member_act(id){
    // if(confirm('{{$lang_kwords["confirm_teammem_delete"]["english"]}}')){
      $.ajax({
        url:"{{route('admin_ajx')}}",
        type:'post',
        data:{'act':'remove_tm_detail','tm_i':id, '_token' : '{{ csrf_token() }}'},
        dataType:'json',
        success:function(r){
          if(r.status=='SUCCESS'){
            $('#tm_sec_'+id).remove();
          }
          else{
            alert('Something went wrong.');
          }
        },
        error:function(e){
          alert('Something went wrong.');
        }
      });
    // }
   }
   
   function show_fixed_loc_detail(){

    $('#all_gender_chk').prop('checked',false);
    $('#men_chk').prop('checked',false);
    $('#women_chk').prop('checked',false);
    $('#kids_chk').prop('checked',false);
    $('.team_mem_lst_sec, .visual_lst_sec').html('');
    $('#team_mem_f_sec').hide();
    $('.salon_cate_sec').html('');
    $('#gen_note_txt').val('');    
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
      url:"{{route('admin_ajx')}}",
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
            $('#all_gender_chk').prop('checked',true);
          if(salon.men=='1')
            $('#men_chk').prop('checked',true);
          if(salon.women=='1')
            $('#women_chk').prop('checked',true);
          if(salon.kids=='1')
            $('#kids_chk').prop('checked',true);
   
        var cate_str='<div class="" style="justify-content: space-between;display: flex;flex-wrap:wrap">';
          $.each(categories,function(k,v){
            if(k==0)var cls='active';
            else var cls='';
            cate_str+='<div class="cate_sec mb-3 cate_sec_'+v.id+'" onclick="show_salon_cate_detail(\'f\', \''+v.id+'\' ,\''+v.name+'\',\'0\')" data-cate="'+v.name+'"><div class="cate_cards shadow p-2 sub-temp-fixed-loc-card '+cls+'" id="cate_card_'+v.id+'">';
              // console.log(v.image);
              if(v.image!='' && v.image!==null)
                cate_str+='<img src="{{asset("public/imgs/category/")}}/'+v.image+'" style="width:auto;max-width:100%;">';
              else
                cate_str+='<img src="{{asset("public/imgs/placeholder-img.jpg")}}" style="width:auto;max-width:100%;">';
   
              cate_str+='<span>'+v.name+'</span>';
   
              
            cate_str+='</div></div>';
   
          });
          cate_str+='</div>';

          show_salon_cate_detail('f', categories[0].id ,categories[0].name,'0');
          
           var team_str='';
           if(team!='' && team.length>0){
            team_str = create_team_sec(team);
            $('#team_mem_f_sec').show();
            /*var team_str='';
            team_str+="<div style='' class='row mb-3'>";
            $.each(team,function(k,v){
              team_str+="<div class='border col-12 col-sm-5 col-md-3 mb-3 me-2 p-2' id='tm_sec_"+v.id+"' style='    position: relative;'>";
                team_str+="<p class='mb-4'>\""+v.bio+"\"</p>";
                team_str+="<div class='d-flex' style='align-items: flex-end;    height: 55px;margin-bottom: 37px;'>";
                  team_str+="<div class='mb-2 me-2'>";
                    if(v.image!='' && v.image!==null)
                      team_str+='<img src="{{asset("public/imgs/team/")}}/'+v.image+'" style="border: 1px solid #b1abab;width:50px;height: 50px;border-radius:35px">';
                    else
                      team_str+='<img src="{{asset("public/imgs/placeholder-img.jpg")}}" style="border: 1px solid #b1abab;height: 50px;width:50px;border-radius:35px">';
                  team_str+="</div>";

                  team_str+="<div class='mb-2'>";
                    team_str+="<p>"+v.member+"</p>";
                  team_str+="</div>";

                team_str+="</div>";

                team_str+='<p style="    position: absolute;right: 10px;bottom: 0;"><i class="ri-edit-box-line cursor-pointer" onclick="edit_team_member(\''+v.id+'\')"></i> &nbsp; <i class="ri-delete-bin-line text-danger cursor-pointer" onclick="delete_team_member(\''+v.id+'\')"></i></p>';
                
                
                team_str+="</div>";
            });

            team_str+="</div>";*/
            
          } 
          $('.team_mem_lst_sec').html(team_str);

          if(visual!='' && visual.length>0){
            var visual_str='';
            visual_str+="<div style='' class='row mb-3'>";
            $.each(visual,function(k,v){
              if(v.visual!='' && v.visual!==null){
                visual_str+="<div class=' col-6 col-sm-4 col-md-3 mb-3' id='vis_sec_"+v.id+"'>";
                visual_str+="<div class='border p-2' style='position: relative;height: 100%;'>";
                  visual_str+="<p style='position: absolute;left: 10px;top: 0;' ><label><input type='checkbox' name='vis_radio' class='vis_radio' value='"+v.id+"'></label></p>";
                  visual_str+='<img src="'+v.visual+'" style="max-width:100%;max-height: 100%;border-radius:35px">';
                  visual_str+="</div>";
                visual_str+="</div>";
              }
            });

            visual_str+="</div>";
            $('.visual_lst_sec').html(visual_str);
          } 

          /*if(team!='' && team.length>0){
            var team_str='';
            $.each(team,function(k,v){
              team_str+="<div style='' class='border row mb-3'>";
                team_str+="<div class='col-12 col-md-3 col-lg-3 pe-3 pe-md-4 mb-md-2 mb-2'>";
                  if(v.image!='')
                  team_str+='<img src="{{asset("public/imgs/team/")}}/'+v.image+'" style="width:90px">';
                else
                  team_str+='<img src="{{asset("public/imgs/placeholder-img.jpg")}}" style="width:90px"">';
                team_str+="</div>";
                team_str+="<div class='col-12 col-md-8 col-lg-8 mb-md-2 mb-2'><div>";
                  team_str+="<p>"+v.member+"</p>";
                team_str+="</div>";
                team_str+="<div>";
                  team_str+="<p>"+v.bio+"</p>";
                team_str+="</div></div>";
                team_str+="<div class='col-12 col-md-1 col-lg-1'>";
                  team_str+='<p><i class="ri-edit-box-line cursor-pointer" onclick="edit_team_member(\''+v.id+'\')"></i> &nbsp; <i class="ri-delete-bin-line fs-4 text-danger cursor-pointer" onclick="delete_team_member(\''+v.id+'\')"></i></p>';
                team_str+="</div>";
              team_str+="</div>";
            });
   
            $('.team_mem_lst_sec').html(team_str);
          }*/
   
          $('.salon_cate_sec').html(cate_str);
          $('#gen_note_txt').val(salon.note);
        
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
   
   function delete_des_location(sid){
    swal(
      '{{$lang_kwords["confirm_delete_location"]["english"]}}',
      {
        buttons: {
          cancel: "{{$lang_kwords['alert_cancel']['english']}}",
          catch: {
            text: "{{$lang_kwords['alert_ok']['english']}}",
          },
          defeat: false,
        },
      }
    )
    .then((value) => {
      switch (value) {
     
        case "defeat":
          swal("Got away safely!");
          break;
     
        case "catch":
          delete_des_location_act(sid);
          break;
     
        default:
          // swal("Got away safely!");
          return false;
      }
    });
   }

   function delete_des_location_act(sid){
    // if(!confirm('{{$lang_kwords["confirm_delete_location"]["english"]}}'))return false;
      $('#modalajx').modal('show');
    $.ajax({
      url:"{{route('admin_ajx')}}",
      type:'post',
      data:{'act':'delete_des_location','sid':sid, '_token' : '{{ csrf_token() }}'},
      dataType:'json',
      success: function(r)
      {
        $('#modalajx').modal('hide');
        if(r.status=='SUCCESS')
        { 
          // alert('Removed');
          location.reload();
        }
        if(r.status=='ERROR')
        {
          alert('Something went wrong. Please contact');
        }
      },
      error:function(){
        $('#modalajx').modal('hide');
        alert('Something went wrong. Please contact');
      }
    })
   
   }

   function delete_salon(sid){
    swal(
      '{{$lang_kwords["confirm_delete_location"]["english"]}}',
      {
        buttons: {
          cancel: "{{$lang_kwords['alert_cancel']['english']}}",
          catch: {
            text: "{{$lang_kwords['alert_ok']['english']}}",
          },
          defeat: false,
        },
      }
    )
    .then((value) => {
      switch (value) {
     
        case "defeat":
          swal("Got away safely!");
          break;
     
        case "catch":
          delete_salon_act(sid);
          break;
     
        default:
          // swal("Got away safely!");
          return false;
      }
    });
   }

   function delete_salon_act(sid){
    // if(!confirm('{{$lang_kwords["confirm_delete_location"]["english"]}}'))return false;
   $('#modalajx').modal('show');
    $.ajax({
      url:"{{route('admin_ajx')}}",
      type:'post',
      data:{'act':'delete_salon','sid':sid, '_token' : '{{ csrf_token() }}'},
      dataType:'json',
      success: function(r)
      {
        $('#modalajx').modal('hide');
        if(r.status=='SUCCESS')
        { 
          // alert('Removed');
          location.reload();
        }
        if(r.status=='ERROR')
        {
          alert('Something went wrong. Please contact');
        }
      },
      error:function(){
        $('#modalajx').modal('hide');
        alert('Something went wrong. Please contact');
      }
    })
   
   }
   
   function edit_salon(sid){
    if(sid!=''){
      $.ajax({
        url:"{{route('admin_ajx')}}",
        type:'post',
        data:{'act':'get_salon','sid':sid, '_token' : '{{ csrf_token() }}'},
        dataType:'json',
        success: function(r)
        {
          if(r.status=='SUCCESS')
          { 
            $('#sid').val(sid);
            $('#salon_act').val('update');
            $('#salon_name').val(r.salon_name);
            $('#salon_street').val(r.street);
            $('#salon_number').val(r.number);
            $('#salon_postal_code').val(r.postal_code);
            $('#salon_province').val(r.province);

            var municipality_list = r.municipality_list;

            var str='';
            $('#salon_municipality').find('option.pv').remove();
            if(municipality_list.length>0){
              $.each(municipality_list, function(k,v){
                if(r.municipality == v.name)
                  str+='<option class="pv" selected value="'+v.name+'">'+v.name+'</option>';
                else
                  str+='<option class="pv" value="'+v.name+'">'+v.name+'</option>';
              })
            }
            $('#salon_municipality').append(str);


            
            $('.salon_frm_sec, #form_submit2').show();
            $('html, body').animate({
                       scrollTop: $('#frm2').offset().top-30
                   }, 500);
          }
          if(r.status=='ERROR')
          {
            alert('Something went wrong. Please contact');
          }
        }
      })
    }
   }
   
   function form_validate2(){
    var salon_name = $('#salon_name').val();
    var street = $('#salon_street').val();
    var number = $('#salon_number').val();
    var postal_code = $('#salon_postal_code').val();
    var municipality = $('#salon_municipality').val();
    var province = $('#salon_province').val();
   
    if($.trim(salon_name)==''){
      $('#salon_name').focus();
      return false;
    }
    if($.trim(street)==''){
      $('#salon_street').focus();
      return false;
    }
    if($.trim(number)==''){
      $('#salon_number').focus();
      return false;
    }
    if($.trim(postal_code)==''){
      $('#salon_postal_code').focus();
      return false;
    }
    if($.trim(municipality)==''){
      $('#salon_municipality').focus();
      return false;
    }
    if($.trim(province)==''){
      $('#salon_province').focus();
      return false;
    }
   
    var frm=new FormData($('#frm2')[0]);
    // var modal = document.getElementById('myModal');
    $('#form_submit2').html('Wait..!').attr('disabled',true);
   
    $.ajax({
      url:"{{route('admin_salon_add')}}",
      type:'post',
      data:frm,
      contentType: false,
      processData:false,
      success: function(r)
      {
        $('#form_submit2').html('Save').attr('disabled',false);
        if(r=='SUC')
        { 
          $('#salon_name').val('');
          $('#salon_street').val('');
          $('#salon_number').val('');
          $('#salon_postal_code').val('');
          $('#salon_municipality').val('');
          $('#salon_province').val('');
          location.reload();
        }
        if(r=='ERR')
        {
          alert('Something went wrong. Please contact');
        }
      }
    })
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
    $('#gen_note_txt').val('');    
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
    $('#gen_note_txt').val('');    
    $('.salon_serv_for_sec,.sub_tem_fix_sec,.salon_cate_sec,.salon_note_sec,.team_mem_sec,.visual_sec').hide();
    $('.tbody').html('');
    $('.salon_cate_dt_sec').hide();
    $('#template_type').val('d');
    $('#fix_info_reg_sec').hide();
    $('#des_info_reg_sec').show();

    show_des_detail();
   }
   
   function edit_fix_bio_frm(){
    $('.frm_inp1').attr('disabled',false);
    $('#form_submit1').show();
   }
   
   function form_validate1(){
    var fixed_name = $('#fixed_name').val();
    var fixed_bio = $('#fixed_bio').val();
    if($.trim(fixed_name)==''){
      $('#fixed_name').focus();
      return false;
    }
    if($.trim(fixed_bio)==''){
      $('#fixed_bio').focus();
      return false;
    }
    
    $('#form_submit1').html('Wait..!').attr('disabled',true);
    var frm=new FormData($('#frm1')[0]);
    // var modal = document.getElementById('myModal');
   
    $.ajax({
      url:"{{route('admin_fixed_location_update')}}",
      type:'post',
      data:frm,
      contentType: false,
      processData:false,
      success: function(r)
      {
        if(r=='SUC')
        { 
          $('#form_submit1').html('Save').attr('disabled',false);
          $('.frm_inp1').attr('disabled',true);
          $('#form_submit1').hide();
        }
        if(r=='ERR')
        {
          alert('Something went wrong. Please contact');
        }
      }
    })
   }
   
   
   function edit_frm(){
    $('.frm_inp').attr('disabled',false);
    $('#form_submit').show();
   }
   
   function form_validate(){
    var legal_name = $('#legal_name').val();
    var coc = $('#coc').val();
    var vat = $('#vat').val();
    var street = $('#street').val();
    var postal = $('#postal').val();  
    var municipality = $('#municipality').val();  
    var province = $('#province').val();  
    var registration_doc = $('#registration_doc').val();  
    var contact_person_first_name = $('#contact_person_first_name').val();  
    var email = $('#email').val();  
    /*var password = $('#password').val();  
    var conf_password  = $('#conf_password  ').val(); */
   
   
    if($.trim(legal_name)==''){
      $('#legal_name').focus();
      return false;
    }
    if($.trim(coc)==''){
      $('#coc').focus();
      return false;
    }
    if($.trim(vat)==''){
      $('#vat').focus();
      return false;
    }
    if($.trim(street)==''){
      $('#street').focus();
      return false;
    }
    if($.trim(postal)==''){
      $('#postal').focus();
      return false;
    }
    if($.trim(municipality)==''){
      $('#municipality').focus();
      return false;
    }
    if($.trim(province)==''){
      $('#province').focus();
      return false;
    }
    if($.trim(contact_person_first_name)==''){
      $('#contact_person_first_name').focus();
      return false;
    }
   
    /*if($.trim(password)==''){
      $('#password').focus();
      return false;
    }
    if($.trim(conf_password)==''){
      $('#conf_password').focus();
      return false;
    }
    
    if(password!=conf_password){
      $('#conf_password').focus();
      return false;
    }*/
   
    $('#frm').submit();
   }
   
   
   /*Desire Location*/
   
   function edit_des_bio_frm(){
    $('.des_frm_inp1').attr('disabled',false);
    $('#des_form_submit1').show();
   }
   
   function des_form_validate1(){
    var desire_name = $('#desire_name').val();
    var desire_bio = $('#desire_bio').val();
    if($.trim(desire_name)==''){
      $('#desire_name').focus();
      return false;
    }
    if($.trim(desire_bio)==''){
      $('#desire_bio').focus();
      return false;
    }
    
    $('#des_form_submit1').html('Wait..!').attr('disabled',true);
    var frm=new FormData($('#des_frm1')[0]);
    // var modal = document.getElementById('myModal');
   
    $.ajax({
      url:"{{route('admin_desire_location_update')}}",
      type:'post',
      data:frm,
      contentType: false,
      processData:false,
      success: function(r)
      {
          $('#des_form_submit1').html('Save').attr('disabled',false);
        if(r=='SUC')
        { 
          // alert('Updated');
          $('.des_frm_inp1').attr('disabled',true);
        $('#des_form_submit1').hide();
        }
        if(r=='ERR')
        {
          alert('Something went wrong. Please contact');
        }
      }
    })
   }

   function delete_service(sid){
    if(sid==''){return false;}

    swal(
      '{{$lang_kwords["confirm_delete_service"]["english"]}}',
      {
        buttons: {
          cancel: "{{$lang_kwords['alert_cancel']['english']}}",
          catch: {
            text: "{{$lang_kwords['alert_ok']['english']}}",
          },
          defeat: false,
        },
      }
    )
    .then((value) => {
      switch (value) {
     
        case "defeat":
          swal("Got away safely!");
          break;
     
        case "catch":
          delete_service_act(sid);
          break;
     
        default:
          // swal("Got away safely!");
          return false;
      }
    });
   }

   function delete_service_act(sid){
    if(sid!=''){
      // if(!confirm('{{$lang_kwords["confirm_delete_service"]["english"]}}'))return true;

      $.ajax({
        url:"{{route('admin_ajx')}}",
        type:'post',
        data:{'act':'remove_service','sid':sid, '_token' : '{{ csrf_token() }}','prof_id':$('#prof_id').val()},
        dataType:'json',
        success: function(r)
        {
          if(r.status=='SUCCESS')
          { 

            $('#serv_sec_m_'+sid).remove();
            /*$('#sid').val(sid);
            $('#salon_act').val('update');
            $('#salon_name').val(r.salon_name);
            $('#salon_street').val(r.street);
            $('#salon_number').val(r.number);
            $('#salon_postal_code').val(r.postal_code);
            $('#salon_municipality').val(r.municipality);
            $('#salon_province').val(r.province);
            $('.salon_frm_sec, #form_submit2').show();
            alert('Removed');*/
          }
          if(r.status=='ERROR')
          {
            alert('Something went wrong. Please contact');
          }
        }
      })
    }
   }
 
    function enable_gen_note(){
    $('#gen_not_btn').show();
    $('#gen_note_txt').attr('readonly',false);
  } 

  function enable_team_frm(){
   // console.log('aaaaaaaaa');
      $('#team_cate_sec,#team_serv_sec').html('');
      $('#team_s_sec_mn').hide();
      $('#frm3').show();
      $('#team_member_name').val('');
      $('#team_member_bio').val('');
      $('#tm_i').val('');
      $('#team_mem_img').val('');
      $('#tm_act').val('add');
      $('#tm_img_preview').attr('src',"{{ URL::asset('public/images/blank_img_icon.png')}}");
      $('.tm_img1').hide().attr('src','');
      $('.tm_iu').show();
      

      $.ajax({
         url:"{{route('admin_ajx')}}",
         type:'post',
         data:{'act':'get_cate_serv', '_token' : '{{ csrf_token() }}','prof_id':$('#prof_id').val(),'temp_type':$('#template_type').val()},
         dataType:'json',
         success: function(r)
         {
          if(r.status=='SUCCESS')
          { 
            var service = r.service;
            var category = r.category;

            if(service.length>0){
               var str='<label class="me-3"><input type="checkbox" name="team_service[]" class="temp_serv_all" value="all" onclick="sel_all_temp_serv()"> All</label>';
               $.each(service, function(k,v){
                  str+='<label class="me-3"><input type="checkbox" name="team_service[]" class="temp_serv" value="'+v.i+'"> '+v.service_name+'</label>';
               });
               $('#team_serv_sec').html(str);
               $('#team_s_sec_mn').show();
            }
            else{
               // $('#team_service').html('').hide();
               $('#team_s_sec_mn').hide();
            }

            var str1='<label class="me-3"><input type="checkbox" name="team_cate[]" class="temp_ct_all" value="all" onclick="sel_all_temp_ct()"> All</label>';
            $.each(category, function(k,v){
               str1+='<label class="me-3"><input type="checkbox" class="temp_ct" name="team_cate[]" value="'+v.i+'"> '+v.cat+'</label>';
            });

            $('#team_cate_sec').html(str1);

          }
          if(r.status=='ERROR')
          {
            alert('Something went wrong. Please contact');
          }
         },
         error:function(e){
           alert('Something went wrong. Please contact');
         }
      });

    
  }

  function show_hide_des_mun_ul(el){
    console.log('aaaa');
    var el1 = el.siblings('.des_mun_ul');
    console.log(el1);
    el1.toggle();
  }

  function create_team_sec(team){
    var team_str="<div style='' class='row mb-3'>";
    $.each(team,function(k,v){

      if(!v.bio)
         v.bio='';

      team_str+="<div class='border col-12 col-sm-5 col-md-3 mb-3 me-2 p-2' id='tm_sec_"+v.id+"' style='    position: relative;'>";
        team_str+="<p class='mb-4'>\""+v.bio+"\"</p>";
        team_str+="<div class='d-flex' style='align-items: flex-end;    height: 55px;margin-bottom: 10px;'>";
          team_str+="<div class='mb-2 me-2'>";
            if(v.image!='' && v.image!==null)
              team_str+='<img src="{{asset("public/imgs/team/")}}/'+v.image+'" style="border: 1px solid #b1abab;width:50px;height: 50px;border-radius:35px">';
            else
              team_str+='<img src="{{asset("public/imgs/placeholder-img.jpg")}}" style="border: 1px solid #b1abab;height: 50px;width:50px;border-radius:35px">';
          team_str+="</div>";

          team_str+="<div class='mb-2'>";
            team_str+="<p>"+v.member+"</p>";
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
                      team_str+='<select id="">';

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

        team_str+='<p class="mb-0" style="position: absolute;right: 10px;bottom: 0;"><i class="ri-edit-box-line cursor-pointer" onclick="edit_team_member(\''+v.id+'\')"></i> &nbsp; <i class="ri-delete-bin-line text-danger cursor-pointer" onclick="delete_team_member(\''+v.id+'\')"></i></p>';
        
        team_str+="</div>";
    });

    team_str+="</div>";

    return team_str;
  }

function ValidateSize(file,ph) {
        /*var FileSize = file.files[0].size / 1024 / 1024;
        if (FileSize > 10) {
            alert('File size exceeds 10 MB');
            if(ph=='')
              $(file).val('');  
            else
              $('#'+ph).val('');  
            return 0;        
        }*/
       
  var val = $("#"+ph).val();
  var flg=0;
       
    console.log(val);
    switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase()){
        case 'jpeg': case 'jpg':  case 'png': 
            flg=1;            
            break;
        default:
              $("#"+ph).val('');
              alert("Valid format: jpeg, jpg, png");
            break;
    }
    return flg;
}

function readURL(input,ph) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      
      if(ph=='doc-reg-coc')
        $('#registration_doc_prev').attr('src', e.target.result).show();

      if(ph=='fixed_pic'){
        $('.fx_img1').attr('src', e.target.result).show();
        $('.fx_iu').hide();
      }

      if(ph=='team_mem_img'){
        $('.tm_img1').attr('src', e.target.result).show();
        $('.tm_iu').hide();
      }

      if(ph=='desire_pic'){
        $('.ds_img1').attr('src', e.target.result).show();
        $('.ds_iu').hide();
      }

        // $('#img_not_up_spn').hide();
        
    };
    reader.readAsDataURL(input.files[0]);
  }
}

function set_url(t){
    const url = new URL(window.location.href);
    url.searchParams.set('t', t);
    window.history.replaceState(null, null, url);
}

function edit_des_location(di)
{
  if(di!='' && di!='0'){
    $.ajax({
        url:"{{route('admin_ajx')}}",
        type:'post',
        data:{'act':'get_des_location','di':di, '_token' : '{{ csrf_token() }}'},
        dataType:'json',
        success: function(r)
        {
          if(r.status=='SUCCESS')
          { 
           
            var data = r.data;
            if(data.desire_location_type=='specific'){
              $('.add_province_sec,.add_mun_spn,#des_form_submit2').show();
              $('#des_frm2').find('input[name="act"]').val('edit');
              $('#des_frm2').find('input#lid').val(di);
              $('#des_province').val(data.desire_province).attr('disabled',true);

              if(data.desire_municipality.length>0){
                $.each(data.desire_municipality,function(k,v){
                  var str='<div class="d-flex border px-2 py-1 me-2 sel_municipality_box">';
                    str+='<span class="d-flex align-items-center selected_municipality">'+v+'</span>&nbsp;&nbsp;<span class="d-flex align-items-center cursor-pointer" onclick="remove_municipality($(this))">&times;</span>';
                  str+='</div>';
                  $('.sel_mun_list').append(str).show();
                });
              }
              var municipality_list = data.municipality_list;

              var str='';
              $('#des_municipality').find('option.pv').remove();
              if(municipality_list.length>0){
                $.each(municipality_list, function(k,v){
                    str+='<option class="pv" value="'+v.name+'">'+v.name+'</option>';
                })
              }
              $('#des_municipality').append(str);
              
            }

            // $('.salon_frm_sec, #form_submit2').show();
            /*$('html, body').animate({
                       scrollTop: $('#frm2').offset().top-30
                   }, 500);*/
          }
          if(r.status=='ERROR')
          {
            alert('Something went wrong. Please contact');
          }
        }
      })
  }
}  

function sel_all_temp_ct(){
   $('.temp_ct').prop('checked',true);
   show_h_temp_service();
   check_all_tmserv();
}

function sel_all_temp_serv(){
  let car = new Array;
  $('.temp_ct:checked').each(function(){
      car.push($(this).val());
  });

  $('.temp_serv').each(function(){
    if(jQuery.inArray($(this).attr('data-c'), car) != -1) {
        $(this).prop('checked',true);  
    }
  })
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


function remove_reg_doc(id){
  swal(
      '{{$lang_kwords["confirm_delete_doc"]["english"]}}',
      {
        buttons: {
          cancel: "{{$lang_kwords['alert_cancel']['english']}}",
          catch: {
            text: "{{$lang_kwords['alert_ok']['english']}}",
          },
          defeat: false,
        },
      }
    )
    .then((value) => {
      switch (value) {
     
        case "defeat":
          swal("Got away safely!");
          break;
     
        case "catch":
          remove_reg_doc_act(id);
          break;
     
        default:
          // swal("Got away safely!");
          return false;
      }
    });
}

function remove_reg_doc_act(id){
   // if(!confirm('{{$lang_kwords["confirm_delete_doc"]["english"]}}'))return false;

   $.ajax({
        url:"{{route('admin_ajx')}}",
        type:'post',
        data:{'act':'remove_reg_doc','id':id, '_token' : '{{ csrf_token() }}'},
        dataType:'json',
        success: function(r)
        {
          if(r.status=='SUCCESS')
          { 
           $('#reg_doc_sec_'+id).remove();
          }
          if(r.status=='ERROR')
          {
            alert('Something went wrong. Please contact');
          }
        }
      })
}
function close_team_form(){
  $('#frm3').hide();
  $('#team_member_name').val('');
  $('#team_member_bio').val('');
  $('#tm_i').val('');
  $('#team_mem_img').val('');
  $('#tm_act').val('add');
  $('#tm_img_preview').attr('src',"{{ URL::asset('public/images/blank_img_icon.png')}}");
  $('.tm_img1').hide().attr('src','');
  $('.tm_iu').show();
  $('#team_cate_sec,#team_serv_sec').html('');
  $('#team_s_sec_mn').hide();
}

function add_province_act(){
  $('.add_province_sec,#des_form_submit2').show();
  $('#des_province').val('').attr('disabled',false);
  $('.sel_mun_list').html('');
  $('#des_frm2').find('input[name="act"]').val('add');
  $('#des_frm2').find('input#lid').val('');
}

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