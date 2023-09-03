
@include('_header1')
    
<?php
  use \App\Http\Controllers\BookingController;
?>

<style>
   .navbar-expand-xl .navbar-collapse{justify-content: end;}
    .heading_ds{
        height: 5px;
        width: 500px;
    }
    .pg_headh1{
        font-weight: 500;
        font-size: 32px;
        line-height: 43px;
        text-transform: capitalize;
        color: #000000;
        width: fit-content;
        position: relative;
        margin: auto;
        padding: 0 65px;
    }
    .pg_headh1:before{
        content: '';
        background: #66C68F;
        height: 3px;
        width: 45px;
        left: 0px;
        position: absolute;
        top: 23px;
    }
    .pg_headh1:after{
        content: '';
        background: #66C68F;
        height: 3px;
        width: 45px;
        right: 0px;
        position: absolute;
        top: 23px;
    }
    .sec_marg{margin-top: 20px;}
    .pf_name{
        font-weight: 600;
        font-size: 20px;
        line-height: 27px;
        text-transform: capitalize;
        color: #000000;
    }
    .m-t-20{margin-top: 20px}.m-t-40{margin-top: 40px}
    .m-b-20{margin-bottom: 20px}.m-b-40{margin-bottom: 40px}
    .lc_t_spn{
        cursor: pointer;
        border: none;padding: 10px 15px;
        font-weight: 600;
        font-size: 20px;
        line-height: 27px;
        border-radius: 8px;
        width: 220px
    }
    .cale_serc_sec{
        width: 100%;
        border: 1px solid #EFEFEF;
        border-radius: 8px;

    }
    .cale_scr_day_sec{
        width: 60%;
        overflow-y: hidden;
        overflow-x: scroll;
        white-space: nowrap;
    }
    .cale_scr_day_sec::-webkit-scrollbar {display: none;}
    .cale_scr_ssec{
        width: 34%;
        text-align: center;
        padding: 12px 0;
        min-width: 100px;
        display: inline-block;
        cursor: pointer;
    }
    .cale_scr_ssec.active{
        background: #e8f7f8;
    }
    .cale_scr_ssec:not(:last-child){
        border-right: 1px solid #EFEFEF;
    }
    .bdr-r{border-right: 1px solid #EFEFEF;}
    .bdr-l{border-left: 1px solid #EFEFEF;}
    .cale_scl, .cale_scr{min-width: 25px;width: 20%;text-align: center;padding: 12px 0;cursor: pointer;}
    .sel_sev_tbl{width: 60%;}
    .sel_sev_tbl .tbl{
        border-collapse: separate;
        border-spacing: 0;
        border: 1px solid #E4E4E4;
        border-radius: 8px;
        width: 100%;
    }
    .bdr-top{
        border-top: 1px solid #E4E4E4;
    }
    .bdr-right{
        border-right: 1px solid #E4E4E4;
    }
    .bdr-bottom{
        border-bottom: 1px solid #E4E4E4;
    }
    .sel_sev_tbl table th{
        font-size: 18px;
        line-height: 24px;
        font-weight: 600;
    }
    .sel_sev_tbl table th, .sel_sev_tbl table td{
        padding: 10px 10px;
        text-align: center;
    }

    .phts_sec span.lbl_spn{
        background: #eff9f3;
        border-radius: 8px;
        padding: 8px 25px;
        margin-right: 5px;
        font-weight: 600;
        font-size: 18px;
        line-height: 24px;
        color: #000000;
    }
    /*.phts_sec input{
        height: 40px;
        width: 40px;
        border: 1px solid #000000;
        border-radius: 8px;
    }*/
    /*.minus_spn,.plus_spn{width: 30px;height: 30px;border: 1px solid #D9D9D9;display: inline-block;    border-radius: 15px;background: #fff;padding-top: 2px;cursor: pointer;}*/
    .minus_spn,.plus_spn{
        vertical-align: middle;
        border: 1px solid #D9D9D9;
        display: inline-block;    
        border-radius: 15px;
        background: #fff;
        font-size: 29px;
        cursor: pointer;
        line-height: 15px;
    }
    .minus_spn{
        padding: 4px 7px 9px 7px;
    }
    .plus_spn{
        font-weight: bold;
        font-size: 26px;
        padding: 6px 7px 7px 6px;
    }
    .unit_spn{font-size: 16px;padding: 10px;}
    .bk_date_p{
        font-weight: 600;
        font-size: 20px;
        line-height: 27px;
        text-transform: capitalize;
        color: #000000;
    }
    .serv_main_sec, .msg_main_sec{
        border: 1px solid #E4E4E4;
        border-radius: 8px;
    }
    .serv_m_head, .msg_m_head{
        background: #66C68F;
        padding: 17px 0;
        color: #FFFFFF;
        font-weight: 600;
        font-size: 18px;
        line-height: 24px;
        text-align: center;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }
    .msg_m_head{
        background: #eff9f3!important;
        color: #000000;   
    }

    /* Create a custom checkbox */
    .custom_check input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }
    .photoshoot_chkmark {
      height: 40px;
      width: 40px;
      background-color: #fff;
        border: 1px solid #dbdbdb;
        display: block;
        border-radius: 8px;
        cursor: pointer;
    }
   
    .checkmark:after {
      content: "";
      /*position: absolute;*/
      display: none;
    }
    .custom_check input:checked ~ .checkmark:after {
      display: block;
    }
    .custom_check .photoshoot_chkmark:after {
      /*left: 9px;
      top: 5px;*/
         margin-left: 15px;
        width: 9px;
        margin-top: 7px;
        height: 18px;
        border: solid #000000;
        border-width: 0 2px 2px 0;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg);
    }

    .serv_bk_tbl tr th{
        font-weight: 400;
        font-size: 16px;
        line-height: 21px;
        text-transform: capitalize;
        /*color: #000000;*/
            color: #989898;
        padding: 20px 15px;

    }
    .serv_bk_tbl tr td{
        font-weight: 400;
        font-size: 16px;
        line-height: 21px;
        text-transform: capitalize;
        color: #000000;
        padding: 20px 15px;
    }
    .serv_bk_tbl tr th i, .serv_bk_tbl tr td i{font-weight: bold }
    .serv_bk_tbl tr .cls_spn{
        background: #e3e3e3;
        font-size: 21px;
        width: 24px;
        height: 24px;
        border-radius: 20px;
        display: block;
        color: #666;
        padding-top: 1px;
        opacity: 1;
        font-weight: bold;
        cursor: pointer;
    }
    .tm_img{
        width: 26px;
        height: 26px;
        border-radius: 50%;
    }

    .custom_sel, .custom_sel2{position: relative;}
    .custom_sel ul{background: #fff;
        position: absolute;
        z-index: 10000;
        width: fit-content;
        min-width: 200px;
        list-style: none;
        padding: 7px 20px;
        margin-top: 3px;
        border-radius: 8px;
        box-shadow: 0px 0px 20px rgba(16, 8, 63, 0.09);
        display: none;
        font-size: 14px;
    }
    
    .custom_sel.open ul{display: block;right: 0;max-height: 300px; overflow-y:auto; }
    .custom_sel ul li{padding: 10px 2px;display: flex;justify-content: space-between;align-items:center;}
    .custom_sel ul li:not(:first-child){border-top: 1px solid #e9e9e9}
    .custom_sel ul li input{width: 20px;height: 20px;top: -2px;    vertical-align: middle;}
     .custom_sel ul li input:checked{color: red;background-color: red !important;}
    .custom_sel_ic{cursor: pointer;}
    .custom_sel.open .custom_sel_ic:not(.flt) i{
        -webkit-transform: rotate(180deg);
        -moz-transform: rotate(180deg);
        -o-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg);
    }
   
    .custom_sel ul.time_ul li input{
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }
    .custom_sel ul.time_ul li .checkmark{
        height: 14px;
        width: 14px;
        background-color: #fff;
        border: 1px solid #c3c3c3;
        display: block;
        border-radius: 2px;
    }
    .custom_sel ul.time_ul li .checkmark:after {
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

    .custom_sel ul.time_ul li input:checked ~ .checkmark {
        border-color: #66C68F;
    }

    .custom_sel ul li label{
        color: #4c4a4a;
    }
    
    .ttl_td{
        font-weight: 600!important;
    }
    .mybtn{
        background: linear-gradient(90.14deg, #66C68F 1.34%, #21B8BF 99.89%);
        border-radius: 55px;
        width: 204px;
        padding: 13px;
        border: 0;
        color: #FFFFFF;
        font-weight: 600;
        font-size: 18px;
        line-height: 24px;
    }
    .btn_sec1,.btn_sec2{padding-top: 10px;padding-right: 20px;}
    .btn_sec2{padding-bottom: 10px;}
    .mybtn1{
        background: #e9f7f7;
        border-radius: 55px;
        width: 204px;
        padding: 13px;
        border: 0;
        font-weight: 600;
        font-size: 18px;
        line-height: 24px;
        text-transform: capitalize;
    }
    .bg-grey{
        background: #e3e3e3;
    }
    .new_row_inp_sec .new_row_inp, .add_name_inp{
        background: #FFFFFF;
        border: 1px solid #EFEFEF;
        border-radius: 6px;
        padding: 10px;
    }
    .dur_ul{
        min-width: 106px!important;
        padding: 7px 12px!important;
    }
    .dur_ul li{
        display: block!important;
        text-align: center!important;
    }
    .serv_msg, .cust_contact{
        font-weight: 400;
        font-size: 16px;
        line-height: 21px;
        color: #000000;
        margin: 24px 15px;
    }
    .cont_edit, .cont_save_spn{
        color: #21B8BF;
        cursor: pointer;
    }
    .cont_inp_sec input, #ds_lc_inp{
        background: #FFFFFF;
        border: 1px solid #EFEFEF;
        border-radius: 6px;
        padding: 10px;
    }

    .msg_btn{
        font-weight: 600;
        font-size: 18px;
        line-height: 24px;
        text-align: center;
        color: #000000;
        width: 189px;
        background: #eff9f3;
        padding: 11px;
        border: none;
        margin: 10px 15px;
        border-radius: 8px;
    }
    .book_btn{
        background: #21B8BF;
        border-radius: 8px;
        width: 204px;
        color: #fff;
        font-weight: 600;
        font-size: 18px;
        line-height: 24px;
        padding: 13px;
        margin: 15px;
        border: none;
    }
    .upload_spn{
        border: 1px solid #000000;
        border-radius: 37px;
        padding: 7px 15px;
        display: block;
        width: 118px;
        height: 40px;
        text-align: center;
        cursor: pointer;
        position: absolute;
        bottom: 15px;
    }
    .msg_sec{
        min-height: 298px;
        padding: 20px;
    }
    .msg_uplod{
        padding: 20px;
        /*display: flex;
        align-items: end;*/
        position: relative;
        width: 160px;
    }
    .msg_uplod img{
        max-width: 80px;
        max-height: 80px;
    }
    .gr_clr{
        color: #989898!important;
    }
    .tm_ul li label{
        width: 100%;
        cursor: pointer;
    }
    .serv_ul li label, .cl_name_ul li label{
        width: 100%;
        cursor: pointer;
        text-align: left;
    }

    .custom_sel ul{

    }

       .custom_sel ul::-webkit-scrollbar {
        width: 3px;
        border-radius: 3px;
      }
      .custom_sel ul::-webkit-scrollbar-track {
        background: #f1f1f1;
      }
      .custom_sel ul::-webkit-scrollbar-thumb {
        background: #b9b7b7;
        border-radius: 5px;
      }
      .custom_sel ul::-webkit-scrollbar-thumb:hover {
        background: #555;
      }

      .pp_head_sec{
        position: relative;
      }
      .pp_head{
        width: 100%;
        color: #000000;
        font-weight: 700;
        font-size: 18px;
        line-height: 24px;
        margin: 20px;
      }
      .pp_close_spn{
        position: absolute;
        top: -5px;
        right: 0;
        font-weight: bold;
        font-size: 23px;
        cursor: pointer;
      }
      .msg_sec{
        flex:1;
      }
      .msg_sec textarea{
        border: none;
        width: 100%;
        height: 100%;
      }
      .pp_save_btn{
        background: #66C68F;
        border: 1px solid #66C68F;
        border-radius: 8px;
        width: 296px;
        height: 45px;
        color: #FFFFFF;
        font-weight: 500;
        font-size: 16px;
        line-height: 20px;
        margin-top: 20px;
      }

      .add-name-sec{
        position: relative;
        width: 152px;
        margin: auto;
      }
      .add-name-sec .cls_spn1{
        right: 6px;
        position: absolute;
        top: 13px;
        /*background: #e3e3e3;*/
        font-size: 17px;
        width: 18px;
        height: 18px;
        line-height: 1;
        border-radius: 20px;
        display: block;
        color: #666;
        padding-top: 1px;
        opacity: 1;
        font-weight: bold;
        cursor: pointer;
      }

      .cont_hide_spn{
        background: #e3e3e3;
        font-size: 17px;
        width: 18px;
        height: 18px;
        line-height: 1;
        border-radius: 20px;
        padding: 1px 8px;
        color: #666;
        padding-top: 1px;
        opacity: 1;
        font-weight: bold;
        cursor: pointer; 
      }

      .lc_drop_down{
        display: none;
        width: 220px;
        border: 1px solid #EFEFEF;
        border-radius: 8px;
        padding: 9px 0;
        font-size: 18px;
        font-weight: bold;
        margin-top: 13px;
        text-align: center;
        position: absolute;
        top: 36px;
        cursor: pointer;
      }

      .lc_drop_down.show{
        display: block;
      }

      .lc_ic.show{
        -webkit-transform: rotate(180deg);
        -moz-transform: rotate(180deg);
        -o-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg);
      }
      .lc_t_spn.myactive {
            background-color: var(--theme_green1);
            color: #fff;
        }

        .time_service_unit {
           -moz-appearance:none !important;
            -webkit-appearance: none !important; 
            appearance: none !important;
            background: url("{{URL::asset('public/icons/chevron_down.png')}}") no-repeat;
            background-position-x: right;
            background-position-y: bottom;
            width: 29px;
            padding: 0px 3px;
            background-size: 61%;
            border: 1px solid #EFEFEF;
            border-radius: 2px;
            user-select:none;
        }
        .time_service_unit:visited {
            border:0;
        }
        select::-ms-expand { display: none; }

        li.disabled{
            cursor: no-drop;
            pointer-events:none;
        }
        li.disabled label{
            color:#b5b2b2!important;
        }

    .custom_sel2 ol{background: #fff;
        position: absolute;
        z-index: 10000;
        width: fit-content;
        min-width: 28px;
        list-style: none;
        padding:3px;
        margin-top: 3px;
        border-radius: 2px;
        box-shadow: 0px 3px 17px 7px rgb(28 26 42 / 9%);
        display: none;
        font-size: 14px;
    }
    
    .custom_sel2.open ol{display: block;right: 0;max-height: 300px; overflow-y:auto; }
    .custom_sel2 ol li{padding: 3px 0px;display: flex;justify-content: center;align-items:center;cursor: pointer;}
    .custom_sel2 ol li:not(:first-child){border-top: 1px solid #e9e9e9}
    .custom_sel2 ol li input{width: 20px;height: 20px;top: -2px;    vertical-align: middle;}
     .custom_sel2 ol li input:checked{color: red;background-color: red !important;}
    .custom_sel_ic2{cursor: pointer;}
    .custom_sel2.open .custom_sel_ic2 i{
        -webkit-transform: rotate(180deg);
        -moz-transform: rotate(180deg);
        -o-transform: rotate(180deg);
        -ms-transform: rotate(180deg);
        transform: rotate(180deg);
    }
   
    .custom_sel2 ol.time_ul li input{
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
    }
    .custom_sel2 ol.time_ul li .checkmark{
        height: 14px;
        width: 14px;
        background-color: #fff;
        border: 1px solid #c3c3c3;
        display: block;
        border-radius: 2px;
    }
    .custom_sel2 ol.time_ul li .checkmark:after {
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

    .custom_sel2 ol.time_ul li input:checked ~ .checkmark {
        border-color: #66C68F;
    }

    .custom_sel2 ol li label{
        color: #4c4a4a;
    }

    .err_bg{background-color: #ffecec;}

    .serv_bk_tbl tbody tr:not(:first-child) td{
        border-top: 1px solid #E4E4E4;
    }

    .cale_scr_ssec.disabled{
        cursor: no-drop;
        pointer-events:none;
    }

    tr.bg_grey{
        background: #ebebeb99;
    }

    @media(max-width: 767px){
        .sel_sev_tbl{width: 100%;margin-bottom: 20px}
        .sel_sev_sec{flex-wrap:wrap;}
    }
</style>

    <input type="hidden" id="is_edit_inp" value="{{$is_edit}}">

        <section class="sec_marg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="pg_head text-center">
                            <h1 class="pg_headh1">Online Booking</h1>
                        </div>
                        <!-- <div class="heading_ds"></div> -->
                    </div>
                </div>                          
            </div>
            <div class="container m-t-20">
                <div class="row">
                    <div class="col-md-12">
                        <p class="pf_name">{{$prof->fixed_name}}</p>
                    </div>
                </div>
                <div class="row m-t-20 m-b-40">
                    <div class="col-md-12">
                        <div class="position-relative">
                            <div onclick="show_lc_drop()" class="lc_t_spn myactive"> <span class="sel_spn_lct">Fixed Location</span> &nbsp;&nbsp;&nbsp; <i class="fa fa-angle-down lc_ic"></i></div>
                            <div class="lc_drop_down">
                                <span id="sel_spn_des" onclick="change_location('desire')">Desire Location</span>
                                <span id="sel_spn_fix" style="display:none" onclick="change_location('fixed')">Fixed Location</span>
                            </div>
                            <input type="hidden" name="" id="lct_inp" value="fixed">
                            <input type="hidden" id="ttl_serv" value="{{$ttl_serv_n}}">
                            <input type="hidden" name="" id="service_count" value="<?=count($services)?>">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container m-t-20">
                <div class="d-flex cale_serc_sec justify-content-center">
                    <div class="cale_scl bdr-r" onclick="prev_day()"><i class="fw-bold fa fa-angle-left"></i></div>
                    <div class="cale_scr_day_sec">

                        <?php
                        

                        if($is_edit=='1'){
                            $day = date('D, M d',strtotime($booking->book_date));
                            $bk_date=date('d-m-Y',strtotime($booking->book_date));

                            echo '<div class="cale_scr_ssec active" data-date="'.$bk_date.'">'.$day.'</div>';
                            $di=1;
                            while($di<3){

                                echo '<div class="disabled cale_scr_ssec" data-date="'.date('d-m-Y',strtotime($booking->book_date." +".$di."days")).'">'.date('D, M d',strtotime($booking->book_date." +".$di."days")).'</div>';

                                $di++;
                            }
                        }
                        else{
                            $day = date('D, M d',strtotime('+1 day'));
                            $bk_date=date('d-m-Y',strtotime('+1 day'));
                            echo '<div class="cale_scr_ssec active" data-date="'.$bk_date.'">'.$day.'</div>';
                            $di=2;
                            while($di<10){

                                echo '<div class="cale_scr_ssec" data-date="'.date('d-m-Y',strtotime("+".$di."days")).'">'.date('D, M d',strtotime("+".$di."days")).'</div>';

                                $di++;
                            }
                        }

                        ?>

                        <input type="hidden" name="" id="book_date_inp" value="<?=$bk_date?>">


                    </div>
                    <div class="cale_scr bdr-l" onclick="next_day()"><i class="fw-bold fa fa-angle-right"></i></div>
                </div>
            </div>
            <div class="container m-t-40">
                <div class="d-flex justify-content-between sel_sev_sec align-items-end">
                    <div class="sel_sev_tbl">
                        <table class="tbl">
                            <tr>
                                <th class="bdr-right">Selected Services</th>
                                <th class="bdr-right">Duration</th>
                                <th>No of Units</th>
                            </tr>

                            @php
                            $ttl_cost=0;
                            @endphp

                            @foreach($services as $k=>$serv)

                            @php
                                $spr=$serv->price;

                              if($serv->price_type=='f'){
                                if($serv->discount=='1'){
                                   $dis_amt = floatval($serv->price);
                                   if($serv->discount_type=='f'){
                                      $dis_amt = floatval($serv->price) - floatval($serv->discount_amount);
                                   }
                                   else{
                                      $d_amt = floatval($serv->price) * (floatval($serv->discount_amount)/100);
                                      $dis_amt = floatval($serv->price) - $d_amt;
                                   }
                                  $spr=$dis_amt;
                                   
                                }
                                
                              }

                              $ttl = floatval($ser_ar[$serv->id]) * floatval($spr);
                              $ttl_cost+=$ttl;
                            @endphp

                            <tr>
                                <td class="bdr-top bdr-right">{{$serv->service_name}}</td>
                                <td class="bdr-top bdr-right">{{$serv->duration}}</td>
                                <td class="bdr-top">
                                    <input type="checkbox" style="display:none" data-name="{{base64_encode($serv->service_name)}}" data-p="{{$spr}}" class="serv_radio" checked name="service_{{$serv->id}}" id="service_{{$serv->id}}" data-id="{{$serv->id}}" value="{{$serv->id}}" data-q="{{$ser_ar[$serv->id]}}">
                                    <div class="cart_sec">
                                        <span class="minus_spn">-</span>
                                        @if($is_edit=='1' && isset($exist_service[$serv->id]) )
                                        <span class="unit_spn" data-min_q="{{$exist_service[$serv->id]}}" data-q="{{$ser_ar[$serv->id]}}">{{$ser_ar[$serv->id]}}</span>
                                        @else
                                        <span class="unit_spn" data-min_q="0" data-q="{{$ser_ar[$serv->id]}}">{{$ser_ar[$serv->id]}}</span>
                                        @endif
                                        <span class="plus_spn">+</span>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            
                        </table>
                    </div>
                    <div class="phts_sec d-flex align-items-center">
                        <span class="lbl_spn">PhotoShoot</span> 
                        <label class="custom_check">
                            <input type="checkbox" class="photoshoot_chk" id="photoshoot_chk" name="photoshoot_chk" value="YES" @if($is_edit=='1') disabled  @if($booking->photoshoot=='Y') checked @endif @endif>
                            <span class="checkmark photoshoot_chkmark"></span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="container m-t-40">
                <p class="bk_date_p">{{ date('M d, y') }}</p>
                <div class="serv_main_sec">
                    <div class="serv_m_head">
                        Booking
                    </div>
                    <table class="w-100 serv_bk_tbl">
                        <thead>



                            <!-- <tr>
                                @if($prof->team_mem_f=='Y')
                                <th class="bdr-right">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span>Any TM</span> 
                                        <div class='custom_sel'>
                                            <span class="custom_sel_ic flt" style="right:14px"><i class="fa fa-angle-down"></i></span>
                                            <ul class="sort_ul">
                                                <li>
                                                    <label>
                                                        <input type="checkbox" class="d-none" name="tm_chk[]" value="1"  data-name="TM A">TM A
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" class="d-none" name="tm_chk[]" value="2"  data-name="TM B">TM B
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" class="d-none" name="tm_chk[]" value="2"  data-name="TM c">TM C
                                                    </label>
                                                </li>
                                            
                                            </ul>
                                        </div>
                                    </div>
                                </th>
                                @endif
                                <th class="bdr-right text-center">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <span>Sub Service</span>
                                        <div class='custom_sel ms-2'>
                                            <span class="custom_sel_ic flt" style="right:14px"><i class="fa fa-angle-down"></i></span>
                                            <ul class="sort_ul">
                                                <li>
                                                    <label>
                                                        <input type="checkbox" class="d-none" name="tm_chk[]" value="1"  data-name="TM A">TM A
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" class="d-none" name="tm_chk[]" value="2"  data-name="TM B">TM B
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" class="d-none" name="tm_chk[]" value="2"  data-name="TM c">TM C
                                                    </label>
                                                </li>
                                            
                                            </ul>
                                        </div>
                                    </div>
                                </th>
                                <th class="bdr-right text-center">Duration</th>
                                <th class="bdr-right text-center">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <span>Start Time</span>
                                        <div class='custom_sel ms-2'>
                                            <span class="custom_sel_ic flt" style="right:14px"><i class="fa fa-angle-down"></i></span>
                                            <ul class="sort_ul">
                                                <li>
                                                    <label>
                                                        <input type="checkbox" class="d-none" name="tm_chk[]" value="1"  data-name="TM A">TM A
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" class="d-none" name="tm_chk[]" value="2"  data-name="TM B">TM B
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" class="d-none" name="tm_chk[]" value="2"  data-name="TM c">TM C
                                                    </label>
                                                </li>
                                            
                                            </ul>
                                        </div>
                                    </div>
                                </th>
                                <th class="bdr-right text-center ">Price</th>
                                <th class="bdr-right text-center">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <span>Select Name</span>
                                        <div class='custom_sel ms-2'>
                                            <span class="custom_sel_ic flt" style="right:14px"><i class="fa fa-angle-down"></i></span>
                                            <ul class="sort_ul">
                                                <li>
                                                    <label>
                                                        <input type="checkbox" class="d-none" name="tm_chk[]" value="1"  data-name="TM A">TM A
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" class="d-none" name="tm_chk[]" value="2"  data-name="TM B">TM B
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" class="d-none" name="tm_chk[]" value="2"  data-name="TM c">TM C
                                                    </label>
                                                </li>
                                            
                                            </ul>
                                        </div>
                                    </div>
                                </th>
                                <th class=" text-center"><span class="cls_spn">&times;</span></th>
                            </tr>
                        </thead> -->
                        <tbody id="sb_tb">
                            <?php
                            $last_bk_time='';
                            ?>
                           @if($is_edit=='1') 
                           @foreach($booking->booking_trans_active as $book_trans)
                           <?php
                            $last_bk_time=$book_trans->start_time;
                           ?>
                           
                            <tr class="bg_grey">
                                @if($prof->team_mem_f=='Y')
                                <td class="bdr-right  d-flex justify-content-between align-items-center gr_clr">
                                    <span class="ex_tmname_span">
                                        @if($book_trans->team_member=='0')
                                         Any TM <img src="{{URL::asset('public/images/default-user.png')}}" class="tm_img">
                                           
                                        @else 

                                            @php
                                            $tmimg=asset("public/images/default-user.png");
                                            if($book_trans->booking_team_member->image!=''){
                                                $tmimg=asset("public/imgs/team/").'/'.$book_trans->booking_team_member->image;
                                            }
                                            @endphp

                                            {{$book_trans->booking_team_member->member}} <img src="{{$tmimg}}" class="tm_img">
                                         
                                        @endif
                                    </span> 
                                    
                                </td>
                                @else
                                <input type="hidden" value="0">
                                @endif
                                <td class="bdr-right  text-center gr_clr">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <span class="ex_sername_span">{{$book_trans->booking_service->service_name}}</span> 
                                        
                                    </div>
                                </td>
                                <td class="bdr-right  text-center gr_clr duration_td">
                                    <span class="ex_serv_duration_span">{{$book_trans->duration }}</span>
                                </td>
                                <td class="bdr-right  text-center gr_clr time_td">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <span class="ex_stime_span">{{$book_trans->start_time }}</span> 
                                        
                                    </div>
                                </td>
                                <td class="bdr-right  text-center gr_clr">
                                    <span class="ex_serv_price_span">{{$book_trans->price}} EUR</span>
                                </td>
                                <td class="bdr-right  text-center gr_clr">
                                    <div class="d-flex justify-content-center align-items-center cname_sec">
                                        <span class="ex_cname_span">{{$book_trans->cust_name}}</span>
                                        
                                    </div>
                                   
                                    
                                </td>
                                <td class="  text-center"></td>
                            </tr>
                            @endforeach

                            @endif

                            <?php
                            if($is_edit=='1'):
                                $arkey =  array_search($last_bk_time, $time_arr);
                                $tmsr =array_slice($time_arr, ($arkey+1), count($time_arr));
                                $time_arr = $tmsr;
                            endif;  
                            ?>

                            @for($i=0; $i<$ttl_serv_n; $i++)
                            <tr>
                                @if($prof->team_mem_f=='Y')
                                <td class="bdr-right  d-flex justify-content-between align-items-center gr_clr">
                                    <span class="tmname_span_{{$i}}">Any TM <img src="{{URL::asset('public/images/default-user.png')}}" class="tm_img tmimg_{{$i}}"></span> 
                                    <input type="hidden" id="team_mem_inp_{{$i}}" data-i="{{$i}}" class="team_mem_inp" value="0">
                                    <div class='custom_sel'>
                                        <span class="custom_sel_ic" style="right:14px"><i class="fa fa-angle-down"></i></span>
                                        <ul class="tm_ul tm_ul_{{$i}}">
                                            <li>
                                                <label>
                                                    <input type="radio" class="d-none tm_radio" data-i="{{$i}}" name="tm_chk_{{$i}}" value="0"  data-name="Any TM" data-img="{{asset('public/images/default-user.png')}}">Any TM
                                                </label>
                                            </li>

                                            @foreach($team_mem as $tm)
                                            
                                            @php
                                            $tmimg=asset("public/images/default-user.png");
                                            if($tm->image!=''){
                                                $tmimg=asset("public/imgs/team/").'/'.$tm->image;
                                            }
                                            @endphp

                                            <li>
                                                <label>
                                                    <input type="radio" class="d-none tm_radio" data-i="{{$i}}" name="tm_chk_{{$i}}" value="{{$tm->id}}"  data-name="{{$tm->member}}" data-img="{{$tmimg}}" data-serv="{{json_encode(unserialize($tm->service))}}">{{$tm->member}}
                                                </label>
                                            </li>
                                            @endforeach

                                            <!-- <li>
                                                <label>
                                                    <input type="radio" class="d-none" name="tm_chk_{{$i}}" value="1"  data-name="TM A">TM A
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="radio" class="d-none" name="tm_chk_{{$i}}" value="2"  data-name="TM B">TM B
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="radio" class="d-none" name="tm_chk_{{$i}}" value="2"  data-name="TM c">TM C
                                                </label>
                                            </li> -->
                                            
                                        </ul>
                                    </div>
                                </td>
                                @else
                                <input type="hidden" id="team_mem_inp_{{$i}}" value="0">
                                @endif
                                <td class="bdr-right  text-center gr_clr">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <span class="sername_span_{{$i}}">(Sub)Service</span> 
                                        <input type="hidden" id="serv_inp_{{$i}}" value="0">
                                        <div class='custom_sel ms-2'>
                                            <span class="custom_sel_ic" style="right:14px"><i class="fa fa-angle-down"></i></span>
                                            <ul class="serv_ul serv_ul_{{$i}}">
                                                <li>
                                                    <label>
                                                        <input type="radio" class="d-none service_radio" data-i="{{$i}}" name="serv_{{$i}}" value="0"  data-p="0" data-d="" data-name="(Sub)Service" data-q="0">-Select-
                                                    </label>
                                                </li>
                                                @foreach($service_new as $k=>$serv)
                                                   
                                                    <li class="serv_li_{{$i}}" data-si="{{$serv->id}}"  data-sn="{{$serv->service_name}}">
                                                        <label>
                                                            <input type="radio" class="d-none service_radio" name="serv_{{$i}}" data-i="{{$i}}" value="{{$serv->id}}" data-p="{{$serv->price}}" data-d="{{$serv->duration}}" data-name="{{$serv->service_name}}" @if(isset($exist_service[$serv->id])) data-q="{{ ($ser_ar[$serv->id] - $exist_service[$serv->id]) }}" @else data-q="{{$ser_ar[$serv->id] }}" @endif >{{$serv->service_name}}
                                                        </label>
                                                    </li>
                                                   
                                                @endforeach

                                                <!-- <li>
                                                    <label>
                                                        <input type="checkbox" class="d-none" name="tm_chk[]" value="1"  data-name="TM A">TM A
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" class="d-none" name="tm_chk[]" value="2"  data-name="TM B">TM B
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="checkbox" class="d-none" name="tm_chk[]" value="2"  data-name="TM c">TM C
                                                    </label>
                                                </li> -->
                                            
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                                <td class="bdr-right  text-center gr_clr duration_td_{{$i}}">
                                    <span class="serv_duration_span_{{$i}}">Duration</span>
                                </td>
                                <td class="bdr-right  text-center gr_clr time_td_{{$i}}">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <span class="stime_span_{{$i}}">Start Time</span> 
                                        <input type="hidden" class="time_inps" id="time_inp_{{$i}}" value="0">
                                        <div class='custom_sel ms-2'>
                                            <span class="custom_sel_ic" style="right:14px"><i class="fa fa-angle-down"></i></span>
                                            <ul class="time_ul">

                                                

                                                @foreach($time_arr as $timea)
                                                <li class="sf_time_li" data-time="{{$timea}}">
                                                    <label for="sf_time_chk_{{$timea}}">{{$timea}}</label>

                                                    <div class="time_service_sec" style="display:none">
                                                        <div class="d-flex">
                                                            <select class="time_service_unit time_service_unit_{{$i}}" id="time_service_unit_{{$i}}_{{$timea}}" style="display:none"></select>
                                                            <span class="time_unit_spn">1</span>
                                                            <div class='custom_sel2 ms-2'>
                                                                <span class="custom_sel_ic2" style="right:14px"><i class="fa fa-angle-down"></i></span>
                                                                <ol>

                                                                </ol>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <label class="custom_check">
                                                        <input type="radio" class="sf_time_chk" data-i="{{$i}}" id="sf_time_chk_{{$timea}}" name="time_{{$i}}" value="{{$timea}}"  data-time="{{$timea}}">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                @endforeach

                                              
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                                <td class="bdr-right  text-center gr_clr">
                                    <span class="serv_price_span_{{$i}}">Price</span>
                                </td>
                                <td class="bdr-right  text-center gr_clr">
                                    <div class="d-flex justify-content-center align-items-center cname_sec_{{$i}}">
                                        <span class="cname_span_{{$i}}">Select Name</span>
                                        <input type="hidden" id="cname_inp_{{$i}}" value="BA Jon">
                                        <div class='custom_sel ms-2'>
                                            <span class="custom_sel_ic" style="right:14px"><i class="fa fa-angle-down"></i></span>
                                            <ul class="cl_name_ul cl_name_ul_{{$i}}">
                                                <li>
                                                    <label>
                                                        <input type="radio" data-i="{{$i}}" class="d-none serv_client_name" name="serv_client_name_{{$i}}" value="BA Jon" data-name="BA Jon">BA Jon
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="radio" data-i="{{$i}}" class="d-none serv_client_name" name="serv_client_name_{{$i}}" value="add">Add Name
                                                    </label>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-none add-name-sec mn_cname_sec_{{$i}}">
                                        <input type="text" class="add_name_inp" id="mn_cname_inp_{{$i}}" placeholder="Name.." style="width: 150px;padding-right: 19px;">
                                        <span class="cls_spn1" onclick="close_cname('{{$i}}')">&times;</span>
                                        <!-- &nbsp;<span class="save_name" onclick="add_cname('{{$i}}')"><i class="fa fa-check"></i></span> -->
                                    </div>
                                    
                                </td>
                                <td class="  text-center"><span class="cls_spn" onclick="reset_booking('{{$i}}')">&times;</span></td>
                            </tr>
                            @endfor
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4" class="bdr-top bdr-right bdr-bottom"></td>
                                <td class="text-center bdr-top  bdr-right bdr-bottom ttl_td">Total: {{$ttl_cost}} EUR</td>
                                <input type="hidden" id="ttl_cost" value="{{$ttl_cost}}">
                                <td colspan="2" class="bdr-top bdr-bottom"></td>
                            </tr>
                        </tfoot>
                    </table>
                    @if($is_edit=='0')
                    <div class="text-end btn_sec1">
                        
                        <button type="button" class="mybtn" onclick="prof_detail('{{ md5($prof->id) }}','{{$prof->legal_name}}','f')">+ &nbsp;Sub Service</button>
                        
                    </div>
                    @endif
                    <div class="text-end btn_sec2 bdr-bottom">
                        <button type="button" class="mybtn1 add_field_btn" onclick="add_new_row()" style="display:none">+ &nbsp;text Field</button>
                    </div>
                    <div class="bdr-bottom">
                        <div class="serv_msg fx_lc">
                            Fixed Location: @if($fix_loc && isset($fix_loc[0])) {{$fix_loc[0]->salon_name}}, {{$fix_loc[0]->street}} {{$fix_loc[0]->number}} {{$fix_loc[0]->municipality}} {{$fix_loc[0]->province}} {{$fix_loc[0]->postal_code}} @endif.
                        </div>
                        <div class="serv_msg ds_lc" style="display:none">
                            Desire Location: <input class="" type="text" name="" id="ds_lc_inp" placeholder="..." style="min-width:50%">
                        </div>
                    </div>
                    <div class="bdr-bottom">
                        <div class="cust_contact d-flex align-items-center">Contact Number: &nbsp;
                            @if($is_edit=='1')
                            <input type="hidden" name="contact_num" id="contact_num" value="{{$booking->contact}}">
                            @else
                            <input type="hidden" name="contact_num" id="contact_num" value="0010010010">
                            @endif
                            <div class="cont_lbl_sec"><span class="cont_lbl_spn">@if($is_edit=='1') {{$booking->contact}} @else 0101010 </span> &nbsp;<span class="cont_edit"><i class="fa fa-pencil"></i></span>@endif </div>
                            <div class="cont_inp_sec" style="display:none">
                                &nbsp;
                                <input class="" type="tel" name="" id="cont_inp" placeholder="..."> &nbsp;
                                <!-- <span class="cont_save_spn"><i class="fa fa-check"></i></span> &nbsp; -->
                                <span class="cont_hide_spn" >&times;</span>
                            </div>
                        </div>
                    </div>
                    @if($is_edit=='0')
                    <div class="bdr-bottom">
                        <button type="button" class="msg_btn" onclick="show_msg_modal()">Message</button>
                    </div>
                    @endif
                    <div class="text-center">
                        <button type="button" class="book_btn" onclick="confirm_book()">Book</button>

                         @if($is_edit=='1')
                            &nbsp;
                            &nbsp;
                            <a href="{{route('bookings')}}" class="btn btn-danger">Cancel</a>
                         @endif   

                        <br><br><br>
                    </div>
                </div>
            </div>
            
        </section>

<div id="myModalmsg" class="modal fade" role="dialog">
 <div class="modal-dialog" style="width:700px;max-width: 90%;">
   <div class="modal-content">
     <!-- <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" onclick="closeModal('myModalImg')">&times;</button>
       <h4 class="modal-title">Prei</h4>
     </div> -->
     <div class="modal-body text-center">
       <div class="container ">
            <div class="">
                <div class="pp_head_sec">
                    <div style="width:100%" class="pp_head">Message</div>
                    <span class="pp_close_spn " onclick="closeModal('myModalmsg')">&times;</span>
                </div>
                <div class="msg_body msg_main_sec">
                    <form class="" id="msg_frm">
                        <input type="hidden" name="act" value="msg_file">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="d-flex justify-content-between bdr-bottom">
                            <div class="msg_sec bdr-right">
                                <textarea class="form-control" id="book_message">Lorem ipsum dolor sit amet consectetur.</textarea>
                            </div>
                            <div class="msg_uplod">
                                <img src="" id="msg_file_prev">
                                <span class="upload_spn" onclick="upload_file('msg_file')">Upload <i class="fa fa-cloud-upload"></i></span>
                                <input type="file" class="d-none" name="msg_file" id="msg_file" accept="image/png,image/jpeg">
                                <input type="hidden" id="msg_file_inp">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="text-center">
                    <input type="button" class="pp_save_btn" onclick="save_msg()" value="Save">
                </div>
            </div>
        </div>
     </div>
     <div class="modal-footer">
       <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeModal('myModalmsg')">Close</button>
     </div>
   </div>
</div>

<form id="ttl_s_frm" action="{{route('book')}}" method="post">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" name="prof_id" id="prof_id" value="{{ $prof->id }}" />
  <input type="hidden" name="act" value="cart_proceed">
  @if(isset($is_edit) && $is_edit=='1')
  <input type="hidden" name="edit_booking_id" id="edit_booking_id" value="{{$booking->id}}">
  @endif
</form>
<input type="hidden" id="user_id" value="1"> 
    
    @include('salon/footer')
    
    <script type="text/javascript">

        $(document).on('click focus','td',function(){
            $('.serv_bk_tbl').find('td').removeClass('err_bg');
        });

        function save_msg(){

            if($.trim($('#book_message').val())==''){
                $('#book_message').focus();
                return false;
            }

            if($('#msg_file').val()!=''){
                var frm=new FormData($('#msg_frm')[0]);

                $.ajax({
                    url:'{{route("user_ajax")}}',
                    type:'post',
                    data:frm,
                    contentType: false,
                    processData:false,
                    success:function(r){
                        if(r.status=='SUCCESS'){
                            $('#msg_file_inp').val(r.mfile);
                        }
                    },
                    error:function(e){

                    }
                })
            }

            closeModal('myModalmsg');
        }

        function confirm_book(){
            let f = 0;
            $('.time_inps').each(function(){
                if($(this).val()=='' || $(this).val()=='0'){
                    f = 1;
                    $(this).closest('td').addClass('err_bg');
                }   
            });

            if(f==1){
                $('html, body').animate({
                    scrollTop: $('.serv_m_head').offset().top - 20 
                }, 'slow');

                return true;
            }

            let lct = $('#lct_inp').val();
            if(lct=='fixed')
                lct='f';
            else
                lct='d';

            let book_date = $('#book_date_inp').val();
            let ttl_serv = $('#ttl_serv').val();
            let photoshoot='N';

            if($('#photoshoot_chk').prop('checked')===true){
                photoshoot='Y';
            }

            let serv_ar = new Array;

            for(j=0;j<ttl_serv;j++){

                let tm = $('#team_mem_inp_'+j).val();
                let servid = $('#serv_inp_'+j).val();
                let tim = $('#time_inp_'+j).val();
                let custname = $('#cname_inp_'+j).val();

                if(custname=='add'){
                    custname = $('#mn_cname_inp_'+j).val();
                }

                let sr={
                    team_member:tm,
                    service_id:servid,
                    time:tim,
                    cust_name:custname
                }

                serv_ar.push(sr);
            }

            let ttl_cost = $('#ttl_cost').val();
            let photoshoot_ar = new Array;
            if(photoshoot=='Y'){
                $('.photoshoot_title_inp').each(function(k, v){
                    
                    let ptl= $('#photoshoot_title_'+k).val();
                    let pd= $('#n_duration_inp_'+k).val();
                    let pt= $('#n_time_inp_'+k).val();
                    let pcs= $('#n_cust_name_'+k).val();

                    let pr = {
                        title:ptl,
                        duration:pd,
                        time:pt,
                        cust_name:pcs,
                    }

                    photoshoot_ar.push(pr);
                });
            }

            let des_location = '';
            if(lct=='d'){
                des_location = $('#ds_lc_inp').val();
            }

            let cont = $('#cont_inp').val();
            if(cont==''){
                cont=$('#contact_num').val();
            }

            let msg_file = $('#msg_file_inp').val();
            let book_message = $('#book_message').val();
            let service_count = $('#service_count').val();
            let user_id = $('#user_id').val();
            let prof_id = $('#prof_id').val();


            let booking_id = 0;
            let is_edit = $('#is_edit_inp').val();
            let url = '{{route("makebooking")}}';
            if(is_edit=='1'){
                booking_id = $("#edit_booking_id").val();
                url = '{{route("updatebooking")}}';
            }
            
            
            $('.book_btn').attr('disabled',true);

            $.ajax({
                url:url,
                type:'post',
                data:{
                    user_id:user_id,
                    lct:lct,
                    des_location:des_location,
                    book_date:book_date,
                    ttl_serv:ttl_serv,
                    photoshoot:photoshoot,
                    photoshoot_ar:photoshoot_ar,
                    services:serv_ar,
                    ttl_cost:ttl_cost,
                    contact:cont,
                    msg_file:msg_file,
                    service_count:service_count,
                    book_message:book_message,
                    prof_id:prof_id,
                    booking_id:booking_id,
                    is_edit:is_edit,
                    _token:"{{csrf_token()}}",

                },
                success:function(r){
                    $('.book_btn').attr('disabled',false);
                    if(r.status=='SUCCESS'){
                        let oid = r.order_id;
                        alert('Your booking is successfull with Order Id: '+oid);
                        window.location.href="{{route('bookings')}}";
                    }
                    else{
                        if(r.msg=='blank_value'){
                            alert('Please check all your detail or contact to us.');
                        }
                    }
                },
                error:function(e){
                    $('.book_btn').attr('disabled',false);
                    alert('Something went wrong Please contact to or team.');
                }
            })


        }

        $(document).on('click','.cale_scr_ssec',function(){
            $('.cale_scr_ssec').removeClass('active');
            $(this).addClass('active');
            $('#book_date_inp').val($(this).attr('data-date'));
        });
        
        function prev_day(){
            let w = $('.cale_scr_ssec').width();
            w=w+10;

            var leftPos = $('.cale_scr_day_sec').scrollLeft();
            $(".cale_scr_day_sec").animate({scrollLeft: leftPos - w}, 300);
        }
        function next_day(){
            let w = $('.cale_scr_ssec').width();
            w=w+10;
            var leftPos = $('.cale_scr_day_sec').scrollLeft();
            $(".cale_scr_day_sec").animate({scrollLeft: leftPos + w}, 300);
        }

        function show_lc_drop(){
            if($('#is_edit_inp').val()=='1')
                return false;

            $('.lc_drop_down').toggleClass('show');
            $('.lc_ic').toggleClass('show');
        }
        function change_location(lc){
            if(lc=='fixed'){
                $('.sel_spn_lct').text('Fixed Location');
                $('#sel_spn_des, .fx_lc').show();
                $('#sel_spn_fix, .ds_lc').hide();
               
            }
            else{
                $('.sel_spn_lct').text('Desire Location');
                $('#sel_spn_des, .fx_lc').hide();
                $('#sel_spn_fix, .ds_lc').show();
            }

            $('.lc_drop_down').toggleClass('show');
            $('.lc_ic').toggleClass('show');
            $('#lct_inp').val(lc);

            check_prof_service(lc);
        }

        function check_prof_service(lc){
            let sr_ar = new Array;
            $('.serv_radio').each(function(){
                sr_ar.push($(this).attr('data-name'));
            });

            if(sr_ar.length>0){
                $.ajax({
                    url:'{{route("ajaxcall")}}',
                    type:'post',
                    data:{'act':'book_serv_chk',"prof_id":$('#prof_id').val(),'service':sr_ar,'location':lc,'_token' : '{{ csrf_token() }}',},
                    dataType:'json',
                    success:function(r){
                        if(r.status=='SUCCESS'){
                            
                            $('.serv_radio').each(function(){
                                $(this).closest('tr').addClass('gr_clr');
                            });

                            if(r.is_s=='Y'){
                                let serv = r.service;
                                $.each(serv,function(k,v){
                                    let sv = btoa(v.service_name);
                                    $('.serv_radio[data-name="'+sv+'"]').closest('tr').removeClass('gr_clr');
                                });
                            }
                        }
                    },
                    error:function(e){

                    }
                })
            }
        }

        function show_msg_modal(){
            $('#myModalmsg').modal('show');
        }

        function upload_file(i){
            $('#'+i).trigger('click');
        }

        $(document).on("click",".custom_sel2>ol>li",function(){
            let v = $(this).attr('data-v');
            $(this).closest('.custom_sel2').removeClass('open');
            $(this).closest('.custom_sel2').siblings('.time_unit_spn').text(v);
            $(this).closest('.custom_sel2').siblings('.time_service_unit').val(v);
            // $(this).closest('.custom_sel2').siblings('.time_service_unit').trigger('change');
        });

        $(document).on('click','.cont_edit',function(){
            $('.cont_lbl_sec').hide();
            $('.cont_inp_sec').show();
        })
        $(document).on('click','.cont_hide_spn',function(){
            $('.cont_lbl_sec').show();
            $('.cont_inp_sec').hide();
            $('#cont_inp').val('');
        })
        /*$(document).on('keyup change','#cont_inp',function(){
            let cont = $('#cont_inp').val();
           
            $('#contact_num').val(cont);
        })*/

        $(document).on('change','.tm_radio',function(){
            let i = $(this).attr('data-i');
            let tmn = $('input[name="tm_chk_'+i+'"]:checked').attr('data-name');
            let img = $('input[name="tm_chk_'+i+'"]:checked').attr('data-img');
            let id = $('input[name="tm_chk_'+i+'"]:checked').val();
            
            $('.tmname_span_'+i).closest('td').removeClass('gr_clr');
            $('.tmname_span_'+i).html(tmn+' <img src="'+img+'" class="tm_img tmimg_'+i+'">');
            
            $(this).closest('.custom_sel').removeClass('open');
            $('#team_mem_inp_'+i).val(id);

            $('.serv_ul').closest('.custom_sel').removeClass('open');
            $('.time_ul').closest('.custom_sel').removeClass('open');
            $('.serv_inp_'+i).val(0);
            $('.sername_span_'+i).text('(Sub)Service');
            $('.serv_duration_span_'+i).text("Duration");
            $('.serv_price_span_'+i).text("Price");
            $('.serv_duration_span_'+i).closest('td').addClass('gr_clr');
            $('.serv_price_span_'+i).closest('td').addClass('gr_clr');
            $('.sername_span_'+i).closest('td').addClass('gr_clr');
            $('#serv_inp_'+i).val(0);

            if(id=='0'){
                $('.tmname_span_'+i).closest('td').addClass('gr_clr');
                $('.serv_li_'+i).show();
                return true;
            }

            let tmserv = $('input[name="tm_chk_'+i+'"]:checked').attr('data-serv');
            let tms = JSON.parse(tmserv);
            $('.serv_li_'+i).each(function(){

                if(jQuery.inArray($(this).attr('data-si'), tms) !== -1){
                    $(this).show();
                }
                else{
                    $(this).hide();
                }
            });

            $('.time_service_unit_'+i).html('');
            $('.time_service_unit_'+i).closest('div.time_service_sec').hide();
            $('.stime_span_'+i).closest('td').addClass('gr_clr').attr('time','');
            $('.stime_span_'+i).html('Select Time');
            $('.time_td_'+i).find('.sf_time_chk').prop('checked',false);

            // console.log(tmserv.sera);

        });

        $(document).on('change click','.service_radio',function(){
            let i = $(this).attr('data-i');
            let q = $(this).attr('data-q');
            let smn = $('input[name="serv_'+i+'"]:checked').attr('data-name');
            let id = $('input[name="serv_'+i+'"]:checked').val();
            let price = $('input[name="serv_'+i+'"]:checked').attr('data-p');
            let duration = $('input[name="serv_'+i+'"]:checked').attr('data-d');

            let oid = $('#serv_inp_'+i).val();

            /*$('input.service_radio[value="'+oid+'"]').each(function(){
              $(this).closest('li').removeClass('disabled');
            })*/

            if(id==0){
                $('.sername_span_'+i).closest('td').addClass('gr_clr');
                $('.sername_span_'+i).html(smn);
                $('.serv_duration_span_'+i).text('Duration');
                $('.serv_price_span_'+i).text("Price");
                $('.time_service_unit_'+i).html('');
                $('.time_service_unit_'+i).closest('div.time_service_sec').hide();
                $('.stime_span_'+i).closest('td').addClass('gr_clr').attr('time','');
                $('.stime_span_'+i).html('Start Time');
                $('.time_td_'+i).find('.sf_time_chk').prop('checked',false);
                $('.serv_duration_span_'+i).closest('td').addClass('gr_clr');
                $('.serv_price_span_'+i).closest('td').addClass('gr_clr');
                $(this).closest('.custom_sel').removeClass('open');
                
                check_for_service(id,q, oid);
                /*let oid = $('#serv_inp_'+i).val();

                $('input.service_radio[value="'+oid+'"]').each(function(){
                  $(this).closest('li').removeClass('disabled');
                })*/

                $('#serv_inp_'+i).val(id);

                return true;
            }

            if($('#serv_inp_'+i).val()==id)
                return true;
            
            $('.sername_span_'+i).closest('td').removeClass('gr_clr');

            $('.sername_span_'+i).html(smn);
            
            $(this).closest('.custom_sel').removeClass('open');
            $('#serv_inp_'+i).val(id);

            $('.tm_ul').closest('.custom_sel').removeClass('open');
            $('.time_ul').closest('.custom_sel').removeClass('open');
            $('.cl_name_ul').closest('.custom_sel').removeClass('open');
            $('.serv_duration_span_'+i).text(duration);
            $('.serv_price_span_'+i).text(price+'EUR');
            $('.serv_duration_span_'+i).closest('td').removeClass('gr_clr');
            $('.serv_price_span_'+i).closest('td').removeClass('gr_clr');
            $('.time_service_unit_'+i).html('');
            $('.time_service_unit_'+i).closest('div.time_service_sec').hide();
            $('.stime_span_'+i).closest('td').addClass('gr_clr').attr('time','');
            $('.stime_span_'+i).html('Select Time');
            $('.time_td_'+i).find('.sf_time_chk').prop('checked',false);

            if(q>1 && $('#team_mem_inp_'+i).val()=='0'){
                let j=0;
                let strt = '';
                let strt1 = '';
                while(j<q){
                    j++;
                    strt+='<option value="'+j+'">'+j+'</option>';
                    strt1+='<li data-v="'+j+'">'+j+'</li>';
                }

                $('.time_service_unit_'+i).html(strt);
                $('.time_service_unit_'+i).closest('div.time_service_sec').show();
                $('.time_service_unit_'+i).siblings('div.custom_sel2').find('ol').html(strt1);
            }
            else{
             $('.time_service_unit_'+i).html('');  
             $('.time_service_unit_'+i).closest('div.time_service_sec').hide(); 
            }

            check_for_service(id,q,oid);

        });

        $(document).on('change click','.sf_time_chk',function(){
            let i = $(this).attr('data-i');
            let time = $('input[name="time_'+i+'"]:checked').attr('data-time');
            
            $('.stime_span_'+i).closest('td').removeClass('gr_clr').attr('time',time);
            $('.stime_span_'+i).html(time);
            
            $(this).closest('.custom_sel').removeClass('open');
            $('#time_inp_'+i).val(time);

            $('.tm_ul').closest('.custom_sel').removeClass('open');
            $('.serv_ul').closest('.custom_sel').removeClass('open');
            $('.cl_name_ul').closest('.custom_sel').removeClass('open');

            let stu = $(this).parent('label').siblings('.time_service_sec').find('.time_service_unit_'+i).val();

            if(stu!='' && stu>1){
                let stn = $('.sername_span_'+i).text();
                let j=0;
                let k=1;
                // while(j<stu){
                    
                $('.service_radio[data-name="'+stn+'"]:checked').each(function(){
                    let l = $(this).attr('data-i');

                    /*if($("#team_mem_inp_"+l).val()!=0)
                        return true;*/

                    if(l!=i ){
                        
                        if(k<stu){
                            $("#team_mem_inp_"+l).val('0');
                            $('input[name="tm_chk_'+l+'"][value="0"]').prop('checked',true);
                            let img = $('input[name="tm_chk_'+l+'"]:checked').attr('data-img');
                            $('.tmname_span_'+l).closest('td').addClass('gr_clr');
                            $('.tmname_span_'+l).html('Any TM <img src="'+img+'" class="tm_img tmimg_'+l+'">');
                            $('input[name="time_'+l+'"][value="'+time+'"]').trigger('click');
                        }
                        k++;
                    }
                });

                if(k<stu){
                    let o = parseInt(stu) - parseInt(k);
                    let n=0;
                    $('.team_mem_inp').each(function(){

                        if(n>=o)return true;

                        if($(this).val()=='0'){
                            let m = $(this).attr('data-i');
                            if($('#serv_inp_'+m).val()=='' || $('#serv_inp_'+m).val()=='0'){
                                n++;

                                $('input[name="serv_'+m+'"][data-name="'+stn+'"]').prop('checked',true).trigger('click');
                                // $('input[name="time_'+m+'"][value="'+time+'"]').trigger('click');
                            }
                        }
                    });
                }

                    // j++;
                // }
                // console.log($('.service_radio[data-name="'+stn+'"]'));
            }

            sort_tr_time();
            
        });

        $(document).on('change','.serv_client_name',function(){
            let i = $(this).attr('data-i');
            let nam = $('input[name="serv_client_name_'+i+'"]:checked').val();

            console.log(nam);
            if(nam=='add'){
                $('.cname_sec_'+i).addClass('d-none');
                $('.mn_cname_sec_'+i).removeClass('d-none');
                $(this).closest('.custom_sel').removeClass('open');
            }
         
            $('.cname_span_'+i).closest('td').removeClass('gr_clr');
            $('.cname_span_'+i).html(nam);
            
            $(this).closest('.custom_sel').removeClass('open');
            $('#cname_inp_'+i).val(nam);

            $('.tm_ul').closest('.custom_sel').removeClass('open');
            $('.serv_ul').closest('.custom_sel').removeClass('open');
            $('.cl_name_ul').closest('.custom_sel').removeClass('open');
        });

        $(document).on('click','.plus_spn',function(){
          let q = $(this).siblings('.unit_spn').attr('data-q');
          q = parseInt(q)+1;
          
          /*if(q>=3){

          }*/

          $(this).siblings('.unit_spn').attr('data-q',q).html(q);
          $(this).closest('.cart_sec').siblings('.serv_radio').attr('data-q',q);

          // calculate_ttl_price();
          save_cart();
        });

        $(document).on('click','.minus_spn',function(){
          let q = $(this).siblings('.unit_spn').attr('data-q');
          let min_q = $(this).siblings('.unit_spn').attr('data-min_q');

          if(min_q>=q)
            return false;

          q = parseInt(q)-1;
          if(q<=0){
            return false;
          }


          $(this).siblings('.unit_spn').attr('data-q',q).html(q);
          $(this).closest('.cart_sec').siblings('.serv_radio').attr('data-q',q);

          // calculate_ttl_price();
          save_cart();
        });

        $(document).on('click','.custom_sel_ic',function(){

            if($(this).closest('.custom_sel').hasClass('open')){
                $(this).closest('.custom_sel').removeClass('open');
            }
            else{
                $(this).closest('.custom_sel').addClass('open');
            }    
        });

        $(document).on('click','.custom_sel_ic2',function(){

            if($(this).closest('.custom_sel2').hasClass('open')){
                $(this).closest('.custom_sel2').removeClass('open');
            }
            else{
                $(this).closest('.custom_sel2').addClass('open');
            }    
        });

        $(document).on('click',function(event) {
            const $target = $(event.target);

            if($target.closest('.custom_sel').length>0)return true;

            $('.custom_sel').removeClass('open');
          
        });

        $('#msg_file').on('change',function(){
            readURL(this,'msg_file');
        })

        $('#photoshoot_chk').on('change',function(){
            if($(this).prop('checked')===true){
                $('.add_field_btn').show();
                $('.new_row_tr').show();
            }
            else{
                $('.add_field_btn').hide();
                $('.new_row_tr').hide();
            }
        });

        function sort_tr_time(){
            $('.time_inps').each(function(){
                
                if($(this).val()!='' && $(this).val()!='0'){
                    let t = $(this).val();

                    var sc = new Date('1970-01-01T' + t + ':00Z').getTime() / 1000;

                    $(this).closest('tr').attr('data-time',sc);
                }
                else{
                    $(this).closest('tr').attr('data-time','99999999999');
                }
            });

            setTimeout(function(){

                var $tbody = $('#sb_tb');
                $tbody.find('tr').sort(function(a, b) {

                  var tda = $(a).attr('data-time'); 
                  var tdb = $(b).attr('data-time'); 

                  if(tda=='' || tdb=='')return true;

                 
                  return tda > tdb ? 1
                 
                    : tda < tdb ? -1
                 
                    : 0;
                }).appendTo($tbody);

            },2000)
            
        }

        function check_for_service(id,q, oid){

            $('input.service_radio[value="'+oid+'"]').each(function(){
              $(this).closest('li').removeClass('disabled');
            })

            var l = $('input.service_radio[value="'+id+'"]:checked').length;
            
            $('input.service_radio[value="'+id+'"]').each(function(){

                $(this).closest('li').removeClass('disabled');

                if($(this).prop('checked')!==true && $(this).val()!='0' && l>=q){
                    $(this).closest('li').addClass('disabled');
                }
            });
            
        }

        var new_row_i = 0;

        function add_new_row(){
            var htm = `<tr id="new_row_tr_${new_row_i}" class="new_row_tr">
                <td class="bdr-right bdr-top bg-grey"></td>
                <td class="bdr-right bdr-top text-center">
                    <div class="new_row_inp_sec">
                        <input type="text" id="photoshoot_title_${new_row_i}" class="new_row_inp photoshoot_title_inp" placeholder="Input text...">
                    </div>
                </td>
                <td class="bdr-right bdr-top text-center">
                    <div class="d-flex justify-content-center align-items-center">
                        <span class="new_rw_duration_${new_row_i}">Duration</span> 
                        <input type="hidden" id="n_duration_inp_${new_row_i}" value="">
                        <div class='custom_sel ms-2'>
                            <span class="custom_sel_ic flt" style="right:14px"><i class="fa fa-angle-down"></i></span>
                            <ul class="dur_ul" style="    min-width: 100px;">
                                <li>
                                    <label>
                                        <input type="radio" data-i="${new_row_i}" class="new_rw_dur d-none" name="new_rw_dur_${new_row_i}" value="30m" >30m
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="radio" data-i="${new_row_i}" class="new_rw_dur d-none" name="new_rw_dur_${new_row_i}" value="1h" >1h
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="radio" data-i="${new_row_i}" class="new_rw_dur d-none" name="new_rw_dur_${new_row_i}" value="1h:30m" >1h:30m
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="radio" data-i="${new_row_i}" class="new_rw_dur d-none" name="new_rw_dur_${new_row_i}" value="2h" >2h
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="radio" data-i="${new_row_i}" class="new_rw_dur d-none" name="new_rw_dur_${new_row_i}" value="2h:30m" >2h:30m
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="radio" data-i="${new_row_i}" class="new_rw_dur d-none" name="new_rw_dur_${new_row_i}" value="3h" >3h
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="radio" data-i="${new_row_i}" class="new_rw_dur d-none" name="new_rw_dur_${new_row_i}" value="3h:30m" >3h:30m
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </td>
                <td class="bdr-right bdr-top text-center">
                    <div class="d-flex justify-content-center align-items-center">
                        <span class="n_stime_span_${new_row_i}">Start Time</span> 
                        <input type="hidden" name="n_time_inp_${new_row_i}" class="time_inps" id="n_time_inp_${new_row_i}">
                        <div class='custom_sel ms-2'>
                            <span class="custom_sel_ic flt" style="right:14px"><i class="fa fa-angle-down"></i></span>
                            <ul class="time_ul">
                                @foreach($time_arr as $timea)
                                <li class="n_sf_time_li" data-time="{{$timea}}">
                                    <label for="n_sf_time_chk_{{$timea}}">{{$timea}}</label>
                                    <label class="custom_check">
                                        <input type="radio" class="n_sf_time_chk" data-i="${new_row_i}" id="n_sf_time_chk_{{$timea}}" name="n_time_${new_row_i}" value="{{$timea}}"  data-time="{{$timea}}">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </td>
                <td class="bdr-right bdr-top text-center bg-grey"></td>
                <td class="bdr-right bdr-top text-center">
                    <div class="new_row_inp_sec">
                        <input type="text" id="n_cust_name_${new_row_i}" class="new_row_inp" placeholder="Name...">
                    </div>
                </td>
                <td class=" bdr-top text-center"><span class="cls_spn" onclick="remove_new_row('${new_row_i}')">&times;</span></td>
            </tr>`;

            $('.serv_bk_tbl').find('tbody').append(htm);

            new_row_i++;
        }

        $(document).on('change',".new_rw_dur",function(){
            let i = $(this).attr('data-i');
            let v = $('input[name="new_rw_dur_'+i+'"]:checked').val();
            $('.new_rw_duration_'+i).text(v);
            $('#n_duration_inp_'+i).val(v);
            $(this).closest('.custom_sel').removeClass('open');
        });

        $(document).on('change click','.n_sf_time_chk',function(){
            let i = $(this).attr('data-i');
            let time = $('input[name="n_time_'+i+'"]:checked').attr('data-time');
            
            $('.n_stime_span_'+i).closest('td').removeClass('gr_clr').attr('time',time);
            $('.n_stime_span_'+i).html(time);
            
            $(this).closest('.custom_sel').removeClass('open');
            $('#n_time_inp_'+i).val(time);

            console.log('aaaaaaa');

            sort_tr_time();
        })

        function remove_new_row(i){
            $('#new_row_tr_'+i).remove();
        }

        function reset_booking(i){
            $('input[name="tm_chk_'+i+'"][value="0"]').prop('checked',true);
            $('input[name="tm_chk_'+i+'"]').trigger('change');
            $('.stime_span_'+i).closest('td').addClass('gr_clr');
            $('.stime_span_'+i).html('Select Time');
            $('#time_inp_'+i).val('');
            $('input[name="time_'+i+'"]').prop('checked',false);

            $('#mn_cname_inp_'+i).val('');
            $('.cname_span_'+i).closest('td').addClass('gr_clr');
            $('.cname_span_'+i).html('Select Name');
            $('#cname_inp_'+i).val('');   
            $('.cname_sec_'+i).removeClass('d-none');
            $('.mn_cname_sec_'+i).addClass('d-none');
        }

        function close_cname(i){
            $('#mn_cname_inp_'+i).val('');
            $('.cname_span_'+i).closest('td').addClass('gr_clr');
            $('.cname_span_'+i).html('Select Name');
            $('#cname_inp_'+i).val('');   
            $('.cname_sec_'+i).removeClass('d-none');
            $('.mn_cname_sec_'+i).addClass('d-none');
            $('input[name="serv_client_name_'+i+'"][value="add"]').prop('checked',false);
            // $(this).closest('.custom_sel').removeClass('open');
        }

        function add_cname(i){

            var nam = $('#mn_cname_inp_'+i).val();
            if($.trim(nam)==''){
                $('#mn_cname_inp_'+i).focus();
                return false;
            }

            $('.cname_span_'+i).closest('td').removeClass('gr_clr');
            $('.cname_span_'+i).html(nam);

            var str = `<li>
                            <label>
                                <input type="radio" data-i="${i}" checked class="d-none serv_client_name" name="serv_client_name_${i}" value="${nam}" data-name="${nam}">${nam}
                            </label>
                        </li>`;

            $(".cl_name_ul_"+i+" li:last").before(str);
            
            $('input[name="serv_client_name_'+i+'"][value="add"]').prop('checked',false);

            $(this).closest('.custom_sel').removeClass('open');
            $('#cname_inp_'+i).val(nam);

            $('.cname_sec_'+i).removeClass('d-none');
            $('.mn_cname_sec_'+i).addClass('d-none');

            $('.tm_ul').closest('.custom_sel').removeClass('open');
            $('.serv_ul').closest('.custom_sel').removeClass('open');
            $('.cl_name_ul').closest('.custom_sel').removeClass('open');
        }

    function save_cart(){
        json_str = null;
        document.cookie = 'services' + '=' + json_str + ';expires=-1;path=/';

        let f=0;
        $('.serv_radio:checked').each(function(){
          
          let q = $(this).attr('data-q');
          let i = $(this).val();
          let p = $(this).attr('data-p');

          setCookie(i, q, p);

          let str = '<input type="hidden" name="services[]" value="'+q+'~~'+i+'">';
          $('#ttl_s_frm').append(str);
          f=1;
        });

        if(f==1)
          $('#ttl_s_frm').submit();
      }

      function setCookie(sid, q, p){ 
      
        var prdct = [];
        var arr = [sid, q, p];  //[m, t]
      
        var created_p = getCookie('services');

        if(created_p!==undefined && created_p!='' && created_p!=null && created_p!='null')
            prdct = JSON.parse(created_p);

         prdct.push(arr);

        var expires = new Date();
        expires.setTime(expires.getTime() + (1 * 24 * 60 * 60 * 1000));
        var json_str = JSON.stringify(prdct);

        document.cookie = 'services' + '=' + json_str + ';expires=' + expires.toUTCString()+';path=/';

    }

    function getCookie(key) {
        var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
        return keyValue ? keyValue[2] : null;
    }

    function readURL(input,ph) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          
          if(ph=='msg_file'){
            $('#msg_file_prev').attr('src', e.target.result).show();
            // $('#msg_file_inp').val(e.target.result);
        }


          /*if(ph=='fixed_pic'){
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
          }*/

            // $('#img_not_up_spn').hide();
            
        };
        reader.readAsDataURL(input.files[0]);
      }
    }

    function closeModal(mi){
        $('#'+mi).modal('hide');
    }

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

  
    </body>
</html>