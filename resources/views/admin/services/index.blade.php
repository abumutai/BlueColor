@extends('layouts.app')

@section('title')
    <title>Services</title>
@endsection

@section('content')
    <div class="content-body">
        <!-- row -->

        <div class="container-fluid">
            @if (session('succes'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
            @endif
            <div class="d-flex align-items-center flex-wrap search-job bg-white rounded py-3 px-3 mb-4">

                <div class="col-lg-9 d-md-flex">
                    <input class="form-control input-rounded me-auto mb-md-0 mb-3" type="text"
                        placeholder="Search by Service Title, Company or any servoce keyword...">

                    <a href="javascript:void(0);" class="btn btn-primary btn-rounded"><i
                            class="las la-search scale5 me-3"></i>FIND</a>
                </div>
            </div>
            <div class="d-flex pb-3 mb-4 border-bottom flex-wrap align-items-center">
                @foreach ($categories as $item)
                    <a href="javascript:void(0);"
                        class="btn btn-primary light btn-rounded me-2 mb-2">{{ $item->title }}</a>
                @endforeach
            </div>
            <div class="d-flex flex-wrap mb-4 align-items-center search-filter">
                <div class="me-auto mb-2 pe-2">
                    <h6 class="text-black fs-16 font-w600 mb-1">{{ $services->count() }} Services</h6>
                    <span class="fs-14">Total Services Added</span>
                </div>

                <ul class="nav grid-tabs">
                    <li class="nav-item">
                        <a href="#List" class="nav-link" data-bs-toggle="tab" aria-expanded="false">
                            <svg class="scale5 primary-icon" width="14" height="14" viewBox="0 0 24 24"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 7.5H3C2.17275 7.5 1.5 6.82687 1.5 6V3C1.5 2.17313 2.17275 1.5 3 1.5H6C6.82725 1.5 7.5 2.17313 7.5 3V6C7.5 6.82687 6.82725 7.5 6 7.5ZM3 3V6H6.00113L6 3H3ZM22.5 4.5C22.5 4.08544 22.1642 3.75 21.75 3.75H9.75C9.33581 3.75 9 4.08544 9 4.5C9 4.91456 9.33581 5.25 9.75 5.25H21.75C22.1642 5.25 22.5 4.91456 22.5 4.5ZM6 15H3C2.17275 15 1.5 14.3269 1.5 13.5V10.5C1.5 9.67313 2.17275 9 3 9H6C6.82725 9 7.5 9.67313 7.5 10.5V13.5C7.5 14.3269 6.82725 15 6 15ZM3 10.5V13.5H6.00113L6 10.5H3ZM22.5 12C22.5 11.5854 22.1642 11.25 21.75 11.25H9.75C9.33581 11.25 9 11.5854 9 12C9 12.4146 9.33581 12.75 9.75 12.75H21.75C22.1642 12.75 22.5 12.4146 22.5 12ZM6 22.5H3C2.17275 22.5 1.5 21.8269 1.5 21V18C1.5 17.1731 2.17275 16.5 3 16.5H6C6.82725 16.5 7.5 17.1731 7.5 18V21C7.5 21.8269 6.82725 22.5 6 22.5ZM3 18V21H6.00113L6 18H3ZM22.5 19.5C22.5 19.0854 22.1642 18.75 21.75 18.75H9.75C9.33581 18.75 9 19.0854 9 19.5C9 19.9146 9.33581 20.25 9.75 20.25H21.75C22.1642 20.25 22.5 19.9146 22.5 19.5Z"
                                    fill="#40189D" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#Boxed" class="nav-link active" data-bs-toggle="tab" aria-expanded="false">
                            <svg class="scale5" width="14" height="14" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 1H2C1.73478 1 1.48043 1.10536 1.29289 1.29289C1.10536 1.48043 1 1.73478 1 2V10C1 10.2652 1.10536 10.5196 1.29289 10.7071C1.48043 10.8946 1.73478 11 2 11H10C10.2652 11 10.5196 10.8946 10.7071 10.7071C10.8946 10.5196 11 10.2652 11 10V2C11 1.73478 10.8946 1.48043 10.7071 1.29289C10.5196 1.10536 10.2652 1 10 1ZM9 9H3V3H9V9Z"
                                    fill="white" />
                                <path
                                    d="M22 1H14C13.7348 1 13.4804 1.10536 13.2929 1.29289C13.1054 1.48043 13 1.73478 13 2V10C13 10.2652 13.1054 10.5196 13.2929 10.7071C13.4804 10.8946 13.7348 11 14 11H22C22.2652 11 22.5196 10.8946 22.7071 10.7071C22.8946 10.5196 23 10.2652 23 10V2C23 1.73478 22.8946 1.48043 22.7071 1.29289C22.5196 1.10536 22.2652 1 22 1ZM21 9H15V3H21V9Z"
                                    fill="white" />
                                <path
                                    d="M10 13H2C1.73478 13 1.48043 13.1054 1.29289 13.2929C1.10536 13.4804 1 13.7348 1 14V22C1 22.2652 1.10536 22.5196 1.29289 22.7071C1.48043 22.8946 1.73478 23 2 23H10C10.2652 23 10.5196 22.8946 10.7071 22.7071C10.8946 22.5196 11 22.2652 11 22V14C11 13.7348 10.8946 13.4804 10.7071 13.2929C10.5196 13.1054 10.2652 13 10 13ZM9 21H3V15H9V21Z"
                                    fill="white" />
                                <path
                                    d="M22 13H14C13.7348 13 13.4804 13.1054 13.2929 13.2929C13.1054 13.4804 13 13.7348 13 14V22C13 22.2652 13.1054 22.5196 13.2929 22.7071C13.4804 22.8946 13.7348 23 14 23H22C22.2652 23 22.5196 22.8946 22.7071 22.7071C22.8946 22.5196 23 22.2652 23 22V14C23 13.7348 22.8946 13.4804 22.7071 13.2929C22.5196 13.1054 22.2652 13 22 13ZM21 21H15V15H21V21Z"
                                    fill="white" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane" id="List">
                    <div class="row">
                        @forelse ($services as $item)
                            <div class="col-xl-12">
                                <div
                                    class="d-flex flex-wrap search-row bg-white py-3 mb-3 rounded justify-content-between align-items-center">
                                    <div class="d-flex col-xl-4 col-xxl-3 col-lg-4 col-sm-6 align-items-center">

                                        <img src="{{ asset($item->image) }}" class="me-3" alt=""
                                            width="80" height="80">
                                        <div>
                                            <h2 class="title"><a href="profile.html"
                                                    class="text-black">{{ $item->title }}</a></h2>
                                            <span class="text-primary">{{ $item->provider->name }}</span>
                                        </div>
                                    </div>
                                    <div class="d-flex col-xl-3 col-lg-4 col-sm-6 align-items-center">
                                        <svg class="me-3 ms-lg-0 ms-sm-auto ms-0 mt-sm-0 mt-3" width="54" height="54"
                                            viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="54" height="54" rx="15" fill="#2BC155"></rect>
                                            <g clip-path="url(#clip6)">
                                                <path
                                                    d="M27.0001 19.84C23.5987 19.84 20.6536 22.2024 19.9157 25.5229L17.4992 36.397C17.4815 36.4768 17.4725 36.5583 17.4725 36.64C17.4725 37.2585 17.974 37.76 18.5925 37.76H35.4077C35.4894 37.76 35.5709 37.751 35.6507 37.7333C36.2545 37.5991 36.6352 37.0008 36.501 36.397L34.0846 25.5229C33.3467 22.2024 30.4016 19.84 27.0001 19.84ZM27.0001 17.6C31.4515 17.6 35.3056 20.6916 36.2712 25.037L38.6877 35.9111C39.0902 37.7226 37.9481 39.5174 36.1366 39.92C35.8973 39.9731 35.6529 40 35.4077 40H18.5925C16.7369 40 15.2325 38.4956 15.2325 36.64C15.2325 36.3948 15.2594 36.1504 15.3126 35.9111L17.729 25.037C18.6947 20.6916 22.5488 17.6 27.0001 17.6Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M29.2402 24.32C29.8588 24.32 30.3602 24.8214 30.3602 25.44C30.3602 26.0585 29.8588 26.56 29.2402 26.56H26.4402C26.1309 26.56 25.8802 26.8107 25.8802 27.12C25.8802 27.4292 26.1309 27.68 26.4402 27.68H27.5602C29.1066 27.68 30.3602 28.9336 30.3602 30.48C30.3602 32.0264 29.1066 33.28 27.5602 33.28H24.7602C24.1416 33.28 23.6402 32.7785 23.6402 32.16C23.6402 31.5414 24.1416 31.04 24.7602 31.04H27.5602C27.8695 31.04 28.1202 30.7892 28.1202 30.48C28.1202 30.1707 27.8695 29.92 27.5602 29.92H26.4402C24.8938 29.92 23.6402 28.6664 23.6402 27.12C23.6402 25.5736 24.8938 24.32 26.4402 24.32H29.2402Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M25.8802 23.2C25.8802 22.5814 26.3817 22.08 27.0002 22.08C27.6188 22.08 28.1203 22.5814 28.1203 23.2V25.44C28.1203 26.0586 27.6188 26.56 27.0002 26.56C26.3817 26.56 25.8802 26.0586 25.8802 25.44V23.2Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M28.1203 34.4C28.1203 35.0186 27.6188 35.52 27.0002 35.52C26.3817 35.52 25.8802 35.0186 25.8802 34.4V32.16C25.8802 31.5414 26.3817 31.04 27.0002 31.04C27.6188 31.04 28.1203 31.5414 28.1203 32.16V34.4Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M25.8001 18.304C26.0298 18.8784 25.7504 19.5302 25.1761 19.7599C24.6018 19.9896 23.95 19.7103 23.7203 19.136L21.4803 13.536C21.1163 12.626 22.0141 11.7204 22.9272 12.0766C23.7659 12.4037 24.391 12.56 24.7602 12.56C24.8521 12.56 24.9283 12.5404 25.0946 12.4697C25.1387 12.4509 25.1906 12.428 25.3122 12.3742C25.8915 12.1203 26.3491 12 27.0002 12C27.6497 12 28.1146 12.1206 28.6957 12.3721C28.8432 12.4366 28.9021 12.4623 28.9542 12.4838C29.0978 12.5429 29.1669 12.56 29.2402 12.56C29.5878 12.56 30.2185 12.4023 31.0812 12.0735C31.9932 11.7258 32.8825 12.6298 32.5201 13.536L30.2801 19.136C30.0503 19.7103 29.3985 19.9896 28.8242 19.7599C28.2499 19.5302 27.9705 18.8784 28.2003 18.304L29.6096 14.7807C29.4808 14.7936 29.3578 14.8 29.2402 14.8C28.8314 14.8 28.4927 14.7162 28.1013 14.5551C28.0241 14.5232 27.9394 14.4863 27.8064 14.4279C27.4822 14.2877 27.2985 14.24 27.0002 14.24C26.7048 14.24 26.5313 14.2856 26.2114 14.4258C26.1015 14.4745 26.0319 14.5052 25.9706 14.5313C25.5512 14.7095 25.2002 14.8 24.7602 14.8C24.6419 14.8 24.5189 14.7939 24.3911 14.7816L25.8001 18.304Z"
                                                    fill="white"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip6">
                                                    <rect width="28" height="28" fill="white"
                                                        transform="translate(13 12)"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <div>
                                            <h4 class="sub-title text-black">Kshs {{ $item->amount }}</h4>
                                            <span>Charges</span>
                                        </div>
                                    </div>
                                    <div class="d-flex col-xl-3 col-lg-4 col-sm-6 mt-lg-0 mt-3 align-items-center">
                                        <svg class="me-3" width="54" height="54" viewBox="0 0 54 54" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="54" height="54" rx="15" fill="#FBA556"></rect>
                                            <path
                                                d="M27 15C21.934 15 17.8125 19.1215 17.8125 24.1875C17.8125 25.8091 18.2409 27.4034 19.0515 28.7979C19.2404 29.123 19.4516 29.4398 19.6793 29.7396L26.6008 39H27.3991L34.3207 29.7397C34.5483 29.4398 34.7595 29.1231 34.9485 28.7979C35.7591 27.4034 36.1875 25.8091 36.1875 24.1875C36.1875 19.1215 32.066 15 27 15ZM27 27.2344C25.32 27.2344 23.9531 25.8675 23.9531 24.1875C23.9531 22.5075 25.32 21.1406 27 21.1406C28.68 21.1406 30.0469 22.5075 30.0469 24.1875C30.0469 25.8675 28.68 27.2344 27 27.2344Z"
                                                fill="white"></path>
                                        </svg>
                                        <div>
                                            <h4 class="sub-title text-black">
                                                {{ $item->county->name }},{{ $item->city->name }}</h4>
                                            <span>Location</span>
                                        </div>
                                    </div>
                                    <div
                                        class="col-xl-2 col-xxl-3 text-xl-end text-lg-start text-sm-end col-lg-12 col-sm-6 mt-xl-0 mt-3">
                                        <a href="profile.html" class="btn btn-sm btn-outline-primary rounded me-2">Details</a>
                                        <label class="like-btn mb-2 mt-3 mt-sm-0">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        @empty
                            No Services Added
                        @endforelse
                    </div>
                </div>
                <div class="tab-pane active show" id="Boxed">
                    <div class="row">
                        @forelse ($services as $item)
                            <div class="col-xl-4 col-lg-6">
                                <div class="card shadow_1">
                                    <div class="card-body">
                                        <div class="media mb-2">
                                            <div class="media-body">
                                                <p class="mb-1">{{$item->provider->name}}</p>
                                                <h4 class="fs-20 text-black">{{$item->title}}</h4>
                                            </div>
                                           
                                            <img src="{{asset($item->image)}}" alt="" class="ms-3" width="200">
                                        </div>
                                        <span class="text-primary font-w500 d-block mb-3">Kshs {{$item->amount}}</span>
                                        <p class="fs-14">{{$item->description}}</p>
                                        <div class="d-flex align-items-center mt-4">
                                            <a href="javascript:void(0);"
                                                class="btn btn-primary light btn-rounded me-auto">DETAILS</a>
                                            <span class="text-black font-w500">{{$item->city->name}},{{$item->county->name}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
