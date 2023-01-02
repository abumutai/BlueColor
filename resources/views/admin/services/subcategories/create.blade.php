@extends('layouts.app')

@section('title')
    <title>Add Service SubCategory</title>
@endsection

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Add Service SubCategory</a></li>
                </ol>
            </div>
            <!-- row -->
            @if (session('exception'))
                <div class="alert alert-danger">
                    {{ session('exception') }}
                </div>
            @endif
            <div class="row">
                <div class="col-xl-9 col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">SubCategory Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{ route('service-subcategories.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="">SubCategory Name</label>
                                        <input type="text" class="form-control input-default " placeholder="Name"
                                            name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Category </label>
                                        <select name="category" id="" class="form-control input-default ">
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ old('category') == $item->id ? 'selected' : '' }}>{{ $item->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">SubCategory Image</label>
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
