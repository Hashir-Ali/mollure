@include('salon/header1')

<style>
body {
    padding: 2rem 3%;
}
  
.container {
    width: 190px;
    display: none;
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
  .big_gray_box {
    background-color: #f8f8f8;
    height: 60px;
    margin-top: 40px;
    display: flex;
    justify-content: flex-end;
    padding: 15px 30px;
    border-radius: 5px 5px 0px 0px;
  }
  .export_drop {
    display: flex;
    align-items: center;
    border: 1px solid rgb(0, 0, 0, 0.3);
    border-radius: 37px;
    background-color: white;
    padding: 17px 20px;
    margin-top: -4px;
    line-height: 21px;
    /* padding: 8px 20px; */
    height: 40px;
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
  .button_sec {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 40px;
    margin-left: 15px;
  }
  .drop_down_sec {
    margin-left: 15px;
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
  .drop_down_sec {
    display: flex;
    flex-direction: column;
    margin-top: 40px;
  }
  .drop_down_main_box {
    border: 1px solid #E4E4E4;
    border-radius: 15px;
    width: 311px;
    position: relative;
    padding: 0px 16px;
    margin-top: 40px;
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
  .table_heading {
    background: #3bb0b7;
    height: 44px;
    border-radius: 5px;
    margin-top: 40px;
    display: flex;
    align-items: center;
    padding: 0 20px;
  }
  .table_heading p {
    color: white;
    font-size: 1.2rem;
    font-weight: 600;
  }
  .first_table,
  .second_table,
  .third_table,
  .fourth_table,
  .fifth_table {
    margin-top: 35px;
    border-radius: 10px;
    /* overflow: hidden; */
  }
  .booking_info {
    border: 3px solid white;
    border-radius: 50%;
    margin-left: 5px;
    width: 20px;
    height: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 5px;
  }
  .booking_info .fa-info {
    color: white;
    font-size: 0.7rem;
  }
  th {
    font-size: 16pxs;
    width: 50%;
  }
  td {
    font-size: 16px;
    font-weight: 500;
  }
  th,
  td {
    /* border: 1px solid #ddd; */
    padding: 25px;
    text-align: center;
  }
  th{
    border-bottom: 1px solid #e4e4e4;
  }
  th:not(:last-child){
    border-right: 1px solid #e4e4e4;
  }
  tr:not(:last-child) td{
    border-bottom: 1px solid #e4e4e4;
  }
  tr td:not(:last-child){
    border-right: 1px solid #e4e4e4;
  }
  .third_table tbody tr:nth-child(1),
  .third_table tbody tr:nth-child(4) {
    background-color: #f0f9f4;
  }
  .fourth_table {
    display: flex;
    gap: 15px;
    margin-top: 35px;
  }
  .fourth_table div {
    flex: 0.5;
  }
  .fourth_table p {
    font-size: 1.1rem;
    font-weight: 600;
    margin-left: 20px;
    margin-bottom: 20px;
  }
  .right_table section:nth-child(2) p {
    margin-top: 30px;
  }
  .left_table thead tr th:nth-child(1),
  .right_table thead tr th:nth-child(1) {
    width: 32%;
    text-align: left;
  }
  .left_table thead tr th:nth-child(2),
  .right_table thead tr th:nth-child(2) {
    width: 30%;
  }
  .left_table tbody tr:nth-child(1),
  .left_table tbody tr:nth-child(6) {
    background-color: #f0f9f4;
  }
  .left_table tbody tr:nth-child(1) td:nth-child(1),
  .left_table tbody tr:nth-child(6) td:nth-child(1) {
    text-align: left;
  }
  .total_sales_btn {
    border: 2px solid #67c68f;
    border-radius: 8px;
    padding: 12px 18px;
    width: fit-content;
    margin-top: 40px;
  }

  @media screen and (max-width: 767px) {
    .fourth_table {
      flex-direction: column;
    }

    .i{
      margin-top: -4px;
    }

    .fourth_table .left_table table thead tr th,
    .fourth_table .left_table table tbody tr td,
    .fourth_table .right_table table thead tr th,
    .fourth_table .right_table table tbody tr td{
      padding: 18px 41px !important;
    }

    .fourth_table div {
      margin-bottom: 20px;
    }

    .serhead, th{
      padding: 8px 17px !important;
      font-size: 0.7rem !important;
    }

    .sixth_table_sec table tbody tr td{
      padding: 16px;
    }

    td{
      font-size: 0.7rem !important;
    }

    .left_table thead tr th:nth-child(1),
    .right_table thead tr th:nth-child(1) {
      width: 100%;
      text-align: center;
    }
    th{
      font-size: 20px;
    }
    
  }

  .total_sales_btn p {
    color: #67c68f;
    font-size: 16px;
  }
  .fifth_table thead tr th {
    width: 33.33%;
  }

  @media screen and (max-width: 767px) {
    .fifth_table th,
    .fifth_table td {
      padding: 5px;
      font-size: 0.7rem;
      padding: 17px 39px;
    }
    .fifth_table .i2 {
      width: 12px;
      height: 12px;
      margin-top: 0px;
    }
    .table_heading{
      width: 100%;
    }
    .rating p{
      font-size: 0.7rem !important;
    }
    .main{
      margin:0px;
      padding: 30px;
    }
    .serhead tr th{
      font-size: 0.7rem !important;
    }
  }

  .pie-chart {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    position: relative;
    overflow: hidden;
  }

  .slice {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100%;
    height: 100%;
    transform-origin: 0 0;
    clip: rect(0px, 200px, 300px, 0px);
  }

  .slice:nth-child(1) {
    background-color: #ff6384;
    transform: rotate(-90deg);
    z-index: 1;
  }

  .slice:nth-child(2) {
    background-color: #36a2eb;
    transform: rotate(60deg);
    z-index: 2;
  }

  .slice:nth-child(3) {
    background-color: #ffce56;
    transform: rotate(120deg);
    z-index: 3;
  }

  .rating {
    margin: 40px 20px;
  }
  .rating p {
    font-size: 1.1rem;
  }
  .rating p:nth-child(1) {
    margin-bottom: 20px;
  }
  .sixth_table,
  .sixth_table_sec {
    margin-bottom: 40px;
  }
  .sixth_table thead tr th:nth-child(1) {
    width: 20%;
  }
  .sixth_table thead tr th:nth-child(2),
  .sixth_table thead tr th:nth-child(3) {
    width: 38%;
  }
  .sixth_table tbody tr td:nth-child(4),
  .sixth_table_sec tbody tr td:nth-child(5) {
    color: #2dbbc2;
    text-decoration: underline 0px rgba(45, 187, 194, 0.5);
    font-size: 16px;
  }
  .sixth_table_sec thead tr th:nth-child(1) {
    width: 20%;
  }
  .sixth_table_sec thead tr th:nth-child(2),
  .sixth_table_sec thead tr th:nth-child(3),
  .sixth_table_sec thead tr th:nth-child(4) {
    width: 28%;
  }

  @media screen and (max-width: 767px) {
    .sixth_table th,
    .sixth_table td {
      padding: 15px 29px;
      font-size: 0.7rem;
    }
  }

  .pos {
    display: inline-block;
  }
  .performance {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    border: 2px solid black;
    margin-left: 5px;
  }
  .performance .fa-info {
    font-size: 0.7rem;
  }
  /* .navbar {
    height: 64px;
  }
  .navbar ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: flex-start;
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
    .navbar ul {
      flex-direction: column;
      align-items: center;
      font-size: 0.7rem;
    }
    .navbar li {
      margin: 10px 0;
    }
  } */
  .navbar {
    height: 34px;
  }

  .navbar ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: flex-start;
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
  .service-items, .service-items2, .service-items3{
    position: absolute;
    background: #FFFFFF;
    margin-top: -10px;
    box-shadow: 0px 0px 20px rgba(16, 8, 63, 0.09);
    border-radius: 8px;
    width: 202px;
    overflow-y: hidden;
    padding: 5px 15px 0px 10px;
    display: none;
    z-index: 999;
    right: 20px;
  }
  .service-selector.open~.service-items {
    display: block;
  }
  .sv-checkbox {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 14px;
    height: 14px;
    border: 1px solid rgb(0, 0, 0, 0.2);
    border-radius: 2px;
    float: left;
    margin-left: 8.4em;
  }
  .item.checked .sv-checkbox {
    border: 1px solid #66C68F;
    transform: scale(1) !important;
  }
  .fa-check {
    color: rgba(102, 198, 143, 1);
    font-size: 8px !important;
  }
  .fa-check:before {
    content: "\f00c";
  }
  #tick1, #tick2, #tick3, #tick4, #tick5, #tick6, #tick7, #tick8, #tick9{
    display: none;
    /* color: green; */
  }
  .cal{
    width: 10em;
  }
  .dash{
    margin-left: -6px;
    margin-top: 8px;
    color: #8f8f8f;
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
  .i{
    padding-left: 5px;
    height: 18px;
    position: absolute;
  }
  .i2{
    position: absolute;
    margin-top: -3px;
    /* padding-top: 2px; */
    margin-left: 2px;
  }
  .circle {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    border: 2px solid #21B8BF;
  }
  .circle2 {
    width: 12px;
    height: 12px;
    margin-left: 25%;
    border-radius: 50%;
    border: 2px solid #66C68F;
  }
  .circle3 {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    border: 2px solid #F1AE60;
  }
  .circle2, .circle3{
    margin-left: 30px;
    padding-top: 5px;
  }
  .circle, .circle2, .circle3{
    margin-top: 6px;
    margin-right: 3px;
  }
  .bullets{
    display: flex;
    justify-content: center;
    font-size: large;
    text-align: center;
  }
  .chartcont{
    text-align: center;
  }
  .chart{
    margin: 20px;
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
</style>
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
<main class="main">
    <section class="button_sec">
        <p>Stripe-Mollure Analysis</p>
        <button>Stripe-Mollure</button>
    </section>
    <section class="drop_down_sec">
        <p class="drop_down_sec_title">Mollure anaylsis</p>
        <div class="drop_down_main_box ">
            <div class="service-selector">
                <p>Select Category</p>
                <img class="downaro" src="popups/select-down-arrow.svg" alt="">
            </div>
            <ul class="service-items position-absolute">
                <li class="item d-flex justify-content-between align-items-center">
                    <span>Lorem</span>
                    <span class="sv-checkbox">
                        <i id="tick1" class="fa fa-check check-icon" aria-hidden="true"></i>
                    </span>
                </li>
                <li class="item d-flex justify-content-between align-items-center">
                    <span>Lorem</span>
                    <span class="sv-checkbox">
                        <i id="tick2" class="fa fa-check check-icon" aria-hidden="true"></i>
                    </span>
                </li>
                <li class="item d-flex justify-content-between align-items-center">
                    <span>Lorem</span>
                    <span class="sv-checkbox">
                        <i id="tick3" class="fa fa-check check-icon" aria-hidden="true"></i>
                    </span>
                </li>
            </ul>
            <div class="service-selector2">
                <p>Select Service</p>
                <img class="downaro" src="popups/select-down-arrow.svg" alt="">
            </div>
            <ul class="service-items2 position-absolute">
                <li class="item d-flex justify-content-between align-items-center">
                    <span>Lorem</span>
                    <span class="sv-checkbox">
                        <i id="tick4" class="fa fa-check check-icon" aria-hidden="true"></i>
                    </span>
                </li>
                <li class="item d-flex justify-content-between align-items-center">
                    <span>Lorem</span>
                    <span class="sv-checkbox">
                        <i id="tick5" class="fa fa-check check-icon" aria-hidden="true"></i>
                    </span>
                </li>
                <li class="item d-flex justify-content-between align-items-center">
                    <span>Lorem</span>
                    <span class="sv-checkbox">
                        <i id="tick6" class="fa fa-check check-icon" aria-hidden="true"></i>
                    </span>
                </li>
            </ul>
            <div class="service-selector3">
            <p>Select TM</p>
            <img class="downaro" src="popups/select-down-arrow.svg" alt="">
            </div>
            <ul class="service-items3 position-absolute">
                <li class="item d-flex justify-content-between align-items-center">
                    <span>Lorem</span>
                    <span class="sv-checkbox">
                        <i id="tick7" class="fa fa-check check-icon" aria-hidden="true"></i>
                    </span>
                </li>
                <li class="item d-flex justify-content-between align-items-center">
                    <span>Lorem</span>
                    <span class="sv-checkbox">
                        <i id="tick8" class="fa fa-check check-icon" aria-hidden="true"></i>
                    </span>
                </li>
                <li class="item d-flex justify-content-between align-items-center">
                    <span>Lorem</span>
                    <span class="sv-checkbox">
                        <i id="tick9" class="fa fa-check check-icon" aria-hidden="true"></i>
                    </span>
                </li>
            </ul>
            <!-- <div class="date-selector">
            <p>Select Date-Date</p>
            <img src="popups/select-down-arrow.svg" alt="">
            </div> -->
            <span class="container">
            <span class="bx--form-item">
                <span id="range" data-date-picker data-date-picker-type="range" data-date-picker-options-inline="true" class="bx--date-picker bx--date-picker--range">
                    <span class="bx--date-picker-container">
                    <input type="text" id="date-picker-1" class="bx--date-picker__input" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="mm/dd/yyyy"
                        data-date-picker-input-from />
                    </span>
                    <p class="dash">-</p>
                    <span class="bx--date-picker-container">
                    <input type="text" id="date-picker-2" class="bx--date-picker__input" pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="mm/dd/yyyy"
                        data-date-picker-input-to />
                    </span>
                    <svg data-date-picker-icon class="bx--date-picker__icon" width="17" height="19" viewBox="0 0 17 19">
                    <path d="M12 0h2v2.7h-2zM3 0h2v2.7H3z" />
                    <path d="M0 2v17h17V2H0zm15 15H2V7h13v10z" />
                    <path d="M9.9 15H8.6v-3.9H7.1v-.9c.9 0 1.7-.3 1.8-1.2h1v6z" />
                    </svg>
                </span>
                </span>
            </span>	
            <button>Generate Results</button>
        </div>
    </section>
    <section class="table_heading">
        <p>Bookings</p>
    </section>
    <section class="first_table">
    <table>
        <thead>
        <tr>
            <th>Booking Options</th>
            <th>Number Of Bookings</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Online</td>
            <td>60(75%)</td>
        </tr>
        <tr>
            <td>Offline</td>
            <td>20(25%)</td>
        </tr>
        <tr>
            <td>Total</td>
            <td>80(100%)</td>
        </tr>
        </tbody>
    </table>
    </section>
    <section class="table_heading">
    <p>Online Booking<img class="i" src="info-white.png" style="margin-top: 4px;height: 24px;"></p>
    <!-- <div class="booking_info">
        <i class="fa-solid fa-info"></i>
    </div> -->
    </section>
    <section class="first_table">
    <table>
        <thead>
        <tr>
            <th>Booking Actions</th>
            <th>Number</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Booking Cancellations</td>
            <td>3</td>
        </tr>
        <tr>
            <td>Service(S) Cancellations<img class="i" src="info.png"></td>
            <td>2</td>
        </tr>
        <tr>
            <td>Reschedules</td>
            <td>4</td>
        </tr>
        <tr>
            <td>Booking Edits<img class="i" src="info.png"></td>
            <td>5</td>
        </tr>
        <tr>
            <td>Number of No Shows</td>
            <td>1</td>
        </tr>
        </tbody>
    </table>
    </section>
    <section class="table_heading">
    <p>Transactions</p>
    </section>
    <section class="third_table">
    <table>
        <thead>
        <tr>
            <th>Transaction Actions</th>
            <th>Number Of Transactions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Online</td>
            <td>90(90%)</td>
        </tr>
        <tr>
            <td>Direct</td>
            <td>60(60%)</td>
        </tr>
        <tr>
            <td>Non Direct</td>
            <td>30(30%)</td>
        </tr>
        <tr>
            <td>Offline</td>
            <td>10(10%)</td>
        </tr>
        <tr>
            <td>Total</td>
            <td>100(100%)</td>
        </tr>
        </tbody>
    </table>
    </section>
    <section class="table_heading">
    <p>Sales Volume<img class="i" src="info-white.png" style="margin-top: 4px;height: 24px;"></p>
    <!-- <div class="booking_info">
        <i class="fa-solid fa-info"></i>
    </div> -->
    </section>
    <section class="fourth_table">
    <div class="left_table">
        <p>Services</p>
        <table>
        <thead>
            <tr>
            <th class="serhead">Categories &<br>Services</th>
            <th class="serhead">Number Of<br> Services</th>
            <th class="serhead">Sales</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>Category 1</td>
            <td>80</td>
            <td>2000(51%)</td>
            </tr>
            <tr>
            <td>Services 1</td>
            <td>40</td>
            <td>400(11%)</td>
            </tr>
            <tr>
            <td>Services 2</td>
            <td>20</td>
            <td>400(11%)</td>
            </tr>
            <tr>
            <td>Services 3</td>
            <td>20</td>
            <td>400(11%)</td>
            </tr>
            <tr>
            <td>Services 4</td>
            <td>20</td>
            <td>800(11%)</td>
            </tr>
            <tr>
            <td>Category 2</td>
            <td>60</td>
            <td>1500</td>
            </tr>
            <tr>
            <td>Services 1</td>
            <td>30</td>
            <td>750</td>
            </tr>
            <tr>
            <td>Services 2</td>
            <td>20</td>
            <td>500</td>
            </tr>
            <tr>
            <td>Services 3</td>
            <td>100</td>
            <td>250</td>
            </tr>
            <tr>
            <td>Total</td>
            <td>140</td>
            <td>3500</td>
            </tr>
        </tbody>
        </table>
    </div>
    <div class="right_table">
        <section>
        <p>Products/Items</p>
        <table>
            <thead>
            <tr>
                <th>Products/Items</th>
                <th>Number Of<br>Services</th>
                <th>Sales</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Products/Items</td>
                <td>10</td>
                <td>200 EUR</td>
            </tr>
            </tbody>
        </table>
        </section>
        <section>
        <p>Others</p>
        <table>
            <thead>
            <tr>
                <th>Others</th>
                <th>Number Of<br>Services</th>
                <th>Sales</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Others</td>
                <td>2</td>
                <td>36 EUR</td>
            </tr>
            </tbody>
        </table>
        </section>
    </div>
    </section>
    <section class="total_sales_btn">
    <p>Total sales: 1800 EUR</p>
    </section>
    <div class="chartcont">
    <h4><b>Total Sales</b></h4>
    <img class="chart" src="pie-chart.png" alt="" height="262">
    <div class="bullets">
    <div class="circle"></div><p>Services</p>
    <div class="circle2"></div><p>Product/Items</p>
    <div class="circle3"></div><p>Others</p>
    </div>
    </div>
    <section class="table_heading">
    <p>Performance</p>
    </section>
    <section class="fifth_table">
    <table>
        <thead>
        <tr>
            <th>TM</th>
            <th>
            Productivity
                <!-- <div class="performance">
                <i class="fa-solid fa-info"></i>
                </div> -->
                <img class="i2" src="info.png">
            </th>
            <th>
            Efficiency
                <!-- <div class="performance">
                <i class="fa-solid fa-info"></i>
                </div> -->
                <img class="i2" src="info.png">
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>TM A</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>TM B</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>TM C</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Overall</td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
    </section>
    <section class="table_heading">
    <p>Rating & Review</p>
    </section>
    <div class="rating">
    <p>Total overall Rating: 4</p>
    <p>Total Reviews: 26</p>
    </div>
    <section class="sixth_table_sec">
    <table>
        <thead>
        <tr>
            <th>Rating Scale</th>
            <th>Rating Threshold</th>
            <th>Rating & Reviews</th>
            <th>TM</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Bad</td>
            <td>1-3</td>
            <td>2</td>
            <td>TM A ,TM B</td>
            <td class="view">View</td>
        </tr>
        <tr>
            <td>Good</td>
            <td>3.5-4</td>
            <td>8</td>
            <td>TM A</td>
            <td class="view">View</td>
        </tr>
        <tr>
            <td>Excellent</td>
            <td>4.5-5</td>
            <td>17</td>
            <td>TM C</td>
            <td class="view">View</td>
        </tr>
        </tbody>
    </table>
    </section>
</main>
@include('salon/footer')
<script>

const navbar = document.querySelector('.navbar');
const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelectorAll('.navbar a');
const contentDiv = document.querySelector('.small_box');

hamburger.addEventListener('click', () => {
  navbar.classList.toggle('open');
  if (navbar.classList.contains('open')) {
    contentDiv.style.marginTop = '240px'; // Adjust the margin-top value as needed
  } else {
    contentDiv.style.marginTop = '34px'; // Adjust the margin-top value as needed
  }
});

navLinks.forEach((link) => {
  link.addEventListener('click', () => {
    navbar.classList.remove('open');
    contentDiv.style.marginTop = '34px';
  });
});

      window.addEventListener('DOMContentLoaded', function() {
        var navItems = document.querySelectorAll('.navbar li');
  
        // Add click event listener to each navigation item
        navItems.forEach(function(item) {
          item.addEventListener('click', function() {
            // Remove active class from all items
            navItems.forEach(function(navItem) {
              navItem.classList.remove('active');
            });
  
            // Add active class to the clicked item
            item.classList.add('active');
          });
        });
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


  var ticks = document.querySelectorAll('.sv-checkbox i');
  
  ticks.forEach(function(tick) {
    var checkbox = tick.parentElement;
    var isChecked = false;

    checkbox.addEventListener('click', function() {
      isChecked = !isChecked;
      tick.style.display = isChecked ? 'block' : 'none';
      checkbox.style.borderColor = isChecked ? 'rgba(102, 198, 143, 1)' : 'rgb(180 178 178)';
    });
  });

// Get the necessary elements
var selectCategory = document.querySelector(".service-selector");
var serviceItems = document.querySelector(".service-items");

// Add event listener to the "Select Category" element
selectCategory.addEventListener("click", function() {
  // Toggle the display property of the serviceItems element
  if (serviceItems.style.display === "block") {
    serviceItems.style.display = "none";
  } else {
    serviceItems.style.display = "block";
  }
});

var selectCategory2 = document.querySelector(".service-selector2");
var serviceItems2 = document.querySelector(".service-items2");

// Add event listener to the "Select Category" element
selectCategory2.addEventListener("click", function() {
  // Toggle the display property of the serviceItems element
  if (serviceItems2.style.display === "block") {
    serviceItems2.style.display = "none";
  } else {
    serviceItems2.style.display = "block";
  }
});

var selectCategory3 = document.querySelector(".service-selector3");
var serviceItems3 = document.querySelector(".service-items3");

// Add event listener to the "Select Category" element
selectCategory3.addEventListener("click", function() {
  // Toggle the display property of the serviceItems element
  if (serviceItems3.style.display === "block") {
    serviceItems3.style.display = "none";
  } else {
    serviceItems3.style.display = "block";
  }
});

const langBox = document.querySelector('.lang_box');
  const langOp = document.querySelector('.lang_op');

  langBox.addEventListener('click', () => {
    if (langOp.style.display === "block") {
    langOp.style.display = "none";
  } else {
    langOp.style.display = "block";
  }
  });

  langOp.addEventListener('click', () => {
    langOp.style.display = 'none';
  });

var profselector = document.querySelector(".profile_name");
var logitem = document.querySelector(".log");

// Add event listener to the "Select Category" element
profselector.addEventListener("click", function() {
  // Toggle the display property of the serviceItems element
  if (logitem.style.display === "block") {
    logitem.style.display = "none";
  } else {
    logitem.style.display = "block";
  }
});

var Dateselector = document.querySelector(".date-selector");
var Dateitem = document.querySelector(".container");

// Add event listener to the "Select Category" element
Dateselector.addEventListener("click", function() {
  // Toggle the display property of the serviceItems element
  if (Dateitem.style.display === "block") {
    Dateitem.style.display = "none";
  } else {
    Dateitem.style.display = "block";
  }
});


const range = document.getElementById('range');
const datepicker = new CarbonComponents.DatePicker(range, {inline: true, static: true});
    </script>
        <script src="js/carbon-components.js"></script>
</body>
</html>