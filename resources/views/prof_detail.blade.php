
@include('_header')
<style>
.lc_t_spn{cursor: pointer;}
            * {
                font-family: myFirstFont1;
            }

            .accordion-button {
                padding: 0px;
            }

            .accordion-item {
                border: none;
                border-top: 1px solid #ddd;
                border-bottom: 1px solid #ddd;
                border-radius: 0px !important;
            }

            .accordion-body {
                padding: 0px;
                text-align: justify;
            }

            .accordion-button:not(.collapsed) {
                color: #333;
                background-color: transparent;
                box-shadow: none;
            }

            .accordion-button:focus {
                z-index: 3;
                border-color: var(--bs-accordion-btn-focus-border-color);
                outline: 0;
                box-shadow: none;
            }

            .list_box {
                border: none;
            }

            .filter_box {justify-content: space-between;}
            .filter_box>div {margin-left: 0px;}
            .des_p_loc{padding: 4px 10px;border: 1px solid #c3c1c1;border-radius: 3px;margin-right: 6px}
            .serv_lbl{vertical-align: top;margin-top: 3px;margin-right: 10px}
            .serv_lbl input{width: 18px;height: 18px;}
            .sub_accordian_box .left_1{width: 100%;padding: 10px;background-color: #f7f7f7;}
            .myaccordian_header_box>div:last-child p{font-size: 18px}


            .fixed-bottom {
                position: fixed;
                bottom: 0%;
                left: 0%;
                background-color: #0d9da3;
                width: 100%;
                min-height: 50px;
                z-index: 9999999;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px 20px;
            }
            /* Tooltip container */
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
  width: 70vw;
  background-color: #0d9da3;
}
.tooltip_spn, .tooltip_spn1{cursor: pointer;    font-size: 16px;}
.tooltip_spn:hover + .tooltip .tooltiptext, .tooltip_spn1:hover + .tooltip .tooltiptext {
  visibility: visible;
}
.sub_accordian_box .left_1>div h4{color: #121111;}


.quantity {
    padding: 4px;
    border: solid #d8d8d8 1px;
    border-radius: 4px;
    display: none;
}
.quantity .plus-btn, .quantity .minus-btn {
    color: #202020 !important;
    background-color: #fafafa !important;
}
.quantity * {
    font-size: 14px;
}
.addqty{width: 100px;float: right;display: flex;margin-top: 7px;}
.team_mem_c_s{font-size: 14px;    font-style: normal;display: block;}
.team_mem_c_s::before {
    display: inline-block;
    content: '\27A4';
    margin-right: 3px;
    margin-left: 3px;
    font-size: 10px;
    color: #5c5a5a;
}
        </style>
<section class="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="filter_box">
                            <div>
                                <a href="{{config('app.url')}}/listing">Back</a>
                            </div>
                            <div class="d-flex">
                                <!-- <div class="me-4">
                                    <label>Filters</label>
                                    <select>
                                        <option>Select Sort</option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                </div>
                                <div>
                                    <label>Sort By</label>
                                    <select>
                                        <option>Relevance</option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
               <!--  <div class="row">
                    <div class="col-sm-12">
                        <div class="filter_button_box">
                            <button>Hair</button>
                            <button>Makeup</button>
                            <button>Lashes</button>
                            <button>Eye Brows</button>
                            <button>Nails</button>
                            <button>Face Treatment</button>
                            <button>Body Treatment</button>
                            <button>Hair Removal</button>
                        </div>
                    </div>
                </div> -->
                <div class="row ">
                    <div class="col-sm-12">
                        @if($prof->fixed_info=='1')
                        <div class="list_box" id="fix_l_sec" @if($t=='d') style="display:none" @endif>
                            <div class="list_img_container">
                                @if($prof->fixed_pic=='')
                                    <img src="{{URL::asset('public/images/profile.png')}}">
                                @else    
                                    <img src="{{URL::asset('public/imgs/template/')}}/{{$prof->fixed_pic}}">
                                @endif    
                                
                            </div>
                            <div class="list_right">
                                <div class="list_right_container">
                                    <div class="list_detail_container">
                                        <h4>{{ ($prof->fixed_name!='')?$prof->fixed_name:$prof->legal_name}}</h4>
                                        <p>{{$prof->fixed_bio}}</p>

                                        @if(count($fixed_locations)>0)
                                        @foreach($fixed_locations as $fix_loc)
                                        <div>
                                            <p class="mb-1">
                                                <span class="fw-bold">Salon Name :</span>
                                                <span>{{$fix_loc->salon_name}}</span>
                                            </p>
                                            <p class="mb-1">
                                                <span class="fw-bold">Street :</span>
                                                <span>{{$fix_loc->street}}</span>
                                            </p>
                                            <p class="mb-1">
                                                <span class="fw-bold">Postal Code :</span>
                                                <span>{{$fix_loc->postal_code}}</span>
                                            </p>
                                            <p class="mb-1">
                                                <span class="fw-bold">Muncipality :</span>
                                                <span>{{$fix_loc->municipality}}</span>
                                            </p>
                                            <p >
                                                <span class="fw-bold">Provines :</span>
                                                <span>{{$fix_loc->province}}</span>
                                            </p>
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                    <div class="list_rating_container">
                                        <div class="first">
                                            <span class="myactive">Fixed Location</span>
                                            @if($prof->desire_info=='1')
                                            <span class="lc_t_spn" onclick="show_location_type('d')">Desired Location</span>
                                            @endif
                                        </div>
                                        <div class="second">
                                            <span class="myactive">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </span>
                                            <span class="myactive">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </span>
                                            <span class="myactive">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </span>
                                            <span>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </span>
                                            <span>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <div class="third">
                                            <span>(5)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordian_box">
                                    <div class="pt-3 pb-3 border-top border-bottom">
                                        <p class="m-0">
                                            <strong>Services for:</strong> 
                                            @if(count($temp_notes)>0)
                                            @foreach($temp_notes as $temp_note)
                                                @if($temp_note->location_type=='f')

                                                    @if($temp_note->all_gender=='1') | All Genders @endif @if($temp_note->men=='1') | Male @endif @if($temp_note->women=='1') | Female @endif @if($temp_note->kids=='1') | Kids @endif

                                                @endif

                                            @endforeach
                                            @endif
                                        </p>
                                    </div>
                                    <div class="accordion" id="accordionExample">
                                        @if(count($services['fix'])>0)
                                        @php 
                                        $fi=0;
                                        @endphp
                                        @foreach($services['fix']['service'] as $fix_service)
                                        @php 
                                        $fi++;
                                        @endphp
                                        <?php
                                        /*foreach ($services['fix']['service'] as $key => $value) {
                                            print_r($value->service_name);
                                        };*/
                                        ?>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$fi}}" aria-expanded="true" aria-controls="collapse{{$fi}}">
                                                    <div class="myaccordian_header_box">
                                                        <div>
                                                            <label class="serv_lbl" onclick="javascript:void(0)">
                                                                @if($fix_service->is_sub_service=='0')
                                                                <input type="checkbox" name="service_chk[]" value="{{$fix_service->id}}" class="service_chk" data-p="{{$fix_service->price}}" data-qty='0' id="service_chk_{{$fix_service->id}}">
                                                                @else
                                                                <i class="fa fa-angle-down"></i>
                                                                @endif
                                                            </label>
                                                            <label>
                                                            <h4>{{$fix_service->service_name}}
                                                                @if($fix_service->additional_info!='')
                                                                <span class="tooltip_spn1"><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                                                <div class="tooltip">
                                                                    <span class="tooltiptext">{{$fix_service->additional_info}}</span>
                                                                </div>
                                                                @endif
                                                            </h4>
                                                            <p>{{$fix_service->duration}}</p>
                                                            </label>
                                                        </div>
                                                        <div>
                                                            @if($fix_service->price_type=='f')
                                                            <!-- <p>Price</p> -->
                                                            <p>€{{$fix_service->price}}</p>
                                                            @else
                                                            <!-- <h4>Starting from</h4> -->
                                                            <p>Starting from €{{$fix_service->price}}</p>
                                                            @endif
                                                            <!-- <p>Starting from €{{$fix_service->price}}</p> -->

                                                            @if($fix_service->is_sub_service=='0')
                                                            <div class="addqty" id="qty_sec_{{$fix_service->id}}">
                                                                
                                                               <div class="quantity" data-i="{{$fix_service->id}}">
                                                                  <span class="minus-btn" style="margin-right: 10px; display: inline-block;padding: 3px 7px;" type="button" name="button">
                                                                  <i class="fa fa-minus"></i>
                                                                  </span>  
                                                                  <div style="display: inline-block;">
                                                                    <span class="qty_spn">1</span>
                                                                    </div>
                                                                  <span class="plus-btn" style="margin-left: 10px; display: inline-block;padding: 3px 7px;" 
                                                                     type="button" name="button"><i class="fa fa-plus"></i>
                                                                  </span>
                                                               </div>
                                                            </div>
                                                         
                                                            <div class="clearfix"></div>

                                                         @endif
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="collapse{{$fi}}" class="accordion-collapse collapse @if($fi==1) show @endif" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    @if(count($services['fix']['sub_service'])>0)
                                                    @foreach($services['fix']['sub_service'] as $fx_sb_serv)

                                                    @if(isset($fx_sb_serv[$fix_service->id]) && count($fx_sb_serv[$fix_service->id])>0)
                                                    @foreach($fx_sb_serv[$fix_service->id] as $sb_serv)
                                                    
                                                    <div class="sub_accordian_box">
                                                        <div class="left_1">
                                                            <div>
                                                                <label class="serv_lbl">
                                                                <input type="checkbox" name="service_chk[]" value="{{$sb_serv->id}}" class="service_chk" data-p="{{$sb_serv->price}}" data-qty='0' id="service_chk_{{$sb_serv->id}}">
                                                                </label>
                                                                <label>
                                                                <h4>{{$sb_serv->service_name}}
                                                                    @if($sb_serv->additional_info!='')
                                                                <span class="tooltip_spn1"><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                                                <div class="tooltip">
                                                                    <span class="tooltiptext">{{$sb_serv->additional_info}}</span>
                                                                </div>
                                                                @endif
                                                                </h4>
                                                                <p class="mb-0">{{$sb_serv->duration}}</p>
                                                                </label>
                                                            </div>
                                                            <div class="middle_1">
                                                                <h4>€{{$sb_serv->price}}</h4>
                                                                @if($sb_serv->discount)
                                                                @if($sb_serv->discount_type=='f')
                                                                <p>Discount €{{$sb_serv->discount_amount}}</p>
                                                                @else
                                                                <p>Discount {{$sb_serv->discount_amount}}%</p>
                                                                @endif
                                                                @endif
                                                                <div class="addqty" id="qty_sec_{{$sb_serv->id}}">
                                                                
                                                               <div class="quantity" data-i="{{$sb_serv->id}}">
                                                                  <span class="minus-btn" style="margin-right: 10px; display: inline-block;padding: 3px 7px;" type="button" name="button">
                                                                  <i class="fa fa-minus"></i>
                                                                  </span>  
                                                                  <div style="display: inline-block;"><span  class="qty_spn">1</span></div>
                                                                  <span class="plus-btn" style="margin-left: 10px; display: inline-block;padding: 3px 7px;" 
                                                                     type="button" name="button"><i class="fa fa-plus"></i>
                                                                  </span>
                                                               </div>
                                                            </div>
                                                         
                                                            <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="right_1">
                                                            <button>Select</button>
                                                        </div> -->
                                                    </div>

                                                    <?php
                                                    /*foreach($services['fix']['sub_service'] as $fx_sb_serv){
                                                        if(isset($fx_sb_serv[$fix_service->id]) && count($fx_sb_serv[$fix_service->id])>0){
                                                            foreach($fx_sb_serv[$fix_service->id] as $sb_serv){
                                                                print_r($sb_serv->service_name);
                                                            }
                                                            echo 'aaaaaaaaaaaaaaa<br>';
                                                        }
                                                    }*/

                                                    ?>
                                                    @endforeach
                                                   
                                                    @endif

                                                    @endforeach

                                                   
                                                    @endif
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                        
                                    </div>
                                </div>
                                @if(count($temp_notes)>0)
                                    @foreach($temp_notes as $temp_note)
                                        @if($temp_note->location_type=='f')
                                <div class="pt-3 pb-3 border-top border-bottom">
                                    <h4 class="head">General Note</h4>
                                    {{$temp_note->note}}
                                </div>
                                        @endif
                                    @endforeach
                                @endif

                                @if(count($team_fix)>0)
                                <div class="pt-3 pb-3 border-top border-bottom">
                                    <h4 class="head">Team Member</h4>
                                    <ul class="team_member_ul">
                                        @foreach($team_fix as $team_f)
                                        <li>
                                            <span>
                                                @if($team_f['image']!='')
                                                <img src="{{asset('public/imgs/team/')}}/{{$team_f['image']}}">
                                                @else
                                                <img src="{{asset('public/images/default-user.png')}}">
                                                @endif
                                            </span>
                                            <p>{{$team_f['member']}}</p>
                                            @if(count($team_f['category'])>0)
                                                <div class="mb-2">
                                                @foreach($team_f['category'] as $tk=>$tv)
                                                    <i class="team_mem_c_s">{{$tv}}</i>
                                                @endforeach
                                                </div>
                                            @endif
                                            @if(count($team_f['service'])>0)
                                                <div class="mb-2">
                                                @foreach($team_f['service'] as $tk=>$tv)
                                                    <i class="team_mem_c_s">{{$tv}}</i>
                                                @endforeach
                                                </div>
                                            @endif
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                @if(count($temp_visuals_fix)>0)
                                <div class="visual_box pt-3 pb-3 border-top border-bottom">
                                    <h4 class="head">Visuals</h4>
                                    <div class="row">
                                        @foreach($temp_visuals_fix as $vis_f)
                                        @if($vis_f->visual!='')
                                        <div class="col-sm-4">
                                            <figure>
                                                <img src="{{$vis_f->visual}}" class="img-fluid">
                                            </figure>
                                        </div>
                                        @endif
                                        @endforeach
                                        
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        @endif    
                        @if($prof->desire_info=='1')
                        <div class="list_box"  id="des_l_sec" @if($t=='f') style="display:none" @endif>
                            <div class="list_img_container">
                                @if($prof->desire_pic=='')
                                    <img src="{{URL::asset('public/images/profile.png')}}">
                                @else    
                                    <img src="{{URL::asset('public/imgs/template/')}}/{{$prof->desire_pic}}">
                                @endif    
                                
                            </div>
                            <div class="list_right">
                                <div class="list_right_container">
                                    <div class="list_detail_container">
                                        <h4>{{ ($prof->desire_name!='')?$prof->desire_name:$prof->legal_name}}</h4>
                                        <p>{{$prof->desire_bio}}</p>

                                        @if(count($desire_locations)>0)
                                        <div class="d-flex flex-wrap">
                                        @foreach($desire_locations as $des_loc)
                                        
                                            <p class="d-flex align-items-center des_p_loc">
                                                <span>{{$des_loc->desire_province}}</span>
                                            </p>
                                        
                                        @endforeach
                                        </div>
                                        @endif
                                    </div>
                                    <div class="list_rating_container">
                                        <div class="first">
                                            @if($prof->fixed_info=='1')
                                            <span class="lc_t_spn" onclick="show_location_type('f')">Fixed Location</span>
                                            @endif
                                            <span class="myactive">Desired Location</span>
                                        </div>
                                        <div class="second">
                                            <span class="myactive">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </span>
                                            <span class="myactive">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </span>
                                            <span class="myactive">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </span>
                                            <span>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </span>
                                            <span>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                        <div class="third">
                                            <span>(5)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordian_box">
                                    <div class="pt-3 pb-3 border-top border-bottom">
                                        <p class="m-0">
                                            <strong>Services for:</strong> 
                                            @if(count($temp_notes)>0)
                                            @foreach($temp_notes as $temp_note)
                                                @if($temp_note->location_type=='d')

                                                    @if($temp_note->all_gender=='1') | All Genders @endif @if($temp_note->men=='1') | Male @endif @if($temp_note->women=='1') | Female @endif @if($temp_note->kids=='1') | Kids @endif

                                                @endif

                                            @endforeach
                                            @endif
                                        </p>
                                    </div>
                                    <div class="accordion" id="accordionExample">
                                        @if(count($services['des'])>0)
                                        @php 
                                        $fi=0;
                                        @endphp
                                        @foreach($services['des']['service'] as $fix_service)
                                        @php 
                                        $fi++;
                                        @endphp
                                        <?php
                                        
                                        ?>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$fi}}" aria-expanded="true" aria-controls="collapse{{$fi}}">
                                                    <div class="myaccordian_header_box">
                                                        <div>
                                                            <label class="serv_lbl" onclick="javascript:void(0)">
                                                                @if($fix_service->is_sub_service=='0')
                                                                <input type="checkbox" name="service_chk[]" value="{{$fix_service->id}}" class="service_chk" data-p="{{$fix_service->price}}" data-qty='0' id="service_chk_{{$fix_service->id}}">
                                                                @else
                                                                <i class="fa fa-angle-down"></i>
                                                                @endif
                                                            </label>
                                                            <label>
                                                            <h4>{{$fix_service->service_name}}
                                                                @if($fix_service->additional_info!='')
                                                                <span class="tooltip_spn1"><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                                                <div class="tooltip">
                                                                    <span class="tooltiptext">{{$fix_service->additional_info}}</span>
                                                                </div>
                                                                @endif
                                                            </h4>
                                                            <p>{{$fix_service->duration}}</p>
                                                            </label>
                                                        </div>
                                                        <div>
                                                            @if($fix_service->price_type=='f')
                                                            <p>€{{$fix_service->price}}</p>
                                                            @else
                                                            <p>Starting from €{{$fix_service->price}}</p>
                                                            @endif
                                                            <!-- <p>€{{$fix_service->price}}</p> -->

                                                            @if($fix_service->is_sub_service=='0')
                                                            <div class="addqty"  id="qty_sec_{{$fix_service->id}}">
                                                                
                                                               <div class="quantity" data-i="{{$fix_service->id}}">
                                                                  <span class="minus-btn" style="margin-right: 10px; display: inline-block;padding: 3px 7px;" type="button" name="button">
                                                                  <i class="fa fa-minus"></i>
                                                                  </span>  
                                                                  <div style="display: inline-block;"><span  class="qty_spn">1</span></div>
                                                                  <span class="plus-btn" style="margin-left: 10px; display: inline-block;padding: 3px 7px;" 
                                                                     type="button" name="button"><i class="fa fa-plus"></i>
                                                                  </span>
                                                               </div>
                                                            </div>
                                                         
                                                            <div class="clearfix"></div>

                                                         @endif
                                                        </div>
                                                    </div>
                                                </button>
                                            </h2>
                                            <div id="collapse{{$fi}}" class="accordion-collapse collapse @if($fi==1) show @endif" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    @if(count($services['des']['sub_service'])>0)
                                                    @foreach($services['des']['sub_service'] as $fx_sb_serv)

                                                    @if(isset($fx_sb_serv[$fix_service->id]) && count($fx_sb_serv[$fix_service->id])>0)
                                                    @foreach($fx_sb_serv[$fix_service->id] as $sb_serv)
                                                    
                                                    <div class="sub_accordian_box">
                                                        <div class="left_1">
                                                            <div>
                                                                <label class="serv_lbl">
                                                                <input type="checkbox" name="service_chk[]" value="{{$sb_serv->id}}" class="service_chk" data-p="{{$sb_serv->price}}" data-qty='0' id="service_chk_{{$sb_serv->id}}">
                                                                </label>
                                                                <label>
                                                                <h4>{{$sb_serv->service_name}}
                                                                    @if($sb_serv->additional_info!='')
                                                                <span class="tooltip_spn1"><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                                                <div class="tooltip">
                                                                    <span class="tooltiptext">{{$sb_serv->additional_info}}</span>
                                                                </div>
                                                                @endif
                                                                </h4>
                                                                <p>{{$sb_serv->duration}}</p>
                                                                </label>
                                                            </div>
                                                            <div class="middle_1">
                                                                <h4>€{{$sb_serv->price}}</h4>
                                                                @if($sb_serv->discount)
                                                                @if($sb_serv->discount_type=='f')
                                                                <p>Discount €{{$sb_serv->discount_amount}}</p>
                                                                @else
                                                                <p>Discount {{$sb_serv->discount_amount}}%</p>
                                                                @endif
                                                                @endif
                                                            </div>
                                                            <div class="addqty "  id="qty_sec_{{$sb_serv->id}}">
                                                               <div class="quantity" data-i="{{$sb_serv->id}}">
                                                                  <span class="minus-btn" style="margin-right: 10px; display: inline-block;padding: 3px 7px;" type="button" name="button">
                                                                    <i class="fa fa-minus"></i>
                                                                  </span>  
                                                                  <div style="display: inline-block;">
                                                                    <span class="qty_spn">1</span>
                                                                    </div>
                                                                  <span class="plus-btn" style="margin-left: 10px; display: inline-block;padding: 3px 7px;" 
                                                                     type="button" name="button"><i class="fa fa-plus"></i>
                                                                  </span>
                                                               </div>
                                                            
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        
                                                    </div>

                                                    @endforeach
                                                   
                                                    @endif

                                                    @endforeach

                                                   
                                                    @endif
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endif
                                        
                                    </div>
                                </div>
                                @if(count($temp_notes)>0)
                                    @foreach($temp_notes as $temp_note)
                                        @if($temp_note->location_type=='d')
                                <div class="pt-3 pb-3 border-top border-bottom">
                                    <h4 class="head">General Note</h4>
                                    {{$temp_note->note}}
                                </div>
                                        @endif
                                    @endforeach
                                @endif

                                @if(count($team_des)>0)
                                <div class="pt-3 pb-3 border-top border-bottom">
                                    <h4 class="head">Team Member</h4>
                                    <ul class="team_member_ul">
                                        @foreach($team_des as $team_f)
                                        <li>
                                            <span>
                                                @if($team_f['image']!='')
                                                <img src="{{asset('public/imgs/team/')}}/{{$team_f['image']}}">
                                                @else
                                                <img src="{{asset('public/images/default-user.png')}}">
                                                @endif
                                            </span>
                                            <p>{{$team_f['member']}}</p>
                                            @if(count($team_f['category'])>0)
                                                @foreach($team_f['category'] as $tk=>$tv)
                                                    <i class="team_mem_c_s">{{$tv}}</i>
                                                @endforeach
                                            @endif
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                @if(count($temp_visuals_des)>0)
                                <div class="visual_box pt-3 pb-3 border-top border-bottom">
                                    <h4 class="head">Visuals</h4>
                                    <div class="row">
                                        @foreach($temp_visuals_des as $vis_f)
                                        @if($vis_f->visual!='')
                                        <div class="col-sm-4">
                                            <figure>
                                                <img src="{{$vis_f->visual}}" class="img-fluid">
                                            </figure>
                                        </div>
                                        @endif
                                        @endforeach
                                        
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        @endif    
                    </div>
                </div>
            </div>
        </section>

        <div class="fixed-bottom book_toast d-none">
            <div class="text-left">
                <p class="title text-light m-0"><span id="book_value">0</span></p>
            </div>
            <div class="text-right">
                <button type="button" class="btn btn-warning fw-bold" style="font-size:18px;width:130px;">Book</button>
            </div>
        </div>

        @include('salon/footer')
        <script type="text/javascript">
        function show_location_type(t){
            if(t=='f'){
                $('#fix_l_sec').show();
                $('#des_l_sec').hide();
            }
            else{
                $('#fix_l_sec').hide();
                $('#des_l_sec').show();
            }
        }

        $(document).ready(function(){
            $('.service_chk').on('change',function(){
                var i = $(this).val();
                if($(this).prop('checked')===true){
                    
                    var q = $(this).attr('data-qty');
                    q = parseInt(q)+1;
                    $(this).attr('data-qty',q);
                    $('#qty_sec_'+i).find('.quantity').show();
                    $('#qty_sec_'+i).find('.quantity').find('.qty_spn').html(q);
                }
                else{
                    $(this).attr('data-qty',0);
                    $('#qty_sec_'+i).find('.quantity').hide();
                    $('#qty_sec_'+i).find('.quantity').find('.qty_spn').html(0);
                }

                show_hide_toast();
            });

            $('.minus-btn').on('click',function(){
                var qsec = $(this).parent('.quantity');
                var i = qsec.attr('data-i');
                var q = $('#service_chk_'+i).attr('data-qty');
                q = parseInt(q);
                if(q>0){
                    q = parseInt(q)-1;
                    if(q>0){
                        $('#service_chk_'+i).attr('data-qty',q);
                        $('#qty_sec_'+i).find('.quantity').show();
                        qsec.find('.qty_spn').html(q);
                    }
                    else{
                        $('#service_chk_'+i).attr('data-qty',0).prop('checked',false);
                        // $('#service_chk_'+i).prop('checked',false);
                        $('#qty_sec_'+i).find('.quantity').hide();
                        qsec.find('.qty_spn').html(0);
                    }
                }
                else{
                    $('#service_chk_'+i).attr('data-qty',0);
                    $('#service_chk_'+i).prop('checked',false);
                    $('#qty_sec_'+i).find('.quantity').hide();
                    qsec.find('.qty_spn').html(0);
                }

                show_hide_toast();
            });

            $('.plus-btn').on('click',function(){
                var qsec = $(this).parent('.quantity');
                // console.log(qsec);
                var i = qsec.attr('data-i');
                var q = $('#service_chk_'+i).attr('data-qty');
                q = parseInt(q);
                // console.log(q);
                if(q<5){
                    q = parseInt(q)+1;
                    if(q>0){
                        $('#service_chk_'+i).attr('data-qty',q);
                        $('#qty_sec_'+i).find('.quantity').show();
                        qsec.find('.qty_spn').html(q);
                    }
                    else{
                        $('#service_chk_'+i).attr('data-qty',0).prop('checked',false);
                        $('#qty_sec_'+i).find('.quantity').hide();
                        qsec.find('.qty_spn').html(0);
                    }
                }
                else{
                    $('#service_chk_'+i).attr('data-qty',5);
                    $('#qty_sec_'+i).find('.quantity').show();
                    qsec.find('.qty_spn').html(5);
                }

                show_hide_toast();
            });
        });

        function show_hide_toast(){
            $('.book_toast').addClass('d-none');
            $('#book_value').html('');
            var ttl=0;
            $('.service_chk').each(function(){
                if($(this).prop('checked')===true){
                    var spr = parseInt($(this).attr('data-p'));
                    var sqt = parseInt($(this).attr('data-qty'));
                    ttl = ttl + (parseInt(sqt) * parseInt(spr));
                }
            });

            if(ttl>0){
                $('.book_toast').removeClass('d-none');
                $('#book_value').html(ttl +' EUR');
            }
        }
        </script>
        </body>
</html>