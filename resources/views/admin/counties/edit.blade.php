@extends('layouts.app')

@section('title')
    <title>Edit County</title>
@endsection

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Edit County</a></li>
                </ol>
            </div>
            <!-- row -->
            @if (session('exception'))
                <div class="alert alert-danger">
                    {{session('exception')}}
                </div>
            @endif
            <div class="row">
                <div class="col-xl-9 col-lg-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">County Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{ route('counties.update',$county->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-3">
                                        <label for="">County Name</label>
                                        <input type="text" class="form-control input-default " placeholder="County Name"
                                            name="name" value="{{old('name') ?? $county->name}}">
                                        @error('name')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">County Number</label>
                                        <input type="text" class="form-control input-default " placeholder="County Number"
                                            name="county_number" value="{{old('county_number') ?? $county->county_number}}">
                                        @error('county_number')
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
