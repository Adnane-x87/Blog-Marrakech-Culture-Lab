@extends('layouts.app')

@section('title', 'Traditional Moroccan Music Concert - Event Details')

@section('content')
    <!-- Breadcrumb -->
    <section class="py-3 mt-5 bg-cream">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/events') }}">Events</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/category/music') }}">Music</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Traditional Moroccan Music Concert</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Event Details -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <!-- Event Image and Gallery -->
                <div class="col-lg-8 mb-4">
                    <div class="event-detail-image">
                        <img src="{{ asset('images/music_concert_6.jpeg') }}" alt="Traditional Moroccan Music Concert" class="img-fluid rounded shadow-lg w-100">
                    </div>
                    
                    <!-- Event Gallery -->
                    <div class="row mt-3">
                        <div class="col-4">
                            <img src="{{ asset('images/music_concert_8.jpg') }}" alt="Concert Gallery 1" class="img-fluid rounded">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('images/music_concert_9.jpg') }}" alt="Concert Gallery 2" class="img-fluid rounded">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('images/cultural_workshop_9.jpg') }}" alt="Cultural Setting" class="img-fluid rounded">
                        </div>
                    </div>
                </div>

                <!-- Event Information -->
                <div class="col-lg-4">
                    <div class="event-info-card bg-white rounded shadow-lg p-4 sticky-top">
                        <span class="event-category">Music Concert</span>
                        <h1 class="h3 my-3">Traditional Moroccan Music Concert</h1>
                        
                        <div class="event-meta mb-4">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-calendar text-terracotta me-3"></i>
                                <div>
                                    <strong>December 15, 2024</strong><br>
                                    <small class="text-muted">8:00 PM - 10:30 PM</small>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-map-marker-alt text-terracotta me-3"></i>
                                <div>
                                    <strong>Marrakech Cultural Center</strong><br>
                                    <small class="text-muted">Avenue Mohammed V, Medina</small>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-ticket-alt text-terracotta me-3"></i>
                                <div>
                                    <strong>50 MAD</strong><br>
                                    <small class="text-muted">General Admission</small>
                                </div>
                            </div>
                            
                            <div class="d-flex align-items-center mb-3">
                                <i class="fas fa-users text-terracotta me-3"></i>
                                <div>
                                    <strong>Available Seats: 120</strong><br>
                                    <small class="text-success">45 spots remaining</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="event-actions">
                            <button class="btn btn-primary w-100 mb-3">
                                <i class="fas fa-shopping-cart me-2"></i>Reserve Your Seat
                            </button>
                            <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-outline-primary w-100">
                                        <i class="fas fa-heart me-2"></i>Save
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-outline-primary w-100">
                                        <i class="fas fa-share-alt me-2"></i>Share
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Organizer Info -->
                        <div class="organizer-info mt-4 pt-4 border-top">
                            <h5>Organized by</h5>
                            <div class="d-flex align-items-center">
                                <div class="organizer-avatar bg-terracotta text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div>
                                    <strong>Marrakech Cultural Center</strong><br>
                                    <small class="text-muted">
                                        <i class="fas fa-star text-ochre"></i>
                                        4.8 (127 reviews)
                                    </small>
                                </div>
                            </div>
                            <a href="#" class="btn btn-outline-secondary btn-sm mt-2">View Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Event Description -->
    <section class="py-5 bg-cream">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2>About This Event</h2>
                    <p class="lead">Experience the enchanting sounds of traditional Moroccan music in an authentic cultural setting that celebrates Morocco's rich musical heritage.</p>
                    
                    <p>Join us for an unforgettable evening of traditional Moroccan music featuring master musicians from across Morocco. This concert will showcase the diverse musical traditions of the region, including classical Andalusian melodies, Berber rhythms, and Gnawa spiritual music.</p>
                    
                    <h4>What to Expect</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-music text-terracotta me-2"></i>Live performances on traditional instruments including oud, qanun, violin, and percussion</li>
                        <li class="mb-2"><i class="fas fa-microphone text-terracotta me-2"></i>Vocal performances in Arabic and Berber languages</li>
                        <li class="mb-2"><i class="fas fa-book text-terracotta me-2"></i>Brief introductions to each musical tradition and its cultural significance</li>
                        <li class="mb-2"><i class="fas fa-coffee text-terracotta me-2"></i>Traditional Moroccan tea served during intermission</li>
                        <li class="mb-2"><i class="fas fa-camera text-terracotta me-2"></i>Meet and greet with the musicians after the performance</li>
                    </ul>
                    
                    <h4>Featured Musicians</h4>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="musician-card bg-white p-3 rounded">
                                <h6>Master Ahmed Benali</h6>
                                <p class="mb-0 small text-muted">Oud virtuoso with 30+ years of experience in Andalusian classical music</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="musician-card bg-white p-3 rounded">
                                <h6>Fatima Amellal</h6>
                                <p class="mb-0 small text-muted">Renowned vocalist specializing in traditional Amazigh (Berber) songs</p>
                            </div>
                        </div>
                    </div>
                    
                    <h4>Important Information</h4>
                    <div class="alert alert-info">
                        <h6 class="alert-heading">Dress Code & Guidelines</h6>
                        <ul class="mb-0 small">
                            <li>Respectful attire recommended (traditional Moroccan dress welcomed)</li>
                            <li>Doors open at 7:30 PM, performance begins promptly at 8:00 PM</li>
                            <li>Photography allowed without flash during designated times</li>
                            <li>No outside food or beverages permitted</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="venue-info bg-white rounded shadow p-4 mb-4">
                        <h5>Venue Information</h5>
                        <h6>Marrakech Cultural Center</h6>
                        <p class="text-muted mb-3">A historic venue in the heart of the medina, featuring traditional Moroccan architecture and excellent acoustics for musical performances.</p>
                        
                        <div class="venue-details">
                            <div class="mb-2">
                                <i class="fas fa-map-marker-alt text-terracotta me-2"></i>
                                <small>Avenue Mohammed V, Medina, Marrakech</small>
                            </div>
                            <div class="mb-2">
                                <i class="fas fa-phone text-terracotta me-2"></i>
                                <small>+212 524 123 456</small>
                            </div>
                            <div class="mb-2">
                                <i class="fas fa-parking text-terracotta me-2"></i>
                                <small>Parking available nearby</small>
                            </div>
                            <div class="mb-3">
                                <i class="fas fa-wheelchair text-terracotta me-2"></i>
                                <small>Wheelchair accessible</small>
                            </div>
                        </div>
                        
                        <button class="btn btn-outline-primary btn-sm w-100">
                            <i class="fas fa-directions me-2"></i>Get Directions
                        </button>
                    </div>
                    
                    <!-- Similar Events -->
                    <div class="similar-events bg-white rounded shadow p-4">
                        <h6>You Might Also Like</h6>
                        <div class="similar-event mb-3 d-flex align-items-center">
                            <img src="{{ asset('images/theater_performance_6.jpg') }}" alt="Theater Performance" class="similar-event-img me-3 rounded" style="width: 60px; height: 60px; object-fit: cover;">
                            <div class="similar-event-info">
                                <h6 class="mb-0">Desert Rhythms Dance</h6>
                                <small class="text-muted">January 20, 2025</small>
                            </div>
                        </div>
                        <div class="similar-event d-flex align-items-center">
                            <img src="{{ asset('images/art_exhibition_2.jpg') }}" alt="Art Exhibition" class="similar-event-img me-3 rounded" style="width: 60px; height: 60px; object-fit: cover;">
                            <div class="similar-event-info">
                                <h6 class="mb-0">Sculptures of the Atlas</h6>
                                <small class="text-muted">January 10, 2025</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comments Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Comments & Reviews</h3>
                    
                    <!-- Add Comment Form -->
                    <div class="add-comment bg-cream rounded p-4 mb-4">
                        <h5>Share Your Thoughts</h5>
                        <form>
                            <div class="mb-3">
                                <textarea class="form-control" rows="3" placeholder="Write your comment or question about this event..."></textarea>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="rating">
                                    <span class="me-2">Rate this event:</span>
                                    <i class="fas fa-star text-ochre"></i>
                                    <i class="fas fa-star text-ochre"></i>
                                    <i class="fas fa-star text-ochre"></i>
                                    <i class="fas fa-star text-ochre"></i>
                                    <i class="far fa-star text-ochre"></i>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-paper-plane me-2"></i>Post Comment
                                </button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Comments List -->
                    <div class="comments-list">
                        <div class="comment bg-white rounded shadow-sm p-4 mb-3">
                            <div class="d-flex align-items-start">
                                <div class="commenter-avatar bg-terracotta text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <strong>Sarah Johnson</strong>
                                            <div class="rating-small">
                                                <i class="fas fa-star text-ochre"></i>
                                                <i class="fas fa-star text-ochre"></i>
                                                <i class="fas fa-star text-ochre"></i>
                                                <i class="fas fa-star text-ochre"></i>
                                                <i class="fas fa-star text-ochre"></i>
                                            </div>
                                        </div>
                                        <small class="text-muted">2 days ago</small>
                                    </div>
                                    <p class="mb-0">I attended last year's concert and it was absolutely magical! The acoustics in the Cultural Center are perfect for traditional music. Can't wait for this year's performance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('styles')
<style>
    .rating-small { font-size: 0.8rem; }
</style>
@endsection
