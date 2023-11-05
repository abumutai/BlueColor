<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.truelysell.com/template3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Jun 2023 09:37:43 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>BlueColor</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon-32x32.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <!-- Feather CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}">

    <!-- Select CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">

    <!-- Aos CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/aos/aos.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


</head>

<body>


    <div class="main-wrapper">

        <!-- Header -->
        <header class="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg header-nav">
                    <div class="navbar-header">
                        <a id="mobile_btn" href="javascript:void(0);">
                            <span class="bar-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </a>
                        <div class="site-logo">
                            <a href="/">
                                {{-- <img src="{{asset('assets1/img/logo.png')}}" alt="jobguru" class="non-stick-logo" />
                                <img src="{{asset('assets1/img/logo-2.png')}}" alt="jobguru" class="stick-logo" /> --}}
                                <h1 class="text-white"><span class="text-primary">BlueColor</span></h1>
                            </a>
                        </div>
                    </div>
                    <div class="main-menu-wrapper">
                        <div class="menu-header">
                            <a href="index.html" class="menu-logo">
                                <img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
                            </a>
                            <a id="menu_close" class="menu-close" href="javascript:void(0);"> <i
                                    class="fas fa-times"></i></a>
                        </div>
                        <ul class="main-nav">
                            <li class="has-submenu megamenu active">
                                <a href="javascript:void(0);">Home <!--<i class="fas fa-chevron-down">--></i></a>
                                {{-- <ul class="submenu mega-submenu">
                                    <li>
                                        <div class="megamenu-wrapper">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <div class="single-demo active">
                                                        <div class="demo-img">
                                                            <a href="index.html"><img
                                                                    src="{{ asset('assets/img/home-01.jpg') }}"
                                                                    class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="index.html">Electrical Home</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo">
                                                        <div class="demo-img">
                                                            <a href="index-2.html"><img
                                                                    src="{{ asset('assets/img/home-02.jpg') }}"
                                                                    class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="index-2.html">Cleaning Home</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo">
                                                        <div class="demo-img">
                                                            <a href="index-3.html"><img
                                                                    src="{{ asset('assets/img/home-03.jpg') }}"
                                                                    class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="index-3.html">Saloon Home</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo">
                                                        <div class="demo-img">
                                                            <a href="index-4.html"><img
                                                                    src="{{ asset('assets/img/home-04.jpg') }}"
                                                                    class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="index-4.html">Catering Home</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo">
                                                        <div class="demo-img">
                                                            <a href="index-5.html"><img
                                                                    src="{{ asset('assets/img/home-05.jpg') }}"
                                                                    class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="index-5.html">Car Wash Home</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo">
                                                        <div class="demo-img">
                                                            <a href="index-6.html"><img
                                                                    src="{{ asset('assets/img/home-06.jpg') }}"
                                                                    class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="index-6.html">Cleaning Home</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo">
                                                        <div class="demo-img">
                                                            <a href="index-7.html"><img
                                                                    src="{{ asset('assets/img/home-07.jpg') }}"
                                                                    class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="index-7.html">House Problem Home</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo">
                                                        <div class="demo-img">
                                                            <a href="index-8.html"><img
                                                                    src="{{ asset('assets/img/home-08.jpg') }}"
                                                                    class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="index-8.html">Pet Grooming Home</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="single-demo">
                                                        <div class="demo-img">
                                                            <a href="index-9.html"><img
                                                                    src="{{ asset('assets/img/home-09.jpg') }}"
                                                                    class="img-fluid" alt="img"></a>
                                                        </div>
                                                        <div class="demo-info">
                                                            <a href="index-9.html">Mechanic Home</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul> --}}
                            </li>
                            <li>
                                <a href="">Services</i></a>
                            </li>
                            <li class="has-submenu">
                                <a href="#">Categories <i class="fas fa-chevron-down"></i></a>
                                <ul class="submenu"><!--get the list of the categories-->
                                    @foreach (Qs::serviceCategories() as $category)
                                    <li><a href="">{{ $category->title }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{ route('home.howitworks') }}">How it works</a></li>
                            <li><a href="{{ route('home.about') }}">About Us</a></li>
                            <li><a href="{{ route('blog.index') }}">Blog</a></li>
                            <li><a href="{{ route('home.contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                    @guest
                        <ul class="nav header-navbar-rht">
                            <li class="nav-item">
                            <li class="nav-link header-reg">
                            <li class="login-link">
                                <a href="{{ route('choosesignup') }}">Register</a>
                            </li>
                            </li>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link header-login" href="{{ route('users.login') }}"><i
                                        class="fa-regular fa-circle-user me-2"></i>Login</a>
                            </li>
                        </ul>
                    @endguest
                
                    
                @auth
                    
                    <!-- User Menu -->
						<li class="nav-item dropdown has-arrow account-item">
							<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
								<div class="user-infos">
									<span class="user-img">
										<img src="{{ asset('assets/img/profiles/avatar-02.jpg') }}" class="rounded-circle" alt="">
									</span>
									<div class="user-info">
										<h6>{{ Auth::user()->name }}</h6>
										<p>{{ Auth::user()->name }}</p>
									</div>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-end emp">
								<a class="dropdown-item" href="customer-profile.html">
									<i class="feather-user me-2"></i> Profile
								</a>
								<a class="dropdown-item" href="{{ route('logout') }}">
									<i class="feather-log-out me-2"></i> Logout
								</a>
							</div>
						</li>
						<!-- /User Menu -->
                        
                @endauth

                </nav>
            </div>
        </header>
        <!-- /Header -->
        @yield('content')
        <!-- Footer -->
        <!-- Cursor -->

       
        <footer class="footer">
		
			<!-- Footer Top -->
			<div class="footer-top aos" data-aos="fade-up">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget">
								<div class="footer-logo">
									<a href=""><img src="{{asset('assets1/img/logo.png')}}" alt="logo">
                                        <h1 class="text-white"><span class="text-primary">BlueColor</span></h1>
                                    </a>
                                    
								</div>
								<div class="footer-content">
                                    <p>Home of Blue Color Jobs</p>
								</div>
								<div class="footer-selects">
									<h2 class="footer-title">Language & Currency</h2>
									<div class="row">
										<div class="col-lg-12 d-flex">
											<div class="footer-select">
												<img src="assets/img/icons/global.svg" alt="img">
												<select class="select">
													<option>English</option>
													<option>France</option>
													<option>Spanish</option>
												</select>
											</div>
											<div class="footer-select">
												<img src="assets/img/icons/dropdown.svg" class="footer-dropdown" alt="img">
												<select class="select">
													<option>US Dollars</option>
													<option>INR</option>
													<option>Kuwait</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-2 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-menu">
								<h2 class="footer-title">Quick Links</h2>
								<ul>
									<li>
										<a href="about-us.html">About Us</a>
									</li>
									<li>
										<a href="blog-grid.html">Blogs</a>
									</li>
									<li>
										<a href="contact-us.html">Contact Us</a>
									</li>
									<li>
										<a href="provider-signup.html">Become a Professional</a>
									</li>
									<li>
										<a href="user-signup.html">Become a User</a>
									</li>
								</ul>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-3 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget footer-contact">
								<h2 class="footer-title">Contact Us</h2>
								<div class="footer-contact-info">
									<div class="footer-address">
										<p><span><i class="feather-map-pin"></i></span> Nairobi, Kenya</p>
									</div>
									<p><span><i class="feather-phone"></i></span>012-3456-789</p>
									<p class="mb-0"><span><i class="feather-mail"></i></span> <a href="" class="__cf_email__" data-cfemail="41353334242d3832242d2d012439202c312d246f222e2c">[email&#160;protected]</a></p>
								</div>
							</div>
							<!-- /Footer Widget -->
						</div>
						<div class="col-lg-3 col-md-6">
							<!-- Footer Widget -->
							<div class="footer-widget">
								<h2 class="footer-title">Follow Us</h2>
								<div class="social-icon">
									<ul>
										<li>
											<a href="#" target="_blank"><i class="fa-brands fa-facebook"></i> </a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
										</li>
										<li>
											<a href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
										</li>
									</ul>
								</div>
								<h2 class="footer-subtitle">Newsletter Signup</h2>
								<div class="subscribe-form">
                                    <input type="email" class="form-control" placeholder="Enter Email Address">
                                    <button type="submit" class="btn footer-btn">
                                        <i class="feather-send"></i>
                                    </button>
                                </div>
							</div>
							<!-- /Footer Widget -->
						</div>
                        <!--footer copyright-->
                        <div class="footer-copyright text-center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="copyright-center">
                                            <p>Copyright &copy; {{ now()->year }} BlueColor. All Rights Reserved</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /footer copyright-->
					</div>
				</div>
			</div>
			<!-- /Footer Top -->

        <!-- Cursor -->
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>
        <!-- /Cursor -->
        <!-- /Delete Account -->

    </div>


    <!-- scrollToTop start -->
    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;">
            </path>
        </svg>
    </div>
    <!-- scrollToTop end -->

    <!-- jQuery -->
    <script data-cfasync="false"
        src="https://html.truelysell.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.1.min.js"></script>
    <!-- Bootstrap Core JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Feather JS -->
    <script src="{{ asset('assets/js/feather.min.js') }}"></script>

    <!-- Owl Carousel JS -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

    <!-- Select JS -->
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

    <!-- Aos -->
    <script src="{{ asset('assets/plugins/aos/aos.js') }}"></script>

    <!-- Top JS -->
    <script src="{{ asset('assets/js/backToTop.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/script.js') }}"></script>


</body>

<!-- Mirrored from html.truelysell.com/template3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Jun 2023 09:40:14 GMT -->

</html>
