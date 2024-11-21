@extends('fiverr.layouts.app')
@section('content')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


<hr>

<div class="card border mb-0" style="width: 90%; margin: auto;">
    <div class="card-header card-header-bordered">
      <h3 class="card-title">Programming Languages Slider</h3>
    </div>
    <div class="card-body">
      <p class="text-muted">Scroll through the programming languages below.</p>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <!-- Slider items -->
          <div class="swiper-slide">
            <div class="card text-center rounded-pill" style="width: 200px; padding: 10px;">
              <div class="card-body">
                <h4 class="card-title">Python</h4>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card text-center rounded-pill" style="width: 200px; padding: 10px;">
              <div class="card-body">
                <h4 class="card-title">JavaScript</h4>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card text-center rounded-pill" style="width: 200px; padding: 10px;">
              <div class="card-body">
                <h4 class="card-title">Java</h4>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card text-center rounded-pill" style="width: 200px; padding: 10px;">
              <div class="card-body">
                <h4 class="card-title">C++</h4>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card text-center rounded-pill" style="width: 200px; padding: 10px;">
              <div class="card-body">
                <h4 class="card-title">Ruby</h4>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card text-center rounded-pill" style="width: 200px; padding: 10px;">
              <div class="card-body">
                <h4 class="card-title">PHP</h4>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="card text-center rounded-pill" style="width: 200px; padding: 10px;">
              <div class="card-body">
                <h4 class="card-title">Swift</h4>
              </div>
            </div>
          </div>
        </div>
        <!-- Navigation buttons -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </div>
  
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 'auto',  // Shows multiple slides at once
      spaceBetween: 20,  // Space between slides
      loop: true,  // Infinite loop of slides
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
  
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<style>
  .swiper-container {
    width: 100%;
    overflow: hidden;
  }
  .swiper-wrapper {
    display: flex;
    align-items: center;
  }
  .swiper-slide {
    flex-shrink: 0;
    text-align: center;
    width: auto; /* Allow slides to size themselves */
    margin-right: 15px;
  }
  .card {
    background-color: #f8f9fa;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    border-radius: 50px; /* Pill shape */
    border: 1px solid #ddd;
  }
  .card-body {
    padding: 15px;
  }
</style>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Initialize Swiper
    const swiper = new Swiper('.swiper-container', {
      loop: true,
      slidesPerView: 'auto', // Show multiple slides in one line
      spaceBetween: 15, // Spacing between slides
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  });
</script><br>



<div class="container">
    <div class="row">
      <!-- Dropdown 1 -->
      <div class="col">
        <div class="dropdown" style="margin-top: 10px">
          <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Service Option
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <button class="dropdown-item" type="button">Action 1</button>
            <button class="dropdown-item" type="button">Another action</button>
            <button class="dropdown-item" type="button">Something else here</button>
          </div>
        </div>
      </div>
  
      <!-- Dropdown 2 -->
      <div class="col">
        <div class="dropdown" style="margin-top: 10px">
          <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Seller details
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <button class="dropdown-item" type="button">Action 2</button>
            <button class="dropdown-item" type="button">Another action</button>
            <button class="dropdown-item" type="button">Something else here</button>
          </div>
        </div>
      </div>
  
      <!-- Dropdown 3 -->
      <div class="col">
        <div class="dropdown" style="margin-top: 10px">
          <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Budget
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu3">
            <button class="dropdown-item" type="button">Action 3</button>
            <button class="dropdown-item" type="button">Another action</button>
            <button class="dropdown-item" type="button">Something else here</button>
          </div>
        </div>
      </div>
  
      <!-- Dropdown 4 -->
      <div class="col">
        <div class="dropdown" style="margin-top: 10px">
          <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Delivery Time
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu4">
            <button class="dropdown-item" type="button">Action 4</button>
            <button class="dropdown-item" type="button">Another action</button>
            <button class="dropdown-item" type="button">Something else here</button>
          </div>
        </div>
      </div>
    </div>
  </div>



<div class="container my-4">
    <h4 style="margin-right: 70%;">Get inspired by work done on Fiverr</h4>
    
    <div class="row gy-4" id="card-container">
      <!-- Cards will be dynamically inserted here -->
    </div>
  </div>
  <!-- Modal for Enlarged Image -->
  <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Work Example</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="" alt="Enlarged Work Example" class="img-fluid" id="modal-image">
        </div>
      </div>
    </div>
  </div>
  
  <style>
  /* Glow/Blow Effect */
  .card-img-click {
    transition: transform 0.3s, box-shadow 0.3s;
    cursor: pointer;
  }
  .card-img-click:hover {
    transform: scale(1.05);
    box-shadow: 0 0 20px rgba(255, 105, 180, 0.6);
  }
  
  /* Favorite Icon */
  .favorite-icon {
    background-color: rgba(0, 0, 0, 0.6);
    padding: 5px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 35px;
    height: 35px;
  }
  
  /* On Hover Card Shadow */
  .card:hover {
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    transform: scale(1.02);
    transition: all 0.3s;
  }
  </style>
  
  
  <script>
  
    // Updated Card Data Array with Variety
    const cardData = [
      {
        title: "Creative Design",
        description: "A stunning example of innovative design on Fiverr.",
        image: "https://as1.ftcdn.net/v2/jpg/03/17/21/94/1000_F_317219421_P8SmLPcqLYQERb3bcctIQD9grBU5wbYC.jpg",
      },
      {
        title: "Elegant Artwork",
        description: "This work showcases elegance and creativity.",
        image: "https://as2.ftcdn.net/v2/jpg/05/21/18/03/1000_F_521180377_2iAVJqBQSo3cgKaVp8vMBR8asrC61DoU.jpg",
      },
      {
        title: "Modern Aesthetic",
        description: "A perfect blend of modern and aesthetic design.",
        image: "https://as1.ftcdn.net/v2/jpg/08/16/84/86/1000_F_816848616_3UwkYUsC5ngoKyfwEeeI5jKbdKe1pMdW.jpg",
      },
      {
        title: "Brand Identity",
        description: "Crafting a complete visual identity for businesses.",
        image: "https://as2.ftcdn.net/v2/jpg/02/35/12/45/1000_F_235124507_jn7ZqKaBrJn0LsRb4NoFbnpfHnjSxM3v.jpg",
      },
      {
        title: "Typography Design",
        description: "Creative typography for impactful communication.",
        image: "https://as1.ftcdn.net/v2/jpg/05/62/45/19/1000_F_562451976_Kb3YP6SlPXXVRJ5zSyZeqokvWzWx5ruP.jpg",
      },
      {
        title: "Digital Illustration",
        description: "A vibrant and imaginative digital illustration.",
        image: "https://as1.ftcdn.net/v2/jpg/03/72/87/44/1000_F_372874490_rdxUsRYACjeRwnhxwV2yfIV57NpPOuoX.jpg",
      },
    ];
    
  
    // Generate Cards Dynamically
    const cardContainer = document.getElementById("card-container");
    cardContainer.innerHTML = ""; // Clear existing cards
    cardData.forEach((card) => {
      const cardElement = `
        <div class="col-md-6 col-lg-4">
          <div class="card border shadow-sm position-relative" style="border-radius: 10px; overflow: hidden;">
            <img 
              src="${card.image}" 
              loading="lazy" 
              class="card-img-top card-img-click" 
              alt="${card.title}" 
              style="height: 300px; object-fit: cover; width: 100%;" 
              onclick="openImageModal('${card.image}')">
            
            <div class="favorite-icon position-absolute top-0 end-0 m-2">
              <i class="bi bi-heart text-white fs-4" onclick="toggleFavorite(this)" style="cursor: pointer;"></i>
            </div>
  
            <div class="card-body">
              <h5 class="card-title">${card.title}</h5>
              <p class="card-text text-muted">${card.description}</p>
            </div>
          </div>
        </div>
      `;
      cardContainer.innerHTML += cardElement;
    });
  
    // Toggle Favorite State
    function toggleFavorite(icon) {
      icon.classList.toggle("bi-heart");
      icon.classList.toggle("bi-heart-fill");
      icon.classList.contains("bi-heart-fill")
        ? alert("Added to Favorites!")
        : alert("Removed from Favorites!");
    }
  
    // Open Modal with Enlarged Image
    function openImageModal(imageSrc) {
      const modalImage = document.getElementById("modal-image");
      modalImage.src = imageSrc;
      const imageModal = new bootstrap.Modal(document.getElementById("imageModal"));
      imageModal.show();
    }
  </script>
  

  <!-- jQuery -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <!-- Popper.js -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <!-- Bootstrap JS -->
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection