@extends('fiverr.layouts.app')
@section('content')

<div class="card">
    <div class="card-header card-header-bordered">
        <div class="card-addon me-auto ms-0">
            <div class="nav nav-lines card-nav" id="card7-tab">
                <a class="nav-item nav-link active" id="card7-home-tab" data-bs-toggle="tab" href="#card7-home">Home</a>
                <a class="nav-item nav-link" id="card7-profile-tab" data-bs-toggle="tab" href="#card7-profile">Profile</a>
                <a class="nav-item nav-link" id="card7-contact-tab" data-bs-toggle="tab" href="#card7-contact">Contact</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="card7-home">
                <p class="text-muted mb-0">
                    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                    containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
            <div class="tab-pane fade" id="card7-profile">
                <p class="text-muted mb-0">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                    galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                </p>
            </div>
            <div class="tab-pane fade" id="card7-contact">
                <p class="text-muted mb-0">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                    galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It
                    was popularised in the 1960s with the release of Letraset sheets containLorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
                    Lorem Ipsum.
                </p>
            </div>
        </div>
    </div>
          </div>

@endsection
