@extends('layouts.app')

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
                                        <a href="javascript:void(0);" class="filter-sets"><img
                                                src="assets/img/icons/filter1.svg" class="me-2" alt="img">Filter</a>
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
                        <div align = "right">
                        <button class="btn btn-primary btn-sm" style="margin-bottom: 15px">
                            <a style="color: black" href="{{ route('admin-services.create') }}"><i class="fa fa-plus me-2"></i>Add Services
                            </a>
                        </button>
                    </div>
                                
                            
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Service</th>
                                    <th>Category</th>
                                    <th>Sub Category</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Created By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                {{-- {{ ImageHandler::ImageUrl($service->image) }} --}}
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><img src="{{ ImageHandler::ImageUrl($service->image) }}"  class="image-resize">  {{  $service->title }}</td>
                                        <td>
                                            @foreach ($categories as $category)
                                                @if ($category->id == $service->category_id)
                                                    {{ $category->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>{{ Qs::getSubCategoryByID($service->sub_category_id )->title}}</td>
                                        <td>{{ $service->amount }}</td>
                                        <td>{{ $service->status }}</td>
                                        <td>{{ $service->updated_at }}</td>
                                        <td>
                                        <div class="table-actions d-flex">
                                            <a class="delete-table me-2" href="edit-categories.html" ><span class="sliders round"></span>
                                               <img src="assets/img/icons/edit.svg" alt="svg">
                                            </a>
                                            <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-item">
                                                <img src="assets/img/icons/delete.svg" alt="svg">
                                            </a>
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
    </div>
@endsection
