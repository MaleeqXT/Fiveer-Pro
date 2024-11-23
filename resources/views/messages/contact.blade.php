@extends('fiverr.layouts.app')
@section('content')

<style>
    .contact-container {
        display: flex;
        align-items: center;
        gap: 10px; /* Space between elements */
    }

    input {
        border: none; /* Remove all borders */
        border-bottom: 2px solid #000; /* Add a bottom border */
        outline: none; /* Remove focus outline */
        font-size: 16px;
        padding: 5px 0; /* Add padding for better spacing */
    }

    input:focus {
        border-bottom-color: #007BFF; /* Change bottom border color on focus */
    }
</style>

<hr>
  <div class="container">
    <div class="contact-container">
        <h1>My Contact</h1>
        <input type="text" placeholder="Enter your contact" style="margin-left: 60%">
    </div><br><br>

    
        <div class="card">
            <div class="card-header card-header-bordered">
                <div class="card-addon">
                    <div class="nav nav-tabs card-nav" id="card3-tab">
                        <a class="nav-item nav-link active" id="card3-home-tab" data-bs-toggle="tab" href="#card3-home">MY BUYERS</a>
                        <a class="nav-item nav-link" id="card3-profile-tab" data-bs-toggle="tab" href="#card3-profile">MY SELLERS</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="card3-home">
                      <h6>BUYERS WHO HAVE PURCHASED GIG S FROM YOU</h6><hr>

                      
                      <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav" style="list-style: none; padding: 0; margin: 0; display: flex;">
                                <li class="nav-item" style="margin-right: 20px;">
                                    <a class="nav-link" href="#" style="text-decoration: none;">BUYER NAME</a>
                                </li>
                                <li class="nav-item" style="margin-right: 20px;">
                                    <a class="nav-link" href="#" style="text-decoration: none;">COMPLETED ORDER</a>
                                </li>
                                <li class="nav-item" style="margin-right: 20px;">
                                    <a class="nav-link" href="#" style="text-decoration: none;">AMOUNT SPEND</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" style="text-decoration: none;">LAST ORDER</a>
                                </li>
                            </ul>
                        </div>
                      </nav>
                       <hr>
                    </div>
                    
                    
                    <div class="tab-pane fade text-center" id="card3-profile" style="padding: 20%">
                        <h5><i class="fas fa-exclamation-circle icon"></i>You have yet to order any Gigs...</h5>                    </div>
                    
                </div>
            </div>
        </div>
    

  </div>


@endsection