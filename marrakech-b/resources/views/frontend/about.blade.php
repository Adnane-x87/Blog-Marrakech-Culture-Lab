@extends('layouts.app')

@section('content')
  <section class="hero-section">
        <div class="hero-video-container">
            <video class="hero-video" autoplay muted loop playsinline poster="https://images.unsplash.com/photo-1512958789358-4dac0f6a9b0e?w=1920&q=80">
                <source src="https://assets.mixkit.co/videos/preview/mixkit-woman-walking-through-a-market-in-morocco-4297-large.mp4" type="video/mp4">
                <img src="https://images.unsplash.com/photo-1512958789358-4dac0f6a9b0e?w=1920&q=80" alt="Moroccan market">
            </video>
        </div>
        <div class="hero-overlay"></div>

        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Our Cultural Mission</h1>
                <p class="hero-text">Connecting hearts and minds through the timeless artistry of Marrakech. We bridge tradition and innovation to preserve Morocco's rich heritage.</p>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="section-padding story-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="story-content reveal">
                        <h2>Our Story</h2>
                        <p class="lead">Born from a passion for preserving and sharing Morocco's rich cultural heritage, Marrakech Cultural Scene emerged as a bridge between tradition and modernity.</p>

                        <p>Founded in 2020 by a group of cultural enthusiasts, artists, and local community leaders, our platform was created to address a growing need: connecting Marrakech's vibrant artistic community with both locals and visitors who seek authentic cultural experiences.</p>

                        <p>We believe that culture is not just entertainment – it's the living memory of a civilization. Through our platform, we celebrate the master craftsmen who carry ancient traditions, the innovative artists who reinterpret heritage through contemporary lenses, and the passionate performers who keep Morocco's artistic soul alive.</p>

                        <div class="story-stats row">
                            <div class="col-4 text-center stat-item">
                                <h3>500+</h3>
                                <small>Events Listed</small>
                            </div>
                            <div class="col-4 text-center stat-item">
                                <h3>50+</h3>
                                <small>Local Artists</small>
                            </div>
                            <div class="col-4 text-center stat-item">
                                <h3>10K+</h3>
                                <small>Culture Lovers</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 reveal" style="transition-delay: 0.2s;">
                    <div class="story-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1542401886-65d6c61db217?w=800&q=80" alt="Cultural artisans at work in Marrakech">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="section-padding bg-sand">
        <div class="container">
            <div class="section-title reveal">
                <h2>Our Mission & Vision</h2>
                <p>Guiding principles that drive our commitment to cultural preservation and accessibility</p>
            </div>

            <div class="row">
                <div class="col-lg-6 mb-4 reveal">
                    <div class="mission-card">
                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-circle bg-terracotta text-white me-3">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <h4>Our Mission</h4>
                        </div>
                        <p class="mb-4">To democratize access to Marrakech's cultural treasures by creating an inclusive platform where artists, organizers, and culture enthusiasts can discover, share, and celebrate the authentic artistic heritage of Morocco.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-terracotta me-2"></i>Preserve traditional arts and crafts</li>
                            <li><i class="fas fa-check text-terracotta me-2"></i>Support local artists and craftsmen</li>
                            <li><i class="fas fa-check text-terracotta me-2"></i>Bridge cultural gaps through shared experiences</li>
                            <li><i class="fas fa-check text-terracotta me-2"></i>Make culture accessible to all backgrounds</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 mb-4 reveal" style="transition-delay: 0.1s;">
                    <div class="vision-card">
                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-circle bg-indigo text-white me-3">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h4>Our Vision</h4>
                        </div>
                        <p class="mb-4">To become the leading cultural hub of North Africa, where Marrakech's artistic legacy thrives in harmony with contemporary innovation, inspiring a global community of cultural ambassadors.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-star text-indigo me-2"></i>Global recognition of Marrakech's culture</li>
                            <li><i class="fas fa-star text-indigo me-2"></i>Sustainable cultural tourism model</li>
                            <li><i class="fas fa-star text-indigo me-2"></i>Digital preservation of artistic traditions</li>
                            <li><i class="fas fa-star text-indigo me-2"></i>Cultural exchange and dialogue</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="section-padding">
        <div class="container">
            <div class="section-title reveal">
                <h2>Our Core Values</h2>
                <p>The principles that guide every decision and action we take</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6 reveal">
                    <div class="value-card">
                        <div class="value-icon bg-terracotta">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h5>Authenticity</h5>
                        <p>We celebrate genuine cultural expressions while respecting traditional practices and their spiritual significance.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 reveal" style="transition-delay: 0.1s;">
                    <div class="value-card">
                        <div class="value-icon bg-ochre">
                            <i class="fas fa-users"></i>
                        </div>
                        <h5>Community</h5>
                        <p>We foster connections between artists, audiences, and cultural stewards, building bridges across diverse communities.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 reveal" style="transition-delay: 0.2s;">
                    <div class="value-card">
                        <div class="value-icon bg-indigo">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h5>Preservation</h5>
                        <p>We are committed to safeguarding Morocco's cultural heritage for future generations through digital documentation.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 reveal" style="transition-delay: 0.3s;">
                    <div class="value-card">
                        <div class="value-icon bg-terracotta">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <h5>Respect</h5>
                        <p>We honor the wisdom of master artisans while embracing contemporary interpretations and cross-cultural dialogue.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="section-padding bg-sand">
        <div class="container">
            <div class="section-title reveal">
                <h2>Meet Our Team</h2>
                <p>Passionate individuals dedicated to preserving and promoting Marrakech's cultural heritage</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6 reveal">
                    <div class="team-card">
                        <div class="team-avatar bg-terracotta">
                            <i class="fas fa-user"></i>
                        </div>
                        <h5>Amina Benali</h5>
                        <p class="text-muted">Founder & Cultural Director</p>
                        <p class="small">Art historian specializing in Moroccan cultural heritage with 15 years of experience in cultural preservation.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 reveal" style="transition-delay: 0.1s;">
                    <div class="team-card">
                        <div class="team-avatar bg-ochre">
                            <i class="fas fa-user"></i>
                        </div>
                        <h5>Youssef Chahine</h5>
                        <p class="text-muted">Community Outreach Manager</p>
                        <p class="small">Former musician and cultural educator passionate about connecting traditional artists with modern audiences.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 reveal" style="transition-delay: 0.2s;">
                    <div class="team-card">
                        <div class="team-avatar bg-indigo">
                            <i class="fas fa-user"></i>
                        </div>
                        <h5>Fatima El Marrakchi</h5>
                        <p class="text-muted">Events Coordinator</p>
                        <p class="small">Master craftsperson in traditional textiles, bridges the gap between artisan communities and cultural events.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 reveal" style="transition-delay: 0.3s;">
                    <div class="team-card">
                        <div class="team-avatar bg-terracotta">
                            <i class="fas fa-user"></i>
                        </div>
                        <h5>Hassan Alaoui</h5>
                        <p class="text-muted">Technology Director</p>
                        <p class="small">Digital innovation specialist focused on making cultural content accessible through modern technology platforms.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="section-padding impact-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0 reveal">
                    <div class="impact-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1539020140153-e479b8c22e70?w=800&q=80" alt="Cultural impact in Marrakech">
                    </div>
                </div>

                <div class="col-lg-6 reveal" style="transition-delay: 0.2s;">
                    <div class="impact-metrics">
                        <h2>Our Cultural Impact</h2>
                        <p class="lead">Measuring success through the growth and vitality of Marrakech's cultural ecosystem.</p>

                        <div class="metric-item">
                            <div class="d-flex align-items-center">
                                <div class="metric-icon bg-terracotta me-3">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div>
                                    <h5>15,000+</h5>
                                    <small>Monthly active users discovering cultural events</small>
                                </div>
                            </div>
                        </div>

                        <div class="metric-item">
                            <div class="d-flex align-items-center">
                                <div class="metric-icon bg-ochre me-3">
                                    <i class="fas fa-calendar"></i>
                                </div>
                                <div>
                                    <h5>120+</h5>
                                    <small>Cultural events hosted annually through our platform</small>
                                </div>
                            </div>
                        </div>

                        <div class="metric-item">
                            <div class="d-flex align-items-center">
                                <div class="metric-icon bg-indigo me-3">
                                    <i class="fas fa-handshake"></i>
                                </div>
                                <div>
                                    <h5>85%</h5>
                                    <small>Event attendance rate, supporting local artists economically</small>
                                </div>
                            </div>
                        </div>

                        <div class="metric-item">
                            <div class="d-flex align-items-center">
                                <div class="metric-icon bg-terracotta me-3">
                                    <i class="fas fa-globe"></i>
                                </div>
                                <div>
                                    <h5>45+</h5>
                                    <small>Countries represented by our international visitors</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Join Us Section -->
    <section class="section-padding cta-section">
        <div class="container">
            <div class="cta-content text-center reveal">
                <h2>Join Our Cultural Community</h2>
                <p class="lead">Whether you're an artist, organizer, or culture enthusiast, there's a place for you in our mission.</p>

                <div class="row justify-content-center g-3 mt-4">
                    <div class="col-md-4">
                        <a href="#" class="btn btn-cta-primary w-100">
                            <i class="fas fa-plus-circle"></i>
                            Submit Your Event
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-cta-outline w-100" onclick="alert('Newsletter signup coming soon!'); return false;">
                            <i class="fas fa-envelope"></i>
                            Newsletter Signup
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#" class="btn btn-cta-secondary w-100" onclick="alert('Volunteer form coming soon!'); return false;">
                            <i class="fas fa-hands-helping"></i>
                            Volunteer With Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

   @endsection