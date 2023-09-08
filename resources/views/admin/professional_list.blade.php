@include('admin/_header')

<style type="text/css">
  .font-w_l{font-weight: 600!important}
  .fl-spn{padding: 2px 8px;}
  .fl-spn a{color: inherit;}
  .fl-spn.active{color: #fff;background: #009688;}
  .fl_sec{border-bottom: 2px solid #009688;}
   .mb-2{margin-bottom: 4px;}
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
                            <header class="panel-heading" style="display:flex;justify-content: space-between;align-items:center;">
                                {{$status}} professionals
                                <div class="fl_sec">
                                  <span class="fl-spn  @if($ft=='a') active @endif"><a href="{{route('admin_professionals_list')}}/{{$status}}?ft=a">All</a></span>
                                  <span class="fl-spn  @if($ft=='f') active @endif"><a href="{{route('admin_professionals_list')}}/{{$status}}?ft=f">Fixed</a></span>
                                  <span class="fl-spn  @if($ft=='d') active @endif"><a href="{{route('admin_professionals_list')}}/{{$status}}?ft=d">Desire</a></span>
                                  <span class="fl-spn  @if($ft=='fd') active @endif" ><a href="{{route('admin_professionals_list')}}/{{$status}}?ft=fd">Fixed & Desire</a></span>
                                </div>
                                <span class="tools pull-right">
                                    <a href="{{route('admin_professionals_list')}}/all"><input type="radio" name="pt" @if($status=='all') checked @endif> All</a>
                                    <a href="{{route('admin_professionals_list')}}/approve"><input type="radio" name="pt" @if($status=='approve') checked @endif> Approved</a>
                                    <a href="{{route('admin_professionals_list')}}/pending"><input type="radio" name="pt" @if($status=='pending') checked @endif> Pending</a>
                                </span>
                                <span class="tools pull-right">
                                  <button type="button" class="btn btn-primary" id="send_email_btn" disabled="true">Send Email</button>
                                </span>
                            </header>
                            <table class="table responsive-data-table data-table">
                            <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" id="sel_all_chkb" value="1">
                                </th>
                                <th>
                                    Basic Info
                                </th>
                                <th>
                                    Address
                                </th>
                                <th>
                                    Contact person
                                </th>
                                <th>
                                    Other Detail
                                </th>
                                <th>
                                    Doc. of registration
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                              @php
                                $i=0;
                              @endphp
                              @foreach($professional as $prof)
                                @php
                                  $i++;
                                @endphp
                                <tr>
                                  <!-- <td>{{$i}}</td> -->
                                  <td>
                                    <input type="checkbox" class="sel_prof_chk" value="{{$prof->id}}">
                                  </td>
                                  <td>
                                    <b class="font-w_l">Legal Name: </b>{{ $prof->legal_name }}<br>
                                    <b class="font-w_l">COC</b>: {{ $prof->coc }}<br>
                                    <b class="font-w_l">VAT</b>: {{ $prof->vat }}<br>
                                  </td>
                                  <td>
                                    <b class="font-w_l">Street: </b>{{ $prof->prof_address[0]->street }}<br>
                                    <b class="font-w_l">Number</b>: {{ $prof->prof_address[0]->number }}<br>
                                    <b class="font-w_l">Postal Code</b>: {{ $prof->prof_address[0]->postal }}<br>
                                    <b class="font-w_l">Municipality</b>: {{ $prof->prof_address[0]->municipality }}<br>
                                    <b class="font-w_l">Province</b>: {{ $prof->prof_address[0]->province }}<br>
                                  </td>
                                  <td>
                                    {{ $prof->prof_address[0]->contact_person_first_name }} {{ $prof->prof_address[0]->contact_person_last_name }}<br>
                                    {{ $prof->prof_address[0]->contact_number }}<br>  
                                  </td>
                                  <td>
                                    <b class="font-w_l">Email</b>: {{ $prof->email }} 
                                    @if($prof->email_verified=='NO')
                                    <i class='fa fa-exclamation-circle text-danger' title="Email not verified"></i>
                                    @else
                                    <i class='fa fa-check-circle text-success' title="Email verified"></i>
                                    @endif
                                    <br>  
                                    <b class="font-w_l">Gender</b>: {{ $prof->prof_address[0]->gender }}<br>  
                                    <b class="font-w_l">Past work</b>: {{ $prof->prof_address[0]->insta_link }}<br>  
                                  </td>
                                  <td>
                                    @php
                                    $type='';
                                    @endphp
                                    @if(count($prof->registration_docs)>0)
                                      @foreach($prof->registration_docs as $reg_docs)
                                        
                                        @php
                                          $img_d = $reg_docs->doc;
                                          $v = @get_headers($reg_docs->doc);
                                          if(preg_match("|200|", $v[0])){

                                            $type = pathinfo($reg_docs->doc, PATHINFO_EXTENSION);

                                            if($type=='pdf')
                                                $img_d = URL::to("/").'/public/imgs/docs/pdf_logo.jpg';
                                          }
                                            
                                         @endphp

                                        <img src="{{$img_d}}" onclick="show_preview('{{$reg_docs->doc}}','{{$type}}')" style="width:50px;border:1px solid gray"> &nbsp;
                                      @endforeach
                                    @endif
                                  </td>
                                  <td class="hidden-xs">
                                      @if($prof->status!='approve')
                                      <button class="btn btn-success btn-xs mb-2" type="button" title="Approve" onclick="prof_status('{{ $prof->id }}','approve')"><i class="fa fa-check"></i></button>
                                      @endif

                                      <a target="_blank" class="" href="{{ route('dashboardUsers', ['userId'=>$prof->id ]) }}" ><button class="btn btn-primary btn-xs mb-2" type="button"><i class="fa fa-pencil"></i></button></a>
                                      <button class="btn btn-danger btn-xs  mb-2" type="button" title="Remove" onclick="prof_status('{{ $prof->id }}','remove')"><i class="fa fa-trash-o "></i></button>
                                  </td>
                                </tr>

                              @endforeach


                            </tbody>
                            </table>
                        </section>
                    </div>

                </div>
         </div>

         <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog" style="width:90%">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <!-- <h4 class="modal-title">Prei</h4> -->
              </div>
              <div class="modal-body text-center">
                <img src="" id="doc_prev_img" style="max-width:100%">
                <iframe src="" style="display:none;max-width:100%;width:90%;height:90vh" id="doc_prev_pdf"></iframe>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
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
      $('#sel_all_chkb').on('change',function(){
        if($('#sel_all_chkb').prop('checked')===true){
          $('.sel_prof_chk').prop('checked',true);
        }
        else{
          $('.sel_prof_chk').prop('checked',false);
        }
        chk_em_btn();
      });

      $('.sel_prof_chk').on('change',function(){
        if($(this).prop('checked')===false){
          $('#sel_all_chkb').prop('checked',false);
        }
        else{

          $('.sel_prof_chk').each(function(){
            if($(this).prop('checked')===false){
              $('#sel_all_chkb').prop('checked',false);
            }
          });

        }
        chk_em_btn();
      });

      $('#send_email_btn').on('click',function(){
        let str='';

        $('.sel_prof_chk:checked').each(function(){
          if(str=='')
            str+=$(this).val();
          else
            str+=','+$(this).val();
        });

        if(str!=''){
          window.location.href="{{route('email_template')}}/?pf="+str;
        }
      });

    });

    function chk_em_btn(){
      $('#send_email_btn').prop('disabled',true);

      $('.sel_prof_chk').each(function(){
        if($(this).prop('checked')===true){
          $('#send_email_btn').prop('disabled',false);
          return true;
        }
      });
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