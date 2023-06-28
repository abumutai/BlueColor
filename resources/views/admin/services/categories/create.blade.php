@extends('layouts.app')

@section('title')
    <title>Add Service Category</title>
@endsection

@section('content')
<div class="page-wrapper">
    <div class="content">
        @if (session('exception'))
            <div class="alert alert-danger">
                {{session('exception')}}
            </div>
        @endif
        <div class="row">
            <div class="col-lg-7 col-sm-12 m-auto">
                <div class="content-page-header">
                    <h5>Add Categories</h5>
                </div>
                <form action="{{ route('service-categories.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="">Category Name</label>
                        <input type="text" class="form-control input-default " placeholder="Name"
                            name="name" value="{{old('name')}}">
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
@endsection
