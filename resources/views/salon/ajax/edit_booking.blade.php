<style type="text/css">
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

    .old_data_sec{
        text-decoration: line-through;
        color: #a6a2a2;
        font-size: 12px;
        display: none;
    }   

    .cancel_bk_tr td{
        text-decoration: line-through;
        background: #E5E5E5;
    }

    @media(max-width: 767px){
        .sel_sev_tbl{width: 100%;margin-bottom: 20px}
        .sel_sev_sec{flex-wrap:wrap;}
    }
</style>

<div class="container m-t-40">
                <p class="bk_date_p">{{ date('M d, y') }}</p>
                <div class="serv_main_sec">
                    <div class="serv_m_head">
                        Booking
                    </div>
                    <table class="w-100 serv_bk_tbl">
                        
                        <tbody id="sb_tb">
                            <?php
                            $last_bk_time='';
                            $i=0;
                            ?>
                           
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
                            @endforeach

                            @foreach($booking->booking_trans as $book_trans)
                           <?php
                            $last_bk_time=$book_trans->start_time;
                           ?>
                           
                            <tr class="bg_grey tr_{{$i}} @if($book_trans->status=='cancel') cancel_bk_tr @endif" data-bt="{{$book_trans->id}}">
                                @if($prof->team_mem_f=='Y')
                                <td class="bdr-right  ">
                                    <div class="d-flex justify-content-between align-items-center ">
                                        <span class="tmname_span_{{$i}}">
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
                                        <input type="hidden" id="team_mem_inp_{{$i}}" data-i="{{$i}}" class="team_mem_inp" value="{{$book_trans->team_member}}">
                                        <div class='custom_sel'>
                                            <span class="custom_sel_ic" style="right:14px"><i class="fa fa-angle-down"></i></span>
                                            <ul class="tm_ul tm_ul_{{$i}}">
                                                <!-- <li>
                                                    <label>
                                                        <input type="radio" class="d-none tm_radio" data-i="{{$i}}" name="tm_chk_{{$i}}" value="0"  data-name="Any TM" data-img="{{asset('public/images/default-user.png')}}">Any TM
                                                    </label>
                                                </li> -->

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

                                                
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="mt-2 old_tmname_span_{{$i}} old_data_sec" >
                                        <span class="">
                                            @if($book_trans->team_member=='0')
                                             Any TM 
                                               
                                            @else 

                                                @php
                                                $tmimg=asset("public/images/default-user.png");
                                                if($book_trans->booking_team_member->image!=''){
                                                    $tmimg=asset("public/imgs/team/").'/'.$book_trans->booking_team_member->image;
                                                }
                                                @endphp

                                                {{$book_trans->booking_team_member->member}} 
                                             
                                            @endif
                                        </span> 
                                    </div>
                                </td>
                                @else
                                <input type="hidden" id="team_mem_inp_{{$i}}" value="0">
                                @endif
                                <td class="bdr-right  text-center ">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <span class="sername_span_{{$i}}">{{$book_trans->booking_service->service_name}}</span> 
                                        <input type="hidden" id="serv_inp_{{$i}}" value="{{$book_trans->service_id}}">
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
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-2 old_sername_span_{{$i}} old_data_sec" >
                                        <span class="">
                                            {{$book_trans->booking_service->service_name}}
                                        </span> 
                                    </div>
                                </td>
                                <td class="bdr-right  text-center  duration_td">
                                    <span class="serv_duration_span_{{$i}}">{{$book_trans->duration }}</span> &nbsp; <i style="font-size:12px;font-weight:normal;" class="fa fa-pencil cursor-pointer" onclick="show_duration_edit('{{$i}}')"></i>
                                    <div class="edit_duration_sec mt-2 border-bottom" id="edit_duration_sec_{{$i}}" style="display:none">  
                                        <select class="me-2" id="duration_start_hr_{{$i}}">
                                          <option value="">0h</option>
                                          <option value="1h">1h</option>
                                          <option value="2h">2h</option>
                                          <option value="3h">3h</option>
                                          <option value="4h">4h</option>
                                          <option value="5h">5h</option>
                                       </select>
                                       <span class="me-2">:</span>
                                       <select class="me-2" id="duration_start_min_{{$i}}">
                                          <option value="">0m</option>
                                          <option value="5m">5m</option>
                                          <option value="10m">10m</option>
                                          <option value="15m">15m</option>
                                          <option value="20m">20m</option>
                                          <option value="25m">25m</option>
                                          <option value="30m">30m</option>
                                          <option value="35m">35m</option>
                                          <option value="40m">40m</option>
                                          <option value="45m">45m</option>
                                          <option value="50m">50m</option>
                                       </select>

                                       <p class="mt-2"><i class="fa fa-check text-success cursor-pointer" onclick="update_duration('{{$i}}')" title="Update Duration"></i> &nbsp;&nbsp;&nbsp;&nbsp; 
                                        <i class="fa fa-close cursor-pointer"  title="Close"></i></p>
                                    </div>
                                    <br>
                                    <span class="mt2 old_serv_duration_span_{{$i}} old_data_sec">{{$book_trans->duration }}</span>
                                </td>
                                <td class="bdr-right  text-center  time_td">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <span class="stime_span_{{$i}}">{{$book_trans->start_time }}</span> 
                                        <input type="hidden" class="time_inps" id="time_inp_{{$i}}" value="{{$book_trans->start_time }}">
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
                                    </div>
                                </td>
                                <td class="bdr-right  text-center ">
                                    <span class="serv_price_span_{{$i}}">{{$book_trans->price}} EUR</span>
                                </td>
                                <td class="bdr-right  text-center ">
                                    <div class="d-flex justify-content-center align-items-center cname_sec">
                                        <span class="cname_span_{{$i}}">{{$book_trans->cust_name}}</span>
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
                                    </div>
                                </td>
                                <td class="  text-center">
                                    <!-- <span class="cls_spn" onclick="reset_booking('{{$i}}')">&times;</span> -->
                                    <span class="cls_spn cancel_spn_{{$i}}" @if($book_trans->status!='new') style="display:none" @endif title="Cancel Service" onclick="cancel_booking('{{$book_trans->id}}','{{$i}}')">&times;</span> &nbsp; <br>
                                    <span class="cursor-pointer undo_spn_{{$i}}" @if($book_trans->status!='cancel') style="display:none" @endif  title="Undo Changes" onclick="undo_changes('{{$book_trans->id}}','{{$i}}')"><i class="fa fa-undo"></i></span>
                                </td>
                            </tr>

                            @php

                            $i++;

                            @endphp

                            @endforeach

                            
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
                    
                    <!-- <div class="text-end btn_sec1">
                        
                        <button type="button" class="mybtn" onclick="prof_detail('{{ md5($prof->id) }}','{{$prof->legal_name}}','f')">+ &nbsp;Sub Service</button>
                        
                    </div>
                    
                    <div class="text-end btn_sec2 bdr-bottom">
                        <button type="button" class="mybtn1 add_field_btn" onclick="add_new_row()" style="display:none">+ &nbsp;text Field</button>
                    </div> -->
                    <div class="bdr-bottom text-start">
                        <div class="serv_msg fx_lc">
                            Fixed Location: @if($fix_loc && isset($fix_loc[0])) {{$fix_loc[0]->salon_name}}, {{$fix_loc[0]->street}} {{$fix_loc[0]->number}} {{$fix_loc[0]->municipality}} {{$fix_loc[0]->province}} {{$fix_loc[0]->postal_code}} @endif.
                        </div>
                        <div class="serv_msg ds_lc" style="display:none">
                            Desire Location: <input class="" type="text" name="" id="ds_lc_inp" placeholder="..." style="min-width:50%">
                        </div>
                    </div>
                    <div class="bdr-bottom">
                        <div class="cust_contact d-flex align-items-center">Contact Number: &nbsp;
                           
                            <input type="hidden" name="contact_num" id="contact_num" value="{{$booking->contact}}">
                           
                            <div class="cont_lbl_sec"><span class="cont_lbl_spn">{{$booking->contact}}</span> &nbsp;<span class="cont_edit"><i class="fa fa-pencil"></i></span></div>
                            <div class="cont_inp_sec" style="display:none">
                                &nbsp;
                                <input class="" type="tel" name="" id="cont_inp" placeholder="..."> &nbsp;
                                <!-- <span class="cont_save_spn"><i class="fa fa-check"></i></span> &nbsp; -->
                                <span class="cont_hide_spn" >&times;</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <button type="button" class="book_btn" onclick="confirm_update()">Done</button>

                    </div>
                </div>
            </div>

            <script type="text/javascript">

            function show_duration_edit(i){
                $('.edit_duration_sec').hide();
                $('#edit_duration_sec_'+i).show();
            }

            function cancel_booking(bt,i){
                $.ajax({
                    url:'{{route("ajx_booking_update")}}',
                    type:'post',
                    data:{'act':'bt_del','bt':bt,'_token':"{{csrf_token()}}"},
                    success:function(r){
                        $('.cancel_spn_'+i).hide();
                        $('.undo_spn_'+i).show();

                        $('.tr_'+i).addClass('cancel_bk_tr');
                    },
                    error:function(e){

                    }
                })
            }

            $(document).on('change','.tm_radio',function(){
                let i = $(this).attr('data-i');
                let tmn = $('input[name="tm_chk_'+i+'"]:checked').attr('data-name');
                let img = $('input[name="tm_chk_'+i+'"]:checked').attr('data-img');
                let id = $('input[name="tm_chk_'+i+'"]:checked').val();

                let bt = $(this).closest('tr').attr('data-bt');
                
                $('.tmname_span_'+i).closest('td').removeClass('gr_clr');
                $('.tmname_span_'+i).html(tmn+' <img src="'+img+'" class="tm_img tmimg_'+i+'">');
                
                $(this).closest('.custom_sel').removeClass('open');
                $('#team_mem_inp_'+i).val(id);

                $('.serv_ul').closest('.custom_sel').removeClass('open');
                $('.time_ul').closest('.custom_sel').removeClass('open');
                
                let data={'act':'update_bt','bt':bt,'field':'team_member','team_member':id,'_token':"{{csrf_token()}}"};

                // save_detail(data);
                save_detail(data).done(function(){
                    // console.log('aaaa');
                    $('.old_tmname_span_'+i).show();
                }).fail(function(){
                    console.log('ERROR');
                });
            });

            $(document).on('change click','.service_radio',function(){

                let i = $(this).attr('data-i');
                let q = $(this).attr('data-q');
                let smn = $('input[name="serv_'+i+'"]:checked').attr('data-name');
                let id = $('input[name="serv_'+i+'"]:checked').val();
                let price = $('input[name="serv_'+i+'"]:checked').attr('data-p');
                let duration = $('input[name="serv_'+i+'"]:checked').attr('data-d');

                let oid = $('#serv_inp_'+i).val();



                /*if(id==0){
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
                    
                    $('#serv_inp_'+i).val(id);

                    return true;
                }*/

              
                if($('#serv_inp_'+i).val()==id)
                    return true;

              
                $('#serv_inp_'+i).val(id);
                
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
                /*$('.time_service_unit_'+i).html('');
                $('.time_service_unit_'+i).closest('div.time_service_sec').hide();
                $('.stime_span_'+i).closest('td').addClass('gr_clr').attr('time','');
                $('.stime_span_'+i).html('Select Time');
                $('.time_td_'+i).find('.sf_time_chk').prop('checked',false);*/

              
                let bt = $(this).closest('tr').attr('data-bt');
                let data={'act':'update_bt','bt':bt,'field':'service_id','service_id':id,'_token':"{{csrf_token()}}"};

                save_detail(data).done(function(){
                    $('.old_sername_span_'+i).show();
                }).fail(function(){
                    console.log('ERROR');
                });

                /*if(q>1 && $('#team_mem_inp_'+i).val()=='0'){
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
                }*/

                // check_for_service(id,q,oid);

            });

            function update_duration(i){
                let h = $('#duration_start_hr_'+i).val();
                let m = $('#duration_start_min_'+i).val();

                let dur = '';
                if(h!='' && m!=''){
                    dur=h+':'+m;
                }
                else if(h!=''){
                    dur = h;
                }
                else if(m!=''){
                    dur = m;
                }
                else{
                    alert('Please Select Duration');
                    return false;
                }

                let bt = $('.tr_'+i).attr('data-bt');
                let data={'act':'update_bt','bt':bt,'field':'duration','duration':dur,'_token':"{{csrf_token()}}"};

                save_detail(data).done(function(r){
                    console.log(r);
                    $('.old_serv_duration_span_'+i).show();
                    $('.serv_duration_span_'+i).html(dur);
                    $('#edit_duration_sec_'+i).hide();
                }).fail(function(){
                    console.log('ERROR');
                });

            }

            function save_detail(data){
               return $.ajax({
                    url:'{{route("ajx_booking_update")}}',
                    type:'post',
                    data:data,
                })
            }

            function undo_changes(bt,i){
                $.ajax({
                    url:'{{route("ajx_booking_update")}}',
                    type:'post',
                    data:{'act':'undo','bt':bt,'_token':"{{csrf_token()}}"},
                    success:function(r){
                        if(r.status=='SUCCESS'){
                            /*let fl = r.f;
                            if(fl=='team_member'){
                                $('.old_tmname_span_'+i).hide();
                            }
                            else if(fl=='service_id'){
                                $('.old_sername_span_'+i).hide();
                            }*/


                            $('.cancel_spn_'+i).show();
                            $('.undo_spn_'+i).hide();

                            $('.tr_'+i).removeClass('cancel_bk_tr');
                            
                        }
                        
                    },
                    error:function(e){

                    }
                })
            }
        </script>