<?php
  use App\Http\Controllers\Controller;
  $menuh = Controller::get_page_menu('header','en');
  $menuf = Controller::get_page_menu('footer','en');

  if(!isset($setting)){
    $setting = Controller::get_settings('en');
  }
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="theme-color" content="#4a4a4a">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="icon" href="{{URL::asset('public/images/favicon.png')}}">
    <link href="{{ URL::asset('public/css/styles.css')}}?12" rel="stylesheet">
    <script src="{{ URL::asset('public/js/jquery-3.4.1.min.js')}}"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Mollure</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    
    <meta content="" name="description">
   <style type="text/css">
    nav a{text-decoration: none;color: inherit;}
    *,h1,h2,h3,h4,h5,h6, h1>span,h2>span,h3>span,h4>span,h5>span,h6>span{
       font-family: 'Playfair Display', serif !important;
   }
   /*------ header --------*/
ul.my_navbar li a{
    font-family: myFirstFont;
    color: #282828;
    padding-right: 25px!important;
    text-transform: capitalize;

}
.header_btn {
    font-family: myFirstFont;
    background-color: #fff;
    border: none;
    border-radius: 37px;
    color: #000;
    padding: 3px 14px;
    border: 1px solid #b1b1b1;
    width: 146px;
}

.header_btn1 {
    font-family: myFirstFont;
    background-color: #fff;
    border: none;
    border-radius: 37px;
    color: #fff;
    padding: 3px 14px;
    margin-right: 10px;
    font-weight: 400;  
    border: 1px solid #66C68F; 
}

.lang_btn_head{
    border: 1px solid #b1b1b1;
    border-radius: 37px;
    width: 98px;
    padding: 2px 14px;

}
.my_bg_color_green1 {
    background-color: #66C68F!important;
}

ul.my_navbar li .dropdown-menu {
    background-color: var(--theme_green);
}
ul.my_navbar li .dropdown-menu li a {
    color: white;
}

    .navbar ul li a:hover{
        color: #111111!important;
    }
ul.my_navbar li .dropdown-menu li a:hover {
    background-color: #0a8d93;
}
    @import url("https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&family=Jost:wght@300;400;500;600;700&family=Lora:wght@400;500;600;700&family=Nunito:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700;800&family=Poppins:wght@300;400;500;600;700&family=Roboto+Condensed:wght@400;700&family=Roboto:wght@700&family=Source+Sans+3:wght@300;400;500;600;700&family=Urbanist:wght@400;600;700&family=Varela&display=swap");
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Playfair Display";
    }
    .main {
        padding: 25px 75px;
    }
    .header_main {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .header {
        display: flex;
        align-items: center;
        margin-top: 14px;
    }
    #image0_806_5218{
        height: 50px;
    }
    svg{
        margin-top: -10px;
    }
    .header p {
        font-size: 1.2rem;
        margin-top: -18px;
        margin-left: 7px;
    }
    .nav_right_div {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .lang_box {
        display: flex;
        align-items: center;
        border: 1px solid rgb(0, 0, 0, 0.3);
        padding: 2px 12px;
        border-radius: 37px;
    }
    .lang_box img{
        margin-right: -9px;
    }
    .fa-globe {
        color: white;
        background-color: black;
        border-radius: 50%;
        font-size: 12px;
        line-height: 0.88 !important;
        padding: 4px;
    }
    .login_btn button {
        background-color: #66c68f;
        border-radius: 37px;
        padding: 4px 16px;
        padding-bottom: 6px;
        color: white;
        outline: none;
        border: none;
        font-size: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .profile_name {
        border: 1px solid rgb(0, 0, 0, 0.3);
        padding: 2px 12px;
        border-radius: 37px;
    }
    .title {
        font-size: 1.3rem;
        font-weight: 600;
        width: 100%;
        margin-top: 60px;
    }
    .title p {
        text-align: center;
    }
    .small_box {
        background: linear-gradient(#25b9bc, #59c398);
        width: 100%;
        height: 5px;
        margin-top: 34px;
    }

    .export_drop p {
        margin-top: -2px;
        font-size: 16px;
        font-weight: 500;
        font-family: 'Playfair Display', serif !important;
    }
    .export_drop .fa-chevron-down {
        font-size: 1rem;
        margin-left: 8px;
    }
    .button_sec p,
    .drop_down_sec .drop_down_sec_title {
        font-weight: 600;
        font-size: 18px;
    }
    .button_sec button {
        background: linear-gradient(to right, #60c593, #29bab9);
        outline: none;
        border: none;
        padding: 12px 24px;
        color: white;
        font-size: 18px;
        border-radius: 8px;
    }
    .drop_down_main_box div {
        display: flex;
        align-items: center;
        justify-content: space-between;
        border: 1px solid #E4E4E4;
        margin: 16px 0;
        padding: 12px;
        border-radius: 10px;
        color: #8f8f8f;
    }
    .drop_down_main_box button {
        background: linear-gradient(to right, #60c593, #29bab9);
        outline: none;
        border: none;
        padding: 10px 18px;
        color: white;
        font-size: 18px;
        border-radius: 8px;
        margin: 20px 0px 16px;
    }
    table {
        border-collapse: separate;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #e4e4e4;
        border-radius: 8px;
    }
    .rating p {
        font-size: 1.1rem;
    }
    .rating p:nth-child(1) {
        margin-bottom: 20px;
    }
    .performance .fa-info {
        font-size: 0.7rem;
    }

    .navbar {
        height: 34px;
        padding: 0px !important;
    }

    .navbar ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: flex-start;
        width: 100%;
    }

    .navbar li {
        margin: auto;
    }

    .navbar a {
        display: block;
        text-decoration: none;
        color: #ccc;
        padding: 10px;
    }

    .navbar li.active a {
        color: black;
    }

    @media (max-width: 768px) {
        #image0_806_5218{
            width: 40px;
        }
        .navbar {
            height: 34px;
        }
        .header p{
            font-size: 1rem;
            margin-left: -20px;
        }
        .profile_name{
            width: 102px;
        }
        .nav_right_div{
            margin-left: 76px;
        }
        .navbar ul {
            flex-direction: column;
            align-items: center;
            font-size: 0.7rem;
            max-height: 0;
            overflow: hidden;
            /* display: none; */
            /* transition: max-height 0.3s ease-out; */
        }

        .navbar.open ul {
            max-height: 300px; /* Adjust the max height as needed */
        }

        .navbar li {
            margin: 10px 0;
        }

        .navbar .hamburger {
            display: block;
            width: 5px;
            height: 20px;
            /* background: #ccc; */
            position: absolute;
            top: 146px;
            right: 45px;
            cursor: pointer;
            z-index: 999;
            transition: transform 0.3s ease-out;
        }

        .navbar .hamburger.active {
            transform: rotate(90deg);
        }
    }


    .service-items li, .service-items2 li, .service-items3 li{
        padding: 15px 0;
        display: flex;
        cursor: pointer;
        border-bottom: 1px solid rgb(0, 0, 0, 0.1);
        overflow: hidden;
    }


    .service-selector.open~.service-items {
        display: block;
    }

    .item.checked .sv-checkbox {
        border: 1px solid #66C68F;
        transform: scale(1) !important;
    }
    .lang_op, .log{
        position: absolute;
        background: #FFFFFF;
        margin-top: 80px;
        box-shadow: 0px 0px 20px rgba(16, 8, 63, 0.09);
        border-radius: 10px;
        width: 60px;
        overflow-y: hidden;
        padding: 9px 16px 9px 18px;
        display: none;
        z-index: 999;
    }
    .log{
        margin-left: 74px;
        width: 100px;
        padding: 9px 16px 9px 18px;
    }
    .item:hover {
        /* background-color: rgb(191, 224, 234); */
        cursor: pointer;
    }
    .item:hover #tick2, .item:hover #tick1,
    .item:hover #tick3, .item:hover #tick4,
    .item:hover #tick5, .item:hover #tick6,
    .item:hover #tick7, .item:hover #tick8,
    .item:hover #tick9{
        cursor: pointer;
    }
    ::placeholder {
        color: rgb(143, 143, 143) !important;
    }
    .serhead, th{
        font-weight: 600;
        font-size: 16px;
        padding: 16px;
        padding-left: 24px;
    }
    .first_table table thead tr th{
        padding: 25px;
    }
    .third_table table thead tr th{
        padding: 25px;
    }
    .fifth_table table thead tr th,
    .sixth_table_sec table thead tr th{
        padding: 25px;
    }
    @media screen and (max-width: 767px) {
        .bullets {
            /* flex-direction: column; */
            margin-top: 5px;
            padding: 0px 93px;
        }
        .chartcont{
            text-align: center;
            width: 100%;
            margin-top: 20px;
        }
        .chart{
            /* padding-left: 40px; */
        }
        .total_sales_btn{
            width: max-content;
        }
        h4 b{
            margin-left: 35px;
        }
        .circle,
        .circle2,
        .circle3 {
            width: 1px;
            padding: 5px;
            height: 3px;
            margin-left: 17%;
            margin-top: 3px;
            border-radius: 62%;
            font-size: 0.3rem;
        }
        /* .first_table table thead tr th,
        .first_table table tbody tr td{
          padding: 17px 71px !important;
        } */
        .button_sec button{
            font-size: 0.7rem;
            position: relative;
            right: 45px;
        }
        .bullets p{
            font-size: 0.7rem;
        }
        .button_sec{
            width: 112%;
        }
        .button_sec p{
            font-size: 0.9rem;
        }
        .drop_down_sec p{
            font-size: 1rem !important;
        }
        .title{
            width: 115%;
        }
    }
    .hamburger {
        display: none;
    }
    @media (max-width: 768px) {
        .navbar ul {
            flex-direction: column;
            align-items: center;
            font-size: 0.7rem;
        }
        .navbar li {
            margin: 10px 0;
        }
        .hamburger {
            display: block;
        }
    }

    .form-check-input:disabled {
        opacity: 0!important;
    }

   </style>
</head>
<body>
<main class="main">
    <header class="header_main">
        <div class="header">
            <svg width="72" height="50" viewBox="0 0 72 50" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <rect width="71.8182" height="50" fill="url(#pattern0)" />
                <defs><pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1"><use xlink:href="#image0_806_5218" transform="scale(0.0126582 0.0181818)"/></pattern>
                    <image id="image0_806_5218" width="79" height="55" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE8AAAA3CAYAAABNRRcqAAASUElEQVR4nOVbC7QeVXX+9pn5/3tDEt4WJQQEfLYYFAR5g0CBloc8Xaa2PAo+AKURCmpLESlg21XQUgsIUhCsiCiuFmhJxKaEJlQIIESgYBRBBJI0CYTc5P6PObtrn/lm/vPPnftKaJcte61Zd/6ZM+exz358e+9z5RMLv4Ia2hPA5QB+H8DLdQ3eQDQA4BYAcwHcEC/b1fDgdwHcDeAQAAsB7PUGZtybybSTAFwN4PPxyzrmnQBga97vBODfAfwFgC3+d+b7a0HGl08AWALgQE6oCeDkeHJ1zPs0gBuj3wmAzwL4TwCXAXg/APl/yrSdAcwB8CiAayMhMnoIwGFxY/n4wq8ETtil/R2dRbu3Wc0gTwB4EMBPAawA0BlnUsUQbQCrAfwMwNMbscg6MhXbBcBvAGhM8BsTjM3JtF0B7F0jULa2rwP4FAAfLyjN4CDQ8IUj+8hE0/E7KW0frXT6W7w2hh6jIbZx1m9EPx8G8EkA+9C4v560CMBnKCiluhl/upCcIR4SftiVsQlF5ZfUc9vRL7/Ontd2+q8BPAXgiA34/p1c3G0APvg6Mm4tgO/Q1u1vjIs103jUgQQRlNMXXlV+VaitSaCUoqaxgZuiwB4A9gXwbgDbA9jKJLhmEkoxT6JnKdVrWk17szV/M8EF2qLuAbBJ5bmZhV8BaE2wnwzAGgAv0AQ9IPmGrELEDx90s6ezBT/6Fi1RY7CxkOfk/nqBLgCwIPYYFVs5HpkN/QCAMwEcFc3hSqrv9eN0uTuAf6wwzoz5VwHMA7BsolOqW4Mvf+cM0+hd1Uv2SV4dxbOQvr8a/S6ZO2Iy49DRAG6PVK5FW/qzMT77OYAdo98XAfjziQwW2ywt76Xm2chv6iil7bFrXV3bygPbmLUKvKSQZwG8hlI6e0yM1X0cJt5JMG5AdCqZaDDpgFHaXxgxzlTujwHUhkjVNWj4QPqYhN79gAA7AJhh3lfqzVCVEms0DOBrAAYn8EE8oVcJIn8I4A4Aj/erO8jIcZm4kJDoMv7en/b0qUq7AdrFguaNxTiJpKnKNAqEMeoEAX6b4eibJotfHfHWxybzEcls134AvkDYca8Ax8V2M4suVNS+cl0uQOYCZArX6dF9cR3qoNMdrZFAz5TefXTlfRfjd+kZo3GNUbcCWEoHdRSx4WSB/zcK8fwmgD+oIOinKEQxBHBkmnnYKh0SqeD5kktl6Xw0kkRf8zGAf/BITta86fs4lo/W9F6BNnn/HKDPVTso+s8qDCNtw40+cwyGmOd9hbZXOQfrYpUElKE0TgHCnRfr9ueJsKfz9y+YJKjSIO3OrrRNZvS3i9oczufnAbim6sG7cMi0LirEXIWczMlupTmcWcN39sH2ESPuq+vAwSORrMo0EFqZY3pL5ZNXqf7zGJI9Q5ynKNiU0/kK2UPhlBJ+KYCV8SoeIeIv6NAq89jZMKXy2wzhDKyeAuDJqOkURg4GgpuFE4mjmBpaFalfw0GTitpOid6vqlPZhmRleynWn6fV7q0wbjmAPwXwdkYoFn49bA5QoIFB9nVbU7S0sUNLG3OGtYGWptLSxpK2ptfZu6oInG0cpfjbAq5y0KnFhEx6EvhygiTz0jdT1cz7ZVJ6Xj1PoFfGeMneJeJrbJVuy782+WGBdivv10b321S/d1TU+KlATxLoLQIdtH453+vokC5nXE5192FtGmylC4zrIrH7L2dw2xaL9cDR9tyu1BZSodleZV5bQ2CwM+3hcaZqLW0glQxN6SIVH+6N7J1CDN1fYSqlwB3rdWBmsF+KsxVi6tAHKEU0sCmioyMJf1lEAwzyyggSeDZqe1htX/1CfYBAv13or0DXDUrnLIHeXGhRsfZME3Q0RQcpOj4FRJGKGRhvpue4qM+LBXi+GChd75uo0Pyuulvbms6msByr+cLPE6Az7BtoSRoGG3RdDKCDpusGlbHmXt3ilqYHtjVZxFDM5v8lgzIA/q3cQW8SqAVItWjh2JJ3wI9qtPthhl9NOixLjS02JnjvIP1GzrznzRqZLQFOGERnbuJyqbcNX+8H0LL1aANOfNgAJ2HLxas7xYm/POrzKQe9om/Tjl/w9RGzNA/roE8yGVrQTQDOCBsFYMhPKVQjMG5AOhhwnSCV633DFOkdOQ4sPeTjuZPJV7nOD4T2ScC6IekQMByZaRjsxZp5vSjQwnY9YJjQw2XGAOurZ0r0es616G+2SeEU10GmUjKs7dNghIxxm7h27CA+oyFcLHekS1VfGk/G1eApu1rMKvxCes9OddDFDvqBYPiDaGdB9E3/X/NTsDKbjhXdTdGGMQ/PKHCGLc7DaaZuloc7IYBWqqstoqvJsR7ubB+sTkiPfUegL0rP6Md0sae39nB7dTW5pBU2SkKftKs7KOSMwqo66LUOervZsZWdaWF+r2ZTw9jlGlDa4B0E+n2z067f1h4p0KUj7PSJC66vk7yCdlbI3Axu58rzazuafpUetlyhcqeDU0DODoVYGn9fOgvLXsxkc4M8pynk6ohJq5z4dxWGPPTZbxetv8UK7N5LV+jVksOsNYRD381LCeHdmlSyGaqytqspIx8dgYYFmNGQ7imSe+Ay4eDEm5k4kt56BI3JPBukpY2pXSS3sZPonfpgm3JQvIjBfAEwbYpdB99yUAu3FpC5lpU9xtJJApxTSUHZRI9XyN1j7aZA307buW30+HsKfCRDYur+H4WtBfAnavbWBAwoPG6DWNZi2T0I7A9VSF8+UIEnN3HtDwv0idHmko4VdxJPDwnUjPlpAP6KaWsjR1C9d9R8PZmQCHSFQnYG9H4Blhm84MQtlpzrIU/Tizqmuk+0ql2NqlbJ8m4HESgX9u9p2yyBvjdinNEVlLKb6DXbnMOUaro9Greb22C5hIB5VHJmLN1oAVOPusyzGSC+mAnHKglFfnPurDmbPWmHrjbow2vPtiYGnJ+mpN7H/N6d400iImPgbhbSEVcupDIeGLX5QWCWhqrfUdHcpo5S+FpLYP8eABeMx7jgC5Z1t0AHDdTgvToyZP5FAG+jpFxHLzo0Svsju5pgvW/e1Tbvll/vbmsjVZVllIaDGBpNll5m9HAgoI/SiO/RA806n953T0palTrcBAvbTmfIeTarhGNSgDOmtuuyQbR9A9ukqzHg2hXugvHEiISDhWjf4wXWdGdQ4gpoYiOs9prYzSsGUrn7htGSNpKhKdJaMKLnSZICC1u+iWENYXqR6zPY/rQxcYp0nqiA6i43++Wxss62ZvPEdWbEvP2K7mZIrYExaHl3c2yWDI1obOg7q5XyPlrNq0T7wt0xG03osyb2ZF4FQ9lgv7WpodHexkxvIy3gz5blI2A1E2Ev0Mv3MWY8CpAqc5CaOaz1U0yb8oyp2Txj4H91R5Zo61z7JKjRcO1ODhI4A0GJ8I154/XuxI87ftNZYBXAdrfKpDV+aiJ51nnS5LWXIa+SmbkyJSXQMladIA3SQO9F9D0zUtvCid+WafIFSIAB07gi46Rva+pMOl0OeTaGeeI1aTjpmrQt13wONt50E4gE3sqaf8mSQ1F4NxPyEu3bI0xJvTJy7LEHnkiuvkq7MBX1oQrWqqMXktybbxXlCS2JmXl1b7FogomHv59EubBcG73ohR5yflvT+wT6pBMNgN6rbE+pXkbPX+c0PsS/rxKvWjli/kTrV+Mas4hmEho8wmzseIwz+q5lRbqaHt5l5qKryaMdTTsC3Z5prKu585tPoL+YrmcJ8v0CncXc2/2WuBjOY9cj27kTWVwnVRXajHk9gzf/OtGTYROVvFMYDYx2buUR1kKWESgn9MiruYAL2NZ29H6zTQLdO5KGA3ikYT/CoZJqDPYAK/rH8Lco5EAneo0qHtBcggcEauq6qSrWiGA2PXGXZmVrSuOuxIsFQnCETsXJsEuo5hvMvGt4FiQmiz2vZzZ5SfWDstSnIevyh5HKDvPsHxhiLeIZEzCr+y1mr8sJdzSp9n1ZAn+MJY4kr3o+K9AbxTQVeMTybQzhjK5S4FQH3CfAfaNYz+14/s7W+A4+S5hpPoBHQdbVfSj7/vCOWo6JhN24gYd8RPM0l+3q3xEor+lrb8CUMEXLBCm2kbyaP5OyczftVOxlv8kxCvq45BtTMi9qO8sqdRajar5HD6XiD2lI9lpInOeDfC6DfInftBm9/DgpMtiSL6YGfjker7vIiW4ZPbfc4pEKrBzBo91+UB+HmxoI9JM5UoM46HOpZLOZRwvLN2/EzInZMnSDfUviUuONAj0VrF0kkr2Zqo2kp4oWLv2z9grdLYWUNWSvUZYO8hCToGCIuI+DPm+5vOGQmsopU7dWIVOpAJaFMVVclzIFZZtseUdhaUG1B8is+N3W5CaF2DdBur3K/R4yohCftitqQToHWqqq9fyTRPxhjaT7EuFFGNDsWUebYeLFRCKyYxCn9n7qFYmmy4pfDSkh2RAg52aQxZJv1IBXmc3aalgoe52Vwu+Cniu0IxbP25gtTcNcekVtPUPy7+3TPSQ3L8d0rJTgEwxrEwOui0HphHkYI00qWUF5ru0bh2cqtwe7mtug/SGhTtN3MlRmzfuXKuPexrROUZs1+7ZLItny6UkL7TB4CguJWrn3DJOe5loBk9FeXMSjEYVuWLVtf4X0iX4FDyxlzcTm+61ClbWnXp9K4M1puV5mvehHkPbj4yaZf3z0zELJUzxkaMgPMiKRsiZTMNNKCkPZgK2rSc+7L783E3CiRAmMukzy3zroVsykZgLd30GXG8xY0Z0erlXdaRjyA2X8l6tCkDuDG3cIcJH0GDfMWu7KkRWvvuuWqGw4kxWvoq2YE8jgXJZnnOcWmWePXs43Ilvo79mG9E4R6AkS0mO6Ux4Q5AUse7vON7G6u0m5vlauSW0HPdjWznk1rZoYVwKd1SOj68RhTY8Y1lTtyuC+6OGeWa+NwKyhrBkMbTFwBCEaXmWO5rDlmOhcyAqePfllKer1aX8wxV/cb+qgA1H91czrm3rs8j+J7ml3XbUmbM5t3xbSJWHufgDrdOB9633zx4w4tkQZWflwBUZmTQwFU9RER127o+70YW10TNuGNX3rkG9eMeSbsCtlNgI86HJluUZgkVMNR7d8XgtAKiPwlp2VO0qA2S1tvFW07/3jTclOdOJ/GjPObGWrHiEVkmrmu3QTuc0LVTb1vZMGIzBHcZyokCbOZHnmkw924W4I0UT+0M67XMDzOabadxHXvSbRGluw3GMY7y6FfI1nkm2UTxMhPJpGuzUnqi8YDSnwOQOUURuhdzTAOauStQ0ywKNfluc7V5ENIwK5eTG5EY5c1NA+0RivCM8pp7k/9B7ycn5MI+S3d6/rwGpxA2gHG5YX6UNWZKXLM+GfJXYrMOcWDDPPYnj2GEsJBsFMZYuzKlaAj3e7wRNdx8pO95hNDIZ6ad2EJkEZaxUXEvyGcmTK6lrHO3SDxI2aR1lO6QePP3wM0RkXAU4X6HWRhNZKn12NUEvOYNsU1K93steiikvpSDb2DPNJjiHSoo3o5FkG1FZMOTjuyyTN7KnVcS1pNEZ66+iIcUbfL24iJzK/Eip9odpJcezCxsrt3CAy6ZPyn9ORvIvHLZ6I/z1gknS7Sd7BjOGWTyBRoMztW2ZkKUV9STWPFkejhb0cg7ZmHeM32WQFK/51dC+rXWDy9SCWAWrJF8f9y1TiiHkIw8LdGJrtyARFMg5TraMtjXkJNjBZWMesSdI0ZjLiLMbv8KR7HW0Xe25GGQdtiMnpnRrccHKTY1z9WcwNmEKTxZvHKoz7Bpk5Gr3Ac3/FkDOYcpoz2ZSWRjZy5LnSiVHhMEYZoLYjxxLkOykJW04iL5jym4NYdI5pHpOTw+P0ITyLfE7l+WomNJ8f7XB6DSkPpb9A6V1S969go4lHLeCqYZqwuP1RVqIshHu9yPN832kT7M9W8ke0jX8W5eIMenxkI+f0K6bKbuVmdmJ+VJnYJzE1YQ6YdHyQScyzXmfGPcgTBBNlXEyXEqTftREes0ozKCB30RP3nV/uV++gtvNHs1k7MBF6xCgq8Fr0X4/tCaiu57WKiYJ7afM2duHCDT2EXnNrAtnqnOP/Joix4hb0uFujnh5mMfxHIwbe8Z75dV8cy/PJ1f8Re5L/c2HecEk1Ifp/mKawAngoTzHU1TDOpa3thVs1zLu8+u/glJTLWAB6I9BhTKvtU5HgO6PaSa2qTa1h5nveQIwDncV+PMMS/y9wXwGsztvOoT07i5ngf/qfn+uvLdn/wdkhJEukWirLMtw5AfhvJU1+rf3ASN8AAAAASUVORK5CYII="/></defs></svg>
            <p>Mollure</p>
        </div>
        <div class="nav_right_div">
            @if(Route::currentRouteName() != 'service_detail')
                @if(session('salon_login')=='1')
                    <div class="lang_box">
                        <p>EN</p>
                        <img src="{{ URL::asset('public/images/model/select-down-arrow.svg')}}" alt="">
                    </div>
                    <div class="lang_op">
                        <p>NL</p>
                    </div>
                    <div class="profile_name">
                        <p>{{session('salon_name')}}</p>
                    </div>
                    <div class="log">
                        <p><a  style="color: black" href="{{route('logout')}}">logout</a></p>
                    </div>
                @else
                    <a href="{{route('login')}}"><button style="font-size: 15px;" class="header_btn1 my_bg_color_green1 mt-2 mb-2 mt-xl-0 mb-xl-0">Login</button></a>
                    <a href="{{route('login')}}"><button style="font-size: 15px;" class="header_btn mt-2 mb-2 mt-xl-0 mb-xl-0">@if(isset($menuh['for_professional'])) {{$menuh['for_professional']}} @else For Professional @endif </button></a>
                @endif

            @endif
        </div>
    </header>

    <section class="title">
        <div class="navbar">
            <div class="hamburger"><img src="{{ URL::asset('public/images/popups/icons8-menu-26.png')}}" alt=""></div>
            <ul>
                @if(Route::currentRouteName() == 'dashboard')
                    <li class="active"><a href="{{route('dashboard')}}">{{$lang_kwords['dashboard_profile_menu']['english']}}</a></li>
                @else
                    <li><a href="{{route('dashboard')}}">{{$lang_kwords['dashboard_profile_menu']['english']}}</a></li>
                @endif
                @if($prof->user_type == "company" || $prof->user_type == "individual")
                    <li><a href="{{route('bookings')}}">Booking</a></li>
                    <li><a href="{{route('prof_messages')}}">Inbox</a></li>
                    <li><a href="{{route('favorites')}}">Favourites</a></li>
                @else
                     @if(Route::currentRouteName() == 'prof_calendar')
                        <li class="active"><a href="{{route('prof_calendar')}}">Calendar</a></li>
                    @else
                        <li><a href="{{route('prof_calendar')}}">Calendar</a></li>
                    @endif
                    
                    @if(Route::currentRouteName() == 'prof_messages')
                        <li class="active"><a href="{{route('prof_messages')}}">Inbox</a></li>
                    @else
                        <li><a href="{{route('prof_messages')}}">Inbox</a></li>
                    @endif

                    @if(Route::currentRouteName() == 'payment_setting')
                        <li class="active"><a href="{{route('payment_setting')}}">Transactions</a></li>
                    @else
                        <li><a href="{{route('payment_setting')}}">Transactions</a></li>
                    @endif
                    <li><a href="#">Analytics</a></li>
                @endif
            </ul>
        </div>
        <div class="small_box"></div>
    </section>
</main>
    <!--Navbar Start-->
{{--    <nav class="container navbar navbar-desktop px-4 py-2 d-flex flex-column flex-lg-row align-items-center justify-content-between mb-5" style="margin-top: 5px;">--}}
{{--      <div class="d-flex align-items-center mb-0 me-lg-4">--}}
{{--        <a href="{{ config('app.url') }}"><img src="{{ $setting['site_logo'] }}" alt="logo" style="    max-height: 70px;"/>--}}
{{--        <!-- <span class="fs-5 fw-medium ms-1">Mollure</span> -->--}}
{{--      </a>--}}
{{--      </div>--}}
{{--      <div class="d-flex flex-wrap align-items-center justify-content-center fw-medium px-2 mx-auto">--}}
{{--       --}}
{{--      </div>--}}
{{--      <div class="d-flex flex-wrap justify-content-center align-items-center nav-auto-row">--}}
{{--        <div class="dropdown me-3">--}}

{{--          <button class="lang_btn_head btn dropdown-toggle d-flex align-items-center" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style='    font-size: 15px;'>--}}
{{--              <img src="{{ URL::asset('public/icons/lang_ic.png')}}" alt="EN" height="20" width="20" class="ms-1" style="margin-right:10px;" /> EN --}}
{{--            </button>--}}
{{--            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">--}}
{{--              <li class="py-0 px-3">--}}
{{--                <a href="#">NL</a>--}}
{{--              </li>--}}
{{--            </ul>--}}
{{--        </div>--}}

{{--        @if(Route::currentRouteName() != 'service_detail')--}}

{{--        @if(session('salon_login')=='1')--}}
{{--        <div class="me-4 fs-6 fw-medium">--}}
{{--          <a style="text-decoration:none" href="{{route('dashboard')}}"><i class="ri-user-line"></i>{{session('salon_name')}}</a></div>--}}
{{--        <a href="{{route('logout')}}" style="text-decoration:none">--}}
{{--          <button class="btn btn-outline-secondary d-flex align-items-center fw-medium p-1" style="font-size:16px">--}}
{{--            <i class="ri-logout-box-line"></i>Sign Out--}}
{{--          </button>--}}
{{--        </a>--}}
{{--        @else--}}
{{--        <a href="{{route('login')}}"><button style="font-size: 15px;" class="header_btn1 my_bg_color_green1 mt-2 mb-2 mt-xl-0 mb-xl-0">Login</button></a>--}}
{{--        <a href="{{route('login')}}"><button style="font-size: 15px;" class="header_btn mt-2 mb-2 mt-xl-0 mb-xl-0">@if(isset($menuh['for_professional'])) {{$menuh['for_professional']}} @else For Professional @endif </button></a>--}}
{{--        @endif--}}
{{--        --}}
{{--        @endif--}}
{{--      </div>--}}
{{--    </nav>--}}
    <!-- Navbar End -->
   