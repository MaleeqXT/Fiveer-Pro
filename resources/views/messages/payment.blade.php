@extends('fiverr.layouts.app')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<hr>

<div class="container">
<h1>Billing and payments</h1><br><br>

<div class="container">
 <div class="row">
        <div class="card">
            <div class="card-header card-header-bordered">
                 <div class="card-addon">
                    <div class="nav nav-lines card-nav" id="card1-tab">
                        <a class="nav-item nav-link active text-dark" id="card1-home-tab" data-bs-toggle="tab" href="#card1-home">Billing history</a>
                        <a class="nav-item nav-link text-dark" id="card1-profile-tab" data-bs-toggle="tab" href="#card1-profile">Billing info</a>
                        <a class="nav-item nav-link text-dark" id="card1-contact-tab" data-bs-toggle="tab" href="#card1-contact">Balance</a>
                        <a class="nav-item nav-link text-dark" id="card1-contact-tab" data-bs-toggle="tab" href="#card1-payment">Payment mthod</a>

                    </div>
                 </div>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    
                    <div class="tab-pane fade show active" id="card1-home">
                        <h3>Billing history</h3><br><br>

                
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
                                  Document
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                              </div>
                            </div>
                            <div class="col-auto">
                              <div class="dropdown show">
                                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Currency
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                              </div>
                            </div>
                            <div class="col ml-2">
                              <input type="text" style="width: 40%;margin-left:52%" class="form-control" placeholder="Search">
                            </div>
                        </div><br>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="mb-0">Showing 0 results.</p>
                            <strong>Download report</strong>
                          </div><hr>
                          
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
                                <p class="card-text mb-3">No invoices yet...</p>
                                <p class="card-text mb-3">Ready to place an order?</p>
                                <p class="card-text mb-4">Make sure your billing info is up to date.</p>
                                <button class="btn btn-dark">Explore</button>
                            </div>
                            
                          </div>
                          
                          <form action="{{ route('payment.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="date">Date:</label>
                                <input type="date" id="date" name="date" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="document">Document:</label>
                                <input type="text" id="document" name="document" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="services">Services:</label>
                                <textarea id="services" name="services" class="form-control" required></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="order">Order:</label>
                                <input type="text" id="order" name="order" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="currency">Currency:</label>
                                <input type="text" id="currency" name="currency" class="form-control" maxlength="10" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="pdf">PDF:</label>
                                <input type="text" id="pdf" name="pdf" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Submit Payment</button>
                        </form>
                        
                    </div>

                    
                   
    
                    <div class="tab-pane fade" id="card1-profile">
                       <div class="container">
                         <h3>Billing information</h3>
                       </div><br><br>

                       <div class="form-container">

                        <form action="{{ route('billing.store') }}" method="POST">
                          @csrf
                          <!-- Full Name -->
                          <div class="form-group">
                              <label for="fullName">Full Name</label>
                              <input type="text" class="form-control" id="fullName" name="full_name" placeholder="Enter your full name" required>
                          </div>
                      
                          <!-- Company Name -->
                          <div class="form-group">
                              <label for="companyName">Company Name</label>
                              <input type="text" class="form-control" id="companyName" name="company_name" placeholder="Enter company name">
                          </div>
                      
                          <!-- Country -->
                          <div class="form-group">
                              <label for="country">Country</label>
                              <input type="text" class="form-control" id="country" name="country" placeholder="Enter your country" required>
                          </div>
                      
                          <!-- State/Region -->
                          <div class="form-group">
                              <label for="stateRegion">State/Region</label>
                              <input type="text" class="form-control" id="stateRegion" name="state_region" placeholder="Enter state or region" required>
                          </div>
                      
                          <!-- Address -->
                          <div class="form-group">
                              <label for="address">Address</label>
                              <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" required>
                          </div>
                      
                          <!-- City -->
                          <div class="form-group">
                              <label for="city">City</label>
                              <input type="text" class="form-control" id="city" name="city" placeholder="Enter your city" required>
                          </div>
                      
                          <!-- Postal Code -->
                          <div class="form-group">
                              <label for="postalCode">Postal Code</label>
                              <input type="text" class="form-control" id="postalCode" name="postal_code" placeholder="Enter postal code" required>
                          </div>
                      
                          <!-- Tax ID -->
                          <div class="form-group">
                              <label for="taxId">Tax ID</label>
                              <input type="text" class="form-control" id="taxId" name="tax_id" placeholder="Enter your tax ID">
                          </div>
                      
                          <!-- Save Changes Button -->
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>
                      
                      
                      </div>

                    </div>


                    
                    
                    
                    <div class="tab-pane fade" id="card1-contact">
                        <h3>Available balances</h3><hr>

                        <div class="container mt-5">
                            <div class="row">
                              <!-- Fiverr Balance Card -->
                              <div class="col-md-4">
                                <div class="card">
                                  <div class="card-header">
                                    Fiverr Balance
                                  </div>
                                  <div class="card-body">
                                    <p class="card-text">From canceled orders</p>
                                    <p class="card-text"><strong>PKR 0.00</strong></p>
                                  </div>
                                </div>
                              </div>
                        
                              <!-- Fiverr Credits Card -->
                              <div class="col-md-8">
                                <div class="card">
                                  <div class="card-header">
                                    Fiverr Credits
                                  </div>
                                  <div class="card-body">
                                    <p class="card-text"><strong>Credits</strong></p>
                                    <p class="card-text"><strong>PKR 0.00</strong></p>
                                    <p class="card-text">Use for purchases.</p>
                                    <p class="card-text">Like to earn some credits? Refer people you know and everyone benefits!</p>
                                    <button class="btn btn-primary">Earn Fiverr Credits</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div><br><br>





                    <div class="tab-pane fade" id="card1-payment">
                        <h3>Payment methods</h3>
                        <p>Easily manage your payment methods through our secure system.</p>
                      
                        <!-- Card for PayPal option -->
                        <div class="card mt-4">
                          <div class="card-body">
                            <h5 class="card-title">Choose a payment method</h5>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="paymentMethod" id="paypalOption" value="paypal">
                              <label class="form-check-label" for="paypalOption">
                                PayPal
                              </label><hr>
                              <h6>+Add Payment Method</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                      <br><br><br>


                      
                </div>
            </div>
       </div> 
    </div> 


</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
@endsection