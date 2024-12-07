@extends('fiverr.layouts.app')
@section('content')

<!-- Include Slick Carousel -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

<style>
    .card-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin-top: 30px;
    }

    .card {
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        transition: transform 0.3s ease-in-out;
        background: #fff;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
    }

    .card h3 {
        font-size: 20px;
        color: #222;
        margin-bottom: 15px;
    }

    .card p {
        font-size: 16px;
        color: #444;
    }

    .btn-package {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border-radius: 6px;
        text-decoration: none;
        font-size: 16px;
    }

    .btn-package:hover {
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

</style>
<div class="share-gig-card">
    <h3>Share Your Gig</h3>
    <p>Want to reach more buyers? You got the talent, now go viral. Share your Gig on Social Media to connect with new customers and get more orders.</p>
    <button class="btn share-btn">Share Your Gig</button>
</div>

<div class="seller-profile-container container mt-5">
    <div class="row">
     <!-- First Card -->
     <div class="col-lg-6">
        <div class="card card-lg" style="border: none; box-shadow: none;">
            <!-- Seller Profile -->
            <div class="profile-header">
                <div class="profile-img">
                    <img src="https://st5.depositphotos.com/35914836/63482/i/450/depositphotos_634821438-stock-photo-beautiful-sunset-sea.jpg" alt="Seller Profile Picture" class="img-fluid" />
                </div>
                <div class="profile-info">
                    <h1>Maleeq Xt</h1>
                    <p>Laravel Expert & Web Developer</p>
                    <p><strong>5.0 (1 review)</strong></p>
                    <p>From: Pakistan</p>
                    <p>Languages: English, Urdu</p>
                </div>
            </div>
    
            <h3>I will Laravel expert and responsive websites</h3>
    
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.pexels.com/photos/33109/fall-autumn-red-season.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="https://images.pexels.com/photos/842711/pexels-photo-842711.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="https://images.pexels.com/photos/1366957/pexels-photo-1366957.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="Slide 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
            <!-- Gig Description Section -->
            <div class="section">
                <h2 class="section-title">About This Gig</h2>
                <p>Looking for a skilled Laravel developer to build a custom website or enhance your application with unique features? I specialize in creating responsive, modern, and user-friendly designs tailored to your business needs. From custom functionalities and real-time API integrations to bug fixes, speed optimizations, and secure, scalable solutions, I ensure your project runs smoothly and stands out. My work emphasizes high-quality coding, seamless user experiences, and fully responsive designs that perform flawlessly across all devices. With extensive experience, clear communication, and a dedication to on-time delivery, I’m here to turn your ideas into reality. Let’s build something amazing together! Contact me today to get started!</p>
            </div>
    
           
            
            <hr>
            <div class="col">
                <div class="card portlet border">
                    <div class="card-body">
                        <div class="row">
                            <!-- Website Type Section -->
                            <div class="col-lg-4 t">
                                <h2 class="section-title">Website Type</h2>
                                <p>E-Commerce Store</p>
                            </div>
                            <!-- Programming Languages Section -->
                            <div class="col-lg-4">
                                <h2 class="section-title">Programming Languages</h2>
                                <p>HTML & CSS, PHP, Java, Tailwind CSS, jQuery</p>
                            </div>

                            <div class="col-lg-4">
                                <h2 class="section-title">Website features</h2>
                                <p>Payment
                                    Social media
                                    Shipping
                                    Inventory
                                    Analytics
                                    Form
                                    Gallery
                                    Booking
                                    Portfolio
                                    Dashboard</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
      <!-- Reviews Section -->
      <div class="section">
        <h2 class="section-title">Reviews</h2>
        <div class="review-item">
            <div class="profile-header">
                <div class="profile-img">
                    <img src="https://st5.depositphotos.com/35914836/63482/i/450/depositphotos_634821438-stock-photo-beautiful-sunset-sea.jpg" alt="Seller Profile Picture" class="img-fluid" />
                </div>
                <div class="profile-info">
                    <h1>Maleeq Xt</h1>
                    <p>Laravel Expert & Web Developer</p>
                    <p><strong>5.0 (1 review)</strong></p>
                    <p>From: Pakistan</p>
                    <p>Languages: English, Urdu</p>
                    <h2 class="section-title">Get to know Maleeq Xt</h2>
                    <p>Hi, I’m Maleeq Azhar, a skilled web developer with over 2 years of experience specializing in backend development using Laravel 10. I’m proficient in PHP, MySQL, HTML5, CSS3, Bootstrap 5, and JavaScript/jQuery, enabling me to build dynamic, scalable, and responsive web applications. Whether you need custom Laravel solutions, bug fixes, database management, or a fully responsive website, I’m dedicated to delivering high-quality, clean, and efficient code. Let’s work together to bring your web development vision to life with fast turnaround times and top-notch service!</p>
    
                </div>
            </div>
        </div>
    </div>
          
        
    
        <!-- Gig Packages -->
<div class="section">
    <h2 class="section-title">Compare Packages</h2>
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="package">
                <h3>Basic</h3>
                <p>Quick Bug Fixes And Customizations</p>
                <p>PKR 23,370</p>
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
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="package">
                <h3>Standard</h3>
                <p>Custom Laravel Features And Website</p>
                <p>PKR 40,898</p>
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
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="package">
                <h3>Premium</h3>
                <p>Professional Responsive Websites</p>
                <p>PKR 262,910</p>
                <p>Receive a fully customized, professional, and responsive website that’s optimized for all devices...</p>
                <ul>
                    <li>30-day delivery</li>
                    <li>Unlimited Revisions</li>
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
                </ul>
                <button class="btn">Select Package</button>
                        
            </div>
        </div>
    </div>
</div>

    <!-- FAQ Section -->
<div class="section">
    <h2 class="section-title">FAQ</h2>

    <div class="faq-item">
        <details>
            <summary class="faq-question">
                What services do you offer in Laravel development?
            </summary>
            <p class="faq-answer">I offer custom website development, API integrations, bug fixing, performance optimization, feature enhancements, and mobile-friendly designs tailored to your business needs.</p>
        </details>
    </div>

    <div class="faq-item">
        <details>
            <summary class="faq-question">
                How long will it take to complete my project?
            </summary>
            <p class="faq-answer">The timeline depends on the complexity and scope of the project. I provide an estimated delivery time after discussing your requirements, and I always aim for on-time delivery.</p>
        </details>
    </div>

    <div class="faq-item">
        <details>
            <summary class="faq-question">
                Can you help improve or fix an existing Laravel website?
            </summary>
            <p class="faq-answer">Yes, I specialize in improving, troubleshooting, and optimizing existing Laravel websites. Whether it’s fixing bugs, enhancing functionality, or upgrading features, I’ve got you covered.</p>
        </details>
    </div>

    <div class="faq-item">
        <details>
            <summary class="faq-question">
                Will my website be mobile-friendly and responsive?
            </summary>
            <p class="faq-answer">Absolutely! I ensure all websites and features I create are fully responsive and optimized for a seamless experience across all devices.</p>
        </details>
    </div>

    <div class="faq-item">
        <details>
            <summary class="faq-question">
                What do you need to get started on my project?
            </summary>
            <p class="faq-answer">I’ll need a detailed description of your requirements, access to your hosting/server (if applicable), and any relevant assets like design files or reference materials. Let’s discuss your project to clarify everything!</p>
        </details>
    </div>
</div>

<style>
/* Section Title */
.section-title {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

/* FAQ Item */
.faq-item {
    margin-bottom: 15px;
}

/* FAQ Question */
.faq-question {
    font-size: 18px;
    font-weight: bold;
    padding: 10px;
    background-color: #f7f7f7;
    border-radius: 5px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: space-between;
    list-style: none;
    transition: background-color 0.3s;
}

.faq-question:hover {
    background-color: #e0e0e0;
}

/* Add a dropdown arrow */
.faq-question::after {
    content: '\25BC'; /* Unicode character for down arrow */
    font-size: 16px;
    color: #555;
    margin-left: 10px;
    transition: transform 0.3s;
}

/* Rotate arrow when open */
details[open] .faq-question::after {
    transform: rotate(180deg);
}

/* FAQ Answer */
.faq-answer {
    margin: 10px 0 0 20px;
    font-size: 14px;
    color: #555;
    line-height: 1.6;
    padding: 5px 0;
}
</style>


            <!-- Reviews Section -->
            <div class="section">
                <h2 class="section-title">Reviews</h2>
                <div class="review-item">
                    <p>5.0</p>
                    <p>Rating Breakdown</p>
                    <hr>
                    <div>
                        <strong>Seller Communication Level:</strong> 5
                        <strong>Quality of Delivery:</strong> 5
                        <strong>Value of Delivery:</strong> 5
                    </div>
                    <p>Shakib (Bangladesh) - "Although mine was a small project, he worked hard to fix it. He took the time to complete the work nicely. I recommend him."</p>
                    <p><strong>Price:</strong> Up to PKR14,000</p>
                    <p><strong>Duration:</strong> 1 day</p>
                </div>
            </div>
    
        </div>
    </div>
    
    <style>
      
      .card-lg {
    width: 100%;
    padding: 30px;
    margin-top: 30px;
    background-color: #fff; /* Ensure the background is white */
    border: 1px solid #ddd; /* Add border to make it visible */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Add subtle shadow for visibility */
    border-radius: 8px; /* Slightly round the edges for design */
}

.section-title {
    font-size: 22px;
    font-weight: bold;
    margin-bottom: 10px;
    color: #333; /* Dark text color for visibility */
}

.card-body p {
    font-size: 18px;
    color: #000000; /* Lighter text color */
}

.row {
    display: flex;
    justify-content: space-between;
}

.col-lg-6 {
    padding: 15px;
}

.card-body {
    padding: 15px; /* Add some padding inside the card */
}

        .profile-img img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
        }
    
        .profile-info h1 {
            font-size: 32px;
            margin-bottom: 15px;
        }
    
        .profile-info p {
            font-size: 18px;
            color: #555;
        }
    
        .carousel-item img {
            height: 400px;
            object-fit: cover;
        }
    
     
        .section p {
            font-size: 18px;
            color: #333;
        }
    
        .faq-item h3, .package h3 {
            font-size: 22px;
            font-weight: bold;
        }
    
        .faq-item p {
            font-size: 18px;
        }
    
        .package {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: #f9f9f9;
        }
    
        .package button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
    
        .package button:hover {
            background-color: #0056b3;
        }
    
        .review-item {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: #f9f9f9;
        }
    
        .review-item p {
            font-size: 16px;
        }
    </style>
    

        <!-- Second Card -->
        <div class="col-lg-6" >
            <div class="card">
                <h3>Package Selector</h3>
                <div class="nav nav-pills card-nav" id="card-tab">
                    <a class="nav-item nav-link active" id="home-tab" data-bs-toggle="tab" href="#home">Basic</a>
                    <a class="nav-item nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile">Standard</a>
                    <a class="nav-item nav-link" id="fan-tab" data-bs-toggle="tab" href="#fan">Premium</a>
                </div>
                <div class="tab-content mt-3">
                    <!-- Home Tab -->
                    <div class="tab-pane fade active show" id="home">
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
<button class="btn btn-dark" style="margin-left: 350px;">Contact me</button>                
                    </div>
                    <!-- Profile Tab -->
                    <div class="tab-pane fade" id="profile">
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
                        <button class="btn btn-dark" style="margin-left: 350px;">Contact me</button>                

                    </div>
                    <!-- Fan Tab -->
                    <div class="tab-pane fade" id="fan">
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
                        <button class="btn btn-dark" style="margin-left: 350px;">Contact me</button>                

        
                    </div>
                </div>
            </div>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.faq-item h3').on('click', function() {
            $(this).next('p').slideToggle();
        });
    });
</script>

@endsection
