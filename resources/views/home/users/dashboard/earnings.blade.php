@extends('layouts.home')

@section('title')
    <title>Earnings</title>
@endsection

@section('content')
      
      <!-- Breadcromb Area Start -->
      <section class="jobguru-breadcromb-area">
        <div class="breadcromb-top section_100">
           <div class="container">
              <div class="row">
                 <div class="col-md-12">
                    <div class="breadcromb-box">
                       <h3>Earnings</h3>
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
                          <li><a href="#">Professionals</a></li>
                          <li class="active-breadcromb"><a href="#">Earnings</a></li>
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
                    <div class="earnings-page-box manage-jobs">
                       <div class="manage-jobs-heading">
                          <h3>eastimated earnings</h3>
                       </div>
                       <div class="earnings-flex">
                          <div class="single-earnings">
                             <div class="earnings-icon">
                                <i class="fa fa-line-chart"></i>
                             </div>
                             <h4>Today so far</h4>
                             <h2>Ksh 14.00</h2>
                          </div>
                          <div class="single-earnings">
                             <div class="earnings-icon">
                                <i class="fa fa-line-chart"></i>
                             </div>
                             <h4>Last 7 Days</h4>
                             <h2>Ksh 210.30</h2>
                             <p>+Ksh 0.00</p>
                             <p>same days last week</p>
                          </div>
                          <div class="single-earnings">
                             <div class="earnings-icon">
                                <i class="fa fa-line-chart"></i>
                             </div>
                             <h4>Last 28 Days</h4>
                             <h2>Ksh 2293.80</h2>
                             <p>+Ksh 0.00</p>
                             <p>same previous 28 days</p>
                          </div>
                       </div>
                       <div class="balance-box-flex">
                          {{-- <div class="my-balance single-balance-box ">
                             <div class="widget_chart_analytics_right">
                                <p>Jan 2018</p>
                                <p>+ 42.6%</p>
                             </div>
                             <h3>Balance</h3>
                             <h2>Ksh 1856.00</h2>
                             <p>last payment</p>
                             <p>Ksh 122.55</p>
                          </div> --}}
                          {{-- <div class="transfer-balance single-balance-box ">
                             <h3>Payment A/c <span><a href="#">setup new</a></span></h3>
                             <img src="assets/img/payoneer.jpg" alt="paypal" />
                          </div> --}}
                       </div>
                       {{-- <div class="balance-transfer-btn">
                          <a href="#" class="jobguru-btn-2"> Transfer</a>
                       </div> --}}
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- Candidate Dashboard Area End -->
@endsection