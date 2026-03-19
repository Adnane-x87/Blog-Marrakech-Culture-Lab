@extends('layouts.app')

@section('content')
<!-- Navigation -->
    

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="page-header-content">
                <h1>Share Your Cultural Event</h1>
                <p>Join Marrakech's vibrant cultural community and showcase your artistic vision to thousands of culture enthusiasts</p>
            </div>
        </div>
    </section>

    <!-- Guidelines Section -->
    <section class="guidelines-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="guidelines-card reveal">
                        <h5><i class="fas fa-info-circle"></i>Submission Guidelines</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="guideline-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>All events must be cultural in nature</span>
                                </div>
                                <div class="guideline-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Events should be open to the public</span>
                                </div>
                                <div class="guideline-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Provide accurate venue and timing information</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="guideline-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Include high-quality event images</span>
                                </div>
                                <div class="guideline-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Review typically takes 24-48 hours</span>
                                </div>
                                <div class="guideline-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Free submission for cultural events</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Form Section -->
    <section class="form-section-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="submission-form-container reveal">
                        <div class="form-header">
                            <h2>Event Details</h2>
                            <p>Fill out the form below to submit your event for review</p>
                        </div>

                        <form id="eventSubmissionForm">
                            <!-- Basic Information -->
                            <div class="form-section">
                                <h4 class="section-title">
                                    <i class="fas fa-info-circle"></i>Basic Information
                                </h4>

                                <div class="row">
                                    <div class="col-md-8 mb-3">
                                        <label for="eventTitle" class="form-label">Event Title *</label>
                                        <input type="text" class="form-control" id="eventTitle" required placeholder="Enter your event title">
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="eventCategory" class="form-label">Category *</label>
                                        <select class="form-select" id="eventCategory" required>
                                            <option value="">Choose category</option>
                                            <option value="music">Music</option>
                                            <option value="exhibition">Art Exhibition</option>
                                            <option value="theater">Theater & Performance</option>
                                            <option value="workshop">Workshop</option>
                                            <option value="festival">Festival</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="eventDescription" class="form-label">Event Description *</label>
                                    <textarea class="form-control" id="eventDescription" rows="4" required placeholder="Provide a detailed description of your event, including what attendees can expect..."></textarea>
                                    <div class="form-text">Minimum 100 characters. Be specific about the cultural aspects and artistic value.</div>
                                </div>
                            </div>

                            <!-- Date & Time -->
                            <div class="form-section">
                                <h4 class="section-title">
                                    <i class="fas fa-calendar-alt"></i>Date & Time
                                </h4>

                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="eventDate" class="form-label">Event Date *</label>
                                        <input type="date" class="form-control" id="eventDate" required>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="startTime" class="form-label">Start Time *</label>
                                        <input type="time" class="form-control" id="startTime" required>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label for="endTime" class="form-label">End Time</label>
                                        <input type="time" class="form-control" id="endTime">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="multiDay">
                                            <label class="form-check-label" for="multiDay">
                                                Multi-day event
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3" id="endDateContainer" style="display: none;">
                                        <label for="endDate" class="form-label">End Date</label>
                                        <input type="date" class="form-control" id="endDate">
                                    </div>
                                </div>
                            </div>

                            <!-- Location & Venue -->
                            <div class="form-section">
                                <h4 class="section-title">
                                    <i class="fas fa-map-marker-alt"></i>Location & Venue
                                </h4>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="venueName" class="form-label">Venue Name *</label>
                                        <input type="text" class="form-control" id="venueName" required placeholder="Name of the venue">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="venueType" class="form-label">Venue Type</label>
                                        <select class="form-select" id="venueType">
                                            <option value="">Select venue type</option>
                                            <option value="gallery">Art Gallery</option>
                                            <option value="theater">Theater</option>
                                            <option value="cultural-center">Cultural Center</option>
                                            <option value="palace">Historic Palace</option>
                                            <option value="garden">Garden/Outdoor</option>
                                            <option value="workshop-space">Workshop Space</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="venueAddress" class="form-label">Address *</label>
                                    <input type="text" class="form-control" id="venueAddress" required placeholder="Full address including neighborhood (e.g., Medina, Gueliz, Hivernage)">
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="capacity" class="form-label">Venue Capacity</label>
                                        <input type="number" class="form-control" id="capacity" placeholder="Maximum number of attendees">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <div class="form-check mt-4">
                                            <input class="form-check-input" type="checkbox" id="wheelchairAccessible">
                                            <label class="form-check-label" for="wheelchairAccessible">
                                                Wheelchair accessible
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Ticketing & Pricing -->
                            <div class="form-section">
                                <h4 class="section-title">
                                    <i class="fas fa-ticket-alt"></i>Ticketing & Pricing
                                </h4>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="ticketType" class="form-label">Ticket Type *</label>
                                        <select class="form-select" id="ticketType" required>
                                            <option value="">Select ticket type</option>
                                            <option value="free">Free Entry</option>
                                            <option value="paid">Paid Entry</option>
                                            <option value="donation">Donation Based</option>
                                            <option value="invitation">Invitation Only</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3" id="priceContainer" style="display: none;">
                                        <label for="ticketPrice" class="form-label">Ticket Price (MAD)</label>
                                        <input type="number" class="form-control" id="ticketPrice" placeholder="Price in Moroccan Dirhams">
                                    </div>
                                </div>

                                <div class="mb-3" id="ticketInfoContainer">
                                    <label for="ticketInfo" class="form-label">Ticketing Information</label>
                                    <textarea class="form-control" id="ticketInfo" rows="2" placeholder="Where to buy tickets, booking information, contact details..."></textarea>
                                </div>
                            </div>

                            <!-- Event Media -->
                            <div class="form-section">
                                <h4 class="section-title">
                                    <i class="fas fa-images"></i>Event Media
                                </h4>

                                <div class="mb-3">
                                    <label class="form-label">Event Image *</label>
                                    <div class="file-upload-wrapper" id="mainImageUpload">
                                        <i class="fas fa-cloud-upload-alt"></i>
                                        <p>Click to upload or drag and drop</p>
                                        <small class="text-muted">Recommended size: 1200x800 pixels (JPG, PNG)</small>
                                        <input type="file" id="eventImage" accept="image/*" required>
                                    </div>
                                    <div class="image-preview-container" id="mainImagePreview" style="display: none;"></div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Additional Images</label>
                                    <div class="file-upload-wrapper" id="additionalUpload">
                                        <i class="fas fa-images"></i>
                                        <p>Add more images (optional)</p>
                                        <small class="text-muted">Gallery, venue, artists, etc.</small>
                                        <input type="file" id="additionalImages" accept="image/*" multiple>
                                    </div>
                                    <div class="image-preview-container" id="additionalPreview" style="display: none;"></div>
                                </div>
                            </div>

                            <!-- Organizer Information -->
                            <div class="form-section">
                                <h4 class="section-title">
                                    <i class="fas fa-user-tie"></i>Organizer Information
                                </h4>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="organizerName" class="form-label">Organizer Name *</label>
                                        <input type="text" class="form-control" id="organizerName" required placeholder="Individual name or organization">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="organizerEmail" class="form-label">Contact Email *</label>
                                        <input type="email" class="form-control" id="organizerEmail" required placeholder="contact@example.com">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="organizerPhone" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="organizerPhone" placeholder="+212 6XX XXX XXX">
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="organizerWebsite" class="form-label">Website/Social Media</label>
                                        <input type="url" class="form-control" id="organizerWebsite" placeholder="https://www.example.com">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="organizerBio" class="form-label">Organizer Bio</label>
                                    <textarea class="form-control" id="organizerBio" rows="3" placeholder="Brief description of the organizer, their background, and experience in cultural events..."></textarea>
                                </div>
                            </div>

                            <!-- Additional Information -->
                            <div class="form-section">
                                <h4 class="section-title">
                                    <i class="fas fa-plus-circle"></i>Additional Information
                                </h4>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="language" class="form-label">Event Language</label>
                                        <select class="form-select" id="language">
                                            <option value="">Select language</option>
                                            <option value="arabic">Arabic</option>
                                            <option value="french">French</option>
                                            <option value="english">English</option>
                                            <option value="berber">Berber (Amazigh)</option>
                                            <option value="multilingual">Multilingual</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label for="ageGroup" class="form-label">Target Age Group</label>
                                        <select class="form-select" id="ageGroup">
                                            <option value="">All ages</option>
                                            <option value="children">Children (0-12)</option>
                                            <option value="teens">Teenagers (13-17)</option>
                                            <option value="adults">Adults (18+)</option>
                                            <option value="seniors">Seniors (65+)</option>
                                            <option value="family">Family-friendly</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="specialRequirements" class="form-label">Special Requirements or Notes</label>
                                    <textarea class="form-control" id="specialRequirements" rows="3" placeholder="Any special requirements, dress code, materials needed, cultural considerations..."></textarea>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="photographyAllowed" checked>
                                    <label class="form-check-label" for="photographyAllowed">
                                        Photography allowed during event
                                    </label>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" id="culturalSensitive">
                                    <label class="form-check-label" for="culturalSensitive">
                                        This event involves culturally sensitive content
                                    </label>
                                </div>
                            </div>

                            <!-- Terms and Submission -->
                            <div class="terms-section">
                                <h5>Submission Terms</h5>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                                    <label class="form-check-label" for="agreeTerms">
                                        I agree to the <a href="#">Terms of Service</a> and confirm that this event information is accurate and that I have the authority to submit this event for publication.
                                    </label>
                                </div>

                                <div class="form-check mt-3">
                                    <input class="form-check-input" type="checkbox" id="agreeReview" required>
                                    <label class="form-check-label" for="agreeReview">
                                        I understand that my event will be reviewed by the Marrakech Cultural Scene team before publication and may be edited for clarity or cultural appropriateness.
                                    </label>
                                </div>
                            </div>

                            <div class="text-center mt-5">
                                <button type="submit" class="btn btn-submit" id="submitBtn">
                                    <i class="fas fa-paper-plane"></i>Submit Event for Review
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Support Section -->
    <section class="support-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 reveal">
                    <div class="support-card">
                        <div class="support-icon" style="background: linear-gradient(135deg, var(--terracotta) 0%, var(--ochre) 100%);">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h5>Need Help?</h5>
                        <p>Our team is here to assist you with event submission questions and technical support.</p>
                        <a href="#" class="btn-support" style="border-color: var(--terracotta); color: var(--terracotta);">
                            Contact Support
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 reveal" style="transition-delay: 0.1s;">
                    <div class="support-card">
                        <div class="support-icon" style="background: linear-gradient(135deg, var(--ochre) 0%, #E9C496 100%);">
                            <i class="fas fa-book"></i>
                        </div>
                        <h5>Submission Guide</h5>
                        <p>Read our comprehensive guide for successful event submissions and best practices.</p>
                        <a href="#" class="btn-support" style="border-color: var(--ochre); color: var(--ochre);">
                            View Guide
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 reveal" style="transition-delay: 0.2s;">
                    <div class="support-card">
                        <div class="support-icon" style="background: linear-gradient(135deg, var(--indigo) 0%, var(--indigo-light) 100%);">
                            <i class="fas fa-users"></i>
                        </div>
                        <h5>Community</h5>
                        <p>Join our organizer community for tips, networking, and collaboration opportunities.</p>
                        <a href="#" class="btn-support" style="border-color: var(--indigo); color: var(--indigo);">
                            Join Community
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="success-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <h3>Event Submitted!</h3>
                    <p class="text-muted">Thank you for submitting your event. Our team will review it within 24-48 hours and notify you once it's published.</p>
                    <button type="button" class="btn btn-submit mt-3" data-bs-dismiss="modal" onclick="window.location.href='events.html'">
                        <i class="fas fa-calendar-alt me-2"></i>View All Events
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
        // Navbar scroll effect
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

        // Multi-day event toggle
        const multiDayCheckbox = document.getElementById('multiDay');
        const endDateContainer = document.getElementById('endDateContainer');

        multiDayCheckbox.addEventListener('change', function() {
            endDateContainer.style.display = this.checked ? 'block' : 'none';
        });

        // Ticket type change handler
        const ticketTypeSelect = document.getElementById('ticketType');
        const priceContainer = document.getElementById('priceContainer');

        ticketTypeSelect.addEventListener('change', function() {
            priceContainer.style.display = this.value === 'paid' ? 'block' : 'none';
        });

        // Image upload preview
        function handleImageUpload(input, previewContainer) {
            const files = input.files;
            const preview = document.getElementById(previewContainer);

            if (files.length > 0) {
                preview.style.display = 'grid';
                preview.innerHTML = '';

                Array.from(files).forEach((file, index) => {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        const div = document.createElement('div');
                        div.className = 'preview-item';
                        div.innerHTML = `
                            <img src="${e.target.result}" alt="Preview">
                            <button type="button" class="remove-btn" onclick="removeImage(this, '${input.id}')">
                                <i class="fas fa-times"></i>
                            </button>
                        `;
                        preview.appendChild(div);
                    }

                    reader.readAsDataURL(file);
                });
            }
        }

        function removeImage(btn, inputId) {
            const item = btn.parentElement;
            item.remove();

            // Check if preview is empty
            const preview = item.parentElement;
            if (preview.children.length === 0) {
                preview.style.display = 'none';
                document.getElementById(inputId).value = '';
            }
        }

        // Main image upload
        document.getElementById('eventImage').addEventListener('change', function() {
            handleImageUpload(this, 'mainImagePreview');
        });

        // Additional images upload
        document.getElementById('additionalImages').addEventListener('change', function() {
            handleImageUpload(this, 'additionalPreview');
        });

        // Form submission
        document.getElementById('eventSubmissionForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const submitBtn = document.getElementById('submitBtn');
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i>Submitting...';

            // Simulate form submission
            setTimeout(() => {
                const modal = new bootstrap.Modal(document.getElementById('successModal'));
                modal.show();

                submitBtn.disabled = false;
                submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i>Submit Event for Review';

                // Reset form
                this.reset();
                document.getElementById('mainImagePreview').style.display = 'none';
                document.getElementById('additionalPreview').style.display = 'none';
                endDateContainer.style.display = 'none';
                priceContainer.style.display = 'none';
            }, 2000);
        });

        // Newsletter form handling
        document.querySelector('.newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const input = this.querySelector('input');
            if (input.value) {
                const btn = this.querySelector('button');
                const originalIcon = btn.innerHTML;
                btn.innerHTML = '<i class="fas fa-check"></i>';
                btn.style.background = '#28a745';
                input.value = '';

                setTimeout(() => {
                    btn.innerHTML = originalIcon;
                    btn.style.background = '';
                }, 2000);
            }
        });
    </script>
@endpush
