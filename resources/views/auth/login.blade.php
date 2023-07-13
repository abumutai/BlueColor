@extends('layouts.layout')

@section('title')
    <title>Login</title>
@endsection

@section('content')


    <!-- Login Area Start -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 mx-auto">
                    <div class="login-wrap">
                        <div class="login-header">
                            <h3>Login</h3>
                            {{-- <p>We'll send a confirmation code to your email.</p>
                            <h6>Sign in with <a href="login-phone.html">Phone Number</a></h6> --}}
                        </div>
                        
                        <!-- Login Form -->
                        <form method="POST" action="{{ route('users.login.submit') }}">
                            @csrf
                            <div class="log-form">
                                <div class="form-group">
                                    <label class="col-form-label">E-mail</label>
                                    <input type="text" class="form-control" name="email" placeholder="example@email.com">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label d-block">Password</label>
                                    <div class="pass-group">
                                        <input type="password" name="password" class="form-control pass-input" placeholder="*************">
                                        <span class="toggle-password feather-eye"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="char-length">
                                            <p>Must be 6 Characters at Least</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-md-end">
                                            <a class="forgot-link" href="password-recovery.html">Forgot password?</a>
                                        </div>
                                    </div>
                                </div>
                                    <div class="row">
                                    <div class="col-6">
                                        <label class="custom_check">
                                            <input type="checkbox" name="rememberme"  class="rememberme">
                                            <span class="checkmark"></span>Remember Me
                                        </label>
                                    </div>
                                    {{-- <div class="col-6 text-end">
                                        <label class="custom_check">
                                            <input type="checkbox" name="loginotp"  class="loginotp">
                                            <span class="checkmark"></span>Login with OTP
                                        </label>
                                    </div> --}}
                                </div>
                            </div>
                            <button class="btn btn-primary w-100 login-btn" type="submit">Login</button>
                            {{-- <div class="social-login">
                                <a href="#" class="btn btn-google w-100"><img src="assets/img/icons/google.svg" class="me-2" alt="img">Login with Google</a>
                                <a href="#" class="btn btn-google w-100"><img src="assets/img/icons/fb.svg" class="me-2" alt="img">Login with Facebook</a>
                            </div> --}}
                            <p class="no-acc">Don't have an account ? <a href="{{ route('user.register') }}">Register</a></p>
                        </form>
                        <!-- /Login Form -->
                                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <!-- Cursor -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- /Cursor -->	
    
</div>
<script src="{{ asset('js/jquery-3.6.1.min.js') }}"></script>

<!-- Bootstrap Core JS -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<!-- Feather JS -->
<script src="{{ asset('js/feather.min.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('js/script.js') }}"></script>

    <!-- Login Area End -->
@endsection
