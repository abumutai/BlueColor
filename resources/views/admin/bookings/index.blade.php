@extends('layouts.app')
@section('title')
@endsection

@section('content')
<div class="page-wrapper page-settings">
    <div class="content">
        <div class="content-page-header content-page-headersplit">
            <h5>Booking List</h5>
            <div class="list-btn">
                <ul>
                    <li>
                        <a class="btn-filters active" href="booking.html"><i class="fe fe-list"></i> </a>
                    </li>
                    <li>
                        <a class="btn-filters" href="localization.html"><i class="fe fe-settings"></i> </a>
                    </li>
                    <li>
                        <div class="filter-sorting">
                            <ul>
                                <li>
                                    <a href="javascript:void(0);" class="filter-sets"><img src="assets/img/icons/filter1.svg" class="me-2" alt="img">Filter</a>
                                </li>
                                <li>
                                    <span><img src="assets/img/icons/sort.svg" class="me-2" alt="img"></span>
                                    <div class="review-sort">
                                        <select class="select">
                                            <option>A -> Z</option>
                                            <option>Z -> A</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="tab-sets">
                    <div class="tab-contents-sets">
                        <ul>
                            <li>
                                <a href="booking.html" class="active">All Booking</a>
                            </li>
                            <li>
                                <a href="pending-booking.html">Pending </a>
                            </li>
                            <li>
                                <a href="inprogress-booking.html">Inprogress </a>
                            </li>
                            <li>
                                <a href="completed-booking.html">Completed </a>
                            </li>
                            <li>
                                <a href="cancelled-booking.html">Cancelled</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-contents-count">
                        <h6>Showing 8-10 of 84 results</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 ">
                <div class="table-resposnive table-div">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Booking Time</th>
                                <th>Provider</th>
                                <th>User</th>
                                <th>Service</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $booking )
                            <tr>
                                <td>{{ $loop->iterations }}</td>
                                <td>{{ $booking->appnt_date }}</td>
                                <td>{{ $booking->appnt_time }}</td>
                                <td>{{ $booking->provider }}</td>
                                <td>{{ $booking->user_id }}</td>
                                <td>{{ $booking->service_id }}</td>
                                <td>{{ $booking->status }}</td>
                                <td>
                                <div class="table-select">
                                    <div class="form-group mb-0">
                                        <select class="select">
                                            <option>Select Status</option>
                                            <option> Pending</option>
                                            <option> Inprogress</option>
                                            <option>Completed</option>
                                            <option>cancelled</option>
                                        </select>
                                    </div>
                                </div>
                                </td>
                            </tr>
                                
                            @endforeach
                                 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection