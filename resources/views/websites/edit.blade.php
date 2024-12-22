@extends('fiverr.layouts.app')
@section('content')
<hr>
<style>
        table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    table th, table td {
        border: 1px solid #ddd;
        text-align: center;
        padding: 10px;
    }

    table th {
        background-color: #f8f8f8;
        font-weight: bold;
    }

    input, select {
        padding: 5px;
        width: 90%;
        box-sizing: border-box;
    }

    input[readonly] {
        background-color: #f2f2f2;
        color: #666;
    }

</style>

<div class="container">
    <div class="row">
        <div class="col-12">
                <div class="card-body">
                    <div class="row g-3">
                        
                        <div class="card border mb-0">
                            <div class="card-body">
                                <div class="mb-3">
                                    <div class="nav nav-lines mb-0" id="nav1-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav1-home-tab" data-bs-toggle="tab" href="#nav1-home" aria-selected="true" role="tab">Overview</a>
                                        <a class="nav-item nav-link" id="nav1-profile-tab" data-bs-toggle="tab" href="#nav1-profile" aria-selected="false" role="tab" tabindex="-1">Pricing</a>
                                        <a class="nav-item nav-link" id="nav1-contact-tab" data-bs-toggle="tab" href="#nav1-contact" aria-selected="false" role="tab" tabindex="-1">Description & FAQ</a>
                                        <a class="nav-item nav-link" id="nav1-hello-tab" data-bs-toggle="tab" href="#nav1-hello" aria-selected="false" role="tab" tabindex="-1">Requirements</a>
                                        <a class="nav-item nav-link" id="nav1-good-tab" data-bs-toggle="tab" href="#nav1-good" aria-selected="false" role="tab" tabindex="-1">Gallery</a>
                                    </div>
                                </div><hr>
                                <div class="tab-content" id="nav1-tabContent">


                                    <div class="tab-pane fade active show" id="nav1-home" role="tabpanel" aria-labelledby="nav1-home-tab">
                                        <div class="card mt-4">
                                            <div class="card" style="background-color: rgb(251, 193, 253)">
                                                <div class="card-body">
                                                    <h5>Want to know what potential clients are looking for?</h5>
                                                    <p>Join Kickstart for exclusive access to market research tools, insights, and analytics to create Gigs that get noticed.</p>
                                                    <a href="#" class="btn btn-primary">Tell me more &rarr;</a>
                                                </div>
                                            </div>
                                    
                                            <form action="{{ route('gigs.store') }}" method="POST">
                                                @csrf <!-- CSRF token for security -->
                                    
                                                <!-- Gig Title -->
                                                <div class="card-body d-flex align-items-center mt-4">
                                                    <div class="w-50">
                                                        <h5>Gig Title</h5>
                                                        <p>Include keywords buyers might use to search for your service.</p>
                                                    </div>
                                                    <div class="w-50">
                                                        <input type="text" name="title" class="form-control" placeholder="Enter your Gig title" required>
                                                    </div>
                                                </div>
                                    
                                                <!-- Category and Sub-Category -->
                                                <div class="card-body d-flex align-items-center mt-4">
                                                    <div class="w-50">
                                                        <h5>Category</h5>
                                                        <p>Choose the category and sub-category for your Gig.</p>
                                                    </div>
                                                    <div class="w-50 d-flex">
                                                        <select name="category" class="form-control me-2" style="width: 48%;" required>
                                                            <option value="">Select Category</option>
                                                            <option value="web-design">Web Design</option>
                                                            <option value="writing">Writing</option>
                                                        </select>
                                                        <select name="sub_category" class="form-control" style="width: 48%;" required>
                                                            <option value="">Select Sub-Category</option>
                                                            <option value="graphic-design">Graphic Design</option>
                                                            <option value="seo">SEO</option>
                                                        </select>
                                                    </div>
                                                </div>
                                    
                                                <!-- Service Type -->
                                                <div class="card-body d-flex align-items-center mt-4">
                                                    <div class="w-50">
                                                        <h5>Service Type</h5>
                                                        <p>Select the type of service you are offering.</p>
                                                    </div>
                                                    <div class="w-50">
                                                        <select name="service_type" class="form-control" required>
                                                            <option value="">Select Service Type</option>
                                                            <option value="one-time">One-time</option>
                                                            <option value="recurring">Recurring</option>
                                                            <option value="custom">Custom</option>
                                                        </select>
                                                    </div>
                                                </div>
                                    
                                                <!-- Gig Metadata -->
                                                <div class="card-body d-flex align-items-center mt-4">
                                                    <div class="w-50">
                                                        <h5>Gig Metadata</h5>
                                                        <p>Enhance your Gig visibility with metadata.</p>
                                                    </div>
                                                    <div class="w-50">
                                                        <select name="metadata" class="form-control">
                                                            <option value="">Select Metadata</option>
                                                            <option value="keywords">Keywords</option>
                                                            <option value="tags">Tags</option>
                                                        </select>
                                                    </div>
                                                </div>
                                    
                                                <!-- Search Tags -->
                                                <div class="card-body d-flex align-items-center mt-4">
                                                    <div class="w-50">
                                                        <h5>Search Tags</h5>
                                                        <p>Tag your Gig with relevant buzzwords. Use all 5 tags.</p>
                                                    </div>
                                                    <div class="w-50">
                                                        <input type="text" name="tags" class="form-control" placeholder="Enter up to 5 search tags" required>
                                                    </div>
                                                </div>
                                    
                                                <p class="text-center">Some categories require sellers to verify their skills.</p>
                                    
                                                <div class="text-center mt-4">
                                                    <button type="submit" class="btn btn-primary">Save Gig</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="tab-pane fade" id="nav1-profile" role="tabpanel" aria-labelledby="#nav1-profile-tab">
                                        <div class="card" style="background-color: rgb(251, 193, 253);">
                                            <div class="card-body">
                                                <h5 class="card-title">Looking to fast-track your success?</h5>
                                                <p class="card-text">Join Kickstart for valuable insights, exclusive benefits, and resources to create a profile that grabs attention.</p>
                                                <a href="#" class="btn btn-primary">Tell me more →</a>
                                            </div>
                                        </div>
                                    
                                        <!-- Success Message -->
                                        @if(session('success'))
                                            <div class="alert alert-success">{{ session('success') }}</div>
                                        @endif
                                    
                                        <form method="POST" action="{{ route('packages.store') }}">
                                            @csrf
                                            <h2 class="mt-5">Scope & Pricing</h2>
                                            <div class="card text-white" style="background-color: rgb(89, 79, 236);">
                                                <div class="card-body">
                                                    <p class="card-text">The scope of this service is to deliver buyers a functional website. Package prices start at $80. Move your Gig to another category if you do not offer this service.</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <h5>Packages</h5>
                                            <table border="1" style="width: 100%; border-collapse: collapse; font-family: Arial, sans-serif;">
                                                <thead>
                                                    <tr><th>Feature</th><th>Basic</th><th>Standard</th><th>Premium</th></tr>
                                                </thead>
                                                <tbody>
                                                    <!-- Quick Bug Fixes -->
                                                    <tr>
                                                        <td><input type="text" name="feature_quick_bug_fixes" value="Quick Bug Fixes" style="width: 100%;"></td>
                                                        <td><input type="checkbox" name="bug_fixes_basic" value="1"></td>
                                                        <td><input type="checkbox" name="bug_fixes_standard" value="1"></td>
                                                        <td><input type="checkbox" name="bug_fixes_premium" value="1"></td>
                                                    </tr>
                                                    <!-- Custom Laravel Features -->
                                                    <tr>
                                                        <td><input type="text" name="feature_custom_laravel" value="Custom Laravel Features" style="width: 100%;"></td>
                                                        <td><input type="checkbox" name="custom_features_basic" value="1"></td>
                                                        <td><input type="checkbox" name="custom_features_standard" value="1"></td>
                                                        <td><input type="checkbox" name="custom_features_premium" value="1"></td>
                                                    </tr>
                                                    <!-- Professional Responsive Website -->
                                                    <tr>
                                                        <td><input type="text" name="feature_responsive_website" value="Professional Responsive Website" style="width: 100%;"></td>
                                                        <td><input type="checkbox" name="responsive_basic" value="1"></td>
                                                        <td><input type="checkbox" name="responsive_standard" value="1"></td>
                                                        <td><input type="checkbox" name="responsive_premium" value="1"></td>
                                                    </tr>
                                                    <!-- Number of Pages -->
                                                    <tr>
                                                        <td>Number of Pages</td>
                                                        <td><select name="pages_basic"><option>1</option><option>5</option></select></td>
                                                        <td><select name="pages_standard"><option>5</option><option>10</option></select></td>
                                                        <td><select name="pages_premium"><option>10</option><option>20</option></select></td>
                                                    </tr>
                                                    <!-- Revisions -->
                                                    <tr>
                                                        <td>Revisions</td>
                                                        <td><input type="number" name="revisions_basic" min="0" max="5" value="2"></td>
                                                        <td><input type="number" name="revisions_standard" min="0" max="10" value="4"></td>
                                                        <td><input type="text" value="Unlimited" readonly></td>
                                                    </tr>
                                                    <!-- Content Upload -->
                                                    <tr>
                                                        <td>Content Upload</td>
                                                        <td><input type="checkbox" name="content_upload_basic" value="1" checked></td>
                                                        <td><input type="checkbox" name="content_upload_standard" value="1" checked></td>
                                                        <td><input type="checkbox" name="content_upload_premium" value="1" checked></td>
                                                    </tr>
                                                    <!-- Plugins/Extensions -->
                                                    <tr>
                                                        <td>Plugins/Extensions</td>
                                                        <td><input type="checkbox" name="plugins_basic" value="1" checked></td>
                                                        <td><input type="checkbox" name="plugins_standard" value="1" checked></td>
                                                        <td><input type="checkbox" name="plugins_premium" value="1" checked></td>
                                                    </tr>
                                                    <!-- Price -->
                                                    <tr>
                                                        <td>Price</td>
                                                        <td><input type="number" name="price_basic" value="80" style="width: 100%;"></td>
                                                        <td><input type="number" name="price_standard" value="140" style="width: 100%;"></td>
                                                        <td><input type="number" name="price_premium" value="900" style="width: 100%;"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                    
                                            <h4 class="mt-5">Add Extra Services</h4>
                                            <table border="1" style="width: 100%; border-collapse: collapse;">
                                                <thead>
                                                    <tr><th>Extra Options</th><th>Select</th></tr>
                                                </thead>
                                                <tbody>
                                                    <tr><td>Extra Fast Delivery</td><td><input type="radio" name="extra_option" value="Extra Fast Delivery"></td></tr>
                                                    <tr><td>Additional Page</td><td><input type="radio" name="extra_option" value="Additional Page"></td></tr>
                                                    <tr><td>Additional Revision</td><td><input type="radio" name="extra_option" value="Additional Revision"></td></tr>
                                                    <tr><td>Additional Plugin Installation</td><td><input type="radio" name="extra_option" value="Additional Plugin Installation"></td></tr>
                                                    <tr><td>Additional Product</td><td><input type="radio" name="extra_option" value="Additional Product"></td></tr>
                                                    <tr><td>Additional Stock Media</td><td><input type="radio" name="extra_option" value="Additional Stock Media"></td></tr>
                                                </tbody>
                                            </table>
                                    
                                            <button type="submit" class="btn btn-primary">Save Packages</button>
                                        </form>
                                    </div>
                                    
                                    


                                 
                                    <div class="tab-pane fade" id="nav1-contact" role="tabpanel" aria-labelledby="#nav1-contact-tab">
                                        <!-- Card Section -->
                                        <div class="card" style="background-color: rgb(251, 193, 253);">
                                            <div class="card-body">
                                                <h5 class="card-title">Ready to create stand-out Gigs?</h5>
                                                <p>With Kickstart, you can optimize your Gigs using AI-based feedback and learn insights to attract more clients.</p>
                                                <a href="#" class="btn btn-primary">Tell me more →</a>
                                            </div>
                                        </div>
                                    
                                        <!-- Description Section -->
                                        <h2 class="text-secondary mt-5">Description</h2>
                                        <hr>
                                        <h5>Briefly Describe Your Gig</h5>
                                        <textarea id="description" class="form-control mt-3" rows="4" placeholder="Enter your Gig description"></textarea>
                                        <hr>
                                    
                                        <!-- Milestone Workflow -->
                                        <h3 class="text-secondary mt-5">Milestone Workflow</h3>
                                        <p>Attract buyers by turning your Gig into a series of milestones—they’ll know exactly what to expect and you’ll get paid when each milestone is completed.</p>
                                        <div class="text-center mt-5">
                                            <h3>Want to offer a Milestones workflow?</h3>
                                            <p>Make sure your Gig is in an eligible category and your Basic package is priced at $100 or more.</p>
                                        </div>
                                        <hr>
                                    
                                        <!-- FAQ Section -->
                                        <h3 class="mt-5">Frequently Asked Questions</h3>
                                        <hr>
                                        <div id="faq-section" class="p-3"></div>
                                        <button class="btn btn-outline-primary mt-3" id="toggle-faq-form">+ Add FAQ</button>
                                        <div id="faq-form-container" class="mt-3 d-none">
                                            <form id="faq-form" class="border p-3 rounded bg-light">
                                                <div class="mb-3">
                                                    <label for="faq-question">Question</label>
                                                    <input type="text" id="faq-question" class="form-control" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="faq-answer">Answer</label>
                                                    <textarea id="faq-answer" class="form-control" rows="3" required></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-success w-100">Add FAQ</button>
                                            </form>
                                        </div>
                                    </div>
                                                                        
                                    <script>
                                        document.addEventListener('DOMContentLoaded', () => {
                                            const faqSection = document.getElementById('faq-section');
                                            const toggleFaqFormBtn = document.getElementById('toggle-faq-form');
                                            const faqFormContainer = document.getElementById('faq-form-container');
                                            const faqForm = document.getElementById('faq-form');
                                    
                                            toggleFaqFormBtn.addEventListener('click', () => {
                                                faqFormContainer.classList.toggle('d-none');
                                            });
                                    
                                            faqForm.addEventListener('submit', (e) => {
                                                e.preventDefault();
                                                const question = document.getElementById('faq-question').value.trim();
                                                const answer = document.getElementById('faq-answer').value.trim();
                                    
                                                if (question && answer) {
                                                    faqSection.innerHTML += `
                                                        <div class="faq-entry mb-4 p-3 border rounded bg-light">
                                                            <h5>${question}</h5>
                                                            <p>${answer}</p>
                                                        </div>`;
                                                    faqForm.reset();
                                                    faqFormContainer.classList.add('d-none');
                                                }
                                            });
                                        });
                                    </script>
                                    



                                    <div class="tab-pane fade" id="nav1-hello" role="tabpanel" aria-labelledby="#nav1-hello-tab">
                                        <h4>Get all the information you need from buyers to get started</h4>
                                        <p class="text-dark">Add questions to help buyers provide you with exactly what you need to start working on their order.</p>
                                        <hr>
                                        <h6 class="text-center mt-5">Fiverr Questions?</h6>
                                        <p>These optional questions will be added for all buyers.</p>
                                        
                                        <!-- Multiple Choice Cards -->
                                        <div class="card mt-3">
                                            <div class="card-body">
                                                <h5 class="card-title">Multiple Choice</h5>
                                                <p class="card-text">If you’re ordering for a business, what’s your industry?</p>
                                                <p class="card-text"><small>3D design, e-commerce, accounting, marketing, etc.</small></p>
                                            </div>
                                        </div>
                                        
                                        <div class="card mt-3">
                                            <div class="card-body">
                                                <h5 class="card-title">Multiple Choice</h5>
                                                <p class="card-text">Is this order part of a bigger project you're working on?</p>
                                                <p class="card-text"><small>Building a mobile app, creating an animation, developing a game, etc.</small></p>
                                            </div>
                                        </div>
                                        
                                        <h6 class="text-center mt-3">Your Questions</h6>
                                        
                                        <!-- Free Text Cards -->
                                        <div class="card mt-5">
                                            <div class="card-body">
                                                <h5 class="card-title">Free text</h5>
                                                <h6>Website Goals What are the main goals of the website or application? (e.g., e-commerce, portfolio, information, etc.)</h6>
                                            </div>
                                        </div>
                                        
                                        <div class="card mt-5">
                                            <div class="card-body">
                                                <h5 class="card-title">Free text</h5>
                                                <h6>Reference Websites Do you have any websites you like or would like to use as inspiration? Please share the links.</h6>
                                            </div>
                                        </div>
                                        
                                        <div class="card mt-5">
                                            <div class="card-body">
                                                <h5 class="card-title">Free text</h5>
                                                <h6>What is the goal or purpose of your project?</h6>
                                            </div>
                                        </div>
                                        
                                        <div class="card mt-5">
                                            <div class="card-body">
                                                <h5 class="card-title">Free text</h5>
                                                <h6>If applicable, do you have an existing website or application that requires updates or migration?</h6>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="tab-pane fade" id="nav1-good" role="tabpanel" aria-labelledby="#nav1-good-tab">
                                        <h3>Showcase Your Services In A Gig Gallery</h3>
                                        <form id="gigMediaForm" action="" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="card p-4" style="border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                <h4>Upload Your Gig Media</h4>
                                                
                                                <!-- Gig Images Section -->
                                                <div class="row mb-4">
                                                    <div class="col-4">
                                                        <div class="box-card p-5" style="border: 2px solid #16181a; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                            <label for="gigImages" class="d-block mb-2">Upload Gig Images</label>
                                                            <div id="imageUpload" class="upload-area text-center" style="border: 2px dashed #0568b9; padding: 30px; color: #1ea7ec;">
                                                                <button type="button" class="btn btn-outline-primary" onclick="triggerFileInput('gigImages')" >Drop Images Here</button>
                                                                <input type="file" name="gig_images[]" id="gigImages" class="d-none" accept="image/*" multiple>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-8" id="imagePreview" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                                        <!-- Image previews (without functionality) -->
                                                        @if(old('gig_images') || session('gig_images'))
                                                            @foreach(old('gig_images', session('gig_images', [])) as $image)
                                                                <div class="preview-item position-relative w-100" style="width: 150px; height: 100px; overflow: hidden; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                                    <img src="{{ asset('storage/' . $image) }}" alt="Gig Image" class="w-100 h-100 object-cover">
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                                
                                                <!-- Gig Videos Section -->
                                                <div class="row mb-4">
                                                    <div class="col-4">
                                                        <div class="box-card p-5" style="border: 2px solid #000; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                            <label for="gigVideos" class="d-block mb-2">Upload Gig Videos</label>
                                                            <div id="videoUpload" class="upload-area text-center" style="border: 2px dashed #08b7ce; padding: 30px; color: #000;">
                                                                <button type="button" class="btn btn-outline-primary" onclick="triggerFileInput('gigVideos')">Drop Videos Here</button>
                                                                <input type="file" name="gig_videos[]" id="gigVideos" class="d-none" accept="video/*" multiple>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-8" id="videoPreview" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                                        <!-- Video previews (without functionality) -->
                                                        @if(old('gig_videos') || session('gig_videos'))
                                                            @foreach(old('gig_videos', session('gig_videos', [])) as $video)
                                                                <div class="preview-item position-relative w-100" style="width: 150px; height: 100px; overflow: hidden; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                                    <video width="100%" height="100%" controls>
                                                                        <source src="{{ asset('storage/' . $video) }}" type="video/mp4">
                                                                        Your browser does not support the video tag.
                                                                    </video>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                                
                                                <!-- Gig Documents Section -->
                                                <div class="row mb-4">
                                                    <div class="col-4">
                                                        <div class="box-card p-5" style="border: 2px solid #000; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                                            <label for="gigDocuments" class="d-block mb-2">Upload Gig Documents</label>
                                                            <div id="documentUpload" class="upload-area text-center" style="border: 2px dashed #000; padding: 30px;">
                                                                <button type="button" class="btn btn-outline-primary" onclick="triggerFileInput('gigDocuments')">Documents Here</button>
                                                                <input type="file" name="gig_documents[]" id="gigDocuments" class="d-none" accept=".pdf, .doc, .docx, .ppt, .txt" multiple>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-8" id="documentPreview" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                                        <!-- Document previews (without functionality) -->
                                                        @if(old('gig_documents') || session('gig_documents'))
                                                            @foreach(old('gig_documents', session('gig_documents', [])) as $document)
                                                                <div class="preview-item position-relative d-flex align-items-center" style="width: 150px; overflow: hidden; padding: 5px; border-radius: 8px; background-color: #f9f9f9; border: 1px solid #ddd;">
                                                                    <a href="{{ asset('storage/' . $document) }}" target="_blank" class="d-block text-truncate w-100" style="font-size: 14px; color: #16181a; font-weight: bold;">
                                                                        {{ basename($document) }}
                                                                    </a>
                                                                </div>
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                </div>
                                                
                                                <button type="submit" class="btn btn-outline-primary mt-4">Store Gig Media</button>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    

                                </div>
                            </div>
                        </div>                      
                    </div>
                </div>
            
        </div>
    </div>
</div>
@endsection
