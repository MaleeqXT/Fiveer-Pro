<html>
    <head>
        <title>Bootstrap 5 Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
          
        </style>
      </head>
      <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container"> <!-- Added container class -->
            <span class="navbar-brand mb-0 h1 fs-1">fiverr</span>
        
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Mybusiness
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Orders</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Gigs</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Growth & Marketing
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                    <li><a class="dropdown-item" href="{{route('messages.program')}}">Program Benefits</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Laravel Overview</a></li>
                    <li><a class="dropdown-item" href="#">Scale your business</a></li>
                    <li><a class="dropdown-item" href="#">Contact</a></li>
                    <li><a class="dropdown-item" href="#">Fiverr Learn</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Analytics
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                    <li><a class="dropdown-item" href="#">Overview</a></li>
                    <li><a class="dropdown-item" href="#">Repeat Business</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">SELLER PLUS</a></li>
                    <li><a class="dropdown-item" href="#">Gig performance</a></li>
                    <li><a class="dropdown-item" href="#">Orders breakdown</a></li>
                    <li><a class="dropdown-item" href="#">Top keywords</a></li>
                    <li><a class="dropdown-item" href="#">Keyword research</a></li>
                  </ul>
                </li>
              </ul>
        
              <ul class="navbar-nav ms-auto"> <!-- Right-aligned icons -->
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <i class="fas fa-envelope"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <i class="fas fa-box"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <i class="fas fa-bell"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        
        <div class="container">
          <div class="row justify-content-center align-items-start">
            <!-- Left column: Card -->
            <div class="col-sm-6 col-md-4">
              <!-- First Card -->
              <div class="card" style="width: 100%; max-width: 18rem; margin: auto;">
                <!-- Image with circular shape and controlled size -->
                <div class="card-img-wrapper" style="display: flex; justify-content: center; align-items: center; margin-top: 20px; position: relative;">
                  <img class="card-img-top" 
                       src="https://images.pexels.com/photos/346529/pexels-photo-346529.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" 
                       alt="Card image" 
                       style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%; border: 4px solid white;">
                </div>
                
                <div class="card-body text-center" style="padding-top: 10px;">
                  <h5 class="card-title">Haseeb M</h5>
                  <p class="card-text">haseeb_mayana.</p>
                  <a href="#" class="btn w-100" style="border: 1px solid #ccc; padding: 8px 16px; border-radius: 8px; text-decoration: none; color: #000; margin-top: 10px; font-size: 1rem;">View Profile</a>
                </div>
              </div>
              
            
              <!-- Second Card -->
              <div class="card" style="width: 100%; max-width: 18rem; margin: auto; margin-top: 20px;">
                <div class="card-body">
                  <h5 class="card-title">Level overview</h5>
                  <h6 class="card-subtitle mb-2 text-muted" style="margin-top: 10px;">My level</h6>
                  <h6 class="card-subtitle mb-2 text-muted" style="margin-top: 10px;">Success scores</h6>
                  <h6 class="card-subtitle mb-2 text-muted" style="margin-top: 10px;">Response rate</h6>
                  <h6 class="card-subtitle mb-2 text-muted" style="margin-top: 10px;">Rating</h6>
                  <a href="#" class="btn w-100" style="border: 1px solid #ccc; padding: 8px 16px; border-radius: 8px; text-decoration: none; color: #000; margin-top: 10px; font-size: 1rem;">View Progress</a>
                </div>
              </div>
              <div class="card" style="width: 100%; max-width: 18rem; margin: auto; margin-top: 20px;">
                <div class="card-body">
                  <h5 class="card-title">Availability</h5>
                  <p class="card-subtitle mb-2 text-muted">While unavailable, your Gigs are hidden and you will not receive new orders.</p>
                  <a href="#" class="btn w-100" style="border: 1px solid #ccc; padding: 8px 16px; border-radius: 8px; text-decoration: none; color: #000; margin-top: 10px; font-size: 1rem;">Set your availability</a>
                </div>
              </div>

               <div class="card" style="width: 100%; max-width: 18rem; margin: auto; margin-top: 20px;">
              <div class="card-body d-flex justify-content-between align-items-center">
                <h6 class="card-subtitle mt-1">Earned in November</h6>
                <span class="ms-auto font-weight-bold" style="color: #212529;">US$0</span>

              </div>
            </div>

            <div class="card" style="width: 100%; max-width: 18rem; margin: auto; margin-top: 20px;">
              <div class="card-body d-flex justify-content-between align-items-center">
                <h6 class="card-subtitle mt-1 text-muted">inbox</h6>
                <span class="ms-auto text-primary">view all</span>
              </div>
            </div>  

            </div>
            
        
            <!-- Right column: Heading and Paragraph -->
            <div class="col-sm-6 col-md-8 d-flex flex-column justify-content-start">
              <h3 class="mt-3">Welcome, Haseeb M</h3>
              <p>Find important messages, tips, and links to helpful resources here:</p>
              
              <div class="card mt-1">
                <div class="card-body">
                  <h5 class="card-title">Join Kickstart and grow your business</h5>
                  <p>Check out all the exclusive tools and resources that can help fast-track your success</p>
                </div>
              </div>
              
              <div class="card mt-2">
                <div class="card-body">
                  <h5 class="card-title">set up inbox auto replies</h5>
                  <p>Greet new potential buyers with an auto reply to their first message.</p>
                </div>
              </div>

              <div class="card mt-3">
                <div class="card-body position-relative">
                  <h5 class="card-title">Active orders</h5>
                  <!-- Dropdown -->
                  <div class="dropdown position-absolute top-0 end-0" style="margin-right: 10px;">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                     Active orders (0)
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end custom-dropdown" aria-labelledby="dropdownMenuButton">
                      <li><a class="dropdown-item" href="#">Active orders (0)</a></li>
                      <li><a class="dropdown-item" href="#">Completed</a></li>
                      <li><a class="dropdown-item" href="#">Canceled</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              
              <div class="d-flex align-items-center mt-4">
                <span class="text-muted">Upgrade Your Business</span>
                <hr class="flex-grow-1 me-2" style="border: 1px solid #ddd; width:28px;">
              </div>
            
              <div class="card mt-3">
                <div class="card-body position-relative">
                  <h3 class="card-title mt-3">3 Steps to Become a Top Seller on Fiverr</h3>
                  <p class="card-text">
                    The key to your success on Fiverr is the brand you build for yourself through your Fiverr reputation. 
                    We gathered some tips and resources to help you become a leading seller on Fiverr.
                  </p>
                  <!-- Row for the three cards -->
                  <div class="row">
                    <div class="col-md-4">
                      
                      <h6 class="card-title mt-5" style="color: #212529;">Get noticed</h6>


                      <p>
                        Tap into the power of social media by 
                        <span style="color:  #212529;  font-weight: bold;">sharing your Gig</span>, and 
                        <span style="color: #007bff; font-weight: bold;">get expert help</span> 
                        to grow your impact.
                      </p>
                      
                          <a href="#" class="btn btn-outline-primary mt-5">Share Your Gigs</a>
                      
                    </div>
                    <div class="col-md-4">

                    
                      <h6 class="card-title mt-5" style="color: #212529;">Get more skills & exposure</h6>
                      <p>
                        Hone your skills and expand your knowledge with online courses. You’ll be able to offer more services and 
                        <span style="color: #212529; font-weight: bold;">gain more exposure</span> with every course completed.
                      </p>
                      

                          <a href="#" class="btn btn-outline-primary">Explore Learn</a>
                       
                    </div>

                    <div class="col-md-4">
                     
                      <h6 class="card-title mt-5" style="color: #212529;">Become a successful seller!</h6>
                      <p>
                        Watch this free online course to learn how to create an outstanding service experience for your buyer and 
                        <span style="color: #212529; font-weight: bold;">grow your career</span> as an online freelancer.
                      </p>
                      


                          <a href="#" class="btn btn-outline-primary">Watch Free Course</a>


                       
                    </div>
                  </div>
                </div>
              </div>
              
              

              





              

                  
            </div>
          </div>
        </div>

        <hr class="mt-5">
        
        <div class="container" style="margin-left: 200px;">
          <div class="row mt-5">
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <h6 class="mb-2">Categories</h6>
                  <span class="mb-2">Music & Audio</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <h6 class="mb-2">Graphics & Design</h6>
                  <span class="mb-2">Programming & Tech</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <h6 class="mb-2">Digital Marketing</h6>
                  <span class="mb-2">AI Services</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <h6 class="mb-2">Writing & Translation</h6>
                  <span class="mb-2">Consulting</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <h6 class="mb-2">Video & Animation</h6>
                  <span class="mb-2">Data</span>
              </div>
          </div>
      
          <div class="row mb-3">
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">Business</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">Personal Growth & Hobbies</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">Photography</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">Finance</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">End-to-End Projects</span>
              </div>
          </div>
      
          <div class="row mb-3">
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">Service Catalog</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">For Clients</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">How Fiverr Works</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">Customer Success Stories</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">Trust & Safety</span>
              </div>
          </div>
      
          <div class="row mb-3">
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">Quality Guide</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">Fiverr Learn</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">Online Courses</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">Fiverr Guides</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">Fiverr Answers</span>
              </div>
          </div>
      
          <div class="row mb-3">
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">For Freelancers</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">Become a Fiverr Freelancer</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">Become an Agency</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">Kickstart</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">Community Hub</span>
              </div>
          </div>
      
          <div class="row mb-3">
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">Forum</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">Events</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">Business Solutions</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">Fiverr Pro</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">Project Management Service</span>
              </div>
          </div>
      
          <div class="row mb-3">
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">ClearVoice</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">Content Marketing</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">Working Not Working</span>
              </div>
              <div class="col-2 pl-3 d-flex flex-column align-items-start">
                  <span class="mb-2">Creative Talent</span>
              </div>
          </div>
      </div>
      
          
      </body>
</html>