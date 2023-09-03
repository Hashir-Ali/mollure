@extends('salon.app')

@section('nav_language')
    <button class="btn dropdown-toggle d-flex align-items-center" type="button" id="dropdownMenuButton1"
            data-bs-toggle="dropdown" aria-expanded="false">NL</button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li class="p-2">
            <a href="https://cynnaenterprises.com/mollure/company/register">EN</a>
        </li>
    </ul>
@endsection

@section('content')
    <div class="container">
        <div class="block-heading text-white rounded">{{$lang_kwords['user_info']['dutch']}}</div>
        <div class="container signupGroup d-flex justify-content-center">
            <div class="signup-card p-4 grid gap-3 justify-content-center align-items-center">
                <div class="">
                    <h4>Sign Up</h4>
                    <p>By hitting Register You are Accepting our <span class="text-decoration-underline tnc"><a href="{{route('term_condition')}}" target="_blank">Terms & conditions</a></span></p>
                </div>
                @if($errors->any())
                    <div class="text-center" id="msg-alert1">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>
                        @endforeach
                    </div>
                @endif

                <form action="" id="frm1" method="post" enctype="multipart/form-data" class="d-grid gap-1 interCardGroupLogin">
                    <input type="hidden" name="_token" value="{{ Session::token() }}" />
                    <input type="hidden" name="act" value="profile">
                    <input type="hidden" name="preferred_lang" value="nl">
                    <input type="hidden" name="user_type" value="company">
                    <div class="">
                        <label for="legal_name" class="form-label position-relative">{{$lang_kwords['legal-name']['dutch']}}
                            <i class="ri-information-fill tooltip_spn1 tooltip_spn_1"><img src="{{ url("public/images/warning.svg") }}" /></i>
                            <div class="tooltip">
                                <span class="tooltiptext">
                                    <small>{{$lang_kwords['name-with-a-legal-form']['dutch']}}</small>
                                </span>
                            </div>
                        </label>
                        <input type="text" name="legal_name" placeholder="Enter {{$lang_kwords['name-with-a-legal-form']['dutch']}}" class="form-control" id="legal_name">
                    </div>
                    <div class="">
                        <label for="coc" class="form-label">{{$lang_kwords['coc-number']['dutch']}}</label>
                        <input type="text" placeholder="Enter {{$lang_kwords['coc-number']['dutch']}}" class="form-control"  name="coc" id="coc" value="{{ old('coc') }}">
                    </div>
                    <div class="">
                        <label for="vat" class="form-label">{{$lang_kwords['vat-number']['dutch']}}</label>
                        <input type="text" placeholder="Enter {{$lang_kwords['vat-number']['dutch']}}" class="form-control" name="vat" id="vat" value="{{ old('vat') }}">
                    </div>
                    <div class="">
                        <label for="address" class="form-label">{{$lang_kwords['address']['dutch']}}</label>
                        <div class="row px-1">
                            <div class="col-6 px-1 mb-2">
                                <input type="text" placeholder="{{$lang_kwords['street']['dutch']}}" class="form-control" name="street" id="street" value="{{ old('street') }}">
                            </div>
                            <div class="col-6 px-1">
                                <input type="text" placeholder="{{$lang_kwords['number']['dutch']}}" class="form-control" name="number" id="number" value="{{ old('number') }}">
                            </div>
                            <div class="col-6 px-1 mb-2">
                                <input type="text" placeholder="{{$lang_kwords['postal-code']['dutch']}}" class="form-control" name="postal" id="postal" value="{{ old('postal') }}">
                            </div>
                            <div class="col-6 px-1">
                                <label class="custom-select custom-select-address">
                                    <select class="mollure-select-address" name="province" id="province">
                                        <option value="">{{$lang_kwords['select']['dutch']}} {{$lang_kwords['province']['dutch']}}</option>
                                        @foreach($province as $k=>$v)
                                            <option value="{{$v->name}}" data-i="{{$v->id}}">{{$v->name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="err_spn province_err">Please {{$lang_kwords['select']['dutch']}} {{$lang_kwords['province']['dutch']}}</span>
                                </label>
                            </div>
                            <div class="col px-1">
                                <label class="custom-select custom-select-address">
                                    <select class="mollure-select-address" name="municipality" id="municipality">
                                        <option value="" data-i="">{{$lang_kwords['select']['dutch']}} {{$lang_kwords['municipality']['dutch']}} </option>
                                    </select>
                                    <span class="err_spn municipality_err">Please {{$lang_kwords['select']['dutch']}} {{$lang_kwords['municipality']['dutch']}}</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- Prof chamber -->
                    <div class="">
                        <label for="firstname" class="form-label">{{$lang_kwords['contact-person']['dutch']}}</label>
                        <div class="row px-1">
                            <div class="col px-1">
                                <input type="text" placeholder="{{$lang_kwords['first-name']['dutch']}}" class="form-control" name="contact_person_first_name" id="contact_person_first_name" value="{{ old('contact_person_first_name') }}">
                            </div>
                            <div class="col px-1">
                                <input type="text" placeholder="{{$lang_kwords['last-name']['dutch']}}" class="form-control" name="contact_person_last_name" id="contact_person_last_name" value="{{ old('contact_person_last_name') }}">
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <label for="contactnumber" class="form-label">{{$lang_kwords['contact-number']['dutch']}}</label>
                        <input type="text" placeholder="Enter Contact Number" class="form-control"  name="contact_number" id="contact_number" value="{{ old('contact_number') }}">
                    </div>
                    <div class="">
                        <div>
                            <label class="form-label">{{$lang_kwords['gender']['dutch']}}</label>
                        </div>
                        <label class="custom-select">
                            <select name="gender" class="mollure-select">
                                <option value="">{{$lang_kwords['select']['dutch']}}  {{$lang_kwords['gender']['dutch']}}</option>
                                <option value="male"> {{$lang_kwords['male']['dutch']}}</option>
                                <option value="female">{{$lang_kwords['female']['dutch']}} </option>
                                <option value="neutral">{{$lang_kwords['gender-neutral']['dutch']}} </option>
                                <option value="not_prefer">{{$lang_kwords['i-prefer-not-to-answer']['dutch']}}</option>
                            </select>
                            <span class="err_spn gender_err">Please {{$lang_kwords['select']['dutch']}} {{$lang_kwords['gender']['dutch']}}</span>
                        </label>
                    </div>
                    <div class="">
                        <label for="email" class="form-label">{{$lang_kwords['email']['dutch']}}</label>
                        <input type="email" placeholder="Enter Email" class="form-control" name="email" id="email" value="{{ old('email') }}">
                        <span class="err_spn email_err">{{$lang_kwords['please-fill-detail']['dutch']}}</span>
                    </div>
                    <div class="">
                        <label for="password" class="form-label">{{$lang_kwords['passwords']['dutch']}}</label>
                        <div class="input-container">
                            <input type="password" placeholder="Enter Password" class="form-control"  name="password" id="password"/>
                            <img src="{{ url("public/images/Hide.svg") }}" alt="Show/Hide Password" class="eye-icon" onclick="togglePasswordVisibility()">
                            <span class="err_spn password_err">{{$lang_kwords['please-fill-detail']['dutch']}}</span>
                        </div>
                    </div>
                    <div class="">
                        <label for="password" class="form-label">{{$lang_kwords['repeat-password']['dutch']}}</label>
                        <div class="input-container">
                            <input type="password" placeholder="Confirm Password" class="form-control" name="conf_password" id="conf_password">
                            <img src="{{ url("public/images/Hide.svg") }}" alt="Show/Hide Password" class="eye-icon" onclick="toggleConfirmPasswordVisibility()">
                        </div>
                    </div>

                    <div class="d-flex service_for_checkbox_container justify-content-between align-content-center mb-4 mt-2">
                        <div class="d-flex justify-content-between align-content-center gap-2">
                            <label class="custom_check form-check-label" for="term_condition">
                                <input class="me-3 serv_for_fx_inp" type="checkbox" value="1" id="term_condition" />&nbsp;<span class="checkmark"></span>
                            </label>
                            <p>Accept our <label form="term_condition" class="text-decoration-underline tnc"><a href="{{route('term_condition')}}" target="_blank">Terms & conditions</a></label></p>
                            <span class="err_spn term_condition_err">Please accept our conditions</span>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-1"  type="button" name="form_submit" id="form_submit" value="Submit" onclick="form_validate()">{{$lang_kwords['submit']['dutch']}}</button>
                </form>
                <div>
                    <p class="text-center notaMember mt-4 text-capitalize">Already have a member? <a class="mollure-text-color"
                                                                                                     href="{{ url("login") }}">Login</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> -->


                <div class="modal-body border-custom rounded p-4" style="max-height: 95vh;height: auto;">
                    <div class="text-center">
                        @if(isset($contents['register_popup']))
                            <img src="{{asset('public')}}{{$contents['register_popup']['image']}}" alt="logo" class="mt-3" style="width:65px">
                    @endif
                    <!-- <img src="{{ URL::asset('public/images/logo-lg.png')}}" alt="logo" class="mt-3" style="width:65px"/> -->
                    @if(isset($contents['register_popup']))
                        {!! $contents['register_popup']['content'] !!}
                    @endif
                    <!-- <h3 class="text-custom-primary my-4">Thank you <br> for registering with Mollure!</h3>
        	<p class="mt-4" style="font-size:24px;">Please check your email box to verify your Email.</p>
        	<p class="mt-4" style="font-size:16px;">If email not recieved, please ensure Junk/Spam box.</p>
        	<p class="mt-4" style="font-size:20px;"><a href="{{config('app.url')}}">Bakc To Home</a></p> -->
                    </div>
                </div>
                <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Understood</button>
                </div> -->
            </div>
        </div>
    </div>

    <form id="pic-form" enctype="multipart/form-data" class="d-none" >
        <input type="file" accept="image/png, image/jpeg,image/jpg, application/pdf" name="doc" id="registration_doc" style="visibility:hidden;height:0px;" />
        <input type="hidden" name="_token" value="{{ Session::token() }}" />
        <input type="hidden" name="type" value="registration_doc" />
    </form>

@endsection

@section('third_party_scripts')

    <script type="text/javascript">

        $(document).ready(function(){
            $('input[type="text"],select').on('change keypress',function(){
                var nm = $(this).attr('name');
                $('.'+nm+'_err').hide();
            })


            /*$("#registration_doc").on('change',function() {
              var fcnt = ($(this)[0].files.length);

              if(fcnt>5){
                  alert("You can select only 5 images");
                  $("#registration_doc").val('');
                  return false;
              }

              if(fcnt>0){

                  var rtn=ValidateSize(this,'registration_doc', fcnt);
                   if(rtn!=0){
                       $.each(this.files,function(k,v){
                        readURL(v,'registration_doc');
                    })
                    $('#file-chosen').html(fcnt+' files selected');
                 }

              }
              else{
                $('#file-chosen').html('Upload Files');
              }

              return;
            });*/

            $('#municipality').on('change',function(){
                let i = $(this).find('option:selected').attr('data-i')
                $('#municipality_id').val(i);

            });
            $('#province').on('change',function(){
                let i = $(this).find('option:selected').attr('data-i')
                $('#province_id').val(i);
                get_municipality(i);
            });


        });

        var tr=0;
        function get_municipality(i){

            $('#municipality').val('');
            $('#municipality_id').val('');
            $('#municipality').find('option.pv').remove();

            if(!i){
                return false;
            }

            tr++;

            $('#prov_spn').show();

            $.ajax({
                url:'{{route("municipality_list")}}',
                type:'post',
                data:{'prov':i,'_token' : '{{ csrf_token() }}',},
                dataType:'json',
                success:function(r){
                    $('#prov_spn').hide();
                    if(r.status=='SUCCESS'){
                        var prov = r.data;
                        var str='';
                        $.each(prov,function(k,v){
                            str+='<option class="pv" data-i="'+v.i+'" value="'+v.name+'">'+v.name+'</option>';
                        });

                        $('#municipality').append(str);
                    }
                },
                error:function(e){
                    $('#prov_spn').hide();
                    if(tr<3){
                        get_municipality(i);
                    }
                }
            });
        }



        function open_pdf(pdf){
            window.open(pdf);
        }

        function remove_reg_doc(el){
            // console.log(el);
            el.closest('.reg_doc_sec1').remove();
        }

        function form_validate(){
            var legal_name = $('#legal_name').val();
            var coc = $('#coc').val();
            var vat = $('#vat').val();
            var street = $('#street').val();
            var postal = $('#postal').val();
            var municipality = $('#municipality').val();
            var province = $('#province').val();
            // var registration_doc = $('#registration_doc').val();
            var contact_person_first_name = $('#contact_person_first_name').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var conf_password	 = $('#conf_password	').val();


            if($.trim(legal_name)==''){
                $('#legal_name').focus();
                $('.legal_name_err').show();
                return false;
            }
            // console.log('111');
            if($.trim(coc)==''){
                $('#coc').focus();
                $('.coc_err').show();
                return false;
            }
            // console.log('222');
            if($.trim(vat)==''){
                $('#vat').focus();
                $('.vat_err').show();
                return false;
            }
            // console.log('3333');
            if($.trim(street)==''){
                $('#street').focus();
                $('.street_err').show();
                return false;
            }
            // console.log('444');
            if($.trim(postal)==''){
                $('#postal').focus();
                $('.postal_err').show();
                return false;
            }
            // console.log('555');
            if($.trim(municipality)==''){
                $('#municipality').focus();
                $('.municipality_err').show();
                return false;
            }
            // console.log('666');
            if($.trim(province)==''){
                $('#province').focus();
                $('.province_err').show();
                return false;
            }


            if($.trim(contact_person_first_name)==''){
                $('#contact_person_first_name').focus();
                $('.contact_person_first_name_err').show();
                return false;
            }
            // console.log('999');
            if($.trim(email)==''){
                $('#email').focus();
                $('.email_err').html('{{$lang_kwords["please-fill-detail"]["dutch"]}}').show();
                return false;
            }
            // console.log('aaaa');
            if($.trim(password)==''){
                $('#password').focus();
                $('.password_err').show();
                return false;
            }
            // console.log('bbbb');
            if($.trim(conf_password)==''){
                $('#conf_password').focus();
                $('.conf_password_err').show();
                return false;
            }
            // console.log('cccc');
            if(password!=conf_password){
                $('#conf_password').focus();
                $('.conf_password_err').show();
                return false;
            }

            if($('#term_condition').prop('checked')==false){
                $('#term_condition').focus();
                $('.term_condition_err').show();
                return false;
            }

            var frm=new FormData($('#frm1')[0]);
            $('#form_submit').html('Wait..!').attr('disabled',true);
            // return;
            $.ajax({
                url:"{{route('profile_save')}}",
                type:'post',
                data:frm,
                contentType: false,
                processData:false,
                success: function(r)
                {
                    $('#form_submit').html('Save').attr('disabled',false);
                    if(r=='SUC')
                    {
                        $('#frm1')[0].reset();
                        $('#modal1').modal('show');
                    }
                    if(r=='email')
                    {
                        $('.email_err').html('Email already exist.').show();
                        $('html, body').animate({
                            scrollTop: $('.email_err').offset().top-100
                        }, 500);
                    }
                }
            })

            // console.log('dddd');
            //$('#frm1').submit();
            // console.log('eeee');
        }
    </script>
@endsection





