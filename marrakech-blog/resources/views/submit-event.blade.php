@extends('layouts.app')

@section('title', 'Submit Your Cultural Event - Marrakech Cultural Scene')

@section('content')
    <!-- Page Header -->
    <section class="py-5 mt-5" style="background: linear-gradient(135deg, var(--deep-indigo), var(--terracotta-orange)); color: white;">
        <div class="container">
            <div class="text-center">
                <h1 class="display-4 mb-3">Share Your Cultural Event</h1>
                <p class="lead">Join Marrakech's vibrant cultural community and showcase your artistic vision</p>
            </div>
        </div>
    </section>

    <!-- Submission Guidelines -->
    <section class="py-4 bg-cream">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="guidelines-alert bg-white rounded shadow-sm p-4">
                        <h5 class="mb-3">
                            <i class="fas fa-info-circle text-terracotta me-2"></i>
                            Submission Guidelines
                        </h5>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-unstyled small">
                                    <li><i class="fas fa-check text-success me-2"></i>All events must be cultural in nature</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Events should be open to the public</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Provide accurate venue and timing information</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled small">
                                    <li><i class="fas fa-check text-success me-2"></i>Include high-quality event images</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Review typically takes 24-48 hours</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Free submission for cultural events</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Event Submission Form -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="submission-form bg-white rounded shadow-lg p-5">
                        <h2 class="mb-4">Event Details</h2>
                        
                        <form id="eventSubmissionForm" action="{{ url('/events') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Basic Information -->
                            <div class="form-section mb-5">
                                <h4 class="section-title text-terracotta mb-3">
                                    <i class="fas fa-info-circle me-2"></i>Basic Information
                                </h4>
                                
                                <div class="row">
                                    <div class="col-md-8 mb-3">
                                        <label for="eventTitle" class="form-label">Event Title *</label>
                                        <input type="text" class="form-control" id="eventTitle" name="eventTitle" required placeholder="Enter your event title">
                                    </div>
                                    
                                    <div class="col-md-4 mb-3">
                                        <label for="eventCategory" class="form-label">Category *</label>
                                        <select class="form-select" id="eventCategory" name="eventCategory" required>
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
                                    <textarea class="form-control" id="eventDescription" name="eventDescription" rows="4" required placeholder="Provide a detailed description of your event, including what attendees can expect..."></textarea>
                                </div>
                            </div>

                            <!-- Date & Time -->
                            <div class="form-section mb-5">
                                <h4 class="section-title text-terracotta mb-3">
                                    <i class="fas fa-calendar-alt me-2"></i>Date & Time
                                </h4>
                                
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="eventDate" class="form-label">Event Date *</label>
                                        <input type="date" class="form-control" id="eventDate" name="eventDate" required>
                                    </div>
                                    
                                    <div class="col-md-4 mb-3">
                                        <label for="startTime" class="form-label">Start Time *</label>
                                        <input type="time" class="form-control" id="startTime" name="startTime" required>
                                    </div>
                                    
                                    <div class="col-md-4 mb-3">
                                        <label for="endTime" class="form-label">End Time</label>
                                        <input type="time" class="form-control" id="endTime" name="endTime">
                                    </div>
                                </div>
                            </div>

                            <!-- Location & Venue -->
                            <div class="form-section mb-5">
                                <h4 class="section-title text-terracotta mb-3">
                                    <i class="fas fa-map-marker-alt me-2"></i>Location & Venue
                                </h4>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="venueName" class="form-label">Venue Name *</label>
                                        <input type="text" class="form-control" id="venueName" name="venueName" required placeholder="Name of the venue">
                                    </div>
                                    
                                    <div class="col-md-6 mb-3">
                                        <label for="venueType" class="form-label">Venue Type</label>
                                        <select class="form-select" id="venueType" name="venueType">
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
                                    <input type="text" class="form-control" id="venueAddress" name="venueAddress" required placeholder="Full address including neighborhood">
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-paper-plane me-2"></i>Submit Event for Review
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
