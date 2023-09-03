@include('admin/_header')

<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/admin/js/bootstrap-fileinput-master/css/fileinput.css')}}" />
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
                                Site Setting
                                
                            </header>
                            <!-- <form class="frm1" method="post" action="{{route('save_language_keyword')}}"> -->

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
                              
                            <div class="table responsive-data-table data-table"  style="padding:20px">
                            <!-- <h3>Header</h3> -->
                            
                            <div id="keyword_tb p-3">
                              @php
                                $i=0;
                              @endphp
                              @foreach($settings as $key=>$setting)
                              <form class="frm" action="{{route('update_setting')}}" method="post" style="margin:10px 0;text-align:center;" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ Session::token() }}" />
                                <input type="hidden" name="sid" value="{{$setting->id}}">
                                <input type="hidden" name="key_name" value="{{$setting->key_name}}">

                                @if($setting->key_name == 'site_logo')

                                <div class="row" style="margin:10px 0;">
                                  <div class="col-sm-4">
                                     <label><b>Site Logo</b></label>
                                  </div> 
                                  <div class="col-sm-4">
                                     <div class="file-preview-thumbnails">
                                      <div class="file-preview-frame" style="height:100px">
                                         <img src="{{$setting->value_en}}" style="width:auto;height:80px;">
                                      </div>
                                    </div>
                                  </div> 
                                  <div class="col-sm-4">
                                     <input class="file edit_sec" required name="image" type="file" accept="image/jpeg,image/png"  multiple=false>
                                  </div> 
                                </div>

                                @elseif($setting->key_name == 'footer_logo')

                                <div class="row" style="margin:10px 0;">
                                  <div class="col-sm-4">
                                     <label><b>Footer Logo</b></label>
                                  </div> 
                                  <div class="col-sm-4">
                                     <div class="file-preview-thumbnails">
                                      <div class="file-preview-frame" style="height:100px">
                                         <img src="{{$setting->value_en}}" style="width:auto;height:80px;">
                                      </div>
                                    </div>
                                  </div> 
                                  <div class="col-sm-4">
                                     <input class="file edit_sec" required name="image" type="file" accept="image/jpeg,image/png"  multiple=false>
                                  </div> 
                                </div>

                                @elseif($setting->key_name == 'logo_icon1')

                                <div class="row" style="margin:10px 0;">
                                  <div class="col-sm-4">
                                     <label><b>Page logo icon 1</b></label>
                                     <br>
                                     <span>For Light Backgrounds</span>
                                     <br>
                                     <span>(Image Height 40px)</span>
                                  </div> 
                                  <div class="col-sm-4">
                                     <div class="file-preview-thumbnails">
                                      <div class="file-preview-frame" style="height:100px">
                                         <img src="{{$setting->value_en}}" style="width:auto;height:80px;">
                                      </div>
                                    </div>
                                  </div> 
                                  <div class="col-sm-4">
                                     <input class="file edit_sec" required name="image" type="file" accept="image/jpeg,image/png"  multiple=false>
                                  </div> 
                                </div>
                                
                                @elseif($setting->key_name == 'logo_icon2')

                                <div class="row" style="margin:10px 0;">
                                  <div class="col-sm-4">
                                     <label><b>Page logo icon 2</b></label>
                                     <br>
                                     <span>For Dark Backgrounds</span>
                                     <br>
                                     <span>(Image Height 40px)</span>
                                  </div> 
                                  <div class="col-sm-4">
                                     <div class="file-preview-thumbnails">
                                      <div class="file-preview-frame" style="height:100px">
                                         <img src="{{$setting->value_en}}" style="width:auto;height:80px;">
                                      </div>
                                    </div>
                                  </div> 
                                  <div class="col-sm-4">
                                     <input class="file edit_sec" required name="image" type="file" accept="image/jpeg,image/png"  multiple=false>
                                  </div> 
                                </div>
                                
                                @else

                                @php 
                                $key_name = str_replace('_',' ',$setting->key_name);
                                @endphp
                                <div class="row" style="margin:10px 0;">
                                  <div class="col-sm-4">
                                     <label><b>{{ $key_name }}</b></label>
                                  </div> 
                                  <div class="col-sm-4">
                                     EN - <input type="text" class="form-control item_en_inp" name="item_en" value="{{$setting->value_en}}" >
                                  </div> 
                                  <div class="col-sm-4">
                                     NL - <input type="text" class="form-control item_en_inp" name="item_nl" value="{{$setting->value_nl}}" >
                                  </div> 
                                </div>
                                @endif
                                
                                <div class="text-right" style="margin: 10px;">
                                  <p id="msg_{{$setting->id}}" style="display:none;font-size: 18px;font-weight: bold;color:green;">Updated</p>&nbsp;
                                  <input type="submit" value="Save" id="save_btn_{{$setting->id}}" class="btn btn-success btn-lg save_btn" style="width: 170px;">
                                  <br>
                                  
                                </div>
                              </form>
                              <hr>
                              @endforeach
                              
                            </div>
                            <br>

                            
                            <!-- <div class="text-right">
                              <br>
                                <input type="button" onclick="add_new_row()" value="+ Add New Category" class="btn btn-info add_new_btn">
                            </div> -->
                            </div>
                            
                            <!-- </form> -->
                        </section>
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Modal Tittle</h4> -->
            </div>
            <div class="modal-body">

                Please wait.. <i class="fa fa-refresh"></i>

            </div>
            <div class="modal-footer">
                <!-- <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                <button class="btn btn-success" type="button">Save changes</button> -->
            </div>
        </div>
    </div>
</div>

   @include('admin/_footer')

   <script type="text/javascript" src="{{ URL::asset('public/admin/js/bootstrap-fileinput-master/js/fileinput.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('public/admin/js/file-input-init.js')}}"></script>

    <script type="text/javascript">

    $(document).ready(function(){

      $('.frm').on('submit',function(e){
        e.preventDefault();

        var posturl = "{{route('update_setting')}}";

        var frm = new FormData(this);
        let i = frm.get('sid');

        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = parseInt(((evt.loaded / evt.total) * 100));
                         $(this).find("#progress").width(percentComplete + '%');
                        $(this).find("#progress").html(percentComplete+'%');
                    }
                }, false);
                return xhr;
            },
            type: 'POST',
            url:posturl,
            data: frm,
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function(){

              $('#save_btn_'+i).attr('disabled',true).val('Wait..!');

              /*console.log($(this)[0].find('.save_btn'));*/
              /*$(this).find("#progress").parent().css("display","block");
              $(this).find("#progress").width('0%');
              $(this).find('#uploadStatus').html("<div class='spinner-border' ></div>");*/
            },
            error:function(){
              $('#save_btn_'+i).attr('disabled',false).val('Save');
              alert('Not Updated');
              /*$(this).find('#uploadStatus').html('<p style="color:#EA4335;">File upload failed, please try again.</p>');*/
            },
            success: function(resp){
              $('#save_btn_'+i).attr('disabled',false).val('Save');
              $('#msg_'+i).html('Updated').css('display','inline-block');
              setTimeout(function(){
                $('#msg_'+i).html('Updated').hide();
              },5000);
            }
        });

      })
    });

    
    </script>
</body>
</html>