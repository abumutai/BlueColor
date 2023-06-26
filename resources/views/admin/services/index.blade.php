@extends('layouts.app1')

@section('title')
    <title>Services</title>
@endsection

@section('content')
<div class="page-wrapper page-settings">
    <div class="content">
        <div class="content-page-header content-page-headersplit">
            <h5>All Services</h5>
            <div class="list-btn">
                <ul>
                    <li>
                        <a class="btn-filters active" href="services.html"><i class="fe fe-list"></i> </a>
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
                    <li>
                        <a class="btn btn-primary" href="add-service.html"><i class="fa fa-plus me-2"></i>Add Services </a>
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
                                <a href="services.html" class="active">All Services</a>
                            </li>
                            <li>
                                <a href="pending-services.html">Pending Services</a>
                            </li>
                            <li>
                                <a href="deleted-services.html">Deleted Services</a>
                            </li>
                            <li>
                                <a href="inactive-services.html">Inactive Services</a>
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
                                <th>Service</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th>Amount</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <div class="table-imgname">
                                        <img src="assets/img/services/service-03.jpg" class="me-2" alt="img">
                                        <span>Computer Repair</span>
                                    </div>
                                </td>
                                <td>Computer</td>
                                <td>Other</td>
                                <td>$80</td>
                                <td>28 Sep 2022</td>
                                <td><h6 class="badge-pending">Pending</h6></td>
                                <td>Provider</td>
                                <td>
                                    <div class="table-actions d-flex">
                                        <a class="delete-table me-2" href="edit-service.html" >
                                           <img src="assets/img/icons/edit.svg" alt="svg">
                                        </a>
                                        <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-item">
                                            <img src="assets/img/icons/delete.svg" alt="svg">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <div class="table-imgname">
                                        <img src="assets/img/services/service-02.jpg" class="me-2" alt="img">
                                        <span>Car Repair Services</span>
                                    </div>
                                </td>
                                <td>Automobile</td>
                                <td>Other</td>
                                <td>$50</td>
                                <td>17 Sep 2022</td>
                                <td><h6 class="badge-active">Active</h6></td>
                                <td>Admin</td>
                                <td>
                                    <div class="table-actions d-flex">
                                        <a class="delete-table me-2" href="edit-service.html" >
                                           <img src="assets/img/icons/edit.svg" alt="svg">
                                        </a>
                                        <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-item">
                                            <img src="assets/img/icons/delete.svg" alt="svg">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <div class="table-imgname">
                                        <img src="assets/img/services/service-04.jpg" class="me-2" alt="img">
                                        <span>Steam Car Wash</span>
                                    </div>
                                </td>
                                <td>Car Wash</td>
                                <td>Other</td>
                                <td>$14</td>
                                <td>13 Sep 2022</td>
                                <td><h6 class="badge-inactive">Inactive</h6></td>
                                <td>Provider</td>
                                <td>
                                    <div class="table-actions d-flex">
                                        <a class="delete-table me-2" href="edit-service.html" >
                                           <img src="assets/img/icons/edit.svg" alt="svg">
                                        </a>
                                        <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-item">
                                            <img src="assets/img/icons/delete.svg" alt="svg">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    <div class="table-imgname">
                                        <img src="assets/img/services/service-09.jpg" class="me-2" alt="img">
                                        <span>House Cleaning </span>
                                    </div>
                                </td>
                                <td>Cleaning</td>
                                <td>Other</td>
                                <td>$100</td>
                                <td>07 Sep 2022</td>
                                <td><h6 class="badge-delete">Delete</h6></td>
                                <td>Admin</td>
                                <td>
                                    <div class="table-actions d-flex">
                                        <a class="delete-table me-2" href="edit-service.html" >
                                           <img src="assets/img/icons/edit.svg" alt="svg">
                                        </a>
                                        <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-item">
                                            <img src="assets/img/icons/delete.svg" alt="svg">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    <div class="table-imgname">
                                        <img src="assets/img/services/service-08.jpg" class="me-2" alt="img">
                                        <span>Building Construction</span>
                                    </div>
                                </td>
                                <td>Cleaning</td>
                                <td>Other</td>
                                <td>$100</td>
                                <td>07 Sep 2022</td>
                                <td><h6 class="badge-delete">Delete</h6></td>
                                <td>Admin</td>
                                <td>
                                    <div class="table-actions d-flex">
                                        <a class="delete-table me-2" href="edit-service.html" >
                                           <img src="assets/img/icons/edit.svg" alt="svg">
                                        </a>
                                        <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-item">
                                            <img src="assets/img/icons/delete.svg" alt="svg">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>
                                    <div class="table-imgname">
                                        <img src="assets/img/services/service-07.jpg" class="me-2" alt="img">
                                        <span>Interior Designing</span>
                                    </div>
                                </td>
                                <td>Interior</td>
                                <td>Other</td>
                                <td>$100</td>
                                <td>07 Sep 2022</td>
                                <td><h6 class="badge-pending">Pending</h6></td>
                                <td>Provider</td>
                                <td>
                                    <div class="table-actions d-flex">
                                        <a class="delete-table me-2" href="edit-service.html" >
                                           <img src="assets/img/icons/edit.svg" alt="svg">
                                        </a>
                                        <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-item">
                                            <img src="assets/img/icons/delete.svg" alt="svg">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>
                                    <div class="table-imgname">
                                        <img src="assets/img/services/service-09.jpg" class="me-2" alt="img">
                                        <span>Commercial Painting </span>
                                    </div>
                                </td>
                                <td>Painting</td>
                                <td>Other</td>
                                <td>$500</td>
                                <td>22 Aug 2022</td>
                                <td><h6 class="badge-inactive">Inactive</h6></td>
                                <td>Provider</td>
                                <td>
                                    <div class="table-actions d-flex">
                                        <a class="delete-table me-2" href="edit-service.html" >
                                           <img src="assets/img/icons/edit.svg" alt="svg">
                                        </a>
                                        <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-item">
                                            <img src="assets/img/icons/delete.svg" alt="svg">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>
                                    <div class="table-imgname">
                                        <img src="assets/img/services/service-12.jpg" class="me-2" alt="img">
                                        <span>Plumbing Services</span>
                                    </div>
                                </td>
                                <td>Plumbing</td>
                                <td>Other</td>
                                <td>$150</td>
                                <td>15 Aug 2022</td>
                                <td><h6 class="badge-delete">Delete</h6></td>
                                <td>Admin</td>
                                <td>
                                    <div class="table-actions d-flex">
                                        <a class="delete-table me-2" href="edit-service.html" >
                                           <img src="assets/img/icons/edit.svg" alt="svg">
                                        </a>
                                        <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-item">
                                            <img src="assets/img/icons/delete.svg" alt="svg">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> 
</div>

@endsection
