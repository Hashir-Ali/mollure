
    @include('_header1')
    <link href="{{ URL::asset('public/admin/js/bootstrap-datepicker/css/datepicker.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('public/admin/js/bootstrap-datetimepicker/css/datetimepicker.css')}}" rel="stylesheet">
        <link href="{{url::asset('public/admin/css/select2.css')}}" rel="stylesheet">
        <link href="{{url::asset('public/admin/css/select2-bootstrap.css')}}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{url::asset('public/admin/js/bootstrap-timepicker/compiled/timepicker.css')}}"/>

    <style>
            .navbar-expand-xl .navbar-collapse{justify-content: end;}
            .filter_button_box button.active{background-color: #0d9da3;}
            .lc_t_tbl{width: 98%;border-spacing: 0;border-collapse: separate;}
            .lc_t_tbl1{width: 50%;margin: auto;border-spacing: 0;border-collapse: separate;}
            .lc_t_tbl tr td, .lc_t_tbl1 tr td{border: 1px solid #EAEAEA;padding: 1px;}
            .border-radius-left{border-top-left-radius: 6px;border-bottom-left-radius: 6px;}
            .border-radius-right{border-top-right-radius: 6px;border-bottom-right-radius: 6px;}
            .border-radius{border-radius: 6px;}
            .lc_t_spn{cursor: pointer;width: 100%;border: none;padding: 9px 0;}
            .cur_point{cursor: pointer;}
            .form_box .row>div select+i {
    position: absolute;
    left: 19px;
    top: 10px;
    z-index: 2;
    font-size: 18px;
    color: gray;
}

.datepicker{width: 250px;max-width: 100%}
#ui-id-1{padding:0px;list-style: none;    width: fit-content!important;    background: #fff;}
#ui-id-1 .ui-menu-item{padding: 3px 20px;border-bottom: 1px solid #02897c;cursor: pointer;background-color: #0ea2a2;color: #fff}
.bottom_btn{position: absolute;bottom: 8px;width: 98%;text-align: center;}
.review_p{margin-bottom: 60px;text-align: center;}

 .add-on{    
    /*margin-top: -37px;*/
    padding: 0px;
    width: 0px

}
    .select2-choice{box-shadow: none!important;
    border: none!important;
    border-bottom: 1px solid!important;}

    .search_inp:focus{
        border: 1px solid #EFEFEF !important;
    }
    .search_sec:focus{
        border: 1px solid #EFEFEF !important;
    }

    .custom_sel{position: relative;}
    .custom_sel ul{background: #fff;
    position: absolute;
    z-index: 10000;
    width: 100%;
    list-style: none;
    /* border: 1px solid gray; */
    padding: 7px 20px;
    margin-top: 3px;
    border-radius: 12px;
    /* display: none; */
    box-shadow: -1px 1px 9px -2px grey;
    display: none;
    width: 202px !important;}
.custom_sel.open ul{display: block;right: 0;border-radius: 8px;}
 .custom_sel ul li{padding: 15px 2px;display: flex;justify-content: space-between;}
  .custom_sel ul li:not(:first-child){border-top: 1px solid #e9e9e9}
  .custom_sel ul li input{width: 20px;height: 20px;top: -2px;    vertical-align: middle;}
  .custom_sel ul li input:checked{color: red;background-color: red !important;}
  .custom_sel_ic{position: absolute;top: 7px;right: 0;cursor: pointer;}
  .custom_sel.open .custom_sel_ic:not(.flt){
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
  }


  .date_flid_sec.open .add-on button i{
     -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
  }

  .custom_sel ul li input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  /*position: absolute;
  top: 0;
  left: 0;*/
  height: 13px;
  width: 13px;
  background-color: #fff;
    border: 1px solid #c3c3c3;
    display: block;
}

/* On mouse-over, add a grey background color */
/*.custom_sel ul li:hover input ~ .checkmark {
  background-color: #ccc;
}*/

/* When the checkbox is checked, add a blue background */
.custom_sel ul li input:checked ~ .checkmark {
  background-color: #fff;
  color:red;
  border:1px solid #66C68F;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  /*position: absolute;*/
  display: none;
}

/* Show the checkmark when checked */
.custom_sel ul li input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.custom_sel ul li .checkmark:after {
  /*left: 9px;
  top: 5px;*/
  margin-left: 3.3px;
  width: 5px;
  height: 8px;
  border: solid #66C68F;
  border-width: 0 1px 1px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
  margin-top: 0.5px;
}
.form-control {
    color: gray;
}
.form-control:focus {
    box-shadow:none !important;
    border color: none !important;
}
/* .sf_category_li.active{color: #66C68F;} */

.filter_box .custom_sel .filter_inp{border-radius: 33px;border: 1px solid #B3B3B3;width: 106px;padding: 7px 20px;cursor: pointer;}
.filter_box .custom_sel .sort_inp{border-radius: 33px;border: 1px solid #B3B3B3;width: 109px;padding: 7px 20px;cursor: pointer;}
.filter_ul{width: 220px!important;}
.sort_ul{width: 200px!important;}
.list_detail_name{opacity: 0.7;color: #000;margin-bottom: 10px;}
.list_detail_bio{font-size: 20px;line-height: 27px;text-align: center;text-transform: capitalize;color: #000000;}
.rating_sec span{padding:0px 3px}
.rating_sec i{font-size: 26px;}
.rating_sec .myactive{color: #FEC923}
.review_p{opacity: 0.7;color: #000;font-size: 14px;margin-top: 6px;}
.date_time_sec{
    background: #fff;
    position: absolute;
    z-index: 10000;
    width: 100%;
    list-style: none;padding: 7px 20px;margin-top: 3px;border-radius: 12px;box-shadow: -1px 1px 9px -2px grey;display: none;
}
.date_time_sec.open{display: block;}
.date_time_hd div{width: 85px;height: 40px;border-radius: 37px;    text-align: center;padding: 7px;font-size: 16px}
.date_time_hd div.active{background: #66C68F;color: #fff}
.date_time_hd div:not(.active){border: 1px solid #0000004a;}
.dt_sec, .tm_sec{cursor: pointer;}
.tm_sec_lbl{
    width: 118px;
    height: 40px;
    border-radius: 37px;
    text-align: center;
    padding: 7px;
    font-size: 16px;
   border: 1px solid #b9b5b5;
   cursor: pointer;
}

.tm_sec_lbl.active{
    background: #66C68F;
    color: #fff;
    border: none;
}

.tm_p_txt i{
    width: 10px;
    /* padding: 6px 6px; */
    border-radius: 15px;
    background: #66c68f;
    float: left;
    /* border: 1px solid; */
    display: block;
    vertical-align: middle;
    margin-top: 7px;
    margin-right: 5px;
    height: 10px;
}
.bootstrap-timepicker{
    border: 1px solid #b9b5b5;
    border-radius: 25px;
}
.bootstrap-timepicker input{
    border: none;
    padding-left: 7px;
    width: 79px;
}
.bootstrap-timepicker button{
    border: none;
    width: 25px;
    padding: 0;
}
.bootstrap-timepicker button i{
    margin-top: 3px;
}

.noevent{pointer-events:none;}
.fav_sec{
    position: absolute;
    right: 15px;
    top: 15px;
}
.fav_sec div{
    background: #d5d5d5;
    width: 40px;
    height: 40px;
    text-align: center;
    border-radius: 20px;
}
.fav_sec div img{margin-top: 10px;}
.cursor-pointer{cursor: pointer;}

/* Niraj */
.custom_sel ul li {
  padding: 7px 2px !important;
}
.checkmark {
    border-radius: 3px;
  margin-top: 6px;
}
.custom_sel {
  margin-top: 3px;
}
.filter_box {
  margin-top: 20px !important;
}
.list_box .list_img_container {
  height: 242px !important;
}
.review_p {
  margin-bottom: 20px;
  margin-top: 11px;
}
.second{
    margin-top: -7px;
}
.services{
    margin: 20px 12px auto 7px;
}
.time{
    color: gray;
}
.starteur{
    float: right;
}
.bottom_btn {
  position: relative !important;
  bottom: 0px !important;
  margin-left: 3px;
}
.lc_t_tbl {
  width: 100% !important;
}
.list_box {
  margin-bottom: 13px !important;
}
.list_detail_name {
  margin-bottom: 7px !important;
}
.custom_sel_ic2{
    margin-right: -10px;
    padding-left: -4px;
    position: absolute;
    right: 23px;
    margin-top: 5px;
    cursor: pointer;
}
.selectmunci{
    display:flex;
}
.munci_options{
    position: absolute;
    background: #FFFFFF;
    margin-top: 3px;
    box-shadow: 0px 0px 20px rgba(16, 8, 63, 0.09);
    border-radius: 8px;
    width: 202px;
    overflow-y: hidden;
    padding: 5px 15px 0px 10px;
    display: none;
    z-index: 999;
    right: 20px;
    height: 20rem;
    overflow: scroll;
}
.item {
    padding:7px 2px;
    display: flex;
    cursor: pointer;
    border-bottom: 1px solid rgb(0, 0, 0, 0.1);
    overflow: hidden;
}
.filter_box .custom_sel input::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: black;
  opacity: 1; /* Firefox */
}
.filter_box .custom_sel input::-ms-input-placeholder { /* Microsoft Edge */
  color: black;
}
a{
    color:var(--theme_green);
}
a:hover{
    color:var(--theme_green);
}
.custom_sel_ic img{
    width: 22px;
    height: 20px;
    margin-right: -3px;
    margin-top: -2px !important;
}
.frm_btn .loc{
    width: 18px !important;
    height: 19px;
    margin-right: 5px;
}
.lc_t_tbl tr td, .lc_t_tbl1 tr td {
  width: 1px !important;
}
.munci_options {
    scrollbar-width: thin !important;
    overflow-y: scroll;
    overflow-x: hidden;
    margin-right: -8px;
}
 
   .munci_option{
        scrollbar-width: thin !important;
        scrollbar-color: var(--scroll-bar-color) var(--scroll-bar-bg-color);
    }

    /* Works on Chrome, Edge, and Safari */
    .munci_options::-webkit-scrollbar {
        scrollbar-width: thin;
        width:3px;
        margin-bottom:9px;
    }

    .munci_options::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 20px;
        margin-top: 6px;
        margin-bottom: 6px;
    }

    .munci_options::-webkit-scrollbar-thumb {
        /* background-color: white; */
        background:#888;
        border-radius: 20px;
        border: 3px solid gray;
    }  
    .item {
        padding: 7px 2px;
        display: flex;
        cursor: pointer;
        border-bottom: 1px solid rgb(0, 0, 0, 0.1);
        overflow: hidden;
    }

</style>
        
    
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        
        <section class="top_form_section" style="position:relative">
            <div style="background: radial-gradient(50% 393.71% at 50% 49.9%, rgba(102, 198, 143, 0.55) 0%, rgba(33, 184, 191, 0.45) 100%);position: absolute;bottom: 0;top: 0;right: 0%;left: 0%;"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 col-sm-10 offset-0 offset-md-2 offset-sm-1">
                        <div class="form_box">
                            <form action="" method="get" id="filter-form">
                                <input type="hidden" name="a" value="search">
                                <input type="hidden" id="lt" name="lt" value="{{$lt}}">
                                <input type="hidden"  name="_t" value="{{ Session::token() }}" >
                                <input type="hidden" name="filter" id="filter" value=''>
                                <input type="hidden" name="sort_by" id="sort_by" value=''>
                                <div class="row">
                                    <div class="col-sm-6 position-relative">
                                        <div class="input-group date date_flid_sec " >
                                            <input type="text" class="form-control" readonly="" size="16" placeholder="Select Date and Time" name="d">
                                            <span class="input-group-btn add-on">
                                                <button style='color: #111;border:none;margin-left: -31px;z-index: 100;    width: 30px;padding:0px' type="button" class="btn"><i class="fa fa-angle-down"></i>
                                                </button>
                                            </span>  
                                        </div>
                                        <div class="date_time_sec">
                                            <div class="d-flex justify-content-center date_time_hd" style="margin-top:10px">
                                                <div class="active dt_sec" style="margin-right:10px">Date</div>
                                                <div class="tm_sec">Time</div>
                                            </div>
                                            <div class="dt_cal_sec" style="">
                                                <input type="hidden" class="form-control dpYears" readonly="" size="16" name="d">
                                                <div id="myDatePicker" class="DateBox datepicker" style="width:100%;"></div>
                                            </div>
                                            <div class="tm_cal_sec" style="display:none">
                                                <div style="margin-top: 20px;">
                                                    <label class="tm_sec_lbl active"><input type="checkbox" name="time_type" id="fl_time_inp" style="display:none" value="any" checked> Any Time</label>
                                                </div>
                                                <div class="d-flex justify-content-center fl_tm_fl_sec noevent"  style="margin-top: 20px;">
                                                    <div style="width:50%;margin-right:10px">
                                                        <p class="tm_p_txt"><i></i> Start Time</p>
                                                        <div>
                                                            <div class="input-group bootstrap-timepicker justify-content-center">
                                                                <span class="input-group-btn">
                                                                    <button  class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                                </span>
                                                                <input type="text" class="timepicker-default" name="st_time">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="width:50%">
                                                        <p class="tm_p_txt"><i></i> End Time</p>
                                                        <div class="input-group bootstrap-timepicker  justify-content-center">
                                                            <span class="input-group-btn">
                                                            <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                            </span>
                                                            <input type="text" class="timepicker-default"  name="nd_time">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- <input type="text" class="form-control dpYears" placeholder="Date & Time" name="d" onkeypress="return false;" value="{{$d}}"/> -->
                                        
                                    </div>
                                    <div class="col-sm-6">
                                        
                                        <div class="custom_sel">

                                            <input type="text" id="sf_category" class="form-control custom_sel_inp" placeholder="Select Category" readonly>
                                            <span class="custom_sel_ic"><i  style="font-size: 15px;font-weight: bold;" class="fa fa-angle-down"></i></span>
                                            <ul>
                                                @foreach($categories as $category)
                                                @if(in_array($category->id, $sel_cate))
                                                <li class="sf_category_li">
                                                    <label for="sf_category_chk_{{$category->id}}">{{$category->name}}</label> 
                                                    <label>
                                                        <!-- <input type="checkbox" class="sf_category_chk" id="sf_category_chk_{{$category->id}}" name="cates[]" value="{{ ($category->id)*25 }}" checked data-cate="{{$category->name}}"> -->
                                                        <input type="checkbox" class="sf_category_chk" id="sf_category_chk_{{$category->id}}" name="cates[]" value="{{ ($category->id)}}" checked data-cate="{{$category->name}}">
                                                    </label>
                                                </li>
                                                @else
                                                <li class="sf_category_li">
                                                    <label for="sf_category_chk_{{$category->id}}">{{$category->name}}</label>
                                                    <label>
                                                        <!-- <input type="checkbox" class="sf_category_chk" id="sf_category_chk_{{$category->id}}" name="cates[]" value="{{ ($category->id)*25 }}" data-cate="{{$category->name}}"> -->
                                                        <input type="checkbox" class="sf_category_chk" id="sf_category_chk_{{$category->id}}" name="cates[]" value="{{ ($category->id)}}" data-cate="{{$category->name}}">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                @endif
                                                @endforeach
                                                
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-center mt-3">
                                        <button type="button" class="frm_btn me-3 mb-2" data-l="d">
                                            <img src="{{URL::asset('public/icons/fxl.png')}}"> &nbsp;Fixed Location
                                        </button>
                                        
                                        <button type="button" class="frm_btn " data-l="f">
                                            <!-- <img src="{{URL::asset('public/icons/dsl.png')}}"> &nbsp;Disired Location -->
                                            <img class="loc" width="32" height="26" src="https://img.icons8.com/material-sharp/24/place-marker.png" alt="place-marker"/>Disired Location
                                        </button>
                                    </div>
                                    <!-- <div class="col-sm-6 text-center">
                                        <button type="button" class="frm_btn " data-l="d">
                                            <img src="{{URL::asset('public/icons/dsl.png')}}"> &nbsp;DISIRED LOCATION</button>
                                    </div> -->
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!--        <select class="form-control select2" placeholder="Muncipality" name="m" value="{{$m}}"> -->
                                        <!-- <div class="selectmunci">
                                        <input type="text" id="sf_category2" class="form-control select2" placeholder="Select your desired Muncipality" readonly>
                                        <span class="custom_sel_ic2"><i  style="font-size: 15px;font-weight: bold;" class="fa fa-angle-down"></i></span> -->
                                        <!-- </div> -->
                                        <select class="form-control select2" placeholder="Muncipality" name="m" value="{{$m}}">  
                                            <option value="">Select your desired Muncipality</option>
                                            @foreach($municipality as $km=>$vm)
                                            @if($m==$vm->name)
                                            <option value="{{$vm->name}}" selected>{{$vm->name}}</option>
                                            @else
                                            <option value="{{$vm->name}}">{{$vm->name}}</option>
                                            @endif
                                            @endforeach
                                            <!-- <ul class="munci_options position-absolute">
                                                    <li class="item d-flex justify-content-between align-items-center">
                                                        <span>Aa en Hunze</span>
                                                    </li>
                                                    <li class="item d-flex justify-content-between align-items-center">
                                                        <span>Aalsmeer</span>
                                                    </li>
                                            </ul> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" placeholder="Search Keywords" id="query" name="k"/>
                                        
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-sm-6">
                                        &nbsp;
                                    </div>
                                    <div class="col-sm-6 text-end">
                                        <button class="btn text-white gradient-btn" style="height: 43px;width:300px;max-width:100%">Search</button>
                                    </div>
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="filter_box">
                            <div class="custom_sel">
                                <input type="text" id="filter_inp" class="filter_inp custom_sel_inp" placeholder="Filter" readonly>
                                <span class="custom_sel_ic flt" style="right:21px"><img src="https://cynnaenterprises.com/mollure/public/images/Icons/first Icons copy/Interface/Slider_03.svg"></span>
                                <ul class="filter_ul">
                                    
                                    <li class="sf_category_li">
                                        <label for="sf_filter_chk_all">For All</label>
                                        <label>
                                            <input type="checkbox" class="sf_filter_chk" id="sf_filter_chk_all" name="filter[]" value="all"  data-cate="For All">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li class="sf_category_li">
                                        <label for="sf_filter_chk_women">For Women only</label>
                                        <label>
                                            <input type="checkbox" class="sf_filter_chk" id="sf_filter_chk_women" name="filter[]" value="women"  data-cate="For Women only">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li class="sf_category_li">
                                        <label for="sf_filter_chk_men">For Men only</label>
                                        <label>
                                            <input type="checkbox" class="sf_filter_chk" id="sf_filter_chk_men" name="filter[]" value="men"  data-cate="For Men only">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li class="sf_category_li">
                                        <label for="sf_filter_chk_kid">For kids only</label>
                                        <label>
                                            <input type="checkbox" class="sf_filter_chk" id="sf_filter_chk_kid" name="filter[]" value="kid"  data-cate="For kids only">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    
                                </ul>
                                
                            </div>
                            <div class="custom_sel">
                                <input type="text" id="sort_inp" class="sort_inp custom_sel_inp" placeholder="Sort By" readonly>
                                <span class="custom_sel_ic"  style="right:19px"><i style="font-size: 15px;font-weight: bold;" class="fw-bold fa fa-angle-down"></i></span>
                                <ul class="sort_ul">
                                    <li>
                                        <label>
                                            <input type="radio" class="sf_sort_chk" name="sort_by" value="Recommended"  data-cate="Recommended">&nbsp; Recommended
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" class="sf_sort_chk" name="sort_by" value="Rated"  data-cate="Highest Rated">&nbsp; Highest Rated
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" class="sf_sort_chk" name="sort_by" value="Price"  data-cate="Lowest Price">&nbsp; Lowest Price
                                        </label>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
<!-- 
                <div class="row d-none">
                    <div class="col-sm-12">
                        <div class="filter_button_box">
                            <form id="frm_cate" action="{{route('prof_listing')}}">
                                <input type="hidden" name="c" value="">
                            </form>
                            <a href="{{route('prof_listing')}}"><button @if(count($sel_cate)=='0') class="active" @endif>All</button></a>
                            @foreach($categories as $category)

                                @if(in_array($category->id, $sel_cate))
                                    <input type="checkbox" class="cate_chk_inp" id="cate_chk_inp_{{($category->id)*25}}" value="{{($category->id)*25}}" style="display:none" checked="true">
                                    
                                    <button class="cate_btn active" data-c="{{($category->id)*25}}">{{$category->name}}</button>
                                @else
                                    <input type="checkbox" class="cate_chk_inp" id="cate_chk_inp_{{($category->id)*25}}" value="{{($category->id)*25}}" style="display:none">
                                    <button class="cate_btn" data-c="{{($category->id)*25}}">{{$category->name}}</button>
                                @endif        
                            @endforeach
                            
                        </div>
                    </div>
                </div> -->
            
                <div class="row" id="filteredResults">
                    <!-- Your existing content or placeholders go here -->
                </div>
              
        </section>

    @include('salon/footer')

    
    <script type="text/javascript" src="{{ URL::asset('public/admin/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('public/admin/js/bootstrap-datetimepicker/js/datepicker.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('public/admin/js/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>

    <script src="{{ URL::asset('public/admin/js/select2.js')}}"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
      $(document).ready(function() {
            // Function to perform AJAX search
            function performSearch() {
                var formData = $('#filter-form').serialize();
                $.ajax({
                    type: 'GET',
                    url: "{{ route('prof_listing_2') }}",
                    data: formData,
                    success: function(response) {
                        var html = ''; // Initialize the HTML string
        
        // Loop through the response data and generate HTML
        for (var i = 0; i < response.length; i++) {
            var prof = response[i];
                html += `
                    <div class="col-md-4 col-sm-6 col-12 mb-4">
                        <div id="fix_l_sec_${prof.id}" class="shadow p-2" style="height: 100%;position: relative;border-radius: 12px;">
                            <div class="fav_sec">
                                <div><img src="{{URL::asset('public/icons/favorite_a.png')}}"></div>
                            </div>
                            <div class="list_box">
                                <div class="list_img_container">
                                    <img src="{{URL::asset('public/images/profile.png')}}">
                                </div>
                            </div>
                            <div class="list_detail_container text-center cursor-pointer" onclick="prof_detail()">
                                <p class="list_detail_name">${prof.keyword_1}| ${prof.keyword_2}| ${prof.keyword_3}</p>
                                <p class="list_detail_bio">${prof.fixed_name}</p>
                            </div>
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
                            <p class="review_p">100 Reviews</p>
                            <div class="bottom_btn">
                                <table class="lc_t_tbl  lc_t_tbl1">
                                    <tr>
                                        <td class="border-radius-left  border-radius">
                                            <span class="lc_t_spn myactive btn " onclick="show_location_type()">Fixed Location</span>
                                        </td>
                                        <td class="border-radius-right">
                                            <span class="lc_t_spn  btn" onclick="show_location_type()">Desired Location</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="services">
                                <span class="serv">
                                    <span class="serv1">Services 1</span><span class="starteur">Starting From 23 EUR</span>
                                    <p class="time">30-40 Min</p>
                                </span>
                                <span class="serv">
                                    <span class="serv1">Services 1</span><span class="starteur">Starting From 23 EUR</span>
                                    <p class="time">30-40 Min</p>
                                </span>
                                <span class="serv">
                                    <span class="serv1">Services 1</span><span class="starteur">Starting From 23 EUR</span>
                                    <p class="time">30-40 Min</p>
                                </span>
                                <span class="serv">
                                    <a href="#">More...</a>
                                </span>
                            </div>
                        </div>
                        <div id="des_l_sec" class="shadow rounded p-2" style="height: 100%;position: relative;display:none">
                            <div class="fav_sec">
                                <div><img src="{{URL::asset('public/icons/favorite.png')}}"></div>
                            </div>
                            <div class="list_box">
                                <div class="list_img_container">
                                    <img src="{{URL::asset('public/images/profile.png')}}">
                                </div>
                            </div>
                            <div class="list_detail_container text-center cursor-pointer" onclick="prof_detail()">
                                <p class="list_detail_name"></p>
                                <p class="list_detail_bio"></p>
                            </div>
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
                            <p class="review_p">100 Reviews</p>
                            <div class="bottom_btn">
                                <table class="lc_t_tbl lc_t_tbl1">
                                    <tr>
                                        <td class="border-radius-left">
                                            <span class="lc_t_spn btn "  onclick="show_location_type()">Fixed Location</span>
                                        </td>
                                        <td class="border-radius-rightborder-radius ">
                                            <span class="lc_t_spn myactive btn" onclick="show_location_type()">Desired Location</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div> 
                    </div>
                </div>`;
            
        }
        
        // Update the HTML content of the filteredResults div
        $('#filteredResults').html(html);
                                        
                    }
                });
            }

            // Event listeners for input fields
            // $('#filter-form input[type="text"], #filter-form input[type="date"], #filter-form select').on('change', function() {
            //     performSearch();
            // });
            
             // Event listener for all input fields in the form
                $('#filter-form input, #filter-form input[type="date"], #filter-form select').on('change', function() {
                    performSearch();
                });

            // Additional event listener for date pickers
            $('#filter-form .datepicker input').on('dp.change', function() {
                performSearch();
            });

            // Event listener for location buttons
            $('#filter-form .frm_btn').on('click', function() {
                performSearch();
            });

            // Initial search
            performSearch();
        });
    </script>
    <script type="text/javascript">
    function show_location_type(t,i){
        if(t=='f'){
            $('#fix_l_sec_'+i).show();
            $('#des_l_sec_'+i).hide();
        }
        else{
            $('#fix_l_sec_'+i).hide();
            $('#des_l_sec_'+i).show();
        }
    }
    $(document).ready(function(){
        get_all_category();
        /*$(".form_datetime-component").datetimepicker({
            format: "dd MM yyyy - hh:ii",
            autoclose: true,
            todayBtn: true,
            pickerPosition: "bottom-left"
        });*/

        $('#fl_time_inp').on('change',function(){
            if($(this).prop('checked')===true){
                $('.fl_tm_fl_sec').addClass('noevent');
                $('.tm_sec_lbl').addClass('active');
            }
            else{
                $('.fl_tm_fl_sec').removeClass('noevent');
                $('.tm_sec_lbl').removeClass('active');
            }
        })

        $('.timepicker-default').timepicker();

        $('.custom_sel_inp,.custom_sel_ic').on('click',function(){
            if($(this).closest('.custom_sel').hasClass('open')){
                $(this).closest('.custom_sel').removeClass('open');
            }
            else{
                $(this).closest('.custom_sel').addClass('open');
            }
        });

        $('.date_flid_sec').on('click',function(){
            if($('.date_time_sec').hasClass('open')){
                $('.date_time_sec').removeClass('open');
                $('.dt_sec').addClass('active');
                $('.tm_sec').removeClass('active');
                $('.dt_cal_sec').show();
                $('.tm_cal_sec').hide();
                $(this).removeClass('open');
            }
            else{
                $('.date_time_sec').addClass('open');
                $(this).addClass('open');
            }
        })

        $('.dt_sec').on('click',function(){
            $('.dt_cal_sec').show();
            $('.tm_cal_sec').hide();
            $('.dt_sec').addClass('active');
            $('.tm_sec').removeClass('active');
        });
        $('.tm_sec').on('click',function(){
            $('.dt_cal_sec').hide();
            $('.tm_cal_sec').show();
            $('.dt_sec').removeClass('active');
            $('.tm_sec').addClass('active');
        });

        $(document).on('click',function(event) {
            const $target = $(event.target);

            if($target.closest('.custom_sel').length>0)return true;

            $('.custom_sel_inp').closest('.custom_sel').removeClass('open');
          
        });

        $('.sf_category_chk').on('change',function(){
            get_all_category();
        });

        /*$('.select2').select2({
          placeholder:'Select your desired Muncipality'
        });*/


        // function get_all_category(){
        //     var str='';

        //     $('.sf_category_li').removeClass('active');
        //     $('.sf_category_chk:checked').each(function(){
        //         str+=$(this).attr('data-cate')+', ';
        //         $(this).closest('.sf_category_li').addClass('active');
        //     });
        //     $('#sf_category').val(str);
        // }

        function get_all_category() {
    var str = '';

    $('.sf_category_li').removeClass('active');
    $('.sf_category_chk:checked').each(function(index) {
        str += $(this).attr('data-cate');
        if (index < $('.sf_category_chk:checked').length - 1) {
            str += ', ';
        }
        $(this).closest('.sf_category_li').addClass('active');
    });
    $('#sf_category').val(str);
}
    
        $('.cate_btn').on('click',function(){
            var c = $(this).attr('data-c');
            if($('#cate_chk_inp_'+c).prop('checked')===true){
                $('#cate_chk_inp_'+c).prop('checked',false);
                $(this).removeClass('active');
            }
            else{
                $('#cate_chk_inp_'+c).prop('checked',true);
                $(this).addClass('active');
            }
            var p='';
            $('.cate_chk_inp:checked').each(function(){
                if(p=='')
                    p+=''+$(this).val();
                else
                    p+=','+$(this).val();
            });

            $('#frm_cate').find('input[name="c"]').val(p);
            $('#frm_cate').submit();
        });

        $( "#myDatePicker" ).datepicker( { 
              altField: ".dpYears",
              dateFormat: 'yy-mm-dd'
          });

        // $('.dpYears').datepicker({
        //    autoclose: true,
        //    dateFormat: 'dd-mm-yy',
        //    minDate: new Date(),
        // });

        $('.frm_btn').on('click',function(){
            $('.frm_btn').removeClass('myactive');
            $(this).addClass('myactive');
            var lt = $(this).attr('data-l');
            $('#lt').val(lt);
        });
    });

    function prof_detail(pid, n, t){
        n = n.replace(' ','_');
        n = n.replace('"','');
        n = n.replace("'",'_');
        n = n.replace('@','');
        n = n.replace('#','');
        n = n.replace(',','');
        n = n.replace(' ','');
        n = n.replace('.','');
        n = n.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '-');
        n = n.toLowerCase();

        window.location.href="{{config('app.url')}}/professional/"+pid+"/"+encodeURIComponent(n)+"/"+t;
    }
    </script>

    <script>
    //   $(function() {
    //     $('#query').autocomplete({
        // minChars: 1,
        // source: function(request, response) {
        //   $.ajax({
        //     type: 'get',
        //     dataType: 'json',
        //     url: "{{route('autocomplete')}}",
        //     data: {'q':request.term},
        //     success: function(data) {
        //       response( $.map( data, function( item ) {
        //           var object = new Object();
        //           object.label = item.label;
        //           object.value = item.value;
        //           object.type = item.type;
        //           object.name = item.name;
        //           object.i = item.i;
        //           return object
        //       }));
              // response( $.map( data, function( item ) {
              //     return {
              //         label: item.title,
              //         value: item.title
              //     }
              // }));

        //     }
        //   });
        // },
        // select: function (event, ui) {
        //   $("#query").val(ui.item.label);
          // console.log(ui.item.label);
    //       prof_detail(ui.item.i,ui.item.name,ui.item.type);
          
    //      }
    //   });


        
    //   });
    </script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script>
    // jQuery code
    $(document).ready(function() {
        var selectIcon = $('.custom_sel_ic2 i');
        var municiOptions = $('.munci_options');
        var municiItems = $('.munci_options li');

        // Handle click event on the select icon
        selectIcon.click(function() {
            municiOptions.toggle();
            selectIcon.toggleClass('fa-angle-down fa-angle-up');
        });

        // Handle click event on the municipality item
        municiItems.click(function() {
            var selectedValue = $(this).find('span').text();
            $('#sf_category2').val(selectedValue);
            municiOptions.hide();
            selectIcon.removeClass('fa-angle-up').addClass('fa-angle-down');
        });
    });
</script>
    </body>
</html>