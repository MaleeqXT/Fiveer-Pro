@extends('fiverr.layouts.app')
@section('content')
<style>
    .seller-profile {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        font-family: Arial, sans-serif;
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }

    .profile-header {
        display: flex;
        align-items: center;
        width: 100%;
        margin-bottom: 20px;
    }

    .profile-img img {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        margin-right: 20px;
    }

    .profile-info h1 {
        font-size: 24px;
        margin: 0;
    }

    .profile-info p {
        font-size: 16px;
        margin: 5px 0;
    }

    .gig-details ul {
        list-style-type: none;
        padding-left: 0;
    }

    .gig-details .btn {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        margin-top: 10px;
        cursor: pointer;
    }

    .faq-item {
        margin-bottom: 15px;
    }

    .reviews .review-item {
        border-top: 1px solid #ccc;
        padding: 10px 0;
    }

    .share-gig .btn {
        background-color: #28a745;
    }

    /* Package Cards */
    .package-cards {
        display: flex;
        gap: 20px;
        margin-top: 40px;
        justify-content: space-between;
        width: 100%;
    }

    .package-card {
        border: 1px solid #ccc;
        padding: 30px;
        border-radius: 8px;
        width: 30%;
        background-color: #f8f9fa;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .package-card:hover {
        transform: translateY(-10px);
    }

    .package-card h3 {
        font-size: 20px;
        margin-bottom: 15px;
        font-weight: bold;
    }

    .package-card p {
        font-size: 16px;
        margin-bottom: 15px;
    }

    .package-card ul {
        list-style-type: none;
        padding-left: 0;
    }

    .package-card ul li {
        margin-bottom: 8px;
    }

    .package-card .btn {
        width: 100%;
        margin-top: 20px;
        padding: 12px 0;
        background-color: #007bff;
        color: white;
        border: none;
        cursor: pointer;
        text-align: center;
        font-size: 16px;
    }

    .package-card .btn:hover {
        background-color: #0056b3;
    }
    
    /* Full Width Share Gig Card */
.share-gig-card {
    border: 2px solid #28a745; /* Green border for emphasis */
    padding: 25px;
    border-radius: 12px;
    width: 100%;
    max-width: 100%; /* Use full width of the container */
    background-color: #f1f8f2; /* Light greenish background */
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, background-color 0.3s ease;
    margin-top: 40px;
    text-align: center;
    box-sizing: border-box; /* To account for padding within the width */
}

.share-gig-card:hover {
    transform: translateY(-10px);
    background-color: #e7f7e2; /* Lighter green on hover */
}

.share-gig-card h3 {
    font-size: 24px;
    color: #28a745;
    margin-bottom: 15px;
    font-weight: bold;
}

.share-gig-card p {
    font-size: 16px;
    margin-bottom: 15px;
    color: #555;
}

.share-gig-card .share-btn {
    width: 100%;
    padding: 12px 0;
    background-color: #28a745;
    color: white;
    border: none;
    cursor: pointer;
    font-size: 16px;
    border-radius: 8px;
}

.share-gig-card .share-btn:hover {
    background-color: #218838;
}

/* Optional: Add padding to the container for spacing */
.container {
    padding: 0 15px; /* Adjust left/right padding to give the card some space */
}


    
</style>

<!-- Share Gig Card -->
<div class="share-gig-card">
    <h3>Share Your Gig</h3>
    <p>Want to reach more buyers? You got the talent, now go viral. Share your Gig on Social Media to connect with new customers and get more orders.</p>
    <button class="btn share-btn">Share Your Gig</button>
</div>

<div class="seller-profile">
    <!-- Profile Header -->
    <div class="profile-header">
        <div class="profile-img">
            <img src="path/to/profile-image.jpg" alt="Seller Profile Picture" />
        </div>
        <div class="profile-info">
            <h1>Maleeq Xt</h1>
            <p>Laravel Expert & Web Developer</p>
            <p><strong>5.0 (1 review)</strong></p>
            <p>From: Pakistan</p>
            <p>Languages: English, Urdu</p>
        </div>
    </div>
    
<!-- Card Structure -->
<div class="card">
    <div class="card-header card-header-bordered">
        <h3 class="card-title">Package Selector</h3>
        <div class="card-addon">
            <div class="nav nav-pills card-nav" id="card2-tab">
                <a class="nav-item nav-link active" id="card2-home-tab" data-bs-toggle="tab" href="#card2-home">Home</a>
                <a class="nav-item nav-link" id="card2-profile-tab" data-bs-toggle="tab" href="#card2-profile">Profile</a>
                <a class="nav-item nav-link" id="card2-contact-tab" data-bs-toggle="tab" href="#card2-contact">Contact</a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="tab-content">
            <!-- Home Tab -->
            <div class="tab-pane fade active show" id="card2-home">
                <h3>Quick Bug Fixes And Customizations</h3>
                <p><strong>PKR 23,370</strong></p>
                <p>Our Quick Bug Fixes and Customizations service provides fast, efficient solutions...</p>
                <ul>
                    <li>3-day delivery</li>
                    <li>1 Revision</li>
                </ul>
                <p><strong>What's Included:</strong></p>
                <ul>
                    <li>Functional website</li>
                    <li>1 page</li>
                    <li>Content upload</li>
                    <li>1 plugin/extension</li>
                    <li>E-commerce functionality</li>
                    <li>1 product</li>
                    <li>Payment processing</li>
                    <li>Opt-in form</li>
                    <li>Autoresponder integration</li>
                    <li>Speed optimization</li>
                    <li>Hosting setup</li>
                    <li>Social media icons</li>
                </ul>
                <button class="btn">Select Package</button>
            </div>

            <!-- Profile Tab -->
            <div class="tab-pane fade" id="card2-profile">
                <h3>Custom Laravel Features And Website</h3>
                <p><strong>PKR 40,898</strong></p>
                <p>Get essential custom Laravel features or modifications to enhance your website’s functionality...</p>
                <ul>
                    <li>10-day delivery</li>
                    <li>3 Revisions</li>
                </ul>
                <p><strong>What's Included:</strong></p>
                <ul>
                    <li>Functional website</li>
                    <li>1 page</li>
                    <li>Content upload</li>
                    <li>2 plugins/extensions</li>
                    <li>E-commerce functionality</li>
                    <li>1 product</li>
                    <li>Payment processing</li>
                    <li>Opt-in form</li>
                    <li>Autoresponder integration</li>
                    <li>Speed optimization</li>
                    <li>Hosting setup</li>
                    <li>Social media icons</li>
                </ul>
                <button class="btn">Select Package</button>
            </div>

            <!-- Contact Tab -->
            <div class="tab-pane fade" id="card2-contact">
                <h3>Professional Responsive Websites</h3>
                <p><strong>PKR 262,910</strong></p>
                <p>Receive a fully customized, professional, and responsive website that’s optimized for all devices...</p>
                <ul>
                    <li>30-day delivery</li>
                    <li>Unlimited Revisions</li>
                </ul>
                <p><strong>What's Included:</strong></p>
                <ul>
                    <li>Fully customized responsive website</li>
                    <li>All devices optimized</li>
                    <li>Unlimited revisions</li>
                </ul>
                <button class="btn">Select Package</button>
            </div>
        </div>
    </div>
</div>

<!-- Optional CSS for more right-alignment -->
<style>
    /* Ensure the card container is aligned to the right */
    .card {
        display: flex;
        justify-content: flex-end; /* Align the card to the right */
        margin-left: 55%; /* Push the card to the right */
        margin-right: 0; /* Ensure no left margin */
    }

    /* Adjust the card body to align content to the right */
    .card-body {
        display: flex;
        justify-content: flex-end; /* Align the content inside the card body to the right */
        padding: 20px; /* Optional: adjust padding if needed */
    }

    /* Optionally, if you want to make the tabs stick to the top */
    .nav-pills .nav-link {
        cursor: pointer;
    }

    /* Adjust tab content to align it to the right */
    .tab-content {
        width: 100%;
        display: flex;
        justify-content: flex-end; /* Align tab content to the right */
    }
</style>

    
        
    <!-- About the Seller -->
    <div class="about-seller">
        <h2>About Maleeq Xt</h2>
        <p>Hi, I’m Maleeq Azhar, a skilled web developer with over 2 years of experience specializing in backend development using Laravel 10. I’m proficient in PHP, MySQL, HTML5, CSS3, Bootstrap 5, and JavaScript/jQuery, enabling me to build dynamic, scalable, and responsive web applications. Whether you need custom Laravel solutions, bug fixes, database management, or a fully responsive website, I’m dedicated to delivering high-quality, clean, and efficient code.</p>
    </div>

    <!-- Package Details Section -->
    <div class="package-cards">
        <!-- Basic Package -->
        <div class="package-card">
            <h3>Quick Bug Fixes And Customizations</h3>
            <p><strong>PKR 23,370</strong></p>
            <p>Our Quick Bug Fixes and Customizations service provides fast, efficient solutions to keep your software running smoothly.</p>
            <ul>
                <li>3-day delivery</li>
                <li>1 Revision</li>
            </ul>
            <p><strong>What's Included:</strong></p>
            <ul>
                <li>Functional website</li>
                <li>1 page</li>
                <li>Content upload</li>
                <li>1 plugin/extension</li>
                <li>E-commerce functionality</li>
                <li>1 product</li>
                <li>Payment processing</li>
                <li>Opt-in form</li>
                <li>Autoresponder integration</li>
                <li>Speed optimization</li>
                <li>Hosting setup</li>
                <li>Social media icons</li>
            </ul>
            <button class="btn">Select Package</button>
        </div>

        <!-- Standard Package -->
        <div class="package-card">
            <h3>Custom Laravel Features And Website</h3>
            <p><strong>PKR 40,898</strong></p>
            <p>Get essential custom Laravel features or modifications to enhance your website’s functionality.</p>
            <ul>
                <li>10-day delivery</li>
                <li>3 Revisions</li>
            </ul>
            <p><strong>What's Included:</strong></p>
            <ul>
                <li>Functional website</li>
                <li>1 page</li>
                <li>Content upload</li>
                <li>2 plugins/extensions</li>
                <li>E-commerce functionality</li>
                <li>1 product</li>
                <li>Payment processing</li>
                <li>Opt-in form</li>
                <li>Autoresponder integration</li>
                <li>Speed optimization</li>
                <li>Hosting setup</li>
                <li>Social media icons</li>
            </ul>
            <button class="btn">Select Package</button>
        </div>

        <!-- Premium Package -->
        <div class="package-card">
            <h3>Professional Responsive Websites</h3>
            <p><strong>PKR 262,910</strong></p>
            <p>Receive a fully customized, professional, and responsive website that’s optimized for all devices.</p>
            <ul>
                <li>30-day delivery</li>
                <li>Unlimited Revisions</li>
            </ul>
            <p><strong>What's Included:</strong></p>
            <ul>
                <li>Fully customized responsive website</li>
                <li>All devices optimized</li>
                <li>Unlimited revisions</li>
            </ul>
            <button class="btn">Select Package</button>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="faq">
    <h2>FAQ</h2>
    <div class="faq-item">
        <h3>What services do you offer in Laravel development?</h3>
        <p>I offer custom website development, API integrations, bug fixing, performance optimization, feature enhancements, and mobile-friendly designs tailored to your business needs.</p>
    </div>
    <div class="faq-item">
        <h3>How long will it take to complete my project?</h3>
        <p>The timeline depends on the complexity and scope of the project. I provide an estimated delivery time after discussing your requirements, and I always aim for on-time delivery.</p>
    </div>
    <div class="faq-item">
        <h3>Can you help improve or fix an existing Laravel website?</h3>
        <p>Yes, I specialize in improving, troubleshooting, and optimizing existing Laravel websites. Whether it’s fixing bugs, enhancing functionality, or upgrading features, I’ve got you covered.</p>
    </div>
</div>

<!-- Reviews Section -->
<div class="reviews">
    <h2>Reviews</h2>
    <div class="review-item">
        <p><strong>Shakibhere</strong> (Bangladesh)</p>
        <p>"Although mine was a small project, he worked hard to fix it. He took the time to complete the work nicely. I recommend him."</p>
        <p>Rating: <strong>5.0</strong></p>
    </div>
</div>


@endsection
