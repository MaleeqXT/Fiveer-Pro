@extends('fiverr.layouts.app')
@section('content')

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<hr>
<div class="container mt-5">
  <!-- Heading and Button Row -->

  
         
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h1>My Lists</h1>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createListModal">
              + Create a List
          </button>
        </div>
        <!-- Description -->
    <p class="text-muted mt-3">
      Organize your go-to freelancers and favorite services into custom lists you can easily access and share with your team.
    </p>

      <!-- Success Message -->
      @if(session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
      @endif

      <!-- Lists -->
      <h3>Item Lists</h3>
          <ul class="list-group">
              @foreach($itemlists as $itemlist)
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                      <div>
                          <strong>{{ $itemlist->name }}</strong><br>
                          <small>{{ $itemlist->description }}</small>
                      </div>
                  </li>
              @endforeach
          </ul>

    
       
  

   
 
   
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Create a New List</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Create a list around a project, a topic or for inspiration.</p>
          </div>
          
          <div class="modal-body">
            <form method="POST" action="{{ route('itemlists.store') }}">
              @csrf
              <div class="form-group">
                <label for="listName">List Name</label>
                <input type="text" class="form-control" name="name" id="listName" placeholder="Enter list name" required>
              </div>
              <div class="form-group">
                <label for="listDescription">Description</label>
                <textarea class="form-control" name="description" id="listDescription" rows="3" placeholder="Enter list description"></textarea>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


  


 
  <hr>
</div>

<hr>
<div class="container">
  <h3>Most popular Gigs in Website Development </h3><br>

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

  </div>
</div>




</div><br><br><br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection