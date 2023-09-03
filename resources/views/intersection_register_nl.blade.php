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
            data-bs-toggle="dropdown" aria-expanded="false">NL</button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li class="p-2">
            <a href="https://cynnaenterprises.com/mollure/register">EN</a>
        </li>
    </ul>
@endsection

@section('content')
    <div class="container cardGroup">
        <div class="title d-flex gap-3 justify-content-center align-items-center text-center">
            <span></span>
            <h2>Registration</h2>
            <span></span>
        </div>
        <div class="d-grid gap-3 justify-content-center interCardGroup">
            <a class="interCard d-grid px-4 align-content-center" href="{{ url("individual/nl/register") }}">
                <div>
                    <h4>For Individual client</h4>
                    <p>By hitting Login, Lorem Ipsum Sit Omet Domet</p>
                </div>
            </a>
            <a class="interCard d-grid px-4 align-content-center" href="{{ url("company/nl/register") }}">
                <div>
                    <h4>For Company client</h4>
                    <p>By hitting Login, Lorem Ipsum Sit Omet Domet</p>
                </div>
            </a>
            <a class="interCard d-grid px-4 align-content-center" href="{{ url("professional/nl/register") }}">
                <div>
                    <h4>For Professional</h4>
                    <p>By hitting Login, Lorem Ipsum Sit Omet Domet</p>
                </div>
            </a>
        </div>
    </div>
@endsection





