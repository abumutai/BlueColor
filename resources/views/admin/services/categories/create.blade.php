@extends('layouts.app')

@section('title')
    <title>Add Service Category</title>
@endsection

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Add Service Category</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-9 col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Category Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{route('service-categories.store')}}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="">Category Name</label>
                                        <input type="text" class="form-control input-default " placeholder="Name"
                                            name="name">
                                        @error('name')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Category Image</label>
                                        <input type="file" class="form-file-input form-control" name="image">
                                        @error('image')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
