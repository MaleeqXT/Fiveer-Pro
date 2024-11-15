<html>
    <head>
        <title>Bootstrap 5 Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
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
                    <li><a class="dropdown-item" href="#">SELLER PLUS</a></li>
                    <li><a class="dropdown-item" href="#">Program Benefits</a></li>
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
                <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image" style="width: 100%; border-radius: 8px;">
                <div class="card-body text-center">
                  <h5 class="card-title">Haseeb M</h5>
                  <p class="card-text">haseeb_mayana.</p>
                  <a href="#" class="btn" style="border: 1px solid #ccc; padding: 8px 16px; border-radius: 8px; text-decoration: none; color: #000; font-size: 1rem; display: inline-block; max-width: 280px; width: auto; text-align: center;">
                    View Profile
                  </a>
                  
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
                </div>
              </div>
              
            </div>
            
        
            <!-- Right column: Heading and Paragraph -->
            <div class="col-sm-6 col-md-8 d-flex flex-column justify-content-start">
              <h3>Welcome, Haseeb M</h3>
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
                      <li><a class="dropdown-item" href="#">Order #2</a></li>
                      <li><a class="dropdown-item" href="#">Order #3</a></li>
                      <li><a class="dropdown-item" href="#">Order #4</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              
              
              
            </div>
          </div>
        </div>
        
        
       
        
          
      </body>
</html>