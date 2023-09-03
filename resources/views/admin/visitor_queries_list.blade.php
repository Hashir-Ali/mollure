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
                                {{$status}} Visitor Queries
                                <span class="tools pull-right">
                                    <a href="{{route('visitor_query_list')}}/all"><input type="radio" name="pt" @if($status=='all') checked @endif> All</a>
                                    <a href="{{route('visitor_query_list')}}/new"><input type="radio" name="pt" @if($status=='new') checked @endif> New</a>
                                    <a href="{{route('visitor_query_list')}}/resolve"><input type="radio" name="pt" @if($status=='resolve') checked @endif> Resolved</a>
                                </span>
                            </header>
                            <table class="table responsive-data-table data-table">
                            <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email/Phone
                                </th>
                                <th>
                                    Detail
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
                              @foreach($visitor_queries as $quer)
                                @php
                                  $i++;
                                @endphp
                                <tr @if($quer->status=='resolve') style="background-color:#e1f5e1" @endif >
                                  <td>{{$i}}</td>
                                  <td>
                                    {{ $quer->fname }} {{ $quer->lname }}
                                    <br>
                                    <small>{{date('d-m-Y',strtotime($quer->created_at))}}</small>
                                  </td>
                                  <td>
                                    {{ $quer->email }} <br> {{ $quer->phone }}
                                  </td>
                                  <td>
                                    {{ $quer->detail }}
                                  </td>
                                  <td class="hidden-xs">
                                      @if($quer->status!='resolve')
                                      <button class="btn btn-success btn-xs" type="button" title="Resolve" onclick="quer_status('{{ $quer->id }}','resolve')"><i class="fa fa-check"></i></button>
                                      @endif
                                      &nbsp;
                                      @if($quer->email != '')
                                      <a href="{{route('email_template')}}?temp=static&eml={{$quer->email}}"><button class="btn btn-default btn-xs mb-2" type="button" title="Write email"><i class="fa fa-pencil"></i></button></a>
                                      @endif
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
      function quer_status(q_id,status){

        $.ajax({
          url:'{{route("admin_ajx")}}',
          type:'post',
          dataType:'json',
          data:{'act':'query_status','q_id':q_id,'status':status,'_token' : '{{ csrf_token() }}'},
          success:function(r){
            if(r.status=='SUCCESS'){
              // alert('Updated');
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