
@extends('fiverr.layouts.app')
@section('content')

<div class="container mt-3">

    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 80%; height: auto;">
                <!-- Image as Rounded Circle -->
                <img src="..." class="card-img-top rounded-circle mx-auto mt-3" alt="..." style="width: 150px; height: 150px; object-fit: cover;">
                <div class="card-body text-center">
                    <h6>Progress Tracker</h6>
                    <i class="fas fa-square-check checkbox-icon"></i>
                    <i class="fas fa-square-check checkbox-icon"></i>
                    <i class="fas fa-square-check checkbox-icon"></i>
                    <i class="fas fa-square-check checkbox-icon"></i>
                    <i class="fas fa-square-check checkbox-icon"></i>
                    <i class="fas fa-square-check checkbox-icon"></i>
                    <p style="font-size: 12px;">Once you qualify for the next level in all 6 metrics, you’ll advance to Level</p>
                </div>
            </div>
        </div>
    
        
    
        <div class="col-md-8">
            <div class="card p-3" style="width: 100%; height: auto;">
                <div class="card-body">
                    <h5 class="card-title">My performance metrics</h5>
                    <p class="card-text">Keep an eye on these stats to monitor your progress in the level system.</p>
        
                    <!-- Grid System for Inner Cards -->
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <!-- First Row -->
                        <div class="col">
                            <div class="card">
                         
                                <div class="card-body">
                                    <h5 class="card-title">Success score</h5>
                                    <p class="card-text">This is the first card in the grid system.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                           
                                <div class="card-body">
                                    <h5 class="card-title">Rating</h5>
                                    <p class="card-text">This is the second card in the grid system.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                          
                                <div class="card-body">
                                    <h5 class="card-title">Performance Rate</h5>
                                    <p class="card-text">This is the third card in the grid system.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Second Row -->
                        <div class="card">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <!-- Left Heading -->
                                <h5 class="card-title">Orders</h5>
                                
                                <!-- Right Heading -->
                                <p class="card-title text-muted text-end" style="font-size: 12px;"> 0/5</p>


                            </div>
                        </div>
                        
                        <div class="col">
                            <div class="card">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <!-- Left Heading -->
                                    <h5 class="card-title">Unique clients</h5>
                                    
                                    <!-- Right Heading -->
                                    <p class="card-title text-muted text-end" style="font-size: 12px;"> 0/3</p>
    
    
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    <!-- Left Heading -->
                                    <h5 class="card-title">Earnings</h5>
                                    
                                    <!-- Right Heading -->
                                    <p class="card-title text-muted text-end" style="font-size: 12px;">PKR 0/4</p>
                                  
    
    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    <div class="d-flex justify-content-between align-items-center mt-3">
        <h3>What you get as a Fiverr freelancer</h3>
        <button class="btn btn-primary">Compare benfits</button>
    </div>
    
    
</div>

<div class="container mt-3">
    <div class="row row-cols-1 row-cols-md-4 g-4 mt-3">
        <div class="col">
            <div class="card">
           
                <div class="card-body">
                    <h5 class="card-title">Intro video</h5>
                    <p class="card-text">Introduce yourself and let buyers know why they should work with you. Learn more.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Portfolio</h5>
                    <p class="card-text">Earn trust by showcasing your skills and past projects. Learn more.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
           
                <div class="card-body">
                    <h5 class="card-title">Milestones</h5>
                    <p class="card-text">Set predefined order goals, each with its own deadline, delivery, and payment. Learn more</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
          
                <div class="card-body">
                    <h5 class="card-title">4 Active Gigs</h5>
                    <p class="card-text">Offer 4 Gigs on the Fiverr marketplace.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-4 g-4 mt-3">
        <div class="col">
            <div class="card">
            
                <div class="card-body">
                    <h5 class="card-title">Join Seller Plus Standard</h5>
                    <p class="card-text">Jumpstart your business growth with exclusive tools and insights. Learn more</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
         
                <div class="card-body">
                    <h5 class="card-title">Get more as a Pro freelancer</h5>
                    <p class="card-text">Access all level benefits, appear in an exclusive catalog with a Pro badge, and more..</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
             
                <div class="card-body">
                    <h5 class="card-title">Subscriptions</h5>
                    <p class="card-text">Generate steady work and reliable income with recurring orders. Learn more</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
       
                <div class="card-body">
                    <h5 class="card-title">Promoted Gigs</h5>
                    <p class="card-text">Advertise your Gigs to boost visibility and gain more orders. Learn more.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-4 mt-3">
        <div class="col">
            <div class="card">
          
                <div class="card-body">
                    <h5 class="card-title">Join Seller Plus Premium</h5>
                    <p class="card-text">Optimize your performance with this paid program Learn more.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
           
                <div class="card-body">
                    <h5 class="card-title">Consultations</h5>
                    <p class="card-text">Help buyers reach their goals with paid video call consultations. Learn more.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            
                <div class="card-body">
                    <h5 class="card-title">Top clients</h5>
                    <p class="card-text">Build credibility by featuring past clients and brands you’ve worked with. Learn more</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            
                <div class="card-body">
                    <h5 class="card-title">Early payout</h5>
                    <p class="card-text">Skip the clearing period and get paid immediately. (Fee applies) Learn more</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-4 g-4 mt-3">
        <div class="col">
            <div class="card">
            
                <div class="card-body">
                    <h5 class="card-title">Faster payments</h5>
                    <p class="card-text">Your earnings clear in 7 days instead of 14. Learn more</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
          
                <div class="card-body">
                    <h5 class="card-title">Priority support</h5>
                    <p class="card-text">Get faster responses to your Help Center tickets.</p>
                </div>
            </div>
        </div>
     
     
    </div>
</div>




@endsection