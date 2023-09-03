<?php

use App\Http\Controllers\Controller;

$menuh = Controller::get_page_menu('header', 'en');
$menuf = Controller::get_page_menu('footer', 'en');

if (!isset($setting)) {
    $setting = Controller::get_settings('en');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>


    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ url("public/css/new_style.css") }}">
    <link href="{{ URL::asset('public/css/styles.css')}}?12" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />--}}
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('third_party_stylesheets')

    @stack('page_css')
</head>

<body>
<div class="leftCircle"></div>
<div class="rightCircle"></div>

<nav class="my-4 container d-flex justify-content-between align-items-center">
    <img class="logo" src="{{ url("public/images/Logo.svg") }}" alt="logo">
    <div class="dropdown lang-btn">
        @yield('nav_language')
    </div>
</nav>

@yield('content')

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
<script type="text/javascript">
    // const actualBtn = document.getElementById('uploadfile');
    //
    // const fileChosen = document.getElementById('file-chosen');
    //
    // actualBtn.addEventListener('change', function () {
    //     fileChosen.textContent = this.files[0].name
    // })
    // $("#uploadfile").change(function () {
    //     filename = this.files[0].name;
    //     console.log(filename);
    // });
    function toggleConfirmPasswordVisibility() {
        var passwordInput = document.getElementById("confirmpassword");
        var eyeIcon = document.querySelector(".eye-icon");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            // eyeIcon.src = "./Hide.svg";
            eyeIcon.alt = "Hide Password";
        } else {
            passwordInput.type = "password";
            // eyeIcon.src = "./Hide.svg";
            eyeIcon.alt = "Show Password";
        }
    }
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        var eyeIcon = document.querySelector(".eye-icon");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            // eyeIcon.src = "./Hide.svg";
            eyeIcon.alt = "Hide Password";
        } else {
            passwordInput.type = "password";
            // eyeIcon.src = "./Hide.svg";
            eyeIcon.alt = "Show Password";
        }
    }

    $(document).ready(function () {
        $('.custom-select').each(function () {
            setupSelector($(this));
        });

        function setupSelector(selector) {
            selector.on('change', function (e) {
                console.log('changed', e.target.value);
            });

            selector.on('mousedown', function (e) {
                if (window.innerWidth >= 420) { // override look for non-mobile
                    e.preventDefault();
                    const select = selector.children().eq(0);
                    const dropDown = $('<ul>').addClass('selector-options');

                    select.children().each(function () {
                        const option = $(this);
                        const dropDownOption = $('<li>').text(option.text());

                        dropDownOption.on('mousedown', function (e) {
                            e.stopPropagation();
                            select.val(option.val());
                            selector.val(option.val());
                            select.trigger('change');
                            selector.trigger('change');
                            dropDown.remove();
                        });

                        dropDown.append(dropDownOption);
                    });
                    if (selector.children().length == 3){
                        $(".selector-options").remove()
                        return false;
                    }
                    selector.append(dropDown);

                    // handle click out
                    $(document).on('click', function (e) {
                        if (!selector.is(e.target) && !selector.has(e.target).length) {
                            dropDown.remove();
                        }
                    });
                }
            });
        }
    });

</script>


@yield('third_party_scripts')

@stack('page_scripts')
</body>
</html>
