@extends('layouts.layout')

@section('title')
    <title>Register</title>
@endsection
@section('content')


    <!-- Login Area Start -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 mx-auto">
                    <div class="login-wrap">
                        <div class="login-back">
                            <a href="index.html"><i class="fa-solid fa-arrow-left me-2"></i> Back To Home</a>
                        </div>
                        <div class="login-header">
                            <div class="text-center">
                                <h3>Professional Signup</h3>
                            </div>
                        </div>

                        <!-- Signup Form -->
                        <form action="{{ route('users.register') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_type" value="1">
                            <div class="form-group">
                                <label class="col-form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">E-mail</label>
                                <input type="email" class="form-control" placeholder="example@email.com">
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label class="col-form-label">Phone Number</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-lg group_formcontrol"
                                            id="phone" name="phone" placeholder="(256) 789-6253">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label d-block">Password<span class="brief-bio float-end">Must
                                        be 8 Characters at Least</span></label>
                                <div class="pass-group">
                                    <input type="password" class="form-control pass-input"
                                        placeholder="*************">
                                    <span class="toggle-password feather-eye"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label class="custom_check">
                                        <input type="checkbox" name="rememberme" class="rememberme">
                                        <span class="checkmark"></span>Remember Me
                                    </label>
                                </div>
                                <div class="col-6 text-end">
                                    <label class="custom_check">
                                        <input type="checkbox" name="loginotp" class="loginotp">
                                        <span class="checkmark"></span>Login with OTP
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 login-btn">Submit</button>
                            <div class="dont_have">
                                <a href="{{ route('users.login') }}">Already have an account?</a>
                            </div>
                        </form>
                        <!-- /Signup Form -->

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

    <!-- Login Area End -->
@endsection
