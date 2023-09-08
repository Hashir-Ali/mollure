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
                                {{$status}} professionals Templates
                                <span class="tools pull-right">
                                    <a href="{{route('professionals_service_list')}}/all"><input type="radio" name="pt" @if($status=='all') checked @endif> All</a>
                                    <a href="{{route('professionals_service_list')}}/approve"><input type="radio" name="pt" @if($status=='approve') checked @endif> Approved</a>
                                    <a href="{{route('professionals_service_list')}}/pending"><input type="radio" name="pt" @if($status=='pending') checked @endif> Pending</a>
                                </span>
                            </header>
                            <table class="table responsive-data-table data-table">
                            <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Professional
                                </th>
                                <th>
                                    Fixed Template Info
                                </th>
                                <th>
                                    Desire Template Info
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
                                  <td>{{$i}}</td>
                                  <td>
                                    <b class="font-w_l">Legal Name: </b>{{ $prof->legal_name }}<br>
                                  </td>
                                  <td>
                                    <b class="font-w_l">Name: </b>{{ $prof->fixed_name }}<br>
                                    <b class="font-w_l">Bio</b>: {{ $prof->fixed_bio }}<br>
                                    @if($prof->fixed_pic!='')
                                    <img src="{{asset('public/imgs/template/'.$prof->fixed_pic)}}" style="width:55px" class="img1">
                                    @endif
                                    </td>
                                  <td>
                                    <b class="font-w_l">Name: </b>{{ $prof->desire_name }}<br>
                                    <b class="font-w_l">Bio</b>: {{ $prof->desire_bio }}<br>
                                    @if($prof->desire_pic!='')
                                    <img src="{{asset('public/imgs/template/'.$prof->desire_pic)}}" style="width:55px" class="img1">
                                    @endif
                                  </td>
                                  
                                  <td class="hidden-xs">
                                      @if($prof->fixed_info=='2')
                                      <button class="btn btn-success btn-xs" type="button" title="Approve" onclick="prof_serv_status('{{ $prof->id }}','1')"><i class="fa fa-check"></i></button>
                                      @endif

                                      <a target="_blank" href="{{ route('service_detail') }}?p={{$prof->id}}"><button class="btn btn-primary btn-xs" type="button"><i class="fa fa-pencil"></i></button></a>

                                      <!-- <button class="btn btn-danger btn-xs" type="button" title="Remove" onclick="prof_serv_status('{{ $prof->id }}','remove')"><i class="fa fa-trash-o "></i></button> -->
                                  </td>
                                </tr>

                              @endforeach


                            </tbody>
                            </table>
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
      function prof_serv_status(prof_id,status){

        if(status=='remove')
        {
          if(!confirm('Are you sure to remove?'))return false;
        }

        $.ajax({
          url:'{{route("admin_ajx")}}',
          type:'post',
          dataType:'json',
          data:{'act':'prof_temp_status','prof_id':prof_id,'status':status,'_token' : '{{ csrf_token() }}'},
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