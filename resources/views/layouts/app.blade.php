<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jobie.dexignzone.com/codeigniter/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Nov 2022 19:38:29 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Blue Color -  Admin Dashboard" />
    <meta property="og:title" content="Blue Color -  Admin Dashboard" />
    <meta property="og:description" content="Blue Color -  Admin Dashboard" />
    <meta name="format-detection" content="telephone=no">
    <title>Blue Color - Admin Dashboard </title>
    <!-- Favicon icon -->

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dashboard/assets/images/favicon.png') }}">


    <link href="{{ asset('dashboard/assets/vendor/chartist/css/chartist.min.css') }}" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('dashboard/assets/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('dashboard/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}"
        rel="stylesheet" type="text/css" />

    <link href="{{ asset('dashboard/assets/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet"
        type="text/css" />

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
 Nav header start
***********************************-->
        <div class="nav-header">
            <a href="{{ route('home') }}" class="brand-logo">
                <span class="logo-abbr" width="66.5px" height="66.5px" style="font-size: 70px">
                    B
                </span>
                <span class="brand-title" width="101.5px" height="29.5px">
                    lue Color
                </span>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
 Nav header end
***********************************-->
        <!--**********************************
 Header start
***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="#" role="button" data-bs-toggle="dropdown">
                                    <svg width="26" height="28" viewBox="0 0 26 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9.45251 25.6682C10.0606 27.0357 11.4091 28 13.0006 28C14.5922 28 15.9407 27.0357 16.5488 25.6682C15.4266 25.7231 14.2596 25.76 13.0006 25.76C11.7418 25.76 10.5748 25.7231 9.45251 25.6682Z"
                                            fill="#3E4954" />
                                        <path
                                            d="M25.3531 19.74C23.8769 17.8785 21.3995 14.2195 21.3995 10.64C21.3995 7.09073 19.1192 3.89758 15.7995 2.72382C15.7592 1.21406 14.5183 0 13.0006 0C11.4819 0 10.2421 1.21406 10.2017 2.72382C6.88095 3.89758 4.60064 7.09073 4.60064 10.64C4.60064 14.2207 2.12434 17.8785 0.647062 19.74C0.154273 20.3616 0.00191325 21.1825 0.240515 21.9363C0.473484 22.6721 1.05361 23.2422 1.79282 23.4595C3.08755 23.8415 5.20991 24.2715 8.44676 24.491C9.84785 24.5851 11.3543 24.64 13.0007 24.64C14.646 24.64 16.1524 24.5851 17.5535 24.491C20.7914 24.2715 22.9127 23.8415 24.2085 23.4595C24.9477 23.2422 25.5268 22.6722 25.7597 21.9363C25.9983 21.1825 25.8448 20.3616 25.3531 19.74Z"
                                            fill="#3E4954" />
                                    </svg>
                                    <span class="badge light text-white bg-primary rounded-circle">0</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2 media-primary">
                                                        <i class="fa fa-home"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">No New Notifications</h6>

                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="all-notification" href="#">See all notifications <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">

                                    <i class="fa fa-user-circle fa-3x"></i>
                                    <div class="header-info">
                                        <span class="text-black">{{ Auth::user()->name }}</span>
                                        <p class="fs-12 mb-0">Super Admin</p>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <a href="" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path
                                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                            </path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <span class="ms-2">Inbox </span>
                                    </a>
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
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
 Header end ti-comment-alt
***********************************-->
        <!--**********************************
 Sidebar start
***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a href="{{ route('home') }}" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="has-menu"><a class="has-arrow ai-icon" href="javascript:void()"
                            aria-expanded="false">
                            <i class="flaticon-381-television"></i>
                            <span class="nav-text">Services</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('admin-services.create')}}">Add Service</a></li>
                            <li><a href="{{route('admin-services.index')}}">All Services</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Categories</a>
                                <ul aria-expanded="false">
                                    <li><a href="{{ route('service-categories.index') }}">Categories</a></li>
                                    <li><a href="{{ route('service-subcategories.index') }}">Subcategories</a></li>
                                </ul>
                            </li>
                            <li><a href="app_calendar.html">Reviews</a></li>
                        </ul>
                    </li>
                    <li><a href="bookings" class="ai-icon" aria-expanded="false">
                            <i class="fa fa-calendar"></i>
                            <span class="nav-text">Bookings</span>
                        </a>
                    </li>

                    <li class="has-menu"><a class="has-arrow ai-icon" href="javascript:void()"
                            aria-expanded="false">
                            <i class="fa fa-blog"></i>
                            <span class="nav-text">Blog</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="flot.html">All Blogs</a></li>
                            <li><a href="morris.html">Add Blog</a></li>
                            <li><a href="chartjs.html">Categories</a></li>
                            <li><a href="chartist.html">Comments</a></li>
                        </ul>
                    </li>
                    <li class="has-menu"><a class="has-arrow ai-icon" href="javascript:void()"
                            aria-expanded="false">
                            <i class="fa fa-map"></i>
                            <span class="nav-text">Locations</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('counties.index')}}">Counties</a></li>
                            <li><a href="{{route('cities.index')}}">Cities</a></li>
                        </ul>
                    </li>
                    <li class="has-menu"><a class="has-arrow ai-icon" href="javascript:void()"
                            aria-expanded="false">
                            <i class="flaticon-381-internet"></i>
                            <span class="nav-text">Membership</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="accordion.html">Subscriptions</a></li>
                            <li><a href="alert.html">Transactions</a></li>
                        </ul>
                    </li>
                    <li class="has-menu"><a class="has-arrow ai-icon" href="javascript:void()"
                            aria-expanded="false">
                            <i class="fa fa-users"></i>
                            <span class="nav-text">User Management</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="select2.html">Admin Users</a></li>
                            <li><a href="nestable.html">Service Providers</a></li>
                            <li><a href="noui_slider.html">Users</a></li>
                        </ul>
                    </li>
                    <li><a href="widget_basic.html" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-settings-2"></i>
                            <span class="nav-text">Roles & Permissions</span>
                        </a>
                    </li>
                </ul>

                <div class="copyright">
                    <p><strong>Blue Color</strong> © {{ now()->year }} All Rights Reserved</p>

                </div>
            </div>
        </div>
        @yield('content')
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://techxers.co.ke/" target="_blank">Techxers
                        Limited</a> {{ now()->year }}</p>
            </div>
        </div>
        <!--**********************************
 Footer end
***********************************-->
    </div>

    <script src="{{ asset('dashboard/assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

    <script src="{{ asset('dashboard/assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('dashboard/assets/vendor/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/dashboard/dashboard-1.js') }}"></script>

    <script src="{{ asset('dashboard/assets/js/custom.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/deznav-init.js') }}"></script>
    {{-- <script src="{{ asset('dashboard/assets/js/demo.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/styleSwitcher.js') }}"></script> --}}
    <script src="{{ asset('dashboard/assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashboard/assets/js/plugins-init/datatables.init.js') }}"></script>


    <script>
        function carouselReview() {
            /*  testimonial one function by = owl.carousel.js */
            function checkDirection() {
                var htmlClassName = document.getElementsByTagName('html')[0].getAttribute('class');
                if (htmlClassName == 'rtl') {
                    return true;
                } else {
                    return false;

                }
            }
            jQuery('.testimonial-one').owlCarousel({
                loop: true,
                autoplay: true,
                margin: 15,
                nav: false,
                dots: false,
                left: true,
                rtl: checkDirection(),
                navText: ['', ''],
                responsive: {
                    0: {
                        items: 1
                    },
                    800: {
                        items: 2
                    },
                    991: {
                        items: 2
                    },

                    1200: {
                        items: 2
                    },
                    1600: {
                        items: 2
                    }
                }
            })
            jQuery('.testimonial-two').owlCarousel({
                loop: true,
                autoplay: true,
                margin: 15,
                nav: false,
                dots: true,
                left: true,
                rtl: checkDirection(),
                navText: ['', ''],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    991: {
                        items: 3
                    },

                    1200: {
                        items: 3
                    },
                    1600: {
                        items: 4
                    }
                }
            })
        }
        jQuery(window).on('load', function() {
            setTimeout(function() {
                carouselReview();
            }, 1000);
        });
    </script>

    <!--**********************************
        Main wrapper end
    ***********************************-->
</body>

<!-- Mirrored from jobie.dexignzone.com/codeigniter/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Nov 2022 19:39:56 GMT -->

</html>
