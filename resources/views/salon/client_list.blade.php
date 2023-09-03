@include('salon/header')
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

   /*.tooltip {
  opacity:1 !important;
  font-size: 15px !important;
  position: relative !important;
  
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
  
      min-width: 100%;
  background-color: #0d9da3;
}
.tooltip_spn, .tooltip_spn1, .tooltip_spn_0{cursor: pointer;    font-size: 16px;}
.tooltip_spn_1{    float: right;margin-top: -28px;}
.tooltip_spn:hover + .tooltip .tooltiptext, .tooltip_spn1:hover + .tooltip .tooltiptext, .tooltip_spn_0:hover + .tooltip .tooltiptext {
  visibility: visible;
}
*/
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
     .custom_sel ul.one_rw li label{width: 100%;text-align: left;}
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
    .action_ul li span{
      font-weight: 400;
      font-size: 14px;
      line-height: 19px;
      text-transform: capitalize;
      color: #656565;
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
   
    .booking_calendar_sec{
      /*padding: 40px;*/
      /*max-width: 100%;*/
      /*overflow-x:auto; */
      /*width: 100%;*/
    }
    .booking_calendar_sec .calendar_tbl{
      width: 100%;
      border-collapse: separate;
      border-spacing: 0;
      border: 1px solid #E4E4E4;
      border-radius: 8px;
    }
    .booking_calendar_sec .calendar_tbl thead tr td{
      font-weight: 600;
      font-size: 16px;
      line-height: 21px;
      text-align: center;
      text-transform: capitalize;
      color: #000000;
    }
    .show_no_spn{
      border: 1px solid #D9D9D9;
      width: 24px;
      height: 24px;
      border-radius: 50%;
      display: inline-block;
      vertical-align: middle;
      position: relative;
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
    .add_n_cls_spn{
      display: block;
      font-size: 18px;
      text-align: end;
      font-weight: bold;
    }
    #add_n_inp{
          border: 1px solid #EFEFEF;
      border-radius: 6px;
      padding: 7px 10px;
      width: 100%;
    }
    .search_box {
    position: relative;
    margin-right: 20px;
}
.search_box .serach_inp {
    background: #FFFFFF;
    border: 1px solid #EFEFEF;
    border-radius: 6px;
    width: 392px;
    height: 50px;
    max-width: 100%;
    padding: 10px;
}
.search_ic_spn {
    position: absolute;
    right: 12px;
    top: 13px;
    color: #ababab;
}

.note-font-size{
  display: block;
    font-size: 12px !important;
    line-height: 16px !important;
    font-style: normal !important;
    font-weight: 400 !important;
    color: #000000 !important;
}
.tooltip {
    visibility: hidden;
    opacity: 0;
    transition: opacity 0.3s;
    width: 250px;
    height: 86px;
    position: absolute;
    right: 0;
    z-index: 1;
    overflow: visible;
    padding: 8px;
}
.tooltip.show {
    visibility: visible;
    opacity: 1;
    background-color: #ffffff;
    /* color: #66C68F; */
    font-style: normal;
    /* font-weight: 500; */
    font-size: 14px;
    line-height: 21px;
    /* margin-left: -10rem; */
    box-sizing: border-box;
    /* text-align: justify; */
    box-shadow: 0 2px 4px rgb(0 0 0 / 10%);
    border-radius: 8px !important;
}
.action_area {
    width: 37px;
    height: 20px;
    position: absolute;
    right: 1px;
    bottom: 5px;
    padding-bottom: 0.5rem;
}
.action_area img {
    width: 13px;
    height: 13px;
}
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

.bdr_top.active {
    box-shadow: 0px 0px 11px -1px #bbbbbb;
}

.add_ul li label span{
cursor: pointer;
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
    <div class="top_nav bdr_right bdr_top bdr_left bdr_bottom border-top-left-radius border-bottom-left-radius">
      <span>Bookings</span>
    </div>
    <div class="top_nav bdr_right bdr_top bdr_bottom">
      <span>Setting</span>
    </div>
    <div class="top_nav bdr_bottom bdr_top bdr_right border-top-right-radius border-bottom-right-radius active">
      <span>Client List</span>
    </div>
  </div>

  <div class="flt_sec d-flex bg-grey mt-40">
    
    <div class="filter_span">Filter &nbsp;
      <div class='custom_sel'>
          <span class="custom_sel_ic flt" style="right:14px"><i class="fw-bold fa fa-sliders"></i></span>
          <div class="fltr_ul_sec">
            <ul class="fltr_ul">
              <li>
                Clients
              </li>
              <li class="sf_tm_li">
                  <label for="sf_cl_chk_all">All</label>
                  <label class="custom_check">
                      <input type="radio" class="sf_ct_chk sf_cl_chk" id="sf_cl_chk_all" name="ct" value="all" checked>
                      <span class="checkmark"></span>
                  </label>
              </li>
              <li class="sf_tm_li">
                  <label for="sf_cl_chk_ind">Individual Client</label>
                  <label class="custom_check">
                      <input type="radio" class="sf_ct_chk sf_cl_chk" id="sf_cl_chk_ind" name="ct" value="individual">
                      <span class="checkmark"></span>
                  </label>
              </li>
              <li class="sf_tm_li">
                  <label for="sf_cl_chk_cmc">Company Client</label>
                  <label class="custom_check">
                      <input type="radio" class="sf_ct_chk sf_cl_chk" id="sf_cl_chk_cmc" name="ct" value="company">
                      <span class="checkmark"></span>
                  </label>
              </li>
              <li class="sf_tm_li">
                  <label for="sf_cl_chk_nsh">No Shows</label>
                  <label class="custom_check">
                      <input type="radio" class="sf_ct_chk sf_cl_chk" id="sf_cl_chk_nsh" name="ct" value="no_show">
                      <span class="checkmark"></span>
                  </label>
              </li>
              <li class="sf_tm_li">
                  <label for="sf_cl_chk_blc">Blocked</label>
                  <label class="custom_check">
                      <input type="radio" class="sf_ct_chk sf_cl_chk" id="sf_cl_chk_blc" name="ct" value="blocked">
                      <span class="checkmark"></span>
                  </label>
              </li>
            </ul>


          </div>
          
      </div>
    </div>
    <div class="add_span">Add &nbsp;
      <div class='custom_sel'>
          <span class="custom_sel_ic flt" style="right:14px"><i class="fw-bold fa fa-angle-down"></i></span>
          <ul class="add_ul one_rw">
  
              <li>
                  <label>
                      <span onclick="action_change_note('edit_booking')">Technical Note</span>
                  </label>
              </li>

           <!--   <li>
                  <label>
                      <span>Reschedule booking</span>
                  </label>
              </li>
              <li>
                  <label>
                      <span>Cancel Booking</span>
                  </label>
              </li>-->
          
          </ul>
      </div>
    </div>
    
  </div>
  <div class="d-flex justify-content-between mt-40">
    <div class="sel_team_member_sel d-flex justify-content-start">

    </div>
    <div class="fiter_sec1 d-flex justify-content-end align-items-center">
      <div class="search_box">
        <input class="serach_inp" id="serach_inp" type="text" placeholder="Client Name, email or phone">
        <span class="search_ic_spn"><i class="fa fa-search"></i></span>
      </div>
     
    </div>
  </div>
</div>

<div class="container booking_calendar_sec mt-40">
  <table class="calendar_tbl">
    <thead>
      <tr>
        <td style="width:15%" class="text-center bdr_right">Client Details</td>
        <!-- <td style="width:13%" class="text-center bdr_right">Client Type</td>
        <td style="width:10%" class="text-center bdr_right">Gender</td> -->
        <td style="width:10%" class="text-center bdr_right">Total Sale</td>
        <td style="width:12%" class="text-center bdr_right">Last Booking</td>
        <td style="width:12%" class="text-center bdr_right">
          Number of <br>
          "No Shows"
        </td>
        <td style="width:12%" class="text-center bdr_right">Status</td>
        <td style="width:10%" class="text-center bdr_right">Action </td>
      </tr>
    </thead>
    <tbody class="cl_list_tbody">
      
    </tbody>
    <tfoot>
      
    </tfoot>
  </table>
</div>

<!-- Modal -->
<div class="modal fade" id="modalajx" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: transparent;border:0;">
      <img src="{{URL::asset('public/images/ajax-loader.gif')}}" style="margin:auto;width:100px">
      
    </div>
  </div>
</div>

<div class="popupContainer techNoteModal" style="display:none">
    <div class="popup mx-auto text-center">
        <div class="d-flex justify-content-center title-area align-items-center position-relative">
            <h3 class="poptitle mb-0">Technical Note</h3>
            <button class="popclose">&times;</button>
        </div>
        <form class="d-grid  gap-2" id="tech_frm">
          <input type="hidden" name="tech_user_id" id="tech_user_id" value="0">
          <input type="hidden" name="tech_id" id="tech_id" value="">
                <div class="">
                    <textarea class="form-control" id="tech_note" placeholder="Type you note.."></textarea>
                </div>
            </form>
        <button class="pop-button" id="save_tech_btn" onclick="save_tech()">save</button>
    </div>
</div>


@include('salon/footer')

<script type="text/javascript">
  /*let cl_typ = new Array;
  cl_typ.push('all');*/
  get_client_list('all');




  document.addEventListener("click", function (event) {
    var target = $(event.target);

    if (!target.closest(".tooltip").length && !target.hasClass('note-font-size')) {
      $('.tooltip').removeClass("show");
    }
  });

  $(document).on('click','.note-font-size',function(){
    $(this).siblings('.tooltip').toggleClass("show");
    /*var tooltip = document.getElementById("tooltip");
    tooltip.classList.toggle("show");*/
  });

  $(document).on('click','.tech_note_edit',function () {

      let u = $(this).closest('.action_area').attr('data-user');
      let note = $('#tech_note_inp_'+u).val();
      let ni = $('#tech_note_inp_'+u).attr('data-tech-i');
      $('#tech_user_id').val(u);
      $('#tech_id').val(ni);
      $('#tech_note').val(note);
      $('.techNoteModal').fadeIn();

  });

  $(document).on('click','.tech_note_delete',function () {
      
      if(!confirm('Are you sure to delete?'))return false;

      let u = $(this).closest('.action_area').attr('data-user');
      let ni = $('#tech_note_inp_'+u).attr('data-tech-i');

      $.ajax({
        url:'{{route("ajx_prof_setting")}}',
        type:'post',
        data:{'act':'delete_tech_note','_token':"{{csrf_token()}}",'ni':ni},
        dataType:'json',
        success:function(r){
          $('#modalajx').hide().removeClass('show');
          if(r.status=='Login'){
            window.location.href="{{route('login')}}";
          }
          else{
            let ni = r.ni;
            $('#tech_note_inp_'+u).val('').attr('data-tech-i','');
            $('.tech_note_delete_'+u).hide();

            $('.popupContainer').fadeOut();
            $('#tech_user_id').val(0);
            $('#tech_id').val();
            $('#tech_note').val();

              location.reload();
          }
        },
        error:function(e){
          $('#modalajx').hide().removeClass('show');
        }
      })
  });

  $('#serach_inp').on('change keyup',function(){
    let srch = $(this).val();
   
    if($.trim(srch)!='' && $.trim(srch).length>3){
     $('.client_tr').each(function(){

      if($(this).attr('data-name').toLowerCase().indexOf(($.trim(srch)).toLowerCase())>-1){
        $(this).show();
      }
      else{
        $(this).hide();
      }
     });
    }else{
      $('.client_tr').show();
    }
  });


  $(document).on('click','.custom_sel_ic',function(){
      if($(this).closest('.custom_sel').hasClass('open')){
          $(this).closest('.custom_sel').removeClass('open');
      }
      else{
          $(this).closest('.custom_sel').addClass('open');
      }    
  });

  $('.popclose').click(function () {
      $('.popupContainer').fadeOut();
      $('#tech_user_id').val(0);
      $('#tech_id').val();
      $('#tech_note').val();
  })

  $('.sf_cl_chk').on('click',function(){
    /*let cl_typ = new Array;
    $('.sf_cl_chk:checked').each(function(){
      cl_typ.push($(this).val());
    });

    if(cl_typ.length<=0)return false;*/

    let cl_typ = $('.sf_cl_chk:checked').val();

    get_client_list(cl_typ);

    $('.fltr_ul_sec').closest('.custom_sel').removeClass('open');

  });

  $('.add_n_cls_spn').on('click',function(){    
      $(".add_inp_sec").slideUp("slow");
  })

  function save_tech(){
    let u = $('#tech_user_id').val();
    let note = $('#tech_note').val();

    if(u=='' || u=='0' || $.trim(note)==''){
      alert('Please type something.');
      return false;
    }

    let ni = $('#tech_id').val();

    $('#modalajx').show().addClass('show');

    $.ajax({
        url:'{{route("ajx_prof_setting")}}',
        type:'post',
        data:{'act':'save_tech_note','_token':"{{csrf_token()}}",'note':note,'u':u,'ni':ni},
        dataType:'json',
        success:function(r){
          $('#modalajx').hide().removeClass('show');
          if(r.status=='Login'){
            window.location.href="{{route('login')}}";
          }
          else{
            let ni = r.ni;
            $('#tech_note_inp_'+u).val(note).attr('data-tech-i',ni);
            $('.tech_note_delete_'+u).show();

            $('.popupContainer').fadeOut();
            $('#tech_user_id').val(0);
            $('#tech_id').val();
            $('#tech_note').val();
            location.reload();
          }
        },
        error:function(e){
          $('#modalajx').hide().removeClass('show');
        }
    })
  }

  function get_client_list(cl){

    $('#modalajx').show().addClass('show');

    $.ajax({
      url:'{{route("ajx_prof_setting")}}',
      type:'post',
      data:{'act':'get_clients','_token':"{{csrf_token()}}",'cl':cl},
      success:function(r){
        console.log(r);
        $('#modalajx').hide().removeClass('show');
        if(r=='NeedProfLogin'){
          window.location.href="{{route('login')}}";
        }
        else{
          $('.cl_list_tbody').html(r);
        }
      },
      error:function(e){
        $('#modalajx').hide().removeClass('show');
      }
    })    
  }

  function remove_client(id){
    
    if(!confirm('Are you sure to delete?'))return false;

    $.ajax({
      url:'{{route("ajx_prof_setting")}}',
      type:'post',
      data:{'act':'remove_client','_token':"{{csrf_token()}}",'id':id,'status':'remove'},
      dataType:'json',
      success:function(r){
        if(r.status=='LOGIN'){
          location.reload();
        }
        else if(r.status=='SUCCESS'){
          $('.client_tr_'+id).remove();
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

  function block_client(id){
    $('.sts_ul').closest('.custom_sel').removeClass('open');
    if(!confirm('Are you sure to delete?'))return false;

    $.ajax({
      url:'{{route("ajx_prof_setting")}}',
      type:'post',
      data:{'act':'remove_client','_token':"{{csrf_token()}}",'id':id,'status':'block'},
      dataType:'json',
      success:function(r){
        if(r.status=='LOGIN'){
          location.reload();
        }
        else if(r.status=='SUCCESS'){
          $('.client_status_active_'+id).show();
          $('.client_status_block_'+id).hide();
          $('.client_status_spn_'+id).html('Blocked');
          $('.client_tr_'+id).css('background-color', '#ddd');
        }
        else{
          alert('Something went wrong with values.');
        }
      },
      error:function(e){
        alert('Something went wrong.');
      }
    })
  }

  function active_client(id){
    $('.sts_ul').closest('.custom_sel').removeClass('open');
    if(!confirm('Are you sure to Active?'))return false;

    $.ajax({
      url:'{{route("ajx_prof_setting")}}',
      type:'post',
      data:{'act':'active_client','_token':"{{csrf_token()}}",'id':id,'status':'active'},
      dataType:'json',
      success:function(r){
        if(r.status=='LOGIN'){
          location.reload();
        }
        else if(r.status=='SUCCESS'){
          $('.client_status_active_'+id).hide();
          $('.client_status_block_'+id).show();
          $('.client_status_spn_'+id).html('Access');
          $('.client_tr_'+id).css('background-color', 'white');
        }
        else{
          alert('Something went wrong with values.');
        }
      },
      error:function(e){
        alert('Something went wrong.');
      }
    })
  }
</script>

<script>
   $(document).on('click','.bdr_top_border',function(){
        	$('.bdr_top_border').removeClass('active');
        	$(this).addClass('active');
    });
</script>

<script>

function action_change_note(act){ 
  if(act=='edit_booking'){ 

    let bi = $('.bdr_top_border.active').attr('data-user');
      if(typeof bi=='undefined' || bi=='' || bi=='0'){
          alert('Please select client to add/update Technical note.');
          return false;
      }
    let note = $('#tech_note_inp_'+bi).val();
    let ni = $('#tech_note_inp_'+bi).attr('data-tech-i'); 


      $('#tech_user_id').val(bi);
      $('#tech_id').val(ni);
      $('#tech_note').val(note);
      $('.techNoteModal').fadeIn();

  }

}


</script>

</body>
</html>