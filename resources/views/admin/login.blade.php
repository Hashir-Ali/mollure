<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admin Template">
    <meta name="keywords" content="admin dashboard, admin, flat, flat ui, ui kit, app, web app, responsive">
    <link rel="shortcut icon" href="img/ico/favicon.png">
    <title>Login</title>

    <link href="{{ URL::asset('public/admin/css/style.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('public/admin/css/style-responsive.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ URL::asset('public/admin/js/html5shiv.min.js')}}"></script>
    <script src="{{ URL::asset('public/admin/js/respond.min.js')}}"></script>
    <![endif]-->
</head>

  <body class="login-body">

      <div class="login-logo">
          <!-- <img src="img/login_logo.png" alt=""/> -->
      </div>

      <h2 class="form-heading">login</h2>
      <div class="container log-row">
          <form class="form-signin" action="{{route('loginact')}}" method="post">
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
            @if($errors->any())
              <h4 class="text-danger">{{$errors->first()}}</h4>
            @endif
              <div class="login-wrap">
                  <input type="text" class="form-control" placeholder="User ID" autofocus name="username" required>
                  <input type="password" class="form-control" placeholder="Password"  name="password" required>
                  <button class="btn btn-lg btn-success btn-block" type="submit">LOGIN</button>
              </div>
          </form>
      </div>


      <!--jquery-1.10.2.min-->
      <script src="{{ URL::asset('public/admin/js/jquery-1.11.1.min.js')}}"></script>
      <!--Bootstrap Js-->
      <script src="{{ URL::asset('public/admin/js/bootstrap.min.js')}}"></script>
      <script src="{{ URL::asset('public/admin/js/jrespond..min.js')}}"></script>

  </body>
</html>
