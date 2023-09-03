@include('admin/_header')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/admin/js/bootstrap-fileinput-master/css/fileinput.css')}}" />
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
            <!--state overview start-->
            <div class="row ">
               <div class="col-lg-12">
                  <section class="panel">
                     <header class="panel-heading">
                        Add new Professional
                     </header>
                     <div class="panel-body">
                        <form role="form" action="" method="post" onsubmit="return validate_frm();">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Legal name</label>
                                      <input type="text" class="form-control" id="legalname" name="legalname" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>COC number</label>
                                      <input type="text" class="form-control" id="coc_number" name='coc_number' required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>VAT number</label>
                                      <input type="text" class="form-control" id="vat_number" name="vat_number" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Address <span class="small">(Linked to coc and vat number)</span></h4>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Street</label>
                                      <input type="text" class="form-control" id="street" name="street" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Number</label>
                                      <input type="text" class="form-control" id="add_number" name="add_number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Postal code</label>
                                      <input type="text" class="form-control" id="postal" name="postal" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Province</label>
                                      <select class="form-control" id="province" name="province" required>
                                        <option value="Test">Test</option>
                                      </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Municipality</label>
                                      <select class="form-control" id="municipality" name="municipality" required>
                                        <option value="Test">Test</option>
                                      </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Contact Person First Name</label>
                                      <input type="text" class="form-control" id="contact_person_first_name" name="contact_person_first_name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Contact Person Last Name</label>
                                      <input type="text" class="form-control" id="contact_person_last_name" name="contact_person_last_name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Gender</label>
                                      <select class="form-control" id="gender" name="gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Contact Number</label>
                                      <input type="text" class="form-control" id="contact_number" name="contact_number">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Provide examples of past work</h4>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Instagram Links</label>
                                      <input type="text" class="form-control" id="insta_link" name="insta_link">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Facebook Link</label>
                                      <input type="text" class="form-control" id="facebook_link" name="facebook_link">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Youtube Link</label>
                                      <input type="text" class="form-control" id="youtube_link" name="youtube_link">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Twitter Link</label>
                                      <input type="text" class="form-control" id="twitter_link" name="twitter_link">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Any other</label>
                                      <input type="text" class="form-control" id="website_link" name="website_link">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-lg-12 col-sm-12 control-label">Documentation of registration in Chamber of Commerce</label>
                                        <div class="col-lg-12">
                                            <input id="file-4" class="file" type="file" multiple=false name="registration_doc" required accept='image/jpeg,image/png'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Password</label>
                                      <input type="text" class="form-control" id="password" name="password" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Repeat Password</label>
                                      <input type="text" class="form-control" id="rep_password" name="rep_password" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p id="pas_msg" style="color:red" class="small"></p>
                                </div>
                            </div>
                           
                          
                           <button type="submit" class="btn btn-info">Submit</button>
                        </form>
                     </div>
                  </section>
               </div>
            </div>
            <!--state overview end-->
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
   @include('admin/_footer')

   <script type="text/javascript" src="{{ URL::asset('public/admin/js/bootstrap-fileinput-master/js/fileinput.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('public/admin/js/file-input-init.js')}}"></script>

    <script type="text/javascript">
    $(document).ready(function(){
        $('#rep_password, #rep_password').on('keypress change',function(){
            $('#pas_msg').text('');
        });
    });

    function validate_frm(){
        var p = $('#password').val();
        var rp = $('#rep_password').val();
        if(p!=rp){
            $('#pas_msg').text('Password doesn\'t match.');
            return false;
        }
    }
    </script>
</body>
</html>