@extends('fiverr.layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
<style>
    /* Ultra-modern chart styling */
    .ct-chart {
        height: 700px; /* Increased chart height for better visibility */
    }

    .ct-series-a .ct-bar {
        stroke: #1dbf73; /* Fiverr green for Earnings */
    }

    .ct-series-b .ct-bar {
        stroke: #ff6f61; /* Accent color for Expenses */
    }

    .ct-label {
        font-size: 1rem; /* Larger label font size */
        font-weight: bold;
    }

    .ct-grid {
        stroke: rgba(0, 0, 0, 0.1); /* Subtle grid lines */
    }

    /* Card styling */
    .card-header.card-header-bordered {
        background-color: #1dbf73; /* Fiverr branding */
        color: #fff;
        padding: 20px;
        border-radius: 10px 10px 0 0;
    }

    .card-title {
        font-size: 2rem; /* Larger, bolder titles */
        color: #333;
    }

    .card-title-desc {
        font-size: 1.2rem;
        color: #666;
    }

    /* Buttons */
    .btn-outline-dark {
        border-color: #1dbf73;
        color: #1dbf73;
        transition: all 0.3s ease;
    }

    .btn-outline-dark:hover {
        background-color: #1dbf73;
        color: #fff;
    }
</style>

<div class="container mt-4">
    <div class="row">
        <div class="col-xl-12">
            <div class="card-header card-header-bordered">
                <h3 class="card-title">Earnings Overview</h3>
                <div class="card-addon">
                    <div class="nav nav-tabs card-nav" id="earnings-tab">
                        <a class="nav-item nav-link active" id="overview-tab" data-bs-toggle="tab" href="#overview">Overview</a>
                        <a class="nav-item nav-link" id="documents-tab" data-bs-toggle="tab" href="#documents">Keyboard research</a>
                        <a class="nav-item nav-link" id="transactions-tab" data-bs-toggle="tab" href="#transactions">Report Busniess</a>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <!-- Overview Tab -->
                <div class="tab-pane fade show active" id="overview">
                    <div class="row">
                        <!-- Ultra Design Chart -->
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Quarterly Earnings and Expenses</h4>
                                    <p class="card-title-desc">
                                        Detailed insights into your financial performance over multiple quarters.
                                    </p>
                                    <div id="ultra-chart" class="ct-chart ct-golden-section" dir="ltr"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<br>
                <!-- Financial Documents Tab -->
                <div class="tab-pane fade" id="documents">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Statement of Earnings</h5>
                                    <p class="card-text">Choose a date range and download a statement summarizing your yearly earnings.</p>
                                    <a href="#" class="btn btn-outline-dark" style="margin-left: 80%;">Choose date range</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Transactions Tab -->
                <div class="tab-pane fade" id="transactions">
                    <div class="row mt-4">
                        <div class="col-12">
                            <h5 class="mb-3">Transaction</h5>
                            <div class="dropdown">
                                <button class="btn btn-outline-dark dropdown-toggle" type="button" id="webDevDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    Websites & Development
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="webDevDropdown">
                                    <li>
                                        <a class="dropdown-item" href="#">Web Design</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Frontend Development</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Backend Development</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Full-Stack Development</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">eCommerce Development</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">CMS Development</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">WordPress Development</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Shopify Development</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">API Integration</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Web App Development</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Bug Fixes & Maintenance</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">Other Services</a>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="card">
                                <div class="card-body text-center no-data">
                                    <p>No transactions found</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chartist JS -->
<script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Ultra-Modern Chart with more data
        new Chartist.Bar('#ultra-chart', {
            labels: ['Q1 2023', 'Q2 2023', 'Q3 2023', 'Q4 2023', 'Q1 2024', 'Q2 2024', 'Q3 2024', 'Q4 2024'],
            series: [
                [1500, 2400, 3000, 4200, 5000, 6100, 7500, 8900], // Earnings
                [800, 1200, 1800, 2500, 2900, 3300, 4000, 4800]  // Expenses
            ]
        }, {
            stackBars: false,
            seriesBarDistance: 15, // Adjusted bar spacing
            axisX: {
                offset: 100 // Increased offset for long labels
            },
            axisY: {
                offset: 100,
                scaleMinSpace: 40, // More space between Y-axis ticks
                labelInterpolationFnc: function (value) {
                    return '$' + value.toLocaleString(); // Format numbers with commas
                }
            },
            chartPadding: {
                top: 50,
                right: 50,
                bottom: 50,
                left: 50
            }
        }).on('draw', function (data) {
            if (data.type === 'bar') {
                data.element.attr({
                    style: 'stroke-width: 30px; stroke-linecap: round;'
                });
            }
        });
    });
</script>

<!-- Include Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
