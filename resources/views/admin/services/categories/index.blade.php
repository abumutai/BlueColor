@extends('layouts.app')

@section('title')
    <title>Service Categories</title>
@endsection

@section('content')
<div class="page-wrapper page-settings">
    <div class="content">
        <div class="content-page-header content-page-headersplit mb-0">
            <h5>Categories</h5>
            <div class="list-btn">
                <ul>
                    <li>
                        <a class="btn-filters active" href="categories.html"><i class="fe fe-list"></i> </a>
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
                    {{-- <li>
                        <a class="btn btn-primary" href="{{ route('service-categories.create') }}"><i class="fa fa-plus me-2"></i>Add Categories </a>
                    </li> --}}
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12 ">
                <div class="table-resposnive table-div">
                    <div align = "right">
                        <button class="btn btn-primary btn-sm" style="margin-bottom: 15px">
                            <a style="color: black" href="{{ route('service-categories.create') }}"><i class="fa fa-plus me-2"></i>Add Categories
                            </a>
                        </button>
                    </div>
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category</th>
                                <th>Category Slug</th>
                                <th>Date</th>
                                <th>Featured</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ ImageHandler::ImageUrl($category->image, 'services', 'categories') }}"  class="image-resize">    {{ $category->title }}</td>
                                <td>{{ $category->title }}</td>
                                <td>{{ $category->created_at }}</td>
                                <td>{{ $category->feature }}<span class="sliders round"></span></td>
                                   <td> <div class="table-actions d-flex">
                                        <a class="delete-table me-2" href="edit-categories.html" >
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
@endsection
