<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Marrakech Cultural Scene - Discover Local Arts & Events')</title>
    <meta name="description" content="@yield('meta_description', 'Discover Marrakech\'s vibrant cultural scene. Find art exhibitions, music concerts, theater performances, and cultural workshops in the heart of Morocco.')">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @yield('styles')
</head>
<body style="padding-top: 76px;">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}" style="padding-top: 0; padding-bottom: 0;">
                <img src="{{ asset('images/logo.png') }}" alt="Marrakech Cultural Scene Logo" style="height: 60px; object-fit: contain;">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">
                            <i class="fas fa-home me-1"></i>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('events*') ? 'active' : '' }}" href="{{ url('/events') }}">
                            <i class="fas fa-calendar-alt me-1"></i>Events
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('/about') }}">
                            <i class="fas fa-info-circle me-1"></i>About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('events/submit') ? 'active' : '' }}" href="{{ url('/events/submit') }}">
                            <i class="fas fa-plus-circle me-1"></i>Submit Event
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-th-large me-1"></i>Categories
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/category/music') }}">Music</a></li>
                            <li><a class="dropdown-item" href="{{ url('/category/exhabition') }}">Art Exhibitions</a></li>
                            <li><a class="dropdown-item" href="{{ url('/category/theater') }}">Theater</a></li>
                            <li><a class="dropdown-item" href="{{ url('/category/workshop') }}">Workshops</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5>
                        <i class="fas fa-mosque text-ochre me-2"></i>
                        Marrakech Cultural Scene
                    </h5>
                    <p>Connecting culture enthusiasts with the vibrant artistic heartbeat of Marrakech. Discover, participate, and celebrate the rich cultural heritage of Morocco's red city.</p>
                    <div class="social-links">
                        <a href="#" aria-label="Facebook">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" aria-label="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Explore</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('/events') }}">All Events</a></li>
                        <li><a href="{{ url('/category/music') }}">Music</a></li>
                        <li><a href="{{ url('/category/exhibition') }}">Art Exhibitions</a></li>
                        <li><a href="{{ url('/category/theater') }}">Theater</a></li>
                        <li><a href="{{ url('/category/workshop') }}">Workshops</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Community</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ url('/about') }}">About Us</a></li>
                        <li><a href="{{ url('/events/submit') }}">Submit Event</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Guidelines</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-4 mb-4">
                    <h5>Stay Updated</h5>
                    <p>Subscribe to our newsletter for the latest cultural events and artistic happenings in Marrakech.</p>
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Enter your email">
                        <button class="btn btn-terracotta" type="button">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <hr class="my-4">
            
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; {{ date('Y') }} Marrakech Cultural Scene. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="me-3">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('scripts')
</body>
</html>
