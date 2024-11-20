
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
            <h6 class="mb-1">LaravelExpert With Responsive</h6>
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

<div class="row">
  <div class="card">
    <div class="card-body" style="background-color: #f8f9fa;">
      <h5 class="text-muted">Verified Pro services in Website Development</h5>

      <!-- Show All Link -->
      <div class="d-flex justify-content-end">
        <a href="{{route('websites.index')}}" class="show-all-link" style="text-decoration: none; color: #1e9755; font-weight: bold; font-size: 1rem; margin-bottom:10px;">Show All</a>
      </div>

      <div class="d-flex" style="gap: 10px; overflow-x: auto; white-space: nowrap; padding: 10px;">
        <!-- Card 1 -->
        <div class="card" style="width: 30%; border-radius: 10px; overflow: hidden; flex-shrink: 0;">
          <img src="https://as1.ftcdn.net/v2/jpg/05/50/34/90/1000_F_550349037_ukIvmE453JLLZtreKxg4LoH96WHemUpn.jpg" alt="Small Card Image" class="card-img-top" style="height: 150px; object-fit: cover;">
          <div class="card-body text-center">
            <h6 class="mb-1">SEO Optimization Expert</h6>
            <p class="text-muted mb-1">$1000</p>
            <button class="btn btn-sm btn-outline-dark">View</button>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="card" style="width: 30%; border-radius: 10px; overflow: hidden; flex-shrink: 0;">
          <img src="https://images4.alphacoders.com/715/71578.jpg" alt="Small Card Image" class="card-img-top" style="height: 150px; object-fit: cover;">
          <div class="card-body text-center">
            <h6 class="mb-1">SEO Optimization Expert</h6>
            <p class="text-muted mb-1">$1000</p>
            <button class="btn btn-sm btn-outline-dark">View</button>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="card" style="width: 30%; border-radius: 10px; overflow: hidden; flex-shrink: 0;">
          <img src="https://media.istockphoto.com/id/1696167872/photo/aerial-view-of-forest-at-sunset-on-the-background-of-mountains-in-dolomites.jpg?s=2048x2048&w=is&k=20&c=uLAmWeg4couEsq_U62PY4mfUnM7Zut1RxGYDHhqYCNs=" alt="Small Card Image" class="card-img-top" style="height: 150px; object-fit: cover;">
          <div class="card-body text-center">
            <h6 class="mb-1">SEO Optimization Expert</h6>
            <p class="text-muted mb-1">$1000</p>
            <button class="btn btn-sm btn-outline-dark">View</button>
          </div>
        </div>
        <!-- Card 4 -->
        <div class="card" style="width: 30%; border-radius: 10px; overflow: hidden; flex-shrink: 0;">
          <img src="https://asset.gecdesigns.com/img/wallpapers/beautiful-fantasy-wallpaper-ultra-hd-wallpaper-4k-sr10012418-1706506236698-cover.webp" alt="Small Card Image" class="card-img-top" style="height: 150px; object-fit: cover;">
          <div class="card-body text-center">
            <h6 class="mb-1">SEO Optimization Expert</h6>
            <p class="text-muted mb-1">$1000</p>
            <button class="btn btn-sm btn-outline-dark">View</button>
          </div>
        </div>
        
        <!-- Card 5 -->
        <div class="card" style="width: 30%; border-radius: 10px; overflow: hidden; flex-shrink: 0;">
          <img src="https://play-lh.googleusercontent.com/61ReOB6_mNLrZ8aGGsrFQcxU0pPVfAxSOv4x3w_GZizO7D6LsyNpCz23iGXqoUwi9vQ=w3840-h2160-rw" alt="Small Card Image" class="card-img-top" style="height: 150px; object-fit: cover;">
          <div class="card-body text-center">
            <h6 class="mb-1">SEO Optimization Expert</h6>
            <p class="text-muted mb-1">$1000</p>
            <button class="btn btn-sm btn-outline-dark">View</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<style>
  .show-all-link {
  transition: color 0.3s ease, transform 0.3s ease;
}

.show-all-link:hover {
  color: #4798ef;  /* Darker blue on hover */
  transform: scale(1.1);  /* Slightly scale up the text */
}

  </style>

<br> <br>
<div class="container my-4">
  <h4 style="margin-right: 70%;">Get inspired by work done on Fiverr</h4>
  <!-- Show All Link -->
<div class="d-flex justify-content-end">
  <a href="{{ route('websites.inspired')}}" class="show-all-link" style="text-decoration: none; color: #1e9755; font-weight: bold; font-size: 1rem; margin-bottom:10px;">Show All</a>
</div>
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



<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

@endsection











