@extends('layouts.app')

@section('title')
    <title>Service SubCategories</title>
@endsection

@section('content')
{{-- <div class="page-wrapper page-settings">
    <div class="content">
        <div class="content-page-header content-page-headersplit mb-0">
            <h5>Sub Categories</h5>
            <div class="list-btn">
                <ul>
                    <li>
                        <a class="btn-filters active" href="sub-categories.html"><i class="fe fe-list"></i> </a>
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
                        <a class="btn btn-primary" href="{{ route('service-subcategories.create') }}"><i class="fa fa-plus me-2"></i>Add Sub Categories </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12 ">
                <div class="table-resposnive table-div">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Sub Category</th>
                                <th>Sub Category Slug</th>
                                <th>Category</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subcategories as $subcategory )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $subcategory->title }}</td>
                                <td>{{ $subcategory->slug }}</td>
                                <td>{{ Qs::getCategoryByID($subcategory->category_id)->title }}</td>
                                <td>{{ $subcategory->created_at->format('Y-m-d') }}</td>
                                
                                <td>
                                    <div class="table-actions d-flex">
                                         <a class="delete-table me-2" href="edit-subcategories.html" >
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
</div>  --}}
<div class="page-wrapper page-settings">
    <div class="content">
        <div class="content-page-header content-page-headersplit mb-0">
            <h5>Sub Categories</h5>
            <div class="list-btn">
                <ul>
                    <li>
                        <a class="btn-filters active" href="sub-categories.html"><i class="fe fe-list"></i> </a>
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
                        <a class="btn btn-primary" href="add-subcategories.html"><i class="fa fa-plus me-2"></i>Add Sub Categories </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12 ">
                <div class="table-resposnive table-div">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Sub Category</th>
                                <th>Sub Category Slug</th>
                                <th>Category</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach($subcategories as $subcategory)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ ImageHandler::ImageUrl($subcategory->image) }},{{ $subcategory->title }}</td>
                                <td>{{ $subcategory->slug }}</td>
                                <td>{{ $subcategory->category }}</td>
                                <td>{{ $subcategory->created_at }}</td>
                                <td>
                                    <div class="table-actions d-flex">
                                         <a class="delete-table me-2" href="edit-subcategories.html" >
                                           <img src="assets/img/icons/edit.svg" alt="svg">
                                        </a>
                                        <a class="delete-table" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete-item">
                                            <img src="assets/img/icons/delete.svg" alt="svg">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                           @endforeach --}}
                           @foreach ($subcategories as $subcategory )
                           <tr>
                               <td>{{ $loop->iteration }}</td>
                               <td><img src="{{ ImageHandler::ImageUrl($subcategory->image) }}" class="image-resize" >  {{ $subcategory->title }}></td>
                               <td>{{ $subcategory->slug }}</td>
                               <td>{{ Qs::getCategoryByID($subcategory->category_id)->title }}</td>
                               <td>{{ $subcategory->created_at->format('Y-m-d') }}</td>
                               
                               <td>
                                   <div class="table-actions d-flex">
                                        <a class="delete-table me-2" href="edit-subcategories.html" >
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

<!-- Delete -->
<div class="modal fade" id="delete-item" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Sub Categories</h5>
            <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                <i class="fe fe-x"></i>
            </button>
        </div>
        <form action="https://html.truelysell.com/template3/admin/sub-categories.html">
            <div class="modal-body py-0">
                <div class="del-modal">
                    <p>Are you sure want to Delete?</p>
                </div>
            </div>
            <div class="modal-footer pt-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Yes</button>
            </div>
        </form>
    </div>
</div>
</div>
@endsection
