@extends('fiverr.layouts.app')
@section('content')

<style>
    .online-status-container {
  display: flex;
  align-items: center; /* Align items vertically */

}

.status-text {
  margin-left:110; /* Allow the text to take as much space as needed */
}

.dropdown {
  margin-left: 10px; /* Adjust the rightward position of the dropdown */
}

.custom-margin-left {
  margin-left: 10px; /* Adjust value as needed */
}

</style>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Bundle JS (includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<div class="card mt-5">
    <div class="card-header card-header-bordered">
        <div class="card-addon me-auto ms-0">
            <div class="nav nav-lines card-nav" id="card7-tab">
                <a class="nav-item nav-link active" id="card7-home-tab" data-bs-toggle="tab" href="#card7-home">Account</a>
                <a class="nav-item nav-link" id="card7-profile-tab" data-bs-toggle="tab" href="#card7-active">security</a>
                <a class="nav-item nav-link" id="card7-contact-tab" data-bs-toggle="tab" href="#card7-late">Notifications</a>
                <a class="nav-item nav-link" id="card7-contact-tab" data-bs-toggle="tab" href="#card7-delivered">Foem W-9</a>
                <a class="nav-item nav-link" id="card7-contact-tab" data-bs-toggle="tab" href="#card7-completed">Personal & business info</a>

            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <!-- PRIORITY Tab -->
            <p style="margin-left: 1150px;">
                Need to update your public profile? 
                <span style="color: green;">Go to My Profile</span>
              </p>
                
              <hr>

              <div style="display: flex; align-items: center;">
                <h6 style="margin-right: 1150px;">FULL NAME</h6>
                <input type="text" style="height: 30px;">
              </div>
              
           <div class="mt-4">
               
            <div style=" display: flex; align-items: center; ">
                <h6 style="margin-right: 1190px;">EMAIL</h6>
                <input type="email" style="height: 30px;">
              </div>
           </div>

           <div style="display: flex; align-items: center;">
            <div class="status-text mt-3">
              <h6>ONLINE STATUS</h6>
              <p>When online, your Gigs are visible under the Online search filter.</p>
            </div>
            <div class="dropdown" style="margin-left:782px;">
              <a 
                class="btn btn-secondary dropdown-toggle" 
                href="#" 
                role="button" 
                id="dropdownMenuLink" 
                data-bs-toggle="dropdown" 
                aria-expanded="false">
                GO ONLINE FOR
              </a>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#">1 HOUR</a></li>
                <li><a class="dropdown-item" href="#">1 DAY</a></li>
                <li><a class="dropdown-item" href="#">1 WEEK</a></li>
                <li><a class="dropdown-item" href="#">FOREVER</a></li>
              </ul>
            </div>
          </div>

          <button type="button" class="btn btn-success mt-5" style="margin-left:1400px;">Save Changes</button>

          <div class="mt-5">
            <hr>
          </div>
        
          <div style="display: flex; justify-content: space-between; align-items: flex-start;">
            <!-- Left Heading -->
            <h6 class="mt-4">Account Deactivation</h6>
          
            <!-- Right Content -->
            <div class="mt-3">
              <h6>What happens when you deactivate your account?</h6>
              <p>Your profile and Gigs won't be shown on Fiverr anymore.</p>
              <p>Active orders will be cancelled.</p>
              <p>You won't be able to re-activate your Gigs.</p>
            </div>
          </div>

          <div style="display: flex; align-items: center; justify-content: space-between;">
            <!-- Left Heading -->
            <h6>I'm leaving because...</h6>
          
            <!-- Right Dropdown -->
            <div class="btn-group" style="margin-left:782px;">
              <button 
                type="button" 
                class="btn btn-secondary dropdown-toggle" 
                data-bs-toggle="dropdown" 
                data-bs-display="static" 
                aria-expanded="false">
                Unsubscribe from Fiverr email
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <!-- First Heading -->
                <h6 class="dropdown-header">Account</h6>
                <li><button class="dropdown-item" type="button">I want to change my username</button></li>
                <li><button class="dropdown-item" type="button">I have another Fiverr account</button></li>
          
                <!-- Second Heading -->
                <h6 class="dropdown-header">Selling</h6>
                <li><button class="dropdown-item" type="button">I get too many orders</button></li>
                <li><button class="dropdown-item" type="button">I am unhappy with Fiverr policies</button></li>
                <li><button class="dropdown-item" type="button">Other</button></li>
              </ul>
            </div>
          </div>
          
            <!-- ACTIVE Tab -->
          
            <div class="tab-pane fade" id="card7-active">
                <div class="card">
                    <div class="card-header">
                        ACTIVE ORDERS
                    </div>
                    <div class="card-body">
                        <span>BUYER</span>
                        <span>GIG</span>
                        <span>DUE ON</span>
                        <span>TOTAL</span>
                        <span>NOTE</span>
                        <span>STATUS</span>
                    </div>
                    <p style="margin-left:14px">no active oders to show</p>
                </div>
            </div>

             <!-- ACTIVE Tab -->
    <div class="tab-pane fade" id="card7-late">
        <div class="card">
            <div class="card-header">
                LATE ORDERS
            </div>
            <div class="card-body">
                <span>BUYER</span>
                <span>GIG</span>
                <span>DUE ON</span>
                <span>TOTAL</span>
                <span>NOTE</span>
                <span>STATUS</span>
            </div>
            <p style="margin-left:14px">no late oders to show.</p>
        </div>
    </div>


            <!-- DELIVERED Tab -->
            <div class="tab-pane fade" id="card7-delivered">
                <div class="card">
                    <div class="card-header">
                        DELIVERED ORDERS
                    </div>
                    <div class="card-body">
                        <span>BUYER</span>
                        <span>GIG</span>
                        <span>DUE ON</span>
                        <span>TOTAL</span>
                        <span>NOTE</span>
                        <span>STATUS</span>
                    </div>
                    <p style="margin-left:14px">no delivered oders to show</p>
                </div>
            </div>
        

            <!-- COMPLETED Tab -->
            <div class="tab-pane fade" id="card7-completed">
              
                    <div class="card">
                        <div class="card-header">
                            COMPLETED ORDERS
                        </div>
                        <div class="card-body">
                            <span>BUYER</span>
                            <span>GIG</span>
                            <span>DUE ON</span>
                            <span>TOTAL</span>
                            <span>NOTE</span>
                            <span>STATUS</span>
                        </div>
                        <p style="margin-left:14px">no complete oders to show</p>
                    </div>
                
            </div>

            <!-- CANCELLED Tab -->
            <div class="tab-pane fade" id="card7-cancelled">
              
                    <div class="card">
                        <div class="card-header">
                            CANCELLED ORDERS
                        </div>
                        <div class="card-body">
                            <span>BUYER</span>
                            <span>GIG</span>
                            <span>DUE ON</span>
                            <span>TOTAL</span>
                            <span>NOTE</span>
                            <span>STATUS</span>
                        </div>
                        <p style="margin-left:14px">no cancel oders to show</p>
                    </div>
                
            </div>

            <!-- STARRED Tab -->
            <div class="tab-pane fade" id="card7-starred">
              
                    <div class="card">
                        <div class="card-header">
                            STARRED ORDERS
                        </div>
                        <div class="card-body">
                            <span>BUYER</span>
                            <span>GIG</span>
                            <span>DUE ON</span>
                            <span>TOTAL</span>
                            <span>NOTE</span>
                            <span>STATUS</span>
                        </div>
                        <p style="margin-left:14px">no start oders to show.</p>
                    </div>
                
            </div>
            </div>
        </div>
    </div>
</div>

@endsection
