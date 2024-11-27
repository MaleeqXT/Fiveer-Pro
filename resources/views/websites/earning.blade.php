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
                                    <h5 class="card-title">Statement of Earnings</h5>
                                    <p class="card-text">Choose a date range and download a statement summarizing your yearly earnings.</p>
                                    <!-- Trigger Modal -->
                                    <button type="button" class="btn btn-outline-dark" style="margin-left:80%;" data-bs-toggle="modal" data-bs-target="#dateRangeModal">
                                        Choose Date Range
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Modal -->
                <div class="modal fade" id="dateRangeModal" tabindex="-1" aria-labelledby="dateRangeModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="dateRangeModalLabel">Choose Date Range</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="selectMonth" class="form-label">Select Month</label>
                                        <select class="form-select" id="selectMonth">
                                            <option value="" disabled selected>Choose a month</option>
                                            <option value="1">January</option>
                                            <option value="2">February</option>
                                            <option value="3">March</option>
                                            <option value="4">April</option>
                                            <option value="5">May</option>
                                            <option value="6">June</option>
                                            <option value="7">July</option>
                                            <option value="8">August</option>
                                            <option value="9">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="selectYear" class="form-label">Select Year</label>
                                        <select class="form-select" id="selectYear">
                                            <option value="" disabled selected>Choose a year</option>
                                            <option value="2024">2024</option>
                                            <option value="2023">2023</option>
                                            <option value="2022">2022</option>
                                            <option value="2021">2021</option>
                                            <!-- Add more years as needed -->
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Download Statement</button>
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
