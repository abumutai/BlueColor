@extends('layouts.app')

@section('title')
    <title>Service SubCategories</title>
@endsection

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Service SubCategories</h4>
                            <a href="{{ route('service-subcategories.create') }}" class="btn btn-primary pull-right"><i
                                    class="fa fa-plus"> Add SubCategory</i></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example5" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>SubCategory ID</th>
                                            <th>SubCategory Name</th>
                                            <th>Category</th>
                                            <th>Added By</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($subcategories as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->category->title }}</td>
                                                <td>{{ $item->user->name }}</td>
                                                <td>
                                                    <a href="{{ route('service-subcategories.edit', $item->id) }}"
                                                        class="btn btn-primary"><i class="fa fa-edit"></i>
                                                        Edit</a>
                                                    <button form="delete{{ $item->id }}" type="submit"
                                                        class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                                    <form id="delete{{ $item->id }}"
                                                        action="{{ route('service-subcategories.destroy', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
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
    </div>
@endsection
