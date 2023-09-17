@extends('salon.app')

@section('nav_language')
	<button class="btn dropdown-toggle d-flex align-items-center" type="button" id="dropdownMenuButton1"
			data-bs-toggle="dropdown" aria-expanded="false">EN</button>
	<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
		<li class="p-2">
			<a href="https://cynnaenterprises.com/mollure/nl/login">NL</a>
		</li>
	</ul>
@endsection

@section('content')
	<div class="container loginGroup d-flex justify-content-center">
		<div class="login-card p-4 grid gap-3 justify-content-center align-items-center">
			<div class="frm1">
				<h4>Login</h4>
				<p>By hitting Login, Lorem Ipsum Sit Omet Domet</p>
			</div>

			<div class="frm2" style="display: none">
				<h4>Forgot Password</h4>
				<p>By entering email you can forgot your password</p>
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
			<div class="text-center" id="fp_er_sec" style="display:none">
				<div class="alert alert-danger" id="fp_er_p">
				</div>
			</div>

			<div class="frm1">
				<form  action="{{route('login_post')}}" id="frm1" method="post" class="d-grid gap-1 interCardGroupLogin">
					<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
					<div class="">
						<label for="email" class="form-label">{{$lang_kwords['email']['english']}}</label>
						<input type="email" placeholder="Enter Email" class="form-control" name="email" id="email" value="{{ old('email') }}" aria-describedby="emailHelp">
					</div>
					<div class="">
						<label for="password" class="form-label">{{$lang_kwords['passwords']['english']}}</label>
						<div class="input-container">
							<input type="password" placeholder="Password" class="form-control" name="password" id="password">
							<img src="{{ url("public/images/Hide.svg") }}" alt="Show/Hide Password" class="eye-icon" onclick="togglePasswordVisibility()">
						</div>
					</div>

					<div class="d-flex justify-content-between align-content-center mb-4 mt-2">
						<div class="d-flex justify-content-between align-content-center gap-2">
							<input type="checkbox" name="remember" id="remember">
							<span class="check"><label for="remmeber">Remember me</label></span>
						</div>
						<a class="forgetPass" href="Javascript:void(0)" onclick="show_forget_pass()">{{$lang_kwords['forgot-password']['english']}}</a>
					</div>
					<button type="button" class="btn btn-primary mt-1 frm1" name="form_submit" id="form_submit" value="Submit" onclick="form_validate()">Login</button>
				</form>
			</div>

			<div class="frm2" style="display: none">
				<form  action="" id="frm2" method="post" class="d-grid gap-1 interCardGroupLogin">
					<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
					<input type="hidden" name="act" value="c">
					<input type="hidden" name="lt" value="en">
					<div class="">
						<label for="email" class="form-label">{{$lang_kwords['email']['english']}}</label>
						<input type="email" placeholder="Enter Email" class="form-control" name="email1" id="email1" value="{{ old('email') }}" aria-describedby="emailHelp">
					</div>
					<div class="d-flex justify-content-between align-content-center mb-4 mt-2">
						<div class="d-flex justify-content-between align-content-center gap-2"></div>
						<a class="forgetPass" href="Javascript:void(0)" onclick="show_login()">{{$lang_kwords['go-to-login']['english']}}</a>
					</div>
					<button type="button" class="btn btn-primary mt-1 frm2" name="form_submit" id="form_submit1" value="Submit" onclick="form_validate1()" style="display:none;">Submit</button>
				</form>
			</div>

			<div>
				<p class="text-center notaMember mt-4 text-capitalize">Not a member? <a class="mollure-text-color" href="{{url('en/register')}}">Register</a></p>
			</div>
		</div>
	</div>
@endsection

@section('third_party_scripts')
	<script src="{{URL::asset('public/js/sweetalert.min.js')}} "></script>

	<script type="text/javascript">

		setTimeout(function(){
			$('#msg-alert1').hide();
		},5000);

		function form_validate(){

			var email = $('#email').val();
			var password = $('#password').val();

			if($.trim(email)==''){
				$('#email').focus();
				return false;
			}
			if($.trim(password)==''){
				$('#password').focus();
				return false;
			}

			$('#frm1').submit();
		}

		function show_forget_pass(){
			$('.frm1').hide();
			$('#email').val('');
			$('#password').val('');
			$('.frm2').show();
		}

		function show_login(){
			$('.frm1').show();
			$('#email1').val('');
			$('.frm2').hide();
		}

		function form_validate1(){
			$('#fp_er_sec').hide();
			var email = $('#email1').val();
			if($.trim(email)==''){
				$('#email1').focus();
				return false;
			}

			var frm = $('#frm2').serialize();

			$('#form_submit1').attr('disabled',true);

			$.ajax({
				url:'{{route("forget_pass")}}',
				type:'post',
				data:frm,
				dataType:"json",
				success:function(r){
					if(r.status=='SUCCESS'){
						show_msg();
					}
					else{
						$('#form_submit1').attr('disabled',false);
						$('#fp_er_sec').show();
						if(r.msg=='Not found'){
							$('#fp_er_p').html('{{$lang_kwords["email-not-found"]["english"]}}');
						}
						else{
							$('#fp_er_p').html('{{$lang_kwords["incorrect_email"]["english"]}}');
						}
					}

				},
				error:function(){
					$('#form_submit1').attr('disabled',false);
				}
			})
		}

		function show_msg(){
			swal(
					"{{$lang_kwords['password-reset-link-send']['english']}}",
					{
						buttons: {
							catch: {
								text: "{{$lang_kwords['alert_ok']['english']}}",
							},
							defeat: false,
						},
					}
			)
					.then((value) => {
						switch (value) {
							case "defeat":
								swal("Got away safely!");
								break;
							case "catch":
								location.reload();
								break;
							default:
								// swal("Got away safely!");
								return false;
						}
					});
		}

	</script>
@endsection



{{-----------------------------------------------}}
{{--------  THIS IS OLD CODE DESIGN -------------}}
{{-----------------------------------------------}}

{{--@include('_header')--}}
{{--<style type="text/css">--}}
{{--* {--}}
{{--    font-family: 'myFirstFont1';--}}
{{--}--}}
{{--.swal-text,.swal-button--cancel{color:#111;text-align: center;} .swal-button--catch{background-color: #009688;}.swal-button--catch:not([disabled]):hover{    background-color: #026a61;}--}}
{{--</style>--}}
{{--<!-- <form action="" id="frm1" method="post" style="margin:auto">--}}


{{--	<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />--}}
{{--	<table style="width:400px;margin:auto">--}}
{{--		<tr>--}}
{{--			<td>Email</td>--}}
{{--			<td><input type="text" name="email" id="email" value="{{ old('email') }}"></td>--}}
{{--		</tr>--}}
{{--		<tr>--}}
{{--			<td>Password</td>--}}
{{--			<td><input type="password" name="password" id="password" value=""></td>--}}
{{--		</tr>--}}

{{--		<tr>--}}
{{--			<td colspan="2">--}}
{{--				<input type="button" name="form_submit" id="form_submit" value="Submit" onclick="form_validate()">--}}
{{--			</td>--}}
{{--		</tr>--}}
{{--	</table>--}}
{{--</form> -->--}}

{{--<div class="container mt-5">--}}
{{--	@if($errors->any())--}}
{{--	<div class="text-center" id="msg-alert1">--}}

{{--        <div class="alert alert-danger">--}}
{{--	        <ul>--}}
{{--	            @foreach ($errors->all() as $error)--}}
{{--	                <p>{{ $error }}</p>--}}
{{--	            @endforeach--}}
{{--	        </ul>--}}
{{--	    </div>--}}
{{--	</div>--}}
{{--    @endif--}}

{{--	<form action="{{route('login_post')}}" id="frm1" method="post" style="max-width:100%;width:300px;margin:auto">--}}
{{--		<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />--}}
{{--	  <div class="mb-3">--}}
{{--	    <label for="exampleInputEmail1" class="form-label">{{$lang_kwords['email']['english']}}</label>--}}
{{--	    <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}">--}}
{{--	  </div>--}}
{{--	  <div class="mb-3">--}}
{{--	    <label for="exampleInputPassword1" class="form-label">{{$lang_kwords['passwords']['english']}}</label>--}}
{{--	    <input type="password" class="form-control" name="password" id="password" value="">--}}
{{--	  </div>--}}
{{--	  <!-- <div class="mb-3 form-check">--}}
{{--	    <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
{{--	    <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
{{--	  </div> -->--}}
{{--	  <div class="text-center">--}}
{{--	  	<button type="button" style="width:100%" class="btn btn-primary" name="form_submit" id="form_submit" onclick="form_validate()">{{$lang_kwords['login_submit']['english']}}</button>--}}
{{--	  </div>--}}
{{--	  <div class="text-center">--}}
{{--	  	<p class="mt-2"><span class="text-primary" role="button" onclick="show_forget_pass()">{{$lang_kwords['forgot-password']['english']}}</span></p>--}}
{{--	  </div>--}}
{{--	</form>--}}

{{--	<div class="text-center" id="fp_er_sec" style="display:none">--}}
{{--        <div class="alert alert-danger">--}}
{{--			<p id="fp_er_p"></p>--}}
{{--	    </div>--}}
{{--	</div>--}}

{{--	<form action="" id="frm2" method="post" style="max-width:100%;width:300px;margin:auto;display:none">--}}
{{--		<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />--}}
{{--		<input type="hidden" name="act" value="c">--}}
{{--		<input type="hidden" name="lt" value="en">--}}
{{--	  <div class="mb-3">--}}
{{--	    <label for="exampleInputEmail1" class="form-label">{{$lang_kwords['email']['english']}}</label>--}}
{{--	    <input type="text" class="form-control" name="email" id="email1" value="">--}}
{{--	  </div>--}}

{{--	  <div class="text-center">--}}
{{--	  	<button type="button" style="width:100%" class="btn btn-primary" name="form_submit" id="form_submit1" onclick="form_validate1()">{{$lang_kwords['submit']['english']}}</button>--}}
{{--	  </div>--}}
{{--	  <div class="text-center">--}}
{{--	  	<p class="mt-3"><span class="text-primary" role="button" onclick="show_login()">{{$lang_kwords['go-to-login']['english']}}</span></p>--}}
{{--	  </div>--}}
{{--	</form>--}}
{{--	<div class="text-center mt-5">--}}
{{--	    <!-- <p>Not a member? <a href="{{route('register')}}">Register</a></p> -->--}}
{{--	    @if(isset($contents['register_section']))--}}
{{--                {!! $contents['register_section']['content'] !!}--}}
{{--        @endif--}}

{{--  	</div>--}}

{{--</div>--}}

{{--@include('salon/footer')--}}
{{--<script src="{{URL::asset('public/js/sweetalert.min.js')}} "></script>--}}

{{--<script type="text/javascript">--}}

{{--	setTimeout(function(){--}}
{{--		$('#msg-alert1').hide();--}}
{{--	},5000);--}}

{{--	function form_validate(){--}}

{{--		var email = $('#email').val();--}}
{{--		var password = $('#password').val();--}}

{{--		if($.trim(email)==''){--}}
{{--			$('#email').focus();--}}
{{--			return false;--}}
{{--		}--}}
{{--		if($.trim(password)==''){--}}
{{--			$('#password').focus();--}}
{{--			return false;--}}
{{--		}--}}

{{--		$('#frm1').submit();--}}
{{--	}--}}

{{--	function show_forget_pass(){--}}
{{--		$('#frm1').hide();--}}
{{--		$('#email').val('');--}}
{{--		$('#password').val('');--}}
{{--		$('#frm2').show();--}}
{{--	}--}}

{{--	function show_login(){--}}
{{--		$('#frm1').show();--}}
{{--		$('#email1').val('');--}}
{{--		$('#frm2').hide();--}}
{{--	}--}}

{{--	function form_validate1(){--}}
{{--		$('#fp_er_sec').hide();--}}
{{--		var email = $('#email1').val();--}}
{{--		if($.trim(email)==''){--}}
{{--			$('#email1').focus();--}}
{{--			return false;--}}
{{--		}--}}

{{--		var frm = $('#frm2').serialize();--}}

{{--		$('#form_submit1').attr('disabled',true);--}}

{{--		$.ajax({--}}
{{--			url:'{{route("forget_pass")}}',--}}
{{--			type:'post',--}}
{{--			data:frm,--}}
{{--			dataType:"json",--}}
{{--			success:function(r){--}}
{{--				if(r.status=='SUCCESS'){--}}
{{--					show_msg();--}}
{{--				}--}}
{{--				else{--}}
{{--					$('#form_submit1').attr('disabled',false);--}}
{{--					$('#fp_er_sec').show();--}}
{{--					if(r.msg=='Not found'){--}}
{{--						$('#fp_er_p').html('{{$lang_kwords["email-not-found"]["english"]}}');--}}
{{--					}--}}
{{--					else{--}}
{{--						$('#fp_er_p').html('{{$lang_kwords["incorrect_email"]["english"]}}');--}}
{{--					}--}}
{{--				}--}}

{{--			},--}}
{{--			error:function(){--}}
{{--				$('#form_submit1').attr('disabled',false);--}}
{{--			}--}}
{{--		})--}}
{{--	}--}}

{{--	function show_msg(){--}}
{{--	    swal(--}}
{{--	      "{{$lang_kwords['password-reset-link-send']['english']}}",--}}
{{--	      {--}}
{{--	        buttons: {--}}
{{--	          catch: {--}}
{{--	            text: "{{$lang_kwords['alert_ok']['english']}}",--}}
{{--	          },--}}
{{--	          defeat: false,--}}
{{--	        },--}}
{{--	      }--}}
{{--	    )--}}
{{--	    .then((value) => {--}}
{{--	      switch (value) {--}}

{{--	        case "defeat":--}}
{{--	          swal("Got away safely!");--}}
{{--	          break;--}}

{{--	        case "catch":--}}
{{--	          location.reload();--}}
{{--	          break;--}}

{{--	        default:--}}
{{--	          // swal("Got away safely!");--}}
{{--	          return false;--}}
{{--	      }--}}
{{--	    });--}}
{{--	}--}}

{{--</script>--}}
{{--</body>--}}
{{--</html>--}}