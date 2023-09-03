@include('admin/_header')
<!-- <link href="{{ URL::asset('public/admin/js/summernote/dist/summernote.css')}}" rel="stylesheet"> -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('public/admin/js/bootstrap-fileinput-master/css/fileinput.css')}}" />
<!-- <link href="{{ URL::asset('public/admin/js/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="js/bootstrap-wysihtml5/wysiwyg-color.css" /> -->
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
                                Page Content
                            </header>
                            

                            <div>
                              <form class="form-inline text-center" role="form" method="get" action="{{route('page_content')}}">
                                <div class="form-group">
                                    <select class="form-control" name="page" id="page_sel" required> 
                                      <option value="">Select Page</option>
                                      <option value="home" @if($page=='home') selected @endif>Home Page</option>
                                      <option value="more-mollure" @if($page=='more-mollure') selected @endif>More About Mollure</option>
                                      <option value="about-us" @if($page=='about-us') selected @endif>About Us</option>
                                      <option value="how-it-works" @if($page=='how-it-works') selected @endif>HOW IT WORKS</option>
                                      <option value="terms-conditions" @if($page=='terms-conditions') selected @endif>Terms & Conditions</option>
                                      <option value="register" @if($page=='register') selected @endif>Register</option>
                                      <option value="login" @if($page=='login') selected @endif>Login</option>
                                      <option value="verify_email" @if($page=='verify_email') selected @endif>Email Verify Page</option>
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

                        <section class="panel">
                          <form class="frm1" method="post" action="{{route('update_content')}}" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ Session::token() }}" />
                            <input type="hidden" name="act" value="meta" />
                            <input type="hidden" name="page" value="{{$page}}" />

                            <div class="row">
                              <div class="col-sm-12 col-md-12">
                                <h4 style="padding-left:20px">Page Meta</h4>
                              </div>
                              <div class="col-sm-6 col-md-6">
                                <header class="panel-heading ">
                                    Title - EN
                                </header>
                                <div class="panel-body">
                                    <textarea  name="title_en" required class="form-control">@if($data1==1) {{ $page_meta[0]->title_en }} @endif</textarea>
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-6">
                                <header class="panel-heading ">
                                    Title - NL
                                </header>
                                <div class="panel-body">
                                    <textarea name="title_nl" required class="form-control">@if($data1==1) {{ $page_meta[0]->title_nl }} @endif</textarea>
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-6">
                                <header class="panel-heading ">
                                    Meta title - EN
                                </header>
                                <div class="panel-body">
                                    <textarea  name="meta_title_en" class="form-control">@if($data1==1) {{ $page_meta[0]->meta_title_en }} @endif</textarea>
                                </div>
                              </div>
                              <div class="col-sm-6 col-md-6">
                                <header class="panel-heading ">
                                    Meta title - NL
                                </header>
                                <div class="panel-body">
                                    <textarea name="meta_title_nl" class="form-control">@if($data1==1) {{ $page_meta[0]->meta_title_nl }} @endif</textarea>
                                </div>
                              </div>
                            </div>

                          
                       
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg edit_sec">&nbsp; Save &nbsp;</button>
                          </div>
                          <div class="text-center" style="clear:both">
                            <br>
                          </div>
                          </form>
                        </section>

                        @if($data==1)

                        @foreach($page_content as $key=>$pg_dt)
                        <section class="panel">
                          <form class="frm" method="post" action="{{route('update_content')}}" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ Session::token() }}" />
                            <input type="hidden" name="cid" value="{{$pg_dt->id}}" />
                            <input type="hidden" name="act" value="content" />

                            <div class="row">
                              <div class="col-sm-6 col-md-6">
                                <header class="panel-heading ">
                              English - Section {{$key+1}}
                              <!-- <span style="float:right;" class="btn btn-default bg-warning"><i class="fa fa-pencil"></i> Edit</span>
                              <div style="clear:both;"></div> -->
                          </header>
                          <div class="panel-body">
                              <textarea  class="summernote" name="content_en">{!! $pg_dt->content_en !!}</textarea>
                          </div>
                              </div>
                              <div class="col-sm-6 col-md-6">
                                <header class="panel-heading ">
                              Dutch - Section {{$key+1}}
                          </header>
                          <div class="panel-body">
                              <textarea class="summernote" name="content_nl">{!! $pg_dt->content_nl !!}</textarea>
                          </div>
                              </div>
                            </div>

                            <!-- @if($pg_dt->image!='') -->
                          <div class="panel-body">
                            <div class="row">
                              <div class="col-sm-6">
                                <label>Icon/Image</label>
                                <div class="file-preview-thumbnails">
                                  <div class="file-preview-frame">
                                     <img src="{{asset('public')}}/{{$pg_dt->image}}" style="width:auto;height:160px;">
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <input class="file edit_sec" name="image" type="file" accept="image/jpeg,image/png"  multiple=false>
                              </div>
                            </div>
                          </div>
                          <!-- @endif -->
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg edit_sec">Save</button>
                          </div>
                          <div class="text-center" style="clear:both">
                            <br>
                          </div>
                          </form>

                          @if($pg_dt->get_sub_content && count($pg_dt->get_sub_content)>0)
                          @foreach($pg_dt->get_sub_content as $key1=>$pg_dts)

                          <form class="frm2" method="post" action="{{route('update_content')}}" enctype="multipart/form-data" style="background-color: #fbffe4;margin-bottom:10px">
                            <input type="hidden" name="_token" value="{{ Session::token() }}" />
                            <input type="hidden" name="cid" value="{{$pg_dts->id}}" />
                            <input type="hidden" name="act" value="sub_content" />

                            <div class="row">
                              <div class="col-sm-6 col-md-6">
                                <header class="panel-heading ">
                              English : Sub-Section {{$key1+1}}
                              <!-- <span style="float:right;" class="btn btn-default bg-warning"><i class="fa fa-pencil"></i> Edit</span>
                              <div style="clear:both;"></div> -->
                          </header>
                          <div class="panel-body">
                              <textarea  class="summernote" name="content_en">{!! $pg_dts->content_en !!}</textarea>
                          </div>
                              </div>
                              <div class="col-sm-6 col-md-6">
                                <header class="panel-heading ">
                              Dutch: Sub-Section {{$key1+1}}
                          </header>
                          <div class="panel-body">
                              <textarea class="summernote" name="content_nl">{!! $pg_dts->content_nl !!}</textarea>
                          </div>
                              </div>
                            </div>
                          @if($pg_dts->image!='')  
                          <div class="panel-body">
                            <div class="row">
                              <div class="col-sm-6">
                                <label>Icon/Image</label>
                                <div class="file-preview-thumbnails">
                                  <div class="file-preview-frame" style="height:100px">
                                     <img src="{{asset('public')}}/{{$pg_dts->image}}" style="width:auto;height:80px;">
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <input class="file edit_sec" name="image" type="file" accept="image/jpeg,image/png"  multiple=false>
                              </div>
                            </div>
                          </div>
                          @endif
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg edit_sec">Save</button>
                          </div>
                          <div class="text-center" style="clear:both">
                            <br>
                          </div>
                          </form>
                          @endforeach
                          @endif
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

   @include('admin/_footer')

   <script type="text/javascript" src="{{ URL::asset('public/admin/js/bootstrap-fileinput-master/js/fileinput.js')}}"></script>
    <!--<script src="{{ URL::asset('public/admin/js/summernote/dist/summernote.min.js')}}"></script>-->
    <!--<script src="{{ URL::asset('public/admin/js/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{ URL::asset('public/admin/js/bootstrap-wysihtml5/bootstrap-wysihtml5.js')}}"></script>-->

    <script src="{{ URL::asset('public/admin/tinymce/tinymce.min.js')}}"></script>
    

    <script type="text/javascript">

    tinymce.init({selector:'textarea.summernote',plugins: [
          'advlist autolink lists link image charmap print preview hr anchor pagebreak',
          'searchreplace wordcount visualblocks visualchars code fullscreen',
          'insertdatetime media nonbreaking save table contextmenu directionality',
          'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',})

    /*jQuery(document).ready(function(){
        // $('.summernote').wysihtml5();
        $('.summernote').summernote({
            
            focus:true
            
        });
    });*/

    $(document).ready(function(){
      $('.edit_btn').on('click',function(){
        $(this).closest('.frm').find('.cate_name,.nl_name,.cate_icon').show().prop('readonly',false);
        $(this).siblings('.update_btn, .close_btn').show();
        $(this).hide();
      });

      $('.close_btn').on('click',function(){
        $(this).closest('.frm').find('.cate_name,.nl_name,.cate_icon').prop('readonly',true);
        $(this).closest('.frm').find('.cate_icon').hide();
        $(this).siblings('.update_btn').hide();
        $(this).siblings('.edit_btn').show();
        $(this).hide();
      });

      $('.update_btn').on('click',function(){
        let ctn = $(this).closest('.frm').find('.cate_name').val();
        
        if($.trim(ctn)==''){
          $(this).closest('.frm').find('.cate_name').focus();
          return false;
        }

        let ctn_nl = $(this).closest('.frm').find('.nl_name').val();

        if($.trim(ctn_nl)==''){
          $(this).closest('.frm').find('.nl_name').focus();
          return false;
        }

        $(this).closest('.frm').submit();

      });

    });

    function remove_cate(id){
      if(!confirm('Are you sure to remove this category?'))return false;

      $('#f_cate_id').val(id);
      $('#frm_del').submit();
    }

    function add_new_row(){
      var str='<form class="frm1" action="{{route("update_cate")}}" method="post" style="margin:10px 0;text-align:center;background: #f7f7f7fa;" enctype="multipart/form-data">';
          str+='<input type="hidden" name="_token" value="{{ Session::token() }}" />';
          str+='<input type="hidden" name="act" value="add_cate" />';
          str+='<div style="display: flex;justify-content: space-between;">';
            str+='<div style="min-width:180px;width:24%;margin:5px 5px;text-align:center;">';
              str+='<input type="text" class="form-control cate_name" name="cate_name" value="" placeholder="Category (English)">';
            str+='</div>';
            str+='<div style="min-width:180px;width:24%;margin:5px 5px;text-align:center;">';
              str+='<input type="text" class="form-control nl_name" name="nl_name" value="" placeholder="Category (Dutch)">';
            str+='</div>';
            str+='<div style="min-width:180px;width:24%;margin:5px 5px;text-align:center;">';
              str+='<input type="file" name="cate_icon" class="cate_icon" accept="image/png"  placeholder="Icon">';
            str+='</div>';
            str+='<div style="min-width:180px;width:24%;margin:5px 5px;">';
              str+='<button style="margin-top:10px;" onclick="close_add_frm()" class="btn btn-warning btn-xs close_btn1" type="button">&nbsp;<i class="fa fa-times"></i>&nbsp;</button>';
            str+='</div>';
          str+='</div>';
        str+='</form>';

      $('#keyword_tb').append(str);
      $('.save_btn').show();
      $('.add_new_btn').hide();
    }

    function close_add_frm(){
        $('.frm1').remove();
        $('.save_btn').hide();
      $('.add_new_btn').show();
    }

    function save_detail(){
      var flg=0;
      $('.keywords').each(function(){
        if($(this).val()!=''){
          var eng = $(this).closest('tr').find('.english_v').val();
          if($.trim(eng)==''){
            $(this).closest('tr').find('.english_v').focus();
            flg=1;
            return false;
          }
          var dt = $(this).closest('tr').find('.dutch_v').val();
          if($.trim(dt)==''){
            $(this).closest('tr').find('.dutch_v').focus();
            flg=1;
            return false;
          }
        }
      });

      if(flg=='0'){
        $('.frm1').submit();
      }
    }

    function show_preview(img, type){
      if(type=='pdf'){
        $('#doc_prev_pdf').attr('src',img).show();
        $('#doc_prev_img').hide().attr('src','');
      }else{
        $('#doc_prev_img').attr('src',img).show();
        $('#doc_prev_pdf').hide().attr('src','');
      }
      
      $('#myModal').modal('show');
    }

      function prof_status(prof_id,status){

        if(status=='remove')
        {
          if(!confirm('Are you sure to remove?'))return false;
        }

        $.ajax({
          url:'{{route("admin_ajx")}}',
          type:'post',
          dataType:'json',
          data:{'act':'prof_status','prof_id':prof_id,'status':status,'_token' : '{{ csrf_token() }}'},
          success:function(r){
            if(r.status=='SUCCESS'){
              alert('Updated');
              location.reload();
            }
            else{
              alert('Something went wrong');
            }
          },
          error:function(e){
            alert('Something went wrong');
          }
        })
      }
    </script>
</body>
</html>