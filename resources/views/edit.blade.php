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
                        <h1>Description & FAQ</h1>
                    </div>







                    <div class="tab-pane fade" id="card7-requiriment">
                        <h3>Get all the information you need from buyers to get started</h3>
                        <p class="text-muted">Get all the information you need from buyers to get started. Add questions to help buyers provide you with exactly what you need to start working on their order.</p>
                        <hr>
                        <p style="text-align: center; line-height: 1.8;">Fiverr Questions</p>
                        <p class="text-muted">These optional questions will be added for all buyers.</p>

                        <div class="card" style="border: 1px solid #ddd; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <p style="font-weight: bold; margin-bottom: 10px;">Multiple Choice</p>
                            <h4 style="margin-bottom: 15px;">If you’re ordering for a business, what’s your industry?</h4>
                            <p style="color: #6c757d;">3D design, e-commerce, accounting, marketing, etc.</p>
                        </div><br>

                        <div class="card" style="border: 1px solid #ddd; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <p style="font-weight: bold; margin-bottom: 10px;">Multiple Choice</p>
                            <h4 style="margin-bottom: 15px;"> Is this order part of a bigger project you're working on?</h4>
                            <p style="color: #6c757d;">Building a mobile app, creating an animation, developing a game, etc.</p>
                        </div><br><br>

                        <p style="text-align: center; line-height: 1.8;">Your Questions</p>

                        <div class="card" style="border: 1px solid #ddd; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); background-color: #e6f7ff;">
                            <div style="display: flex; align-items: center; justify-content: space-between;">
                                <div style="display: flex; align-items: center; gap: 10px;">
                                    <i class="fas fa-info-circle" style="font-size: 1.5em; color: #007bff;"></i>
                                    <p style="font-weight: bold; margin: 0;">Take a moment to make sure your questions aren’t asking for the same information requested above.</p>
                                </div>
                                <button type="button" class="btn btn-primary">Dismiss</button>                            </div>
                        </div><br><br>
                        
                        <div class="card" style="border: 1px solid #ddd; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <p style="font-weight: bold; margin-bottom: 10px;">Free text</p>
                            <h5 style="margin-bottom: 15px;">Website Goals What are the main goals of the website or application? (e.g., e-commerce, portfolio, information, etc.)</h5>
                        </div><br>

                        <div class="card" style="border: 1px solid #ddd; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <p style="font-weight: bold; margin-bottom: 10px;">Free text</p>
                            <h5 style="margin-bottom: 15px;">Reference Websites Do you have any websites you like or would like to use as inspiration? Please share the links.</h5>
                        </div><br>

                        <div class="card" style="border: 1px solid #ddd; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <p style="font-weight: bold; margin-bottom: 10px;">Free text</p>
                            <h5 style="margin-bottom: 15px;">What is the goal or purpose of your project?</h5>
                        </div><br>

                        <div class="card" style="border: 1px solid #ddd; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <p style="font-weight: bold; margin-bottom: 10px;">Free text</p>
                            <h5 style="margin-bottom: 15px;">If applicable, do you have an existing website or application that requires updates or migration?</h5>
                        </div><br>

                        <button type="button" class="btn btn-outline-primary">Add New Questions</button>
                        
                    </div><br><br>
                    <button type="button" class="btn btn-light">Cancel</button>
                    <button type="button" class="btn btn-dark" style="margin-left: 80%">Publish gig</button>
                    






                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

@endsection
