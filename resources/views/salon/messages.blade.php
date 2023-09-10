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
  

.bdr_left{border-left: 1px solid #EFEFEF;}.bdr_right{border-right: 1px solid #EFEFEF;}.bdr_bottom{border-bottom: 1px solid #EFEFEF;}.bdr_top{border-top: 1px solid #EFEFEF;}
.border-top-left-radius{border-top-left-radius: 8px}
.border-top-right-radius{border-top-right-radius: 8px}
.border-bottom-left-radius{border-bottom-left-radius: 8px}
.border-bottom-right-radius{border-bottom-right-radius: 8px}

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
  padding: 10px 20px;
  display: block;
  margin-right: 20px;
  display: flex;
  align-items:center;
}
.flt_sec .notif_span{
  display: block;
  color: #B3B3B3;
  margin-top: -4px;
}

  .custom_sel{position: relative;margin-top: -4px;}
  .custom_sel ul.one_rw, .fltr_ul_sec{background: #fff;
        position: absolute;
        z-index: 10000;
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
    .custom_sel.open ul.one_rw, .custom_sel.open .fltr_ul_sec{display: block;right: 0;margin-top: 13px;margin-right: -20px;height: 15rem;}
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
      width: 225px;
    }
    ul.fltr_ul{
      float: left;
      list-style: none;
      padding: 7px 12px;
      margin-top: 10px;  
      width: 100%;
    }
    ul.fltr_ul li{
      /* padding: 4px; */
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
        margin-top: 3px;
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
      color: #656565;
    }
    
    .fiter_sec1{
      width: 50%;
    }
   
    
    .fac{
        font-weight: bold;
        font-style: normal;
        font-size: 21px;
        color: #000;
        position: absolute;
        top: -5px;
        left: 5px;
    }
   
    .trash_spn{
      color: #F16060;
    }
    .isearch_sec{
      position: relative;
      margin-right: -10px;
    }
    .isearch_inp{
      border: 1px solid #EFEFEF;
      border-radius: 6px;
      padding: 12px 24px 12px 10px;
      width: 392px;
      max-width: 100%;
    }
    .isearch_ic_spn{
      color: #cfcfcf;
      position: absolute;
      top: 2px;
      right: 2px;
      padding: 10px;
      background: #fff;
    }
   .chat_list_sec{
    max-height: 100vh;
    overflow-y:auto; 
   }
   .chat_section{
    border: 1px solid #E4E4E4;
    border-radius: 8px;
   }
   .chat_name_sec{
    padding: 20px;
    border-right: 1px solid #E4E4E4;
   }
   .chat_name_sec:not(:last-child){
    border-bottom: 1px solid #E4E4E4;
   }
   .bk_sts_spn{
    font-size: 12px;
    /*background: #d9d9d9;*/
    border-radius: 6px;
    padding: 2px 8px;
    background: #f2f2f2;

   }

   .chat_tp{
    margin-bottom: 15px;
    margin-top: -23px;
   }
   .chat_nm_spn{
    font-weight: 600;
    font-size: 18px;
    line-height: 24px;
   }
   .chat_lct_spn{
    font-size: 12px;
    line-height: 16px;
   }
   .chat_name_sec.active{
    background: #E5E5E5;
   }
   .chat_name_sec.active .bk_sts_spn{
    background: #d9d9d9!important;
   }
   .msg_date{
    font-size: 14px;
    line-height: 19px;
    text-align: center;
    color: #656565;

   }
   .chat_msg_section{
    padding: 10px 0;
    position: relative;
    height: 100%;
    margin-right: 20px;
    max-height: 100vh;
   }
   .msg_name{
    color: #000000;
    font-weight: 600;
    font-size: 14px;
    line-height: 19px;
   }
   .msg_time{
    font-weight: 400;
    font-size: 12px;
    line-height: 16px;
    color: #656565;
   }
   .msg_p{
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 10px;
   }
   .chat_msg{
    margin-top: 30px;
   }
   .msg_p img{
    width: 55px;
    height: 55px;
    border-radius: 5px;
    margin-right: 6px;
    box-shadow:1px 0px 7px 0px #e7e7e7;
   }
   .write_msg_sec{
    position: absolute;
    bottom: 20px;
    background: #f2f2f2;
    border: 1px solid #E9E9E9;
    border-radius: 6px;
    width: 100%;
    padding: 12px 20px;
   }
   .write_msg_sec input{
    background: transparent;
    border: none;
    width: 100%;
    padding: 0 30px;
    resize: auto;
        resize: vertical;
   }
   .write_msg_sec input:focus-visible{
    outline:none;
   }
   .write_msg_sec .msg_send_spn{
    position: absolute;
    right: 20px;
   }
   .write_msg_sec .link_img_spn{
    position: absolute;
    left: 20px;
   }

   .msg_section{
      max-height: calc(100vh - 90px);
      overflow-y: auto;
      /* margin-right: -20px; */
   }
   .chat_list_sec::-webkit-scrollbar, .msg_section::-webkit-scrollbar {
    width: 3px;
  }
  .chat_list_sec::-webkit-scrollbar-track, .msg_section::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 20px;
  }
  .chat_list_sec::-webkit-scrollbar-thumb, .msg_section::-webkit-scrollbar-thumb {
    background: #888;
  }
  .chat_list_sec::-webkit-scrollbar-thumb:hover,.msg_section::-webkit-scrollbar-thumb:hover  {
    background: #555;
  }

  /* Niraj */
  .nav{
    border-bottom:none !important;
  }
  .small_box {
  background: linear-gradient(#25b9bc, #59c398);
  width: 100%;
  height: 5px;
  margin-top: 10px;
  }
  .circle {
    width: 13px;
height: 13px;
border-radius: 50%;
background: linear-gradient(#25b9bc, #59c398);
display: flex;
justify-content: center;
align-items: center;
font-size: 12px;
color: white;
font-weight: bold;
position: relative;
float: inherit;
left: 65%;
/* top: 21px; */
display: inline-flex;
vertical-align: middle;
  }

  .numbers {
    display: inline-block;
    transform: scale(0.8);
    margin-left: -1px;
    margin-top: -4px;
  }

 .add_span span,
 .filter_span span{
    margin-top: -2px;
  }

  .chat_list_sec::-webkit-scrollbar-thumb, .msg_section::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 20px;
    border: 3px solid gray;
  }
  .notif_span{
    cursor: pointer;
  }
  .item {
    padding: 7px 2px;
    display: flex;
    cursor: pointer;
    border-bottom: 1px solid rgb(0, 0, 0, 0.1);
    overflow: hidden;
  }
  .notif{
		position: absolute;
    background: #FFFFFF;
    box-shadow: 0px 0px 20px rgba(16, 8, 63, 0.09);
    border-radius: 8px;
    width: 202px;
    overflow-y: hidden;
    padding: 5px 15px 0px 10px;
    display: none;
    z-index: 999;
    margin-top: 11.2rem;
    margin-right: -7px;
	}

  /* popup */
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

#popupContent {
  position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
background-color: #fff;
padding: 30px;
border-radius: 12px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
width: 377px;
height: 246px;
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

/* Additional styles to format the checkboxes nicely (optional) */
label {
  display: block;
  margin-bottom: 15px;
}

input[type="checkbox"] {
  margin-right: 5px;
}

#saveButton {
  width:100%;
  width: 100%;
background: #66C68F;
border: none;
height: 45px;
color: white;
border-radius: 8px;
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

#tick1, #tick2{
  display: none;
  font-size: 9px !important;
  font-weight: 700;
  margin-left: 0.5px;
  margin-top: 0.5px;
}

.fa-check{
  color: rgba(102, 198, 143, 1);
  font-size: 8px !important;
}

.fa {
  font-family: var(--fa-style-family,);
  font-weight: var(--fa-style,900);
}

.fa, .fa-brands, .fa-duotone, .fa-light, .fa-regular, .fa-solid, .fa-thin, .fab, .fad, .fal, .far, .fas, .fat {
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  display: var(--fa-display,inline-block);
  font-style: normal;
  font-variant: normal;
  line-height: 1;
  text-rendering: auto;
}

.poptitle {
  font-weight: 700;
  font-size: 18px;
  line-height: 24px;
  text-align: center;
  color: #000000;
  margin-top: -7px;
}

.cross-symbol {
  font-size: 16px; /* Adjust the font size to make it smaller */
  font-weight: 300; /* Adjust the font weight to make it thinner */
}


  /* .filter_inp{border-radius: 33px;border: 1px solid #B3B3B3;width: 106px;padding: 7px 20px;cursor: pointer;} */
</style>

<!--Tabs Start-->
<div class="container mb-4">
   <ul class="nav nav-pills nav-fill">
      <li class="nav-item">
         <a class="nav-link active pg_ttl" aria-current="page" href="#">Inbox</a>
      </li>
   </ul>
   <div class="small_box"></div>
</div>
<!--Tabs End-->

<div class="container">
  <div class="flt_sec d-flex bg-grey mt-40">
    <div id="openPopupButton" class="add_span"><span>Settings &nbsp;</span>
      <div class='custom_sel'>
          <span class="custom_sel_ic flt"><img src="https://cynnaenterprises.com/mollure/public/images/Icons/first Icons copy/Interface/Settings.svg" alt="" width="20"></span>
          <!-- <ul class="add_ul one_rw">
              <li>
                  <label>
                      <span>Edit Bookings</span>
                  </label>
              </li>
              <li>
                  <label>
                      <span>Reschedule booking</span>
                  </label>
              </li>
              <li>
                  <label>
                      <span>Cancel Booking</span>
                  </label>
              </li>
          
          </ul> -->
      </div>
    </div>


    <!-- <input type="text" id="filter_inp" class="filter_inp custom_sel_inp" placeholder="Filter" readonly>
                                <span class="custom_sel_ic flt" style="right:21px"><img src="https://cynnaenterprises.com/mollure/public/images/Icons/first Icons copy/Interface/Slider_03.svg"></span> -->


    <div class="filter_span"><span>Filter &nbsp;</span>
      <div class='custom_sel'>
          <span class="custom_sel_ic flt"><img src="https://cynnaenterprises.com/mollure/public/images/Icons/first Icons copy/Interface/Slider_03.svg" alt="" width="20"></span>
          <div id="fltr_ul_sec" class="fltr_ul_sec">
            <ul class="fltr_ul">
              <li>
                Clients
              </li>
              <li class="sf_tm_li" style="margin-top: 18px;">
                  <label for="sf_cl_chk_all">All</label>
                  <label class="custom_check">
                      <input type="checkbox" class="sf_ct_chk" id="sf_cl_chk_all" name="ct[]" value="all">
                      <span class="checkmark"></span>
                  </label>
              </li>
              <li class="sf_tm_li">
                  <label for="sf_cl_chk_ind">Individual Client</label>
                  <label class="custom_check">
                      <input type="checkbox" class="sf_ct_chk" id="sf_cl_chk_ind" name="ct[]" value="individual">
                      <span class="checkmark"></span>
                  </label>
              </li>
              <li class="sf_tm_li">
                  <label for="sf_cl_chk_cmc">Company Client</label>
                  <label class="custom_check">
                      <input type="checkbox" class="sf_ct_chk" id="sf_cl_chk_cmc" name="ct[]" value="company">
                      <span class="checkmark"></span>
                  </label>
              </li>
              <li class="sf_tm_li">
                  <label for="sf_cl_chk_nsh">No Shows</label>
                  <label class="custom_check">
                      <input type="checkbox" class="sf_ct_chk" id="sf_cl_chk_nsh" name="ct[]" value="no_show">
                      <span class="checkmark"></span>
                  </label>
              </li>
              <li class="sf_tm_li">
                  <label for="sf_cl_chk_blc">Blocked</label>
                  <label class="custom_check">
                      <input type="checkbox" class="sf_ct_chk" id="sf_cl_chk_blc" name="ct[]" value="blocked">
                      <span class="checkmark"></span>
                  </label>
              </li>
            </ul>


          </div>
          
      </div>
    </div>
    
    <span class="notif_span"><img id="toggleButton" src="https://cynnaenterprises.com/mollure/public/images/Icons/first Icons copy/PNGS/Group 1000007637.png" alt="" width="20"></span>
      <ul id="notificationList" class="notif">
         <li class="item d-flex justify-content-between align-items-center">
            <span>Lorem Ispum</span>
        </li>
        <li class="item d-flex justify-content-between align-items-center">
              <span>Lorem Ispum</span>
        </li>
        <li class="item d-flex justify-content-between align-items-center">
            <span>Lorem Ispum</span>
        </li>
    </ul>
  </div>
</div>
<div class="container">
  <div class="flt_sec d-flex mt-40">
    <div class="isearch_sec">
      <input type="text" name="isearch_inp" class="isearch_inp" placeholder="Client Name & Booking ID">
      <span class="isearch_ic_spn"><i class="fa fa-search"></i></span>
    </div>
  </div>
</div>

<div class="container mt-40">
  <div class="chat_section">
  
    <div class="row">
      <div class="col-md-3">
        <div class="chat_list_sec">
          <div class="chat_name_sec">
            <div class="circle">
              <div class="numbers">3</div>
            </div>
            <div class="chat_tp d-flex justify-content-between">
              <div>
                231  <img src="{{URL::asset('public/icons/camera_ic.png')}}">
              </div>
              <div>
                <span class="bk_sts_spn">Confirmed</span>
              </div>
            </div>
            <div class="chat_nm d-flex justify-content-between align-items-center mb-20">
              <span class=" chat_nm_spn">Lissa</span>
              <span class="chat_edt_spn f-14">Edit Request</span>
            </div>
            <div class="chat_dt d-flex justify-content-between">
              <span class="chat_lct_spn">FL</span>
              <span class="trash_spn chat_del-spn"><img src="https://cynnaenterprises.com/mollure/public/images/Icons/first Icons copy/PNGS/Interface/Trash_Empty.png" alt="" width="20"></span>
            </div>
          </div>
          <div class="chat_name_sec active">
          <div class="circle">
              <div class="numbers">3</div>
            </div>
            <div class="chat_tp d-flex justify-content-between">
              <div>
                231  <img src="{{URL::asset('public/icons/camera_ic.png')}}">
              </div>
              <div>
                <span class="bk_sts_spn">Confirmed</span>
              </div>
            </div>
            <div class="chat_nm d-flex justify-content-between align-items-center mb-20">
              <span class="fw-bold chat_nm_spn">Lissa</span>
              <span class="chat_edt_spn f-14">Edit Request</span>
            </div>
            <div class="chat_dt d-flex justify-content-between">
              <span class="chat_lct_spn">FL</span>
              <span class="trash_spn chat_del-spn"><i class="fa fa-trach"></i></span>
            </div>
          </div>
          <div class="chat_name_sec ">
          <div class="circle">
              <div class="numbers">3</div>
            </div>
            <div class="chat_tp d-flex justify-content-between">
              <div>
                231  <img src="{{URL::asset('public/icons/camera_ic.png')}}">
              </div>
              <div>
                <span class="bk_sts_spn">Confirmed</span>
              </div>
            </div>
            <div class="chat_nm d-flex justify-content-between align-items-center mb-20">
              <span class="fw-bold chat_nm_spn">Lissa</span>
              <span class="chat_edt_spn f-14">Edit Request</span>
            </div>
            <div class="chat_dt d-flex justify-content-between">
              <span class="chat_lct_spn">FL</span>
              <span class="trash_spn chat_del-spn"><i class="fa fa-trach"></i></span>
            </div>
          </div>
          <div class="chat_name_sec ">
          <div class="circle">
              <div class="numbers">3</div>
            </div>
            <div class="chat_tp d-flex justify-content-between">
              <div>
                231  <img src="{{URL::asset('public/icons/camera_ic.png')}}">
              </div>
              <div>
                <span class="bk_sts_spn">Confirmed</span>
              </div>
            </div>
            <div class="chat_nm d-flex justify-content-between align-items-center mb-20">
              <span class="fw-bold chat_nm_spn">Lissa</span>
              <span class="chat_edt_spn f-14">Edit Request</span>
            </div>
            <div class="chat_dt d-flex justify-content-between">
              <span class="chat_lct_spn">FL</span>
              <span class="trash_spn chat_del-spn"><i class="fa fa-trach"></i></span>
            </div>
          </div>
          <div class="chat_name_sec ">
          <div class="circle">
              <div class="numbers">3</div>
            </div>
            <div class="chat_tp d-flex justify-content-between">
              <div>
                231  <img src="{{URL::asset('public/icons/camera_ic.png')}}">
              </div>
              <div>
                <span class="bk_sts_spn">Confirmed</span>
              </div>
            </div>
            <div class="chat_nm d-flex justify-content-between align-items-center mb-20">
              <span class="fw-bold chat_nm_spn">Lissa</span>
              <span class="chat_edt_spn f-14">Edit Request</span>
            </div>
            <div class="chat_dt d-flex justify-content-between">
              <span class="chat_lct_spn">FL</span>
              <span class="trash_spn chat_del-spn"><i class="fa fa-trach"></i></span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-9">
        <div class="chat_msg_section">
          <div class="msg_section">
            <div class="chat_msg">
              <p class="msg_date">April 11, 2023</p>
              <p class="msg_name">Craig Martha <span class="msg_time">08.00 pm</span></p>
              <p class="msg_p"> 
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
              </p>
            </div>
            <div class="chat_msg">
              <p class="msg_date">April 11, 2023</p>
              <p class="msg_name">Craig Martha <span class="msg_time">08.00 pm</span></p>
              <p class="msg_p"> 
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
              </p>
            </div>
            <div class="chat_msg">
              <p class="msg_date">April 11, 2023</p>
              <p class="msg_name">Craig Martha <span class="msg_time">08.00 pm</span></p>
              <p class="msg_p"> 
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
              </p>
            </div>
            <div class="chat_msg">
              <p class="msg_date">April 11, 2023</p>
              <p class="msg_name">Craig Martha <span class="msg_time">08.00 pm</span></p>
              <p class="msg_p"> 
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
              </p>
            </div>
            <div class="chat_msg">
              <p class="msg_date">April 11, 2023</p>
              <p class="msg_name">Craig Martha <span class="msg_time">08.00 pm</span></p>
              <p class="msg_p"> 
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
              </p>
            </div>
            <div class="chat_msg">
              <p class="msg_date">April 11, 2023</p>
              <p class="msg_name">Craig Martha <span class="msg_time">08.00 pm</span></p>
              <p class="msg_p"> 
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
              </p>
            </div>
            <div class="chat_msg">
              <p class="msg_date">April 11, 2023</p>
              <p class="msg_name">Craig Martha <span class="msg_time">08.00 pm</span></p>
              <p class="msg_p"> 
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
              </p>
            </div>
            <div class="chat_msg">
              <p class="msg_date">April 11, 2023</p>
              <p class="msg_name">Craig Martha <span class="msg_time">08.00 pm</span></p>
              <p class="msg_p"> 
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
              </p>
            </div><div class="chat_msg">
              <p class="msg_date">April 11, 2023</p>
              <p class="msg_name">Craig Martha <span class="msg_time">08.00 pm</span></p>
              <p class="msg_p"> 
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
              </p>
            </div>

            <div class="chat_msg">
              <p class="msg_date">April 11, 2023</p>
              <p class="msg_name">Craig Martha <span class="msg_time">08.00 pm</span></p>
              <p class="msg_p"> 
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
              </p>
            </div>
            <div class="chat_msg">
              <p class="msg_date">April 11, 2023</p>
              <p class="msg_name">Craig Martha <span class="msg_time">08.00 pm</span></p>
              <p class="msg_p"> 
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
              </p>
            </div><div class="chat_msg">
              <p class="msg_date">April 11, 2023</p>
              <p class="msg_name">Craig Martha <span class="msg_time">08.00 pm</span></p>
              <p class="msg_p"> 
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
              </p>
            </div>

            <div class="chat_msg">
              <p class="msg_date">April 11, 2023</p>
              <p class="msg_name">Craig Martha <span class="msg_time">08.00 pm</span></p>
              <div class="msg_p"> 
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                <img src="{{URL::asset('public/images/1677693180.png')}}"> 
                <img src="{{URL::asset('public/images/1677693180.png')}}">
              </div>
            </div>
          </div>
          <div class="write_msg_sec">
              <span class="link_img_spn"><img src="{{URL::asset('public/icons/link_ic.png')}}"></span>
              <input type-="text" name="msg_inp" id="msg_inp" placeholder="Type Messages">
              <span class="msg_send_spn"><img src="{{URL::asset('public/icons/send_ic.png')}}"></span>
            </div>
        </div>
      </div>
    </div>
  </div>  
</div>

<div id="popupWrapper">
    <div id="popupContent">
      <button id="closePopupButton"><div class="cross-symbol"><img src="https://cynnaenterprises.com/mollure/public/images/model/close.svg"></div></button>
      <h3 class="poptitle"><strong>Always delete messages of</strong></h3>
      <label style="margin-top:38px;">
          <span>Complete Bookings</span>
          <span class="sv-checkbox">
            <i id="tick1" class="fa-light fa-check" aria-hidden="true"></i>
        </span>
      </label>
      <label>
        <span>Cancelled Bookings</span>
        <span class="sv-checkbox">
          <i id="tick2" class="fa-light fa-check" aria-hidden="true"></i>
        </span>
      </label>
      <button id="saveButton">Save</button>
    </div>
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
// Add a mouseup event listener to the document
$(document).mouseup(function (event) {
    const customSelect = $('.custom_sel');
    if (!customSelect.is(event.target) && customSelect.has(event.target).length === 0) {
        customSelect.removeClass('open');
    }
});

</script>
<script>
    // Get references to the image and the ul element
    const toggleButton = document.getElementById('toggleButton');
    const notificationList = document.getElementById('notificationList');

    // Add click event listener to the image
    toggleButton.addEventListener('click', function () {
        // Check the current display style of the ul element
        const displayStyle = getComputedStyle(notificationList).display;

        // Toggle the display property based on its current value
        if (displayStyle === 'none') {
            notificationList.style.display = 'block';
            window.addEventListener('click', closePopupOnClickOutside);
        } else {
            notificationList.style.display = 'none';
            window.removeEventListener('click', closePopupOnClickOutside);
        }
    });
    function closePopup() {
    notificationList.style.display = 'none';

    // Remove the click event listener from the window object
    window.removeEventListener('click', closePopupOnClickOutside);
}

// Function to check if the click occurred outside the list and toggle button and close the popup
function closePopupOnClickOutside(event) {
    if (!notificationList.contains(event.target) && event.target !== toggleButton) {
        closePopup();
    }
}


    // Get references to the list items
    const listItems = document.querySelectorAll('#notificationList li');

    // Add click event listeners to each list item
    listItems.forEach(function (item) {
        item.addEventListener('click', function () {
            // Hide the ul element when a list item is clicked
            notificationList.style.display = 'none';
        });
    });

    // popup
    const openPopupButton = document.getElementById('openPopupButton');
const popupWrapper = document.getElementById('popupWrapper');
const closePopupButton = document.getElementById('closePopupButton');
const saveButton = document.getElementById('saveButton');
const other = document.getElementById('fltr_ul_sec');

openPopupButton.addEventListener('click', () => {
  popupWrapper.style.display = 'block';
  document.body.style.overflow = 'hidden'; // To prevent scrolling of the background
  other.style.display = 'none';
});

closePopupButton.addEventListener('click', () => {
  popupWrapper.style.display = 'none';
  document.body.style.overflow = 'auto'; // Restore scrolling on the background
  other.style.display = '';
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

</script>
</body>
</html>