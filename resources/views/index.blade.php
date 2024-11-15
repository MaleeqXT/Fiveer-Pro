<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fiveer Buying</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap CSS & JS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- CSS for icon circle and button positioning -->
<style>
  .icon-circle {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color: #020f06; /* Blue background */
    color: white;
    margin-right: 10px;
    font-size: 16px;
  }

  .card-body {
    padding: 20px;
  }

  /* Flexbox setup for the card body */
  .d-flex {
    display: flex;
    align-items: center;
    justify-content: space-between; /* Positions text on the left and button on the right */
  }

  .get-started-btn {
    margin-left: 20px; /* Space between text and button */
  }

  .btn-outline-primary {
    border-color: #007bff;
    color: #007bff;
  }

  .btn-outline-primary:hover {
    background-color: #007bff;
    color: white;
  }

  .btn-primary {
    background-color: #007bff;
    color: white;
  }

  .btn-primary:hover {
    background-color: #0056b3;
  }

  .rich-list {
      max-height: 250px; /* Limit the height of the list */
      overflow-y: auto; /* Scroll if content overflows */
  }

  .rich-list-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px;
  }

  .rich-list-prepend {
      margin-right: 10px;
  }

  .rich-list-content {
      flex-grow: 1;
  }

  .rich-list-title {
      font-weight: bold;
      font-size: 16px;
  }

  .rich-list-subtitle {
      font-size: 14px;
  }

  .rich-list-append {
      font-size: 14px;
  }


    /* Style for previous and next buttons */
  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    background-color: black; /* Set the arrow background color to white */
    border-radius: 50%; /* Make it circular */
    width: 40px; /* Adjust the size */
    height: 40px;
  }

  /* Optional: Add a black border around the arrows for visibility */
  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    border: 2px solid black; /* Black border for better contrast */
  }

  /* Change the arrow inside to black */
  .carousel-control-prev-icon::before,
  .carousel-control-next-icon::before {
    color: black; /* Make the inner arrow black */
    font-size: 20px; /* Adjust the arrow size */
  }


  <!-- CSS for Styling -->

  .card {
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      border: 1px solid #e0e0e0;
  }

  .card-title {
      font-size: 18px;
      font-weight: bold;
  }

  .card-img-top {
      border-bottom: 1px solid #f0f0f0;
  }

  .btn-outline-primary {
      font-size: 12px;
      padding: 4px 12px;
  }

  .icon-circle {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background-color: #030304; /* Blue background for icons */
      color: white;
      font-size: 18px;
      margin-right: 10px;
  }

  .rich-list {
      padding: 0;
      list-style: none;
  }

  .rich-list-item {
      display: flex;
      align-items: center;
      padding: 10px 0;
      border-bottom: 1px solid #ddd;
  }

  .rich-list-prepend {
      margin-right: 15px;
  }

  .rich-list-content {
      flex-grow: 1;
  }

  .rich-list-title {
      font-size: 16px;
      font-weight: bold;
      margin: 0;
  }

  .rich-list-append {
      display: flex;
      align-items: center;
  }

  .badge-primary {
      background-color: #000000;
      color: white;
      border-radius: 12px;
      padding: 5px 10px;
      font-size: 12px;
  }

</style>




</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#" style="color: black; margin-left: 5%;">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

      <h1 style="font-family: 'Poppins', sans-serif;">Fiverr <span style="color: green;">.<span></h1>
          </a>
    <!-- Toggle button for mobile view -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <!-- Centered Search Form -->
      <form class="d-flex mx-auto" style="width: 65%;">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <!-- Right-side icons and links -->
      <ul class="navbar-nav ms-auto" style="margin-right: 10%;">
        <!-- Notification -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">
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
          <a class="nav-link" href="#">
            <i class="fas fa-heart" style="color: black;"></i> 
          </a>
        </li>
        <!-- Order -->
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: black;">Order</a>
        </li>
        <!-- Switch to Selling -->
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: green;">Switch to Selling</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<hr>

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


 <!-- Background image -->
         <!-- Background image -->
<div
class="p-5 text-center bg-image"
style="
  background-image: url('https://e1.pxfuel.com/desktop-wallpaper/435/260/desktop-wallpaper-create-loopable-logo-motion-by-justinthomas209-fiverr.jpg');
  height: 400px;
  margin-top: 30px;
  position: relative;
"
> 
<!--The content of the image section (optional) -->
<div class="d-flex justify-content-center align-items-center h-100">
  <div class="text-white">
  </div>
</div>
<!-- Include Font Awesome (If not included already) -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<!-- Cards placed on the bottom of the image -->
<div class="row" style="position: absolute; bottom: 0; left: 0; width: 100%; padding: 20px;">
  <!-- First Card -->
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title text-muted">
          RECOMMENDED FOR YOU
        </h3>
      </div>
      <div class="card-body">
        <!-- Flexbox container for text and button -->
        <div class="d-flex align-items-center justify-content-between">
          <!-- Icon and text on the left -->
          <p class="text-muted mb-0 d-flex align-items-center">
            <span class="icon-circle">
              <i class="fas fa-pencil-alt"></i>
            </span>
            Post a project brief Beta <br> Get Offer for your needs
          </p>
          <!-- Button on the right -->
          <button class="btn btn-outline-dark get-started-btn">Get Started</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Second Card -->
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title text-muted" style="font-family: Arial, sans-serif;">
          RECOMMENDED FOR YOU
        </h3>
      </div>
      <div class="card-body">
        <!-- Flexbox container for text and button -->
        <div class="d-flex align-items-center justify-content-between">
          <!-- Icon and text on the left -->
          <p class="text-muted mb-0 d-flex align-items-center">
            <span class="icon-circle">
              <i class="fas fa-briefcase"></i>
            </span>
            Tailor Fiveer to your needs
            <br>
            Tell us more About Your Bussniess 
          </p>
          <!-- Button on the right -->
          <button class="btn btn-outline-dark ">Get Started</button>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br><br><br> <br>


{{-- center wala code --}}

<div class="card" style="width: 300px; float: left; margin-right: 20px;">
  <div class="card-header card-header-bordered">
      <h3 class="card-title">Browsing History</h3>
  </div>
  <div class="card-body">
      <div class="rich-list rich-list-bordered rich-list-action">
          <!-- First Item -->
          <div class="rich-list-item">
              <div class="rich-list-prepend">
                  <!-- Circle Icon -->
                  <div class="icon-circle">
                      <i class="fas fa-compass"></i>
                  </div>
              </div>
              <div class="rich-list-content">
                  <h4 class="rich-list-title">Keep Exploring</h4>
              </div>
              <div class="rich-list-append">
                  <i class="mdi mdi-chevron-right fs-16 mx-2"></i>
              </div>
          </div>

          <!-- Second Item -->
          <div class="rich-list-item">
              <div class="rich-list-prepend">
                  <!-- Circle Icon -->
                  <div class="icon-circle">
                      <i class="fas fa-laptop-code"></i>
                  </div>
              </div>
              <div class="rich-list-content">
                  <h4 class="rich-list-title">Software Development</h4>
              </div>

              <div class="rich-list-append">
                  <span class="badge badge-primary">new</span>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="col">
 
  <!-- Small Cards Section -->
  <div class="d-flex justify-content-between">
      <!-- Small Card 1 -->
      <div class="card" style="width: 30%; border-radius: 10px; overflow: hidden;">
          <img src="https://media.istockphoto.com/id/589538028/photo/manali-town.jpg?s=2048x2048&w=is&k=20&c=16NUhEO0f1m0danaOsxRIU4x9iCHshjT2keQtxJ6zJ0=" alt="Small Card Image" class="card-img-top" style="height: 100px; object-fit: cover;">
          <div class="card-body text-center">
              <h6 class="mb-1">Laravel Expert With Responsive</h6>
              <p class="text-muted mb-1">$1500</p>
              <h6></h6>
              <button class="btn btn-sm btn-outline-dark">View</button>
          </div>
      </div>
      <!-- Small Card 2 -->
      <div class="card" style="width: 30%; border-radius: 10px; overflow: hidden;">
          <img src="https://media.istockphoto.com/id/1284671318/photo/meadows-in-the-snow-peak-mountains-of-himalaya.jpg?s=2048x2048&w=is&k=20&c=zIibFUP3rnibsoKPWtD4y7ChHDaKfbsVNmQtd6ci9R0=" alt="Small Card Image" class="card-img-top" style="height: 100px; object-fit: cover;">
          <div class="card-body text-center">
              <h6 class="mb-1">Python Expert With Responsive</h6>
              <p class="text-muted mb-1">$1800</p>
              <button class="btn btn-sm btn-outline-dark">View</button>
          </div>
      </div>
      <!-- Small Card 3 -->
      <div class="card" style="width: 30%; border-radius: 30px; overflow: hidden;">
          <img src="https://media.istockphoto.com/id/844226534/photo/leaf-background.jpg?s=2048x2048&w=is&k=20&c=SuFwCpxv6ALde15whmnrtQ42SpuC09aLLwUI2pE5uMM=" alt="Small Card Image" class="card-img-top" style="height: 100px; object-fit: cover;">
          <div class="card-body text-center">
              <h6 class="mb-1">React And C++ Expert</h6>
              <p class="text-muted mb-1">$2000</p>
              <button class="btn btn-sm btn-outline-dark">View</button>
          </div>
      </div>
  </div>
</div>



<br> <br>
<h2>Gig May you like</h2>
<!-- Bootstrap Carousel Slider -->
<div id="cardCarousel" class="carousel slide" data-bs-ride="carousel">
  <!-- Carousel Indicators -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#cardCarousel" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#cardCarousel" data-bs-slide-to="1"></button>
  </div>

  <!-- Carousel Items -->
  <div class="carousel-inner">
    <!-- Slide 1 -->
    <div class="carousel-item active">
      <div class="d-flex justify-content-between">
        <!-- Small Card 1 -->
        <div class="card" style="width: 30%; border-radius: 10px; overflow: hidden;">
          <img src="https://media.istockphoto.com/id/589538028/photo/manali-town.jpg?s=2048x2048&w=is&k=20&c=16NUhEO0f1m0danaOsxRIU4x9iCHshjT2keQtxJ6zJ0=" alt="Small Card Image" class="card-img-top" style="height: 100px; object-fit: cover;">
          <div class="card-body text-center">
            <h6 class="mb-1">Laravel Expert With Responsive</h6>
            <p class="text-muted mb-1">$1500</p>
            <button class="btn btn-sm btn-outline-dark">View</button>
          </div>
        </div>
        <!-- Small Card 2 -->
        <div class="card" style="width: 30%; border-radius: 10px; overflow: hidden;">
          <img src="https://media.istockphoto.com/id/1284671318/photo/meadows-in-the-snow-peak-mountains-of-himalaya.jpg?s=2048x2048&w=is&k=20&c=zIibFUP3rnibsoKPWtD4y7ChHDaKfbsVNmQtd6ci9R0=" alt="Small Card Image" class="card-img-top" style="height: 100px; object-fit: cover;">
          <div class="card-body text-center">
            <h6 class="mb-1">Python Expert With Responsive</h6>
            <p class="text-muted mb-1">$1800</p>
            <button class="btn btn-sm btn-outline-dark">View</button>
          </div>
        </div>
        <!-- Small Card 3 -->
        <div class="card" style="width: 30%; border-radius: 10px; overflow: hidden;">
          <img src="https://media.istockphoto.com/id/844226534/photo/leaf-background.jpg?s=2048x2048&w=is&k=20&c=SuFwCpxv6ALde15whmnrtQ42SpuC09aLLwUI2pE5uMM=" alt="Small Card Image" class="card-img-top" style="height: 100px; object-fit: cover;">
          <div class="card-body text-center">
            <h6 class="mb-1">React And C++ Expert</h6>
            <p class="text-muted mb-1">$2000</p>
            <button class="btn btn-sm btn-outline-dark">View</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Slide 2 -->
    <div class="carousel-item">
      <div class="d-flex justify-content-between">
        <!-- Small Card 4 -->
        <div class="card" style="width: 30%; border-radius: 10px; overflow: hidden;">
          <img src="https://images.pexels.com/photos/417074/pexels-photo-417074.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Small Card Image" class="card-img-top" style="height: 100px; object-fit: cover;">
          <div class="card-body text-center">
            <h6 class="mb-1">Web Design Specialist</h6>
            <p class="text-muted mb-1">$1200</p>
            <button class="btn btn-sm btn-outline-dark">View</button>
          </div>
        </div>
        <!-- Small Card 5 -->
        <div class="card" style="width: 30%; border-radius: 10px; overflow: hidden;">
          <img src="https://images.pexels.com/photos/206359/pexels-photo-206359.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Small Card Image" class="card-img-top" style="height: 100px; object-fit: cover;">
          <div class="card-body text-center">
            <h6 class="mb-1">SEO Optimization Expert</h6>
            <p class="text-muted mb-1">$1000</p>
            <button class="btn btn-sm btn-outline-dark">View</button>
          </div>
        </div>
        <!-- Small Card 6 -->
        <div class="card" style="width: 30%; border-radius: 10px; overflow: hidden;">
          <img src="https://images.pexels.com/photos/346529/pexels-photo-346529.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Small Card Image" class="card-img-top" style="height: 100px; object-fit: cover;">
          <div class="card-body text-center">
            <h6 class="mb-1">Mobile App Developer</h6>
            <p class="text-muted mb-1">$1700</p>
            <button class="btn btn-sm btn-outline-dark">View</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Carousel Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br> <br>





<hr>
<div class="container mt-5">
  <div class="row">
      <div class="col-md-3">
          <h5>Categories</h5>
          <ul class="list-unstyled">
              <li>Graphics & Design</li>
              <li>Digital Marketing</li>
              <li>Writing & Translation</li>
              <li>Video & Animation</li>
              <li>Music & Audio</li>
              <li>Programming & Tech</li>
              <li>AI Services</li>
              <li>Consulting</li>
              <li>Data</li>
              <li>Business</li>
              <li>Personal Growth & Hobbies</li>
              <li>Photography</li>
              <li>Finance</li>
              <li>End-to-End Projects</li>
              <li>Service Catalog</li>
          </ul>
      </div>
      <div class="col-md-3">
          <h5>For Clients</h5>
          <ul class="list-unstyled">
              <li>How Fiverr Works</li>
              <li>Customer Success Stories</li>
              <li>Trust & Safety</li>
              <li>Quality Guide</li>
              <li>Fiverr Learn</li>
              <li>Online Courses</li>
              <li>Fiverr Guides</li>
              <li>Fiverr Answers</li>
          </ul>
      </div>
      <div class="col-md-3">
          <h5>For Freelancers</h5>
          <ul class="list-unstyled">
              <li>Become a Fiverr Freelancer</li>
              <li>Become an Agency</li>
              <li>Kickstart</li>
              <li>Community Hub</li>
              <li>Forum</li>
              <li>Events</li>
          </ul>
          <h5 class="mt-4">Business Solutions</h5>
          <ul class="list-unstyled">
              <li>Fiverr Pro</li>
              <li>Project Management Service</li>
              <li>ClearVoice</li>
              <li>Content Marketing</li>
              <li>Working Not Working</li>
              <li>Creative Talent</li>
              <li>AutoDS</li>
              <li>Dropshipping Tool</li>
              <li>Fiverr Logo Maker</li>
              <li>Contact Sales</li>
          </ul>
      </div>
      <div class="col-md-3">
          <h5>Company</h5>
          <ul class="list-unstyled">
              <li>About Fiverr</li>
              <li>Help & Support</li>
              <li>Social Impact</li>
              <li>Careers</li>
              <li>Terms of Service</li>
              <li>Privacy Policy</li>
              <li>Partnerships</li>
              <li>Creator Network</li>
              <li>Affiliates</li>
              <li>Invite a Friend</li>
              <li>Press & News</li>
              <li>Investor Relations</li>
          </ul>
      </div>
  </div>
</div>



<!-- Bootstrap JS and Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>



</body>
</html>





