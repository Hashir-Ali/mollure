@include('salon/header1')
<head>
  
<link
      rel="stylesheet"
      data-purpose="Layout StyleSheet"
      title="Web Awesome"
      href="/css/app-wa-9a55d8748fd46de7b7977d9ee8dee7a4.css?vsn=d"
    >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-solid.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-regular.css"
      >

      <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.4.2/css/sharp-light.css"
      >
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
  border: 1px solid #EFEFEF;
  border-radius: 8px;
}
.top_nav{
  width: 32%;
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
.flt_sec{padding: 10px;justify-content: end;align-items: center;border-radius: 5px 5px 0px 0px;}
.flt_sec .setting_span, .flt_sec .filter_span, .flt_sec .add_span, .flt_sec .action_span, .delete_span{
  background: #FFFFFF;
  border: 1px solid #B3B3B3;
  border-radius: 33px;
  color: #000000;
  font-size: 16px;
  line-height: 21px;
  padding: 8px 20px;
  display: block;
  margin-right: 20px;
  display: flex;
  align-items:center;
}
.flt_sec .notif_span{
  display: block;
  color: #B3B3B3;
}
.abvr_btn{
  background: #e8f7f8;
  color: #000000;
  font-weight: 600;
  font-size: 18px;
  line-height: 24px;
  text-align: center;
  border: none;
  border-radius: 8px;
  padding: 13px 15px;
}
.cale_scl, .cale_scr{
  width: 50px;
  text-align: center;
  padding: 12px 0;
  background: white;
}
.cale_scl{
  border-top-left-radius: 8px;
  border-bottom-left-radius: 8px;
}
.cale_scr{
  border-top-right-radius: 8px;
  border-bottom-right-radius: 8px;
}
.cale_scr_day_sec{
  max-width: 500px;
  overflow-y: hidden;
  overflow-x: scroll;
  white-space: nowrap;
  background: #fff;
}
.cale_scr_day_sec::-webkit-scrollbar {display: none;}
.cale_scr_ssec{
  width: 35%;
    text-align: center;
    padding: 2px;
    min-width: 100px;
    display: inline-block;
    background: white;
    margin-left: -4px;
}
.cale_scr_ssec span{
  display: block;
  padding: 10px 0;
  border-radius: 5px;
}
.cale_scr_ssec:not(:last-child) {
    border-right: 1px solid #EFEFEF;
}
.cale_scr_ssec.active span{
    background: #e8f7f8;
}
.mon_sec{
  margin-top: 15px;
  display: flex;
  align-items:center;
  color: #000000;
}
.mon_spn{
  display: block;
  padding: 0px 30px;
  font-weight: 600;
font-size: 20px;
line-height: 27px;
}

  .custom_sel{position: relative;}
  .custom_sel ul.one_rw, .fltr_ul_sec{background: #fff;
        position: absolute;
        z-index: 1;
        width: fit-content;
        min-width: 200px;
        list-style: none;
        padding: 7px 20px;
        margin-top: 10px;
        border-radius: 8px;
        box-shadow: 0px 0px 20px rgba(16, 8, 63, 0.09);
        display: none;
        font-size: 14px;
    }
    .custom_sel.open ul.one_rw, .custom_sel.open .fltr_ul_sec{display: block;right: -22px;}
    .custom_sel ul.one_rw li{padding: 10px 2px;display: flex;justify-content: space-between;}
    .custom_sel ul.one_rw li:not(:first-child){border-top: 1px solid #e9e9e9}
    .custom_sel ul.one_rw li input{width: 20px;height: 20px;top: -2px;    vertical-align: middle;}
     .custom_sel ul.one_rw li input:checked{color: red;background-color: red !important;}
    .custom_sel_ic{cursor: pointer;}
    .custom_sel.open .custom_sel_ic:not(.flt){
        -webkit-transform: rotate(180deg);
        -moz-transform: rotate(180deg);
        -o-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg);
    }

    .fltr_ul_sec{
      width: 450px;
    }
    ul.fltr_ul{
      float: left;
      list-style: none;
      padding: 7px 12px;
      margin-top: 10px;  
    }
    ul.fltr_ul li{
      padding: 4px;
      display: flex;
      justify-content: space-between;
    }
    ul.fltr_ul li .custom_check{
      margin-left: 10px
    }
    ul.fltr_ul li:first-child{
      font-weight: 600;
      font-size: 16px;
      line-height: 21px;
    }
    ul.fltr_ul li:not(:first-child){
      font-size: 14px;
      line-height: 19px;    
      text-transform: capitalize;
      color: #323232;
    }

    .custom_sel ul.fltr_ul li input{
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }
    .custom_sel ul.fltr_ul li .checkmark{
        height: 14px;
        width: 14px;
        background-color: #fff;
        border: 1px solid #c3c3c3;
        display: block;
        border-radius: 2px;
        margin-top: 3px !important;
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
    .custom_sel ul.fltr_ul li .checkmark:after {
      /*left: 9px;
      top: 5px;*/
        margin-left: 4px;
        width: 4px;
        margin-top: 1px;
        height: 8px;
        border: solid #66C68F;
        border-width: 0 1px 1px 0;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg);
    }

    .custom_sel ul.fltr_ul li input:checked ~ .checkmark {
        border-color: #66C68F;
    }
    .action_ul li span{
      font-weight: 400;
      font-size: 14px;
      line-height: 19px;
      text-transform: capitalize;
      /* color: #656565; */
    }
    .tm_img{
      width: 60px;
      height: 60px;
      border-radius: 50%;
    }
    .sel_team_member_sel{
      min-width: 40%;
    }
    .tm_sec span{
      display: block;
      margin: auto;
      text-align: center;
    }
    .fiter_sec1{
      width: 50%;
    }
    .search_box .serach_inp{
      background: #FFFFFF;
      border: 1px solid #EFEFEF;
      border-radius: 6px;
      width: 392px;
      height: 50px;
      max-width: 100%;
      padding: 10px
    }
    .search_box{
      position: relative;
      margin-right: 20px;
    }
    .search_ic_spn{
      position: absolute;
      right: 12px;
      top: 13px;
      color: #ababab;
    }
    .booking_calendar_sec{
      padding: 40px;
      width: 100%;
    }
    .booking_calendar_sec .calendar_tbl{
      width: 100%;
      border-collapse: separate;
      border-spacing: 0;
    }
    .booking_calendar_sec .calendar_tbl thead tr td{
      font-weight: 500;
      font-size: 38px;
      line-height: 51px;
    }
    .booking_calendar_sec .calendar_tbl thead tr td span{
      font-weight: 500;
      font-size: 16px;
      line-height: 21px;
    }
    .booking_calendar_sec .calendar_tbl tbody td{
      vertical-align: top;
    }
    .booking_calendar_sec .calendar_tbl tbody td .bk_sec{
      min-height: 45px;
      /*min-width: 150px;*/
      padding: 4px;
          max-width: 300px;
    }
    .bk_sec .bk_t_s span{ 
      font-size: 10px;
    }
    .bk_status_spn{
      border-radius: 2px;
      background: #66C68F;
      padding: 2px 6px;
      color: #fff;
    }
    .bk_t2_s{
      margin: 2px 1px;
    }
    .bk_time{font-size: 12px}
    .acc_btn{
      background: #66C68F;
      border-radius: 2px;
      /*width: 48px;*/
      height: 19px;
      padding: 2px 8px;
      color: #FFFFFF;
      line-height: 13px;
      font-size: 10px;
      border: none;
    }
    .rej_btn{
      background: #F16060;
      border-radius: 2px;
      /*width: 48px;*/
      height: 19px;
      padding: 2px 8px;
      color: #FFFFFF;
      line-height: 13px;
      font-size: 10px;
      border: none;
    }
    .bk_srv{
      font-weight: 400;
      font-size: 12px;
      line-height: 16px;
    }
    
    .bk_cs_name, .bk_lct, .bk_note {
      font-size: 10px;
      line-height: 13px;
      display: block;
      margin-top: 5px;
    }
    .bk_msg{
      background: #21B8BF;
      border: 0.5px solid #21B8BF;
      border-radius: 2px;
      width: 58px;
      height: 19px;
      font-weight: 400;
      font-size: 10px;
      line-height: 13px;
      text-align: center;
      color: #FFFFFF;
      margin-top: 14px;
    }

    .bk_clr1{
      background-color: #fff4d3;
    }
    .tm_bk_tb_nm{display: block;line-height: 14px;margin-bottom: -10px}
    .tm_bk_tb_nm img{width: 50px;
    height: 50px;
    border: 1px solid #e9e9e9;}
    .bk_sec.active{box-shadow: 0px 0px 11px -1px #bbbbbb}

/* Niraj */
.setting_span span,
.filter_span span,
.add_span span,
.action_span span{
  margin-top:-2px;
}
.ico{
  margin-top:-5px;
}

/* PopUps */
#popupWrapper {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7);
  z-index: 9999;
}

.poptitle {
  font-weight: 700;
  font-size: 18px;
  line-height: 3px;
  text-align: center;
  color: #000000;
  margin-top: 5px;
}

.cross-symbol {
  font-size: 16px;
  font-weight: 300;
}

#popupContent {
  position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
background-color: #fff;
padding: 30px;
border-radius: 12px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
width: 562px;
height: 587px;
text-align: center;
font-family: 'Playfair Display', serif !important;
}

#closePopupButton {
  position: absolute;
  top: 10px;
  cursor: pointer;
  font-size: 20px;
  background: transparent;
border: none;
outline: none;
position: absolute;
right: 25px;
font-weight: bold;
font-size: 25px;
}

button {
  margin-top: 10px;
}

#saveButton {
  width: 100%;
  width: 100%;
  background: #66C68F;
  border: none;
  height: 45px;
  color: white;
  border-radius: 8px;
  width: 50%;
}
.clear{
  background: white;
  border: 1px solid rgb(0, 0, 0, 0.2);
  border-radius: 10px;
  padding: 6px 36px;
  float: right;
  margin-top: 20px;
}

.cleardiv , .savediv{
  width: 100%;
  display: inline-block;
}

.table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
  margin-top: 15px;
}
.setting_calender_table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
  border: 1px solid #E4E4E4;
  border-radius: 8px;
}
tr td{
  padding-top: 10px;
  padding-bottom: 10px;
  font-size: 15px;
}
.bdr_right {
  border-top: 1px solid #EFEFEF;
}
li label span{
  cursor: pointer;
}


#SetpopupWrapper {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7);
  z-index: 9999;
}

#SetpopupContent {
  position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
background-color: #fff;
padding: 30px;
border-radius: 12px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
width: 377px;
height: 270px;
text-align: center;
font-family: 'Playfair Display', serif !important;
}

#SetclosePopupButton {
  position: absolute;
  top: 10px;
  cursor: pointer;
  font-size: 20px;
  background: transparent;
border: none;
outline: none;
position: absolute;
right: 25px;
font-weight: bold;
font-size: 25px;
}

#SetsaveButton {
  width:100%;
  width: 100%;
background: #66C68F;
border: none;
height: 45px;
color: white;
border-radius: 8px;
margin-top: 18px;
}

.Setpoptitle {
  font-weight: 700;
  font-size: 18px;
  line-height: 24px;
  text-align: center;
  color: #000000;
  margin-top: -6px;
}
.sv-checkbox {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 14px;
  height: 14px;
  border: 1px solid rgb(0, 0, 0, 0.2);
  border-radius: 2px;
  right: 78px;
  position: absolute;
  margin-top: -17px;
  cursor: pointer;
}
#tick1, #tick2, #tick3, #tick4 {
  display: none;
  font-size: 9px !important;
  font-weight: 700;
  margin-left: 0.5px;
  margin-top: 0.5px;
}
.Setleb{
  margin-top: 10px;
  display: block;
}
.fa-check {
  color: rgba(102, 198, 143, 1);
  font-size: 8px !important;
}

#BookpopupWrapper {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7);
  z-index: 9999;
  overflow-y: scroll;
}

.Bookpoptitle {
  font-weight: 700;
  font-size: 18px;
  line-height: 3px;
  text-align: center;
  color: #000000;
  margin-top: 5px;
}

#BookpopupContent {
  position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
background-color: #fff;
padding: 30px;
border-radius: 12px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
width: 804px;
height: 829px;
text-align: center;
font-family: 'Playfair Display', serif !important;
margin-top: 13rem;
}

.Bookcleardiv {
  display: flex;
}

#BookclosePopupButton {
  position: absolute;
  top: 10px;
  cursor: pointer;
  font-size: 20px;
  background: transparent;
border: none;
outline: none;
position: absolute;
right: 25px;
font-weight: bold;
font-size: 25px;
}

button {
  margin-top: 10px;
}
.cname{
  float:left;
  margin-top:10px;
}
.Book_calender_table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
  border: 1px solid #E4E4E4;
  border-radius: 8px;
}
th{
  text-align: center;
  padding: 10px 10px;
  color: white;
  background-color: #66C68F;
  border-radius: 7px 7px 0px 0px;
}
td{
  padding: 20px 10px;
}
input{
  border: 1px solid #EFEFEF;
  border-radius: 4px;
  padding: 6px;
}
.service ,.tfield{
  border: none;
  background-color: #66C68F;
  border-radius: 64px;
  color: white;
  padding: 7px 25px;
}

#NewpopupWrapper {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7);
  z-index: 9999;
  overflow-y: scroll;
}

.Newpoptitle {
  font-weight: 700;
  font-size: 18px;
  line-height: 3px;
  text-align: center;
  color: #000000;
  margin-top: 5px;
}

#NewpopupContent {
  position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
background-color: #fff;
padding: 30px;
border-radius: 12px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
width: 804px;
height: 1025px;
text-align: center;
font-family: 'Playfair Display', serif !important;
margin-top: 13rem;
}

.Newcleardiv {
  display: flex;
}

#NewclosePopupButton {
  position: absolute;
  top: 10px;
  cursor: pointer;
  font-size: 20px;
  background: transparent;
border: none;
outline: none;
position: absolute;
right: 25px;
font-weight: bold;
font-size: 25px;
}
.New_calender_table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
  border: 1px solid #E4E4E4;
  border-radius: 8px;
}
.photo{
  float: right;
  background-color: #D3EAEB;
  border: none;
  border-radius: 10px;
  margin-top: 6rem;
  padding: 5px 24px;
}
.clname{
  border-radius:10px;
  width: 10.6rem;
}
#PaypopupWrapper {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7);
  z-index: 9999;
  overflow-y: scroll;
}

.Paypoptitle {
  font-weight: 700;
  font-size: 18px;
  line-height: 3px;
  text-align: center;
  color: #000000;
  margin-top: 5px;
}

#PaypopupContent {
  position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
background-color: #fff;
padding: 30px;
border-radius: 12px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
width: 465px;
height: 452px;
text-align: center;
font-family: 'Playfair Display', serif !important;
/* margin-top: 13rem; */
}

.Paycleardiv {
  display: flex;
}

#PayclosePopupButton {
  position: absolute;
  top: 10px;
  cursor: pointer;
  font-size: 20px;
  background: transparent;
border: none;
outline: none;
position: absolute;
right: 25px;
font-weight: bold;
font-size: 25px;
}
.Pay_calender_table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
  border: 1px solid #E4E4E4;
  border-radius: 8px;
}
dl, ol, ul {
  margin-bottom: 0rem !important;
}
#PaysaveButton {
  width:100%;
  width: 100%;
background: #66C68F;
border: none;
height: 45px;
color: white;
border-radius: 8px;
margin-top: 18px;
}

</style>

<!--Tabs Start-->
<div class="container mb-4">
   <ul class="nav nav-pills nav-fill">
      <li class="nav-item">
         <a class="nav-link active pg_ttl" aria-current="page" href="#">Calendar</a>
      </li>
   </ul>
</div>
<!--Tabs End-->

<div class="container">
  <div class="top_nav_sec d-flex">
    <div class="top_nav bdr_right active">
      <span>Bookings</span>
    </div>
    <div class="top_nav bdr_right">
      <span>Setting</span>
    </div>
    <div class="top_nav">
      <span>Client List</span>
    </div>
  </div>

  <div class="flt_sec d-flex bg-grey mt-40">
    <div class="setting_span"><span>Settings &nbsp;</span>  
      <div class='custom_sel'>
          <span class="custom_sel_ic flt" style="right:14px"><img class="ico" src="https://cynnaenterprises.com/mollure/public/images/Icons/first Icons copy/Interface/Settings.svg" alt="" width="20"></span>
      </div>
    </div>
    <div class="filter_span"><span>Filter &nbsp;</span>
      <div class='custom_sel'>
          <span class="custom_sel_ic flt" style="right:14px"><img class="ico" src="https://cynnaenterprises.com/mollure/public/images/Icons/first Icons copy/Interface/Slider_03.svg" alt="" width="20"></span>
          <div class="fltr_ul_sec">
            <ul class="fltr_ul">
              <li>
                TM:
              </li>
            @foreach($all_team_member as $tms)
              <li class="sf_tm_li">
                  <label for="sf_tm_chk_tma">{{$tms->member}}</label>
                  <label class="custom_check">
                      <input type="checkbox" class="sf_tm_chk" id="sf_tm_chk_tma" name="tm[]" value="{{$tms->id}}">
                      <span class="checkmark"></span>
                  </label>
              </li>
              @endforeach
              
            </ul>

            <ul class="fltr_ul">
              <li>
                Location:
              </li>
              <li class="sf_lct_li">
                  <label for="sf_lct_chk_all">All</label>
                  <label class="custom_check">
                      <input type="checkbox" class="sf_lct_chk" id="sf_lct_chk_all" name="lct[]">
                      <span class="checkmark"></span>
                  </label>
              </li>
              <li class="sf_lct_li">
                  <label for="sf_lct_chk_fl">FL</label>
                  <label class="custom_check">
                      <input type="checkbox" class="sf_lct_chk" id="sf_lct_chk_fl" name="lct[]">
                      <span class="checkmark"></span>
                  </label>
              </li>
              <li class="sf_lct_li">
                  <label for="sf_lct_chk_dl">DL</label>
                  <label class="custom_check">
                      <input type="checkbox" class="sf_lct_chk" id="sf_lct_chk_dl" name="lct[]">
                      <span class="checkmark"></span>
                  </label>
              </li>
            </ul>

            <ul class="fltr_ul">
              <li>
                Booking:
              </li>
              <li class="sf_bk_li">
                  <label for="sf_bk_chk_all">All</label>
                  <label class="custom_check">
                      <input type="checkbox" class="sf_bk_chk" id="sf_bk_chk_all" name="bk[]">
                      <span class="checkmark"></span>
                  </label>
              </li>
              <li class="sf_bk_li">
                  <label for="sf_bk_chk_on">Online</label>
                  <label class="custom_check">
                      <input type="checkbox" class="sf_bk_chk" id="sf_bk_chk_on" name="bk[]">
                      <span class="checkmark"></span>
                  </label>
              </li>
              <li class="sf_bk_li">
                  <label for="sf_bk_chk_of">Offline</label>
                  <label class="custom_check">
                      <input type="checkbox" class="sf_bk_chk" id="sf_bk_chk_of" name="bk[]">
                      <span class="checkmark"></span>
                  </label>
              </li>
              <li class="sf_bk_li">
                  <label for="sf_bk_chk_ph">Photoshoot</label>
                  <label class="custom_check">
                      <input type="checkbox" class="sf_bk_chk" id="sf_bk_chk_ph" name="bk[]">
                      <span class="checkmark"></span>
                  </label>
              </li>

            </ul>
          </div>
          
      </div>
    </div>
    <div class="add_span"><span>Add &nbsp;</span>
      <div class='custom_sel'>
          <span class="custom_sel_ic flt" style="right:14px"><i class="fw-bold fa fa-angle-down"></i></span>
          <ul class="add_ul one_rw">
              <li class="bcolor">
                  <label>
                      <span>Background colour</span>
                  </label>
              </li>
              <li>
                  <label>
                      <span class="newApp">New Appointment</span>
                  </label>
              </li>
          </ul>
      </div>
    </div>
    <div class="action_span"><span>Action &nbsp;</span>
      <div class='custom_sel'>
          <span class="custom_sel_ic flt" style="right:14px"><i class="fw-bold fa fa-angle-down"></i></span>
          <ul class="action_ul one_rw">
              <li>
                  <label>
                      <span class="editbook">Edit Bookings</span>
                  </label>
              </li>
              <li>
                  <label>
                      <span class="checkout">Checkout Booking</span>
                  </label>
              </li>
              <li>
                  <label>
                      <span>Cancel Booking</span>
                  </label>
              </li>
          
          </ul>
      </div>
    </div>
    <span class="notif_span"><img id="toggleButton" src="https://cynnaenterprises.com/mollure/public/images/Icons/first Icons copy/PNGS/Group 1000007637.png" alt="" width="20"></span>
  </div>

  <div class="justify-content-end d-flex mt-20 mb-20">
    <button type="button" class="abvr_btn">Abbreviations <i class="fa fa-info-circle"></i></button>
  </div>

  <div class="text-center bg-grey p-20">
    <div class="cl1_sec d-flex justify-content-center">
      <div class="cale_scl bdr_right">
        <i class="fw-bold fa fa-angle-left"></i>
      </div>
      <div class="cale_scr_day_sec">
        <div class="cale_scr_ssec"><span>Today</span></div>
        <div class="cale_scr_ssec active"><span>Day</span></div>
        <div class="cale_scr_ssec"><span>Week</span></div>
        <div class="cale_scr_ssec"><span>Month</span></div>
      </div>
      <div class="cale_scr bdr_left">
        <i class="fw-bold fa fa-angle-right"></i>
      </div>
    </div>

    <div class="cl2_sec d-flex justify-content-center">
      <div class="mon_sec">
        <span><i class="fw-bold fa fa-angle-left"></i></span>
        <span class="mon_spn">Apr, 2023</span>
        <span><i class="fw-bold fa fa-angle-right"></i></span>
      </div>
    </div>
  </div>

  <div class="d-flex justify-content-between mt-40">
    <div class="sel_team_member_sel d-flex justify-content-start">

      
    </div>
    <div class="fiter_sec1 d-flex justify-content-end align-items-center">
      <div class="search_box">
        <input class="serach_inp" type="text" placeholder="Client Name & Booking ID">
        <span class="search_ic_spn"><i class="fa fa-search"></i></span>
      </div>
      <div class="delete_span">Delete &nbsp;
      <div class='custom_sel'>
          <span class="custom_sel_ic flt" style="right:14px"><i class="fw-bold fa fa-angle-down"></i></span>
          <ul class="delete_ul one_rw">
              <li>
                  <label>
                      <span>Delete Message</span>
                  </label>
              </li>
              
          </ul>
      </div>
    </div>
    </div>
  </div>

</div>

<div class="booking_calendar_sec">
  <table class="calendar_tbl clt_tm">
    <thead>
      <tr>
        <td></td>
        <?php
          $monday = strtotime('monday this week');
          $tuesday = strtotime('tuesday this week');
          $wednesday = strtotime('wednesday this week');
          $thursday = strtotime('thursday this week');
          $friday = strtotime('friday this week');
          $saturday = strtotime('saturday this week');
          $sunday = strtotime('sunday this week');
        ?>
        <td class="text-center">{{ date('d',$monday)}} <span>{{ date('l',$monday)}}</span></td>
        <td class="text-center">{{ date('d',$tuesday)}} <span>{{ date('l',$tuesday)}}</span></td>
        <td class="text-center">{{ date('d',$wednesday)}} <span>{{ date('l',$wednesday)}}</span></td>
        <td class="text-center">{{ date('d',$thursday)}} <span>{{ date('l',$thursday)}}</span></td>
        <td class="text-center">{{ date('d',$friday)}} <span>{{ date('l',$friday)}}</span></td>
        <td class="text-center">{{ date('d',$saturday)}} <span>{{ date('l',$saturday)}}</span></td>
        <td class="text-center">{{ date('d',$sunday)}} <span>{{ date('l',$sunday)}}</span></td>
      </tr>
    </thead>
    <!-- <tbody id="tm_bks">
    </tbody> -->
    <tbody id="tm_bks">
      <!-- <tr>
        <td>7:00</td>
        <td class="bdr_top bdr_left border-top-left-radius bk_clr1" rowspan="2">
          <div class="bk_sec">
            <div class="bk_t_s d-flex justify-content-between">
              <div><span>1234</span> <span><i class="fa fa-camera"></i></span> <span class="bk_status_spn f-8">Confirmed</span></div>
              <div><span class="f-8">Online</span></div>
            </div>
            <div class="bk_t2_s d-flex justify-content-between align-items-center">
              <span class="f-8"><i class="fa fa-calendar"></i></span>
              <span class="f-10">Edit Request</span>
            </div>
            <div class="bk_t3_s d-flex justify-content-between align-items-center">
              <div class="bk_time">
                7:00 - 9:00
              </div>
              <div class="bk_btn_s">
                <button type="button" class="acc_btn">Accept</button>
                <button type="button" class="rej_btn">Reject</button>
              </div>
            </div>
            <div class="bk_t4_s">
              <span class="bk_srv">Hair Treatment</span>
              <span class="bk_cs_name">IC - BA: Lissa</span>
              <span class="bk_lct">DL</span>
              <span class="bk_note">Internal Note</span>
              <button class="bk_msg">Message</button>
            </div>
          </div>
        </td>
        <td class="bdr_top bdr_left">
          <div class="bk_sec">
          </div>
        </td>
        <td class="bdr_top bdr_left"></td>
        <td class="bdr_top bdr_left"></td>
        <td class="bdr_top bdr_left"></td>
        <td class="bdr_top bdr_left"></td>
        <td class="bdr_top bdr_left bdr_right border-top-right-radius"></td>
      </tr>
      <tr>
        <td>8:00</td>
        <td class="bdr_top bdr_left">
          <div class="bk_sec">
          </div>
        </td>
        <td class="bdr_top bdr_left"></td>
        <td class="bdr_top bdr_left"></td>
        <td class="bdr_top bdr_left"></td>
        <td class="bdr_top bdr_left"></td>
        <td class="bdr_top bdr_left bdr_right"></td>
      </tr>
      <tr>
        <td>9:00</td>
        <td class="bdr_top bdr_left bdr_bottom">
          <div class="bk_sec">
          </div>
        </td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom bdr_right"></td>
      </tr>
      <tr>
        <td>10:00</td>
        <td class="bdr_top bdr_left bdr_bottom">
          <div class="bk_sec">
          </div>
        </td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom bdr_right"></td>
      </tr>
      <tr>
        <td>11:00</td>
        <td class="bdr_top bdr_left bdr_bottom">
          <div class="bk_sec">
          </div>
        </td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom bdr_right"></td>
      </tr>
      <tr>
        <td>12:00</td>
        <td class="bdr_top bdr_left bdr_bottom">
          <div class="bk_sec">
          </div>
        </td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom bdr_right"></td>
      </tr>
      <tr>
        <td>13:00</td>
        <td class="bdr_top bdr_left bdr_bottom">
          <div class="bk_sec">
          </div>
        </td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom bdr_right"></td>
      </tr>
      <tr>
        <td>14:00</td>
        <td class="bdr_top bdr_left bdr_bottom">
          <div class="bk_sec">
          </div>
        </td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom bdr_right"></td>
      </tr>
      <tr>
        <td>15:00</td>
        <td class="bdr_top bdr_left bdr_bottom">
          <div class="bk_sec">
          </div>
        </td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom bdr_right"></td>
      </tr>
      <tr>
        <td>16:00</td>
        <td class="bdr_top bdr_left bdr_bottom">
          <div class="bk_sec">
          </div>
        </td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom bdr_right"></td>
      </tr>
      <tr>
        <td>17:00</td>
        <td class="bdr_top bdr_left bdr_bottom border-bottom-left-radius">
          <div class="bk_sec">
          </div>
        </td>
        <td class="bdr_top bdr_left bdr_bottom "></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom"></td>
        <td class="bdr_top bdr_left bdr_bottom bdr_right border-bottom-right-radius"></td>
      </tr> -->
    </tbody>
  </table>
  <table class="calendar_tbl clt_all" style="display:none">
    <thead id="tm_dt_all">
      
    </thead>
    <!-- <tbody id="tm_bks">
    </tbody> -->
    <tbody id="tm_bks_all">
      
    </tbody>
  </table>
</div>

<!-- Modal -->
<div class="modal" id="modalajx" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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

<div id="edbModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width: 80%;max-width:100%;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="border-bottom:none;">
        <h4 class="modal-title" style="font-size: 18px;font-weight:700;width: 100%;text-align:center">Edit Booking</h4>
        <span class="cursor-pointer" style="font-weight: bold;font-size:18px;" onclick="close_modal('edbModal')">&times;</span>
      </div>
      <div class="modal-body">
        <input type="hidden" id="ed_bk_i" value="0">
        <div class="mb-3 text-center" id="booking_detal_ed">
          
        </div>
        

        <div class="mt-4 text-center">
          <!-- <input type="button" class="custom_btn" value="Save" onclick="save_reschedule()"> -->
        </div>
      </div>
    </div>
  </div>
</div>

<!-- PopUp -->
<div id="popupWrapper">
    <div id="popupContent">
      <button id="closePopupButton"><div class="cross-symbol"><img src="https://cynnaenterprises.com/mollure/public/images/model/close.svg"></div></button>
      <h3 class="poptitle"><strong>Background color(i)</strong></h3>
      <div class="cleardiv">
        <button class="clear">Clear</button>
      </div>
      <div class="my_table_container table-responsive">
        <table class="setting_calender_table ">
            <thead>
              <tr>
                <td class="bdr_right">Category 1</td>
                <td class="bdr_right"><b>No Colour<b></td>
                <td class="bdr_right">(Sub)Service 1</td>
                <td class="bdr_right"><b>No Colour</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="bdr_right"></td>
                <td class="bdr_right"></td>
                <td class="bdr_right">(Sub)Service 1</td>
                <td class="bdr_right"><b>No Colour</b></td>
              </tr>
              <tr>
                <td class="bdr_right"></td>
                <td class="bdr_right"></td>
                <td class="bdr_right"></td>
                <td class="bdr_right"><b>No Colour</b></td>
              </tr>
              <tr>
                <td class="bdr_right"></td>
                <td class="bdr_right"></td>
                <td class="bdr_right"></td>
                <td class="bdr_right"><b>No Colour</b></td>
              </tr>
            </tbody>
        </table>
        <table class="setting_calender_table " style="margin-top:2rem;">
            <thead>
              <tr>
                <td class="bdr_right">Category 1</td>
                <td class="bdr_right"><b>No Colour<b></td>
                <td class="bdr_right">(Sub)Service 1</td>
                <td class="bdr_right"><b>No Colour</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="bdr_right"></td>
                <td class="bdr_right"></td>
                <td class="bdr_right">(Sub)Service 1</td>
                <td class="bdr_right"><b>No Colour</b></td>
              </tr>
              <tr>
                <td class="bdr_right"></td>
                <td class="bdr_right"></td>
                <td class="bdr_right"></td>
                <td class="bdr_right"><b>No Colour</b></td>
              </tr>
              <tr>
                <td class="bdr_right"></td>
                <td class="bdr_right"></td>
                <td class="bdr_right"></td>
                <td class="bdr_right"><b>No Colour</b></td>
              </tr>
            </tbody>
        </table>
      </div>
      <div class="savediv">
        <button id="saveButton">Save</button>
      </div>
    </div>
  </div>

  <div id="SetpopupWrapper">
    <div id="SetpopupContent">
      <button id="SetclosePopupButton"><div class="cross-symbol"><img src="https://cynnaenterprises.com/mollure/public/images/model/close.svg"></div></button>
      <h3 class="Setpoptitle"><strong>Always delete messages of</strong></h3>
      <label class="Setleb" style="margin-top:38px;">
          <span>Completed Bookings</span>
          <span class="sv-checkbox">
            <i id="tick1" class="fa-light fa-check" aria-hidden="true"></i>
        </span>
      </label>
      <label class="Setleb">
        <span>Cancelled Bookings</span>
        <span class="sv-checkbox">
          <i id="tick2" class="fa-light fa-check" aria-hidden="true"></i>
        </span>
      </label>
      <label class="Setleb">
        <span>Cancelled services</span>
        <span class="sv-checkbox">
          <i id="tick3" class="fa-light fa-check" aria-hidden="true"></i>
        </span>
      </label>
      <button id="SetsaveButton">Save</button>
    </div>
  </div>

  <div id="BookpopupWrapper">
    <div id="BookpopupContent">
      <button id="BookclosePopupButton"><div class="cross-symbol"><img src="https://cynnaenterprises.com/mollure/public/images/model/close.svg"></div></button>
      <h3 class="Bookpoptitle"><strong>Edit booking</strong></h3>
      <div class="Bookcleardiv">
        <button class="clear">Client Type <span class="custom_sel_ic flt" style="right:14px"><i class="fw-bold fa fa-angle-down"></i></span> </button>
    </div>
    <div class="cname">
        <p>BA:Craig Martha</p>
        <p style="float:left;margin-top:-5px;">Apr 08,2023</p>
    </div>
      <div class="my_table_container table-responsive" style="width:100%;">
        <table class="Book_calender_table">
            <thead>
              <th colspan="8">Booking</th>
            </thead>
            <tbody>
              <tr>
                <td class="bdr_right">TM A</td>
                <td class="bdr_right">Hair</td>
                <td class="bdr_right">Keratine</td>
                <td class="bdr_right" style="padding: 20px 3px;">2hr<i style="margin-left: 5px;" class="fw-bold fa fa-angle-down"></i></td>
                <td class="bdr_right" style="padding: 20px 3px;">7:00<i style="margin-left: 5px;" class="fw-bold fa fa-angle-down"></i></td>
                <td class="bdr_right">40 EUR</td>
                <td class="bdr_right" style="padding: 20px 3px;">BA: Mellisa<i class="fw-bold fa fa-angle-down"></i></td>
                <td class="bdr_right" style="padding: 20px 3px;">Action<i style="margin-left: 5px;" class="fw-bold fa fa-angle-down"></i></td>
              </tr>
              <tr>
                <td class="bdr_right">TM A</td>
                <td class="bdr_right">Hair</td>
                <td class="bdr_right">Keratine</td>
                <td class="bdr_right" style="padding: 20px 3px;">1hr<i style="margin-left: 5px;" class="fw-bold fa fa-angle-down"></i></td>
                <td class="bdr_right" style="padding: 20px 3px;">7:00<i style="margin-left: 5px;" class="fw-bold fa fa-angle-down"></i></td>
                <td class="bdr_right">40 EUR</td>
                <td class="bdr_right" style="padding: 20px 3px;">BA: John<i style="margin-left: 5px;" class="fw-bold fa fa-angle-down"></i></td>
                <td class="bdr_right" style="padding: 20px 3px;">Action<i style="margin-left: 5px;" class="fw-bold fa fa-angle-down"></i></td>
              </tr>
              <tr>
                <td class="bdr_right" colspan="3"><input type="text" placeholder="Input Text..."></td>
                <td class="bdr_right" style="padding: 20px 3px;">1hr<i style="margin-left: 5px;" class="fw-bold fa fa-angle-down"></i></td>
                <td class="bdr_right"></td>
                <td class="bdr_right"></td>
                <td class="bdr_right"><input type="text" placeholder="Name..."></td>
                <td class="bdr_right" style="padding: 20px 3px;">Action<i style="margin-left: 5px;" class="fw-bold fa fa-angle-down"></i></td>
              </tr>
              <tr>
                <td class="bdr_right" colspan="4"></td>
                <td class="bdr_right"></td>
                <td class="bdr_right">Total: 160 EUR</td>
                <td class="bdr_right"></td>
                <td class="bdr_right"></td>
              </tr>
              <tr>
                <td class="bdr_right" colspan="8">
                  <div style="float: right;">
                  <div class="serv"><button class="service">+ Sub Services</button></div>
                  <div class="field"><button class="tfield">+ Text Field</button></div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="bdr_right" colspan="8"><p style="float:left;">Location: Lorem Ipsum Dolor Sit Amet Consectetur.</p></td>
              </tr>
              <tr>
                <td class="bdr_right" colspan="8"><p style="float:left;">Contact Number BA: +808 234421145</p></td>
              </tr>
              <tr>
                <td class="bdr_right" colspan="8"><p style="float:left;">Internal Note: Lorem Ipsum<img src="https://cynnaenterprises.com/mollure/public/images/Icons/first Icons copy/PNGS/Interface/Trash_Empty.png" alt="" width="20"></p></td>
              </tr>
            </tbody>
        </table>
      </div>
      <div class="savediv">
        <button id="saveButton">Save</button>
      </div>
    </div>
  </div>

  <div id="NewpopupWrapper">
    <div id="NewpopupContent">
      <button id="NewclosePopupButton"><div class="cross-symbol"><img src="https://cynnaenterprises.com/mollure/public/images/model/close.svg"></div></button>
      <h3 class="Newpoptitle"><strong>Add new appointment</strong></h3>
      <div class="Newcleardiv">
        <button class="clear">Client Type <span class="custom_sel_ic flt" style="right:14px"><i class="fw-bold fa fa-angle-down"></i></span> </button>
    </div>
    <div class="cname">
        <input class="clname" type="text" placeholder="Add Client Name..">
        <p style="margin-left:-50px;margin-top: 12px;">BA:Craig Martha</p>
        <p style="float:left;margin-top:-5px;">Apr 08,2023</p>
      </div>
      <div class="date">
        <button class="photo">Photoshoot</button>
      </div>
      <div class="my_table_container table-responsive" style="width:100%;">
        <table class="New_calender_table">
            <thead>
              <th colspan="8">Appointment</th>
            </thead>
            <tbody>
            <tr>
                <td class="bdr_right">Select TM<i style="margin-left: 5px;" class="fw-bold fa fa-angle-down"></i></td>
                <td class="bdr_right">Select Category<i style="margin-left: 5px;" class="fw-bold fa fa-angle-down"></i></td>
                <td class="bdr_right">Select Sub(Service)</td>
                <td class="bdr_right">Duration<i style="margin-left: 5px;" class="fw-bold fa fa-angle-down"></i></td>
                <td class="bdr_right">Start Time<i style="margin-left: 5px;" class="fw-bold fa fa-angle-down"></i></td>
                <td class="bdr_right">Price</td>
                <td class="bdr_right">Client Name</td>
              </tr>
              <tr>
                <td class="bdr_right">TM A<i style="margin-left: 5px;" class="fw-bold fa fa-angle-down"></i></td>
                <td class="bdr_right">Hair<i style="margin-left: 5px;" class="fw-bold fa fa-angle-down"></i></td>
                <td class="bdr_right">Keratine<i style="margin-left: 5px;" class="fw-bold fa fa-angle-down"></i></td>
                <td class="bdr_right" style="padding: 20px 3px;">2hr<i style="margin-left: 5px;" class="fw-bold fa fa-angle-down"></i></td>
                <td class="bdr_right" style="padding: 20px 3px;">7:00<i style="margin-left: 5px;" class="fw-bold fa fa-angle-down"></i></td>
                <td class="bdr_right">40 EUR</td>
                <td class="bdr_right" style="padding: 20px 3px;">BA: Mellisa<i class="fw-bold fa fa-angle-down"></i></td>
              </tr>
              <tr>
                <td class="bdr_right">TM B<i style="margin-left: 5px;" class="fw-bold fa fa-angle-down"></i></td>
                <td class="bdr_right">Hair<i style="margin-left: 5px;" class="fw-bold fa fa-angle-down"></i></td>
                <td class="bdr_right">Keratine<i style="margin-left: 5px;" class="fw-bold fa fa-angle-down"></i></td>
                <td class="bdr_right" style="padding: 20px 3px;">2hr<i style="margin-left: 5px;" class="fw-bold fa fa-angle-down"></i></td>
                <td class="bdr_right" style="padding: 20px 3px;">7:00<i style="margin-left: 5px;" class="fw-bold fa fa-angle-down"></i></td>
                <td class="bdr_right">40 EUR</td>
                <td class="bdr_right" style="padding: 20px 3px;">BA: Mellisa<i class="fw-bold fa fa-angle-down"></i></td>
              </tr>
              <tr>
                <td class="bdr_right" colspan="3"><input type="text" placeholder="Input Text..."></td>
                <td class="bdr_right" style="padding: 20px 3px;">1hr<i style="margin-left: 5px;" class="fw-bold fa fa-angle-down"></i></td>
                <td class="bdr_right"></td>
                <td class="bdr_right"></td>
                <td class="bdr_right"><input type="text" placeholder="Name..."></td>
              </tr>
              <tr>
                <td class="bdr_right" colspan="4"></td>
                <td class="bdr_right"></td>
                <td class="bdr_right">Total: 160 EUR</td>
                <td class="bdr_right"></td>
              </tr>
              <tr>
                <td class="bdr_right" colspan="7">
                  <div style="float: right;">
                  <div class="serv"><button class="service">+ Sub Services</button></div>
                  <div class="field"><button class="tfield">+ Text Field</button></div>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="bdr_right" colspan="7"><p style="float:left;">Location: Lorem Ipsum Dolor Sit Amet Consectetur.</p></td>
              </tr>
              <tr>
                <td class="bdr_right" colspan="7"><p style="float:left;">Contact Number BA: +808 234421145</p></td>
              </tr>
              <tr>
                <td class="bdr_right" colspan="7"><p style="float:left;">Internal Note: Lorem Ipsum</p></td>
              </tr>
            </tbody>
        </table>
      </div>
      <div class="savediv">
        <button id="saveButton">Save</button>
      </div>
    </div>
  </div>

  <div id="PaypopupWrapper">
    <div id="PaypopupContent">
      <button id="PayclosePopupButton"><div class="cross-symbol"><img src="https://cynnaenterprises.com/mollure/public/images/model/close.svg"></div></button>
      <h3 class="Paypoptitle"><strong>Select Payment options:</strong></h3>
      <label class="Payleb" style="margin-top:38px;">
          <span>Online - Direct Payment</span>
          <span class="sv-checkbox">
            <i id="tick1" class="fa-light fa-check" aria-hidden="true"></i>
        </span>
      </label>
      <label class="Payleb">
        <span>Online-Non-Direct Payment-Optional:</span>
        <ul>
          <li>Invoice with A Due Date</li>
        </ul>
        <span class="sv-checkbox">
          <i id="tick2" class="fa-light fa-check" aria-hidden="true"></i>
        </span>
      </label>
      <label class="Payleb">
        <span>Offline-Direct Payment-Option</span>
        <ul>
          <li>Cash Or By Card At Location</li>
        </ul>
        <span class="sv-checkbox">
          <i id="tick3" class="fa-light fa-check" aria-hidden="true"></i>
        </span>
      </label>
      <label class="Payleb">
        <span>Offline-Non-Direct Payment-Optional:</span>
        <ul>
          <li>Invoice With A Due Date</li>
        </ul>
        <span class="sv-checkbox">
          <i id="tick4" class="fa-light fa-check" aria-hidden="true"></i>
        </span>
      </label>
      <button id="PaysaveButton">Save</button>
    </div>
  </div>

@include('salon/footer')

<script type="text/javascript">

document.addEventListener('DOMContentLoaded', function() {
        const settingSpan = document.querySelector('.bcolor');
        const popupWrapper = document.querySelector('#popupWrapper');
        const closePopUpButton = document.querySelector('#closePopupButton');
        
        settingSpan.addEventListener('click', function() {
            popupWrapper.style.display = 'block';
        });

        closePopUpButton.addEventListener('click', function() {
            popupWrapper.style.display = 'none';
        });
    });

    // Get the close popup button element
const closePopupButton = document.getElementById('SetclosePopupButton');

// Get the popup wrapper element
const popupWrapper = document.getElementById('SetpopupWrapper');

// Add click event listener to the close popup button
closePopupButton.addEventListener('click', () => {
  // Hide the popup by setting its display to "none"
  popupWrapper.style.display = 'none';
});


    saveButton.addEventListener('click', () => {
  const checkbox1 = document.getElementById('checkbox1');
  const checkbox2 = document.getElementById('checkbox2');

  // Your save functionality here
  console.log('Checkbox 1: ', checkbox1.checked);
  console.log('Checkbox 2: ', checkbox2.checked);

  // Close the popup after saving (you can modify this behavior if needed)
  popupWrapper.style.display = 'none';
  document.body.style.overflow = 'auto'; // Restore scrolling on the background
});

// New popup
var ticks = document.querySelectorAll('.sv-checkbox i');
  
  ticks.forEach(function(tick) {
    var checkbox = tick.parentElement;
    var isChecked = false;

    checkbox.addEventListener('click', function() {
      isChecked = !isChecked;
      tick.style.display = isChecked ? 'block' : 'none';
      checkbox.style.borderColor = isChecked ? 'rgba(102, 198, 143, 1)' : 'rgb(180 178 178)';
    });
  });

  $(document).ready(function() {
    $(".editbook").click(function() {
        $("#BookpopupWrapper").css("display", "block");
    });

    $("#BookclosePopupButton").click(function() {
        $("#BookpopupWrapper").css("display", "none");
    });
});

$(document).ready(function() {
    $(".newApp").click(function() {
        $("#NewpopupWrapper").css("display", "block");
    });

    $("#NewclosePopupButton").click(function() {
        $("#NewpopupWrapper").css("display", "none");
    });
});

document.addEventListener('DOMContentLoaded', () => {
  const paymentPopupWrapper = document.getElementById('PaypopupWrapper');
  const checkoutElement = document.querySelector('.checkout');
  const closePopupButton = document.getElementById('PayclosePopupButton');

  checkoutElement.addEventListener('click', () => {
    paymentPopupWrapper.style.display = 'block';
  });

  closePopupButton.addEventListener('click', () => {
    paymentPopupWrapper.style.display = 'none';
  });
});


    document.addEventListener('DOMContentLoaded', function() {
        const settingSpan = document.querySelector('.setting_span');
        const popupWrapper = document.querySelector('#popupwrapper');
        const closePopUpButton = document.querySelector('#closeSetPopUp');
        const setPopupWrapper = document.querySelector('#SetpopupWrapper');
        const setClosePopupButton = document.querySelector('#SetclosePopupButton');

        settingSpan.addEventListener('click', function() {
            setPopupWrapper.style.display = 'block';
        });

        closePopUpButton.addEventListener('click', function() {
            popupWrapper.style.display = 'none';
        });

        setClosePopupButton.addEventListener('click', function() {
            setPopupWrapper.style.display = 'none';
        });
    });


    document.addEventListener('DOMContentLoaded', function() {
        // const settingSpan = document.querySelector('.bcolor');
        const popupWrapper = document.querySelector('#SetpopupWrapper');
        const closePopUpButton = document.querySelector('#SetclosePopupButton');
        
        settingSpan.addEventListener('click', function() {
            popupWrapper.style.display = 'block';
        });

        closePopUpButton.addEventListener('click', function() {
            popupWrapper.style.display = 'none';
        });
    });


  $(document).on('click','.bk_sec',function(){

    $('.bk_sec').removeClass('active');
    $(this).addClass('active');
  
   var dataBiValue = $(this).data('bi');
   
    $('.bk_sec[data-bi="' + dataBiValue + '"]').addClass('active');
  }); 

  $(document).ready(function(){
    get_bookings_all();
    $('.sf_tm_chk').on('change',function(){
      if($('.sf_tm_chk:checked').length==1){
        get_bookings();
      }
      else{
        get_bookings_all();
      }
    });
  });

  $(document).on('click','.custom_sel_ic',function(){
      if($(this).closest('.custom_sel').hasClass('open')){
          $(this).closest('.custom_sel').removeClass('open');
      }
      else{
          $(this).closest('.custom_sel').addClass('open');
      }    
  });
tm_bks_all
function close_modal(m){
  $('#'+m).modal('hide');
}

function action_change(act){
  if(act=='edit_booking'){
    let bi = $('.bk_sec.active').attr('data-bi');

    if(typeof bi=='undefined' || bi=='' || bi=='0'){
      alert('please select booking');
      return false;
    }

    $('#edbModal').modal('show');
    $('.action_ul').closest('custom_sel').removeClass('open');


    $('#booking_detal_ed').html(`<img src="{{URL::asset('public/images/ajax-loader.gif')}}" style="margin:auto;width:100px">`);

    
    $.ajax({
      url:'{{route("ajx_booking_detail")}}',
      type:'post',
      data:{'bi':bi,'_token':"{{csrf_token()}}"},
      success:function(r){     console.log(r);
        if(r=='ERROR'){
          alert('Something went wrong.');
          $('#edbModal').modal('hide');
        }
        else if(r=='LOGIN'){
          // location.reload();
        }
        else{
         $('#booking_detal_ed').html(r); 
        }
      },
      error:function(){
        alert('Something went wrong.');
        // location.reload();
      }
    })
  }
}

function get_bookings_all(){

 
  $('#modalajx').show();
  var tm_arr = new Array;

  $('.clt_tm').hide();
  $('.sel_team_member_sel').html('');
  $('.clt_all').show();
  $('#tm_bks_all').html('');

  var tm_sel='all';
  $('.sf_tm_chk:checked').each(function(){
      tm_arr.push($(this).val());
      tm_sel='sel';
  });

  let day = '2023-08-18';
  // let day = '2023-06-09';

  $.ajax({
      url:'{{route("ajx_calendar")}}',
      type:'post',
      data:{'act':'all_tm_booking','tm':tm_arr,'_token':"{{csrf_token()}}",'day':day, 'tm_sel':tm_sel},
      dataType:'json',
      success:function(r){
        $('#modalajx').hide();
        if(r.status=='SUCCESS'){
          let bookings = r.bookings;
          let team_member = r.team_member;
          let date = r.date;

          if(bookings.length!=0){
            // console.log(bookings);

            var bk_tbl_str='';
            let clm_7 = clm_8 = clm_9 = clm_10 = clm_11 = clm_12 = clm_13 = clm_14 = clm_15 = clm_16 = clm_17 = clm_18 = clm_19='';

            let cnt=0;

            var bk_t_h='';
            bk_t_h+='<td></td>';

            let ttl_tm_count=0
            for (var i in bookings) ttl_tm_count++;

            $.each(bookings,function(k,tmb){

              bk_t_h+='<td class="text-center">';
              
              if(typeof team_member[k].name !='undefined'){
                let tmimg='{{asset("public/images/default-user.png")}}';
                if(team_member[k].image && team_member[k].image!='' && team_member[k].image!='null'){
                  console.log(team_member[k].image);
                    tmimg='{{asset("public/imgs/team/")}}/'+team_member[k].image;
                }
                
                bk_t_h+=`<div class="tm_bk_tb_nm">
                        <img src="${tmimg}" class="tm_img">
                        <span>${team_member[k].name}</span>
                      </div>`;
                // bk_t_h+='<span class="tm_bk_tb_nm">'+team_member[k].name+'</span>';
              }

              bk_t_h+= date+'</td>';

            
              cnt++;
              let tmb7=tmb7_5=tmb8=tmb8_5=tmb9=tmb9_5=tmb10=tmb10_5=tmb11=tmb11_5=tmb12=tmb12_5=tmb13=tmb13_5=tmb14=tmb14_5=tmb15=tmb15_5=tmb16=tmb16_5=tmb17=tmb17_5= tmb18= tmb18_5= tmb19=tmb19_5='';
              

              if(tmb['7']){
                tmb7 = get_td_str(tmb['7']);
              }
              if(tmb['7.5']){
                tmb7_5 = get_td_str(tmb['7.5']);
              }
              if(tmb['8']){
                tmb8 = get_td_str(tmb['8']);
              }
              if(tmb['8.5']){
                tmb8_5 = get_td_str(tmb['8.5']);
              }
              if(tmb['9']){
                tmb9 = get_td_str(tmb['9']);
              }
              if(tmb['9.5']){
                tmb9_5 = get_td_str(tmb['9.5']);
              }
              if(tmb['10']){
                tmb10 = get_td_str(tmb['10']);
              }
              if(tmb['10.5']){
                tmb10_5 = get_td_str(tmb['10.5']);
              }
              if(tmb['11']){
                tmb11 = get_td_str(tmb['11']);
              }
              if(tmb['11.5']){
                tmb11_5 = get_td_str(tmb['11.5']);
              }
              if(tmb['12']){
                tmb12 = get_td_str(tmb['12']);
              }
              if(tmb['12.5']){
                tmb12_5 = get_td_str(tmb['12.5']);
              }
              if(tmb['13']){
                tmb13 = get_td_str(tmb['13']);
              }
              if(tmb['13.5']){
                tmb13_5 = get_td_str(tmb['13.5']);
              }
              if(tmb['14']){
                tmb14 = get_td_str(tmb['14']);
              }
              if(tmb['14.5']){
                tmb14_5 = get_td_str(tmb['14.5']);
              }
              if(tmb['15']){
                tmb15 = get_td_str(tmb['15']);
              }
              if(tmb['15.5']){
                tmb15_5 = get_td_str(tmb['15.5']);
              }
              if(tmb['16']){
                tmb16 = get_td_str(tmb['16']);
              }
              if(tmb['16.5']){
                tmb16_5 = get_td_str(tmb['16.5']);
              }
              if(tmb['17']){
                tmb17 = get_td_str(tmb['17']);
              }
              if(tmb['17.5']){
                tmb17_5 = get_td_str(tmb['17.5']);
              }

              let bdrcls=bdrcls1=bdrcls2="";
              if(cnt==1){
                bdrcls="border-top-left-radius";
                bdrcls2=" border-bottom-left-radius";
              }

              if(cnt==ttl_tm_count){
                bdrcls="bdr_right border-top-right-radius"; 
                bdrcls1="bdr_right";
                bdrcls2="bdr_right border-bottom-right-radius";
              }

              if(cnt==ttl_tm_count && cnt==1){
                bdrcls="border-top-left-radius bdr_right border-top-right-radius"; 
                bdrcls1="bdr_right";
                bdrcls2="border-bottom-left-radius bdr_right border-bottom-right-radius";
              }

              

              if(tmb['7'] && tmb['7']['max_time'])
                clm_7+='<td class="bdr_top bdr_left '+bdrcls+'" data-h="'+tmb['7']['max_time']+'" data-day="tb_'+k+'"  data-span="0">';
              else if(tmb['7.5'] && tmb['7.5']['max_time'])
                clm_7+='<td class="bdr_top bdr_left '+bdrcls+'" data-h="'+tmb['7.5']['max_time']+'" data-span="1" data-day="tb_'+k+'" >';
              else
                clm_7+='<td class="bdr_top bdr_left '+bdrcls+'" data-h="0" data-day="tb_'+k+'"  data-span="0">';

              if(tmb7!='')
                clm_7+=tmb7;
              else{
                clm_7+='<div class="bk_sec"></div>';
              }
              if(tmb7_5!='')
                clm_7+=tmb7_5;
              else{
                clm_7+='<div class="bk_sec"></div>';
              }
              clm_7+='</td>';



              if(tmb['8'] && tmb['8']['max_time'])
                clm_8+='<td class="bdr_top bdr_left '+bdrcls1+'" data-h="'+tmb['8']['max_time']+'" data-day="tb_'+k+'"  data-span="0">';
              else if(tmb['8.5'] && tmb['8.5']['max_time'])
                clm_8+='<td class="bdr_top bdr_left  '+bdrcls1+'" data-h="'+tmb['8.5']['max_time']+'" data-span="1" data-day="tb_'+k+'" >';
              else
                clm_8+='<td class="bdr_top bdr_left  '+bdrcls1+'" data-h="0" data-day="tb_'+k+'"  data-span="0">';

              if(tmb8!='')
                clm_8+=tmb8;
              else{
                clm_8+='<div class="bk_sec"></div>';
              }
              if(tmb8_5!='')
                clm_8+=tmb8_5;
              else{
                clm_8+='<div class="bk_sec"></div>';
              }
              clm_8+='</td>';


              if(tmb['9'] && tmb['9']['max_time'])
                clm_9+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="'+tmb['9']['max_time']+'" data-day="tb_'+k+'"  data-span="0">';
              else if(tmb['9.5'] && tmb['9.5']['max_time'])
                clm_9+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="'+tmb['9.5']['max_time']+'" data-span="1" data-day="tb_'+k+'" >';
              else
                clm_9+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="0" data-day="tb_'+k+'"  data-span="0">';

              if(tmb9!='')
                clm_9+=tmb9;
              else{
                clm_9+='<div class="bk_sec"></div>';
              }
              if(tmb9_5!='')
                clm_9+=tmb9_5;
              else{
                clm_9+='<div class="bk_sec"></div>';
              }
              clm_9+='</td>';


              if(tmb['10'] && tmb['10']['max_time'])
                clm_10+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="'+tmb['10']['max_time']+'" data-day="tb_'+k+'"  data-span="0">';
              else if(tmb['10.5'] && tmb['10.5']['max_time'])
                clm_10+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="'+tmb['10.5']['max_time']+'" data-span="1" data-day="tb_'+k+'" >';
              else
                clm_10+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="0" data-day="tb_'+k+'"  data-span="0">';

              if(tmb10!='')
                clm_10+=tmb10;
              else{
                clm_10+='<div class="bk_sec"></div>';
              }
              if(tmb10_5!='')
                clm_10+=tmb10_5;
              else{
                clm_10+='<div class="bk_sec"></div>';
              }
              clm_10+='</td>';


              if(tmb['11'] && tmb['11']['max_time'])
                clm_11+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="'+tmb['11']['max_time']+'" data-day="tb_'+k+'"  data-span="0">';
              else if(tmb['11.5'] && tmb['11.5']['max_time'])
                clm_11+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="'+tmb['11.5']['max_time']+'" data-span="1" data-day="tb_'+k+'" >';
              else
                clm_11+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="0" data-day="tb_'+k+'"  data-span="0">';

              if(tmb11!='')
                clm_11+=tmb11;
              else{
                clm_11+='<div class="bk_sec"></div>';
              }
              if(tmb11_5!='')
                clm_11+=tmb11_5;
              else{
                clm_11+='<div class="bk_sec"></div>';
              }
              clm_11+='</td>';


              if(tmb['12'] && tmb['12']['max_time'])
                clm_12+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="'+tmb['12']['max_time']+'" data-day="tb_'+k+'"  data-span="0">';
              else if(tmb['12.5'] && tmb['12.5']['max_time'])
                clm_12+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="'+tmb['12.5']['max_time']+'" data-span="1" data-day="tb_'+k+'" >';
              else
                clm_12+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="0" data-day="tb_'+k+'"  data-span="0">';

              if(tmb12!='')
                clm_12+=tmb12;
              else{
                clm_12+='<div class="bk_sec"></div>';
              }
              if(tmb12_5!='')
                clm_12+=tmb12_5;
              else{
                clm_12+='<div class="bk_sec"></div>';
              }
              clm_12+='</td>';


              if(tmb['13'] && tmb['13']['max_time'])
                clm_13+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="'+tmb['13']['max_time']+'" data-day="tb_'+k+'"  data-span="0">';
              else if(tmb['13.5'] && tmb['13.5']['max_time'])
                clm_13+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="'+tmb['13.5']['max_time']+'" data-span="1" data-day="tb_'+k+'" >';
              else
                clm_13+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="0" data-day="tb_'+k+'"  data-span="0">';

              if(tmb13!='')
                clm_13+=tmb13;
              else{
                clm_13+='<div class="bk_sec"></div>';
              }
              if(tmb13_5!='')
                clm_13+=tmb13_5;
              else{
                clm_13+='<div class="bk_sec"></div>';
              }
              clm_13+='</td>';


              if(tmb['14'] && tmb['14']['max_time'])
                clm_14+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="'+tmb['14']['max_time']+'" data-day="tb_'+k+'"  data-span="0">';
              else if(tmb['14.5'] && tmb['14.5']['max_time'])
                clm_14+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="'+tmb['14.5']['max_time']+'" data-span="1" data-day="tb_'+k+'" >';
              else
                clm_14+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="0" data-day="tb_'+k+'"  data-span="0">';

              if(tmb14!='')
                clm_14+=tmb14;
              else{
                clm_14+='<div class="bk_sec"></div>';
              }
              if(tmb14_5!='')
                clm_14+=tmb14_5;
              else{
                clm_14+='<div class="bk_sec"></div>';
              }
              clm_14+='</td>';


              if(tmb['15'] && tmb['15']['max_time'])
                clm_15+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="'+tmb['15']['max_time']+'" data-day="tb_'+k+'"  data-span="0">';
              else if(tmb['15.5'] && tmb['15.5']['max_time'])
                clm_15+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="'+tmb['15.5']['max_time']+'" data-span="1" data-day="tb_'+k+'" >';
              else
                clm_15+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="0" data-day="tb_'+k+'"  data-span="0">';

              if(tmb15!='')
                clm_15+=tmb15;
              else{
                clm_15+='<div class="bk_sec"></div>';
              }
              if(tmb15_5!='')
                clm_15+=tmb15_5;
              else{
                clm_15+='<div class="bk_sec"></div>';
              }
              clm_15+='</td>';


              if(tmb['16'] && tmb['16']['max_time'])
                clm_16+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="'+tmb['16']['max_time']+'" data-day="tb_'+k+'"  data-span="0">';
              else if(tmb['16.5'] && tmb['16.5']['max_time'])
                clm_16+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="'+tmb['16.5']['max_time']+'" data-span="1" data-day="tb_'+k+'" >';
              else
                clm_16+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="0" data-day="tb_'+k+'"  data-span="0">';

              if(tmb16!='')
                clm_16+=tmb16;
              else{
                clm_16+='<div class="bk_sec"></div>';
              }
              if(tmb16_5!='')
                clm_16+=tmb16_5;
              else{
                clm_16+='<div class="bk_sec"></div>';
              }
              clm_16+='</td>';


              if(tmb['17'] && tmb['17']['max_time'])
                clm_17+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="'+tmb['17']['max_time']+'" data-day="tb_'+k+'"  data-span="0">';
              else if(tmb['17.5'] && tmb['17.5']['max_time'])
                clm_17+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="'+tmb['17.5']['max_time']+'" data-span="1" data-day="tb_'+k+'" >';
              else
                clm_17+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="0" data-day="tb_'+k+'"  data-span="0">';

              if(tmb17!='')
                clm_17+=tmb17;
              else{
                clm_17+='<div class="bk_sec"></div>';
              }
              if(tmb17_5!='')
                clm_17+=tmb17_5;
              else{
                clm_17+='<div class="bk_sec"></div>';
              }
              clm_17+='</td>';


              if(tmb['18'] && tmb['18']['max_time'])
                clm_18+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="'+tmb['18']['max_time']+'" data-day="tb_'+k+'"  data-span="0">';
              else if(tmb['18.5'] && tmb['18.5']['max_time'])
                clm_18+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="'+tmb['18.5']['max_time']+'" data-span="1" data-day="tb_'+k+'" >';
              else
                clm_18+='<td class="bdr_top bdr_left  '+bdrcls1+' " data-h="0" data-day="tb_'+k+'"  data-span="0">';

              if(tmb18!='')
                clm_18+=tmb18;
              else{
                clm_18+='<div class="bk_sec"></div>';
              }
              if(tmb18_5!='')
                clm_18+=tmb18_5;
              else{
                clm_18+='<div class="bk_sec"></div>';
              }
              clm_18+='</td>';


              if(tmb['19'] && tmb['19']['max_time'])
                clm_19+='<td class="bdr_top bdr_left  '+bdrcls2+'  bdr_bottom" data-h="'+tmb['19']['max_time']+'" data-day="tb_'+k+'"  data-span="0">';
              else if(tmb['19.5'] && tmb['19.5']['max_time'])
                clm_19+='<td class="bdr_top bdr_left  '+bdrcls2+'  bdr_bottom" data-h="'+tmb['19.5']['max_time']+'" data-span="1" data-day="tb_'+k+'" >';
              else
                clm_19+='<td class="bdr_top bdr_left  '+bdrcls2+' bdr_bottom" data-h="0" data-day="tb_'+k+'"  data-span="0">';

              if(tmb19!='')
                clm_19+=tmb19;
              else{
                clm_19+='<div class="bk_sec"></div>';
              }
              if(tmb19_5!='')
                clm_19+=tmb19_5;
              else{
                clm_19+='<div class="bk_sec"></div>';
              }
              clm_19+='</td>';

            });

            var str='';
            str+='<tr>';
            str+='<td>7:00</td>';
            str+=clm_7;
            /*if(cnt==1)
              str+='<td class="bdr_left bdr_top bdr_right border-top-right-radius"></td>';*/
            str+='</tr>';
            str+='<tr>';
            str+='<td>8:00</td>';
            str+=clm_8;
            /*if(cnt==1)
              str+='<td class="bdr_left bdr_top bdr_right"></td>';*/
            str+='</tr>';
            str+='<tr>';
            str+='<td>9:00</td>';
            str+=clm_9;
            /*if(cnt==1)
              str+='<td class="bdr_left bdr_top bdr_right"></td>';*/
            str+='</tr>';
            str+='<tr>';
            str+='<td>10:00</td>';
            str+=clm_10;
            /*if(cnt==1)
              str+='<td class="bdr_left bdr_top bdr_right"></td>';*/
            str+='</tr>';
            str+='<tr>';
            str+='<td>11:00</td>';
            str+=clm_11;
            /*if(cnt==1)
              str+='<td class="bdr_left bdr_top bdr_right"></td>';*/
            str+='</tr>';
            str+='<tr>';
            str+='<td>12:00</td>';
            str+=clm_12;
            /*if(cnt==1)
              str+='<td class="bdr_left bdr_top bdr_right"></td>';*/
            str+='</tr>';
            str+='<tr>';
            str+='<td>13:00</td>';
            str+=clm_13;
            /*if(cnt==1)
              str+='<td class="bdr_left bdr_top bdr_right"></td>';*/
            str+='</tr>';
            str+='<tr>';
            str+='<td>14:00</td>';
            str+=clm_14;
            /*if(cnt==1)
              str+='<td class="bdr_left bdr_top bdr_right"></td>';*/
            str+='</tr>';
            str+='<tr>';
            str+='<td>15:00</td>';
            str+=clm_15;
            /*if(cnt==1)
              str+='<td class="bdr_left bdr_top bdr_right"></td>';*/
            str+='</tr>';
            str+='<tr>';
            str+='<td>16:00</td>';
            str+=clm_16;
            /*if(cnt==1)
              str+='<td class="bdr_left bdr_top bdr_right"></td>';*/
            str+='</tr>';
            str+='<tr>';
            str+='<td>17:00</td>';
            str+=clm_17;
            /*if(cnt==1)
              str+='<td class="bdr_left bdr_top bdr_right"></td>';*/
            str+='</tr>';
            str+='<tr>';
            str+='<td>18:00</td>';
            str+=clm_18;
            /*if(cnt==1)
              str+='<td class="bdr_left bdr_top bdr_right"></td>';*/
            str+='</tr>';
            str+='<tr>';
            str+='<td>19:00</td>';
            str+=clm_19;
            /*if(cnt==1)
              str+='<td class="bdr_left bdr_top bdr_right bdr_bottom border-bottom-right-radius"></td>';*/
            str+='</tr>';

            $('#tm_bks_all').append(str);

            var str1='<tr>'+bk_t_h;
            /*if(cnt==1)
              str1+='<td></td>';  */
            str1+='</tr>';

            $('#tm_dt_all').html(str1);

            format_table('tm_bks_all');
            $('.clt_tm, .sel_team_member_sel').hide();
            $('.sel_team_member_sel').html('');
            $('.clt_all').show();
          }
        }
      },
      error:function(e){
        $('#modalajx').hide();
      }
  })
}


  // get_bookings();

function get_bookings(){
  $('#modalajx').show();
  // return false;

  let tm = $('.sf_tm_chk:checked').val();
  $('#tm_bks').html('');
  $.ajax({
    url:'{{route("ajx_calendar")}}',
    type:'post',
    data:{'act':'tm_booking','tm':tm,'_token':"{{csrf_token()}}",'day':'week'},
    dataType:'json',
    success:function(r){
      $('#modalajx').hide();
      if(r.status=='SUCCESS'){
        let bookings = r.bookings;
        let team_member = r.team_member;
        
        let tmimg='{{asset("public/images/default-user.png")}}';
        if(team_member.image!=''){
            tmimg='{{asset("public/imgs/team/")}}/'+team_member.image;
        }
        
        let tm_img_str=`<div class="tm_sec">
                        <img src="${tmimg}" class="tm_img">
                        <span>${team_member.member}</span>
                      </div>`;

        $('.sel_team_member_sel').html(tm_img_str);

        let mon = bookings.mon;
        let tue = bookings.tue;
        let wed = bookings.wed;
        let thu = bookings.thu;
        let fri = bookings.fri;
        let sat = bookings.sat;
        let sund = bookings.sun;

        let mon7=mon7_5=mon8=mon8_5=mon9=mon9_5=mon10=mon10_5=mon11=mon11_5=mon12=mon12_5=mon13=mon13_5=mon14=mon14_5=mon15=mon15_5=mon16=mon16_5=mon17=mon17_5= '';
        if(mon.length!=0){
          if(mon['7']){
            mon7 = get_td_str(mon['7']);
          }
          if(mon['7.5']){
            mon7_5 = get_td_str(mon['7.5']);
          }
          if(mon['8']){
            mon8 = get_td_str(mon['8']);
          }
          if(mon['8.5']){
            mon8_5 = get_td_str(mon['8.5']);
          }
          if(mon['9']){
            mon9 = get_td_str(mon['9']);
          }
          if(mon['9.5']){
            mon9_5 = get_td_str(mon['9.5']);
          }
          if(mon['10']){
            mon10 = get_td_str(mon['10']);
          }
          if(mon['10.5']){
            mon10_5 = get_td_str(mon['10.5']);
          }
          if(mon['11']){
            mon11 = get_td_str(mon['11']);
          }
          if(mon['11.5']){
            mon11_5 = get_td_str(mon['11.5']);
          }
          if(mon['12']){
            mon12 = get_td_str(mon['12']);
          }
          if(mon['12.5']){
            mon12_5 = get_td_str(mon['12.5']);
          }
          if(mon['13']){
            mon13 = get_td_str(mon['13']);
          }
          if(mon['13.5']){
            mon13_5 = get_td_str(mon['13.5']);
          }
          if(mon['14']){
            mon14 = get_td_str(mon['14']);
          }
          if(mon['14.5']){
            mon14_5 = get_td_str(mon['14.5']);
          }
          if(mon['15']){
            mon15 = get_td_str(mon['15']);
          }
          if(mon['15.5']){
            mon15_5 = get_td_str(mon['15.5']);
          }
          if(mon['16']){
            mon16 = get_td_str(mon['16']);
          }
          if(mon['16.5']){
            mon16_5 = get_td_str(mon['16.5']);
          }
          if(mon['17']){
            mon17 = get_td_str(mon['17']);
          }
          if(mon['17.5']){
            mon17_5 = get_td_str(mon['17.5']);
          }
        
        }

        let tue7=tue7_5=tue8=tue8_5=tue9=tue9_5=tue10=tue10_5=tue11=tue11_5=tue12=tue12_5=tue13=tue13_5=tue14=tue14_5=tue15=tue15_5=tue16=tue16_5=tue17=tue17_5= '';
        if(tue.length!=0){
          if(tue['7']){
            tue7 = get_td_str(tue['7']);
          }
          if(tue['7.5']){
            tue7_5 = get_td_str(tue['7.5']);
          }
          if(tue['8']){
            tue8 = get_td_str(tue['8']);
          }
          if(tue['8.5']){
            tue8_5 = get_td_str(tue['8.5']);
          }
          if(tue['9']){
            tue9 = get_td_str(tue['9']);
          }
          if(tue['9.5']){
            tue9_5 = get_td_str(tue['9.5']);
          }
          if(tue['10']){
            tue10 = get_td_str(tue['10']);
          }
          if(tue['10.5']){
            tue10_5 = get_td_str(tue['10.5']);
          }
          if(tue['11']){
            tue11 = get_td_str(tue['11']);
          }
          if(tue['11.5']){
            tue11_5 = get_td_str(tue['11.5']);
          }
          if(tue['12']){
            tue12 = get_td_str(tue['12']);
          }
          if(tue['12.5']){
            tue12_5 = get_td_str(tue['12.5']);
          }
          if(tue['13']){
            tue13 = get_td_str(tue['13']);
          }
          if(tue['13.5']){
            tue13_5 = get_td_str(tue['13.5']);
          }
          if(tue['14']){
            tue14 = get_td_str(tue['14']);
          }
          if(tue['14.5']){
            tue14_5 = get_td_str(tue['14.5']);
          }
          if(tue['15']){
            tue15 = get_td_str(tue['15']);
          }
          if(tue['15.5']){
            tue15_5 = get_td_str(tue['15.5']);
          }
          if(tue['16']){
            tue16 = get_td_str(tue['16']);
          }
          if(tue['16.5']){
            tue16_5 = get_td_str(tue['16.5']);
          }
          if(tue['17']){
            tue17 = get_td_str(tue['17']);
          }
          if(tue['17.5']){
            tue17_5 = get_td_str(tue['17.5']);
          }
         
        }
        let wed7=wed7_5=wed8=wed8_5=wed9=wed9_5=wed10=wed10_5=wed11=wed11_5=wed12=wed12_5=wed13=wed13_5=wed14=wed14_5=wed15=wed15_5=wed16=wed16_5=wed17=wed17_5= '';
        if(wed.length!=0){
          if(wed['7']){
            wed7 = get_td_str(wed['7']);
          }
          if(wed['7.5']){
            wed7_5 = get_td_str(wed['7.5']);
          }
          if(wed['8']){
            wed8 = get_td_str(wed['8']);
          }
          if(wed['8.5']){
            wed8_5 = get_td_str(wed['8.5']);
          }
          if(wed['9']){
            wed9 = get_td_str(wed['9']);
          }
          if(wed['9.5']){
            wed9_5 = get_td_str(wed['9.5']);
          }
          if(wed['10']){
            wed10 = get_td_str(wed['10']);
          }
          if(wed['10.5']){
            wed10_5 = get_td_str(wed['10.5']);
          }
          if(wed['11']){
            wed11 = get_td_str(wed['11']);
          }
          if(wed['11.5']){
            wed11_5 = get_td_str(wed['11.5']);
          }
          if(wed['12']){
            wed12 = get_td_str(wed['12']);
          }
          if(wed['12.5']){
            wed12_5 = get_td_str(wed['12.5']);
          }
          if(wed['13']){
            wed13 = get_td_str(wed['13']);
          }
          if(wed['13.5']){
            wed13_5 = get_td_str(wed['13.5']);
          }
          if(wed['14']){
            wed14 = get_td_str(wed['14']);
          }
          if(wed['14.5']){
            wed14_5 = get_td_str(wed['14.5']);
          }
          if(wed['15']){
            wed15 = get_td_str(wed['15']);
          }
          if(wed['15.5']){
            wed15_5 = get_td_str(wed['15.5']);
          }
          if(wed['16']){
            wed16 = get_td_str(wed['16']);
          }
          if(wed['16.5']){
            wed16_5 = get_td_str(wed['16.5']);
          }
          if(wed['17']){
            wed17 = get_td_str(wed['17']);
          }
          if(wed['17.5']){
            wed17_5 = get_td_str(wed['17.5']);
          }
          
          // alert(mon10_5);
        }
        let thu7=thu7_5=thu8=thu8_5=thu9=thu9_5=thu10=thu10_5=thu11=thu11_5=thu12=thu12_5=thu13=thu13_5=thu14=thu14_5=thu15=thu15_5=thu16=thu16_5=thu17=thu17_5= '';
        if(thu.length!=0){
          if(thu['7']){
            thu7 = get_td_str(thu['7']);
          }
          if(thu['7.5']){
            thu7_5 = get_td_str(thu['7.5']);
          }
          if(thu['8']){
            thu8 = get_td_str(thu['8']);
          }
          if(thu['8.5']){
            thu8_5 = get_td_str(thu['8.5']);
          }
          if(thu['9']){
            thu9 = get_td_str(thu['9']);
          }
          if(thu['9.5']){
            thu9_5 = get_td_str(thu['9.5']);
          }
          if(thu['10']){
            thu10 = get_td_str(thu['10']);
          }
          if(thu['10.5']){
            thu10_5 = get_td_str(thu['10.5']);
          }
          if(thu['11']){
            thu11 = get_td_str(thu['11']);
          }
          if(thu['11.5']){
            thu11_5 = get_td_str(thu['11.5']);
          }
          if(thu['12']){
            thu12 = get_td_str(thu['12']);
          }
          if(thu['12.5']){
            thu12_5 = get_td_str(thu['12.5']);
          }
          if(thu['13']){
            thu13 = get_td_str(thu['13']);
          }
          if(thu['13.5']){
            thu13_5 = get_td_str(thu['13.5']);
          }
          if(thu['14']){
            thu14 = get_td_str(thu['14']);
          }
          if(thu['14.5']){
            thu14_5 = get_td_str(thu['14.5']);
          }
          if(thu['15']){
            thu15 = get_td_str(thu['15']);
          }
          if(thu['15.5']){
            thu15_5 = get_td_str(thu['15.5']);
          }
          if(thu['16']){
            thu16 = get_td_str(thu['16']);
          }
          if(thu['16.5']){
            thu16_5 = get_td_str(thu['16.5']);
          }
          if(thu['17']){
            thu17 = get_td_str(thu['17']);
          }
          if(thu['17.5']){
            thu17_5 = get_td_str(thu['17.5']);
          }
          
        }

        let fri7=fri7_5=fri8=fri8_5=fri9=fri9_5=fri10=fri10_5=fri11=fri11_5=fri12=fri12_5=fri13=fri13_5=fri14=fri14_5=fri15=fri15_5=fri16=fri16_5=fri17=fri17_5= '';
        if(fri.length!=0){
          if(fri['7']){
            fri7 = get_td_str(fri['7']);
          }
          if(fri['7.5']){
            fri7_5 = get_td_str(fri['7.5']);
          }
          if(fri['8']){
            fri8 = get_td_str(fri['8']);
          }
          if(fri['8.5']){
            fri8_5 = get_td_str(fri['8.5']);
          }
          if(fri['9']){
            fri9 = get_td_str(fri['9']);
          }
          if(fri['9.5']){
            fri9_5 = get_td_str(fri['9.5']);
          }
          if(fri['10']){
            fri10 = get_td_str(fri['10']);
          }
          if(fri['10.5']){
            fri10_5 = get_td_str(fri['10.5']);
          }
          if(fri['11']){
            fri11 = get_td_str(fri['11']);
          }
          if(fri['11.5']){
            fri11_5 = get_td_str(fri['11.5']);
          }
          if(fri['12']){
            fri12 = get_td_str(fri['12']);
          }
          if(fri['12.5']){
            fri12_5 = get_td_str(fri['12.5']);
          }
          if(fri['13']){
            fri13 = get_td_str(fri['13']);
          }
          if(fri['13.5']){
            fri13_5 = get_td_str(fri['13.5']);
          }
          if(fri['14']){
            fri14 = get_td_str(fri['14']);
          }
          if(fri['14.5']){
            fri14_5 = get_td_str(fri['14.5']);
          }
          if(fri['15']){
            fri15 = get_td_str(fri['15']);
          }
          if(fri['15.5']){
            fri15_5 = get_td_str(fri['15.5']);
          }
          if(fri['16']){
            fri16 = get_td_str(fri['16']);
          }
          if(fri['16.5']){
            fri16_5 = get_td_str(fri['16.5']);
          }
          if(fri['17']){
            fri17 = get_td_str(fri['17']);
          }
          if(fri['17.5']){
            fri17_5 = get_td_str(fri['17.5']);
          }
          
        }

        let sat7=sat7_5=sat8=sat8_5=sat9=sat9_5=sat10=sat10_5=sat11=sat11_5=sat12=sat12_5=sat13=sat13_5=sat14=sat14_5=sat15=sat15_5=sat16=sat16_5=sat17=sat17_5= '';
        if(sat.length!=0){
          if(sat['7']){
            sat7 = get_td_str(sat['7']);
          }
          if(sat['7.5']){
            sat7_5 = get_td_str(sat['7.5']);
          }
          if(sat['8']){
            sat8 = get_td_str(sat['8']);
          }
          if(sat['8.5']){
            sat8_5 = get_td_str(sat['8.5']);
          }
          if(sat['9']){
            sat9 = get_td_str(sat['9']);
          }
          if(sat['9.5']){
            sat9_5 = get_td_str(sat['9.5']);
          }
          if(sat['10']){
            sat10 = get_td_str(sat['10']);
          }
          if(sat['10.5']){
            sat10_5 = get_td_str(sat['10.5']);
          }
          if(sat['11']){
            sat11 = get_td_str(sat['11']);
          }
          if(sat['11.5']){
            sat11_5 = get_td_str(sat['11.5']);
          }
          if(sat['12']){
            sat12 = get_td_str(sat['12']);
          }
          if(sat['12.5']){
            sat12_5 = get_td_str(sat['12.5']);
          }
          if(sat['13']){
            sat13 = get_td_str(sat['13']);
          }
          if(sat['13.5']){
            sat13_5 = get_td_str(sat['13.5']);
          }
          if(sat['14']){
            sat14 = get_td_str(sat['14']);
          }
          if(sat['14.5']){
            sat14_5 = get_td_str(sat['14.5']);
          }
          if(sat['15']){
            sat15 = get_td_str(sat['15']);
          }
          if(sat['15.5']){
            sat15_5 = get_td_str(sat['15.5']);
          }
          if(sat['16']){
            sat16 = get_td_str(sat['16']);
          }
          if(sat['16.5']){
            sat16_5 = get_td_str(sat['16.5']);
          }
          if(sat['17']){
            sat17 = get_td_str(sat['17']);
          }
          if(sat['17.5']){
            sat17_5 = get_td_str(sat['17.5']);
          }
         
        }

        let sund7=sund7_5=sund8=sund8_5=sund9=sund9_5=sund10=sund10_5=sund11=sund11_5=sund12=sund12_5=sund13=sund13_5=sund14=sund14_5=sund15=sund15_5=sund16=sund16_5=sund17=sund17_5= '';
        if(sund.length!=0){
          if(sund['7']){
            sund7 = get_td_str(sund['7']);
          }
          if(sund['7.5']){
            sund7_5 = get_td_str(sund['7.5']);
          }
          if(sund['8']){
            sund8 = get_td_str(sund['8']);
          }
          if(sund['8.5']){
            sund8_5 = get_td_str(sund['8.5']);
          }
          if(sund['9']){
            sund9 = get_td_str(sund['9']);
          }
          if(sund['9.5']){
            sund9_5 = get_td_str(sund['9.5']);
          }
          if(sund['10']){
            sund10 = get_td_str(sund['10']);
          }
          if(sund['10.5']){
            sund10_5 = get_td_str(sund['10.5']);
          }
          if(sund['11']){
            sund11 = get_td_str(sund['11']);
          }
          if(sund['11.5']){
            sund11_5 = get_td_str(sund['11.5']);
          }
          if(sund['12']){
            sund12 = get_td_str(sund['12']);
          }
          if(sund['12.5']){
            sund12_5 = get_td_str(sund['12.5']);
          }
          if(sund['13']){
            sund13 = get_td_str(sund['13']);
          }
          if(sund['13.5']){
            sund13_5 = get_td_str(sund['13.5']);
          }
          if(sund['14']){
            sund14 = get_td_str(sund['14']);
          }
          if(sund['14.5']){
            sund14_5 = get_td_str(sund['14.5']);
          }
          if(sund['15']){
            sund15 = get_td_str(sund['15']);
          }
          if(sund['15.5']){
            sund15_5 = get_td_str(sund['15.5']);
          }
          if(sund['16']){
            sund16 = get_td_str(sund['16']);
          }
          if(sund['16.5']){
            sund16_5 = get_td_str(sund['16.5']);
          }
          if(sund['17']){
            sund17 = get_td_str(sund['17']);
          }
          if(sund['17.5']){
            sund17_5 = get_td_str(sund['17.5']);
          }
        }
        
        var str='';
        str+='<tr>';
          str+='<td>7:00</td>';
        
          if(mon['7'] && mon['7']['max_time'])
            str+='<td class="bdr_top bdr_left border-top-left-radius" data-h="'+mon['7']['max_time']+'" data-day="mon"  data-span="0">';
          else if(mon['7.5'] && mon['7.5']['max_time'])
            str+='<td class="bdr_top bdr_left border-top-left-radius" data-h="'+mon['7.5']['max_time']+'" data-span="1" data-day="mon" >';
          else
            str+='<td class="bdr_top bdr_left border-top-left-radius" data-h="0" data-day="mon"  data-span="0">';

          if(mon7!='')
            str+=mon7;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(mon7_5!='')
            str+=mon7_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';


          if(tue['7'] && tue['7']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+tue['7']['max_time']+'" data-day="tue"  data-span="0">';
          else if(tue['7.5'] && tue['7.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+tue['7.5']['max_time']+'" data-day="tue"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-h="0" data-day="tue"  data-span="0">';
          
          if(tue7!='')
            str+=tue7;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(tue7_5!='')
            str+=tue7_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';


          if(wed['7'] && wed['7']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+wed['7']['max_time']+'"  data-day="wed"  data-span="0">';
          else if(wed['7.5'] && wed['7.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+wed['7.5']['max_time']+'"  data-day="wed"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-h="0"  data-day="wed"  data-span="0">';

          if(wed7!='')
            str+=wed7;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(wed7_5!='')
            str+=wed7_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(thu['7'] && thu['7']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+thu['7']['max_time']+'" data-day="thu"  data-span="0">';
          else if(thu['7.5'] && thu['7.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+thu['7.5']['max_time']+'" data-day="thu"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-h="0" data-day="thu"  data-span="0">';

          if(thu7!='')
            str+=thu7;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(thu7_5!='')
            str+=thu7_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(fri['7'] && fri['7']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+fri['7']['max_time']+'" data-day="fri"  data-span="0">';
          else if(fri['7.5'] && fri['7.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+fri['7.5']['max_time']+'" data-day="fri"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-h="0" data-day="fri"  data-span="0">';

          if(fri7!='')
            str+=fri7;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(fri7_5!='')
            str+=fri7_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(sat['7'] && sat['7']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sat['7']['max_time']+'" data-day="sat"  data-span="0">';
          else if(sat['7.5'] && sat['7.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sat['7.5']['max_time']+'" data-day="sat"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left" data-h="0" data-day="sat"  data-span="0">';

          if(sat7!='')
            str+=sat7;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(sat7_5!='')
            str+=sat7_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(sund['7'] && sund['7']['max_time'])
            str+='<td class="bdr_top bdr_left bdr_right border-top-right-radius" data-h="'+sund['7']['max_time']+'" data-day="sun" data-span="0">';
          else if(sund['7.5'] && sund['7.5']['max_time'])
            str+='<td class="bdr_top bdr_left bdr_right border-top-right-radius" data-h="'+sund['7.5']['max_time']+'" data-day="sun" data-span="1">';
          else
            str+='<td class="bdr_top bdr_left bdr_right border-top-right-radius" data-h="0" data-day="sun" data-span="0">';

          if(sund7!='')
            str+=sund7;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(sund7_5!='')
            str+=sund7_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

        str+='</tr>';



        str+='<tr>';
          str+='<td>8:00</td>';

          if(mon['8'] && mon['8']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+mon['8']['max_time']+'" data-day="mon"  data-span="0">';
          else if(mon['8.5'] && mon['8.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+mon['8.5']['max_time']+'" data-day="mon"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left" data-day="mon" data-h="0" data-span="0">';

          if(mon8!='')
            str+=mon8;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(mon8_5!='')
            str+=mon8_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(tue['8'] && tue['8']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+tue['8']['max_time']+'" data-day="tue"  data-span="0">';
          else if(tue['8.5'] && tue['8.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+tue['8.5']['max_time']+'" data-day="tue"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="tue" data-h="0" data-span="0">';
          if(tue8!='')
            str+=tue8;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(tue8_5!='')
            str+=tue8_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(wed['8'] && wed['8']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+wed['8']['max_time']+'" data-day="wed"  data-span="0">';
          else if(wed['8.5'] && wed['8.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+wed['8.5']['max_time']+'" data-day="wed"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="wed" data-h="0"  data-span="0">';
          if(wed8!='')
            str+=wed8;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(wed8_5!='')
            str+=wed8_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(thu['8'] && thu['8']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+thu['8']['max_time']+'" data-day="thu"  data-span="0">';
          else if(thu['8.5'] && thu['8.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+thu['8.5']['max_time']+'" data-day="thu"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="thu" data-h="0"  data-span="0">';
          if(thu8!='')
            str+=thu8;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(thu8_5!='')
            str+=thu8_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(fri['8'] && fri['8']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+fri['8']['max_time']+'" data-day="fri"  data-span="0">';
          else if(fri['8.5'] && fri['8.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+fri['8.5']['max_time']+'" data-day="fri"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="fri" data-h="0"  data-span="0">';
          if(fri8!='')
            str+=fri8;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(fri8_5!='')
            str+=fri8_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(sat['8'] && sat['8']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sat['8']['max_time']+'" data-day="sat"  data-span="0">';
          else if(sat['8.5'] && sat['8.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sat['8.5']['max_time']+'" data-day="sat"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left" data-day="sat"  data-h="0" data-span="0">';
          if(sat8!='')
            str+=sat8;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(sat8_5!='')
            str+=sat8_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(sund['8'] && sund['8']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sund['8']['max_time']+'" data-day="sun" data-span="0">';
          else if(sund['8.5'] && sund['8.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sund['8.5']['max_time']+'" data-day="sun" data-span="1">';
          else
            str+='<td class="bdr_top bdr_left bdr_right" data-day="sun" data-h="0" data-span="0">';
          if(sund8!='')
            str+=sund8;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(sund8_5!='')
            str+=sund8_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

        str+='</tr>';

        str+='<tr>';
          str+='<td>9:00</td>';

          if(mon['9'] && mon['9']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+mon['9']['max_time']+'" data-day="mon"  data-span="0">';
          else if(mon['9.5'] && mon['9.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+mon['9.5']['max_time']+'" data-day="mon"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left" data-day="mon" data-h="0"  data-span="0">';
          if(mon9!='')
            str+=mon9;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(mon9_5!='')
            str+=mon9_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(tue['9'] && tue['9']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+tue['9']['max_time']+'" data-day="tue"  data-span="0">';
          else if(tue['9.5'] && tue['9.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+tue['9.5']['max_time']+'" data-day="tue"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left" data-day="tue" data-h="0"  data-span="0">';
          if(tue9!='')
            str+=tue9;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(tue9_5!='')
            str+=tue9_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(wed['9'] && wed['9']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+wed['9']['max_time']+'" data-day="wed"  data-span="0">';
          else if(wed['9.5'] && wed['9.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+wed['9.5']['max_time']+'" data-day="wed"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left" data-day="wed" data-h="0"  data-span="0">';
          if(wed9!='')
            str+=wed9;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(wed9_5!='')
            str+=wed9_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(thu['9'] && thu['9']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+thu['9']['max_time']+'" data-day="thu" data-span="0">';
          else if(thu['9.5'] && thu['9.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+thu['9.5']['max_time']+'" data-day="thu" data-span="1">';
          else
            str+='<td class="bdr_top bdr_left" data-day="thu" data-h="0" data-span="0">';
          if(thu9!='')
            str+=thu9;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(thu9_5!='')
            str+=thu9_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(fri['9'] && fri['9']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+fri['9']['max_time']+'" data-day="fri" data-span="0">';
          else if(fri['9.5'] && fri['9.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+fri['9.5']['max_time']+'" data-day="fri" data-span="1">';
          else
            str+='<td class="bdr_top bdr_left" data-day="fri" data-h="0" data-span="0">';
          if(fri9!='')
            str+=fri9;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(fri9_5!='')
            str+=fri9_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(sat['9'] && sat['9']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sat['9']['max_time']+'" data-day="sat" data-span="0">';
          else if(sat['9.5'] && sat['9.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sat['9.5']['max_time']+'" data-day="sat" data-span="1">';
          else
            str+='<td class="bdr_top bdr_left" data-day="sat" data-h="0" data-span="0">';
          if(sat9!='')
            str+=sat9;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(sat9_5!='')
            str+=sat9_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(sund['9'] && sund['9']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sund['9']['max_time']+'" data-day="sun"  data-span="0">';
          else if(sund['9.5'] && sund['9.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sund['9.5']['max_time']+'" data-day="sun"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left bdr_right" data-h="0" data-day="sun"  data-span="0">';
          if(sund9!='')
            str+=sund9;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(sund9_5!='')
            str+=sund9_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

        str+='</tr>';

        str+='<tr>';
          str+='<td>10:00</td>';

          if(mon['10'] && mon['10']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+mon['10']['max_time']+'" data-day="mon"  data-span="0">';
          else if(mon['10.5'] && mon['10.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+mon['10.5']['max_time']+'" data-day="mon"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="mon" data-h="0"  data-span="0">';
          if(mon10!='')
            str+=mon10;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(mon10_5!='')
            str+=mon10_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(tue['10'] && tue['10']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+tue['10']['max_time']+'" data-day="tue"  data-span="0">';
          else if(tue['10.5'] && tue['10.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+tue['10.5']['max_time']+'" data-day="tue"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="tue" data-h="0"  data-span="0">';
          if(tue10!='')
            str+=tue10;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(tue10_5!='')
            str+=tue10_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(wed['10'] && wed['10']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+wed['10']['max_time']+'" data-day="wed"  data-span="0">';
          else if(wed['10.5'] && wed['10.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+wed['10.5']['max_time']+'" data-day="wed"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="wed" data-h="0"  data-span="0">';
          if(wed10!='')
            str+=wed10;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(wed10_5!='')
            str+=wed10_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(thu['10'] && thu['10']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+thu['10']['max_time']+'" data-day="thu"  data-span="0">';
          else if(thu['10.5'] && thu['10.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+thu['10.5']['max_time']+'" data-day="thu"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="thu" data-h="0"  data-span="0">';

          if(thu10!='')
            str+=thu10;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(thu10_5!='')
            str+=thu10_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(fri['10'] && fri['10']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+fri['10']['max_time']+'" data-day="fri"  data-span="0">';
          else if(fri['10.5'] && fri['10.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+fri['10.5']['max_time']+'" data-day="fri"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="fri" data-h="0"  data-span="0">';
          if(fri10!='')
            str+=fri10;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(fri10_5!='')
            str+=fri10_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(sat['10'] && sat['10']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sat['10']['max_time']+'" data-day="sat"  data-span="0">';
          else if(sat['10.5'] && sat['10.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sat['10.5']['max_time']+'" data-day="sat"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="sat" data-h="0"  data-span="0">';
          if(sat10!='')
            str+=sat10;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(sat10_5!='')
            str+=sat10_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(sund['10'] && sund['10']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sund['10']['max_time']+'" data-day="sun" '+sund['10']['start_time']+' data-span="0">';
          else if(sund['10.5'] && sund['10.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sund['10.5']['max_time']+'" data-day="sun"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left bdr_right" data-day="sun" data-h="0"  data-span="0">';
          if(sund10!='')
            str+=sund10;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(sund10_5!='')
            str+=sund10_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

        str+='</tr>';

        str+='<tr>';
          str+='<td>11:00</td>';


          if(mon['11'] && mon['11']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+mon['11']['max_time']+'" data-day="mon" '+mon['11']['start_time']+'  data-span="0">';
          else if(mon['11.5'] && mon['11.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+mon['11.5']['max_time']+'" data-day="mon"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left" data-day="mon" data-h="0" data-span="0">';

          if(mon11!='')
            str+=mon11;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(mon11_5!='')
            str+=mon11_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(tue['11'] && tue['11']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+tue['11']['max_time']+'" data-day="tue" '+tue['11']['start_time']+' data-span="0">';
          else if(tue['11.5'] && tue['11.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+tue['11.5']['max_time']+'" data-day="tue"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left" data-day="tue" data-h="0" data-span="0">';

          if(tue11!='')
            str+=tue11;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(tue11_5!='')
            str+=tue11_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(wed['11'] && wed['11']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+wed['11']['max_time']+'" data-day="wed" '+wed['11']['start_time']+' data-span="0">';
          else if(wed['11.5'] && wed['11.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+wed['11.5']['max_time']+'" data-day="wed"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left" data-day="wed" data-h="0" data-span="0">';
          if(wed11!='')
            str+=wed11;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(wed11_5!='')
            str+=wed11_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(thu['11'] && thu['11']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+thu['11']['max_time']+'" data-day="thu" '+thu['11']['start_time']+' data-span="0">';
          else if(thu['11.5'] && thu['11.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+thu['11.5']['max_time']+'" data-day="thu"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left" data-day="thu" data-h="0" data-span="0">';
          if(thu11!='')
            str+=thu11;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(thu11_5!='')
            str+=thu11_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(fri['11'] && fri['11']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+fri['11']['max_time']+'" data-day="fri" '+fri['11']['start_time']+' data-span="0">';
          else if(fri['11.5'] && fri['11.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+fri['11.5']['max_time']+'" data-day="fri"  data-span="0">';
          else
          str+='<td class="bdr_top bdr_left" data-day="fri" data-h="0" data-span="0">';
          if(fri11!='')
            str+=fri11;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(fri11_5!='')
            str+=fri11_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(sat['11'] && sat['11']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sat['11']['max_time']+'" data-day="sat" '+sat['11']['start_time']+' data-span="0">';
          else if(sat['11.5'] && sat['11.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sat['11.5']['max_time']+'" data-day="sat"  data-span="1">';
          else
          str+='<td class="bdr_top bdr_left" data-day="sat" data-h="0" data-span="0">';
          if(sat11!='')
            str+=sat11;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(sat11_5!='')
            str+=sat11_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(sund['11'] && sund['11']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sund['11']['max_time']+'" data-day="sun" '+sund['11']['start_time']+' data-span="0">';
          else if(sund['11.5'] && sund['11.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sund['11.5']['max_time']+'" data-day="sun"  data-span="1">';
          else
          str+='<td class="bdr_top bdr_left bdr_right" data-day="sun" data-h="0" data-span="0">';
          if(sund11!='')
            str+=sund11;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(sund11_5!='')
            str+=sund11_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

        str+='</tr>';

        str+='<tr>';
          str+='<td>12:00</td>';

          if(mon['12'] && mon['12']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+mon['12']['max_time']+'" data-day="mon" '+mon['12']['start_time']+'  data-span="0">';
          else if(mon['12.5'] && mon['12.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+mon['12.5']['max_time']+'" data-day="mon"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left" data-day="mon" data-h="0" data-span="0">';
          if(mon12!='')
            str+=mon12;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(mon12_5!='')
            str+=mon12_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(tue['12'] && tue['12']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+tue['12']['max_time']+'" data-day="tue" '+tue['12']['start_time']+' data-span="0">';
          else if(tue['12.5'] && tue['12.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+tue['12.5']['max_time']+'" data-day="tue"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left" data-day="tue" data-h="0" data-span="0">';
          if(tue12!='')
            str+=tue12;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(tue12_5!='')
            str+=tue12_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(wed['12'] && wed['12']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+wed['12']['max_time']+'" data-day="wed" '+wed['12']['start_time']+' data-span="0">';
          else if(wed['12.5'] && wed['12.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+wed['12.5']['max_time']+'" data-day="wed"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left" data-day="wed" data-h="0" data-span="0">';
          if(wed12!='')
            str+=wed12;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(wed12_5!='')
            str+=wed12_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(thu['12'] && thu['12']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+thu['12']['max_time']+'" data-day="thu" '+thu['12']['start_time']+' data-span="0">';
          else if(thu['12.5'] && thu['12.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+thu['12.5']['max_time']+'" data-day="thu"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left" data-day="thu" data-h="0" data-span="0">';
          if(thu12!='')
            str+=thu12;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(thu12_5!='')
            str+=thu12_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(fri['12'] && fri['12']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+fri['12']['max_time']+'" data-day="fri" '+fri['12']['start_time']+' data-span="0">';
          else if(fri['12.5'] && fri['12.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+fri['12.5']['max_time']+'" data-day="fri"  data-span="0">';
          else
            str+='<td class="bdr_top bdr_left" data-day="fri" data-h="0" data-span="0">';
          if(fri12!='')
            str+=fri12;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(fri12_5!='')
            str+=fri12_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(sat['12'] && sat['12']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sat['12']['max_time']+'" data-day="sat" '+sat['12']['start_time']+' data-span="0">';
          else if(sat['12.5'] && sat['12.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sat['12.5']['max_time']+'" data-day="sat"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left" data-day="sat" data-h="0" data-span="0">';
          if(sat12!='')
            str+=sat12;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(sat12_5!='')
            str+=sat12_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(sund['12'] && sund['12']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sund['12']['max_time']+'" data-day="sun" '+sund['12']['start_time']+' data-span="0">';
          else if(sund['12.5'] &&sund['12.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sund['12.5']['max_time']+'" data-day="sun"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left bdr_right" data-day="sun" data-h="0" data-span="0">';
          if(sund12!='')
            str+=sund12;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(sund12_5!='')
            str+=sund12_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

        str+='</tr>';




        str+='<tr>';
          str+='<td>13:00</td>';

          if(mon['13'] && mon['13']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+mon['13']['max_time']+'" data-day="mon" '+mon['13']['start_time']+'  data-span="0">';
          else if(mon['13.5'] && mon['13.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+mon['13.5']['max_time']+'" data-day="mon"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="mon" data-h="0" data-span="0">';
          if(mon13!='')
            str+=mon13;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(mon13_5!='')
            str+=mon13_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(tue['13'] && tue['13']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+tue['13']['max_time']+'" data-day="tue" '+tue['13']['start_time']+' data-span="0">';
          else if(tue['13.5'] && tue['13.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+tue['13.5']['max_time']+'" data-day="tue"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="tue" data-h="0" data-span="0">';
          if(tue13!='')
            str+=tue13;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(tue13_5!='')
            str+=tue13_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(wed['13'] && wed['13']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+wed['13']['max_time']+'" data-day="wed" '+wed['13']['start_time']+' data-span="0">';
          else if(wed['13.5'] && wed['13.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+wed['13.5']['max_time']+'" data-day="wed"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="wed" data-h="0" data-span="0">';
          if(wed13!='')
            str+=wed13;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(wed13_5!='')
            str+=wed13_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(thu['13'] && thu['13']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+thu['13']['max_time']+'" data-day="thu" '+thu['13']['start_time']+' data-span="0">';
          else if(thu['13.5'] && thu['13.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+thu['13.5']['max_time']+'" data-day="thu"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="thu" data-h="0" data-span="0">';
          if(thu13!='')
            str+=thu13;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(thu13_5!='')
            str+=thu13_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(fri['13'] && fri['13']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+fri['13']['max_time']+'" data-day="fri" '+fri['13']['start_time']+' data-span="0">';
          else if(fri['13.5'] && fri['13.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+fri['13.5']['max_time']+'" data-day="fri"  data-span="0">';
          else
            str+='<td class="bdr_top bdr_left " data-day="fri" data-h="0" data-span="0">';
          if(fri13!='')
            str+=fri13;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(fri13_5!='')
            str+=fri13_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(sat['13'] && sat['13']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sat['13']['max_time']+'" data-day="sat" '+sat['13']['start_time']+' data-span="0">';
          else if(sat['13.5'] && sat['13.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sat['13.5']['max_time']+'" data-day="sat"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="sat" data-h="0" data-span="0">';
          if(sat13!='')
            str+=sat13;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(sat13_5!='')
            str+=sat13_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(sund['13'] && sund['13']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sund['13']['max_time']+'" data-day="sun" '+sund['13']['start_time']+' data-span="0">';
          else if(sund['13.5'] &&sund['13.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sund['13.5']['max_time']+'" data-day="sun"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left bdr_right" data-day="sun" data-h="0" data-span="0">';
          if(sund13!='')
            str+=sund13;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(sund13_5!='')
            str+=sund13_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

        str+='</tr>';




        str+='<tr>';
          str+='<td>14:00</td>';

          if(mon['14'] && mon['14']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+mon['14']['max_time']+'" data-day="mon" '+mon['14']['start_time']+'  data-span="0">';
          else if(mon['14.5'] && mon['14.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+mon['14.5']['max_time']+'" data-day="mon"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="mon" data-h="0" data-span="0">';
          if(mon14!='')
            str+=mon14;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(mon14_5!='')
            str+=mon14_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(tue['14'] && tue['14']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+tue['14']['max_time']+'" data-day="tue" '+tue['14']['start_time']+' data-span="0">';
          else if(tue['14.5'] && tue['14.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+tue['14.5']['max_time']+'" data-day="tue"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="tue" data-h="0" data-span="0">';
          if(tue14!='')
            str+=tue14;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(tue14_5!='')
            str+=tue14_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(wed['14'] && wed['14']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+wed['14']['max_time']+'" data-day="wed" '+wed['14']['start_time']+' data-span="0">';
          else if(wed['14.5'] && wed['14.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+wed['14.5']['max_time']+'" data-day="wed"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="wed" data-h="0" data-span="0">';
          if(wed14!='')
            str+=wed14;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(wed14_5!='')
            str+=wed14_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(thu['14'] && thu['14']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+thu['14']['max_time']+'" data-day="thu" '+thu['14']['start_time']+' data-span="0">';
          else if(thu['14.5'] && thu['14.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+thu['14.5']['max_time']+'" data-day="thu"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="thu" data-h="0" data-span="0">';
          if(thu14!='')
            str+=thu14;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(thu14_5!='')
            str+=thu14_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(fri['14'] && fri['14']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+fri['14']['max_time']+'" data-day="fri" '+fri['14']['start_time']+' data-span="0">';
          else if(fri['14.5'] && fri['14.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+fri['14.5']['max_time']+'" data-day="fri"  data-span="0">';
          else
            str+='<td class="bdr_top bdr_left " data-day="fri" data-h="0" data-span="0">';
          if(fri14!='')
            str+=fri14;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(fri14_5!='')
            str+=fri14_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(sat['14'] && sat['14']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sat['14']['max_time']+'" data-day="sat" '+sat['14']['start_time']+' data-span="0">';
          else if(sat['14.5'] && sat['14.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sat['14.5']['max_time']+'" data-day="sat"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="sat" data-h="0" data-span="0">';
          if(sat14!='')
            str+=sat14;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(sat14_5!='')
            str+=sat14_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(sund['14'] && sund['14']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sund['14']['max_time']+'" data-day="sun" '+sund['14']['start_time']+' data-span="0">';
          else if(sund['14.5'] &&sund['14.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sund['14.5']['max_time']+'" data-day="sun"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left bdr_right" data-day="sun" data-h="0" data-span="0">';
          if(sund14!='')
            str+=sund14;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(sund14_5!='')
            str+=sund14_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

        str+='</tr>';





        str+='<tr>';
          str+='<td>15:00</td>';

          if(mon['15'] && mon['15']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+mon['15']['max_time']+'" data-day="mon" '+mon['15']['start_time']+'  data-span="0">';
          else if(mon['15.5'] && mon['15.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+mon['15.5']['max_time']+'" data-day="mon"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="mon" data-h="0" data-span="0">';
          if(mon15!='')
            str+=mon15;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(mon15_5!='')
            str+=mon15_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(tue['15'] && tue['15']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+tue['15']['max_time']+'" data-day="tue" '+tue['15']['start_time']+' data-span="0">';
          else if(tue['15.5'] && tue['15.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+tue['15.5']['max_time']+'" data-day="tue"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="tue" data-h="0" data-span="0">';
          if(tue15!='')
            str+=tue15;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(tue15_5!='')
            str+=tue15_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(wed['15'] && wed['15']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+wed['15']['max_time']+'" data-day="wed" '+wed['15']['start_time']+' data-span="0">';
          else if(wed['15.5'] && wed['15.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+wed['15.5']['max_time']+'" data-day="wed"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="wed" data-h="0" data-span="0">';
          if(wed15!='')
            str+=wed15;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(wed15_5!='')
            str+=wed15_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(thu['15'] && thu['15']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+thu['15']['max_time']+'" data-day="thu" '+thu['15']['start_time']+' data-span="0">';
          else if(thu['15.5'] && thu['15.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+thu['15.5']['max_time']+'" data-day="thu"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="thu" data-h="0" data-span="0">';
          if(thu15!='')
            str+=thu15;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(thu15_5!='')
            str+=thu15_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(fri['15'] && fri['15']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+fri['15']['max_time']+'" data-day="fri" '+fri['15']['start_time']+' data-span="0">';
          else if(fri['15.5'] && fri['15.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+fri['15.5']['max_time']+'" data-day="fri"  data-span="0">';
          else
            str+='<td class="bdr_top bdr_left " data-day="fri" data-h="0" data-span="0">';
          if(fri15!='')
            str+=fri15;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(fri15_5!='')
            str+=fri15_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(sat['15'] && sat['15']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sat['15']['max_time']+'" data-day="sat" '+sat['15']['start_time']+' data-span="0">';
          else if(sat['15.5'] && sat['15.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sat['15.5']['max_time']+'" data-day="sat"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="sat" data-h="0" data-span="0">';
          if(sat15!='')
            str+=sat15;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(sat15_5!='')
            str+=sat15_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(sund['15'] && sund['15']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sund['15']['max_time']+'" data-day="sun" '+sund['15']['start_time']+' data-span="0">';
          else if(sund['15.5'] &&sund['15.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sund['15.5']['max_time']+'" data-day="sun"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left bdr_right" data-day="sun" data-h="0" data-span="0">';
          if(sund15!='')
            str+=sund15;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(sund15_5!='')
            str+=sund15_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

        str+='</tr>';

        str+='<tr>';
          str+='<td>16:00</td>';

          if(mon['16'] && mon['16']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+mon['16']['max_time']+'" data-day="mon" '+mon['16']['start_time']+'  data-span="0">';
          else if(mon['16.5'] && mon['16.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+mon['16.5']['max_time']+'" data-day="mon"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="mon" data-h="0" data-span="0">';
          if(mon16!='')
            str+=mon16;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(mon16_5!='')
            str+=mon16_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(tue['16'] && tue['16']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+tue['16']['max_time']+'" data-day="tue" '+tue['16']['start_time']+' data-span="0">';
          else if(tue['16.5'] && tue['16.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+tue['16.5']['max_time']+'" data-day="tue"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="tue" data-h="0" data-span="0">';
          if(tue16!='')
            str+=tue16;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(tue16_5!='')
            str+=tue16_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(wed['16'] && wed['16']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+wed['16']['max_time']+'" data-day="wed" '+wed['16']['start_time']+' data-span="0">';
          else if(wed['16.5'] && wed['16.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+wed['16.5']['max_time']+'" data-day="wed"  data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="wed" data-h="0" data-span="0">';
          if(wed16!='')
            str+=wed16;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(wed16_5!='')
            str+=wed16_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(thu['16'] && thu['16']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+thu['16']['max_time']+'" data-day="thu" '+thu['16']['start_time']+' data-span="0">';
          else if(thu['16.5'] && thu['16.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+thu['16.5']['max_time']+'" data-day="thu" data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="thu" data-h="0" data-span="0">';
          if(thu16!='')
            str+=thu16;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(thu16_5!='')
            str+=thu16_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(fri['16'] && fri['16']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+fri['16']['max_time']+'" data-day="fri" '+fri['16']['start_time']+' data-span="0">';
          else if(fri['16.5'] && fri['16.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+fri['16.5']['max_time']+'" data-day="fri" data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="fri" data-h="0" data-span="0">';
          if(fri16!='')
            str+=fri16;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(fri16_5!='')
            str+=fri16_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(sat['16'] && sat['16']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sat['16']['max_time']+'" data-day="sat" '+sat['16']['start_time']+' data-span="0">';
          else if(sat['16.5'] && sat['16.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sat['16.5']['max_time']+'" data-day="sat" data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="sat" data-h="0" data-span="0">';
          if(sat16!='')
            str+=sat16;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(sat16_5!='')
            str+=sat16_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          if(sund['16'] && sund['16']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sund['16']['max_time']+'" data-day="sun" '+sund['16']['start_time']+' data-span="0">';
          else if(sund['16.5'] &&sund['16.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sund['16.5']['max_time']+'" data-day="sun" data-span="1">';
          else
            str+='<td class="bdr_top bdr_left bdr_right" data-day="sun" data-h="0" data-span="0">';
          if(sund16!='')
            str+=sund16;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(sund16_5!='')
            str+=sund16_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

          str+='</tr>';





          str+='<tr>';
          str+='<td>17:00</td>';

          if(mon['17'] && mon['17']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+mon['17']['max_time']+'" data-day="mon" '+mon['17']['start_time']+' data-span="0">';
          else if(mon['17.5'] && mon['17.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+mon['17.5']['max_time']+'" data-day="mon" data-span="1">';
          else
            str+='<td class="bdr_top bdr_left "  data-day="mon" data-h="0" data-span="0">';
          if(mon17!='')
            str+=mon17;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(mon17_5!='')
            str+=mon17_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';
          
          if(tue['17'] && tue['17']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+tue['17']['max_time']+'" data-day="tue" '+tue['17']['start_time']+' data-span="0">';
          else if(tue['17.5'] && tue['17.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+tue['17.5']['max_time']+'" data-day="tue" data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="tue" data-h="0" data-span="0">';
          if(tue17!='')
            str+=tue17;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(tue17_5!='')
            str+=tue17_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';
          
          if(wed['17'] && wed['17']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+wed['17']['max_time']+'" data-day="wed" '+wed['17']['start_time']+' data-span="0">';
          else if(wed['17.5'] && wed['17.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+wed['17.5']['max_time']+'" data-day="wed" data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="wed" data-h="0" data-span="0">';
          if(wed17!='')
            str+=wed17;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(wed17_5!='')
            str+=wed17_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';
          
          if(thu['17'] && thu['17']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+thu['17']['max_time']+'" data-day="thu" '+thu['17']['start_time']+' data-span="0">';
          else if(thu['17.5'] && thu['17.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+thu['17.5']['max_time']+'" data-day="thu" data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="thu" data-h="0" data-span="0">';
          if(thu17!='')
            str+=thu17;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(thu17_5!='')
            str+=thu17_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';
          
          if(fri['17'] && fri['17']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+fri['17']['max_time']+'" data-day="fri" '+fri['17']['start_time']+' data-span="0">';
          else if(fri['17.5'] && fri['17.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+fri['17.5']['max_time']+'" data-day="fri" data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="fri" data-h="0" data-span="0">';
          if(fri17!='')
            str+=fri17;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(fri17_5!='')
            str+=fri17_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';
          
          if(sat['17'] && sat['17']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sat['17']['max_time']+'" data-day="sat" '+sat['17']['start_time']+' data-span="0">';
          else if(sat['17.5'] && sat['17.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sat['17.5']['max_time']+'" data-day="sat" data-span="1">';
          else
            str+='<td class="bdr_top bdr_left " data-day="sat" data-h="0" data-span="0">';
          if(sat17!='')
            str+=sat17;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(sat17_5!='')
            str+=sat17_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';
          
          if(sund['17'] && sund['17']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sund['17']['max_time']+'" data-day="sund" '+sund['17']['start_time']+' data-span="0">';
          else if(sund['17.5'] && sund['17.5']['max_time'])
            str+='<td class="bdr_top bdr_left " data-h="'+sund['17.5']['max_time']+'" data-day="sund" data-span="1">';
          else
            str+='<td class="bdr_top bdr_left bdr_right " data-day="sun" data-h="0" data-span="0">';
          if(sund17!='')
            str+=sund17;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(sund17_5!='')
            str+=sund17_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

        str+='</tr>';

        str+='<tr>';
          str+='<td>18:00</td>';

          str+='<td class="bdr_top bdr_left "  data-day="mon" data-h="0" data-span="0">';

          if(typeof mon18 != 'undefined' && mon18!='')
            str+=mon18;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(typeof mon18_5 != 'undefined' && mon18_5!='')
            str+=mon18_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';
          
          str+='<td class="bdr_top bdr_left " data-day="tue" data-h="0" data-span="0">';

          if(typeof tue18 != 'undefined' && tue18!='')
            str+=tue18;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(typeof tue18_5 != 'undefined' && tue18_5!='')
            str+=tue18_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';
          
          str+='<td class="bdr_top bdr_left " data-day="wed" data-h="0" data-span="0">';

          if(typeof wed18 != 'undefined' && wed18!='')
            str+=wed18;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(typeof wed18_5 != 'undefined' && wed18_5!='')
            str+=wed18_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';
          
          str+='<td class="bdr_top bdr_left " data-day="thu" data-h="0" data-span="0">';

          if(typeof thu18 != 'undefined' && thu18!='')
            str+=thu18;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(typeof thu18_5 != 'undefined' && thu18_5!='')
            str+=thu18_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';
          
          str+='<td class="bdr_top bdr_left " data-day="fri" data-h="0" data-span="0">';

          if(typeof fri18 != 'undefined' && fri18!='')
            str+=fri18;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(typeof fri18_5 != 'undefined' && fri18_5!='')
            str+=fri18_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';
          
          str+='<td class="bdr_top bdr_left " data-day="sat" data-h="0" data-span="0">';

          if(typeof sat18 != 'undefined' && sat18!='')
            str+=sat18;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(typeof sat18_5 != 'undefined' && sat18_5!='')
            str+=sat18_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';
          
          str+='<td class="bdr_top bdr_left bdr_right" data-day="sun" data-h="0" data-span="0">';

          if(typeof sund18 != 'undefined' && sund18!='')
            str+=sund18;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(typeof sund18_5 != 'undefined' && sund18_5!='')
            str+=sund18_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

        str+='</tr>';

        str+='<tr>';
          str+='<td>19:00</td>';

          str+='<td class="bdr_top bdr_left bdr_bottom border-bottom-left-radius"  data-day="mon" data-h="0" data-span="0">';

          if(typeof mon19 != 'undefined' && mon19!='')
            str+=mon19;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(typeof mon19_5 != 'undefined' && mon19_5!='')
            str+=mon19_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';
          
          str+='<td class="bdr_top bdr_left bdr_bottom" data-day="tue" data-h="0" data-span="0">';

          if(typeof tue19 != 'undefined' && tue19!='')
            str+=tue19;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(typeof tue19_5 != 'undefined' && tue19_5!='')
            str+=tue19_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';
          
          str+='<td class="bdr_top bdr_left bdr_bottom" data-day="wed" data-h="0" data-span="0">';

          if(typeof wed19 != 'undefined' && wed19!='')
            str+=wed19;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(typeof wed19_5 != 'undefined' && wed19_5!='')
            str+=wed19_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';
          
          str+='<td class="bdr_top bdr_left bdr_bottom" data-day="thu" data-h="0" data-span="0">';

          if(typeof thu19 != 'undefined' && thu19!='')
            str+=thu19;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(typeof thu19_5 != 'undefined' && thu19_5!='')
            str+=thu19_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';
          
          str+='<td class="bdr_top bdr_left bdr_bottom" data-day="fri" data-h="0" data-span="0">';

          if(typeof fri19 != 'undefined' && fri19!='')
            str+=fri19;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(typeof fri19_5 != 'undefined' && fri19_5!='')
            str+=fri19_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';
          
          str+='<td class="bdr_top bdr_left bdr_bottom" data-day="sat" data-h="0" data-span="0">';

          if(typeof sat19 != 'undefined' && sat19!='')
            str+=sat19;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(typeof sat19_5 != 'undefined' && sat19_5!='')
            str+=sat19_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';
          
          str+='<td class="bdr_top bdr_left bdr_bottom bdr_right border-bottom-right-radius" data-day="sun" data-h="0" data-span="0">';

          if(typeof sund19 != 'undefined' && sund19!='')
            str+=sund19;
          else{
            str+='<div class="bk_sec"></div>';
          }
          if(typeof sund19_5 != 'undefined' && sund19_5!='')
            str+=sund19_5;
          else{
            str+='<div class="bk_sec"></div>';
          }
          str+='</td>';

        str+='<tr>';

        $('#tm_bks').append(str);

        format_table('tm_bks');
        $('.clt_tm, .sel_team_member_sel').show();
        $('.clt_all').hide();
      }
    },
    error:function(e){
      $('#modalajx').hide();
    }
  })
}

function format_table(id){
  $('#'+id).find('tr').find('td').each(function(){
    let h = $(this).attr('data-h');
    if(h && h>0){
      let dy = $(this).attr('data-day');
      let sp = $(this).attr('data-span');

      let spn = parseInt(h)+parseInt(sp);

      let h1=h;
      if(sp==0)
        h1 = parseInt(h)-1;

      $(this).closest('tr').nextAll(':lt('+h1+')').each(function(){
        // console.log($(this).find('td[data-day="'+dy+'"]'));
        $(this).find('td[data-day="'+dy+'"]').remove();
      });
      console.log(spn);
      $(this).attr('rowspan',spn);
    }
  });
}

function get_td_str(ob){

  let st_time = get_time24(ob['start_time']);

  var str=`<div class="bk_sec" data-bi="${ob['book_id']}">
              <div class="bk_t_s d-flex justify-content-between">
                <div><span>${ob['booking_detail']['order_id']}</span>`;

                if(ob['booking_detail']['photoshoot']=='Y')
                 str+=`<span><i class="fa fa-camera"></i></span>`;

                if(ob['booking_detail']['status']=='accept')
                  str+=`<span class="bk_status_spn f-8">Confirmed</span></div>`;


                 str+=`<div><span class="f-8">Online</span></div>
              </div>
              <div class="bk_t2_s d-flex justify-content-between align-items-center">
                <span class="f-8"><i class="fa fa-calendar"></i></span>
                <span class="f-10">Edit Request</span>
              </div>
              <div class="bk_t3_s d-flex justify-content-between align-items-center">
                <div class="bk_time">
                  ${st_time} - ${ob['end_time']}
                </div>
                <div class="bk_btn_s">
                  <button type="button" class="acc_btn">Accept</button>
                  <button type="button" class="rej_btn">Reject</button>
                </div>
              </div>
              <div class="bk_t4_s">
                <span class="bk_srv">${ob['booking_service']['service_name']}</span>
                <span class="bk_cs_name">IC - ${ob['cust_name']}</span>`;
                if(ob['booking_detail']['location_type']=='f')
                  str+=`<span class="bk_lct">FL</span>`;
                else
                  str+=`<span class="bk_lct">DL</span>`;
                
                str+=`<span class="bk_note">Internal Note</span>
                <button class="bk_msg">Message</button>
              </div>
            </div>`;

  return str;
}

function get_time24(tm){
  tm2 = parseInt(tm);
  if(tm2<8 && tm2>0){
    var tm1= tm2+12;
    // console.log('aaaa'+tm1);
    tm1 = tm1+':00';
    // console.log('aaaa'+tm1);
    return tm1;
  }

  return tm;
}
</script>
</body>
</html>