@extends('fiverr.layouts.app')
@section('content')

<style>
    /* Container for the header and input */
    .header-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 0 20px; /* Adjust side margins as needed */
    }

    h1 {
        margin-left: 62px;
        font-size: 2em; /* Adjust size to your preference */
    }

    .line-input {
        border: none;
        border-bottom: 1px solid green;
        background: transparent;
        outline: none;
        font-size: 1em; /* Match the <h1> size */
        width: 200px; /* Adjust width as needed */
    }

    .line-input:focus {
        border-bottom: 1px solid blue; /* Optional for focus effect */
    }

    .card-body {
        display: flex; /* Enables the flexbox layout */
        flex-wrap: wrap; /* Allows elements to wrap onto the next line */
        gap: 240px; /* Adjusted gap between spans */
        align-items: center; /* Aligns items vertically */
    }

    .card-body p {
        flex-basis: 100%; /* Forces the paragraph to take the full width */
        margin-top: 10px; /* Optional: Adds space between spans and the paragraph */
    }
</style>

<div class="header-container">
    <h1 style="margin-left: 62px; mt-3">Manage Orders</h1>
    <input type="text" class="line-input" placeholder="Search my history">
</div>

<div class="card mt-5">
    <div class="card-header card-header-bordered">
        <div class="card-addon me-auto ms-0">
            <div class="nav nav-lines card-nav" id="card7-tab">
                <a class="nav-item nav-link active" id="card7-home-tab" data-bs-toggle="tab" href="#card7-home">PRIORITY</a>
                <a class="nav-item nav-link" id="card7-profile-tab" data-bs-toggle="tab" href="#card7-active">ACTIVE</a>
                <a class="nav-item nav-link" id="card7-contact-tab" data-bs-toggle="tab" href="#card7-late">LATE</a>
                <a class="nav-item nav-link" id="card7-contact-tab" data-bs-toggle="tab" href="#card7-delivered">DELIVERED</a>
                <a class="nav-item nav-link" id="card7-contact-tab" data-bs-toggle="tab" href="#card7-completed">COMPLETED</a>
                <a class="nav-item nav-link" id="card7-contact-tab" data-bs-toggle="tab" href="#card7-cancelled">CANCELLED</a>
                <a class="nav-item nav-link" id="card7-contact-tab" data-bs-toggle="tab" href="#card7-starred">STARRED</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <!-- PRIORITY Tab -->
            <div class="tab-pane fade show active" id="card7-home">
                <div class="card">
                    <div class="card-header">
                        PRIORITY ORDERS
                    </div>
                    <div class="card-body">
                        <span>BUYER</span>
                        <span>GIG</span>
                        <span>DUE ON</span>
                        <span>TOTAL</span>
                        <span>NOTE</span>
                        <span>STATUS</span>
                    </div>
                    <p style="margin-left:14px">no priority oders to show</p>
                </div>
            </div>

            <!-- ACTIVE Tab -->
          
            <div class="tab-pane fade" id="card7-active">
                <div class="card">
                    <div class="card-header">
                        ACTIVE ORDERS
                    </div>
                    <div class="card-body">
                        <span>BUYER</span>
                        <span>GIG</span>
                        <span>DUE ON</span>
                        <span>TOTAL</span>
                        <span>NOTE</span>
                        <span>STATUS</span>
                    </div>
                    <p style="margin-left:14px">no active oders to show</p>
                </div>
            </div>

             <!-- ACTIVE Tab -->
    <div class="tab-pane fade" id="card7-late">
        <div class="card">
            <div class="card-header">
                LATE ORDERS
            </div>
            <div class="card-body">
                <span>BUYER</span>
                <span>GIG</span>
                <span>DUE ON</span>
                <span>TOTAL</span>
                <span>NOTE</span>
                <span>STATUS</span>
            </div>
            <p style="margin-left:14px">no late oders to show.</p>
        </div>
    </div>


            <!-- DELIVERED Tab -->
            <div class="tab-pane fade" id="card7-delivered">
                <div class="card">
                    <div class="card-header">
                        DELIVERED ORDERS
                    </div>
                    <div class="card-body">
                        <span>BUYER</span>
                        <span>GIG</span>
                        <span>DUE ON</span>
                        <span>TOTAL</span>
                        <span>NOTE</span>
                        <span>STATUS</span>
                    </div>
                    <p style="margin-left:14px">no delivered oders to show</p>
                </div>
            </div>
        

            <!-- COMPLETED Tab -->
            <div class="tab-pane fade" id="card7-completed">
              
                    <div class="card">
                        <div class="card-header">
                            COMPLETED ORDERS
                        </div>
                        <div class="card-body">
                            <span>BUYER</span>
                            <span>GIG</span>
                            <span>DUE ON</span>
                            <span>TOTAL</span>
                            <span>NOTE</span>
                            <span>STATUS</span>
                        </div>
                        <p style="margin-left:14px">no complete oders to show</p>
                    </div>
                
            </div>

            <!-- CANCELLED Tab -->
            <div class="tab-pane fade" id="card7-cancelled">
              
                    <div class="card">
                        <div class="card-header">
                            CANCELLED ORDERS
                        </div>
                        <div class="card-body">
                            <span>BUYER</span>
                            <span>GIG</span>
                            <span>DUE ON</span>
                            <span>TOTAL</span>
                            <span>NOTE</span>
                            <span>STATUS</span>
                        </div>
                        <p style="margin-left:14px">no cancel oders to show</p>
                    </div>
                
            </div>

            <!-- STARRED Tab -->
            <div class="tab-pane fade" id="card7-starred">
              
                    <div class="card">
                        <div class="card-header">
                            STARTED ORDERS
                        </div>
                        <div class="card-body">
                            <span>BUYER</span>
                            <span>GIG</span>
                            <span>DUE ON</span>
                            <span>TOTAL</span>
                            <span>NOTE</span>
                            <span>STATUS</span>
                        </div>
                        <p style="margin-left:14px">no start oders to show.</p>
                    </div>
                
            </div>
            </div>
        </div>
    </div>
</div>

@endsection
