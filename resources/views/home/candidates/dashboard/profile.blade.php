@extends('layouts.home')

@section('title')
    <title>Profile</title>
@endsection

@section('content')
    <!-- Breadcromb Area Start -->
    <section class="jobguru-breadcromb-area">
        <div class="breadcromb-top section_100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcromb-box">
                            <h3>Dashboard</h3>
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
                                <li><a href="#">User</a></li>
                                <li class="active-breadcromb"><a href="#">Dashboard</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcromb Area End -->


    <!-- Candidate Dashboard Area Start -->
    <section class="candidate-dashboard-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 dashboard-left-border">
                    <div class="dashboard-left">
                        @include('home.sidebar')
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">
                    <div class="dashboard-right">
                        <div class="candidate-profile">
                            <div class="candidate-single-profile-info">
                                {{-- <div class="single-resume-feild resume-avatar">
                             <div class="resume-image">
                                {{-- <img src="{{asset('assets/img/author.jpg')}}" alt="resume avatar"> 
                                <div class="resume-avatar-hover">
                                   <div class="resume-avatar-upload">
                                      <p>
                                         <i class="fa fa-pencil"></i>
                                         Edit
                                      </p>
                                      <input type="file">
                                   </div>
                                </div>
                             </div>
                          </div> --}}
                            </div>
                            <div class="candidate-single-profile-info">
                                <form>
                                    <div class="resume-box">
                                        <h3>My Profile</h3>
                                        <div class="single-resume-feild feild-flex-2">
                                            <div class="single-input">
                                                <label for="name">Name:</label>
                                                <input type="text" value="Abraham Mutai" id="name">
                                            </div>
                                            <div class="single-input">
                                             <label for="name">Email:</label>
                                             <input type="text" value="{{Auth::user()->email}}" id="name">
                                         </div>
                                        </div>
                                    </div>
                                    <div class="resume-box">
                                        <h3>Contact Information</h3>
                                        <div class="single-resume-feild feild-flex-2">
                                            <div class="single-input">
                                                <label for="Phone">Phone:</label>
                                                <input type="text" value="{{ Auth::user()->phone }}" id="Phone">
                                            </div>
                                            <div class="single-input">
                                                <label for="Email">Email:</label>
                                                <input type="text" value="{{ Auth::user()->email }}" id="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-resume">
                                        <button type="submit">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Candidate Dashboard Area End -->
@endsection
