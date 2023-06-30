@extends('layouts.home')
@section('content')


<div class="page-wrapper">
    <div class="content container-fluid">
    
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-md-4">
                    <div class="provider-subtitle">
                        <h6>Coupons</h6>
                    </div>
                </div>
                <div class="col-md-8 d-flex align-items-center justify-content-md-end flex-wrap">
                    <div class="review-sort me-2">
                        <p>Sort</p>
                        <select class="select">
                            <option>A -> Z</option>
                            <option>Z -> A</option>
                            <option>Most helful</option>
                        </select>
                    </div>
                    <div class="grid-listview me-2">
                        <ul>
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="assets/img/icons/filter-icon.svg" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a href="add-coupon.html" class="btn btn-primary add-set"><i class="feather-plus"></i> Add Coupon</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        
        <!-- Coupons -->
        <div class="row">
            <div class="col-md-12">
                <div class="provide-table manage-table">
                    <div class="table-responsive">
                        <table class="table custom-table datatable mb-0" id="data-table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Type</th>
                                    <th>Discount</th>
                                    <th>limit</th>
                                    <th>Used</th>
                                    <th>Valid Date</th>
                                    <th>Services Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>New Year</td>
                                    <td>NEW2022</td>
                                    <td>Percentage</td>
                                    <td>5%</td>
                                    <td>100</td>
                                    <td>1</td>
                                    <td>02 Sep 2022 - 10 Sep 2022 <span class="d-block"> Once per customer</span></td>
                                    <td>Interior Designing</td>
                                    <td><span class="badge-success">Action</span></td>
                                    <td>
                                        <div class="table-actions">
                                            <a class="action-set" href="#">
                                                <i class="feather-edit"></i>
                                            </a>
                                            <a class="action-set confirm-text" href="#">
                                                <i class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Christmas</td>
                                    <td>JOLLY15</td>
                                    <td>Fixed</td>
                                    <td>$2.00</td>
                                    <td>100</td>
                                    <td>1</td>
                                    <td>04 Sep 2022 - 12 Sep 2022 <span class="d-block"> Once per customer</span></td>
                                    <td>House Cleaning</td>
                                    <td><span class="badge-danger">Inaction</span></td>
                                    <td>
                                        <div class="table-actions">
                                            <a class="action-set" href="#">
                                                <i class="feather-edit"></i>
                                            </a>
                                            <a class="action-set confirm-text" href="#">
                                                <i class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Valentines</td>
                                    <td>LOVERLOVER</td>
                                    <td>Percentage</td>
                                    <td>5%</td>
                                    <td>100</td>
                                    <td>1</td>
                                    <td>10 Sep 2022 - 20 Sep 2022 <span class="d-block"> Once per customer</span></td>
                                    <td>Car Wash</td>
                                    <td><span class="badge-success">Action</span></td>
                                    <td>
                                        <div class="table-actions">
                                            <a class="action-set" href="#">
                                                <i class="feather-edit"></i>
                                            </a>
                                            <a class="action-set confirm-text" href="#">
                                                <i class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Halloween</td>
                                    <td>SPOOKY15</td>
                                    <td>Fixed</td>
                                    <td>$3.00</td>
                                    <td>100</td>
                                    <td>1</td>
                                    <td>15 Sep 2022 - 12 Sep 2022 <span class="d-block"> Once per customer</span></td>
                                    <td>Computer Services</td>
                                    <td><span class="badge-danger">Inaction</span></td>
                                    <td>
                                        <div class="table-actions">
                                            <a class="action-set" href="#">
                                                <i class="feather-edit"></i>
                                            </a>
                                            <a class="action-set confirm-text" href="#">
                                                <i class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Black Friday</td>
                                    <td>GIFTGUIDE</td>
                                    <td>Percentage</td>
                                    <td>5%</td>
                                    <td>100</td>
                                    <td>1</td>
                                    <td>20 Sep 2022 - 22 Sep 2022 <span class="d-block"> Once per customer</span></td>
                                    <td>Car Repair</td>
                                    <td><span class="badge-success">Action</span></td>
                                    <td>
                                        <div class="table-actions">
                                            <a class="action-set" href="#">
                                                <i class="feather-edit"></i>
                                            </a>
                                            <a class="action-set confirm-text" href="#">
                                                <i class="feather-trash-2"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div id="tablelength"></div>
                    </div>
                    <div class="col-md-9">
                        <div class="table-ingopage">
                            <div id="tableinfo"></div>
                            <div id="tablepagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Coupons -->
        
    </div>
</div>
<!-- Cursor -->
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>
<!-- /Cursor -->
@endsection