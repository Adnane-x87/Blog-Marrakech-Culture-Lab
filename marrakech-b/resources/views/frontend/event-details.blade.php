@extends('layouts.app')

@section('content')
<section class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="events.html">Events</a></li>
                    <li class="breadcrumb-item"><a href="category.html?cat=music">Music</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Traditional Moroccan Music Concert</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Event Hero -->
    <section class="event-hero">
        <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?w=1920&q=80" alt="Traditional Moroccan Music Concert" class="event-hero-image">
        <div class="event-hero-overlay"></div>
        <div class="event-hero-content">
            <div class="container">
                <span class="event-category-badge">Music Concert</span>
                <h1 class="event-hero-title">Traditional Moroccan Music Concert</h1>
                <div class="event-hero-meta">
                    <span><i class="fas fa-calendar"></i> December 15, 2025</span>
                    <span><i class="fas fa-clock"></i> 8:00 PM - 10:30 PM</span>
                    <span><i class="fas fa-map-marker-alt"></i> Marrakech Cultural Center</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Event Details -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-8 order-2 order-lg-1">
                    <!-- Gallery -->
                    <div class="gallery-section mb-4 reveal">
                        <div class="gallery-grid">
                            <div class="gallery-item">
                                <img src="https://images.unsplash.com/photo-1514320291840-2e0a9bf2a9ae?w=400&q=80" alt="Concert Gallery 1">
                            </div>
                            <div class="gallery-item">
                                <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=400&q=80" alt="Concert Gallery 2">
                            </div>
                            <div class="gallery-item">
                                <img src="https://images.unsplash.com/photo-1507838153414-b4b713384a76?w=400&q=80" alt="Cultural Setting">
                            </div>
                        </div>
                    </div>

                    <!-- About Event -->
                    <div class="content-section reveal">
                        <h2>About This Event</h2>
                        <p class="lead">Experience the enchanting sounds of traditional Moroccan music in an authentic cultural setting that celebrates Morocco's rich musical heritage.</p>

                        <p>Join us for an unforgettable evening of traditional Moroccan music featuring master musicians from across Morocco. This concert will showcase the diverse musical traditions of the region, including classical Andalusian melodies, Berber rhythms, and Gnawa spiritual music.</p>

                        <h4>What to Expect</h4>
                        <ul class="feature-list">
                            <li><i class="fas fa-music"></i>Live performances on traditional instruments including oud, qanun, violin, and percussion</li>
                            <li><i class="fas fa-microphone"></i>Vocal performances in Arabic and Berber languages</li>
                            <li><i class="fas fa-book"></i>Brief introductions to each musical tradition and its cultural significance</li>
                            <li><i class="fas fa-coffee"></i>Traditional Moroccan tea served during intermission</li>
                            <li><i class="fas fa-camera"></i>Meet and greet with the musicians after the performance</li>
                        </ul>

                        <h4>Featured Musicians</h4>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="musician-card">
                                    <h6>Master Ahmed Benali</h6>
                                    <p>Oud virtuoso with 30+ years of experience in Andalusian classical music</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="musician-card">
                                    <h6>Fatima Amellal</h6>
                                    <p>Renowned vocalist specializing in traditional Amazigh (Berber) songs</p>
                                </div>
                            </div>
                        </div>

                        <h4>Important Information</h4>
                        <div class="alert-custom">
                            <h6><i class="fas fa-info-circle"></i>Dress Code & Guidelines</h6>
                            <ul>
                                <li>Respectful attire recommended (traditional Moroccan dress welcomed)</li>
                                <li>Doors open at 7:30 PM, performance begins promptly at 8:00 PM</li>
                                <li>Photography allowed without flash during designated times</li>
                                <li>No outside food or beverages permitted</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Comments Section -->
                    <div class="comments-section reveal">
                        <h3>Comments & Reviews</h3>

                        <!-- Add Comment Form -->
                        <div class="add-comment">
                            <h5>Share Your Thoughts</h5>
                            <form id="commentForm">
                                <div class="mb-3">
                                    <textarea class="form-control" rows="3" placeholder="Write your comment or question about this event..."></textarea>
                                </div>
                                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <span style="color: #666; font-size: 0.9rem;">Rate this event:</span>
                                        <div class="rating-input">
                                            <i class="fas fa-star" data-rating="1"></i>
                                            <i class="fas fa-star" data-rating="2"></i>
                                            <i class="fas fa-star" data-rating="3"></i>
                                            <i class="fas fa-star" data-rating="4"></i>
                                            <i class="fas fa-star" data-rating="5"></i>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-reserve" style="width: auto; padding: 0.75rem 2rem;">
                                        <i class="fas fa-paper-plane me-2"></i>Post Comment
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Comments List -->
                        <div class="comments-list">
                            <div class="comment">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="commenter-avatar bg-terracotta">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="comment-header">
                                            <div>
                                                <div class="commenter-name">Sarah Johnson</div>
                                                <div class="comment-rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="comment-date">2 days ago</div>
                                        </div>
                                        <p class="comment-text">I attended last year's concert and it was absolutely magical! The acoustics in the Cultural Center are perfect for traditional music. Can't wait for this year's performance.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="comment">
                                <div class="d-flex align-items-start gap-3">
                                    <div class="commenter-avatar bg-indigo">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <div class="comment-header">
                                            <div>
                                                <div class="commenter-name">Ahmed Benali</div>
                                                <div class="comment-rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="comment-date">1 week ago</div>
                                        </div>
                                        <p class="comment-text">Will there be English translations for the musical introductions? I'd love to learn more about the cultural significance of each piece.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 order-1 order-lg-2 mb-4 mb-lg-0">
                    <div class="event-info-card reveal">
                        <span class="event-category">Music Concert</span>
                        <h1>Traditional Moroccan Music Concert</h1>

                        <div class="event-meta-item">
                            <div class="event-meta-icon">
                                <i class="fas fa-calendar"></i>
                            </div>
                            <div class="event-meta-content">
                                <strong>December 15, 2025</strong>
                                <small>8:00 PM - 10:30 PM</small>
                            </div>
                        </div>

                        <div class="event-meta-item">
                            <div class="event-meta-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="event-meta-content">
                                <strong>Marrakech Cultural Center</strong>
                                <small>Avenue Mohammed V, Medina</small>
                            </div>
                        </div>

                        <div class="event-meta-item">
                            <div class="event-meta-icon">
                                <i class="fas fa-ticket-alt"></i>
                            </div>
                            <div class="event-meta-content">
                                <strong>50 MAD</strong>
                                <small>General Admission</small>
                            </div>
                        </div>

                        <div class="event-meta-item">
                            <div class="event-meta-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="event-meta-content">
                                <strong>120 Available Seats</strong>
                                <div class="seats-indicator">
                                    <i class="fas fa-circle" style="font-size: 8px;"></i>
                                    45 spots remaining
                                </div>
                            </div>
                        </div>

                        <div class="event-actions">
                            <button class="btn btn-reserve" onclick="alert('Reservation system coming soon!')">
                                <i class="fas fa-shopping-cart me-2"></i>Reserve Your Seat
                            </button>
                            <div class="row g-2">
                                <div class="col-6">
                                    <button class="btn btn-action" id="saveBtn" onclick="toggleSave(this)">
                                        <i class="fas fa-heart"></i>
                                        <span>Save</span>
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-action" onclick="shareEvent()">
                                        <i class="fas fa-share-alt"></i>
                                        <span>Share</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Organizer Info -->
                        <div class="organizer-section">
                            <h5>Organized by</h5>
                            <div class="organizer-card">
                                <div class="organizer-avatar">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="organizer-info">
                                    <strong>Marrakech Cultural Center</strong>
                                    <small class="rating">
                                        <i class="fas fa-star"></i>
                                        4.8 (127 reviews)
                                    </small>
                                </div>
                            </div>
                            <a href="#" class="btn btn-action mt-3" style="width: 100%;">
                                View Profile
                            </a>
                        </div>
                    </div>

                    <!-- Venue Info -->
                    <div class="sidebar-card reveal" style="transition-delay: 0.1s;">
                        <h5>Venue Information</h5>
                        <h6>Marrakech Cultural Center</h6>
                        <p>A historic venue in the heart of the medina, featuring traditional Moroccan architecture and excellent acoustics for musical performances.</p>

                        <div class="venue-detail">
                            <i class="fas fa-map-marker-alt"></i>
                            <small>Avenue Mohammed V, Medina, Marrakech</small>
                        </div>
                        <div class="venue-detail">
                            <i class="fas fa-phone"></i>
                            <small>+212 524 123 456</small>
                        </div>
                        <div class="venue-detail">
                            <i class="fas fa-parking"></i>
                            <small>Parking available nearby</small>
                        </div>
                        <div class="venue-detail">
                            <i class="fas fa-wheelchair"></i>
                            <small>Wheelchair accessible</small>
                        </div>

                        <button class="btn btn-action mt-3" style="width: 100%;" onclick="alert('Opening map...')">
                            <i class="fas fa-directions me-2"></i>Get Directions
                        </button>
                    </div>

                    <!-- Weather Widget -->
                    <div class="sidebar-card reveal" style="transition-delay: 0.2s;">
                        <h6>Weather Forecast</h6>
                        <div class="weather-widget">
                            <div class="weather-icon">
                                <i class="fas fa-sun"></i>
                            </div>
                            <div class="weather-info">
                                <strong>22°C</strong>
                                <small>Clear evening</small>
                            </div>
                        </div>
                    </div>

                    <!-- Similar Events -->
                    <div class="sidebar-card reveal" style="transition-delay: 0.3s;">
                        <h6>You Might Also Like</h6>
                        <a href="#" class="similar-event">
                            <img src="https://images.unsplash.com/photo-1508700115892-45ecd05ae2ad?w=200&q=80" alt="Theater Performance" class="similar-event-img">
                            <div class="similar-event-info">
                                <h6>Desert Rhythms Dance</h6>
                                <small>January 20, 2025</small>
                            </div>
                        </a>
                        <a href="#" class="similar-event">
                            <img src="https://images.unsplash.com/photo-1460661419201-fd4cecdf8a8b?w=200&q=80" alt="Art Exhibition" class="similar-event-img">
                            <div class="similar-event-info">
                                <h6>Sculptures of the Atlas</h6>
                                <small>January 10, 2025</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

       

@endsection