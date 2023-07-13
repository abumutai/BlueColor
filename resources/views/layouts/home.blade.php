<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.truelysell.com/template3/provider-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Jun 2023 09:47:13 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Truelysell | Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}"> 

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <!-- Feather CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}">

    <!-- Select CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>


<body class="provider-body">

	
	<div class="main-wrapper">
	
		<!-- Header -->
		<div class="header">
			<div class="header-left"> 
			<div class="sidebar-logo">
					<a href="index.html">
						<img src="assets/img/logo.svg" class="img-fluid logo" alt="">
					</a>
					<a href="index.html">
						<img src="assets/img/logo-small.png" class="img-fluid logo-small" alt="">
					</a>
				</div>
				<div class="siderbar-toggle">
					<label class="switch" id="toggle_btn">
						<input type="checkbox">
						<span class="slider round"></span>
					</label>
				</div>
			</div>
			<a class="mobile_btns" id="mobile_btns" href="javascript:void(0);">
				<i class="fas fa-align-left"></i>
			</a>
			<div class="header-split">
				<div class="page-headers">
					<div class="search-bar">
						<span><i class="feather-search"></i></span>
						<input type="text" placeholder="Search" class="form-control">
					</div>
				</div>
				<ul class="nav user-menu">
					<!-- Notifications -->
					<li class="nav-item">
						<a href="index.html" class="viewsite" ><i class="feather-globe me-2"></i>View Site</a>
					</li>
					<li class="nav-item dropdown has-arrow dropdown-heads flag-nav">
						<a class="nav-link" data-bs-toggle="dropdown" href="#" role="button">
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
						<a href="#">
							<i class="feather-moon"></i>
						</a>
					</li>
					<li class="nav-item dropdown has-arrow dropdown-heads ">
						<a href="#" data-bs-toggle="dropdown">
							<i class="feather-bell"></i>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<div>
									<span class="notification-title">Notifications</span>
									<select>
										<option>All</option>
										<option>Read</option>
									</select>
								</div>
								<a href="javascript:void(0)" class="clear-noti">Mark all as read <i class="fa-regular fa-circle-check"></i> </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<div class="media d-flex">
											<a href="notification.html">
												<span class="avatar avatar-sm avatar-online flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
												</span>
											</a>
											<div class="media-body flex-grow-1">
												<a href="notification.html"><p class="noti-details">Lex Murph <span class="noti-title"> requested access to</span> Computer & Server AMC Service </p></a>
												<div class="notify-btns">
													<button class="btn btn-primary">Accept</button>
													<button class="btn btn-secondary">Cancel</button>
												</div>
												<p class="noti-time"><span class="notification-time">Today 10:04 PM</span></p>
											</div>
										</div>
									</li>
									<li class="notification-message">
										<a href="provider-notifcations.html">
											<div class="media d-flex">
												<span class="avatar avatar-sm avatar-online flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-01.jpg">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details">Ray Arnold <span class="noti-title">left 6 comments on</span> Commercial Painting Services</p>
													<p class="noti-time"><span class="notification-time">Today 9:45 PM</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="provider-notifcations.html">
											<div class="media d-flex">
												<span class="avatar avatar-sm avatar-online flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-03.jpg">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details">Dennis Nedry <span class="noti-title">commented on</span> Electric Panel Repairing Service </p>
													<h6>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et  commodo consequat..”</h6>
													<p class="noti-time"><span class="notification-time">Yesterday 8:17 AM</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="provider-notifcations.html">
											<div class="media d-flex">
												<span class="avatar avatar-sm avatar-online flex-shrink-0">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-04.jpg">
												</span>
												<div class="media-body flex-grow-1">
													<p class="noti-details">John Hammond <span class="noti-title">has booked your</span> House Cleaning Services </p>
													<p class="noti-time"><span class="notification-time">Last Wednesday at 11:15 AM</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="provider-notifcations.html">View More <img src="assets/img/icons/circle-icon.svg" alt=""></a>
							</div>
						</div>
					</li>
					<li class="nav-item  has-arrow dropdown-heads ">
						<a href="#" class="win-maximize">
							<i class="feather-maximize" ></i>
						</a>
					</li>

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
							<a class="dropdown-item" href="provider-profile-settings.html">
								<i class="feather-user me-2"></i> Profile
							</a>
							<a class="dropdown-item" href="{{ route('logout') }}">
								<i class="feather-log-out me-2"></i> Logout
							</a>
						</div>
					</li>
					<!-- /User Menu -->
				</ul>
			</div>
			
		</div>
		<!-- /Header -->
        @include('home.employer_sidebar')
		@yield('content')
        <script data-cfasync="false" src="https://html.truelysell.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<!-- Fearther JS -->
	<script src="assets/js/feather.min.js"></script>
	
	<!-- select JS -->
	<script src="assets/plugins/select2/js/select2.min.js"></script>

    <!-- Datetimepicker JS -->
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>
	
</body>

<!-- Mirrored from html.truelysell.com/template3/provider-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Jun 2023 09:47:31 GMT -->
</html>