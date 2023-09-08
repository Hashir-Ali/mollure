@include('salon/header')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="{{ url("public/css/new_style.css") }}">
<link rel="stylesheet" href="{{ url("public/css/model_style.css") }}">
<link rel="stylesheet" href="{{ url("public/css/carbon-components.css") }}">
<link rel="stylesheet" href="{{ url("public/css/calendar_style.css") }}">
<link href="{{ URL::asset('public/css/styles.css')}}?12" rel="stylesheet">
<link href="{{ URL::asset('public/admin/css/service_detail.css')}}" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />--}}
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="container">
    <div class="d-flex border-custom mb-3">
        @if($prof->user_type == "professional")
            <div class="w-50 border-end up_tab">
                <div class="uinfo_card @if($prof->status!='approve') active @endif text-custom-dark fw-custom-bold fs-5 text-center cursor-pointer" onclick="show_userinfo_sec()">{{$lang_kwords['user_info']['english']}}</div>
            </div>
            <div class="w-50 up_tab">
                <div class="protemp_card  @if($prof->status=='approve') active @endif text-custom-dark fw-custom-bold fs-5 text-center cursor-pointer" onclick="show_prftemp_sec()">{{$lang_kwords['professional-template']['english']}}</div>
            </div>
        @else
            <div class="w-100 border-end up_tab">
                <div class="uinfo_card @if($prof->status!='approve') active @endif text-custom-dark fw-custom-bold fs-5 text-center cursor-pointer" onclick="show_userinfo_sec()">{{$lang_kwords['user_info']['english']}}</div>
            </div>
        @endif
    </div>
</div>

<!--Professional Profile Start-->
<div class="mb-4 info_form" style="@if($prof->status=='approve') display:none; @endif padding: 0px 75px!important" >
    <div class="accordion">
        <div class="accordion-item border-0 rounded">
            <input type="hidden" id="csrf-token" value="{{ Session::token() }}" />
        <!-- <h2 class="accordion-header" id="user-info-heading">
            <button class="block-heading accordion-button p-2 text-white rounded fs-5 " type="button" data-bs-toggle="collapse" data-bs-target="#user-info-body" aria-expanded="true" aria-controls="user-info-body">
            {{$lang_kwords['user_info']['english']}}
                </button>
         </h2> -->
            @if($prof->status!='approve')
                <div class="alert alert-success fw-bold text-center" role="alert">
                   This Professional's details are not approved Yet..
                </div>
            @endif

        <!-- <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3">Professional Profile</div> -->
            <div id="user-info-body" class="" aria-labelledby="user-info-heading" data-bs-parent="#user-info">
                <div class="accordion-body px-0">
                    <div class="bg-white px-2 ps-sm-4 pe-sm-4">
                        <div class="col-12 mb-2 mb-lg-0 col-lg-12 ps-lg-4 text-end">
                            <i class="cursor-pointer" onclick="edit_frm()" style="display: block;"><img src="{{asset('public/images/edit_pen.svg')}}" /></i>
                        </div>
                        <div class="signupGroup d-flex justify-content-center">
                            <div class="signup-card p-4 grid gap-3 justify-content-center align-items-center">
                                <div class="">
                                    <h4>User Profile</h4>
                                </div>
                                @if($errors->any())
                                    <div class="text-center" id="msg-alert1">
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">
                                                {{ $error }}
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                                @if($prof->status!=='approve')
                                    <form action="{{route('dashboard')}}" id="frm" class="info_form d-grid gap-1 interCardGroupLogin" method="post" enctype="multipart/form-data">
                                @else
                                    <form action="{{route('password_update')}}" id="frm" class="info_form" method="post" enctype="multipart/form-data">
                                     <input type="hidden" id="upty" name="upty" value="d">
                                @endif

                                    <input type="hidden" name="_token" value="{{ Session::token() }}" />
                                    <input type="hidden" name="act" value="profile">
                                    <input type="hidden" id="user_type" value="{{ $prof->user_type }}">
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
                                    <div class="form-block">
                                        @if($prof->user_type == "individual")
                                            <div class="" id="ed_sec_">
                                                <div class="mt-2"><label class="form-label">{{$lang_kwords['contact-person']['english']}}</label></div>
                                                <div class="field-container d-flex">
                                                    <div class="flex-fill me-4">
                                                        <input type="text" placeholder="{{$lang_kwords['first-name']['english']}}" class="form-control frm_inp" disabled name="contact_person_first_name" id="contact_person_first_name" value="{{ $prof->prof_address[0]->contact_person_first_name }}" />
                                                    </div>
                                                    <div class="flex-fill">
                                                        <input type="text" placeholder="{{$lang_kwords['last-name']['english']}}" class="form-control frm_inp" disabled name="contact_person_last_name" id="contact_person_last_name" value="{{ $prof->prof_address[0]->contact_person_last_name }}" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="mt-2"><label class="form-label">Name For Rating And Review</label></div>
                                                <div class="field-container">
                                                    <select name="name_for_rating" id="name_for_rating" class="mollure-select frm_inp" disabled>
                                                        <option value="first_name" <?= $c = ($prof->name_for_rating == 'first_name') ? 'selected' : ''; ?> > {{$lang_kwords['first-name']['english']}}</option>
                                                        <option value="last_name" <?= $c = ($prof->name_for_rating == 'last_name') ? 'selected' : ''; ?> >{{$lang_kwords['last-name']['english']}} </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="mt-2"><label for="dob" class="form-label">Birth Date</label></div>
                                                <input type="text" placeholder="Birth date DD/MM/YYYY" class="form-control"  name="dob" id="dob" value="{{ $prof->dob }}" >
                                            </div>
                                        @endif

                                        @if($prof->user_type == "professional" || $prof->user_type == "company")
                                        <div class="">
                                            <div class="mt-2"><label class="form-label">{{$lang_kwords['legal-name']['english']}}</label></div>
                                            <div class="field-container"><input type="text" class="form-control " disabled name="legal_name" id="legal_name" value="{{ $prof->legal_name }}" /></div>
                                        </div>
                                        <div class="">
                                            <div class="mt-2"><label class="form-label">{{$lang_kwords['coc-number']['english']}}</label></div>
                                            <div class="field-container"><input type="text" class="form-control " disabled name="coc" id="coc" value="{{ $prof->coc }}" /></div>
                                        </div>
                                        <div class="">
                                            <div class="mt-2"><label class="form-label">{{$lang_kwords['vat-number']['english']}}</label></div>
                                            <div class="field-container"><input type="text" class="form-control " disabled name="vat" id="vat" value="{{ $prof->vat }}" /></div>
                                        </div>
                                        @endif

                                        @if($prof->user_type == "professional" || $prof->user_type == "company")
                                        <div class="">
                                            <div class="mt-2"><label class="form-label">{{$lang_kwords['street']['english']}}</label></div>
                                            <div class="field-container"><input type="text" class="form-control " disabled name="street" id="street" value="{{ $prof->prof_address[0]->street }}" /></div>
                                        </div>
                                        <div class="">
                                            <div class="mt-2"><label class="form-label">{{$lang_kwords['number']['english']}}</label></div>
                                            <div class="field-container"><input type="text" class="form-control " disabled name="number" id="number" value="{{ $prof->prof_address[0]->number }}" /></div>
                                        </div>
                                        <div class="">
                                            <div class="mt-2"><label class="form-label">{{$lang_kwords['postal-code']['english']}}</label></div>
                                            <div class="field-container"><input type="text" class="form-control " disabled name="postal" id="postal" value="{{ $prof->prof_address[0]->postal }}" /></div>
                                        </div>
                                        @endif

                                        @if($prof->user_type == "professional" || $prof->user_type == "company")
                                        <div class="">
                                            <div class="mt-2"><label class="form-label">{{$lang_kwords['province']['english']}}</label></div>
                                            <div class="field-container">
                                                <select class="mollure-select " disabled name="province" id="profile_province">
                                                    <option value='' data-i=''>{{$lang_kwords['select']['english']}}</option>
                                                    @foreach($province as $k=>$v)
                                                        <option @if( $prof->prof_address[0]->province == $v->name) selected @endif value="{{$v->name}}" data-i="{{$v->id}}">{{$v->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="mt-2"><label class="form-label">{{$lang_kwords['municipality']['english']}}</label></div>
                                            <div class="field-container">
                                                <input type="hidden" id="temp_muncipility_id" value="{{ $prof->prof_address[0]->municipality }}">
                                                <select class="mollure-select " disabled name="municipality" id="profile_municipality">
                                                    <option value='' data-i=''>{{$lang_kwords['select']['english']}}</option>
                                                    @foreach($municipality as $k=>$v)
                                                        <option @if( $prof->prof_address[0]->municipality == $v->name) selected @endif value="{{$v->name}}" data-i="{{$v->id}}">{{$v->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        @endif

                                        @if($prof->user_type == "professional")
                                        <div class="justify-content-between">
                                            <div class="row">
                                                <div class="">
                                                    <div class="mt-2">
                                                        <label class="form-label">{{$lang_kwords['professional-must-provide-documentation-of-registration-in-chamber-of-commerce']['english']}}</label>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    @if($prof->status!='approve')
                                                        <label for="doc-reg-coc" class="form-control d-flex align-items-center justify-content-between w-lg-25 w-sm-100 bg-light ">
                                                            <span id="reg_spn_img">Upload Files</span>
                                                            <i class="ri-upload-2-line"></i>
                                                        </label>
                                                        <input id="doc-reg-coc" name="registration_doc" disabled type="file" class="d-none " accept="image/png,image/jpeg" />
                                                    @endif
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-12 d-flex">
                                                    @if(count($prof->registration_docs)>0)
                                                        @foreach($prof->registration_docs as $reg_docs)

                                                            @php
                                                                $img_d = $reg_docs->doc;
                                                                $v = @get_headers($reg_docs->doc);
                                                                $type='';
                                                                if(preg_match("|200|", $v[0])){

                                                                $type = pathinfo($reg_docs->doc, PATHINFO_EXTENSION);

                                                                if($type=='pdf')
                                                                $img_d = URL::to("/").'/public/imgs/docs/pdf_logo.jpg';
                                                                }

                                                            @endphp

                                                            <div style="position: relative;padding: 10px;border: 1px solid #dfdfdf;margin-right: 10px;" id="reg_doc_sec_{{$reg_docs->id}}">
                                                                @if($prof->status!='approve')
                                                                    <p style="position: absolute;right: 1px;top: -13px;color: red;font-size: 29px;font-weight: bold;"><label class="cursor-pointer" onclick="remove_reg_doc('{{$reg_docs->id}}')"> &times; </label></p>
                                                                @endif
                                                                <img src="{{$img_d}}" onclick="show_preview('{{$reg_docs->doc}}','{{$type}}')" class="reg_doc_img"> &nbsp;
                                                            </div>

                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        @endif

                                        @if($prof->user_type == "professional")
                                        <div class="">
                                            <div class="mt-2"><label class="form-label">{{$lang_kwords['professional-must-provide-examples-of-past-work-that-satisfy-mollures-quality-and-professional-standards']['english']}}</label></div>
                                            <input type="text" class="form-control  " placeholder="{{$lang_kwords['examples-of-past-work_1']['english']}}" disabled name="insta_link" id="insta_link" value="{{ $prof->prof_address[0]->insta_link }}" />
                                            <input type="text" class="form-control   mt-1" placeholder="{{$lang_kwords['examples-of-past-work_2']['english']}}" disabled name="facebook_link" id="facebook_link" value="{{ $prof->prof_address[0]->facebook_link }}" />
                                            <input type="text" class="form-control   mt-1" placeholder="{{$lang_kwords['examples-of-past-work_3']['english']}}" disabled name="youtube_link" id="youtube_link" value="{{ $prof->prof_address[0]->youtube_link }}" />
                                        </div>
                                        @endif

                                        <div class="">
                                            <div class="mt-2"><label class="form-label">{{$lang_kwords['gender']['english']}}</label></div>
                                            <div class="field-container d-flex align-items-center flex-wrap">
                                                <select name="gender" class="mollure-select frm_inp" disabled>
                                                    <option value="">{{$lang_kwords['select']['english']}}  {{$lang_kwords['gender']['english']}}</option>
                                                    <option value="male"  <?= $c = ($prof->prof_address[0]->gender == 'male') ? 'selected' : ''; ?> > {{$lang_kwords['male']['english']}}</option>
                                                    <option value="female"  <?= $c = ($prof->prof_address[0]->gender == 'female') ? 'selected' : ''; ?> >{{$lang_kwords['female']['english']}} </option>
                                                    <option value="neutral"  <?= $c = ($prof->prof_address[0]->gender == 'neutral') ? 'selected' : ''; ?> >{{$lang_kwords['gender-neutral']['english']}} </option>
                                                    <option value="not_prefer"  <?= $c = ($prof->prof_address[0]->gender == 'not_prefer') ? 'selected' : ''; ?> >{{$lang_kwords['i-prefer-not-to-answer']['english']}}</option>
                                                </select>
                                            </div>
                                        </div>


                                        @if($prof->status=='approve')
                                            <h5 class="text-custom-primary" id="prof_h_up_det"></h5>
                                        @endif

                                        @if($prof->user_type == "professional" || $prof->user_type == "company")
                                        <div class="" id="ed_sec_">
                                            <div class="mt-2"><label class="form-label">{{$lang_kwords['contact-person']['english']}}</label></div>
                                            <div class="field-container d-flex">
                                                <div class="flex-fill me-4">
                                                    <input type="text" placeholder="{{$lang_kwords['first-name']['english']}}" class="form-control frm_inp" disabled name="contact_person_first_name" id="contact_person_first_name" value="{{ $prof->prof_address[0]->contact_person_first_name }}" />
                                                </div>
                                                <div class="flex-fill">
                                                    <input type="text" placeholder="{{$lang_kwords['last-name']['english']}}" class="form-control frm_inp" disabled name="contact_person_last_name" id="contact_person_last_name" value="{{ $prof->prof_address[0]->contact_person_last_name }}" />
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        <div class="">
                                            <div class="mt-2"><label class="form-label">{{$lang_kwords['contact-number']['english']}}</label></div>
                                            <div class="field-container"><input type="text" class="form-control frm_inp" disabled name="contact_number" id="contact_number" value="{{ $prof->prof_address[0]->contact_number }}" /></div>
                                        </div>
                                        <div class="">
                                            <div class="mt-2"><label class="form-label">{{$lang_kwords['passwords']['english']}}</label></div>
                                            <div class="field-container"><input type="password" class="form-control frm_inp" disabled name="password" id="password" value="" /></div>
                                        </div>
                                        <div class="">
                                            <div class="mt-2"><label class="form-label">{{$lang_kwords['repeat-password']['english']}}</label></div>
                                            <div class="field-container"><input type="password" class="form-control frm_inp" disabled name="conf_password" id="conf_password" value="" /></div>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <button class="btn custom-btn-primary" type="button" name="form_submit" id="form_submit" value="Update" onclick="form_validate()" style="display:none">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Professional Profile End-->
@if($prof->status=='approve')
    <!--Professional Template Start-->
    <div class="container mb-4 protemp_form">
        <div class="accordion">
            <div class="accordion-item border-0">
            <!-- <h2 class="accordion-header" id="professional-template-heading">
            <button class="block-heading accordion-button p-2 text-white rounded fs-5" type="button" data-bs-toggle="collapse" data-bs-target="#professional-template-body" aria-expanded="true" aria-controls="professional-template-body">
            {{$lang_kwords['professional-template']['english']}}
                    </button>
         </h2> -->
                <!-- <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3">Professional Template</div> -->
                <div id="professional-template-body" class="accordion-collapse collapse show" aria-labelledby="professional-template-heading" data-bs-parent="#professional-template">
                    <div class="accordion-body px-0">
                        <div class="bg-white rounded">
                            <div class="d-flex border-custom mb-3">
                                <div class="w-50 border-end up_tab">
                                    <div class="loc_type_card _fix_loc active text-custom-dark fw-custom-bold fs-5 text-center p-2 cursor-pointer" onclick="show_fix_loc_sec()">{{$lang_kwords['fixed-location']['english']}}</div>
                                </div>
                                <div class="w-50 up_tab">
                                    <div class="loc_type_card _des_loc text-custom-dark fw-custom-bold fs-5 text-center p-2 cursor-pointer" onclick="show_des_loc_sec()">{{$lang_kwords['desired-location']['english']}}</div>
                                </div>
                            </div>
                            <div class="fix_loc_sec">
                                <div class="bbtn-g">
                                    <button class="bbtn cptm"  value="{{$lang_kwords["copy-to-desire-location"]["english"]}}" onclick="copy_desire()">Copy template</button>
                                    <button class="bbtn" onclick="clear_all('f')">Clear All</button>
                                </div>
                                <div class="block-heading collapsed">
                                    {{$lang_kwords['profile-pic-name-and-bio']['english']}}
                                </div>
                                <form action="{{route('fixed_location_update')}}" id="frm1" class="fix_loc_form" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ Session::token() }}" />
                                    <div class="row px-0 pe-sm-4 ps-sm-4  sub-temp-fixed-loc mb-4">
                                        <div class="col-12 mb-2 mb-lg-0 col-lg-12 ps-lg-4 text-end">
                                            <i class="cursor-pointer" onclick="edit_fix_bio_frm()" style="margin-bottom: 18px;margin-top: 14px;display: block;"><img src="{{asset('public/images/edit_pen.svg')}}" /></i>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <input type="file" class="frm_inp1 d-none" disabled name="fixed_pic" id="fixed_pic" accept="image/png,image/jpeg" />
                                                    <label for="fixed_pic" class=" bg-custom-light d-flex align-items-center justify-content-center prof_img_lbl">
                                                        @if($prof->fixed_pic!='')
                                                            <img src="{{asset('public/imgs/template/'.$prof->fixed_pic)}}" class="img1 fx_img1">
                                                        @else
                                                            <i class="ri-upload-2-line fx_iu" style="font-size: 64px; color: #929292"></i>
                                                            <img src="" style="display:none" class="img1 fx_img1">
                                                        @endif
                                                    </label>
                                                </div>
                                                <div class="w-100 ms-4">
                                                    <div class="form-icon icon-right-align mb-2">
                                                        <input class="form-control border-custom frm_inp1" type="text" placeholder="{{$lang_kwords['professional-name-salon-name']['english']}}" disabled name="fixed_name" id="fixed_name" value="{{$prof->fixed_name}}" style="padding: 12px;" />
                                                    </div>
                                                    <div class="form-icon icon-right-align">
                                                        <textarea class="form-control  border-custom frm_inp1" type="text" placeholder="Bio" disabled name="fixed_bio" id="fixed_bio">{{$prof->fixed_bio}}</textarea>
                                                        <!-- <i class="ri-edit-box-line text-custom-primary icon-textarea fs-5"></i> -->
                                                    </div>
                                                    <div class='mt-3 d-flex'>
                                                        <div class="flex-3 me-2">
                                                            <input type="text" class="form-control border-custom p-12 frm_inp1" disabled name="keyword_1" id="keyword_1" value="{{ $prof->keyword_1 }}" maxlength="12" placeholder="Keyword 1">
                                                        </div>
                                                        <div class="flex-3 me-2">
                                                            <input type="text" class="form-control border-custom p-12 frm_inp1" disabled name="keyword_2" id="keyword_2" value="{{ $prof->keyword_2 }}" maxlength="12" placeholder="Keyword 2">
                                                        </div>
                                                        <div class="flex-3 me-2">
                                                            <input type="text" class="form-control border-custom p-12 frm_inp1" disabled name="keyword_3" id="keyword_3" value="{{ $prof->keyword_3 }}" maxlength="12" placeholder="Keyword 3">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-2 mb-lg-0 col-lg-3 pe-lg-4">

                                        </div>
                                        <div class="col-12 col-lg-9">

                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mb-5" style="margin-bottom: 66px !important;">
                                        <button class="btn custom-btn-primary fs-5" type="button" name="form_submit1" id="form_submit1" style="display:none" value="Save" onclick="form_validate1()">{{$lang_kwords['save']['english']}}</button>
                                    </div>
                                </form>
                                <div class="pb-4">
                                    <div class="block-heading" style="margin-top: -50px;">
                                        {{$lang_kwords['fixed-location']['english']}}: {{$lang_kwords['add-address']['english']}}
                                    </div>
                                </div>
                                @if($fixed_loc_salon && count($fixed_loc_salon) == 0)
                                    <div class="d-flex justify-content-end mb-2">
                                        <button class="btn gradient-btn me-2" type="button" onclick="add_salon()"><img src="{{asset('public/images/add_plus.svg')}}" /> {{$lang_kwords['add-address']['english']}}</button>
                                    </div>
                                @endif
                                <div class="row px-4 mb-5">
                                    @if($fixed_loc_salon && count($fixed_loc_salon)>0)
                                        <input type="hidden" value="Y" id="is_salon">
                                        @foreach($fixed_loc_salon as $k=>$salon)
                                            <input type="hidden" id="salon_id_inp" value="{{$salon->id}}" data-name="{{$salon->salon_name}}">
                                            <div class="col-12 col-md-6 col-lg-4 mb-3">
                                                <div class="sub-temp-card fixed_location_card d-flex justify-content-between p-4 " id="sub-temp-card_{{$salon->id}}">
                                                    <!--<i class="ri-map-pin-2-fill location-icon"></i>-->
                                                    <div class="d-flex flex-column   z-index-1">
                                                        <label class="mb-2">{{$lang_kwords['salon-name']['english']}}:&nbsp;&nbsp; {{$salon->salon_name}}</label>
                                                        <label class="mb-2">{{$lang_kwords['street']['english']}}:&nbsp;&nbsp;{{$salon->street}}</label>
                                                        <label class="mb-2">{{$lang_kwords['postal-code']['english']}}:&nbsp;&nbsp;{{$salon->number}}</label>
                                                    <!--<label class="mb-2">{{$lang_kwords['number']['english']}}: {{$salon->postal_code}}</label>-->
                                                        <label class="mb-2">{{$lang_kwords['municipality']['english']}}:&nbsp;&nbsp;{{$salon->municipality}}</label>
                                                        <label class="mb-2">{{$lang_kwords['province']['english']}}:&nbsp;&nbsp;{{$salon->province}}</label>
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-between align-self-end z-index-1">
                                                        <i class="fixed_location_edit_icon cursor-pointer" onclick="edit_salon('{{$salon->id}}')"><img src="{{URL::asset('public/images/edit_pen.svg')}}" /></i>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <input type="hidden" value="N" id="is_salon">
                                    @endif
                                </div>
                                <div class="block-heading collapsed">
                                    {{$lang_kwords['services-for']['english']}}
                                </div>
                                <div class="row px-0 pe-sm-4 ps-sm-4 sub-temp-fixed-loc mb-4">
                                    <div class="col-lg-10">
                                        <div class="service_for_checkbox_container d-flex flex-wrap pe-5 mt-2">

                                            <div class="form-check d-flex align-items-center me-5">
                                                <label class="custom_check form-check-label me-2" for="all_gender_chk"> {{$lang_kwords['all-genders']['english']}}
                                                    <input class="me-3 serv_for_fx_inp" disabled type="checkbox" name="all_gender_chk" value="" id="all_gender_chk" />&nbsp;<span class="checkmark"></span></label>
                                            </div>
                                            <div class="form-check d-flex align-items-center me-5">
                                                <label class="custom_check form-check-label me-2" for="men_chk"> {{$lang_kwords['male-only']['english']}}
                                                    <input class=" me-3 serv_for_fx_inp" disabled type="checkbox" name="men_chk" value="" id="men_chk" />&nbsp;<span class="checkmark"></span></label>
                                            </div>
                                            <div class="form-check d-flex align-items-center me-5">
                                                <label class="custom_check form-check-label me-2" for="women_chk"> {{$lang_kwords['female-only']['english']}}
                                                    <input class="me-3 serv_for_fx_inp" disabled type="checkbox" name="women_chk" value="" id="women_chk" />&nbsp;<span class="checkmark"></span></label>
                                            </div>
                                            <div class="form-check d-flex align-items-center me-5">
                                                <label class="custom_check form-check-label me-2" for="kids_chk"> {{$lang_kwords['kids-only']['english']}}
                                                    <input class=" me-3 serv_for_fx_inp" disabled type="checkbox" name="kids_chk" value="" id="kids_chk" />&nbsp;<span class="checkmark"></span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-2 mb-lg-0 col-lg-2 ps-lg-4 text-end">
                                        <i class="cursor-pointer" onclick="serv_for_fx_inp()" style="margin-bottom: 18px;margin-top: 14px;display: block;"><img src="{{asset('public/images/edit_pen.svg')}}" /></i>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mb-5" style="margin-bottom: 66px !important;">
                                    <button class="btn custom-btn_j fs-5" id="serv_for_btn" type="button" value="Save" onclick="save_service_for()" style="display:none;width: 150px;">{{$lang_kwords['save']['english']}}</button>
                                </div>
                            </div>


                                <!-- Desire location -->
                                <div class="dis_loc_sec" style="display:none">
                                    <div class="bbtn-g">
                                        <button class="bbtn cptm"  value="{{$lang_kwords["copy-to-fixed-location"]["english"]}}" onclick="copy_desire()">Copy template</button>
                                        <button class="bbtn" onclick="clear_all('d')">Clear All</button>
                                    </div>
                                    <div class="block-heading des_title2">
                                        {{$lang_kwords['profile-pic-name-and-bio']['english']}}
                                    </div>
                                    <form action="{{route('fixed_location_update')}}" id="des_frm1" class="des_loc_form" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{ Session::token() }}" />
                                        <div class="row px-4 sub-temp-fixed-loc mb-4">
                                            <div class="col-lg-12 ps-lg-4 text-end">
                                                <i class="text-custom-primary fs-5 cursor-pointer" onclick="edit_des_bio_frm()" style="margin-bottom: 18px;margin-top: 10px;display: block;"><img src="{{asset('public/images/edit_pen.svg')}}" /></i>
                                            </div>
                                            <div class="col-lg-12">

                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <input type="file" class="des_frm_inp1 d-none" disabled name="desire_pic" id="desire_pic" accept="image/png,image/jpeg" />
                                                        <label for="desire_pic" class="bg-custom-light d-flex align-items-center justify-content-center prof_img_lbl">
                                                            @if($prof->desire_pic!='')
                                                                <img src="{{asset('public/imgs/template/'.$prof->desire_pic)}}" class="img1 ds_img1">
                                                            @else
                                                                <i class="ri-upload-2-line ds_iu" style="font-size: 64px; color: #929292"></i>
                                                                <img src="" style="display:none" class="img1 ds_img1">
                                                            @endif
                                                        </label>
                                                    </div>
                                                    <div class="w-100 ms-4">
                                                        <div class="form-icon icon-right-align mb-2">
                                                            <input class="form-control border-custom des_frm_inp1" type="text" placeholder="{{$lang_kwords['professional-name-salon-name']['english']}}" disabled name="desire_name" id="desire_name" value="{{$prof->desire_name}}" style="padding: 12px;" />
                                                        </div>
                                                        <div class="form-icon icon-right-align">
                                                            <textarea class="form-control  border-custom des_frm_inp1" type="text" placeholder="Bio" disabled name="desire_bio" id="desire_bio">{{$prof->desire_bio}}</textarea>
                                                            <!-- <i class="ri-edit-box-line text-custom-primary icon-textarea fs-5"></i> -->
                                                        </div>
                                                        <div class='mt-3 d-flex'>
                                                            <div class="flex-3 me-2">
                                                                <input type="text" class="form-control border-custom p-12 des_frm_inp1" disabled name="desire_keyword_1" id="desire_keyword_1" value="{{ $prof->desire_keyword_1 }}" maxlength="12" placeholder="Keyword 1">
                                                            </div>
                                                            <div class="flex-3 me-2">
                                                                <input type="text" class="form-control border-custom p-12 des_frm_inp1" disabled name="desire_keyword_2" id="desire_keyword_2" value="{{ $prof->desire_keyword_2 }}" maxlength="12" placeholder="Keyword 2">
                                                            </div>
                                                            <div class="flex-3 me-2">
                                                                <input type="text" class="form-control border-custom p-12 des_frm_inp1" disabled name="desire_keyword_3" id="desire_keyword_3" value="{{ $prof->desire_keyword_3 }}" maxlength="12" placeholder="Keyword 3">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-center mb-5" style="margin-bottom: 66px !important;">
                                            <button class="btn custom-btn_j fs-5" type="button" name="des_form_submit1" id="des_form_submit1" style="display:none;width: 150px;" value="Save" onclick="des_form_validate1()">{{$lang_kwords['save']['english']}}</button>
                                        </div>
                                    </form>



                                    <div class="block-heading" style="margin-top: -50px; ">Operating Area</div>
                                    <div class="row px-4 mb-4 des_loc_type_sec">
                                    @if($des_loc_salon && count($des_loc_salon)>0)
                                        <div class="col-lg-12 ps-lg-4 text-end">
                                            <i class="text-custom-primary fs-5 cursor-pointer" onclick="edit_oprating_area_form()" style="margin-bottom: 18px;margin-top: 10px;display: block;"><img src="{{asset('public/images/edit_pen.svg')}}" /></i>
                                        </div>
                                    @else
                                        <div class="col-lg-12 ps-lg-4 text-end">
                                            <i class="text-custom-primary fs-5 cursor-pointer" onclick="edit_oprating_area_form1()" style="margin-bottom: 18px;margin-top: 10px;display: block;"><img src="{{asset('public/images/edit_pen.svg')}}" /></i>
                                        </div>
                                    @endif 
                                    <!-- @if($des_loc_salon && count($des_loc_salon)>0)   
                                        <div class="col-md-12">
                                            <label class="custom_check form-check-label fs-5" for="des_serv_lc_e">
                                                <span style="display: inline-block;width:250px">{{$lang_kwords['everywhere']['english']}} in Netherland</span>
                                                <input class="form-check-input me-2 des_loc_type" type="radio" disabled name="des_serv_lc" value="everywhere" id="des_serv_lc_e" />
                                                &nbsp;<span class="checkmark"></span>
                                            </label>
                                        </div>
                                    @else 
                                        <div class="col-md-12">
                                            <label class="custom_check form-check-label fs-5" for="des_serv_lc_e">
                                                <span style="display: inline-block;width:250px">{{$lang_kwords['everywhere']['english']}} in Netherland</span>
                                                <input class="form-check-input me-2 des_loc_type" type="radio" disabled name="des_serv_lc" value="everywhere" id="des_serv_lc_e" />
                                                &nbsp;<span class="checkmark"></span>
                                            </label>
                                        </div>
                                    @endif -->
                                        <!-- <div class="d-flex flex-wrap justify-content-between mt-4">
                                        @if($des_loc_salon && count($des_loc_salon)>0)
                                            <div class="d-flex align-items-center">
                                                <label class="custom_check form-check-label fs-5" for="des_serv_lc_s">
                                                    <span style="display: inline-block;width:250px">{{$lang_kwords['specific-provinces']['english']}} </span>
                                                    <input class="form-check-input me-2 des_loc_type" type="radio" disabled name="des_serv_lc" value="specific" id="des_serv_lc_s" onclick="add_province_act1()"/>
                                                    &nbsp;<span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-check d-flex align-items-center ml-auto"> -->
                                                <!-- <button type="button" id="des_add_prov_btn" style="width:150px" class="btn  custom-btn_j" onclick="add_province_act()">+ Areas</button> -->
                                                <!-- <p style="margin: 11px 0px 11px 11px"><span class="cursor-pointer del_vis_spn"  id="des_add_prov_edit_btn" onclick="edit_des_location('')"><i class="cursor-pointer"><img src="{{asset('public/images/edit_pen.svg')}}" /></i></span></p>
                                            </div>
                                        @else 
                                        <div class="d-flex align-items-center">
                                                <label class="custom_check form-check-label fs-5" for="des_serv_lc_s">
                                                    <span style="display: inline-block;width:250px">{{$lang_kwords['specific-provinces']['english']}} </span>
                                                    <input class="form-check-input me-2 des_loc_type" type="radio" disabled name="des_serv_lc" value="specific" id="des_serv_lc_s" onclick="add_province_act()"/>
                                                    &nbsp;<span class="checkmark"></span>
                                                </label>
                                            </div>
                                        @endif
                                        </div> -->
                                @if($des_loc_salon->count() > 0)
                                    @php
                                        $hasEverywhere = false;
                                        $hasSpecific = false;
                                    @endphp

                                    @foreach($des_loc_salon as $des_loc)
                                        @if($des_loc->desire_location_type === 'everywhere')
                                            @php $hasEverywhere = true; @endphp
                                        @elseif($des_loc->desire_location_type === 'specific')
                                            @php $hasSpecific = true; @endphp
                                        @endif
                                    @endforeach

                                    @if($hasEverywhere && $hasSpecific)
                                    <div class="col-md-12">
                                            <label class="custom_check form-check-label fs-5" for="des_serv_lc_e">
                                                <span style="display: inline-block;width:250px">{{$lang_kwords['everywhere']['english']}} in Netherland</span>
                                                <input class="form-check-input me-2 des_loc_type" type="radio" disabled name="des_serv_lc" value="everywhere" id="des_serv_lc_e" />
                                                &nbsp;<span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between mt-4">
                                            <div class="d-flex align-items-center">
                                                <label class="custom_check form-check-label fs-5" for="des_serv_lc_s">
                                                    <span style="display: inline-block;width:250px">{{$lang_kwords['specific-provinces']['english']}} </span>
                                                    <input class="form-check-input me-2 des_loc_type" type="radio" disabled name="des_serv_lc" value="specific" id="des_serv_lc_s" onclick="add_province_act1()"/>
                                                    &nbsp;<span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="form-check d-flex align-items-center ml-auto"> 
                                                <!-- <button type="button" id="des_add_prov_btn" style="width:150px" class="btn  custom-btn_j" onclick="add_province_act()">+ Areas</button> -->
                                               <p style="margin: 11px 0px 11px 11px"><span class="cursor-pointer del_vis_spn"  id="des_add_prov_edit_btn" onclick="edit_des_location('')"><i class="cursor-pointer"><img src="{{asset('public/images/edit_pen.svg')}}" /></i></span></p>
                                            </div>
                                        </div>    
                                         @elseif($hasEverywhere && !$hasSpecific)
                                        <div class="col-md-12">
                                            <label class="custom_check form-check-label fs-5" for="des_serv_lc_e">
                                                <span style="display: inline-block;width:250px">{{$lang_kwords['everywhere']['english']}} in Netherland</span>
                                                <input class="form-check-input me-2 des_loc_type" type="radio" disabled name="des_serv_lc" value="everywhere" id="des_serv_lc_e" />
                                                &nbsp;<span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between mt-4">
                                            <div class="d-flex align-items-center">
                                                <label class="custom_check form-check-label fs-5" for="des_serv_lc_s">
                                                    <span style="display: inline-block;width:250px">{{$lang_kwords['specific-provinces']['english']}} </span>
                                                    <input class="form-check-input me-2 des_loc_type" type="radio" disabled name="des_serv_lc" value="specific" id="des_serv_lc_s" onclick="add_province_act()"/>
                                                    &nbsp;<span class="checkmark"></span>
                                                </label>
                                            </div>
                                            </div>
                                            @else
                                            <div class="col-md-12">
                                                <label class="custom_check form-check-label fs-5" for="des_serv_lc_e">
                                                    <span style="display: inline-block;width:250px">{{$lang_kwords['everywhere']['english']}} in Netherland</span>
                                                    <input class="form-check-input me-2 des_loc_type" type="radio" disabled name="des_serv_lc" value="everywhere" id="des_serv_lc_e" />
                                                    &nbsp;<span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="d-flex flex-wrap justify-content-between mt-4">
                                                <div class="d-flex align-items-center">
                                                    <label class="custom_check form-check-label fs-5" for="des_serv_lc_s">
                                                        <span style="display: inline-block;width:250px">{{$lang_kwords['specific-provinces']['english']}} </span>
                                                        <input class="form-check-input me-2 des_loc_type" type="radio" disabled name="des_serv_lc" value="specific" id="des_serv_lc_s" onclick="add_province_act()"/>
                                                        &nbsp;<span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>    
                                             @endif
                                        @else
                                        <div class="col-md-12">
                                                <label class="custom_check form-check-label fs-5" for="des_serv_lc_e">
                                                    <span style="display: inline-block;width:250px">{{$lang_kwords['everywhere']['english']}} in Netherland</span>
                                                    <input class="form-check-input me-2 des_loc_type" type="radio" disabled name="des_serv_lc" value="everywhere" id="des_serv_lc_e" />
                                                    &nbsp;<span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="d-flex flex-wrap justify-content-between mt-4">
                                                <div class="d-flex align-items-center">
                                                    <label class="custom_check form-check-label fs-5" for="des_serv_lc_s">
                                                        <span style="display: inline-block;width:250px">{{$lang_kwords['specific-provinces']['english']}} </span>
                                                        <input class="form-check-input me-2 des_loc_type" type="radio" disabled name="des_serv_lc" value="specific" id="des_serv_lc_s" onclick="add_province_act()"/>
                                                        &nbsp;<span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        @endif     
                                        <div class="d-flex justify-content-center mb-2 px-4 mt-3">
                                            <button class="btn custom-btn_j fs-5" style="display:none;width:150px;" type="button" name="des_form_submit2" id="des_form_submit2" value="Save" onclick="des_form_validate2()">{{$lang_kwords['save']['english']}}</button>
                                        </div>

                                        <div class="alert alert-success py-1 w-100 text-center" id="spn_des_frm2" style="display:none"><b>Updated</b></div>
                                    </div>
                                    <div class="row px-4 mb-5" id="des_specific_prov_sec" style="font-weight: 400;font-size: 15px !important;">
                                    @if($des_loc_salon && count($des_loc_salon)>0)
                                        <!-- <h5 class="text-custom-primary">{{$lang_kwords['selected-provinces-and-municipality']['english']}}</h5> -->
                                            <div class="d-flex flex-wrap">
                                                @foreach($des_loc_salon as $k=>$des_loc)
                                                    <div class="d-flex align-items-center border-custom me-2  mb-2 des_loc_main_sec des_loc_main_sec_{{$des_loc->id}}">
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
                                                            <!-- @if($des_loc->desire_location_type=='specific')
                                                                <div class="flex-column px-1 border-end border-start"><i class="icon-textarea fs-5 cursor-pointer" onclick="edit_des_location('{{$des_loc->id}}')">
                                                                     <img src="{{URL::asset('public/images/edit_pen.svg')}}" style="margin-top: -7px;"/>
                                                                   </i></div>
                                                            @endif
                                                            <div class="flex-column px-1"><i class="fs-5 text-danger cursor-pointer" onclick="delete_des_location('{{$des_loc->id}}')">
                                                                   <img src="{{URL::asset('public/images/trash.svg')}}" style="margin-top: -7px;"/>
                                                            </i></div> -->
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>

                                    <div class="block-heading collapsed des_salon_serv_for_sec" style="display:none">
                                        {{$lang_kwords['services-for']['english']}}
                                    </div>
                                    <div class="row px-0 pe-sm-4 ps-sm-4 sub-temp-fixed-loc mb-4">
                                        <div class="col-lg-10">
                                            <div class="service_for_checkbox_container d-flex flex-wrap pe-5 mt-2">
                                                <div class="form-check d-flex align-items-center me-5">
                                                    <label class="custom_check form-check-label me-2" for="des_all_gender_chk"> {{$lang_kwords['all-genders']['english']}}
                                                    <input class="serv_for_des_inp" disabled type="checkbox" name="des_all_gender_chk" value="" id="des_all_gender_chk" />&nbsp;<span class="checkmark"></span></label>
                                                </div>
                                                <div class="form-check d-flex align-items-center me-5">
                                                    <label class="custom_check form-check-label fs-5" for="des_men_chk"> {{$lang_kwords['male-only']['english']}}
                                                    <input class="serv_for_des_inp" disabled type="checkbox" name="des_men_chk" value="" id="des_men_chk" />&nbsp;<span class="checkmark"></span></label>
                                                </div>
                                                <div class="form-check d-flex align-items-center me-5">
                                                    <label class="custom_check form-check-label fs-5" for="des_women_chk"> {{$lang_kwords['female-only']['english']}}
                                                    <input class="serv_for_des_inp" disabled type="checkbox" name="des_women_chk" value="" id="des_women_chk" />&nbsp;<span class="checkmark"></span></label>
                                                </div>
                                                <div class="form-check d-flex align-items-center me-5">

                                                    <label class="custom_check form-check-label fs-5" for="des_kids_chk"> {{$lang_kwords['kids-only']['english']}}
                                                    <input class="serv_for_des_inp" disabled type="checkbox" name="des_kids_chk" value="" id="des_kids_chk" />&nbsp;<span class="checkmark"></span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-2 mb-lg-0 col-lg-2 ps-lg-4 text-end">
                                            <i class="cursor-pointer" onclick="serv_for_des_inp()" style="margin-bottom: 18px;margin-top: 14px;display: block;"><img src="{{asset('public/images/edit_pen.svg')}}" /></i>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mb-5" style="margin-bottom: 66px !important;">
                                        <button class="btn custom-btn_j fs-5" id="des_serv_for_btn" type="button" value="Save" onclick="save_des_service_for()" style="display:none;width: 150px;">{{$lang_kwords['save']['english']}}</button>
                                    </div>

                                </div>
                                <!-- Desire location  -->


                                <!--Subtemplate Fixed Location Start-->
                                <div class="{{--container--}} mb-4 sub_tem_fix_sec px-0" style="display:none">
                                    <div class="accordion" id="subtemplate-fixed-location">
                                        <div class="accordion-item border-0">
                                            <!-- <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3">Subtemplate Fixed Location</div> -->
                                            <div id="subtemplate-fixed-location-heading" class="accordion-header block-heading collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#subtemplate-fixed-location-body" aria-expanded="true" aria-controls="subtemplate-fixed-location-body">
                                                {{$lang_kwords['category']['english']}}
                                            </div>
                                            <div id="subtemplate-fixed-location-body" class="accordion-collapse collapse show" aria-labelledby="subtemplate-fixed-location-heading" data-bs-parent="#subtemplate-fixed-location">
                                                <div class="accordion-body px-0">
                                                    <div class="bg-white py-2 rounded salon_cate_sec" style="display:none">
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
                                <div class="{{--container--}} mb-4 salon_cate_dt_sec px-0" style="display:none">
                                    <div class="accordion" id="category">
                                        <div class="accordion-item border-0">
                                            <!-- <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3 title1">Category</div> -->
                                            <div id="category-heading" class="accordion-header block-heading collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#category-body" aria-expanded="true" aria-controls="category-body">
                                               <span id="category_name"></span> {{$lang_kwords['category']['english']}}
                                            </div>
                                            <div id="category-body" class="accordion-collapse collapse show" aria-labelledby="category-heading" data-bs-parent="#category">
                                                <div class="accordion-body px-0">
                                                    <div class="bg-white p-2 rounded">
                                                        <div class="{{--overflow-scroll--}}" id="serv_frm_sec">
                                                            <div class="category-table mb-4" style="min-width: 800px;">
                                                                <div class="category-table-row d-flex" style="margin-bottom: 30px;">
                                                                    <div class="heading py-3 w-28 border-end">{{$lang_kwords['service-name']['english']}}</div>
                                                                    <div class="heading py-3 w-28 border-end">{{$lang_kwords['duration']['english']}}</div>
                                                                    <div class="heading py-3 w-28 border-end">{{$lang_kwords['price']['english']}}</div>
                                                                    <div class="heading py-3 w-15">{{$lang_kwords['action']['english']}}</div>
                                                                </div>
                                                                <div class="tbody">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-end mb-2">
                                                            <button class="btn gradient-btn me-2" type="button" onclick="add_serv_act()"><img src="{{asset('public/images/add_plus.svg')}}" /> {{$lang_kwords['service']['english']}}</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Category End-->
                                <!--General Note Start-->
                                <div class="{{--container--}} general-note-container mb-4 salon_note_sec px-0" style="display:none">
                                    <div class="accordion" id="general-note">
                                        <div class="accordion-item border-0">
                                            <!-- <div class="block-heading text-white px-3 py-2 rounded fs-5 mb-3">General Note</div> -->
                                            <div id="general-note-heading" class="accordion-header block-heading collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#general-note-body" aria-expanded="true" aria-controls="general-note-body">
                                                {{$lang_kwords['general-note']['english']}}
                                            </div>
                                            <div id="general-note-body" class="accordion-collapse collapse show" aria-labelledby="general-note-heading" data-bs-parent="#general-note">
                                                <div class="accordion-body  px-0">
                                                    <div class="bg-white px-2 py-0 ps-sm-4 pe-sm-4 rounded pb-2">
                                                        <div class="d-flex justify-content-end">
                                                            <i class="text-custom-primary icon-textarea fs-4 cursor-pointer" onclick="enable_gen_note()" style="margin-bottom: 18px;margin-top: -8px;"><img src="{{asset('public/images/edit_pen.svg')}}" /></i>
                                                        </div>

                                                        <div class="form-icon icon-right-align mb-4 border-custom" style="padding-top: 10px;">
                                                            <table class="gen_note_tbl">
                                                                <tr class="dis_loc_sec" style="display: none">
                                                                    <td><span>Km Allowance</span></td>
                                                                    <td>
                                                                        <label class="custom_check">
                                                                            <input type="checkbox" class="edit_notes_enable" disabled name="is_km_allowance" id="is_km_allowance">
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td><input type="text" class="gen_note_inp border-custom edit_notes_enable" disabled name="km_allowance" id="km_allowance" style="width: 128px;height: 40px;padding-left: 20px;"></td>
                                                                </tr>
                                                                <tr class="dis_loc_sec" style="display: none">
                                                                    <td><span>Allow photoshoot booking</span></td>
                                                                    <td>
                                                                        <label class="custom_check">
                                                                            <input type="checkbox" class="edit_notes_enable" disabled name="photoshoot_booking" id="photoshoot_booking">
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td><!-- <input type="text" class="gen_note_inp border-custom"> --></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><span>Allow multi-person Booking </span></td>
                                                                    <td>
                                                                        <label class="custom_check">
                                                                            <input type="checkbox" class="edit_notes_enable" disabled name="multi_person_booking" id="multi_person_booking">
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </td>
                                                                    <td><!-- <input type="text" class="gen_note_inp border-custom"> --></td>
                                                                </tr>
                                                            </table>
                                                            <textarea class="form-control form-control-icon border-0 edit_notes_enable" disabled type="text" id="gen_note_txt"></textarea>
                                                        </div>
                                                        <div class="d-flex justify-content-center">
                                                            <button class="btn custom-btn_j fs-5" style="display:none;width:150px;" id="gen_not_btn" type="button" onclick="save_gen_note()">{{$lang_kwords['save']['english']}}</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <!--General Note End-->
                                <!--Team Members Start-->
                                <div class="general-note-container mb-4 team_mem_sec" style="display:none">
                                    <div class="accordion" id="team-members">
                                        <div class="accordion-item border-0">
                                            <div id="team-members-heading" type="button" class="accordion-header block-heading collapsed" data-bs-toggle="collapse" aria-expanded="false" aria-controls="visual-body" data-bs-target="#team-members-body" aria-expanded="true" aria-controls="team-members-body">
                                                {{$lang_kwords['team-members']['english']}}
                                            </div>
                                            <div id="team-members-body" class="accordion-collapse collapse show" aria-labelledby="team-members-heading" data-bs-parent="#team-members">
                                                <div class="accordion-body px-0">
                                                    <div class="bg-white px-2 py-0 ps-sm-4 pe-sm-4 rounded pb-2">
                                                        <div class="d-flex justify-content-end" style="padding-bottom: 18px">
                                                            <button class="btn gradient-btn" onclick="enable_team_frm()"><img src="{{asset('public/images/add_plus.svg')}}" /> {{$lang_kwords['team-members']['english']}}</button>
                                                            <i class="text-custom-primary icon-textarea fs-4 cursor-pointer" onclick="enable_team_member_chkbox()" style="margin-left: 10px;align-self: center"><img src="{{asset('public/images/edit_pen.svg')}}" /></i>
                                                        </div>
                                                        <div class="bg-white p-0 rounded">
                                                            <div class="team_mem_lst_sec">
                                                            </div>
                                                            <div id="team_mem_f_sec" style="display:none">
                                                                <div class="row">
                                                                    <label class="custom_check p-0" style="margin-left: 20px;">{{$lang_kwords['is_team_member_feature']['english']}} &nbsp;
                                                                        <input type="checkbox" style="vertical-align: middle;width:16px;height:16px;" value="Y" disabled id="team_mem_f" <?= $c = ($prof->team_mem_f == 'Y') ? 'checked' : ''; ?>>
                                                                        &nbsp;<span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-center">
                                                            <button class="btn custom-btn_j fs-5" style="display:none;width:150px;" id="team_member_chkbox" type="button">{{$lang_kwords['save']['english']}}</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Team Members End-->
                                <!--Visual Start-->
                                <div class="general-note-container mb-5 visual_sec" style="display:none">
                                    <div class="accordion" id="visual">
                                        <div class="accordion-item border-0">
                                            <div id="visual-heading" type="button" class="accordion-header block-heading collapsed" data-bs-toggle="collapse" data-bs-target="#visual-body" aria-expanded="false" aria-controls="visual-body">
                                                {{$lang_kwords['visual']['english']}}
                                            </div>
                                            <div id="visual-body" class="accordion-collapse collapse show" aria-labelledby="visual-heading" data-bs-parent="#visual">
                                                <div class="accordion-body px-0">
                                                    <div class="bg-white px-2 py-0 ps-sm-4 pe-sm-4 rounded pb-2">
                                                        <div class="d-flex justify-content-end" style="padding-bottom: 18px">
                                                            <button class="btn gradient-btn" onclick="show_ur_img_sec()"><img src="{{asset('public/images/add_plus.svg')}}" /> {{$lang_kwords['images']['english']}}</button>
                                                        </div>
                                                        
                                                        <div class="visual_lst_sec">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Visual End-->


{{--                                <div class="container general-note-container mb-5 text-center">--}}
{{--                                    <input type="button" value="Copy to Location" class="btn btn-primary rounded-pill" id="copy_btn" onclick="copy_desire()">--}}
{{--                                </div>--}}

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
                        <span class="inf_msg_spn alert alert-success">{{$lang_kwords['your-details-are-under-process-to-review']['english']}}</span>
                    @endif
                </div>
            </div>
            <div class="row" id="des_info_reg_sec" style="display:none">
                <div class="col-md-12 text-center">
                    @if($prof->desire_info=='2' || $prof->desire_info=='')
                        <input type="button" class="btn gradient-btn me-2 des_reg_btn" value="{{$lang_kwords['profile-register-button']['english']}}" onclick="info_verify('d')" style="padding: 10px!important;width: auto;min-width: 300px;">
                    @elseif($prof->desire_info=='0')
                        <span class="inf_msg_spn alert alert-success">{{$lang_kwords['your-details-are-under-process-to-review']['english']}}</span>
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

        <!-- Modal -->
        <div id="myModalImg1" class="modal fade" role="dialog">
            <div class="modal-dialog" style="">
                <div class="modal-content">
                    <div class="modal-header" style="justify-content: end;">
                        <button type="button" class="close" data-dismiss="modal" onclick="closeModal('myModalImg1')">&times;</button>
                        <!-- <h4 class="modal-title">Prei</h4> -->
                    </div>
                    <div class="modal-body text-center">
                        <p class="mt-3" style="font-size: 20px;font-weight:bold">{{$lang_kwords['did-you-complete-template-in-2-languages']['english']}}?</p>
                        <div class="mt-5 d-flex" style="    justify-content: space-around;">
                            <div>
                                <a href="javascript:void(0)" onclick="closeModal('myModalImg1')" style="width: 100px;" class="btn btn-success">Yes</a>
                            </div>
                            <div>
                                <a href="{{route('nl_dashboard')}}?t=f" style="width: 100px;" class="btn btn-warning">No</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeModal('myModalImg')">Close</button>
                    </div> -->
                </div>
            </div>
        </div>


        <div class="popupContainer imgPopUp" style="display: none">
            <div class="popup mx-auto text-center">
                <div class="d-flex justify-content-center title-area align-items-center position-relative">
                    <h3 class="poptitle mb-0">{{$lang_kwords['choose-one-or-multiple-images']['english']}}</h3>
                    <button class="popclose"><img src="{{ URL::asset('public/images/model/close.svg')}}" /></button>
                </div>
                <form id="frm4">
                    <div class="upload-area d-flex justify-content-center align-items-center">
                        <div class="mt-3">
                            <input type="hidden" name="_token" value="{{ Session::token() }}" />
                            <input type="hidden" value="link" name="visual_type" id="visual_type">
                            <input class="form-control mb-2 insta_link_sec" type="text" id="visual_link" name="visual_link" placeholder="Copy images from instagram and paste link here" style="display:none!important" />
                            <input type="file" id="visual_img" name='visual_img[]' multiple class="d-none" style="position: absolute" accept="image/png,image/jpeg" />
                            <label for="visual_img" class="upload-label text-center" data-t="h" style="position: relative;" >
                                <img src="{{ URL::asset('public/images/model/uploadfile.svg')}}" class="mb-2">
                                <div class="upload-text">
                                    <p style="font-weight: 400;font-size: 16px;" id="vis_img_sct">Drag Your Images to Upload <br>
                                        or <span class="text-decoration-underline upload" style="color: #000000; font-weight: 700;">Browse Here</span></p>
                                </div>
                            </label>
                        </div>
                    </div>
                </form>
                <div class="d-flex justify-content-center">
                    <button class="pop-button btn custom-btn-primary fs-5" id="submit_btn_visual" type="button" onclick="save_visual()" style="display:none!important">{{$lang_kwords['save']['english']}}</button>
                </div>
            </div>
        </div>

        <div class="popupContainer survicePopUp" style="display: none">
            <div class="popup mx-auto text-center">
                <div class="d-flex justify-content-center title-area align-items-center position-relative">
                    <h3 class="poptitle mb-0">Add Service</h3>
                    <button class="popclose" onclick="close_service_form('0')"><img src="{{ URL::asset('public/images/model/close.svg')}}" /></button>
                </div>
                <form class="d-grid  gap-2">
                    <input type="hidden" id="cate_id">
                    <input type="hidden" id="temp_id">
                    <input type="hidden" id="prof_id">
                    <input type="hidden" id="serv_id">
                    <input type="hidden" id="serv_act" value="add">
                    <input type="hidden" id="edit_serv_i" value="">
                    <input type="hidden" id="serve_type" value="main">
                    <div class="">
                        <input type="text" placeholder="{{$lang_kwords['service-name']['english']}}" class="form-control"  id="serv_name_inp">
                    </div>
                    <div class="txarea position-relative">
                        <textarea type="text" rows="4" placeholder="{{$lang_kwords['additional-info']['english']}}" class="resizes form-control"  id="serv_add_info"></textarea>
                    </div>
                    <div class="text-start">
                        <label for="" class="mb-2">{{$lang_kwords['duration']['english']}}</label>
                        <div class="d-flex gap-1 align-items-center ">
                            <div class="px-0">
                                <label class="custom-select custom-select-address">
                                    <select class="mollure-select-address frm" id="duration_start_hr">
                                        <option value="">From</option>
                                        <option value="1h">1h</option>
                                        <option value="2h">2h</option>
                                        <option value="3h">3h</option>
                                        <option value="4h">4h</option>
                                        <option value="5h">5h</option>
                                    </select>
                                </label>
                            </div>
                            <span class="sp">
                                    -
                                </span>
                            <div class="px-0 ">
                                <label class="custom-select custom-select-address">
                                    <select class="mollure-select-address frmto" id="duration_end_hr">
                                        <option value="">To</option>
                                        <option value="1h">1h</option>
                                        <option value="2h">2h</option>
                                        <option value="3h">3h</option>
                                        <option value="4h">4h</option>
                                        <option value="5h">5h</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="text-start">
                        <label class="custom-select custom-select-address">
                            <select class="mollure-select-address stprice price_type_inp" name="price_type">
                                <option value="f">Fixed Price</option>
                                <option value="s">Starting Price</option>
                            </select>
                        </label>
                    </div>
                    <div id="serv_p_typ1"><input type="text" class="form-control" id="serv_p_fix" placeholder="Price" /></div>
                    <div id="serv_p_typ2" style="display:none;"><input type="text" class="form-control" id="serv_p_st_fr" placeholder="Price" /></div>

                    <div class="" style="display: none">
                        <input class="form-check-input" type="checkbox" checked value="" id="is_discount" />
                        <label class="form-check-label text-custom-primary" for="is_discount">
                            {{$lang_kwords['discount']['english']}}
                        </label>
                    </div>

                    <div class="text-start">
                        <label class="custom-select custom-select-address">
                            <select class="mollure-select-address stprice discount_inp" name="discount_type" id="discount_type">
                                <option value="" selected>Select Discount Type</option>
                                <option value="f">Fixed Discount</option>
                                <option value="p">Percent Discount</option>
                            </select>
                        </label>
                    </div>
                    
                    <div id="serv_d_typ1" style="display:none">
                        <input type="text" class="form-control" id="serv_d_fix" placeholder="Enter {{$lang_kwords['amount']['english']}}"/>
                        <div class="text-start">
                            <label for="" class="mb-2">{{$lang_kwords['valid-from']['english']}}</label>
                            <div id="range" data-date-picker data-date-picker-type="range" data-date-picker-options-inline="true" class="bx--date-picker bx--date-picker--range d-flex gap-1 align-items-center ">
                                <div class="px-0">
                        {{--                            <input type="text" id="date-picker-1" class="bx--date-picker__input" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="mm/dd/yyyy" data-date-picker-input-from />--}}
                                    <input type="text" placeholder="From" class="form-control" id="serv_d_fx_fr_dt" />
                                </div>
                                <span class="sp"> - </span>
                                <div class="px-0 ">
                            {{--                            <input type="text" id="date-picker-2" class="bx--date-picker__input" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="mm/dd/yyyy" data-date-picker-input-to />--}}
                                    <input type="text" placeholder="To" class="form-control" id="serv_d_fx_to_dt" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="serv_d_typ2" style="display:none">
                        <div>
                            <input type="text" class="form-control" id="serv_d_per" placeholder="Enter {{$lang_kwords['percent']['english']}}"/>
                        </div>
                        <div class="text-start">
                            <label for="" class="mb-2">{{$lang_kwords['valid-from']['english']}}</label>
                            <div class="d-flex gap-1 align-items-center ">
                                <div class="px-0">
                                    <input type="text" placeholder="From" class="form-control" id="serv_d_pr_fr_dt" />
                                </div>
                                <span class="sp"> - </span>
                                <div class="px-0 ">
                                    <input type="text" placeholder="To" class="form-control" id="serv_d_pr_to_dt" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="txarea position-relative tt">
                        <textarea type="text" rows="4" placeholder="{{$lang_kwords['additional-info']['english']}}" class="resizes form-control"  id="serv_p_add_info"></textarea>
                        <img src="{{ URL::asset('public/images/model/warning.svg')}}" class="inf">
                        <span id="ttip">Lorem Ispum</span>
                    </div>
                </form>
                <button class="pop-button" id="serv_add_btn" onclick="save_service()">{{$lang_kwords['save']['english']}}</button>
            </div>
        </div>


        <div class="popupContainer locationPopUp" style="display: none">
            <div class="popup mx-auto text-center">
                <div class="d-flex justify-content-center title-area align-items-center position-relative">
                    <h3 class="poptitle mb-0">{{$lang_kwords['add-address']['english']}}</h3>
                    <button class="popclose"><img src="{{ URL::asset('public/images/model/close.svg')}}" /></button>
                </div>
                <form action="{{route('fixed_location_update')}}" id="frm2" class="d-grid  gap-2" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ Session::token() }}" />
                    <input type="hidden" name="type" value="f" />
                    <input type="hidden" name="act" id="salon_act" value="add" />
                    <input type="hidden" name="sid" id="sid" value="" />
                    <div class="">
                        <input type="text" placeholder="Saloon Name" class="form-control" id="salon_name" name="salon_name">
                    </div>
                    <div class="">
                        <input type="text" placeholder="Street" class="form-control" id="salon_street" name="street">
                    </div>
                    <div class="">
                        <input type="text" placeholder="Number" class="form-control" id="salon_number" name="number">
                    </div>
                    <div class="">
                        <input type="text" placeholder="Postal code" class="form-control" id="salon_postal_code" name="postal_code">
                    </div>
                    <div>
                        <div class="d-flex gap-2">
                            <div class="col-6 px-0 ">
                                <label class="custom-select custom-select-address">
                                    <select class="mollure-select-address" name="province" id="salon_province">
                                        <option value=''>{{$lang_kwords['select']['english']}}</option>
                                        @foreach($province as $mk=>$mv)
                                            <option value='{{$mv->name}}' data-i="{{$mv->id}}">{{$mv->name}}</option>
                                        @endforeach
                                    </select>
                                </label>
                            </div>
                            <div class="col-6 px-0">
                                <label class="custom-select custom-select-address">
                                    <select class="mollure-select-address" name="municipality" id="salon_municipality">
                                        <option value=''>{{$lang_kwords['select']['english']}}</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
                <button class="pop-button" type="button" name="form_submit2" id="form_submit2" value="Save" onclick="form_validate2()" @if($fixed_loc_salon && count($fixed_loc_salon)>0) style="display:none" @endif >{{$lang_kwords['save']['english']}}</button>
            </div>
        </div>

        <div class="popupContainer teammemberPopUp" style="display: none">
            <div class="popup mx-auto text-center">
                <div class="d-flex justify-content-center title-area align-items-center position-relative">
                    <h3 class="poptitle mb-0">Add Team Member</h3>
                    <button class="popclose" onclick="close_team_form()"><img src="{{ URL::asset('public/images/model/close.svg')}}" /></button>
                </div>
                <form class="d-grid  gap-2" id="frm3" >
                    <input type="hidden" name="_token" value="{{ Session::token() }}" />
                    <input type="hidden" name="tm_i" id="tm_i" value="" />
                    <input type="hidden" name="tm_act" id="tm_act" value="add" />
                    <div id="members_cat_sub" style="display: none"></div>
                    <!-- Image Upload -->
                    <div class="d-flex tmprofile mx-auto justify-content-center align-items-center">
                        <input type="file" hidden id="team_mem_img" name='team_mem_img' style="position: absolute"  class="file-input"  accept="image/png,image/jpeg" >
                        <label for="team_mem_img"  style="position: relative;" >
                            <img src="{{ URL::asset('public/images/model/uploadfile.svg')}}" class="img1 tm_img1">
                        </label>
                    </div>
                    <div class="">
                        <input type="text" placeholder="{{$lang_kwords['team_member_name']['english']}}" class="form-control"  id="team_member_name" name="team_member_name">
                    </div>
                    <div class="">
                        <input type="text" placeholder="{{$lang_kwords['team_member_bio']['english']}}" maxlength="24"  class="form-control"  id="team_member_bio" name="team_member_bio">
                    </div>
                    <div class="addservices">
                        <div class="d-flex align-items-center justify-content-between srv">
                            <div class="d-flex gap-1">
                                <div class="px-0">
                                    <label class="custom-select custom-select-address">
                                        <select class="mollure-select-address frmto temp_ct" id="options_cat">

                                        </select>
                                    </label>
                                </div>
                                <div class=" px-0">
                                    <div class="services-container position-relative">
                                        <div class="service-selector d-flex justify-content-between align-items-center p-3">
                                            <p class="mb-0">{{$lang_kwords['select']['english']}} Service</p>
                                            <img src="{{ URL::asset('public/images/model/select-down-arrow.svg')}}" alt="">
                                        </div>
                                        <ul class="service-items position-absolute">

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <span type="button" class="dlt_btn">
                                    <img src="{{ URL::asset('public/images/model/trash.svg')}}" alt="">
                                </span>
                        </div>
                    </div>
                    <p class="text-end mb-0" id="add_category_btn_p">
                        <button type="button" id="addcatsurvice" class="d-inline-block" onclick="add_option_cat_sub_member()">
                            <img src="{{ URL::asset('public/images/model/plus.svg')}}" alt=""> Category
                        </button>
                    </p>
                </form>
                <button class="pop-button" type="button" onclick="save_team_member()">{{$lang_kwords['save']['english']}}</button>
            </div>
        </div>

        <div class="popupContainer add_province_sec" style="display: none">
            <div class="popup mx-auto text-center">
                <div class="d-flex justify-content-center title-area align-items-center position-relative">
                    <h3 class="poptitle mb-0">Add Location</h3>
                    <button class="popclose" onclick="close_add_pr_des()"><img src="{{ URL::asset('public/images/model/close.svg')}}" /></button>
                </div>
                <form class="d-grid  gap-2"  id="des_frm2" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ Session::token() }}" />
                    <input type="hidden" name="type" value="d" />
                    <input type="hidden" name="act" id="" value="add" />
                    <input type="hidden" name="lid" id="lid" value="" />
                    <div class="adddlocation">
                    <div class="d-flex align-items-center justify-content-between srv">
                            <div class="d-flex gap-1">
                            <div class="px-0">
                                    <label class="custom-select custom-select-address">
                                    <select class="mollure-select-address frmto temp_ct" name="des_province" id="des_provincedefult" onchange="get_municiplaity('defult','defult')">
                                        <option value="">{{$lang_kwords['select']['english']}} {{$lang_kwords['province']['english']}}</option>
                                        @foreach($province as $k=>$v)
                                            <option data-i="{{$v->id}}" value="{{$v->name}}">{{$v->name}}</option>
                                            @endforeach
                                    </select>
                                    </label>
                                </div>
                            <div class=" px-0">
                                <div class="services-container position-relative">
                                    <div class="service-selector d-flex justify-content-between align-items-center p-3">
                                        <p class="mb-0">{{$lang_kwords['select']['english']}} {{$lang_kwords['municipality']['english']}}</p>
                                        <img src="{{ URL::asset('public/images/model/select-down-arrow.svg')}}" alt="">
                                    </div>
                                    <ul class="service-items position-absolute des_municipality" id="des_municipalitydefult">
                                            <li class="item d-flex justify-content-between align-items-center">{{$lang_kwords['select']['english']}} {{$lang_kwords['province']['english']}} for {{$lang_kwords['municipality']['english']}}</li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                            <span type="button" class="dlt_btn">
                                    <img src="{{ URL::asset('public/images/model/trash.svg')}}" alt="">
                            </span>
                        </div>
                    </div>
                    <p class="text-end mb-0" id="addprovince_btn_p">
                        <button type="button" onclick="add_more_d_location()" id="addprovince" class="d-inline-block">
                            <img src="{{ URL::asset('public/images/model/plus.svg')}}" alt=""> Province
                        </button>
                    </p>
                </form>
                <button class="pop-button" type="button"name="des_form_submit2" id="des_form_submit2" value="Save" onclick="des_form_validate2()">{{$lang_kwords['save']['english']}}</button>
            </div>
        </div>

        @include('salon/footer')
        <script>
        </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{URL::asset('public/js/sweetalert.min.js')}} "></script>
        <script src="{{URL::asset('public/js/carbon-components.js')}} "></script>
        <script src="{{URL::asset('public/admin/js/service_detail.js')}} "></script>
        <script>
            $(document).ready(function() {

                var csrfToken = $('meta[name="csrf-token"]').attr('content');
    // console.log($('#template_type').val());
    if ($('#template_type').val() == 'd') {
        show_des_loc_sec();
    } else {
        show_fixed_loc_detail(csrfToken);
    }

    $('#is_km_allowance').on('change', function() {
        if ($(this).prop('checked') === true) {
            $('#km_allowance').show();
        } else {
            $('#km_allowance').hide().val('');
        }
    });

    $('.des_loc_type').on('change', function() {
        $('#des_form_submit2').hide();
        if ($('.des_loc_type:checked').val() == 'everywhere') {
            $('.add_province_sec, #des_add_prov_btn, #des_add_prov_edit_btn').hide();
            if ($('#des_form_submit2').attr('data-e') == 1)
                $('#des_form_submit2').hide();
            else
                $('#des_form_submit2').show();

            $('#des_specific_prov_sec').hide();
        } else {
            $('#des_specific_prov_sec').show();
            $('#des_form_submit2').hide();
            // $('#des_add_prov_btn').show();
            // $('#des_add_prov_edit_btn').show();
            // $('.add_province_sec').show();
            $('#des_province').val('').attr('disabled', false);
            $('.sel_mun_list').html('');
            $('#des_frm2').find('input[name="act"]').val('add');
            $('#des_frm2').find('input#lid').val('');
            if ($('#des_form_submit2').attr('data-s') == '1' && $('#des_form_submit2').attr('data-e') == 1) {
                $('#des_form_submit2').show();
            }
        }
    })

    $('body').on('click', '.checked_all', function(){
        var name = $(this).data("name");
        var value = $(this).data("value");
        if (name == "all"){
            if ($(this).hasClass("checked") == true){
                $("."+value).addClass("checked");
            }else{
                $("."+value).removeClass("checked");
            }
        } else{
            if ($("."+name).length == $("."+name+".checked").length){
                $("."+value).addClass("checked");
            }else{
                $("."+value).removeClass("checked");
            }
        }
    });


    $('.price_type_inp').on('change', function() {
        if ($('.price_type_inp').val() == 'f') {
            $('#serv_p_typ1').show();
            $('#serv_p_typ2').hide();
        } else {

            $('#serv_p_typ1').hide();
            $('#serv_p_typ2').show();
        }
    });

    $('#is_discount').on('change', function() {
        if ($(this).prop('checked') === true) {
            $('.discount_sec').show();
        } else {
            $('.discount_sec').hide();
        }
    });
    $('#serv_d_typ1').hide();
    $('#serv_d_typ2').hide();
    $('.discount_inp').on('change', function() {
        var selectedValue = $(this).val();
        if (selectedValue == '') {
            $('#serv_d_typ1').hide();
            $('#serv_d_typ2').hide();
        } else if (selectedValue == 'f') {
            $('#serv_d_typ1').show();
            $('#serv_d_typ2').hide();
        } else if (selectedValue == 'p') {
            $('#serv_d_typ1').hide();
            $('#serv_d_typ2').show();
        }
    });


    $("#doc-reg-coc").on('change', function() {
        var rtn = ValidateSize(this, 'doc-reg-coc');
        if (rtn != 0)
            readURL(this, 'doc-reg-coc');
    });

    $("#fixed_pic").on('change', function() {
        var rtn = ValidateSize(this, 'fixed_pic');
        if (rtn != 0)
            readURL(this, 'fixed_pic');
    });

    $("#desire_pic").on('change', function() {
        var rtn = ValidateSize(this, 'desire_pic');
        if (rtn != 0)
            readURL(this, 'desire_pic');
    });

    $("#team_mem_img").on('change', function() {
        var rtn = ValidateSize(this, 'team_mem_img');
        if (rtn != 0)
            readURL(this, 'team_mem_img');
    });

    $("#visual_img").on('change', function() {
        var fcnt = ($(this)[0].files.length);
        if (fcnt > 0) {
            $('#vis_img_sct').html(fcnt + ' files selected');
        } else {
            $('#vis_img_sct').html('{{$lang_kwords["choose_visual"]["english"]}}');
        }

        return;
    });

    $('.des_loc_lbl').each(function() {
        if ($(this).attr('data-v') == 'Everywhere') {
            // $('.des_loc_type_sec').hide();
            $('#des_add_prov_btn').hide();
            $('#des_add_prov_edit_btn').hide();
            // $('.des_loc_main_sec').hide().removeClass('d-flex');
            $('.des_loc_main_sec_' + $(this).attr('data-i')).hide().removeClass('d-flex');
            $('#des_serv_lc_e').prop('checked', true);
            $('#des_serv_lc_s').prop('checked', false);
            $('#des_form_submit2').attr('data-e', '1');
            $('#des_specific_prov_sec').hide();
        } else {
            $('#des_serv_lc_e').prop('checked', false);
            $('#des_serv_lc_s').prop('checked', true);
            $('#des_serv_lc_s').prop('checked', true);
            $('#des_add_prov_btn').show();
            $('#des_add_prov_edit_btn').show();
            $('#des_form_submit2').attr('data-s', '1');
            $('#des_specific_prov_sec').show();
        }
    })

    // $('.serv_for_fx_inp').on('change', function() {
    //     $('#serv_for_btn').show();
    // })

    $('.serv_for_des_inp').on('change', function() {
        $('#des_serv_for_btn').show();
    })

    $('#team_member_chkbox').on('click', function() {

        if ($("#team_mem_f").prop('checked') === true)
            var f = 'Y';
        else
            var f = 'N';

        $("#team_mem_f").attr('disabled', true);

        var el = $("#team_mem_f");

        // $('#modalajx').modal('show');
        $.ajax({
            url: "../salon_ajx",
            type: "post",
            data: {
                'act': 'team_meme_f',
                '_token': '{{ csrf_token() }}',
                'f': f
            },
            dataType: 'json',
            success: function(r) {
                el.attr('disabled', false);
                $("#team_mem_f").attr("disabled",true);
                $('#team_member_chkbox').hide();
                // $('#modalajx').modal('hide');
            },
            error: function() {
                el.attr('disabled', false);
                // $('#modalajx').modal('hide');
            }
        })
    })

});
        </script>
        </body>

</html>