<html>
<head>
	<title></title>
</head>
<body>
<form action="" id="frm1" method="post" enctype="multipart/form-data">
	@if($errors->any())
        <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
    @endif
    @if(session('success'))
    	<h4>You have registered succefully. We are verifying your detail.</h4>
	@endif

	<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
	<input type="hidden" name="act" value="profile">
	<table>
		<tr>
			<td>Legal name</td>
			<td><input type="text" name="legal_name" id="legal_name" value="{{ old('legal_name') }}"></td>
		</tr>
		<tr>
			<td>COC</td>
			<td><input type="text" name="coc" id="coc" value="{{ old('coc') }}"></td>
		</tr>
		<tr>
			<td>VAT</td>
			<td><input type="text" name="vat" id="vat" value="{{ old('vat') }}"></td>
		</tr>
		<tr>
			<td>street</td>
			<td><input type="text" name="street" id="street" value="{{ old('street') }}"></td>
		</tr>
		<tr>
			<td>number</td>
			<td><input type="text" name="number" id="number" value="{{ old('number') }}"></td>
		</tr>
		<tr>
			<td>postal</td>
			<td><input type="text" name="postal" id="postal" value="{{ old('postal') }}"></td>
		</tr>
		<tr>
			<td>municipality</td>
			<td><input type="text" name="municipality" id="municipality" value="{{ old('municipality') }}"></td>
		</tr>
		<tr>
			<td>province</td>
			<td><input type="text" name="province" id="province" value="{{ old('province') }}"></td>
		</tr>
		<tr>
			<td>Registraion</td>
			<td><input type="file" name="registration_doc" id="registration_doc" value="{{ old('registration_doc') }}"></td>
		</tr>
		<tr>
			<td>contact_person_first_name</td>
			<td><input type="text" name="contact_person_first_name" id="contact_person_first_name" value="{{ old('contact_person_first_name') }}"></td>
		</tr>
		<tr>
			<td>contact_person_last_name</td>
			<td><input type="text" name="contact_person_last_name" id="contact_person_last_name" value="{{ old('contact_person_last_name') }}"></td>
		</tr>
		<tr>
			<td>contact_number</td>
			<td><input type="text" name="contact_number" id="contact_number" value="{{ old('contact_number') }}"></td>
		</tr>
		<tr>
			<td>insta_link</td>
			<td><input type="text" name="insta_link" id="insta_link" value="{{ old('insta_link') }}"></td>
		</tr>
		
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" id="email" value="{{ old('email') }}"></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="text" name="password" id="password" value=""></td>
		</tr>
		<tr>
			<td>conf password</td>
			<td><input type="text" name="conf_password" id="conf_password" value=""></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td><input type="radio" name="gender" value="male"> Male &nbsp; 
				<input type="radio" name="gender" value="female"> Female &nbsp; 
				<input type="radio" name="gender" value="neutral"> gander neutral &nbsp; 
				<input type="radio" name="gender" value="not_prefer"> Not Prefer 
			</td>
		</tr>

		<tr>
			<td colspan="2">
				<input type="checkbox" value="1" id="term_condition"> I accept
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="button" name="form_submit" id="form_submit" value="Submit" onclick="form_validate()">
			</td>
		</tr>
	</table>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
	function form_validate(){
		var legal_name = $('#legal_name').val();
		var coc = $('#coc').val();
		var vat = $('#vat').val();
		var street = $('#street').val();
		var postal = $('#postal').val();	
		var municipality = $('#municipality').val();	
		var province = $('#province').val();	
		var registration_doc = $('#registration_doc').val();	
		var contact_person_first_name = $('#contact_person_first_name').val();	
		var email = $('#email').val();	
		var password = $('#password').val();	
		var conf_password	 = $('#conf_password	').val();	


		if($.trim(legal_name)==''){
			$('#legal_name').focus();
			return false;
		}
		if($.trim(coc)==''){
			$('#coc').focus();
			return false;
		}
		if($.trim(vat)==''){
			$('#vat').focus();
			return false;
		}
		if($.trim(street)==''){
			$('#street').focus();
			return false;
		}
		if($.trim(postal)==''){
			$('#postal').focus();
			return false;
		}
		if($.trim(municipality)==''){
			$('#municipality').focus();
			return false;
		}
		if($.trim(province)==''){
			$('#province').focus();
			return false;
		}
		if($.trim(registration_doc)==''){
			$('#registration_doc').focus();
			return false;
		}
		if($.trim(contact_person_first_name)==''){
			$('#contact_person_first_name').focus();
			return false;
		}
		if($.trim(email)==''){
			$('#email').focus();
			return false;
		}
		if($.trim(password)==''){
			$('#password').focus();
			return false;
		}
		if($.trim(conf_password)==''){
			$('#conf_password').focus();
			return false;
		}
		
		if(password!=conf_password){
			$('#conf_password').focus();
			return false;
		}

		$('#frm1').submit();
	}
</script>
</body>
</html>