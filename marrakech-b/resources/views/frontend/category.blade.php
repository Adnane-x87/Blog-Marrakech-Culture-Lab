@extends('layouts.app')

@section('content')
<!-- Navigation - Exactly Matching Index -->
    

    <!-- Category Hero Section -->
    <section class="category-hero">
        <div class="container">
            <div class="category-hero-content">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <span class="category-badge">
                            <i class="fas fa-music me-2"></i> Category
                        </span>
                        <div class="category-icon-large">
                            <i class="fas fa-music"></i>
                        </div>
                        <h1 class="category-title">Music Events</h1>
                        <p class="category-description">
                            From the spiritual rhythms of Gnawa music to the refined elegance of Andalusian classical traditions, 
                            Marrakech's music scene offers an extraordinary journey through Morocco's diverse cultural heritage. 
                            Experience authentic performances in historic venues and discover both traditional and contemporary 
                            interpretations of Moroccan musical artistry.
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="category-stats reveal">
                            <h3>15</h3>
                            <p class="mb-0">Upcoming Events</p>
                            <hr class="my-3" style="border-color: rgba(255,255,255,0.2);">
                            <small>Next event in 3 days</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Breadcrumb -->
    <section class="breadcrumb-section">
        <div class="container">
            
        </div>
    </section>

    <!-- Filter Section -->
    <section class="filter-section">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <p class="mb-0 text-muted">Discover traditional and contemporary music events happening throughout Marrakech</p>
                </div>
                <div class="col-lg-4">
                    <label class="filter-label">Filter by Music Type</label>
                    <select class="form-select-custom w-100" id="musicTypeFilter">
                        <option value="">All Music Types</option>
                        <option value="traditional">Traditional</option>
                        <option value="gnawa">Gnawa</option>
                        <option value="andalusian">Andalusian</option>
                        <option value="berber">Berber</option>
                        <option value="contemporary">Contemporary</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- Music Events Grid -->
    <section class="section-padding">
        <div class="container">
            <div class="events-grid" id="musicEventsGrid">
                <!-- Event 1: Traditional -->
                <div class="event-card reveal" data-category="music" data-type="traditional" data-date="2025-04-15">
                    <div class="event-card-image">
                        <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?w=800&q=80" alt="Traditional Moroccan Music Concert">
                        <span class="event-badge">Featured</span>
                        <div class="event-date-badge">
                            <span class="day">15</span>
                            <span class="month">Apr</span>
                        </div>
                    </div>
                    <div class="event-card-body">
                        <span class="event-category">Traditional Music</span>
                        <h3 class="event-card-title">Traditional Moroccan Music Concert</h3>
                        <p class="event-card-text">Experience the enchanting sounds of traditional Moroccan music featuring oud, qanun, and percussion instruments performed by master musicians.</p>
                        <div class="musical-elements">
                            <span class="badge-music">Oud</span>
                            <span class="badge-music">Qanun</span>
                            <span class="badge-music">Percussion</span>
                        </div>
                        <div class="event-meta">
                            <span class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                Cultural Center
                            </span>
                            <span class="event-price">50 MAD</span>
                        </div>
                        <a href="event-details.html?id=1" class="btn-view-details">
                            View Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Event 2: Gnawa -->
                <div class="event-card reveal" data-category="music" data-type="gnawa" data-date="2025-01-05" style="transition-delay: 0.1s;">
                    <div class="event-card-image">
                        <img src="https://images.unsplash.com/photo-1493225255756-d9584f8606e9?w=800&q=80" alt="Gnawa Music Festival">
                        <span class="event-badge" style="background: var(--indigo);">Popular</span>
                        <div class="event-date-badge">
                            <span class="day">05</span>
                            <span class="month">Jan</span>
                        </div>
                    </div>
                    <div class="event-card-body">
                        <span class="event-category">Gnawa Music</span>
                        <h3 class="event-card-title">Gnawa Music Festival</h3>
                        <p class="event-card-text">Immerse yourself in the spiritual rhythms of Gnawa music with traditional masters performing healing ceremonies and hypnotic musical journeys.</p>
                        <div class="musical-elements">
                            <span class="badge-music">Krakebs</span>
                            <span class="badge-music">Sintir</span>
                            <span class="badge-music">Qrqaba</span>
                        </div>
                        <div class="event-meta">
                            <span class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                Palmery Garden
                            </span>
                            <span class="event-price">100 MAD</span>
                        </div>
                        <a href="event-details.html?id=5" class="btn-view-details">
                            View Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Event 3: Andalusian -->
                <div class="event-card reveal" data-category="music" data-type="andalusian" data-date="2025-01-25" style="transition-delay: 0.2s;">
                    <div class="event-card-image">
                        <img src="https://images.unsplash.com/photo-1511192336575-5a79af67a629?w=800&q=80" alt="Andalusian Music Concert">
                        <span class="event-badge" style="background: var(--ochre); color: var(--indigo);">Classical</span>
                        <div class="event-date-badge">
                            <span class="day">25</span>
                            <span class="month">Jan</span>
                        </div>
                    </div>
                    <div class="event-card-body">
                        <span class="event-category">Andalusian Music</span>
                        <h3 class="event-card-title">Andalusian Musical Heritage</h3>
                        <p class="event-card-text">Experience the refined elegance of Andalusian classical music performed by the renowned Marrakech Conservatory ensemble in an intimate palace setting.</p>
                        <div class="musical-elements">
                            <span class="badge-music">Violin</span>
                            <span class="badge-music">Oud</span>
                            <span class="badge-music">Vocals</span>
                        </div>
                        <div class="event-meta">
                            <span class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                Bahia Palace
                            </span>
                            <span class="event-price">90 MAD</span>
                        </div>
                        <a href="event-details.html?id=9" class="btn-view-details">
                            View Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Event 4: Berber -->
                <div class="event-card reveal" data-category="music" data-type="berber" data-date="2025-02-01">
                    <div class="event-card-image">
                        <img src="https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?w=800&q=80" alt="Berber Music Evening">
                        <span class="event-badge">Heritage</span>
                        <div class="event-date-badge">
                            <span class="day">01</span>
                            <span class="month">Feb</span>
                        </div>
                    </div>
                    <div class="event-card-body">
                        <span class="event-category">Berber Music</span>
                        <h3 class="event-card-title">Atlas Mountain Melodies</h3>
                        <p class="event-card-text">Discover the ancient musical traditions of the Atlas Mountains with authentic Berber songs and instrumental performances by village musicians.</p>
                        <div class="musical-elements">
                            <span class="badge-music">Bendir</span>
                            <span class="badge-music">Flute</span>
                            <span class="badge-music">Amazigh Vocals</span>
                        </div>
                        <div class="event-meta">
                            <span class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                Mountain Heritage Center
                            </span>
                            <span class="event-price">65 MAD</span>
                        </div>
                        <a href="event-details.html?id=10" class="btn-view-details">
                            View Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Event 5: Contemporary -->
                <div class="event-card reveal" data-category="music" data-type="contemporary" data-date="2025-02-10" style="transition-delay: 0.1s;">
                    <div class="event-card-image">
                        <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=800&q=80" alt="Contemporary Fusion Concert">
                        <span class="event-badge" style="background: var(--indigo);">Fusion</span>
                        <div class="event-date-badge">
                            <span class="day">10</span>
                            <span class="month">Feb</span>
                        </div>
                    </div>
                    <div class="event-card-body">
                        <span class="event-category">Contemporary Fusion</span>
                        <h3 class="event-card-title">Morocco Meets Jazz</h3>
                        <p class="event-card-text">An innovative fusion performance blending traditional Moroccan instruments with contemporary jazz, creating a unique musical dialogue between cultures.</p>
                        <div class="musical-elements">
                            <span class="badge-music">Jazz Fusion</span>
                            <span class="badge-music">Oud</span>
                            <span class="badge-music">Saxophone</span>
                        </div>
                        <div class="event-meta">
                            <span class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                Modern Arts Center
                            </span>
                            <span class="event-price">120 MAD</span>
                        </div>
                        <a href="event-details.html?id=11" class="btn-view-details">
                            View Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Event 6: Workshop -->
                <div class="event-card reveal" data-category="music" data-type="traditional" data-date="2025-02-15" style="transition-delay: 0.2s;">
                    <div class="event-card-image">
                        <img src="https://images.unsplash.com/photo-1516280440614-6697288d5d38?w=800&q=80" alt="Traditional Vocal Workshop">
                        <span class="event-badge" style="background: var(--ochre); color: var(--indigo);">Workshop</span>
                        <div class="event-date-badge">
                            <span class="day">15</span>
                            <span class="month">Feb</span>
                        </div>
                    </div>
                    <div class="event-card-body">
                        <span class="event-category">Music Workshop</span>
                        <h3 class="event-card-title">Moroccan Vocal Traditions</h3>
                        <p class="event-card-text">Learn traditional Moroccan vocal techniques and songs in this interactive workshop led by renowned vocalist Fatima Amellal.</p>
                        <div class="musical-elements">
                            <span class="badge-music">Vocal Training</span>
                            <span class="badge-music">Traditional Songs</span>
                            <span class="badge-music">Interactive</span>
                        </div>
                        <div class="event-meta">
                            <span class="event-location">
                                <i class="fas fa-map-marker-alt"></i>
                                Music Academy
                            </span>
                            <span class="event-price">85 MAD</span>
                        </div>
                        <a href="event-details.html?id=12" class="btn-view-details">
                            View Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Load More Button -->
            <div class="text-center mt-5 reveal">
                <button class="btn-secondary-custom" id="loadMoreMusicBtn">
                    <i class="fas fa-plus-circle me-2"></i>Load More Music Events
                </button>
            </div>
        </div>
    </section>

    <!-- Venues Section -->
    <section class="section-padding bg-sand">
        <div class="container">
            <div class="section-title reveal">
                <h2>Popular Music Venues</h2>
                <p>Discover the best locations in Marrakech for experiencing traditional and contemporary music</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6 reveal">
                    <div class="venue-card">
                        <div class="venue-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <h5>Cultural Center</h5>
                        <p>Historic venue with excellent acoustics for traditional performances</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 reveal" style="transition-delay: 0.1s;">
                    <div class="venue-card">
                        <div class="venue-icon" style="background: linear-gradient(135deg, var(--indigo) 0%, var(--indigo-light) 100%);">
                            <i class="fas fa-tree"></i>
                        </div>
                        <h5>Palmery Gardens</h5>
                        <p>Outdoor venue surrounded by palm trees, perfect for Gnawa ceremonies</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 reveal" style="transition-delay: 0.2s;">
                    <div class="venue-card">
                        <div class="venue-icon" style="background: linear-gradient(135deg, var(--ochre) 0%, var(--terracotta) 100%);">
                            <i class="fas fa-crown"></i>
                        </div>
                        <h5>Bahia Palace</h5>
                        <p>Royal palace gardens providing an elegant setting for classical music</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 reveal" style="transition-delay: 0.3s;">
                    <div class="venue-card">
                        <div class="venue-icon">
                            <i class="fas fa-mountain"></i>
                        </div>
                        <h5>Atlas Heritage Center</h5>
                        <p>Showcasing Berber musical traditions in an authentic mountain setting</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Calendar & Sidebar Section -->
    <section class="section-padding">
        <div class="container">
            <div class="row g-4">
                <!-- Calendar -->
                <div class="col-lg-8 reveal">
                    <h3 class="mb-4" style="color: var(--indigo); font-family: var(--font-serif);">Upcoming Music Events Calendar</h3>
                    <div class="calendar-preview">
                        <div class="calendar-month">
                            <h5>December 2024 - February 2025</h5>
                            
                            <div class="calendar-event">
                                <div class="event-date-box bg-terracotta">
                                    <span class="day">15</span>
                                    <span class="month">APR</span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6>Traditional Moroccan Music Concert</h6>
                                    <small><i class="fas fa-clock me-1"></i> 8:00 PM - Cultural Center</small>
                                </div>
                                <span class="badge-price">50 MAD</span>
                            </div>

                            <div class="calendar-event">
                                <div class="event-date-box bg-indigo">
                                    <span class="day">05</span>
                                    <span class="month">JAN</span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6>Gnawa Music Festival</h6>
                                    <small><i class="fas fa-clock me-1"></i> 7:00 PM - Palmery Gardens</small>
                                </div>
                                <span class="badge-price">100 MAD</span>
                            </div>

                            <div class="calendar-event">
                                <div class="event-date-box bg-terracotta">
                                    <span class="day">25</span>
                                    <span class="month">JAN</span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6>Andalusian Musical Heritage</h6>
                                    <small><i class="fas fa-clock me-1"></i> 9:00 PM - Bahia Palace</small>
                                </div>
                                <span class="badge-price">90 MAD</span>
                            </div>

                            <div class="calendar-event">
                                <div class="event-date-box bg-indigo">
                                    <span class="day">01</span>
                                    <span class="month">FEB</span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6>Atlas Mountain Melodies</h6>
                                    <small><i class="fas fa-clock me-1"></i> 8:30 PM - Mountain Heritage</small>
                                </div>
                                <span class="badge-price">65 MAD</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="music-newsletter reveal">
                        <h5><i class="fas fa-envelope-open-text me-2"></i>Music Newsletter</h5>
                        <p>Get notified about new music events, artist spotlights, and exclusive concerts.</p>
                        <form class="newsletter-form">
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Your email address">
                            </div>
                            <button type="submit" class="btn-terracotta w-100">
                                <i class="fas fa-music me-2"></i>Subscribe
                            </button>
                        </form>
                    </div>

                    <div class="music-tips mt-4 reveal" style="transition-delay: 0.1s;">
                        <h6><i class="fas fa-lightbulb me-2" style="color: var(--terracotta);"></i>Tips for Music Events</h6>
                        <ul>
                            <li>Arrive 15 minutes early for traditional concerts</li>
                            <li>Maintain respectful silence during Gnawa ceremonies</li>
                            <li>Photography may be limited in sacred venues</li>
                            <li>Traditional dress is welcomed but not required</li>
                            <li>Bring cash for tickets and refreshments</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer - Exactly Matching Index -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 reveal">
                    <h5>
                        <i class="fas fa-mosque me-2" style="color: var(--ochre)"></i>
                        Marrakech Cultural Scene
                    </h5>
                    <p>Connecting culture enthusiasts with the vibrant artistic heartbeat of Marrakech. Discover, participate, and celebrate the rich cultural heritage of Morocco's red city.</p>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mb-4 reveal" style="transition-delay: 0.1s;">
                    <h5>Explore</h5>
                    <ul class="footer-links">
                        <li><a href="events.html">All Events</a></li>
                        <li><a href="category.html?cat=music">Music</a></li>
                        <li><a href="category.html?cat=exhibition">Art Exhibitions</a></li>
                        <li><a href="category.html?cat=theater">Theater</a></li>
                        <li><a href="category.html?cat=workshop">Workshops</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 mb-4 reveal" style="transition-delay: 0.2s;">
                    <h5>Community</h5>
                    <ul class="footer-links">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="submit-event.html">Submit Event</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Guidelines</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 mb-4 reveal" style="transition-delay: 0.3s;">
                    <h5>Stay Updated</h5>
                    <p>Subscribe to our newsletter for the latest cultural events and artistic happenings in Marrakech.</p>
                    <form class="newsletter-form">
                        <input type="email" class="form-control" placeholder="Enter your email">
                        <button type="submit" aria-label="Subscribe">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="mb-0">&copy; 2025 Marrakech Cultural Scene. All rights reserved.</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <a href="#" class="me-3">Privacy Policy</a>
                        <a href="#">Terms of Service</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection

@push('scripts')
<script>
        // Navbar scroll effect - Matching Index
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Scroll Reveal Animation
        const revealElements = document.querySelectorAll('.reveal');

        const revealOnScroll = () => {
            revealElements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;

                if (elementTop < windowHeight - 100) {
                    element.classList.add('active');
                }
            });
        };

        window.addEventListener('scroll', revealOnScroll);
        window.addEventListener('load', revealOnScroll);

        // Category-specific JavaScript for music filtering
        const musicTypeFilter = document.getElementById('musicTypeFilter');
        const eventCards = document.querySelectorAll('.event-card');
        
        if (musicTypeFilter) {
            musicTypeFilter.addEventListener('change', function() {
                const selectedType = this.value;
                
                eventCards.forEach(card => {
                    const cardType = card.getAttribute('data-type');
                    
                    if (!selectedType || cardType === selectedType) {
                        card.style.display = 'flex';
                        card.classList.add('fade-in');
                        setTimeout(() => card.classList.remove('fade-in'), 500);
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        }

        // Load More Button functionality
        document.getElementById('loadMoreMusicBtn').addEventListener('click', function() {
            this.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Loading...';
            setTimeout(() => {
                this.innerHTML = '<i class="fas fa-check me-2"></i>All Events Loaded';
                this.disabled = true;
                this.style.opacity = '0.6';
            }, 1500);
        });

        // Newsletter form handling
        document.querySelectorAll('.newsletter-form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const input = this.querySelector('input');
                if (input.value) {
                    const btn = this.querySelector('button');
                    const originalContent = btn.innerHTML;
                    btn.innerHTML = '<i class="fas fa-check"></i>';
                    btn.style.background = '#28a745';
                    input.value = '';

                    setTimeout(() => {
                        btn.innerHTML = originalContent;
                        btn.style.background = '';
                    }, 2000);
                }
            });
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
@endpush
