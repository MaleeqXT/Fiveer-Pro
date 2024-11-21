@extends('fiverr.layouts.app')

@section('content')
<br><br>
<div class="container mt-4">
    <div class="row">
        <div class="col-xl-12">
            <div class="card-header card-header-bordered">
                <h3 class="card-title">Earnings</h3>
                <div class="card-addon">
                    <div class="nav nav-tabs card-nav" id="earnings-tab">
                        <a class="nav-item nav-link active" id="overview-tab" data-bs-toggle="tab" href="#overview">Overview</a>
                        <a class="nav-item nav-link" id="documents-tab" data-bs-toggle="tab" href="#documents">Financial Documents</a>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <!-- Overview Tab -->
                <div class="tab-pane fade show active" id="overview">
                    

                    <!-- Cards for Balance, Pending Withdrawals, Earnings -->
                    <div class="row">
                        <!-- First Card: Balance in Use -->
                        <div class="col-md-4 mb-3">
                            <div class="card mt-3">
                                <div class="card-body">
                                    <p class="text-muted mb-0">Balance in use</p>
                                    <h2>$0.00</h2>
                                    <br><br>
                                    <button class="btn btn-light">Withdraw Balance</button>
                                    <br><br><br>
                                    <h6>Manage payout methods</h6>
                                </div>
                            </div>
                        </div>

                        <!-- Second Card: Payments being Cleared -->
                        <div class="col-md-4 mb-3">
                            <div class="card mt-3">
                                <div class="card-body">
                                    <p class="text-muted mb-0">Payments being cleared</p>
                                    <h2>$8.00</h2>
                                    <p>0 Payment</p>
                                    <hr>
                                    <br>
                                    <p class="text-muted">Payment for active orders</p>
                                    <h2>$0.00</h2>
                                </div>
                            </div>
                        </div>

                        <!-- Third Card: Earnings to Date -->
                        <div class="col-md-4 mb-3">
                            <div class="card mt-3">
                                <div class="card-body">
                                    <p class="text-muted mb-0">Earnings to date</p>
                                    <h2>0.00</h2>
                                    <p class="text-muted mb-0">Your Earning since joining</p>
                                    <hr>
                                    <br>
                                    <p class="text-muted mb-0">Expenses to date</p>
                                    <h2>$0.00</h2>
                                    <br>
                                    <p class="text-muted mb-0">Earnings spent on purchase since joining</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Content for Overview -->
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="dropdown show">
                                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Data Range
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="dropdown show">
                                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Activity
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <div class="col ml-2">
                        </div>
                    </div><br>

                    <div class="d-flex justify-content-between align-items-center">
                        <p class="mb-0">Showing 0 results.</p>
                        <strong>Email Activity Report</strong>
                    </div>
                    <hr>

                    <!-- Earnings Overview Cards -->
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span>Date</span>
                            <span>Document</span>
                            <span>Services</span>
                            <span>Order</span>
                            <span>Currency</span>
                            <span>PDF</span>
                        </div>
                        <div class="card-body text-center" style="padding: 10%">
                            <p class="card-text mb-3">No earnings yet</p>
                        </div>
                    </div>
                </div>

<br>
                <!-- Financial Documents Tab -->
                <div class="tab-pane fade" id="documents">
                    <!-- Financial Documents content here -->
                    <div class="row">
                        <div class="col-sm-8">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">Statement of earnings</h5>
                              <p class="card-text">Choose a date range and download a statement summarizing your yearly earnings.</p>
                              <a href="#" class="btn btn-outline-dark" style="margin-left:80%;">Choose data range</a>
                            </div>
                          </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
