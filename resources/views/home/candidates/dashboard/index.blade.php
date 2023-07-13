@extends('layouts.home')

@section('title')
    <title>User Dashboard</title>
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
                    <div class="welcome-dashboard">
                       <h3>Welcome {{Auth::user()->name}} !</h3>
                    </div>
                    <div class="row">
                       <div class="col-lg-4 col-md-6">
                          <div class="widget_card_page grid_flex widget_bg_blue">
                             <div class="widget-icon">
                                <i class="fa fa-gavel"></i>
                             </div>
                             <div class="widget-page-text">
                                <h4>142</h4>
                                <h2>Professionals</h2>
                             </div>
                          </div>
                       </div>
                       <div class="col-lg-4 col-md-6">
                          <div class="widget_card_page grid_flex  widget_bg_purple">
                             <div class="widget-icon">
                                <i class="fa fa-usd"></i>
                             </div>
                             <div class="widget-page-text">
                                <h4>40</h4>
                                <h2>Services</h2>
                             </div>
                          </div>
                       </div>
                       <div class="col-lg-4 col-md-6">
                          <div class="widget_card_page grid_flex widget_bg_dark_red">
                             <div class="widget-icon">
                                <i class="fa fa-users"></i>
                             </div>
                             <div class="widget-page-text">
                                <h4>4</h4>
                                <h2>Bookings</h2>
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