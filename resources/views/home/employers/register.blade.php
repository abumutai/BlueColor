@extends('layouts.home')

@section('title')
    <title>Register as a Professional</title>
@endsection

@section('content')
    <section class="jobguru-login-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 col-sm-6 offset-sm-3">
                    <div class="login-box">
                        <div class="login-title">
                            <h3>Sign up as a professional</h3>
                        </div>
                        <form>
                            <div class="single-login-field">
                                <input type="text" placeholder="Full Name">
                            </div>
                            <div class="single-login-field">
                                <input type="email" placeholder="Email Addresss">
                            </div>
                            <div class="single-login-field">
                                <input type="password" placeholder="Choose Password">
                            </div>
                            <div class="single-login-field">
                                <input type="password" placeholder="Confirm Password">
                            </div>
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
                            <a href="login.html">Already have an account?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
