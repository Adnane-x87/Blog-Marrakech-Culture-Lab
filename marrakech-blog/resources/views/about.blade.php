@extends('layouts.app')

@section('title', 'About Us - Marrakech Cultural Scene')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section" style="background-image: url('{{ asset('images/marrakech_hero_6.jpg') }}'); height: 40vh;">
        <div class="container">
            <div class="hero-content">
                <h1 class="fade-in">About Our Cultural Mission</h1>
                <p class="fade-in">Connecting hearts and minds through the timeless artistry of Marrakech</p>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2>Our Story</h2>
                    <p class="lead">Born from a passion for preserving and sharing Morocco's rich cultural heritage, Marrakech Cultural Scene emerged as a bridge between tradition and modernity.</p>
                    
                    <p>Founded in 2020 by a group of cultural enthusiasts, artists, and local community leaders, our platform was created to address a growing need: connecting Marrakech's vibrant artistic community with both locals and visitors who seek authentic cultural experiences.</p>
                    
                    <p>We believe that culture is not just entertainment – it's the living memory of a civilization. Through our platform, we celebrate the master craftsmen who carry ancient traditions, the innovative artists who reinterpret heritage through contemporary lenses, and the passionate performers who keep Morocco's artistic soul alive.</p>
                    
                    <div class="story-stats row mt-4">
                        <div class="col-4 text-center">
                            <h3 class="text-terracotta">500+</h3>
                            <small>Events Listed</small>
                        </div>
                        <div class="col-4 text-center">
                            <h3 class="text-terracotta">50+</h3>
                            <small>Local Artists</small>
                        </div>
                        <div class="col-4 text-center">
                            <h3 class="text-terracotta">10K+</h3>
                            <small>Culture Lovers</small>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <img src="{{ asset('images/cultural_workshop_7.jpg') }}" alt="Cultural artisans at work" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="py-5 bg-cream">
        <div class="container">
            <div class="section-title">
                <h2>Our Mission & Vision</h2>
                <p>Guiding principles that drive our commitment to cultural preservation and accessibility</p>
            </div>
            
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="mission-card bg-white rounded shadow-lg p-4 h-100">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-circle bg-terracotta text-white me-3">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <h4>Our Mission</h4>
                        </div>
                        <p>To democratize access to Marrakech's cultural treasures by creating an inclusive platform where artists, organizers, and culture enthusiasts can discover, share, and celebrate the authentic artistic heritage of Morocco.</p>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check text-terracotta me-2"></i>Preserve traditional arts and crafts</li>
                            <li><i class="fas fa-check text-terracotta me-2"></i>Support local artists and craftsmen</li>
                            <li><i class="fas fa-check text-terracotta me-2"></i>Bridge cultural gaps through shared experiences</li>
                            <li><i class="fas fa-check text-terracotta me-2"></i>Make culture accessible to all backgrounds</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-lg-6 mb-4">
                    <div class="vision-card bg-white rounded shadow-lg p-4 h-100">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-circle bg-indigo text-white me-3">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h4>Our Vision</h4>
                        </div>
                        <p>To become the leading cultural hub of North Africa, where Marrakech's artistic legacy thrives in harmony with contemporary innovation, inspiring a global community of cultural ambassadors.</p>
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
    <section class="py-5">
        <div class="container">
            <div class="section-title">
                <h2>Our Core Values</h2>
                <p>The principles that guide every decision and action we take</p>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="value-card text-center">
                        <div class="value-icon bg-terracotta text-white rounded-circle mx-auto mb-3">
                            <i class="fas fa-heart fa-2x"></i>
                        </div>
                        <h5>Authenticity</h5>
                        <p>We celebrate genuine cultural expressions while respecting traditional practices and their spiritual significance.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="value-card text-center">
                        <div class="value-icon bg-ochre text-white rounded-circle mx-auto mb-3">
                            <i class="fas fa-users fa-2x"></i>
                        </div>
                        <h5>Community</h5>
                        <p>We foster connections between artists, audiences, and cultural stewards, building bridges across diverse communities.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="value-card text-center">
                        <div class="value-icon bg-indigo text-white rounded-circle mx-auto mb-3">
                            <i class="fas fa-shield-alt fa-2x"></i>
                        </div>
                        <h5>Preservation</h5>
                        <p>We are committed to safeguarding Morocco's cultural heritage for future generations through digital documentation and education.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="value-card text-center">
                        <div class="value-icon bg-terracotta text-white rounded-circle mx-auto mb-3">
                            <i class="fas fa-balance-scale fa-2x"></i>
                        </div>
                        <h5>Respect</h5>
                        <p>We honor the wisdom of master artisans while embracing contemporary interpretations and cross-cultural dialogue.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-5 bg-cream">
        <div class="container">
            <div class="section-title">
                <h2>Meet Our Team</h2>
                <p>Passionate individuals dedicated to preserving and promoting Marrakech's cultural heritage</p>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="team-card bg-white rounded shadow text-center p-4">
                        <div class="team-avatar bg-terracotta text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-user fa-2x"></i>
                        </div>
                        <h5>Amina Benali</h5>
                        <p class="text-muted">Founder & Cultural Director</p>
                        <p class="small">Art historian specializing in Moroccan cultural heritage with 15 years of experience in cultural preservation.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="team-card bg-white rounded shadow text-center p-4">
                        <div class="team-avatar bg-ochre text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-user fa-2x"></i>
                        </div>
                        <h5>Youssef Chahine</h5>
                        <p class="text-muted">Community Outreach Manager</p>
                        <p class="small">Former musician and cultural educator passionate about connecting traditional artists with modern audiences.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="team-card bg-white rounded shadow text-center p-4">
                        <div class="team-avatar bg-indigo text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-user fa-2x"></i>
                        </div>
                        <h5>Fatima El Marrakchi</h5>
                        <p class="text-muted">Events Coordinator</p>
                        <p class="small">Master craftsperson in traditional textiles, bridges the gap between artisan communities and cultural events.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="team-card bg-white rounded shadow text-center p-4">
                        <div class="team-avatar bg-terracotta text-white rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fas fa-user fa-2x"></i>
                        </div>
                        <h5>Hassan Alaoui</h5>
                        <p class="text-muted">Technology Director</p>
                        <p class="small">Digital innovation specialist focused on making cultural content accessible through modern technology platforms.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Join Us Section -->
    <section class="py-5 bg-indigo text-white">
        <div class="container">
            <div class="text-center">
                <h2>Join Our Cultural Community</h2>
                <p class="lead mb-4">Whether you're an artist, organizer, or culture enthusiast, there's a place for you in our mission.</p>
                
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <a href="{{ url('/events/submit') }}" class="btn btn-terracotta btn-lg">
                            <i class="fas fa-plus-circle me-2"></i>Submit Your Event
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="#" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-envelope me-2"></i>Newsletter Signup
                        </a>
                    </div>
                    <div class="col-md-4 mb-3">
                        <a href="#" class="btn btn-ochre btn-lg">
                            <i class="fas fa-hands-helping me-2"></i>Volunteer With Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <style>
        .icon-circle {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }
        
        .value-icon {
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
@endsection
