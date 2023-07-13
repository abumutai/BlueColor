@extends('layouts.app')

@section('title')
    <title>Add Service</title>
@endsection

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Add Service</a></li>
                </ol>
            </div>
            <!-- row -->
            @if (session('exception'))
                <div class="alert alert-danger">
                    {{ session('exception') }}
                </div>
            @endif
            <div class="row">
                <div class="col-xl-12 col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Service Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{ route('admin-services.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="">Select Provider </label>
                                                <select name="provider" id="" class="form-control input-default ">
                                                    <option value="">Select provider</option>
                                                    @foreach ($providers as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ old('provider') == $item->id ? 'selected' : '' }}>
                                                            {{ $item->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('provider')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="">Service Title</label>
                                                <input type="text" class="form-control input-default "
                                                    placeholder="Service Title" name="title" value="{{ old('title') }}">
                                                @error('title')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="">Service Amount</label>
                                                <input type="number" class="form-control input-default "
                                                    placeholder="Service Amount" name="amount" value="{{ old('amount') }}">
                                                @error('amount')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="">County</label>
                                                <select name="county" id="" class="form-control input-default ">
                                                    <option value="">Select County</option>
                                                    @foreach ($counties as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ old('county') == $item->id ? 'selected' : '' }}>
                                                            {{ $item->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('county')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="">City</label>
                                                <select name="city" id="" class="form-control input-default ">
                                                    <option value="">Select City</option>
                                                    @foreach ($counties as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ old('city') == $item->id ? 'selected' : '' }}>
                                                            {{ $item->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('city')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="">Category </label>
                                                <select name="category" id="" class="form-control input-default ">
                                                    <option value="">Select Category</option>
                                                    @foreach ($categories as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ old('category') == $item->id ? 'selected' : '' }}>
                                                            {{ $item->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('category')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="">SubCategory </label>
                                                <select name="subcategory" id="" class="form-control input-default ">
                                                    <option value="">Select SubCategory</option>
                                                    @foreach ($subcategories as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ old('subcategory') == $item->id ? 'selected' : '' }}>
                                                            {{ $item->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('subcategory')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="">Service Images</label>
                                                <input type="file" class="form-file-input form-control" name="image">
                                                @error('image')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="">Service Description</label>
                                               <textarea class="form-control input-default" name="description" id="" cols="30" rows="10" placeholder="Details">{{old('description')}}</textarea>
                                            </div>
                                            @error('description')
                                                <div class="alert alert-danger">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
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
</div>
</div>
</div>
@endsection
