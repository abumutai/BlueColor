@extends('layouts.home')

@section('title')
    <title>My Services</title>
@endsection

@section('content')
    <!-- Breadcromb Area Start -->
    <section class="jobguru-breadcromb-area">
        <div class="breadcromb-top section_100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcromb-box">
                            <h3>Dashboard</h3>
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
                                <li><a href="#">professional</a></li>
                                <li class="active-breadcromb"><a href="#">My Services</a></li>
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
                <div class="col-lg-3 col-md-4 mx-auto dashboard-left-border">
                    <div class="dashboard-left">
                        @include('home.employer_sidebar')
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 mx-auto">

                    <div class="dashboard-right ">
                        <div class="manage-jobs">
                            <div class="manage-jobs-heading">
                                <p> <span class="h2"> My Services </span>
                                    <a href="{{ route('services.create') }}" class="btn btn-success pull-right">
                                        <i class="fa fa-plus"></i> Add Service
                                    </a>
                                </p>
                            </div>
                            @if (session('success'))
                                <div class="alert alert-success mt-5">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="single-manage-jobs table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Service</th>
                                            <th>Category </th>
                                            <th>Subcategory </th>
                                            <th>Amount </th>
                                            <th>Status</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($services as $item)
                                            <tr>
                                                <td class="manage-jobs-title"><a href="#">{{ $item->title }}</a>
                                                </td>
                                                <td class="table-date">{{ $item->category->title }}</td>
                                                <td class="table-date">{{ $item->subcategory->title }}</td>
                                                <td class="table-date">Kshs {{ $item->amount }}</td>
                                                <td><span
                                                        class="{{ $item->status == 0 ? 'pending' : 'expired' }}">{{ $item->status == 0 ? 'Active' : 'InActive' }}</span>
                                                </td>
                                                <td class="action">
                                                    <a href="{{ route('services.edit', $item->id) }}" class="action-edit"><i
                                                            class="fa fa-pencil-square-o"></i></a>
                                                    <button form="delete{{ $item->id }}" type="submit"
                                                        class="action-delete border-0"><i class="fa fa-trash-o"></i></button>
                                                    <form id="delete{{ $item->id }}"
                                                        action="{{ route('services.destroy', $item->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="manage-jobs-title" colspan="6"><a href="#">No Services
                                                        Added</a>
                                                </td>
                                            </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                                <div class="pagination-box-row">
                                    {{ $services->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Candidate Dashboard Area End -->
@endsection
