<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.truelysell.com/template3/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Jun 2023 09:48:52 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Truelysell | Template</title>

<!-- Favicons -->
<link rel="shortcut icon" href="{{ asset('admin/assets/img/favicon.png') }}">

<!-- Select 2 -->
<link rel="stylesheet" href="{{ asset('admin/assets/css/select2.min.css') }}">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}">

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="{{ asset('admin/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/plugins/fontawesome/css/all.min.css') }}">

<!-- Map CSS -->
<link rel="stylesheet" href="{{ asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}">

<!-- DataTable CSS -->
<link rel="stylesheet" href="{{ asset('admin/assets/css/dataTables.bootstrap4.min.css') }}">

<!-- Feather CSS -->
<link rel="stylesheet" href="{{ asset('admin/assets/plugins/feather/feather.css') }}">

<!-- Main CSS -->
<link rel="stylesheet" href="{{ asset('admin/assets/css/admin.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/css/image.css') }}">



</head>

<body>
    <div class="main-wrapper">
    
         <!-- Header -->
         <div class="header">
            <div class="header-left"> 
                <a href="index.html" class="logo">
                    <img src="assets/img/logo.svg" alt="Logo" width="30" height="30">
                </a>
                <a href="index.html" class=" logo-small">
                    <img src="assets/img/logo-small.svg" alt="Logo" width="30" height="30">
                </a>
            </div>
            <a class="mobile_btn" id="mobile_btn" href="javascript:void(0);">
                <i class="fas fa-align-left"></i>
            </a>
            <div class="header-split">
                <div class="page-headers">
                    <div class="search-bar">
						<span><i class="fe fe-search"></i></span>
						<input type="text" placeholder="Search" class="form-control">
					</div>
                </div>
                <ul class="nav user-menu">
                    <!-- Notifications -->
                    <li class="nav-item">
                        <a href="../index.html" class="viewsite" ><i class="fe fe-globe me-2"></i>View Site</a>
                    </li>
                    <li class="nav-item dropdown has-arrow dropdown-heads flag-nav">
                        <a class="nav-link" data-bs-toggle="dropdown" href="javascript:void(0);" role="button">
                            <img src="assets/img/flags/us1.png" alt="" height="20"> 
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="assets/img/flags/us.png" class="me-2" alt="" height="16"> English
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="assets/img/flags/fr.png" class="me-2" alt="" height="16"> French
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="assets/img/flags/es.png" class="me-2" alt="" height="16"> Spanish
                            </a>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="assets/img/flags/de.png" class="me-2" alt="" height="16"> German
                            </a>
                        </div>
                    </li>
                    <li class="nav-item  has-arrow dropdown-heads ">
                        <a href="javascript:void(0);" class="toggle-switch">
                            <i class="fe fe-moon"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown has-arrow dropdown-heads ">
                        <a href="javascript:void(0);" data-bs-toggle="dropdown">
                            <i class="fe fe-bell"></i>
                        </a>
                        <div class="dropdown-menu notifications">
                            <div class="topnav-dropdown-header">
                                <span class="notification-title">Notifications</span>
                                <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                            </div>
                            <div class="noti-content">
                                <ul class="notification-list">
                                    <li class="notification-message">
                                        <a href="admin-notification.html">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm flex-shrink-0">
                                                    <img class="avatar-img rounded-circle" alt="" src="assets/img/provider/provider-01.jpg">
                                                </span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Thomas Herzberg have been subscribed</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">15 Sep 2020 10:20 PM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="admin-notification.html">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm flex-shrink-0">
                                                    <img class="avatar-img rounded-circle" alt="" src="assets/img/provider/provider-02.jpg">
                                                </span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Matthew Garcia have been subscribed</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">13 Sep 2020 03:56 AM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="admin-notification.html">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm flex-shrink-0">
                                                    <img class="avatar-img rounded-circle" alt="" src="assets/img/provider/provider-03.jpg">
                                                </span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Yolanda Potter have been subscribed</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">12 Sep 2020 09:25 PM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="admin-notification.html">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm flex-shrink-0">
                                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-04.jpg">
                                                </span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Ricardo Flemings have been subscribed</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">11 Sep 2020 06:36 PM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="admin-notification.html">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm flex-shrink-0">
                                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-05.jpg">
                                                </span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Maritza Wasson have been subscribed</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">10 Sep 2020 08:42 AM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="admin-notification.html">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm flex-shrink-0">
                                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-06.jpg">
                                                </span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Marya Ruiz have been subscribed</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">9 Sep 2020 11:01 AM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="admin-notification.html">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm flex-shrink-0">
                                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/provider/provider-07.jpg">
                                                </span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details">
                                                        <span class="noti-title">Richard Hughes have been subscribed</span>
                                                    </p>
                                                    <p class="noti-time">
                                                        <span class="notification-time">8 Sep 2020 06:23 AM</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="topnav-dropdown-footer">
                                <a href="admin-notification.html">View all Notifications</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item  has-arrow dropdown-heads ">
                        <a href="javascript:void(0);" class="win-maximize">
                            <i class="fe fe-maximize" ></i>
                        </a>
                    </li>
                    
                    
                    <!-- User Menu -->
                        
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0)" class="user-link  nav-link" data-bs-toggle="dropdown">
                            <span class="user-img">
                                <img class="rounded-circle" src="{{ asset('assets/img/user.jpg') }}" width="40" alt="Admin">
                                <span class="animate-circle"></span>
                            </span>
                            <span class="user-content">
                                <span class="user-name">{{ auth()->user()->name }}</span>
                                <span class="user-details">{{ auth()->user()->name }}</span>
                            </span>
                        </a>
                        <div class="dropdown-menu menu-drop-user">
                            <div class="profilemenu ">
                                <div class="user-detials">
                                    <a href="account.html">
                                        <span class="profile-image">
                                            <img src="assets/img/user.jpg" alt="img" class="profilesidebar">
                                        </span>
                                        <span class="profile-content">
                                            <span>{{ auth()->user()->name }}</span>
                                            <span><span class="__cf_email__" data-cfemail="bef4d1d6d0fed9d3dfd7d290ddd1d3">[email&#160;protected]</span></span>
                                        </span>
                                    </a>
                                </div>
                                <div class="subscription-menu">
                                    <ul>
                                        <li>
                                            <a href="account-settings.html" >Profile</a>
                                        </li>
                                        <li>
                                            <a href="localization.html">Settings</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="subscription-logout">
                                    <a href="signin.html">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- /User Menu -->
                </ul>
            </div>
            
        </div>
        <!-- /Header -->
        
        @include('admin.sidebar')
        @yield('content')
       
    </div>
    <div class="footer">
        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="https://techxers.co.ke/" target="_blank">Techxers
                    Limited</a> {{ now()->year }}</p>
        </div>
    </div>

    <div id="overlayer">
        <span class="loader">
        <span class="loader-inner"></span>
        </span>
    </div>

    <!-- jQuery -->
    <script data-cfasync="false" src="https://html.truelysell.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{ asset('admin/assets/js/jquery-3.6.0.min.js') }}"></script>
    
<!-- Select 2 JS -->
<script src="{{ asset('admin/assets/js/select2.min.js') }}"></script>

<!-- Chart JS -->
<script src="{{ asset('admin/assets/plugins/apexchart/apexcharts.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/apexchart/chart-data.js') }}"></script>

<!-- Bootstrap Core JS -->
<script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Feather Icon JS -->
<script src="{{ asset('admin/assets/js/feather.min.js') }}"></script>

<!-- DataTable JS -->
<script src="{{ asset('admin/assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/dataTables.bootstrap4.min.js') }}"></script>

<!-- Slimscroll JS -->
<script src="{{ asset('admin/assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- Map JS -->
<script src="{{ asset('admin/assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/jvectormap/jquery-jvectormap-ru-mill.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/jvectormap/jquery-jvectormap-us-aea.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/jvectormap/jquery-jvectormap-uk_countries-mill.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/jvectormap/jquery-jvectormap-in-mill.js') }}"></script>
<script src="{{ asset('admin/assets/js/jvectormap.js') }}"></script>

<!-- Sweetalert 2 -->
<script src="{{ asset('admin/assets/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/sweetalert/sweetalerts.min.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('admin/assets/js/admin.js') }}"></script>


</body>


<!-- Mirrored from html.truelysell.com/template3/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Jun 2023 09:50:59 GMT -->
</html>