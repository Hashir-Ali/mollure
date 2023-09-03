@include('salon/header')


<style type="text/css">


*{
	color: #000000;
}
.main_head_cont h1{
	font-style: normal;
	font-weight: bold;
	font-size: 32px;
	line-height: 43px;
	text-transform: capitalize;
	text-align: center;
	border: 10px solid;
	border-image-slice: 1;
	border-width: 5px;
	border-image-source: linear-gradient(to left, #66C68F,#21B8BF);
	border-left: 0;
	border-right: 0;
	border-top: 0;
	padding-bottom: 15px;
	margin-bottom: 40px;
	margin-top: 25px;
}

.main_navs{
	border: 1px solid #EFEFEF;
	border-radius: 8px; 
}

.main_navs li{
	flex:1;

}
.main_navs li a{
	
	text-align: center;

	font-style: normal;
	font-weight: 600;
	font-size: 20px;
	color: black;
	text-transform: capitalize;
}
 .nav .nav-item .nav-link.active{
	background-color: #21B8BF!important;
	color: white!important;
	border-radius: 8px!important;
}

/*----- -- start setting page -----------*/


.top_month_contianer{
    position: relative;
}

.month_slider_container{
    width:300px;
    height: 50px;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    border: 1px solid #EAEAEA;
    border-radius: 8px;
}
.month_slider_container>div{
    padding-top: 11px;
    text-align: center;
}

.month_slider_container>div:first-child,.month_slider_container>div:last-child{
    width:45px;
    cursor: pointer;
}
.month_slider_container>div.month_slider_box_middle{
    flex:1;
    font-style: normal;
    font-weight: 500;
    font-size: 14px;
    text-align: center;
    text-transform: capitalize;
    opacity: 0.6;
}
.month_slider_container>div:first-child{
    border-right: 1px solid #EAEAEA;
   
}
.month_slider_container>div:last-child{
    border-left: 1px solid #EAEAEA;
}
.top_month_contianer button{
    position: absolute;
    right: 0px;
    top: 5px;
    background-color: white;
    border-radius: 5px;
    border: 1px solid rgb(0 0 0 / 20%);
    width: 75px;
    height: 33px;
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    /* line-height: 21px; */
    text-align: center;
    text-transform: capitalize;
}

.date_slider_container{
    width:200px;
    height: 50px;
    margin-left: auto;
    margin-right: auto;
    display: flex;
}
.date_slider_container>div{
    padding-top: 11px;
    text-align: center;
}
.date_slider_container>div:first-child,.date_slider_container>div:last-child{
    width:45px;
    cursor: pointer;
}
.date_slider_container>div.date_slider_box_middle{
    flex:1;
    padding-top: 8px!important;
}
.date_slider_container>div.date_slider_box_middle span{
    font-style: normal;
    font-weight: 600;
    font-size: 20px;
    text-transform: capitalize;
    margin-right: 6px;
}

.img_dropdown_container figure img{
    width:60px;
}
.img_dropdown_container .my_custom_dropdonw span{
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    text-transform: capitalize;
}
.img_dropdown_container .my_custom_dropdonw span i{
    
    font-size: 14px;
    
}

h2.table_heading{
    font-style: normal;
    font-weight: 600;
    font-size: 20px;
    line-height: 27px;
    text-transform: capitalize;
    margin-top: 25px;
    margin-bottom: 17px;
}
.my_table{
    min-width:100%;
}
.active_td{
    background-color: #E5FEFF!important;
}

.setting_calender_table{
  width: 100%;
      border-collapse: separate;
      border-spacing: 0;
      border: 1px solid #E4E4E4;
      border-radius: 8px;
}

.setting_calender_table thead tr td,.setting_calender_table tbody tr td{
    text-align: center;
    /*border: 1px solid #E4E4E4;*/
    padding-top: 15px;
    padding-bottom: 15px;
    font-style: normal;
    font-size: 16px;
    text-align: center;
    text-transform: capitalize;
    white-space: nowrap;
}
.setting_calender_table thead tr th{
    font-style: normal;
    font-weight: 600;
    text-align: center;
    text-transform: capitalize;
}
.setting_calender_table tbody tr td:last-child button{
    margin-right: 4px;
    background-color: transparent;
    border: none;
}
.setting_calender_table tbody tr td:last-child button i.fa-pencil{
    color: #21B8BF;
    font-size: 20px;
}
.setting_calender_table tbody tr td:last-child button i.fa-trash{
    color: #F16060;
    font-size: 20px;
}
.common_button_container {
    text-align: right;
    margin-top: 15px;
}
.common_button_container button{
    background: linear-gradient(90.14deg, #66C68F 1.34%, #21B8BF 99.89%);
    border-radius: 55px;
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    text-transform: capitalize;
    color: #FFFFFF;
    border: none;
    padding: 12px 45px;
}
.common_button_container button i{
    color: white;
    margin-right: 7px;
}


@media screen and (max-width: 450px) {
    .month_slider_container {
        width: 180px!important;
    }
    
}

@media screen and (max-width: 530px) {
    .total_rating_container{
        width:370px;
    }
    .rating_heading_container>div{
        width:360px;
    }
    .month_slider_container {
        width: 240px;
        height: 40px;
    }
    .month_slider_container>div {
        padding-top: 7px;
        text-align: center;
    }
}

@media screen and (max-width: 650px) {
    
    .main_head_cont h1 {
        font-size: 25px!important;
        padding-bottom: 15px!important;
        margin-bottom: 30px!important;
        margin-top: 15px!important;
    }
    .main_navs li a {
        font-size: 17px!important;
    }
}
@media screen and (max-width: 767px) {
    
    .common_button_container button{
        
        font-size: 16px;
        
        padding: 8px 25px;
    }

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
#date-picker-2, #date-picker-1{
    border:none !important;
}
#date-picker-2-blocked, #date-picker-1-blocked{
    border:none !important;
}


#date-picker-2-mintimeslot, #date-picker-1-mintimeslot{
    border:none !important;
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
.dt_active_apn{
  display: inline-block;
  background-color: #39bf1c;
  color: white;
  width: 20px;
  height: 20px;
  line-height: 15px;
  text-align: center;
  border-radius: 50%;
}
.setting_calender_table thead tr td {
    font-weight: 600;
    font-size: 16px;
    line-height: 21px;
    text-align: center;
    text-transform: capitalize;
    color: #000000;
}

.custom_sel{position: relative;}
.custom_sel ul{background: #fff;
    position: absolute;
    z-index: 10000;
    /*width: 100%;*/
    min-width: 180px;
    list-style: none;
    /* border: 1px solid gray; */
    padding: 7px 20px;
    margin-top: 3px;
    border-radius: 12px;
    /* display: none; */
    box-shadow: -1px 1px 9px -2px grey;
    display: none;
}
.custom_sel .sf_item_sec{background: #fff;
    position: absolute;
    z-index: 10000;
    width: 100%;
    list-style: none;
    padding: 7px 20px;
    margin-top: 3px;
    border-radius: 12px;
    box-shadow: -1px 1px 9px -2px grey;
}
.custom_sel:not(.open) .sf_item_sec{display: none!important;  }

.custom_sel.open ul{display: block;right: 0}
 .custom_sel ul li{padding: 15px 2px;display: flex;justify-content: space-between;}
  .custom_sel ul li:not(:first-child){border-top: 1px solid #e9e9e9}
  .custom_sel ul li input{width: 20px;height: 20px;top: -2px;    vertical-align: middle;}
  .custom_sel ul li input:checked{color: red;background-color: red !important;}
  .custom_sel_ic{position: absolute;top: 11px;right: 9px;cursor: pointer;}
  .custom_sel_inp{background: #fff!important;text-transform: capitalize;}
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
.cs_btns{
    background: #66c68f;
    color: #fff;
}
.daterangepicker td.active, .daterangepicker td.active:hover{
    background: #66c68f!important;
    color: #fff;
}
.f-14{font-size: 14px;}
.cursor-pointer{cursor: pointer;}
.sf_li, .sf_li label{cursor: pointer;}
.sf_time_ul{max-height: 200px;overflow: hidden;margin-bottom: 100px}
.sf_time_ul .li_before{
    background: #fff;
    display: block;
    text-align: center;
    top: -7px;
    /* left: 45%; */
    width: 100%;
    position: sticky;
    padding: 4px 0px 10px;
    color: #66C68F;
}
.li_after i, .li_before i{color: #66C68F;}
.sf_time_ul .li_after{
    background: #fff;
    display: block;
    text-align: center;
    bottom: -7px;
    /* left: 45%; */
    width: 100%;
    position: sticky;
    padding: 0px 0px 10px;
    color: #66C68F;
}
.sf_time_ul li{padding: 9px 2px;}
</style>
<style type="text/css">
.popupContainer {
    min-width: 100%;
    height: 100vh;
    /*height: auto;*/
    position: fixed;
    background: rgb(0, 0, 0, 0.2);
    top: 0;
    left: 0;
    overflow: auto;
}

.popup {
    background: #FFFFFF;
    border-radius: 12px;
    width: 446px !important;
    margin-top: 10px;
    padding: 25px;
}

.popclose {
    background: transparent;
    border: none;
    outline: none;
    position: absolute;
    right: 20px;
    font-weight: bold;
    font-size: 25px;
}

.poptitle {
    font-weight: 700;
    font-size: 18px;
    line-height: 24px;
    text-align: center;
    color: #000000;
}

.title-area {
    margin-bottom: 40px !important;
}

.pop-button {
    width: 296px;
    height: 45px;
    background: #66C68F;
    border: 1px solid #66C68F;
    border-radius: 8px;
    color: white;
    margin-top: 40px;
}
.popupContainer input,
.popupContainer select {
    font-style: normal;
    font-weight: 400;
    font-size: 14px !important;
    background: #FFFFFF;
    border: 1px solid #E4E4E4 !important;
    border-radius: 8px !important;
    min-width: 90% !important;
    color: #000000 !important;
    padding: 10px 14px 15px 10px !important;
}

.popupContainer input:focus {
    outline: none !important;
    border: 1px solid #66C68F !important;
}
.bx--date-picker__input {
  font-family: 'IBM Plex Mono', 'Menlo', 'DejaVu Sans Mono', 'Bitstream Vera Sans Mono', Courier, monospace;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1.42857;
  letter-spacing: 0.32px;
  outline: 2px solid transparent;
  outline-offset: -2px;
  position: relative;
  display: block;
  height: 2.5rem;
  padding: 0 1rem;
  border: none;
  border-bottom: 1px solid #8d8d8d;
  background-color: #f4f4f4;
  color: #161616;
  -webkit-transition: 70ms cubic-bezier(0.2, 0, 0.38, 0.9) all;
  transition: 70ms cubic-bezier(0.2, 0, 0.38, 0.9) all;
  background: none;
  border: none;
}
.dash{
    margin-top:8px !important;
}
.bx--date-picker {
  width: 24.7rem !important;
}
#date-picker-2{
    margin-left: 30px !important;
}
#date-picker-2-blocked{
    margin-left: 30px !important;
}
.flatpickr-calendar.open{
    width:400px !important;
    height:25rem !important;
    max-height:25rem !important;
}
.flatpickr-calendar.open,
.flatpickr-calendar.inline {
    max-height:25rem !important;
}
.flatpickr-months {
  margin-top: -130px !important;
}
.flatpickr-day.today {
  color: #66C68F !important;
}
.numInputWrapper .numInput{
    background-color: #f4f4f4;
}
.flatpickr-day.today::after {
  background-color: #66C68F !important;
}
.flatpickr-day.selected {
  color: #ffffff;
  background-color: #66C68F !important;
}
.flatpickr-day:hover {
  background: #66C68F !important;
}
.flatpickr-day.inRange {
  color: #161616;
  background-color: #66c68f77 !important;
}
.flatpickr-day.today.selected {
  outline: 2px solid #66c68f77;
}
.flatpickr-day.endRange {
  color: #161616;
  background-color: #66c68f77 !important;
}
.flatpickr-day.endRange:hover {
  outline: 2px solid #66C68F !important;
}
.flatpickr-weekday {
    color: #66C68F !important;
}

</style>
<link href="{{ URL::asset('public/css/style.css')}}?12" rel="stylesheet">
<link href="{{ URL::asset('public/css/calendar_style.css')}}?12" rel="stylesheet">
<link href="{{ URL::asset('public/css/carbon-components.css')}}?12" rel="stylesheet">

<?php
    
    $time_ar = array('7:00','7:30','8:00','8:30','9:00','9:30','10:00','10:30','11:00','11:30','12:00','12:30','13:00','13:30','14:00','14:30','15:00','15:30','16:00','16:30','17:00','17:30','18:00','18:30');
?>


<section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main_head_cont">
                            <h1>Calendar</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Nav tabs -->
                        <!-- <ul class="nav nav-tabs main_navs">
                          <li class="nav-item flex-fill">
                            <a class="nav-link " data-bs-toggle="tab" href="#Bookings">Bookings</a>
                          </li>
                          <li class="nav-item flex-fill">
                            <a class="nav-link active" data-bs-toggle="tab" href="#Setting">Setting</a>
                          </li>
                          <li class="nav-item flex-fill">
                            <a class="nav-link" data-bs-toggle="tab" href="#Client">Client List</a>
                          </li>
                        </ul> -->
                        <div class="top_nav_sec d-flex">
                          <div class="top_nav bdr_right bdr_top bdr_left bdr_bottom border-top-left-radius border-bottom-left-radius">
                            <span>Bookings</span>
                          </div>
                          <div class="top_nav bdr_right bdr_top bdr_bottom active">
                            <span>Setting</span>
                          </div>
                          <div class="top_nav bdr_bottom bdr_top bdr_right border-top-right-radius border-bottom-right-radius ">
                            <span>Client List</span>
                          </div>
                        </div>

                        <!-- Tab panes -->
                        <div class="tab-content">
                          <div class="tab-pane  fade" id="Bookings">Bookings</div>
                          <div class="tab-pane   active" id="Setting">
                                <!-- <section>
                                    <div class="container">
                                        <div class="row mt-5">
                                            <div class="col-sm-12 position-relative">
                                                <div class="top_month_contianer">
                                                    <div class="month_slider_container">
                                                        <div>
                                                            <i class="fw-bold fa fa-angle-left" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="month_slider_box_middle">
                                                            <span>month</span>
                                                        </div>
                                                        <div>
                                                            <i class="fw-bold fa fa-angle-right" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <button class="position-absolute" title="Clear">Clear</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-sm-12 ps-0 pe-0">
                                                <div class="date_slider_container">
                                                    <div>
                                                        <i class="fw-bold fa fa-angle-left" aria-hidden="true"></i>
                                                    </div>
                                                    <div class="date_slider_box_middle">
                                                        <span>Apr, 2023</span>
                                                    </div>
                                                    <div>
                                                        <i class="fw-bold fa fa-angle-right" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12 ps-0 pe-0">
                                                <div class="table-responsive mt-3">
                                                    <table class="setting_calender_table">
                                                        <thead>
                                                          <tr>
                                                            <td class="bdr_right">Monday</td>
                                                            <td class="bdr_right">Tuesday</td>
                                                            <td class="bdr_right">Wednesday</td>
                                                            <td class="bdr_right">Thursday</td>
                                                            <td class="bdr_right">Friday</td>
                                                            <td class="bdr_right">Saturday</td>
                                                            <td class="bdr_right">Sunday</td>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr>
                                                            <td class="active_td bdr_right bdr_top">
                                                              <span class="dt_active_apn">3</span></td>
                                                            <td class="active_td bdr_right bdr_top">4</td>
                                                            <td class="active_td bdr_right bdr_top">5</td>
                                                            <td class="active_td bdr_right bdr_top">6</td>
                                                            <td class="active_td bdr_right bdr_top">7</td>
                                                            <td class="bdr_right bdr_top">8</td>
                                                            <td class=" bdr_top">9</td>
                                                          </tr>
                                                          <tr>
                                                            <td class="active_td bdr_right bdr_top">3</td>
                                                            <td class="active_td bdr_right bdr_top">4</td>
                                                            <td class="active_td bdr_right bdr_top">5</td>
                                                            <td class="active_td bdr_right bdr_top">6</td>
                                                            <td class="active_td  bdr_top">7</td>
                                                            <td class="bdr_right bdr_top">8</td>
                                                            <td class="bdr_top">9</td>
                                                          </tr>
                                                          <tr>
                                                            <td class="active_td bdr_right bdr_top">3</td>
                                                            <td class="active_td bdr_right bdr_top">4</td>
                                                            <td class="active_td bdr_right bdr_top">5</td>
                                                            <td class="active_td bdr_right bdr_top">6</td>
                                                            <td class="active_td  bdr_top">7</td>
                                                            <td class="bdr_right bdr_top">8</td>
                                                            <td class="bdr_top">9</td>
                                                          </tr>
                                                          <tr>
                                                            <td class="active_td bdr_right bdr_top bdr_bottom">3</td>
                                                            <td class="active_td bdr_right bdr_top bdr_bottom">4</td>
                                                            <td class="active_td bdr_right bdr_top bdr_bottom">5</td>
                                                            <td class="active_td bdr_right bdr_top bdr_bottom">6</td>
                                                            <td class="active_td bdr_top bdr_bottom">7</td>
                                                            <td class="bdr_right bdr_top">8</td>
                                                            <td class="bdr_top">9</td>
                                                          </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->

                                @if(count($team_member)>0 )

                                @php
                                    $i=0;
                                @endphp

                                @foreach($team_member as $ind => $tm_mem)

                                @php
                                    $i++;
                                    4
                                @endphp
                                @if($tm_mem->location_type == 'f')
                                <section class="mt-5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="img_dropdown_container">
                                                    <figure >
                                                        @php
                                                        $tmimg=asset("public/images/default-user.png");
                                                        if($tm_mem->image!=''){
                                                            $tmimg=asset("public/imgs/team/").'/'.$tm_mem->image;
                                                        }
                                                        @endphp
                                                        <img src="{{$tmimg}}" />
                                                    </figure>
                                                    <div class="my_custom_dropdonw">
                                                        <span>{{$tm_mem->member}}</span>&nbsp;
                                                        <span>
                                                            <i class="fw-bold fa fa-angle-down" aria-hidden="true"></i>
                                                        </span>&nbsp;
                                                        <span>
                                                            <i class="fw-bold fa fa-angle-up" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                                
                                            </div>
                                        </div> 
                                    </div>
                                
                                    <div class="container mt-3" id="tm_sec_{{$i}}">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h2 class="table_heading">Availability:</h2>

                                                <div class="my_table_container table-responsive">
                                                    <table class="setting_calender_table ">
                                                        <thead>
                                                          <tr>
                                                            <td class="bdr_right">Location</td>
                                                            <td class="bdr_right">Date - Date</td>
                                                            <td class="bdr_right">Day - Day</td>
                                                            <td class="bdr_right">Time - Time</td>
                                                            <td class="bdr_right">Interval between services</td>
                                                            <td class="">Action</td>
                                                          </tr>
                                                        </thead>
                                                        <tbody id="tm_avail_tb">
                                                            @if(count($tm_mem->get_availablity)>0)
                                                            @foreach($tm_mem->get_availablity as $index => $avail)
                                                                @if($avail->status == 'new')
                                                            <tr id="av_tr_{{$avail->id}}">
                                                                <td class="bdr_right bdr_top">{{$avail->location}}</td>
                                                                <td class="bdr_right bdr_top">{{$avail->from_date}} – {{$avail->to_date}}</td>
                                                                <td class="bdr_right bdr_top">{{$avail->from_day}} - {{$avail->to_day}}</td>
                                                                <td class="bdr_right bdr_top">{{$avail->from_time}} – {{$avail->to_time}}</td>
                                                                <td class="bdr_right bdr_top">{{$avail->serv_interval}} </td>
                                                                <td class=" bdr_top">
                                                                    <button class="EditButton"  title="Edit" onclick="Edit_client_data('{{$avail->id}}','{{$index}}','{{$ind}}','{{$i}}')">
                                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                                    </button>
                                                                    <button title="Delete" onclick="delete_tm_avail('{{$avail->id}}')">
                                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                                @endif
                                                            @endforeach
                                                            @endif

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="common_button_container">
                                                    <button class="addAvailBtn" data-i="{{$tm_mem->id}}" onclick="EmptyAdd()">
                                                        <i class="fa fa-plus" aria-hidden="true"></i> availability
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                        
                                                <h2 class="table_heading">Blocked Time:</h2>

                                                <div class="my_table_container table-responsive">
                                                    <table class=" setting_calender_table ">
                                                        <thead>
                                                          <tr>
                                                            <td class="bdr_right">Date – Date</td>
                                                            <td class="bdr_right">Day - Day</td>
                                                            <td class="bdr_right">Time - Time</td>
                                                            <td class="bdr_right">Description</td>
                                                            <td>Action</td>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if(count($tm_mem->get_blocked_time)>0)
                                                            @foreach($tm_mem->get_blocked_time as $index => $avail)
                                                                @if($avail->status == 'new')
                                                                    <tr id="av_tr_{{$avail->id}}">
                                                                        <td class="bdr_right bdr_top">{{$avail->from_date}} – {{$avail->to_date}}</td>
                                                                        <td class="bdr_right bdr_top">{{$avail->from_day}} - {{$avail->to_day}}</td>
                                                                        <td class="bdr_right bdr_top">{{$avail->from_time}} – {{$avail->to_time}}</td>
                                                                        <td class="bdr_right bdr_top">{{$avail->description}} </td>
                                                                        <td class=" bdr_top">
                                                                            <button class="EditButton"  title="Edit" onclick="Edit_client_data_blocked('{{$avail->id}}','{{$index}}','{{$ind}}','{{$i}}')">
                                                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                                                            </button>
                                                                            <button title="Delete" onclick="delete_tm_blocked_time('{{$avail->id}}')">
                                                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                                                            </button>
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="common_button_container">
                                                    <button class="blockedTime"  data-i="{{$tm_mem->id}}" onclick="EmptyAdd()">
                                                        <i class="fa fa-plus" aria-hidden="true"></i> Blocked Time
                                                    </button>
                                                </div>
                                            </div>
                                        </div> 
                                    
                                        <div class="row mt-5">
                                            <div class="col-sm-12">
                                        
                                                <h2 class="table_heading">Minimum timeslot booking:</h2>

                                                <div class="my_table_container table-responsive">
                                                    <table class="setting_calender_table ">
                                                        <thead>
                                                          <tr>
                                                            <td class="bdr_right">Date – Date</td>
                                                            <td class="bdr_right">Day - Day</td>
                                                            <td class="bdr_right">Time - Time</td>
                                                            <td class="bdr_right">Description</td>
                                                            <td class="bdr_right">Action</td>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                           <!-- <tr>
                                                                <td class="bdr_right bdr_top">3/5/2023</td>
                                                                <td class="bdr_right bdr_top">Mon</td>
                                                                <td class="bdr_right bdr_top">9:00 – 10:00</td>
                                                                <td class="bdr_right bdr_top">meeting</td>
                                                                <td class=" bdr_top">
                                                                    <button title="Edit">
                                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                                    </button>
                                                                    <button title="Delete">
                                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>-->
                                                           @if(count($tm_mem->get_blocked_time)>0)
                                                               @foreach($tm_mem->get_blocked_time as $index => $avail)
                                                                   @if($avail->status == 'new')
                                                                       <tr id="av_tr_{{$avail->id}}">
                                                                           <td class="bdr_right bdr_top">{{$avail->from_date}} – {{$avail->to_date}}</td>
                                                                           <td class="bdr_right bdr_top">{{$avail->from_day}} - {{$avail->to_day}}</td>
                                                                           <td class="bdr_right bdr_top">{{$avail->from_time}} – {{$avail->to_time}}</td>
                                                                           <td class="bdr_right bdr_top">{{$avail->description}} </td>
                                                                           <td class=" bdr_top">
                                                                               <button class="EditButton"  title="Edit" onclick="Edit_client_data_blocked('{{$avail->id}}','{{$index}}','{{$ind}}','{{$i}}')">
                                                                                   <i class="fa fa-pencil" aria-hidden="true"></i>
                                                                               </button>
                                                                               <button title="Delete" onclick="delete_tm_blocked_time('{{$avail->id}}')">
                                                                                   <i class="fa fa-trash" aria-hidden="true"></i>
                                                                               </button>
                                                                           </td>
                                                                       </tr>
                                                                   @endif
                                                               @endforeach
                                                           @endif

                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="common_button_container">
                                                    <button class="minTimeSlotBooking"  data-i="{{$tm_mem->id}}" onclick="EmptyAdd()">
                                                        <i class="fa fa-plus" aria-hidden="true"></i> minimum timeslot booking
                                                    </button>

                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </section>
                                @endif
                          
                                @endforeach
                                @endif  <!--if(count($team_member)>0)-->

                                <!-- <section>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div>
                                                    <div class="img_dropdown_container">
                                                    <figure >
                                                        <img src="public/images/default-user.png" />
                                                    </figure>
                                                    <div class="my_custom_dropdonw">
                                                        <span>TMA</span>&nbsp;
                                                        <span>
                                                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                                        </span>&nbsp;
                                                        <span>
                                                            <i class="fa fa-chevron-up" aria-hidden="true"></i>
                                                        </span>
                                                    </div>
                                                </div>

                                                <h2 class="table_heading">Availability:</h2>
                                                </div>

                                                <div class="common_button_container">
                                                    <button>
                                                        <i class="fa fa-plus" aria-hidden="true"></i> availability
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                             
                                                <h2 class="table_heading">Blocked Time::</h2>
                                                
                                                <div class="common_button_container">
                                                    <button>
                                                        <i class="fa fa-plus" aria-hidden="true"></i> Blocked Time:
                                                    </button>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                

                                                <h2 class="table_heading">Minimum timeslot booking:</h2>
                                                <div class="common_button_container">
                                                    <button>
                                                        <i class="fa fa-plus" aria-hidden="true"></i> Minimum timeslot booking:

                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section> -->
                          </div>
                          <!-- <div class="tab-pane  fade" id="Client">Client List</div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
		@include('salon/footer')
    

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->

<!----------------------------add modal for available------------------------------------------------>

<div class="popupContainer addAvail" style="display: none;">
    <div class="popup mx-auto text-center">
        <div class="d-flex justify-content-center title-area align-items-center position-relative">
            <h3 class="poptitle mb-0">Availability</h3>
            <button class="popclose">&times;</button>
        </div>
        <form class="d-grid  gap-2" id="availability_frm">
            <input type="hidden" id="av_team_member" value="0">

                <div class="">
                    <div class="custom_sel">
                        <input type="text" id="av_location" class="form-control custom_sel_inp a1" placeholder="Location" readonly>
                        <span class="custom_sel_ic"><i  style="font-size: 15px;font-weight: bold;" class="fa fa-angle-down"></i></span>
                        <ul>
                            
                            <li class="sf_li"  onclick="set_value_sf('av_location','FL','inp')">
                                <label>FL</label> 
                                
                            </li>
                            
                            <li class="sf_li" onclick="set_value_sf('av_location','DL','inp')">
                                <label>DL</label>
                                
                            </li>
                            
                            
                        </ul>
                    </div>
                    <!-- <select class="form-control" id="av_location">
                        <option value="f">FL</option>
                        <option value="d">DL</option>
                    </select> -->
                </div>
                <div class="">
                    <!-- <input type="text" class="form-control" id="av_date" placeholder="Date - Date"> -->
                    <span class="">
                        <span class="bx--form-item">
                            <span id="range" data-date-picker data-date-picker-type="range" data-date-picker-options-inline="true" class="bx--date-picker bx--date-picker--range">
                              <span class="bx--date-picker-container">
                                <input type="text" id="date-picker-1" class="bx--date-picker__input" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="mm/dd/yyyy"
                                  data-date-picker-input-from />
                              </span>
                              <span class="dash">-</span>
                              <span class="bx--date-picker-container">
                                <input type="text" id="date-picker-2" class="bx--date-picker__input" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="mm/dd/yyyy"
                                data-date-picker-input-to />
                              </span>
                              <p class="ref"><img src="cross.png" alt="" onclick="refreshPage()"></p>
                              <svg data-date-picker-icon class="bx--date-picker__icon" width="17" height="19" viewBox="0 0 17 19">
                                <path d="M12 0h2v2.7h-2zM3 0h2v2.7H3z" />
                                <path d="M0 2v17h17V2H0zm15 15H2V7h13v10z" />
                                <path d="M9.9 15H8.6v-3.9H7.1v-.9c.9 0 1.7-.3 1.8-1.2h1v6z" />
                              </svg>
                            </span>
                        </span>
                    </span>
                </div>
                <!-- <div class="d-flex align-items-center">
                    <div style="flex:1">
                        <input type="text" class="form-control" id="av_from_date" placeholder="Date">
                    </div>
                    <div>&nbsp;-&nbsp;</div>
                    <div style="flex:1">
                        <input type="text" class="form-control" id="av_to_date" placeholder="Date">
                    </div>
                </div> -->
                <div class="d-flex  align-items-center">
                    <div style="flex:50%">
                        <div class="custom_sel">
                            <input type="text" id="av_from_day" class="form-control custom_sel_inp" placeholder="Day" readonly>
                            <span class="custom_sel_ic"><i  style="font-size: 15px;font-weight: bold;" class="fa fa-angle-down"></i></span>
                            <ul>
                                <li class="sf_li"  onclick="set_value_sf('av_from_day','','inp')">
                                    <label>Day</label>     
                                </li>
                                <li class="sf_li"  onclick="set_value_sf('av_from_day','monday','inp')">
                                    <label>Monday</label>     
                                </li>
                                <li class="sf_li"  onclick="set_value_sf('av_from_day','tuesday','inp')">
                                    <label>Tuesday</label>     
                                </li>
                                <li class="sf_li" onclick="set_value_sf('av_from_day','wednesday','inp')">
                                    <label>Wednesday</label>
                                </li>
                                <li class="sf_li" onclick="set_value_sf('av_from_day','thursday','inp')">
                                    <label>Thursday</label>
                                </li>                            
                                <li class="sf_li" onclick="set_value_sf('av_from_day','friday','inp')">
                                    <label>Friday</label>
                                </li>
                                <li class="sf_li" onclick="set_value_sf('av_from_day','saturday','inp')">
                                    <label>Saturday</label>
                                </li>
                                <li class="sf_li" onclick="set_value_sf('av_from_day','sunday','inp')">
                                    <label>Sunday</label>
                                </li>
                            </ul>
                        </div>
                        <!-- <select class="form-control" name="av_from_day" id="av_from_day">
                            <option value="">Day</option>
                            <option value="monday">Monday</option>
                            <option value="tuesday">Tuesday</option>
                            <option value="wednesday">Wednesday</option>
                            <option value="thursday">Thursday</option>
                            <option value="friday">Friday</option>
                            <option value="saturday">Saturday</option>
                            <option value="sunday">Sunday</option>
                        </select> -->
                    </div>
                    <div>&nbsp;-&nbsp;</div>
                    <div style="flex:50%">
                        <div class="custom_sel">
                            <input type="text" id="av_to_day" class="form-control custom_sel_inp" placeholder="Day" readonly>
                            <span class="custom_sel_ic"><i  style="font-size: 15px;font-weight: bold;" class="fa fa-angle-down"></i></span>
                            <ul>
                                <li class="sf_li"  onclick="set_value_sf('av_to_day','','inp')">
                                    <label>Day</label>     
                                </li>
                                
                                <li class="sf_li"  onclick="set_value_sf('av_to_day','tuesday','inp')">
                                    <label>Tuesday</label>     
                                </li>
                                <li class="sf_li" onclick="set_value_sf('av_to_day','wednesday','inp')">
                                    <label>Wednesday</label>
                                </li>
                                <li class="sf_li" onclick="set_value_sf('av_to_day','thursday','inp')">
                                    <label>Thursday</label>
                                </li>                            
                                <li class="sf_li" onclick="set_value_sf('av_to_day','friday','inp')">
                                    <label>Friday</label>
                                </li>
                                <li class="sf_li" onclick="set_value_sf('av_to_day','saturday','inp')">
                                    <label>Saturday</label>
                                </li>
                                <li class="sf_li" onclick="set_value_sf('av_to_day','sunday','inp')">
                                    <label>Sunday</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div style="flex:1">

                        <div class="custom_sel">
                            <input type="text" id="av_from_time" class="form-control custom_sel_inp" placeholder="Time" readonly>
                            <span class="custom_sel_ic"><i  style="font-size: 15px;font-weight: bold;" class="fa fa-angle-down"></i></span>
                            <ul class="sf_time_ul sf_time_ul1">
                                <li class="li_before cursor-pointer" onclick="top_scroll('sf_time_ul1')"><i  style="font-size: 20px;font-weight: bold;" class="fa fa-angle-up"></i></li>
                                <li class="sf_li"  onclick="set_value_sf('av_from_time','','inp')">
                                    <label>Time</label>     
                                </li>
                                @foreach($time_ar as $time)
                                <li class="sf_li"  onclick="set_value_sf('av_from_time','{{$time}}','inp')">
                                    <label>{{$time}}</label>     
                                </li>
                                @endforeach
                                <li class="li_after cursor-pointer" onclick="bottom_scroll('sf_time_ul1')"><i  style="font-size: 20px;font-weight: bold;" class="fa fa-angle-down"></i></li>
                            </ul>
                        </div>

                        <!-- <select class="form-control" name="av_from_time" id="av_from_time">
                            <option value="">Time</option>
                            @foreach($time_ar as $time)
                            <option value="{{$time}}">{{$time}}</option>
                            @endforeach
                        </select> -->
                    </div>
                    <div>&nbsp;-&nbsp;</div>
                    <div style="flex:1">
                        <div class="custom_sel">
                            <input type="text" id="av_to_time" class="form-control custom_sel_inp" placeholder="Time" readonly>
                            <span class="custom_sel_ic"><i  style="font-size: 15px;font-weight: bold;" class="fa fa-angle-down"></i></span>
                            <ul class="sf_time_ul sf_time_ul2">
                                <li class="li_before cursor-pointer" onclick="top_scroll('sf_time_ul2')"><i  style="font-size: 20px;font-weight: bold;" class="fa fa-angle-up"></i></li>
                                <li class="sf_li"  onclick="set_value_sf('av_to_time','','inp')">
                                    <label>Time</label>     
                                </li>
                                @foreach($time_ar as $time)
                                <li class="sf_li"  onclick="set_value_sf('av_to_time','{{$time}}','inp')">
                                    <label>{{$time}}</label>     
                                </li>
                                @endforeach
                                <li class="li_after cursor-pointer" onclick="bottom_scroll('sf_time_ul2')"><i  style="font-size: 20px;font-weight: bold;" class="fa fa-angle-down"></i></li>
                            </ul>
                        </div>
                        <!-- <select class="form-control" name="av_from_time" id="av_to_time">
                            <option value="">Time</option>
                            @foreach($time_ar as $time)
                            <option value="{{$time}}">{{$time}}</option>
                            @endforeach
                        </select> -->
                    </div>
                </div>
                <div class="">
                    <div class="custom_sel">
                        <input type="text" id="av_serv_interval" class="form-control custom_sel_inp" placeholder="Interval between services" readonly>
                        <span class="custom_sel_ic"><i  style="font-size: 15px;font-weight: bold;" class="fa fa-angle-down"></i></span>
                        <ul>
                            <li class="sf_li"  onclick="set_value_sf('av_serv_interval','','inp')">
                                <label>No Interval</label>     
                            </li>
                            <li class="sf_li"  onclick="set_value_sf('av_serv_interval','10min','inp')">
                                <label>10min</label>     
                            </li>
                            <li class="sf_li"  onclick="set_value_sf('av_serv_interval','20min','inp')">
                                <label>20min</label>     
                            </li>
                            <li class="sf_li"  onclick="set_value_sf('av_serv_interval','30min','inp')">
                                <label>30min</label>     
                            </li>
                            <li class="sf_li"  onclick="set_value_sf('av_serv_interval','45min','inp')">
                                <label>45min</label>     
                            </li>
                            <li class="sf_li"  onclick="set_value_sf('av_serv_interval','60min','inp')">
                                <label>60min</label>     
                            </li>
                            <li class="sf_li"  onclick="set_value_sf('av_serv_interval','90min','inp')">
                                <label>90min</label>     
                            </li>
                            <li class="sf_li"  onclick="set_value_sf('av_serv_interval','2h','inp')">
                                <label>2h</label>     
                            </li>

                            
                        </ul>
                    </div>
                    <!-- <select class="form-control" name="av_serv_interval" id="av_serv_interval">
                        <option value="0">No Interval</option>
                        <option value="5">5min</option>
                        <option value="10">10min</option>
                        <option value="20">20min</option>
                        <option value="30">30min</option>
                        <option value="45">45min</option>
                        <option value="60">60min</option>
                        <option value="90">90min</option>
                        <option value="120">2h</option>
                    </select> -->
                </div>
                
            </form>

        <button class="pop-button" id="save_availability_btn" onclick="save_availability()">save</button>
    </div>
</div>


<!-- blocked time Modal -->

<div class="popupContainer blockTimeModel" style="display: none;">
    <div class="popup mx-auto text-center">
        <div class="d-flex justify-content-center title-area align-items-center position-relative">
            <h3 class="poptitle mb-0">Blocked Time</h3>
            <button class="popclose">&times;</button>
        </div>
        <form class="d-grid  gap-2" id="blocked_time">
            <input type="hidden" id="av_team_member" value="0">

               
                <div class="">
                    <!-- <input type="text" class="form-control" id="av_date" placeholder="Date - Date"> -->
                    <span class="">
                        <span class="bx--form-item">
                            <span id="range" data-date-picker data-date-picker-type="range" data-date-picker-options-inline="true" class="bx--date-picker bx--date-picker--range">
                              <span class="bx--date-picker-container">
                                <input type="text" id="date-picker-1-blocked" class="bx--date-picker__input" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="mm/dd/yyyy"
                                       data-date-picker-input-from />
                              </span>
                              <span class="dash">-</span>
                              <span class="bx--date-picker-container">
                                <input type="text" id="date-picker-2-blocked" class="bx--date-picker__input" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="mm/dd/yyyy"
                                       data-date-picker-input-to />
                              </span>
                              <p class="ref"><img src="cross.png" alt="" onclick="refreshPage()"></p>
                              <svg data-date-picker-icon class="bx--date-picker__icon" width="17" height="19" viewBox="0 0 17 19">
                                <path d="M12 0h2v2.7h-2zM3 0h2v2.7H3z" />
                                <path d="M0 2v17h17V2H0zm15 15H2V7h13v10z" />
                                <path d="M9.9 15H8.6v-3.9H7.1v-.9c.9 0 1.7-.3 1.8-1.2h1v6z" />
                              </svg>
                            </span>
                        </span>
                    </span>
                </div>

            <div class="d-flex  align-items-center">
                <div style="flex:50%">
                    <div class="custom_sel">
                        <input type="text" id="av_from_day_blocked" class="form-control custom_sel_inp" placeholder="Day" readonly>
                        <span class="custom_sel_ic"><i  style="font-size: 15px;font-weight: bold;" class="fa fa-angle-down"></i></span>
                        <ul>
                            <li class="sf_li"  onclick="set_value_sf('av_from_day_blocked','','inp')">
                                <label>Day</label>
                            </li>
                            <li class="sf_li"  onclick="set_value_sf('av_from_day_blocked','monday','inp')">
                                <label>Monday</label>
                            </li>
                            <li class="sf_li"  onclick="set_value_sf('av_from_day_blocked','tuesday','inp')">
                                <label>Tuesday</label>
                            </li>
                            <li class="sf_li" onclick="set_value_sf('av_from_day_blocked','wednesday','inp')">
                                <label>Wednesday</label>
                            </li>
                            <li class="sf_li" onclick="set_value_sf('av_from_day_blocked','thursday','inp')">
                                <label>Thursday</label>
                            </li>
                            <li class="sf_li" onclick="set_value_sf('av_from_day_blocked','friday','inp')">
                                <label>Friday</label>
                            </li>
                            <li class="sf_li" onclick="set_value_sf('av_from_day_blocked','saturday','inp')">
                                <label>Saturday</label>
                            </li>
                            <li class="sf_li" onclick="set_value_sf('av_from_day_blocked','sunday','inp')">
                                <label>Sunday</label>
                            </li>
                        </ul>
                    </div>

                </div>
                <div>&nbsp;-&nbsp;</div>
                <div style="flex:50%">
                    <div class="custom_sel">
                        <input type="text" id="av_to_day_blocked" class="form-control custom_sel_inp" placeholder="Day" readonly>
                        <span class="custom_sel_ic"><i  style="font-size: 15px;font-weight: bold;" class="fa fa-angle-down"></i></span>
                        <ul>
                            <li class="sf_li"  onclick="set_value_sf('av_to_day_blocked','','inp')">
                                <label>Day</label>
                            </li>
                            <li class="sf_li"  onclick="set_value_sf('av_to_day_blocked','monday','inp')">
                                <label>Monday</label>
                            </li>
                            <li class="sf_li"  onclick="set_value_sf('av_to_day_blocked','tuesday','inp')">
                                <label>Tuesday</label>
                            </li>
                            <li class="sf_li" onclick="set_value_sf('av_to_day_blocked','wednesday','inp')">
                                <label>Wednesday</label>
                            </li>
                            <li class="sf_li" onclick="set_value_sf('av_to_day_blocked','thursday','inp')">
                                <label>Thursday</label>
                            </li>
                            <li class="sf_li" onclick="set_value_sf('av_to_day_blocked','friday','inp')">
                                <label>Friday</label>
                            </li>
                            <li class="sf_li" onclick="set_value_sf('av_to_day_blocked','saturday','inp')">
                                <label>Saturday</label>
                            </li>
                            <li class="sf_li" onclick="set_value_sf('av_to_day_blocked','sunday','inp')">
                                <label>Sunday</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div style="flex:1">

                    <div class="custom_sel">
                        <input type="text" id="av_from_time_blocked" class="form-control custom_sel_inp" placeholder="Time" readonly>
                        <span class="custom_sel_ic"><i  style="font-size: 15px;font-weight: bold;" class="fa fa-angle-down"></i></span>
                        <ul class="sf_time_ul sf_time_ul1">
                            <li class="li_before cursor-pointer" onclick="top_scroll('sf_time_ul1')"><i  style="font-size: 20px;font-weight: bold;" class="fa fa-angle-up"></i></li>
                            <li class="sf_li"  onclick="set_value_sf('av_from_time_blocked','','inp')">
                                <label>Time</label>
                            </li>
                            @foreach($time_ar as $time)
                                <li class="sf_li"  onclick="set_value_sf('av_from_time_blocked','{{$time}}','inp')">
                                    <label>{{$time}}</label>
                                </li>
                            @endforeach
                            <li class="li_after cursor-pointer" onclick="bottom_scroll('sf_time_ul1')"><i  style="font-size: 20px;font-weight: bold;" class="fa fa-angle-down"></i></li>
                        </ul>
                    </div>

                <!-- <select class="form-control" name="av_from_time" id="av_from_time">
                            <option value="">Time</option>
                            @foreach($time_ar as $time)
                    <option value="{{$time}}">{{$time}}</option>
                            @endforeach
                        </select> -->
                </div>
                <div>&nbsp;-&nbsp;</div>
                <div style="flex:1">
                    <div class="custom_sel">
                        <input type="text" id="av_to_time_blocked" class="form-control custom_sel_inp" placeholder="Time" readonly>
                        <span class="custom_sel_ic"><i  style="font-size: 15px;font-weight: bold;" class="fa fa-angle-down"></i></span>
                        <ul class="sf_time_ul sf_time_ul2">
                            <li class="li_before cursor-pointer" onclick="top_scroll('sf_time_ul2')"><i  style="font-size: 20px;font-weight: bold;" class="fa fa-angle-up"></i></li>
                            <li class="sf_li"  onclick="set_value_sf('av_to_time_blocked','','inp')">
                                <label>Time</label>
                            </li>
                            @foreach($time_ar as $time)
                                <li class="sf_li"  onclick="set_value_sf('av_to_time_blocked','{{$time}}','inp')">
                                    <label>{{$time}}</label>
                                </li>
                            @endforeach
                            <li class="li_after cursor-pointer" onclick="bottom_scroll('sf_time_ul2')"><i  style="font-size: 20px;font-weight: bold;" class="fa fa-angle-down"></i></li>
                        </ul>
                    </div>
                <!-- <select class="form-control" name="av_from_time" id="av_to_time">
                            <option value="">Time</option>
                            @foreach($time_ar as $time)
                    <option value="{{$time}}">{{$time}}</option>
                            @endforeach
                        </select> -->
                </div>
            </div>

                <div class="">
                    <div class="custom_sel">
                        <input type="text" id="description" class="form-control custom_sel_inp" placeholder="description" >
                        <span class="custom_sel_ic"></span>
                    </div>

                </div>
                
            </form>

        <button class="pop-button" id="save_blocked_btn" onclick="save_blocked_time()">save</button>
    </div>
</div>

<!-- blocked time  Modal -->


<!-- min timeslot booking Modal -->

<div class="popupContainer minTimeSlotModel" style="display: none;">
    <div class="popup mx-auto text-center">
        <div class="d-flex justify-content-center title-area align-items-center position-relative">
            <h3 class="poptitle mb-0">Minimum timeslot booking</h3>
            <button class="popclose">&times;</button>
        </div>
        <form class="d-grid  gap-2" id="blocked_time">
            <input type="hidden" id="av_team_member" value="0">


            <div class="">
                <!-- <input type="text" class="form-control" id="av_date" placeholder="Date - Date"> -->
                <span class="">
                        <span class="bx--form-item">
                            <span id="range" data-date-picker data-date-picker-type="range" data-date-picker-options-inline="true" class="bx--date-picker bx--date-picker--range">
                              <span class="bx--date-picker-container">
                                <input type="text" id="date-picker-1-mintimeslot" class="bx--date-picker__input" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="mm/dd/yyyy"
                                       data-date-picker-input-from />
                              </span>
                              <span class="dash">-</span>
                              <span class="bx--date-picker-container">
                                <input type="text" id="date-picker-2-mintimeslot" class="bx--date-picker__input" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="mm/dd/yyyy"
                                       data-date-picker-input-to />
                              </span>
                              <p class="ref"><img src="cross.png" alt="" onclick="refreshPage()"></p>
                              <svg data-date-picker-icon class="bx--date-picker__icon" width="17" height="19" viewBox="0 0 17 19">
                                <path d="M12 0h2v2.7h-2zM3 0h2v2.7H3z" />
                                <path d="M0 2v17h17V2H0zm15 15H2V7h13v10z" />
                                <path d="M9.9 15H8.6v-3.9H7.1v-.9c.9 0 1.7-.3 1.8-1.2h1v6z" />
                              </svg>
                            </span>
                        </span>
                    </span>
            </div>

            <div class="d-flex  align-items-center">
                <div style="flex:50%">
                    <div class="custom_sel">
                        <input type="text" id="av_from_day_mintimeslot" class="form-control custom_sel_inp" placeholder="Day" readonly>
                        <span class="custom_sel_ic"><i  style="font-size: 15px;font-weight: bold;" class="fa fa-angle-down"></i></span>
                        <ul>
                            <li class="sf_li"  onclick="set_value_sf('av_from_day_mintimeslot','','inp')">
                                <label>Day</label>
                            </li>
                            <li class="sf_li"  onclick="set_value_sf('av_from_day_mintimeslot','monday','inp')">
                                <label>Monday</label>
                            </li>
                            <li class="sf_li"  onclick="set_value_sf('av_from_day_mintimeslot','tuesday','inp')">
                                <label>Tuesday</label>
                            </li>
                            <li class="sf_li" onclick="set_value_sf('av_from_day_mintimeslot','wednesday','inp')">
                                <label>Wednesday</label>
                            </li>
                            <li class="sf_li" onclick="set_value_sf('av_from_day_mintimeslot','thursday','inp')">
                                <label>Thursday</label>
                            </li>
                            <li class="sf_li" onclick="set_value_sf('av_from_day_mintimeslot','friday','inp')">
                                <label>Friday</label>
                            </li>
                            <li class="sf_li" onclick="set_value_sf('av_from_day_mintimeslot','saturday','inp')">
                                <label>Saturday</label>
                            </li>
                            <li class="sf_li" onclick="set_value_sf('av_from_day_mintimeslot','sunday','inp')">
                                <label>Sunday</label>
                            </li>
                        </ul>
                    </div>

                </div>
                <div>&nbsp;-&nbsp;</div>
                <div style="flex:50%">
                    <div class="custom_sel">
                        <input type="text" id="av_to_day_mintimeslot" class="form-control custom_sel_inp" placeholder="Day" readonly>
                        <span class="custom_sel_ic"><i  style="font-size: 15px;font-weight: bold;" class="fa fa-angle-down"></i></span>
                        <ul>
                            <li class="sf_li"  onclick="set_value_sf('av_to_day_mintimeslot','','inp')">
                                <label>Day</label>
                            </li>
                            <li class="sf_li"  onclick="set_value_sf('av_to_day_mintimeslot','monday','inp')">
                                <label>Monday</label>
                            </li>
                            <li class="sf_li"  onclick="set_value_sf('av_to_day_mintimeslot','tuesday','inp')">
                                <label>Tuesday</label>
                            </li>
                            <li class="sf_li" onclick="set_value_sf('av_to_day_mintimeslot','wednesday','inp')">
                                <label>Wednesday</label>
                            </li>
                            <li class="sf_li" onclick="set_value_sf('av_to_day_mintimeslot','thursday','inp')">
                                <label>Thursday</label>
                            </li>
                            <li class="sf_li" onclick="set_value_sf('av_to_day_mintimeslot','friday','inp')">
                                <label>Friday</label>
                            </li>
                            <li class="sf_li" onclick="set_value_sf('av_to_day_mintimeslot','saturday','inp')">
                                <label>Saturday</label>
                            </li>
                            <li class="sf_li" onclick="set_value_sf('av_to_day_mintimeslot','sunday','inp')">
                                <label>Sunday</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div style="flex:1">

                    <div class="custom_sel">
                        <input type="text" id="av_from_time_mintimeslot" class="form-control custom_sel_inp" placeholder="Time" readonly>
                        <span class="custom_sel_ic"><i  style="font-size: 15px;font-weight: bold;" class="fa fa-angle-down"></i></span>
                        <ul class="sf_time_ul sf_time_ul1">
                            <li class="li_before cursor-pointer" onclick="top_scroll('sf_time_ul1')"><i  style="font-size: 20px;font-weight: bold;" class="fa fa-angle-up"></i></li>
                            <li class="sf_li"  onclick="set_value_sf('av_from_time_mintimeslot','','inp')">
                                <label>Time</label>
                            </li>
                            @foreach($time_ar as $time)
                                <li class="sf_li"  onclick="set_value_sf('av_from_time_mintimeslot','{{$time}}','inp')">
                                    <label>{{$time}}</label>
                                </li>
                            @endforeach
                            <li class="li_after cursor-pointer" onclick="bottom_scroll('sf_time_ul1')"><i  style="font-size: 20px;font-weight: bold;" class="fa fa-angle-down"></i></li>
                        </ul>
                    </div>

                <!-- <select class="form-control" name="av_from_time" id="av_from_time">
                            <option value="">Time</option>
                            @foreach($time_ar as $time)
                    <option value="{{$time}}">{{$time}}</option>
                            @endforeach
                        </select> -->
                </div>
                <div>&nbsp;-&nbsp;</div>
                <div style="flex:1">
                    <div class="custom_sel">
                        <input type="text" id="av_to_time_mintimeslot" class="form-control custom_sel_inp" placeholder="Time" readonly>
                        <span class="custom_sel_ic"><i  style="font-size: 15px;font-weight: bold;" class="fa fa-angle-down"></i></span>
                        <ul class="sf_time_ul sf_time_ul2">
                            <li class="li_before cursor-pointer" onclick="top_scroll('sf_time_ul2')"><i  style="font-size: 20px;font-weight: bold;" class="fa fa-angle-up"></i></li>
                            <li class="sf_li"  onclick="set_value_sf('av_to_time_mintimeslot','','inp')">
                                <label>Time</label>
                            </li>
                            @foreach($time_ar as $time)
                                <li class="sf_li"  onclick="set_value_sf('av_to_time_mintimeslot','{{$time}}','inp')">
                                    <label>{{$time}}</label>
                                </li>
                            @endforeach
                            <li class="li_after cursor-pointer" onclick="bottom_scroll('sf_time_ul2')"><i  style="font-size: 20px;font-weight: bold;" class="fa fa-angle-down"></i></li>
                        </ul>
                    </div>
                <!-- <select class="form-control" name="av_from_time" id="av_to_time">
                            <option value="">Time</option>
                            @foreach($time_ar as $time)
                    <option value="{{$time}}">{{$time}}</option>
                            @endforeach
                        </select> -->
                </div>
            </div>

            <div class="">
                <div class="custom_sel">
                    <input type="text" id="description" class="form-control custom_sel_inp" placeholder="description" >
                    <span class="custom_sel_ic"></span>
                </div>

            </div>

        </form>

        <button class="pop-button" id="save_blocked_btn" onclick="save_mintimeslot_time()">save</button>
    </div>
</div>

<!-- min timeslot booking  Modal -->


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

<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> -->

<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css"> -->
<style type="text/css">
/*.datepicker{width: 250px;max-width: 100%}*/
</style>
<!-- <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script> -->

<script src="{{ URL::asset('public/js/carbon-components.js')}}"></script>

<script type="text/javascript">
    const loc_type = localStorage.getItem('loc_type');
    console.log(loc_type);

    let aval_id = ''
    const icon1 = document.querySelector('.bx--date-picker__icon');
    icon1.addEventListener('click', function() {
        this.style.display = 'none';
    });
    
    function set_value_sf(id, vl, tp){
        if(tp=='inp'){
            $('#'+id).val(vl);
        }

        $('.custom_sel').removeClass('open');
    }


    $('.custom_sel_inp,.custom_sel_ic').on('click',function(){
        $('.custom_sel').removeClass('open');

            if($(this).closest('.custom_sel').hasClass('open')){
                $(this).closest('.custom_sel').removeClass('open');
            }
            else{
                $(this).closest('.custom_sel').addClass('open');
            }
        });

    $('.addAvailBtn').click(function () {
        let i = $(this).attr('data-i');
      
        $('#av_team_member').val(i);
        $('.addAvail').fadeIn();
    });
    $('.blockedTime').click(function () {
        let i = $(this).attr('data-i');
        $('#av_team_member').val(i);
       // $('#b_time').val(i);
        $('.blockTimeModel').fadeIn();
    });

    $('.minTimeSlotBooking').click(function () {
        let i = $(this).attr('data-i');
        $('#av_team_member').val(i);
        // $('#b_time').val(i);
        $('.minTimeSlotModel').fadeIn();
    });

    $(document).ready(function(){
        /*$('#av_date').daterangepicker({
            autoUpdateInput: false,
            minDate: moment(),
            applyButtonClasses:'cs_btns'    
        });
        $('#av_date').on('apply.daterangepicker', function(ev, picker) {
          let st = picker.startDate.format('DD/MM/YYYY');
          let ed = picker.endDate.format('DD/MM/YYYY');

          $('#av_date').val(st+' - '+ed);

        });*/

        /*$( "#av_from_date" ).datepicker( { 
              altField: ".dpYears",
              dateFormat: 'dd-mm-yy'
        });
        $( "#av_to_date" ).datepicker( { 
              altField: ".dpYears",
              dateFormat: 'dd-mm-yy'
        });*/

        $('.popclose').click(function () {
            $('.popupContainer').fadeOut();
            $('#av_team_member').val('');
        })
    });

    function save_availability(){
        console.log("aa11",$('#av_team_member').val())
        if(aval_id !== ''){


        if($('#av_team_member').val()==''){
            alert('Something went wrong.');
            return false;
        }

        let location = $('#av_location').val();

        if(location=='FL'){
            location='f';
        }else{
            location='d';
        }

        
        let av_date = $('#av_date').val();



        // let av_from_date='';
        // let av_to_date='';

        // if($.trim(av_date)!=''){
        //     let exp = av_date.split(' - ');
        //     if(exp['0'] && exp[1]){
        //        av_from_date = exp[0];
        //        av_to_date = exp[1];
        //     }
        // }

       
        let av_from_date = $('#date-picker-1').val();
        let av_to_date = $('#date-picker-2').val();
        let av_from_time = $('#av_from_time').val();
        let av_to_time = $('#av_to_time').val();
        let av_from_day = $('#av_from_day').val();
        let av_to_day = $('#av_to_day').val();
        let av_serv_interval = $('#av_serv_interval').val();

        if(av_serv_interval!=''){
            av_serv_interval = av_serv_interval.replace("min", "");
            av_serv_interval = av_serv_interval.replace("h", "");
        }

        let payload={
            'act':'edit_avail',
            'team_member':$('#av_team_member').val(),
            'location':location,
            'av_from_date':av_from_date,
            'av_to_date':av_to_date,
            'av_from_time':av_from_time,
            'av_to_time':av_to_time,
            'av_from_day':av_from_day,
            'av_to_day':av_to_day,
            'av_serv_interval':av_serv_interval,
            '_token':"{{csrf_token()}}",
            'availability_id':aval_id,
        }


      
      ///  return;

        $('#save_availability_btn').attr('disabled',true);
        $.ajax({
            url:'{{route("ajx_prof_setting")}}',
            type:'post',
            data:payload,
            dataType:'json',
            success:function(r){
                $('#save_availability_btn').attr('disabled',false);
                if(r.status=='SUCCESS'){

                    if(location=='f'){
                        location='FL';
                    }
                    else{
                        location='DL';
                    }

                    // let str = '<tr id="av_tr_'+aval_id+'">';
                    // str+='<td class="bdr_right bdr_top">'+location+'</td>';
                    // str+='<td class="bdr_right bdr_top">'+av_from_date;
                    // if(av_to_date!='')
                    //     str+=' - '+av_to_date;    
                    // str+='</td>';
                    // str+='<td class="bdr_right bdr_top">'+av_from_day;
                    // if(av_to_day!='')
                    //     str+=' - '+av_to_day;    
                    // str+='</td>';
                    // str+='<td class="bdr_right bdr_top">'+av_from_time;
                    // if(av_to_time!='')
                    //     str+=' - '+av_to_time;    
                    // str+='</td>';
                    // str+='<td class="bdr_right bdr_top">';
                    // if(av_serv_interval>='0')
                    //     str+=av_serv_interval+'min';    
                    // else
                    //     str+='No Interval';    
                    // str+='</td>';

                    // str+='<td class="bdr_top">';
                    // str += '<button class="EditButton" title="Edit" class="editTmAvailBtn"  onclick="Edit_client_data(\''+r.i+'\')">';
                    // str += '<i class="fa fa-pencil" aria-hidden="true"></i>';
                    // str += '</button>';
                    //     str+='<button class="DeleteButton" title="Delete" onclick="delete_tm_avail(\''+r.i+'\')">';
                    //         str+='<i class="fa fa-trash" aria-hidden="true"></i>';
                    //     str+='</button>';
                    //     str+='</td></tr>';

                    //     let elementId = 'av_tr_' + aval_id;
                    //     let existingElement = $('#' + elementId);
                    //     existingElement.replaceWith(str);


                    $('.popupContainer').fadeOut();
                    $('#av_team_member').val('');
                    reloadFunc();
                }
                else{
                    alert('Not Saved');
                }
            },
            error:function(){
                alert('Something went wrong');
                $('#save_availability_btn').attr('disabled',false);
            }

        })

        }
        else
        {
          
        if($('#av_team_member').val()==''){
            alert('Something went wrong.');
            return false;
        }

        let location = $('#av_location').val();

        if(location=='FL'){
            location='f';
        }else{
            location='d';
        }

        
        let av_date = $('#av_date').val();

        // let av_from_date='';
        // let av_to_date='';

        // if($.trim(av_date)!=''){
        //     let exp = av_date.split(' - ');
        //     if(exp['0'] && exp[1]){
        //        av_from_date = exp[0];
        //        av_to_date = exp[1];
        //     }
        // }

      
        let av_from_date = $('#date-picker-1').val();
        let av_to_date = $('#date-picker-2').val();
        let av_from_time = $('#av_from_time').val();
        let av_to_time = $('#av_to_time').val();
        let av_from_day = $('#av_from_day').val();
        let av_to_day = $('#av_to_day').val();
        let av_serv_interval = $('#av_serv_interval').val();

        if(av_serv_interval!=''){
            av_serv_interval = av_serv_interval.replace("min", "");
            av_serv_interval = av_serv_interval.replace("h", "");
        }

        let payload={
            'act':'save_avail',
            'team_member':$('#av_team_member').val(),
            'location':location,
            'av_from_date':av_from_date,
            'av_to_date':av_to_date,
            'av_from_time':av_from_time,
            'av_to_time':av_to_time,
            'av_from_day':av_from_day,
            'av_to_day':av_to_day,
            'av_serv_interval':av_serv_interval,
            '_token':"{{csrf_token()}}"
            

        }


      ///  return;

        $('#save_availability_btn').attr('disabled',true);
        $.ajax({
            url:'{{route("ajx_prof_setting")}}',
            type:'post',
            data:payload,
            dataType:'json',
            success:function(r){
                $('#save_availability_btn').attr('disabled',false);
                if(r.status=='SUCCESS'){

                    if(location=='f'){
                        location='FL';
                    }
                    else{
                        location='DL';
                    }

                    // let str = '<tr id="av_tr_'+r.i+'">';
                    // str+='<td class="bdr_right bdr_top">'+location+'</td>';
                    // str+='<td class="bdr_right bdr_top">'+av_from_date;
                    // if(av_to_date!='')
                    //     str+=' - '+av_to_date;    
                    // str+='</td>';
                    // str+='<td class="bdr_right bdr_top">'+av_from_day;
                    // if(av_to_day!='')
                    //     str+=' - '+av_to_day;    
                    // str+='</td>';
                    // str+='<td class="bdr_right bdr_top">'+av_from_time;
                    // if(av_to_time!='')
                    //     str+=' - '+av_to_time;    
                    // str+='</td>';
                    // str+='<td class="bdr_right bdr_top">';
                    // if(av_serv_interval>='0')
                    //     str+=av_serv_interval+'min';    
                    // else
                    //     str+='No Interval';    
                    // str+='</td>';

                    // str+='<td class="bdr_top">';
                    // str += '<button class="EditButton" title="Edit" class="editTmAvailBtn"  onclick="Edit_client_data(\''+r.i+'\')">';
                    // str += '<i class="fa fa-pencil" aria-hidden="true"></i>';
                    // str += '</button>';
                    //     str+='<button class="DeleteButton" title="Delete" onclick="delete_tm_avail(\''+r.i+'\')">';
                    //         str+='<i class="fa fa-trash" aria-hidden="true"></i>';
                    //     str+='</button>';
                    //     str+='</td></tr>';

                    // $('#tm_avail_tb').append(str);

                    $('.popupContainer').fadeOut();
                    $('#av_team_member').val('');
                    reloadFunc();
                }
                else{
                    alert('Not Saved');
                }
            },
            error:function(){
                alert('Something went wrong');
                $('#save_availability_btn').attr('disabled',false);
            }

        })
        }
       

    }

    function reloadFunc(){
        location.reload();
    }

    function EmptyAdd(){
    aval_id='';

    $('#av_location').val(''); 
    $('#date-picker-1').val(''); 
    $('#date-picker-2').val(''); 
    $('#av_from_time').val(''); 
    $('#av_to_time').val(''); 
    $('#av_from_day').val(''); 
    $('#av_to_day').val(''); 
    $('#av_serv_interval').val('');

        $('#date-picker-1-blocked').val('');
        $('#date-picker-2-blocked').val('');
        $('#av_from_time_blocked').val('');
        $('#av_to_time_blocked').val('');
        $('#av_from_day_blocked').val('');
        $('#av_to_day_blocked').val('');
        $('#description').val('');

    }

    function Edit_client_data(cl, index, ind,a) {

        console.log(cl);

    let i = cl;
    aval_id = cl

    // Retrieve data using JavaScript
    var fromDate = {!! json_encode($team_member) !!}; 

    var data = fromDate[ind].get_availablity[index];
    $('#av_location').val(data.location); 
    $('#date-picker-1').val(data.from_date); 
    $('#date-picker-2').val(data.to_date); 
    $('#av_from_time').val(data.from_time); 
    $('#av_to_time').val(data.to_time); 
    $('#av_from_day').val(data.from_day); 
    $('#av_to_day').val(data.to_day); 
    $('#av_serv_interval').val(data.serv_interval); 

    $('#av_team_member').val(data.team_member);
    $('.addAvail').fadeIn();
}

    function close_modal(m){
        $('#'+m).modal('hide');
    }

    function top_scroll(el){
        var y = $('.'+el).scrollTop();
        // $('.'+el).scrollTop(y+50);
        $('.'+el).scrollTop(y-50);
    }

    function bottom_scroll(el){
        var y = $('.'+el).scrollTop();
        $('.'+el).scrollTop(y+50);
    }

    function delete_tm_avail(id){

        if(!confirm('Are you sure to delete?'))return false;

        $.ajax({
            url:'{{route("ajx_prof_setting")}}',
            type:'post',
            data:{'act':'delete_avail','_token':"{{csrf_token()}}",'id':id,'status':'remove'},
            dataType:'json',
            success:function(r){
                if(r.status=='LOGIN'){
                    location.reload();
                }
                else if(r.status=='SUCCESS'){
                    location.reload();
                }
                else{
                    alert('Something went wrong with values.');
                }
            },
            error:function(e){
                alert('Something went wrong with values.');
            }
        })
    }

    /******************blocked time*****************************/

    function save_blocked_time(){
        if(aval_id !== ''){
            
            if($('#av_team_member').val()==''){
                alert('Something went wrong.');
                return false;
            }

            let av_date = $('#av_date').val();

            let av_from_date_blocked = $('#date-picker-1-blocked').val();
            let av_to_date_blocked = $('#date-picker-2-blocked').val();
            let av_from_time_blocked = $('#av_from_time_blocked').val();
            let av_to_time_blocked = $('#av_to_time_blocked').val();
            let av_from_day_blocked = $('#av_from_day_blocked').val();
            let av_to_day_blocked = $('#av_to_day_blocked').val();
            let description = $('#description').val();

            let payload={
                'act':'edit_blocked_time',
                'team_member':$('#av_team_member').val(),
                'av_from_date':av_from_date_blocked,
                'av_to_date':av_to_date_blocked,
                'av_from_day':av_from_day_blocked,
                'av_to_day':av_to_day_blocked,
                'av_from_time':av_from_time_blocked,
                'av_to_time':av_to_time_blocked,
                'description':description,
                '_token':"{{csrf_token()}}",
                'blocked_time_id':aval_id
            }

            console.log(payload);

            $('#save_blocked_btn').attr('disabled',true);
            $.ajax({
                url:'{{route("ajx_prof_setting")}}',
                type:'post',
                data:payload,
                dataType:'json',
                success:function(r){
                    $('#save_blocked_btn').attr('disabled',false);
                    if(r.status=='SUCCESS'){

                        // let str = '<tr id="av_tr_'+aval_id+'">';
                        // str+='<td class="bdr_right bdr_top">'+location+'</td>';
                        // str+='<td class="bdr_right bdr_top">'+av_from_date;
                        // if(av_to_date!='')
                        //     str+=' - '+av_to_date;
                        // str+='</td>';
                        // str+='<td class="bdr_right bdr_top">'+av_from_day;
                        // if(av_to_day!='')
                        //     str+=' - '+av_to_day;
                        // str+='</td>';
                        // str+='<td class="bdr_right bdr_top">'+av_from_time;
                        // if(av_to_time!='')
                        //     str+=' - '+av_to_time;
                        // str+='</td>';
                        // str+='<td class="bdr_right bdr_top">';
                        // if(av_serv_interval>='0')
                        //     str+=av_serv_interval+'min';
                        // else
                        //     str+='No Interval';
                        // str+='</td>';

                        // str+='<td class="bdr_top">';
                        // str += '<button class="EditButton" title="Edit" class="editTmAvailBtn"  onclick="Edit_client_data(\''+r.i+'\')">';
                        // str += '<i class="fa fa-pencil" aria-hidden="true"></i>';
                        // str += '</button>';
                        //     str+='<button class="DeleteButton" title="Delete" onclick="delete_tm_avail(\''+r.i+'\')">';
                        //         str+='<i class="fa fa-trash" aria-hidden="true"></i>';
                        //     str+='</button>';
                        //     str+='</td></tr>';

                        //     let elementId = 'av_tr_' + aval_id;
                        //     let existingElement = $('#' + elementId);
                        //     existingElement.replaceWith(str);


                        $('.popupContainer').fadeOut();
                        $('#av_team_member').val('');
                        reloadFunc();
                    }
                    else{
                        alert('Not Saved');
                    }
                },
                error:function(){
                    alert('Something went wrong');
                    $('#save_blocked_btn').attr('disabled',false);
                }

            })

        }
        else
        {

            if($('#av_team_member').val()==''){
                alert('Something went wrong.');
                return false;
            }
            let av_date = $('#av_date').val();

            let av_from_date_blocked = $('#date-picker-1-blocked').val();
            let av_to_date_blocked = $('#date-picker-2-blocked').val();
            let av_from_time_blocked = $('#av_from_time_blocked').val();
            let av_to_time_blocked = $('#av_to_time_blocked').val();
            let av_from_day_blocked = $('#av_from_day_blocked').val();
            let av_to_day_blocked = $('#av_to_day_blocked').val();
            let description = $('#description').val();
            

            let payload={
                'act':'save_blocked_time',
                'team_member':$('#av_team_member').val(),
                'av_from_date':av_from_date_blocked,
                'av_to_date':av_to_date_blocked,
                'av_from_time':av_from_time_blocked,
                'av_to_time':av_to_time_blocked,
                'av_from_day':av_from_day_blocked,
                'av_to_day':av_to_day_blocked,
                'description':description,
                '_token':"{{csrf_token()}}"

            }

            console.log(payload);

            $('#save_blocked_btn').attr('disabled',true);
            $.ajax({
                url:'{{route("ajx_prof_setting")}}',
                type:'post',
                data:payload,
                dataType:'json',
                success:function(r){
                    $('#save_blocked_btn').attr('disabled',false);
                    if(r.status=='SUCCESS'){

                        $('.popupContainer').fadeOut();
                        $('#av_team_member').val('');
                        reloadFunc();
                    }
                    else{
                        alert('Not Saved');
                    }
                },
                error:function(){
                    alert('Something went wrong');
                    $('#save_blocked_btn').attr('disabled',false);
                }

            })
        }


    }

    function delete_tm_blocked_time(id){

        if(!confirm('Are you sure to delete?'))return false;

        $.ajax({
            url:'{{route("ajx_prof_setting")}}',
            type:'post',
            data:{'act':'delete_blocked_time','_token':"{{csrf_token()}}",'id':id,'status':'remove'},
            dataType:'json',
            success:function(r){
                if(r.status=='LOGIN'){
                    location.reload();
                }
                else if(r.status=='SUCCESS'){
                    location.reload();
                }
                else{
                    alert('Something went wrong with values.');
                }
            },
            error:function(e){
                alert('Something went wrong with values.');
            }
        })
    }

    function Edit_client_data_blocked(cl, index, ind,a) {

        let i = cl;
        aval_id = cl

        // Retrieve data using JavaScript
        var fromDate = {!! json_encode($team_member) !!};

        var data = fromDate[ind].get_blocked_time[index];
        $('#av_location').val(data.location);
        $('#date-picker-1-blocked').val(data.from_date);
        $('#date-picker-2-blocked').val(data.to_date);
        $('#av_from_time_blocked').val(data.from_time);
        $('#av_to_time_blocked').val(data.to_time);
        $('#av_from_day_blocked').val(data.from_day);
        $('#av_to_day_blocked').val(data.to_day);
        $('#description').val(data.description);

        $('#av_team_member').val(data.team_member);
        $('.blockTimeModel').fadeIn();
    }

    /******************min timeslot booking time*****************************/

    function save_mintimeslot_time(){
        if(aval_id !== ''){

            if($('#av_team_member').val()==''){
                alert('Something went wrong.');
                return false;
            }

            let av_date = $('#av_date').val();

            let av_from_date_blocked = $('#date-picker-1-blocked').val();
            let av_to_date_blocked = $('#date-picker-2-blocked').val();
            let av_from_time_blocked = $('#av_from_time_blocked').val();
            let av_to_time_blocked = $('#av_to_time_blocked').val();
            let av_from_day_blocked = $('#av_from_day_blocked').val();
            let av_to_day_blocked = $('#av_to_day_blocked').val();
            let description = $('#description').val();

            let payload={
                'act':'edit_mintimeslot_time',
                'team_member':$('#av_team_member').val(),
                'av_from_date':av_from_date_blocked,
                'av_to_date':av_to_date_blocked,
                'av_from_day':av_from_day_blocked,
                'av_to_day':av_to_day_blocked,
                'av_from_time':av_from_time_blocked,
                'av_to_time':av_to_time_blocked,
                'description':description,
                '_token':"{{csrf_token()}}",
                'blocked_time_id':aval_id
            }

            console.log(payload);

            $('#save_blocked_btn').attr('disabled',true);
            $.ajax({
                url:'{{route("ajx_prof_setting")}}',
                type:'post',
                data:payload,
                dataType:'json',
                success:function(r){
                    $('#save_blocked_btn').attr('disabled',false);
                    if(r.status=='SUCCESS'){

                        // let str = '<tr id="av_tr_'+aval_id+'">';
                        // str+='<td class="bdr_right bdr_top">'+location+'</td>';
                        // str+='<td class="bdr_right bdr_top">'+av_from_date;
                        // if(av_to_date!='')
                        //     str+=' - '+av_to_date;
                        // str+='</td>';
                        // str+='<td class="bdr_right bdr_top">'+av_from_day;
                        // if(av_to_day!='')
                        //     str+=' - '+av_to_day;
                        // str+='</td>';
                        // str+='<td class="bdr_right bdr_top">'+av_from_time;
                        // if(av_to_time!='')
                        //     str+=' - '+av_to_time;
                        // str+='</td>';
                        // str+='<td class="bdr_right bdr_top">';
                        // if(av_serv_interval>='0')
                        //     str+=av_serv_interval+'min';
                        // else
                        //     str+='No Interval';
                        // str+='</td>';

                        // str+='<td class="bdr_top">';
                        // str += '<button class="EditButton" title="Edit" class="editTmAvailBtn"  onclick="Edit_client_data(\''+r.i+'\')">';
                        // str += '<i class="fa fa-pencil" aria-hidden="true"></i>';
                        // str += '</button>';
                        //     str+='<button class="DeleteButton" title="Delete" onclick="delete_tm_avail(\''+r.i+'\')">';
                        //         str+='<i class="fa fa-trash" aria-hidden="true"></i>';
                        //     str+='</button>';
                        //     str+='</td></tr>';

                        //     let elementId = 'av_tr_' + aval_id;
                        //     let existingElement = $('#' + elementId);
                        //     existingElement.replaceWith(str);


                        $('.popupContainer').fadeOut();
                        $('#av_team_member').val('');
                        reloadFunc();
                    }
                    else{
                        alert('Not Saved');
                    }
                },
                error:function(){
                    alert('Something went wrong');
                    $('#save_blocked_btn').attr('disabled',false);
                }

            })

        }
        else
        {

            if($('#av_team_member').val()==''){
                alert('Something went wrong.');
                return false;
            }
            let av_date = $('#av_date').val();

            let av_from_date_blocked = $('#date-picker-1-blocked').val();
            let av_to_date_blocked = $('#date-picker-2-blocked').val();
            let av_from_time_blocked = $('#av_from_time_blocked').val();
            let av_to_time_blocked = $('#av_to_time_blocked').val();
            let av_from_day_blocked = $('#av_from_day_blocked').val();
            let av_to_day_blocked = $('#av_to_day_blocked').val();
            let description = $('#description').val();


            let payload={
                'act':'save_mintimeslot_time',
                'team_member':$('#av_team_member').val(),
                'av_from_date':av_from_date_blocked,
                'av_to_date':av_to_date_blocked,
                'av_from_time':av_from_time_blocked,
                'av_to_time':av_to_time_blocked,
                'av_from_day':av_from_day_blocked,
                'av_to_day':av_to_day_blocked,
                'description':description,
                '_token':"{{csrf_token()}}"

            }

            console.log(payload);

            $('#save_blocked_btn').attr('disabled',true);
            $.ajax({
                url:'{{route("ajx_prof_setting")}}',
                type:'post',
                data:payload,
                dataType:'json',
                success:function(r){
                    $('#save_blocked_btn').attr('disabled',false);
                    if(r.status=='SUCCESS'){

                        $('.popupContainer').fadeOut();
                        $('#av_team_member').val('');
                        reloadFunc();
                    }
                    else{
                        alert('Not Saved');
                    }
                },
                error:function(){
                    alert('Something went wrong');
                    $('#save_blocked_btn').attr('disabled',false);
                }

            })
        }


    }

</script>

</body>
</html>