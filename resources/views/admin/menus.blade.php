@include('admin/_header')

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
                                Menus
                                
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
                            <h3>Header</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <b>English</b>
                                </div>
                                <div class="col-sm-6">
                                    <b>Dutch</b>
                                </div>
                            </div>
                            
                            <div id="keyword_tb">

                              <form class="frm" action="{{route('update_menu')}}" method="post" style="margin:10px 0;text-align:center;background: #f7f7f7fa;" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ Session::token() }}" />
                              @php
                                $i=0;
                              @endphp
                              @foreach($menus_header as $key=>$menu)
                                <input type="hidden" name="mid[]" value="{{$menu->id}}">
                                <div class="row" style="margin:10px 0;">
                                  <div class="col-sm-6">
                                     <input type="text" class="form-control item_en_inp" name="item_en[]" value="{{$menu->item_en}}" >
                                  </div> 
                                  <div class="col-sm-6">
                                     <input type="text" class="form-control item_nl_inp" name="item_nl[]" value="{{$menu->item_nl}}">
                                  </div> 
                                </div>
                              
                              @endforeach
                              <div class="text-center" style="margin: 10px;">
                                <input type="button" value="Save" class="btn btn-success btn-lg save_btn" onclick="save_detail('frm')" style="width: 170px;">
                                <br>
                              </div>
                              </form>
                            </div>
                            <br>

                            @if(count($menus_footer)>0)

                            <h3>Footer</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <b>English</b>
                                </div>
                                <div class="col-sm-6">
                                    <b>Dutch</b>
                                </div>
                            </div>
                            
                            <div id="keyword_tb">

                              <form class="frm1" action="{{route('update_menu')}}" method="post" style="margin:10px 0;text-align:center;background: #f7f7f7fa;" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ Session::token() }}" />
                              @php
                                $i=0;
                              @endphp
                              @foreach($menus_footer as $key=>$menu)
                                <input type="hidden" name="mid[]" value="{{$menu->id}}">
                                <div class="row" style="margin:10px 0;">
                                  <div class="col-sm-6">
                                     <input type="text" class="form-control item_en_inp" name="item_en[]" value="{{$menu->item_en}}">
                                  </div> 
                                  <div class="col-sm-6">
                                     <input type="text" class="form-control item_nl_inp" name="item_nl[]" value="{{$menu->item_nl}}">
                                  </div> 
                                </div>
                              
                              @endforeach

                              <div class="text-center" style="margin: 10px;">
                                <input type="button" value="Save" class="btn btn-success btn-lg save_btn" onclick="save_detail('frm1')" style="width: 170px;">
                                <br>
                              </div>
                              </form>
                            </div>
                            @endif
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

   <form action="{{route('update_cate')}}" method="post" id="frm_del">
    <input type="hidden" name="_token" value="{{ Session::token() }}" />
    <input type="hidden" name="f_cate_id" id="f_cate_id">
    <input type="hidden" name="act" value="remove_cate">
   </form>

   @include('admin/_footer')

   <script type="text/javascript" src="{{ URL::asset('public/admin/js/bootstrap-fileinput-master/js/fileinput.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('public/admin/js/file-input-init.js')}}"></script>

    <script type="text/javascript">

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

    function save_detail(frm){
      var fl=0;
      if(frm=='frm'){
        $('.frm').find('.item_nl_inp').each(function(){
          if($.trim($(this).val())==''){
            $(this).val('').focus();
            fl=1;
            return false;
          }
        });
      }
      else if(frm=='frm1'){
        $('.frm1').find('.item_nl_inp').each(function(){
          if($.trim($(this).val())==''){
            $(this).val('').focus();
            fl=1;
            return false;
          }
        });
      }

      if(fl==0){
        $('.'+frm).submit();
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