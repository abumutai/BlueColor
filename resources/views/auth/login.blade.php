@extends('layouts.home')

@section('title')
    <title>Login</title>
@endsection

@section('content')
    <!-- Breadcromb Area Start -->
    <section class="jobguru-breadcromb-area">
        <div class="breadcromb-top section_100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcromb-box">
                            <h3>Login</h3>
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
                                <li><a href="#">home</a></li>
                                <li class="active-breadcromb"><a href="#">Login</a></li>
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
                            <h3>Sign in</h3>
                        </div>
                        @error('exception')
                            <div class="alert alert-danger">
                              {{session('exception')}}
                            </div>
                        @enderror
                        <form method="POST" action="{{ route('users.login.submit') }}">
                            @csrf
                            <div class="single-login-field">
                                <input type="email" placeholder="Email Address" name="email"
                                    value="{{ old('email') }}">
                            </div>
                            @error('email')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="single-login-field">
                                <input type="password" placeholder="Password" name="password">
                            </div>
                            @error('password')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="remember-row single-login-field clearfix">
                                <p class="checkbox remember">

                                </p>
                                <p class="lost-pass">
                                    <a href="#">forgot password?</a>
                                </p>
                            </div>
                            <div class="single-login-field">
                                <button type="submit">Sign in</button>
                            </div>
                        </form>
                        <div class="dont_have">
                            <a href="{{ route('user.register') }}">Don't have an account?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Area End -->
@endsection
