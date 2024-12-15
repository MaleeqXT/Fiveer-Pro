@extends('fiverr.layouts.app')

@section('content')
<br><br>
<h2>Scale Your Business</h2>

<div class="card col">
    <div class="card-body">
        <p class="text-muted">
            Create Your Badge<br>
            <strong>Boost the traffic to your Gigs by embedding this seller badge on your website or blog.</strong>
        </p>

        <div class="d-grid gap-3">
            <!-- Badge Card -->
            <div class="col-xl-6">
                <div class="card mx-auto" style="max-width: 600px;">
                    <div class="card-header card-header-bordered">
                        <h3 class="card-title">Image</h3>
                    </div>

                    <div class="card-body">
                        <!-- Badge Category Selection -->
                        <h5>Select The Badge Category</h5>
                        <div class="dropdown my-3">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenu1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Programming & Tech
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <button class="dropdown-item" type="button">Action 2</button>
                                <button class="dropdown-item" type="button">Another action</button>
                                <button class="dropdown-item" type="button">Something else here</button>
                            </div>
                        </div>

                        <!-- Textarea for Clipboard Copy -->
                        <div class="mb-3">
                            <label for="contentTextarea" class="form-label">Copy to Clipboard</label>
                            <textarea class="form-control" id="contentTextarea" rows="4" placeholder="Type your text here..."></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Badge Card -->
        </div>
    </div>
</div>
@endsection
