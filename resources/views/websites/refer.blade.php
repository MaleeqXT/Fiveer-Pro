@extends('fiverr.layouts.app')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

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
    <div class="card" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); width: 60%; margin: auto;"> <!-- Adjusted width and centered -->
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
    
    <h5 style="margin-top: 50px; color:red">From referral to reward</h5>
    <div>
        <h1 style="display: inline;">It’s easy to earn with referrals</h1>
        <button style="float: right;">Read full terms</button>
    </div>



    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
                <i class="fas fa-hands-clapping fa-3x" style="margin-left: 50px"></i> <!-- Clap Icon -->
                <h3>Invite friends</h3>
                <p>Refer friends to Fiverr through email, with your own personal referral link, or by spreading the word on social</p>
            </div>
            <div class="col-sm-4">
                <!-- Icon -->
                <i class="fas fa-gift" style="font-size: 24px;margin-left: 140px"></i>
                <h3>They get a discount</h3>
                <p>When your referrals join Fiverr, they’ll get 10% off their first order.</p>
            </div>
            
            
            <div class="col-sm-4">
                <!-- Icon -->
                <i class="fas fa-coins" style="font-size: 24px; margin-left: 140px"></i>
                <h3>You get the credit</h3>        
                <p>Once they complete their order, you’ll get 10% of their purchase in Fiverr Credits to use on your next order.</p>
            </div>  
        </div>
    </div>

    <div style="background-color: rgb(255, 236, 236); padding: 20px;">
        <div class="container" style="margin-top: 5%; display: flex; justify-content: space-between; align-items: center;"> <!-- Flexbox layout -->
            <h2 style="margin: 0;">Are you looking to boost your earnings<br> and become a Fiverr Affiliate?</h2>
            <p style="margin: 0; text-align: right;">Join the Fiverr Affiliates Program. It’s free to get started and you earn right from the<br> moment your traffic converts. There's a match for every need, so share away…</p>
        </div>
    </div>
    

</div>

@endsection
