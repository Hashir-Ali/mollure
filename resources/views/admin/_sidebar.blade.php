 <div class="sidebar-left">
            <!--responsive view logo start-->
            <div class="logo dark-logo-bg visible-xs-* visible-sm-*">
                <a href="index.html">
                    <img src="img/logo-icon.png" alt="">
                    <!--<i class="fa fa-maxcdn"></i>-->
                    <span class="brand-name">SlickLab</span>
                </a>
            </div>
            <!--responsive view logo end-->

            <div class="sidebar-left-info">
                <!-- visible small devices start-->
                <div class=" search-field">  </div>
                <!-- visible small devices end-->

                <!--sidebar nav start-->
                <ul class="nav nav-pills nav-stacked side-navigation">
                    <li>
                        <h3 class="navigation-title">Navigation</h3>
                    </li>
                    <li class="active"><a href="{{route('admin_dashboard')}}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                    <li ><a href="#"><i class="fa fa-list"></i> <span>Orders</span></a></li>
                   
                    <li>
                        <h3 class="navigation-title">Components</h3>
                    </li>
                    <li ><a href="#"><i class="fa fa-user"></i> <span>Users</span></a></li>
                    
                    <li class="menu-list">
                        <a href="javascript:;"><i class="fa fa-list"></i> <span>Professionals</span></a>
                        <ul class="child-list">
                            <li><a href="{{route('admin_professionals_list')}}"> List</a></li>
                            <li><a href="{{route('admin_add_professionals')}}"> Add New</a></li>
                        </ul>
                    </li>
                    <li ><a href="{{route('municiplaity')}}"><i class="fa fa-file-text"></i> <span>Municiplaity</span></a></li>
                    <li ><a href="{{route('provinces')}}"><i class="fa fa-file-text"></i> <span>Provinces</span></a></li>
                    <li ><a href="{{route('visitor_query_list')}}"><i class="fa fa-list"></i> <span>Visitor Queries</span></a></li>
                    <li>
                        <h3 class="navigation-title">Setting</h3>
                    </li>
                    <li ><a href="{{route('category')}}"><i class="fa fa-file-text"></i> <span>Categories</span></a></li>
                    <li ><a href="{{route('language_keyword')}}"><i class="fa fa-file-text"></i> <span>Language</span></a></li>
                    <li ><a href="{{route('page_content')}}"><i class="fa fa-file-text"></i> <span>Page Content</span></a></li>
                    <li ><a href="{{route('menus')}}"><i class="fa fa-file-text"></i> <span>Menus</span></a></li>
                    <li ><a href="{{route('settings')}}"><i class="fa fa-file-text"></i> <span>Settings</span></a></li>
                    <!-- <li ><a href="#"><i class="fa fa-file-text"></i> <span>Rates</span></a></li> -->
                    <li ><a href="{{route('email_template')}}"><i class="fa fa-envelope-o"></i> <span>Emails</span></a></li>

                    

                </ul>
                <!--sidebar nav end-->


            </div>
        </div>