@extends('layouts.app')
@section('content')


    <section class="hero-section">

   <div class="hero-video-container">
            <video class="hero-video" autoplay muted loop playsinline poster="./videos/MARRAKECH _vd.mp4">
                <source src="{{asset('front/videos/MARRAKECH _vd.mp4')}}" type="video/mp4">
                <!-- Fallback image if video doesn't load -->
                <img src="https://images.unsplash.com/photo-1539020140153-e479b8c22e70?w=1920&q=80" alt="Marrakech at night">
            </video>
        </div>
        <div class="hero-video-overlay"></div>

        <div class="container">
            <div class="hero-content">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <span class="hero-badge">
                            Live The Experience
                        </span>
                        <h1 class="hero-title">
                            Discover Marrakech's <span>Cultural Heartbeat</span>
                        </h1>
                        <p class="hero-text">
                            Immerse yourself in the rich artistic heritage of Morocco's red city. From traditional music concerts to contemporary art exhibitions, explore the vibrant cultural landscape that makes Marrakech unique.
                        </p>
                        <div class="hero-buttons">
                            <a href="#" class="btn btn-primary-custom">
                                <i class="fas fa-calendar-alt"></i>
                                Explore Events
                            </a>
                            <a href="{{ url('/about') }}" class="btn btn-outline-custom">
                                <i class="fas fa-play-circle"></i>
                                Watch Film
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Video Controls -->
        <div class="video-controls">
            <button class="video-btn" id="muteBtn" aria-label="Toggle sound">
                <i class="fas fa-volume-mute"></i>
            </button>
            <button class="video-btn" id="playPauseBtn" aria-label="Play/Pause video">
                <i class="fas fa-pause"></i>
            </button>
        </div>

        <!-- Scroll Indicator -->
        <div class="scroll-indicator" onclick="document.getElementById('events').scrollIntoView({behavior: 'smooth'})">
            <span>Scroll</span>
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- Featured Events Section -->
    <section class="section-padding" id="events">
        <div class="container">
            <div class="section-title reveal">
                <h2>Featured Cultural Events</h2>
                <p>Don't miss these extraordinary cultural experiences happening in Marrakech</p>
            </div>

            <div class="events-grid">
                <!-- Featured Event 1 -->
                <div class="event-card reveal" data-category="music" data-date="2025-04-15">
                    <div class="event-card-image">
                        <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?w=800&q=80" alt="Traditional Moroccan Music Concert with oud and qanun instruments in Marrakech">
                        <span class="event-badge">Featured</span>
                        <div class="event-date-badge">
                            <span class="day">15</span>
                            <span class="month">Apr</span>
                        </div>
                    </div>
                    <div class="event-card-body">
                        <span class="event-category">Music</span>
                        <h3 class="event-card-title">Traditional Moroccan Music Concert</h3>
                        <p class="event-card-text">Experience the enchanting sounds of traditional Moroccan music featuring oud, qanun, and percussion instruments performed by master musicians.</p>
                        <div class="event-meta">
                            <span class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                Cultural Center, Medina
                            </span>
                            <a href="#" class="btn-view-details">
                                Details <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Featured Event 2 -->
                <div class="event-card reveal" data-category="exhibition" data-date="2025-04-22" style="transition-delay: 0.1s;">
                    <div class="event-card-image">
                        <img src="https://images.unsplash.com/photo-1579783902614-a3fb3927b6a5?w=800&q=80" alt="Contemporary Art Exhibition featuring Moroccan artists in Gallery Moderne">
                        <span class="event-badge" style="background: var(--indigo);">New</span>
                        <div class="event-date-badge">
                            <span class="day">22</span>
                            <span class="month">Apr</span>
                        </div>
                    </div>
                    <div class="event-card-body">
                        <span class="event-category">Exhibition</span>
                        <h3 class="event-card-title">Contemporary Art Exhibition</h3>
                        <p class="event-card-text">Discover modern interpretations of Moroccan culture through contemporary art pieces by local and international artists.</p>
                        <div class="event-meta">
                            <span class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                Gallery Moderne, Gueliz
                            </span>
                            <a href="#" class="btn-view-details">
                                Details <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Featured Event 3 -->
                <div class="event-card reveal" data-category="workshop" data-date="2025-05-01" style="transition-delay: 0.2s;">
                    <div class="event-card-image">
                        <img src="https://images.unsplash.com/photo-1565193566173-7a0ee3dbe261?w=800&q=80" alt="Traditional Moroccan Pottery Workshop in Artisan Quarter">
                        <span class="event-badge" style="background: var(--ochre); color: var(--indigo);">Limited Spots</span>
                        <div class="event-date-badge">
                            <span class="day">01</span>
                            <span class="month">May</span>
                        </div>
                    </div>
                    <div class="event-card-body">
                        <span class="event-category">Workshop</span>
                        <h3 class="event-card-title">Traditional Craft Workshop</h3>
                        <p class="event-card-text">Learn the ancient art of Moroccan pottery and ceramic painting from master craftsmen in an immersive hands-on experience.</p>
                        <div class="event-meta">
                            <span class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                Artisan Quarter, Mellah
                            </span>
                            <a href="#" class="btn-view-details">
                                Details <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5 reveal">
                <a href="#" class="btn btn-primary-custom">
                    <i class="fas fa-th-large me-2"></i>View All Events
                </a>
            </div>
        </div>
    </section>

    <!-- Cultural Highlights Section -->
    <section class="section-padding bg-sand">
        <div class="container">
            <div class="section-title reveal">
                <h2>Cultural Highlights</h2>
                <p>Explore the diverse artistic expressions that define Marrakech's cultural identity</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6 reveal">
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-music"></i>
                        </div>
                        <h4>Traditional Music</h4>
                        <p>From Gnawa rhythms to Andalusian melodies, discover the rich musical heritage of Morocco.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 reveal" style="transition-delay: 0.1s;">
                    <div class="highlight-card">
                        <div class="highlight-icon" style="background: linear-gradient(135deg, var(--indigo) 0%, var(--indigo-light) 100%);">
                            <i class="fas fa-palette"></i>
                        </div>
                        <h4>Visual Arts</h4>
                        <p>Contemporary galleries showcase both traditional crafts and modern artistic interpretations.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 reveal" style="transition-delay: 0.2s;">
                    <div class="highlight-card">
                        <div class="highlight-icon" style="background: linear-gradient(135deg, var(--ochre) 0%, var(--terracotta) 100%);">
                            <i class="fas fa-theater-masks"></i>
                        </div>
                        <h4>Theater & Performance</h4>
                        <p>Experience storytelling traditions through modern theater and traditional performances.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 reveal" style="transition-delay: 0.3s;">
                    <div class="highlight-card">
                        <div class="highlight-icon">
                            <i class="fas fa-hands"></i>
                        </div>
                        <h4>Artisan Workshops</h4>
                        <p>Learn traditional crafts directly from master artisans in immersive workshop experiences.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="section-padding cta-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 cta-content reveal">
                    <h3>Share Your Cultural Event</h3>
                    <p>Are you organizing a cultural event in Marrakech? Join our platform and connect with culture enthusiasts from around the world. Reach thousands of potential attendees.</p>
                </div>
                <div class="col-lg-4 text-lg-end cta-button-wrapper reveal">
                    <a href="submit-event.html" class="btn btn-cta">
                        <i class="fas fa-plus-circle"></i>
                        Submit Your Event
                    </a>
                </div>
            </div>
        </div>
            </section>

@endsection