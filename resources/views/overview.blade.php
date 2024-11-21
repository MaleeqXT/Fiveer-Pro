
@extends('fiverr.layouts.app')
@section('content')

<style>
    .checkbox-icon {
        font-size: 13px; /* Adjust size as needed */
        color: rgb(228, 218, 206);   /* Adjust color */
    }
</style>
<div class=" mt-5">
    <div class="row">
        <!-- First Card -->
        <div class="col-md-4">
            <div class="card" style="width:60%; height: auto;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 style="margin-left: 85px;">Progress Tracker</h6>
                    <i class="fas fa-square-check checkbox-icon" style="margin-left: 95px;"></i>
                    <i class="fas fa-square-check checkbox-icon"></i>
                    <i class="fas fa-square-check checkbox-icon"></i>
                    <i class="fas fa-square-check checkbox-icon"></i>
                    <i class="fas fa-square-check checkbox-icon"></i>
                    <i class="fas fa-square-check checkbox-icon"></i>
                    <p style="font-size: 12px; margin-left: 10px;">Once you qualify for the next level in all 6 metrics, you’ll advance to Level</p>
                </div>
            </div>
        </div>

        <!-- Second Card Group -->
        <div class="col-md-8">
            <div class="card p-3" style="width: 100%; height: auto;">
                <div class="card-body">
                    <h5 class="card-title">All Cards</h5>
                    <p class="card-text">This is a container card holding multiple smaller cards.</p>

                    <!-- Grid System for Inner Cards -->
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        <div class="col">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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