@extends('layouts.app')

@section('title', 'Music Events in Marrakech - Marrakech Cultural Scene')

@section('content')
    <!-- Category Header -->
    <section class="py-5 mt-5" style="background-image: url('{{ asset('images/music_concert_6.jpeg') }}'); background-size: cover; background-position: center;">
        <div class="container py-5">
            <div class="bg-white d-inline-block p-4 rounded shadow-lg" style="max-width: 500px; border-left: 5px solid var(--terracotta-orange);">
                <h1 class="display-4 fw-bold mb-2">Music</h1>
                <p class="lead mb-0">Discover the vibrant soul of Marrakech through its traditional and contemporary musical expressions.</p>
            </div>
        </div>
    </section>

    <!-- Breadcrumb -->
    <section class="py-3 bg-cream">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/events') }}">Events</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Music</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Category Content -->
    <section class="py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Upcoming Music Events</h2>
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                        Sort by: Date
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Date (Soonest)</a></li>
                        <li><a class="dropdown-item" href="#">Popularity</a></li>
                        <li><a class="dropdown-item" href="#">Price (Low-High)</a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <!-- Event 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="event-card bg-white rounded shadow-sm h-100 overflow-hidden">
                        <div class="event-image-container position-relative">
                            <img src="{{ asset('images/music_concert_6.jpeg') }}" alt="Traditional Music" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
                            <span class="badge bg-terracotta position-absolute top-0 end-0 m-3">Music</span>
                        </div>
                        <div class="p-4">
                            <small class="text-terracotta fw-bold">DEC 15, 2024</small>
                            <h5 class="mt-2">Traditional Moroccan Music Concert</h5>
                            <p class="text-muted small">Experience the enchanting sounds of Marrakech in an authentic cultural setting.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="fw-bold">50 MAD</span>
                                <a href="{{ url('/event-details') }}" class="btn btn-sm btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Event 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="event-card bg-white rounded shadow-sm h-100 overflow-hidden">
                        <div class="event-image-container position-relative">
                            <img src="{{ asset('images/music_concert_8.jpg') }}" alt="Gnawa Fusion" class="img-fluid w-100" style="height: 200px; object-fit: cover;">
                            <span class="badge bg-terracotta position-absolute top-0 end-0 m-3">Music</span>
                        </div>
                        <div class="p-4">
                            <small class="text-terracotta fw-bold">JAN 5, 2025</small>
                            <h5 class="mt-2">Gnawa Music Festival</h5>
                            <p class="text-muted small">A celebration of spiritual rhythms and contemporary fusion in the Palmery gardens.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="fw-bold text-success">Free Entry</span>
                                <a href="#" class="btn btn-sm btn-primary">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Add more events as needed -->
            </div>
            
            <!-- Load More -->
            <div class="text-center mt-5">
                <button class="btn btn-outline-primary btn-lg px-5">Load More Music Events</button>
            </div>
        </div>
    </section>

    <!-- Explore Other Categories -->
    <section class="py-5 bg-cream">
        <div class="container">
            <h3 class="mb-4">Explore Other Categories</h3>
            <div class="row">
                <div class="col-md-3 col-6 mb-3">
                    <a href="#" class="category-link d-block bg-white text-center p-4 rounded shadow-sm text-decoration-none">
                        <i class="fas fa-palette text-terracotta fa-2x mb-2"></i>
                        <h6 class="mb-0 text-dark">Art Exhibition</h6>
                    </a>
                </div>
                <!-- Other category links -->
            </div>
        </div>
    </section>
@endsection
