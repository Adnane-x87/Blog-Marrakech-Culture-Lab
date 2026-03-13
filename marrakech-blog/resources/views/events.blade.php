@extends('layouts.app')

@section('title', 'Cultural Events in Marrakech - Browse All Events')

@section('content')
    <!-- Page Header -->
    <section class="py-5 mt-5" style="background: linear-gradient(135deg, var(--deep-indigo), var(--terracotta-orange)); color: white;">
        <div class="container">
            <div class="text-center">
                <h1 class="display-4 mb-3">Cultural Events in Marrakech</h1>
                <p class="lead">Discover inspiring cultural experiences happening in Morocco's red city</p>
            </div>
        </div>
    </section>

    <!-- Search and Filter Section -->
    <section class="py-4 bg-cream">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-search"></i>
                        </span>
                        <input type="text" class="form-control" id="searchInput" placeholder="Search events by title, description, or category...">
                    </div>
                </div>
                <div class="col-lg-3 mb-3 mb-lg-0">
                    <input type="date" class="form-control" id="dateFilter" placeholder="Filter by date">
                </div>
                <div class="col-lg-3">
                    <select class="form-select" id="locationFilter">
                        <option value="">All Locations</option>
                        <option value="medina">Medina</option>
                        <option value="gueliz">Gueliz</option>
                        <option value="hivernage">Hivernage</option>
                        <option value="palmery">Palmery</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- Filter Buttons -->
    <section class="py-4">
        <div class="container">
            <div class="filter-buttons text-center">
                <button class="filter-btn active" data-filter="all">
                    <i class="fas fa-th-large me-2"></i>All Events
                </button>
                <button class="filter-btn" data-filter="music">
                    <i class="fas fa-music me-2"></i>Music
                </button>
                <button class="filter-btn" data-filter="exhibition">
                    <i class="fas fa-palette me-2"></i>Art Exhibitions
                </button>
                <button class="filter-btn" data-filter="theater">
                    <i class="fas fa-theater-masks me-2"></i>Theater
                </button>
                <button class="filter-btn" data-filter="workshop">
                    <i class="fas fa-hands me-2"></i>Workshops
                </button>
                <button class="filter-btn" data-filter="festival">
                    <i class="fas fa-star me-2"></i>Festivals
                </button>
            </div>
        </div>
    </section>

    <!-- Events Grid -->
    <section class="py-5">
        <div class="container">
            <div class="row" id="eventsGrid">
                <!-- Event 1 - Traditional Music Concert -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="event-card" data-category="music" data-date="2024-12-15" data-location="medina">
                        <img src="{{ asset('images/music_concert_6.jpeg') }}" alt="Traditional Moroccan Music Concert">
                        <div class="card-body">
                            <div class="event-date">
                                <i class="fas fa-calendar me-2"></i>December 15, 2024 - 8:00 PM
                            </div>
                            <span class="event-category">Music</span>
                            <h3 class="card-title">Traditional Moroccan Music Concert</h3>
                            <p class="card-text">Experience the enchanting sounds of traditional Moroccan music featuring oud, qanun, and percussion instruments performed by master musicians from across Morocco.</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <small class="text-muted">
                                    <i class="fas fa-map-marker-alt me-1"></i>Marrakech Cultural Center
                                </small>
                                <small class="text-success fw-bold">
                                    <i class="fas fa-ticket-alt me-1"></i>50 MAD
                                </small>
                            </div>
                            <a href="{{ url('/events/1') }}" class="btn btn-primary w-100">
                                <i class="fas fa-eye me-2"></i>View Details
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Event 2 - Contemporary Art Exhibition -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="event-card" data-category="exhibition" data-date="2024-12-20" data-location="gueliz">
                        <img src="{{ asset('images/art_exhibition_1.jpeg') }}" alt="Contemporary Art Exhibition">
                        <div class="card-body">
                            <div class="event-date">
                                <i class="fas fa-calendar me-2"></i>December 20, 2024 - 6:00 PM
                            </div>
                            <span class="event-category">Exhibition</span>
                            <h3 class="card-title">Contemporary Art Exhibition</h3>
                            <p class="card-text">Discover modern interpretations of Moroccan culture through contemporary art pieces by local and international artists exploring themes of tradition and modernity.</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <small class="text-muted">
                                    <i class="fas fa-map-marker-alt me-1"></i>Gallery Moderne
                                </small>
                                <small class="text-success fw-bold">
                                    <i class="fas fa-ticket-alt me-1"></i>Free Entry
                                </small>
                            </div>
                            <a href="{{ url('/events/2') }}" class="btn btn-primary w-100">
                                <i class="fas fa-eye me-2"></i>View Details
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Event 3 - Traditional Craft Workshop -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="event-card" data-category="workshop" data-date="2024-12-25" data-location="medina">
                        <img src="{{ asset('images/cultural_workshop_1.jpg') }}" alt="Traditional Craft Workshop">
                        <div class="card-body">
                            <div class="event-date">
                                <i class="fas fa-calendar me-2"></i>December 25, 2024 - 2:00 PM
                            </div>
                            <span class="event-category">Workshop</span>
                            <h3 class="card-title">Traditional Pottery Workshop</h3>
                            <p class="card-text">Learn the ancient art of Moroccan pottery and ceramic painting from master craftsmen in an immersive hands-on experience within the historic medina.</p>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <small class="text-muted">
                                    <i class="fas fa-map-marker-alt me-1"></i>Artisan Quarter, Medina
                                </small>
                                <small class="text-success fw-bold">
                                    <i class="fas fa-ticket-alt me-1"></i>120 MAD
                                </small>
                            </div>
                            <a href="{{ url('/events/3') }}" class="btn btn-primary w-100">
                                <i class="fas fa-eye me-2"></i>View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Load More Button -->
            <div class="text-center mt-5">
                <button class="btn btn-secondary" id="loadMoreBtn">
                    <i class="fas fa-plus-circle me-2"></i>Load More Events
                </button>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-5 bg-indigo text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h3>Never Miss a Cultural Event</h3>
                    <p class="mb-0">Subscribe to our newsletter and get notified about upcoming cultural events, exclusive previews, and special offers.</p>
                </div>
                <div class="col-lg-4">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Enter your email">
                        <button class="btn btn-terracotta" type="button">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
