@extends('layouts.home')
@section('title')
@endsection
@section('content')
<div class="page-wrapper">
    <div class="content container-fluid">
    
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-md-4">
                    <div class="provider-subtitle">
                        <h6>Holidays & Leave</h6>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="leave-action text-md-end">
                        <a href="#" class="btn btn-secondary"><i class="feather-file-text"></i> Leave History</a>
                        <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#add-holiday"><i class="feather-plus"></i> Add Holiday</a>
                        <a href="#" class="btn btn-primary add-set" data-bs-toggle="modal" data-bs-target="#add-leave"><i class="feather-plus"></i> Add Leave</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        
        <!-- calendar -->
        <div class="row">
            <div class="col-md-12">
                <div id="calendar"></div>
            </div>
        </div>
        <!-- /calendar -->
        
    </div>
</div>

<!-- Add Holiday -->
<div class="modal fade custom-modal" id="add-holiday">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header border-bottom-0 justify-content-between">
                <h5 class="modal-title">Add Holiday</h5>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
            </div>
            <div class="modal-body pt-0">
                <form action="#">
                    <div class="wallet-add">
                        <div class="form-group">
                            <label class="col-form-label">Holiday Name</label>
                            <input type="text" class="form-control" placeholder="Enter Holiday Name">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">From</label>
                            <div class="form-icon">
                                <input type="text" class="form-control datetimepicker" placeholder="Select Date">
                                <span class="cus-icon">
                                    <i class="feather-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">To</label>
                            <div class="form-icon">
                                <input type="text" class="form-control datetimepicker" placeholder="Select Date">
                                <span class="cus-icon">
                                    <i class="feather-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Description</label>
                            <textarea class="form-control" rows="4" placeholder="Enter Description"></textarea>
                        </div>
                        <div class="modal-submit text-end">
                            <a href="#" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>								
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add Holiday -->

<!-- Add Leave -->
<div class="modal fade custom-modal" id="add-leave">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header border-bottom-0 justify-content-between">
                <h5 class="modal-title">Add Leave</h5>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
            </div>
            <div class="modal-body pt-0">
                <form action="#">
                    <div class="wallet-add">
                        <div class="form-group">
                            <label class="col-form-label">From</label>
                            <div class="form-icon">
                                <input type="text" class="form-control datetimepicker" placeholder="Select Date">
                                <span class="cus-icon">
                                    <i class="feather-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">To</label>
                            <div class="form-icon">
                                <input type="text" class="form-control datetimepicker" placeholder="Select Date">
                                <span class="cus-icon">
                                    <i class="feather-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Reason</label>
                            <textarea class="form-control" rows="3" placeholder="Enter Reason"></textarea>
                        </div>
                        <div class="modal-submit text-end">
                            <a href="#" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>								
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Add Leave -->

<!-- Alert Message -->
<div class="modal fade custom-modal" id="alertmsg">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header border-bottom-0 justify-content-between">
                <h5 class="modal-title">Alert Message</h5>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
            </div>
            <div class="modal-body pt-0">
                <form action="#">
                    <div class="msg-alert">
                        <p>If You Take Your Appointment Automatically Cancelled.</p>
                    </div>
                    <div class="modal-submit text-end">
                        <a href="#" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</a>
                        <button type="submit" class="btn btn-primary">Ok</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>
@endsection