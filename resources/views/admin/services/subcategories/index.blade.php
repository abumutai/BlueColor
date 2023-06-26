@extends('layouts.app')

@section('title')
    <title>Service SubCategories</title>
@endsection

@section('content')
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
                            <tr>
                                <td>1</td>
                                <td>
                                    <div class="table-imgname">
                                        <img src="assets/img/services/service-03.jpg" class="me-2" alt="img">
                                        <span>Others</span>
                                    </div>
                                </td>
                                <td>Others</td>
                                <td>Computer</td>
                                <td>28 Sep 2022</td>
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
                            <tr>
                                <td>2</td>
                                <td>
                                    <div class="table-imgname">
                                        <img src="assets/img/services/service-02.jpg" class="me-2" alt="img">
                                        <span>Others</span>
                                    </div>
                                </td>
                                <td>Others</td>
                                <td>Automobile</td>
                                <td>7 Sep 2022</td>
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
                            <tr>
                                <td>3</td>
                                <td>
                                    <div class="table-imgname">
                                        <img src="assets/img/services/service-04.jpg" class="me-2" alt="img">
                                        <span>Others</span>
                                    </div>
                                </td>
                                <td>Others</td>
                                <td>Car Wash</td>
                                <td>17 Sep 2022</td>
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
                            <tr>
                                <td>4</td>
                                <td>
                                    <div class="table-imgname">
                                        <img src="assets/img/services/service-09.jpg" class="me-2" alt="img">
                                        <span>Others</span>
                                    </div>
                                </td>
                                <td>Others</td>
                                <td>Cleaning</td>
                                <td>23 Sep 2022</td>
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
                            <tr>
                                <td>5</td>
                                <td>
                                    <div class="table-imgname">
                                        <img src="assets/img/services/service-08.jpg" class="me-2" alt="img">
                                        <span>Others</span>
                                    </div>
                                </td>
                                <td>Others</td>
                                <td>Construction</td>
                                <td>23 Sep 2022</td>
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
                            <tr>
                                <td>6</td>
                                <td>
                                    <div class="table-imgname">
                                        <img src="assets/img/services/service-07.jpg" class="me-2" alt="img">
                                        <span>Others</span>
                                    </div>
                                </td>
                                <td>Others</td>
                                <td>Interior</td>
                                <td>1 Sep 2022</td>
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
                            <tr>
                                <td>7</td>
                                <td>
                                    <div class="table-imgname">
                                        <img src="assets/img/services/service-09.jpg" class="me-2" alt="img">
                                        <span>Others</span>
                                    </div>
                                </td>
                                <td>Others</td>
                                <td>Painting</td>
                                <td>10 Sep 2022</td>
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
                            <tr>
                                <td>8</td>
                                <td>
                                    <div class="table-imgname">
                                        <img src="assets/img/services/service-12.jpg" class="me-2" alt="img">
                                        <span>Others</span>
                                    </div>
                                </td>
                                <td>Others</td>
                                <td>Plumbing</td>
                                <td>10 Sep 2022</td>
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection
