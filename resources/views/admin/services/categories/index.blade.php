@extends('layouts.app')

@section('title')
    <title>Service Categories</title>
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
                            <h4 class="card-title">Service Categories</h4>
                            <a href="{{ route('service-categories.create') }}" class="btn btn-primary pull-right"><i
                                    class="fa fa-plus"> Add Category</i></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example5" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Category ID</th>
                                            <th>Category Name</th>
                                            <th>Added By</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>{{ $item->user->name }}</td>
                                                <td>
                                                    <a href="{{ route('service-categories.edit', $item->id) }}"
                                                        class="btn btn-primary"><i class="fa fa-edit"></i>
                                                        Edit</a>
                                                    <button form="delete{{ $item->id }}" type="submit"
                                                        class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                                    <form id="delete{{ $item->id }}"
                                                        action="{{ route('service-categories.destroy', $item->id) }}"
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
