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
        <div class="row g-4">
            <!-- First Card with Image and Name -->
            <div class="col-md-4">
                <div class="card shadow-lg" style="border-radius: 15px; overflow: hidden;">
                    <img src="https://www.gekkode.com/wp-content/uploads/2022/02/laravel-9-0.png" class="card-img-top" alt="Image" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold" style="color: #343a40;">Website Development</h5>
                        <div class="row mt-3">
                            <div class="col">
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Dropdown Button with Three Dots -->
                                    <div class="dropdown">
                                        <button class="btn btn-link p-0 " data-bs-toggle="dropdown" aria-expanded="false" style="color: #6c757d;">
                                            <span style="font-size: 24px;">&#8230;</span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="bi bi-pencil-square" style="margin-right: 8px;"></i> Edit
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="bi bi-trash" style="margin-right: 8px;"></i> Delete
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="bi bi-eye" style="margin-right: 8px;"></i> Preview
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="bi bi-bar-chart" style="margin-right: 8px;"></i> Statistics
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="bi bi-gear" style="margin-right: 8px;"></i> Advanced
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    <i class="bi bi-pause-circle" style="margin-right: 8px;"></i> Pause
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <span class="badge bg-dark text-light fs-6 px-3 py-2" style="font-family: sans-serif; border-radius: 20px;">
                                        Starting $100
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
          
            <!-- Second Card with Rounded Button -->
            <div class="col-md-4">
                <div class="card d-flex justify-content-center align-items-center shadow-lg" style="height: 200px; border-radius: 15px; ">
                    <button class="btn btn-dark rounded-circle shadow-lg" style="font-size: 30px; width: 70px; height: 70px;  display: flex; justify-content: center; align-items: center; border: none;">
                        +
                    </button><br>
                    <h5 style=" font-family: Arial, Helvetica, sans-serif;" class="text-muted">Create a Gig</h5>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
  

@endsection
