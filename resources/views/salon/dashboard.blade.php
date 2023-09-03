@include('salon/header')

<div class="container bg-white">
	<div class="page_head">
		<div class="row">
			<div class="col-md-2">
			</div>
			<div class="col-md-2">
			</div>
			<div class="col-md-2">
			</div>
			<div class="col-md-2">
			</div>
			<div class="col-md-2">
			</div>
		</div>
	</div>


	<div class="info_form">
	   <input type="hidden" id="csrf-token" value="{{ Session::token() }}" />
	   <form action="" id="frm" class="info_form" method="post" enctype="multipart/form-data">
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
	      <h4>Your Detail has beed updated.</h4>
	      @endif
	      <input type="hidden" name="_token" value="{{ Session::token() }}" />
	      <input type="hidden" name="act" value="profile">
	      <table>
	         <tr>
	            <td></td>
	            <td><input type="button" id="edit_btn" value="Edit" onclick="edit_frm()"></td>
	         </tr>
	         <tr>
	            <td>Legal name</td>
	            <td><input type="text" class="frm_inp" disabled name="legal_name" id="legal_name" value="{{ $prof->legal_name }}"></td>
	         </tr>
	         <tr>
	            <td>COC</td>
	            <td><input type="text" class="frm_inp" disabled name="coc" id="coc" value="{{ $prof->coc }}"></td>
	         </tr>
	         <tr>
	            <td>VAT</td>
	            <td><input type="text" class="frm_inp" disabled name="vat" id="vat" value="{{ $prof->vat }}"></td>
	         </tr>
	         <tr>
	            <td>street</td>
	            <td><input type="text" class="frm_inp" disabled name="street" id="street" value="{{ $prof->prof_address[0]->street }}"></td>
	         </tr>
	         <tr>
	            <td>number</td>
	            <td><input type="text" class="frm_inp" disabled name="number" id="number" value="{{ $prof->prof_address[0]->number }}"></td>
	         </tr>
	         <tr>
	            <td>postal</td>
	            <td><input type="text" class="frm_inp" disabled name="postal" id="postal" value="{{ $prof->prof_address[0]->postal }}"></td>
	         </tr>
	         <tr>
	            <td>municipality</td>
	            <td><input type="text" class="frm_inp" disabled name="municipality" id="municipality" value="{{ $prof->prof_address[0]->municipality }}"></td>
	         </tr>
	         <tr>
	            <td>province</td>
	            <td><input type="text" class="frm_inp" disabled name="province" id="province" value="{{ $prof->prof_address[0]->province }}"></td>
	         </tr>
	         <tr>
	            <td>Registraion</td>
	            <td><input type="file" class="frm_inp" disabled name="registration_doc" id="registration_doc" value=""></td>
	         </tr>
	         <tr>
	            <td>contact_person_first_name</td>
	            <td><input type="text" class="frm_inp" disabled name="contact_person_first_name" id="contact_person_first_name" value="{{ $prof->prof_address[0]->contact_person_first_name }}"></td>
	         </tr>
	         <tr>
	            <td>contact_person_last_name</td>
	            <td><input type="text" class="frm_inp" disabled name="contact_person_last_name" id="contact_person_last_name" value="{{ $prof->prof_address[0]->contact_person_last_name }}"></td>
	         </tr>
	         <tr>
	            <td>contact_number</td>
	            <td><input type="text" class="frm_inp" disabled name="contact_number" id="contact_number" value="{{ $prof->prof_address[0]->contact_number }}"></td>
	         </tr>
	         <tr>
	            <td>insta_link</td>
	            <td><input type="text" class="frm_inp" disabled name="insta_link" id="insta_link" value="{{ $prof->prof_address[0]->insta_link }}"></td>
	         </tr>
	         <tr>
	            <td>Email</td>
	            <td><input type="text" readonly id="email" value="{{ $prof->email }}"></td>
	         </tr>
	         <tr>
	            <td>password</td>
	            <td><input type="text" class="frm_inp" disabled name="password" id="password" value=""></td>
	         </tr>
	         <tr>
	            <td>conf password</td>
	            <td><input type="text" class="frm_inp" disabled name="conf_password" id="conf_password" value=""></td>
	         </tr>
	         <tr>
	            <td>Gender</td>
	            <td><input type="radio"  class="frm_inp" disabled name="gender" value="male" <?=$c = ($prof->prof_address[0]->gender=='male')?'checked':'';?>> Male &nbsp; 
	               <input type="radio"  class="frm_inp" disabled name="gender" value="female" <?=$c = ($prof->prof_address[0]->gender=='female')?'checked':'';?>> Female &nbsp; 
	               <input type="radio"  class="frm_inp" disabled name="gender" value="neutral" <?=$c = ($prof->prof_address[0]->gender=='neutral')?'checked':'';?>> gander neutral &nbsp; 
	               <input type="radio"  class="frm_inp" disabled name="gender" value="not_prefer" <?=$c = ($prof->prof_address[0]->gender=='not_prefer')?'checked':'';?>> Not Prefer 
	            </td>
	         </tr>
	         <tr>
	            <td colspan="2">
	               <input type="button" name="form_submit" id="form_submit" style="display:none" value="Update" onclick="form_validate()">
	            </td>
	         </tr>
	      </table>
	   </form>
	</div>

	@if($prof->status=='approve')
	<div class="template_sec">
	   <h2>Professional Template</h2>
	   <div>
	      <button type="button" class="fix_loc_btn" onclick="show_fix_loc_sec()">Fixed Location</button> &nbsp;&nbsp;
	      <button type="button" class="des_loc_btn" onclick="show_des_loc_sec()">Desired Location</button>
	   </div>
	   <div class="fix_loc_sec">
	      <h2>Sub template fixed Location &nbsp; <span onclick="edit_fix_bio_frm()">EDIT</span></h2>
	      <form action="{{route('fixed_location_update')}}" id="frm1" class="fix_loc_form" method="post" enctype="multipart/form-data">
	         <input type="hidden" name="_token" value="{{ Session::token() }}" />
	         <table>
	            <tr>
	               <td>Image</td>
	               <td><input type="file" class="frm_inp1" disabled name="fixed_pic" id="fixed_pic" value=""> &nbsp;
	                  @if($prof->fixed_pic!='')
	                  <img src="{{asset('public/imgs/template/'.$prof->fixed_pic)}}" style="width:90px" class="img1">
	                  @else
	                  <img src="{{asset('public/imgs/placeholder-img.jpg')}}" class="img1" style="width:90px">
	                  @endif
	               </td>
	            </tr>
	            <tr>
	               <td>fixed_name</td>
	               <td><input type="text" class="frm_inp1" disabled name="fixed_name" id="fixed_name" value="{{$prof->fixed_name}}"></td>
	            </tr>
	            <tr>
	               <td>fixed_bio</td>
	               <td><input type="text" class="frm_inp1" disabled name="fixed_bio" id="fixed_bio" value="{{$prof->fixed_bio}}"></td>
	            </tr>
	            <tr>
	               <td colspan="2">
	                  <input type="button" name="form_submit1" id="form_submit1" style="display:none" value="Save" onclick="form_validate1()">
	               </td>
	            </tr>
	         </table>
	      </form>
	      <br>
	      <form action="{{route('fixed_location_update')}}" id="frm2" class="fix_loc_form" method="post" enctype="multipart/form-data">
	         <input type="hidden" name="_token" value="{{ Session::token() }}" />
	         <input type="hidden" name="type" value="f" />
	         <input type="hidden" name="act" id="salon_act" value="add" />
	         <input type="hidden" name="sid" id="sid" value="" />
	         <table>
	            <tr>
	               <td>Salon Name</td>
	               <td>street</td>
	               <td>Number</td>
	               <td>Postal</td>
	               <td>Municipality</td>
	               <td>Province</td>
	            </tr>
	            <tr>
	               <td><input type="text" name="salon_name" id="salon_name"></td>
	               <td><input type="text" name="street" id="salon_street"></td>
	               <td><input type="text" name="number" id="salon_number"></td>
	               <td><input type="text" name="postal_code" id="salon_postal_code"></td>
	               <td><input type="text" name="municipality" id="salon_municipality"></td>
	               <td><input type="text" name="province" id="salon_province"></td>
	            </tr>
	            <tr>
	               <td colspan="6" align="right"><input type="button" name="form_submit2" id="form_submit2"value="Save" onclick="form_validate2()"></td>
	            </tr>
	         </table>
	      </form>
	      <br>
	      <br>
	      @if($fixed_loc_salon && count($fixed_loc_salon)>0)
	      @foreach($fixed_loc_salon as $k=>$salon)
	      <div class="salon_card" style="background-color:grey" onclick="show_salon_detail('{{$salon->id}}')">
	         <p><span onclick="edit_salon('{{$salon->id}}')">Edit</span> &nbsp; <span onclick="delete_salon('{{$salon->id}}')">Delete</span> </p>
	         <p>Salon Name: {{$salon->salon_name}}</p>
	         <p>Salon street: {{$salon->street}}</p>
	         <p>Salon number: {{$salon->number}}</p>
	         <p>postal_code: {{$salon->postal_code}}</p>
	         <p>municipality: {{$salon->municipality}}</p>
	         <p>province: {{$salon->province}}</p>
	      </div>
	      @endforeach
	      @endif
	      <br>
	      <div class="salon_serv_for_sec" style="display:none">
	         <h3>Service For</h3>
	         <label><input type="checkbox" name="all_gender_chk" id="all_gender_chk">All</label> &nbsp;
	         <label><input type="checkbox" name="men_chk" id="men_chk">men</label> &nbsp;
	         <label><input type="checkbox" name="women_chk" id="women_chk">women</label> &nbsp;
	         <label><input type="checkbox" name="kids_chk" id="kids_chk">kids</label> &nbsp;
	      </div>
	      <div class="salon_cate_sec" style="display:none">
	      </div>
	      <div class="salon_cate_dt_sec" style="display:none">
	         <h3 class="title1">Category</h3>
	         <div class="service_tbl_sec">
	            <table class="service_tbl">
	               <thead>
	                  <tr>
	                     <td>Service name</td>
	                     <td>Duration</td>
	                     <td>Price</td>
	                     <td>Action</td>
	                  </tr>
	               </thead>
	               <tbody>
	               </tbody>
	               <tfoot>
	                  <tr>
	                     <td>
	                        <input type="hidden" id="cate_id">
	                        <input type="hidden" id="temp_id">
	                        <input type="hidden" id="prof_id">
	                        <input type="hidden" id="serv_id">
	                        <input type="hidden" id="serv_act" value="add">
	                        <input type="hidden" id="edit_serv_i" value="">
	                        <input type="hidden" id="serve_type" value="main">
	                        <input type="text" id="serv_name_inp">
	                        <br>
	                        <p>Additional Info</p>
	                        <textarea id="serv_add_info"></textarea>
	                     </td>
	                     <td>
	                        <select id="duration_start_hr">
	                           <option value="1h">1h</option>
	                           <option value="2h">2h</option>
	                           <option value="3h">3h</option>
	                           <option value="4h">4h</option>
	                           <option value="5h">5h</option>
	                        </select>
	                        :
	                        <select id="duration_start_min">
	                           <option value="10m">10m</option>
	                           <option value="20m">20m</option>
	                           <option value="30m">30m</option>
	                           <option value="40m">40m</option>
	                           <option value="50m">50m</option>
	                        </select>
	                        &nbsp;-&nbsp;
	                        <select id="duration_end_hr">
	                           <option value="1h">1h</option>
	                           <option value="2h">2h</option>
	                           <option value="3h">3h</option>
	                           <option value="4h">4h</option>
	                           <option value="5h">5h</option>
	                        </select>
	                        :
	                        <select id="duration_end_min">
	                           <option value="10m">10m</option>
	                           <option value="20m">20m</option>
	                           <option value="30m">30m</option>
	                           <option value="40m">40m</option>
	                           <option value="50m">50m</option>
	                        </select>
	                     </td>
	                     <td colspan="2">
	                        <div>
	                           <div style="width:50%;display:inline-block"><label><input type="radio" name="price_type" class="price_type_inp" checked value="f"> Fixed</label></div>
	                           <div style="width:50%;display:inline-block" id="serv_p_typ1"><input type="text" id="serv_p_fix"></div>
	                        </div>
	                        <div>
	                           <div style="width:50%;display:inline-block"><label><input type="radio" name="price_type" class="price_type_inp" value="s"> Start From</label></div>
	                           <div style="width:50%;display:none;" id="serv_p_typ2"><input type="text" id="serv_p_st_fr"></div>
	                        </div>
	                        <div>
	                           <label><input type="checkbox" id="is_discount"> Discount</label>
	                        </div>
	                        <div class="discount_sec" style="display:none">
	                           <div><label><input type="radio" name="discount_type" class="discount_inp" checked value="f"> Fixed</label></div>
	                           <div style="width:100%;display:inline-block" id="serv_d_typ1">
	                              Discount: <input type="text" id="serv_d_fix"> &nbsp; 
	                              Valid From<input type="date" id="serv_d_fx_fr_dt"> &nbsp; 
	                              To:<input type="date" id="serv_d_fx_to_dt">
	                           </div>
	                        </div>
	                        <div class="discount_sec" style="display:none">
	                           <div><label><input type="radio" name="discount_type" class="discount_inp" value="p"> Percent</label></div>
	                           <div style="width:100%;display:none" id="serv_d_typ2">
	                              Discount: (%) <input type="text" id="serv_d_per"> &nbsp; 
	                              Valid From<input type="date" id="serv_d_pr_fr_dt"> &nbsp; 
	                              To:<input type="date" id="serv_d_pr_to_dt">
	                           </div>
	                        </div>
	                        <div>
	                           <p>Additional Info</p>
	                           <textarea id="serv_p_add_info"></textarea>
	                        </div>
	                     </td>
	                  </tr>
	                  <tr>
	                     <td colspan="4" align="center">
	                        <input type="button" id="serv_add_btn" value="Save" onclick="save_service()">
	                     </td>
	                  </tr>
	               </tfoot>
	            </table>
	         </div>
	      </div>
	      <div class="salon_note_sec" style="display:none">
	         <h3>General note</h3>
	         <textarea id="gen_note_txt">
				</textarea>
	         <br>
	         <input type="button" id="gen_note_btn" value="Save" onclick="save_gen_note()">
	      </div>
	      <div class="team_mem_sec" style="display:none">
	         <h3>Team Members</h3>
	         <p><span>+ Team Member</span></p>
	         <div class="team_mem_lst_sec">
	         </div>
	         <form id="frm3">
	            <input type="hidden" name="_token" value="{{ Session::token() }}" />
	            <input type="hidden" name="tm_i" id="tm_i" value="" />
	            <input type="hidden" name="tm_act" id="tm_act" value="add" />
	            <div class="row">
	               <div class="col-md-4">
	                  <input type="file" id="team_mem_img" name='team_mem_img' style="display:none"  accept='image/jpeg,image/png'>
	                  <img id="tm_img_preview" src="{{ URL::asset('public/images/blank_img_icon.png')}}" style="width:100px;">
	                  <label class="" onclick="sel_image()">Add Image</label>
	               </div>
	               <div class="col-md-8">
	                  <div class="">
	                     <input type="text" id="team_member_name" name="team_member_name" placeholder="Team Member Name">
	                  </div>
	                  <div class="">
	                     <textarea  id="team_member_bio" name="team_member_bio" placeholder="Bio"></textarea>
	                  </div>
	               </div>
	            </div>
	            <br>
	            <input type="button" id="team_mem_btn" value="Save" onclick="save_team_member()">
	         </form>
	      </div>
	      <div class="visual_sec" style="display:none">
	         <h3>Visuals</h3>
	        
	         <div class="visual_lst_sec">
	         </div>
	         <form id="frm4">
	            <input type="hidden" name="_token" value="{{ Session::token() }}" />
	            <input type="hidden" value="link" name="visual_type" id="visual_type">
	            <div class="row">
	            	<div class="col-md-8">
	                  <div class="insta_link_sec">
	                     <input type="text" id="visual_link" name="visual_link" placeholder="Instagram image links">
	                  </div>
	                  <div class="ur_img_sec" style="display:none">
		                  <input type="file" id="visual_img" name='visual_img' style="display:none"  accept='image/jpeg,image/png'>
		                  <img src="{{ URL::asset('public/images/blank_img_icon.png')}}" style="width:100px;">
		                  <label class="" onclick="sel_image1()">Upload your images</label>
		               </div>
	               </div>
	               <div class="col-md-8">
	                  <div>
	                  	<span class="visual_spn" onclick="show_insta_link_sec()">Add Instagram Image Links</span>
	                  </div>
	                  <div>
	                  	<span class="visual_spn" onclick="show_ur_img_sec()">Upload Your Own Image</span>
	                  </div>
	               </div>
	            </div>
	            <br>
	            <input type="button" id="visual_btn" value="Save" onclick="save_visual()">
	         </form>
	      </div>
	   </div>
	   <div class="dis_loc_sec">
	   	<h2>Sub template Desire Location &nbsp; <span onclick="edit_des_bio_frm()">EDIT</span></h2>
	      <form action="" id="des_frm1" class="des_loc_form" method="post" enctype="multipart/form-data">
	         <input type="hidden" name="_token" value="{{ Session::token() }}" />
	         <table>
	            <tr>
	               <td>Image</td>
	               <td><input type="file" class="des_frm_inp1" disabled name="desire_pic" id="desire_pic"  accept='image/jpeg,image/png' value=""> &nbsp;
	                  @if($prof->desire_pic!='')
	                  <img src="{{asset('public/imgs/template/'.$prof->desire_pic)}}" style="width:90px" class="img1">
	                  @else
	                  <img src="{{asset('public/imgs/placeholder-img.jpg')}}" class="img1" style="width:90px">
	                  @endif
	               </td>
	            </tr>
	            <tr>
	               <td>desire_name</td>
	               <td><input type="text" class="des_frm_inp1" disabled name="desire_name" id="desire_name" value="{{$prof->desire_name}}"></td>
	            </tr>
	            <tr>
	               <td>desire_bio</td>
	               <td><input type="text" class="des_frm_inp1" disabled name="desire_bio" id="desire_bio" value="{{$prof->desire_bio}}"></td>
	            </tr>
	            <tr>
	               <td colspan="2">
	                  <input type="button" name="des_form_submit1" id="des_form_submit1" style="display:none" value="Save" onclick="des_form_validate1()">
	               </td>
	            </tr>
	         </table>
	      </form>
	      <br>
	      <form action="{{route('desire_location_update')}}" id="des_frm2" class="des_loc_form" method="post" enctype="multipart/form-data">
	         <input type="hidden" name="_token" value="{{ Session::token() }}" />
	         <input type="hidden" name="type" value="d" />
	         <input type="hidden" name="act" id="salon_act" value="add" />
	         <input type="hidden" name="sid" id="sid" value="" />
	         
	         <h3>Desire Location</h3>
	         <table>
	            <tr>
	               <td>Everywhere in  the</td>
	               <td><label><input type="checkbox" name="everywhere" class="des_loc_type" value="1"> Netherlands</label></td>
	            </tr>
	            <tr>
	               <td>Specific Province</td>
	               <td><label><input type="checkbox" name="specific" class="des_loc_type" value="1"></label></td>
	            </tr>
	         </table>
	         <br>
	         <div style="border:1px solid #000">
	         	<div style="width:30%;display:inline-block;">
	         		<select name="des_loc_province" id="des_loc_province">
	         			<option value="Test Province">Test Province</option>
	         		</select>
	         	</div>
	         </div>
	         <div>
	         	<input type="button" name="des_form_submit2" id="des_form_submit2"value="Save" onclick="des_form_validate2()">
	         </div>
	      </form>
	      <br>
	      <br>
	      @if($fixed_loc_salon && count($fixed_loc_salon)>0)
	      @foreach($fixed_loc_salon as $k=>$salon)
	      <div class="salon_card" style="background-color:grey" onclick="show_salon_detail('{{$salon->id}}')">
	         <p><span onclick="edit_salon('{{$salon->id}}')">Edit</span> &nbsp; <span onclick="delete_salon('{{$salon->id}}')">Delete</span> </p>
	         <p>Salon Name: {{$salon->salon_name}}</p>
	         <p>Salon street: {{$salon->street}}</p>
	         <p>Salon number: {{$salon->number}}</p>
	         <p>postal_code: {{$salon->postal_code}}</p>
	         <p>municipality: {{$salon->municipality}}</p>
	         <p>province: {{$salon->province}}</p>
	      </div>
	      @endforeach
	      @endif
	      <br>
	      <div class="salon_serv_for_sec" style="display:none">
	         <h3>Service For</h3>
	         <label><input type="checkbox" name="all_gender_chk" id="all_gender_chk">All</label> &nbsp;
	         <label><input type="checkbox" name="men_chk" id="men_chk">men</label> &nbsp;
	         <label><input type="checkbox" name="women_chk" id="women_chk">women</label> &nbsp;
	         <label><input type="checkbox" name="kids_chk" id="kids_chk">kids</label> &nbsp;
	      </div>
	      <div class="salon_cate_sec" style="display:none">
	      </div>
	      <div class="salon_cate_dt_sec" style="display:none">
	         <h3 class="title1">Category</h3>
	         <div class="service_tbl_sec">
	            <table class="service_tbl">
	               <thead>
	                  <tr>
	                     <td>Service name</td>
	                     <td>Duration</td>
	                     <td>Price</td>
	                     <td>Action</td>
	                  </tr>
	               </thead>
	               <tbody>
	               </tbody>
	               <tfoot>
	                  <tr>
	                     <td>
	                        <input type="hidden" id="cate_id">
	                        <input type="hidden" id="temp_id">
	                        <input type="hidden" id="prof_id">
	                        <input type="hidden" id="serv_id">
	                        <input type="hidden" id="serv_act" value="add">
	                        <input type="hidden" id="edit_serv_i" value="">
	                        <input type="hidden" id="serve_type" value="main">
	                        <input type="text" id="serv_name_inp">
	                        <br>
	                        <p>Additional Info</p>
	                        <textarea id="serv_add_info"></textarea>
	                     </td>
	                     <td>
	                        <select id="duration_start_hr">
	                           <option value="1h">1h</option>
	                           <option value="2h">2h</option>
	                           <option value="3h">3h</option>
	                           <option value="4h">4h</option>
	                           <option value="5h">5h</option>
	                        </select>
	                        :
	                        <select id="duration_start_min">
	                           <option value="10m">10m</option>
	                           <option value="20m">20m</option>
	                           <option value="30m">30m</option>
	                           <option value="40m">40m</option>
	                           <option value="50m">50m</option>
	                        </select>
	                        &nbsp;-&nbsp;
	                        <select id="duration_end_hr">
	                           <option value="1h">1h</option>
	                           <option value="2h">2h</option>
	                           <option value="3h">3h</option>
	                           <option value="4h">4h</option>
	                           <option value="5h">5h</option>
	                        </select>
	                        :
	                        <select id="duration_end_min">
	                           <option value="10m">10m</option>
	                           <option value="20m">20m</option>
	                           <option value="30m">30m</option>
	                           <option value="40m">40m</option>
	                           <option value="50m">50m</option>
	                        </select>
	                     </td>
	                     <td colspan="2">
	                        <div>
	                           <div style="width:50%;display:inline-block"><label><input type="radio" name="price_type" class="price_type_inp" checked value="f"> Fixed</label></div>
	                           <div style="width:50%;display:inline-block" id="serv_p_typ1"><input type="text" id="serv_p_fix"></div>
	                        </div>
	                        <div>
	                           <div style="width:50%;display:inline-block"><label><input type="radio" name="price_type" class="price_type_inp" value="s"> Start From</label></div>
	                           <div style="width:50%;display:none;" id="serv_p_typ2"><input type="text" id="serv_p_st_fr"></div>
	                        </div>
	                        <div>
	                           <label><input type="checkbox" id="is_discount"> Discount</label>
	                        </div>
	                        <div class="discount_sec" style="display:none">
	                           <div><label><input type="radio" name="discount_type" class="discount_inp" checked value="f"> Fixed</label></div>
	                           <div style="width:100%;display:inline-block" id="serv_d_typ1">
	                              Discount: <input type="text" id="serv_d_fix"> &nbsp; 
	                              Valid From<input type="date" id="serv_d_fx_fr_dt"> &nbsp; 
	                              To:<input type="date" id="serv_d_fx_to_dt">
	                           </div>
	                        </div>
	                        <div class="discount_sec" style="display:none">
	                           <div><label><input type="radio" name="discount_type" class="discount_inp" value="p"> Percent</label></div>
	                           <div style="width:100%;display:none" id="serv_d_typ2">
	                              Discount: (%) <input type="text" id="serv_d_per"> &nbsp; 
	                              Valid From<input type="date" id="serv_d_pr_fr_dt"> &nbsp; 
	                              To:<input type="date" id="serv_d_pr_to_dt">
	                           </div>
	                        </div>
	                        <div>
	                           <p>Additional Info</p>
	                           <textarea id="serv_p_add_info"></textarea>
	                        </div>
	                     </td>
	                  </tr>
	                  <tr>
	                     <td colspan="4" align="center">
	                        <input type="button" id="serv_add_btn" value="Save" onclick="save_service()">
	                     </td>
	                  </tr>
	               </tfoot>
	            </table>
	         </div>
	      </div>
	      <div class="salon_note_sec" style="display:none">
	         <h3>General note</h3>
	         <textarea id="gen_note_txt">
				</textarea>
	         <br>
	         <input type="button" id="gen_note_btn" value="Save" onclick="save_gen_note()">
	      </div>
	      <div class="team_mem_sec" style="display:none">
	         <h3>Team Members</h3>
	         <p><span>+ Team Member</span></p>
	         <div class="team_mem_lst_sec">
	         </div>
	         <form id="frm3">
	            <input type="hidden" name="_token" value="{{ Session::token() }}" />
	            <input type="hidden" name="tm_i" id="tm_i" value="" />
	            <input type="hidden" name="tm_act" id="tm_act" value="add" />
	            <div class="row">
	               <div class="col-md-4">
	                  <input type="file" id="team_mem_img" name='team_mem_img' style="display:none"  accept='image/jpeg,image/png'>
	                  <img id="tm_img_preview" src="{{ URL::asset('public/images/blank_img_icon.png')}}" style="width:100px;">
	                  <label class="" onclick="sel_image()">Add Image</label>
	               </div>
	               <div class="col-md-8">
	                  <div class="">
	                     <input type="text" id="team_member_name" name="team_member_name" placeholder="Team Member Name">
	                  </div>
	                  <div class="">
	                     <textarea  id="team_member_bio" name="team_member_bio" placeholder="Bio"></textarea>
	                  </div>
	               </div>
	            </div>
	            <br>
	            <input type="button" id="team_mem_btn" value="Save" onclick="save_team_member()">
	         </form>
	      </div>
	      <div class="visual_sec" style="display:none">
	         <h3>Visuals</h3>
	        
	         <div class="visual_lst_sec">
	         </div>
	         <form id="frm4">
	            <input type="hidden" name="_token" value="{{ Session::token() }}" />
	            <input type="hidden" value="link" name="visual_type" id="visual_type">
	            <div class="row">
	            	<div class="col-md-8">
	                  <div class="insta_link_sec">
	                     <input type="text" id="visual_link" name="visual_link" placeholder="Instagram image links">
	                  </div>
	                  <div class="ur_img_sec" style="display:none">
		                  <input type="file" id="visual_img" name='visual_img' style="display:none"  accept='image/jpeg,image/png'>
		                  <img src="{{ URL::asset('public/images/blank_img_icon.png')}}" style="width:100px;">
		                  <label class="" onclick="sel_image1()">Upload your images</label>
		               </div>
	               </div>
	               <div class="col-md-8">
	                  <div>
	                  	<span class="visual_spn" onclick="show_insta_link_sec()">Add Instagram Image Links</span>
	                  </div>
	                  <div>
	                  	<span class="visual_spn" onclick="show_ur_img_sec()">Upload Your Own Image</span>
	                  </div>
	               </div>
	            </div>
	            <br>
	            <input type="button" id="visual_btn" value="Save" onclick="save_visual()">
	         </form>
	      </div>
	   </div>
	   <input type="hidden" id="template_id" value="">
	</div>
	@endif
</div>
@include('salon/footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){

   	$('.des_loc_type').on('change',function(){
   		if($('.price_type_inp:checked').val()=='everywhere'){

   		}
   		else{

   		}
   	})
   
   	$('.price_type_inp').on('change',function(){
   		if($('.price_type_inp:checked').val()=='f'){
   			$('#serv_p_typ1').show();
   			$('#serv_p_typ2').hide();
   		}
   		else{
   			$('#serv_p_typ1').hide();
   			$('#serv_p_typ2').show();
   		}
   	});
   
   	$('#is_discount').on('change',function(){
   		if($(this).prop('checked')===true){
   			$('.discount_sec').show();
   		}
   		else{
   			$('.discount_sec').hide();
   		}
   	});
   
   	$('.discount_inp').on('change',function(){
   		if($('.discount_inp:checked').val()=='f'){
   			// console.log('1111');
   			$('#serv_d_typ1').show();
   			$('#serv_d_typ2').hide();
   		}
   		else{
   			// console.log('2222');
   			$('#serv_d_typ1').hide();
   			$('#serv_d_typ2').show();
   		}
   		// console.log('3333');
   	});
   });

   function save_visual(){
   	var tmp_id = $('#template_id').val();
   	if(tmp_id=='' || tmp_id==0){
   		alert('Something went wrong.');
   	}
   
   	if($('#visual_type').val()=='link'){
   		if($.trim($('#visual_link').val())==''){
	   		$('#visual_link').focus();
	   		return false;
	   	}
   	}
   	else{
   		if($.trim($('#visual_img').val())==''){
	   		alert("Please select image");
	   		return false;
	   	}
   	}
   
   	var frm=new FormData($('#frm4')[0]);
   	frm.append('act', 'add_visual');
   	frm.append('temp_id', tmp_id);
   	$('#visual_btn').val('Wait..!').attr('disabled',true);
   
   	$.ajax({
   		url:"{{route('salon_ajx')}}",
   		type:'post',
   		data:frm,
   		contentType: false,
   		processData:false,
   		success: function(r)
   		{
   			$('#visual_btn').val('Save').attr('disabled',false);
   			if(r=='SUC')
   			{ 
   				$('#visual_link').val('');
   				$('#visual_img').val('');
   				alert('Added');				
   			}
   			if(r=='ERR')
   			{
   				alert('Something went wrong. Please contact');
   			}
   		}
   	})
   }

   function sel_image1 (argument) {
   	$('#visual_img').trigger('click');
   }

   function  show_insta_link_sec() {
		$('.insta_link_sec').show();
		$('.ur_img_sec').hide();
		$('#visual_type').val('link');
   }
   function  show_ur_img_sec() {
		$('.insta_link_sec').hide();
		$('.ur_img_sec').show();
		$('#visual_type').val('image');
   }
   
   function save_team_member(){
   	var tmp_id = $('#template_id').val();
   	if(tmp_id=='' || tmp_id==0){
   		alert('Something went wrong.');
   	}
   
   	if($.trim($('#team_member_name').val())==''){
   		$('#team_member_name').focus();
   		return false;
   	}
   
   	var frm=new FormData($('#frm3')[0]);

   	if($('#tm_act').val()=='add')
   		frm.append('act', 'add_team_member');
   	else{
   		frm.append('act', 'update_team_member');
   		if($('#tm_i').val()==''){
   			alert('Something went wrong.');
   			return false;
   		}
   	}

   	frm.append('temp_id', tmp_id);
   	$('#team_mem_btn').val('Wait..!').attr('disabled',true);
   
   	$.ajax({
   		url:"{{route('salon_ajx')}}",
   		type:'post',
   		data:frm,
   		contentType: false,
   		processData:false,
   		success: function(r)
   		{
   			$('#team_mem_btn').val('Save').attr('disabled',false);
   			if(r=='SUC')
   			{ 
   				if($('#tm_act').val()=='add'){
   					alert('Added');			
   				}	
   				else{
   					alert('Updated');				
   				}

   				$('#team_member_name').val('');
   				$('#team_member_bio').val('');
   				$('#tm_i').val('');
   				$('#tm_act').val('add');
   				$('#tm_img_preview').attr('src',"{{ URL::asset('public/images/blank_img_icon.png')}}");
   			}
   			if(r=='ERR')
   			{
   				alert('Something went wrong. Please contact');
   			}
   		}
   	})
   }
   
   function sel_image(){
          $('#team_mem_img').trigger('click');
       }
   
   function save_gen_note(){
   	var tmp_id = $('#template_id').val();
   	if(tmp_id=='' || tmp_id==0){
   		alert('Something went wrong.');
   	}
   	var note = $('#gen_note_txt').val();
   
   	$.ajax({
   		url:"{{route('salon_ajx')}}",
   		type:'post',
   		data:{'act':'add_gen_note', 'tmp_id':tmp_id, 'note':note, '_token' : '{{ csrf_token() }}'},
   		dataType:'json',
   		success:function(r){
   
   		},
   		error:function(e){
   			alert("Something went wrong");
   		}
   	})
   }
   
   function save_service(){
   	var temp=$('#temp_id').val();
   	var cate=$('#cate_id').val();
   	if(temp=='' || cate==''){
   		alert('Something went wrong');
   		return false;
   	}
   
   	if($.trim($("#serv_name_inp").val())==''){
   		$("#serv_name_inp").focus();
   		return false;
   	}
   
   	if($('.price_type_inp:checked').val()=='f'){
   		if($.trim($("#serv_p_fix").val())==''){
   			$("#serv_p_fix").focus();
   			return false;
   		}
   	}
   	else
   	{
   		if($.trim($("#serv_p_st_fr").val())==''){
   			$("#serv_p_st_fr").focus();
   			return false;
   		}
   	}
   
   	var discount = '0';
   	var discount_type = 'f';
   	if($('#is_discount').prop('checked')===true){
   		discount = '1';
   
   		if($('.discount_inp:checked').val()=='f'){
   			var discount_type = 'f';
   			if($.trim($("#serv_d_fix").val())==''){
   				$("#serv_d_fix").focus();
   				return false;
   			}
   		}
   		else
   		{
   			var discount_type = 'p';
   			if($.trim($("#serv_d_per").val())==''){
   				$("#serv_d_per").focus();
   				return false;
   			}
   		}
   	}
   	else{
   		discount = '0';
   	}
   
   	if($('.price_type_inp:checked').val()=='f'){
   		var price = $.trim($("#serv_p_fix").val());
   		var p_type = 'f';
   	}
   	else{
   		var price = $.trim($("#serv_p_st_fr").val());
   			var p_type = 's';
   	}
   
   	if(discount_type=='f'){
   		var discount_amt = $.trim($("#serv_d_fix").val());
   		var discount_valid_from = $('#serv_d_fx_fr_dt').val();
   		var discount_valid_to = $('#serv_d_fx_to_dt').val();
   	}
   	else{
   		var discount_amt = $.trim($("#serv_d_per").val());
   		var discount_valid_from = $('#serv_d_pr_fr_dt').val();
   		var discount_valid_to = $('#serv_d_pr_to_dt').val();
   	}
   
   	var duration = $('#duration_start_hr').val()+':'+$('#duration_start_min').val()+' - '+$('#duration_end_hr').val()+':'+$('#duration_end_min').val();
   	var payload={
   		template_id:temp,
   		category_id:cate,
   		type:$('#serve_type').val(),
   		service_id:$('#serv_id').val(),
   		service_name:$('#serv_name_inp').val(),
   		duration:duration,
   		price_type:p_type,
   		price:price,
   		discount:discount,
   		discount_amt:discount_amt,
   		discount_type:discount_type,
   		discount_valid_from:discount_valid_from,
   		discount_valid_to:discount_valid_to,
   		discount_info:$('#serv_p_add_info').val(),
   		additional_info:$('#serv_add_info').val(),
   	}
   
   	if($('#serv_act').val()=='add'){
	   	$.ajax({
	   		url:"{{route('salon_ajx')}}",
	   		type:'post',
	   		data:{'act':'save_service','payload':payload, '_token' : '{{ csrf_token() }}'},
	   		dataType:'json',
	   		success:function(r){
	   			if(r.status=="SUCCESS"){
	   				alert('Added');
	   			}
	   			else{
	   				alert("Something went wrong");	
	   			}
	   		},
	   		error:function(e){
	   			alert("Something went wrong");
	   		}
	   	});
   	}
   	else{
   		if($('#edit_serv_i').val()==''){
   			alert('Something went wrong');
   			return false;
   		}

   		$.ajax({
	   		url:"{{route('salon_ajx')}}",
	   		type:'post',
	   		data:{'act':'update_service','sid':$('#edit_serv_i').val(),'payload':payload, '_token' : '{{ csrf_token() }}'},
	   		dataType:'json',
	   		success:function(r){
	   			if(r.status=="SUCCESS"){
	   				alert('Updated');
	   			}
	   			else{
	   				alert("Something went wrong");	
	   			}
	   		},
	   		error:function(e){
	   			alert("Something went wrong");
	   		}
	   	});
   	}
   }

   function edit_service (i) {
   		$.ajax({
   			url:"{{route('salon_ajx')}}",
	   		type:'post',
	   		data:{'act':'get_serv_detail','sid':i, '_token' : '{{ csrf_token() }}'},
	   		dataType:'json',
	   		success:function(r){
	   			if(r.status=='SUCCESS'){
	   				$('#serv_act').val('update');
	   				$('#edit_serv_i').val(i);
	   				$('#serv_name_inp').val(r.service.service_name);
	   				$('#serv_add_info').val(r.service.additional_info);
	   				var durat = r.service.duration;
	   				var exp1 = durat.split(' - ');
	   				var  st_hr='';
	   				var  st_mn='';
	   				var  nd_hr='';
	   				var  nd_mn='';
	   				if(exp1.length==2){
	   					var exp2 = exp1[0].split(':');
	   					if(exp2.length==2){
	   						var  st_hr = exp2[0];
	   						var  st_mn = exp2[1];
	   					}

	   					var exp3 = exp1[1].split(':');
	   					if(exp3.length==2){
	   						var  nd_hr = exp3[0];
	   						var  nd_mn = exp3[1];
	   					}
	   				}
	   				$('#duration_start_hr').val(st_hr);
	   				$('#duration_start_min').val(st_mn);
	   				$('#duration_end_hr').val(nd_hr);
	   				$('#duration_end_min').val(nd_mn);

	   				var ptype = r.service.price_type;
	   				if(ptype=='f'){
	   					$('input[name="price_type"][value="f"]').prop('checked',true);
	   					$('#serv_p_typ1').show();
	   					$('#serv_p_typ2').hide();
	   				}
	   				else{
	   					$('input[name="price_type"][value="s"]').prop('checked',true);
	   					$('#serv_p_typ2').show();
	   					$('#serv_p_typ1').hide();
	   				}

	   				if(r.service.discount=='1'){
	   					$('#is_discount').prop('checked',true);
	   					if(r.service.discount_type=='f'){
	   						$('#serv_d_fix').val(r.service.discount_amount);
	   						$('input[name="discount_type"][value="f"]').prop('checked',true);
	   						$('#serv_d_typ1').show();
	   						$('#serv_d_typ2').hide();
	   						$('#serv_d_pr_fr_dt').val(r.service.discount_valid_from);
	   						$('#serv_d_pr_to_dt').val(r.service.discount_valid_to);
	   					}
	   					else{
	   						$('#serv_d_per').val(r.service.discount_amount);
	   						$('input[name="discount_type"][value="s"]').prop('checked',true);
	   						$('#serv_d_typ1').hide();
	   						$('#serv_d_typ2').show();
	   						$('#serv_d_pr_fr_dt').val(r.service.discount_valid_from);
	   						$('#serv_d_pr_to_dt').val(r.service.discount_valid_to);
	   					}
	   				}

	   				$('#serv_p_add_info').val(r.service.discount_info);

	   			}
	   			else{
	   				alert("Something went wrong");
	   			}
	   		},
	   		error:function(e){
				alert("Something went wrong");
	   		}
   		})
   }
   
   function show_salon_cate_detail(sid, cateid){
   	$.ajax({
   		url:"{{route('salon_ajx')}}",
   		type:'post',
   		data:{'act':'get_salon_cate_detail','sid':sid,'cid':cateid, '_token' : '{{ csrf_token() }}'},
   		dataType:'json',
   		success:function(r){
			console.log(r);
   			if(r.status=='SUCCESS'){
   				if(r.msg=='Y'){
   					var service = r.service;
   					var sub_service = r.sub_service;
   					var str='';
   					$.each(service,function(k,v){
   						str+='<tr class="main_serv_tr">';
   							str+='<td>';
   								str+= v.service_name;
   							str+='</td>';
   							str+='<td>';
   								str+= v.duration;
   							str+='</td>';
   							if(v.price_type=='f'){
   								str+='<td>';
   									str+= v.price;
   								str+='</td>';
   							}
   							else{
   								str+='<td>';
   									str+= 'Starting from '+v.price;
   								str+='</td>';	
   							}
   							
   							str+='<td>';
   								str+= '<span onclick="edit_service(\''+v.id+'\')">Edit</span> &nbsp; <span onclick="delete_service(\''+v.id+'\')">Delete</span> <br> <span onclick="add_subservice_act(\''+v.id+'\')">Add Sub Service</span>';
   							str+='</td>';
   						str+='</tr>';
   
   						if(sub_service!='' && sub_service.length>0){
   							$.each(sub_service,function(k1,v1){
   								str+='<tr class="sub_serv_tr">';
   									str+='<td>';
   										str+= v.service_name;
   									str+='</td>';
   									str+='<td>';
   										str+= v.duration;
   									str+='</td>';
   									if(v.price_type=='f'){
   										str+='<td>';
   											str+= v.price;
   										str+='</td>';
   									}
   									else{
   										str+='<td>';
   											str+= 'Starting from '+v.price;
   										str+='</td>';	
   									}
   									
   									str+='<td>';
   										str+= '<span onclick="edit_service(\''+v.id+'\')">Edit</span> &nbsp; <span onclick="delete_service(\''+v.id+'\')">Edit</span>';
   									str+='</td>';
   								str+='</tr>';
   							})
   						}
   					});
   					$('.service_tbl').find('tbody').html(str);
   					$('.salon_cate_dt_sec').show();
   				}
   				else{
   					var str='<tr><td colspan="4">Not Service Registered for selected Category</td></tr>';
   					$('.service_tbl').find('tbody').html(str);
   					$('.salon_cate_dt_sec').show();
   				}
   			}
   			else{
   				alert('Something went wrong.');
   			}	
   		},
   		error:function(e){
   
   		}
   	});
   
   	$('#temp_id').val(sid);
   	$('#cate_id').val(cateid);
   
   }

   function edit_team_member(id){
   		$.ajax({
   			url:"{{route('salon_ajx')}}",
   			type:'post',
   			data:{'act':'get_tm_detail','tm_i':id, '_token' : '{{ csrf_token() }}'},
   			dataType:'json',
   			success:function(r){
   				if(r.status=='SUCCESS'){
   					$('#team_member_name').val(r.member.name);
   					$('#team_member_bio').val(r.member.bio);

   					if(r.member.image!=''){
   						$('#tm_img_preview').attr('scr','{{asset("public/imgs/team/'+r.member.image+'")}}');
   					}
   					$('#tm_i').val(id);
   					$('#tm_act').val('update');
   					$('html, body').animate({
                       scrollTop: $('#frm3').offset().top-30
                   }, 500);
   				}
   				else{
   					alert('Something went wrong.');
   				}
   			},
   			error:function(e){
				alert('Something went wrong.');
   			}
   		})

   }
   
   function show_salon_detail(sid){
   	$.ajax({
   		url:"{{route('salon_ajx')}}",
   		type:'post',
   		data:{'act':'get_salon_detail','sid':sid, '_token' : '{{ csrf_token() }}'},
   		dataType:'json',
   		success: function(r)
   		{
   		  if(r.status=='SUCCESS')
   		  { 
   		  	var salon = r.salon;
   		  	var services = r.services;
   		  	var team = r.team;
   		  	var visual = r.visual;
   		  	var categories = r.categories;
   
   		  	if(salon.all_gender=='1')
   		  		$('#all_gender_chk').prop('checked',true);
   		  	if(salon.men=='1')
   		  		$('#men_chk').prop('checked',true);
   		  	if(salon.women=='1')
   		  		$('#women_chk').prop('checked',true);
   		  	if(salon.kids=='1')
   		  		$('#kids_chk').prop('checked',true);
   
   			var cate_str='';
   		  	$.each(categories,function(k,v){
   		  		cate_str+='<div class="cate_sec" onclick="show_salon_cate_detail(\''+sid+'\', \''+v.id+'\')">';
   		  			
   		  			if(v.image=='')
   		  				cate_str+='<img src="{{asset("public/imgs/'+v.image+'")}}" style="width:90px"">';
   		  			else
   		  				cate_str+='<img src="{{asset("public/imgs/placeholder-img.jpg")}}" style="width:90px"">';
   
   		  			cate_str+='<br><p>'+v.name+'</p>';
   
   		  			
   		  		cate_str+='</div>';
   
   		  	});

   		  	if(team!='' && team.length>0){
   		  		var team_str='';
   		  		$.each(team,function(k,v){
   		  			team_str+="<div style='background-color:#efefef	'>";
   		  				team_str+="<div>";
   		  					if(v.image=='')
		   		  				team_str+='<img src="{{asset("public/imgs/team/'+v.image+'")}}" style="width:90px"">';
		   		  			else
		   		  				team_str+='<img src="{{asset("public/imgs/placeholder-img.jpg")}}" style="width:90px"">';
   		  				team_str+="</div>";
   		  				team_str+="<div>";
   		  					team_str+="<p>"+v.member+"</p>";
   		  				team_str+="</div>";
   		  				team_str+="<div>";
   		  					team_str+="<p>"+v.bio+"</p>";
   		  				team_str+="</div>";
   		  				team_str+="<div>";
   		  					team_str+='<p><span onclick="edit_team_member(\''+v.id+'\')">Edit</span> &nbsp; <span onclick="delete_team_member(\''+v.id+'\')">Delete</span></p>';
   		  				team_str+="</div>";
   		  			team_str+="</div>";
   		  		});

   		  		$('.team_mem_lst_sec').html(team_str);
   		  	}
   
   		  	$('.salon_cate_sec').html(cate_str);
   		  	$('#gen_note_txt').val(salon.note);
   
   		  	$('.salon_serv_for_sec,.salon_cate_sec,.salon_note_sec,.team_mem_sec,.visual_sec').show();
   		  }
   		  if(r.status=='ERROR')
   		  {
   		    alert('Something went wrong. Please contact');
   		  }
   		}
   	});
   	$('#template_id').val(sid);
   }
   
   function delete_salon(sid){
   	if(!confirm('Are you sure to delete Salon?'))return false;
   
   	$.ajax({
   		url:"{{route('salon_ajx')}}",
   		type:'post',
   		data:{'act':'delete_salon','sid':sid, '_token' : '{{ csrf_token() }}'},
   		dataType:'json',
   		success: function(r)
   		{
   		  if(r.status=='SUCCESS')
   		  { 
   		  	alert('Removed');
   		  	location.reload();
   		  }
   		  if(r.status=='ERROR')
   		  {
   		    alert('Something went wrong. Please contact');
   		  }
   		}
   	})
   
   }
   
   function edit_salon(sid){
   	if(sid!=''){
   		$.ajax({
   			url:"{{route('salon_ajx')}}",
   			type:'post',
   			data:{'act':'get_salon','sid':sid, '_token' : '{{ csrf_token() }}'},
   			dataType:'json',
   			success: function(r)
   			{
   			  if(r.status=='SUCCESS')
   			  { 
   			  	$('#sid').val(sid);
   			  	$('#salon_act').val('update');
   			  	$('#salon_name').val(r.salon_name);
   			  	$('#salon_street').val(r.street);
   			  	$('#salon_number').val(r.number);
   			  	$('#salon_postal_code').val(r.postal_code);
   			  	$('#salon_municipality').val(r.municipality);
   			  	$('#salon_province').val(r.province);
   
   			  	$('html, body').animate({
                       scrollTop: $('#frm2').offset().top-30
                   }, 500);
   			  }
   			  if(r.status=='ERROR')
   			  {
   			    alert('Something went wrong. Please contact');
   			  }
   			}
   		})
   	}
   }
   
   function form_validate2(){
   	var salon_name = $('#salon_name').val();
   	var street = $('#salon_street').val();
   	var number = $('#salon_number').val();
   	var postal_code = $('#salon_postal_code').val();
   	var municipality = $('#salon_municipality').val();
   	var province = $('#salon_province').val();
   
   	if($.trim(salon_name)==''){
   		$('#salon_name').focus();
   		return false;
   	}
   	if($.trim(street)==''){
   		$('#salon_street').focus();
   		return false;
   	}
   	if($.trim(number)==''){
   		$('#salon_number').focus();
   		return false;
   	}
   	if($.trim(postal_code)==''){
   		$('#salon_postal_code').focus();
   		return false;
   	}
   	if($.trim(municipality)==''){
   		$('#salon_municipality').focus();
   		return false;
   	}
   	if($.trim(province)==''){
   		$('#salon_province').focus();
   		return false;
   	}
   
   	var frm=new FormData($('#frm2')[0]);
   	// var modal = document.getElementById('myModal');
   	$('#form_submit2').val('Wait..!').attr('disabled',true);
   
   	$.ajax({
   		url:"{{route('salon_add')}}",
   		type:'post',
   		data:frm,
   		contentType: false,
   		processData:false,
   		success: function(r)
   		{
   			$('#form_submit2').val('Save').attr('disabled',false);
   		  if(r=='SUC')
   		  { 
   		  	$('#salon_name').val('');
   			$('#salon_street').val('');
   			$('#salon_number').val('');
   			$('#salon_postal_code').val('');
   			$('#salon_municipality').val('');
   			$('#salon_province').val('');
   		  	alert('Added');				
   		  	location.reload();
   		  }
   		  if(r=='ERR')
   		  {
   		    alert('Something went wrong. Please contact');
   		  }
   		}
   	})
   }
   
   function show_fix_loc_sec(){
   	$('.fix_loc_sec').show();
   	$('.dis_loc_sec').hide();
   }
   
   function show_des_loc_sec(){
   	$('.fix_loc_sec').hide();
   	$('.dis_loc_sec').show();
   }
   
   function edit_fix_bio_frm(){
   	$('.frm_inp1').attr('disabled',false);
   	$('#form_submit1').show();
   }
   
   function form_validate1(){
   	var fixed_name = $('#fixed_name').val();
   	var fixed_bio = $('#fixed_bio').val();
   	if($.trim(fixed_name)==''){
   		$('#fixed_name').focus();
   		return false;
   	}
   	if($.trim(fixed_bio)==''){
   		$('#fixed_bio').focus();
   		return false;
   	}
   	
   	var frm=new FormData($('#frm1')[0]);
   	// var modal = document.getElementById('myModal');
   
   	$.ajax({
   		url:"{{route('fixed_location_update')}}",
   		type:'post',
   		data:frm,
   		contentType: false,
   		processData:false,
   		success: function(r)
   		{
   		  if(r=='SUC')
   		  { 
   		  	alert('Updated');
   		  	$('.frm_inp1').attr('disabled',true);
   			$('#form_submit1').hide();
   		  }
   		  if(r=='ERR')
   		  {
   		    alert('Something went wrong. Please contact');
   		  }
   		}
   	})
   }
   
   
   function edit_frm(){
   	$('.frm_inp').attr('disabled',false);
   	$('#form_submit').show();
   }
   
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
   	/*var password = $('#password').val();	
   	var conf_password	 = $('#conf_password	').val();	*/
   
   
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
   	if($.trim(contact_person_first_name)==''){
   		$('#contact_person_first_name').focus();
   		return false;
   	}
   	if($.trim(email)==''){
   		$('#email').focus();
   		return false;
   	}
   	/*if($.trim(password)==''){
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
   	}*/
   
   	$('#frm').submit();
   }


   /*Desire Location*/

   function edit_des_bio_frm(){
   	$('.des_frm_inp1').attr('disabled',false);
   	$('#des_form_submit1').show();
   }

   function des_form_validate1(){
   	var desire_name = $('#desire_name').val();
   	var desire_bio = $('#desire_bio').val();
   	if($.trim(desire_name)==''){
   		$('#desire_name').focus();
   		return false;
   	}
   	if($.trim(desire_bio)==''){
   		$('#desire_bio').focus();
   		return false;
   	}
   	
   	var frm=new FormData($('#des_frm1')[0]);
   	// var modal = document.getElementById('myModal');
   
   	$.ajax({
   		url:"{{route('desire_location_update')}}",
   		type:'post',
   		data:frm,
   		contentType: false,
   		processData:false,
   		success: function(r)
   		{
   		  if(r=='SUC')
   		  { 
   		  	alert('Updated');
   		  	$('.des_frm_inp1').attr('disabled',true);
   			$('#des_form_submit1').hide();
   		  }
   		  if(r=='ERR')
   		  {
   		    alert('Something went wrong. Please contact');
   		  }
   		}
   	})
   }
   
   
   

</script>
</body>
</html>