<div class="header">
    <div class="header-left">
        <a href="{{ route('dashboard') }}" class="logo">
            <img src="{{ asset('assets/img/logo.png') }}" width="40" height="40" alt="">
        </a>
    </div>
    <div class="page-title-box pull-left">
        <h3>{{ config('dashboard.title') }}</h3>
    </div>
    <a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
    <ul class="nav navbar-nav navbar-right user-menu pull-right">
        {{-- <li class="dropdown hidden-xs">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge bg-primary pull-right">3</span></a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span>Notifications</span>
                </div>
                <div class="drop-scroll">
                    <ul class="media-list">
                        <li class="media notification-message">
                            <a href="activities.html">
                                <div class="media-left">
                                    <span class="avatar">
                                        <img alt="John Doe" src="{{ asset('assets/img/user.jpg') }}" class="img-responsive img-circle">
                                    </span>
                                </div>
                                <div class="media-body">
                                    <p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
                                    <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                </div>
                            </a>
                        </li>
                        <li class="media notification-message">
                            <a href="activities.html">
                                <div class="media-left">
                                    <span class="avatar">V</span>
                                </div>
                                <div class="media-body">
                                    <p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
                                    <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                </div>
                            </a>
                        </li>
                        <li class="media notification-message">
                            <a href="activities.html">
                                <div class="media-left">
                                    <span class="avatar">L</span>
                                </div>
                                <div class="media-body">
                                    <p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
                                    <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                </div>
                            </a>
                        </li>
                        <li class="media notification-message">
                            <a href="activities.html">
                                <div class="media-left">
                                    <span class="avatar">G</span>
                                </div>
                                <div class="media-body">
                                    <p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
                                    <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                </div>
                            </a>
                        </li>
                        <li class="media notification-message">
                            <a href="activities.html">
                                <div class="media-left">
                                    <span class="avatar">V</span>
                                </div>
                                <div class="media-body">
                                    <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
                                    <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="activities.html">View all Notifications</a>
                </div>
            </div>
        </li> --}}
        {{-- <li class="dropdown hidden-xs">
            <a href="javascript:;" id="open_msg_box" class="hasnotifications"><i class="fa fa-comment-o"></i> <span class="badge bg-primary pull-right">8</span></a>
        </li> --}}
        <li class="dropdown">
            <a href="profile.html" class="dropdown-toggle user-link" data-toggle="dropdown" title="Admin">
                <span class="user-img"><img class="img-circle" src="{{ asset(Auth::user()->image_path ?? 'assets/img/user.jpg') }}" width="40" alt="User Name">
                    <span class="status online"></span></span>
                    <span> {{ Auth::user()->name }}</span>
                <i class="caret"></i>
            </a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('profile') }}"><i class="fa fa-user"></i> My Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
        </li>
    </ul>
    <div class="dropdown mobile-user-menu pull-right">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <ul class="dropdown-menu pull-right">
            <li><a href="{{ route('profile') }}">My Profile</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="{{ route('logout') }}">Logout</a></li>
        </ul>
    </div>
</div>
