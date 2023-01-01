@extends('layouts.home')

@section('title')
    <title>My Services</title>
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
                                <li class="active-breadcromb"><a href="#">My Services</a></li>
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
                <div class="col-lg-3 col-md-4 mx-auto dashboard-left-border">
                    <div class="dashboard-left">
                        @include('home.employer_sidebar')
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 mx-auto">
                    <div class="dashboard-right ">
                        <div class="manage-jobs">
                            <div class="manage-jobs-heading">
                                <p> <span class="h2"> My Services </span>
                                    <a href="{{route('services.create')}}" class="btn btn-success pull-right">
                                        <i class="fa fa-plus"></i> Add Service
                                    </a>
                                </p>
                            </div>
                            <div class="single-manage-jobs table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Service</th>
                                            <th>Category </th>
                                            <th>Subcategory </th>
                                            <th>Status</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="manage-jobs-title"><a href="#">Frontend React Developer</a>
                                            </td>
                                            <td class="table-date">28 June, 2018</td>
                                            <td class="table-date">10 July, 2018</td>
                                            <td><span class="pending">Pending Approval</span></td>
                                            <td class="action">
                                                <a href="#" class="action-edit"><i
                                                        class="fa fa-pencil-square-o"></i></a>
                                                <a href="#" class="action-delete"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="manage-jobs-title"><a href="#">Full Stack PHP Developer </a>
                                            </td>
                                            <td class="table-date">28 June, 2018</td>
                                            <td class="table-date">10 July, 2018</td>
                                            <td><span class="expired">Expired</span></td>
                                            <td class="action">
                                                <a href="#" class="action-edit"><i
                                                        class="fa fa-pencil-square-o"></i></a>
                                                <a href="#" class="action-delete"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="manage-jobs-title"><a href="#">Node.js Developer</a></td>
                                            <td class="table-date">28 June, 2018</td>
                                            <td class="table-date">10 July, 2018</td>
                                            <td><span class="pending">Pending Approval</span></td>
                                            <td class="action">
                                                <a href="#" class="action-edit"><i
                                                        class="fa fa-pencil-square-o"></i></a>
                                                <a href="#" class="action-delete"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="manage-jobs-title"><a href="#">Frontend React Developer</a>
                                            </td>
                                            <td class="table-date">28 June, 2018</td>
                                            <td class="table-date">10 July, 2018</td>
                                            <td><span class="pending">Pending Approval</span></td>
                                            <td class="action">
                                                <a href="#" class="action-edit"><i
                                                        class="fa fa-pencil-square-o"></i></a>
                                                <a href="#" class="action-delete"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="manage-jobs-title"><a href="#">Full Stack PHP Developer </a>
                                            </td>
                                            <td class="table-date">28 June, 2018</td>
                                            <td class="table-date">10 July, 2018</td>
                                            <td><span class="expired">Expired</span></td>
                                            <td class="action">
                                                <a href="#" class="action-edit"><i
                                                        class="fa fa-pencil-square-o"></i></a>
                                                <a href="#" class="action-delete"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="manage-jobs-title"><a href="#">Node.js Developer</a></td>
                                            <td class="table-date">28 June, 2018</td>
                                            <td class="table-date">10 July, 2018</td>
                                            <td><span class="pending">Pending Approval</span></td>
                                            <td class="action">
                                                <a href="#" class="action-edit"><i
                                                        class="fa fa-pencil-square-o"></i></a>
                                                <a href="#" class="action-delete"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="manage-jobs-title"><a href="#">Frontend React Developer</a>
                                            </td>
                                            <td class="table-date">28 June, 2018</td>
                                            <td class="table-date">10 July, 2018</td>
                                            <td><span class="pending">Pending Approval</span></td>
                                            <td class="action">
                                                <a href="#" class="action-edit"><i
                                                        class="fa fa-pencil-square-o"></i></a>
                                                <a href="#" class="action-delete"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="manage-jobs-title"><a href="#">Full Stack PHP Developer </a>
                                            </td>
                                            <td class="table-date">28 June, 2018</td>
                                            <td class="table-date">10 July, 2018</td>
                                            <td><span class="expired">Expired</span></td>
                                            <td class="action">
                                                <a href="#" class="action-edit"><i
                                                        class="fa fa-pencil-square-o"></i></a>
                                                <a href="#" class="action-delete"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="manage-jobs-title"><a href="#">Node.js Developer</a></td>
                                            <td class="table-date">28 June, 2018</td>
                                            <td class="table-date">10 July, 2018</td>
                                            <td><span class="pending">Pending Approval</span></td>
                                            <td class="action">
                                                <a href="#" class="action-edit"><i
                                                        class="fa fa-pencil-square-o"></i></a>
                                                <a href="#" class="action-delete"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="pagination-box-row">
                                    <p>Page 1 of 6</p>
                                    <ul class="pagination">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li>...</li>
                                        <li><a href="#">6</a></li>
                                        <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                                    </ul>
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
