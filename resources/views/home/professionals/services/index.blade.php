@extends('layouts.home')

@section('title')
    <title>My Services</title>
@endsection

@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
    
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-md-4">						
                    <div class="provider-subtitle">
                        <h6>My Services</h6>
                    </div>
                </div>
                <div class="col-md-8 d-flex align-items-center justify-content-md-end flex-wrap">
                    <div class="review-sort me-2">
                        <p>Sort</p>
                        <select class="select">
                            <option>A -> Z</option>
                            <option>Most helful</option>
                        </select>
                    </div>
                    <div class="grid-listview me-2">
                        <ul>
                            <li>
                                <a href="javascript:void(0);">
                                    <img src="assets/img/icons/filter-icon.svg" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="provider-services.html" class="active">
                                    <i class="feather-grid"></i>
                                </a>
                            </li>
                            <li>
                                <a href="provider-services-list.html">
                                    <i class="feather-list"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a href="{{ route('services.create') }}" class="btn btn-primary add-set"><i class="feather-plus me-2"></i>Add Service</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        
        
        <div class="row">
            <div class="col-md-12">
                <div class="tab-list">
                    <ul class="nav">
                        <li>
                            <a href="#" class="active" data-bs-toggle="tab" data-bs-target="#active-service">Actice Services</a>
                        </li>
                        <li>
                            <a href="#" data-bs-toggle="tab" data-bs-target="#inactive-service">Inactive Services</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-content pt-0">				
            <div class="tab-pane active" id="active-service">				
                <div class="row">			
                        
                    <!-- Favorite Item -->
                    @foreach ($services as $service)
                        
                    
                    <div class="col-xl-4 col-md-6">
                        <div class="service-widget pro-service">
                            <div class="service-img">
                                <a href="service-details.html">
                                    <img class="img-fluid serv-img" alt="Service Image" src="{{ ImageHandler::ImageUrl($service->image,'services') }}">
                                </a>
                                <div class="fav-item">
                                    <div class="item-info">
                                        <a href=""><span class="item-cat">{{ $service->category->title }}</span></a>
                                    </div>
                                    <span class="serv-rating"><i class="fa-solid fa-star"></i>4.9</span>
                                </div>
                            </div>
                            <div class="service-content">
                                <h3 class="title">
                                    <a href="service-details.html">{{ $service->title }}</a>
                                </h3>
                                <div class="addrs-item">
                                    <p><i class="feather-map-pin"></i>{{ $service->address }}</p>
                                    <h6 class="price">${{ $service->amount }}<span class="old-price">{{ $service->amount }}</span><span class="price-hr">/hr</span></h6>
                                </div>
                                <div class="serv-info">
                                    <div>
                                        <a href="provider-edit-service.html" class="serv-edit"><i class="feather-edit"></i> Edit</a>
                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#in-active"><span><i class="feather-alert-circle"></i> Active</span></a>
                                    </div>
                                    <a href="provider-offers.html" class="btn btn-book">Apply Offer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Favorite Item -->
                    @endforeach
                    
            </div>
        </div>
        {{-- <!-- Pagination -->
        <div class="row">
            <div class="col-sm-6">
                <div class="review-entries">
                    <span>Show</span>
                    <select>
                        <option>07</option>
                        <option>08</option>
                    </select>
                    <span>entries</span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="review-pagination">
                    <p>1 - 09 of 09</p>
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2 <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                    </ul>						
                </div>
            </div>
        </div>
        <!-- /Pagination --> --}}
    </div>
</div>
    <!-- Candidate Dashboard Area End -->
@endsection
