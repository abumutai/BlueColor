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
                        <h6>Payout</h6>
                    </div>
                </div>
                <div class="col-md-8 d-flex align-items-center justify-content-md-end flex-wrap">
                    <a href="#" class="btn btn-primary add-set" data-bs-toggle="modal" data-bs-target="#add-payout"><i class="feather-settings me-2"></i>Set Payout</a>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        
        <div class="row">
        
            <!-- Payout card -->
            <div class="col-md-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="balance-crad">
                            <div class="balance-head">
                                <span class="balance-icon">
                                    <img src="assets/img/icons/bal-icon.svg" alt="">
                                </span>
                                <div class="balance-info">
                                    <h6>Available Payout</h6>
                                    <h3>$<span class="counters" data-count="180">0</span></h3>
                                </div>
                            </div>
                            <div class="balance-amt">
                                <a href="#" class="btn btn-primary view-transaction">View Transactions</a>
                                <a href="#" class="btn btn-secondary  btn-withdraw">Withdraw</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="balance-crad">
                            <div class="balance-head">
                                <span class="balance-icon">
                                    <img src="assets/img/icons/bal-icon.svg" alt="">
                                </span>
                                <div class="balance-info">
                                    <h6>Last Payout</h6>
                                    <h3>$<span class="counters" data-count="200">0</span></h3>
                                </div>
                            </div>
                            <div class="balance-amt">
                                <a href="#" class="btn btn-secondary view-transaction">View Transactions</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <div class="balance-crad">
                            <div class="balance-head">
                                <span class="balance-icon">
                                    <img src="assets/img/icons/bal-icon.svg" alt="">
                                </span>
                                <div class="balance-info">
                                    <h6>Next Payout</h6>
                                    <h3>$<span class="counters" data-count="200">0</span></h3>
                                </div>
                            </div>
                            <div class="balance-amt">
                                <a href="#" class="btn btn-secondary view-transaction">View Transactions</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Payout card -->
            
        </div>
        
        <!-- Payout History -->
        <div class="row">
            <div class="col-md-12">
                <h6 class="subhead-title">Payout History</h6>
                <div class="provide-table manage-table">
                    <div class="table-responsive">
                        <table class="table custom-table datatable" id="data-table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Payout Date</th>
                                    <th>Amount</th>
                                    <th>Refunds</th>
                                    <th>Fees</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Payment Processed</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Sep 26, 2022</td>
                                    <td>$100.00</td>
                                    <td class="text-light-danger">-$10.00</td>
                                    <td class="text-light-danger">-$10.00</td>
                                    <td>$90.00</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Sep 21, 2022</td>
                                    <td>$100.00</td>
                                    <td>-$0.00</td>
                                    <td class="text-light-danger">-$10.00</td>
                                    <td>$90.00</td>
                                    <td><span class="badge-success">Paid</span></td>
                                    <td>Sep 11, 2022</td>
                                </tr>
                                <tr>
                                    <td>Sep 21, 2022</td>
                                    <td>$100.00</td>
                                    <td class="text-light-danger">-$0.00</td>
                                    <td>-$10.00</td>
                                    <td>$90.00</td>
                                    <td><span class="badge-success">Paid</span></td>
                                    <td>Sep 11, 2022</td>
                                </tr>
                                <tr>
                                    <td>Sep 21, 2022</td>
                                    <td>$100.00</td>
                                    <td>-$0.00</td>
                                    <td>-$10.00</td>
                                    <td>$90.00</td>
                                    <td><span class="badge-success">Paid</span></td>
                                    <td>Sep 11, 2022</td>
                                </tr>
                                <tr>
                                    <td>Sep 21, 2022</td>
                                    <td>$100.00</td>
                                    <td>-$0.00</td>
                                    <td>-$10.00</td>
                                    <td>$90.00</td>
                                    <td><span class="badge-success">Paid</span></td>
                                    <td>Sep 11, 2022</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div id="tablelength"></div>
                    </div>
                    <div class="col-md-9">
                        <div class="table-ingopage">
                            <div id="tableinfo"></div>
                            <div id="tablepagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Payout History -->
        
    </div>
</div>

<!-- Add Wallet -->
<div class="modal fade custom-modal" id="add-payout">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content doctor-profile">
            <div class="modal-header border-bottom-0 justify-content-between pb-0">
                <h5 class="modal-title">Set Your Payouts</h5>
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
            </div>
            <div class="modal-body">
                <form action="https://html.truelysell.com/template3/provider-payout.html">
                    <div class="wallet-add">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="bank-selection">
                                    <input type="radio" value="attach_link" id="rolelink" name="attachment" checked="">
                                    <label for="rolelink">
                                        <img src="assets/img/paypal.png" alt="">
                                        <span class="role-check"><i class="fa-solid fa-circle-check"></i></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bank-selection">
                                    <input type="radio" value="attach_link" id="rolelink1" name="attachment">
                                    <label for="rolelink1">
                                        <img src="assets/img/stripe.png" alt="">
                                        <span class="role-check"><i class="fa-solid fa-circle-check"></i></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="bank-selection">
                                    <input type="radio" value="attach_link" id="rolelink2" name="attachment">
                                    <label for="rolelink2">
                                        <img src="assets/img/bank.png" alt="">
                                        <span class="role-check"><i class="fa-solid fa-circle-check"></i></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Card Number</label>
                            <input type="text" class="form-control" placeholder="Enter Card Number">
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
<!-- /Add Wallet -->
@endsection