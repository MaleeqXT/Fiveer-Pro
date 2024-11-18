@extends('fiverr.layouts.app')
@section('content')

<div class="col-xl-12">
    
        <div class="card-body">
            <p class="text-muted">Add <code>.grid-nav-flush</code> to default grid navigation to appear like below</p>
            <div class="grid-nav grid-nav-flush">
                <div class="grid-nav-row">
                    <div class="grid-nav-item">
                        <div class="grid-nav-icon"><i class="far fa-address-card"></i></div><span class="grid-nav-content">Profile</span>
                    </div>
                    <div class="grid-nav-item">
                        <div class="grid-nav-icon"><i class="far fa-comments"></i></div><span class="grid-nav-content">Messages</span>
                    </div>
                    <div class="grid-nav-item">
                        <div class="grid-nav-icon"><i class="far fa-clone"></i></div><span class="grid-nav-content">Activities</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col">
    <!-- Small Cards Section -->
    <div class="row">
        <!-- Small Card 1 -->
        <div class="col-md-4 mb-3">
            <div class="card" style="border-radius: 10px; overflow: hidden;">
                <img src="https://media.istockphoto.com/id/589538028/photo/manali-town.jpg?s=2048x2048&w=is&k=20&c=16NUhEO0f1m0danaOsxRIU4x9iCHshjT2keQtxJ6zJ0=" alt="Small Card Image" class="card-img-top" style="height: 100px; object-fit: cover;">
                <div class="card-body text-center">
                    <h6 class="mb-1">Laravel Expert With Responsive</h6>
                    <p class="text-muted mb-1">$1500</p>
                    <button class="btn btn-sm btn-outline-dark">View</button>
                </div>
            </div>
        </div>
        <!-- Small Card 2 -->
        <div class="col-md-4 mb-3">
            <div class="card" style="border-radius: 10px; overflow: hidden;">
                <img src="https://media.istockphoto.com/id/1284671318/photo/meadows-in-the-snow-peak-mountains-of-himalaya.jpg?s=2048x2048&w=is&k=20&c=zIibFUP3rnibsoKPWtD4y7ChHDaKfbsVNmQtd6ci9R0=" alt="Small Card Image" class="card-img-top" style="height: 100px; object-fit: cover;">
                <div class="card-body text-center">
                    <h6 class="mb-1">Python Expert With Responsive</h6>
                    <p class="text-muted mb-1">$1800</p>
                    <button class="btn btn-sm btn-outline-dark">View</button>
                </div>
            </div>
        </div>
        <!-- Small Card 3 -->
        <div class="col-md-4 mb-3">
            <div class="card" style="border-radius: 30px; overflow: hidden;">
                <img src="https://media.istockphoto.com/id/844226534/photo/leaf-background.jpg?s=2048x2048&w=is&k=20&c=SuFwCpxv6ALde15whmnrtQ42SpuC09aLLwUI2pE5uMM=" alt="Small Card Image" class="card-img-top" style="height: 100px; object-fit: cover;">
                <div class="card-body text-center">
                    <h6 class="mb-1">React And C++ Expert</h6>
                    <p class="text-muted mb-1">$2000</p>
                    <button class="btn btn-sm btn-outline-dark">View</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Additional Cards -->
    <div class="row">
        <!-- Card 4 -->
        <div class="col-md-4 mb-3">
            <div class="card" style="border-radius: 30px; overflow: hidden;">
                <img src="https://media.istockphoto.com/id/844226534/photo/leaf-background.jpg?s=2048x2048&w=is&k=20&c=SuFwCpxv6ALde15whmnrtQ42SpuC09aLLwUI2pE5uMM=" alt="Small Card Image" class="card-img-top" style="height: 100px; object-fit: cover;">
                <div class="card-body text-center">
                    <h6 class="mb-1">React And C++ Expert</h6>
                    <p class="text-muted mb-1">$2000</p>
                    <button class="btn btn-sm btn-outline-dark">View</button>
                </div>
            </div>
        </div>
        <!-- Card 5 -->
        <div class="col-md-4 mb-3">
            <div class="card" style="border-radius: 30px; overflow: hidden;">
                <img src="https://media.istockphoto.com/id/844226534/photo/leaf-background.jpg?s=2048x2048&w=is&k=20&c=SuFwCpxv6ALde15whmnrtQ42SpuC09aLLwUI2pE5uMM=" alt="Small Card Image" class="card-img-top" style="height: 100px; object-fit: cover;">
                <div class="card-body text-center">
                    <h6 class="mb-1">React And C++ Expert</h6>
                    <p class="text-muted mb-1">$2000</p>
                    <button class="btn btn-sm btn-outline-dark">View</button>
                </div>
            </div>
        </div>
        <!-- Card 6 -->
        <div class="col-md-4 mb-3">
            <div class="card" style="border-radius: 30px; overflow: hidden;">
                <img src="https://media.istockphoto.com/id/844226534/photo/leaf-background.jpg?s=2048x2048&w=is&k=20&c=SuFwCpxv6ALde15whmnrtQ42SpuC09aLLwUI2pE5uMM=" alt="Small Card Image" class="card-img-top" style="height: 100px; object-fit: cover;">
                <div class="card-body text-center">
                    <h6 class="mb-1">React And C++ Expert</h6>
                    <p class="text-muted mb-1">$2000</p>
                    <button class="btn btn-sm btn-outline-dark">View</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
