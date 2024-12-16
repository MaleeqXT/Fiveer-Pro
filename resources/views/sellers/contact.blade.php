@extends('fiverr.layouts.app')
@section('content')

<style>
    .contact-container {
        display: flex;
        align-items: center;
        gap: 10px; /* Space between elements */
    }

    input {
        border: none; /* Remove all borders */
        border-bottom: 2px solid #000; /* Add a bottom border */
        outline: none; /* Remove focus outline */
        font-size: 16px;
        padding: 5px 0; /* Add padding for better spacing */
    }

    input:focus {
        border-bottom-color: #007BFF; /* Change bottom border color on focus */
    }
</style>

<hr>
  <div class="container">
    <div class="contact-container">
        <h1>My Contact</h1>
        <input type="text" placeholder="Enter your contact" style="margin-left: 60%">
    </div><br><br>

    
        <div class="card">
            <div class="card-header card-header-bordered">
                <div class="card-addon">
                    <div class="nav nav-tabs card-nav" id="card3-tab">
                        <a class="nav-item nav-link active" id="card3-home-tab" data-bs-toggle="tab" href="#card3-home">MY BUYERS</a>
                        <a class="nav-item nav-link" id="card3-profile-tab" data-bs-toggle="tab" href="#card3-profile">MY SELLERS</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="card3-home">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6>BUYERS WHO HAVE PURCHASED GIGS FROM YOU</h6>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                Add Contact
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Buyer Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Input Form -->
                                            <form action="{{ route('buyers.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf <!-- CSRF Token for security -->

                                                <!-- Image Upload -->
                                                <div class="form-group">
                                                    <label for="buyerImage">Image</label>
                                                    <input type="file" class="form-control" id="buyerImage" name="buyer_image" required>
                                                    @error('buyer_image') <div class="text-danger">{{ $message }}</div> @enderror
                                                </div>

                                                <!-- Buyer Name -->
                                                <div class="form-group">
                                                    <label for="buyerName">Buyer Name</label>
                                                    <input type="text" class="form-control" id="buyerName" name="buyer_name" placeholder="Enter Buyer Name" required>
                                                    @error('buyer_name') <div class="text-danger">{{ $message }}</div> @enderror
                                                </div>

                                                <!-- Completed Orders -->
                                                <div class="form-group">
                                                    <label for="completedOrders">Completed Orders</label>
                                                    <input type="number" class="form-control" id="completedOrders" name="completed_orders" placeholder="Enter Completed Orders" required>
                                                    @error('completed_orders') <div class="text-danger">{{ $message }}</div> @enderror
                                                </div>

                                                <!-- Amount Spent -->
                                                <div class="form-group">
                                                    <label for="amountSpent">Amount Spent</label>
                                                    <input type="text" class="form-control" id="amountSpent" name="amount_spent" placeholder="Enter Amount Spent" required>
                                                    @error('amount_spent') <div class="text-danger">{{ $message }}</div> @enderror
                                                </div>

                                                <!-- Last Order -->
                                                <div class="form-group">
                                                    <label for="lastOrder">Last Order</label>
                                                    <input type="date" class="form-control" id="lastOrder" name="last_order" required>
                                                    @error('last_order') <div class="text-danger">{{ $message }}</div> @enderror
                                                </div>

                                                <!-- Modal Footer -->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <hr>
                        

                      
                      
                       <hr>
                    </div>
                    
                    
                    <div class="tab-pane fade text-center" id="card3-profile" style="padding: 20%">
                        <h5><i class="fas fa-exclamation-circle icon"></i>You have yet to order any Gigs...</h5>                    </div>
                    
                </div>
            </div>
        </div>
    

  </div>


@endsection