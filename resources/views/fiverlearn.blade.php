@extends('fiverr.layouts.app')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
/* FAQ Section */
.container-fluid {
    max-width: 100%;
    margin: 0 auto;
    padding-left: 100%;
    padding: 30px;
}

/* Big Card Styling */
.big-card {
    height: 600px; /* Adjust height */
    background: linear-gradient(135deg, rgba(168, 235, 201, 0.7), rgba(98, 215, 143, 0.7)), url('your-image-url-here');
    background-size: cover; /* Ensure image covers the entire card */
    background-position: center; /* Position the image in the center */
    border: none;
    border-radius: 20px; /* Ultra-smooth corners */
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2); /* Prominent shadow */
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2rem 3rem;
    position: relative;
    overflow: hidden;
    animation: fadeIn 1s ease-in-out;
}

.input-group {
    width: 100%; /* Adjust the width as needed */
}

.input-group .form-control {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.input-group .btn {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

/* Heading at Top Left */
.fiverr-learn-heading {
    position: absolute;
    top: 15px;
    left: 15px;
    font-size: 2rem;
    font-weight: bold;
    color: white;
    text-transform: uppercase;
    letter-spacing: 2px;
}













/*navbar*/

.header-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 0 20px; /* Adjust side margins as needed */
    }

    h1 {
        margin-left: 62px;
        font-size: 2em; /* Adjust size to your preference */
    }

    .line-input {
        border: none;
        border-bottom: 1px solid green;
        background: transparent;
        outline: none;
        font-size: 1em; /* Match the <h1> size */
        width: 200px; /* Adjust width as needed */
    }

    .line-input:focus {
        border-bottom: 1px solid blue; /* Optional for focus effect */
    }

    .card-body {
        display: flex; /* Enables the flexbox layout */
        flex-wrap: wrap; /* Allows elements to wrap onto the next line */
        gap: 240px; /* Adjusted gap between spans */
        align-items: center; /* Aligns items vertically */
    }

    .card-body p {
        flex-basis: 100%; /* Forces the paragraph to take the full width */
        margin-top: 10px; /* Optional: Adds space between spans and the paragraph */
    }


    body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* 4 equal columns */
            gap: 20px;
        }
        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

</style>

<div class="container-fluid p-4">
    <div class="card big-card position-relative">
        <!-- Fiverr Learn Heading -->
        <div class="fiverr-learn-heading">
            Fiverr Learn
        </div>

        <!-- Decorative Dots -->
        <div class="decorative-dots">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- Dropdown at Top-Right Corner -->
        <div class="dropdown position-absolute" style="top: 15px; right: 15px;">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="browseCoursesDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                Browse Courses
            </button>
            <ul class="dropdown-menu" aria-labelledby="browseCoursesDropdown">
                <li><a class="dropdown-item" href="#">Web Development</a></li>
                <li><a class="dropdown-item" href="#">Graphic Design</a></li>
                <li><a class="dropdown-item" href="#">Digital Marketing</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">All Courses</a></li>
            </ul>
        </div>

        <!-- Left Content -->
        <div class="card-content">
            <h1 class="card-title display-1" style="color: white;">Learn More, Earn More</h1>
            <p class="card-text" style="color: white; margin-left: 70px;">
                Take courses from the world’s leading experts, gain a badge and win more clients.
            </p>
        </div>

        <!-- Right Content (Input Field with Search Button) -->
        <div class="card-actions">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter your search term" />
                <button class="btn btn-primary" type="button">Search</button>
            </div>
        
            <!-- Buttons at the Bottom -->
            <div class="d-flex">
                <button class="btn btn-primary me-1">SEO</button>
                <button class="btn btn-primary me-1">photoshop</button>
                <button class="btn btn-primary me-1">freelacing</button>
                <button class="btn btn-primary me-1">eCommerce</button>
                <button class="btn btn-primary">Social Media</button> <!-- No margin on the last button -->
            </div>
        </div>
    </div>
</div>


<div class="header-container">
    <h1 style="margin-left: 62px; mt-3">Manage Orders</h1>
    <input type="text" class="line-input" placeholder="Search my history">
</div>

<div class="card mt-5">
    <div class="card-header card-header-bordered">
        <div class="card-addon me-auto ms-0">
            <div class="nav nav-lines card-nav" id="card7-tab">
                <a class="nav-item nav-link active" id="card7-home-tab" data-bs-toggle="tab" href="#card7-home">All Courses</a>
                <a class="nav-item nav-link" id="card7-profile-tab" data-bs-toggle="tab" href="#card7-active">Marketing</a>
                <a class="nav-item nav-link" id="card7-contact-tab" data-bs-toggle="tab" href="#card7-late">Graphic Design</a>
                <a class="nav-item nav-link" id="card7-contact-tab" data-bs-toggle="tab" href="#card7-delivered">Website</a>
                <a class="nav-item nav-link" id="card7-contact-tab" data-bs-toggle="tab" href="#card7-completed">Business</a>
                <a class="nav-item nav-link" id="card7-contact-tab" data-bs-toggle="tab" href="#card7-cancelled">Video & Photography</a>
                <a class="nav-item nav-link" id="card7-contact-tab" data-bs-toggle="tab" href="#card7-starred">Programs</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <!-- PRIORITY Tab -->
            <div class="tab-pane fade show active" id="card7-home">
               
                <div class="container mt-5">
                    <div class="row row-cols-1 row-cols-md-4 g-4">
                        <!-- Card 1 -->
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card Title 1</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card Title 2</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card Title 3</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card 4 -->
                        <div class="col">
                            <div class="card h-100">
                                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card Title 4</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div>
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
                            STARTED ORDERS
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

@endsection
