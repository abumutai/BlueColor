@extends('layouts.app')

@section('title')
    <title>Add City</title>
@endsection

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Add City</a></li>
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
                                <form action="{{ route('cities.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="">City Name</label>
                                        <input type="text" class="form-control input-default " placeholder="City Name"
                                            name="name" value="{{ old('name') }}">
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
                                                    {{ old('county') == $item->id ? 'selected' : '' }}>{{ $item->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('county')
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
