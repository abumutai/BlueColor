@extends('layouts.app')

@section('title')
    <title>Edit City</title>
@endsection

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Edit City</a></li>
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
                            <h4 class="card-title">City Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{ route('cities.update',$city->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="">City Name</label>
                                        <input type="text" class="form-control input-default " placeholder="City Name"
                                            name="name" value="{{ old('name') ?? $city->name }}">
                                        @error('name')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">City County</label>
                                        <select name="county" id="" class="form-control input-default ">
                                            <option value="">Select County</option>
                                            @foreach ($counties as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $city->county_id == $item->id ? 'selected' : '' }}>{{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('county')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
