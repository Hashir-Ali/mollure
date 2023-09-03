@include('_header')
<style type="text/css">
* {
    font-family: 'myFirstFont1';
}
.swal-text,.swal-button--cancel{color:#111;text-align: center;} .swal-button--catch{background-color: #009688;}.swal-button--catch:not([disabled]):hover{    background-color: #026a61;}
</style>

<div class="container mt-5">
	@if($errors->any())
	<div class="text-center">
	
        <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <p>{{ $error }}</p>
	            @endforeach
	        </ul>
	    </div>
	</div>
    @endif

    @if($status=='ERR')
    	<div class="text-center">
	        <div class="alert alert-danger">
		        <p>Something went wrong. please try again or contact to our team.</p>
		        <p><a href="{{route('login')}}">Go to Login</a></p>
		    </div>
		</div>
	@else	
	<div class="text-center" id="fp_er_sec" style="display:none">
        <div class="alert alert-danger">
			<p id="fp_er_p"></p>
	    </div>
	</div>
	<form action="{{route('login_post')}}" id="frm1" method="post" style="max-width:100%;width:300px;margin:auto">
		<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
		<input type="hidden" name="pi" value="{{ $prof[0]->id }}" />
		<input type="hidden" name="email" value="{{ $prof[0]->email }}" />
		<input type="hidden" name="act" value="r" />
		<input type="hidden" name="lt" value="en" />

	  <div class="mb-3">
	    <label for="exampleInputPassword1" class="form-label">{{$lang_kwords['passwords'][$lang]}}</label>
	    <input type="password" class="form-control" name="password" id="password" value="">
	  </div>
	  <div class="mb-3">
	    <label for="exampleInputEmail1" class="form-label">{{$lang_kwords['repeat-password'][$lang]}}</label>
	    <input type="text" class="form-control" name="confirm_password" id="confirm_password" value="">
	  </div>
	  <div class="text-center">
	  	<button type="button" style="width:100%" class="btn btn-primary" name="form_submit" id="form_submit" onclick="form_validate()">{{$lang_kwords['submit'][$lang]}}</button>
	  </div>
	  <div class="text-center">
	  	<p class="mt-2"><a href="{{route('login')}}" class="text-primary" role="button">{{$lang_kwords['go-to-login'][$lang]}}</a></p>
	  </div>
	</form>
    @endif


</div>

@include('salon/footer')
<script src="{{URL::asset('public/js/sweetalert.min.js')}} "></script>

<script type="text/javascript">
	function form_validate(){
		
		
		var password = $('#password').val();	
		var confirm_password = $('#confirm_password').val();	

		if($.trim(password)==''){
			$('#password').focus();
			return false;
		}
		if($.trim(confirm_password)==''){
			$('#confirm_password').focus();
			return false;
		}

		if(password!=confirm_password){
			$('#confirm_password').focus();
			return false;
		}

		var frm = $('#frm1').serialize();

		$('#form_submit').attr('disabled',true);
		$.ajax({
			url:'{{route("forget_pass")}}',
			type:'post',
			data:frm,
			dataType:"json",
			success:function(r){
				$('#form_submit').attr('disabled',false);
				if(r.status=='SUCCESS'){
					show_msg();
				}
				else{
					$('#fp_er_sec').show();
					$('#fp_er_p').html('Something went wrong. Please contact to Mollure.');
				}
				
			},
			error:function(){
				$('#form_submit').attr('disabled',false);
			}
		})
	}

	
	function show_msg(){
	    swal(
	      "{{$lang_kwords['password-success-reset'][$lang]}}",
	      {
	        buttons: {
	          catch: {
	            text: "Login",
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
	          window.location.href="{{route('login')}}";
	          break;
	     
	        default:
	          // swal("Got away safely!");
	          return false;
	      }
	    });
	}

</script>
</body>
</html>