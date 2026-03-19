@extends('layouts.admin')

@section('content')
<!-- Admin Navigation -->
    

    

    <!-- Admin Header -->
    <div class="admin-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1>Event Approval Queue</h1>
                    <p>Review and approve pending cultural event submissions</p>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <div class="approval-stats">
                        <span><i class="fas fa-check-circle"></i>3 approved today</span>
                        <span style="color: rgba(255,255,255,0.3);">|</span>
                        <span><i class="fas fa-times-circle"></i>1 rejected</span>
                        <span style="color: rgba(255,255,255,0.3);">|</span>
                        <span><i class="fas fa-clock"></i>5 pending</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Approval Content -->
    <div class="container-fluid py-4">
        <!-- Review Guidelines -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="guidelines-alert reveal">
                    <h6><i class="fas fa-info-circle me-2" style="color: #17a2b8;"></i>Review Guidelines</h6>
                    <div class="row">
                        <div class="col-md-4">
                            <ul>
                                <li>Verify cultural relevance and authenticity</li>
                                <li>Check venue and date information accuracy</li>
                                <li>Ensure appropriate content and descriptions</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul>
                                <li>Validate organizer credentials and contact info</li>
                                <li>Review image quality and appropriateness</li>
                                <li>Check for duplicate or similar events</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul>
                                <li>Confirm compliance with community guidelines</li>
                                <li>Assess educational and cultural value</li>
                                <li>Verify pricing and accessibility information</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Events for Review -->
        <div class="row">
            <div class="col-12">
                <div class="section-header reveal">
                    <i class="fas fa-clipboard-check"></i>
                    <h4>Pending Review (5)</h4>
                </div>
            </div>

            <!-- Event 1 - Berber Carpet Weaving Workshop -->
            <div class="col-12 mb-4">
                <div class="approval-card high-priority reveal">
                    <div class="row">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <img src="https://images.unsplash.com/photo-1565193566173-7a0ee3dbe261?w=600&q=80" alt="Berber Carpet Weaving Workshop" class="event-image">
                            <div class="mt-2 text-center">
                                <small style="color: #666;"><i class="far fa-clock me-1"></i>Submitted: 2 hours ago</small>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="d-flex justify-content-between align-items-start mb-3 flex-wrap gap-2">
                                <div>
                                    <h4 style="color: var(--indigo); margin-bottom: 0.5rem;">Berber Carpet Weaving Workshop</h4>
                                    <div class="d-flex gap-2 flex-wrap">
                                        <span class="badge-moroccan badge-workshop">Workshop</span>
                                        <span class="badge-moroccan badge-pending">Pending Review</span>
                                    </div>
                                </div>
                                <div class="priority-badge priority-high">
                                    <i class="fas fa-arrow-up"></i>High Priority
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="event-meta-item">
                                        <i class="far fa-calendar"></i>
                                        <span>January 15, 2025 - 10:00 AM</span>
                                    </div>
                                    <div class="event-meta-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Traditional Crafts Center, Medina</span>
                                    </div>
                                    <div class="event-meta-item">
                                        <i class="fas fa-building"></i>
                                        <span>Artisan Guild Marrakech</span>
                                    </div>
                                    <div class="event-meta-item">
                                        <i class="fas fa-envelope"></i>
                                        <span>guild@artisans-marrakech.ma</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="event-meta-item">
                                        <i class="fas fa-tag"></i>
                                        <span>Traditional Crafts Workshop</span>
                                    </div>
                                    <div class="event-meta-item">
                                        <i class="fas fa-users"></i>
                                        <span>12 participants max</span>
                                    </div>
                                    <div class="event-meta-item">
                                        <i class="fas fa-money-bill"></i>
                                        <span>150 MAD per person</span>
                                    </div>
                                    <div class="event-meta-item">
                                        <i class="fas fa-language"></i>
                                        <span>Arabic, French, English</span>
                                    </div>
                                </div>
                            </div>

                            <div style="background: rgba(255,255,255,0.6); border-radius: 12px; padding: 1rem; margin-bottom: 1rem;">
                                <h6 style="color: var(--indigo); font-family: var(--font-serif); margin-bottom: 0.5rem;">Description:</h6>
                                <p style="color: #555; font-size: 0.95rem; margin: 0;">Discover the intricate art of traditional Berber carpet weaving with authentic techniques passed down through generations of mountain artisans. This hands-on workshop will teach participants the fundamentals of geometric pattern creation, wool preparation, and traditional dyeing methods using natural materials.</p>
                            </div>

                            <div class="review-checklist">
                                <h6>Review Checklist:</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="cultural-relevance-1" checked>
                                            <label class="form-check-label" for="cultural-relevance-1">Cultural relevance verified</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="venue-info-1" checked>
                                            <label class="form-check-label" for="venue-info-1">Venue information accurate</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="organizer-verified-1" checked>
                                            <label class="form-check-label" for="organizer-verified-1">Organizer credentials verified</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="content-appropriate-1" checked>
                                            <label class="form-check-label" for="content-appropriate-1">Content appropriate</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="image-quality-1" checked>
                                            <label class="form-check-label" for="image-quality-1">Image quality acceptable</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="guidelines-compliant-1">
                                            <label class="form-check-label" for="guidelines-compliant-1">Guidelines compliant</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex gap-2 flex-wrap mt-3 pt-3" style="border-top: 1px solid rgba(212,163,115,0.2);">
                                <button class="btn btn-success-moroccan btn-admin" onclick="approveEvent('workshop-001')">
                                    <i class="fas fa-check"></i>Approve Event
                                </button>
                                <button class="btn btn-warning-moroccan btn-admin" data-bs-toggle="modal" data-bs-target="#requestChangesModal" data-event-id="workshop-001" data-event-title="Berber Carpet Weaving Workshop">
                                    <i class="fas fa-edit"></i>Request Changes
                                </button>
                                <button class="btn btn-danger-moroccan btn-admin" onclick="rejectEvent('workshop-001', 'Berber Carpet Weaving Workshop')">
                                    <i class="fas fa-times"></i>Reject Event
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event 2 - Jazz Fusion Concert -->
            <div class="col-12 mb-4">
                <div class="approval-card standard-priority reveal" style="transition-delay: 0.1s;">
                    <div class="row">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?w=600&q=80" alt="Jazz Fusion Concert" class="event-image">
                            <div class="mt-2 text-center">
                                <small style="color: #666;"><i class="far fa-clock me-1"></i>Submitted: 4 hours ago</small>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="d-flex justify-content-between align-items-start mb-3 flex-wrap gap-2">
                                <div>
                                    <h4 style="color: var(--indigo); margin-bottom: 0.5rem;">Morocco Meets Jazz Fusion Concert</h4>
                                    <div class="d-flex gap-2 flex-wrap">
                                        <span class="badge-moroccan badge-music">Music</span>
                                        <span class="badge-moroccan badge-pending">Pending Review</span>
                                    </div>
                                </div>
                                <div class="priority-badge priority-standard">
                                    <i class="fas fa-minus"></i>Standard Priority
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="event-meta-item">
                                        <i class="far fa-calendar"></i>
                                        <span>February 10, 2025 - 7:30 PM</span>
                                    </div>
                                    <div class="event-meta-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Modern Arts Center, Gueliz</span>
                                    </div>
                                    <div class="event-meta-item">
                                        <i class="fas fa-building"></i>
                                        <span>Jazz Collective Marrakech</span>
                                    </div>
                                    <div class="event-meta-item">
                                        <i class="fas fa-envelope"></i>
                                        <span>contact@jazzmarrakech.com</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="event-meta-item">
                                        <i class="fas fa-tag"></i>
                                        <span>Contemporary Fusion Music</span>
                                    </div>
                                    <div class="event-meta-item">
                                        <i class="fas fa-users"></i>
                                        <span>200 seats</span>
                                    </div>
                                    <div class="event-meta-item">
                                        <i class="fas fa-money-bill"></i>
                                        <span>120 MAD per person</span>
                                    </div>
                                    <div class="event-meta-item">
                                        <i class="fas fa-language"></i>
                                        <span>Multilingual performance</span>
                                    </div>
                                </div>
                            </div>

                            <div style="background: rgba(255,255,255,0.6); border-radius: 12px; padding: 1rem; margin-bottom: 1rem;">
                                <h6 style="color: var(--indigo); font-family: var(--font-serif); margin-bottom: 0.5rem;">Description:</h6>
                                <p style="color: #555; font-size: 0.95rem; margin: 0;">An innovative fusion performance blending traditional Moroccan instruments with contemporary jazz, creating a unique musical dialogue between cultures. Features renowned oud player Mahmoud El Fassi and international jazz saxophonist Maria Rodriguez.</p>
                            </div>

                            <div class="alert-note">
                                <small><i class="fas fa-exclamation-triangle me-2"></i><strong>Pending:</strong> Need to verify international artist credentials and work permits.</small>
                            </div>

                            <div class="d-flex gap-2 flex-wrap mt-3 pt-3" style="border-top: 1px solid rgba(212,163,115,0.2);">
                                <button class="btn btn-success-moroccan btn-admin" disabled style="opacity: 0.6;">
                                    <i class="fas fa-check"></i>Approve Event
                                </button>
                                <button class="btn btn-warning-moroccan btn-admin" data-bs-toggle="modal" data-bs-target="#requestChangesModal" data-event-id="music-002" data-event-title="Morocco Meets Jazz Fusion Concert">
                                    <i class="fas fa-edit"></i>Request Changes
                                </button>
                                <button class="btn btn-danger-moroccan btn-admin" onclick="rejectEvent('music-002', 'Morocco Meets Jazz Fusion Concert')">
                                    <i class="fas fa-times"></i>Reject Event
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event 3 - Calligraphy Exhibition -->
            <div class="col-12 mb-4">
                <div class="approval-card high-priority reveal" style="transition-delay: 0.2s;">
                    <div class="row">
                        <div class="col-md-4 mb-3 mb-md-0">
                            <img src="https://images.unsplash.com/photo-1579783902614-a3fb3927b6a5?w=600&q=80" alt="Arabic Calligraphy Exhibition" class="event-image">
                            <div class="mt-2 text-center">
                                <small style="color: #666;"><i class="far fa-clock me-1"></i>Submitted: 1 day ago</small>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="d-flex justify-content-between align-items-start mb-3 flex-wrap gap-2">
                                <div>
                                    <h4 style="color: var(--indigo); margin-bottom: 0.5rem;">The Art of Arabic Calligraphy</h4>
                                    <div class="d-flex gap-2 flex-wrap">
                                        <span class="badge-moroccan badge-exhibition">Exhibition</span>
                                        <span class="badge-moroccan badge-pending">Pending Review</span>
                                    </div>
                                </div>
                                <div class="priority-badge priority-high">
                                    <i class="fas fa-arrow-up"></i>High Priority
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="event-meta-item">
                                        <i class="far fa-calendar"></i>
                                        <span>February 1, 2025 - 5:00 PM</span>
                                    </div>
                                    <div class="event-meta-item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Heritage Gallery, Medina</span>
                                    </div>
                                    <div class="event-meta-item">
                                        <i class="fas fa-building"></i>
                                        <span>Calligraphy Masters Society</span>
                                    </div>
                                    <div class="event-meta-item">
                                        <i class="fas fa-envelope"></i>
                                        <span>masters@calligraphy-morocco.org</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="event-meta-item">
                                        <i class="fas fa-tag"></i>
                                        <span>Traditional Art Exhibition</span>
                                    </div>
                                    <div class="event-meta-item">
                                        <i class="fas fa-clock"></i>
                                        <span>3 weeks duration</span>
                                    </div>
                                    <div class="event-meta-item">
                                        <i class="fas fa-money-bill"></i>
                                        <span>Free Entry</span>
                                    </div>
                                    <div class="event-meta-item">
                                        <i class="fas fa-language"></i>
                                        <span>Arabic, French</span>
                                    </div>
                                </div>
                            </div>

                            <div style="background: rgba(255,255,255,0.6); border-radius: 12px; padding: 1rem; margin-bottom: 1rem;">
                                <h6 style="color: var(--indigo); font-family: var(--font-serif); margin-bottom: 0.5rem;">Description:</h6>
                                <p style="color: #555; font-size: 0.95rem; margin: 0;">Explore the magnificent world of Arabic calligraphy through works by master calligraphers from Morocco and the Islamic world. The exhibition features traditional Quranic verses, poetry, and contemporary interpretations of this sacred art form.</p>
                            </div>

                            <div class="d-flex gap-2 flex-wrap mt-3 pt-3" style="border-top: 1px solid rgba(212,163,115,0.2);">
                                <button class="btn btn-success-moroccan btn-admin" onclick="approveEvent('exhibition-003')">
                                    <i class="fas fa-check"></i>Approve Event
                                </button>
                                <button class="btn btn-warning-moroccan btn-admin" data-bs-toggle="modal" data-bs-target="#requestChangesModal" data-event-id="exhibition-003" data-event-title="The Art of Arabic Calligraphy">
                                    <i class="fas fa-edit"></i>Request Changes
                                </button>
                                <button class="btn btn-danger-moroccan btn-admin" onclick="rejectEvent('exhibition-003', 'The Art of Arabic Calligraphy')">
                                    <i class="fas fa-times"></i>Reject Event
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Approval Summary -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="glass-card reveal">
                    <div class="section-header mb-4">
                        <i class="fas fa-chart-pie"></i>
                        <h4>Approval Summary</h4>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <div class="summary-stat pending">
                                <h3>5</h3>
                                <p style="color: #666; margin: 0;">Pending Review</p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="summary-stat approved">
                                <h3>18</h3>
                                <p style="color: #666; margin: 0;">Approved This Week</p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="summary-stat rejected">
                                <h3>2</h3>
                                <p style="color: #666; margin: 0;">Rejected This Week</p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="summary-stat changes">
                                <h3>3</h3>
                                <p style="color: #666; margin: 0;">Changes Requested</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Request Changes Modal -->
    <div class="modal fade" id="requestChangesModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fas fa-edit me-2"></i>Request Changes
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="requestChangesForm">
                        <input type="hidden" id="changeEventId" name="event_id">

                        <div class="mb-3">
                            <label class="form-label" style="font-weight: 500; color: var(--indigo);">Event</label>
                            <input type="text" class="form-control" id="changeEventTitle" readonly style="background: rgba(212,163,115,0.1);">
                        </div>

                        <div class="mb-3">
                            <label for="changeCategory" class="form-label" style="font-weight: 500; color: var(--indigo);">Change Category</label>
                            <select class="form-select" id="changeCategory" name="change_category">
                                <option value="">Select category...</option>
                                <option value="content">Content & Description</option>
                                <option value="venue">Venue Information</option>
                                <option value="date">Date & Time</option>
                                <option value="images">Images & Media</option>
                                <option value="organizer">Organizer Information</option>
                                <option value="pricing">Pricing & Ticketing</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="changeDetails" class="form-label" style="font-weight: 500; color: var(--indigo);">Requested Changes</label>
                            <textarea class="form-control" id="changeDetails" name="change_details" rows="4" placeholder="Please describe the specific changes needed for approval..."></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="changePriority" class="form-label" style="font-weight: 500; color: var(--indigo);">Priority</label>
                                <select class="form-select" id="changePriority" name="priority">
                                    <option value="low">Low - Minor adjustments needed</option>
                                    <option value="medium" selected>Medium - Moderate changes required</option>
                                    <option value="high">High - Significant issues to address</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label" style="font-weight: 500; color: var(--indigo);">Notification</label>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="notifyOrganizer" name="notify_organizer" checked>
                                    <label class="form-check-label" for="notifyOrganizer">
                                        Send email notification to organizer
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary btn-admin" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-warning-moroccan btn-admin" onclick="submitChangeRequest()">
                        <i class="fas fa-paper-plane me-2"></i>Send Change Request
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
        // Set up event data for change request modal
        const requestChangesModal = document.getElementById('requestChangesModal');
        requestChangesModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const eventId = button.getAttribute('data-event-id');
            const eventTitle = button.getAttribute('data-event-title');

            document.getElementById('changeEventId').value = eventId;
            document.getElementById('changeEventTitle').value = eventTitle;
        });

        function approveEvent(eventId) {
            if (confirm('Approve this event? It will be published and visible to the public.')) {
                console.log('Approving event:', eventId);
                alert('Event approved successfully!');
            }
        }

        function rejectEvent(eventId, eventTitle) {
            if (confirm('Reject "' + eventTitle + '"? This will notify the organizer and remove the event from the queue.')) {
                console.log('Rejecting event:', eventId);
                alert('Event rejected and organizer notified.');
            }
        }

        function submitChangeRequest() {
            const form = document.getElementById('requestChangesForm');
            const category = document.getElementById('changeCategory').value;
            const details = document.getElementById('changeDetails').value;

            if (!category) {
                alert('Please select a change category.');
                return;
            }

            if (!details.trim()) {
                alert('Please provide details about the requested changes.');
                return;
            }

            const btn = document.querySelector('button[onclick="submitChangeRequest()"]');
            btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Sending...';

            setTimeout(() => {
                const modal = bootstrap.Modal.getInstance(document.getElementById('requestChangesModal'));
                modal.hide();
                btn.innerHTML = '<i class="fas fa-paper-plane me-2"></i>Send Change Request';
                form.reset();
                alert('Change request sent to organizer successfully!');
            }, 1200);
        }

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
    </script>
@endpush
