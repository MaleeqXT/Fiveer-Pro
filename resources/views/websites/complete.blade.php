@extends('fiverr.layouts.app')
@section('content')
<hr>

<div class="card mx-auto" style="max-width: 50rem;">
    <div class="container">
        <div class="card-body">
            <h3 class="card-title">Personalize your buying experience</h3>
            <p class="card-text">Tailor your Fiverr experience by sharing more about yourself. Discover how other businesses are utilizing Fiverr Pro, our premium business solution for better team management and collaboration. Learn more.</p>
        </div>
        <hr>
        <div class="card-body">
            <h6 class="card-subtitle mb-2 text-muted">What do you plan to buy services for?</h6>
        </div>
        
        <div class="row p-3">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="servicePlan" id="sideHustle">
                            <label class="form-check-label" for="sideHustle">
                                Anything you’re working on apart from your main job, like a side hustle.
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="servicePlan" id="sideHustle">
                            <label class="form-check-label" for="sideHustle">
                                Anything you’re working on apart from your main job, like a side hustle.
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="servicePlan" id="growthEnjoyment">
                            <label class="form-check-label" for="growthEnjoyment">
                                Services that are for your own growth or enjoyment, outside of work.
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <h6>What’s your business's name?</h6>
            <input type="text" class="form-control" placeholder="Add name here">
        </div>
        
        <div class="mb-3">
            <h6>How would you describe your business?</h6>
            <textarea class="form-control" placeholder="Add details like your core product and target audience. For example: We craft luxurious, all-natural soaps & bath products with a focus on ethical ingredients. Perfect for eco-conscious luxury lovers.
             "rows="4"></textarea>
        </div><br><br>

        <div class="mb-3">
            <h6>Add your business’s main URL</h6>
            <input type="text" class="form-control" placeholder="(website, social page, blog, etc.)
            ">
        </div><br>
        
        <h6>What’s your business type?</h6>

        <div class="container">
            <div class="row">
                <!-- First Row (2 Cards) -->
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h6>Service provider</h6>
                            <label class="form-check-label" for="sideHustle">
                                Examples: designer, consultant, architect, startup, or legal businesses.
                            </label>
                        </div>
                    </div>
                </div>
        
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h6>Physical goods</h6>
                            <label class="form-check-label" for="sideHustle">
                                Examples: physical stores, online retailers, e-commerce.
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="row">
                <!-- Second Row (2 Cards) -->
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h6>Influencer or content creator</h6>
                            <label class="form-check-label" for="sideHustle">
                                Examples: YouTuber, TikToker, blogger, or streamer that produces content.
                            </label>
                        </div>
                    </div>
                </div>
        
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h6>Agency</h6>
                            <label class="form-check-label" for="sideHustle">
                                Example: a marketing agency that buys services on Fiverr for clients.
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <label>
            <input type="radio" name="business_type" value="other"> Other business type
          </label>
          
        
    </div>
</div>






@endsection