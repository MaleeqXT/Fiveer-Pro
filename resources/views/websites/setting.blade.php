@extends('fiverr.layouts.app')
@section('content')

<!-- Include Bootstrap CSS and JS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<style>
    .online-status-container {
        display: flex;
        align-items: center;
    }

    .status-text {
        margin-left: 10px;
    }

    .custom-margin-left {
        margin-left: 10px;
    }

    .password-container {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .password-container input {
        flex-grow: 1;
        padding: 8px;
    }

    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
        color: white;
    }

    .btn-success:hover {
        background-color: #218838;
    }

    .card {
        margin-top: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #f9f9f9;
        border-bottom: 1px solid #e5e5e5;
    }

    .tab-content {
        margin-top: 20px;
    }
</style>

<div class="card">
    <div class="card-header">
        <ul class="nav nav-tabs" id="settingsTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="account-tab" data-bs-toggle="tab" data-bs-target="#account" type="button" role="tab">Account</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#security" type="button" role="tab">Security</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="notifications-tab" data-bs-toggle="tab" data-bs-target="#notifications" type="button" role="tab">Notifications</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="w9-tab" data-bs-toggle="tab" data-bs-target="#w9" type="button" role="tab">Form W-9</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="business-info-tab" data-bs-toggle="tab" data-bs-target="#business-info" type="button" role="tab">Personal & Business Info</button>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content" id="settingsTabsContent">
            <!-- Account Tab -->
            <div class="tab-pane fade show active" id="account" role="tabpanel">
                <p class="text-end">
                    Need to update your public profile? <a href="#" class="text-success">Go to My Profile</a>
                </p>
                <hr>
                <form action="{{ route('account.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" id="fullName" name="full_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="onlineStatus" class="form-label">Online Status</label>
                        <select id="onlineStatus" name="online_status" class="form-select" required>
                            <option value="1 hour">1 Hour</option>
                            <option value="1 day">1 Day</option>
                            <option value="1 week">1 Week</option>
                            <option value="forever">Forever</option>
                        </select>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-success">Save Changes</button>
                    </div>
                </form>
            </div>

            <!-- Security Tab -->
            <div class="tab-pane fade" id="security" role="tabpanel">
                <h6>Set Password</h6>
                <form action="{{ route('security.store') }}" method="POST">
                    @csrf
                    <div class="d-flex align-items-center mt-4">
                        <h6 class="me-2">New Password</h6>
                        <input type="password" name="new_password" class="form-control w-50" placeholder="Enter new password" required>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <h6 class="me-2">Confirm Password</h6>
                        <input type="password" name="new_password_confirmation" class="form-control w-50" placeholder="Confirm new password" required>
                    </div>
                    <div class="mt-2">
                        <small>8 characters or longer. Combine upper and lowercase letters and numbers.</small>
                    </div>
                    <button type="submit" class="btn btn-success mt-3">Save Change</button>
                </form>
            </div>
            

            <!-- Notifications Tab -->
            <div class="tab-pane fade show active" id="notifications" role="tabpanel">
                <div class="container mt-4">
                    <div class="card">
                        <div class="card-body">
                            <!-- Display success or error messages -->
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @elseif(session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
            
                            <form action="{{ route('types.store') }}" method="POST">
                                @csrf
            
                                <div class="row text-center">
                                    <!-- Notification Column -->
                                    <div class="col-md-3">
                                        <h6>Notification</h6>
                                        <p>For important updates regarding your activity, certain notifications cannot be disabled.</p>
                                    </div>
            
                                    <!-- Type Column -->
                                    <div class="col-md-3">
                                        <h6>Type</h6>
                                        <p>Inbox Messages</p>
                                        <p>Order Messages</p>
                                        <p>Order Update</p>
                                        <p>Rating Reminders</p>
                                        <p>Buyer Briefs</p>
                                        <p>My Gigs</p>
                                    </div>
            
                                    <!-- Email Column -->
                                    <div class="col-md-3">
                                        <h6>Email</h6>
                                        @foreach (['Inbox Messages', 'Order Messages', 'Order Update', 'Rating Reminders', 'Buyer Briefs', 'My Gigs'] as $key => $type)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="email[]" value="{{ $type }}" id="email{{ $key }}">
                                                <label class="form-check-label" for="email{{ $key }}">{{ $type }}</label>
                                            </div>
                                        @endforeach
                                    </div>
            
                                    <!-- Mobile Column -->
                                    <div class="col-md-3">
                                        <h6>Mobile</h6>
                                        @foreach (['Inbox Messages', 'Order Messages', 'Order Update', 'Rating Reminders', 'Buyer Briefs', 'My Gigs'] as $key => $type)
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="mobile[]" value="{{ $type }}" id="mobile{{ $key }}">
                                                <label class="form-check-label" for="mobile{{ $key }}">{{ $type }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
            
                                <hr>
            
                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-success mt-3">Save Changes</button>
                            </form>
            
                            <!-- Debugging output to check form data -->
                            @if(session('debug'))
                                <div class="alert alert-info mt-3">
                                    <pre>{{ session('debug') }}</pre>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form W-9 Tab -->
            
<div class="mt-4">
    <h5>Update Your U.S. Details</h5>
    <p>To stay compliant with U.S. tax regulations, please select if you're a U.S. person.</p>

    <!-- Flash Notifications -->
    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger mt-3">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('us_person.store') }}" method="POST">
        @csrf

        <div class="d-flex align-items-center mt-3">
            <input type="radio" class="me-2" name="is_us_person" value="0">
            <span>NO</span>
        </div>

        <div class="mt-3 d-flex align-items-center">
            <input type="radio" class="me-2" name="is_us_person" value="1">
            <span>Yes</span>
        </div>

        <div class="mt-3 text-right">
            <button class="btn btn-primary mt-4">Save</button>
        </div>
    </form>

</div>


            <!-- Personal & Business Info Tab -->
          
<div class="tab-pane fade" id="business-info" role="tabpanel">
    <div class="card w-60 mx-auto mt-5">
        <div class="card-body">
            <h5 class="card-title">Personal & Business Information</h5>
            <p class="card-text">Verify your personal and business information for compliance purposes. Learn more.</p>

            <!-- Button to redirect -->
            <button id="continue-btn" class="btn btn-secondary mt-4">Continue Verification</button>

        </div>
    </div>
</div>

<!-- JavaScript to handle redirection -->
<script>
    document.getElementById('continue-btn').addEventListener('click', function() {
        window.location.href = "{{ route('login') }}";
    });
</script>

            
        </div>
    </div>
</div>

@endsection

