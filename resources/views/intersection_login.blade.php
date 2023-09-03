@extends('salon.app')

@section('third_party_stylesheets')

    <style>
        .interCard {
            width: 500px;
            height: 155px;
            border: 1px solid #E4E4E4;
            border-radius: 22px;
        }
        .interCard:hover {
            background: #66C68F;
            transition: all 200ms ease-in-out;
            color: #fff;
            cursor: pointer;
        }

        .interCard:hover p {
            color: #fff;
        }

        .interCardGroup {
            margin-top: 124px;
            margin-bottom: 216px;
        }

        .interCardGroupLogin {
            margin-top: 124px;
            margin-bottom: 410px;
        }
    </style>

@endsection
@section('nav_language')
    <button class="btn dropdown-toggle d-flex align-items-center" type="button" id="dropdownMenuButton1"
            data-bs-toggle="dropdown" aria-expanded="false">EN</button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li class="p-2">
            <a href="https://cynnaenterprises.com/mollure/nl/login">NL</a>
        </li>
    </ul>
@endsection

@section('content')
    <div class="container cardGroup">
        <div class="title d-flex gap-3 justify-content-center align-items-center text-center">
            <span></span>
            <h2>Login</h2>
            <span></span>
        </div>
        <div class="d-grid gap-3 justify-content-center interCardGroup">
            @foreach($prof as $pro)
                @if($pro->user_type == "individual")
                    <a class="interCard d-grid px-4 align-content-center" href="Javascript:void(0)" onclick="submit_login('individual')">
                        <div>
                            <h4>Individual</h4>
                            <p>By hitting Login, Lorem Ipsum Sit Omet Domet</p>
                        </div>
                    </a>
                @endif
                @if($pro->user_type == "company")
                    <a class="interCard d-grid px-4 align-content-center" href="Javascript:void(0)" onclick="submit_login('company')">
                        <div>
                            <h4>Client</h4>
                            <p>By hitting Login, Lorem Ipsum Sit Omet Domet</p>
                        </div>
                    </a>
                @endif
                @if($pro->user_type == "professional")
                    <a class="interCard d-grid px-4 align-content-center" href="Javascript:void(0)" onclick="submit_login('professional')">
                        <div>
                            <h4>Professional</h4>
                            <p>By hitting Login, Lorem Ipsum Sit Omet Domet</p>
                        </div>
                    </a>
                @endif
            @endforeach
        </div>
    </div>

    <form  action="{{route('login_post')}}" id="login_form" method="post" class="d-none" >
        <input type="hidden" name="_token" value="{{ Session::token() }}" />
        <input type="hidden" name="email" value="{{ $email }}" />
        <input type="hidden" name="password" value="{{ $password }}" />
        <input type="hidden" name="user_type" id="user_type" value="" />
    </form>
@endsection





@section('third_party_scripts')

    <script type="text/javascript">

        function submit_login(type){
            $("#user_type").val(type);
            $("#login_form").submit();

        }
    </script>
@endsection








