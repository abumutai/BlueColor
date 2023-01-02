@extends('layouts.app')

@section('title')
    <title>Cities</title>
@endsection

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb d-flex flex-row-reverse">
                    <a href="{{ route('cities.create') }}" class="btn btn-primary"> <i class="fa fa-plus"></i> Add City</a>
                </ol>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Cities</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example3" class="display" style="min-width: 845px">
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
        </div>
    </div>
@endsection
