@extends('layouts.config')
@section('content')
@include('admin.admin')

<div id="layoutSidenav">
    @include('admin.sidebar')
    <div id="layoutSidenav_content">
        <main>
           <div class="page-header page-header-dark bg-gradient-primary-to-secondary  mt-1">
                <div class="page-header-content">
                    <div class="row justify-content-between">
                        <div class="col-12 col-xl-auto">
                            <h1 class="page-title">
                                DASHBOARD
                            </h1>
                        </div>
                        <div class="col-12 col-xl-auto">
                            <h1 class="page-title">
                                BIENVENIDO
                            </h1>
                        </div>
                        <div class="col-12 col-xl-auto">
                            <div class="fechaHora">
                                <span id="current_date"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main page content-->
            <div class="page-body page-body-dark pt-3">
                <!-- Example Colored Cards for Dashboard Demo-->
                <div class="page-body-dark card-header-actions">
                        <div class="page-body-content">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-lg-6 col-xl-3 mb-2">
                                    <div class="card bg-primary text-white h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="me-3">
                                                    <div class="text-white-75 small">Earnings (Monthly)</div>
                                                    <div class="text-lg fw-bold">$40,000</div>
                                                </div>
                                                <i class="feather-xl text-white-50" data-feather="calendar"></i>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex align-items-center justify-content-between small">
                                            <a class="text-white stretched-link" href="#!">View Report</a>
                                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-3 mb-2">
                                    <div class="card bg-warning text-white h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="me-3">
                                                    <div class="text-white-75 small">Earnings (Annual)</div>
                                                    <div class="text-lg fw-bold">$215,000</div>
                                                </div>
                                                <i class="feather-xl text-white-50" data-feather="dollar-sign"></i>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex align-items-center justify-content-between small">
                                            <a class="text-white stretched-link" href="#!">View Report</a>
                                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-3 mb-2">
                                    <div class="card bg-success text-white h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="me-3">
                                                    <div class="text-white-75 small">Task Completion</div>
                                                    <div class="text-lg fw-bold">24</div>
                                                </div>
                                                <i class="feather-xl text-white-50" data-feather="check-square"></i>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex align-items-center justify-content-between small">
                                            <a class="text-white stretched-link" href="#!">View Tasks</a>
                                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-3 mb-2">
                                    <div class="card bg-danger text-white h-100">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="me-3">
                                                    <div class="text-white-75 small">Pending Requests</div>
                                                    <div class="text-lg fw-bold">17</div>
                                                </div>
                                                <i class="feather-xl text-white-50" data-feather="message-circle"></i>
                                            </div>
                                        </div>
                                        <div class="card-footer d-flex align-items-center justify-content-between small">
                                            <a class="text-white stretched-link" href="#!">View Requests</a>
                                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- Example Charts for Dashboard Demo-->
                <div class="row py-3">
                    <div class="col-xl-6 mb-4">
                        <div class="card card-header-actions h-100">
                            <div class="card-header">
                                Earnings Breakdown
                                <div class="dropdown no-caret">
                                    <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="areaChartDropdownExample" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="text-gray-500" data-feather="more-vertical"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="areaChartDropdownExample">
                                        <a class="dropdown-item" href="#!">Last 12 Months</a>
                                        <a class="dropdown-item" href="#!">Last 30 Days</a>
                                        <a class="dropdown-item" href="#!">Last 7 Days</a>
                                        <a class="dropdown-item" href="#!">This Month</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Custom Range</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-area"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 mb-4">
                        <div class="card card-header-actions h-100">
                            <div class="card-header">
                                Monthly Revenue
                                <div class="dropdown no-caret">
                                    <button class="btn btn-transparent-dark btn-icon dropdown-toggle" id="areaChartDropdownExample" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="text-gray-500" data-feather="more-vertical"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="areaChartDropdownExample">
                                        <a class="dropdown-item" href="#!">Last 12 Months</a>
                                        <a class="dropdown-item" href="#!">Last 30 Days</a>
                                        <a class="dropdown-item" href="#!">Last 7 Days</a>
                                        <a class="dropdown-item" href="#!">This Month</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Custom Range</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-bar"><canvas id="myBarChart" width="100%" height="30"></canvas></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <hr>
        <footer class="footer-admin mt-auto footer-light">
            <div class="container-xl px-4">
                <div class="row">
                    <div class="col-md-6 small">Copyright © Your Website 2022</div>
                    <div class="col-md-6 text-md-end small">
                        <a href="#!">Privacy Policy</a>
                        ·
                        <a href="#!">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

@endsection
