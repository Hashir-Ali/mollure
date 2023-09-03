
    @include('_header')

    <style>
            *{
                font-family: myFirstFont1;
            }
            .filter_button_box button.active{background-color: #0d9da3;}
            .lc_t_spn{cursor: pointer;}
            .cur_point{cursor: pointer;}
            .form_box .row>div select+i {
    position: absolute;
    left: 19px;
    top: 10px;
    z-index: 2;
    font-size: 18px;
    color: gray;
}
.form_box select {
    border: 1px solid #333;
    position: relative;
    padding-left: 30px;
}
.datepicker{width: 250px;max-width: 100%}
#ui-id-1{padding:0px;list-style: none;    width: fit-content!important;    background: #fff;}
#ui-id-1 .ui-menu-item{padding: 3px 20px;border-bottom: 1px solid #02897c;cursor: pointer;background-color: #0ea2a2;color: #fff}
        </style>
        <link href="{{ URL::asset('public/admin/js/bootstrap-datepicker/css/datepicker.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        
        <section class="top_form_section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 col-sm-10 offset-0 offset-md-2 offset-sm-1">
                        <div class="form_box">
                            <form action="" method="get">
                                <input type="hidden" name="a" value="search">
                                <input type="hidden" id="lt" name="lt" value="{{$lt}}">
                                <input type="hidden"  name="_t" value="{{ Session::token() }}" >
                                <div class="row">
                                    <div class="col-sm-6">
                                        <button type="button" class="frm_btn @if($lt=='f') myactive @endif" data-l="f">
                                            <i class="fa fa-location-arrow" aria-hidden="true"></i> FIXED LOCATION</button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button type="button" class="frm_btn @if($lt=='d') myactive @endif" data-l="d">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i> DISIRED LOCATION</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control dpYears" placeholder="Date & Time" name="d" onkeypress="return false;" value="{{$d}}"/>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-sm-6">
                                        <select class="form-control" placeholder="Category" name="c">
                                            <option value="">Select Category</option>
                                            @foreach($categories as $category)
                                            @if(($category->id)*25 == $c)
                                            <option selected value="{{ ($category->id)*25 }}">{{$category->name}}</option>
                                            @else
                                            <option value="{{ ($category->id)*25 }}">{{$category->name}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                        <i class="fa fa-podcast" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" placeholder="Muncipality" name="m" value="{{$m}}"/>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" placeholder="Keywords" id="query" name="k"/>
                                        <i class="fa fa-keyboard-o" aria-hidden="true"></i>
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
                            <div>
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
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="filter_button_box">
                            <form id="frm_cate" action="{{route('prof_listing')}}">
                                <input type="hidden" name="c" value="">
                            </form>
                            <a href="{{route('prof_listing')}}"><button @if(count($sel_cate)=='0') class="active" @endif>All</button></a>
                            @foreach($categories as $category)

                                @if(in_array($category->id, $sel_cate))
                                    <input type="checkbox" class="cate_chk_inp" id="cate_chk_inp_{{($category->id)*25}}" value="{{($category->id)*25}}" style="display:none" checked="true">
                                    <!-- <a href="{{route('prof_listing')}}/?n={{urlencode($category->name)}}&c={{($category->id)*25}}"><button class="active">{{$category->name}}</button></a> -->
                                    <button class="cate_btn active" data-c="{{($category->id)*25}}">{{$category->name}}</button>
                                @else
                                    <input type="checkbox" class="cate_chk_inp" id="cate_chk_inp_{{($category->id)*25}}" value="{{($category->id)*25}}" style="display:none">
                                    <button class="cate_btn" data-c="{{($category->id)*25}}">{{$category->name}}</button>
                                @endif        
                            @endforeach
                            <!-- <button>Hair</button>
                            <button>Makeup</button>
                            <button>Lashes</button>
                            <button>Eye Brows</button>
                            <button>Nails</button>
                            <button>Face Treatment</button>
                            <button>Body Treatment</button>
                            <button>Hair Removal</button> -->
                        </div>
                    </div>
                </div>

                @if(count($professionals)>0)
                @foreach($professionals as $prof)
                <!-- {{$prof->desire_info}} -->
                @if($prof->fixed_info=='1' || $prof->desire_info=='1')
                <div class="row ">
                    <div class="col-sm-12">
                        @if($prof->fixed_info=='1')
                        <div class="list_box cur_point row" id="fix_l_sec_{{$prof->id}}">
                            <div class="list_img_container" onclick="prof_detail('{{ md5($prof->id) }}','{{$prof->legal_name}}','f')">
                                @if($prof->fixed_pic=='')
                                    <img src="{{URL::asset('public/images/profile.png')}}">
                                @else    
                                    <img src="{{URL::asset('public/imgs/template/')}}/{{$prof->fixed_pic}}">
                                @endif    
                            </div>
                            <div class="list_right_container row">
                                <div class="list_detail_container" onclick="prof_detail('{{ md5($prof->id) }}','{{$prof->legal_name}}','f')">
                                    <h4 >{{ ($prof->fixed_name!='')?$prof->fixed_name:$prof->legal_name}}</h4>
                                    <p>{{$prof->fixed_bio}}</p>
                                </div>
                                <div class="list_rating_container">
                                    <div class="first">
                                        <span class="lc_t_spn myactive">Fixed Location</span>
                                        @if($prof->desire_info=='1')
                                        <span class="lc_t_spn" onclick="show_location_type('d','{{$prof->id}}')">Desired Location</span>
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
                        </div>
                        @endif
                        @if($prof->desire_info=='1')
                        <div class="list_box cur_point row" id="des_l_sec_{{$prof->id}}" @if($prof->fixed_info=='1')style="display:none" @endif>
                            <div class="list_img_container" onclick="prof_detail('{{ md5($prof->id) }}','{{$prof->legal_name}}','d')">
                                @if($prof->desire_pic=='')
                                    <img src="{{URL::asset('public/images/profile.png')}}">
                                @else    
                                    <img src="{{URL::asset('public/imgs/template/')}}/{{$prof->desire_pic}}">
                                @endif    
                            </div>
                            <div class="list_right_container row">
                                <div class="list_detail_container" onclick="prof_detail('{{ md5($prof->id) }}','{{$prof->legal_name}}','d')">
                                    <h4>{{ ($prof->desire_name!='')?$prof->desire_name:$prof->legal_name }}</h4>
                                    <p>{{$prof->desire_bio}}</p>
                                </div>
                                <div class="list_rating_container">
                                    <div class="first">
                                        @if($prof->fixed_info=='1')
                                        <span class="lc_t_spn" onclick="show_location_type('f','{{$prof->id}}')">Fixed Location</span>
                                        @endif
                                        <span class="lc_t_spn myactive">Desired Location</span>
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
                        </div>
                        @endif
                    </div>
                </div>
                @endif
                @endforeach
                <!-- foreach($professionals as $prof) -->

                @elseif(count($professionals)<=0)

                <div class="row ">
                    <div class="col-sm-12">
                        <div class="list_box">
                            <p>No Salon Found</p>
                        </div>
                    </div>
                </div>

                    @if(count($ot_prof)>0)

                    @endif
                    <!-- if(count($ot_prof)>0) -->

                @endif
                <!-- if(count($professionals)>0) -->                
            </div>
        </section>

    @include('salon/footer')

    <script type="text/javascript" src="{{ URL::asset('public/admin/js/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
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

        $('.dpYears').datepicker({
           autoclose: true,
           dateFormat: 'dd-mm-yy',
           minDate: new Date(),
        });

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
      $(function() {
        $('#query').autocomplete({
        // minChars: 1,
        source: function(request, response) {
          $.ajax({
            type: 'get',
            dataType: 'json',
            url: "{{route('autocomplete')}}",
            data: {'q':request.term},
            success: function(data) {
              response( $.map( data, function( item ) {
                  var object = new Object();
                  object.label = item.label;
                  object.value = item.value;
                  object.type = item.type;
                  object.name = item.name;
                  object.i = item.i;
                  return object
              }));
              // response( $.map( data, function( item ) {
              //     return {
              //         label: item.title,
              //         value: item.title
              //     }
              // }));

            }
          });
        },
        select: function (event, ui) {
          $("#query").val(ui.item.label);
          // console.log(ui.item.label);
          prof_detail(ui.item.i,ui.item.name,ui.item.type);
          
         }
      });


        
      });
    </script>
    </body>
</html>