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
                        <form action="{{ route('gigs.store') }}" method="POST">
                            @csrf <!-- Laravel CSRF token for security -->
                    
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
                                        <input type="text" class="form-control" name="title" placeholder="Enter your gig title" required>
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
                                        <select class="form-select" name="category" required>
                                            <option value="Programming & Tech">Programming & Tech</option>
                                            <option value="Graphics & Design">Graphics & Design</option>
                                        </select>
                                    </div>
                    
                                    <div class="col-md-4">
                                        <select class="form-select" name="sub_category" required>
                                            <option value="Web Development">Web Development</option>
                                            <option value="Mobile App Development">Mobile App Development</option>
                                            <option value="Software Development">Software Development</option>
                                        </select>
                                    </div>
                                </div>
                    
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <p>
                                            <strong>Service type</strong>
                                        </p>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-select" name="service_type" required>
                                            <option value="Front-End Development">Front-End Development</option>
                                            <option value="Back-End Development">Back-End Development</option>
                                            <option value="Mobile App Development">Mobile App Development</option>
                                            <option value="UI/UX Design">UI/UX Design</option>
                                            <option value="SEO Optimization">SEO Optimization</option>
                                        </select>
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
                                                <input type="radio" name="website_type" value="E-Commerce" id="ecommerce" required>
                                                <label for="ecommerce">E-Commerce store</label>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <input type="radio" name="website_type" value="Business" id="business" required>
                                                <label for="business">Business</label>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <input type="radio" name="website_type" value="Portfolio" id="portfolio" required>
                                                <label for="portfolio">Portfolio</label>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <input type="radio" name="website_type" value="Blog" id="blog" required>
                                                <label for="blog">Blog</label>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <input type="radio" name="website_type" value="Landing Page" id="landing-page" required>
                                                <label for="landing-page">Landing Page</label>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <input type="radio" name="website_type" value="News Portal" id="news-portal" required>
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
                                        <input type="text" class="form-control" name="tags" placeholder="Enter tags">
                                    </div>
                                </div>
                            </div>
                    
                            <button type="submit" class="btn btn-primary">Save Gig</button>
                        </form>
                    </div>
                    




                    <div class="tab-pane fade" id="card7-profile">
                        <div class="container mt-5">
                            <h3 class="text-center mb-4">Fiverr Pricing Editor</h3>
                            <form action="{{route('save.pricing')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <!-- Pricing Headers -->
                                    <div class="col-md-4">
                                        <div class="pricing-header">
                                            <h5>Basic</h5>
                                            <p>Essential package</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="pricing-header">
                                            <h5>Standard</h5>
                                            <p>Medium-tier package</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="pricing-header">
                                            <h5>Premium</h5>
                                            <p>Top-tier package</p>
                                        </div>
                                    </div>
                                </div>
                    
                                <!-- Dynamic Inputs -->
                                <div class="row mt-4">
                                    <!-- Number of Pages -->
                                    <div class="col-md-3">
                                        <strong>Number of Pages</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="basic_pages" class="form-control" placeholder="Basic pages">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="standard_pages" class="form-control" placeholder="Standard pages">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="premium_pages" class="form-control" placeholder="Premium pages">
                                    </div>
                                </div>
                    
                                <!-- Revisions -->
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <strong>Revisions</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="basic_revisions" class="form-select">
                                            <option>No Revisions</option>
                                            <option>1 Revision</option>
                                            <option>2 Revision</option>
                                            <option>3 Revision</option>
                                            <option>4 Revision</option>
                                            <option>5 Revision</option>

                                            <option>Unlimited</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="standard_revisions" class="form-select">
                                            <option>No Revisions</option>
                                            <option>1 Revision</option>
                                            <option>2 Revision</option>
                                            <option>3 Revision</option>
                                            <option>4 Revision</option>
                                            <option>5 Revisions</option>
                                            <option>Unlimited</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="premium_revisions" class="form-select">
                                            <option>No Revisions</option>
                                            <option>1 Revision</option>
                                            <option>2 Revision</option>
                                            <option>3 Revision</option>
                                            <option>4 Revision</option>
                                            <option>5 Revisions</option>
                                            <option>Unlimited</option>
                                        </select>
                                    </div>
                                </div>
                    
                                <!-- Other Features -->
                                <div class="row mt-3">
                                    <div class="col-md-3"><strong>Content Upload</strong></div>
                                    <div class="col-md-3"><input type="checkbox" name="basic_content_upload"> Include</div>
                                    <div class="col-md-3"><input type="checkbox" name="standard_content_upload"> Include</div>
                                    <div class="col-md-3"><input type="checkbox" name="premium_content_upload"> Include</div>
                                </div>
                    
                                <div class="row mt-3">
                                    <div class="col-md-3"><strong>Plugins Installation</strong></div>
                                    <div class="col-md-3"><input type="checkbox" name="basic_plugins"> Include</div>
                                    <div class="col-md-3"><input type="checkbox" name="standard_plugins"> Include</div>
                                    <div class="col-md-3"><input type="checkbox" name="premium_plugins"> Include</div>
                                </div>
                    
                                <div class="row mt-3">
                                    <div class="col-md-3"><strong>E-commerce Functionality</strong></div>
                                    <div class="col-md-3"><input type="checkbox" name="basic_ecommerce"> Include</div>
                                    <div class="col-md-3"><input type="checkbox" name="standard_ecommerce"> Include</div>
                                    <div class="col-md-3"><input type="checkbox" name="premium_ecommerce"> Include</div>
                                </div>
                    
                                <div class="row mt-3">
                                    <div class="col-md-3"><strong>Number of Products</strong></div>
                                    <div class="col-md-3"><input type="number" name="basic_products" class="form-control"></div>
                                    <div class="col-md-3"><input type="number" name="standard_products" class="form-control"></div>
                                    <div class="col-md-3"><input type="number" name="premium_products" class="form-control"></div>
                                </div>
                    
                                <div class="row mt-3">
                                    <div class="col-md-3"><strong>Payment Processing</strong></div>
                                    <div class="col-md-3"><input type="checkbox" name="basic_payment"> Include</div>
                                    <div class="col-md-3"><input type="checkbox" name="standard_payment"> Include</div>
                                    <div class="col-md-3"><input type="checkbox" name="premium_payment"> Include</div>
                                </div>
                    
                                <!-- Other Functionalities -->
                                <div class="row mt-3">
                                    <div class="col-md-3"><strong>Speed Optimization</strong></div>
                                    <div class="col-md-3"><input type="checkbox" name="basic_speed"> Include</div>
                                    <div class="col-md-3"><input type="checkbox" name="standard_speed"> Include</div>
                                    <div class="col-md-3"><input type="checkbox" name="premium_speed"> Include</div>
                                </div>
                    
                                <div class="row mt-3">
                                    <div class="col-md-3"><strong>Social Media Icons</strong></div>
                                    <div class="col-md-3"><input type="checkbox" name="basic_social_media"> Include</div>
                                    <div class="col-md-3"><input type="checkbox" name="standard_social_media"> Include</div>
                                    <div class="col-md-3"><input type="checkbox" name="premium_social_media"> Include</div>
                                </div>
                    
                                <!-- Pricing -->
                                <div class="row mt-3">
                                    <div class="col-md-3"><strong>Price</strong></div>
                                    <div class="col-md-3"><input type="number" name="basic_price" class="form-control" placeholder="$5" min="5"></div>
                                    <div class="col-md-3"><input type="number" name="standard_price" class="form-control" placeholder="$50" min="5"></div>
                                    <div class="col-md-3"><input type="number" name="premium_price" class="form-control" placeholder="$100" min="5"></div>
                                </div>
                    
                                <!-- Submit -->
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    
                        
                    </div>
                    <style>
                        .pricing-header {
                            background-color: #f8f9fa;
                            border: 2px solid #007bff;
                            border-radius: 8px;
                            text-align: center;
                            padding: 15px;
                            margin-bottom: 20px;
                        }
                
                        .form-control, .form-select {
                            margin-bottom: 10px;
                        }
                
                        .pricing-section {
                            border: 1px solid #ddd;
                            border-radius: 8px;
                            padding: 20px;
                            background: #fff;
                            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                        }
                
                        .pricing-section h5 {
                            color: #007bff;
                        }
                
                        .btn-primary {
                            background-color: #007bff;
                            border-color: #007bff;
                        }
                    </style>                   
                   
                   


                   
                   
                   
                   <div class="tab-pane fade" id="card7-contact">
                    <div class="container">
                        <!-- Store Form -->
                        <form action="{{ route('gig-details.store') }}" method="POST">
                            @csrf
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
                                    <textarea 
                                        name="description" 
                                        class="form-control" 
                                        placeholder="Describe your gig..." 
                                        required>{{ old('description') }}</textarea>
                                </div>
                            </div>
            
                            <hr class="mt-5">
            
                            <!-- Milestone Workflow -->
                            <div class="milestone-header mt-5">
                                <h2 class="text-muted">Milestone Workflow</h2>
                                <label>
                                    <input type="checkbox" name="milestones_enabled" value="1">
                                    Enable Milestones Workflow
                                </label>
                            </div>
                            <p class="text-muted mt-2">
                                Attract buyers by turning your Gig into a series of milestones—they’ll know exactly what to expect, 
                                and you’ll get paid when each milestone is completed.
                            </p>
            
                            <hr class="mt-5">
            
                            <!-- Frequently Asked Questions -->
                            <div id="faq-section">
                                <h2 class="text-muted me-3">Frequently Asked Questions</h2>
                                <div class="faq-item mt-3">
                                    <input type="text" class="form-control mb-2" name="faq_questions[]" placeholder="Question">
                                    <textarea class="form-control" name="faq_answers[]" placeholder="Answer"></textarea>
                                </div>
                            </div>
                            <button type="button" id="add-faq" class="btn btn-link text-success">+ Add FAQ</button>
            
                            <hr class="mt-4">
            
                            <!-- Button Container -->
                            <div class="button-container">
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
            
                        <!-- Show Gig Details -->
                        @isset($gigDetail)
                            <hr class="mt-5">
                            <h2 class="text-muted">Gig Details</h2>
                            <p>{{ $gigDetail->description }}</p>
            
                            <h3>Milestone Workflow</h3>
                            <p>{{ $gigDetail->milestones_enabled ? 'Enabled' : 'Disabled' }}</p>
            
                            <h3>FAQs</h3>
                            @if ($gigDetail->faqs->count())
                                <ul>
                                    @foreach ($gigDetail->faqs as $faq)
                                        <li>
                                            <strong>{{ $faq->question }}</strong>
                                            <p>{{ $faq->answer }}</p>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <p>No FAQs available.</p>
                            @endif
                        @endisset
                    </div>
                </div>
            
                <script>
                    document.getElementById('add-faq').addEventListener('click', function () {
                        const faqSection = document.getElementById('faq-section');
                        const newFaq = document.createElement('div');
                        newFaq.classList.add('faq-item', 'mt-3');
                        newFaq.innerHTML = `
                            <input type="text" class="form-control mb-2" name="faq_questions[]" placeholder="Question">
                            <textarea class="form-control" name="faq_answers[]" placeholder="Answer"></textarea>
                        `;
                        faqSection.appendChild(newFaq);
                    });
                </script>


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
                                                <form id="gigMediaForm" action="{{ route('gig.media.store') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="card" style="border: 1px solid #ddd; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                        <h4>Upload Your Gig Media</h4>
                                            
                                                        <!-- Gig Images -->
                                                        <div class="row mb-4">
                                                            <div class="col-4">
                                                                <div class="box-card" style="border: 2px solid #16181a; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                                    <label for="gigImages" style="font-weight: bold;">Upload Gig Images</label>
                                                                    <div id="imageUpload" class="upload-area" style="border: 2px dashed #0568b9; padding: 20px; text-align: center; color: #1ea7ec;" ondrop="handleFileDrop(event, 'image')" ondragover="allowDrop(event)">
                                                                        <button type="button" class="btn btn-outline-primary">Drag & Drop Images Here</button>
                                                                        <input type="file" name="gig_images[]" id="gigImages" class="form-control" accept="image/*" multiple style="display: none;">
                                                                    </div>
                                                                    <div id="imagePreview" class="mt-3"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                            
                                                        <!-- Gig Videos -->
                                                        <div class="row mb-4">
                                                            <div class="col-4">
                                                                <div class="box-card" style="border: 2px solid #000000; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                                    <label for="gigVideos" style="font-weight: bold;">Upload Gig Video</label>
                                                                    <div id="videoUpload" class="upload-area" style="border: 2px dashed #000000; padding: 20px; text-align: center; color: #000000;" ondrop="handleFileDrop(event, 'video')" ondragover="allowDrop(event)">
                                                                        <button type="button" class="btn btn-outline-primary">Drag & Drop Videos Here</button>
                                                                        <input type="file" name="gig_videos[]" id="gigVideos" class="form-control" accept="video/*" multiple style="display: none;">
                                                                    </div>
                                                                    <div id="videoPreview" class="mt-3"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                            
                                                        <!-- Gig Documents -->
                                                        <div class="row mb-4">
                                                            <div class="col-4">
                                                                <div class="box-card" style="border: 2px solid #000000; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                                    <label for="gigDocuments" style="font-weight: bold;">Upload Gig Documents</label>
                                                                    <div id="documentUpload" class="upload-area" style="border: 2px dashed #000000; padding: 20px; text-align: center; color: #000000;" ondrop="handleFileDrop(event, 'document')" ondragover="allowDrop(event)">
                                                                        <button type="button" class="btn btn-outline-primary">Drag & Drop Documents Here</button>
                                                                        <input type="file" name="gig_documents[]" id="gigDocuments" class="form-control" accept=".pdf, .doc, .docx, .ppt, .txt" multiple style="display: none;">
                                                                    </div>
                                                                    <div id="documentPreview" class="mt-3"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                            
                                                        <!-- Store Gig Button -->
                                                        <div class="row">
                                                            <button type="submit" class="btn btn-outline-primary">Store Gig Media</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            
                                            <script>
                                                function allowDrop(event) {
                                                    event.preventDefault();
                                                }
                                            
                                                function handleFileDrop(event, type) {
                                                    event.preventDefault();
                                                    let files = event.dataTransfer.files;
                                                    previewFiles(files, type);
                                                }
                                            
                                                document.getElementById('gigImages').addEventListener('change', function (e) {
                                                    previewFiles(e.target.files, 'image');
                                                });
                                            
                                                document.getElementById('gigVideos').addEventListener('change', function (e) {
                                                    previewFiles(e.target.files, 'video');
                                                });
                                            
                                                document.getElementById('gigDocuments').addEventListener('change', function (e) {
                                                    previewFiles(e.target.files, 'document');
                                                });
                                            
                                                function previewFiles(files, type) {
                                                    const previewContainer = document.getElementById(type + 'Preview');
                                                    previewContainer.innerHTML = '';
                                                    Array.from(files).forEach(file => {
                                                        const reader = new FileReader();
                                                        reader.onload = function (event) {
                                                            let element;
                                                            if (type === 'image') {
                                                                element = document.createElement('img');
                                                                element.src = event.target.result;
                                                                element.style = "max-width: 100px; margin: 5px;";
                                                            } else if (type === 'video') {
                                                                element = document.createElement('video');
                                                                element.src = event.target.result;
                                                                element.controls = true;
                                                                element.style = "max-width: 200px; margin: 5px;";
                                                            } else {
                                                                element = document.createElement('p');
                                                                element.textContent = file.name;
                                                                element.style = "margin: 5px;";
                                                            }
                                                            previewContainer.appendChild(element);
                                                        };
                                                        reader.readAsDataURL(file);
                                                    });
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
                                        <p>Please ensure your ID and email are verified before publishing your gig.</p>
                                    </div>
                                </div><br>
                                
                                <!-- Javascript for Verification and Publishing -->
                                <script>
                                    // Mock user data
                                    const user = {
                                        idVerified: true, // Set to true or false to test
                                        emailVerified: true // Set to true or false to test
                                    };
                                
                                    // Function to verify and redirect
                                    function verifyAndPublish() {
                                        // Check if both ID and email are verified
                                        if (!user.idVerified || !user.emailVerified) {
                                            // Show feedback message
                                            document.getElementById('feedbackMessage').style.display = 'block';
                                        } else {
                                            // Hide feedback message and redirect to the profile page
                                            document.getElementById('feedbackMessage').style.display = 'none';
                                            window.location.href = '/profile'; // Redirect to the profile page
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
