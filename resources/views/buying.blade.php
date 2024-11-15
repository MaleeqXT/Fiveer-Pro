
@extends('fiverr.layouts.app')
@section('content')

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
          <img src="https://media.istockphoto.com/id/589538028/photo/manali-town.jpg?s=2048x2048&w=is&k=20&c=16NUhEO0f1m0danaOsxRIU4x9iCHshjT2keQtxJ6zJ0=" alt="Small Card Image" class="card-img-top" style="height: 150px; object-fit: cover;">
          <div class="card-body text-center">
            <h6 class="mb-1">Laravel Expert With Responsive</h6>
            <p class="text-muted mb-1">$1500</p>
            <button class="btn btn-sm btn-outline-dark">View</button>
          </div>
        </div>
        <!-- Small Card 2 -->
        <div class="card" style="width: 30%; border-radius: 10px; overflow: hidden;">
          <img src="https://media.istockphoto.com/id/1284671318/photo/meadows-in-the-snow-peak-mountains-of-himalaya.jpg?s=2048x2048&w=is&k=20&c=zIibFUP3rnibsoKPWtD4y7ChHDaKfbsVNmQtd6ci9R0=" alt="Small Card Image" class="card-img-top" style="height: 150px; object-fit: cover;">
          <div class="card-body text-center">
            <h6 class="mb-1">Python Expert With Responsive</h6>
            <p class="text-muted mb-1">$1800</p>
            <button class="btn btn-sm btn-outline-dark">View</button>
          </div>
        </div>
        <!-- Small Card 3 -->
        <div class="card" style="width: 30%; border-radius: 10px; overflow: hidden;">
          <img src="https://media.istockphoto.com/id/844226534/photo/leaf-background.jpg?s=2048x2048&w=is&k=20&c=SuFwCpxv6ALde15whmnrtQ42SpuC09aLLwUI2pE5uMM=" alt="Small Card Image" class="card-img-top" style="height: 150px; object-fit: cover;">
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
          <img src="https://images.pexels.com/photos/417074/pexels-photo-417074.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Small Card Image" class="card-img-top" style="height: 150px; object-fit: cover;">
          <div class="card-body text-center">
            <h6 class="mb-1">Web Design Specialist</h6>
            <p class="text-muted mb-1">$1200</p>
            <button class="btn btn-sm btn-outline-dark">View</button>
          </div>
        </div>
        <!-- Small Card 5 -->
        <div class="card" style="width: 30%; border-radius: 10px; overflow: hidden;">
          <img src="https://images.pexels.com/photos/206359/pexels-photo-206359.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Small Card Image" class="card-img-top" style="height: 150px; object-fit: cover;">
          <div class="card-body text-center">
            <h6 class="mb-1">SEO Optimization Expert</h6>
            <p class="text-muted mb-1">$1000</p>
            <button class="btn btn-sm btn-outline-dark">View</button>
          </div>
        </div>
        <!-- Small Card 6 -->
        <div class="card" style="width: 30%; border-radius: 10px; overflow: hidden;">
          <img src="https://images.pexels.com/photos/346529/pexels-photo-346529.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Small Card Image" class="card-img-top" style="height: 150px; object-fit: cover;">
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


@endsection











