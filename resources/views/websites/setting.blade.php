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

.password-container {
  display: flex;
  align-items: center;
  gap: 10px; /* Space between items */
}

.password-container input {
  flex-grow: 1; /* Input takes available space */
  padding: 8px;
}

.success-btn {
  background-color: #28a745;
  color: white;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
}

.success-btn:hover {
  background-color: #218838;
}
.custom-checkbox {
  display: block; /* Ensures each checkbox appears on a new line */
  margin-bottom: 10px; /* Adds space between checkboxes */
  width: 20px;
  height: 20px;
  appearance: none;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #fff;
  cursor: pointer;
}

.custom-checkbox:checked {
  background-color: #28a745; /* Success green color */
  border-color: #28a745;
}

.custom-checkbox:checked::before {
  content: '\2713'; /* Unicode for checkmark */
  position: absolute;
  top: 0;
  left: 3px;
  font-size: 16px;
  color: white;
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
          <div class="tab-pane fade show active" id="card7-home">
              <p style="margin-left: 1150px;">
                  Need to update your public profile? 
                  <span style="color: green;">Go to My Profile</span>
              </p>
  
              <hr>
  
              <!-- Begin Form -->
              <form action="{{ route('profile.store') }}" method="POST">
                  @csrf
  
                  <!-- Full Name -->
                  <div style="display: flex; align-items: center;">
                      <h6 style="margin-right: 1150px;">FULL NAME</h6>
                      <input type="text" name="full_name" style="height: 30px;" required>
                  </div>
  
                  <!-- Email -->
                  <div class="mt-4">
                      <div style="display: flex; align-items: center;">
                          <h6 style="margin-right: 1190px;">EMAIL</h6>
                          <input type="email" name="email" style="height: 30px;" required>
                      </div>
                  </div>
  
                  <!-- Online Status -->
                  <div style="display: flex; align-items: center;">
                      <div class="status-text mt-3">
                          <h6>ONLINE STATUS</h6>
                          <p>When online, your Gigs are visible under the Online search filter.</p>
                      </div>
                      <div class="dropdown" style="margin-left:782px;">
                          <select name="online_status" class="form-select" required>
                              <option value="1 hour">1 Hour</option>
                              <option value="1 day">1 Day</option>
                              <option value="1 week">1 Week</option>
                              <option value="forever">Forever</option>
                          </select>
                      </div>
                  </div>
  
                  <!-- Save Changes Button -->
                  <div style="text-align: right;">
                      <button type="submit" class="btn btn-success mt-5" style="margin-left:1400px;">Save Changes</button>
                  </div>
              </form>
              <!-- End Form -->
  
              <div class="mt-5">
                  <hr>
              </div>
  
              <!-- Account Deactivation Section -->
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
                          Choose a reason
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
  
              <div style="text-align: right;">
                  <button class="btn btn-danger deactivate-btn mt-5" onclick="deactivateAccount()">Deactivate Account</button>
              </div>
          </div>
      </div>
  </div>
  
            <!-- ACTIVE Tab -->
          
            <div class="tab-pane fade" id="card7-active">
              
                  <h6>Set password</h6>  
                  <div class="d-flex align-items-center mt-4">
                    <h6 class="me-2">New Password</h6>
                    <input type="password" class="form-control w-50" placeholder="Enter new password">
                  </div>
               
                  <div class="d-flex align-items-center mt-4">
                    <h6 class="me-2">Confirm Password</h6>
                    <input type="password" class="form-control w-50" placeholder="Enter confirm password">
                  </div>
               
                <div class="mt-2">
                  <small style="margin-left: 775px"> 8 characters or longer. Combine upper and lowercase letters and numbers.</small>
                </div>   
                  
                  <button class="btn btn-success" style="margin-left: 1420px">Save Change</button>
                  <div class="mt-4">
                    <hr>
                  </div>

                  <div class="password-container">
                    <h6>Phone Verification</h6>
                  <p style="margin-left: 664px">Your phone is verified with Fiverr. Click Edit to change your phone number</p>
                    <button class="success-btn" style="margin-left: 250px">Edit</button>
                  </div>
                  

                  <div class="password-container mt-3">
                    <h6>Secuirty Questionn</h6>
                  <p style="margin-left: 699px">By creating a security question, you will add an additional layer of protection for your revenue withdrawals and for changing your password.</p>
                    <button class="success-btn" style="margin-left: 250px">Edit</button>
                  </div>

                  <div class="password-container mt-3">
                    <h6>TWO FACTOR AUTHENTICATION</h6>
                 
                  <p style="margin-left: 606px"> To help keep your account secure, we'll ask you to submit a code when using a new device to log in. We'll send the code via SMS, email, or Fiverr notification.</p>
                  </div>

                  <div class="mt4">
                    <hr>
                  </div>
                  <h6>Connected devices</h6>
                  
                  <div class="card" style="width: 97rem;">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        Chrome 130.0.0.0, Windows
                        <button class="btn btn-danger btn-sm">Sign Out</button>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        V2249, Android App
                        <button class="btn btn-danger btn-sm">Sign Out</button>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        Samsung Internet mobile 26.0, K, Android
                        <button class="btn btn-danger btn-sm">Sign Out</button>
                      </li>
                    </ul>
                  </div>

                  <div class="d-flex align-items-center mt-4">
                    <p style="color: blue; margin-right: 10px;">+Show more</p>
                    <p>sign out all the devices</p>
                  </div>

                
            </div>


             <!-- ACTIVE Tab -->
    <div class="tab-pane fade container" id="card7-late">
      <div class="row">
        <div class="col-sm-3 ">
          <h6>Notifications</h6>
          <p>For important updates regarding your Fiverr activity, certain notifications cannot be disabled.</p>
        </div>
        <div class="col-sm-3 ">
          <h6>Types</h6>
          <p>Inbox Messages</p>
          <p>Order Messages</p>
          <p>Order Updates</p>
          <p>Rating Reminders</p>
          <p>Buyer Briefs</p>
          <p>My Gigs</p>
          <p>My Account</p>
        </div>
        <div class="col-sm-3 ">
          <h6>Email</h6>
          <input type="checkbox" checked class="custom-checkbox">
          <input type="checkbox" checked class="custom-checkbox">
          <input type="checkbox" checked class="custom-checkbox">
          <input type="checkbox" checked class="custom-checkbox">
          <input type="checkbox" checked class="custom-checkbox">

        </div>
        <div class="col-sm-3 ">
          <h6>Mobile</h6>
          <input type="checkbox" checked class="custom-checkbox">
          <input type="checkbox" checked class="custom-checkbox">
          <input type="checkbox" checked class="custom-checkbox">
          <input type="checkbox" checked class="custom-checkbox">
          <input type="checkbox" checked class="custom-checkbox">
          <input type="checkbox" checked class="custom-checkbox">
          <input type="checkbox" checked class="custom-checkbox">

        </div>
      </div>

      <div class="mt-4">
        <hr>
      </div>

      <h6>REAL-TIME NOTIFICATIONS</h6>

      <div class="mt-3">
        <p>Enable/disable real-time notifications</p>
        <p>Enable/disable sound</p>
      </div>

      <div style="display: flex; justify-content: flex-end; padding-right: 10px;">
        <button class="btn btn-success">Save Change</button>
      </div>
      

    </div>


            <!-- DELIVERED Tab -->
            <div class="tab-pane fade container" id="card7-delivered">

              <h5>Update your details  </h5>
              <div class="mt-3">
                <p>To stay compliant with U.S. tax regulations, please update your details with any change.</p>
                <p style="color: blue">What is a U.S. person (as defined by the U.S. tax authorities)?</p>
              </div>

              <div  class="mt-5">
                <h5>Are you a U.S. person?</h5>
              </div>

            
              
              <div class="card w-50">
                <div class="card-body d-flex align-items-center justify-content-start">
                  <input type="checkbox" class="me-2"> 
                  <h5 class="card-title mb-0">NO</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">I confirm that all the services I offer on Fiverr are performed while outside of the U.S.</p>
                </div>
              </div>


              <div class="card w-50 mt-3">
                <div class="card-body d-flex align-items-center justify-content-start">
                  <input type="checkbox" class="me-2"> 
                  <h5 class="card-title mb-0">Yes</h5>
                </div>
                <div class="card-body">
                  <p class="card-text">U.S. tax authorities might request Form W-9 and information regarding your activity on Fiverr.</p>
                </div>
              </div>
              
                <div class="mt-3">
                  <p>Learn more about tax regulations and read our Privacy Policy to learn how we use your data.</p>
                </div>
              
                <div style="display: flex; justify-content: flex-end; padding-right: 10px;">
                  <button class="btn btn-success">Save </button>
                </div>
            </div>
        

            <!-- COMPLETED Tab -->
            <div class="tab-pane fade container" id="card7-completed">
              
              <div class="card w-60">
                <div class="card-body">
                  <h5 class="card-title">Personal & business information</h5>
                  <p class="card-text">Verify your personal and business information for compliance purposes. Learn more.</p>
                  <button type="button" class="btn btn-secondary mt-4">Continue verification</button>
                  
                </div>
              </div>
                
            </div>

            <!-- CANCELLED Tab -->
          
            <!-- STARRED Tab -->

           
            </div>
        </div>
    </div>
</div>

@endsection
