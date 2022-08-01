<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from themescare.com/demos/jobguru-version-2/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jul 2022 05:39:31 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="jobguru | Job Board HTML Templates from Themescare">
    <meta name="keyword" content="Job, freelancer, employee, marketplace">
    <meta name="author" content="Themescare">
    <!-- Title -->
    @yield('title')
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/img/favicon/favicon-32x32.png')}}">
    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <!--Font Awesome css-->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!--Magnific css-->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <!--Owl-Carousel css-->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <!--Animate css-->
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <!--Select2 css-->
    <link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}">
    <!--Slicknav css-->
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.min.css')}}">
    <!--Bootstrap-Datepicker css-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker.min.css')}}">
    <!--Jquery UI css-->
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}">
    <!--Perfect-Scrollbar css-->
    <link rel="stylesheet" href="{{asset('assets/css/perfect-scrollbar.min.css')}}">
    <!--Site Main Style css-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!--Responsive css-->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>

<body>


    <!-- Header Area Start -->
    <header class="jobguru-header-area stick-top forsticky">
        <div class="menu-animation">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="site-logo">
                            <a href="/">
                                {{-- <img src="{{asset('assets/img/logo.png')}}" alt="jobguru" class="non-stick-logo" />
                                <img src="{{asset('assets/img/logo-2.png')}}" alt="jobguru" class="stick-logo" /> --}}
                             <h1 class="text-white"><span class="text-success">BlueColor</span></h1>   
                            </a>
                        </div>
                        <!-- Responsive Menu Start -->
                        <div class="jobguru-responsive-menu"></div>
                        <!-- Responsive Menu Start -->
                    </div>
                    <div class="col-lg-6">
                        <div class="header-menu">
                            <nav id="navigation">
                                <ul id="jobguru_navigation">
                                    {{-- <li class="active has-children">
                                        <a href="#">home</a>
                                        <ul>
                                            <li><a href="index-2.html">Home 1</a></li>
                                            <li><a href="index-3.html">Home 2</a></li>
                                        </ul>
                                    </li> --}}
                                    <li><a href="/">Home</a></li>
                                    <li class=" has-children">
                                        <a href="#">for candidates</a>
                                        <ul>
                                            <li class="has-inner-child">
                                                <li><a href="{{route('home.jobs')}}">Browse Jobs</a></li>
                                            </li>
                                            <li class="has-inner-child">
                                                <a href="#">candidate dashboard</a>
                                                <ul>
                                                    <li><a href="{{route('home.candidate.dashboard')}}">Candidate dashboard</a></li>
                                                    <li><a href="{{route('home.candidate.profile')}}">Candidate profile</a></li>
                                                    {{-- <li><a href="message.html">messages</a></li> --}}
                                                    <li><a href="{{route('home.candidate.change_password')}}">change password</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a href="#">for employers</a>
                                        <ul>
                                            <li><a href="{{route('home.employer.candidates')}}">Browse Candidates</a></li>
                                            <li><a href="{{route('home.employer.profile')}}">Public Profile</a></li>
                                            <li><a href="{{route('home.employer.dashboard.post')}}">Post A job</a></li>
                                            <li class="has-inner-child">
                                                <a href="#">employer dashboard</a>
                                                <ul>
                                                    <li><a href="{{route('home.employer.dashboard.index')}}">employer dashboard</a></li>
                                                    <li><a href="{{route('home.employer.dashboard.profile')}}">edit profile</a></li>
                                           
                                                    <li><a href="{{route('home.employer.dashboard.applications')}}">manage applications</a></li>
                                                    <li><a href="{{route('home.employer.dashboard.change_password')}}">change password</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('home.about')}}">About us</a></li>
                                    <li><a href="{{route('home.contact')}}">contact us</a></li>
                                    <li class="has-children">
                                        <a href="#"> sign up</a>
                                        <ul>
                                            <li><a href="{{route('register')}}">Candidate</a></li>
                                            <li><a href="{{route('register')}}">Employer</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="header-right-menu">
                            <ul>
                                <li><a href="{{route('home.jobs')}}" class="post-jobs">jobs</a></li>
                                <li><a href="{{route('login')}}"><i class="fa fa-lock"></i>login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->
    @yield('content')

    <!-- Footer Area Start -->
    <footer class="jobguru-footer-area">
        <div class="footer-top section_50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer-widget">
                            <div class="footer-logo">
                                <a href="/">
                                    {{-- <img src="{{asset('assets/img/logo.png')}}" alt="jobguru logo" /> --}}
                                    <h1 class="text-white"><span class="text-success">BlueColor</span></h1> 
                                </a>
                            </div>
                            <p>Home of Blue Color Jobs</p>
                            <ul class="footer-social">
                                <li><a href="#" class="fb"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" class="gp"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" class="skype"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-md-6">
                        <div class="single-footer-widget">
                            <h3>recent post</h3>
                            <div class="latest-post-footer clearfix">
                                <div class="latest-post-footer-left">
                                    <img src="{{asset('assets/img/footer-post-2.jpg')}}" alt="post" />
                                </div>
                                <div class="latest-post-footer-right">
                                    <h4><a href="#">Website design trends for 2018</a></h4>
                                    <p>January 14 - 2018</p>
                                </div>
                            </div>
                            <div class="latest-post-footer clearfix">
                                <div class="latest-post-footer-left">
                                    <img src="{{asset('assets/img/footer-post-3.jpg')}}" alt="post" />
                                </div>
                                <div class="latest-post-footer-right">
                                    <h4><a href="#">UI experts and modern designs</a></h4>
                                    <p>January 12 - 2018</p>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer-widget">
                            <h3>main links</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right "></i> About BlueColor</a></li>
          
                                <li><a href="#"><i class="fa fa-angle-double-right "></i> Terms & Conditions</a>
                                </li>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer-widget footer-contact">
                            <h3>Contact Info</h3>
                            <p><i class="fa fa-map-marker"></i> Nairobi, Kenya</p>
                            <p><i class="fa fa-phone"></i> 012-3456-789</p>
                            <p><i class="fa fa-envelope-o"></i> info@bluecolor.com</p>
                            <p><i class="fa fa-envelope-o"></i> info@bluecolor.com</p>
                            <p><i class="fa fa-fax"></i> 112-3456-7898</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-left">
                            <p>Copyright &copy; {{now()->year}} BlueColor. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->


    <!--Jquery js-->
    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <!--Bootstrap js-->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <!--Bootstrap Datepicker js-->
    <script src="{{asset('assets/js/bootstrap-datepicker.min.js')}}"></script>
    <!--Perfect Scrollbar js-->
    <script src="{{asset('assets/js/jquery-perfect-scrollbar.min.js')}}"></script>
    <!--Owl-Carousel js-->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <!--SlickNav js-->
    <script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>
    <!--Magnific js-->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!--Select2 js-->
    <script src="{{asset('assets/js/select2.min.js')}}"></script>
    <!--jquery-ui js-->
    <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
    <!--Jarallax js-->
    <script src="{{asset('assets/js/jarallax.min.js')}}"></script>
    <script src="{{asset('assets/js/jarallax-video.min.js')}}"></script>
    <!--Main js-->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>

<!-- Mirrored from themescare.com/demos/bluecolor-version-2/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Jul 2022 05:40:48 GMT -->

</html>
