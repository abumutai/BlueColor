@extends('layouts.home')

@section('title')
    <title>Add Service - Blue Color</title>
@endsection

@section('content')
    <!-- Breadcromb Area Start -->
    <section class="jobguru-breadcromb-area">
        <div class="breadcromb-top section_100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcromb-box">
                            <h3>Add Service</h3>
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
                                <li class="active-breadcromb"><a href="#">Add Service</a></li>
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
                            <div class="new-job-submission">
                                <form>
                                    <div class="resume-box">
                                        <div class="single-resume-feild feild-flex-2">
                                            <div class="single-input">
                                                <label for="j_title">Title:</label>
                                                <input type="text" placeholder="e.g Plumbing">
                                            </div>
                                            <div class="single-input">
                                                <label for="Location">Charges:</label>
                                                <input type="text" placeholder="Service Charges">
                                            </div>
                                        </div>
                                        <div class="single-resume-feild feild-flex-2">
                                            <div class="single-input">
                                                <label for="j_reg">Category:</label>
                                                <select id="j_reg">
                                                    <option value=''>Select Category</option>
                                                    <option value="1">Los Angeles</option>
                                                    <option value="2">Miami</option>
                                                    <option value="3">New York</option>
                                                    <option value="4">San Francisco</option>
                                                </select>
                                            </div>
                                            <div class="single-input">
                                                <label for="j_type">Subcategory:</label>
                                                <select id="j_type">
                                                    <option value=''>Select Subcategory</option>
                                                    <option value="1">Full TIme</option>
                                                    <option value="2">Freelance</option>
                                                    <option value="3">Part Time</option>
                                                    <option value="4">Internship</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="single-resume-feild feild-flex-2">
                                            <div class="single-input">
                                                <label for="j_reg">County:</label>
                                                <select id="j_reg">
                                                    <option value=''>Select County</option>
                                                    <option value="1">Los Angeles</option>
                                                    <option value="2">Miami</option>
                                                    <option value="3">New York</option>
                                                    <option value="4">San Francisco</option>
                                                </select>
                                            </div>
                                            <div class="single-input">
                                                <label for="j_type">City/Town:</label>
                                                <select id="j_type">
                                                    <option value=''>Select City/Town</option>
                                                    <option value="1">Full TIme</option>
                                                    <option value="2">Freelance</option>
                                                    <option value="3">Part Time</option>
                                                    <option value="4">Internship</option>
                                                </select>
                                            </div>
                                        </div>
                                   
                                        <div class="single-resume-feild feild-flex-2">
                                            <div class="single-input">
                                                <label for="mn_salary">Address:</label>
                                                <input type="text" placeholder="e.g. Nairobi CBD" id="mn_salary">
                                            </div>
                                        </div>
                                        <div class="single-resume-feild">
                                            <div class="single-input">
                                                <label for="j_desc">Job Description:</label>
                                                <textarea id="j_desc"></textarea>
                                            </div>
                                        </div>
                                        <div class="single-resume-feild upload_file">
                                            <div class="product-upload">
                                                <p>
                                                    <i class="fa fa-upload"></i>
                                                    Upload Files
                                                </p>
                                                <input type="file" id="w_screen">
                                            </div>
                                            <p>Images or documents that might be helpful in describing your job</p>
                                        </div>
                                    </div>
                                    <div class="single-input submit-resume">
                                        <button type="submit">Post Job</button>
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
