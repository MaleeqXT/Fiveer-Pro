@extends('fiverr.layouts.app')
@section('content')
<hr>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Design</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.8.55/css/materialdesignicons.min.css" rel="stylesheet">
    <style>
        .custom-tab-pane {
            border: 2px solid #ec98fd;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: hsl(287, 100%, 91%);
        }

        .dropdown-center .dropdown-toggle {
            background-color: white;
            border: 1px solid #ddd;
        }

        .dropdown-menu {
            background-color: white;
            border: 1px solid #ddd;
        }

        .gig-metadata {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .gig-metadata input[type="radio"] {
            margin-right: 5px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5"> <!-- Added container -->
        <div class="card">
            <div class="card-header card-header-bordered">
                <div class="card-addon me-auto ms-0">
                    <div class="nav nav-lines card-nav" id="card7-tab">
                        <a class="nav-item nav-link active" id="card7-home-tab" data-bs-toggle="tab" href="#card7-home">Overview</a>
                        <a class="nav-item nav-link" id="card7-profile-tab" data-bs-toggle="tab" href="#card7-profile">Pricing</a>
                        <a class="nav-item nav-link" id="card7-contact-tab" data-bs-toggle="tab" href="#card7-contact">Description & FAQ</a>
                        <a class="nav-item nav-link" id="card7-contact-tab" data-bs-toggle="tab" href="#card7-requiriment">Requirement</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="card7-home">
                        <div class="custom-tab-pane mb-4">
                            <h6>Want to know what potential clients are looking for?</h6>
                            <p>
                                Join Kickstart for exclusive access to market research tools, insights,
                                Tell me more →
                            </p>
                        </div>

                        <div class="mb-4">
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <p>
                                        <strong>Gig title</strong><br>
                                        As your Gig storefront, your title is the most important place to include keywords that buyers would likely use to search for a service like yours.
                                    </p>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Enter your gig title">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <p>
                                        <strong>Category</strong><br>
                                        Choose the category and sub-category most suitable for your Gig.
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btn-outline-secondary w-100 dropdown-toggle" data-bs-toggle="dropdown">
                                        Programming & Tech
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Front-End Development</a></li>
                                        <li><a class="dropdown-item" href="#">Back-End Development</a></li>
                                        <li><a class="dropdown-item" href="#">Mobile App Development</a></li>
                                        <li><a class="dropdown-item" href="#">Web Development</a></li>
                                        <li><a class="dropdown-item" href="#">Software Development</a></li>
                                        <li><a class="dropdown-item" href="#">Game Development</a></li>
                                    </ul>
                                </div>

                                <div class="col-md-4">
                                    <button class="btn btn-outline-secondary w-100 dropdown-toggle" data-bs-toggle="dropdown">
                                        WEB DEVELOPMENT
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">API Development</a></li>
                                        <li><a class="dropdown-item" href="#">CMS Development</a></li>
                                        <li><a class="dropdown-item" href="#">Full-Stack Development</a></li>
                                        <li><a class="dropdown-item" href="#">Mobile App Development</a></li>
                                        <li><a class="dropdown-item" href="#">Database Management</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <p>
                                        <strong>Service type</strong>
                                    </p>
                                </div>
                                <div class="col-md-8">
                                    <button class="btn btn-outline-secondary w-100 dropdown-toggle" data-bs-toggle="dropdown">
                                        Select a service type
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Front-End Development</a></li>
                                        <li><a class="dropdown-item" href="#">Back-End Development</a></li>
                                        <li><a class="dropdown-item" href="#">Mobile App Development</a></li>
                                        <li><a class="dropdown-item" href="#">UI/UX Design</a></li>
                                        <li><a class="dropdown-item" href="#">SEO Optimization</a></li>
                                        <li><a class="dropdown-item" href="#">Cloud Computing</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <p>
                                        <strong>Gig metadata</strong><br>
                                        Select the website type you support
                                    </p>
                                </div>
                                <div class="col-md-8 gig-metadata">
                                    <div class="row">
                                        <div class="col-6 col-md-4">
                                            <input type="radio" name="website_type" id="ecommerce">
                                            <label for="ecommerce">E-Commerce store</label>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <input type="radio" name="website_type" id="business">
                                            <label for="business">Business</label>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <input type="radio" name="website_type" id="portfolio">
                                            <label for="portfolio">Portfolio</label>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <input type="radio" name="website_type" id="blog">
                                            <label for="blog">Blog</label>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <input type="radio" name="website_type" id="landing-page">
                                            <label for="landing-page">Landing Page</label>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <input type="radio" name="website_type" id="news-portal">
                                            <label for="news-portal">News Portal</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <p>
                                        <strong>Search tags</strong><br>
                                        Use all 5 tags to get found.
                                    </p>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" placeholder="Enter tags">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="card7-profile">
                        <h1>Pricing</h1>
                    </div>
                   
                   
                   
                   
                   
                   
                   
                    <div class="tab-pane fade" id="card7-contact">
                        <h1>Description & FAQ</h1>
                    </div>
                    <div class="tab-pane fade" id="card7-requiriment">
                        <h1>Requirement</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

@endsection
