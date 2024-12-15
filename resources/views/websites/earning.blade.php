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
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter" style="margin-left: 70%">
                                        Launch demo modal
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                                <!-- Combined Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalCenterTitle">Choose Date Range</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{ route('finance.store') }}">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="selectMonth" class="form-label">Select Month</label>
                                                            <select class="form-select" id="selectMonth" name="month" required>
                                                                <option value="" disabled selected>Choose a month</option>
                                                                <option value="January">January</option>
                                                                <option value="February">February</option>
                                                                <option value="March">March</option>
                                                                <option value="April">April</option>
                                                                <option value="May">May</option>
                                                                <option value="June">June</option>
                                                                <option value="July">July</option>
                                                                <option value="August">August</option>
                                                                <option value="September">September</option>
                                                                <option value="October">October</option>
                                                                <option value="November">November</option>
                                                                <option value="December">December</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="selectYear" class="form-label">Select Year</label>
                                                            <select class="form-select" id="selectYear" name="year" required>
                                                                <option value="" disabled selected>Choose a year</option>
                                                                <option value="2024">2024</option>
                                                                <option value="2023">2023</option>
                                                                <option value="2022">2022</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="amount" class="form-label">Amount (optional)</label>
                                                            <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter amount">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                    </form>
                                                    
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
