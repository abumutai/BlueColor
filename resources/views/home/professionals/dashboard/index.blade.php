@extends('layouts.home')

@section('title')
    <title>Professional Dashboard</title>
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
                          <li><a href="#">professional</a></li>
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
              <div class="col-md-4 col-lg-3 dashboard-left-border">
                @include('home.employer_sidebar')
              </div>
              <div class="col-md-8 col-lg-9">
                 <div class="dashboard-right">
                    <div class="welcome-dashboard">
                       <h3>Welcome <span>{{Auth::user()->name}} !</span></h3>
                    </div>
                    <div class="row">
                       <div class="col-lg-4 col-md-6">
                          <div class="widget_card_page grid_flex widget_bg_blue">
                             <div class="widget-icon">
                                <i class="fa fa-calendar"></i>
                             </div>
                             <div class="widget-page-text">
                                <h4>100</h4>
                                <h2>Total Bookings</h2>
                             </div>
                          </div>
                       </div>
                       <div class="col-lg-4 col-md-6">
                          <div class="widget_card_page grid_flex  widget_bg_purple">
                             <div class="widget-icon">
                                <i class="fa fa-usd"></i>
                             </div>
                             <div class="widget-page-text">
                                <h4>Kshs 12,000</h4>
                                <h2>Total Earnings</h2>
                             </div>
                          </div>
                       </div>
                       <div class="col-lg-4 col-md-6">
                          <div class="widget_card_page grid_flex widget_bg_dark_red">
                             <div class="widget-icon">
                                <i class="fa fa-users"></i>
                             </div>
                             <div class="widget-page-text">
                                <h4>127</h4>
                                <h2>Customers Served</h2>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- Candidate Dashboard Area End -->
@endsection