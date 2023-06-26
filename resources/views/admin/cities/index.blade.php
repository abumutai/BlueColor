@extends('layouts.app')

@section('title')
    <title>Cities</title>
@endsection

@section('content')
<div class="page-wrapper page-settings">
    <div class="content">
        <div class="content-page-header content-page-headersplit mb-0">
            <h5>Counties</h5>
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
                        <a class="btn btn-primary" href="add-counties.html"><i class="fa fa-plus me-2"></i>Add City </a>
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
                                <th>ID</th>
                                <th>Name</th>
                                <th>County</th>
                                <th>Added By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cities as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->county->name }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('cities.edit', $item->id) }}"
                                                class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                    class="fas fa-pencil-alt"></i></a>
                                            <button form="delete{{ $item->id }}" type="submit"
                                                class="btn btn-danger shadow btn-xs sharp"><i
                                                    class="fa fa-trash"></i></button>
                                            <form id="delete{{ $item->id }}"
                                                action="{{ route('cities.destroy', $item->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                            </form>
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
