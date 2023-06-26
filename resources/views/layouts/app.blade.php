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
                                <img class="rounded-circle" src="assets/img/user.jpg" width="40" alt="Admin">
                                <span class="animate-circle"></span>
                            </span>
                            <span class="user-content">
                                <span class="user-name">John Smith</span>
                                <span class="user-details">Demo User</span>
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
                                            <span>John Smith</span>
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
                                <button type="submit" form="logout" class="dropdown-item ai-icon">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                        width="18" height="18" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12">
                                        </line>
                                    </svg>
                                    <span class="ms-2">Logout </span>
                                </button>
                                <form id="logout" action="{{ route('logout') }}" method="post">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </li>
                    <!-- /User Menu -->
                </ul>
            </div>
            
        </div>
        <!-- /Header -->
        
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <div class="sidebar-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/img/logo.svg') }}" class="img-fluid logo" alt="">
                    </a>
                    {{-- <a href="index.html">
                        <img src="{{ asset('assets/img/logo-small.svg') }}" class="img-fluid logo-small" alt="">
                    </a> --}}
                </div>
                {{-- <div class="siderbar-toggle">
                    <label class="switch" id="toggle_btn">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div> --}}
            </div>
            
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title m-0">
                            <h6>Home</h6>
                        </li>
                        <li><a href="{{ route('home') }}" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                        <li class="menu-title">
                            <h6>Services</h6>
                        </li>
                        <li>
                            <a href="{{route('admin-services.index')}}" ><i class="fe fe-briefcase"></i> 
                                <span>Services</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('service-categories.index') }}"><i class="fe fe-file-text"></i> 
                                <span>Categories</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('service-subcategories.index') }}"><i class="fe fe-clipboard"></i> <span>Sub Categories</span></a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="fe fe-star"></i> 
                                <span>Review</span>
                                <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="review-type.html">Review Type</a>
                                </li>
                                <li>
                                    <a href="review.html">Review</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title">
                            <h6>Booking</h6>
                        </li>
                        <li>
                            <a href="booking.html"><i class="fe fe-smartphone"></i> <span> Bookings</span></a>
                        </li>
                        <li class="menu-title">
                            <h6>Locations</h6>
                        </li>
                        <li class="submenu">
                            <li><a href="{{route('counties.index')}}"><i class="fa fa-map-marker"></i> <span>Counties</span></a></li>
                            <li><a href="{{route('cities.index')}}"><i class="fa fa-map-marker"></i> <span>Cities</span></a></li>
                        </li>
                        <li class="menu-title">
                            <h6>Finance & Accounts</h6>
                        </li>
                        <li>
                            <a href="banktransferlist.html"><i class="fe fe-file"></i> 
                                <span>Bank Transfer</span>
                            </a>
                        </li>
                        <li>
                            <a href="wallet.html"><i class="fe fe-credit-card"></i> 
                                <span>Wallet</span>
                            </a>
                        </li>
                        <li>
                            <a href="refund-request.html"><i class="fe fe-git-pull-request"></i> <span>Refund Request</span></a>
                        </li>
                        <li>
                            <a href="cash-on-delivery.html"><i class="fe fe-dollar-sign"></i> <span>Cash on Delivery</span></a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="fe fe-credit-card"></i> 
                                <span>Payouts</span>
                                <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="payout-request.html">Payout Requests</a>
                                </li>
                                <li>
                                    <a href="payout-settings.html">Payout Settings</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="sales-transactions.html"><i class="fe fe-bar-chart"></i> <span>Sales Transactions</span></a>
                        </li>
                        <li>
                            <a href="tax-rates.html"><i class="fe fe-file-text"></i> 
                                <span>Tax Rates</span>
                            </a>
                        </li>
                        <li class="menu-title">
                            <h6>Others</h6>
                        </li>
                        <li>
                            <a href="chat.html"><i class="fe fe-message-square"></i> <span>Chat</span></a>
                        </li>
                        <li class="menu-title">
                            <h6>Content</h6>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="fe fe-file"></i> 
                                <span>Pages</span>
                                <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="add-page.html">Add Page</a>
                                </li>
                                <li>
                                    <a href="pages-list.html">Pages</a>
                                </li>
                                <li>
                                    <a href="page-list.html">Pages List</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="fe fe-file-text"></i> 
                                <span>Blog</span>
                                <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="all-blog.html">All Blog</a>
                                </li>
                                <li>
                                    <a href="add-blog.html">Add Blog</a>
                                </li>
                                <li>
                                    <a href="blogs-categories.html">Categories</a>
                                </li>
                                <li>
                                    <a href="blogs-comments.html">Blog Comments</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="fe fe-map-pin"></i> 
                                <span>Location</span>
                                <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="countries.html">Countries</a>
                                </li>
                                <li>
                                    <a href="states.html">States</a>
                                </li>
                                <li>
                                    <a href="cities.html">Cities</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="testimonials.html"><i class="fe fe-star"></i> <span>Testimonials</span></a>
                        </li>
                        <li>
                            <a href="faq.html"><i class="fe fe-help-circle"></i> <span>FAQ</span></a>
                        </li>
                        <li class="menu-title">
                            <h6>Membership</h6>
                        </li>
                        <li>
                            <a href="membership.html"><i class="fe fe-user"></i> <span>Membership</span></a>
                        </li>
                        <li>
                            <a href="membership-addons.html"><i class="fe fe-user-plus"></i> <span>Membership Addons</span></a>
                        </li>
                        <li class="menu-title">
                            <h6>Reports</h6>
                        </li>
                        <li>
                            <a href="admin-earnings.html"><i class="fe fe-user"></i> 
                                <span>Admin Earnings</span>
                            </a>
                        </li>
                        <li>
                            <a href="provider-earnings.html"><i class="fe fe-dollar-sign"></i> 
                                <span>Provider Earnings</span>
                            </a>
                        </li>
                        <li>
                            <a href="membership-transaction.html"><i class="fe fe-tv"></i> 
                                <span>Membership Transaction</span>
                            </a>
                        </li>
                        <li class="menu-title">
                            <h6>User Management</h6>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i class="fe fe-user"></i> 
                                <span> Users</span>
                                <span class="menu-arrow"><i class="fe fe-chevron-right"></i></span>
                            </a>
                            <ul>
                                <li>
                                    <a href="user-list.html">Users</a>
                                </li>
                                <li>
                                    <a href="user-customers.html">Customers</a>
                                </li>
                                <li>
                                    <a href="user-providers.html">Professional </a>
                                </li> 
                            </ul>
                        </li>
                        <li>
                            <a href="roles-permissions.html"><i class="fe fe-file"></i> <span>Roles & Permissions</span></a>
                        </li>
                        <li>
                            <a href="delete-account-requests.html"><i class="fe fe-trash-2"></i> <span>Delete Account Requests</span></a>
                        </li>
                        <li class="menu-title">
                            <h6>Marketing</h6>
                        </li>
                        <li>
                            <a href="marketing-coupons.html"><i class="fe fe-bookmark"></i> <span>Coupons</span></a>
                        </li>
                        <li>
                            <a href="marketing-service.html"><i class="fe fe-briefcase"></i> <span>Service Offers</span></a>
                        </li>
                        <li>
                            <a href="marketing-featured.html"><i class="fe fe-briefcase"></i> <span>Featured Services</span></a>
                        </li>
                        <li>
                            <a href="marketing-newsletter.html"><i class="fe fe-mail"></i> <span>Email Newsletter</span></a>
                        </li>
                        <li class="menu-title">
                            <h6>Management</h6>
                        </li>
                        <li>
                            <a href="cachesystem.html"><i class="fe fe-user"></i> 
                                <span>Cache System</span>
                            </a>
                        </li>
                        <li>
                            <a href="email-templates.html"><i class="fe fe-mail"></i> <span>Email Templates</span></a>
                        </li>
                        <li>
                            <a href="sms-templates.html"><i class="fe fe-message-square"></i> <span>SMS Templates</span></a>
                        </li>
                        <li class="menu-title">
                            <h6>Support</h6>
                        </li>
                        <li>
                            <a href="contact-messages.html"><i class="fe fe-message-square"></i> <span>Contact Messages</span></a>
                        </li>
                        <li>
                            <a href="abuse-reports.html"><i class="fe fe-file-text"></i> <span>Abuse Reports</span></a>
                        </li>
                        <li>
                            <a href="announcements.html"><i class="fe fe-volume-2"></i> <span>Announcements</span></a>
                        </li>
                        <li class="menu-title">
                            <h6>Settings</h6>
                        </li>
                        <li>
                            <a href="localization.html" ><i class="fe fe-settings"></i> <span>Settings</span></a>
                        </li>
                        <li>
                            <a href="signin.html"><i class="fe fe-log-out"></i> <span>Logout</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->
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