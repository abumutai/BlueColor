@extends('layouts.home')

@section('title')
    <title>Register</title>
@endsection
@section('content')
    <!-- Breadcromb Area Start -->
    <section class="jobguru-breadcromb-area">
        <div class="breadcromb-top section_100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcromb-box">
                            <h3>Register</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcromb-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcromb-box-pagin">
                            <ul>
                                <li><a href="/">home</a></li>

                                <li class="active-breadcromb"><a href="#">Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcromb Area End -->


    <!-- Login Area Start -->
    <section class="jobguru-login-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 col-sm-6 offset-sm-3">
                    <div class="login-box">
                        <div class="login-title">
                            <h3>Sign up as a Professional</h3>
                        </div>
                        <form action="{{ route('users.register') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_type" value="1">
                            <div class="single-login-field">
                                <input type="text" placeholder="Full Name" name="name" value="{{ old('name') }}">
                            </div>
                            @error('name')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="single-login-field">
                                <input type="email" placeholder="Email Address" name="email" value="{{ old('email') }}"
                                    autocomplete="off">
                            </div>
                            @error('name')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="single-login-field">
                                <input type="text" placeholder="Phone Number" name="phone_number" value="{{ old('phone_number') }}">
                            </div>
                            @error('phone_number')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="single-login-field">
                                <input type="password" placeholder="Choose Password" name="password">
                            </div>
                            @error('password')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="single-login-field">
                                <input type="password" placeholder="Confirm Password" name="password_confirmation">
                            </div>
                            @error('password')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="remember-row single-login-field clearfix">
                                <p class="checkbox remember">
                                    <input class="checkbox-spin" type="checkbox" id="Freelance">
                                    <label for="Freelance"><span></span>accept terms & condition</label>
                                </p>
                            </div>
                            <div class="single-login-field">
                                <button type="submit">Sign in</button>
                            </div>
                        </form>
                        <div class="dont_have">
                            <a href="{{ route('users.login') }}">Already have an account?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Area End -->
@endsection
