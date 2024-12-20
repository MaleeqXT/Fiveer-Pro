<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help & Support</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
.card {
    border: none;
    overflow: hidden;
}


.card-img-overlay {
    background-color: rgba(0, 0, 0, 0.6); /* Add transparency for better readability */
    color: white;
    padding: 20px;
    border-radius: 10px;
}


.category-card {
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
    background-color: #fff;
}

.category-card:hover {
    transform: scale(1.05);
}

.category-card img {
    width: 80px; /* Adjust size for uniform look */
}
.category-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
        }

        .category-card img {
            width: 60px;
            height: 60px;
            margin-bottom: 15px;
        }

        .category-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .category-description {
            font-size: 0.9rem;
            color: #555;
        }

        body {
            background-color: #f5f5f5;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Navbar Styling */
        .navbar {
            background-color: rgba(255, 255, 255, 0.8) !important; /* Slight transparency */
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }

        .navbar-nav .nav-link {
            font-size: 1rem;
            color: #333;
            font-weight: 500;
            margin: 0 10px;
        }

        .navbar-nav .nav-link:hover {
            color: #00ff00; /* Fiverr pink color */
        }

        .btn-signup {
            background-color: #47f716;
            color: #fff;
            font-weight: bold;
            padding: 8px 15px;
            border-radius: 20px;
            border: none;
        }

        .btn-signup:hover {
            background-color: #07c1f0;
        }

        /* Full-Length Card Styling */
        .big-card {
            width: 100%;
            min-height: 300px;
            background-image: url('https://media.licdn.com/dms/image/v2/C561BAQF_tm8QmSmi_g/company-background_10000/company-background_10000/0/1628439047435/fiverrdigitalmarketers_cover?e=2147483647&v=beta&t=-QIaL_Ye8XyQbSLfXIYu7wbsX3fL0ucbWJDVE2PqHxQ'); /* Replace with your image URL */
            background-size: cover;
            background-position: center;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 50px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
        }

        .big-card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .big-card-content {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 800px;
        }

        .search-bar {
            margin-bottom: 20px;
        }

        .search-input {
            width: 100%;
            padding: 15px 20px;
            font-size: 1rem;
            border: none;
            border-radius: 80px;
        }

        .pills-container {
            margin-top: 20px;
        }

        .rounded-pill {
            margin: 5px;
            padding: 10px 20px;
            background-color: #53ed00;
            color: #fff;
            font-weight: bold;
            display: inline-block;
            border-radius: 30px;
            font-size: 0.9rem;
        }

        .rounded-pill:hover {
            background-color: #ff0055;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Fiverr</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Categories</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button class="btn btn-signup">Sign Up</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Full-Length Card -->
    <div class="big-card">
        <div class="big-card-overlay"></div>
        <div class="big-card-content">
            <!-- Search Bar -->
            <div class="search-bar">
                <input type="text" class="search-input" placeholder="Search for services, categories, or anything...">
            </div>
            <!-- Pills -->
            <div class="pills-container">
                <span class="rounded-pill">Web Development</span>
                <span class="rounded-pill">Graphic Design</span>
                <span class="rounded-pill">Digital Marketing</span>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <h1 class="text-center mb-5">Development Languages Categories</h1>
    
        <div class="row g-4">
            <!-- Row 1 -->
            <div class="col-4">
                <div class="category-card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg" alt="Python">
                    <div class="category-title">Python</div>
                    <div class="category-description">AI, ML, Web Development</div>
                </div>
            </div>
            <div class="col-4">
                <div class="category-card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png" alt="JavaScript">
                    <div class="category-title">JavaScript</div>
                    <div class="category-description">Frontend and Backend</div>
                </div>
            </div>
            <div class="col-4">
                <div class="category-card">
                    <img src="https://upload.wikimedia.org/wikipedia/en/3/30/Java_programming_language_logo.svg" alt="Java">
                    <div class="category-title">Java</div>
                    <div class="category-description">Enterprise Applications</div>
                </div>
            </div>
    
            <!-- Row 2 -->
            <div class="col-4">
                <div class="category-card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/1/18/ISO_C%2B%2B_Logo.svg" alt="C++">
                    <div class="category-title">C++</div>
                    <div class="category-description">Game Development</div>
                </div>
            </div>
            <div class="col-4">
                <div class="category-card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" alt="PHP">
                    <div class="category-title">PHP</div>
                    <div class="category-description">Web Development</div>
                </div>
            </div>
            <div class="col-4">
                <div class="category-card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/73/Ruby_logo.svg" alt="Ruby">
                    <div class="category-title">Ruby</div>
                    <div class="category-description">Web Applications</div>
                </div>
            </div>
    
            <!-- Row 3 -->
            <div class="col-4">
                <div class="category-card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9d/Swift_logo.svg" alt="Swift">
                    <div class="category-title">Swift</div>
                    <div class="category-description">iOS Development</div>
                </div>
            </div>
            <div class="col-4">
                <div class="category-card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/74/Kotlin_Icon.png" alt="Kotlin">
                    <div class="category-title">Kotlin</div>
                    <div class="category-description">Android Development</div>
                </div>
            </div>
            <div class="col-4">
                <div class="category-card">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Go_Logo_Blue.svg" alt="GoLang">
                    <div class="category-title">GoLang</div>
                    <div class="category-description">Scalable Applications</div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="container mt-5">
        <div class="card position-relative text-white">
            <!-- Image Section -->
            <img src="https://media.licdn.com/dms/image/v2/D4D12AQF72qqGLFYOcw/article-cover_image-shrink_720_1280/article-cover_image-shrink_720_1280/0/1691080369426?e=2147483647&v=beta&t=lkAHd36i2SLCcOw69f40vZDuSjz1t0l1L7gF0fQap4U" 
                 class="card-img" alt="Card Background Image">
    
            <!-- Overlay Content -->
            <div class="card-img-overlay d-flex flex-column justify-content-center">
                <div class="row">
                    <!-- Categories -->
                    <div class="col-md-3">
                        <h5>Categories</h5>
                        <ul class="list-unstyled">
                            <li>Graphics & Design</li>
                            <li>Digital Marketing</li>
                            <li>Writing & Translation</li>
                            <li>Video & Animation</li>
                            <li>Music & Audio</li>
                            <li>Programming & Tech</li>
                            <li>AI Services</li>
                            <li>Consulting</li>
                            <li>Data</li>
                            <li>Business</li>
                            <li>Personal Growth & Hobbies</li>
                            <li>Photography</li>
                            <li>Finance</li>
                            <li>End-to-End Projects</li>
                            <li>Service Catalog</li>
                        </ul>
                    </div>
    
                    <!-- For Clients -->
                    <div class="col-md-3">
                        <h5>For Clients</h5>
                        <ul class="list-unstyled">
                            <li>How Fiverr Works</li>
                            <li>Customer Success Stories</li>
                            <li>Trust & Safety</li>
                            <li>Quality Guide</li>
                            <li>Fiverr Learn</li>
                            <li>Online Courses</li>
                            <li>Fiverr Guides</li>
                            <li>Fiverr Answers</li>
                        </ul>
                    </div>
                    <!-- For Freelancers -->
                    <div class="col-md-3">
                        <h5>For Freelancers</h5>
                        <ul class="list-unstyled">
                            <li>Become a Fiverr Freelancer</li>
                            <li>Become an Agency</li>
                            <li>Kickstart</li>
                            <li>Community Hub</li>
                            <li>Forum</li>
                            <li>Events</li>
                        </ul>
                        <h5 class="mt-4">Business Solutions</h5>
                        <ul class="list-unstyled">
                            <li>Fiverr Pro</li>
                            <li>Project Management Service</li>
                            <li>ClearVoice</li>
                            <li>Content Marketing</li>
                            <li>Working Not Working</li>
                            <li>Creative Talent</li>
                            <li>AutoDS</li>
                            <li>Dropshipping Tool</li>
                            <li>Fiverr Logo Maker</li>
                            <li>Contact Sales</li>
                        </ul>
                    </div>
                    <!-- Company -->
                    <div class="col-md-3">
                        <h5>Company</h5>
                        <ul class="list-unstyled">
                            <li>About Fiverr</li>
                            <li>Help & Support</li>
                            <li>Social Impact</li>
                            <li>Careers</li>
                            <li>Terms of Service</li>
                            <li>Privacy Policy</li>
                            <li>Partnerships</li>
                            <li>Creator Network</li>
                            <li>Affiliates</li>
                            <li>Invite a Friend</li>
                            <li>Press & News</li>
                            <li>Investor Relations</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="container mt-5">
        <div class="row text-center">
            <!-- Community Hub -->
            <div class="col-3">
                <div class="category-card p-3">
                    <img src="https://img.freepik.com/premium-vector/community-hub-social-logo-design_24599-101.jpg" alt="Community Hub" class="img-fluid mb-2">
                    <div class="category-title font-weight-bold">Community Hub</div>
                    <div class="category-description text-muted">Engage with like-minded people.</div>
                </div>
            </div>
    
            <!-- Forum -->
            <div class="col-3">
                <div class="category-card p-3">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8IGZ51y3yHfDOWPDkMw_VS4g5TRXaltljKA&s" alt="Forum" class="img-fluid mb-2">
                    <div class="category-title font-weight-bold">Forum</div>
                    <div class="category-description text-muted">Discuss ideas and insights.</div>
                </div>
            </div>
    
            <!-- Blog -->
            <div class="col-3">
                <div class="category-card p-3">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROahG_s2YRAIzux4Hf3smDRPVtSKz5K1pBMg&s" alt="Blog" class="img-fluid mb-2">
                    <div class="category-title font-weight-bold">Blog</div>
                    <div class="category-description text-muted">Learn from expert stories.</div>
                </div>
            </div>
    
            <!-- TikTok -->
            <div class="col-3">
                <div class="category-card p-3">
                    <img src="https://cdn.pixabay.com/photo/2021/01/30/06/42/tiktok-5962992_960_720.png" alt="TikTok" class="img-fluid mb-2">
                    <div class="category-title font-weight-bold">TikTok</div>
                    <div class="category-description text-muted">Engage with creative content.</div>
                </div>
            </div>
        </div>
    </div>
<br> <br>    
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        

                        <div>
                            <h5 class="card-title">Can't find what you're looking for?</h5>
                            <p class="card-text">We're here to help.</p>
                            <a href="#" class="btn btn-outline-dark">Contact us</a>
                        </div>

                        <div class="d-flex">
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
    <!-- Bootstrap JS Bundle (includes Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>