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


        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .packages-section {
            margin-bottom: 30px;
        }
        .package-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }
        .package-box {
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 30%;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .package-box h4 {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        .package-box ul {
            list-style: none;
            padding: 0;
            text-align: left;
        }
        .package-box ul li {
            margin: 10px 0;
        }
        .package-box .price {
            font-size: 1.5rem;
            color: #28a745;
            font-weight: bold;
            margin: 20px 0;
        }
        .info-box {
            background-color: blue;
            color: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .info-box i {
            margin-right: 10px;
        }

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

        .small-pink-button {
    background-color: #ff69b4;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 5px 10px;
    font-size: 14px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.small-pink-button:hover {
    background-color: #ff85c1;
}

.milestone-header {
    display: flex;
    align-items: center; /* Aligns the items vertically */
    gap: 10px; /* Adds space between the <h2> and the button */
}

.small-pink-button {
    background-color: #ff69b4; /* Pink color */
    color: white;
    border: none;
    border-radius: 5px;
    padding: 5px 10px;
    font-size: 14px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.small-pink-button:hover {
    background-color: #ff85c1;
}

.small-pink-button {
    background-color: #ff69b4; /* Pink color */
    color: white;
    border: none;
    border-radius: 5px;
    padding: 2px 6px; /* Smaller padding */
    font-size: 12px; /* Smaller font size */
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.small-pink-button:hover {
    background-color: #ff85c1; /* Slightly lighter pink on hover */
}

.unstyled-button {
        background: none;
        border: none;
        color: inherit;
        padding: 0;
        font: inherit;
        cursor: pointer;
    }

    .plain-button {
    background: none;
    border: none;
    color: inherit;
    padding: 0;
    font: inherit;
    cursor: pointer;
}

.btn-save {
    background-color: black;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 8px 16px;
    font-size: 14px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-save:hover {
    background-color: #333;
}


.button-container {
    display: flex; /* Use flexbox for layout */
    justify-content: space-between; /* Place buttons at opposite ends */
    align-items: center; /* Align buttons vertically */
    width: 100%; /* Ensure it spans the desired width */
}

.plain-button {
    background: none;
    border: none;
    color: inherit;
    padding: 0;
    font: inherit;
    cursor: pointer;
}

.btn-save {
    background-color: black;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 8px 16px;
    font-size: 14px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-save:hover {
    background-color: #333;
}

.icon {
    font-size: 18px;
    color: #555;
    cursor: pointer;
}

.icon:hover {
    color: #ff69b4;
}

/* Utility Styles */
.milestone-header {
    display: flex;
    align-items: center;
    gap: 10px;
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
                        <a class="nav-item nav-link" id="card7-add-gig-tab" data-bs-toggle="tab" href="#card7-add-gig"> Gigs</a>
                        <a class="nav-item nav-link" id="card7-publish-tab" data-bs-toggle="tab" href="#card7-publish">Publish</a>
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
                        <div class="custom-tab-pane mb-4">
                            <h6>Looking to fast-track your success?</h6>
                            <p>
                                
                                Join Kickstart for valuable insights, exclusive benefits, and resources to create a profile that grabs attention.   
                                Let's do it →
                            </p>
                        </div>
                        <h3>Scope & Pricing</h3>
                        <div class="mb-4" style="background-color: blue; color: white; padding: 15px; border-radius: 5px;">
                            <h6>Looking to fast-track your success?</h6>
                            <p>
                                <i class="fas fa-info-circle" style="color: rgb(252, 252, 252); margin-right: 10px;"></i>
                                The scope of this service is to deliver buyers a functional website. Package prices should include predefined options at a minimum of $80. Please move your Gig to another category if you do not offer this specific service.
                            </p>
                        </div><hr>
                        <h6>Packages</h6>

                        <div class="">
                                    <table id="datatable-render" class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Basics</th>
                                                <th>Standard</th>
                                                <th>Premium</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                                <td></td>
                                                <td>Quick Bug Fixes and Customizations</td>
                                                <td>Custom Laravel Features and Website</td>
                                                <td>Professional Responsive Website</td>
                                                
                                            </tr>
                                            <tr>
                                               
                                                <td></td>
                                                <td>
                                                    <p style="margin: 0; font-size: 14px; line-height: 1.2;">
                                                        Pricing is flexible, and I am committed.
                                                    </p>
                                                </td>   
                                                <td>
                                                    <p style="margin: 0; font-size: 14px; line-height: 1.2;">
                                                        Pricing is flexible, and I am committed.
                                                    </p>
                                                </td> 
                                                <td>We offer custom website.</td>
                                               
                                            </tr>
                                            <tr>
                                                
                                                <td></td>
                                                <td>
                                                    <select style="width: 100%; padding: 5px; border-radius: 4px;">
                                                        <option selected>3 day delivery</option>
                                                        <option>1 day delivery</option>
                                                        <option>5 day delivery</option>
                                                        <option>7 day delivery</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select style="width: 100%; padding: 5px; border-radius: 4px;">
                                                        <option selected>10 day delivery</option>
                                                        <option>1 day delivery</option>
                                                        <option>5 day delivery</option>
                                                        <option>7 day delivery</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select style="width: 100%; padding: 5px; border-radius: 4px;">
                                                        <option selected>30 day delivery</option>
                                                        <option>1 day delivery</option>
                                                        <option>5 day delivery</option>
                                                        <option>7 day delivery</option>
                                                    </select>
                                                </td>
                                               
                                            </tr>
                                        
                                            <tr>
                                                
                                                <td>Functional website</td>
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(1.5);">
                                                        
                                                    </label>
                                                </td>
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(1.5);">
                                                        
                                                    </label>
                                                </td>
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(1.5);">
                                                        
                                                    </label>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                               
                                                <td>Number of pages</td>
                                                <td>
                                                    <select style="width: 100%; padding: 5px; border-radius: 4px;">
                                                        <!-- Dropdown options -->
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </td>                                                
                                                <td>
                                                    <select style="width: 100%; padding: 5px; border-radius: 4px;">
                                                        <!-- Dropdown options -->
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select style="width: 100%; padding: 5px; border-radius: 4px;">
                                                        <!-- Dropdown options -->
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </td>
                                              
                                            </tr>
                                            <tr>
                                                
                                                <td>Revisions</td>
                                                <td>
                                                    <select style="width: 100%; padding: 5px; border-radius: 4px;">
                                                        <!-- Dropdown options -->
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="unlimited">Unlimited</option> <!-- Unlimited option -->
                                                    </select>
                                                </td>                                               
                                                
                                                <td>
                                                    <select style="width: 100%; padding: 5px; border-radius: 4px;">
                                                        <!-- Dropdown options -->
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="unlimited">Unlimited</option> <!-- Unlimited option -->
                                                    </select>
                                                </td>      
                                                <td>
                                                    <select style="width: 100%; padding: 5px; border-radius: 4px;">
                                                        <!-- Dropdown options -->
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="unlimited">Unlimited</option> <!-- Unlimited option -->
                                                    </select>
                                                </td>   
                                               
                                            </tr>
                                            <tr>
                                            
                                                <td>Content upload</td>
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(1.8);">
                                                        
                                                    </label>
                                                </td>                                                
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(1.8);">
                                                        
                                                    </label>
                                                </td> 
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(1.8);">
                                                        
                                                    </label>
                                                </td> 
                                                
                                            </tr>
                                            <tr>
                                               
                                                <td>Plugins/extensions installation</td>
                                                <td>
                                                    <select style="width: 100%; padding: 5px; border-radius: 4px;">
                                                        <!-- Dropdown options from 1 to 10 -->
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </td>                                                
                                                <td>
                                                    <select style="width: 100%; padding: 5px; border-radius: 4px;">
                                                        <!-- Dropdown options from 1 to 10 -->
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </td> 
                                                <td>
                                                    <select style="width: 100%; padding: 5px; border-radius: 4px;">
                                                        <!-- Dropdown options from 1 to 10 -->
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </td>  
                                               
                                                
                                            </tr>
                                            <tr>
                                              
                                                <td>E-commerce functionality</td>
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(2);">
                                                        
                                                    </label>
                                                </td>                                                
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(2);">
                                                        
                                                    </label>
                                                </td>
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(2);">
                                                        
                                                    </label>
                                                </td>
                                               
                                            </tr>
                                            <tr>
                                                
                                                <td>Number of products</td>
                                                <td>
                                                    <select style="width: 100%; padding: 5px; border-radius: 4px;">
                                                        <!-- Dropdown options from 1 to 10 -->
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </td>                                                
                                                <td>
                                                    <select style="width: 100%; padding: 5px; border-radius: 4px;">
                                                        <!-- Dropdown options from 1 to 10 -->
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </td> 
                                                <td>
                                                    <select style="width: 100%; padding: 5px; border-radius: 4px;">
                                                        <!-- Dropdown options from 1 to 10 -->
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </td> 
                                                
                                            </tr>
                                            <tr>
                                                
                                                <td>Payment processing</td>
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(2);">
                                                        
                                                    </label>
                                                </td> 
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(2);">
                                                        
                                                    </label>
                                                </td> 
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(2);">
                                                        
                                                    </label>
                                                </td> 
                                                
                                            </tr>
                                            <tr>
                                                
                                                <td>Opt-in form</td>
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(2);">
                                                        
                                                    </label>
                                                </td> 
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(2);">
                                                        
                                                    </label>
                                                </td> 
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(2);">
                                                        
                                                    </label>
                                                </td> 
                                               
                                            </tr>
                                            <tr>
                                                <td>Autoresponder integration</td>
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(2);">
                                                        
                                                    </label>
                                                </td> 
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(2);">
                                                        
                                                    </label>
                                                </td> 
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(2);">
                                                        
                                                    </label>
                                                </td> 
                                               
                                            </tr>
                                            <tr>
                                                
                                                <td>Speed optimization</td>
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(2);">
                                                        
                                                    </label>
                                                </td> 
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(2);">
                                                        
                                                    </label>
                                                </td> 
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(2);">
                                                        
                                                    </label>
                                                </td> 
                                               
                                            </tr>
                                            <tr>
                                               
                                                <td>Hosting setup</td>
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(2);">
                                                        
                                                    </label>
                                                </td> 
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(2);">
                                                        
                                                    </label>
                                                </td>
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(2);">
                                                        
                                                    </label>
                                                </td> 
                                                
                                            </tr>
                                            <tr>
                                                
                                                <td>Social media icons</td>
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(2);">
                                                        
                                                    </label>
                                                </td> 
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(2);">
                                                        
                                                    </label>
                                                </td>
                                                <td>
                                                    <label style="display: flex; align-items: center; gap: 10px;">
                                                        <input type="radio" name="deliveryOption" value="selectedOption" style="transform: scale(2);">
                                                        
                                                    </label>
                                                </td> 
                                               
                                            </tr>
                                            <tr>
                                                
                                                <td>Price</td>
                                                <td>
                                                    <select id="price1" style="width: 100px; padding: 5px;" onchange="updatePrice()">
                                                        <option value="80">$80</option>
                                                        <option value="100">$100</option>
                                                        <option value="120">$120</option>
                                                        <option value="150">$150</option>
                                                        <option value="200">$200</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select id="price1" style="width: 100px; padding: 5px;" onchange="updatePrice()">
                                                        <option value="80">$140</option>
                                                        <option value="100">$150</option>
                                                        <option value="120">$180</option>
                                                        <option value="150">$200</option>
                                                        <option value="200">$220</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select id="price1" style="width: 100px; padding: 5px;" onchange="updatePrice()">
                                                        <option value="80">$900</option>
                                                        <option value="100">$1000</option>
                                                        <option value="120">$1100</option>
                                                        <option value="150">$1200</option>
                                                        <option value="200">$1300</option>
                                                    </select>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                            
                                                <td>Shutterstock Media</td>
                                                <td></td>
                                                <td></td>
                                                <td>Powered by Shutterstock</td>
                                            </tr>   
                                            <tr>
                                                
                                                <td>Licensed images</td>
                                                <td>
                                                    <select style="width: 100%; padding: 5px; border-radius: 4px;">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </td>                                                
                                                <td>
                                                    <select style="width: 100%; padding: 5px; border-radius: 4px;">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </td>      
                                                <td>
                                                    <select style="width: 100%; padding: 5px; border-radius: 4px;">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                    </select>
                                                </td>     
                                            </tr> 
                                            <tr>
                                                
                                                <td>Total Price</td>
                                                <td>
                                                    <select id="price1" style="width: 100px; padding: 5px;" onchange="updatePrice()">
                                                        <option value="80">$80</option>
                                                        <option value="100">$100</option>
                                                        <option value="120">$120</option>
                                                        <option value="150">$150</option>
                                                        <option value="200">$200</option>
                                                    </select>
                                                </td>>
                                                <td>
                                                    <select id="price1" style="width: 100px; padding: 5px;" onchange="updatePrice()">
                                                        <option value="80">$100</option>
                                                        <option value="100">$140</option>
                                                        <option value="120">$150</option>
                                                        <option value="150">$180</option>
                                                        <option value="200">$220</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select id="price1" style="width: 100px; padding: 5px;" onchange="updatePrice()">
                                                        <option value="80">$900</option>
                                                        <option value="100">$1000</option>
                                                        <option value="120">$1100</option>
                                                        <option value="150">$1200</option>
                                                        <option value="200">$1300</option>
                                                    </select>
                                                </td>
                                            </tr>   
                                            
                                        </tbody>
                                    </table>
                                </div>
                              

                                <style>
                                    .radio-option {
                                        border: 1px solid #ccc; /* Light gray border */
                                        padding: 10px; /* Space inside the border */
                                        border-radius: 5px; /* Rounded corners (optional) */
                                        margin-bottom: 10px; /* Space between options */
                                    }
                                </style>
                                <h1>Add extra services</h1>
                                <table>
                                    <tr>
                                        <td>
                                            <label class="radio-option" style="display: flex; align-items: center; gap: 10px;">
                                                <input type="radio" name="deliveryOption" value="extraFastDelivery" style="transform: scale(1.8);">
                                                Extra Fast Delivery
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="radio-option" style="display: flex; align-items: center; gap: 10px;">
                                                <input type="radio" name="deliveryOption" value="additionalPage" style="transform: scale(1.8);">
                                                Additional Page
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="radio-option" style="display: flex; align-items: center; gap: 10px;">
                                                <input type="radio" name="deliveryOption" value="additionalRevision" style="transform: scale(1.8);">
                                                Additional Revision
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="radio-option" style="display: flex; align-items: center; gap: 10px;">
                                                <input type="radio" name="deliveryOption" value="additionalPlugin" style="transform: scale(1.8);">
                                                Additional Plugin Installation
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="radio-option" style="display: flex; align-items: center; gap: 10px;">
                                                <input type="radio" name="deliveryOption" value="additionalProduct" style="transform: scale(1.8);">
                                                Additional Product
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="radio-option" style="display: flex; align-items: center; gap: 10px;">
                                                <input type="radio" name="deliveryOption" value="additionalStockMedia" style="transform: scale(1.8);">
                                                Additional Stock Media
                                            </label>
                                        </td>
                                    </tr>
                                </table>
                                
                              
                                
                        
                        
                    </div>
                   
                   
                   


                   
                   
                   
                   
                    <div class="tab-pane fade" id="card7-contact">
                        <div class="container">
                            <hr>
                            <p class="mt-5 text-muted">Briefly Describe Your Gig</p>
                        
                            <!-- Gig Description -->
                            <div class="card text-center">
                                <div class="card-header">
                                    <ul class="nav nav-pills card-header-pills">
                                        <i class="fas fa-bold icon"></i>
                                        <i class="fas fa-italic icon ms-2"></i>
                                        <i class="fas fa-lightbulb icon ms-2"></i>
                                        <i class="fas fa-book icon ms-2"></i>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <p>
                                        My gig offers expert Laravel development services, specializing in creating custom features, 
                                        responsive websites, and seamless integrations tailored to your unique needs. Whether you need a 
                                        full website built from scratch, quick bug fixes, or personalized customizations, I bring years of 
                                        experience and a commitment to delivering high-quality, reliable solutions. Let’s bring your vision 
                                        to life with professional, scalable web development!
                                    </p>
                                </div>
                            </div>
                        
                            <hr class="mt-5">
                        
                            <!-- Milestone Workflow -->
                            <div class="milestone-header mt-5">
                                <h2 class="text-muted">Milestone Workflow</h2>
                                <button class="small-pink-button">NEW</button>
                            </div>
                            <p class="text-muted mt-2">
                                Attract buyers by turning your Gig into a series of milestones—they’ll know exactly what to expect, 
                                and you’ll get paid when each milestone is completed.
                            </p>
                        
                            <div class="d-flex justify-content-center">
                                <h4 class="mt-4">Want to offer a Milestones workflow?</h4>
                            </div>
                            <p class="text-muted text-center">
                                Make sure your Gig is in an eligible category and your Basic package is priced at $100 or more.
                                <span class="text-success">Learn about Milestones</span>
                            </p>
                        
                            <hr class="mt-5">
                        
                            <!-- Frequently Asked Questions -->
                            <div class="d-flex align-items-center mt-5">
                                <h2 class="text-muted me-3">Frequently Asked Questions</h2>
                                <p class="text-success mb-0" aria-label="Add FAQ" role="button">+Add FAQ</p>
                            </div>
                            <hr>
                            <h6 class="mt-5">Add Questions & Answers for Your Buyers.</h6>
                            <p class="text-success mt-3" aria-label="Add FAQ" role="button">+Add FAQ</p>
                        
                            <hr class="mt-4">
                        
                            <!-- Button Container -->
                            <div class="button-container">
                                <button class="plain-button">Cancel</button>
                                <button class="btn-save">Save</button>
                            </div>
                        </div>
                                            </div>


                                            <div class="tab-pane fade" id="card7-requiriment">
                                                <h3>Get all the information you need from buyers to get started</h3>
                                                <p class="text-muted">
                                                    Get all the information you need from buyers to get started. Add questions to help buyers provide you with 
                                                    exactly what you need to start working on their order.
                                                </p>
                                                <hr>
                                                <p style="text-align: center; line-height: 1.8;">Fiverr Questions</p>
                                                <p class="text-muted">These optional questions will be added for all buyers.</p>
                                                 
                                               <!-- Button to Open Modal -->
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        +Add your Question
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Ask a Question</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!-- Form to add a question -->
                                                                    <form action="{{ route('questions.store') }}" method="POST">
                                                                        @csrf
                                                                        <div class="mb-3">
                                                                            <label for="questionInput" class="form-label">Your Question</label>
                                                                            <input type="text" class="form-control" id="questionInput" name="question" placeholder="Type your question here" required>
                                                                            <div class="form-text">Enter the question you want to ask.</div>
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary">Add Question</button>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Questions List -->
                                                    <div id="questionsList" style="margin-top: 20px;">
                                                        <h4>Your Questions:</h4>
                                                        <ul class="list-group">
                                                            @foreach ($questions as $question)
                                                            <li class="list-group-item">{{ $question->question }}</li>
                                                        @endforeach
                                                        
                                                        </ul>
                                                    </div>


                                            </div>
                                            <br><br>





    
                    
                    <div class="tab-pane fade" id="card7-add-gig">
                        <h3>Showcase Your Services In A Gig Gallery</h3>
                    
                        <!-- Container Card for all the Upload Boxes -->
                        <div class="card" style="border: 1px solid #ddd; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <h4>Upload Your Gig Media</h4>
                    
                            <!-- Row for the Upload Cards -->
                            <!-- Gig Images Box -->
                            <div class="row mb-4">
                                <div class="col-4">
                                    <div class="box-card" style="border: 2px solid #16181a; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                        <label for="gigImages" style="font-weight: bold;">Upload Gig Images (Drag and Drop)</label>
                                        <div id="imageUpload" style="border: 2px dashed #0568b9; padding: 20px; text-align: center; color: #1ea7ec;">
                                            <p>Drag and drop your images here, or click to select</p>
                                            <input type="file" id="gigImages" class="form-control" accept="image/*" multiple style="display: none;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Gig Video Box -->
                            <div class="row mb-4">
                                <div class="col-4">
                                    <div class="box-card" style="border: 2px solid #000000; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                        <label for="gigVideos" style="font-weight: bold;">Upload Gig Video (Drag and Drop)</label>
                                        <div id="videoUpload" style="border: 2px dashed #000000; padding: 20px; text-align: center; color: #000000;">
                                            <p>Drag and drop your video here, or click to select</p>
                                            <input type="file" id="gigVideos" class="form-control" accept="video/*" multiple style="display: none;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Gig Documents Box -->
                            <div class="row mb-4">
                                <div class="col-4">
                                    <div class="box-card" style="border: 2px solid #000000; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                        <label for="gigDocuments" style="font-weight: bold;">Upload Gig Documents (Drag and Drop)</label>
                                        <div id="documentUpload" style="border: 2px dashed #000000; padding: 20px; text-align: center; color: #000000;">
                                            <p>Drag and drop your documents here, or click to select</p>
                                            <input type="file" id="gigDocuments" class="form-control" accept=".pdf, .doc, .docx, .ppt, .txt" multiple style="display: none;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                            <!-- Publish Gig Button -->
                        </div>
                    </div><br><br>
                    
                    <!-- Javascript for Drag and Drop and Gig Actions -->
                    <script>
                        // Handle drag and drop for images
                        document.getElementById('imageUpload').addEventListener('click', function() {
                            document.getElementById('gigImages').click();
                        });
                        document.getElementById('gigImages').addEventListener('change', function(e) {
                            let files = e.target.files;
                            console.log(files);  // Handle file preview if needed
                        });
                    
                        // Handle drag and drop for videos
                        document.getElementById('videoUpload').addEventListener('click', function() {
                            document.getElementById('gigVideos').click();
                        });
                        document.getElementById('gigVideos').addEventListener('change', function(e) {
                            let files = e.target.files;
                            console.log(files);  // Handle file preview if needed
                        });
                    
                        // Handle drag and drop for documents
                        document.getElementById('documentUpload').addEventListener('click', function() {
                            document.getElementById('gigDocuments').click();
                        });
                        document.getElementById('gigDocuments').addEventListener('change', function(e) {
                            let files = e.target.files;
                            console.log(files);  // Handle file preview if needed
                        });
                    
                        // Publish Gig Function
                        function publishGig() {
                            // Your logic for publishing gig
                            alert("Gig Published!");
                        }
                    </script>
                    
                    

                    <div class="tab-pane fade" id="card7-publish">
                        <!-- Publish Button -->
                        <p>Before publishing your gig, ensure that you have uploaded all necessary media files, such as images, videos, or documents. This will help make your gig complete and ready for customers.</p>

                        <p>If you're ready to showcase your gig, simply click the "Publish Gig" button below. This will make your gig live and visible to others.</p>
                        
                        <p><strong>Note:</strong> If you haven't uploaded any files yet, please do so before publishing.</p>

                                                <button type="button" class="btn btn-outline-primary" style="margin-left: 20px;" id="publishButton" onclick="verifyAndPublish()">Publish Gig</button>
                    
                        <!-- Feedback message for validation -->
                        <div id="feedbackMessage" style="color: red; margin-top: 10px; display: none;">
                            <p>Please ensure all required fields are filled before publishing your gig.</p>
                        </div>
                    </div><br>
                    
                    <!-- Javascript for Verification and Publishing -->
                    <script>
                        // Function to verify if all the required fields are filled before allowing publishing
                        function verifyAndPublish() {
                            // Sample verification logic (You can replace this with more specific checks as needed)
                            let imageFiles = document.getElementById('gigImages').files;
                            let videoFiles = document.getElementById('gigVideos').files;
                            let documentFiles = document.getElementById('gigDocuments').files;
                    
                            // Check if any of the required fields are empty
                            if (imageFiles.length === 0 && videoFiles.length === 0 && documentFiles.length === 0) {
                                // Show feedback message
                                document.getElementById('feedbackMessage').style.display = 'block';
                            } else {
                                // Hide the feedback message
                                document.getElementById('feedbackMessage').style.display = 'none';
                    
                                // Your logic for publishing gig goes here
                                alert("Gig Published!");
                            }
                        }
                    </script>
                    




                </div>
                
            </div>
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

@endsection
