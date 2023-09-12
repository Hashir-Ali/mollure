@include('admin/_header')
<!-- <link href="{{ URL::asset('public/admin/js/summernote/dist/summernote.css')}}" rel="stylesheet"> -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/admin/js/bootstrap-fileinput-master/css/fileinput.css')}}" />


<link href="{{url::asset('public/admin/css/select2.css')}}" rel="stylesheet">
<link href="{{url::asset('public/admin/css/select2-bootstrap.css')}}" rel="stylesheet">
<style type="text/css">
  .font-w_l{font-weight: 600!important}
</style>
<body class="sticky-header">
   <section>
      <!-- sidebar left start-->
      @include('admin/_sidebar')
      <!-- sidebar left end-->
      <!-- body content start-->
      <div class="body-content" >
         <!-- header section start-->
         @include('admin/_top_header')
         <!-- header section end-->
         <!--body wrapper start-->
         <div class="wrapper">
            <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                            <header class="panel-heading ">
                                Email Template
                            </header>
                            

                            <div>
                              <form class="form-inline text-center" role="form" method="get" action="{{route('email_template')}}">
                                <?php
                                if(isset($_GET['pf'])){
                                  // foreach ($_GET as $key => $value) {
                                    echo '<input type="hidden" name="pf" value="'.$_GET['pf'].'">';
                                  // }
                                }
                                ?>
                                
                                <div class="form-group">
                                    <select class="form-control" name="temp" required> 
                                      <option value="">Select Template</option>
                                      <option value="verify_email_ENG" @if($temp=='verify_email_ENG') selected @endif>Verify Email ENG</option>
                                      <option value="verify_email_NL" @if($temp=='verify_email_NL') selected @endif>Verify Email NL</option>
                                      <option value="emailverified_ENG" @if($temp=='emailverified_ENG') selected @endif>Email Verified ENG</option>
                                      <option value="emailverified_NL" @if($temp=='emailverified_NL') selected @endif>Email Verified NL</option>
                                      <option value="step2_validated_ENG" @if($temp=='step2_validated_ENG') selected @endif>Step2 Validated ENG</option>
                                      <option value="step2_rejected_ENG" @if($temp=='step2_rejected_ENG') selected @endif>Step2 Rejected ENG</option>
                                      <option value="step2_validated_NL" @if($temp=='step2_validated_NL') selected @endif>Step2 Validated NL</option>
                                      <option value="step2_rejected_NL" @if($temp=='step2_rejected_NL') selected @endif>Step2 Rejected NL</option>
                                      <option value="static" @if($temp=='static') selected @endif>Static</option>
                                      <option value="forgot_password_eng" @if($temp=='forgot_password_eng') selected @endif>Forgot Password ENG</option>
                                      <option value="forgot_password_nl" @if($temp=='forgot_password_nl') selected @endif>Forgot Password NL</option>
                                      <option value="password_recovery_eng" @if($temp=='password_recovery_eng') selected @endif>Password Recovery ENG</option>
                                      <option value="password_recovery_nl" @if($temp=='password_recovery_nl') selected @endif>Password Recovery NL</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success">Show</button>
                              </form>
                            </div>

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
                             <div class="alert alert-success fw-bold text-center" role="alert">
                                Your Detail has beed updated.
                             </div>
                            @endif
                              
                            
                            <div class="text-center" style="margin: 10px;">
                              <input type="button" value="Save" class="btn btn-success btn-lg save_btn" onclick="save_detail()" style="width: 170px;display:none;">
                              <br>
                            </div>
                            <!-- </form> -->
                        </section>

                        @if($data==1)

                        @foreach($email_temp as $key=>$pg_dt)
                        <section class="panel">
                          <form class="frm" method="post" action="{{route('update_email_template')}}" enctype="multipart/form-data">
                            <input type="hidden" name="_token" id="_token" value="{{ Session::token() }}" />
                            <input type="hidden" name="tid" value="{{$pg_dt->id}}" />
                            <input type="hidden" name="act" id="act" value="update" />
                            <input type="hidden" name="template" value="{{$temp}}" />

                            <div class="row">
                              <div class="col-sm-12 col-md-12">
                                <header class="panel-heading ">
                                  @if($temp=='verify_email_NL')
                                    Verify Email NL
                                  @elseif($temp=='verify_email_ENG')
                                    Verify Email ENG
                                  @elseif($temp=='emailverified_ENG')
                                    Email Verified ENG
                                  @elseif($temp=='emailverified_NL')
                                    Email Verified NL
                                  @elseif($temp=='static')
                                    Static Email
                                  @elseif($temp=='forgot_password_eng')
                                    Forgot Password Email ENG
                                  @elseif($temp=='forgot_password_nl')
                                    Forgot Password Email NL
                                  @elseif($temp=='password_recovery_eng')
                                    Password Recovery Email ENG
                                  @elseif($temp=='password_recovery_nl')
                                    Password Recovery Email NL
                                  @endif
                                </header>
                                <div class="panel-body">
                                  <div class="form-group">
                                    <textarea  class="summernote" name="msg" id="msg">{!! $pg_dt->msg !!}</textarea>
                                  </div>
                                  <div class="form-group m-b-20 row">
                                      <label class="col-sm-2 control-label col-lg-2" >Email Subject</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" id="subject" name="subject" value="{!! $pg_dt->subject !!}" required>
                                      </div>
                                  </div>
                                  <div class="form-group m-b-20 row">
                                      <label class="col-sm-2 control-label col-lg-2" >Professional <span style="display:block;font-size:12px">If Send Emails</span></label>
                                      <div class="col-lg-10">
                                          <select class="form-control select2-multiple" id="professional" multiple name="professional[]">
                                            @foreach($professionals as $prof)
                                            @if(in_array($prof->id,$pf_ar))
                                              <option selected value="{{$prof->id}}">{{$prof->legal_name}} - {{$prof->email}} ({{$prof->preferred_lang}})</option>
                                            @else  
                                            <option value="{{$prof->id}}">{{$prof->legal_name}} - {{$prof->email}} ({{$prof->preferred_lang}})</option>
                                            @endif
                                            @endforeach
                                            
                                          </select>

                                          <?php
                                          if(isset($_GET['pf']) and $_GET['pf']!=''){

                                          }
                                          ?>
                                          <div class="mt-2">
                                            
                                          </div>
                                      </div>
                                  </div>
                                  <div class="more_prof">
                                    @if(isset($_GET['eml']) && $_GET['eml']!='')
                                      <div class="form-group m-b-20 row" id="more_prof_000">
                                        <div class="col-lg-8">
                                          <input type="text" class="form-control prof_emails" placeholder="Email address" name="prof_emails[]" value="{{$_GET['eml']}}">
                                        </div>
                                        <div class="col-lg-2">
                                          
                                        </div>
                                      </div>
                                    @endif
                                  </div>

                                  @if($temp=='static')
                                  <div class="text-right">
                                    <input type="button" onclick="add_new_row()" value="+ Add Email" class="btn btn-info add_new_btn">
                                  </div>
                                  @endif
                                  <!-- <div class="form-group m-b-20 row">
                                      <label class="col-sm-2 control-label col-lg-2" >From Name</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" value="{!! $pg_dt->from_name !!}" id="from_name" name="from_name" required>
                                      </div>
                                  </div> -->
                                </div>
                              </div>
                             
                            </div>
                          <div class="text-center">
                            <button type="button" onclick="show_preview()" class="btn btn-primary btn-lg edit_sec">Email Preview</button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            
                            @if($temp!='static')
                              <button type="button" onclick="save_template()" class="btn btn-success btn-lg edit_sec">Save as Template</button>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            @endif

                            <button type="button" id="send_mail_btn" onclick="send_manual_mail()" class="btn btn-primary btn-lg edit_sec">Send Email</button>
                          </div>

                          @if($temp!='static')
                          <div class="container">
                            <div class="m-t-20 bg-dark" style="padding:10px">
                              <label>Short Codes</label>
                              <ul>
                                <li>Professional Email : &nbsp; ##pro_email##</li>
                                <li>Professional Legal Name : &nbsp; ##pro_legal_name##</li>
                                <li>Professional (Fixed or Desire or Legal) Name or Professional : &nbsp; ##pro_fx_ds_lg_name##</li>
                                <li>Professional (Fixed or Desire) Name or Professional Name : &nbsp; ##pro_fx_ds_name##</li>
                                <li>Contact Person First Name : &nbsp; ##contact_person_first_name##</li>
                                <li>Contact Person Last Name : &nbsp; ##contact_person_last_name##</li>
                                <li>Professional Phone : &nbsp; ##pro_phone##</li>
                                <li>Professional COC : &nbsp; ##pro_coc##</li>
                                <li>Professional VAT : &nbsp; ##pro_vat##</li>
                                <li>Email Verify Button : &nbsp; ##email_verify_button##</li>
                              </ul>
                            </div>
                          </div>
                          @endif

                          <div class="" style="clear:both"></div>
                          </form>
                        </section>
                        @endforeach

                        @endif

                        <!-- <section class="panel">
                          <div class="panel-body">
                            <div class="text-right">
                              <input type="button" onclick="add_new_row()" value="+ Add New Section" class="btn btn-info add_new_btn">
                            </div>
                          </div>
                        </section> -->

                    </div>

                </div>
         </div>

        
         <!--body wrapper end-->
         <!--footer section start-->
         <footer>
            <?=date('Y')?> Mollure
         </footer>
         <!--footer section end-->
      </div>
      <!-- body content end-->
   </section>
   <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog" style="width:90%">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <!-- <h4 class="modal-title">Prei</h4> -->
          </div>
          <div class="modal-body">
            <div class="data_sec">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

   @include('admin/_footer')

   <script type="text/javascript" src="{{ URL::asset('public/admin/js/bootstrap-fileinput-master/js/fileinput.js')}}"></script>
    <!-- <script src="{{ URL::asset('public/admin/js/summernote/dist/summernote.min.js')}}"></script> -->
    <script src="{{ URL::asset('public/admin/tinymce/tinymce.min.js')}}"></script>
    <script src="{{ URL::asset('public/admin/js/select2.js')}}"></script>
    

    <script type="text/javascript">

    jQuery(document).ready(function(){

      $('.select2-multiple').select2({
          placeholder:'Select Professionals'
      });
        
        tinymce.init({
          selector:'textarea.summernote',
          plugins: [
          'advlist autolink lists link image charmap print preview hr anchor pagebreak',
          'searchreplace wordcount visualblocks visualchars code fullscreen',
          'insertdatetime media nonbreaking save table contextmenu directionality',
          'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        })
    });

    function save_template(){
      $('#act').val('update');
      $('.frm').submit();
    }

    function show_preview(){
      //console.log($('#msg').val());
      tinyMCE.triggerSave();
      var frm = $('.frm').serialize();
      $.ajax({
        url:'{{route("preview_manual_mail")}}',
        type:'post',
        data:frm,
        success:function(r){
          $('.data_sec').html(r);
          $('#myModal').modal('show');
        }
      })
    }

    function send_manual_mail(){
      tinyMCE.triggerSave();

      if($.trim($('#subject').val())==''){
        alert('Please add Subject of email to send emails');
        return false;
      }

      var is_prof_emails = 0;
      if($('.prof_emails').length>0){
        $('.prof_emails').each(function(){
          if($.trim($(this).val())!=''){
            is_prof_emails = 1;
          }
        })
      }

      if($.trim($('#professional').val())=='' && is_prof_emails==0){
        alert('Please select Professionals to send emails');
        return false;
      }

      if(!confirm('Are you sure to send emails to selected professionals?'))return false;

      var frm = $('.frm').serialize();
      $.ajax({
        url:"{{route('send_manual_mail')}}",
        type:'post',
        data:frm,
        beforeSend:function(){
          $('#send_mail_btn').html('<img src="{{ URL::asset("public/admin/img/select2-spinner.gif") }}">');
          $('body').css({'opacity':'0.5','pointer-events':'none','cursor':'none'});
        },
        success:function(res){
          // var res = $.parseJSON(res);

          $('#send_mail_btn').html('Send Email');
            $('body').css({'opacity':'1','pointer-events':'all','cursor':'auto'});

          if(res.status=='SUCCESS'){
            alert('Mail Sent');
            
          }else{
            alert('Something went wrong.');
          }
        },
        error:function(r){
          $('#send_mail_btn').html('Send Email');
          $('body').css({'opacity':'1','pointer-events':'all','cursor':'auto'});
          alert('Something went wrong.');
        }
      });
    }
    var i=0;
    function add_new_row(){
      var str='';
      str+='<div class="form-group m-b-20 row" id="more_prof_'+i+'"><div class="col-lg-8"><input type="text" class="form-control prof_emails" placeholder="Email address" name="prof_emails[]"></div><div class="col-lg-2"><span style="color:red;font-size:20px;cursor:pointer" onclick="remove_more_prof(\''+i+'\')">&times;</span></div></div>';  

      $('.more_prof').append(str);
    }

    function remove_more_prof(i){
      $('#more_prof_'+i).remove();
    }
    </script>
</body>
</html>