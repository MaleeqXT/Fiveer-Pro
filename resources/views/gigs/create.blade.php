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
                                    Tell me more &rarr;
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
                                        <input type="text" class="form-control" name="title" placeholder="Enter your gig title" value="{{ old('title', $lastGig->title ?? '') }}" required>
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
                                            <option value="Programming & Tech" {{ old('category', $lastGig->category ?? '') == 'Programming & Tech' ? 'selected' : '' }}>Programming & Tech</option>
                                            <option value="Graphics & Design" {{ old('category', $lastGig->category ?? '') == 'Graphics & Design' ? 'selected' : '' }}>Graphics & Design</option>
                                        </select>
                                    </div>
                    
                                    <div class="col-md-4">
                                        <select class="form-select" name="sub_category" required>
                                            <option value="Web Development" {{ old('sub_category', $lastGig->sub_category ?? '') == 'Web Development' ? 'selected' : '' }}>Web Development</option>
                                            <option value="Mobile App Development" {{ old('sub_category', $lastGig->sub_category ?? '') == 'Mobile App Development' ? 'selected' : '' }}>Mobile App Development</option>
                                            <option value="Software Development" {{ old('sub_category', $lastGig->sub_category ?? '') == 'Software Development' ? 'selected' : '' }}>Software Development</option>
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
                                            <option value="Front-End Development" {{ old('service_type', $lastGig->service_type ?? '') == 'Front-End Development' ? 'selected' : '' }}>Front-End Development</option>
                                            <option value="Back-End Development" {{ old('service_type', $lastGig->service_type ?? '') == 'Back-End Development' ? 'selected' : '' }}>Back-End Development</option>
                                            <option value="Mobile App Development" {{ old('service_type', $lastGig->service_type ?? '') == 'Mobile App Development' ? 'selected' : '' }}>Mobile App Development</option>
                                            <option value="UI/UX Design" {{ old('service_type', $lastGig->service_type ?? '') == 'UI/UX Design' ? 'selected' : '' }}>UI/UX Design</option>
                                            <option value="SEO Optimization" {{ old('service_type', $lastGig->service_type ?? '') == 'SEO Optimization' ? 'selected' : '' }}>SEO Optimization</option>
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
                                                <input type="radio" name="website_type" value="E-Commerce" id="ecommerce" {{ old('website_type', $lastGig->website_type ?? '') == 'E-Commerce' ? 'checked' : '' }} required>
                                                <label for="ecommerce">E-Commerce store</label>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <input type="radio" name="website_type" value="Business" id="business" {{ old('website_type', $lastGig->website_type ?? '') == 'Business' ? 'checked' : '' }} required>
                                                <label for="business">Business</label>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <input type="radio" name="website_type" value="Portfolio" id="portfolio" {{ old('website_type', $lastGig->website_type ?? '') == 'Portfolio' ? 'checked' : '' }} required>
                                                <label for="portfolio">Portfolio</label>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <input type="radio" name="website_type" value="Blog" id="blog" {{ old('website_type', $lastGig->website_type ?? '') == 'Blog' ? 'checked' : '' }} required>
                                                <label for="blog">Blog</label>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <input type="radio" name="website_type" value="Landing Page" id="landing-page" {{ old('website_type', $lastGig->website_type ?? '') == 'Landing Page' ? 'checked' : '' }} required>
                                                <label for="landing-page">Landing Page</label>
                                            </div>
                                            <div class="col-6 col-md-4">
                                                <input type="radio" name="website_type" value="News Portal" id="news-portal" {{ old('website_type', $lastGig->website_type ?? '') == 'News Portal' ? 'checked' : '' }} required>
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
                                        <input type="text" class="form-control" name="tags" placeholder="Enter tags" value="{{ old('tags', $lastGig->tags ?? '') }}">
                                    </div>
                                </div>
                            </div>
                    
                            <button type="submit" class="btn btn-primary">Save Gig</button>
                        </form>
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
                                        required>{{ old('description', session('description')) }}</textarea>
                                </div>
                            </div>
                
                            <hr class="mt-5">
                
                            <!-- Milestone Workflow -->
                            <div class="milestone-header mt-5">
                                <h2 class="text-muted">Milestone Workflow</h2>
                                <label>
                                    <input type="checkbox" name="milestones_enabled" value="1" {{ old('milestones_enabled') ? 'checked' : '' }}>
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
                
                                <!-- Loop over old input or session data -->
                                @foreach (session('faq_questions', old('faq_questions', [])) as $index => $question)
                                    <div class="faq-item mt-3">
                                        <input type="text" class="form-control mb-2" name="faq_questions[]" value="{{ $question }}" placeholder="Question">
                                        <textarea class="form-control" name="faq_answers[]" placeholder="Answer">{{ old('faq_answers.' . $index, session('faq_answers.' . $index)) }}</textarea>
                                    </div>
                                @endforeach
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

        <div class="tab-pane fade" id="card7-profile">
                        <div class="container mt-5">
                            <h3 class="text-center mb-4">Fiverr Pricing Editor</h3>
                            <form action="{{ route('save.pricing') }}" method="POST">
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
                    
                                <div class="row mt-4">
                                    <!-- Package Name -->
                                    <div class="col-md-3">
                                        <strong>Package Name</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="basic_name" class="form-control" placeholder="Basic package name" value="{{ old('basic_name', $pricingData['basic_name'] ?? '') }}">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="standard_name" class="form-control" placeholder="Standard package name" value="{{ old('standard_name', $pricingData['standard_name'] ?? '') }}">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="premium_name" class="form-control" placeholder="Premium package name" value="{{ old('premium_name', $pricingData['premium_name'] ?? '') }}">
                                    </div>
                                </div>
                                
                                <div class="row mt-4">
                                    <!-- Package Description -->
                                    <div class="col-md-3">
                                        <strong>Package Description</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <textarea name="basic_description" class="form-control" placeholder="Basic package description">{{ old('basic_description', $pricingData['basic_description'] ?? '') }}</textarea>
                                    </div>
                                    <div class="col-md-3">
                                        <textarea name="standard_description" class="form-control" placeholder="Standard package description">{{ old('standard_description', $pricingData['standard_description'] ?? '') }}</textarea>
                                    </div>
                                    <div class="col-md-3">
                                        <textarea name="premium_description" class="form-control" placeholder="Premium package description">{{ old('premium_description', $pricingData['premium_description'] ?? '') }}</textarea>
                                    </div>
                                </div>
                                
                                <div class="row mt-4">
                                    <div class="col-md-3">
                                        <strong>Delivery Days</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="basic_days" class="form-control" placeholder="Basic days" value="{{ old('basic_days', $pricingData['basic_days'] ?? '') }}">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="standard_days" class="form-control" placeholder="Standard days" value="{{ old('standard_days', $pricingData['standard_days'] ?? '') }}">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="premium_days" class="form-control" placeholder="Premium days" value="{{ old('premium_days', $pricingData['premium_days'] ?? '') }}">
                                    </div>
                                </div>
                                <!-- Dynamic Inputs -->
                                <div class="row mt-4">
                                    <!-- Number of Pages -->
                                    <div class="col-md-3">
                                        <strong>Number of Pages</strong>
                                    </div>

                                    <div class="col-md-3">
                                        <input type="number" name="basic_pages" class="form-control" placeholder="Basic pages" value="{{ old('basic_pages', $pricingData['basic_pages'] ?? '') }}">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="standard_pages" class="form-control" placeholder="Standard pages" value="{{ old('standard_pages', $pricingData['standard_pages'] ?? '') }}">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="premium_pages" class="form-control" placeholder="Premium pages" value="{{ old('premium_pages', $pricingData['premium_pages'] ?? '') }}">
                                    </div>
                                </div>
                    
                                <!-- Revisions -->
                                <div class="row mt-3">
                                    <div class="col-md-3">
                                        <strong>Revisions</strong>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="basic_revisions" class="form-select">
                                            <option {{ old('basic_revisions', $pricingData['basic_revisions'] ?? '') == 'No Revisions' ? 'selected' : '' }}>No Revisions</option>
                                            <option {{ old('basic_revisions', $pricingData['basic_revisions'] ?? '') == '1 Revision' ? 'selected' : '' }}>1 Revision</option>
                                            <option {{ old('basic_revisions', $pricingData['basic_revisions'] ?? '') == '2 Revision' ? 'selected' : '' }}>2 Revision</option>
                                            <option {{ old('basic_revisions', $pricingData['basic_revisions'] ?? '') == '3 Revision' ? 'selected' : '' }}>3 Revision</option>
                                            <option {{ old('basic_revisions', $pricingData['basic_revisions'] ?? '') == '4 Revision' ? 'selected' : '' }}>4 Revision</option>
                                            <option {{ old('basic_revisions', $pricingData['basic_revisions'] ?? '') == '5 Revision' ? 'selected' : '' }}>5 Revision</option>
                                            <option {{ old('basic_revisions', $pricingData['basic_revisions'] ?? '') == 'Unlimited' ? 'selected' : '' }}>Unlimited</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="standard_revisions" class="form-select">
                                            <option {{ old('standard_revisions', $pricingData['standard_revisions'] ?? '') == 'No Revisions' ? 'selected' : '' }}>No Revisions</option>
                                            <option {{ old('standard_revisions', $pricingData['standard_revisions'] ?? '') == '1 Revision' ? 'selected' : '' }}>1 Revision</option>
                                            <option {{ old('standard_revisions', $pricingData['standard_revisions'] ?? '') == '2 Revision' ? 'selected' : '' }}>2 Revision</option>
                                            <option {{ old('standard_revisions', $pricingData['standard_revisions'] ?? '') == '3 Revision' ? 'selected' : '' }}>3 Revision</option>
                                            <option {{ old('standard_revisions', $pricingData['standard_revisions'] ?? '') == '4 Revision' ? 'selected' : '' }}>4 Revision</option>
                                            <option {{ old('standard_revisions', $pricingData['standard_revisions'] ?? '') == '5 Revision' ? 'selected' : '' }}>5 Revision</option>
                                            <option {{ old('standard_revisions', $pricingData['standard_revisions'] ?? '') == 'Unlimited' ? 'selected' : '' }}>Unlimited</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="premium_revisions" class="form-select">
                                            <option {{ old('premium_revisions', $pricingData['premium_revisions'] ?? '') == 'No Revisions' ? 'selected' : '' }}>No Revisions</option>
                                            <option {{ old('premium_revisions', $pricingData['premium_revisions'] ?? '') == '1 Revision' ? 'selected' : '' }}>1 Revision</option>
                                            <option {{ old('premium_revisions', $pricingData['premium_revisions'] ?? '') == '2 Revision' ? 'selected' : '' }}>2 Revision</option>
                                            <option {{ old('premium_revisions', $pricingData['premium_revisions'] ?? '') == '3 Revision' ? 'selected' : '' }}>3 Revision</option>
                                            <option {{ old('premium_revisions', $pricingData['premium_revisions'] ?? '') == '4 Revision' ? 'selected' : '' }}>4 Revision</option>
                                            <option {{ old('premium_revisions', $pricingData['premium_revisions'] ?? '') == '5 Revision' ? 'selected' : '' }}>5 Revision</option>
                                            <option {{ old('premium_revisions', $pricingData['premium_revisions'] ?? '') == 'Unlimited' ? 'selected' : '' }}>Unlimited</option>
                                        </select>
                                    </div>
                                </div>
                    
                                <!-- Other Features -->
                                <div class="row mt-3">
                                    <div class="col-md-3"><strong>Content Upload</strong></div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="basic_content_upload" {{ old('basic_content_upload', $pricingData['basic_content_upload'] ?? false) ? 'checked' : '' }}> Include
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="standard_content_upload" {{ old('standard_content_upload', $pricingData['standard_content_upload'] ?? false) ? 'checked' : '' }}> Include
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="premium_content_upload" {{ old('premium_content_upload', $pricingData['premium_content_upload'] ?? false) ? 'checked' : '' }}> Include
                                    </div>
                                </div>
                    
                                <div class="row mt-3">
                                    <div class="col-md-3"><strong>Plugins Installation</strong></div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="basic_plugins" {{ old('basic_plugins', $pricingData['basic_plugins'] ?? false) ? 'checked' : '' }}> Include
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="standard_plugins" {{ old('standard_plugins', $pricingData['standard_plugins'] ?? false) ? 'checked' : '' }}> Include
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="premium_plugins" {{ old('premium_plugins', $pricingData['premium_plugins'] ?? false) ? 'checked' : '' }}> Include
                                    </div>
                                </div>
                    
                                <div class="row mt-3">
                                    <div class="col-md-3"><strong>E-commerce Functionality</strong></div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="basic_ecommerce" {{ old('basic_ecommerce', $pricingData['basic_ecommerce'] ?? false) ? 'checked' : '' }}> Include
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="standard_ecommerce" {{ old('standard_ecommerce', $pricingData['standard_ecommerce'] ?? false) ? 'checked' : '' }}> Include
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="premium_ecommerce" {{ old('premium_ecommerce', $pricingData['premium_ecommerce'] ?? false) ? 'checked' : '' }}> Include
                                    </div>
                                </div>
                    
                                <div class="row mt-3">
                                    <div class="col-md-3"><strong>Number of Products</strong></div>
                                    <div class="col-md-3">
                                        <input type="number" name="basic_products" class="form-control" value="{{ old('basic_products', $pricingData['basic_products'] ?? '') }}">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="standard_products" class="form-control" value="{{ old('standard_products', $pricingData['standard_products'] ?? '') }}">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="premium_products" class="form-control" value="{{ old('premium_products', $pricingData['premium_products'] ?? '') }}">
                                    </div>
                                </div>
                    
                                <div class="row mt-3">
                                    <div class="col-md-3"><strong>Payment Processing</strong></div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="basic_payment" {{ old('basic_payment', $pricingData['basic_payment'] ?? false) ? 'checked' : '' }}> Include
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="standard_payment" {{ old('standard_payment', $pricingData['standard_payment'] ?? false) ? 'checked' : '' }}> Include
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="premium_payment" {{ old('premium_payment', $pricingData['premium_payment'] ?? false) ? 'checked' : '' }}> Include
                                    </div>
                                </div>
                    
                                <!-- Other Functionalities -->
                                <div class="row mt-3">
                                    <div class="col-md-3"><strong>Speed Optimization</strong></div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="basic_speed" {{ old('basic_speed', $pricingData['basic_speed'] ?? false) ? 'checked' : '' }}> Include
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="standard_speed" {{ old('standard_speed', $pricingData['standard_speed'] ?? false) ? 'checked' : '' }}> Include
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="premium_speed" {{ old('premium_speed', $pricingData['premium_speed'] ?? false) ? 'checked' : '' }}> Include
                                    </div>
                                </div>
                    
                                <div class="row mt-3">
                                    <div class="col-md-3"><strong>Social Media Icons</strong></div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="basic_social_media" {{ old('basic_social_media', $pricingData['basic_social_media'] ?? false) ? 'checked' : '' }}> Include
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="standard_social_media" {{ old('standard_social_media', $pricingData['standard_social_media'] ?? false) ? 'checked' : '' }}> Include
                                    </div>
                                    <div class="col-md-3">
                                        <input type="checkbox" name="premium_social_media" {{ old('premium_social_media', $pricingData['premium_social_media'] ?? false) ? 'checked' : '' }}> Include
                                    </div>
                                </div>
                    
                                <!-- Pricing -->
                                <div class="row mt-3">
                                    <div class="col-md-3"><strong>Price</strong></div>
                                    <div class="col-md-3">
                                        <input type="number" name="basic_price" class="form-control" placeholder="$5" min="5" value="{{ old('basic_price', $pricingData['basic_price'] ?? '') }}">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="standard_price" class="form-control" placeholder="$50" min="5" value="{{ old('standard_price', $pricingData['standard_price'] ?? '') }}">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="number" name="premium_price" class="form-control" placeholder="$100" min="5" value="{{ old('premium_price', $pricingData['premium_price'] ?? '') }}">
                                    </div>
                                </div>
                    
                                <!-- Submit -->
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>



                                            <div class="tab-pane fade" id="card7-add-gig">
                                                <h3>Showcase Your Services In A Gig Gallery</h3>
                                                <form id="gigMediaForm" action="{{ route('gig.media.store') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="card" style="border: 1px solid #ddd; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                        <h4>Upload Your Gig Media</h4>
                                                
                                                        <!-- Gig Images -->
                                                        <div class="row mb-4">
                                                            <div class="col-4">
                                                                <div class="box-card" style="border: 2px solid #16181a; border-radius: 8px; padding: 50px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                                    <label for="gigImages" style="font-weight: bold;">Upload Gig Images</label>
                                                                    <div id="imageUpload" class="upload-area" style="border: 2px dashed #0568b9; padding: 30px; text-align: center; color: #1ea7ec;">
                                                                        <button type="button" class="btn btn-outline-primary" onclick="triggerFileInput('gigImages')">Drag & Drop Images Here</button>
                                                                        <input type="file" name="gig_images[]" id="gigImages" class="form-control" accept="image/*" multiple style="display: none;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                     
                                                            <div class="col-8" id="imagePreview" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                                                @if(old('gig_images'))
                                                                    @foreach(old('gig_images') as $image)
                                                                        <div class="preview-item" style="position: relative; width: 290px; height: 180px; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                                            <img src="{{ asset('storage/' . $image) }}" alt="Gig Image" style="width: 100%; height: 100%; object-fit: cover;">
                                                                            <button type="button" class="delete-button" data-id="{{ $loop->index }}" data-type="image" style="position: absolute; top: 5px; right: 5px; background: none; border: none; cursor: pointer; color: #fff; font-size: 20px; background-color: rgba(0,0,0,0.6); padding: 5px; border-radius: 50%;">
                                                                                <i class="fas fa-trash"></i>
                                                                            </button>
                                                                        </div>
                                                                    @endforeach
                                                                @elseif(session('gig_images'))
                                                                    @foreach(session('gig_images') as $image)
                                                                        <div class="preview-item" style="position: relative; width: 270px; height: 180px; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                                            <img src="{{ asset('storage/' . $image) }}" alt="Gig Image" style="width: 100%; height: 100%; object-fit: cover;">
                                                                            <button type="button" class="delete-button" data-id="{{ $loop->index }}" data-type="image" style="position: absolute; top: 5px; right: 5px; background: none; border: none; cursor: pointer; color: #ffffff; font-size: 20px; background-color: rgba(0,0,0,0.6); padding: 5px; border-radius: 50%;">
                                                                                <i class="fas fa-trash"></i>
                                                                            </button>
                                                                        </div>
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                            
                                                        </div>
                                                
                                                        <hr>
                                                
                                                        <!-- Gig Videos -->
                                                        <div class="row mb-4">
                                                            <div class="col-4">
                                                                <div class="box-card" style="border: 2px solid #000000; border-radius: 8px; padding: 50px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                                    <label for="gigVideos" style="font-weight: bold;">Upload Gig Videos</label>
                                                                    <div id="videoUpload" class="upload-area" style="border: 2px dashed #08b7ce; padding: 30px; text-align: center; color: #000000;">
                                                                        <button type="button" class="btn btn-outline-primary" onclick="triggerFileInput('gigVideos')">Drag & Drop Videos Here</button>
                                                                        <input type="file" name="gig_videos[]" id="gigVideos" class="form-control" accept="video/*" multiple style="display: none;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-8" id="videoPreview" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                                                @if(old('gig_videos'))
                                                                    @foreach(old('gig_videos') as $video)
                                                                        <div class="preview-item" style="position: relative; width: 180px; height: 180px; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                                            <video width="100%" height="100%" controls style="object-fit: cover;">
                                                                                <source src="{{ asset('storage/' . $video) }}" type="video/mp4">
                                                                                Your browser does not support the video tag.
                                                                            </video>
                                                                            <button type="button" class="delete-button" data-id="{{ $loop->index }}" data-type="video" style="position: absolute; top: 5px; right: 5px; background: none; border: none; cursor: pointer; color: #000000; font-size: 20px; background-color: rgba(0,0,0,0.6); padding: 5px; border-radius: 50%;">
                                                                                <i class="fas fa-trash"></i>
                                                                            </button>
                                                                        </div>
                                                                    @endforeach
                                                                @elseif(session('gig_videos'))
                                                                    @foreach(session('gig_videos') as $video)
                                                                        <div class="preview-item" style="position: relative; width: 270px; height: 180px; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                                            <video width="100%" height="100%" controls style="object-fit: cover;">
                                                                                <source src="{{ asset('storage/' . $video) }}" type="video/mp4">
                                                                                Your browser does not support the video tag.
                                                                            </video>
                                                                            <button type="button" class="delete-button" data-id="{{ $loop->index }}" data-type="video" style="position: absolute; top: 5px; right: 5px; background: none; border: none; cursor: pointer; color: #fff; font-size: 20px; background-color: rgba(0,0,0,0.6); padding: 5px; border-radius: 50%;">
                                                                                <i class="fas fa-trash"></i>
                                                                            </button>
                                                                        </div>
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                            
                                                        </div>
                                                
                                                        <hr>
                                                
                                                        <!-- Gig Documents -->
                                                        <div class="row mb-4">
                                                            <div class="col-4">
                                                                <div class="box-card" style="border: 2px solid #000000; border-radius: 8px; padding: 50px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                                    <label for="gigDocuments" style="font-weight: bold;">Upload Gig Documents</label>
                                                                    <div id="documentUpload" class="upload-area" style="border: 2px dashed #000000; padding: 30px; text-align: center; color: #000000;">
                                                                        <button type="button" class="btn btn-outline-primary" onclick="triggerFileInput('gigDocuments')">Drag & Drop Documents Here</button>
                                                                        <input type="file" name="gig_documents[]" id="gigDocuments" class="form-control" accept=".pdf, .doc, .docx, .ppt, .txt" multiple style="display: none;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-8" id="documentPreview" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                                                @if(old('gig_documents'))
                                                                    @foreach(old('gig_documents') as $document)
                                                                        <div class="preview-item" style="position: relative; display: flex; align-items: center; gap: 10px;">
                                                                            <a href="{{ asset('storage/' . $document) }}" target="_blank" style="font-size: 14px; color: #16181a; text-decoration: none; font-weight: bold; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">{{ basename($document) }}</a>
                                                                            <button type="button" class="delete-button" data-id="{{ $loop->index }}" data-type="document" style="background: none; border: none; cursor: pointer; color: rgb(86, 86, 86); font-size: 16px;">
                                                                                <i class="fas fa-trash"></i> <!-- Trash icon -->
                                                                            </button>
                                                                        </div>
                                                                    @endforeach
                                                                @elseif(session('gig_documents'))
                                                                    @foreach(session('gig_documents') as $document)
                                                                        <div class="preview-item" style="position: relative; display: flex; align-items: center; gap: 10px;">
                                                                            <a href="{{ asset('storage/' . $document) }}" target="_blank" style="font-size: 14px; color: #16181a; text-decoration: none; font-weight: bold; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">{{ basename($document) }}</a>
                                                                            <button type="button" class="delete-button" data-id="{{ $loop->index }}" data-type="document" style="background: none; border: none; cursor: pointer; color: #ffffff; background-color:rgba(0,0,0,0.6); font-size: 16px;">
                                                                                <i class="fas fa-trash"></i> <!-- Trash icon -->
                                                                            </button>
                                                                        </div>
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                            
                                                        </div>
                                                
                                                        <hr>
                                                
                                                        <!-- Store Gig Button -->
                                                        <div class="row">
                                                            <button type="submit" class="btn btn-outline-primary">Store Gig Media</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <style>
                                                .preview-item {
                                                    position: relative;
                                                }
                                                
                                                .preview-item:hover .delete-button {
                                                    opacity: 1; /* Make the delete button visible on hover */
                                                }
                                            
                                                .delete-button {
                                                    position: absolute;
                                                    top: 5px;
                                                    right: 5px;
                                                    background: none;
                                                    border: none;
                                                    cursor: pointer;
                                                    color: #010101;
                                                    font-size: 20px;
                                                    background-color: rgba(0, 0, 0, 0.6);
                                                    padding: 5px;
                                                    border-radius: 50%;
                                                    opacity: 0;
                                                    transition: opacity 0.3s ease;
                                                }
                                            </style> 
                                            <script>
                                                document.addEventListener('DOMContentLoaded', function () {
                                                    // Add delete event listeners for the trash buttons
                                                    document.querySelectorAll('.delete-button').forEach(button => {
                                                        button.addEventListener('click', function () {
                                                            const type = this.dataset.type; // 'image', 'video', or 'document'
                                                            const id = this.dataset.id;
                                            
                                                            // Remove the item visually
                                                            this.closest('.preview-item').remove();
                                            
                                                            // Optionally send a request to remove the item from storage
                                                            /*
                                                            fetch(`/gig/media/delete`, {
                                                                method: 'POST',
                                                                headers: {
                                                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                                                                    'Content-Type': 'application/json',
                                                                },
                                                                body: JSON.stringify({ type, id }),
                                                            }).then(response => response.json())
                                                              .then(data => {
                                                                  if (data.success) {
                                                                      alert('Item deleted successfully');
                                                                  }
                                                              });
                                                            */
                                                        });
                                                    });
                                                });
                                            
                                                function allowDrop(event) {
                                                    event.preventDefault();
                                                }
                                            
                                                function handleFileDrop(event, type) {
                                                    event.preventDefault();
                                                    const files = event.dataTransfer.files;
                                                    appendFilesToPreview(files, type);
                                                }
                                            
                                                function triggerFileInput(inputId) {
                                                    document.getElementById(inputId).click();
                                                }
                                            
                                                document.getElementById('gigImages').addEventListener('change', function (e) {
                                                    appendFilesToPreview(e.target.files, 'image');
                                                });
                                            
                                                document.getElementById('gigVideos').addEventListener('change', function (e) {
                                                    appendFilesToPreview(e.target.files, 'video');
                                                });
                                            
                                                document.getElementById('gigDocuments').addEventListener('change', function (e) {
                                                    appendFilesToPreview(e.target.files, 'document');
                                                });
                                            
                                                function appendFilesToPreview(files, type) {
                                                    const previewContainer = document.getElementById(type + 'Preview');
                                                    Array.from(files).forEach(file => {
                                                        const reader = new FileReader();
                                                        reader.onload = function (event) {
                                                            let element;
                                                            if (type === 'image') {
                                                                element = document.createElement('img');
                                                                element.src = event.target.result;
                                                                element.style = "max-width: 150px; margin: 5px; border: 1px solid #ddd; border-radius: 5px;";
                                                            } else if (type === 'video') {
                                                                element = document.createElement('video');
                                                                element.src = event.target.result;
                                                                element.controls = true;
                                                                element.style = "max-width: 200px; margin: 5px; border: 1px solid #ddd; border-radius: 5px;";
                                                            } else {
                                                                element = document.createElement('div');
                                                                element.textContent = file.name;
                                                                element.style = "margin: 5px; padding: 5px; border: 1px solid #ddd; border-radius: 5px; background-color: #f9f9f9;";
                                                            }
                                                            previewContainer.appendChild(element);
                                                        };
                                                        reader.readAsDataURL(file);
                                                    });
                                                }
                                            </script>
                                                                                        
                                            <div class="tab-pane fade" id="card7-publish">
                                                <p>Before publishing your gig, ensure that you have uploaded all necessary media files, such as images, videos, or documents. This will help make your gig complete and ready for customers.</p>
                                                <p>If you're ready to showcase your gig, simply click the "Publish Gig" button below. This will make your gig live and visible to others.</p>
                                                <p><strong>Note:</strong> If you haven't uploaded any files yet, please do so before publishing.</p>
                                                <button type="button" class="btn btn-outline-primary" id="publishButton" onclick="verifyAndPublish()">Publish Gig</button>
                                                <div id="feedbackMessage" style="color: red; margin-top: 10px; display: none;">
                                                    <p>Please ensure your ID and email are verified before publishing your gig.</p>
                                                </div>
                                            </div>
                                            
                                            <script>
                                                const user = {
                                                    idVerified: true,
                                                    emailVerified: true
                                                };
                                            
                                                function verifyAndPublish() {
                                                    if (!user.idVerified || !user.emailVerified) {
                                                        document.getElementById('feedbackMessage').style.display = 'block';
                                                    } else {
                                                        document.getElementById('feedbackMessage').style.display = 'none';
                                                        window.location.href = '/profile';
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
