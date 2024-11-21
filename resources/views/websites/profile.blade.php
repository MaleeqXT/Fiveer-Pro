@extends('fiverr.layouts.app')

@section('content')
<hr>
<div class="row">
    <!-- First Card with Profile Image -->
<div class="col-sm-4">
    <div class="card border shadow-sm" style="margin-top: 15px; width: 100%; margin-left: 20px;">
        <!-- Circular image with better alignment -->
        <img src="https://media.istockphoto.com/id/589538028/photo/manali-town.jpg?s=2048x2048&w=is&k=20&c=16NUhEO0f1m0danaOsxRIU4x9iCHshjT2keQtxJ6zJ0=" 
             class="card-img-top rounded-circle mx-auto d-block" alt="Profile image" 
             style="width: 120px; height: 120px; object-fit: cover; margin-top: 20px; margin-bottom: 15px;">
        
        <div class="card-body text-center">
            <h5 class="card-title" style="font-size: 1.2rem; font-weight: bold;">Hasnain Ali</h5>
            <p class="card-text text-muted" style="margin-bottom: 10px;">@hasnaini</p>
        </div>
        
        <ul class="list-group list-group-flush">
            <li class="list-group-item" style="font-size: 0.95rem;">
                <i class="fas fa-map-marker-alt" style="color: #007bff; padding-right: 5px;"></i> Located in Pakistan
                <p style="margin: 5px 0;">
                    <i class="fas fa-calendar-alt" style="color: #007bff; padding-right: 5px;"></i> Joined in November 2024
                </p>
            </li>
            <li class="list-group-item" style="font-size: 0.95rem;">
                <i class="fas fa-language" style="color: #007bff; padding-right: 5px;"></i> English (Conversational)
            </li>
            <li class="list-group-item" style="font-size: 0.95rem;">
                <i class="fas fa-clock" style="color: #007bff; padding-right: 5px;"></i> Preferred working hours
            </li>
        </ul>
    </div>
</div>


    <!-- Second Card with Text Content -->
    <div class="col-sm-8">
        <div class="card border" style="margin-top: 15px; width: 90%;background-color:#d1e8ff"> 
            <div class="card-body text-center">
                <p style="margin-bottom: 10px;">
                    This is your profile when ordering services. 
                    For your freelancer profile <a href="{{ route('websites.edit') }}" style="color: #3393fa; text-decoration: none;">Click here</a>
                    
                    <a href="#" class="btn-sm" style="margin-top: 10px; margin-left: 70px;">Dismiss</a>
                </p>
            </div>
        </div>

        <div class="content-header" style="margin-top: 30px;">
            <p>Home/My Profile</p>
            <h3>Hi 👋 Let’s help freelancers get to know you</h3>
            <p>Get the most out of Fiverr by sharing a bit more about yourself and how you prefer to work with freelancers.</p>
        </div>

        <div class="card border" style="margin-top: 15px; width: 90%;"> 
            <div class="card-body">
                <h5>Profile checklist</h5>
                <div class="progress">
                    <div class="progress-bar" style="width:50%"></div>
                </div>

                <!-- Card 1: Share how you plan to use Fiverr -->
                <div class="card border" style="margin-top: 30px; width: 90%;">
                    <div class="card-body">
                        <i class="fas fa-info-circle" style="color: white; background-color: #007bff; border-radius: 50%; padding: 10px; margin-right: 10px;"></i>
                        <h6 style="display: inline;">Share how you plan to use Fiverr</h6>
                        <p style="margin-left: 10px;">Tell us if you’re here to find services or offer them</p>
                    </div>
                </div>

                <!-- Card 2: Set your communication preferences -->
                <div class="card border" style="margin-top: 30px; width: 90%;">
                    <div class="card-body">
                        <i class="fas fa-clock" style="color: white; background-color: #007bff; border-radius: 50%; padding: 10px; margin-right: 10px;"></i>
                        <h6 style="display: inline;">Set your communication preferences</h6>
                        <p style="margin-left: 10px;">Let freelancers know your collaboration preferences.</p>
                    </div>
                </div>
            </div>
        </div><br>

        <!-- Reviews Card -->
        <div class="card border" style="margin-top: 15px; width: 90%;"> 
            <div class="card-body " style="padding: 90px;">
                <h6 style="font-size: 1.25rem;">Reviews from freelancers</h6>
                <p class="text-center" style="margin-top: 20px;">
                    <i class="fas fa-star" style="color: #ffcc00; font-size: 2rem; margin-right: 5px;"></i>
                    hasnainh93 doesn't have any reviews yet.
                </p>
            </div>
        </div><br>
    </div>
</div>

@endsection
