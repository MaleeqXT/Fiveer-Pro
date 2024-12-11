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
#card7-late {
  background-color: #f9f9f9; /* Light background for the card */
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  margin-top: 20px;
}

#card7-late .row {
  margin-bottom: 20px; /* Space between rows */
}

#card7-late {
  background-color: #ffffff; /* Clean white background for the card */
  padding: 25px; /* Increased padding for better spacing */
  border-radius: 8px; /* Rounded corners */
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Soft shadow for a modern look */
  margin-top: 20px; /* Margin from the top */
}

#card7-late .row {
  margin-bottom: 30px; /* Consistent spacing between rows */
}

#card7-late h6 {
  font-size: 16px; /* Adjusted font size */
  font-weight: bold;
  margin-bottom: 10px;
  color: #333; /* Darker color for better readability */
}

#card7-late p {
  font-size: 14px; /* Smaller font for text */
  margin-bottom: 8px; /* Adjust spacing between paragraphs */
  color: #666; /* Neutral color for text */
}

.checkbox-container {
  display: flex;
  flex-direction: column; /* Stacks checkboxes vertically */
  gap: 8px; /* Uniform spacing between checkboxes */
}

.custom-checkbox {
  width: 18px; /* Slightly smaller size */
  height: 18px;
  appearance: none; /* Removes default styles */
  border: 2px solid #ccc; /* Light border */
  border-radius: 4px; /* Subtle rounding */
  background-color: #fff; /* White background */
  cursor: pointer;
  display: inline-block; /* Prevents alignment issues */
  position: relative; /* Enables pseudo-element styling */
}

.custom-checkbox:checked {
  background-color: #28a745; /* Success green */
  border-color: #28a745; /* Match border to background */
}

.custom-checkbox:checked::before {
  content: '\2713'; /* Unicode checkmark */
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 14px;
  color: white;
}

.button-container {
  display: flex;
  justify-content: flex-end; /* Aligns button to the right */
  margin-top: 20px;
}

hr {
  border: none;
  border-top: 1px solid #e5e5e5; /* Light gray line */
  margin: 20px 0; /* Consistent vertical spacing */
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
          
          
            <div class="container">
              <!-- Set Password -->
              <div class="card mt-5">
                  <div class="card-body">
                      <h6>Set Password</h6>
                      <form action="{{ route('security.store') }}" method="POST">
                          @csrf
                          <div class="d-flex align-items-center mt-4">
                              <h6 class="me-2">New Password</h6>
                              <input type="password" name="new_password" class="form-control w-50" placeholder="Enter new password">
                          </div>
                          <div class="d-flex align-items-center mt-4">
                              <h6 class="me-2">Confirm Password</h6>
                              <input type="password" name="new_password_confirmation" class="form-control w-50" placeholder="Confirm new password">
                          </div>
                          <div class="mt-2">
                              <small>8 characters or longer. Combine upper and lowercase letters and numbers.</small>
                          </div>
                          <button type="submit" class="btn btn-success mt-3">Save Change</button>
                      </form>
                  </div>
              </div>
          
              <!-- Phone Verification -->
              <div class="card mt-5">
                  <div class="card-body">
                      <h6>Phone Verification</h6>
                      <form action="{{ route('security.store') }}" method="POST">
                          @csrf
                          <div class="d-flex align-items-center mt-4">
                              <h6 class="me-2">Phone</h6>
                              <input type="text" name="phone" class="form-control w-50" placeholder="Enter phone number" value="{{ $settings->phone ?? '' }}">
                          </div>
                          <button type="submit" class="btn btn-success mt-3">Save Change</button>
                      </form>
                  </div>
              </div>
          
              <!-- Security Question -->
              <div class="card mt-5">
                  <div class="card-body">
                      <h6>Security Question</h6>
                      <form action="{{ route('security.store') }}" method="POST">
                          @csrf
                          <div class="d-flex align-items-center mt-4">
                              <h6 class="me-2">Question</h6>
                              <input type="text" name="security_question" class="form-control w-50" placeholder="Enter question" value="{{ $settings->security_question ?? '' }}">
                          </div>
                          <div class="d-flex align-items-center mt-4">
                              <h6 class="me-2">Answer</h6>
                              <input type="text" name="security_answer" class="form-control w-50" placeholder="Enter answer" value="{{ $settings->security_answer ?? '' }}">
                          </div>
                          <button type="submit" class="btn btn-success mt-3">Save Change</button>
                      </form>
                  </div>
              </div>
          
              <!-- Connected Devices -->
              <div class="card mt-5">
                  <div class="card-body">
                      <h6>Connected Devices</h6>
                      <ul class="list-group">
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
