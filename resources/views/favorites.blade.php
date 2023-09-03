
    @include('_header1')
    

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
            
.bottom_btn{position: absolute;bottom: 8px;width: 98%;text-align: center;}
.review_p{margin-bottom: 60px;text-align: center;}

 .add-on{    
    /*margin-top: -37px;*/
    padding: 0px;
    width: 0px

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

/* Niraj */
.custom_sel ul li {
  padding: 7px 2px !important;
}
.checkmark {
  border-radius: 3px;
  margin-top: 2px;  
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

</style>
        
    
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        
  

        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="pg_headh">Favorites</h2>
                        <div class="pg_headhr"></div>
                    </div>
                </div>


                @if(count($professionals)>0)
                <div class="row">

                @foreach($professionals as $prof)
                <!-- {{$prof->desire_info}} -->
                @if($prof->fixed_info=='1' || $prof->desire_info=='1')
                    <div class="col-md-4 col-sm-6 col-12 mb-4">
                        @if($prof->fixed_info=='1')
                        <div id="fix_l_sec_{{$prof->id}}" class="shadow p-2" style="height: 100%;position: relative;border-radius: 12px;">
                            <div class="fav_sec">
                                <div><img src="{{URL::asset('public/icons/favorite_a.png')}}"></div>
                            </div>
                            <div class=" list_box">
                                <div class="list_img_container">
                                    @if($prof->fixed_pic=='')
                                        <img src="{{URL::asset('public/images/profile.png')}}">
                                    @else    
                                        <img src="{{URL::asset('public/imgs/template/')}}/{{$prof->fixed_pic}}">
                                    @endif    
                                </div>
                            </div>
                            <div class="list_detail_container text-center cursor-pointer" onclick="prof_detail('{{ md5($prof->id) }}','{{$prof->legal_name}}','f')">
                                <p class="list_detail_name">Lorem Ipsum | Lorem | Lorem Ipsum</p>
                                <!-- {{ ($prof->fixed_name!='')?$prof->fixed_name:$prof->legal_name}} -->
                                <p class="list_detail_bio">{{$prof->fixed_bio}}</p>
                            </div>
                            <div class="second text-center rating_sec">
                                <span class="myactive">
                                    <!-- <i class="fa fa-star" aria-hidden="true"></i> -->
                                    <img src="{{URL::asset('public/icons/rating_ic.png')}}">
                                </span>
                                <span class="myactive">
                                    <!-- <i class="fa fa-star" aria-hidden="true"></i> -->
                                    <img src="{{URL::asset('public/icons/rating_ic.png')}}">
                                </span>
                                <span class="myactive">
                                    <!-- <i class="fa fa-star" aria-hidden="true"></i> -->
                                    <img src="{{URL::asset('public/icons/rating_ic.png')}}">
                                </span>
                                <span>
                                    <!-- <i class="fa fa-star" aria-hidden="true"></i> -->
                                    <img src="{{URL::asset('public/icons/rating_ic.png')}}">
                                </span>
                                <span>
                                    <!-- <i class="fa fa-star" aria-hidden="true"></i> -->
                                    <img src="{{URL::asset('public/icons/rating_ic.png')}}">
                                </span>
                            </div>
                            <p class="review_p">100 Reviews</p>

                            <div class="bottom_btn">
                                <table class="@if($prof->desire_info=='1') lc_t_tbl @else lc_t_tbl1 @endif ">
                                    <tr>
                                        <td class="@if($prof->desire_info=='1') border-radius-left @else border-radius @endif ">
                                            <span class="lc_t_spn myactive btn " onclick="show_location_type('f','{{$prof->id}}')">Fixed Location</span>
                                        </td>
                                        @if($prof->desire_info=='1')
                                        <td class="border-radius-right">
                                            <span class="lc_t_spn  btn" onclick="show_location_type('d','{{$prof->id}}')">Desired Location</span>
                                        </td>
                                        @endif
                                    </tr>
                                </table>
                                <!-- <span class="lc_t_spn myactive btn border">Fixed Location</span>
                                @if($prof->desire_info=='1')
                                <span class="lc_t_spn  btn border" onclick="show_location_type('d','{{$prof->id}}')">Desired Location</span>
                                @endif -->
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
                        @endif 
                        @if($prof->desire_info=='1')
                        <div id="des_l_sec_{{$prof->id}}" class="shadow rounded p-2" style="height: 100%;position: relative; @if($prof->fixed_info=='1')display:none @endif">
                            <div class="fav_sec">
                                <div><img src="{{URL::asset('public/icons/favorite.png')}}"></div>
                            </div>
                            <div class=" list_box">
                                <div class="list_img_container">
                                    @if($prof->desire_pic=='')
                                        <img src="{{URL::asset('public/images/profile.png')}}">
                                    @else    
                                        <img src="{{URL::asset('public/imgs/template/')}}/{{$prof->desire_pic}}">
                                    @endif    
                                </div>
                            </div>
                            <div class="list_detail_container text-center cursor-pointer" onclick="prof_detail('{{ md5($prof->id) }}','{{$prof->legal_name}}','d')">
                                <p class="list_detail_name">{{ ($prof->desire_name!='')?$prof->desire_name:$prof->legal_name}}</p>
                                <p class="list_detail_bio">{{$prof->desire_bio}}</p>
                            </div>
                            <div class="second text-center rating_sec">
                                <span class="myactive">
                                    <!-- <i class="fa fa-star" aria-hidden="true"></i> -->
                                    <img src="{{URL::asset('public/icons/rating_ic.png')}}">
                                </span>
                                <span class="myactive">
                                    <!-- <i class="fa fa-star" aria-hidden="true"></i> -->
                                    <img src="{{URL::asset('public/icons/rating_ic.png')}}">
                                </span>
                                <span class="myactive">
                                    <!-- <i class="fa fa-star" aria-hidden="true"></i> -->
                                    <img src="{{URL::asset('public/icons/rating_ic.png')}}">
                                </span>
                                <span>
                                    <!-- <i class="fa fa-star" aria-hidden="true"></i> -->
                                    <img src="{{URL::asset('public/icons/rating_ic.png')}}">
                                </span>
                                <span>
                                    <!-- <i class="fa fa-star" aria-hidden="true"></i> -->
                                    <img src="{{URL::asset('public/icons/rating_ic.png')}}">
                                </span>
                            </div>
                            <p class="review_p">100 Reviews</p>

                            <div class="bottom_btn">
                                <table class="@if($prof->fixed_info=='1') lc_t_tbl @else lc_t_tbl1 @endif ">
                                    <tr>
                                        @if($prof->fixed_info=='1')
                                        <td class="border-radius-left">
                                            <span class="lc_t_spn btn "  onclick="show_location_type('f','{{$prof->id}}')">Fixed Location</span>
                                        </td>
                                        @endif
                                        
                                        <td class="@if($prof->fixed_info=='1') border-radius-right @else border-radius @endif ">
                                            <span class="lc_t_spn myactive btn" onclick="show_location_type('d','{{$prof->id}}')">Desired Location</span>
                                        </td>
                                        
                                    </tr>
                                </table>
                                <!-- @if($prof->fixed_info=='1')
                                <span class="lc_t_spn btn border" onclick="show_location_type('f','{{$prof->id}}')">Fixed Location</span>
                                @endif
                                <span class="lc_t_spn myactive btn border">Desired Location</span> -->
                            </div>
                        </div>
                        @endif  
                    </div>
                @endif    


                
                @endforeach
                <!-- foreach($professionals as $prof) -->
                </div>
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

  
    </body>
</html>