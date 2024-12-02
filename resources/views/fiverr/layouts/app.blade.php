<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Fiverr')</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  
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
    <!-- Header -->
    @include('fiverr.layouts.header')
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <!-- Main Content -->
        @yield('content')

  


      <!-- Footer -->
      @include('fiverr.layouts.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
