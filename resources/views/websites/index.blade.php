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
</script>

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
  </div><br><br>
    <hr style="color: black;">



<div class="col">
    <!-- Small Cards Section -->
    <div class="row">
        <!-- Small Card 1 -->
        <div class="col-md-4 mb-3">
            <div class="card" style="border-radius: 10px; overflow: hidden;">
                <img src="https://media.istockphoto.com/id/589538028/photo/manali-town.jpg?s=2048x2048&w=is&k=20&c=16NUhEO0f1m0danaOsxRIU4x9iCHshjT2keQtxJ6zJ0=" alt="Small Card Image" class="card-img-top" style="height: 100px; object-fit: cover;">
                <div class="card-body text-center">
                    <h6 class="mb-1">Laravel Expert With Responsive</h6>
                    <p class="text-muted mb-1">$1500</p>
                    <button class="btn btn-sm btn-outline-dark">View</button>
                </div>
            </div>
        </div>
        <!-- Small Card 2 -->
        <div class="col-md-4 mb-3">
            <div class="card" style="border-radius: 10px; overflow: hidden;">
                <img src="https://media.istockphoto.com/id/1284671318/photo/meadows-in-the-snow-peak-mountains-of-himalaya.jpg?s=2048x2048&w=is&k=20&c=zIibFUP3rnibsoKPWtD4y7ChHDaKfbsVNmQtd6ci9R0=" alt="Small Card Image" class="card-img-top" style="height: 100px; object-fit: cover;">
                <div class="card-body text-center">
                    <h6 class="mb-1">Python Expert With Responsive</h6>
                    <p class="text-muted mb-1">$1800</p>
                    <button class="btn btn-sm btn-outline-dark">View</button>
                </div>
            </div>
        </div>
        <!-- Small Card 3 -->
        <div class="col-md-4 mb-3">
            <div class="card" style="border-radius: 30px; overflow: hidden;">
                <img src="https://media.istockphoto.com/id/844226534/photo/leaf-background.jpg?s=2048x2048&w=is&k=20&c=SuFwCpxv6ALde15whmnrtQ42SpuC09aLLwUI2pE5uMM=" alt="Small Card Image" class="card-img-top" style="height: 100px; object-fit: cover;">
                <div class="card-body text-center">
                    <h6 class="mb-1">React And C++ Expert</h6>
                    <p class="text-muted mb-1">$2000</p>
                    <button class="btn btn-sm btn-outline-dark">View</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Additional Cards -->
    <div class="row">
        <!-- Card 4 -->
        <div class="col-md-4 mb-3">
            <div class="card" style="border-radius: 30px; overflow: hidden;">
                <img src="https://media.istockphoto.com/id/844226534/photo/leaf-background.jpg?s=2048x2048&w=is&k=20&c=SuFwCpxv6ALde15whmnrtQ42SpuC09aLLwUI2pE5uMM=" alt="Small Card Image" class="card-img-top" style="height: 100px; object-fit: cover;">
                <div class="card-body text-center">
                    <h6 class="mb-1">React And C++ Expert</h6>
                    <p class="text-muted mb-1">$2000</p>
                    <button class="btn btn-sm btn-outline-dark">View</button>
                </div>
            </div>
        </div>
        <!-- Card 5 -->
        <div class="col-md-4 mb-3">
            <div class="card" style="border-radius: 30px; overflow: hidden;">
                <img src="https://media.istockphoto.com/id/844226534/photo/leaf-background.jpg?s=2048x2048&w=is&k=20&c=SuFwCpxv6ALde15whmnrtQ42SpuC09aLLwUI2pE5uMM=" alt="Small Card Image" class="card-img-top" style="height: 100px; object-fit: cover;">
                <div class="card-body text-center">
                    <h6 class="mb-1">React And C++ Expert</h6>
                    <p class="text-muted mb-1">$2000</p>
                    <button class="btn btn-sm btn-outline-dark">View</button>
                </div>
            </div>
        </div>
        <!-- Card 6 -->
        <div class="col-md-4 mb-3">
            <div class="card" style="border-radius: 30px; overflow: hidden;">
                <img src="https://media.istockphoto.com/id/844226534/photo/leaf-background.jpg?s=2048x2048&w=is&k=20&c=SuFwCpxv6ALde15whmnrtQ42SpuC09aLLwUI2pE5uMM=" alt="Small Card Image" class="card-img-top" style="height: 100px; object-fit: cover;">
                <div class="card-body text-center">
                    <h6 class="mb-1">React And C++ Expert</h6>
                    <p class="text-muted mb-1">$2000</p>
                    <button class="btn btn-sm btn-outline-dark">View</button>
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- jQuery -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <!-- Popper.js -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <!-- Bootstrap JS -->
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
