@extends('fiverr.layouts.app')
@section('content')
<hr>
<div class="card">
    <div class="card-header card-header-bordered">
        <div class="card-addon me-auto ms-0">
            <div class="nav nav-lines card-nav" id="card7-tab">
                <a class="nav-item nav-link active" id="card7-home-tab" data-bs-toggle="tab" href="#card7-home">Overview</a>
                <a class="nav-item nav-link" id="card7-profile-tab" data-bs-toggle="tab" href="#card7-profile">Pricing</a>
                <a class="nav-item nav-link" id="card7-contact-tab" data-bs-toggle="tab" href="#card7-contact">Descriptio & FAQ</a>
                <a class="nav-item nav-link" id="card7-contact-tab" data-bs-toggle="tab" href="#card7-requiriment">Requiriment</a>

            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="card7-home" style="margin-left: 250px; border: 2px solid #ec98fd; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-right: 400px; background-color: hsl(287, 100%, 91%);">
                <h6>Want to know what potential clients are looking for?</h6>
                <p>
                    Join Kickstart for exclusive access to market research tools, insights, 
                    Tell me more →
                </p>
            </div><br>
            <div class="tab-pane fade show active" id="card7-home" style="margin-left: 250px; border: 2px solid; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-right: 400px;">
                <div style="display: flex; align-items: center; margin-bottom: 20px;">
                    <div style="width: 40%; margin-right: 10px;">
                        <p style="font-size: 14px; line-height: 1.5;">
                            <strong>Gig title</strong><br>
                            As your Gig storefront, your title is the most important place to include keywords that buyers would likely use to search for a service like yours.
                        </p>
                    </div>
                    <input type="text" style="padding: 20px; width: 60%; border-radius: 5px;">
                </div>
                <div style="display: flex; align-items: center;">
                    <div style="width: 40%; margin-right: 10px;">
                        <p style="font-size: 14px; line-height: 1.5;">
                            <strong>Category</strong><br>
                            Choose the category and sub-category most suitable for your Gig.
                        </p>
                    </div>
                    <div class="dropdown-center">
                        <button class=" py-0 dropdown-toggle" data-bs-toggle="dropdown" style="width: 120%">Programming & tech <i class="mdi mdi-chevron-down fs-17 align-middle ms-2"></i>
                        </button>
                    </div>
                    <div class="dropdown-center" style="margin-left: 50px;">
                        <button class="py-0 dropdown-toggle" data-bs-toggle="dropdown" style="width: 115%; background-color: white; border: 1px solid #ddd;">
                            WEB DEVELOPMENT <i class="mdi mdi-chevron-down fs-17 align-middle ms-2"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-animated" style="background-color: white; border: 1px solid #ddd;">
                            <a class="dropdown-item" href="#">Front-End Development</a>
                            <a class="dropdown-item" href="#">Back-End Development</a>
                            <a class="dropdown-item" href="#">Full-Stack Development</a>
                            <a class="dropdown-item" href="#">Mobile App Development</a>
                            <a class="dropdown-item" href="#">Game Development</a>
                            <a class="dropdown-item" href="#">E-Commerce Development</a>
                            <a class="dropdown-item" href="#">CMS Development</a>
                            <a class="dropdown-item" href="#">API Development</a>
                            <a class="dropdown-item" href="#">Desktop Application Development</a>
                            <a class="dropdown-item" href="#">WordPress Development</a>
                        </div>
                    </div>
                    
                    
                </div>

                <div style="display: flex; align-items: center;">
                    <div style="width: 40%; margin-right: 10px;">
                        <p style="font-size: 14px; line-height: 1.5;">
                            <strong>Service type</strong><br>
                            
                        </p>
                    </div>
                    <div class="dropdown-center">
                        <button class="py-0 dropdown-toggle" data-bs-toggle="dropdown" style="width: 115%; background-color: white; border: 1px solid #ddd;">
                            Select a service type <i class="mdi mdi-chevron-down fs-17 align-middle ms-2"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-animated" style="background-color: white; border: 1px solid #ddd;">
                            <a class="dropdown-item" href="#">Front-End Development</a>
                            <a class="dropdown-item" href="#">Back-End Development</a>
                            <a class="dropdown-item" href="#">Full-Stack Development</a>
                            <a class="dropdown-item" href="#">Mobile App Development</a>
                            <a class="dropdown-item" href="#">Game Development</a>
                            <a class="dropdown-item" href="#">E-Commerce Development</a>
                            <a class="dropdown-item" href="#">CMS Development</a>
                            <a class="dropdown-item" href="#">API Development</a>
                            <a class="dropdown-item" href="#">WordPress Development</a>
                            <a class="dropdown-item" href="#">Shopify Development</a>
                            <a class="dropdown-item" href="#">UI/UX Design</a>
                            <a class="dropdown-item" href="#">Database Management</a>
                            <a class="dropdown-item" href="#">Cloud Integration</a>
                            <a class="dropdown-item" href="#">SEO Optimization</a>
                            <a class="dropdown-item" href="#">SaaS Development</a>
                            <a class="dropdown-item" href="#">Web Maintenance</a>
                            <a class="dropdown-item" href="#">Custom Web Solutions</a>
                        </div>
                    </div>
                    

            </div><br><br>
            
            <div style="display: flex; align-items: center; margin-bottom: 20px;">
                <div style="width: 40%; margin-right: 10px;">
                    <p style="font-size: 14px; line-height: 1.5;">
                        <strong>Gig metadata</strong><br>
                        Select the website type you support<br>
                        <small>0 / 5</small>
                    </p>
                </div>
                <div style="width: 60%; border: 1px solid #ddd; border-radius: 10px; padding: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                        <!-- First Row -->
                        <div style="width: 48%;">
                            <input type="radio" name="website_type" value="ecommerce" id="ecommerce">
                            <label for="ecommerce">E-Commerce store</label>
                        </div>
                        <div style="width: 48%;">
                            <input type="radio" name="website_type" value="business" id="business">
                            <label for="business">Business</label>
                        </div>
                        <div style="width: 48%;">
                            <input type="radio" name="website_type" value="landing" id="landing">
                            <label for="landing">Landing page</label>
                        </div>
                        <div style="width: 48%;">
                            <input type="radio" name="website_type" value="blog" id="blog">
                            <label for="blog">Blog</label>
                        </div>
                        <div style="width: 48%;">
                            <input type="radio" name="website_type" value="education" id="education">
                            <label for="education">Education</label>
                        </div>
                        <div style="width: 48%;">
                            <input type="radio" name="website_type" value="portfolio" id="portfolio">
                            <label for="portfolio">Portfolio</label>
                        </div>
                        <!-- Second Row -->
                        <div style="width: 48%;">
                            <input type="radio" name="website_type" value="entertainment" id="entertainment">
                            <label for="entertainment">Entertainment</label>
                        </div>
                        <div style="width: 48%;">
                            <input type="radio" name="website_type" value="nonprofit" id="nonprofit">
                            <label for="nonprofit">Nonprofit</label>
                        </div>
                        <div style="width: 48%;">
                            <input type="radio" name="website_type" value="wedding" id="wedding">
                            <label for="wedding">Wedding</label>
                        </div>
                        <div style="width: 48%;">
                            <input type="radio" name="website_type" value="podcasting" id="podcasting">
                            <label for="podcasting">Podcasting</label>
                        </div>
                        <div style="width: 48%;">
                            <input type="radio" name="website_type" value="online_communities" id="online_communities">
                            <label for="online_communities">Online communities</label>
                        </div>
                        <div style="width: 48%;">
                            <input type="radio" name="website_type" value="forms" id="forms">
                            <label for="forms">Forms</label>
                        </div>
                        <div style="width: 48%;">
                            <input type="radio" name="website_type" value="crowdfunding" id="crowdfunding">
                            <label for="crowdfunding">Crowdfunding</label>
                        </div>
                        <div style="width: 48%;">
                            <input type="radio" name="website_type" value="wiki" id="wiki">
                            <label for="wiki">Wiki/Knowledge</label>
                        </div>
                        <div style="width: 48%;">
                            <input type="radio" name="website_type" value="saas" id="saas">
                            <label for="saas">SaaS</label>
                        </div>
                        <div style="width: 48%;">
                            <input type="radio" name="website_type" value="job_board" id="job_board">
                            <label for="job_board">Job board</label>
                        </div>
                        <div style="width: 48%;">
                            <input type="radio" name="website_type" value="portal" id="portal">
                            <label for="portal">Portal</label>
                        </div>
                        <div style="width: 48%;">
                            <input type="radio" name="website_type" value="brochure" id="brochure">
                            <label for="brochure">Brochure</label>
                        </div>
                        <div style="width: 48%;">
                            <input type="radio" name="website_type" value="dropshipping" id="dropshipping">
                            <label for="dropshipping">Dropshipping</label>
                        </div>
                        <div style="width: 48%;">
                            <input type="radio" name="website_type" value="other" id="other">
                            <label for="other">Other</label>
                        </div>
                    </div>
                </div>
            </div>
            
            <div style="display: flex; align-items: center; margin-bottom: 20px;">
                <div style="width: 40%; margin-right: 10px;">
                    <p style="font-size: 14px; line-height: 1.5;">
                        <strong>Search tags</strong><br>
                        Tag your Gig with buzzwords that are relevant to the services you offer. Use all 5 tags to get found.
                    </p>
                </div>
                <div style="width: 60%;">
                    <p style="font-size: 14px; line-height: 1.5; margin-bottom: 10px;">
                        Tag your Gig with buzzwords that are relevant to the services you offer. Use all 5 tags to get found.
                    </p>
                    <input type="text" style="padding: 20px; width: 100%; border-radius: 5px;">
                </div>
            </div>
              <p style="margin-left: 320px">5 tags maximum. Use letters and numbers only.</p>
               
              <p style="margin-left: 320px">Please note:
                Some categories require that sellers verify their skills.</p>
           
           
           
           
              <div class="tab-pane fade" id="card7-profile">
               <h1>hm</h1>
            </div>
            <div class="tab-pane fade" id="card7-contact">
                <h1>hmmm</h1>
            </div>
            <div class="tab-pane fade" id="card7-requiriment">
                <h1>hmm</h1>
            </div>

        </div>
    </div>
</div>

@endsection
