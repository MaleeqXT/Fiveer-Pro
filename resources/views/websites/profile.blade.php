@extends('fiverr.layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

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
        <div class="row g-4">
     <!-- First Card with Image and Name -->
     
     <!-- First Card with Image and Name -->
     <div class="row">
        @foreach ($gigs as $gig)
        <div class="col-md-4">
            <div class="card shadow-lg mb-4" style="border-radius: 15px; overflow: hidden;">
                <!-- Gig Image -->
                @if(isset($gig_images[$gig->id]) && count($gig_images[$gig->id]) > 0)
                    <img src="{{ asset('storage/' . $gig_images[$gig->id][0]) }}" 
                         class="card-img-top" 
                         alt="Gig Image" 
                         style="height: 200px; width: 100%; object-fit: cover;">
                @else
                    <img src="https://via.placeholder.com/300x200?text=Gig+Image" 
                         class="card-img-top" 
                         alt="Default Image" 
                         style="height: 200px; width: 100%; object-fit: cover;">
                @endif
            
                <!-- Card Body -->
                <div class="card-body text-center">
                    <!-- Gig Title -->
                    <h5 class="card-title fw-bold" style="color: #343a40;">
                        {{ $gig->title ?? 'Gig Title' }}
                    </h5>
            
                    <!-- Pricing -->
                    <span class="badge bg-dark text-light fs-6 px-3 py-2" 
                          style="font-family: sans-serif; border-radius: 20px;">
                        Starting ${{ $pricing[$gig->id]['basic_price'] ?? '100' }}
                    </span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
        
    
        
    
        <!-- Create New Gig Card -->
        <div class="col-md-4">
            <div class="card d-flex justify-content-center align-items-center shadow-lg" style="height: 200px; border-radius: 15px;">
                <button class="btn btn-dark rounded-circle shadow-lg" onclick="window.location.href='{{ route('websites.edit') }}'" style="font-size: 30px; width: 70px; height: 70px; display: flex; justify-content: center; align-items: center; border: none;">
                    +
                </button>
                <h5 class="text-muted mt-3" style="font-family: Arial, Helvetica, sans-serif;">Create a Gig</h5>
            </div>
        </div>
    </div>
    
    
        </div>
        
        
      
        
   <br>
    </div>
</div>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  
  <!-- Include Bootstrap JS and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>  

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


@endsection
