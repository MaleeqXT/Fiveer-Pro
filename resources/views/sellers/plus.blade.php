@extends('fiverr.layouts.app')
@section('content')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
/* FAQ Section */
.faq-section {
    padding: 30px;
    background-color: #f9f9f9;
    border-radius: 8px;
    max-width: 100%; /* Full width */
    height: 100vh; /* Full height */
    margin: 0;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

/* FAQ Title */
.faq-title {
    text-align: center;
    font-size: 2rem;
    margin-bottom: 20px;
    font-weight: 600;
}

/* Accordion Button */
.accordion-button {
    background-color: #f1f1f1;
    color: #fff;
    font-weight: bold;
    border-radius: 5px;
    border: none;
}

.accordion-button:hover {
    background-color: #ffffff;
}

.accordion-body {
    padding: 15px;
    background-color: #f1f1f1;
    border-radius: 5px;
}

/* Spacing Between Accordion Items */
.accordion-item + .accordion-item {
    margin-top: 10px;
}

.accordion-button.collapsed {
    color: #333;
}

/* Make Accordion Full Width */
.accordion {
    width: 100%; /* Ensure the accordion spans full width */
    max-width: 100%; /* Full width */
}

/* Make Accordion Item Body Full Width */
.accordion-body {
    width: 100%;
    max-width: 100%; /* Full width */
}

/* Remove border around nav links */
.custom-nav .nav-link {
    border: none;
    background: none;
}

/* Remove border around the active tab */
.custom-nav .nav-link.active {
    border: none;
    background-color: #f8f9fa; /* Optional: to highlight active tab with background color */
}

/* Optional: Add custom spacing and background for the tab content */
.tab-content {
    padding: 20px;
    background-color: #ffffff;
    border-radius: 8px;
}

/* Featured Card Styling */
.featured-card {
    display: flex;
    flex-direction: column; /* Stacks items vertically */
    align-items: center;    /* Centers content horizontally */
    justify-content: center;/* Centers content vertically */
    padding: 2rem;
    margin-top: 2rem;
    background: transparent;
    border: 2px solid #0073e6; /* Blue border around the card */
    border-radius: 15px;
    box-shadow: none;
    position: relative;
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s ease;
    text-align: center; /* Centers text horizontally */
    height: 100%; /* Ensures the card takes full height */
}

/* Navbar Styling */
.navbar {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 1.5rem;
}

.navbar-link {
    text-decoration: none;
    font-size: 1.2rem;
    font-weight: bold;
    color: #333;
    transition: color 0.3s ease;
}

.navbar-link:hover {
    color: #f82fa8; /* Pink hover color */
}

/* Featured Badge Styling */
.featured-badge {
    position: absolute;
    top: 20px;
    left: 20px;
    background: #ff9800;
    color: #fff;
    font-size: 1rem;
    font-weight: bold;
    padding: 0.6rem 1.2rem;
    border-radius: 30px;
    z-index: 4;
    box-shadow: 0 4px 10px rgba(255, 152, 0, 0.4);
}

/* Featured Card Content */
.featured-card-content {
    padding: 1.5rem;
    z-index: 2;
}

/* Card Title Styling */
.featured-card-title {
    font-size: 2rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 1rem;
}

/* Card Text Styling */
.featured-card-text {
    font-size: 1.2rem;
    color: #555;
    margin-top: 0.5rem;
}

/* Button Styling */
.card-actions {
    margin-top: 2rem;
}

.btn-warning {
    font-size: 1.2rem;
    font-weight: bold;
    padding: 0.8rem 2rem;
    background-color: #f8b400; /* Yellow color */
    color: white;
    border-radius: 5px;
    border: none;
    transition: background-color 0.3s, transform 0.3s;
}

.btn-warning:hover {
    background-color: #f7a500; /* Slightly darker yellow */
    transform: translateY(-5px);
}

/* Featured Card Logo */
.featured-card-logo {
    width: 120px; /* Adjust size */
    height: 120px; /* Adjust size */
    text-align: center;
    flex-shrink: 0;
    z-index: 2;
    max-width: 100%;
    overflow: hidden;
}

.featured-card-logo img {
    max-width: 100%;
    height: auto;
    object-fit: contain;
}



/* Premium Card Styling */
.premium-card {
    display: flex;
    flex-direction: column; /* Stacks items vertically */
    align-items: center;    /* Centers content horizontally */
    justify-content: center;/* Centers content vertically */
    padding: 2rem;
    margin-top: 2rem;
    background: transparent;
    border: 2px solid #cacbcb; /* Blue border around the card */
    border-radius: 15px;
    box-shadow: none;
    position: relative;
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s ease;
    flex-wrap: wrap;
    text-align: center; /* Centers text horizontally */
    height: 100%; /* Ensures the card takes full height */
}

/* Premium Badge Styling */
.premium-badge {
    position: absolute;
    top: 20px;
    left: 20px;
    background: #ff9800;
    color: #fff;
    font-size: 1rem;
    font-weight: bold;
    padding: 0.6rem 1.2rem;
    border-radius: 30px;
    z-index: 4;
    box-shadow: 0 4px 10px rgba(255, 152, 0, 0.4);
}

/* Premium Card Content */
.premium-card-content {
    padding: 1.5rem;
    z-index: 2;
}

/* Card Title Styling */
.premium-card-title {
    font-size: 2rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 1rem;
}

/* Card Text Styling */
.premium-card-text {
    font-size: 1.2rem;
    color: #555;
    margin-top: 0.5rem;
}

/* Button Styling */
.card-actions {
    margin-top: 2rem;
}

.btn-warning {
    font-size: 1.2rem;
    font-weight: bold;
    padding: 0.8rem 2rem;
    background-color: #f8b400; /* Yellow color */
    color: white;
    border-radius: 5px;
    border: none;
    transition: background-color 0.3s, transform 0.3s;
}

.btn-warning:hover {
    background-color: #f7a500; /* Slightly darker yellow */
    transform: translateY(-5px);
}

/* Premium Card Logo */
.premium-card-logo {
    width: 120px; /* Adjust size */
    height: 120px; /* Adjust size */
    text-align: center;
    flex-shrink: 0;
    z-index: 2;
    max-width: 100%;
    overflow: hidden;
}

.premium-card-logo img {
    max-width: 100%;
    height: auto;
    object-fit: contain;
}




/* Medium Card Styling */
.medium-card {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2rem;
    margin-top: 2rem;
    background: transparent; /* Card Background Invisible */
    border: 2px solid transparent; /* Invisible Border */
    border-radius: 15px;
    box-shadow: none; /* No shadow */
    position: relative;
    overflow: hidden;
    transition: transform 0.3s, box-shadow 0.3s ease;
    flex-wrap: wrap; /* Allow items to wrap */
}

.medium-card:hover {
    transform: translateY(-5px);
}

/* Card Content (Text) */
.card-content {
    flex: 1;
    padding: 1.5rem;
    z-index: 2;
}

.card-title {
    font-size: 2rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 1rem;
}

.card-text {
    font-size: 1.2rem;
    color: #555;
    margin-top: 0.5rem;
}

/* Card Logo (Medium Size) */
.card-logo {
    width: 120px; /* Increased size */
    height: 120px; /* Increased size */
    text-align: center;
    flex-shrink: 0;
    z-index: 2;
    max-width: 100%; /* Ensures image fits within the container */
    overflow: hidden; /* Prevents image overflow */
}

.card-logo img {
    max-width: 100%; /* Ensures the image scales properly */
    height: auto; /* Maintain aspect ratio */
    object-fit: contain; /* Ensures the image fits inside the container without distortion */
}

/* Full-Width Container */
.container-fluid {
    max-width: 100%;
    margin: 0 auto;
    padding-left: 100%;
    padding: 30px;
}

/* Big Card Styling */
.big-card {
    height: 600px; /* Adjust height */
    background: linear-gradient(135deg, #a8ebc9, #62d78f); /* Vibrant gradient background */
    border: none;
    border-radius: 20px; /* Ultra-smooth corners */
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2); /* Prominent shadow */
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2rem 3rem;
    position: relative;
    overflow: hidden;
    animation: fadeIn 1s ease-in-out;
}

/* Animation for Entry */
@keyframes fadeIn {
    0% {
        opacity: 0;
        transform: translateY(50px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Glowing Effects for Background */
.big-card::before,
.big-card::after {
    content: '';
    position: absolute;
    border-radius: 50%;
    z-index: 1;
    animation: pulse 3s infinite;
}

.big-card::before {
    width: 400px;
    height: 400px;
    background: rgba(255, 255, 255, 0.3);
    top: -100px;
    left: -100px;
    filter: blur(100px);
}

.big-card::after {
    width: 500px;
    height: 500px;
    background: rgba(0, 150, 100, 0.5);
    bottom: -150px;
    right: -150px;
    filter: blur(150px);
}

@keyframes pulse {
    0%, 100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
}

/* Left Content */
.card-content {
    flex: 1;
    z-index: 3;
}

.card-title {
    margin-top: 140px;
    font-size: 3.5rem;
    font-weight: 900;
    color: #004d1a;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); /* Bolder text shadow */
}

.card-text {
    font-size: 1.5rem;
    color: #2e7d32;
    margin-top: 1rem;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
}

/* Animated Decorative Dots */
.decorative-dots {
    position: absolute;
    top: 20px;
    left: 20px;
    z-index: 1;
}

.decorative-dots span {
    width: 20px;
    height: 20px;
    background: rgba(255, 255, 255, 0.8);
    border-radius: 50%;
    display: inline-block;
    margin: 0 10px;
    animation: bounce 2s infinite ease-in-out;
}

.decorative-dots span:nth-child(2) {
    animation-delay: 0.2s;
}

.decorative-dots span:nth-child(3) {
    animation-delay: 0.4s;
}

@keyframes bounce {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}

/* Right Content (CTA) */
.card-actions {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    z-index: 3;
}

.btn-primary {
    margin-bottom: 20px;
    font-size: 1.5rem;
    font-weight: 700;
    padding: 1rem 3rem;
    border-radius: 10px;
    background: linear-gradient(90deg, #0073e6, #005bb5);
    border: none;
    color: #fff;
    transition: transform 0.3s, box-shadow 0.3s, background 0.3s;
    box-shadow: 0 4px 15px rgba(0, 115, 230, 0.5);
}

.btn-primary:hover {
    background: linear-gradient(90deg, #005bb5, #003f87);
    transform: translateY(-5px);
    box-shadow: 0 8px 30px rgba(0, 115, 230, 0.7);
}


.btn-warning {
    margin-bottom: 20px;
    font-size: 1.5rem;
    font-weight: 700;
    padding: 1rem 3rem;
    border-radius: 10px;
    background: linear-gradient(90deg, #179800, #179800);
    border: none;
    color: #fff;
    transition: transform 0.3s, box-shadow 0.3s, background 0.3s;
}



/* Floating Badges */
.badge {
    position: absolute;
    top: 20px;
    right: 30px;
    background: linear-gradient(90deg, #ff9800, #ff5722);
    color: #fff;
    font-size: 1rem;
    font-weight: bold;
    padding: 0.6rem 1.2rem;
    border-radius: 30px;
    z-index: 4;
    box-shadow: 0 4px 10px rgba(255, 152, 0, 0.4);
}

/* Add Stars Floating Effect */
.stars {
    position: absolute;
    bottom: 30px;
    left: 30px;
    z-index: 2;
}

.stars i {
    font-size: 3rem;
    color: rgba(255, 255, 255, 0.7);
    margin-right: 10px;
    animation: twinkle 2s infinite;
}

@keyframes twinkle {
    0%, 100% {
        opacity: 1;
    }
    50% {
        opacity: 0.5;
    }
}
</style>

<div class="container-fluid p-4">
    <div class="card big-card">
        <!-- Decorative Dots -->
        <div class="decorative-dots">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- Badge -->
        <div class="badge">Premium</div>

        <!-- Left Content -->
        <div class="card-content">
            <h1 class="card-title">Seller Plus Program</h1>
            <p class="card-text">
                Unlock exclusive tools, personalized support, and unmatched growth opportunities for your business.
            </p>
        </div>

        <!-- Right Content (Call-to-Action) -->
        <div class="card-actions">
            <a href="#" class="btn btn-primary">Join Now</a>
        </div>

        <!-- Decorative Stars -->
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-chart-line"></i>
            <i class="fas fa-award"></i>
        </div>
    </div>
</div>

<!-- Medium Card 1 -->
<div class="medium-card">
    <!-- Text Content -->
    <div class="card-content">
        <h2 class="card-title">Key Insights</h2>
        <p class="card-text">
            Unlock data-driven insights to track and optimize your business performance effectively.
        </p>
    </div>
    <!-- Medium Logo on Right (Image) -->
    <div class="card-logo">
        <img src="{{asset('auth/assets/images/blub.jpg')}}" alt="Key Insights Logo">
    </div>
</div>

<!-- Medium Card 2 -->
<div class="medium-card">
    <!-- Text Content -->
    <div class="card-content">
        <h2 class="card-title">Customer Support</h2>
        <p class="card-text">
            Get 24/7 access to a dedicated team to ensure your business is running smoothly.
        </p>
    </div>
    <!-- Medium Logo on Right (Image) -->
    <div class="card-logo">
        <img src="{{asset('auth/assets/images/flexiable.png')}}" alt="Customer Support Logo">
    </div>
</div>

<div class="medium-card">
    <!-- Text Content -->
    <div class="card-content">
        <h2 class="card-title">Marketing Tools</h2>
        <p class="card-text">
            Get Tools access to a dedicated team to ensure your business is running smoothly.
        </p>
    </div>
    <!-- Medium Logo on Right (Image) -->
    <div class="card-logo">
        <img src="{{asset('auth/assets/images/tools.png')}}" alt="Customer Support Logo">
    </div>
</div>
<br> <br>

<div class="premium-card">
    <!-- Badge -->
    <div class="premium-badge">Premium</div>

    <!-- Text Content -->
    <div class="premium-card-content">
        <h2 class="premium-card-title">Grow on Fiverr</h2>
        <h2 class="premium-card-title">With <strong style="color: #f82fa8;">Seller Plus</strong></h2>

        <p class="premium-card-text">
            Get access to a dedicated team to ensure your business is running smoothly.
        </p>
    </div>

    <!-- Medium Logo on Right (Image) -->
    <div class="card-actions">
        <a href="#" class="btn btn-warning">Join Now</a>
    </div>
</div>


<div class="featured-card">
    <!-- Navigation Bar with Tabs -->
    <ul class="nav nav-tabs custom-nav" id="card3-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="card3-profile-tab" data-bs-toggle="tab" href="#card3-profile" role="tab">Basic</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="card3-contact-tab" data-bs-toggle="tab" href="#card3-contact" role="tab">Standard</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="card3-draft-tab" data-bs-toggle="tab" href="#card3-draft" role="tab">Premium</a>
        </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content" id="card3-tabContent">
        <div class="tab-pane fade show active" id="card3-profile" role="tabpanel">
            <div class="featured-badge">Featured</div>

            <!-- Text Content -->
            <div class="featured-card-content">
                <h6 class="featured-card-title">Seller Plus has given me helpful insights that drive my business and my revenue</h6>
                <h6 class="featured-card-title">. If you’re serious about growing your business, invest  in ,<strong style="color: #f82fa8;">Seller Plus</strong></h6>

                <p class="featured-card-text">
                    Seb Jenkins Writing & Translation
                </p>
            </div>

            <!-- Fiverr Seller Plus Button in the Center -->
            <div class="card-actions">
                <a href="#" class="btn btn-warning" style="margin-right:480px;">Fiverr Seller Plus</a>
            </div>
        </div>

        <div class="tab-pane fade" id="card3-contact" role="tabpanel">
            <div class="featured-badge">Featured</div>

            <!-- Text Content -->
            <div class="featured-card-content">
                <p class="featured-card-title">“Joining Seller Plus is the best decision I’ve made since joining Fiverr. The keyword research tool allows </hp>
                <p class="featured-card-title">me to understand how buyers are searching for my service so  <strong style="color: #f82fa8;"> I can optimize my Gig</strong></p>

                <p class="featured-card-text">
                    Developerz Programming & Tech
                </p>
            </div>

            <!-- Fiverr Seller Plus Button in the Center -->
            <div class="card-actions">
                <a href="#" class="btn btn-warning" style="margin-right:560px;">Fiverr Seller Plus</a>
            </div>
        </div>

        <div class="tab-pane fade" id="card3-draft" role="tabpanel">
            <div class="featured-badge">Featured</div>

            <!-- Text Content -->
            <div class="featured-card-content">
                <p class="featured-card-title">The Seller Plus Program changed the whole game. Our business jumped 3.5 times in just 1 month</p>
                <p class="featured-card-title"> Buyer Insight played a significant role in our success <strong style="color: #f82fa8;">Seller Plus</strong></p>

                <p class="featured-card-text">
                    Digital Marketing
                                </p> 
            </div>

            <!-- Fiverr Seller Plus Button in the Center -->
            <div class="card-actions">
                <a href="#" class="btn btn-warning" style="margin-right:560px;">Fiverr Seller Plus</a>
            </div>
        </div>
    </div>
</div>

<br> <br>
<div class="faq-section" style="padding: 30px; background-color: #f9f9f9; border-radius: 8px;">
    <h2 class="faq-title" style="text-align: center; font-size: 2rem; margin-bottom: 20px; font-weight: 600;">Frequently Asked Questions</h2>
    
    <!-- Accordion -->
    <div class="accordion" id="faqAccordion">
        <!-- FAQ 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    What is Fiverr Seller Plus?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Fiverr Seller Plus is a subscription service that provides additional tools and support to help you grow your Fiverr business. It gives you access to premium features such as personalized support, advanced analytics, and more.
                </div>
            </div>
        </div>

        <!-- FAQ 2 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    How do I join Fiverr Seller Plus?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    To join Fiverr Seller Plus, simply visit the Seller Plus page on Fiverr, select the plan that suits you, and subscribe. You will be billed on a monthly or annual basis, depending on the plan you choose.
                </div>
            </div>
        </div>

        <!-- FAQ 3 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    What benefits does Fiverr Seller Plus offer?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Fiverr Seller Plus offers several benefits including priority customer support, advanced insights into your performance, personalized recommendations, and the ability to see how you compare with other sellers in your niche.
                </div>
            </div>
        </div>

        <!-- FAQ 4 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Can I cancel Fiverr Seller Plus anytime?
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Yes, you can cancel your Fiverr Seller Plus subscription at any time. If you cancel, you will continue to have access to the benefits until the end of your current billing period, after which your subscription will not be renewed.
                </div>
            </div>
        </div>

        <!-- FAQ 5 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    What happens if I don't want to continue with Seller Plus?
                </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    If you choose not to continue with Fiverr Seller Plus, you can cancel your subscription at any time. After cancellation, you'll revert to the standard Fiverr features and will no longer have access to the premium tools and benefits.
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

@endsection
