@extends('layouts.app')

@section('title', 'Marrakech Cultural Scene - Discover Local Arts & Events')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section" style="background-image: url('{{ asset('images/marrakech_hero_2.jpg') }}');">
        <div class="container">
            <div class="hero-content">
                <h1 class="fade-in">Discover Marrakech's Cultural Heartbeat</h1>
                <p class="fade-in">Immerse yourself in the rich artistic heritage of Morocco's red city. From traditional music concerts to contemporary art exhibitions, explore the vibrant cultural landscape that makes Marrakech unique.</p>
                <div class="fade-in">
                    <a href="{{ url('/events') }}" class="btn btn-primary me-3">
                        <i class="fas fa-calendar-alt me-2"></i>Explore Events
                    </a>
                    <a href="{{ url('/about') }}" class="btn btn-outline-primary">
                        <i class="fas fa-info-circle me-2"></i>Learn More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Events Section -->
    <section class="py-5">
        <div class="container">
            <div class="section-title">
                <h2>Featured Cultural Events</h2>
                <p>Don't miss these extraordinary cultural experiences happening in Marrakech</p>
            </div>
            
            <div class="row">
                <!-- Featured Event 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="event-card" data-category="music" data-date="2024-12-15">
                        <img src="{{ asset('images/music_concert_6.jpeg') }}" alt="Traditional Moroccan Music Concert">
                        <div class="card-body">
                            <div class="event-date">
                                <i class="fas fa-calendar me-2"></i>December 15, 2024
                            </div>
                            <span class="event-category">Music</span>
                            <h3 class="card-title">Traditional Moroccan Music Concert</h3>
                            <p class="card-text">Experience the enchanting sounds of traditional Moroccan music featuring oud, qanun, and percussion instruments performed by master musicians.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">
                                    <i class="fas fa-map-marker-alt me-1"></i>Cultural Center
                                </small>
                                <a href="{{ url('/events/1') }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-eye me-1"></i>View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Featured Event 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="event-card" data-category="exhibition" data-date="2024-12-20">
                        <img src="{{ asset('images/art_exhibition_1.jpeg') }}" alt="Contemporary Art Exhibition">
                        <div class="card-body">
                            <div class="event-date">
                                <i class="fas fa-calendar me-2"></i>December 20, 2024
                            </div>
                            <span class="event-category">Exhibition</span>
                            <h3 class="card-title">Contemporary Art Exhibition</h3>
                            <p class="card-text">Discover modern interpretations of Moroccan culture through contemporary art pieces by local and international artists.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">
                                    <i class="fas fa-map-marker-alt me-1"></i>Gallery Moderne
                                </small>
                                <a href="{{ url('/events/2') }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-eye me-1"></i>View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Featured Event 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="event-card" data-category="workshop" data-date="2024-12-25">
                        <img src="{{ asset('images/cultural_workshop_1.jpg') }}" alt="Traditional Craft Workshop">
                        <div class="card-body">
                            <div class="event-date">
                                <i class="fas fa-calendar me-2"></i>December 25, 2024
                            </div>
                            <span class="event-category">Workshop</span>
                            <h3 class="card-title">Traditional Craft Workshop</h3>
                            <p class="card-text">Learn the ancient art of Moroccan pottery and ceramic painting from master craftsmen in an immersive hands-on experience.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">
                                    <i class="fas fa-map-marker-alt me-1"></i>Artisan Quarter
                                </small>
                                <a href="{{ url('/events/3') }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-eye me-1"></i>View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-4">
                <a href="{{ url('/events') }}" class="btn btn-secondary">
                    <i class="fas fa-th-large me-2"></i>View All Events
                </a>
            </div>
        </div>
    </section>

    <!-- Cultural Highlights Section -->
    <section class="py-5 bg-cream">
        <div class="container">
            <div class="section-title">
                <h2>Cultural Highlights</h2>
                <p>Explore the diverse artistic expressions that define Marrakech's cultural identity</p>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="text-center">
                        <div class="bg-terracotta text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-music fa-2x"></i>
                        </div>
                        <h4>Traditional Music</h4>
                        <p>From Gnawa rhythms to Andalusian melodies, discover the rich musical heritage of Morocco.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="text-center">
                        <div class="bg-ochre text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-palette fa-2x"></i>
                        </div>
                        <h4>Visual Arts</h4>
                        <p>Contemporary galleries showcase both traditional crafts and modern artistic interpretations.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="text-center">
                        <div class="bg-indigo text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-theater-masks fa-2x"></i>
                        </div>
                        <h4>Theater & Performance</h4>
                        <p>Experience storytelling traditions through modern theater and traditional performances.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="text-center">
                        <div class="bg-terracotta text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                            <i class="fas fa-hands fa-2x"></i>
                        </div>
                        <h4>Artisan Workshops</h4>
                        <p>Learn traditional crafts directly from master artisans in immersive workshop experiences.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h3>Share Your Cultural Event</h3>
                    <p class="mb-0">Are you organizing a cultural event in Marrakech? Join our platform and connect with culture enthusiasts from around the world.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ url('/events/submit') }}" class="btn btn-primary">
                        <i class="fas fa-plus-circle me-2"></i>Submit Your Event
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
