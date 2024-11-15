@extends('fiverr.layouts.app')
@section('content')

<div class="col-sm-4">
    <div class="card border" style="margin-top: 15px; margin-left: 10%;">
        <!-- Making the image circular and smaller with margin-top -->
        <img src="https://media.istockphoto.com/id/589538028/photo/manali-town.jpg?s=2048x2048&w=is&k=20&c=16NUhEO0f1m0danaOsxRIU4x9iCHshjT2keQtxJ6zJ0=" 
             class="card-img-top rounded-circle mx-auto d-block" alt="Card image" 
             style="width: 150px; height: 150px; object-fit: cover; margin-bottom: 15px; margin-top: 25px;">
        <div class="card-body text-center">
            <h5 class="card-title">Hasnain Ali</h5>
            <p class="card-text">@hasnaini</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
</div>



@endsection