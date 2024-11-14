<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Navbar</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#" style="color: black; margin-left: 5%;">
      <h1>fiverr .</h1>
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
 <!-- Link to Open Modal -->
<a class="nav-link" href="#" style="color: #444;" data-bs-toggle="modal" data-bs-target="#graphicsDesignModal">
  Graphics & Design
</a>

<!-- Modal Structure -->
<div class="modal fade" id="graphicsDesignModal" tabindex="-1" aria-labelledby="graphicsDesignModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="graphicsDesignModalLabel">Graphics & Design</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <h6>Logo & Brand Identity</h6>
      <ul>
        <li>Logo Design</li>
        <li>Brand Style Guides</li>
        <li>Business Cards & Stationery</li>
        <li>Fonts & Typography</li>
        <li>Logo Maker Tool</li>
      </ul>

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

      <!-- Add more sections as needed -->
      <h6>Miscellaneous</h6>
      <ul>
        <li>Design Advice</li>
      </ul>

      <h6>Web & App Design</h6>
      <ul>
        <li>Website Design</li>
        <li>App Design</li>
        <li>UX Design</li>
        <li>Landing Page Design</li>
        <li>Icon Design</li>
      </ul>

      <!-- Repeat for other categories -->
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>


<a class="nav-link" href="#" style="color:  #444;">Programming & Tech</a>





  <a class="nav-link" href="#" style="color:  #444;">Digital Marketing</a>
  <a class="nav-link" href="#" style="color:  #444;">Video & Animation</a>
  <a class="nav-link" href="#" style="color:  #444;">Writing & Translation</a>
  <a class="nav-link" href="#" style="color:  #444;">Music & Audio</a>
  <a class="nav-link" href="#" style="color:  #444;">Business</a>
  <a class="nav-link" href="#" style="color:  #444;">Finance</a>
  <a class="nav-link" href="#" style="color:  #444;">AI Services</a>
  <a class="nav-link" href="#" style="color:  #444;">Personal Growth</a>
</nav>






<!-- Bootstrap JS and Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
