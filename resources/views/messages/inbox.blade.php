@extends('fiverr.layouts.app')
@section('content')
<br><br>
<style>
/* Adjust padding and spacing */
.chat-leftsidebar .p-4, .chat-conversation .p-3, .chat-input-section {
    padding: 20px;
}

.chat-list li, .contact-list li {
    margin-bottom: 15px;
}

/* Ensure proper alignment */
.chat-list .media, .contact-list .media {
    align-items: center;
}

/* Consistent border-radius for avatars */
.avatar-xs img {
    border-radius: 50%;
}

/* Scrollable chat section */
.chat-conversation ul {
    overflow-y: auto;
    max-height: 600px;
    padding-right: 10px; /* Space for scroll bar */
}

/* Style for active chat */
.chat-list .active a {
    background: #f8f9fa;
    border-radius: 5px;
}

/* Responsive adjustments */
@media (max-width: 992px) {
    .chat-leftsidebar {
        margin-bottom: 20px;
    }

    .chat-leftsidebar .nav-link {
        font-size: 14px;
    }
}

    </style>

<div class="container-fluid">

    <div class="page-content-wrapper">

    


        <div class="d-lg-flex">
            <div class="chat-leftsidebar me-lg-4">
                <div class="card">
                  

                  <div class="p-4">
                    <div class="search-box chat-search-box pb-4">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <i class="mdi mdi-magnify search-icon"></i>
                        </div>
                    </div>

                    <div class="chat-leftsidebar-nav">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a href="#chat" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                    <span>Chat</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#group" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                    <span>Group</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#contact" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                    <span>Contacts</span>
                                </a>
                            </li>
                        </ul>
                        
<div class="tab-content py-4">
    <div class="tab-pane show active" id="chat">
        <div>
            <h5 class="font-size-16 mb-3">Online</h5>
            <ul class="list-unstyled chat-list">
                <li class="active">
                    <a href="#">
                        <div class="media">
                            <div class="align-self-center me-3">
                                <i class="mdi mdi-circle text-success font-size-10"></i>
                            </div>
                            <div class="align-self-center me-3">
                                <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-xs" alt="">
                            </div>
                            
                            <div class="media-body overflow-hidden">
                                <h5 class="text-truncate font-size-14 mb-1">Steven Franklin</h5>
                                <p class="text-truncate mb-0">Hey! there I'm available</p>
                            </div>
                            <div class="font-size-11">05 min</div>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <div class="media">
                            <div class="align-self-center me-3">
                                <i class="mdi mdi-circle text-success font-size-10"></i>
                            </div>
                            <div class="avatar-xs align-self-center me-3">
                                <span class="avatar-title rounded-circle bg-soft-dark text-dark">
                                    K
                                </span>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h5 class="text-truncate font-size-14 mb-1">Keith Gonzales</h5>
                                <p class="text-truncate mb-0">This theme is awesome!</p>
                            </div>
                            <div class="font-size-11">24 min</div>
                        </div>
                    </a>
                </li>



            </ul>
        </div>
    </div>  
</div>  


<div class="tab-content pb-4">
    <div class="tab-pane show active">
        <div>
            <h5 class="font-size-16 mb-3">Contact</h5>
            <ul class="list-unstyled chat-list">
            

                <li>
                    <a href="#">
                        <div class="media">
                            <div class="align-self-center me-3">
                                <i class="mdi mdi-circle text-success font-size-10"></i>
                            </div>
                            <div class="align-self-center me-3">
                                <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-xs" alt="">
                            </div>
                            <div class="media-body overflow-hidden">
                                <h5 class="text-truncate font-size-14 mb-1">Adam Miller</h5>
                                <p class="text-truncate mb-0">I've finished it! See you so</p>
                            </div>
                            <div class="font-size-11">12 min</div>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <div class="media">
                            <div class="align-self-center me-3">
                                <i class="mdi mdi-circle text-warning font-size-10"></i>
                            </div>
                            <div class="align-self-center me-3">
                                <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="">
                            </div>
                            <div class="media-body overflow-hidden">
                                <h5 class="text-truncate font-size-14 mb-1">Jose Vickery</h5>
                                <p class="text-truncate mb-0">Nice to meet you</p>
                            </div>
                            <div class="font-size-11">1 hr</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="media">
                            <div class="align-self-center me-3">
                                <i class="mdi mdi-circle font-size-10"></i>
                            </div>

                            <div class="avatar-xs align-self-center me-3">
                                <span class="avatar-title rounded-circle bg-soft-dark text-dark">
                                    M
                                </span>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h5 class="text-truncate font-size-14 mb-1">Mitchel Givens</h5>
                                <p class="text-truncate mb-0">Hey! there I'm available</p>
                            </div>
                            <div class="font-size-11">3 hrs</div>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <div class="media">
                            <div class="align-self-center me-3">
                                <i class="mdi mdi-circle text-success font-size-10"></i>
                            </div>
                            <div class="align-self-center me-3">
                                <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="">
                            </div>
                            <div class="media-body overflow-hidden">
                                <h5 class="text-truncate font-size-14 mb-1">Stephen Hadley</h5>
                                <p class="text-truncate mb-0">I've finished it! See you so</p>
                            </div>
                            <div class="font-size-11">5hrs</div>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="media">
                            <div class="align-self-center me-3">
                                <i class="mdi mdi-circle text-success font-size-10"></i>
                            </div>
                            <div class="avatar-xs align-self-center me-3">
                                <span class="avatar-title rounded-circle bg-soft-dark text-dark">
                                    K
                                </span>
                            </div>
                            <div class="media-body overflow-hidden">
                                <h5 class="text-truncate font-size-14 mb-1">Keith Gonzales</h5>
                                <p class="text-truncate mb-0">This theme is awesome!</p>
                            </div>
                            <div class="font-size-11">24 min</div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="tab-pane" id="group">
        <h5 class="font-size-14 mb-3">Group</h5>
        <ul class="list-unstyled chat-list" >
            <li>
                <a href="#">
                    <div class="media align-items-center">
                        <div class="avatar-xs me-3">
                            <span class="avatar-title rounded-circle bg-soft-dark text-dark">
                                G
                            </span>
                        </div>
                        
                        <div class="media-body">
                            <h5 class="font-size-14 mb-0">General</h5>
                        </div>
                    </div>
                </a>
            </li>

            <li>
                <a href="#">
                    <div class="media align-items-center">
                        <div class="avatar-xs me-3">
                            <span class="avatar-title rounded-circle bg-soft-dark text-dark">
                                R
                            </span>
                        </div>
                        
                        <div class="media-body">
                            <h5 class="font-size-14 mb-0">Reporting</h5>
                        </div>
                    </div>
                </a>
            </li>

            <li>
                <a href="#">
                    <div class="media align-items-center">
                        <div class="avatar-xs me-3">
                            <span class="avatar-title rounded-circle bg-soft-dark text-dark">
                                M
                            </span>
                        </div>
                        
                        <div class="media-body">
                            <h5 class="font-size-14 mb-0">Meeting</h5>
                        </div>
                    </div>
                </a>
            </li>

            <li>
                <a href="#">
                    <div class="media align-items-center">
                        <div class="avatar-xs me-3">
                            <span class="avatar-title rounded-circle bg-soft-dark text-dark">
                                A
                            </span>
                        </div>
                        
                        <div class="media-body">
                            <h5 class="font-size-14 mb-0">Project A</h5>
                        </div>
                    </div>
                </a>
            </li>

            <li>
                <a href="#">
                    <div class="media align-items-center">
                        <div class="avatar-xs me-3">
                            <span class="avatar-title rounded-circle bg-soft-dark text-dark">
                                B
                            </span>
                        </div>
                        
                        <div class="media-body">
                            <h5 class="font-size-14 mb-0">Project B</h5>
                        </div>
                    </div>
                </a>
            </li>
        </ul>
    </div>

    <div class="tab-pane" id="contact">
        <h5 class="font-size-14 mb-3">Contact</h5>

        <div  data-simplebar style="max-height: 410px;">
            <div>
                <div class="avatar-xs mb-3">
                    <span class="avatar-title rounded-circle bg-soft-dark text-dark">
                        A
                    </span>
                </div>

                <ul class="list-unstyled chat-list">
                    <li>
                        <a href="#">
                            <h5 class="font-size-14 mb-0">Adam Miller</h5>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <h5 class="font-size-14 mb-0">Alfonso Fisher</h5>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="mt-4">
                <div class="avatar-xs mb-3">
                    <span class="avatar-title rounded-circle bg-soft-dark text-dark">
                        B
                    </span>
                </div>

                <ul class="list-unstyled chat-list">
                    <li>
                        <a href="#">
                            <h5 class="font-size-14 mb-0">Bonnie Harney</h5>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="mt-4">
                <div class="avatar-xs mb-3">
                    <span class="avatar-title rounded-circle bg-soft-dark text-dark">
                        C
                    </span>
                </div>

                <ul class="list-unstyled chat-list">
                    <li>
                        <a href="#">
                            <h5 class="font-size-14 mb-0">Charles Brown</h5>
                        </a>
                        <a href="#">
                            <h5 class="font-size-14 mb-0">Carmella Jones</h5>
                        </a>
                        <a href="#">
                            <h5 class="font-size-14 mb-0">Carrie Williams</h5>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="mt-4">
                <div class="avatar-xs mb-3">
                    <span class="avatar-title rounded-circle bg-soft-dark text-dark">
                        D
                    </span>
                </div>

                <ul class="list-unstyled chat-list">
                    <li>
                        <a href="#">
                            <h5 class="font-size-14 mb-0">Dolores Minter</h5>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
</div>

</div>

</div>
</div>

<div class="w-100 user-chat">
    <div class="card" style="height: 100%; min-height: 500px; display: flex; flex-direction: column;">
        <!-- Chat Header -->
        <div class="p-4 border-bottom bg-light">
            <div class="row align-items-center">
                <div class="col-md-4 col-9">
                    <h5 class="font-size-15 mb-1 text-truncate">Steven Franklin</h5>
                    <p class="text-muted mb-0 text-truncate">
                        <i class="mdi mdi-circle text-success align-middle me-1"></i> Active now
                    </p>
                </div>
                <div class="col-md-8 col-3">
                    <ul class="list-inline user-chat-nav text-end mb-0">
                        <li class="list-inline-item d-none d-sm-inline-block">
                            <div class="dropdown">
                                <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-magnify font-size-18"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-md">
                                    <form class="p-3">
                                        <div class="form-group m-0">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Search">
                                                <button class="btn btn-dark" type="submit">
                                                    <i class="mdi mdi-magnify"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item d-none d-sm-inline-block">
                            <div class="dropdown">
                                <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-cog-outline font-size-18"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">View Profile</a>
                                    <a class="dropdown-item" href="#">Clear chat</a>
                                    <a class="dropdown-item" href="#">Muted</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="dropdown">
                                <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Chat Conversation -->
        <div class="chat-conversation p-3 flex-grow-1" style="overflow-y: auto;">
            <ul class="list-unstyled mb-0" data-simplebar style="max-height: 100%;">
                <li>
                    <div class="chat-day-title">
                        <span class="title">Today</span>
                    </div>
                </li>
                <!-- Placeholder for empty chat -->
                <li class="text-center mt-5 text-muted">
                    <i class="mdi mdi-message-outline font-size-48"></i>
                    <p class="mt-3">No messages yet. Start the conversation!</p>
                </li>
            </ul>
        </div>

        <!-- Chat Input -->
        <div class="p-3 chat-input-section border-top bg-light">
            <div class="row align-items-center">
                <div class="col">
                    <div class="position-relative">
                        <input type="text" class="form-control chat-input" placeholder="Enter Message...">
                        <div class="chat-input-links position-absolute top-50 end-0 translate-middle-y">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Emoji">
                                        <i class="mdi mdi-emoticon-happy-outline"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Images">
                                        <i class="mdi mdi-file-image-outline"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" data-bs-toggle="tooltip" data-placement="top" title="Add Files">
                                        <i class="mdi mdi-file-document-outline"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-dark btn-rounded chat-send w-md waves-effect waves-light">
                        <span class="d-none d-sm-inline-block me-2">Send</span>
                        <i class="mdi mdi-send"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

</div>


</div> <!-- container-fluid -->
</div>
@endsection