@extends('fiverr.layouts.app')
@section('content')
<br><br>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.6.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css" rel="stylesheet">


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
    border-radius: 7px;
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
                <div class="d-flex align-items-center pb-4">
                    <!-- Search Box -->
                    <div class="search-box chat-search-box" style="width: 100%;">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search..." style="width: 80%;">
                        </div>
                    </div>
            
                    <!-- Dropdown Button -->
                    <div class="ms-3">
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               All messages
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Unread</a>
                                <a class="dropdown-item" href="#">Starred</a>
                                <a class="dropdown-item" href="#">Custom Offers</a>
                                <a class="dropdown-item" href="#">Archived</a>
                                <a class="dropdown-item" href="#">Spam</a>
                                <a class="dropdown-item" href="#">New Inquiry</a>
                                <a class="dropdown-item" href="#">Order in Progress</a>
                                <a class="dropdown-item" href="#">Checking In</a>
                                <a class="dropdown-item" href="#">Revisions</a>
                                <a class="dropdown-item" href="#">Final Submission</a>
                                <a class="dropdown-item" href="#">Follow Up</a>
                                <a class="dropdown-item" href="#">Canceled Order</a>
                                <a class="dropdown-item" href="#">Completed Order</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            
                <div class="card">
                    <div class="p-5">
                        <div class="chat-leftsidebar-nav">                  
                            <div class="tab-content py-4">
                                <div class="tab-pane show active" id="chat">
                                    <div>
                                        <h5 class="font-size-16 mb-3 d-flex align-items-center">
                                            <i class="mdi mdi-magnify me-2"></i> No Conversations
                                        </h5>
                                        <p>There are no conversations under</p>
                                        <p style="margin-left: 30px">"All messages"</p>
                                        <button type="button" class="btn btn-link" style="margin-left: 35px">View all</button>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection