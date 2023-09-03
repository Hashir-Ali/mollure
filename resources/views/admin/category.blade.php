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
                                Categories
                                
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
                            
                            <div style="display: flex;justify-content: space-between;">
                                <div style="min-width:180px;width:24%;margin:5px 5px;text-align:center;">
                                    <b>English</b>
                                </div>
                                <div style="min-width:180px;width:24%;margin:5px 5px;text-align:center;">
                                    <b>Dutch</b>
                                </div>
                                <div style="min-width:180px;width:24%;margin:5px 5px;text-align:center;">
                                    <b>Icon</b>
                                </div>
                                <div style="min-width:180px;width:24%;margin:5px 5px;">
                                    
                                </div>
                            </div>
                            
                            <div id="keyword_tb">
                              @php
                                $i=0;
                              @endphp
                              @foreach($cates as $key=>$cate)
                                
                                <form class="frm" action="{{route('update_cate')}}" method="post" style="margin:10px 0;text-align:center;background: #f7f7f7fa;" enctype="multipart/form-data">
                                  <input type="hidden" name="_token" value="{{ Session::token() }}" />
                                  <input type="hidden" name="cid" value="{{$cate->id}}" />
                                  <input type="hidden" name="act" value="update_cate" />
                                  <div style="display: flex;justify-content: space-between;">
                                    <div style="min-width:180px;width:24%;margin:5px 5px;text-align:center;">
                                        <input type="text" class="form-control cate_name" name="cate_name" value="{{$cate->name}}" readonly>
                                    </div>
                                    <div style="min-width:180px;width:24%;margin:5px 5px;text-align:center;">
                                        <input type="text" class="form-control nl_name" name="nl_name" value="{{$cate->nl_name}}" readonly>
                                    </div>
                                    <div style="min-width:180px;width:24%;margin:5px 5px;text-align:center;">
                                        <img src="{{asset('public/imgs/category/')}}/{{$cate->image}}" style="height:40px">
                                        <input type="file" name="cate_icon" class="cate_icon" accept="image/png" style="display:none">
                                    </div>
                                    <div style="min-width:180px;width:24%;margin:5px 5px;">
                                        <button style="margin-top:10px;" class="btn btn-primary btn-xs edit_btn" type="button"><i class="fa fa-pencil"></i> Edit</button> &nbsp;
                                        <button style="margin-top:10px;display:none;" class="btn btn-success btn-xs update_btn" type="button">Update</button> &nbsp;
                                        <button style="margin-top:10px;display:none;" class="btn btn-warning btn-xs close_btn" type="button">&nbsp;<i class="fa fa-times"></i>&nbsp;</button>
                                        &nbsp;&nbsp;
                                        <button style="margin-top:10px;" class="btn btn-danger btn-xs remove_btn" onclick="remove_cate('{{$cate->id}}')" type="button"><i class="fa fa-times"></i> Remove</button>
                                    </div>
                                  </div>
                                </form>


                              @endforeach

                            </div>
                            <div class="text-right">
                              <br>
                                <input type="button" onclick="add_new_row()" value="+ Add New Category" class="btn btn-info add_new_btn">
                            </div>
                            </div>
                            <div class="text-center" style="margin: 10px;">
                              <input type="button" value="Save" class="btn btn-success btn-lg save_btn" onclick="save_detail()" style="width: 170px;display:none;">
                              <br>
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