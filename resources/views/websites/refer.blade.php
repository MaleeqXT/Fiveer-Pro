@extends('fiverr.layouts.app')

@section('content')
<hr>
<div style="background-color: rgb(255, 236, 236); padding: 20px;">
    <div class="container" style="margin-top: 5%;"> <!-- Reduced margin-top -->
        <h1>
            hasnainh93, take the credit <br> for referring friends to Fiverr
        </h1>
        <p>Earn up to US$500 in Fiverr Credits — up to US$100 from each referral.</p>
        <a href="">Terms and conditions apply</a>
    </div>
</div>

<!-- Card Section -->
<div class="container" style="margin-top: -40px;"> <!-- Negative margin to bring the card closer -->
    <div 
        class="card" 
        style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); width: 60%; margin: auto;"> <!-- Adjusted width and centered -->
        <div class="card-body">
            <h5 class="card-title">Invite friends through email</h5>
            <!-- Search Form -->
            <form class="d-flex" style="margin-top: 20px;">
                <input class="form-control me-2" type="search" placeholder="Enter email address" aria-label="Search">
                <button class="btn btn-primary" type="submit">
                   Search
                </button>
            </form>
            <!-- Align Paragraph and Link to the Right -->
            <div class="d-flex justify-content-between align-items-center" style="margin-top: 20px;">
                <p class="mb-0">Separate emails with commas</p>
                <a href="">Preview Email</a>
            </div>
             <h5 class="mt-3">Or share your personal referral link</h5>
               
             <form class="d-flex" style="margin-top: 20px;">
                <input class="form-control me-2" type="search" placeholder="https://www.fiverr.com/pe/e6YvdWj" aria-label="Search">
                <button class="btn btn-light" type="submit">
                   Copy
                </button>
            </form>
             

        </div>
    </div>
</div>

@endsection
