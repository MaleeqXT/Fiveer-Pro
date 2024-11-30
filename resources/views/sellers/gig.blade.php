@extends('fiverr.layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<hr>
<div class="container">

        <div style="display: flex; align-items: center;">
            <h1 style="margin-right: 10px;">Gigs</h1>
            <div class="form-check form-switch" style="margin-left:70%">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Accepting Custom Orders</label>
            </div>
        </div>
         

        
            <div class="card">
                <div class="card-header card-header-bordered">
                    <div class="card-addon">
                        <div class="nav nav-tabs card-nav" id="card3-tab">
                            <a class="nav-item nav-link active" id="card3-home-tab" data-bs-toggle="tab" href="#card3-home">Active</a>
                            <a class="nav-item nav-link" id="card3-profile-tab" data-bs-toggle="tab" href="#card3-profile">Pending Approval</a>
                            <a class="nav-item nav-link" id="card3-contact-tab" data-bs-toggle="tab" href="#card3-contact">Requires Modification</a>
                            <a class="nav-item nav-link" id="card3-contact-tab" data-bs-toggle="tab" href="#card3-halo">Draft</a>
                            <a class="nav-item nav-link" id="card3-contact-tab" data-bs-toggle="tab" href="#card3-good">Denied</a>
                            <a class="nav-item nav-link" id="card3-contact-tab" data-bs-toggle="tab" href="#card3-person">Paused</a>

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                       
                        <div class="tab-pane fade show active" id="card3-home">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Active Gigs</h5>
                                    <div class="dropdown">
                                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            Last 30 days
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="#">Last 7 days</a></li>
                                            <li><a class="dropdown-item" href="#">Last 30 days</a></li>
                                            <li><a class="dropdown-item" href="#">Last 6 months</a></li>
                                            <li><a class="dropdown-item" href="#">Last year</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>GIG</th>
                                                <th>Impressions</th>
                                                <th>Clicks</th>
                                                <th>Orders</th>
                                                <th>Cancellations</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>I will be your professional full stack PHP laravel developer</td>
                                                <td>1,200</td>
                                                <td>150</td>
                                                <td>10</td>
                                                <td>1</td>
                                                <td>
                                                    <!-- Dropdown Button -->
                                                    <div class="dropdown">
                                                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                          
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <li><a class="dropdown-item" href="#">Preview</a></li>
                                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                                            <li><a class="dropdown-item" href="#">Share</a></li>
                                                            <li><a class="dropdown-item" href="#">Pause</a></li>
                                                            <li><a class="dropdown-item" href="#">Delete</a></li>
                                                            <li><a class="dropdown-item" href="#">Add Video</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Add more rows as needed -->
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                            <a href="" style="margin-left: 80%">What does your Gig® status mean?</a>
                        </div>
                        
                        
                        
                                               
                        <div class="tab-pane fade" id="card3-profile">
                            <div class="tab-pane fade show active" id="card3-home">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Gigs pending approval</h5>
                                        <div class="dropdown">
                                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                Last 30 days
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li><a class="dropdown-item" href="#">Last 7 days</a></li>
                                                <li><a class="dropdown-item" href="#">Last 30 days</a></li>
                                                <li><a class="dropdown-item" href="#">Last 6 months</a></li>
                                                <li><a class="dropdown-item" href="#">Last year</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>GIG</th>
                                                    <th>Impressions</th>
                                                    <th>Clicks</th>
                                                    <th>Orders</th>
                                                    <th>Cancellations</th>
                                                </tr>
                                            </thead>
                                        </table>
                                        <p>No pending gigs to show.</p>
                                    </div>
                                </div>
                                <a href="" style="margin-left: 80%">What does your Gig® status mean?</a>
                            </div>
                        </div>



                        <div class="tab-pane fade" id="card3-contact">
                            <div class="tab-pane fade show active" id="card3-home">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Gigs that require modifications</h5>
                                        <div class="dropdown">
                                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                Last 30 days
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li><a class="dropdown-item" href="#">Last 7 days</a></li>
                                                <li><a class="dropdown-item" href="#">Last 30 days</a></li>
                                                <li><a class="dropdown-item" href="#">Last 6 months</a></li>
                                                <li><a class="dropdown-item" href="#">Last year</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>GIG</th>
                                                    <th>Impressions</th>
                                                    <th>Clicks</th>
                                                    <th>Orders</th>
                                                    <th>Cancellations</th>
                                                </tr>
                                            </thead>
                                        </table>
                                        <p>No gigs which require modification to show.</p>
                                    </div>
                                </div>
                                <a href="" style="margin-left: 80%">What does your Gig® status mean?</a>
                            </div>
                        </div>


                      
                        <div class="tab-pane fade" id="card3-halo">
                            <div class="tab-pane fade show active" id="card3-home">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Draft Gigs</h5>
                                        <div class="dropdown">
                                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                Last 30 days
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li><a class="dropdown-item" href="#">Last 7 days</a></li>
                                                <li><a class="dropdown-item" href="#">Last 30 days</a></li>
                                                <li><a class="dropdown-item" href="#">Last 6 months</a></li>
                                                <li><a class="dropdown-item" href="#">Last year</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>GIG</th>
                                                    <th>Impressions</th>
                                                    <th>Clicks</th>
                                                    <th>Orders</th>
                                                    <th>Cancellations</th>
                                                </tr>
                                            </thead>
                                        </table>
                                        <p>No draft gigs to show.</p>
                                    </div>
                                </div>
                                <a href="" style="margin-left: 80%">What does your Gig® status mean?</a>
                            </div>
                        </div>




                        <div class="tab-pane fade" id="card3-good">
                            <div class="tab-pane fade show active" id="card3-home">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Denied Gigs</h5>
                                        <div class="dropdown">
                                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                Last 30 days
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li><a class="dropdown-item" href="#">Last 7 days</a></li>
                                                <li><a class="dropdown-item" href="#">Last 30 days</a></li>
                                                <li><a class="dropdown-item" href="#">Last 6 months</a></li>
                                                <li><a class="dropdown-item" href="#">Last year</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>GIG</th>
                                                    <th>Impressions</th>
                                                    <th>Clicks</th>
                                                    <th>Orders</th>
                                                    <th>Cancellations</th>
                                                </tr>
                                            </thead>
                                        </table>
                                        <p>No denied gigs to show.</p>
                                    </div>
                                </div>
                                <a href="" style="margin-left: 80%">What does your Gig® status mean?</a>
                            </div>
                        </div>






                        <div class="tab-pane fade" id="card3-person">
                            <div class="tab-pane fade show active" id="card3-home">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Paused Gigs</h5>
                                        <div class="dropdown">
                                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                Last 30 days
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li><a class="dropdown-item" href="#">Last 7 days</a></li>
                                                <li><a class="dropdown-item" href="#">Last 30 days</a></li>
                                                <li><a class="dropdown-item" href="#">Last 6 months</a></li>
                                                <li><a class="dropdown-item" href="#">Last year</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>GIG</th>
                                                    <th>Impressions</th>
                                                    <th>Clicks</th>
                                                    <th>Orders</th>
                                                    <th>Cancellations</th>
                                                </tr>
                                            </thead>
                                        </table>
                                        <p>No gigs which require modification to show.</p>
                                    </div>
                                </div>
                                <a href="" style="margin-left: 80%">What does your Gig® status mean?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection