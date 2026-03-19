@extends('layouts.app')

@section('content')
     <section class="page-header">
        <div class="container">
            <div class="page-header-content">
                <h1>Cultural Events in Marrakech</h1>
                <p>Discover inspiring cultural experiences happening in Morocco's red city</p>
            </div>
        </div>
    </section>

    <!-- Search and Filter Section -->
    <section class="search-section">
        <div class="container">
            <div class="row align-items-center g-3">
                <div class="col-lg-6">
                    <div class="search-input-group">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-search"></i>
                            </span>
                            <input type="text" class="form-control" id="searchInput" placeholder="Search events by title, description, or category...">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <input type="date" class="form-control filter-select" id="dateFilter">
                </div>
                <div class="col-lg-3">
                    <select class="form-select filter-select" id="locationFilter">
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
    <section class="filter-buttons-section">
        <div class="container">
            <div class="filter-buttons">
                <button class="filter-btn active" data-filter="all">
                    <i class="fas fa-th-large"></i>All Events
                </button>
                <button class="filter-btn" data-filter="music">
                    <i class="fas fa-music"></i>Music
                </button>
                <button class="filter-btn" data-filter="exhibition">
                    <i class="fas fa-palette"></i>Art Exhibitions
                </button>
                <button class="filter-btn" data-filter="theater">
                    <i class="fas fa-theater-masks"></i>Theater
                </button>
                <button class="filter-btn" data-filter="workshop">
                    <i class="fas fa-hands"></i>Workshops
                </button>
                <button class="filter-btn" data-filter="festival">
                    <i class="fas fa-star"></i>Festivals
                </button>
            </div>
        </div>
    </section>

    <!-- Events Grid -->
    <section class="events-section">
        <div class="container">
            <div class="events-grid" id="eventsGrid">
                <!-- Event 1 - Traditional Music Concert -->
                <div class="event-card reveal" data-category="music" data-date="2025-04-15" data-location="medina">
                    <div class="event-card-image">
                        <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?w=800&q=80" alt="Traditional Moroccan Music Concert">
                        <span class="event-category-tag">Music</span>
                        <div class="event-date-badge">
                            <span class="day">15</span>
                            <span class="month">Apr</span>
                        </div>
                    </div>
                    <div class="event-card-body">
                        <h3 class="event-card-title">Traditional Moroccan Music Concert</h3>
                        <p class="event-card-text">Experience the enchanting sounds of traditional Moroccan music featuring oud, qanun, and percussion instruments performed by master musicians.</p>
                        <div class="event-card-meta">
                            <span class="event-location">
                                <i class="fas fa-map-marker-alt"></i>Marrakech Cultural Center
                            </span>
                            <span class="event-price">
                                <i class="fas fa-ticket-alt"></i>50 MAD
                            </span>
                        </div>
                        <a href="{{url('/event-details')}}" class="btn-view-details">
                            View Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Event 2 - Contemporary Art Exhibition -->
                <div class="event-card reveal" data-category="exhibition" data-date="2025-04-20" data-location="gueliz" style="transition-delay: 0.1s;">
                    <div class="event-card-image">
                        <img src="https://images.unsplash.com/photo-1579783902614-a3fb3927b6a5?w=800&q=80" alt="Contemporary Art Exhibition">
                        <span class="event-category-tag" style="background: var(--indigo);">Exhibition</span>
                        <div class="event-date-badge">
                            <span class="day">20</span>
                            <span class="month">Apr</span>
                        </div>
                    </div>
                    <div class="event-card-body">
                        <h3 class="event-card-title">Contemporary Art Exhibition</h3>
                        <p class="event-card-text">Discover modern interpretations of Moroccan culture through contemporary art pieces by local and international artists.</p>
                        <div class="event-card-meta">
                            <span class="event-location">
                                <i class="fas fa-map-marker-alt"></i>Gallery Moderne
                            </span>
                            <span class="event-price">
                                <i class="fas fa-ticket-alt"></i>Free
                            </span>
                        </div>
                        <a href="{{url('/event-details')}}" class="btn-view-details">
                            View Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Event 3 - Traditional Craft Workshop -->
                <div class="event-card reveal" data-category="workshop" data-date="2025-04-25" data-location="medina" style="transition-delay: 0.2s;">
                    <div class="event-card-image">
                        <img src="https://images.unsplash.com/photo-1565193566173-7a0ee3dbe261?w=800&q=80" alt="Traditional Craft Workshop">
                        <span class="event-category-tag" style="background: var(--ochre); color: var(--indigo);">Workshop</span>
                        <div class="event-date-badge">
                            <span class="day">25</span>
                            <span class="month">Apr</span>
                        </div>
                    </div>
                    <div class="event-card-body">
                        <h3 class="event-card-title">Traditional Pottery Workshop</h3>
                        <p class="event-card-text">Learn the ancient art of Moroccan pottery and ceramic painting from master craftsmen in an immersive hands-on experience.</p>
                        <div class="event-card-meta">
                            <span class="event-location">
                                <i class="fas fa-map-marker-alt"></i>Artisan Quarter
                            </span>
                            <span class="event-price">
                                <i class="fas fa-ticket-alt"></i>120 MAD
                            </span>
                        </div>
                        <a href="{{url('/event-details')}}" class="btn-view-details">
                            View Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Event 4 - Theater Performance -->
                <div class="event-card reveal" data-category="theater" data-date="2025-04-30" data-location="hivernage" style="transition-delay: 0.3s;">
                    <div class="event-card-image">
                        <img src="https://images.unsplash.com/photo-1503095395645-3b5e4f290a96?w=800&q=80" alt="Theater Performance">
                        <span class="event-category-tag" style="background: #8B5CF6;">Theater</span>
                        <div class="event-date-badge">
                            <span class="day">30</span>
                            <span class="month">Apr</span>
                        </div>
                    </div>
                    <div class="event-card-body">
                        <h3 class="event-card-title">Tales of Marrakech</h3>
                        <p class="event-card-text">A captivating theatrical performance showcasing the rich history and legends of Marrakech, blending traditional storytelling with contemporary staging.</p>
                        <div class="event-card-meta">
                            <span class="event-location">
                                <i class="fas fa-map-marker-alt"></i>Royal Theater
                            </span>
                            <span class="event-price">
                                <i class="fas fa-ticket-alt"></i>80 MAD
                            </span>
                        </div>
                        <a href="{{url('/event-details')}}" class="btn-view-details">
                            View Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Event 5 - Gnawa Music Festival -->
                <div class="event-card reveal" data-category="music" data-date="2025-05-05" data-location="palmery">
                    <div class="event-card-image">
                        <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=800&q=80" alt="Gnawa Music Festival">
                        <span class="event-category-tag">Music</span>
                        <div class="event-date-badge">
                            <span class="day">05</span>
                            <span class="month">May</span>
                        </div>
                    </div>
                    <div class="event-card-body">
                        <h3 class="event-card-title">Gnawa Music Festival</h3>
                        <p class="event-card-text">Immerse yourself in the spiritual rhythms of Gnawa music with traditional masters performing healing ceremonies and hypnotic musical journeys.</p>
                        <div class="event-card-meta">
                            <span class="event-location">
                                <i class="fas fa-map-marker-alt"></i>Palmery Cultural Garden
                            </span>
                            <span class="event-price">
                                <i class="fas fa-ticket-alt"></i>100 MAD
                            </span>
                        </div>
                        <a href="{{url('/event-details')}}" class="btn-view-details">
                            View Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Event 6 - Modern Art Sculpture Exhibition -->
                <div class="event-card reveal" data-category="exhibition" data-date="2025-05-10" data-location="gueliz" style="transition-delay: 0.1s;">
                    <div class="event-card-image">
                        <img src="https://images.unsplash.com/photo-1460661419201-fd4cecdf8a8b?w=800&q=80" alt="Modern Art Sculpture Exhibition">
                        <span class="event-category-tag" style="background: var(--indigo);">Exhibition</span>
                        <div class="event-date-badge">
                            <span class="day">10</span>
                            <span class="month">May</span>
                        </div>
                    </div>
                    <div class="event-card-body">
                        <h3 class="event-card-title">Sculptures of the Atlas</h3>
                        <p class="event-card-text">An innovative sculpture exhibition featuring works inspired by the Atlas Mountains, created by renowned Moroccan and international sculptors.</p>
                        <div class="event-card-meta">
                            <span class="event-location">
                                <i class="fas fa-map-marker-alt"></i>Atlas Art Gallery
                            </span>
                            <span class="event-price">
                                <i class="fas fa-ticket-alt"></i>30 MAD
                            </span>
                        </div>
                        <a href="{{url('/event-details')}}" class="btn-view-details">
                            View Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Event 7 - Berber Carpet Weaving Workshop -->
                <div class="event-card reveal" data-category="workshop" data-date="2025-05-15" data-location="medina" style="transition-delay: 0.2s;">
                    <div class="event-card-image">
                        <img src="https://images.unsplash.com/photo-1542401886-65d6c61db217?w=800&q=80" alt="Berber Carpet Weaving Workshop">
                        <span class="event-category-tag" style="background: var(--ochre); color: var(--indigo);">Workshop</span>
                        <div class="event-date-badge">
                            <span class="day">15</span>
                            <span class="month">May</span>
                        </div>
                    </div>
                    <div class="event-card-body">
                        <h3 class="event-card-title">Berber Carpet Weaving</h3>
                        <p class="event-card-text">Discover the intricate art of traditional Berber carpet weaving with authentic techniques passed down through generations.</p>
                        <div class="event-card-meta">
                            <span class="event-location">
                                <i class="fas fa-map-marker-alt"></i>Traditional Crafts Center
                            </span>
                            <span class="event-price">
                                <i class="fas fa-ticket-alt"></i>150 MAD
                            </span>
                        </div>
                        <a href="{{url('/event-details')}}" class="btn-view-details">
                            View Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Event 8 - Contemporary Dance Performance -->
                <div class="event-card reveal" data-category="theater" data-date="2025-05-20" data-location="gueliz" style="transition-delay: 0.3s;">
                    <div class="event-card-image">
                        <img src="https://images.unsplash.com/photo-1508700115892-45ecd05ae2ad?w=800&q=80" alt="Contemporary Dance Performance">
                        <span class="event-category-tag" style="background: #8B5CF6;">Theater</span>
                        <div class="event-date-badge">
                            <span class="day">20</span>
                            <span class="month">May</span>
                        </div>
                    </div>
                    <div class="event-card-body">
                        <h3 class="event-card-title">Desert Rhythms Dance</h3>
                        <p class="event-card-text">A mesmerizing contemporary dance performance that interprets the movement of desert winds and the rhythm of Saharan life through modern choreography.</p>
                        <div class="event-card-meta">
                            <span class="event-location">
                                <i class="fas fa-map-marker-alt"></i>Cultural Arts Theater
                            </span>
                            <span class="event-price">
                                <i class="fas fa-ticket-alt"></i>75 MAD
                            </span>
                        </div>
                        <a href="{{url('/event-details')}}" class="btn-view-details">
                            View Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Event 9 - Andalusian Music Concert -->
                <div class="event-card reveal" data-category="music" data-date="2025-05-25" data-location="medina">
                    <div class="event-card-image">
                        <img src="https://images.unsplash.com/photo-1514320291840-2e0a9bf2a9ae?w=800&q=80" alt="Andalusian Music Concert">
                        <span class="event-category-tag">Music</span>
                        <div class="event-date-badge">
                            <span class="day">25</span>
                            <span class="month">May</span>
                        </div>
                    </div>
                    <div class="event-card-body">
                        <h3 class="event-card-title">Andalusian Musical Heritage</h3>
                        <p class="event-card-text">Experience the refined elegance of Andalusian classical music performed by the renowned Marrakech Conservatory ensemble.</p>
                        <div class="event-card-meta">
                            <span class="event-location">
                                <i class="fas fa-map-marker-alt"></i>Bahia Palace Gardens
                            </span>
                            <span class="event-price">
                                <i class="fas fa-ticket-alt"></i>90 MAD
                            </span>
                        </div>
                        <a href="{{url('/event-details')}}" class="btn-view-details">
                            View Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- No Results State (Hidden by default) -->
            <div class="no-results" id="noResults" style="display: none;">
                <i class="fas fa-search"></i>
                <h4>No events found</h4>
                <p>Try adjusting your search or filters to find what you're looking for.</p>
            </div>

            <!-- Load More Button -->
            <div class="load-more-container">
                <button class="btn btn-load-more" id="loadMoreBtn">
                    <i class="fas fa-plus-circle"></i>Load More Events
                </button>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 newsletter-content">
                    <h3>Never Miss a Cultural Event</h3>
                    <p>Subscribe to our newsletter and get notified about upcoming cultural events, exclusive previews, and special offers.</p>
                </div>
                <div class="col-lg-4">
                    <form class="newsletter-form-inline">
                        <input type="email" class="form-control" placeholder="Enter your email">
                        <button type="submit" aria-label="Subscribe">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

   

         
@endsection