<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- FontAwesome CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<!-- Optional Bootstrap JavaScript Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>


<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#" style="color: black; margin-left: 5%;">
      <h1 style="font-family: 'Poppins', sans-serif;">Fiverr <span style="color: green;">.</span></h1>
    </a>
    
    <!-- Toggle button for mobile view -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <!-- Centered Search Form -->
      <form class="d-flex mx-auto" style="width: 50%; max-width: 500px;">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

      <!-- Right-side icons and links -->
      <ul class="navbar-nav ms-auto" style="margin-right: 10%;">
        <!-- Authentication Links -->
        @guest
          <!-- Login -->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}" style="color: black;">Login</a>
          </li>
          <!-- Register -->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}" style="color: green;">Register</a>
          </li>
        @endguest

        @auth
          <!-- Notification -->
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-bell" style="color: black;"></i>
            </a>
          </li>
          
          <!-- Message -->
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-envelope" style="color: black;"></i>
            </a>
          </li>
          
          <!-- List -->
          <li class="nav-item">
            <a class="nav-link" href="{{route('messages.list')}}">
              <i class="fas fa-heart" style="color: black;"></i>
            </a>
          </li>
          
          <!-- Order -->
          <li class="nav-item">
            <a class="nav-link" href="#" style="color: black;">Order</a>
          </li>
          
          <!-- Switch to Selling -->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('selling') }}" style="color: green;">Switch to Selling</a>
          </li>

          <!-- Profile Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="https://images.pexels.com/photos/346529/pexels-photo-346529.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="User Avatar" class="rounded-circle" style="width: 40px; height: 40px;">
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('websites.profile') }}"><i class="fas fa-user-circle"></i> Profile</a></li>
              <li><a class="dropdown-item" href="{{ route('messages.payment') }}"><i class="fas fa-credit-card"></i> Billing and Payment</a></li>
              <li><a class="dropdown-item" href="{{route('messages.inbox')}}"><i class="fas fa-comments"></i> Messages</a></li>
              <li><a class="dropdown-item" href="{{route('messages.order')}}"><i class="fas fa-box"></i> Orders</a></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-tasks"></i> Tasks</a></li>
              <li>
                <a class="dropdown-item" href="{{route('websites.earning')}}">
                  <i class="fas fa-wallet"></i> Earnings
                </a>
              </li>
                            
              <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                  <i class="fas fa-sign-out-alt"></i> Sign out
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </li>
            </ul>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>

<hr>

<script>
  // Example of how to conditionally hide login/register links
  // Check if the user is logged in
  var userLoggedIn = false; // Set this based on your authentication logic

  if (userLoggedIn) {
    document.getElementById('login-register').style.display = 'none'; // Hide Login/Register links if logged in
  } else {
    document.getElementById('login-register').style.display = 'block'; // Show Login/Register if not logged in
  }
</script>


<!-- Bootstrap CSS (if not included yet) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Bundle (includes Popper.js for dropdown functionality) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Navbar -->
  <nav class="nav ms-5 d-flex flex-wrap" style="color: #333; white-space: nowrap;">
  
  <!-- Link to Open Modal with Tooltip -->
  <a class="nav-link" href="#" style="color: #444;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Graphics & Design" id="openModalLink">
    Graphics & Design
  </a>
  
  <!-- Modal Structure -->
  <div class="modal fade" id="graphicsDesignModal" tabindex="-1" aria-labelledby="graphicsDesignModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-custom">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="graphicsDesignModalLabel">Graphics & Design</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <h6>Logo & Brand Identity</h6>
              <ul>
                <li>Logo Design</li>
                <li>Brand Style Guides</li>
                <li>Business Cards & Stationery</li>
                <li>Fonts & Typography</li>
                <li>Logo Maker Tool</li>
              </ul>
            </div>
            <div class="col-md-6">
              <h6>Art & Illustration</h6>
              <ul>
                <li>Illustration</li>
                <li>AI Artists</li>
                <li>AI Avatar Design</li>
                <li>Children's Book Illustration</li>
                <li>Portraits & Caricatures</li>
                <li>Cartoons & Comics</li>
                <li>Pattern Design</li>
                <li>Tattoo Design</li>
                <li>Storyboards</li>
                <li>NFT Art</li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <h6>Miscellaneous</h6>
              <ul>
                <li>Design Advice</li>
              </ul>
            </div>
            <div class="col-md-6">
              <h6>Web & App Design</h6>
              <ul>
                <li>Website Design</li>
                <li>App Design</li>
                <li>UX Design</li>
                <li>Landing Page Design</li>
                <li>Icon Design</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- CSS for Modal Customization -->
  <style>
    /* Custom Modal Position */
    .modal-custom {
      margin: 20px auto; /* Space on top and bottom */
      max-width: 90%;    /* Width with side gaps */
    }
  
    /* Adjust Modal Content */
    .modal-content {
      border-radius: 10px; /* Rounded corners for better look */
    }
  
    /* Modal Fade Effect */
    .modal.fade .modal-dialog {
      transform: translateY(-50px);
      transition: transform 0.3s ease-out;
    }
  
    .modal.show .modal-dialog {
      transform: translateY(0);
    }
  </style>
  
  
  <!-- Add Bootstrap JS and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
  
  <!-- Initialize Tooltip -->
  <script>
    // Enable tooltips globally (initializes all tooltips on the page)
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    });
  
    // Trigger modal on hover
    var openModalLink = document.getElementById('openModalLink');
    var graphicsDesignModal = new bootstrap.Modal(document.getElementById('graphicsDesignModal'));
  
    openModalLink.addEventListener('mouseenter', function() {
      graphicsDesignModal.show(); // Show the modal when hovered
    });
  
    openModalLink.addEventListener('mouseleave', function() {
      graphicsDesignModal.hide(); // Hide the modal when the cursor leaves
    });
  </script>
  
  
  
  <!-- Link to Open Modal with Tooltip -->
  <a class="nav-link" href="#" style="color: #444;" 
     data-bs-toggle="tooltip" data-bs-placement="bottom" 
     title="Click to view Programming & Tech services" 
     id="programmingTechLink">
    Programming & Tech
  </a>
  
  <!-- Modal Structure -->
  <div class="modal fade" id="programmingTechModal" tabindex="-1" aria-labelledby="programmingTechModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="programmingTechModalLabel">Programming & Tech</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <!-- Row 1 -->
            <div class="row">
              <div class="col-md-6">
                <h6>Website Development</h6>
                <ul>
                  <li>Business Websites</li>
                  <li>E-Commerce Development</li>
                  <li>Landing Pages</li>
                  <li>Dropshipping Websites</li>
                  <li>Build a Complete Website</li>
                  <li>Website Platforms</li>
                  <li>WordPress</li>
                  <li>Shopify</li>
                  <li>Wix</li>
                  <li>Custom Websites</li>
                  <li>GoDaddy</li>
                </ul>
              </div>
              <div class="col-md-6">
                <h6>Website Maintenance</h6>
                <ul>
                  <li>Website Customization</li>
                  <li>Bug Fixes</li>
                  <li>Backup & Migration</li>
                  <li>Speed Optimization</li>
                </ul>
              </div>
            </div>
        
            <!-- Row 2 -->
            <div class="row">
              <div class="col-md-6">
                <h6>AI Development</h6>
                <ul>
                  <li>AI Chatbot</li>
                  <li>AI Applications</li>
                  <li>AI Integrations</li>
                  <li>AI Agents</li>
                  <li>AI Fine-Tuning</li>
                  <li>OpenAI GPT Store</li>
                </ul>
              </div>
              <div class="col-md-6">
                <h6>Chatbot Development</h6>
                <ul>
                  <li>Discord</li>
                  <li>Telegram</li>
                  <li>TikTok</li>
                  <li>Facebook Messenger</li>
                </ul>
              </div>
            </div>
        
            <!-- Row 3 -->
            <div class="row">
              <div class="col-md-6">
                <h6>Game Development</h6>
                <ul>
                  <li>Gameplay Experience & Feedback</li>
                  <li>PC Games</li>
                  <li>Mobile Games</li>
                </ul>
              </div>
              <div class="col-md-6">
                <h6>Mobile App Development</h6>
                <ul>
                  <li>Cross-platform Development</li>
                  <li>Android App Development</li>
                  <li>iOS App Development</li>
                  <li>Website to App</li>
                  <li>Mobile App Maintenance</li>
                </ul>
              </div>
            </div>
        
            <!-- Row 4 -->
            <div class="row">
              <div class="col-md-6">
                <h6>Cloud & Cybersecurity</h6>
                <ul>
                  <li>Cloud Computing</li>
                  <li>DevOps Engineering</li>
                  <li>Cybersecurity</li>
                </ul>
              </div>
              <div class="col-md-6">
                <h6>Data Science & ML</h6>
                <ul>
                  <li>Machine Learning</li>
                  <li>Computer Vision</li>
                  <li>NLP</li>
                  <li>Deep Learning</li>
                </ul>
              </div>
            </div>
        
            <!-- Row 5 -->
            <div class="row">
              <div class="col-md-6">
                <h6>Software Development</h6>
                <ul>
                  <li>Web Applications</li>
                  <li>Desktop Applications</li>
                  <li>APIs & Integrations</li>
                  <li>Databases</li>
                  <li>Scripting</li>
                </ul>
              </div>
              <div class="col-md-6">
                <h6>Blockchain & Cryptocurrency</h6>
                <ul>
                  <li>Decentralized Apps (dApps)</li>
                  <li>Cryptocurrencies & Tokens</li>
                  <li>Exchange Platforms</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Add Bootstrap JS and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
  
  <!-- Initialize Tooltip -->
  <script>
    // Enable tooltips globally (initializes all tooltips on the page)
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    });
  
    // Trigger modal on hover
    var programmingTechLink = document.getElementById('programmingTechLink');
    var programmingTechModal = new bootstrap.Modal(document.getElementById('programmingTechModal'));
  
    programmingTechLink.addEventListener('mouseenter', function() {
      programmingTechModal.show(); // Show the modal when hovered
    });
  
    programmingTechLink.addEventListener('mouseleave', function() {
      programmingTechModal.hide(); // Hide the modal when the cursor leaves
    });
  </script>
  
  
  
   <!-- Link to Open Modal with Tooltip -->
  <a class="nav-link" href="#" style="color: #444;" 
  data-bs-toggle="tooltip" data-bs-placement="bottom" 
  title="Click to view Digital Marketing services" 
  id="digitalMarketingLink">
  Digital Marketing
  </a>
  
  <!-- Modal Structure -->
  <div class="modal fade" id="digitalMarketingModal" tabindex="-1" aria-labelledby="digitalMarketingModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="digitalMarketingModalLabel">Digital Marketing</h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body">
      <div class="container">
        <!-- Row 1 -->
        <div class="row">
          <div class="col-md-6">
            <h6>Search</h6>
            <ul>
              <li>Search Engine Optimization (SEO)</li>
              <li>Search Engine Marketing (SEM)</li>
              <li>Local SEO</li>
              <li>E-Commerce SEO</li>
              <li>Video SEO</li>
            </ul>
          </div>
          <div class="col-md-6">
            <h6>Social</h6>
            <ul>
              <li>Social Media Marketing</li>
              <li>Paid Social Media</li>
              <li>Social Commerce</li>
              <li>Influencer Marketing</li>
              <li>Community Management</li>
            </ul>
          </div>
        </div>
    
        <!-- Row 2 -->
        <div class="row">
          <div class="col-md-6">
            <h6>Methods & Techniques</h6>
            <ul>
              <li>Video Marketing</li>
              <li>E-Commerce Marketing</li>
              <li>Email Marketing</li>
              <li>Email Automations</li>
              <li>Guest Posting</li>
              <li>Affiliate Marketing</li>
              <li>Display Advertising</li>
              <li>Public Relations</li>
              <li>Text Message Marketing</li>
            </ul>
          </div>
          <div class="col-md-6">
            <h6>Analytics & Strategy</h6>
            <ul>
              <li>Marketing Strategy</li>
              <li>Marketing Concepts & Ideation</li>
              <li>Marketing Advice</li>
              <li>Web Analytics</li>
              <li>Conversion Rate Optimization (CRO)</li>
            </ul>
          </div>
        </div>
    
        <!-- Row 3 -->
        <div class="row">
          <div class="col-md-6">
            <h6>Channel Specific</h6>
            <ul>
              <li>TikTok Shop</li>
              <li>Facebook Ads Campaign</li>
              <li>Instagram Marketing</li>
              <li>Google SEM</li>
              <li>Shopify Marketing</li>
            </ul>
          </div>
          <div class="col-md-6">
            <h6>Industry & Purpose-Specific</h6>
            <ul>
              <li>Music Promotion</li>
              <li>Podcast Marketing</li>
              <li>Book & eBook Marketing</li>
              <li>Mobile App Marketing</li>
            </ul>
          </div>
        </div>
    
        <!-- Row 4 -->
        <div class="row">
          <div class="col-md-6">
            <h6>Miscellaneous</h6>
            <ul>
              <li>Crowdfunding</li>
              <li>Other</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
     </div>
   </div>
  </div>
  </div>
  
  <!-- Add Bootstrap JS and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
  
  <!-- Initialize Tooltip -->
  <script>
  // Enable tooltips globally (initializes all tooltips on the page)
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
   return new bootstrap.Tooltip(tooltipTriggerEl);
  });
  
  // Trigger modal on hover
  var digitalMarketingLink = document.getElementById('digitalMarketingLink');
  var digitalMarketingModal = new bootstrap.Modal(document.getElementById('digitalMarketingModal'));
  
  digitalMarketingLink.addEventListener('mouseenter', function() {
   digitalMarketingModal.show(); // Show the modal when hovered
  });
  
  digitalMarketingLink.addEventListener('mouseleave', function() {
   digitalMarketingModal.hide(); // Hide the modal when the cursor leaves
  });
  </script>
  
  
  
  
   <!-- Link to Open Modal with Tooltip -->
  <a class="nav-link" href="#" style="color: #444;" 
  data-bs-toggle="tooltip" data-bs-placement="bottom" 
  title="Click to view Video & Animation services" 
  id="videoAnimationLink">
  Video & Animation
  </a>
  
  <!-- Modal Structure -->
  <div class="modal fade" id="videoAnimationModal" tabindex="-1" aria-labelledby="videoAnimationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="videoAnimationModalLabel">Video & Animation</h5>
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body">
      <div class="container">
        <!-- Row 1 -->
        <div class="row">
          <div class="col-md-6">
            <h6>Editing & Post-Production</h6>
            <ul>
              <li>Video Editing</li>
              <li>Visual Effects</li>
              <li>Video Art</li>
              <li>Intro & Outro Videos</li>
              <li>Video Templates Editing</li>
              <li>Subtitles & Captions</li>
            </ul>
          </div>
          <div class="col-md-6">
            <h6>Social & Marketing Videos</h6>
            <ul>
              <li>Video Ads & Commercials</li>
              <li>Social Media Videos</li>
              <li>Music Videos</li>
              <li>Slideshow Videos</li>
            </ul>
          </div>
        </div>
    
        <!-- Row 2 -->
        <div class="row">
          <div class="col-md-6">
            <h6>Motion Graphics</h6>
            <ul>
              <li>Logo Animation</li>
              <li>Lottie & Web Animation</li>
              <li>Text Animation</li>
            </ul>
          </div>
          <div class="col-md-6">
            <h6>Presenter Videos</h6>
            <ul>
              <li>UGC Videos</li>
              <li>Spokesperson Videos</li>
              <li>UGC Ads</li>
              <li>TikTok UGC Videos</li>
            </ul>
          </div>
        </div>
    
        <!-- Row 3 -->
        <div class="row">
          <div class="col-md-6">
            <h6>Animation</h6>
            <ul>
              <li>Character Animation</li>
              <li>Animated GIFs</li>
              <li>Animation for Kids</li>
              <li>Animation for Streamers</li>
              <li>Rigging</li>
              <li>NFT Animation</li>
            </ul>
          </div>
          <div class="col-md-6">
            <h6>Filmed Video Production</h6>
            <ul>
              <li>Videographers</li>
              <li>Filmed Video Production</li>
            </ul>
          </div>
        </div>
    
        <!-- Row 4 -->
        <div class="row">
          <div class="col-md-6">
            <h6>Explainer Videos</h6>
            <ul>
              <li>Animated Explainers</li>
              <li>Live Action Explainers</li>
              <li>Screencasting Videos</li>
              <li>eLearning Video Production</li>
              <li>Crowdfunding Videos</li>
            </ul>
          </div>
          <div class="col-md-6">
            <h6>Product Videos</h6>
            <ul>
              <li>3D Product Animation</li>
              <li>E-Commerce Product Videos</li>
              <li>Corporate Videos</li>
              <li>App & Website Previews</li>
            </ul>
          </div>
        </div>
    
        <!-- Row 5 -->
        <div class="row">
          <div class="col-md-6">
            <h6>AI Video</h6>
            <ul>
              <li>AI Video Art</li>
              <li>AI Music Videos</li>
              <li>AI Video Avatars</li>
            </ul>
          </div>
          <div class="col-md-6">
            <h6>Miscellaneous</h6>
            <ul>
              <li>Virtual & Streaming Avatars</li>
              <li>Article to Video</li>
              <li>Game Trailers</li>
              <li>Game Recordings & Guides</li>
              <li>Meditation Videos</li>
              <li>Real Estate Promos</li>
              <li>Book Trailers</li>
              <li>Video Advice</li>
              <li>Other</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
     <div class="modal-footer">
       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
     </div>
   </div>
  </div>
  </div>
  
  <!-- Add Bootstrap JS and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
  
  <!-- Initialize Tooltip -->
  <script>
  // Enable tooltips globally (initializes all tooltips on the page)
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
   return new bootstrap.Tooltip(tooltipTriggerEl);
  });
  
  // Trigger modal on hover
  var videoAnimationLink = document.getElementById('videoAnimationLink');
  var videoAnimationModal = new bootstrap.Modal(document.getElementById('videoAnimationModal'));
  
  videoAnimationLink.addEventListener('mouseenter', function() {
   videoAnimationModal.show(); // Show the modal when hovered
  });
  
  videoAnimationLink.addEventListener('mouseleave', function() {
   videoAnimationModal.hide(); // Hide the modal when the cursor leaves
  });
  </script>
  
  
  
  <!-- Link to Open Modal with Tooltip -->
  <a class="nav-link" href="#" style="color: #444;" 
     data-bs-toggle="tooltip" data-bs-placement="bottom" 
     title="Click to view Writing & Translation services" 
     id="writingTranslationLink">
    Writing & Translation
  </a>
  
  <!-- Modal Structure -->
  <div class="modal fade" id="writingTranslationModal" tabindex="-1" aria-labelledby="writingTranslationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="writingTranslationModalLabel">Writing & Translation</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container">
            <!-- Row 1 -->
            <div class="row">
              <div class="col-md-6">
                <h6>Content Writing</h6>
                <ul>
                  <li>Articles & Blog Posts</li>
                  <li>Content Strategy</li>
                  <li>Website Content</li>
                  <li>Scriptwriting</li>
                  <li>Creative Writing</li>
                  <li>Podcast Writing</li>
                  <li>Speechwriting</li>
                  <li>Research & Summaries</li>
                  <li>Find an Expert Writer</li>
                </ul>
              </div>
              <div class="col-md-6">
                <h6>Editing & Critique</h6>
                <ul>
                  <li>Proofreading & Editing</li>
                  <li>AI Content Editing</li>
                  <li>Writing Advice</li>
                </ul>
                <h6>Book & eBook Publishing</h6>
                <ul>
                  <li>Book & eBook Writing</li>
                  <li>Book Editing</li>
                  <li>Beta Reading</li>
                  <li>Self-Publish Your Book</li>
                </ul>
              </div>
            </div>
        
            <!-- Row 2 -->
            <div class="row">
              <div class="col-md-6">
                <h6>Career Writing</h6>
                <ul>
                  <li>Resume Writing</li>
                  <li>Cover Letters</li>
                  <li>LinkedIn Profiles</li>
                  <li>Job Descriptions</li>
                </ul>
                <h6>Miscellaneous</h6>
                <ul>
                  <li>eLearning Content Development</li>
                  <li>Technical Writing</li>
                </ul>
              </div>
              <div class="col-md-6">
                <h6>Business & Marketing Copy</h6>
                <ul>
                  <li>Brand Voice & Tone</li>
                  <li>Business Names & Slogans</li>
                  <li>Case Studies</li>
                  <li>White Papers</li>
                  <li>Product Descriptions</li>
                  <li>Ad Copy</li>
                  <li>Sales Copy</li>
                  <li>Email Copy</li>
                  <li>Social Media Copywriting</li>
                  <li>Press Releases</li>
                  <li>UX Writing</li>
                </ul>
              </div>
            </div>
        
            <!-- Row 3 -->
            <div class="row">
              <div class="col-md-6">
                <h6>Translation & Transcription</h6>
                <ul>
                  <li>Translation</li>
                  <li>Localization</li>
                  <li>Transcription</li>
                  <li>Interpretation</li>
                </ul>
              </div>
              <div class="col-md-6">
                <h6>Industry-Specific Content</h6>
                <ul>
                  <li>Business, Finance & Law</li>
                  <li>Health & Medical</li>
                  <li>Internet & Technology</li>
                  <li>News & Politics</li>
                  <li>Marketing</li>
                  <li>Real Estate</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Add Bootstrap JS and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
  
  <!-- Initialize Tooltip -->
  <script>
    // Enable tooltips globally (initializes all tooltips on the page)
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    });
  
    // Trigger modal on hover
    var writingTranslationLink = document.getElementById('writingTranslationLink');
    var writingTranslationModal = new bootstrap.Modal(document.getElementById('writingTranslationModal'));
  
    writingTranslationLink.addEventListener('mouseenter', function() {
      writingTranslationModal.show(); // Show the modal when hovered
    });
  
    writingTranslationLink.addEventListener('mouseleave', function() {
      writingTranslationModal.hide(); // Hide the modal when the cursor leaves
    });
  </script>
  
  
  <!-- Link to Open Modal with Tooltip -->
  <a class="nav-link" href="#" style="color: #444;" 
     data-bs-toggle="tooltip" data-bs-placement="bottom" 
     title="Click to view Music & Audio services" 
     id="musicAudioLink">
    Music & Audio
  </a>
  
  <!-- Modal Structure -->
  <div class="modal fade" id="musicAudioModal" tabindex="-1" aria-labelledby="musicAudioModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="musicAudioModalLabel">Music & Audio</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
              <div class="col-md-6">
                  <h6>Music Production & Writing</h6>
                  <ul>
                      <li>Music Producers</li>
                      <li>Composers</li>
                      <li>Singers & Vocalists</li>
                      <li>Session Musicians</li>
                      <li>Songwriters</li>
                      <li>Jingles & Intros</li>
                      <li>Custom Songs</li>
                  </ul>
              </div>
              <div class="col-md-6">
                  <h6>Audio Engineering & Post Production</h6>
                  <ul>
                      <li>Mixing & Mastering</li>
                      <li>Audio Editing</li>
                      <li>Vocal Tuning</li>
                  </ul>
              </div>
          </div>
          
          <div class="row">
              <div class="col-md-6">
                  <h6>Voice Over & Narration</h6>
                  <ul>
                      <li>24hr Turnaround</li>
                      <li>Female Voice Over</li>
                      <li>Male Voice Over</li>
                      <li>French Voice Over</li>
                      <li>German Voice Over</li>
                  </ul>
              </div>
              <div class="col-md-6">
                  <h6>Streaming & Audio</h6>
                  <ul>
                      <li>Podcast Production</li>
                      <li>Audiobook Production</li>
                      <li>Audio Ads Production</li>
                      <li>Voice Synthesis & AI</li>
                  </ul>
              </div>
          </div>
      
          <div class="row">
              <div class="col-md-6">
                  <h6>DJing</h6>
                  <ul>
                      <li>DJ Drops & Tags</li>
                      <li>DJ Mixing</li>
                      <li>Remixing</li>
                  </ul>
              </div>
              <div class="col-md-6">
                  <h6>Sound Design</h6>
                  <ul>
                      <li>Sound Design</li>
                      <li>Meditation Music</li>
                      <li>Audio Logo & Sonic Branding</li>
                      <li>Custom Patches & Samples</li>
                      <li>Audio Plugin Development</li>
                  </ul>
              </div>
          </div>
      
          <div class="row">
              <div class="col-md-6">
                  <h6>Lessons & Transcriptions</h6>
                  <ul>
                      <li>Online Music Lessons</li>
                      <li>Music Transcription</li>
                      <li>Music & Audio Advice</li>
                  </ul>
              </div>
          </div>
      </div>
      
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Add Bootstrap JS and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
  
  <!-- Initialize Tooltip -->
  <script>
    // Enable tooltips globally (initializes all tooltips on the page)
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    });
  
    // Trigger modal on hover
    var musicAudioLink = document.getElementById('musicAudioLink');
    var musicAudioModal = new bootstrap.Modal(document.getElementById('musicAudioModal'));
  
    musicAudioLink.addEventListener('mouseenter', function() {
      musicAudioModal.show(); // Show the modal when hovered
    });
  
    musicAudioLink.addEventListener('mouseleave', function() {
      musicAudioModal.hide(); // Hide the modal when the cursor leaves
    });
  </script>
  
  
  
  <!-- Link to Open Modal with Tooltip -->
  <a class="nav-link" href="#" style="color: #444;" 
     data-bs-toggle="tooltip" data-bs-placement="bottom" 
     title="Click to view Business services" 
     id="businessLink">
    Business
  </a>
  
  <!-- Modal Structure -->
  <div class="modal fade" id="businessModal" tabindex="-1" aria-labelledby="businessModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="businessModalLabel">Business</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
              <div class="col-md-6">
                  <h6>Business Formation & Consulting</h6>
                  <ul>
                      <li>Business Formation & Registration</li>
                      <li>Market Research</li>
                      <li>Business Plans</li>
                      <li>Business Consulting</li>
                      <li>HR Consulting</li>
                      <li>AI Consulting</li>
                      <li>Legal Services</li>
                      <li>Intellectual Property Management</li>
                      <li>Legal Documents & Contracts</li>
                      <li>Legal Research</li>
                      <li>General Legal Advice</li>
                  </ul>
              </div>
              <div class="col-md-6">
                  <h6>General & Administrative</h6>
                  <ul>
                      <li>Virtual Assistant</li>
                      <li>Project Management</li>
                      <li>Software Management</li>
                      <li>E-Commerce Management</li>
                      <li>Supply Chain Management</li>
                      <li>Event Management</li>
                      <li>Product Management</li>
                  </ul>
              </div>
          </div>
      
          <div class="row">
              <div class="col-md-6">
                  <h6>Data & Business Intelligence</h6>
                  <ul>
                      <li>Data Visualization</li>
                      <li>Data Analytics</li>
                      <li>Data Scraping</li>
                  </ul>
              </div>
              <div class="col-md-6">
                  <h6>Sales & Customer Care</h6>
                  <ul>
                      <li>Sales</li>
                      <li>Lead Generation</li>
                      <li>Call Center & Calling</li>
                      <li>Customer Care</li>
                  </ul>
              </div>
          </div>
      
          <div class="row">
              <div class="col-md-6">
                  <h6>Miscellaneous</h6>
                  <ul>
                      <li>Presentations</li>
                      <li>Online Investigations</li>
                      <li>Sustainability Consulting</li>
                      <li>Game Concept Design</li>
                      <li>Other</li>
                  </ul>
              </div>
          </div>
      </div>
      
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Add Bootstrap JS and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
  
  <!-- Initialize Tooltip -->
  <script>
    // Enable tooltips globally (initializes all tooltips on the page)
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    });
  
    // Trigger modal on hover
    var businessLink = document.getElementById('businessLink');
    var businessModal = new bootstrap.Modal(document.getElementById('businessModal'));
  
    businessLink.addEventListener('mouseenter', function() {
      businessModal.show(); // Show the modal when hovered
    });
  
    businessLink.addEventListener('mouseleave', function() {
      businessModal.hide(); // Hide the modal when the cursor leaves
    });
  </script>
  
  
  <!-- Link to Open Modal with Tooltip -->
  <a class="nav-link" href="#" style="color: #444;" 
     data-bs-toggle="tooltip" data-bs-placement="bottom" 
     title="Click to view Finance services" 
     id="financeLink">
    Finance
  </a>
  
  <!-- Modal Structure -->
  <div class="modal fade" id="financeModal" tabindex="-1" aria-labelledby="financeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="financeModalLabel">Finance</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
              <div class="col-md-6">
                  <h6>Accounting Services</h6>
                  <ul>
                      <li>Accounting Services</li>
                      <li>Fractional CFO Services</li>
                      <li>Financial Reporting</li>
                      <li>Bookkeeping</li>
                      <li>Payroll Management</li>
                      <li>Find a Financial Expert</li>
                  </ul>
              </div>
              <div class="col-md-6">
                  <h6>Corporate Finance</h6>
                  <ul>
                      <li>Due Diligence</li>
                      <li>Valuation</li>
                      <li>Mergers & Acquisitions Advisory</li>
                      <li>Corporate Finance Strategy</li>
                  </ul>
              </div>
          </div>
      
          <div class="row">
              <div class="col-md-6">
                  <h6>Tax Consulting</h6>
                  <ul>
                      <li>Tax Returns</li>
                      <li>Tax Identification Services</li>
                      <li>Tax Planning</li>
                      <li>Tax Compliance</li>
                      <li>Tax Exemptions</li>
                  </ul>
              </div>
              <div class="col-md-6">
                  <h6>Financial Planning & Analysis</h6>
                  <ul>
                      <li>Budgeting and Forecasting</li>
                      <li>Financial Modeling</li>
                      <li>Cost Analysis</li>
                      <li>Stock Analysis</li>
                  </ul>
              </div>
          </div>
      
          <div class="row">
              <div class="col-md-6">
                  <h6>Personal Finance & Wealth Management</h6>
                  <ul>
                      <li>Personal Budget Management</li>
                      <li>Investments Advisory</li>
                      <li>Online Trading Lessons</li>
                  </ul>
              </div>
              <div class="col-md-6">
                  <h6>Fundraising</h6>
                  <ul>
                      <li>Investors Sourcing</li>
                      <li>Funding Pitch Presentations</li>
                      <li>Fundraising Consultation</li>
                  </ul>
              </div>
          </div>
      </div>
      
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Add Bootstrap JS and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
  
  <!-- Initialize Tooltip -->
  <script>
    // Enable tooltips globally (initializes all tooltips on the page)
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    });
  
    // Trigger modal on hover
    var financeLink = document.getElementById('financeLink');
    var financeModal = new bootstrap.Modal(document.getElementById('financeModal'));
  
    financeLink.addEventListener('mouseenter', function() {
      financeModal.show(); // Show the modal when hovered
    });
  
    financeLink.addEventListener('mouseleave', function() {
      financeModal.hide(); // Hide the modal when the cursor leaves
    });
  </script>
  
  
   
  
   
  </div>
  </nav>
  
  
  
    
  </div>
  </div>
  