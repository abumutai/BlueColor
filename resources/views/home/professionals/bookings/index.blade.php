@extends('layouts.home')
@section('title')
@endsection
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
    
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-md-4">
                    <div class="provider-subtitle">
                        <h6>Booking List</h6>
                    </div>
                </div>
                <div class="col-md-8 d-flex align-items-center justify-content-md-end flex-wrap">
                    <div class="review-sort me-2">
                        <p>Sort</p>
                        <select class="select">
                            <option>A -> Z</option>
                            <option>Most helful</option>
                        </select>
                    </div>
                    <div class="grid-listview">
                        <ul>
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="{{ asset('assets/img/icons/filter-icon.svg') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="provider-book-details.html">
                                    <i class="feather-calendar"></i>
                                </a>
                            </li>
                            <li>
                                <a href="provider-services.html">
                                    <i class="feather-grid"></i>
                                </a>
                            </li>
                            <li>
                                <a href="provider-booking.html" class="active">
                                    <i class="feather-list"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        
        
        <div class="row">
            <div class="col-md-12">
                <!-- Booking List -->
                <div class="booking-list">
                    <div class="booking-widget">
                        <div class="booking-img">
                            <a href="service-details.html">
                                <img src="{{ asset('assets/img/services/service-08.jpg') }}" alt="User Image">
                            </a>
                            <div class="fav-item">
                                <a href="javascript:void(0)" class="fav-icon">
                                    <i class="feather-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="booking-det-info">
                            <h3>
                                <a href="service-details.html">Computer Services  </a><span class="badge badge-danger">Cancelled</span>
                            </h3>
                            <ul class="booking-details">
                                <li>
                                    <span class="book-item">Booking Date</span> : 27 Sep 2022, 17:00-18:00
                                </li>
                                <li>
                                    <span class="book-item">Amount</span> : $100.00 <span class="badge-grey">COD</span>
                                </li>
                                <li>
                                    <span class="book-item">Location</span> : Newyork, USA
                                </li>
                                <li>
                                    <span class="book-item">Customer</span> : 
                                    <div class="user-book">
                                        <div class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="{{ asset('assets/img/profiles/avatar-02.jpg') }}">
                                        </div>
                                         John Doe
                                    </div>
                                    <p><a href="https://html.truelysell.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f69f989099b69c999e98929993d895999b">[email&#160;protected]</a></p>
                                    <p>+1 888 888 8888</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="booking-action">
                        <a href="booking.html" class="btn btn-secondary">Reschedule</a>
                    </div>
                </div>
                <!-- /Booking List -->
                
                <!-- Booking List -->
                <div class="booking-list">
                    <div class="booking-widget">
                        <div class="booking-img">
                            <a href="service-details.html">
                                <img src="{{ asset('assets/img/services/service-18.jpg') }}" alt="User Image">
                            </a>
                            <div class="fav-item">
                                <a href="javascript:void(0)" class="fav-icon">
                                    <i class="feather-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="booking-det-info">
                            <h3>
                                <a href="service-details.html">Car Repair Services</a>  <span class="badge badge-success">Completed</span>
                            </h3>
                            <ul class="booking-details">
                                <li>
                                    <span class="book-item">Booking Date</span> : 23 Sep 2022, 10:00-11:00
                                </li>
                                <li><span class="book-item">Amount</span> : $50.00 <span class="badge-grey">COD</span></li>
                                <li><span class="book-item">Location</span> : Alabama, USA</li>
                                <li>
                                    <span class="book-item">Customer</span> : 
                                    <div class="user-book">
                                        <div class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-03.jpg">
                                        </div>
                                        John Smith
                                    </div>
                                    <p><a href="https://html.truelysell.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5a33343c351a303532342937332e3274393537">[email&#160;protected]</a></p>
                                    <p>+1 607-276-5393</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="booking-action">
                        <a href="booking.html" class="btn btn-primary">Rebook</a>
                        <a href="javascript:void(0);" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#add-review"><i class="feather-plus-circle"></i> Add Review</a>
                        <div class="view-action">
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                            </div>
                            <a href="service-details.html" class="view-btn">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- /Booking List -->
                
                <!-- Booking List -->
                <div class="booking-list">
                    <div class="booking-widget">
                        <div class="booking-img">
                            <a href="service-details.html">
                                <img src="assets/img/services/service-07.jpg" alt="User Image">
                            </a>
                            <div class="fav-item">
                                <a href="javascript:void(0)" class="fav-icon">
                                    <i class="feather-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="booking-det-info">
                            <h3>
                                <a href="service-details.html">Interior Designing</a>  <span class="badge badge-info">Inprogress</span>
                            </h3>
                            <ul class="booking-details">
                                <li>
                                    <span class="book-item">Booking Date</span> : 27 Sep 2022, 17:00-18:00
                                </li>
                                <li><span class="book-item">Amount</span> : $50.00 <span class="badge-grey">COD</span></li>
                                <li><span class="book-item">Location</span> : Washington, DC, USA</li>
                                <li>
                                    <span class="book-item">Customer</span> : 
                                    <div class="user-book">
                                        <div class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-06.jpg">
                                        </div>
                                        Quentin
                                    </div>
                                    <p><a href="https://html.truelysell.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a6cfc8c0c9e6d7d3c3c8d2cfc888c5c9cb">[email&#160;protected]</a></p>
                                    <p>+1 601-810-9218</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="booking-action">
                        <a href="provider-chat.html" class="btn btn-primary"><i class="feather-message-square"></i> Chat</a>
                        <a href="javascript:void(0);" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
                <!-- /Booking List -->
                
                <!-- Booking List -->
                <div class="booking-list">
                    <div class="booking-widget">
                        <div class="booking-img">
                            <a href="service-details.html">
                                <img src="assets/img/services/service-13.jpg" alt="User Image">
                            </a>
                            <div class="fav-item">
                                <a href="javascript:void(0)" class="fav-icon">
                                    <i class="feather-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="booking-det-info">
                            <h3>
                                <a href="service-details.html">House Cleaning Services</a> <span class="badge badge-warning">Pending</span>
                            </h3>
                            <ul class="booking-details">
                                <li>
                                    <span class="book-item">Booking Date</span> : 27 Sep 2022, 17:00-18:00
                                </li>
                                <li><span class="book-item">Amount</span> : $375.00 <span class="badge-grey">COD</span></li>
                                <li><span class="book-item">Location</span> : Virginia, USA</li>
                                <li>
                                    <span class="book-item">Customer</span> : 
                                    <div class="user-book">
                                        <div class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
                                        </div>
                                        Johnson
                                    </div>
                                    <p><a href="https://html.truelysell.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="87eee9e1e8c7ede8efe9f4e8e9a9e4e8ea">[email&#160;protected]</a></p>
                                    <p>+1 312-328-3970</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="booking-action">
                        <a href="provider-chat.html" class="btn btn-primary"><i class="feather-message-square"></i> Chat</a>
                        <a href="javascript:void(0);" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
                <!-- /Booking List -->
                
                <!-- Booking List -->
                <div class="booking-list">
                    <div class="booking-widget">
                        <div class="booking-img">
                            <a href="service-details.html">
                                <img src="assets/img/services/service-06.jpg" alt="User Image">
                            </a>
                            <div class="fav-item">
                                <a href="javascript:void(0)" class="fav-icon">
                                    <i class="feather-heart"></i>
                                </a>
                            </div>
                        </div>
                        <div class="booking-det-info">
                            <h3>
                                <a href="service-details.html">Electric Panel Repairing Service</a> <span class="badge badge-danger">Cancelled</span>
                            </h3>
                            <ul class="booking-details">
                                <li>
                                    <span class="book-item">Booking Date</span> : 27 Sep 2022, 17:00-18:00
                                </li>
                                <li><span class="book-item">Amount</span> : $100.00 <span class="badge-grey">COD</span></li>
                                <li><span class="book-item">Location</span> : Newyork, USA</li>
                                <li>
                                    <span class="book-item">Customer</span> : 
                                    <div class="user-book">
                                        <div class="avatar avatar-xs">
                                            <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
                                        </div>
                                         John Doe
                                    </div>
                                    <p><a href="https://html.truelysell.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f0b99e969fb09a9f989e949f95de939f9d">[email&#160;protected]</a></p>
                                    <p>+1 888 888 8888</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="booking-action">
                        <a href="booking.html" class="btn btn-primary">Rebook</a>
                        <a href="javascript:void(0);" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#add-review"><i class="feather-plus-circle"></i> Add Review</a>
                        <div class="view-action">
                            <div class="rating">
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                                <i class="fas fa-star filled"></i>
                            </div>
                            <a href="service-details.html" class="view-btn">View Details</a>
                        </div>
                    </div>
                </div>
                <!-- /Booking List -->
            </div>
        </div>
        
        <!-- Pagination -->
        <div class="row">
            <div class="col-sm-6">
                <div class="review-entries">
                    <span>Show</span>
                    <select>
                        <option>07</option>
                        <option>08</option>
                    </select>
                    <span>entries</span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="review-pagination">
                    <p>1 - 09 of 09</p>
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2 <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                    </ul>						
                </div>
            </div>
        </div>
        <!-- /Pagination -->
        
        <!-- Add Review -->
        <div class="modal fade custom-modal" id="add-review">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content doctor-profile">
                    <div class="modal-header border-bottom-0 justify-content-between">
                        <h5 class="modal-title">Write A Review</h5>
                        <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
                    </div>
                    <div class="modal-body pt-0">
                        <form action="#">
                            <div class="write-review">
                                <div class="review-add">
                                    <div class="rev-img">
                                        <img src="assets/img/services/service-19.jpg" alt="">
                                    </div>
                                    <div class="rev-info">
                                        <h6>Computer Services</h6>
                                        <p>Newyork, USA</p>
                                    </div>
                                </div>
                                <div class="form-group form-info">
                                    <label class="col-form-label">Rate The Service</label>
                                    <div class="rating rating-select mb-0">
                                        <a href="javascript:void(0);"><i class="fas fa-star filled"></i></a>
                                        <a href="javascript:void(0);"><i class="fas fa-star filled"></i></a>
                                        <a href="javascript:void(0);"><i class="fas fa-star filled"></i></a>
                                        <a href="javascript:void(0);"><i class="fas fa-star filled"></i></a>
                                        <a href="javascript:void(0);"><i class="fas fa-star filled"></i></a>
                                    </div>
                                </div>
                                <div class="form-group form-info">
                                    <label class="col-form-label">Write your Review</label>
                                    <textarea class="form-control" rows="4" placeholder="Please write your review"></textarea>
                                </div>
                                <div class="modal-submit text-end">
                                    <button type="submit" class="btn btn-primary">Send</button>
                                </div>								
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Review -->

    </div>
</div>
@endsection