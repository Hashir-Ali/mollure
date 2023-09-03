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
                                Provinces
                                <span class="tools pull-right">
                                    <input type="text" id="search_inp" value="" class="form-control" placeholder="Search">
                                </span>
                            </header>
                            <form class="frm1" method="post" action="{{route('save_province')}}">
                              <input type="hidden" name="_token" value="{{ Session::token() }}" />
                            <table class="table responsive-data-table data-table">
                            <thead>
                            <tr>
                                <th>
                                    English
                                </th>
                                <th>
                                    Dutch
                                </th>
                                <th>
                                    
                                </th>
                            </tr>
                            </thead>
                            <tbody id="keyword_tb">
                              @php
                                $i=0;
                              @endphp
                              @foreach($provinces as $key=>$province)
                                
                                <tr id="tr_{{$province->id}}">
                                  <td>
                                    <input type="hidden" name="ids[]" value='{{$province->id}}' readonly>
                                    <input type="text" name="name[]" class="form-control " value="{{$province->name}}">
                                  </td>
                                  <td>
                                    <input type="text" name="nl_name[]" class="form-control" value="{{$province->nl_name}}">
                                  </td>
                                  
                                  <td>
                                    <button class="btn btn-danger btn-xs" type="button" title="Remove" onclick="update_status('{{$province->id}}','remove')"><i class="fa fa-trash-o "></i></button>
                                  </td>
                                </tr>

                              @endforeach

                            </tbody>
                            <tfoot>
                              <tr>
                                <td colspan="3" class="text-right">
                                  <input type="button" onclick="add_new_row()" value="+ Add New" class="btn btn-primary">
                                  <br>
                                </td>
                              </tr>
                            </tfoot>
                            </table>
                            <div class="text-center" style="margin: 10px;">
                              <input type="button" value="Save" class="btn btn-success btn-lg" onclick="save_detail()" style="width: 170px;">
                              <br>
                            </div>
                            </form>
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
   @include('admin/_footer')

   <script type="text/javascript" src="{{ URL::asset('public/admin/js/bootstrap-fileinput-master/js/fileinput.js')}}"></script>
    <script type="text/javascript" src="{{ URL::asset('public/admin/js/file-input-init.js')}}"></script>

    <script type="text/javascript">

    $(document).ready(function(){
      $('#search_inp').on('keyup blur change',function(){
          let sr_str = $(this).val();
          if(sr_str.length>2){
            $('#keyword_tb').find('tr').hide();
            sr_str = sr_str.toLowerCase();

            $('#keyword_tb').find('input').each(function(k,v){
              let vl = $(this).val();
              vl = vl.toLowerCase();
              if(vl.indexOf(sr_str)>=0){
                $(this).closest('tr').show();
              }
            });
          }
          else{
            $('#keyword_tb').find('tr').show();
          }
      });
    });

    function add_new_row(){
      var str='<tr>';
      str+='<td><input type="text" name="namen[]" class="form-control english_v"></td>';
      str+='<td><input type="text" name="nl_namen[]" class="form-control dutch_v"></td>';
      
      str+='</tr>';

      $('#keyword_tb').append(str);
    }

    function save_detail(){
      var flg=0;
      /*$('.english_v').each(function(){
        if($(this).val()!=''){
          var eng = $(this).closest('tr').find('.munic_v').val();
          if($.trim(eng)==''){
            $(this).closest('tr').find('.munic_v').focus();
            flg=1;
            return false;
          }
        }
      });*/

      if(flg=='0'){
        $('.frm1').submit();
      }
    }


    function update_status(id,sts){

      if(!confirm('Are you sure to remove?'))return false;

       $.ajax({
        url:'{{route("admin_common_ajx")}}',
        type:'post',
        dataType:'json',
        data:{'act':'remove_province','id':id,'sts':sts,'_token' : '{{ csrf_token() }}'},
        success:function(r){
          if(r.status=='SUCCESS'){
            $("#tr_"+id).remove();
          }
          else{
            alert("Something went wrong.");
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