@include('salon/header')
<style type="text/css">
   .cursor-pointer{cursor: pointer;}
   .cs_btn{font-size: 14px!important;
   width: fit-content;
   padding: 3px 8px!important;}
   .loc_type_card.active{background-color: #78c694;color:#fff;}
   .sub-temp-card.active{background-color: #78c694!important}
</style>
<!--Tabs Start-->
<div class="container mb-4">
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
</div>
<!--Tabs End-->
<!--Professional Profile Start-->
<div class="container mb-4 info_form">
   <div class="accordion">
      <div class="accordion-item border-0 rounded">
         <input type="hidden" id="csrf-token" value="{{ Session::token() }}" />
         <h2 class="accordion-header" id="user-info-heading">
            <button class="block-heading accordion-button p-2 text-white rounded fs-5 @if($prof->status=='approve') collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#user-info-body" aria-expanded="true" aria-controls="user-info-body">
            Professional Profile
            </button>
         </h2>
         @if($prof->status!='approve') 
          <div class="alert alert-success fw-bold text-center" role="alert">
            Your detail is not approved. Please contact to our Team for more information.
          </div>
         @endif 

         <!-- <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3">Professional Profile</div> -->
         <div id="user-info-body" class="accordion-collapse collapse @if($prof->status!='approve') show @endif border mt-2" aria-labelledby="user-info-heading" data-bs-parent="#user-info">
            <div class="accordion-body">
               <div class="bg-white p-4 ">
                  <div class="text-end"><span onclick="edit_frm()" class="cursor-pointer"><i class="ri-edit-box-line text-custom-primary icon-textarea "></i>Edit</span></div>
                  <form action="{{route('dashboard')}}" id="frm" class="info_form" method="post" enctype="multipart/form-data">
                     <input type="hidden" name="_token" value="{{ Session::token() }}" />
                     <input type="hidden" name="act" value="profile">
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
                        Your Detail has beed updated.
                     </div>
                     @endif
                     <!-- <div class="overflow-scroll">
                        <table class="pro-prof-table w-100 mb-5">
                          <tr>
                            <th>PROFILE</th>
                            <th>BOOKING</th>
                            <th>CALENDAR</th>
                            <th>TRANSACTION</th>
                            <th>ANALYSIS</th>
                            <th>CARD SETTINGS</th>
                          </tr>
                          <tr>
                            <td>User Info</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Professional Info</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </table>
                        </div> -->
                     <div class="d-flex align-items-center mb-4">
                        <div class="form-number d-flex align-items-center justify-content-center me-4">1</div>
                        <span class="form-number-label me-2">USER INFO</span>
                        <div class="form-header-line flex-grow-1"></div>
                     </div>
                     <div class="form-block mb-5">
                        <div class="form-row mb-4">
                           <div class="label-container">
                              <label class="fs-5 text-nowrap d-block">Legal Name</label>
                              <small>(Name with a legal form e.g. Mollure B.V.)</small>
                           </div>
                           <div class="field-container"><input type="text" class="form-control frm_inp" disabled name="legal_name" id="legal_name" value="{{ $prof->legal_name }}" /></div>
                        </div>
                        <div class="form-row mb-4">
                           <div class="label-container"><label class="fs-5 text-nowrap d-block">COC Number</label></div>
                           <div class="field-container"><input type="text" class="form-control frm_inp" disabled name="coc" id="coc" value="{{ $prof->coc }}" /></div>
                        </div>
                        <div class="form-row mb-4">
                           <div class="label-container"><label class="fs-5 text-nowrap d-block">VAT Number</label></div>
                           <div class="field-container"><input type="text" class="form-control frm_inp" disabled name="vat" id="vat" value="{{ $prof->vat }}" /></div>
                        </div>
                     </div>
                     <div class="d-flex align-items-center mb-4">
                        <div class="form-number d-flex align-items-center justify-content-center me-4">2</div>
                        <div class="d-flex flex-column">
                           <span class="form-number-label me-2">ADDRESS</span>
                           <small>linked to coc and vat number</small>
                        </div>
                        <div class="form-header-line flex-grow-1"></div>
                     </div>
                     <div class="form-block">
                        <div class="form-row mb-4">
                           <div class="label-container"><label class="fs-5 text-nowrap d-block">Street</label></div>
                           <div class="field-container"><input type="text" class="form-control frm_inp" disabled name="street" id="street" value="{{ $prof->prof_address[0]->street }}" /></div>
                        </div>
                        <div class="form-row mb-4">
                           <div class="label-container"><label class="fs-5 text-nowrap d-block">Number</label></div>
                           <div class="field-container"><input type="text" class="form-control frm_inp" disabled name="number" id="number" value="{{ $prof->prof_address[0]->number }}" /></div>
                        </div>
                        <div class="form-row mb-4">
                           <div class="label-container"><label class="fs-5 text-nowrap d-block">Postal Code</label></div>
                           <div class="field-container"><input type="text" class="form-control frm_inp" disabled name="postal" id="postal" value="{{ $prof->prof_address[0]->postal }}" /></div>
                        </div>
                        <div class="form-row mb-4">
                           <div class="label-container"><label class="fs-5 text-nowrap d-block">Municipality</label></div>
                           <div class="field-container">
                              <select class="form-select bg-light frm_inp" disabled name="municipality" id="municipality">
                                 <option>Select</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-row mb-4">
                           <div class="label-container"><label class="fs-5 text-nowrap d-block">Province</label></div>
                           <div class="field-container">
                              <select class="form-select bg-light frm_inp" disabled name="province" id="province">
                                 <option>Select</option>
                              </select>
                           </div>
                        </div>
                        <div class="mb-4">
                           <div class="form-row justify-content-between">
                            <div class="row">
                              <div class="col-md-8 col-sm-6 col-12">
                                 <label class="fs-5 text-wrap form-label">Professional must provide documentation of registration in Chamber of Commerce</label>
                              </div>
                              <div class="col-md-2 col-sm-3 col-12">
                                 <label
                                    for="doc-reg-coc"
                                    class="form-control d-flex align-items-center justify-content-between w-lg-25 w-sm-100 bg-light frm_inp"
                                    >
                                 <span>Upload</span>
                                 <i class="ri-upload-2-line"></i>
                                 </label>
                                 <input id="doc-reg-coc" type="file" class="d-none" accept="image/png,image/jpeg" />
                              </div>
                              <div class="col-md-2 col-sm-3 col-12">
                                 <img src="{{ URL::asset('public/imgs/docs/')}}/{{$prof->prof_address[0]->registration_doc}}" style="width:100px" class="border p-1">
                              </div>
                            </div>
                           </div>
                        </div>
                        <div class="form-row mb-4">
                           <div class="label-container"><label class="fs-5 text-nowrap d-block">Contact Person</label></div>
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
                           <div class="label-container"><label class="fs-5 text-nowrap d-block">Contact Number</label></div>
                           <div class="field-container"><input type="text" class="form-control frm_inp" disabled name="contact_number" id="contact_number" value="{{ $prof->prof_address[0]->contact_number }}" /></div>
                        </div>
                        <div class="mb-4">
                           <label class="fs-5 text-wrap d-block mb-3 form-label"
                              >Professional must provide examples of past work that satisfy Mollure's quality and professional
                           standards</label
                              >
                           <input type="text" class="form-control frm_inp" placeholder="Insta Link, website link" disabled name="insta_link" id="insta_link" value="{{ $prof->prof_address[0]->insta_link }}" />
                        </div>
                        <div class="form-row mb-4">
                           <div class="label-container"><label class="fs-5 text-nowrap d-block">Passwords</label></div>
                           <div class="field-container"><input type="password" class="form-control frm_inp" disabled name="password" id="password" value="" /></div>
                        </div>
                        <div class="form-row mb-4">
                           <div class="label-container"><label class="fs-5 text-nowrap d-block">Repeat Password</label></div>
                           <div class="field-container"><input type="password" class="form-control frm_inp" disabled name="conf_password" id="conf_password" value="" /></div>
                        </div>
                        <div class="form-row mb-4">
                           <div class="label-container"><label class="fs-5 text-nowrap d-block">Gender</label></div>
                           <div class="field-container d-flex align-items-center flex-wrap">
                              <div class="form-check me-5">
                                 <input class="form-check-input frm_inp" type="radio" disabled name="gender" id="male"  value="male" <?=$c = ($prof->prof_address[0]->gender=='male')?'checked':'';?>/>
                                 <label class="form-check-label" for="male"> Male </label>
                              </div>
                              <div class="form-check me-5">
                                 <input class="form-check-input frm_inp" type="radio" disabled name="gender" id="female"  value="female" <?=$c = ($prof->prof_address[0]->gender=='female')?'checked':'';?>/>
                                 <label class="form-check-label" for="female"> Female </label>
                              </div>
                              <div class="form-check me-5">
                                 <input class="form-check-input frm_inp" type="radio" disabled name="gender" id="neutral"  value="neutral" <?=$c = ($prof->prof_address[0]->gender=='neutral')?'checked':'';?>/>
                                 <label class="form-check-label" for="neutral"> Gender Neutral </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input me-2 frm_inp" type="radio" disabled name="gender" id="not_prefer"  value="not_prefer" <?=$c = ($prof->prof_address[0]->gender=='not_prefer')?'checked':'';?>/>
                                 <label class="form-check-label" for="not_prefer"> I prefer not to answer </label>
                              </div>
                           </div>
                        </div>
                        <!-- <div class="form-check d-flex align-items-center mb-4">
                           <input class="form-check-input me-3" type="checkbox" value="" id="flexCheckDefault" />
                           <label class="form-check-label fs-5 form-label" for="flexCheckDefault"> Accept our terms and conditions </label>
                           </div> -->
                        <div class="d-flex justify-content-center">
                           <button class="btn custom-btn-primary fs-5" type="button" name="form_submit" id="form_submit" style="display:none" value="Update" onclick="form_validate()">SUBMIT</button>
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
            Professional Template
            </button>
         </h2>
         <!-- <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3">Professional Template</div> -->
         <div id="professional-template-body" class="accordion-collapse collapse show" aria-labelledby="professional-template-heading" data-bs-parent="#professional-template">
            <div class="accordion-body">
               <div class="bg-white rounded">
                  <div class="d-flex border mb-3">
                     <div class="w-50 border-end p-2">
                        <div class="loc_type_card _fix_loc active text-custom-dark fw-custom-bold fs-5 text-center p-2 cursor-pointer" onclick="show_fix_loc_sec()">Fixed Location</div>
                     </div>
                     <div class="w-50  p-2">
                        <div class="loc_type_card _des_loc text-custom-dark fw-custom-bold fs-5 text-center p-2 cursor-pointer" onclick="show_des_loc_sec()">Desired Location</div>
                     </div>
                  </div>
                  <div class="fix_loc_sec">
                    <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3 mx-2">
                      Subtemplate Fixed Location
                    </div>
                     <form action="{{route('fixed_location_update')}}" id="frm1" class="fix_loc_form" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ Session::token() }}" />
                        <div class="row px-4 sub-temp-fixed-loc mb-4">
                           <div class="col-12 mb-2 mb-lg-0 col-lg-3 pe-lg-4">
                              <input type="file" class="frm_inp1 d-none" disabled name="fixed_pic" id="fixed_pic"  accept="image/png,image/jpeg"/>
                              <label
                                 for="fixed_pic"
                                 class="h-100 bg-custom-light d-flex align-items-center justify-content-center"
                                 >
                              @if($prof->fixed_pic!='')
                              <img src="{{asset('public/imgs/template/'.$prof->fixed_pic)}}" style="width:90px" class="img1">
                              @else
                              <i class="ri-upload-2-line" style="font-size: 64px; color: #929292"></i>
                              @endif
                              </label>
                           </div>
                           <div class="col-12 col-lg-9">
                              <div class="form-icon icon-right-align mb-2">
                                 <input class="form-control form-control-icon frm_inp1" type="text" placeholder="Professional name/Salon name"  disabled name="fixed_name" id="fixed_name" value="{{$prof->fixed_name}}"/>
                                 <i class="ri-edit-box-line text-custom-primary fs-5 cursor-pointer" onclick="edit_fix_bio_frm()"></i>
                              </div>
                              <div class="form-icon icon-right-align">
                                 <textarea class="form-control form-control-icon frm_inp1" type="text" placeholder="Bio" disabled name="fixed_bio" id="fixed_bio">{{$prof->fixed_bio}}</textarea>
                                 <!-- <i class="ri-edit-box-line text-custom-primary icon-textarea fs-5"></i> -->
                              </div>
                           </div>
                        </div>
                        <div class="d-flex justify-content-center mb-5">
                           <button class="btn custom-btn-primary fs-5" type="button" name="form_submit1" id="form_submit1" style="display:none" value="Save" onclick="form_validate1()">SAVE</button>
                        </div>
                     </form>
                     <div class="p-4">
                        <div class="overflow-scroll">
                           <form action="{{route('fixed_location_update')}}" id="frm2" class="fix_loc_form" method="post" enctype="multipart/form-data">
                              <input type="hidden" name="_token" value="{{ Session::token() }}" />
                              <input type="hidden" name="type" value="f" />
                              <input type="hidden" name="act" id="salon_act" value="add" />
                              <input type="hidden" name="sid" id="sid" value="" />
                              <table class="sub-temp-table">
                                 <tr>
                                    <th>Salon Name</th>
                                    <th>Street</th>
                                    <th>Number</th>
                                    <th>Postal Code</th>
                                    <th>Municipality</th>
                                    <th>Province</th>
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
                                       <select class="form-select" name="municipality" id="salon_municipality">
                                          <option>Select</option>
                                          <option value="Test Municipality">Test Municipality</option>
                                       </select>
                                    </td>
                                    <td>
                                       <select class="form-select" name="province" id="salon_province">
                                          <option>Select</option>
                                          <option value="Test Province">Test Province</option>
                                       </select>
                                    </td>
                                 </tr>
                              </table>
                           </form>
                        </div>
                     </div>
                     <div class="d-flex justify-content-end mb-5 px-4">
                        <button class="btn custom-btn-primary fs-5" type="button" name="form_submit2" id="form_submit2"value="Save" onclick="form_validate2()">SAVE</button>
                     </div>
                     <div class="row px-4 mb-5">
                        @if($fixed_loc_salon && count($fixed_loc_salon)>0)
                        @foreach($fixed_loc_salon as $k=>$salon)
                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                           <div class="sub-temp-card d-flex justify-content-between p-4 rounded" id="sub-temp-card_{{$salon->id}}">
                              <i class="ri-map-pin-2-fill location-icon"></i>
                              <div class="d-flex flex-column text-white fs-6 z-index-1">
                                 <label class="mb-2">Salon Name: {{$salon->salon_name}}</label>
                                 <label class="mb-2">Street: {{$salon->street}}</label>
                                 <label class="mb-2">Postal Code: {{$salon->number}}</label>
                                 <label class="mb-2">Number: {{$salon->postal_code}}</label>
                                 <label class="mb-2">Municipality: {{$salon->municipality}}</label>
                                 <label class="mb-2">Province: {{$salon->province}}</label>
                              </div>
                              <div class="d-flex flex-column justify-content-between align-items-end z-index-1">
                                 <div class="d-flex text-white fs-4">
                                    <i class="ri-check-fill me-2 cursor-pointer" onclick="show_salon_detail('{{$salon->id}}','{{$salon->salon_name}}')"></i>
                                    <i class="ri-edit-box-line cursor-pointer" onclick="edit_salon('{{$salon->id}}')"></i>
                                 </div>
                                 <i class="ri-delete-bin-line fs-4 text-danger cursor-pointer" onclick="delete_salon('{{$salon->id}}')"></i>
                              </div>
                           </div>
                        </div>
                        @endforeach
                        @endif
                     </div>
                     <div class="px-4 pb-4">
                        <div class="px-5 py-4 rounded salon_serv_for_sec" style="background-color: #f5f3f4;display:none">
                           <h5 style="color: #3bb0b7" class="mb-3">SERVICES FOR</h5>
                           <div class="d-flex flex-wrap">
                              <div class="form-check d-flex align-items-center me-5">
                                 <input class="form-check-input me-3" type="checkbox" name="all_gender_chk" value=""  id="all_gender_chk" />
                                 <label class="form-check-label fs-5" for="all_gender_chk"> All Genders </label>
                              </div>
                              <div class="form-check d-flex align-items-center me-5">
                                 <input class="form-check-input me-3" type="checkbox" name="men_chk" value=""  id="men_chk" />
                                 <label class="form-check-label fs-5" for="men_chk"> Male Only </label>
                              </div>
                              <div class="form-check d-flex align-items-center me-5">
                                 <input class="form-check-input me-3" type="checkbox" name="women_chk" value=""  id="women_chk" />
                                 <label class="form-check-label fs-5" for="women_chk"> Female Only </label>
                              </div>
                              <div class="form-check d-flex align-items-center me-5">
                                 <input class="form-check-input me-3" type="checkbox" name="kids_chk" value=""  id="kids_chk" />
                                 <label class="form-check-label fs-5" for="kids_chk"> Kids Only </label>
                              </div>
                           </div>
                           <div class="d-flex justify-content-end mb-0 px-4">
                              <button class="btn custom-btn-primary fs-5" id="serv_for_btn" type="button" value="Save" onclick="save_service_for()">SAVE</button>
                           </div>
                        </div>
                     </div>
                  </div>

                  <!-- Desire location -->
                  <div class="dis_loc_sec" style="display:none">
                    <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3 mx-2 des_title2">
                      Sub Template Desire Location
                    </div>
                     <form action="{{route('fixed_location_update')}}" id="des_frm1" class="des_loc_form" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ Session::token() }}" />
                        <div class="row px-4 sub-temp-fixed-loc mb-4">
                           <div class="col-12 mb-2 mb-lg-0 col-lg-3 pe-lg-4">
                              <input type="file" class="des_frm_inp1 d-none" disabled name="desire_pic" id="desire_pic" accept="image/png,image/jpeg"/>
                              <label
                                 for="desire_pic"
                                 class="h-100 bg-custom-light d-flex align-items-center justify-content-center"
                                 >
                              @if($prof->desire_pic!='')
                              <img src="{{asset('public/imgs/template/'.$prof->desire_pic)}}" style="width:90px" class="img1">
                              @else
                              <i class="ri-upload-2-line" style="font-size: 64px; color: #929292"></i>
                              @endif
                              </label>
                           </div>
                           <div class="col-12 col-lg-9">
                              <div class="form-icon icon-right-align mb-2">
                                 <input class="form-control form-control-icon des_frm_inp1" type="text" placeholder="Professional name/Salon name"  disabled name="desire_name" id="desire_name" value="{{$prof->desire_name}}"/>
                                 <i class="ri-edit-box-line text-custom-primary fs-5 cursor-pointer" onclick="edit_des_bio_frm()"></i>
                              </div>
                              <div class="form-icon icon-right-align">
                                 <textarea class="form-control form-control-icon des_frm_inp1" type="text" placeholder="Bio" disabled name="desire_bio" id="desire_bio" value="{{$prof->desire_bio}}"></textarea>
                                 <!-- <i class="ri-edit-box-line text-custom-primary icon-textarea fs-5"></i> -->
                              </div>
                           </div>
                        </div>
                        <div class="d-flex justify-content-center mb-5">
                           <button class="btn custom-btn-primary fs-5" type="button" name="des_form_submit1" id="des_form_submit1" style="display:none" value="Save" onclick="des_form_validate1()">SAVE</button>
                        </div>
                     </form>
                     <div class="px-4 py-2 mb-4" style="background-color: #f5f3f4;">
                        <div class="px-5 py-4 rounded " style="background-color: #f5f3f4;">
                           <div class="d-flex flex-wrap">
                              <div class="form-check d-flex align-items-center mx-auto">
                                 <input class="form-check-input me-2 des_loc_type" type="radio" name="des_serv_lc" value="everywhere"  id="des_serv_lc_e" />
                                 <label class="form-check-label fs-5" for="des_serv_lc_e"> Everywhere in Netherland</label>
                              </div>
                              <div class="form-check d-flex align-items-center mx-auto">
                                 <input class="form-check-input me-2 des_loc_type" type="radio" name="des_serv_lc" value="specific"  id="des_serv_lc_s" />
                                 <label class="form-check-label fs-5" for="des_serv_lc_s"> Specific Provinces </label>
                              </div>
                              <div class="form-check d-flex align-items-center mx-auto">
                                 <button type="button" id="des_add_prov_btn" style="display:none" class="btn cs_btn gradient-btn" onclick="add_subservice_act('2')">+ Add Province</button>
                              </div>
                           </div>
                        </div>
                     

                        <div class="add_province_sec" style="display:none">
                          <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3 mx-2">
                            Add Province
                          </div>
                          <div class="p-4">
                              <form action="" id="des_frm2" class="" method="post" enctype="multipart/form-data">
                                  <input type="hidden" name="_token" value="{{ Session::token() }}" />
                                  <input type="hidden" name="type" value="d" />
                                  <input type="hidden" name="act" id="" value="add" />
                                  <input type="hidden" name="lid" id="lid" value="" />
                                  <div class="row">
                                    <div class="col-md-4">
                                      <select class="form-select" name="des_province" id="des_province" onchange="get_municiplaity()">
                                          <option value="">Select Province</option>
                                          <option value="Test Province">Test Province</option>
                                       </select>
                                    </div>
                                    <div class="col-md-4">
                                      <select class="form-select" name="des_municipality" id="des_municipality" style="display:none" onchange="add_pro_municipality()">
                                          <option value="">Select Municipality</option>
                                          <option value="Test Municipality">Test Municipality</option>
                                       </select>
                                    </div>
                                    <div class="col-md-4 text-end">
                                      <span class="cursor-pointer add_mun_spn" style="display:none" onclick="show_pro_municipality()">+ Add Municipality</span>
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
                          <button class="btn custom-btn-primary fs-5" style="display:none" type="button" name="des_form_submit2" id="des_form_submit2"value="Save" onclick="des_form_validate2()">SAVE</button>
                       </div>

                        <div class="alert alert-success py-1 w-100 text-center" id="spn_des_frm2" style="display:none"><b>Updated</b></div>
                     </div>
                     <div class="row px-4 mb-5">
                        @if($des_loc_salon && count($des_loc_salon)>0)
                        <h5 class="text-custom-primary">Selected Provinces and Municipality</h5>
                        <div class="d-flex flex-wrap">
                        @foreach($des_loc_salon as $k=>$des_loc)
                        <div class="d-flex align-items-center rounded border me-2">
                           <div class="d-flex align-items-center">
                              <div class="flex-column px-2 py-1 me-2">
                                <div class="form-check">
                                   <input class="form-check-input me-2" name="selected_des_provinces" type="radio" value="{{$des_loc->id}}" id="des_serv_lc_{{$des_loc->id}}" onchange="show_des_detail('{{$des_loc->id}}','{{$des_loc->desire_province}}')"/>
                                   <label class="form-check-label" for="des_serv_lc_{{$des_loc->id}}"> {{$des_loc->desire_province}} </label>
                                </div>
                                
                              </div>
                              <div class="flex-column block-heading px-1"><i class="ri-delete-bin-line fs-4 text-danger cursor-pointer" onclick="delete_salon('{{$des_loc->id}}')"></i></div>
                           </div>
                        </div>
                        @endforeach
                        </div>
                        @endif
                     </div>
                     <div class="px-4 pb-4">
                        <div class="px-5 py-4 rounded des_salon_serv_for_sec" style="background-color: #f5f3f4;display:none">
                           <h5 style="color: #3bb0b7" class="mb-3">SERVICES FOR</h5>
                           <div class="d-flex flex-wrap">
                              <div class="form-check d-flex align-items-center me-5">
                                 <input class="form-check-input me-3" type="checkbox" name="des_all_gender_chk" value=""  id="des_all_gender_chk" />
                                 <label class="form-check-label fs-5" for="des_all_gender_chk"> All Genders </label>
                              </div>
                              <div class="form-check d-flex align-items-center me-5">
                                 <input class="form-check-input me-3" type="checkbox" name="des_men_chk" value=""  id="des_men_chk" />
                                 <label class="form-check-label fs-5" for="des_men_chk"> Male Only </label>
                              </div>
                              <div class="form-check d-flex align-items-center me-5">
                                 <input class="form-check-input me-3" type="checkbox" name="des_women_chk" value=""  id="des_women_chk" />
                                 <label class="form-check-label fs-5" for="des_women_chk"> Female Only </label>
                              </div>
                              <div class="form-check d-flex align-items-center me-5">
                                 <input class="form-check-input me-3" type="checkbox" name="des_kids_chk" value=""  id="des_kids_chk" />
                                 <label class="form-check-label fs-5" for="des_kids_chk"> Kids Only </label>
                              </div>
                           </div>
                           <div class="d-flex justify-content-end mb-0 px-4">
                              <button class="btn custom-btn-primary fs-5" id="des_serv_for_btn" type="button" value="Save" onclick="save_des_service_for()">SAVE</button>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Desire location  -->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Professional Template End-->
<!--Subtemplate Fixed Location Start-->
<div class="container mb-4 sub_tem_fix_sec" style="display:none">
   <div class="accordion" id="subtemplate-fixed-location">
      <div class="accordion-item">
         <!-- <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3">Subtemplate Fixed Location</div> -->
         <h2 class="accordion-header" id="subtemplate-fixed-location-heading">
            <button class="block-heading accordion-button p-2 text-white rounded fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#subtemplate-fixed-location-body" aria-expanded="true" aria-controls="subtemplate-fixed-location-body" id="tem_title">
            Subtemplate Location
            </button>
         </h2>
         <div id="subtemplate-fixed-location-body" class="accordion-collapse collapse show" aria-labelledby="subtemplate-fixed-location-heading" data-bs-parent="#subtemplate-fixed-location">
            <div class="accordion-body">
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
            <button class="block-heading accordion-button p-2 text-white rounded fs-5 title1" type="button" data-bs-toggle="collapse" data-bs-target="#category-body" aria-expanded="true" aria-controls="category-body">
            Category
            </button>
         </h2>
         <div id="category-body" class="accordion-collapse collapse show" aria-labelledby="category-heading" data-bs-parent="#category">
            <div class="accordion-body">
               <div class="bg-white p-4 rounded">
                  <div class="d-flex justify-content-end mb-4">
                     <button class="btn gradient-btn me-2" type="button" onclick="add_serv_act()">+ SERVICE</button>
                     <!-- <button class="btn gradient-btn me-2">+ SUB SERVICE</button> -->
                  </div>
                  <div class="overflow-scroll">
                     <div class="category-table mb-4" style="min-width: 800px;">
                        <div class="category-table-row d-flex">
                           <div class="heading py-3 w-28 border-end">SERVICE NAME</div>
                           <div class="heading py-3 w-28 border-end">DURATION</div>
                           <div class="heading py-3 w-28 border-end">PRICE</div>
                           <div class="heading py-3 w-15">ACTION</div>
                        </div>
                        <div class="tbody">
                        </div>
                     </div>
                  </div>
                  <div class="row custom-category-cont px-2 py-4 mb-4" id="add_serv_frm" style="background-color: #f7f7f7">
                     <input type="hidden" id="cate_id">
                     <input type="hidden" id="temp_id">
                     <input type="hidden" id="prof_id">
                     <input type="hidden" id="serv_id">
                     <input type="hidden" id="serv_act" value="add">
                     <input type="hidden" id="edit_serv_i" value="">
                     <input type="hidden" id="serve_type" value="main">
                     <div class="col-12 col-md-6 col-lg-4 mb-3">
                        <textarea class="w-100 mb-2 h-100px form-control" id="serv_name_inp"></textarea>
                        <div class="text-decoration-underline text-custom-primary mb-2">+ Additional info</div>
                        <textarea class="w-100 h-150px form-control" id="serv_add_info"></textarea>
                     </div>
                     <div class="col-12 col-md-6 col-lg-3 mb-3">
                        <div class="d-flex justify-content-center">
                           <select class="me-2" id="duration_start_hr">
                              <option value="1h">1h</option>
                              <option value="2h">2h</option>
                              <option value="3h">3h</option>
                              <option value="4h">4h</option>
                              <option value="5h">5h</option>
                           </select>
                           <span class="me-2">:</span>
                           <select class="me-2" id="duration_start_min">
                              <option value="10m">10m</option>
                              <option value="20m">20m</option>
                              <option value="30m">30m</option>
                              <option value="40m">40m</option>
                              <option value="50m">50m</option>
                           </select>
                           <span class="me-2">-</span>
                           <select class="me-2" id="duration_end_hr">
                              <option value="1h">1h</option>
                              <option value="2h">2h</option>
                              <option value="3h">3h</option>
                              <option value="4h">4h</option>
                              <option value="5h">5h</option>
                           </select>
                           <span class="me-2">:</span>
                           <select id="duration_end_min">
                              <option value="10m">10m</option>
                              <option value="20m">20m</option>
                              <option value="30m">30m</option>
                              <option value="40m">40m</option>
                              <option value="50m">50m</option>
                           </select>
                        </div>
                     </div>
                     <div class="col-12 col-md-6 col-lg-5">
                        <div class="d-flex mb-2">
                           <div class="form-check me-5">
                              <input class="form-check-input price_type_inp" type="radio" name="price_type"  checked value="f" id="fixed-price" />
                              <label class="form-check-label" for="fixed-price"> Select Fixed Price </label>
                           </div>
                           <div id="serv_p_typ1"><input type="text" class="w-80px"  id="serv_p_fix"/></div>
                        </div>
                        <div class="d-flex mb-2">
                           <div class="form-check me-5">
                              <input class="form-check-input price_type_inp" type="radio" name="price_type"  value="s" id="starting-price" />
                              <label class="form-check-label" for="starting-price"> Select Starting Price </label>
                           </div>
                           <div id="serv_p_typ2" style="display:none;"><input type="text" class="w-80px" id="serv_p_st_fr"/></div>
                        </div>
                        <div class="form-check d-flex align-items-center me-5 mb-2">
                           <input class="form-check-input me-3" type="checkbox" value="" id="is_discount" />
                           <label class="form-check-label fs-5 text-custom-primary" for="is_discount">
                           Discount <small><i>(optional)</i></small>
                           </label>
                        </div>
                        <div class="form-check mb-2 discount_sec"  style="display:none">
                           <input class="form-check-input discount_inp" type="radio" name="discount_type" checked value="f" id="discount_type" />
                           <div class="d-flex flex-column">
                              <label class="form-check-label" for="discount_type"> Select Fixed Discount </label>
                              <div class="fixed-disc-cont d-flex align-items-center px-2 py-1" id="serv_d_typ1">
                                 <label class="me-2"><small>amount:</small></label>
                                 <input type="text" class="w-60px form-ontrol me-2" id="serv_d_fix"/>
                                 <label class="text-nowrap me-2"><small>valid from:</small></label>
                                 <input type="date" class="me-2" id="serv_d_fx_fr_dt"/> <span class="me-2">-</span> <input type="date" id="serv_d_fx_to_dt"/>
                              </div>
                           </div>
                        </div>
                        <div class="form-check discount_sec" style="display:none">
                           <input class="form-check-input discount_inp" type="radio" name="discount_type" value="p" id="discount_typep" />
                           <div class="d-flex flex-column">
                              <label class="form-check-label" for="discount_typep"> Select Percent Discount </label>
                              <div class="fixed-disc-cont d-flex align-items-center px-2 py-1 mb-2"  id="serv_d_typ2" style="display:none!important">
                                 <label class="me-2"><small>percent:</small></label>
                                 <input type="text" class="w-60px form-ontrol me-2"  id="serv_d_per"/>
                                 <label class="text-nowrap me-2"><small>valid from:</small></label>
                                 <input type="date" class="me-2"  id="serv_d_pr_fr_dt"/> <span class="me-2">-</span> <input type="date" id="serv_d_pr_to_dt"/>
                              </div>
                              <div class="text-decoration-underline text-custom-primary mb-1">+ Additional info</div>
                              <textarea id="serv_p_add_info"></textarea>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="d-flex justify-content-center">
                     <button class="btn custom-btn-primary fs-5" type="button" id="serv_add_btn" onclick="save_service()">SAVE</button>
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
            General Note
            </button>
         </h2>
         <div id="general-note-body" class="accordion-collapse collapse show" aria-labelledby="general-note-heading" data-bs-parent="#general-note">
            <div class="accordion-body">
               <div class="bg-white p-4 rounded">
                  <div class="form-icon icon-right-align mb-4">
                     <textarea class="form-control form-control-icon" type="text" id="gen_note_txt"></textarea>
                     <i class="ri-edit-box-line text-custom-primary icon-textarea fs-4"></i>
                  </div>
                  <div class="d-flex justify-content-center">
                     <button class="btn custom-btn-primary fs-5" id="gen_not_btn" type="button"  onclick="save_gen_note()">SAVE</button>
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
            Team Members
            </button>
         </h2>
         <div id="team-members-body" class="accordion-collapse collapse show" aria-labelledby="team-members-heading" data-bs-parent="#team-members">
            <div class="accordion-body">
               
               <div class="bg-white p-4 rounded">
                  <form id="frm3">
                     <input type="hidden" name="_token" value="{{ Session::token() }}" />
                     <input type="hidden" name="tm_i" id="tm_i" value="" />
                     <input type="hidden" name="tm_act" id="tm_act" value="add" />
                     <div class="row px-4 sub-temp-fixed-loc mb-4">
                        <div class="col-12 col-md-6 col-lg-3 pe-3 pe-md-4 mb-md-2 mb-2">
                           <input type="file" id="team_mem_img" name='team_mem_img' class="d-none" accept="image/png,image/jpeg"/>
                           <label
                              for="team_mem_img"
                              class="h-100 bg-custom-light d-flex align-items-center justify-content-center"
                              >
                           <i class="ri-upload-2-line" style="font-size: 64px; color: #929292"></i>
                           </label>
                        </div>
                        <div class="col-12 col-md-6 col-lg-9 mb-md-2 mb-2">
                           <div class="form-icon icon-right-align mb-2">
                              <input class="form-control form-control-icon" id="team_member_name" name="team_member_name" type="text" placeholder="Professional name/Salon name" />
                              <i class="ri-edit-box-line text-custom-primary fs-5"></i>
                           </div>
                           <div class="form-icon icon-right-align">
                              <textarea class="form-control form-control-icon" id="team_member_bio" name="team_member_bio" type="text" placeholder="Bio"></textarea>
                              <i class="ri-edit-box-line text-custom-primary icon-textarea fs-5"></i>
                           </div>
                        </div>
                        <!-- <div class="col-12 col-md-6 col-lg-3">
                           <button class="btn gradient-btn gradient-btn-fs-sm" style="width:190px">+ TEAM MEMBER</button>
                           </div> -->
                     </div>
                     <div class="d-flex justify-content-center">
                        <button class="btn custom-btn-primary fs-5" id="team_mem_btn" type="button" onclick="save_team_member()">SAVE</button>
                     </div>
                  </form>
               </div>
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
<div class="container general-note-container mb-5 visual_sec" style="display:none">
   <div class="accordion" id="visual">
      <div class="accordion-item">
         <!-- <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3">Visual</div> -->
         <h2 class="accordion-header" id="visual-heading">
            <button class="block-heading accordion-button p-2 text-white rounded fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#visual-body" aria-expanded="true" aria-controls="visual-body">
            Visual
            </button>
         </h2>
         <div id="visual-body" class="accordion-collapse collapse show" aria-labelledby="visual-heading" data-bs-parent="#visual">
            <div class="accordion-body">
               <div class="bg-white p-4 rounded">
                  <form id="frm4">
                     <input type="hidden" name="_token" value="{{ Session::token() }}" />
                     <input type="hidden" value="link" name="visual_type" id="visual_type">
                     <div class="row px-4 mb-5">
                        <div class="col-md-12 col-lg-9 mb-md-0 mb-2 pe-4 d-flex flex-column">
                           <input class="form-control mb-2 insta_link_sec" type="text" id="visual_link" name="visual_link" placeholder="Copy images from instagram and paste link here" />
                           <input type="file" id="visual_img" name='visual_img' class="d-none" accept="image/png,image/jpeg"/>
                           <label
                              for="visual_img"
                              class="border-custom-dark flex-grow-1 rounded py-5 bg-custom-light d-flex flex-column align-items-center justify-content-center  ur_img_sec" style="display:none!important" id="visual_img_lbl">
                           <i class="ri-upload-2-line" style="font-size: 64px; color: #929292"></i>
                           <span>Choose one or multiple images</span>
                           </label>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="border p-2 rounded">
                              <div class="cursor-pointer visual_spn_link visual_spn p-2 text-custom-primary fs-5 btn-text text-center" onclick="show_insta_link_sec()">Add instagram image links</div>
                              <div class="border"></div>
                              <div class="cursor-pointer visual_spn_img visual_spn p-2 fs-5 text-center btn-text" onclick="show_ur_img_sec()">Upload your own images</div>
                           </div>
                        </div>
                     </div>
                     <div class="d-flex justify-content-center">
                        <button class="btn custom-btn-primary fs-5" id="submit_btn_visual" type="button" onclick="save_visual()">SAVE</button>
                     </div>
                  </form>
               </div>

               <div class="bg-white p-4 rounded border">
                  <div><p class="text-end"><span class="cursor-pointer del_vis_spn" onclick="delete_visuals()"><i class="ri-delete-bin-line text-danger cursor-pointer" style="vertical-align: bottom;"></i> <b id="del_vis_txt">Delete Selected</b></span></p></div>
                  <div class="visual_lst_sec">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Visual End-->
@endif

<input type="hidden" id="template_id">
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
   $(document).ready(function(){
    
    $('.des_loc_type').on('change',function(){
      if($('.des_loc_type:checked').val()=='everywhere'){
        $('.add_province_sec').hide();
        $('#des_form_submit2').show();
      }
      else{
        $('#des_add_prov_btn,.add_province_sec').show();
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
   });

  function save_des_service_for(){
    var tmp_id = $('#template_id').val();
    if(tmp_id=='' || tmp_id==0){
      alert('Something went wrong.');
      return false;
    }
    if(tmp_id!='' && tmp_id!='0'){

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
        url:"{{route('salon_ajx')}}",
        type:'post',
        data:{'act':'update_service_for', 'tmp_id':tmp_id, 'all_gender':all_gender, 'men':men, 'women':women, 'kids':kids, '_token' : '{{ csrf_token() }}'},
        dataType:'json',
        success:function(r){
          $('#des_serv_for_btn').html('Save').attr('disabled',false);
        },
        error:function(e){
          $('#des_serv_for_btn').html('Save').attr('disabled',false);
          alert("Something went wrong");
        }
      })
    }
  }

  function show_des_detail(sid,sname){

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

    if(sname!='')
      $('#tem_title').html(sname+' Template');
    else
      $('#tem_title').html('Location Template');

    $.ajax({
      url:"{{route('salon_ajx')}}",
      type:'post',
      data:{'act':'get_salon_detail','sid':sid, '_token' : '{{ csrf_token() }}'},
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
   
        var cate_str='<div class="row">';
          $.each(categories,function(k,v){
            cate_str+='<div class="cate_sec col-4 col-sm-3 col-md-3 col-lg-2 col-xl-2 mb-3" onclick="show_salon_cate_detail(\''+sid+'\', \''+v.id+'\' ,\''+v.name+'\')"><div class="cate_cards d-flex flex-column align-items-center shadow p-2 sub-temp-fixed-loc-card" id="cate_card_'+v.id+'">';
              console.log(v.image);
              if(v.image!='' && v.image!==null)
                cate_str+='<img src="{{asset("public/imgs/category/")}}/'+v.image+'" style="width:60px">';
              else
                cate_str+='<img src="{{asset("public/imgs/placeholder-img.jpg")}}" style="width:90px"">';
   
              cate_str+='<span>'+v.name+'</span>';
   
              
            cate_str+='</div></div>';
   
          });
          cate_str+='</div>';
   
          if(team!='' && team.length>0){
            var team_str='';
            team_str+="<div style='' class='border row mb-3'>";
            $.each(team,function(k,v){
              team_str+="<div style='' class='border col-12 col-sm-6 col-md-4 mb-3 p-2'>";
                team_str+="<p class='mb-2'>"+v.bio+"</p>";
                team_str+="<div class='row'>";
                  team_str+="<div class='col-4 col-sm-3 col-md-2 pe-3 pe-md-4 mb-md-2 mb-2'>";
                    if(v.image!='')
                    team_str+='<img src="{{asset("public/imgs/team/")}}/'+v.image+'" style="width:20px;border-radius:20px">';
                  else
                    team_str+='<img src="{{asset("public/imgs/placeholder-img.jpg")}}" style="width:20px;border-radius:20px">';
                  team_str+="</div>";

                  team_str+="<div class='col-8 col-sm-9 col-md-10 mb-md-2 mb-2'>";
                    team_str+="<p>"+v.member+"</p>";
                  team_str+="</div>";

                team_str+="</div";

                team_str+='<p><i class="ri-edit-box-line cursor-pointer" onclick="edit_team_member(\''+v.id+'\')"></i> &nbsp; <i class="ri-delete-bin-line text-danger cursor-pointer" onclick="delete_team_member(\''+v.id+'\')"></i></p>';
                
                
                team_str+="</div>";
            });

            team_str+="</div>";
            $('.team_mem_lst_sec').html(team_str);
          }


          $('.salon_cate_sec').html(cate_str);
          $('#gen_note_txt').val(salon.note);
        
          $('.des_salon_serv_for_sec,.sub_tem_fix_sec,.salon_cate_sec,.salon_note_sec,.team_mem_sec,.visual_sec').show();
        }
        if(r.status=='ERROR')
        {
          alert('Something went wrong. Please contact');
        }
      }
    });
    $('#template_id').val(sid);
   }


  function des_form_validate2(){

    var loc_type = $('.des_loc_type:checked').val();
    var municipality='';
    if(loc_type=='everywhere'){
      var des_province='';
    }
    else{
      var des_province = $('#des_province').val();
      if($.trim(des_province)==''){
        $('#des_province').focus();
        return false;
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

   
    $.ajax({
      url:"{{route('desire_add_province')}}",
      type:'post',
      data:{'act':'add_province','province':des_province,'municipality':municipality,'loc_type':loc_type, '_token' : '{{ csrf_token() }}'},
      dataType:'json',
      success: function(r)
      {
        $('#des_form_submit2').html('Save').attr('disabled',false);
        if(r.status=='SUCCESS')
        { 
          $('#spn_des_frm2').show();
          // location.reload();
        }
        if(r=='ERR')
        {
          alert('Something went wrong. Please contact');
        }
      }
    })
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
    var tmp_id = $('#template_id').val();
    if(tmp_id=='' || tmp_id==0){
      alert('Something went wrong.');
    }
   
    if($('#visual_type').val()=='link'){
      if($.trim($('#visual_link').val())==''){
        $('#visual_link').focus();
        return false;
      }
    }
    else{
      if($.trim($('#visual_img').val())==''){
        alert("Please select image");
        return false;
      }
    }
   
    var frm=new FormData($('#frm4')[0]);
    frm.append('act', 'add_visual');
    frm.append('temp_id', tmp_id);
    $('#submit_btn_visual').html('Wait..!').attr('disabled',true);
   
    $.ajax({
      url:"{{route('salon_ajx')}}",
      type:'post',
      data:frm,
      contentType: false,
      processData:false,
      success: function(r)
      {
        $('#submit_btn_visual').html('Save').attr('disabled',false);
        if(r=='SUC')
        { 
          $('#visual_link').val('');
          $('#visual_img').val('');
          alert('Added');       
        }
        if(r=='ERR')
        {
          alert('Something went wrong. Please contact');
        }
      }
    })
   }
   
   function save_service_for(){
    var tmp_id = $('#template_id').val();
    if(tmp_id=='' || tmp_id==0){
      alert('Something went wrong.');
      return false;
    }
    if(tmp_id!='' && tmp_id!='0'){

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
        url:"{{route('salon_ajx')}}",
        type:'post',
        data:{'act':'update_service_for', 'tmp_id':tmp_id, 'all_gender':all_gender, 'men':men, 'women':women, 'kids':kids, '_token' : '{{ csrf_token() }}'},
        dataType:'json',
        success:function(r){
          $('#serv_for_btn').html('Save').attr('disabled',false);
        },
        error:function(e){
          $('#serv_for_btn').html('Save').attr('disabled',false);
          alert("Something went wrong");
        }
      })
    }
  }

   function sel_image1 (argument) {
    $('#visual_img').trigger('click');
   }
   
   function delete_visuals(){
    if($('.vis_radio:checked').length<=0){
      alert('Please select visuals to delete.');
      return false;
    }

    if(!confirm('Are you sure to delete?'))return false;

    var vis = new Array;
    $('.vis_radio:checked').each(function(){
      vis.push($(this).val());
    });

    var tmp_id = $('#template_id').val();
    if(tmp_id=='' || tmp_id==0){
      alert('Something went wrong.');
    }
    
    $('#del_vis_txt').html('Wait..!');
    $('#del_vis_spn').attr('disabled',true);

    $.ajax({
      url:"{{route('salon_ajx')}}",
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
     $('.ur_img_sec').show().addClass('d-flex');
     $('#visual_type').val('image');
     $('.visual_spn_link').removeClass('text-custom-primary');
     $('.visual_spn_img').addClass('text-custom-primary');
   }
   
   function save_team_member(){
    var tmp_id = $('#template_id').val();
    if(tmp_id=='' || tmp_id==0){
      alert('Something went wrong.');
    }
   
    if($.trim($('#team_member_name').val())==''){
      $('#team_member_name').focus();
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
   
    frm.append('temp_id', tmp_id);
    $('#team_mem_btn').html('Wait..!').attr('disabled',true);
   
    $.ajax({
      url:"{{route('salon_ajx')}}",
      type:'post',
      data:frm,
      contentType: false,
      processData:false,
      success: function(r)
      {
        $('#team_mem_btn').html('Save').attr('disabled',false);
        if(r=='SUC')
        { 
          if($('#tm_act').val()=='add'){
            alert('Added');     
          } 
          else{
            alert('Updated');       
          }
   
          $('#team_member_name').val('');
          $('#team_member_bio').val('');
          $('#tm_i').val('');
          $('#tm_act').val('add');
          $('#tm_img_preview').attr('src',"{{ URL::asset('public/images/blank_img_icon.png')}}");
        }
        if(r=='ERR')
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
    var tmp_id = $('#template_id').val();
    if(tmp_id=='' || tmp_id==0){
      alert('Something went wrong.');
    }
    var note = $('#gen_note_txt').val();
    
    $('#gen_not_btn').html('Wait..!').attr('disabled',true);

    $.ajax({
      url:"{{route('salon_ajx')}}",
      type:'post',
      data:{'act':'add_gen_note', 'tmp_id':tmp_id, 'note':note, '_token' : '{{ csrf_token() }}'},
      dataType:'json',
      success:function(r){
        $('#gen_not_btn').html('Save').attr('disabled',false);
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
      
      $('#is_discount').prop('checked',false);
      $('#serv_d_fix').val('');
      $('input[name="discount_type"][value="f"]').prop('checked',true);
      $('#serv_d_typ1').show();
      $('#serv_d_typ2').hide();
      $('#serv_d_pr_fr_dt').val('');
      $('#serv_d_pr_to_dt').val('');
      $('#serv_p_add_info').val('');
      $('html, body').animate({
         scrollTop: $('#add_serv_frm').offset().top-30
       }, 500);
   }

   function save_service(){
    var temp=$('#temp_id').val();
    var cate=$('#cate_id').val();
    if(temp=='' || cate==''){
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
        return false;
      }
    }
    else
    {
      if($.trim($("#serv_p_st_fr").val())==''){
        $("#serv_p_st_fr").focus();
        return false;
      }
    }
   
    var discount = '0';
    var discount_type = 'f';
    if($('#is_discount').prop('checked')===true){
      discount = '1';
   
      if($('.discount_inp:checked').val()=='f'){
        var discount_type = 'f';
        if($.trim($("#serv_d_fix").val())==''){
          $("#serv_d_fix").focus();
          return false;
        }
      }
      else
      {
        var discount_type = 'p';
        if($.trim($("#serv_d_per").val())==''){
          $("#serv_d_per").focus();
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
   
    var duration = $('#duration_start_hr').val()+':'+$('#duration_start_min').val()+' - '+$('#duration_end_hr').val()+':'+$('#duration_end_min').val();
    var payload={
      template_id:temp,
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
      $.ajax({
        url:"{{route('salon_ajx')}}",
        type:'post',
        data:{'act':'save_service','payload':payload, '_token' : '{{ csrf_token() }}'},
        dataType:'json',
        success:function(r){
          if(r.status=="SUCCESS"){
            alert('Added');
          }
          else{
            alert("Something went wrong");  
          }
        },
        error:function(e){
          alert("Something went wrong");
        }
      });
    }
    else{
      if($('#edit_serv_i').val()==''){
        alert('Something went wrong');
        return false;
      }
   
      $.ajax({
        url:"{{route('salon_ajx')}}",
        type:'post',
        data:{'act':'update_service','sid':$('#edit_serv_i').val(),'payload':payload, '_token' : '{{ csrf_token() }}'},
        dataType:'json',
        success:function(r){
          if(r.status=="SUCCESS"){
            alert('Updated');
          }
          else{
            alert("Something went wrong");  
          }
        },
        error:function(e){
          alert("Something went wrong");
        }
      });
    }
   }
   
   function edit_service (i) {
      $.ajax({
        url:"{{route('salon_ajx')}}",
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
            if(exp1.length==2){
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
            }
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
                $('#serv_d_typ1').show();
                $('#serv_d_typ2').hide();
                $('#serv_d_pr_fr_dt').val(r.service.discount_valid_from);
                $('#serv_d_pr_to_dt').val(r.service.discount_valid_to);
              }
              else{
                $('#serv_d_per').val(r.service.discount_amount);
                $('input[name="discount_type"][value="s"]').prop('checked',true);
                $('#serv_d_typ1').hide();
                $('#serv_d_typ2').show();
                $('#serv_d_pr_fr_dt').val(r.service.discount_valid_from);
                $('#serv_d_pr_to_dt').val(r.service.discount_valid_to);
              }
              $('.discount_sec').show();
            }
            else{
              $('.discount_sec').hide();
            }
   
            $('#serv_p_add_info').val(r.service.discount_info);

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
    $('#serve_type').val('sub');
    $('#serv_id').val(serv_id);
    
    $('html, body').animate({
                       scrollTop: $('#add_serv_frm').offset().top-30
                     }, 500);
   
   }
   
   function show_salon_cate_detail(sid, cateid, catename){
    $('.cate_cards').removeClass('active');
    $('#cate_card_'+cateid).addClass('active');
    $('#modalajx').modal('show');
    $.ajax({
      url:"{{route('salon_ajx')}}",
      type:'post',
      data:{'act':'get_salon_cate_detail','sid':sid,'cid':cateid, '_token' : '{{ csrf_token() }}'},
      dataType:'json',
      success:function(r){
      
        if(r.status=='SUCCESS'){
          if(r.msg=='Y'){
            var service = r.service;
            var sub_service = r.sub_service;
            var str='';
            $.each(service,function(k,v){
              str+='<div class="category-table-row d-flex bg-light-primary">';
                str+='<div class="border-right-primary border-bottom text-center fs-5 text-custom-primary p-1 w-28 border-end">';
                  str+= v.service_name;
                str+='</div>';
                str+='<div class="text-center fs-5 border-bottom text-custom-primary p-1 w-28 border-end">';
                  str+= v.duration;
                str+='</div>';
                if(v.price_type=='f'){
                  str+='<div class="text-center fs-5 border-bottom text-custom-primary p-1 w-28 border-end">';
                    str+= v.price+' EUR';
                  str+='</div>';
                }
                else{
                  str+='<div class="text-center fs-5 border-bottom text-custom-primary p-1 w-28 border-end">';
                    str+= 'Starting from '+v.price+' EUR';
                  str+='</div>';  
                }
                
                str+='<div class="fs-4 p-1 w-15 border-bottom justify-content-center">';
                  str+= '<i class="ri-edit-box-line text-custom-primary me-2" onclick="edit_service(\''+v.id+'\')"></i> &nbsp;  <i class="ri-delete-bin-line text-danger" onclick="delete_service(\''+v.id+'\')"></i> <br> <button type="button" class="btn cs_btn gradient-btn" onclick="add_subservice_act(\''+v.id+'\')">+ SUB SERVICE</button>';
                str+='</div>';
              str+='</div>';
   
              if(sub_service!='' && sub_service.length>0){
                $.each(sub_service,function(k1,v1){
                  
                  var ssserv = v1[v.id];
                  if(typeof ssserv === 'undefined')return true;
                  // if(k1!=v.id)return true;
   
                  $.each(ssserv,function(k2,v2){
   
                    str+='<div class="category-table-row d-flex">';
                      str+='<div class="text-center fs-5 p-1 w-28 border-end border-bottom d-flex justify-content-between align-items-center">';
                        str+= '<span>'+v2.service_name+'</span><i class="ri-information-fill"></i>';
                      str+='</div>';
                      str+='<div class="text-center fs-5 p-1 w-28 border-end border-bottom">';
                        str+= v2.duration;
                      str+='</div>';
                      if(v2.price_type=='f'){
                        str+='<div class="text-center fs-5 p-1 w-28 border-end border-bottom">';
                          str+= v2.price+' EUR';
                        str+='</div>';
                      }
                      else{
                        str+='<div class="text-center fs-5 p-1 w-28 border-end border-bottom">';
                          str+= 'Starting from '+v2.price+' EUR';
                        str+='</div>';  
                      }
                      
                      str+='<div class="fs-4 p-1 w-15 border-bottom d-flex justify-content-center">';
                        str+= '<i class="ri-edit-box-line text-custom-primary me-2" onclick="edit_service(\''+v2.id+'\')"></i> <i class="ri-delete-bin-line text-danger" onclick="delete_service(\''+v2.id+'\')"></i>';
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
            $('.service_tbl').find('tbody').html(str);
            $('.salon_cate_dt_sec').show();
          }
          $('.title1').html(catename);
        }
        else{
          alert('Something went wrong.');
        } 
        setTimeout(function(){
          $('#modalajx').modal('hide');
          console.log('1');
        },1000)
        
      },
      error:function(e){
        $('#modalajx').modal('hide');
        alert('Something went wrong.');
      }
    });
   
    $('#temp_id').val(sid);
    $('#cate_id').val(cateid);
   
   }
   
   function edit_team_member(id){
      $.ajax({
        url:"{{route('salon_ajx')}}",
        type:'post',
        data:{'act':'get_tm_detail','tm_i':id, '_token' : '{{ csrf_token() }}'},
        dataType:'json',
        success:function(r){
          if(r.status=='SUCCESS'){
            $('#team_member_name').val(r.member.name);
            $('#team_member_bio').val(r.member.bio);
   
            if(r.member.image!=''){
              $('#tm_img_preview').attr('scr','{{asset("public/imgs/team/'+r.member.image+'")}}');
            }
            $('#tm_i').val(id);
            $('#tm_act').val('update');
            $('html, body').animate({
                       scrollTop: $('#frm3').offset().top-30
                   }, 500);
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
    if(confirm('Are you sur eto remove?')){
      $.ajax({
        url:"{{route('salon_ajx')}}",
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
    }
   }
   
   function show_salon_detail(sid,sname){

    $('#all_gender_chk').prop('checked',false);
    $('#men_chk').prop('checked',false);
    $('#women_chk').prop('checked',false);
    $('#kids_chk').prop('checked',false);
    $('.team_mem_lst_sec, .visual_lst_sec').html('');
    $('.salon_cate_sec').html('');
    $('#gen_note_txt').val('');    
    $('.salon_serv_for_sec,.sub_tem_fix_sec,.salon_cate_sec,.salon_note_sec,.team_mem_sec,.visual_sec').hide();
    $('.tbody').html('');
    $('.salon_cate_dt_sec').hide();

    $('.sub-temp-card').removeClass('active');
    $('#sub-temp-card_'+sid).addClass('active');

    if(sname!='')
      $('#tem_title').html(sname+' Template');
    else
      $('#tem_title').html('Location Template');

    $('#modalajx').modal('show');

    $.ajax({
      url:"{{route('salon_ajx')}}",
      type:'post',
      data:{'act':'get_salon_detail','sid':sid, '_token' : '{{ csrf_token() }}'},
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
   
        var cate_str='<div class="row">';
          $.each(categories,function(k,v){
            cate_str+='<div class="cate_sec col-4 col-sm-3 col-md-3 col-lg-2 col-xl-2 mb-3" onclick="show_salon_cate_detail(\''+sid+'\', \''+v.id+'\' ,\''+v.name+'\')"><div class="cate_cards d-flex flex-column align-items-center shadow p-2 sub-temp-fixed-loc-card" id="cate_card_'+v.id+'">';
              // console.log(v.image);
              if(v.image!='' && v.image!==null)
                cate_str+='<img src="{{asset("public/imgs/category/")}}/'+v.image+'" style="width:60px">';
              else
                cate_str+='<img src="{{asset("public/imgs/placeholder-img.jpg")}}" style="width:90px"">';
   
              cate_str+='<span>'+v.name+'</span>';
   
              
            cate_str+='</div></div>';
   
          });
          cate_str+='</div>';
          
           if(team!='' && team.length>0){
            var team_str='';
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

            team_str+="</div>";
            $('.team_mem_lst_sec').html(team_str);
          } 

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
        
          $('.salon_serv_for_sec,.sub_tem_fix_sec,.salon_cate_sec,.salon_note_sec,.team_mem_sec,.visual_sec').show();
          $('html, body').animate({
               scrollTop: $('.sub_tem_fix_sec').offset().top-30
           }, 500);
        }
        if(r.status=='ERROR')
        {
          // $('#modalajx').modal('hide');
          alert('Something went wrong. Please contact');
        }

        setTimeout(function(){
          $('#modalajx').modal('hide');
        },3000);
      }
    });
    $('#template_id').val(sid);
   }
   
   function delete_salon(sid){
    if(!confirm('Are you sure to delete Salon?'))return false;
   $('#modalajx').modal('show');
    $.ajax({
      url:"{{route('salon_ajx')}}",
      type:'post',
      data:{'act':'delete_salon','sid':sid, '_token' : '{{ csrf_token() }}'},
      dataType:'json',
      success: function(r)
      {
        $('#modalajx').modal('hide');
        if(r.status=='SUCCESS')
        { 
          alert('Removed');
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
        url:"{{route('salon_ajx')}}",
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
            $('#salon_municipality').val(r.municipality);
            $('#salon_province').val(r.province);
   
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
      url:"{{route('salon_add')}}",
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
      url:"{{route('fixed_location_update')}}",
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
    
    var frm=new FormData($('#des_frm1')[0]);
    // var modal = document.getElementById('myModal');
   
    $.ajax({
      url:"{{route('desire_location_update')}}",
      type:'post',
      data:frm,
      contentType: false,
      processData:false,
      success: function(r)
      {
        if(r=='SUC')
        { 
          alert('Updated');
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
   
</script>
</body>
</html>