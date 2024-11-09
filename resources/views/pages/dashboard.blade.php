@extends('layouts.app')

@section('title', 'General Dashboard')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>

            <div class="section-body">
                <h2 class="section-title">Hi, Welcome Back!</h2>
                <p class="section-lead">
                    This is your dashboard, Here you can see overview of the data
                </p>

                <div class="row">
                    <div class="col-12 col md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Statistics Coming Soon</h4>
                            </div>
                            <div class="card-body">
                                <div class="chart-container"
                                    style="min-height: 375px; height: 375px; max-height: 375px; max-width: 100%; margin: 0px auto;">
                                    <canvas id="statisticsChart"></canvas>
                                </div>
                                <div id="statistics-legend" class="chart-legend"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col md-6 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4>Information Coming Soon</h4>
                            </div>
                            <div class="card-body">
                                <div class="chart-container"
                                    style="min-height: 375px; height: 375px; max-height: 375px; max-width: 100%; margin: 0px auto;">
                                    <canvas id="statisticsChart"></canvas>
                                </div>
                                <div id="statistics-legend" class="chart-legend"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush
