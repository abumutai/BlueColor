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
                    <li>
                        <a class="btn btn-primary" href="add-categories.html"><i class="fa fa-plus me-2"></i>Add Categories </a>
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
                                <th>Category</th>
                                <th>Category Slug</th>
                                <th>Date</th>
                                <th>Featured</th>
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
                                <td>28 Sep 2022</td>
                                <td>
                                    <div class="active-switch">
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="sliders round"></span>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-actions d-flex">
                                        <a class="delete-table me-2" href="edit-categories.html" >
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
                                <td>17 Sep 2022</td>
                                <td>
                                    <div class="active-switch">
                                        <label class="switch">
                                            <input type="checkbox" >
                                            <span class="sliders round"></span>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-actions d-flex">
                                        <a class="delete-table me-2" href="edit-categories.html" >
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
                                        <span> Car Wash</span>
                                    </div>
                                </td>
                                <td>Car Wash</td>
                                <td>13 Sep 2022</td>
                                <td>
                                    <div class="active-switch">
                                        <label class="switch">
                                            <input type="checkbox" >
                                            <span class="sliders round"></span>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-actions d-flex">
                                        <a class="delete-table me-2" href="edit-categories.html" >
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
                                <td>07 Sep 2022</td>
                                <td>
                                    <div class="active-switch">
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="sliders round"></span>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-actions d-flex">
                                        <a class="delete-table me-2" href="edit-categories.html" >
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
                                <td>07 Sep 2022</td>
                                <td>
                                    <div class="active-switch">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="sliders round"></span>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-actions d-flex">
                                        <a class="delete-table me-2" href="edit-categories.html" >
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
                                <td>07 Sep 2022</td>
                                <td>
                                    <div class="active-switch">
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="sliders round"></span>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-actions d-flex">
                                        <a class="delete-table me-2" href="edit-categories.html" >
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
                                <td>22 Aug 2022</td>
                                <td>
                                    <div class="active-switch">
                                        <label class="switch">
                                            <input type="checkbox" checked="">
                                            <span class="sliders round"></span>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-actions d-flex">
                                        <a class="delete-table me-2" href="edit-categories.html" >
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
                                <td>15 Aug 2022</td>
                                <td>
                                    <div class="active-switch">
                                        <label class="switch">
                                            <input type="checkbox" >
                                            <span class="sliders round"></span>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-actions d-flex">
                                        <a class="delete-table me-2" href="edit-categories.html" >
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
