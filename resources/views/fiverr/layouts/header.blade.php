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
            <a class="nav-link" href="{{route('messages.inbox')}}">
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
            <a class="nav-link" href="{{route('sellers.order')}}" style="color: black;">Order</a>
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
              <li><a class="dropdown-item" href="{{route('sellers.order')}}"><i class="fas fa-box"></i> Orders</a></li>
              <li><a class="dropdown-item" href="{{ route('websites.refer') }}"><i class="fas fa-tasks"></i>Refer a friend</a></li>
              <li><a class="dropdown-item" href="{{route('websites.setting')}}"><i class="fas fa-cog"></i> Settings</a></li>

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


<style>
  .dropdown {
      display: inline-block;
      position: relative;
      margin-right: 15px;
  }

  .dropdown-content {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      z-index: 1;
      background-color: #fff;
      min-width: 180px;
      box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
      border-radius: 5px;
  }

  .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      font-family: 'Arial', sans-serif;
      transition: background-color 0.3s ease;
  }

  .dropdown-content a:hover {
      background-color: #f1f1f1;
  }

  .dropdown:hover .dropdown-content {
      display: block;
  }

  /* Unique button styles for each dropdown */
  .dropdown:nth-child(1) .dropbtn {
      background-color: #007BFF;
      color: white;
  }

  .dropdown:nth-child(2) .dropbtn {
      background-color: #28A745;
      color: white;
  }

  .dropdown:nth-child(3) .dropbtn {
      background-color: #FFC107;
      color: black;
  }

  .dropdown:nth-child(4) .dropbtn {
      background-color: #DC3545;
      color: white;
  }

  .dropdown:nth-child(5) .dropbtn {
      background-color: #6C757D;
      color: white;
  }

  .dropdown:nth-child(6) .dropbtn {
      background-color: #17A2B8;
      color: white;
  }

  .dropdown:nth-child(7) .dropbtn {
      background-color: #6610F2;
      color: white;
  }

  .dropdown:nth-child(8) .dropbtn {
      background-color: #343A40;
      color: white;
  }

  .dropdown:nth-child(9) .dropbtn {
      background-color: #FF5733;
      color: white;
  }

  .dropbtn {
      padding: 10px 20px;
      border: none;
      cursor: pointer;
      font-size: 16px;
      border-radius: 5px;
      transition: transform 0.3s ease, background-color 0.3s ease;
  }

  .dropbtn:hover {
      transform: scale(1.05);
  }

  .dropdown {
      display: inline-block;
      position: relative;
  }

  .dropdown-content {
      display: flex; /* Align items in a row */
      flex-wrap: wrap; /* Allow wrapping to the next row */
      position: absolute;
      top: 100%; /* Align dropdown below the button */
      left: 0;
      z-index: 1;
      background-color: #fff;
      padding: 15px;
      box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
      border-radius: 5px;
      display: none; /* Initially hidden */
      width: 800px; /* Set a fixed width for the dropdown */
  }

  .dropdown-content .subcategory {
      flex: 1 1 calc(33.33% - 20px); /* Items take up 1/3 of the row with space between */
      margin: 10px; /* Add spacing between items */
  }

  .subcategory h4 {
      margin-bottom: 8px;
      font-size: 16px;
      font-weight: bold;
      color: #333;
  }

  .subcategory a {
      display: block;
      text-decoration: none;
      color: #555;
      margin-bottom: 6px;
      padding: 6px 8px;
      border-radius: 4px;
      transition: background-color 0.3s ease;
  }

  .subcategory a:hover {
      background-color: #f1f1f1;
      color: #333;
  }

  .dropdown:hover .dropdown-content {
      display: flex; /* Show dropdown on hover */
  }
</style>

<div class="dropdown">
  <button class="dropbtn">Graphics & Design</button>
  <div class="dropdown-content">
      <!-- Logo & Brand Identity -->
      <div class="subcategory">
          <h4>Logo & Brand Identity</h4>
          <a href="#">Logo Design</a>
          <a href="#">Brand Style Guides</a>
          <a href="#">Business Cards & Stationery</a>
          <a href="#">Fonts & Typography</a>
          <a href="#">Logo Maker Tool</a>
      </div>
      <!-- Art & Illustration -->
      <div class="subcategory">
          <h4>Art & Illustration</h4>
          <a href="#">Illustration</a>
          <a href="#">AI Artists</a>
          <a href="#">AI Avatar Design</a>
          <a href="#">Children's Book Illustration</a>
          <a href="#">Portraits & Caricatures</a>
          <a href="#">Cartoons & Comics</a>
          <a href="#">Pattern Design</a>
          <a href="#">Tattoo Design</a>
          <a href="#">Storyboards</a>
          <a href="#">NFT Art</a>
      </div>
      <!-- Web & App Design -->
      <div class="subcategory">
          <h4>Web & App Design</h4>
          <a href="#">Website Design</a>
          <a href="#">App Design</a>
          <a href="#">UX Design</a>
          <a href="#">Landing Page Design</a>
          <a href="#">Icon Design</a>
      </div>
      <!-- Print Design -->
      <div class="subcategory">
          <h4>Print Design</h4>
          <a href="#">Flyer Design</a>
          <a href="#">Brochure Design</a>
          <a href="#">Poster Design</a>
          <a href="#">Catalog Design</a>
          <a href="#">Menu Design</a>
      </div>
      <!-- Packaging & Covers -->
      <div class="subcategory">
          <h4>Packaging & Covers</h4>
          <a href="#">Packaging & Label Design</a>
          <a href="#">Book Design</a>
          <a href="#">Book Covers</a>
          <a href="#">Album Cover Design</a>
      </div>
      <!-- 3D Design -->
      <div class="subcategory">
          <h4>3D Design</h4>
          <a href="#">3D Architecture</a>
          <a href="#">3D Industrial Design</a>
          <a href="#">3D Fashion & Garment</a>
          <a href="#">3D Printing Characters</a>
          <a href="#">3D Game Art</a>
          <a href="#">3D Jewelry Design</a>
      </div>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Programming & Tech</button>
  <div class="dropdown-content">
      <a href="#">Website Development</a>
      <ul>
          <li><a href="#">Business Websites</a></li>
          <li><a href="#">E-Commerce Development</a></li>
          <li><a href="#">Landing Pages</a></li>
          <li><a href="#">Dropshipping Websites</a></li>
          <li><a href="#">Build a Complete Website</a></li>
          <li><a href="#">Website Platforms</a></li>
              <li><a href="#">WordPress</a></li>
              <li><a href="#">Shopify</a></li>
              <li><a href="#">Wix</a></li>
              <li><a href="#">Custom Websites</a></li>
              <li><a href="#">GoDaddy</a></li>
          <li><a href="#">Website Maintenance</a></li>
          <li><a href="#">Website Customization</a></li>
          <li><a href="#">Bug Fixes</a></li>
          <li><a href="#">Backup & Migration</a></li>
          <li><a href="#">Speed Optimization</a></li>
      </ul>
      
      <a href="#">AI Development</a>
      <ul>
          <li><a href="#">AI Websites & Software</a></li>
          <li><a href="#">AI Mobile Apps</a></li>
          <li><a href="#">AI Integrations</a></li>
          <li><a href="#">AI Agents</a></li>
          <li><a href="#">AI Fine-Tuning</a></li>
          <li><a href="#">AI Technology Consulting</a></li>
          <li><a href="#">Chatbot Development</a></li>
          <li><a href="#">AI Chatbot</a></li>
          <li><a href="#">Rules Based Chatbot</a></li>
          <li><a href="#">Discord</a></li>
          <li><a href="#">Telegram</a></li>
      </ul>
      
      <a href="#">Game Development</a>
      <ul>
          <li><a href="#">Gameplay Experience & Feedback</a></li>
          <li><a href="#">PC Games</a></li>
          <li><a href="#">Mobile Games</a></li>
      </ul>
      
      <a href="#">Mobile App Development</a>
      <ul>
          <li><a href="#">Cross-platform Development</a></li>
          <li><a href="#">Android App Development</a></li>
          <li><a href="#">iOS App Development</a></li>
          <li><a href="#">Website to App</a></li>
          <li><a href="#">Mobile App Maintenance</a></li>
      </ul>
      
      <a href="#">VR & AR Development</a>
      <a href="#">Cloud & Cybersecurity</a>
      <ul>
          <li><a href="#">Cloud Computing</a></li>
          <li><a href="#">DevOps Engineering</a></li>
          <li><a href="#">Cybersecurity</a></li>
      </ul>
      
      <a href="#">Data Science & ML</a>
      <ul>
          <li><a href="#">Machine Learning</a></li>
          <li><a href="#">Computer Vision</a></li>
          <li><a href="#">NLP</a></li>
          <li><a href="#">Deep Learning</a></li>
      </ul>
      
      <a href="#">Software Development</a>
      <ul>
          <li><a href="#">Web Applications</a></li>
          <li><a href="#">Desktop Applications</a></li>
          <li><a href="#">Automations & Workflows</a></li>
          <li><a href="#">APIs & Integrations</a></li>
          <li><a href="#">Databases</a></li>
          <li><a href="#">Scripting</a></li>
          <li><a href="#">QA & Review</a></li>
          <li><a href="#">User Testing</a></li>
      </ul>
  </div>
</div>



<div class="dropdown">
  <button class="dropbtn">Digital Marketing</button>
  <div class="dropdown-content">
      <a href="#">SEO</a>
      <a href="#">Social Media Marketing</a>
      <a href="#">PPC Advertising</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Video & Animation</button>
  <div class="dropdown-content">
      <a href="#">Video Editing</a>
      <a href="#">Animation</a>
      <a href="#">Explainer Videos</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Writing & Translation</button>
  <div class="dropdown-content">
      <a href="#">Content Writing</a>
      <a href="#">Translation</a>
      <a href="#">Copywriting</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Music & Audio</button>
  <div class="dropdown-content">
      <a href="#">Music Production</a>
      <a href="#">Voiceover</a>
      <a href="#">Sound Effects</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Business</button>
  <div class="dropdown-content">
      <a href="#">Consulting</a>
      <a href="#">Market Research</a>
      <a href="#">Business Strategy</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Finance</button>
  <div class="dropdown-content">
      <a href="#">Accounting</a>
      <a href="#">Tax Services</a>
      <a href="#">Financial Planning</a>
  </div>
</div>





    
  </div>
  </nav>
  
  
  
    
  </div>
  </div>
  