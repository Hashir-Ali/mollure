@include('salon/header1')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="{{ url("public/css/new_style.css") }}">
<link rel="stylesheet" href="{{ url("public/css/model_style.css") }}">
<link rel="stylesheet" href="{{ url("public/css/carbon-components.css") }}">
<link rel="stylesheet" href="{{ url("public/css/calendar_style.css") }}">
<link href="{{ URL::asset('public/css/styles.css')}}?12" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />--}}
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">


<style type="text/css">
    .cursor-pointer {
        cursor: pointer;
    }

    .cs_btn {
        font-size: 14px !important;
        width: fit-content;
        padding: 3px 8px !important;
    }

    .loc_type_card.active {
        background-color: #78c694;
        color: #fff;
        border-radius: 8px;
    }

    .sub-temp-card.active {
        background-color: #78c694 !important
    }

    .sub-temp-fixed-loc-card {
        cursor: pointer;
    }

    .sub-temp-table tr td textarea,
    .sub-temp-table tr td select {
        min-width: 100px
    }

    .tooltip {
        /*display: inline-block !important;*/
        opacity: 1 !important;
        font-size: 15px !important;
        position: relative !important;
        /*top: -20px;*/
        /*display: none !important;*/
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        color: #ffffff;
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

    .tooltip_spn,
    .tooltip_spn1,
    .tooltip_spn_0 {
        cursor: pointer;
        font-size: 16px;
    }

    .tooltip_spn_1 {
        float: right;
        margin-top: -28px;
    }

    .tooltip_spn:hover+.tooltip .tooltiptext,
    .tooltip_spn1:hover+.tooltip .tooltiptext,
    .tooltip_spn_0:hover+.tooltip .tooltiptext {
        visibility: visible;
    }

    .des_mun_ul {
        position: absolute;
        background-color: #fff;
        list-style: none;
        padding: 0px 9px 10px;
        display: none;
        margin-top: 6px;
        filter: drop-shadow(0px 0px 20px rgba(22, 11, 51, 0.15));
        border-radius: 7px;
    }

    .des_mun_ul li {
        padding: 10px 10px;
    }

    .des_mun_ul li:not(:last-child) {
        border-bottom: 1px solid #edeaea;
    }

    .img1 {
        max-width: 100%
    }

    .reg_doc_img {
        max-width: 150px;
        max-height: 50px;
    }

    .team_mem_cate_serv {
        margin-bottom: 18px;
    }

    .team_mem_cate_serv ul {
        margin-bottom: 1px;
        list-style: none;
        font-size: 13px;
        color: #484747;
        padding-left: 0;
    }

    .licls {
        display: inline-block;
    }

    .licls+.licls::before {
        display: inline-block;
        content: '|';
        margin-right: 3px;
        margin-left: 3px;
    }

    .salon_cate_sec {
        margin-top: 15px;
    }

    .salon_cate_sec .cate_sec {
        /*width: 12%;min-width: 150px;*/
        height: 125px !important;
        width: 130px !important;
    }

    .salon_cate_sec .cate_sec img {
        max-height: 70px;
        margin: auto;
        margin-top: 10px;
        display: block;
    }

    .salon_cate_sec .cate_sec .cate_cards {
        position: relative;
    }

    .salon_cate_sec .cate_sec .cate_cards span {
        position: absolute;
        bottom: 15px;
        width: 90%;
        text-align: center;
        font-size: 15px;
        word-break: break-all;
    }

    .rotate {
        animation: rotate 1.5s linear infinite;
    }

    @keyframes rotate {
        to {
            transform: rotate(360deg);
        }
    }

    .spinner {
        display: inline-block;
        width: 18px;
        height: 18px;
        vertical-align: middle;
        border-radius: 50%;
        box-shadow: inset -2px 0 0 2px #0bf;
    }

    /*.tmctli{padding: 1px 4px;background: #3bb0b7;color: #fff;display: inline-block;margin-right: 4px;}*/
    .tmctli {
        color: #fff;
        display: inline-block;
        margin-right: 10px;
        background: linear-gradient(180deg, #21B8BF 0%, #66C68F 100%);
        border-radius: 8px;
        padding: 7px 13px;
        font-size: 12px;
    }

    .tmctli select {
        width: 20px;
        color: #fff!important;
        background: transparent;
        border: 0!important;
        padding: 0!important;

    }

    .tmctli select option {
        color: #000;
        padding: 9px 0;
        margin: 10px;
        background: white;
    }

    .swal-text,
    .swal-button--cancel {
        color: #111;
        text-align: center;
    }

    .swal-button--catch {
        background-color: #009688;
    }

    .swal-button--catch:not([disabled]):hover {
        background-color: #026a61;
    }

    .border-custom {
        border: 1px solid #EFEFEF;
        border-radius: 8px;
    }

    .uinfo_card.active,
    .protemp_card.active {
        background: #21B8BF;
        border-radius: 8px;
        color: #FFFFFF;
    }

    .up_tab {
        padding: 2px;
    }

    .uinfo_card,
    .protemp_card {
        padding: 10px 2px;
        font-weight: 600;
        font-size: 20px;
    }

    .accordion-button:after {
        display: none;
    }

    .prof_img_lbl {
        border: 1px solid #dddddd;
        border-radius: 50%;
        height: 125px;
        width: 125px;
    }

    .form-control:disabled,
    .form-control[readonly] {
        background-color: #fff;
    }

    .flex-3 {
        flex: 3;
    }

    .fx_img1,
    .ds_img1 {
        max-height: 100%;
        border-radius: 50%;
    }

    .tem_m_sec {
        background: #FFFFFF;
        box-shadow: 0px 0px 20px rgba(12, 7, 63, 0.07);
        border-radius: 8px;
        width: 327px;
        padding: 15px;
        margin-bottom: 20px;
    }

    .tem_m_sec {
        margin-left: 10px;
    }

    .tem_m_sec_main {
        display: flex;
        justify-content: flex-start;
        flex-wrap: wrap;
    }

    .tm_name_p {
        font-weight: 400;
        font-size: 16px;
        line-height: 21px;
        text-transform: capitalize;
        color: #000000;
        margin-bottom: 10px
    }

    .tm_bio_p {
        font-weight: 400;
        font-size: 14px;
        line-height: 19px;
        text-transform: capitalize;
        color: #000000;
        opacity: 0.6;
        margin-bottom: 0px;
    }

    .p-12 {
        padding: 12px
    }


    .custom-btn_j {
        background: #66C68F;
        border: 1px solid #66C68F;
        border-radius: 8px;
        padding: 6px;
        color: #fff;
    }


    /**{
		color:#000000;
	}*/
    .fixed_location_card {
        background-color: white !important;
        border: 1px solid #E4E4E4;
        border-radius: 8px;
        width: 299px;
        height: 190px;
        padding: 15px 20px !important;
    }

    .fixed_location_card>div:first-child label {
        font-size: 14px !important;
        font-style: normal;
        font-weight: 400;
        text-transform: capitalize;
    }

    .fixed_location_edit_icon {
        font-size: 24px;
        color: #21B8BF;
    }

    .service_for_checkbox_container {
        margin-top: 30px !important;
    }

    .service_for_checkbox_container>div label {
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        text-transform: capitalize;
    }

    /* Create a custom checkbox */
    .custom_check input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }

    .checkmark:after {
        content: "";
        /*position: absolute;*/
        display: none;
    }

    .custom_check input:checked~.checkmark:after {
        display: block;
    }

    .custom_check input:checked~.checkmark {
        border: 1px solid #66C68F !important;
    }

    .service_for_checkbox_container label .checkmark,
    .gen_note_tbl label .checkmark,
    #team_mem_f_sec label .checkmark {
        height: 15px;
        width: 15px;
        background-color: #fff;
        border: 1px solid #c3c3c3;
        display: inline-block;
        border: 1px solid #e5e5e5;
        border-radius: 2px;
        vertical-align: middle;
    }

    .vis_sel_p label .checkmark {
        height: 15px;
        width: 15px;
        /* background-color: #fff; */
        border: 1px solid #c3c3c3;
        display: inline-block;
        border: 1px solid #b1b1b1;
        border-radius: 2px;
        vertical-align: middle;
    }

    .des_loc_type_sec label.custom_check .checkmark {
        height: 18px;
        width: 18px;
        /* background-color: #fff; */
        border: 1px solid #c3c3c3;
        display: inline-block;
        border: 1px solid #b1b1b1;
        border-radius: 2px;
        vertical-align: middle;
    }

    .checkmark:after {
        /*left: 9px;
      top: 5px;*/
        margin-left: 4px;
        width: 5px;
        margin-top: 1px;
        height: 9px;
        border: solid #66C68F;
        border-width: 0 1px 1px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .des_loc_type_sec label.custom_check .checkmark:after {
        margin-left: 5px;
        width: 5px;
        margin-top: 2px;
    }

    .custom_sel ul.time_ul li input:checked~.checkmark {
        border-color: #66C68F;
    }

    .gen_note_tbl tr td {
        padding: 4px 12px;
        height: 52px;
    }

    .gen_note_inp {
        font-size: 16px;
        padding: 7px
    }

    .tm_rating_sec {
        width: 75px;
    }

    .tm_rating_sec span {
        padding: 0 1px;
    }

    .tm_rating_sec img {
        width: 12px;
        height: 12px;
    }

    .tm_rating_secm .review_p {
        font-size: 10px;
        line-height: 13px;
        color: #000000;
        opacity: 0.8;
        text-align: center;
    }

    .vis_sel_p {
        position: absolute;
        right: 10px;
        top: 0;
    }

    .block-heading {
        background: #21B8BF;
        border-radius: 5px;
        height: 43px;
        font-weight: 600;
        color: #fff;
        margin-top: 40px;
        font-size: 17px;
        padding: 8px 0 11px 19px;
    }

    .sub-temp-fixed-loc-card.active {
        background: linear-gradient(180deg, #3BB0B6 0%, #66C68F 100%) !important;
    }

    .gn {
        margin-top: 25px !important;
    }

    /*
    */
    .bbtn {
        padding: 7px 15px !important;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 8px;
        font-weight: 400;
        font-size: 14px;
        background: transparent;
    }

    .cptm {
        color: #21B8BF;
        background: rgba(33, 184, 191, 0.1);
        border: none;
        padding: 8px 15px !important;
    }

    .bbtn-g {
        text-align: end;
        margin: 20px 0 -18px 0;
    }

    #des_form_submit1:hover {
        color: white;
    }

    /* popup */
</style>

<!--Tabs Start-->
{{--<div class="container mb-4">--}}
{{--    <ul class="nav nav-pills nav-fill">--}}
{{--        <li class="nav-item"><a class="nav-link active" href="#">{{$lang_kwords['dashboard_profile_menu']['english']}}</a></li>--}}
{{--        <li class="nav-item"><a class="nav-link" href="#">Calendar</a></li>--}}
{{--        <li class="nav-item"><a class="nav-link" href="#">Inbox</a></li>--}}
{{--        <li class="nav-item"><a class="nav-link" href="#">Transactions</a></li>--}}
{{--        <li class="nav-item"><a class="nav-link" href="#">Analytics</a></li>--}}
{{--        <div id="grad-divider"></div>--}}
{{--        <!----}}
{{--      <li class="nav-item">--}}
{{--         <a class="nav-link" href="#">BOOKING</a>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--         <a class="nav-link" href="#">CALENDAR</a>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--         <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">TRANSACTION</a>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--         <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">ANALYSIS</a>--}}
{{--      </li>--}}
{{--      <li class="nav-item">--}}
{{--         <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">CARD SETTINGS</a>--}}
{{--      </li>--}}

{{--      -->--}}
{{--    </ul>--}}
{{--</div>--}}
<!--Tabs End-->

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
                    Your detail is not approved. Please contact to our Team for more information.
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
        <script type="text/javascript">
            // const range = document.getElementById('range');
            // const datepicker = new CarbonComponents.DatePicker(range, {inline: true, static: true});

            $('.popclose').click(function () {
                $('.popupContainer').fadeOut();
            })
            $('.custom-select').each(function () {
                setupSelector($(this));
            });
            $('body').on('click', '.service-selector', function(){
                $(this).toggleClass('open');
            });

            $('body').on('click', '.item', function(){
                $(this).toggleClass('checked');
            });

            var tm_category_list = '';
            var tm_sub_category_list = '';

            function show_userinfo_sec() {
                $('.uinfo_card').addClass('active');
                $('.protemp_card').removeClass('active');
                $('.info_form').show();
                $('.protemp_form').hide();
                municipality_select();
            }

            function show_prftemp_sec() {
                $('.protemp_card').addClass('active');
                $('.uinfo_card').removeClass('active');
                $('.info_form').hide();
                $('.protemp_form').show();
            }

            function serv_for_fx_inp(){
                $('#serv_for_btn').show();
                $('.serv_for_fx_inp').attr("disabled",false);
            }

            function serv_for_des_inp(){
                $('#des_serv_for_btn').show();
                $('.serv_for_des_inp').attr("disabled",false);
            }

            $(document).ready(function() {
                // console.log($('#template_type').val());
                if ($('#template_type').val() == 'd') {
                    show_des_loc_sec();
                } else {
                    show_fixed_loc_detail();
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
                        url: "{{route('salon_ajx')}}",
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

            function copy_desire() {
                swal(
                    '{{$lang_kwords["copy_template_msg"]["english"]}}', {
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

            function copy_desire_act() {

                // if(!confirm('{{$lang_kwords["copy_template_msg"]["english"]}}'))return true;

                $('#copy_btn').attr('disabled', true);

                // return;

                $.ajax({
                    url: "{{route('salon_ajx')}}",
                    type: 'post',
                    data: {
                        'act': 'copy_desire',
                        '_token': '{{ csrf_token() }}',
                        'temp_type': $('#template_type').val()
                    },
                    dataType: 'json',
                    success: function(r) {
                        $('#copy_btn').val('Copied').attr('disabled', true);
                        // swal("Copied");
                        location.reload();
                    },
                    error: function(e) {
                        alert("Something went wrong");
                    }
                })
            }

            function edit_oprating_area_form() {
                $("#des_serv_lc_e").attr("disabled",false);
                $("#des_serv_lc_s").attr("disabled",false);
                $('#des_serv_lc_e').prop('checked', true);
                $('#des_form_submit2').show();
                $('#des_add_prov_edit_btn').hide();
                $('#des_specific_prov_sec').hide();
            }
            
            function edit_oprating_area_form1() {
                $("#des_serv_lc_e").attr("disabled",false);
                $("#des_serv_lc_s").attr("disabled",false);
                // $('#des_serv_lc_e').prop('checked', true);
                $('#des_form_submit2').show();
                $('#des_add_prov_edit_btn').hide();
                $('#des_specific_prov_sec').hide();
            }
            function enable_team_member_chkbox() {
                $("#team_mem_f").attr("disabled",false);
                $('#team_member_chkbox').show();
            }

            function setupSelector(selector) {
                selector.on('change', function (e) {
                    console.log('changed', e.target.value);
                });

                selector.on('mousedown', function (e) {
                    if (window.innerWidth >= 420) { 
                        e.preventDefault();
                        const select = selector.children().eq(0);
                        const dropDown = $('<ul>').addClass('selector-options');

                        select.children().each(function () {
                            const option = $(this);
                            const dropDownOption = $('<li>').text(option.text());

                            dropDownOption.on('mousedown', function (e) {
                                e.stopPropagation();
                                select.val(option.val());
                                selector.val(option.val());
                                select.trigger('change');
                                selector.trigger('change');
                                dropDown.remove();
                            });

                            dropDown.append(dropDownOption);
                        });
                        if (selector.children().length == 2){
                            $(".selector-options").remove()
                            return false;
                        }
                        selector.append(dropDown);

                        // handle click out
                        $(document).on('click', function (e) {
                            if (!selector.is(e.target) && !selector.has(e.target).length) {
                                dropDown.remove();
                            }
                        });
                    }
                });
            }

            function info_verify(temp_type) {
                if (temp_type == 'f') {
                    var fna = $('#fixed_name').val();
                    if ($.trim(fna) == '') {
                        $('#fixed_name').focus();
                        return false;
                    }
                    $('.fix_reg_btn').attr('disabled', true);
                } else {
                    var fna = $('#desire_name').val();
                    if ($.trim(fna) == '') {
                        $('#desire_name').focus();
                        return false;
                    }
                    $('.des_reg_btn').attr('disabled', true);
                }

                $.ajax({
                    url: "{{route('salon_ajx')}}",
                    type: 'post',
                    data: {
                        'act': 'info_verify',
                        'temp_type': temp_type,
                        '_token': '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(r) {
                        if (temp_type == 'f')
                            $('.fix_reg_btn').val('{{$lang_kwords["info_verify_submit"]["english"]}}');
                        else
                            $('.des_reg_btn').val('{{$lang_kwords["info_verify_submit"]["english"]}}');

                        // $('#myModalImg1').modal('show');
                    },
                    error: function(e) {
                        alert("Something went wrong");
                    }
                })
            }

            function save_des_service_for() {
                var tmp_type = $('#template_type').val();


                $('#des_serv_for_btn').attr('disabled', true);

                var all_gender = 0;
                var men = 0;
                var women = 0;
                var kids = 0;
                if ($('#des_all_gender_chk').prop('checked') === true)
                    all_gender = 1;
                if ($('#des_men_chk').prop('checked') === true)
                    men = 1;
                if ($('#des_women_chk').prop('checked') === true)
                    women = 1;
                if ($('#des_kids_chk').prop('checked') === true)
                    kids = 1;


                $.ajax({
                    url: "{{route('salon_ajx')}}",
                    type: 'post',
                    data: {
                        'act': 'update_service_for',
                        'all_gender': all_gender,
                        'men': men,
                        'women': women,
                        'kids': kids,
                        '_token': '{{ csrf_token() }}',
                        'temp_type': 'd'
                    },
                    dataType: 'json',
                    success: function(r) {
                        $('#des_serv_for_btn').html('Save').attr('disabled', false);
                        $('#des_serv_for_btn').hide();
                        $('.serv_for_des_inp').attr("disabled",true);
                    },
                    error: function(e) {
                        $('#des_serv_for_btn').html('Save').attr('disabled', false);
                        alert("Something went wrong");
                    }
                })

            }

            function add_more_d_location() {
                var cat_html = '';
                var length_of_province = `{{ count($province) }}`;
                var html_id = "text_" + Date.now()+Math.floor((Math.random() * 9999999) + 1);
                cat_html += `
                    <div class="d-flex mt-2 align-items-center justify-content-between srv des_loction" id="`+html_id+`">
                            <input type"text" class="d-none" name="table_id" value="">
                            <div class="d-flex gap-1">
                                <div class="px-0">
                                    <label class="custom-select custom-select-address">
                                        <select class="mollure-select-address frmto temp_ct" name="des_province" id="des_province`+html_id+`" onchange="get_municiplaity('`+html_id+`','`+html_id+`')">
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
                                        <ul class="service-items position-absolute des_municipality" id="des_municipality`+html_id+`">
                                        <li class="item d-flex justify-content-between align-items-center temp_municipality">{{$lang_kwords['select']['english']}} {{$lang_kwords['province']['english']}} for {{$lang_kwords['municipality']['english']}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <span type="button" class="dlt_btn" onclick="remove_html('`+html_id+`')">
                                <img src="{{ URL::asset('public/images/model/trash.svg')}}" alt="">
                            </span>
                        </div>`;
                $(".adddlocation").append(cat_html);
                $('#'+html_id).find('.custom-select').each(function () {
                    setupSelector($(this));
                });
                $(".adddlocation .temp_ct").each(function () {
                    var des_province = $(this).val();
                    if (des_province != ""){
                        $('#'+html_id).find('.custom-select option[value='+des_province+']').remove();
                    }
                })

                if (length_of_province == $(".adddlocation .temp_ct").length){
                    $("#addprovince_btn_p").hide();
                }
            }

            function show_des_detail() {

                $('#des_all_gender_chk').prop('checked', false);
                $('#des_men_chk').prop('checked', false);
                $('#des_women_chk').prop('checked', false);
                $('#des_kids_chk').prop('checked', false);
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


                // window.history.replaceState(null, null, "?arg=123");
                set_url('d');

                $.ajax({
                    url: "{{route('salon_ajx')}}",
                    type: 'post',
                    data: {
                        'act': 'get_des_loc_detail',
                        '_token': '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(r) {
                        if (r.status == 'SUCCESS') {
                            var salon = r.salon;
                            var services = r.services;
                            var team = r.team;
                            var visual = r.visual;
                            var categories = r.categories;

                            if (salon.all_gender == '1')
                                $('#des_all_gender_chk').prop('checked', true);
                            if (salon.men == '1')
                                $('#des_men_chk').prop('checked', true);
                            if (salon.women == '1')
                                $('#des_women_chk').prop('checked', true);
                            if (salon.kids == '1')
                                $('#des_kids_chk').prop('checked', true);

                            var cate_str = '<div class="" style="justify-content: space-between;display: flex;flex-wrap:wrap">';
                            $.each(categories, function(k, v) {
                                if (k == 0) var cls = 'active';
                                else var cls = '';
                                cate_str += '<div class="cate_sec mb-3 cate_sec_' + v.id + '" onclick="show_salon_cate_detail(\'d\', \'' + v.id + '\' ,\'' + v.name + '\',\'0\')" data-cate="' + v.name + '"><div class="cate_cards shadow p-2 sub-temp-fixed-loc-card ' + cls + '" id="cate_card_' + v.id + '">';
                                // console.log(v.image);
                                if (v.image != '' && v.image !== null)
                                    cate_str += '<img src="{{asset("public/imgs/category/")}}/' + v.image + '" style="width:auto;max-width:100%;">';
                                else
                                    cate_str += '<img src="{{asset("public/imgs/placeholder-img.jpg")}}" style="width:auto;max-width:100%;">';

                                cate_str += '<span>' + v.name + '</span>';


                                cate_str += '</div></div>';

                            });
                            cate_str += '</div>';
                            show_salon_cate_detail('d', categories[0].id, categories[0].name, '0');

                            var team_str = '';
                            if (team != '' && team.length > 0) {
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

                            if (visual != '' && visual.length > 0) {
                                var visual_str = '';
                                visual_str += "<div style='' class='row mb-3'>";
                                $.each(visual, function(k, v) {
                                    if (v.visual != '' && v.visual !== null) {
                                        visual_str += "<div class=' col-6 col-sm-4 col-md-3 mb-3' id='vis_sec_" + v.id + "'>";
                                        visual_str += "<div class='border-custom d-flex align-items-center' style='position: relative;height: 100%;'>";
                                        visual_str += "<p class='vis_sel_p' ><label class='custom_check'><input type='checkbox' name='vis_radio' class='vis_radio' value='" + v.id + "'> <span class='checkmark'></span></label></p>";
                                        visual_str += '<img src="' + v.visual + '" style="max-width:100%;max-height: 100%;border-radius:8px">';
                                        visual_str += "</div>";
                                        visual_str += "</div>";
                                    }
                                });

                                visual_str += "</div>";
                                $('.visual_lst_sec').html(visual_str);
                            } else {
                                $('.visual_lst_sec').html(visual_str);
                            }


                            $('.salon_cate_sec').html(cate_str);
                            $('#gen_note_txt').val(salon.note);

                            $('.des_salon_serv_for_sec,.sub_tem_fix_sec,.salon_cate_sec,.salon_note_sec,.team_mem_sec,.visual_sec,#copy_btn').show();

                            $('#copy_btn').val('{{$lang_kwords["copy-to-fixed-location"]["english"]}}');
                        }
                        if (r.status == 'ERROR') {
                            alert('Something went wrong. Please contact');
                        }

                        /*setTimeout(function(){
                  $('#modalajx').modal('hide');
                },1000);*/
                    },
                    error: function() {
                        setTimeout(function() {
                            $('#modalajx').modal('hide');
                        }, 2000);
                        alert('Something went wrong. Please contact');
                    }
                });
                $('#template_id').val(sid);


            }


            function des_form_validate2() {
                var form_data = new Array;
                var loc_type = $('.des_loc_type:checked').val();
                var fc = 1;
                $('.adddlocation .des_loction').each(function() {
                    var municipality = '';
                    if (loc_type == 'everywhere') {
                        var des_province = '';
                    } else {
                        var des_province = $(this).find("select[name=des_province]").val();

                        if ($(this).find('#des_form_submit2').attr('data-s') == '1' && $(this).find('#des_form_submit2').attr('data-e') == 1) {
                            var fc = 0;
                        } else {
                            if ($.trim(des_province) == '') {
                                $(this).find("select[name=des_province]").focus();
                                return false;
                            }
                        }
                        if ($.trim(des_province) != '') {
                            fc = 1;
                        }

                        var municipality = new Array;
                        if ($(this).find('.temp_municipality').length != $(this).find('.temp_municipality.checked').length){
                            if ($(this).find('.temp_municipality').length > 0) {
                                if ($(this).find('.temp_municipality.checked').length == 0){
                                    alert("Pls select municipality");
                                    return  false;
                                } else{
                                    $(this).find('.temp_municipality.checked').each(function() {
                                        var munc = $(this).find('span').text();
                                        municipality.push(munc);
                                    })
                                }
                            }
                        }
                    }
                    var obj = {};
                    obj['province'] = des_province;
                    obj['municipality'] = municipality;
                    obj['id'] = $(this).find("input[name=table_id]").val();;
                    form_data.push(obj);
                });

                $('#des_form_submit2').attr('disabled', true);


                if ($('#des_frm2').find('input[name="act"]').val() == 'add') {

                    $.ajax({
                        url: "{{route('desire_add_province')}}",
                        type: 'post',
                        data: {
                            'act': 'add_province',
                            // 'province': des_province,
                            // 'municipality': municipality,
                            'data': form_data,
                            'loc_type': loc_type,
                            '_token': '{{ csrf_token() }}',
                            'fc': fc
                        },
                        dataType: 'json',
                        success: function(r) {
                            $('#des_form_submit2').html('Save').attr('disabled', false);
                            if (r.status == 'SUCCESS') {
                                $('#spn_des_frm2').show();
                                location.reload();
                            }
                            if (r == 'ERR') {
                                alert('Something went wrong. Please contact');
                            }
                        }
                    });
                }
                if ($('#des_frm2').find('input[name="act"]').val() == 'edit') {
                    $.ajax({
                        url: "{{route('desire_add_province')}}",
                        type: 'post',
                        data: {
                            'act': 'edit_province',
                            // 'province': des_province,
                            // 'municipality': municipality,
                            'data': form_data,
                            'loc_type': loc_type,
                            '_token': '{{ csrf_token() }}',
                            'lid': $('#lid').val()
                        },
                        dataType: 'json',
                        success: function(r) {
                            $('#des_form_submit2').html('Save').attr('disabled', false);
                            if (r.status == 'SUCCESS') {
                                $('#spn_des_frm2').show();
                                location.reload();
                            }
                            if (r == 'ERR') {
                                alert('Something went wrong. Please contact');
                            }
                        }
                    });
                }
            }

            function get_municiplaity(html_id,pronce_id) {
                var prov = $('#des_provincetext_16873431725682584695').val();
                if (prov != '') {
                    var pro_i = $('#des_province'+pronce_id).find('option:selected').attr('data-i');
                    all_pro_municipality(pro_i,html_id);
                    $('#des_form_submit2,.add_mun_spn').show();
                } else {
                    $('#des_form_submit2').hide();
                }
            }

            function all_pro_municipality(pro_i,html_id) {
                if (pro_i != '' && pro_i != '0') {
                    $('#des_municipality'+html_id).html('');
                    // $('#des_municipality').find('option.pv').remove();

                    $('#des_prov_spn').show();

                    $.ajax({
                        url: '{{route("municipality_list")}}',
                        type: 'post',
                        data: {
                            'prov': pro_i,
                            '_token': '{{ csrf_token() }}',
                        },
                        dataType: 'json',
                        success: function(r) {
                            $('#des_prov_spn').hide();
                            if (r.status == 'SUCCESS') {
                                var prov = r.data;
                                var str = '';
                                // $.each(prov, function(k, v) {
                                //     str += '<option class="pv" data-i="' + v.i + '" value="' + v.name + '">' + v.name + '</option>';
                                // });
                                var options_ser = '<li class="item d-flex justify-content-between align-items-center loc_defulte'+html_id+'_all checked_all" data-id="all" data-name="all" data-value="loc_defulte'+html_id+'">' +
                                    '<span>All</span><span class="sv-checkbox"><i class="fa fa-check check-icon"></i></span>' +
                                    '</li>';
                                $.each(prov, function(e, f) {
                                    var serv_chk = '';
                                    options_ser += ' <li class="item d-flex justify-content-between align-items-center loc_defulte'+html_id+' checked_all temp_municipality" data-id="'+ f.i + '" data-name="loc_defulte'+html_id+'" data-value="loc_defulte'+html_id+'_all">' +
                                        '<span>'+ f.name + '</span><span class="sv-checkbox"><i class="fa fa-check check-icon"></i></span>' +
                                        '</li>';
                                });

                                $('#des_municipality'+html_id).append(options_ser);
                            }
                        },
                        error: function(e) {
                            $('#des_prov_spn').hide();
                        }
                    });
                }
            }

            function remove_municipality(el) {
                el.closest('.sel_municipality_box').remove();
            }

            function add_pro_municipality() {
                var mun = $('#des_municipality').val();
                if (mun != '') {
                    var str = '<div class="d-flex border px-2 py-1 me-2 sel_municipality_box">';
                    str += '<span class="d-flex align-items-center selected_municipality">' + mun + '</span>&nbsp;&nbsp;<span class="d-flex align-items-center cursor-pointer" onclick="remove_municipality($(this))">&times;</span>';
                    str += '</div>';

                    $('.sel_mun_list').append(str).show();
                    $('#des_municipality').val('').hide();
                }
            }

            function show_pro_municipality() {
                $('#des_municipality').show();
            }

            function save_visual() {
                var tmp_type = $('#template_type').val();

                if ($('#visual_type').val() == 'link') {
                    if ($.trim($('#visual_link').val()) == '') {
                        $('#visual_link').focus();
                        return false;
                    }
                } else {
                    if ($.trim($('#visual_img').val()) == '') {
                        alert('{{$lang_kwords["select_visual_add"]["english"]}}');
                        return false;
                    }
                }

                var frm = new FormData($('#frm4')[0]);
                frm.append('act', 'add_visual');
                frm.append('tmp_type', tmp_type);
                $('#submit_btn_visual').attr('disabled', true);

                $.ajax({
                    url: "{{route('salon_ajx')}}",
                    type: 'post',
                    data: frm,
                    contentType: false,
                    processData: false,
                    success: function(r) {
                        $('#submit_btn_visual').html('Save').attr('disabled', false);
                        // console.log(r.status);
                        // var resp = $.parseJSON(r);
                        resp = r;
                        if (resp.status == 'SUCCESS') {
                            $('.popupContainer').fadeOut();
                            $('#visual_link').val('');
                            $('#visual_img').val('');
                            // alert('Added');
                            var visual = resp.vis;

                            if (visual != '' && visual.length > 0) {
                                var visual_str = '';
                                visual_str += "<div style='' class='row mb-3'>";
                                $.each(visual, function(k, v) {
                                    if (v.visual != '' && v.visual !== null) {
                                        visual_str += "<div class='<!--visual_lst_img_container--> col-6 col-sm-4 col-md-3 mb-3' id='vis_sec_" + v.id + "'>";
                                        visual_str += "<div class='border-custom d-flex align-items-center' style='position: relative;height: 100%;'>";
                                        visual_str += "<p class='vis_sel_p' ><label class='custom_check'><input type='checkbox' name='vis_radio' class='vis_radio' value='" + v.id + "'> <span class='checkmark'></span></label></p>";
                                        visual_str += '<img src="' + v.visual + '" style="max-width:100%;max-height: 100%;border-radius:8px">';
                                        visual_str += "</div>";
                                        visual_str += "</div>";
                                    }
                                });

                                visual_str += "</div>";
                                $('.visual_lst_sec').html(visual_str);
                            }

                            $('.insta_link_sec,#submit_btn_visual').hide();
                            $('.ur_img_sec').hide().removeClass('d-flex');
                            $('.visual_spn_img, .visual_spn_link').removeClass('text-custom-primary');
                        }
                        if (r == 'ERR') {
                            alert('Something went wrong. Please contact');
                        }
                    }
                })
            }

            function clear_all(type) {
                swal(
                    'Are u sure want clear all details which mentioned in this page!', {
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
                            case "catch":
                                $('#modalajx').modal('show');
                                $.ajax({
                                    url: "{{route('salon_ajx')}}",
                                    type: 'post',
                                    data: {_token: "{{ csrf_token() }}", act : "clear_all", type : type},
                                    success: function (r) {
                                        window.location.reload();
                                    }
                                });
                                break;
                            default:
                                // swal("Got away safely!");
                                return false;
                        }
                    });
            }

            function save_service_for() {
                /*var tmp_id = $('#template_id').val();
        if(tmp_id=='' || tmp_id==0){
          alert('Something went wrong.');
          return false;
        }*/


                $('#serv_for_btn').attr('disabled', true);

                var all_gender = 0;
                var men = 0;
                var women = 0;
                var kids = 0;
                if ($('#all_gender_chk').prop('checked') === true)
                    all_gender = 1;
                if ($('#men_chk').prop('checked') === true)
                    men = 1;
                if ($('#women_chk').prop('checked') === true)
                    women = 1;
                if ($('#kids_chk').prop('checked') === true)
                    kids = 1;

                $.ajax({
                    url: "{{route('salon_ajx')}}",
                    type: 'post',
                    data: {
                        'act': 'update_service_for',
                        'all_gender': all_gender,
                        'men': men,
                        'women': women,
                        'kids': kids,
                        '_token': '{{ csrf_token() }}',
                        'temp_type': 'f'
                    },
                    dataType: 'json',
                    success: function(r) {
                        $('#serv_for_btn').html('Save').attr('disabled', false);
                        $('#serv_for_btn').hide();
                        $('.serv_for_fx_inp').attr("disabled",true);
                    },
                    error: function(e) {
                        $('#serv_for_btn').html('Save').attr('disabled', false);
                        alert("Something went wrong");
                    }
                })

            }

            function sel_image1(argument) {
                $('#visual_img').trigger('click');
            }


            function delete_visuals() {

                if ($('.vis_radio:checked').length <= 0) {
                    // alert('{{$lang_kwords["select_visual_delete"]["english"]}}');
                    swal('{{$lang_kwords["select_visual_delete"]["english"]}}', {
                        buttons: {
                            catch: {
                                text: "{{$lang_kwords['alert_ok']['english']}}",
                            },
                        }
                    });
                    return false;
                }


                swal(
                    '{{$lang_kwords["confirm_visual_delete"]["english"]}}', {
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

            function delete_visuals_act() {


                // if(!confirm('{{$lang_kwords["confirm_visual_delete"]["english"]}}'))return false;

                var vis = new Array;
                $('.vis_radio:checked').each(function() {
                    vis.push($(this).val());
                });

                var tmp_id = $('#template_id').val();
                if (tmp_id == '' || tmp_id == 0) {
                    alert('Something went wrong.');
                }

                // $('#del_vis_txt').html('Wait..!');
                $('#del_vis_spn').attr('disabled', true);

                $.ajax({
                    url: "{{route('salon_ajx')}}",
                    type: 'post',
                    data: {
                        'act': 'remove_visual',
                        'tmp_id': tmp_id,
                        'vis': vis,
                        '_token': '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(r) {
                        // $('#del_vis_txt').html('Delete Selected');
                        $('#del_vis_spn').attr('disabled', false);
                        $.each(vis, function(k, v) {
                            $('#vis_sec_' + v).remove();
                        })
                    },
                    error: function(e) {
                        alert("Something went wrong");
                        // $('#del_vis_txt').html('Delete Selected');
                        $('#del_vis_spn').attr('disabled', false);
                    }
                })

            }

            function show_insta_link_sec() {
                $('.insta_link_sec,#submit_btn_visual').show();
                $('.ur_img_sec').hide().removeClass('d-flex');
                $('#visual_type').val('link');
                $('.visual_spn_link').addClass('text-custom-primary');
                $('.visual_spn_img').removeClass('text-custom-primary');
            }

            function show_ur_img_sec() {
                $('.imgPopUp').fadeIn();
                $('.insta_link_sec').hide();

                if ($('#visual_img_lbl').attr('data-t') == 'h') {
                    $('.ur_img_sec').show().addClass('d-flex').attr('data-t', 's');
                } else {
                    $('.ur_img_sec').hide().removeClass('d-flex').attr('data-t', 'h');
                }

                $('#visual_type').val('image');
                $('.visual_spn_link').removeClass('text-custom-primary');
                $('.visual_spn_img').addClass('text-custom-primary');
                $("#submit_btn_visual").toggle();
            }

            function save_team_member() {
                var tmp_type = $('#template_type').val();
                $("#members_cat_sub").html('');
                if ($.trim($('#team_member_name').val()) == '') {
                    $('#team_member_name').focus();
                    return false;
                }

                var cate_a = new Array;
                $('.teammemberPopUp .temp_ct').each(function() {
                    cate_a.push($(this).val());
                    $("#members_cat_sub").append('<input type="hidden" name="team_cate[]" value="'+$(this).val()+'">')
                });

                if (cate_a.length <= 0) {
                    alert('{{$lang_kwords["team_member_select_category_service"]["english"]}}');
                    return false;
                }
                // console.log(cate_a);

                var serv_a = new Array;
                var serv_a_c = new Array;
                $('.teammemberPopUp .temp_serv.checked').each(function() {
                    if ($(this).data("name") != "all"){
                        serv_a.push($(this).data("id"));
                        $("#members_cat_sub").append('<input type="hidden" name="team_service[]" value="'+$(this).data("id")+'">')
                        if ($.inArray($(this).attr('data-c'), serv_a_c) == -1)
                            serv_a_c.push($(this).attr('data-c'));
                    }
                });


                if (serv_a.length <= 0) {
                    alert('{{$lang_kwords["team_member_select_service"]["english"]}}');
                    return false;
                }

                // console.log(serv_a_c);

                var c_bs_a = new Array;
                $.each(cate_a, function(key, value) {
                    var index = $.inArray(value, serv_a_c);
                    if (index == -1) {
                        c_bs_a.push(value);
                    }
                });

                if (c_bs_a.length > 0) {
                    // console.log(c_bs_a);
                    alert('{{$lang_kwords["team_member_select_service_for_each_category"]["english"]}}');
                    return false;
                }


                var frm = new FormData($('#frm3')[0]);

                if ($(".teammemberPopUp .temp_serv").length == $(".teammemberPopUp .temp_serv.checked").length) {
                    frm.append("team_service[]","all");
                }
                if (serv_a_c.length == tm_category_list.length) {
                    frm.append("team_cate[]","all");
                }

                if ($('#tm_act').val() == 'add')
                    frm.append('act', 'add_team_member');
                else {
                    frm.append('act', 'update_team_member');
                    if ($('#tm_i').val() == '') {
                        alert('Something went wrong.');
                        return false;
                    }
                }

                frm.append('tmp_type', tmp_type);
                $('#team_mem_btn').attr('disabled', true);

                $.ajax({
                    url: "{{route('salon_ajx')}}",
                    type: 'post',
                    data: frm,
                    contentType: false,
                    processData: false,
                    success: function(r) {
                        $('#team_mem_btn').html('Save').attr('disabled', false);


                        if (r.status == 'SUCCESS') {
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
                            $('#tm_img_preview').attr('src', "{{ URL::asset('public/images/blank_img_icon.png')}}");
                            $('.tm_img1').hide().attr('src', "{{ URL::asset('public/images/model/uploadfile.svg')}}");
                            $('.tm_iu').show();
                            $('#team_cate_sec,#team_serv_sec').html('');
                            $('#team_s_sec_mn').hide();
                            $('.teammemberPopUp').fadeOut();
                            $("#members_cat_sub").html('');

                            var team = r.team_memb;
                            var team_str = '';
                            if (team != '' && team.length > 0) {
                                team_str = create_team_sec(team);
                            }
                            $('.team_mem_lst_sec').html(team_str);
                            $('#team_mem_f_sec').show();

                        }
                        if (r.status == 'ERROR') {
                            alert('Something went wrong. Please contact');
                        }
                    }
                })
            }

            function sel_image() {
                $('#team_mem_img').trigger('click');
            }

            function save_gen_note() {
                var tmp_type = $('#template_type').val();
                if (tmp_type == '') {
                    alert('Something went wrong.');
                }
                var note = $('#gen_note_txt').val();

                $('#gen_not_btn').attr('disabled', true);

                $.ajax({
                    url: "{{route('salon_ajx')}}",
                    type: 'post',
                    data: {
                        'act': 'add_gen_note',
                        'tmp_type': tmp_type,
                        'note': note,
                        '_token': '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(r) {
                        $('#gen_not_btn').html('Save').attr('disabled', false);
                        $('#gen_not_btn').hide();
                        $('.edit_notes_enable').attr('disabled', true);
                        // $('#gen_note_txt').attr('readonly', true);
                    },
                    error: function(e) {
                        alert("Something went wrong");
                        $('#gen_not_btn').html('Save').attr('disabled', false);
                    }
                })
            }

            function add_serv_act() {
                $('.survicePopUp').fadeIn();
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
                $('input[name="price_type"][value="f"]').prop('checked', true);
                $('#serv_p_typ1').show();
                $('#serv_p_typ2').hide();
                $('input[name="price_type"][value="s"]').prop('checked', false);
                $('#serv_p_fix').val('');
                $('#serv_p_st_fr').val('');

                $('#is_discount').prop('checked', false);
                $('#serv_d_fix').val('');
                $('input[name="discount_type"][value="f"]').prop('checked', true);
                $('#serv_d_typ1').show();
                $('#serv_d_typ2').hide();
                $('#serv_d_per').val('');
                $('#serv_d_pr_fr_dt').val('');
                $('#serv_d_pr_to_dt').val('');
                $('#serv_p_add_info').val('');
                $('.discount_sec').hide();
                $('#serv_id').val('');
                $('#add_serv_frm').show();
                // $('html, body').animate({
                //     scrollTop: $('#add_serv_frm').offset().top - 30
                // }, 500);
            }

            function close_service_form(f) {
                $('.survicePopUp').fadeOut();
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
                $('input[name="price_type"][value="f"]').prop('checked', true);
                $('#serv_p_typ1').show();
                $('#serv_p_typ2').hide();
                $('input[name="price_type"][value="s"]').prop('checked', false);
                $('#serv_p_fix').val('');
                $('#serv_p_st_fr').val('');

                $('#is_discount').prop('checked', false);
                $('#serv_d_fix').val('');
                $('input[name="discount_type"][value="f"]').prop('checked', true);
                $('#serv_d_typ1').show();
                $('#serv_d_typ2').hide();
                $('#serv_d_per').val('');
                $('#serv_d_pr_fr_dt').val('');
                $('#serv_d_pr_to_dt').val('');
                $('#serv_p_add_info').val('');
                $('.discount_sec').hide();
                $('#add_serv_frm').hide();
                if (f == '0') {
                    $('html, body').animate({
                        scrollTop: $('.salon_cate_dt_sec').offset().top + 30
                    }, 200);
                }
            }

            function save_service() {
                var temp_type = $('#template_type').val();
                var cate = $('#cate_id').val();
                if (temp_type == '' || cate == '') {
                    alert('Something went wrong');
                    return false;
                }

                if ($.trim($("#serv_name_inp").val()) == '') {
                    $("#serv_name_inp").focus();
                    return false;
                }

                // if ($.trim($("#discount_type").val()) == '') {
                //     $("#discount_type").focus();
                //     return false;
                // }

                if ($('.price_type_inp').val() == 'f') {
                    if ($.trim($("#serv_p_fix").val()) == '') {
                        $("#serv_p_fix").focus();
                        return false;
                    }
                } else {
                    if ($.trim($("#serv_p_st_fr").val()) == '') {
                        $("#serv_p_st_fr").focus();
                        return false;
                    }
                }

                var discount = '0';
                var discount_type = '';
                if ($('#discount_type').val() != "") {
                    discount = '1';

                    if ($('#discount_type').val() == 'f') {
                        var discount_type = 'f';
                        if ($.trim($("#serv_d_fix").val()) == '') {
                            $("#serv_d_fix").focus();
                            return false;
                        }
                    } else {
                        var discount_type = 'p';
                        if ($.trim($("#serv_d_per").val()) == '') {
                            $("#serv_d_per").focus();
                            return false;
                        }
                    }
                } else {
                    discount = '0';
                }

                if ($('.price_type_inp').val() == 'f') {
                    var price = $.trim($("#serv_p_fix").val());
                    var p_type = 'f';
                } else {
                    var price = $.trim($("#serv_p_st_fr").val());
                    var p_type = 's';
                }

                if (discount_type == 'f') {
                    var discount_amt = $.trim($("#serv_d_fix").val());
                    var discount_valid_from = $('#serv_d_fx_fr_dt').val();
                    var discount_valid_to = $('#serv_d_fx_to_dt').val();
                } else {
                    var discount_amt = $.trim($("#serv_d_per").val());
                    var discount_valid_from = $('#serv_d_pr_fr_dt').val();
                    var discount_valid_to = $('#serv_d_pr_to_dt').val();
                }

                var duration = '';

                if (!$('#duration_start_hr').val() && !$('#duration_start_min').val()) {
                    $("#duration_start_min").focus();
                    alert('{{$lang_kwords["select-duration-save"]["english"]}}');
                    return false;
                }

                if ($('#duration_start_hr').val()) {
                    duration = $('#duration_start_hr').val();
                }

                if ($('#duration_start_hr').val() && $('#duration_start_min').val()) {
                    duration += ':';
                }

                if ($('#duration_start_min').val()) {
                    duration += $('#duration_start_min').val();
                }

                if ($('#duration_end_hr').val() || $('#duration_end_min').val()) {
                    duration += ' - ';
                }

                if ($('#duration_end_hr').val()) {
                    duration += $('#duration_end_hr').val();
                }

                if ($('#duration_end_hr').val() && $('#duration_end_min').val()) {
                    duration += ':';
                }

                if ($('#duration_end_min').val()) {
                    duration += $('#duration_end_min').val();
                }



                /*var duration = $('#duration_start_hr').val()+':'+$('#duration_start_min').val()+' - '+$('#duration_end_hr').val()+':'+$('#duration_end_min').val();*/
                var payload = {
                    temp_type: temp_type,
                    category_id: cate,
                    type: $('#serve_type').val(),
                    service_id: $('#serv_id').val(),
                    service_name: $('#serv_name_inp').val(),
                    duration: duration,
                    price_type: p_type,
                    price: price,
                    discount: discount,
                    discount_amt: discount_amt,
                    discount_type: discount_type,
                    discount_valid_from: discount_valid_from,
                    discount_valid_to: discount_valid_to,
                    discount_info: $('#serv_p_add_info').val(),
                    additional_info: $('#serv_add_info').val(),
                }

                /*console.log(payload);
    return;
*/
                if ($('#serv_act').val() == 'add') {

                    $('#serv_add_btn').attr('disabled', true);

                    $.ajax({
                        url: "{{route('salon_ajx')}}",
                        type: 'post',
                        data: {
                            'act': 'save_service',
                            'payload': payload,
                            '_token': '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(r) {
                            $('#serv_add_btn').html('Save').attr('disabled', false);
                            if (r.status == "SUCCESS") {
                                // alert('Added');
                                $('#add_serv_frm').hide();
                                $('.survicePopUp').fadeOut();
                                show_salon_cate_detail(temp_type, cate, $('.cate_sec_' + cate).attr('data-cate'), r.i);
                                location.reload();
                            } else {
                                swal({
                                    icon: 'error',
                                    title: 'Information',
                                    text: r.msg, 
                                });
                            }
                        },
                        error: function(e) {
                            $('#serv_add_btn').html('Save').attr('disabled', false);
                            alert("Something went wrong done 2");
                        }
                    });
                } else {
                    if ($('#edit_serv_i').val() == '') {
                        alert('Something went wrong');
                        return false;
                    }

                    $('#serv_add_btn').html('Save').attr('disabled', false);
                    $.ajax({
                        url: "{{route('salon_ajx')}}",
                        type: 'post',
                        data: {
                            'act': 'update_service',
                            'sid': $('#edit_serv_i').val(),
                            'payload': payload,
                            '_token': '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(r) {
                            $('.survicePopUp').fadeOut();
                            $('#serv_add_btn').html('Save').attr('disabled', false);
                            if (r.status == "SUCCESS") {
                                // alert('Updated');
                                $('#add_serv_frm').hide();
                                show_salon_cate_detail(temp_type, cate, $('.cate_sec_' + cate).attr('data-cate'), r.i)
                            } else {
                                alert("Something went wrong");
                            }
                        },
                        error: function(e) {
                            $('#serv_add_btn').html('Save').attr('disabled', false);
                            alert("Something went wrong");
                        }
                    });
                }
            }

            function edit_service(i) {
                $.ajax({
                    url: "{{route('salon_ajx')}}",
                    type: 'post',
                    data: {
                        'act': 'get_serv_detail',
                        'sid': i,
                        '_token': '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(r) {
                        if (r.status == 'SUCCESS') {
                            $('#serv_act').val('update');
                            $('#edit_serv_i').val(i);
                            $('#serv_name_inp').val(r.service.service_name);
                            $('#serv_add_info').val(r.service.additional_info);
                            var durat = r.service.duration;
                            var exp1 = durat.split(' - ');
                            var st_hr = '';
                            var st_mn = '';
                            var nd_hr = '';
                            var nd_mn = '';

                            if (exp1[0]) {
                                var exp2 = exp1[0].split(':');
                                if (exp2[0]) {
                                    if (exp2[0].indexOf('h') > 0)
                                        st_hr = exp2[0];
                                    if (exp2[0].indexOf('m') > 0)
                                        st_mn = exp2[0];
                                }

                                if (exp2[1] && exp2[1].indexOf('m') > 0)
                                    st_mn = exp2[1];
                            }

                            if (exp1[1]) {
                                var exp3 = exp1[1].split(':');
                                if (exp3[0]) {
                                    if (exp3[0].indexOf('h') > 0)
                                        nd_hr = exp3[0];
                                    if (exp3[0].indexOf('m') > 0)
                                        nd_mn = exp3[0];
                                }

                                if (exp2[1] && exp2[1].indexOf('m') > 0)
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
                            if (ptype == 'f') {
                                $('select[name="price_type"] option[value="f"]').prop('selected', true);
                                $('#serv_p_typ1').show();
                                $('#serv_p_typ2').hide();
                                $('#serv_p_fix').val(r.service.price);
                                $('#serv_p_st_fr').val('');
                            } else {
                                $('select[name="price_type"] option[value="s"]').prop('selected', true);
                                $('#serv_p_typ2').show();
                                $('#serv_p_typ1').hide();
                                $('#serv_p_st_fr').val(r.service.price);
                                $('#serv_p_fix').val('');
                            }

                            if (r.service.discount == '1') {
                                $('#is_discount').prop('checked', true);
                                if (r.service.discount_type == 'f') {
                                    $('#serv_d_fix').val(r.service.discount_amount);
                                    $('select[name="discount_type"] option[value="f"]').prop('selected', true);
                                    $('#serv_d_typ1').show();
                                    $('#serv_d_typ2').hide();
                                    $('#serv_d_fx_fr_dt').val(r.service.discount_valid_from);
                                    $('#serv_d_fx_to_dt').val(r.service.discount_valid_to);
                                } else {
                                    $('#serv_d_per').val(r.service.discount_amount);
                                    $('select[name="discount_type"] option[value="p"]').prop('selected', true);
                                    $('#serv_d_typ1').hide();
                                    $('#serv_d_typ2').show();
                                    $('#serv_d_pr_fr_dt').val(r.service.discount_valid_from);
                                    $('#serv_d_pr_to_dt').val(r.service.discount_valid_to);
                                }
                                $('.discount_sec').show();
                            } else {
                                $('#serv_d_pr_fr_dt').val('');
                                $('#serv_d_pr_to_dt').val('');
                                $('#serv_d_fix').val('');
                                $('#serv_d_per').val('');
                                $('select[name="discount_type"] option[value="p"]').prop('selected', false);
                                $('select[name="discount_type"] option[value="f"]').prop('selected', false);
                                $('#serv_d_typ1').show();
                                $('#serv_d_typ2').hide();
                                $('#is_discount').prop('checked', false);
                                $('.discount_sec').hide();
                            }

                            $('#serv_p_add_info').val(r.service.discount_info);
                            $('#add_serv_frm').show();
                            $('.survicePopUp').fadeIn();
                            // $('html, body').animate({
                            //     scrollTop: $('#add_serv_frm').offset().top - 30
                            // }, 500);

                        } else {
                            alert("Something went wrong");
                        }
                    },
                    error: function(e) {
                        alert("Something went wrong");
                    }
                })
            }

            function add_subservice_act(serv_id) {
                $('.survicePopUp').fadeIn();
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
                $('input[name="price_type"][value="f"]').prop('checked', true);
                $('#serv_p_typ1').show();
                $('#serv_p_typ2').hide();
                $('input[name="price_type"][value="s"]').prop('checked', false);
                $('#serv_p_fix').val('');
                $('#serv_p_st_fr').val('');

                $('#is_discount').prop('checked', false);
                $('#serv_d_fix').val('');
                $('input[name="discount_type"][value="f"]').prop('checked', true);
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
                // $('html, body').animate({
                //     scrollTop: $('#add_serv_frm').offset().top - 30
                // }, 500);

            }

            function show_salon_cate_detail(temp_type, cateid, catename, f) {

                close_service_form('1');

                $('.cate_cards').removeClass('active');
                $('#cate_card_' + cateid).addClass('active');
                // $('#modalajx').modal('show');
                $('#serv_frm_sec').hide();
                $('#category_name').html(catename);

                $.ajax({
                    url: "{{route('salon_ajx')}}",
                    type: 'post',
                    data: {
                        'act': 'get_salon_cate_detail',
                        'temp_type': temp_type,
                        'cid': cateid,
                        '_token': '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(r) {
                        if (r.status == 'SUCCESS') {
                            if (r.msg == 'Y') {
                                $('#serv_frm_sec').show();
                                var service = r.service;
                                var sub_service = r.sub_service;
                                var str = '';
                                $.each(service, function(k, v) {
                                   
                                    str += '<div class="category-table-row d-flex bg-light-primary mt-2" id="serv_sec_m_' + v.id + '" style="padding-top: 10px;">';
                                    str += '<div class="border-right-primary  text-center fs-5 text-custom-primary p-1 w-28 border-end d-flex justify-content-center align-items-center position-relative"> <div class="success-left-indi"></div>';
                                    str += '<span style="float:left">' + v.service_name + '</span>';
                                    if (v.additional_info != '' && v.additional_info !== null && v.additional_info) {
                                        str += '<div><i class="ri-information-fill tooltip_spn1 tooltip_spn_1"></i><div class="tooltip" style="margin-top:34px"><span class="tooltiptext">' + v.additional_info + '</span></div></div>';
                                    }
                                    str += '<div class="clearfix"></div></div>';
                                    str += '<div class="text-center fs-5 text-custom-primary p-1 w-28 border-end d-flex justify-content-center align-items-center">';
                                    str += v.duration;
                                    str += '</div>';
                                    str += '<div class="text-center fs-5 text-custom-primary p-1 w-28 border-end">';
                                    if (v.price_type == 'f') {

                                        if (v.discount == '1') {
                                            var dis_amt = parseFloat(v.price);
                                            if (v.discount_type == 'f') {
                                                var dis_amt = parseFloat(v.price) - parseFloat(v.discount_amount);
                                                console.log("2 : "+dis_amt);
                                            } else {
                                                var d_amt = parseFloat(v.price) * (parseFloat(v.discount_amount) / 100);
                                                var dis_amt = parseFloat(v.price) - d_amt;
                                            }

                                            str += '<span style="font-size:15px;text-decoration: line-through;">' + v.price + '</span> ' + dis_amt + ' EUR';
                                        } else
                                            str += v.price + ' EUR';

                                    } else {

                                        str += '{{$lang_kwords["starting-from"]["english"]}} ' + v.price + ' EUR';

                                    }
                                    if (v.discount == '1') {
                                        var hasMatchingSubService = sub_service.some(function(subService) {
                                             return subService[v.id];
                                         });
                                         
                                        if (sub_service != '' && sub_service.length > 0 && hasMatchingSubService) {
                                            
                                            var maxSubServiceDiscountPercentage = 0;
                                            $.each(sub_service, function(k1, v1) {
                                                var ssserv = v1[v.id];
                                                if (typeof ssserv === 'undefined') return true;
                                                $.each(ssserv, function(k2, v2) {
                                                    if (v2.discount == '1') {
                                                        var discountPercentage = 0;
                                                        if (v2.discount_type === 'f') {
                                                            discountPercentage = (parseFloat(v2.discount_amount) / parseFloat(v2.price)) * 100;
                                                        } else {
                                                            discountPercentage = parseFloat(v2.discount_amount);
                                                        }
                                                        maxSubServiceDiscountPercentage = Math.max(maxSubServiceDiscountPercentage, discountPercentage);
                                                    }
                                                });
                                            });

                                            if (maxSubServiceDiscountPercentage > 0) {
                                                str += '<br><b class="fs-6">{{$lang_kwords["discount"]["english"]}} upto: </b>';
                                                if (v.discount_type == 'f') {
                                                    str += '<span class="fs-6">' + maxSubServiceDiscountPercentage + ' %</span>';
                                                } else {
                                                    str += '<span class="fs-6">' + maxSubServiceDiscountPercentage + '%</span>';
                                                }
                                            }
                                        } else {
                                            str += '<br><b class="fs-6">{{$lang_kwords["discount"]["english"]}}: </b>';
                                            if (v.discount_type == 'f') {
                                                str += '<span class="fs-6">' + v.discount_amount + ' %</span>';
                                            } else {
                                                str += '<span class="fs-6">' + v.discount_amount + '%</span>';
                                            }
                                        }

                                        if (v.discount_info != '' && v.discount_info !== null && v.discount_info) {
                                            str += ' <i class="tooltip_spn1"><img src="{{URL::asset("public/images/servInfo.svg")}}" style="width: 20px;margin-top: -4px;"></i><div class="tooltip"><span class="tooltiptext">' + v.discount_info + '</span></div>';
                                        }

                                        if (v.discount_valid_from && v.discount_valid_to) {
                                            var dis_st_fr_ar = v.discount_valid_from.split('-');
                                            var dis_st_tp_ar = v.discount_valid_to.split('-');
                                            if (dis_st_fr_ar.length == 3 && dis_st_tp_ar.length == 3) {
                                                dis_st_fr = dis_st_fr_ar[2] + '-' + dis_st_fr_ar[1] + '-' + dis_st_fr_ar[0];
                                                dis_st_tp = dis_st_tp_ar[2] + '-' + dis_st_tp_ar[1] + '-' + dis_st_tp_ar[0];

                                                str += '<span style="font-size:15px">' + dis_st_fr + ' - ' + dis_st_tp + '</span>';
                                            }
                                        }
                                    }else{
                                        var hasMatchingSubService = sub_service.some(function(subService) {
                                             return subService[v.id];
                                         });
                                         console.log(hasMatchingSubService);
                                        if (sub_service != '' && sub_service.length > 0 && hasMatchingSubService) {
                                            var maxSubServiceDiscountPercentage = 0;
                                            $.each(sub_service, function(k1, v1) {
                                                var ssserv = v1[v.id];
                                                if (typeof ssserv === 'undefined') return true;
                                                $.each(ssserv, function(k2, v2) {
                                                    if (v2.discount == '1') {
                                                        var discountPercentage = 0;
                                                        if (v2.discount_type === 'f') {
                                                            discountPercentage = (parseFloat(v2.discount_amount) / parseFloat(v2.price)) * 100;
                                                        } else {
                                                            discountPercentage = parseFloat(v2.discount_amount);
                                                        }
                                                        maxSubServiceDiscountPercentage = Math.max(maxSubServiceDiscountPercentage, discountPercentage);
                                                    }
                                                });
                                            });

                                            if (maxSubServiceDiscountPercentage > 0) {
                                                str += '<br><b class="fs-6">{{$lang_kwords["discount"]["english"]}} upto: </b>';
                                                if (v.discount_type == 'f') {
                                                    str += '<span class="fs-6">' + maxSubServiceDiscountPercentage + ' %</span>';
                                                } else {
                                                    str += '<span class="fs-6">' + maxSubServiceDiscountPercentage + '%</span>';
                                                }
                                            }
                                        }
                                    }
                                    str += '</div>';

                                    str += '<div class="fs-4 p-1 w-15 justify-content-center text-center">';
                                    str += '<i class="cursor-pointer" onclick="edit_service(\'' + v.id + '\')"><img src="{{URL::asset("public/images/edit_pen.svg")}}"/></i>   <i class="cursor-pointer" onclick="delete_service(\'' + v.id + '\')"><img src="{{URL::asset("public/images/trash.svg")}}"/></i> <br> <button type="button" class="btn cs_btn gradient-btn" onclick="add_subservice_act(\'' + v.id + '\')"><img src="{{URL::asset("public/images/add_plus.svg")}}" style="width: 18px;"> {{$lang_kwords["sub-service"]["english"]}}</button>';
                                    str += '</div>';
                                    str += '</div>';

                                    if (sub_service != '' && sub_service.length > 0) {
                                        $.each(sub_service, function(k1, v1) {

                                            var ssserv = v1[v.id];
                                            if (typeof ssserv === 'undefined') return true;
                                            // if(k1!=v.id)return true;

                                            $.each(ssserv, function(k2, v2) {

                                                str += '<div class="category-table-row d-flex " style="height: 55px;" id="serv_sec_m_' + v2.id + '">';
                                                str += '<div class="text-center fs-6 p-1 w-28 border-end border-bottom d-flex justify-content-center align-items-center sb" style="padding-left:12px!important;font-weight:500;">';
                                                str += '<span style="float:left">' + v2.service_name + '</span>';
                                                if (v2.additional_info != '' && v2.additional_info !== null && v2.additional_info) {
                                                    str += '<div><i class="ri-information-fill tooltip_spn1 tooltip_spn_1"></i><div class="tooltip" style="margin-top:34px"><span class="tooltiptext">' + v2.additional_info + '</span></div></div>';
                                                }
                                                str += '<div class="clearfix"></div></div>';
                                                str += '<div class="text-center fs-6 p-1 w-28 border-end border-bottom d-flex justify-content-center align-items-center sb">';
                                                str += v2.duration;
                                                str += '</div>';
                                                str += '<div class="text-center fs-6 p-1 w-28 border-end border-bottom justify-content-center align-items-center">';
                                                if (v2.price_type == 'f') {
                                                    if (v2.discount == '1') {
                                                        var dis_amt = parseFloat(v2.price);
                                                        if (v2.discount_type == 'f') {
                                                            var dis_amt = parseFloat(v2.price) - parseFloat(v2.discount_amount);
                                                        } else {
                                                            var d_amt = parseFloat(v2.price) * (parseFloat(v2.discount_amount) / 100);
                                                            var dis_amt = parseFloat(v2.price) - d_amt;
                                                        }

                                                        str += '<span style="font-size:15px;text-decoration: line-through;">' + v2.price + '</span> ' + dis_amt + 'EUR';
                                                    } else
                                                        str += v2.price + ' EUR';

                                                } else {

                                                    str += '{{$lang_kwords["starting-from"]["english"]}} ' + v2.price + ' EUR';

                                                }


                                                if (v2.discount == '1') {
                                                    str += '<br><b class="fs-6">{{$lang_kwords["discount"]["english"]}}: </b>';

                                                    // str+='<br>';
                                                    if (v2.discount_type == 'f') {
                                                        str += '<span class="fs-6">' +   (parseFloat(v2.discount_amount) / parseFloat(v2.price))*100 + '%</span>';
                                                    } else {
                                                        str += '<span class="fs-6">' + v2.discount_amount + '%</span>';
                                                    }
                                                    if (v2.discount_info != '' && v2.discount_info !== null && v2.discount_info) {
                                                        str += ' <i class="ri-information-fill tooltip_spn1"></i><div class="tooltip"><span class="tooltiptext">' + v2.discount_info + '</span></div>';
                                                    }
                                                    if (v2.discount_valid_from && v2.discount_valid_to) {
                                                        var dis_st_fr_ar = v2.discount_valid_from.split('-');
                                                        var dis_st_tp_ar = v2.discount_valid_to.split('-');
                                                        if (dis_st_fr_ar.length == 3 && dis_st_tp_ar.length == 3) {
                                                            dis_st_fr = dis_st_fr_ar[2] + '-' + dis_st_fr_ar[1] + '-' + dis_st_fr_ar[0];
                                                            dis_st_tp = dis_st_tp_ar[2] + '-' + dis_st_tp_ar[1] + '-' + dis_st_tp_ar[0];

                                                            str += '<span style="font-size:15px">' + dis_st_fr + ' - ' + dis_st_tp + '</span>';
                                                        }
                                                    }
                                                }
                                                str += '</div>';

                                                str += '<div class="fs-4 p-1 w-15 border-bottom d-flex justify-content-center">';
                                                str += '<i class="cursor-pointer" onclick="edit_service(\'' + v2.id + '\')"><img src="{{URL::asset("public/images/edit_pen.svg")}}"/></i>  <i class="cursor-pointer" onclick="delete_service(\'' + v2.id + '\')"><img src="{{URL::asset("public/images/trash.svg")}}"/></i>';
                                                str += '</div>';
                                                str += '</div>';
                                            })
                                        })
                                    }
                                });
                                $('.tbody').html(str);
                                        $('.salon_cate_dt_sec').show();
                                        /*if(f=='1'){
                                $('html, body').animate({
                                    scrollTop: $('.salon_cate_dt_sec').offset().top+30
                                }, 200);
                                }*/
                            } else {
                                var str = '<tr><td colspan="4">Not Service Registered for selected Category</td></tr>';
                                $('.tbody').html(str);
                                $('.salon_cate_dt_sec').show();
                            }
                            $('.title1').html(catename);
                                    /*if(f=='1'){
                                $('html, body').animate({
                                    scrollTop: $('.salon_cate_dt_sec').offset().top+30
                                }, 200);
                            }*/

                            if (f != '0' && $('#serv_sec_m_' + f).length > 0) {

                                $('html, body').animate({
                                    scrollTop: $('#serv_sec_m_' + f).offset().top - 50
                                }, 200);
                            }


                        } else {
                            alert('Something went wrong.');
                        }
                        /*setTimeout(function(){
                  $('#modalajx').modal('hide');
                  console.log('1');
                },1000)*/

                        $('#modalajx').modal('hide');
                        // console.log('11111');

                    },
                    error: function(e) {
                        $('#modalajx').modal('hide');
                        alert('Something went wrong.');
                    }
                });

                $('#temp_id').val(sid);
                $('#cate_id').val(cateid);

            }

            function remove_html(id) {
                $("#" + id).remove();
                $("#add_category_btn_p").show();
                $("#addprovince_btn_p").show();
            }


            function edit_team_member(id) {
                $.ajax({
                    url: "{{route('salon_ajx')}}",
                    type: 'post',
                    data: {
                        'act': 'get_tm_detail',
                        'tm_i': id,
                        '_token': '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(r) {
                        if (r.status == 'SUCCESS') {
                            $('.teammemberPopUp').fadeIn();
                            $(".addservices").html('');
                            $("#members_cat_sub").html('');
                            $('#team_member_name').val(r.member.name);
                            $('#team_member_bio').val(r.member.bio);
                            $("#add_category_btn_p").show();

                            if (r.member.img != '') {
                                $('.tm_img1').attr('src', '{{asset("public/imgs/team/")}}/' + r.member.img).show();
                                $('.tm_iu').hide();
                            }

                            var temp_serv = r.member.service;
                            var temp_cate = r.member.category;

                            var service = r.service;
                            var category = r.category;

                            tm_category_list = category;
                            tm_sub_category_list = service;

                            $.each(r.member.category, function(x ,y) {
                                var cat_html = '';
                                if (y ==  "all"){
                                    return true;
                                }

                                var options_cat = '';
                                $.each(category, function(k, v) {
                                    var cat_chk = '';
                                    if (y ==  v.i){
                                        cat_chk = 'selected';
                                    }
                                    options_cat += '<option value="' + v.i + '" '+cat_chk+'>'+ v.cat + '</option>';
                                });


                                var options_ser = '<li class="item d-flex justify-content-between align-items-center member_defulte'+ y + '_all checked_all temp_serv" data-id="all"  data-c="'+ y + '"  data-name="all" data-value="member_defulte'+ y + '">' +
                                    '<span>All</span><span class="sv-checkbox"><i class="fa fa-check check-icon"></i></span>' +
                                    '</li>';
                                $.each(service, function(e, f) {
                                    var serv_chk = '';
                                    if (y ==  f.c){
                                        if (jQuery.inArray(f.i.toString(), temp_serv) !== -1){
                                            serv_chk = 'checked';
                                        }
                                        options_ser += ' <li class="item d-flex justify-content-between align-items-center member_defulte'+ y + ' checked_all temp_serv '+serv_chk+'" data-id="'+ f.i + '" data-c="'+ y + '"  data-name="member_defulte'+ y + '" data-value="member_defulte'+ y + '_all">' +
                                            '<span>'+ f.service_name + '</span><span class="sv-checkbox"><i class="fa fa-check check-icon"></i></span>' +
                                            '</li>';
                                    }
                                });
                                var html_id = "text_" + Date.now()+Math.floor((Math.random() * 9999999) + 1);
                                cat_html += `
                                    <div class="d-flex mt-2 align-items-center justify-content-between srv" id="`+html_id+`">
                                            <div class="d-flex gap-1">
                                                <div class="px-0">
                                                    <label class="custom-select custom-select-address" style="pointer-events : none">
                                                        <select class="mollure-select-address frmto temp_ct" onchange="get_sub_category_from_list(this,'sub_`+html_id+`')">
                                                           `+options_cat+`
                                                        </select>
                                                    </label>
                                                </div>
                                                <div class=" px-0">
                                                    <div class="services-container position-relative">
                                                        <div class="service-selector d-flex justify-content-between align-items-center p-3">
                                                            <p class="mb-0">Select Service</p>
                                                            <img src="{{ URL::asset('public/images/model/select-down-arrow.svg')}}" alt="">
                                                        </div>
                                                        <ul class="service-items position-absolute" for="`+y+`" id="sub_`+html_id+`">
                                                            `+options_ser+`
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <span type="button" class="dlt_btn" onclick="remove_html('`+html_id+`')">
                                                <img src="{{ URL::asset('public/images/model/trash.svg')}}" alt="">
                                            </span>
                                        </div>`;
                                $(".addservices").append(cat_html);

                                // $(".addservices .temp_ct").each(function () {
                                //     var des_province = $(this).val();
                                //     if (des_province != ""){
                                //         $('#'+html_id).find('.custom-select option[value='+des_province+']').remove();
                                //     }
                                // })
                            });
                            $('.custom-select').each(function () {
                                setupSelector($(this));
                            });

                            if (tm_category_list.length == $(".addservices .temp_ct").length){
                                $("#add_category_btn_p").hide();
                            }
                            if (service.length > 0) {
                                var str = '<label class="me-3"><input type="checkbox" name="team_service[]" class="temp_serv_all" value="all" onclick="sel_all_temp_serv()"> {{$lang_kwords["all"]["english"]}}</label>';
                                $.each(service, function(k, v) {
                                    var chk = '';
                                    var vi = '' + v.i + '';
                                    var vc = '' + v.c + '';
                                    var shd = 'style="display:none"';

                                    if (jQuery.inArray(vi, temp_serv) !== -1)
                                        chk = 'checked';

                                    if (jQuery.inArray(vc, temp_cate) !== -1)
                                        shd = 'style=""';

                                    str += '<label class="me-3" ' + shd + '><input type="checkbox" data-c="' + v.c + '" name="team_service[]" class="temp_serv" value="' + v.i + '" ' + chk + '> ' + v.service_name + '</label>';
                                });
                                $('#team_serv_sec').html(str);
                                $('#team_s_sec_mn').show();
                            } else {
                                $('#team_s_sec_mn').hide();
                            }

                            var str1 = '<label class="me-3"><input type="checkbox" name="team_cate[]" class="temp_ct_all" value="all" onclick="sel_all_temp_ct()"> {{$lang_kwords["all"]["english"]}}</label>';
                            $.each(category, function(k, v) {
                                var chk = '';
                                var vi = '' + v.i + '';

                                if (jQuery.inArray(vi, temp_cate) !== -1)
                                    chk = 'checked';

                                str1 += '<label class="me-3"><input type="checkbox" data-c="' + v.i + '" class="temp_ct" name="team_cate[]" value="' + v.i + '" ' + chk + '> ' + v.cat + '</label>';
                            });

                            $('#team_cate_sec').html(str1);

                            $('#tm_i').val(id);
                            $('#tm_act').val('update');
                            $('#frm3').show();
                            $('html, body').animate({
                                scrollTop: $('#frm3').offset().top - 30
                            }, 500);

                            check_all_tmserv();
                            check_all_tmcate();
                            $(".teammemberPopUp .service-items").each(function () {
                                var totl = $(this).find("li").length;
                                var chk_count = $("."+$(this).eq(0).find("li").data("value")+".checked").length+1;
                                if (totl == chk_count){
                                    $(this).eq(0).find("li").addClass("checked");
                                }
                            })
                        } else {
                            alert('Something went wrong.');
                        }
                    },
                    error: function(e) {
                        alert('Something went wrong.');
                    }
                })

            }

            function get_sub_category_from_list(cat,id) {
                var cat = $(cat).val();
                var options_ser = '<li class="item d-flex justify-content-between align-items-center member_defulte'+ cat + '_all checked_all temp_serv" data-id="all"  data-c="'+ cat + '"  data-name="all" data-value="member_defulte'+ cat + '">' +
                    '<span>All</span><span class="sv-checkbox"><i class="fa fa-check check-icon"></i></span>' +
                    '</li>';
                $.each(tm_sub_category_list , function(e, f) {
                    var serv_chk = '';
                    if (cat ==  f.c){
                        options_ser += ' <li class="item d-flex justify-content-between align-items-center member_defulte'+ cat + ' checked_all temp_serv '+serv_chk+'" data-id="'+ f.i + '" data-c="'+ cat + '"  data-name="member_defulte'+ cat + '" data-value="member_defulte'+ cat + '_all">' +
                            '<span>'+ f.service_name + '</span><span class="sv-checkbox"><i class="fa fa-check check-icon"></i></span>' +
                            '</li>';
                    }
                });
                $("#"+id).html(options_ser);
            }

            function delete_team_member(id) {
                swal(
                    '{{$lang_kwords["confirm_teammem_delete"]["english"]}}', {
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

            function delete_team_member_act(id) {
                // if(confirm('{{$lang_kwords["confirm_teammem_delete"]["english"]}}')){
                $.ajax({
                    url: "{{route('salon_ajx')}}",
                    type: 'post',
                    data: {
                        'act': 'remove_tm_detail',
                        'tm_i': id,
                        '_token': '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(r) {
                        if (r.status == 'SUCCESS') {
                            $('#tm_sec_' + id).remove();
                        } else {
                            alert('Something went wrong.');
                        }
                    },
                    error: function(e) {
                        alert('Something went wrong.');
                    }
                });
                // }
            }

            function show_fixed_loc_detail() {

                $('#all_gender_chk').prop('checked', false);
                $('#men_chk').prop('checked', false);
                $('#women_chk').prop('checked', false);
                $('#kids_chk').prop('checked', false);
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
                    url: "{{route('salon_ajx')}}",
                    type: 'post',
                    data: {
                        'act': 'get_fix_loc_detail',
                        '_token': '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(r) {
                        // $('#modalajx').modal('hide');
                        if (r.status == 'SUCCESS') {
                            var salon = r.salon;
                            var services = r.services;
                            var team = r.team;
                            localStorage.setItem('loc_type', team[0].location_type);
                            var visual = r.visual;
                            console.log(r);
                            var categories = r.categories;

                            if (salon.all_gender == '1')
                                $('#all_gender_chk').prop('checked', true);
                            if (salon.men == '1')
                                $('#men_chk').prop('checked', true);
                            if (salon.women == '1')
                                $('#women_chk').prop('checked', true);
                            if (salon.kids == '1')
                                $('#kids_chk').prop('checked', true);

                            var cate_str = '<div class=" " style="justify-content: space-between;display: flex;flex-wrap:wrap">';
                            $.each(categories, function(k, v) {
                                if (k == 0) var cls = 'active';
                                else var cls = '';
                                cate_str += '<div class="cate_sec  mb-3 cate_sec_' + v.id + '" onclick="show_salon_cate_detail(\'f\', \'' + v.id + '\' ,\'' + v.name + '\',\'0\')" data-cate="' + v.name + '"><div class="cate_cards shadow p-2 sub-temp-fixed-loc-card ' + cls + '" id="cate_card_' + v.id + '">';
                                // console.log(v.image);
                                if (v.image != '' && v.image !== null)
                                    cate_str += '<img src="{{asset("public/imgs/category/")}}/' + v.image + '" style="width:auto;max-width:100%;">';
                                else
                                    cate_str += '<img src="{{asset("public/imgs/placeholder-img.jpg")}}" style="width:auto;max-width:100%;">';

                                cate_str += '<span>' + v.name + '</span>';


                                cate_str += '</div></div>';

                            });
                            cate_str += '</div>';
                            show_salon_cate_detail('f', categories[0].id, categories[0].name, '0');

                            var team_str = '';
                            if (team != '' && team.length > 0) {
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

                            if (visual != '' && visual.length > 0) {
                                console.log(visual);
                                var visual_str = '';
                                visual_str += "<div style='' class='row mb-3'>";
                                $.each(visual, function(k, v) {
                                    if (v.visual != '' && v.visual !== null) {
                                        visual_str += "<div class='<!--visual_lst_img_container--> col-6 col-sm-4 col-md-3 mb-3' id='vis_sec_" + v.id + "'>";
                                        visual_str += "<div class='border-custom d-flex align-items-center' style='position: relative;height: 100%;'>";
                                        visual_str += "<p class='vis_sel_p' ><label class='custom_check'><input type='checkbox' name='vis_radio' class='vis_radio' value='" + v.id + "'> <span class='checkmark'></span></label></p>";
                                        visual_str += '<img src="' + v.visual + '" style="max-width:100%;max-height: 100%;border-radius:8px">';
                                        visual_str += "</div>";
                                        visual_str += "</div>";
                                    }
                                });

                                visual_str += "</div>";
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

                            $('#copy_btn').val('{{$lang_kwords["copy-to-desire-location"]["english"]}}');
                            /*$('html, body').animate({
                         scrollTop: $('.sub_tem_fix_sec').offset().top-30
                     }, 500);*/
                        }
                        if (r.status == 'ERROR') {
                            // $('#modalajx').modal('hide');
                            alert('Something went wrong. Please contact');
                        }

                        $('#modalajx').modal('hide');
                    },
                    error: function() {
                        alert('Something wennt wrong');
                        location.reload();
                    }
                });
                $('#template_id').val(sid);
            }


            function delete_salon(sid) {
                swal(
                    '{{$lang_kwords["confirm_delete_location"]["english"]}}', {
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

            function delete_salon_act(sid) {
                // if(!confirm('{{$lang_kwords["confirm_delete_location"]["english"]}}'))return false;
                $('#modalajx').modal('show');
                $.ajax({
                    url: "{{route('salon_ajx')}}",
                    type: 'post',
                    data: {
                        'act': 'delete_salon',
                        'sid': sid,
                        '_token': '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(r) {
                        $('#modalajx').modal('hide');
                        if (r.status == 'SUCCESS') {
                            // alert('Removed');
                            location.reload();
                        }
                        if (r.status == 'ERROR') {
                            alert('Something went wrong. Please contact');
                        }
                    },
                    error: function() {
                        $('#modalajx').modal('hide');
                        alert('Something went wrong. Please contact');
                    }
                })

            }

            function delete_des_location(sid,html_id = null) {
                swal(
                    '{{$lang_kwords["confirm_delete_location"]["english"]}}', {
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
                                delete_des_location_act(sid,html_id);
                                break;

                            default:
                                // swal("Got away safely!");
                                return false;
                        }
                    });
            }

            function delete_des_location_act(sid,html_id = null) {
                // if(!confirm('{{$lang_kwords["confirm_delete_location"]["english"]}}'))return false;
                $('#modalajx').modal('show');
                $.ajax({
                    url: "{{route('salon_ajx')}}",
                    type: 'post',
                    data: {
                        'act': 'delete_des_location',
                        'sid': sid,
                        '_token': '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(r) {
                        if (r.status == 'SUCCESS') {
                            setTimeout(function () {
                                $('#modalajx').modal('hide');
                            },500);
                            // alert('Removed');
                            if (html_id != null){
                                $("#addprovince_btn_p").show();
                                $("#" + html_id).remove();
                            } else{
                                location.reload();
                            }
                        }
                        if (r.status == 'ERROR') {
                            alert('Something went wrong. Please contact');
                        }
                    },
                    error: function() {
                        $('#modalajx').modal('hide');
                        alert('Something went wrong. Please contact');
                    }
                })

            }

            function edit_salon(sid) {
                if (sid != '') {
                    $.ajax({
                        url: "{{route('salon_ajx')}}",
                        type: 'post',
                        data: {
                            'act': 'get_salon',
                            'sid': sid,
                            '_token': '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(r) {
                            if (r.status == 'SUCCESS') {
                                $('#sid').val(sid);
                                $('#salon_act').val('update');
                                $('#salon_name').val(r.salon_name);
                                $('#salon_street').val(r.street);
                                $('#salon_number').val(r.number);
                                $('#salon_postal_code').val(r.postal_code);
                                $('#salon_province').val(r.province);
                                $(".locationPopUp").fadeIn();
                                var municipality_list = r.municipality_list;

                                var str = '';
                                $('#salon_municipality').find('option.pv').remove();
                                if (municipality_list.length > 0) {
                                    $.each(municipality_list, function(k, v) {
                                        console.log(r.municipality);
                                        if (r.municipality == v.name)
                                            str += '<option class="pv" selected value="' + v.name + '">' + v.name + '</option>';
                                        else
                                            str += '<option class="pv" value="' + v.name + '">' + v.name + '</option>';
                                    })
                                }
                                $('#salon_municipality').append(str);

                                // $('#salon_province').val(r.province);
                                $('.salon_frm_sec, #form_submit2').show();
                                $('html, body').animate({
                                    scrollTop: $('#frm2').offset().top - 30
                                }, 500);
                            }
                            if (r.status == 'ERROR') {
                                alert('Something went wrong. Please contact');
                            }
                        }
                    })
                }
            }
           
           

            function add_salon() {
                $(".locationPopUp").fadeIn();
            }

            function form_validate2() {
                var salon_name = $('#salon_name').val();
                var street = $('#salon_street').val();
                var number = $('#salon_number').val();
                var postal_code = $('#salon_postal_code').val();
                var municipality = $('#salon_municipality').val();
                var province = $('#salon_province').val();

                if ($.trim(salon_name) == '') {
                    $('#salon_name').focus();
                    return false;
                }
                if ($.trim(street) == '') {
                    $('#salon_street').focus();
                    return false;
                }
                if ($.trim(number) == '') {
                    $('#salon_number').focus();
                    return false;
                }
                if ($.trim(postal_code) == '') {
                    $('#salon_postal_code').focus();
                    return false;
                }
                if ($.trim(municipality) == '') {
                    $('#salon_municipality').focus();
                    return false;
                }
                if ($.trim(province) == '') {
                    $('#salon_province').focus();
                    return false;
                }

                var frm = new FormData($('#frm2')[0]);
                // var modal = document.getElementById('myModal');
                $('#form_submit2').attr('disabled', true);
                $(".locationPopUp").fadeOut();
                $.ajax({
                    url: "{{route('salon_add')}}",
                    type: 'post',
                    data: frm,
                    contentType: false,
                    processData: false,
                    success: function(r) {
                        $('#form_submit2').html('Save').attr('disabled', false);
                        if (r == 'SUC') {
                            location.reload();
                        }
                        if (r == 'ERR') {
                            alert('Something went wrong. Please contact');
                        }
                    }
                })
            }

            function show_fix_loc_sec() {
                $('.fix_loc_sec').show();
                $('.dis_loc_sec').hide();
                $('._fix_loc').addClass('active');
                $('._des_loc').removeClass('active');

                $('#des_all_gender_chk').prop('checked', false);
                $('#des_men_chk').prop('checked', false);
                $('#des_women_chk').prop('checked', false);
                $('#des_kids_chk').prop('checked', false);
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

            function show_des_loc_sec() {
                $('.fix_loc_sec').hide();
                $('.dis_loc_sec').show();
                $('._fix_loc').removeClass('active');
                $('._des_loc').addClass('active');

                $('#all_gender_chk').prop('checked', false);
                $('#men_chk').prop('checked', false);
                $('#women_chk').prop('checked', false);
                $('#kids_chk').prop('checked', false);
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

            function edit_fix_bio_frm() {
                $('.frm_inp1').attr('disabled', false);
                $('#form_submit1').show();
            }

            function form_validate1() {
                var fixed_name = $('#fixed_name').val();
                var fixed_bio = $('#fixed_bio').val();
                if ($.trim(fixed_name) == '') {
                    $('#fixed_name').focus();
                    return false;
                }
                if ($.trim(fixed_bio) == '') {
                    $('#fixed_bio').focus();
                    return false;
                }

                $('#form_submit1').attr('disabled', true);
                var frm = new FormData($('#frm1')[0]);
                // var modal = document.getElementById('myModal');

                $.ajax({
                    url: "{{route('fixed_location_update')}}",
                    type: 'post',
                    data: frm,
                    contentType: false,
                    processData: false,
                    success: function(r) {
                        if (r == 'SUC') {
                            $('#form_submit1').html('Save').attr('disabled', false);
                            $('.frm_inp1').attr('disabled', true);
                            $('#form_submit1').hide();
                        }
                        if (r == 'ERR') {
                            alert('Something went wrong. Please contact');
                        }
                    }
                })
            }


            function edit_frm() {
                $('.frm_inp').attr('disabled', false);
                $('#form_submit').show();
                if ($('#prof_h_up_det').length > 0) {
                    $('html, body').animate({
                        scrollTop: $('#prof_h_up_det').offset().top - 30
                    }, 500);
                } else {
                    $('html, body').animate({
                        scrollTop: $('#ed_sec_').offset().top - 30
                    }, 500);
                }
            }

            function form_validate() {
                var user_type = $('#user_type').val();
                var legal_name = $('#legal_name').val();
                var coc = $('#coc').val();
                var vat = $('#vat').val();
                var street = $('#street').val();
                var postal = $('#postal').val();
                var municipality = $('#profile_municipality').val();
                var province = $('#profile_province').val();
                var registration_doc = $('#registration_doc').val();
                var contact_person_first_name = $('#contact_person_first_name').val();
                var email = $('#email').val();

                if (user_type == "professional"){
                    if ($.trim(legal_name) == '') {
                        $('#legal_name').focus();
                        return false;
                    }
                    if ($.trim(coc) == '') {
                        $('#coc').focus();
                        return false;
                    }
                    if ($.trim(vat) == '') {
                        $('#vat').focus();
                        return false;
                    }
                    if ($.trim(street) == '') {
                        $('#street').focus();
                        return false;
                    }
                    if ($.trim(postal) == '') {
                        $('#postal').focus();
                        return false;
                    }
                    if ($.trim(municipality) == '') {
                        $('#profile_municipality').focus();
                        return false;
                    }
                    if ($.trim(province) == '') {
                        $('#profile_province').focus();
                        return false;
                    }
                    if ($.trim(contact_person_first_name) == '') {
                        $('#contact_person_first_name').focus();
                        return false;
                    }
                }

                var password = $('#password').val();

                if ($.trim(password) != '') {
                    var password = $('#password').val();
                    var conf_password = $('#conf_password  ').val();

                    if ($.trim(password) == '') {
                        $('#password').focus();
                        return false;
                    }
                    if ($.trim(conf_password) == '') {
                        $('#conf_password').focus();
                        return false;
                    }

                    if (password != conf_password) {
                        $('#conf_password').focus();
                        return false;
                    }

                    $('#upty').val('p');
                }

                $('#frm').submit();
            }


            /*Desire Location*/

            function edit_des_bio_frm() {
                $('.des_frm_inp1').attr('disabled', false);
                $('#des_form_submit1').show();
            }

            function des_form_validate1() {
                var desire_name = $('#desire_name').val();
                var desire_bio = $('#desire_bio').val();
                if ($.trim(desire_name) == '') {
                    $('#desire_name').focus();
                    return false;
                }
                if ($.trim(desire_bio) == '') {
                    $('#desire_bio').focus();
                    return false;
                }
                $('#des_form_submit1').attr('disabled', true);
                var frm = new FormData($('#des_frm1')[0]);
                // var modal = document.getElementById('myModal');

                $.ajax({
                    url: "{{route('desire_location_update')}}",
                    type: 'post',
                    data: frm,
                    contentType: false,
                    processData: false,
                    success: function(r) {
                        $('#des_form_submit1').html('Save').attr('disabled', false);
                        if (r == 'SUC') {
                            // alert('Updated');
                            $('.des_frm_inp1').attr('disabled', true);
                            $('#des_form_submit1').hide();
                        }
                        if (r == 'ERR') {
                            alert('Something went wrong. Please contact');
                        }
                    }
                })
            }

            function delete_service(sid) {
                if (sid == '') {
                    return false;
                }

                swal(
                    '{{$lang_kwords["confirm_delete_service"]["english"]}}', {
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

            function delete_service_act(sid) {
                if (sid != '') {
                    // if(!confirm('{{$lang_kwords["confirm_delete_service"]["english"]}}'))return true;

                    $.ajax({
                        url: "{{route('salon_ajx')}}",
                        type: 'post',
                        data: {
                            'act': 'remove_service',
                            'sid': sid,
                            '_token': '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(r) {
                            if (r.status == 'SUCCESS') {
                                /*$('#sid').val(sid);
                        $('#salon_act').val('update');
                        $('#salon_name').val(r.salon_name);
                        $('#salon_street').val(r.street);
                        $('#salon_number').val(r.number);
                        $('#salon_postal_code').val(r.postal_code);
                        $('#salon_municipality').val(r.municipality);
                        $('#salon_province').val(r.province);*/

                                $('#serv_sec_m_' + sid).remove();

                                if ($('#serv_frm_sec').find('div.tbody').html() == '') {
                                    $('#serv_frm_sec').hide();
                                }

                                // $('.salon_frm_sec, #form_submit2').show();
                                /*$('html, body').animate({
                                   scrollTop: $('#frm2').offset().top-30
                               }, 500);*/
                            }
                            if (r.status == 'ERROR') {
                                alert('Something went wrong. Please contact');
                            }
                        }
                    })
                }
            }


            function enable_gen_note() {
                $('#gen_not_btn').show();
                $('.edit_notes_enable').attr('disabled', false);
                // $('#gen_note_txt').attr('readonly', false);
            }

            function enable_team_frm() {
                $("#add_category_btn_p").show();
                $('#team_cate_sec,#team_serv_sec').html('');
                $('#team_s_sec_mn').hide();
                $('#frm3').show();
                $('#team_member_name').val('');
                $('#team_member_bio').val('');
                $('#tm_i').val('');
                $('#team_mem_img').val('');
                $('#tm_act').val('add');
                $('#tm_img_preview').attr('src', "{{ URL::asset('public/images/model/uploadfile.svg')}}");
                $('.tm_img1').show().attr('src', "{{ URL::asset('public/images/model/uploadfile.svg')}}");
                $('.tm_iu').show();
                $('.teammemberPopUp').fadeIn();
                $(".addservices").html('');

                $.ajax({
                    url: "{{route('salon_ajx')}}",
                    type: 'post',
                    data: {
                        'act': 'get_cate_serv',
                        '_token': '{{ csrf_token() }}',
                        'temp_type': $('#template_type').val()
                    },
                    dataType: 'json',
                    success: function(r) {
                        if (r.status == 'SUCCESS') {
                            var service = r.service;
                            var category = r.category;

                            tm_category_list = category;
                            tm_sub_category_list = service;
                        var options_cat = '';
                        // $.each(category, function(l, u) {
                            var cat_html = '';
                            var options_cat = '<option value="" selected>Select Category</option>';
                            $.each(category, function(k, v) {
                                var cat_chk = '';
                                // if (u.i ==  v.i){
                                //     cat_chk = 'selected';
                                // }
                                options_cat += '<option value="' + v.i + '" '+cat_chk+'>' + v.cat + '</option>';
                            });

                            var options_ser = '<li class="item d-flex justify-content-between align-items-center member_defulte_all checked_all checked" data-id="all" data-name="all" data-value="member_defulte">Select Category for subcategory</li>';
                            // $.each(service, function(e, f) {
                            //     if (u.i ==  f.c){
                            //         options_ser += '  <li class="item d-flex justify-content-between align-items-center member_defulte checked_all temp_serv checked" data-id="'+ f.i + '" data-c="'+  u.i + '" data-name="member_defulte" data-value="member_defulte_all">' +
                            //             '<span>'+ f.service_name + '</span><span class="sv-checkbox"><i class="fa fa-check check-icon"></i></span>' +
                            //             '</li>';
                            //     }
                            // });

                            var html_id = "text_" + Date.now()+Math.floor((Math.random() * 9999999) + 1);
                            cat_html += `
                                <div class="d-flex mt-2 align-items-center justify-content-between srv" id="`+html_id+`">
                                    <div class="d-flex gap-1">
                                        <div class="px-0">
                                            <label class="custom-select custom-select-address">
                                                <select class="mollure-select-address frmto temp_ct" onchange="get_sub_category_from_list(this,'sub_`+html_id+`')">
                                                   `+options_cat+`
                                                </select>
                                            </label>
                                        </div>
                                        <div class=" px-0">
                                            <div class="services-container position-relative">
                                                <div class="service-selector d-flex justify-content-between align-items-center p-3">
                                                    <p class="mb-0">Select Service</p>
                                                    <img src="{{ URL::asset('public/images/model/select-down-arrow.svg')}}" alt="">
                                                </div>
                                                <ul class="service-items position-absolute" id="sub_`+html_id+`">
                                                    `+options_ser+`
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <span type="button" class="dlt_btn" onclick="remove_html('`+html_id+`')">
                                        <img src="{{ URL::asset('public/images/model/trash.svg')}}" alt="">
                                    </span>
                                </div>`;
                            $(".addservices").append(cat_html);
                        // });

                        $('.custom-select').each(function () {
                            setupSelector($(this));
                        });

                        }
                        if (r.status == 'ERROR') {
                            alert('Something went wrong. Please contact');
                        }
                    },
                    error: function(e) {
                        alert('Something went wrong. Please contact');
                    }
                });
            }

            function add_option_cat_sub_member() {
                var cat_html = '';
                var options_cat = '<option value="" selected>Select Category</option>';
                $.each(tm_category_list , function(k, v) {
                    options_cat += '<option value="' + v.i + '">' + v.cat + '</option>';
                });

                var options_ser = '<li class="item d-flex justify-content-between align-items-center member_defulte_all checked_all checked" data-id="all" data-name="all" data-value="member_defulte">Select Category for subcategory</li>';

                var html_id = "text_" + Date.now()+Math.floor((Math.random() * 9999999) + 1);
                cat_html += `
                                <div class="d-flex mt-2 align-items-center justify-content-between srv" id="`+html_id+`">
                                    <div class="d-flex gap-1">
                                        <div class="px-0">
                                            <label class="custom-select custom-select-address">
                                                <select class="mollure-select-address frmto temp_ct" onchange="get_sub_category_from_list(this,'sub_`+html_id+`')">
                                                   `+options_cat+`
                                                </select>
                                            </label>
                                        </div>
                                        <div class=" px-0">
                                            <div class="services-container position-relative">
                                                <div class="service-selector d-flex justify-content-between align-items-center p-3">
                                                    <p class="mb-0">Select Service</p>
                                                    <img src="{{ URL::asset('public/images/model/select-down-arrow.svg')}}" alt="">
                                                </div>
                                                <ul class="service-items position-absolute" id="sub_`+html_id+`">
                                                    `+options_ser+`
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <span type="button" class="dlt_btn" onclick="remove_html('`+html_id+`')">
                                        <img src="{{ URL::asset('public/images/model/trash.svg')}}" alt="">
                                    </span>
                                </div>`;
                $(".addservices").append(cat_html);
                // });

                $('#'+html_id).find('.custom-select').each(function () {
                    setupSelector($(this));
                });

                $(".addservices .temp_ct").each(function () {
                    var des_province = $(this).val();
                    if (des_province != ""){
                        $('#'+html_id).find('.custom-select option[value='+des_province+']').remove();
                    }
                })

                if (tm_category_list.length == $(".addservices .temp_ct").length){
                    $("#add_category_btn_p").hide();
                }
            }

            function show_hide_des_mun_ul(el) {
                // console.log('aaaa');
                var el1 = el.siblings('.des_mun_ul');
                // console.log(el1);
                el1.toggle();
            }

            function create_team_sec_old(team) {
                var team_str = "<div style='' class='row mb-3'>";
                $.each(team, function(k, v) {
                    if (!v.bio)
                        v.bio = '';
                    team_str += "<div class='border col-12 col-sm-5 col-md-3 mb-3 me-2 p-2' id='tm_sec_" + v.id + "' style='    position: relative;'>";
                    team_str += "<p class='mb-4'>\"" + v.bio + "\"</p>";
                    team_str += "<div class='d-flex' style='align-items: flex-end;    height: 55px;margin-bottom: 10px;'>";
                    team_str += "<div class='mb-2 me-2'>";
                    if (v.image != '' && v.image !== null)
                        team_str += '<img src="{{asset("public/imgs/team/")}}/' + v.image + '" style="border: 1px solid #b1abab;width:50px;height: 50px;border-radius:35px">';
                    else
                        team_str += '<img src="{{asset("public/imgs/placeholder-img.jpg")}}" style="border: 1px solid #b1abab;height: 50px;width:50px;border-radius:35px">';
                    team_str += "</div>";

                    team_str += "<div class='mb-2'>";
                    team_str += "<p>" + v.member + "</p>";
                    team_str += "</div>";

                    team_str += "</div>";

                    team_str += "<div class='team_mem_cate_serv'>";
                    team_str += '<ul>';
                    if (v.all_cate == 'all' && v.all_serv == 'all') {
                        team_str += '<li class="tmctli">{{$lang_kwords["all-categories-and-services"]["english"]}}</li>';
                    }
                    /*else if(v.all_cate=='all' && v.all_serv.length<=0){
              team_str+='<li class="tmctli">All Categories</li>';
            }*/
                    else {

                        var tcate = v.category;
                        var tserv = v.service;

                        if (tcate.length > 0) {
                            $.each(tcate, function(ck, cv) {
                                team_str += '<li class="tmctli">' + cv.name;

                                if (v.all_serv != 'all' && tserv[cv.i]) {
                                    team_str += '<select id="">';

                                    team_str += '<option style="display:none"></option>';
                                    $.each(tserv[cv.i], function(sk, sv) {
                                        team_str += '<option>' + sv + '</option>';
                                    })

                                    team_str += '</select>';
                                }

                                team_str += '</li>';
                            })
                        }
                        team_str += '</ul>';

                        /*team_str+='<ul>';
                  var tserv = v.service;
                  if(tserv.length>0){
                     $.each(tserv,function(sk,sv){
                        team_str+='<li class="licls">'+sv+'</li>';
                     })
                  }
                team_str+='</ul>';*/
                    }

                    team_str += "</div>";

                    team_str += '<p class="mb-0" style="position: absolute;right: 10px;bottom: 0;"><i class="cursor-pointer" onclick="edit_team_member(\'' + v.id + '\')"><img src="{{URL::asset("public/images/edit_pen.svg")}}"/></i> &nbsp; <i class="text-danger cursor-pointer" onclick="delete_team_member(\'' + v.id + '\')"><img src="{{URL::asset("public/images/trash.svg")}}"/></i></p>';


                    team_str += "</div>";
                });

                team_str += "</div>";

                return team_str;
            }

            function create_team_sec(team) {
                var team_str = "<div style='' class='tem_m_sec_main'>";
                $.each(team, function(k, v) {

                    if (!v.bio)
                        v.bio = '';

                    team_str += "<div class='tem_m_sec' id='tm_sec_" + v.id + "'>";

                    team_str += "<div class='d-flex d-flex justify-content-center align-items-center' style='margin-bottom: 20px;'>";
                    team_str += "<div class='mb-2' style='margin-right:5px;'>";
                    if (v.image != '' && v.image !== null)
                        team_str += '<img src="{{asset("public/imgs/team/")}}/' + v.image + '" style="border: 1px solid #b1abab;width:60px;height: 60px;border-radius:35px">';
                    else
                        team_str += '<img src="{{asset("public/imgs/placeholder-img.jpg")}}" style="border: 1px solid #b1abab;height: 60px;width:60px;border-radius:35px">';
                    team_str += "</div>";

                    team_str += "<div class='mb-2 px-2'>";
                    team_str += "<p class='tm_name_p'>" + v.member + "</p>";
                    team_str += "<p class='tm_bio_p'>" + v.bio + "</p>";
                    team_str += "</div>";
                    team_str += "<div class='mb-2 tm_rating_secm' style='margin-left:auto'>";
                    team_str += "<div class='tm_rating_sec text-center'>";
                    team_str += '<span><img src="{{URL::asset("public/icons/rating_ic.png")}}"></span>';
                    team_str += '<span><img src="{{URL::asset("public/icons/rating_ic.png")}}"></span>';
                    team_str += '<span><img src="{{URL::asset("public/icons/rating_ic.png")}}"></span>';
                    team_str += '<span><img src="{{URL::asset("public/icons/rating_ic.png")}}"></span>';
                    team_str += '<span><img src="{{URL::asset("public/icons/rating_ic.png")}}"></span>';

                    team_str += "</div>";
                    team_str += '<p class="review_p" style="">100 Reviews</p>';
                    team_str += "</div>";

                    team_str += "</div>";


                    team_str += "<div class='team_mem_cate_serv'>";
                    team_str += '<ul>';

                    if (v.all_cate == 'all' && v.all_serv == 'all') {
                        team_str += '<li class="tmctli">{{$lang_kwords["all-categories-and-services"]["english"]}}</li>';
                    }
                    /*else if(v.all_cate=='all' && v.all_serv.length<=0){
              team_str+='<li class="tmctli">All Categories</li>';
            }*/
                    else {

                        var tcate = v.category;
                        var tserv = v.service;

                        if (tcate.length > 0) {
                            $.each(tcate, function(ck, cv) {
                                // team_str+='<li class="licls">'+cv+'</li>';
                                team_str += '<li class="tmctli">' + cv.name;
                                if (v.all_serv != 'all' && tserv[cv.i]) {
                                    team_str += '&nbsp; <select id="">';

                                    team_str += '<option style="display:none"></option>';
                                    $.each(tserv[cv.i], function(sk, sv) {
                                        team_str += '<option>' + sv + '</option>';
                                    })

                                    team_str += '</select>';
                                }
                                team_str += '</li>';
                            })
                        }
                        team_str += '</ul>';

                        /*team_str+='<ul>';
                  var tserv = v.service;
                  if(tserv.length>0){
                     $.each(tserv,function(sk,sv){
                        team_str+='<li class="licls">'+sv+'</li>';
                     })
                  }
                team_str+='</ul>';*/
                    }
                    team_str += "</div>";

                    team_str += '<p class="mb-0" style="text-align:right"><i class="cursor-pointer" onclick="edit_team_member(\'' + v.id + '\')"><img src="{{URL::asset("public/images/edit_pen.svg")}}"/></i> &nbsp; <i class="text-danger cursor-pointer" onclick="delete_team_member(\'' + v.id + '\')"><img src="{{URL::asset("public/images/trash.svg")}}"/></i></p>';

                    team_str += "</div>";


                });



                team_str += "</div>";

                return team_str;
            }


            function ValidateSize(file, ph) {
                /*var FileSize = file.files[0].size / 1024 / 1024;
        if (FileSize > 10) {
            alert('File size exceeds 10 MB');
            if(ph=='')
              $(file).val('');
            else
              $('#'+ph).val('');
            return 0;
        }*/

                var val = $("#" + ph).val();
                var flg = 0;

                console.log(val);
                switch (val.substring(val.lastIndexOf('.') + 1).toLowerCase()) {
                    case 'jpeg':
                    case 'jpg':
                    case 'png':
                        flg = 1;
                        break;
                    default:
                        $("#" + ph).val('');
                        alert("Valid format: jpeg, jpg, png");
                        break;
                }
                return flg;
            }

            function readURL(input, ph) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {

                        if (ph == 'doc-reg-coc')
                            $('#registration_doc_prev').attr('src', e.target.result).show();

                        if (ph == 'fixed_pic') {
                            $('.fx_img1').attr('src', e.target.result).show();
                            $('.fx_iu').hide();
                        }

                        if (ph == 'team_mem_img') {
                            $('.tm_img1').attr('src', e.target.result).show();
                            $('.tm_iu').hide();
                        }

                        if (ph == 'desire_pic') {
                            $('.ds_img1').attr('src', e.target.result).show();
                            $('.ds_iu').hide();
                        }

                        // $('#img_not_up_spn').hide();

                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }

            function set_url(t) {
                const url = new URL(window.location.href);
                url.searchParams.set('t', t);
                window.history.replaceState(null, null, url);
            }

            function edit_des_location(di) {
                // if (di != '' && di != '0') {
                $(".adddlocation").html('');
                $("#addprovince_btn_p").show();
                    $.ajax({
                        url: "{{route('salon_ajx')}}",
                        type: 'post',
                        data: {
                            'act': 'get_des_location',
                            // 'di': di,
                            '_token': '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(r) {
                            if (r.status == 'SUCCESS') {


                                $.each(r.data, function(e, data) {
                                if (data.desire_location_type == 'specific') {
                                    $('.add_province_sec,.add_mun_spn,#des_form_submit2').show();
                                    $('#des_frm2').find('input[name="act"]').val('edit');
                                    // $('#des_frm2').find('input#lid').val(di);
                                    $('#des_province').val(data.desire_province).attr('disabled', true);
                                    $('#des_municipalitydefult').html('');
                                    // $('#des_provincedefult option[value='+data.desire_province+']').attr("selected","selected");

                                    var municipality_list = data.municipality_list;

                                    var provc = '';
                                    $.each(r.province, function(k ,s) {
                                        var prov_chk = '';
                                        if (data.desire_province == s.name){
                                            prov_chk = 'selected';
                                        }
                                        provc += '<option data-i="'+ s.id +'" value="'+ s.name +'" '+prov_chk+'>'+ s.name +'</option>';
                                    });



                                    var all_chk = '';
                                    if (data.desire_municipality.length == data.municipality_list.length || data.desire_municipality == false){
                                        all_chk = 'checked';
                                    }
                                    var options_ser = '<li class="item d-flex justify-content-between align-items-center loc_defulte'+data.desire_province_id+'_all checked_all '+all_chk+'" data-id="all" data-name="all" data-value="loc_defulte'+data.desire_province_id+'">' +
                                        '<span>All</span><span class="sv-checkbox"><i class="fa fa-check check-icon"></i></span>' +
                                        '</li>';
                                    $.each(municipality_list, function(e, f) {
                                        var serv_chk = '';
                                        if (jQuery.inArray(f.name, data.desire_municipality) !== -1){
                                            serv_chk = 'checked';
                                        }
                                        if (data.desire_municipality == false){
                                            serv_chk = 'checked';
                                        }
                                        options_ser += '<li class="item d-flex justify-content-between align-items-center loc_defulte'+data.desire_province_id+' checked_all temp_municipality '+serv_chk+'" data-id="'+ f.i + '" data-name="loc_defulte'+data.desire_province_id+'" data-value="loc_defulte'+data.desire_province_id+'_all">' +
                                            '<span>'+ f.name + '</span><span class="sv-checkbox"><i class="fa fa-check check-icon"></i></span>' +
                                            '</li>';
                                    });
                                    var html_id = "text_" + Date.now()+Math.floor((Math.random() * 9999999) + 1);
                                    var html = `<div class="d-flex mt-2 align-items-center justify-content-between srv des_loction" id="`+html_id+`">
                                                    <input type"text" class="d-none" name="table_id" value="`+data.desire_province_id+`">
                                                     <div class="d-flex gap-1">
                                                         <div class="px-0">
                                                             <label class="custom-select custom-select-address"  style="pointer-events : none">
                                                                 <select class="mollure-select-address frmto temp_ct" name="des_province" id="des_province`+html_id+`" onchange="get_municiplaity('`+html_id+`','`+html_id+`')">
                                                                     <option value="">{{$lang_kwords['select']['english']}} {{$lang_kwords['province']['english']}}</option>
                                                                     `+provc+`
                                                                 </select>
                                                             </label>
                                                         </div>
                                                         <div class=" px-0">
                                                             <div class="services-container position-relative">
                                                                 <div class="service-selector d-flex justify-content-between align-items-center p-3">
                                                                     <p class="mb-0">{{$lang_kwords['select']['english']}} {{$lang_kwords['municipality']['english']}}</p>
                                                                     <img src="{{ URL::asset('public/images/model/select-down-arrow.svg')}}" alt="">
                                                                 </div>
                                                                 <ul class="service-items position-absolute des_municipality" id="des_municipality`+html_id+`">
                                                                            `+options_ser+`
                                                                 </ul>
                                                             </div>
                                                         </div>
                                                     </div>
                                                     <span type="button" class="dlt_btn" onclick="delete_des_location('`+data.desire_province_id+`','`+html_id+`')">
                                                             <img src="{{ URL::asset('public/images/model/trash.svg')}}" alt="">
                                                         </span>
                                                 </div>`;

                                    $('.adddlocation').append(html);
                                    $('#'+html_id).find('.custom-select').each(function () {
                                        setupSelector($(this));
                                    });
                                }
                                });

                                var length_of_province = `{{ count($province) }}`;
                                if (length_of_province == $(".adddlocation .temp_ct").length){
                                    $("#addprovince_btn_p").hide();
                                }
                            }
                            if (r.status == 'ERROR') {
                                alert('Something went wrong. Please contact');
                            }
                        }
                    })
                // }
            }

            function sel_all_temp_ct() {
                $('.temp_ct').prop('checked', true);

                show_h_temp_service();
                check_all_tmserv();
            }

            function sel_all_temp_serv() {
                let car = new Array;
                $('.temp_ct:checked').each(function() {
                    car.push($(this).val());
                });

                $('.temp_serv').each(function() {
                    if (jQuery.inArray($(this).attr('data-c'), car) != -1) {
                        $(this).prop('checked', true);
                    }
                })
            }

            function show_h_temp_service() {
                let car = new Array;
                $('.temp_ct:checked').each(function() {
                    car.push($(this).val());
                });

                $('.temp_serv').each(function() {

                    if (jQuery.inArray($(this).attr('data-c'), car) != -1) {
                        $(this).closest('label').show();
                    } else {
                        $(this).prop('checked', false);
                        $(this).closest('label').hide();
                        $('.temp_serv_all').prop('checked', false);
                    }
                })
            }

            $(document).on('change', '.temp_serv', function() {
                check_all_tmserv();
            });

            function check_all_tmserv() {

                let car = new Array;
                $('.temp_ct:checked').each(function() {
                    car.push($(this).val());
                });

                if (car.length <= 0) {
                    $('.temp_serv_all').prop('checked', false);
                    return;
                }

                let sc = 1;
                $('.temp_serv').each(function() {

                    console.log($(this).closest('label').is(":visible"));

                    if ($(this).closest('label').is(":visible")) {
                        if ($(this).prop('checked') === false) {
                            $('.temp_serv_all').prop('checked', false);
                            sc = 0;
                        }
                    }
                });

                if (sc == 1) {
                    $('.temp_serv_all').prop('checked', true);
                }
            }

            function check_all_tmcate() {
                let cc = 1;
                $('.temp_ct').each(function() {
                    if ($(this).prop('checked') === false) {
                        $('.temp_ct_all').prop('checked', false);
                        cc = 0;
                    }
                });

                if (cc == 1) {
                    $('.temp_ct_all').prop('checked', true);
                }
            }

            $(document).on('change', '.temp_ct', function() {
                show_h_temp_service();
                check_all_tmcate();
                check_all_tmserv();
            });


            function remove_reg_doc(id) {
                swal(
                    '{{$lang_kwords["confirm_delete_doc"]["english"]}}', {
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

            function remove_reg_doc_act(id) {
                // if(!confirm('{{$lang_kwords["confirm_delete_doc"]["english"]}}'))return false;

                $.ajax({
                    url: "{{route('salon_ajx')}}",
                    type: 'post',
                    data: {
                        'act': 'remove_reg_doc',
                        'id': id,
                        '_token': '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(r) {
                        if (r.status == 'SUCCESS') {
                            $('#reg_doc_sec_' + id).remove();
                        }
                        if (r.status == 'ERROR') {
                            alert('Something went wrong. Please contact');
                        }
                    }
                })
            }

            function close_team_form() {
                $('#frm3').hide();
                $('#team_member_name').val('');
                $('#team_member_bio').val('');
                $('#tm_i').val('');
                $('#team_mem_img').val('');
                $('#tm_act').val('add');
                $('#tm_img_preview').attr('src', "{{ URL::asset('public/images/blank_img_icon.png')}}");
                $('.tm_img1').hide().attr('src', "{{ URL::asset('public/images/model/uploadfile.svg')}}");
                $('.tm_iu').show();
                $("#members_cat_sub").html('');
                $('#team_cate_sec,#team_serv_sec').html('');
                $('#team_s_sec_mn').hide();
            }

            function add_province_act() {
                $("#addprovince_btn_p").show();
                $('.add_province_sec,#des_form_submit2').show();
                $('#des_province').val('').attr('disabled', false);
                $('.sel_mun_list').html('');
                $('#des_frm2').find('input[name="act"]').val('add');
                $('#des_frm2').find('input#lid').val('');
                // $('#des_form_submit2').attr('data-s','1');
                $('#des_add_prov_btn').attr('data-f', '1');
                $(".adddlocation").html('');
                add_more_d_location(); 
            }
            function add_province_act1() {
                // $('.add_province_sec,#des_form_submit2').show();
                $('#des_serv_lc_s').show();
                $('#des_add_prov_edit_btn').show();
                $('#des_specific_prov_sec').hide();
                $('#des_form_submit2').hide();
            }
            function close_add_pr_des() {
                $('.add_province_sec,#des_form_submit2').hide();
                $('#des_serv_lc_e').prop('checked', true);
                $('#des_form_submit2').show(); 
        
            }

            function show_preview(img, type) {

                if (type == 'pdf') {
                    $('#doc_prev_pdf').attr('src', img).show();
                    $('#doc_prev_img').hide().attr('src', '');
                } else {
                    $('#doc_prev_img').attr('src', img).show();
                    $('#doc_prev_pdf').hide().attr('src', '');
                }

                $('#myModalImg').modal('show');
            }

            function closeModal(modl) {
                $('#' + modl).modal('hide');
            }

            $('#salon_province').on('change', function() {
                let i = $(this).find('option:selected').attr('data-i')
                get_municiplaity1(i);

            });

            var tr = 0;

            function get_municiplaity1(i) {
                    
                $('#salon_municipality').val('');
                $('#salon_municipality').find('option.pv').remove();

                if (!i) {
                    return false;
                }

                tr++;

                $('#prov_spn').show();
               
                $.ajax({
                    url: '{{route("municipality_list")}}',
                    type: 'post',
                    data: {
                        'prov': i,
                        '_token': '{{ csrf_token() }}',
                    },
                    dataType: 'json',
                    success: function(r) {
                        $('#prov_spn').hide();   
                        if (r.status == 'SUCCESS') {
                            var prov = r.data;
                            var str = '';
                            $.each(prov, function(k, v) {
                                str += '<option class="pv" data-i="' + v.i + '" value="' + v.name + '">' + v.name + '</option>';
                            });

                            $('#salon_municipality').append(str);
                        }
                    },
                    error: function(e) {
                        $('#prov_spn').hide();
                        if (tr < 3) {
                            get_municiplaity1(i);
                        }
                    }
                });
            }

            function municipality_select(){
                var profile_province = $('#temp_muncipility_id').val();
                var i = $('#profile_province').find('option:selected').attr('data-i');
                if (profile_province!=""){
                    get_municiplaity1(i,profile_province)
                }
            }

            $('#profile_province').on('change', function() {
                let i = $(this).find('option:selected').attr('data-i')
                get_municiplaity1(i);
            });

            var tr = 0;

            function get_municiplaity1(i,select = null) {

                $('#profile_municipality').val('');
                $('#profile_municipality').find('option.pv').remove();
                 
                if (!i) {
                    return false;
                }

                tr++;

                $('#prov_spn').show();

                $.ajax({
                    url: '{{route("municipality_list")}}',
                    type: 'post',
                    data: {
                        'prov': i,
                        '_token': '{{ csrf_token() }}',
                    },
                    dataType: 'json',
                    success: function(r) {
                        $('#prov_spn').hide();
                        if (r.status == 'SUCCESS') {
                            var prov = r.data;
                            var str = '';
                            if (select != null){
                                $.each(prov, function(k, v) {
                                    var selected = '';
                                    if (select == v.name){
                                        selected = 'selected';
                                    }
                                    str += '<option class="pv" data-i="' + v.i + '" value="' + v.name + '" '+selected+'>' + v.name + '</option>';
                                });
                            } else{
                                $.each(prov, function(k, v) {
                                    str += '<option class="pv" data-i="' + v.i + '" value="' + v.name + '">' + v.name + '</option>';
                                });
                            }

                            $('#salon_municipality').append(str);
                            $('#salon_municipality').append(str);
                        }
                    }
                });
            }

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

        </script>


        </body>

        </html>