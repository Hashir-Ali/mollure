
@include('admin/_header')
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

            <!-- page head start-->
            <div class="page-head">
                <h3>
                    Dashboard
                </h3>
                <span class="sub-title">Welcome to Mollure dashboard</span>
                <!-- <div class="state-information">
                    <div class="state-graph">
                        <div id="balance" class="chart"></div>
                        <div class="info">Balance $ 2,317</div>
                    </div>
                    <div class="state-graph">
                        <div id="item-sold" class="chart"></div>
                        <div class="info">Item Sold 1230</div>
                    </div>
                </div> -->
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">
                <!--state overview start-->
                <div class="row state-overview">
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel purple">
                            <div class="symbol">
                                <i class="fa fa-send"></i>
                            </div>
                            <div class="value white">
                                <h1 class="timer" data-from="0" data-to="320"
                                    data-speed="1000">
                                    <!--320-->
                                </h1>
                                <p>New Order</p>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel ">
                            <div class="symbol purple-color">
                                <i class="fa fa-tags"></i>
                            </div>
                            <div class="value gray">
                                <a href="{{route('admin_professionals_list')}}/approve" class="text-black">
                                <h1 class="purple-color timer" data-from="0" data-to="{{$prof_approved}}"
                                    data-speed="1000">
                                    <!--123-->
                                </h1>
                                <p>Approved Professionals</p>
                                </a>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel yellow">
                            <div class="symbol ">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="value white">
                                <a href="{{route('admin_professionals_list')}}/pending/" class="text-black">
                                <h1 class="timer" data-from="0" data-to="{{$prof}}"
                                    data-speed="1000">
                                    <!--432-->
                                </h1>
                                <p>New Professionals</p>
                                </a>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <section class="panel">
                            <div class="symbol green-color">
                                <i class="fa fa-info"></i>
                            </div>
                            <div class="value gray">
                                <a href="{{route('professionals_service_list')}}/pending" class="text-black">
                                    <h1 class="green-color timer" data-from="0" data-to="{{$pending_detail}}"
                                        data-speed="3000">
                                        <!--2345-->
                                    </h1>
                                    <p>Templates to Approve</p>
                                </a>
                            </div>
                        </section>
                    </div>
                </div>
                <!--state overview end-->



                <div class="row">
                <div class="col-md-6">
                    <section class="panel">
                        <header class="panel-heading head-border">
                            notification
                            <span class="tools pull-right">
                                <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                            </span>
                        </header>
                        <div class="noti-information notification-menu">
                            <!--notification info start-->
                            <div class="notification-list mail-list not-list">
                                <a href="javascript:;" class="single-mail">
                                        <span class="icon bg-primary">
                                            <i class="fa fa-envelope-o"></i>
                                        </span>
                                    <span class="purple-color">John Doe</span> send you a mail
                                    <p>
                                        <small>Just Now</small>
                                    </p>
                                        <span class="read tooltips" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="left">
                                            <i class="fa fa-circle-o"></i>
                                        </span>
                                </a>
                                <a href="javascript:;" class="single-mail">
                                        <span class="icon bg-success">
                                            <i class="fa fa-comments-o"></i>
                                        </span>
                                    <span class="red-color">Jim Doe</span> mentioned you a post
                                    <p>
                                        <small>30 Mins Ago</small>
                                    </p>
                                        <span class="read tooltips" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="left">
                                            <i class="fa fa-circle-o"></i>
                                        </span>
                                </a>
                                <!-- <a href="javascript:;" class="single-mail">
                                        <span class="icon bg-warning">
                                            <i class="fa fa-warning"></i>
                                        </span> Application Error
                                    <p>
                                        <small> 2 Days Ago</small>
                                    </p>
                                        <span class="read tooltips" data-original-title="Mark as Unread" data-toggle="tooltip" data-placement="left">
                                            <i class="fa fa-circle-o"></i>
                                        </span>
                                </a>
                                <a href="javascript:;" class="single-mail">
                                        <span class="icon bg-dark">
                                           <i class="fa fa-database"></i>
                                        </span>
                                    <strong>Database Overloaded 24%</strong>
                                    <p>
                                        <small>1 Week Ago</small>
                                    </p>
                                        <span class="un-read tooltips" data-original-title="Mark as Read" data-toggle="tooltip" data-placement="left">
                                            <i class="fa fa-circle"></i>
                                        </span>
                                </a>
                                <a href="javascript:;" class="single-mail">
                                        <span class="icon bg-danger">
                                            <i class="fa fa-warning"></i>
                                        </span>
                                    <strong>Server Failed Notification</strong>

                                    <p>
                                        <small>10 Days Ago</small>
                                    </p>
                                        <span class="un-read tooltips" data-original-title="Mark as Read" data-toggle="tooltip" data-placement="left">
                                            <i class="fa fa-circle"></i>
                                        </span>
                                </a> -->

                                <a href="javascript:;" class="single-mail text-center">
                                    View All Notification
                                </a>

                            </div>
                            <!--notification info end-->
                        </div>
                    </section>
                </div>
                <div class="col-md-6">
                    <section class="panel post-wrap pro-box team-member">
                        
                        <aside class="mr-1">
                            <header class="panel-heading head-border bg-primary">
                                New Professionals
                                <!-- <span class="action-tools pull-right">
                                    <a class="fa fa-reorder" href="javascript:;"></a>
                                </span> -->
                            </header>
                            <div class="post-info">
                                <ul class="team-list cycle-pager external" id='no-template-pager'>
                                    <li>
                                        <a href="javascript:;">
                                            
                                            <span class="name">Alison Jones</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            
                                            <span class="name">Joliana Devis</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            
                                            <span class="name">David Alexzender</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            
                                            <span class="name">Emma Rose</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            
                                            <span class="name">Jacqueline Jones</span>
                                        </a>
                                    </li>

                                </ul>
                                <div class="add-more-member">
                                    <a href="javascript:;" class=" ">View All</a>
                                    <a href="javascript:;" class="add-btn pull-right">
                                        +
                                    </a>
                                </div>
                            </div>
                        </aside>
                        <aside>
                            <header class="panel-heading head-border bg-success">
                                New Users
                                <!-- <span class="action-tools pull-right">
                                    <a class="fa fa-reorder" href="javascript:;"></a>
                                </span> -->
                            </header>
                            <div class="post-info">
                                <ul class="team-list cycle-pager external" id='no-template-pager'>
                                    <li>
                                        <a href="javascript:;">
                                            
                                            <span class="name">Alison Jones</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            
                                            <span class="name">Joliana Devis</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            
                                            <span class="name">David Alexzender</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            
                                            <span class="name">Emma Rose</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <!-- <span class="thumb-small">
                                                <img class="circle" src="img/img1.jpg" alt=""/>
                                                <i class="online dot"></i>
                                            </span> -->
                                            <span class="name">Jacqueline Jones</span>
                                        </a>
                                    </li>

                                </ul>
                                <div class="add-more-member">
                                    <a href="javascript:;" class=" ">View All</a>
                                    <a href="javascript:;" class="add-btn pull-right">
                                        +
                                    </a>
                                </div>
                            </div>
                        </aside>
                    </section>
                </div>
                </div>

              

              <!--   <div class="row">
                    <div class="col-md-6">
                        <section class="panel">
                            <div class="panel-body cpu-graph">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="c-info">
                                            <h3>cpu usages</h3>
                                            <p>Once this tab is open click the CPU button above the list of programs twice</p>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="easy-pie-chart">
                                            <div class="percentage-light" data-percent="33"><span>33%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-6">
                        <section class="panel">
                            <header class="panel-heading">
                                To Do List
                                <span class="tools pull-right">
                                    <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                                    <a class="t-collapse fa fa-chevron-down" href="javascript:;"></a>
                                    <a class="t-close fa fa-times" href="javascript:;"></a>
                                </span>
                            </header>
                            <div class="panel-body">
                                <ul class="todo-list-item" id="todo-list">
                                    <li class="clearfix">
                                        <div class="chk-todo pull-left">
                                            <input type="checkbox" value="0" />
                                        </div>
                                        <p class="todo-title">
                                            Donec ullamcorper nulla non metus auctor fringilla.
                                        </p>
                                        <div class="action-todo pull-right clearfix">
                                            <a href="#" class="todo-edit"><i class="icon-pencil"></i></a>
                                            <a href="#" class="todo-remove"><i class="icon-close"></i></a>
                                        </div>
                                    </li>
                                    <li class="clearfix">

                                        <div class="chk-todo pull-left">
                                            <input type="checkbox" value="0" />

                                        </div>
                                        <p class="todo-title">
                                            Etiam porta sem malesuada magna mollis euismod.
                                        </p>
                                        <div class="action-todo pull-right clearfix">
                                            <a href="#" class="todo-edit"><i class="icon-pencil"></i></a>
                                            <a href="#" class="todo-remove"><i class="icon-close"></i></a>
                                        </div>
                                    </li>
                                    <li class="clearfix">

                                        <div class="chk-todo pull-left">
                                            <input type="checkbox" value="0" />

                                        </div>
                                        <p class="todo-title">
                                            Aenean eu leo quam. Pellentesque sumon sem venenatis.
                                        </p>
                                        <div class="action-todo pull-right clearfix">
                                            <a href="#" class="todo-edit"><i class="icon-pencil"></i></a>
                                            <a href="#" class="todo-remove"><i class="icon-close"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div> -->


            </div>
            <!--body wrapper end-->


            <!--footer section start-->
            <footer>
                <?=date('Y')?> Mollure
            </footer>
            <!--footer section end-->


            <!-- Right Slidebar start -->
            <div class="sb-slidebar sb-right sb-style-overlay">
            <div class="right-bar">

            <span class="r-close-btn sb-close"><i class="fa fa-times"></i></span>

            <ul class="nav nav-tabs nav-justified-">
                <!-- <li class="">
                    <a href="#chat" data-toggle="tab">Chat</a>
                </li>
                <li class="">
                    <a href="#info" data-toggle="tab">Info</a>
                </li> -->
                <li class="active">
                    <a href="#settings" data-toggle="tab">Settings</a>
                </li>
            </ul>
            <div class="tab-content">
            <div role="tabpanel" class="tab-pane " id="chat">
                <div class="online-chat">
                    <div class="online-chat-container">
                        <div class="chat-list">
                            <h3>Chat list</h3>
                            <h5>34 Friends Online, 80 Offline</h5>
                            <a href="#" class="add-people tooltips" data-original-title="Add People" data-toggle="tooltip" data-placement="left">
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                        <div class="side-title">
                            <h2>online</h2>
                            <div class="title-border-row">
                                <div class="title-border"></div>
                            </div>
                        </div>

                        <ul class="team-list chat-list-side">
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img2.jpg" alt="">
                                <i class="online dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Alison Jones
                                </span>
                                        <small class="text-muted">Start exploring</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img3.jpg" alt="">
                                <i class="online dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Jonathan Smith
                                </span>
                                        <small class="text-muted">Alien Inside</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img1.jpg" alt="">
                                <i class="away dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Anjelina Doe
                                </span>
                                        <small class="text-muted">Screaming...</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img3.jpg" alt="">
                                <i class="busy dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Franklin Adam
                                </span>
                                        <small class="text-muted">Don't lose the hope</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img2.jpg" alt="">
                                <i class="online dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Jeff Crowford
                                </span>
                                        <small class="text-muted">Just flying</small>
                                    </div>
                                </a>
                            </li>

                        </ul>

                        <div class="side-title">
                            <h2>Offline</h2>
                            <div class="title-border-row">
                                <div class="title-border"></div>
                            </div>
                        </div>
                        <ul class="team-list chat-list-side">
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img2.jpg" alt="">
                                <i class="offline dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Alison Jones
                                </span>
                                        <small class="text-muted">Start exploring</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img3.jpg" alt="">
                                <i class="offline dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Jonathan Smith
                                </span>
                                        <small class="text-muted">Alien Inside</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img1.jpg" alt="">
                                <i class="offline dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Anjelina Doe
                                </span>
                                        <small class="text-muted">Screaming...</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img3.jpg" alt="">
                                <i class="offline dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Franklin Adam
                                </span>
                                        <small class="text-muted">Don't lose the hope</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <span class="thumb-small">
                                <img class="circle" src="img/img2.jpg" alt="">
                                <i class="offline dot"></i>
                            </span>
                                    <div class="inline">
                                            <span class="name">
                                    Jeff Crowford
                                </span>
                                        <small class="text-muted">Just flying</small>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>


                </div>


            </div>

            <div role="tabpanel" class="tab-pane " id="info">
            <div class="chat-list info">
                <h3>Latest Information</h3>
                <a  href="javascript:;" class="add-people tooltips" data-original-title="Refresh" data-toggle="tooltip" data-placement="left">
                    <i class="fa fa-repeat"></i>
                </a>
            </div>

            <div class="aside-widget">
                <div class="side-title-alt">
                    <h2>Revenue</h2>
                    <a href="#" class="close side-w-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <ul class="team-list chat-list-side info">
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-circle green-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                Received Money from John Doe
                            </span>
                            <span class="value green-color">$12300</span>
                        </div>
                    </li>
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-circle purple-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                Total Admin Template Sales
                            </span>
                            <span class="value purple-color">$40100</span>
                        </div>
                    </li>
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-circle red-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                Monty Revenue
                            </span>
                            <span class="value red-color">$322300</span>
                        </div>
                    </li>
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-circle blue-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                Received Money from John Doe
                            </span>
                            <span class="value blue-color">$1520</span>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="aside-widget">

                <div class="side-title-alt">
                    <h2>Statistics</h2>
                    <a href="#" class="close side-w-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <ul class="team-list chat-list-side info statistics border-less-list">
                    <li>
                        <div class="inline">
                                    <span class="name">
                                         Foreign Visit
                                    </span>
                            <small class="text-muted">25% Increase</small>
                        </div>
                                <span class="thumb-small">
                                    <span id="foreign-visit" class="chart"></span>
                                </span>
                    </li>
                    <li>
                        <div class="inline">
                                    <span class="name">
                                Montly Visit
                            </span>
                            <small class="text-muted">Average visit 12% Increase</small>
                        </div>
                                <span class="thumb-small">
                                    <span id="monthly-visit" class="chart"></span>
                                </span>
                    </li>
                    <li>
                        <div class="inline">
                                    <span class="name">
                                Unique Visit
                            </span>
                            <small class="text-muted">35% unique visitor </small>
                        </div>
                                <span class="thumb-small">
                                    <span id="unique-visit" class="chart"></span>
                                </span>
                    </li>
                </ul>
            </div>

            <div class="aside-widget">
                <div class="side-title-alt">
                    <h2>Notification</h2>
                    <a href="#" class="close side-w-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <ul class="team-list chat-list-side info border-less-list">
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-bell green-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                Meeting with John Doe at
                            </span>
                            <span class="value text-muted">11.30 am</span>
                        </div>
                    </li>
                    <li>
                                <span class="thumb-small">
                            <i class="fa fa-users green-color"></i>
                        </span>
                        <div class="inline">
                                    <span class="name">
                                3 membership request pending
                            </span>
                            <span class="value text-muted">John, Smith, Lira</span>
                        </div>
                    </li>
                </ul>

            </div>

            <div class="aside-widget">


            <div class="side-title-alt">
                    <h2>System</h2>
                    <a href="#" class="close side-w-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            <ul class="team-list chat-list-side info border-less-list">
                    <li>
                        <div class="inline">
                                    <span class="name">
                                Received database error report from hosting provider
                            </span>
                            <span class="value text-muted">11.30 am</span>
                        </div>
                    </li>
                    <li>
                        <div class="inline">
                                    <span class="name">
                                Hosting Renew notification
                            </span>
                            <span class="value text-muted">12.00 pm</span>
                        </div>
                    </li>

                </ul>
            </div>

            <div class="aside-widget">
                <div class="side-title-alt">
                    <h2>Work Progress</h2>
                    <a href="#" class="close side-w-close">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
                <ul class="team-list chat-list-side info border-less-list sale-monitor">
                    <li>
                        <div class="states">
                            <div class="info">
                                <div class="desc pull-left">Server Setup and Configuration</div>
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                            </div>
                            <div class="info">
                                <small class="percent pull-left text-muted">50% completed</small>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="states">
                            <div class="info">
                                <div class="desc pull-left">Website Design & Development</div>
                            </div>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                            </div>
                            <div class="info">
                                <small class="percent pull-left text-muted">85% completed</small>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            </div>

            <div role="tabpanel" class="tab-pane active" id="settings">
                <div class="chat-list bottom-border settings-head">
                    <h3>Account Setting</h3>
                    <h5>Configure your account as per your need.</h5>
                </div>
                <ul class="team-list chat-list-side info statistics border-less-list setting-list">
                    <li>
                        <div class="inline">
                                <span class="name">
                                Make my feature post public?
                            </span>
                            <small class="text-muted">Everyone will be able to see, like, comment
                                and share your feature post.</small>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small" checked/>
                        </span>
                    </li>
                    <li>
                        <div class="inline">
                                <span class="name">
                                Show offline Contacts
                            </span>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit.</small>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small2" checked/>
                        </span>
                    </li>

                    <li>
                        <div class="inline">
                                <span class="name">
                                Everyone will see my stuff
                            </span>
                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer
                                adipiscing elit.</small>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small3"/>
                        </span>
                    </li>

                </ul>

                <div class="chat-list bottom-border settings-head">
                    <h3>General Setting</h3>
                    <h5>Configure your account as per your need.</h5>
                </div>
                <ul class="team-list chat-list-side info statistics border-less-list setting-list">
                    <li>
                        <div class="inline">
                                <span class="name">
                                Show me Online
                            </span>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small4" checked/>
                        </span>
                    </li>
                    <li>
                        <div class="inline">
                                <span class="name">
                                Status visible to all
                            </span>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small5" />
                        </span>
                    </li>

                    <li>
                        <div class="inline">
                                <span class="name">
                                Show my work progess to all
                            </span>
                        </div>
                            <span class="thumb-small">
                            <input type="checkbox" class="js-switch-small6" checked/>
                        </span>
                    </li>

                </ul>

            </div>

            </div>
            </div>
            </div>
            <!-- Right Slidebar end -->

        </div>
        <!-- body content end-->
    </section>


@include('admin/_footer')

<script type="text/javascript">

    $(document).ready(function() {

        //countTo

        $('.timer').countTo();

        //owl carousel

        $("#news-feed").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true
        });
    });

    $(window).on("resize",function(){
        var owl = $("#news-feed").data("owlCarousel");
        owl.reinit();
    });

</script>

</body>
</html>
