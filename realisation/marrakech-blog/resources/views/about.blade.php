
@extends('layouts.app')

@section('title', 'About Us - Marrakech Cultural Scene')
@section('description', 'Learn about our mission to connect culture enthusiasts with Marrakech\'s vibrant artistic community.')

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

<!-- More sections would continue here... -->
@endsection