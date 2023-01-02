@extends('layouts.home')

@section('title')
    <title>Edit Service - Blue Color</title>
@endsection

@section('content')
    <!-- Breadcromb Area Start -->
    <section class="jobguru-breadcromb-area">
        <div class="breadcromb-top section_100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcromb-box">
                            <h3>Edit Service</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcromb-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcromb-box-pagin">
                            <ul>
                                <li><a href="#">home</a></li>
                                <li><a href="#">Professional</a></li>
                                <li class="active-breadcromb"><a href="#">Edit Service</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcromb Area End -->


    <!-- Candidate Dashboard Area Start -->
    <section class="candidate-dashboard-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-3  mx-auto dashboard-left-border">
                    <div class="dashboard-left">
                        <div class="dashboard-left">
                            @include('home.employer_sidebar')
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-9 mx-auto">
                    <div class="dashboard-right">
                        <div class="earnings-page-box manage-jobs">
                            <div class="manage-jobs-heading">
                                <h3>Post A new service</h3>
                            </div>
                            @if (session('exception'))
                                <div class="alert alert-danger mt-5">
                                    {{ session('exception') }}
                                </div>
                            @endif
                            <div class="new-job-submission">
                                <form action="{{ route('services.update',$service->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="resume-box">
                                        <div class="single-resume-feild feild-flex-2">
                                            <div class="single-input">
                                                <label for="j_title">Title:</label>
                                                <input type="text" placeholder="e.g Plumbing" name="title"
                                                    value="{{ old('title') ?? $service->title }}">
                                            </div>
                                            @error('title')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <div class="single-input">
                                                <label for="Location">Charges:</label>
                                                <input type="text" placeholder="Service Charges" name="charges"
                                                    value="{{ old('charges') ?? $service->amount}}">
                                            </div>
                                            @error('charges')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="single-resume-feild feild-flex-2">
                                            <div class="single-input">
                                                <label for="j_reg">Category:</label>
                                                <select id="j_reg" name="category">
                                                    <option value=''>Select Category</option>
                                                    @foreach ($categories as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ $service->category_id == $item->id ? 'selected' : '' }}>
                                                            {{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('category')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <div class="single-input">
                                                <label for="j_type">Subcategory:</label>
                                                <select id="j_type" name="subcategory">
                                                    <option value=''>Select Subcategory</option>
                                                    @foreach ($subcategories as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ $service->sub_category_id == $item->id ? 'selected' : '' }}>
                                                            {{ $item->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('subcategory')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="single-resume-feild feild-flex-2">
                                            <div class="single-input">
                                                <label for="j_reg">County:</label>
                                                <select id="j_reg" name="county">
                                                    <option value=''>Select County</option>
                                                    @foreach ($counties as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ $service->county_id == $item->id ? 'selected' : '' }}>
                                                            {{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('county')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <div class="single-input">
                                                <label for="j_type">City/Town:</label>
                                                <select id="j_type" name="city">
                                                    <option value=''>Select City</option>
                                                    @foreach ($cities as $item)
                                                        <option value="{{ $item->id }}"
                                                            {{ $service->city_id == $item->id ? 'selected' : '' }}>
                                                            {{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('city')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="single-resume-feild feild-flex-2">
                                            <div class="single-input">
                                                <label for="mn_salary">Address:</label>
                                                <input type="text" placeholder="e.g. Nairobi CBD" id="mn_salary"
                                                    name="address" value="{{ old('address') ?? $service->address }}">
                                            </div>
                                            @error('address')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="single-resume-feild">
                                            <div class="single-input">
                                                <label for="j_desc">Service Description:</label>
                                                <textarea id="j_desc" name="description">{{ old('description') ?? $service->description }}</textarea>
                                            </div>
                                            @error('description')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="single-resume-feild upload_file">
                                            <div class="product-upload">
                                                <p>
                                                    <i class="fa fa-upload"></i>
                                                    Upload Image
                                                </p>
                                                <input type="file" id="w_screen" name="image">
                                            </div>
                                            <p>Images that might be helpful in describing your service</p>
                                            @error('image')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="single-input submit-resume">
                                        <button type="submit">Post Service</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Candidate Dashboard Area End -->
@endsection
