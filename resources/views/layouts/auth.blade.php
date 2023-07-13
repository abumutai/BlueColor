<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jobie.dexignzone.com/codeigniter/demo/page_login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Nov 2022 19:40:30 GMT -->
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
    <meta name="description" content="Jobie - Crypto Codeigniter Admin Dashboard" />
    <meta property="og:title" content="Jobie - Crypto Codeigniter Admin Dashboard" />
    <meta property="og:description" content="Jobie - Crypto Codeigniter Admin Dashboard" />
    <meta property="og:image" content="https://jobie.dexignzone.com/codeigniter/social-image.png')}}" />
    <meta name="format-detection" content="telephone=no">
    @yield('title')
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('dashboard/assets/images/favicon.png')}}">
    <link href="{{asset('dashboard/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/assets/css/style.css')}}" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="{{route('admin.login')}}"> <h1 class="text-white">Blue Color</h1> </a>
                                    </div>
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
 Scripts
***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('dashboard/assets/vendor/global/global.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/deznav-init.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/custom.js')}}"></script>
    {{-- <script src="{{asset('dashboard/assets/js/demo.js')}}"></script>
    <script src="{{asset('dashboard/assets/js/styleSwitcher.js')}}"></script> --}}
</body>

<!-- Mirrored from jobie.dexignzone.com/codeigniter/demo/page_login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Nov 2022 19:40:32 GMT -->

</html>
