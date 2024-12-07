@extends('fiverr.layouts.app')

@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<hr>
<form action="{{ route('websites.complete.store') }}" method="POST">
    @csrf
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
                                <input class="form-check-input" type="radio" name="servicePlan" id="sideHustle1" value="side_hustle" {{ old('servicePlan') == 'side_hustle' ? 'checked' : '' }}>
                                <label class="form-check-label" for="sideHustle1">
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
                                <input class="form-check-input" type="radio" name="servicePlan" id="businessGrowth" value="business_growth" {{ old('servicePlan') == 'business_growth' ? 'checked' : '' }}>
                                <label class="form-check-label" for="businessGrowth">
                                    Growing your business or starting a new one.
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="servicePlan" id="growthEnjoyment" value="growth_enjoyment" {{ old('servicePlan') == 'growth_enjoyment' ? 'checked' : '' }}>
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
                <input type="text" class="form-control" name="business_name" value="{{ old('business_name') }}" placeholder="Add name here">
            </div>
            
            <div class="mb-3">
                <h6>How would you describe your business?</h6>
                <textarea class="form-control" name="business_description" placeholder="Add details like your core product and target audience. For example: We craft luxurious, all-natural soaps & bath products with a focus on ethical ingredients. Perfect for eco-conscious luxury lovers." rows="4">{{ old('business_description') }}</textarea>
            </div><br><br>

            <div class="mb-3">
                <h6>Add your business’s main URL</h6>
                <input type="text" class="form-control" name="business_url" value="{{ old('business_url') }}" placeholder="(website, social page, blog, etc.)">
            </div><br>
            
            <h6>What’s your business type?</h6>

            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h6>Service provider</h6>
                                <label>
                                    <input type="radio" name="business_type" value="service_provider" {{ old('business_type') == 'service_provider' ? 'checked' : '' }}>
                                    Examples: designer, consultant, architect, startup, or legal businesses.
                                </label>
                            </div>
                        </div>
                    </div>
            
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h6>Physical goods</h6>
                                <label>
                                    <input type="radio" name="business_type" value="physical_goods" {{ old('business_type') == 'physical_goods' ? 'checked' : '' }}>
                                    Examples: physical stores, online retailers, e-commerce.
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h6>Influencer or content creator</h6>
                                <label>
                                    <input type="radio" name="business_type" value="influencer" {{ old('business_type') == 'influencer' ? 'checked' : '' }}>
                                    Examples: YouTuber, TikToker, blogger, or streamer that produces content.
                                </label>
                            </div>
                        </div>
                    </div>
            
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h6>Agency</h6>
                                <label>
                                    <input type="radio" name="business_type" value="agency" {{ old('business_type') == 'agency' ? 'checked' : '' }}>
                                    Example: a marketing agency that buys services on Fiverr for clients.
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <label>
                <input type="radio" name="business_type" value="other" {{ old('business_type') == 'other' ? 'checked' : '' }}> Other business type
            </label><br><br>
            
            <p>How many people work for your business?</p>
            <label><input type="radio" name="business_size" value="just_me" {{ old('business_size') == 'just_me' ? 'checked' : '' }}> Just me</label><br>
            <label><input type="radio" name="business_size" value="2_10" {{ old('business_size') == '2_10' ? 'checked' : '' }}> 2 - 10</label><br>
            <label><input type="radio" name="business_size" value="11_50" {{ old('business_size') == '11_50' ? 'checked' : '' }}> 11 - 50</label><br>
            <label><input type="radio" name="business_size" value="51_500" {{ old('business_size') == '51_500' ? 'checked' : '' }}> 51 - 500</label><br>
            <label><input type="radio" name="business_size" value="500_plus" {{ old('business_size') == '500_plus' ? 'checked' : '' }}> 500+</label><br><br><br>

            <div class="mb-3">
                <h6>What’s your business industry?</h6>
                <input type="text" class="form-control" name="business_industry" value="{{ old('business_industry') }}" placeholder="Enter your industry">
            </div><br><br><br>

            <h6>What stage is your business in?</h6>

            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h6>Idea</h6>
                                <label>
                                    <input type="radio" name="business_stage" value="idea" {{ old('business_stage') == 'idea' ? 'checked' : '' }}>
                                    Planning your first steps.
                                </label>
                            </div>
                        </div>
                    </div>
            
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h6>Launch</h6>
                                <label>
                                    <input type="radio" name="business_stage" value="launch" {{ old('business_stage') == 'launch' ? 'checked' : '' }}>
                                    Starting off or starting to sell.
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h6>Expansion</h6>
                                <label>
                                    <input type="radio" name="business_stage" value="expansion" {{ old('business_stage') == 'expansion' ? 'checked' : '' }}>
                                    Growing or scaling your business.
                                </label>
                            </div>
                        </div>
                    </div>
            
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h6>Established</h6>
                                <label>
                                    <input type="radio" name="business_stage" value="established" {{ old('business_stage') == 'established' ? 'checked' : '' }}>
                                    Running a fully established business.
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="{{ route('buying') }}" class="btn btn-secondary">Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
