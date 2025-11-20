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
                    <li><a href="{{ route('events.index') }}">All Events</a></li>
                    <li><a href="{{ route('category.show', 'music') }}">Music</a></li>
                    <li><a href="{{ route('category.show', 'exhibition') }}">Art Exhibitions</a></li>
                    <li><a href="{{ route('category.show', 'theater') }}">Theater</a></li>
                    <li><a href="{{ route('category.show', 'workshop') }}">Workshops</a></li>
                </ul>
            </div>
            
            <div class="col-lg-2 col-md-6 mb-4">
                <h5>Community</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('events.submit') }}">Submit Event</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Guidelines</a></li>
                </ul>
            </div>
            
            <div class="col-lg-4 mb-4">
                <h5>Stay Updated</h5>
                <p>Subscribe to our newsletter for the latest cultural events and artistic happenings in Marrakech.</p>
                <form action="{{ route('newsletter.subscribe') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                        <button class="btn btn-terracotta" type="submit">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
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