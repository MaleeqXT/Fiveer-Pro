<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fiverr Navbar</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- FontAwesome CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    /* Custom styles for buttons with hover effect */
    .btn-custom {
      background-color: white;
      color: black;
      border: 1px solid transparent;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    .btn-custom:hover {
      background-color: #f8f9fa; /* Light hover background */
      color: black; /* Maintain black text */
      border-color: transparent; /* No border on hover */
    }
  </style>
</head>
<body>

  <!-- Navigation Bar -->
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
                <li><a class="dropdown-item" href="{{ route('websites.refer') }}"><i class="fas fa-tasks"></i> Refer a friend</a></li>
                <li><a class="dropdown-item" href="{{route('websites.setting')}}"><i class="fas fa-cog"></i> Settings</a></li>

                <li>
                  <a class="dropdown-item" href="{{route('websites.earning')}}">
                    <i class="fas fa-wallet"></i> Earnings
                  </a>
                </li>

                <li>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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

  <!-- Button to open modal -->
<button type="button" class="btn btn-white" data-toggle="modal" data-target="#designModal" style="margin-left: 70px">
  Graphics & Design
</button>

<!-- Modal -->
<div class="modal fade" id="designModal" tabindex="-1" role="dialog" aria-labelledby="designModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="designModalLabel">Graphics & Design</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <!-- Column 1 -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Logo & Brand Identity</strong></li>
                <li class="list-group-item">Logo Design</li>
                <li class="list-group-item">Brand Style Guides</li>
                <li class="list-group-item">Business Cards</li>
                <li class="list-group-item">Typography</li>
              </ul>
            </div>
            <!-- Column 2 -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Art & Illustration</strong></li>
                <li class="list-group-item">Illustration</li>
                <li class="list-group-item">AI Artists</li>
                <li class="list-group-item">Children's Book Illustration</li>
                <li class="list-group-item">Cartoons</li>
              </ul>
            </div>
            <!-- Column 3 -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Print Design</strong></li>
                <li class="list-group-item">Flyer Design</li>
                <li class="list-group-item">Brochure Design</li>
                <li class="list-group-item">Poster Design</li>
                <li class="list-group-item">Catalog Design</li>
              </ul>
            </div>
          </div>
          <div class="row mt-3">
            <!-- Column 4 -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Image Editing</strong></li>
                <li class="list-group-item">Image Editing</li>
                <li class="list-group-item">AI Editing</li>
                <li class="list-group-item">Presentation Design</li>
                <li class="list-group-item">3D Design</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Button to open modal -->
<button type="button" class="btn btn-white" data-toggle="modal" data-target="#programmingTechModal" style="margin-left: 20px">
  Programming & Tech
</button>

<!-- Modal -->
<div class="modal fade" id="programmingTechModal" tabindex="-1" role="dialog" aria-labelledby="programmingTechModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="programmingTechModalLabel">Programming & Tech</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <!-- Column 1: Website Development -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Website Development</strong></li>
                <li class="list-group-item">Business Websites</li>
                <li class="list-group-item">E-Commerce Development</li>
                <li class="list-group-item">Landing Pages</li>
                <li class="list-group-item">Dropshipping Websites</li>
                <li class="list-group-item">Build a Complete Website</li>
                <li class="list-group-item"><strong>Website Platforms</strong></li>
                <li class="list-group-item">WordPress</li>
                <li class="list-group-item">Shopify</li>
                <li class="list-group-item">Wix</li>
                <li class="list-group-item">Custom Websites</li>
                <li class="list-group-item">GoDaddy</li>
              </ul>
            </div>
            <!-- Column 2: AI Development -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>AI Development</strong></li>
                <li class="list-group-item">AI Websites & Software</li>
                <li class="list-group-item">AI Mobile Apps</li>
                <li class="list-group-item">AI Integrations</li>
                <li class="list-group-item">AI Agents</li>
                <li class="list-group-item">AI Fine-Tuning</li>
                <li class="list-group-item">AI Technology Consulting</li>
                <li class="list-group-item"><strong>Chatbot Development</strong></li>
                <li class="list-group-item">AI Chatbot</li>
                <li class="list-group-item">Rules-Based Chatbot</li>
                <li class="list-group-item">Discord</li>
                <li class="list-group-item">Telegram</li>
              </ul>
            </div>
            <!-- Column 3: Game & App Development -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Game Development</strong></li>
                <li class="list-group-item">Gameplay Experience & Feedback</li>
                <li class="list-group-item">PC Games</li>
                <li class="list-group-item">Mobile Games</li>
                <li class="list-group-item"><strong>Mobile App Development</strong></li>
                <li class="list-group-item">Cross-platform Development</li>
                <li class="list-group-item">Android App Development</li>
                <li class="list-group-item">iOS App Development</li>
                <li class="list-group-item">Website to App</li>
                <li class="list-group-item">Mobile App Maintenance</li>
                <li class="list-group-item">VR & AR Development</li>
              </ul>
            </div>
          </div>
          
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Button to open modal -->
<button type="button" class="btn btn-white" data-toggle="modal" data-target="#digitalMarketingModal" style="margin-left: 20px">
  Digital Marketing
</button>

<!-- Modal -->
<div class="modal fade" id="digitalMarketingModal" tabindex="-1" role="dialog" aria-labelledby="digitalMarketingModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="digitalMarketingModalLabel">Digital Marketing</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <!-- Column 1: Search -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Search</strong></li>
                <li class="list-group-item">Search Engine Optimization (SEO)</li>
                <li class="list-group-item">Search Engine Marketing (SEM)</li>
                <li class="list-group-item">Local SEO</li>
                <li class="list-group-item">E-Commerce SEO</li>
                <li class="list-group-item">Video SEO</li>
              </ul>
            </div>
            <!-- Column 2: Social -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Social</strong></li>
                <li class="list-group-item">Social Media Marketing</li>
                <li class="list-group-item">Paid Social Media</li>
                <li class="list-group-item">Social Commerce <span class="badge badge-primary">new</span></li>
                <li class="list-group-item">Influencer Marketing</li>
                <li class="list-group-item">Community Management</li>
              </ul>
            </div>
            <!-- Column 3: Channel Specific -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Channel Specific</strong></li>
                <li class="list-group-item">TikTok Shop</li>
                <li class="list-group-item">Facebook Ads Campaign</li>
                <li class="list-group-item">Instagram Marketing</li>
                <li class="list-group-item">Google SEM</li>
                <li class="list-group-item">Shopify Marketing</li>
              </ul>
            </div>
          </div>
          <div class="row mt-3">
            <!-- Column 4: Industry & Purpose-Specific -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Industry & Purpose-Specific</strong></li>
                <li class="list-group-item">Music Promotion</li>
                <li class="list-group-item">Podcast Marketing</li>
                <li class="list-group-item">Book & eBook Marketing</li>
                <li class="list-group-item">Mobile App Marketing</li>
              </ul>
            </div>
            <!-- Column 5: Methods & Techniques -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Methods & Techniques</strong></li>
                <li class="list-group-item">Video Marketing</li>
                <li class="list-group-item">E-Commerce Marketing</li>
                <li class="list-group-item">Email Marketing</li>
                <li class="list-group-item">Email Automations</li>
                <li class="list-group-item">Guest Posting</li>
                
              </ul>
            </div>
            <!-- Column 6: Analytics & Miscellaneous -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Analytics & Strategy</strong></li>
                <li class="list-group-item">Marketing Strategy</li>
                <li class="list-group-item">Marketing Concepts & Ideation</li>
                <li class="list-group-item">Marketing Advice</li>
                <li class="list-group-item">Web Analytics</li>
               
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Button to open modal -->
<button type="button" class="btn btn-white" data-toggle="modal" data-target="#videoAnimationModal" style="margin-left: 20px">
  Video & Animation
</button>

<!-- Modal -->
<div class="modal fade" id="videoAnimationModal" tabindex="-1" role="dialog" aria-labelledby="videoAnimationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="videoAnimationModalLabel">Video & Animation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <!-- Row 1: Editing & Post-Production -->
          <div class="row">
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Editing & Post-Production</strong></li>
                <li class="list-group-item">Video Editing</li>
                <li class="list-group-item">Visual Effects</li>
                <li class="list-group-item">Video Art <span class="badge badge-primary">new</span></li>
                <li class="list-group-item">Intro & Outro Videos</li>
                
              </ul>
            </div>
            <!-- Social & Marketing Videos -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Social & Marketing Videos</strong></li>
                <li class="list-group-item">Video Ads & Commercials</li>
                <li class="list-group-item">Social Media Videos</li>
                <li class="list-group-item">Music Videos</li>
                <li class="list-group-item">Slideshow Videos</li>
              </ul>
            </div>
            <!-- Motion Graphics -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Motion Graphics</strong></li>
                <li class="list-group-item">Logo Animation</li>
                <li class="list-group-item">Lottie & Web Animation</li>
                <li class="list-group-item">Text Animation <span class="badge badge-primary">new</span></li>
                <li class="list-group-item">Lottie & Web Animation</li>
                <li class="list-group-item">Text Animation <span class="badge badge-primary">new</span></li>
              </ul>
            </div>
          </div>
          <!-- Row 2: Presenter Videos & Animation -->
          <div class="row mt-3">
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Presenter Videos</strong></li>
                <li class="list-group-item">UGC Videos <span class="badge badge-primary">new</span></li>
                <li class="list-group-item">Spokesperson Videos</li>
                <li class="list-group-item">UGC Ads</li>
                <li class="list-group-item">TikTok UGC Videos</li>
              </ul>
            </div>
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Animation</strong></li>
                <li class="list-group-item">Character Animation</li>
                <li class="list-group-item">Animated GIFs</li>
                <li class="list-group-item">Animation for Kids</li>
             
              </ul>
            </div>
            <!-- Filmed Video Production -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Filmed Video Production</strong></li>
                <li class="list-group-item">Videographers</li>
                <li class="list-group-item">Filmed Video Production</li>
              </ul>
            </div>
          </div>
          <!-- Row 3: Explainer Videos & Product Videos -->
          <div class="row mt-3">
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Explainer Videos</strong></li>
                <li class="list-group-item">Animated Explainers</li>
                <li class="list-group-item">Live Action Explainers</li>
                <li class="list-group-item">Screencasting Videos</li>
                <li class="list-group-item">eLearning Video Production</li>
                <li class="list-group-item">Crowdfunding Videos</li>
              </ul>
            </div>
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Product Videos</strong></li>
                <li class="list-group-item">3D Product Animation</li>
                <li class="list-group-item">E-Commerce Product Videos</li>
                <li class="list-group-item">Corporate Videos</li>
                <li class="list-group-item">App & Website Previews</li>
              </ul>
            </div>
            <!-- AI Video -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>AI Video</strong></li>
                <li class="list-group-item">AI Video Art</li>
                <li class="list-group-item">AI Music Videos</li>
                <li class="list-group-item">AI Video Avatars</li>
              </ul>
            </div>
          </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>


 
<!-- Button to open modal -->
<button type="button" class="btn btn-white" data-toggle="modal" data-target="#writingTranslationModal" style="margin-left: 20px">
  Writing & Translation
</button>

<!-- Modal -->
<div class="modal fade" id="writingTranslationModal" tabindex="-1" role="dialog" aria-labelledby="writingTranslationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="writingTranslationModalLabel">Writing & Translation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <!-- Row 1: Content Writing -->
          <div class="row">
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Content Writing</strong></li>
                <li class="list-group-item">Articles & Blog Posts</li>
                <li class="list-group-item">Content Strategy <span class="badge badge-primary">new</span></li>
                <li class="list-group-item">Website Content</li>
                <li class="list-group-item">Scriptwriting</li>
                
              </ul>
            </div>
            <!-- Editing & Critique -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Editing & Critique</strong></li>
                <li class="list-group-item">Proofreading & Editing</li>
                <li class="list-group-item">AI Content Editing</li>
                <li class="list-group-item">Writing Advice</li>
              </ul>
            </div>
            <!-- Book & eBook Publishing -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Book & eBook Publishing</strong></li>
                <li class="list-group-item">Book & eBook Writing</li>
                <li class="list-group-item">Book Editing</li>
                <li class="list-group-item">Beta Reading</li>
              </ul>
            </div>
          </div>
          <!-- Row 2: Career Writing & Miscellaneous -->
          <div class="row mt-3">
            
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Miscellaneous</strong></li>
                <li class="list-group-item">eLearning Content Development</li>
                <li class="list-group-item">Technical Writing</li>
              </ul>
            </div>
            <!-- Business & Marketing Copy -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Business & Marketing Copy</strong></li>
                <li class="list-group-item">Brand Voice & Tone</li>
                <li class="list-group-item">Business Names & Slogans</li>
                <li class="list-group-item">Case Studies</li>
                <li class="list-group-item">White Papers</li>
                
              </ul>
            </div>
          </div>
          <!-- Row 3: Translation & Transcription -->
          <div class="row mt-3">
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Translation & Transcription</strong></li>
                <li class="list-group-item">Translation</li>
                <li class="list-group-item">Localization <span class="badge badge-primary">new</span></li>
                <li class="list-group-item">Transcription</li>
                <li class="list-group-item">Interpretation <span class="badge badge-primary">new</span></li>
              </ul>
            </div>
            <!-- Industry Specific Content -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Industry Specific Content</strong></li>
                <li class="list-group-item">Business, Finance & Law</li>
                <li class="list-group-item">Health & Medical</li>
                <li class="list-group-item">Internet & Technology</li>
                <li class="list-group-item">News & Politics</li>
                <li class="list-group-item">Marketing</li>
                <li class="list-group-item">Real Estate</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Button to open modal -->
<button type="button" class="btn btn-white" data-toggle="modal" data-target="#musicAudioModal" style="margin-left: 20px">
  Music & Audio
</button>

<!-- Modal -->
<div class="modal fade" id="musicAudioModal" tabindex="-1" role="dialog" aria-labelledby="musicAudioModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="musicAudioModalLabel">Music & Audio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <!-- Row 1: Music Production & Writing -->
          <div class="row">
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Music Production & Writing</strong></li>
                <li class="list-group-item">Music Producers</li>
                <li class="list-group-item">Composers</li>
                <li class="list-group-item">Singers & Vocalists</li>
                <li class="list-group-item">Session Musicians</li>
                
              </ul>
            </div>
            <!-- Audio Engineering & Post Production -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Audio Engineering & Post Production</strong></li>
                <li class="list-group-item">Mixing & Mastering</li>
                <li class="list-group-item">Audio Editing</li>
                <li class="list-group-item">Vocal Tuning</li>
                <li class="list-group-item">Voice Over & Narration</li>
                
              </ul>
            </div>
            <!-- Streaming & Audio -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Streaming & Audio</strong></li>
                <li class="list-group-item">Podcast Production</li>
                <li class="list-group-item">Audiobook Production</li>
                <li class="list-group-item">Audio Ads Production</li>
                <li class="list-group-item">Voice Synthesis & AI</li>
              </ul>
            </div>
          </div>
          <!-- Row 2: DJing & Sound Design -->
          <div class="row mt-3">
            <!-- DJing -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>DJing</strong></li>
                <li class="list-group-item">DJ Drops & Tags</li>
                <li class="list-group-item">DJ Mixing</li>
                <li class="list-group-item">Remixing</li>
              </ul>
            </div>
            <!-- Sound Design -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Sound Design</strong></li>
                <li class="list-group-item">Sound Design</li>
                <li class="list-group-item">Meditation Music</li>
                <li class="list-group-item">Audio Logo & Sonic Branding</li>
                <li class="list-group-item">Custom Patches & Samples</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Button to open modal -->
<button type="button" class="btn btn-white" data-toggle="modal" data-target="#businessModal" style="margin-left: 20px">
  Business
</button>

<!-- Modal -->
<div class="modal fade" id="businessModal" tabindex="-1" role="dialog" aria-labelledby="businessModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="businessModalLabel">Business</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <!-- Row 1: Business Formation & Consulting -->
          <div class="row">
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Business Formation & Consulting</strong></li>
                <li class="list-group-item">Business Formation & Registration <span class="badge badge-primary">new</span></li>
                <li class="list-group-item">Market Research</li>
                <li class="list-group-item">Business Plans</li>
                <li class="list-group-item">Business Consulting</li>
                <li class="list-group-item">HR Consulting</li>
                <li class="list-group-item">AI Consulting</li>
                <li class="list-group-item">Legal Services</li>
                
              </ul>
            </div>
            <!-- Operations & Management -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Operations & Management</strong></li>
                <li class="list-group-item">Virtual Assistant</li>
                <li class="list-group-item">Project Management</li>
                <li class="list-group-item">Software Management</li>
                <li class="list-group-item">E-Commerce Management</li>
                <li class="list-group-item">Supply Chain Management</li>
                <li class="list-group-item">Event Management</li>
                <li class="list-group-item">Product Management</li>
              </ul>
            </div>
            <!-- Data & Business Intelligence -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Data & Business Intelligence</strong></li>
                <li class="list-group-item">Data Visualization</li>
                <li class="list-group-item">Data Analytics</li>
                <li class="list-group-item">Data Scraping</li>
              </ul>
            </div>
          </div>
          <!-- Row 2: Sales & Customer Care and Miscellaneous -->
          <div class="row mt-3">
            <!-- Sales & Customer Care -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Sales & Customer Care</strong></li>
                <li class="list-group-item">Sales</li>
                <li class="list-group-item">Lead Generation</li>
                <li class="list-group-item">Call Center & Calling</li>
                <li class="list-group-item">Customer Care</li>
              </ul>
            </div>
            <!-- Miscellaneous -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Miscellaneous</strong></li>
                <li class="list-group-item">Presentations</li>
                <li class="list-group-item">Online Investigations</li>
                <li class="list-group-item">Sustainability Consulting</li>
                <li class="list-group-item">Game Concept Design</li>
                <li class="list-group-item">Other</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Button to open modal -->
<button type="button" class="btn btn-white" data-toggle="modal" data-target="#financeModal" style="margin-left: 20px">
  Finance
</button>

<!-- Modal -->
<div class="modal fade" id="financeModal" tabindex="-1" role="dialog" aria-labelledby="financeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="financeModalLabel">Finance</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <!-- Row 1: Accounting Services and Corporate Finance -->
          <div class="row">
            <!-- Accounting Services -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Accounting Services</strong></li>
                <li class="list-group-item">Accounting Services</li>
                <li class="list-group-item">Fractional CFO Services</li>
                <li class="list-group-item">Financial Reporting</li>
                <li class="list-group-item">Bookkeeping</li>
                <li class="list-group-item">Payroll Management</li>
                <li class="list-group-item">Find a Financial Expert</li>
              </ul>
            </div>
            <!-- Corporate Finance -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Corporate Finance</strong></li>
                <li class="list-group-item">Due Diligence</li>
                <li class="list-group-item">Valuation</li>
                <li class="list-group-item">Mergers & Acquisitions Advisory</li>
                <li class="list-group-item">Corporate Finance Strategy</li>
              </ul>
            </div>
            <!-- Tax Consulting -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Tax Consulting</strong></li>
                <li class="list-group-item">Tax Returns</li>
                <li class="list-group-item">Tax Identification Services</li>
                <li class="list-group-item">Tax Planning</li>
                <li class="list-group-item">Tax Compliance</li>
                <li class="list-group-item">Tax Exemptions</li>
              </ul>
            </div>
          </div>
          <!-- Row 2: Financial Planning & Analysis and Personal Finance -->
          <div class="row mt-3">
            <!-- Financial Planning & Analysis -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Financial Planning & Analysis</strong></li>
                <li class="list-group-item">Budgeting and Forecasting</li>
                <li class="list-group-item">Financial Modeling</li>
                <li class="list-group-item">Cost Analysis</li>
                <li class="list-group-item">Stock Analysis</li>
              </ul>
            </div>
            <!-- Personal Finance & Wealth Management -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Personal Finance & Wealth Management</strong></li>
                <li class="list-group-item">Personal Budget Management</li>
                <li class="list-group-item">Investments Advisory</li>
                <li class="list-group-item">Online Trading Lessons</li>
              </ul>
            </div>
            <!-- Fundraising -->
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item"><strong>Fundraising</strong></li>
                <li class="list-group-item">Investors Sourcing</li>
                <li class="list-group-item">Funding Pitch Presentations</li>
                <li class="list-group-item">Fundraising Consultation</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



  <!-- Optional Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
