@include('_header1')
<style type="text/css">
    .navbar-expand-xl .navbar-collapse {
        justify-content: end;
    }
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
.flt_sec{padding: 10px;justify-content: end;align-items: center;}
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

  .custom_sel{position: relative;}
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
    .custom_sel.open ul.one_rw, .custom_sel.open .fltr_ul_sec{display: block;right: 0}
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
    
    .pg_headh{
    font-weight: 500;
    font-size: 32px;
    line-height: 43px;
    text-transform: capitalize;
    color: #000000;
    text-align: center;
}
.pg_headhr{
    background: linear-gradient(90deg, #21B8BF 0%, #66C68F 100%);
    height: 5px;
    margin-bottom: 40px;
}
.sync_btn{
    font-weight: 400;
    font-size: 16px;
    line-height: 21px;
    text-transform: capitalize;

    color: #000000;
    border: 1px solid #B3B3B3;
    border-radius: 33px;
    padding: 8px 20px;
    background-color: #fff;
    margin-right: 20px;
}
.booking_list_sec{
    overflow-x: auto;
}
.booking_list_sec .list_tbl {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    border: 1px solid #E4E4E4;
    border-radius: 8px;
}
.booking_list_sec .list_tbl thead tr td {
    font-weight: 600;
    font-size: 16px;
    line-height: 21px;
    text-align: center;
    text-transform: capitalize;
    color: #000000;
    /*min-height: 70px;*/
    padding: 13px;
}
.booking_list_sec .list_tbl tbody tr td:not(.price) {
    padding: 8px
}
.rej_btn {
    background: #F16060;
    border-radius: 2px;
    /* width: 48px; */
    height: 23px;
    padding: 2px 8px;
    color: #FFFFFF;
    line-height: 13px;
    font-size: 12px;
    border: none;

}
.acc_btn {
    background: #66C68F;
    border-radius: 2px;
    /* width: 48px; */
    height: 23px;
    padding: 2px 8px;
    color: #FFFFFF;
    line-height: 13px;
    font-size: 12px;
    border: none;
    margin-right: 3px;
}
.msg_spn{
      background: #eff9f3;
      padding: 10px 14px;
      text-align: center;
      border-radius: 8px;
}
.cancel_bk_tr td{
    text-decoration: line-through;
    background: #E5E5E5;
}
.ttl_spn_bk{
  padding: 10px 0;
  text-align: center;
}

.trash_spn, .cancel_text{
  color: #F16060;
}
</style>

<!--Tabs Start-->
<div class="container mb-4">
   <div class="row">
        <div class="col-md-12">
            <h2 class="pg_headh">Bookings</h2>
            <div class="pg_headhr"></div>
        </div>
    </div>
</div>
<!--Tabs End-->

<div class="container">
  <div class="top_nav_sec d-flex">
    <div class="top_nav bdr_right bdr_top bdr_left bdr_bottom border-top-left-radius border-bottom-left-radius">
      <span>Requested</span>
    </div>
    <div class="top_nav bdr_right bdr_top bdr_bottom active">
      <span>Confirmed</span>
    </div>
    <div class="top_nav bdr_bottom bdr_top bdr_right border-top-right-radius border-bottom-right-radius ">
      <span>Completed</span>
    </div>
  </div>

  <div class="flt_sec d-flex bg-grey mt-40">
    <div>&nbsp;</div>
    <div class="sync_btn">
        Synchronize with Calendar
    </div>
    <div class="add_span">Action &nbsp;
      <div class='custom_sel'>
          <span class="custom_sel_ic flt" style="right:14px"><i class="fw-bold fa fa-angle-down"></i></span>
          <ul class="action_ul one_rw">
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
          
          </ul>
      </div>
    </div>
    <span class="notif_span"><i class="fa fa-bell-o"></i></span>
  </div>
</div>

<div class="container booking_list_sec mt-40">
  <table class="list_tbl">
    <thead>
      <tr>
        <td class="text-center bdr_right">Booking ID</td>
        <td class="text-center bdr_right">Pro Name</td>
        <td class="text-center bdr_right">Location</td>
        <td class="text-center bdr_right">TM</td>
        <td class="text-center bdr_right">(Sub)Service Schedule</td>
        <td class="text-center bdr_right">(Sub)Service Detail</td>
        <td class="text-center bdr_right">Price</td>
        <td class="text-center bdr_right">Status</td>
        <td class="text-center bdr_right"></td>
      </tr>
    </thead>
    <tbody>
      <tr>
        
        <td class="bdr_top text-center" style="padding:16px 20px;">
          <span class="d-block">231 <img src="{{URL::asset('public/icons/camera_ic.png')}}"></span>
          <span class="d-block"><img src="{{URL::asset('public/icons/calendar_ic.png')}}"></span>
        </td>
        <td class="text-center bdr_top bdr_left">
          Salon A
        </td>
        <td class=" bdr_top bdr_left">
            FL: Lorem Ipsum
        </td>
        <td class="text-center bdr_top bdr_left">
            <table>
                <tr><td>&nbsp;</td></tr>
                <tr><td>TM A</td></tr>
                <tr><td>TM B</td></tr>
                
            </table>
        </td>
        <td class=" bdr_top bdr_left">
            <table>
                <tr><td>23/03/23</td></tr>
                <tr><td>08:00 - BA-Lissa</td></tr>
                <tr><td>09:00 - Lissa</td></tr>
                
            </table>
        </td>
        <td class=" bdr_top bdr_left">
            <table>
                <tr>
                    <td>&nbsp;</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Service1 1h</td>
                    <td class="cancel_text">Cancel</td>
                </tr>
                <tr>
                    <td>Service2 1h</td>
                    <td class="cancel_text">Cancel</td>
                </tr>
                
            </table>
        </td>
        <td class="text-center bdr_top bdr_left price">
          <table class="w-100">
            <tr><td>&nbsp;</td></tr>
            <tr><td class="text-center">40 EUR</td></tr>
            <tr><td class="text-center">40 EUR</td></tr>
            
          </table>
          <span class="bdr_top d-block w-100 ttl_spn_bk">Total 160 EUR</span>
        </td>
        <td class="text-center bdr_top bdr_left">
            <span class="d-block" style="margin-bottom: 10px;">Confirmed</span>
            <span class="d-block" style="margin-bottom: 10px;">Edit request</span>
            <div class="d-flex justify-content-center">
                <button type="button" class="acc_btn">Accept</button>
                <button type="button" class="rej_btn">Reject</button>
            </div>
        </td>
        <td class="text-center bdr_top bdr_left">
            <span class="msg_spn">Message</span>
        </td>
      </tr>
      <tr class="cancel_bk_tr">
        
        <td class="bdr_top text-center" style="padding:16px 20px;">
          <span class="d-block">231 <img src="{{URL::asset('public/icons/camera_ic.png')}}"></span>
          <span class="d-block"><img src="{{URL::asset('public/icons/calendar_ic.png')}}"></span>
        </td>
        <td class="text-center bdr_top bdr_left">
          Salon A
        </td>
        <td class=" bdr_top bdr_left">
            FL: Lorem Ipsum
        </td>
        <td class="text-center bdr_top bdr_left">
            <table>
                <tr><td>&nbsp;</td></tr>
                <tr><td>TM A</td></tr>
                <tr><td>TM B</td></tr>
                <tr><td>TM C</td></tr>
                <tr><td>TM D</td></tr>
            </table>
        </td>
        <td class=" bdr_top bdr_left">
            <table>
                <tr><td>23/03/23</td></tr>
                <tr><td>08:00 - BA-Lissa</td></tr>
                <tr><td>09:00 - Lissa</td></tr>
                <tr><td>10:00 - Melisa</td></tr>
                <tr><td>11:00 - Lissa</td></tr>
            </table>
        </td>
        <td class=" bdr_top bdr_left">
            <table>
                <tr>
                    <td>&nbsp;</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Service1 1h</td>
                    <td>Cancel</td>
                </tr>
                <tr>
                    <td>Service2 1h</td>
                    <td>Cancel</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </td>
        <td class="text-center bdr_top bdr_left price">
          <table>
            <tr><td>&nbsp;</td></tr>
            <tr><td class="text-center">40 EUR</td></tr>
            <tr><td class="text-center">40 EUR</td></tr>
            <tr><td class="text-center">40 EUR</td></tr>
            <tr><td class="text-center">40 EUR</td></tr>
          </table>
          <span class="bdr_top">160 EUR</span>
        </td>
        <td class="text-center bdr_top bdr_left">
            <span class="d-block" style="margin-bottom: 10px;">Confirmed</span>
            <span class="d-block" style="margin-bottom: 10px;">Edit request</span>
            <div class="d-flex justify-content-center">
                <button type="button" class="acc_btn">Accept</button>
                <button type="button" class="rej_btn">Reject</button>
            </div>
        </td>
        <td class="text-center bdr_top bdr_left">
            <span class="trash_spn"><i class="fa fa-trash-o"></i></span>
        </td>
      </tr>
      
    </tbody>
    
  </table>
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
</script>
</body>
</html>