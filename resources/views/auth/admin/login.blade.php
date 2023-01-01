@extends('layouts.auth')

@section('title')
    <title>Admin Login - Blue Color</title>
@endsection
@section('content')
    {{-- <div class="col-12">
        <div class="row justify-content-center no-gutters">
            <div class="col-lg-5 col-md-5 col-12">
                <div class="bg-white rounded30 shadow-lg">
                    <div class="content-top-agile p-20 pb-0">
                        <h2 class="text-primary">Let's Get Started</h2>
                        <p class="mb-0">Sign in to continue to BlueColor.</p>
                    </div>
                    <div class="p-40">
                        @if (session('exception'))
                            <div class="alert alert-danger">
                                {{session('exception')}}
                            </div>
                        @endif
                        <form action="{{ route('admin.login.submit') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control pl-15 bg-transparent" placeholder="Username"
                                        name="email" value="{{ old('email') }}">
                                </div>
                                @error('email')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control pl-15 bg-transparent" placeholder="Password"
                                        name="password">
                                </div>
                                @error('password')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="checkbox">
                                        <input type="checkbox" id="basic_checkbox_1">
                                        <label for="basic_checkbox_1">Remember Me</label>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-6">
                                    <div class="fog-pwd text-right">
                                        <a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i>
                                            Forgot pwd?</a><br>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-danger mt-10">SIGN IN</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    @if (session('exception'))
        <div class="alert alert-danger">
            {{ session('exception') }}
        </div>
    @endif
    <h4 class="text-center mb-4 text-white">Admin Login</h4>
    <form action="{{ route('admin.login.submit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label class="mb-1 text-white"><strong>Email</strong></label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
            @error('email')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label class="mb-1 text-white"><strong>Password</strong></label>
            <input type="password" class="form-control" name="password">
            @error('password')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-row d-flex justify-content-between mt-4 mb-2">
            <div class="form-group">
                <a class="text-white" href="">Forgot Password?</a>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn bg-white text-primary btn-block">Sign Me In</button>
        </div>
    </form>
@endsection
