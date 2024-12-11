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
  }
  .dropdown-content {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      z-index: 1;
      background-color: #fff;
      min-width: 160px;
      box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
  }
  .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
  }
  .dropdown-content a:hover {
      background-color: #f1f1f1;
  }
  .dropdown:hover .dropdown-content {
      display: block;
  }
  .dropdown:hover .dropbtn {
      background-color: #007BFF;
      color: white;
  }
</style>
  
   


    
  </div>
  </nav>
  
  
  
    
  </div>
  </div>
  