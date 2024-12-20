@extends('fiverr.layouts.app')
@section('content')
<hr>

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
                                        <a class="nav-item nav-link" id="nav1-hello-tab" data-bs-toggle="tab" href="#nav1-contact" aria-selected="false" role="tab" tabindex="-1">Requirements</a>
                                        <a class="nav-item nav-link" id="nav1-good-tab" data-bs-toggle="tab" href="#nav1-contact" aria-selected="false" role="tab" tabindex="-1">Gallery</a>
                                    </div>
                                </div><hr>
                                <div class="tab-content" id="nav1-tabContent">


                                    <div class="tab-pane fade active show" id="nav1-home" role="tabpanel" aria-labelledby="#nav1-home-tab">
                                        <div class="card mt-4">
                                            <div class="card" style="background-color: rgb(251, 193, 253)">
                                                <div class="card-body">
                                                    <h5 class="card-title">Want to know what potential clients are looking for?</h5>
                                                    <p class="card-text">
                                                        Join Kickstart for exclusive access to market research tools, insights, and analytics to create Gigs that get noticed.
                                                    </p>
                                                    <a href="#" class="btn btn-primary">Tell me more →</a>
                                                </div>
                                            </div>
                                            <div class="card-body d-flex align-items-center">
                                                <div class="w-50">
                                                    <h5 class="card-title">Gig Title</h5>
                                                    <p class="card-text mb-3">
                                                        As your Gig storefront, your title is the most important place to include keywords that buyers would likely use to search for a service like yours.
                                                    </p>
                                                </div>
                                                <div class="w-50">
                                                    <input type="text" class="form-control" placeholder="Enter your Gig title here">
                                                </div>
                                            </div>
                                    
                                            <div class="card-body d-flex align-items-center mt-4">
                                                <div class="w-50">
                                                    <h5 class="card-title">Category</h5>
                                                    <p class="card-text mb-3">
                                                        Choose the category and sub-category most suitable for your Gig.
                                                    </p>
                                                </div>
                                                <div class="w-50">
                                                    <div class="d-flex">
                                                        <select class="form-control me-2" style="width: 48%;">
                                                            <option value="">Select Category</option>
                                                            <option value="web-design">Web Design</option>
                                                            <option value="writing">Writing</option>
                                                            <!-- Add more options as needed -->
                                                        </select>
                                                        <select class="form-control" style="width: 48%;">
                                                            <option value="">Select Sub-Category</option>
                                                            <option value="graphic-design">Graphic Design</option>
                                                            <option value="seo">SEO</option>
                                                            <!-- Add more options as needed -->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                    
                                            <div class="card-body d-flex align-items-center mt-4">
                                                <div class="w-50">
                                                    <h5 class="card-title">Service Type</h5>
                                                    <p class="card-text mb-3">
                                                        Select the type of service you are offering.
                                                    </p>
                                                </div>
                                                <div class="w-50">
                                                    <select class="form-control" style="width: 100%;">
                                                        <option value="">Select Service Type</option>
                                                        <option value="one-time">One-time service</option>
                                                        <option value="recurring">Recurring service</option>
                                                        <option value="custom">Custom service</option>
                                                        <!-- Add more options as needed -->
                                                    </select>
                                                </div>
                                            </div>
                                    
                                            <div class="card-body d-flex align-items-center mt-4">
                                                <div class="w-50">
                                                    <h5 class="card-title">Gig Metadata</h5>
                                                    <p class="card-text mb-3">
                                                        Provide additional metadata to enhance your Gig visibility.
                                                    </p>
                                                </div>
                                                <div class="w-50">
                                                    <select class="form-control" style="width: 100%;">
                                                        <option value="">Select Gig Metadata</option>
                                                        <option value="keywords">Keywords</option>
                                                        <option value="tags">Tags</option>
                                                        <option value="language">Language</option>
                                                        <!-- Add more options as needed -->
                                                    </select>
                                                </div>
                                            </div>
                                    
                                            <div class="card-body d-flex align-items-center mt-4">
                                                <div class="w-50">
                                                    <h5 class="card-title">Search Tags</h5>
                                                    <p class="card-text mb-3">
                                                        Tag your Gig with buzz words that are relevant to the services you offer. Use all 5 tags to get found.
                                                    </p>
                                                </div>
                                                <div class="w-50">
                                                    <input type="text" class="form-control" placeholder="Enter up to 5 search tags" style="padding: 30px;">
                                                </div>
                                            </div>
                                            <p style="margin-left: 50%">Some categories require that sellers verify their skills.</p>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                                                   

                                    <div class="tab-pane fade" id="nav1-profile" role="tabpanel" aria-labelledby="#nav1-profile-tab">
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                                    </div>




                                    
                                    
                                    <div class="tab-pane fade" id="nav1-contact" role="tabpanel" aria-labelledby="#nav1-contact-tab">
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div>
                                    <div class="tab-pane fade" id="nav1-contact" role="tabpanel" aria-labelledby="#nav1-hello-tab">
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div>
                                    <div class="tab-pane fade" id="nav1-contact" role="tabpanel" aria-labelledby="#nav1-good-tab">
                                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
