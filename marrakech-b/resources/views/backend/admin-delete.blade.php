@extends('layouts.admin')

@section('content')
<!-- Admin Navigation -->
    

    

    <!-- Admin Header -->
    <div class="admin-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1>Event Deletion & Archive</h1>
                    <p>Manage event removals, expired events, and archive maintenance</p>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <div class="deletion-stats">
                        <span><i class="fas fa-trash"></i>12 deleted this month</span>
                        <span style="color: rgba(255,255,255,0.3);">|</span>
                        <span><i class="fas fa-archive"></i>45 archived</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Deletion Management Content -->
    <div class="container-fluid py-4">
        <!-- Action Cards -->
        <div class="row mb-4">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="action-card expired reveal" onclick="showExpiredEvents()" style="cursor: pointer;">
                    <div class="action-icon">
                        <i class="fas fa-calendar-times"></i>
                    </div>
                    <h5 style="color: var(--indigo); margin-bottom: 0.5rem;">Expired Events</h5>
                    <p style="color: #666; font-size: 0.9rem; margin-bottom: 1rem;">Events that have passed their date</p>
                    <div class="action-number">23</div>
                    <button class="btn btn-outline-terracotta btn-admin mt-3">
                        <i class="fas fa-eye me-2"></i>Review
                    </button>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="action-card flagged reveal" style="transition-delay: 0.1s; cursor: pointer;" onclick="showFlaggedEvents()">
                    <div class="action-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <h5 style="color: var(--indigo); margin-bottom: 0.5rem;">Flagged Events</h5>
                    <p style="color: #666; font-size: 0.9rem; margin-bottom: 1rem;">Events reported by users</p>
                    <div class="action-number">3</div>
                    <button class="btn btn-outline-terracotta btn-admin mt-3">
                        <i class="fas fa-flag me-2"></i>Review
                    </button>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="action-card archive reveal" style="transition-delay: 0.2s; cursor: pointer;" onclick="showArchiveQueue()">
                    <div class="action-icon">
                        <i class="fas fa-archive"></i>
                    </div>
                    <h5 style="color: var(--indigo); margin-bottom: 0.5rem;">Archive Queue</h5>
                    <p style="color: #666; font-size: 0.9rem; margin-bottom: 1rem;">Events ready for archival</p>
                    <div class="action-number">8</div>
                    <button class="btn btn-outline-terracotta btn-admin mt-3">
                        <i class="fas fa-box me-2"></i>Process
                    </button>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="action-card recycle reveal" style="transition-delay: 0.3s; cursor: pointer;" onclick="showRecycleBin()">
                    <div class="action-icon">
                        <i class="fas fa-trash-alt"></i>
                    </div>
                    <h5 style="color: var(--indigo); margin-bottom: 0.5rem;">Recycle Bin</h5>
                    <p style="color: #666; font-size: 0.9rem; margin-bottom: 1rem;">Recently deleted events</p>
                    <div class="action-number">12</div>
                    <button class="btn btn-outline-terracotta btn-admin mt-3">
                        <i class="fas fa-undo me-2"></i>Restore
                    </button>
                </div>
            </div>
        </div>

        <!-- Bulk Operations -->
        <div class="row mb-4">
            <div class="col-12">
                <div class="glass-card reveal">
                    <div class="section-header">
                        <i class="fas fa-cogs"></i>
                        <h4>Bulk Operations</h4>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <div class="bulk-card warning">
                                <h6 style="color: var(--indigo); font-weight: 600;">
                                    <i class="fas fa-archive me-2" style="color: #ffc107;"></i>Archive Expired Events
                                </h6>
                                <p style="color: #666; font-size: 0.9rem; margin: 0.75rem 0;">Automatically archive all events older than 30 days</p>
                                <button class="btn btn-terracotta btn-admin" onclick="bulkArchiveExpired()">
                                    <i class="fas fa-archive me-2"></i>Archive All (23)
                                </button>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-3">
                            <div class="bulk-card danger">
                                <h6 style="color: var(--indigo); font-weight: 600;">
                                    <i class="fas fa-broom me-2" style="color: #dc3545;"></i>Clean Drafts
                                </h6>
                                <p style="color: #666; font-size: 0.9rem; margin: 0.75rem 0;">Remove draft events older than 7 days with no updates</p>
                                <button class="btn btn-outline-terracotta btn-admin" onclick="cleanIncompleteSubmissions()">
                                    <i class="fas fa-broom me-2"></i>Clean Up (7)
                                </button>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-3">
                            <div class="bulk-card info">
                                <h6 style="color: var(--indigo); font-weight: 600;">
                                    <i class="fas fa-trash me-2" style="color: #17a2b8;"></i>Empty Recycle Bin
                                </h6>
                                <p style="color: #666; font-size: 0.9rem; margin: 0.75rem 0;">Permanently delete all events in recycle bin</p>
                                <button class="btn btn-outline-terracotta btn-admin" onclick="emptyRecycleBin()">
                                    <i class="fas fa-trash me-2"></i>Empty Bin (12)
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Events for Deletion Review -->
        <div class="row">
            <div class="col-12">
                <div class="glass-card reveal">
                    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
                        <div class="section-header mb-0">
                            <i class="fas fa-list"></i>
                            <h4>Events Requiring Action</h4>
                        </div>
                        <div class="view-filters d-flex gap-2 flex-wrap">
                            <button class="filter-btn active" onclick="showAllDeletionCandidates()">All</button>
                            <button class="filter-btn" onclick="showExpiredEvents()">Expired</button>
                            <button class="filter-btn" onclick="showFlaggedEvents()">Flagged</button>
                            <button class="filter-btn" onclick="showArchiveQueue()">Archive</button>
                        </div>
                    </div>

                    <div id="deletionCandidatesList">
                        <!-- Expired Event 1 -->
                        <div class="deletion-item expired" data-type="expired">
                            <div class="row align-items-center">
                                <div class="col-md-2 col-sm-3 mb-2 mb-md-0">
                                    <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?w=200&q=80" alt="Expired Concert" class="event-thumbnail">
                                </div>
                                <div class="col-md-6 col-sm-9 mb-2 mb-md-0">
                                    <h6 style="font-weight: 600; color: var(--indigo); margin-bottom: 0.5rem;">Andalusian Music Evening</h6>
                                    <p style="color: #666; font-size: 0.9rem; margin-bottom: 0.5rem;">
                                        <i class="fas fa-building me-1" style="color: var(--terracotta);"></i>Cultural Heritage Foundation
                                    </p>
                                    <div class="d-flex gap-2 flex-wrap">
                                        <span class="badge-moroccan badge-expired">Expired</span>
                                        <span class="badge-moroccan badge-music">Music</span>
                                        <small style="color: #666;"><i class="far fa-calendar-times me-1"></i>Ended: Nov 15, 2024</small>
                                    </div>
                                </div>
                                <div class="col-md-2 col-6 text-center mb-2 mb-md-0">
                                    <small style="color: #666; display: block; margin-bottom: 0.25rem;">Attendees</small>
                                    <div style="font-family: var(--font-serif); font-size: 1.5rem; font-weight: 600; color: var(--indigo);">87</div>
                                </div>
                                <div class="col-md-2 col-6 text-end">
                                    <button class="btn-action-sm btn-archive-action mb-2" onclick="archiveEvent('music-001')" title="Archive">
                                        <i class="fas fa-archive"></i>
                                    </button>
                                    <button class="btn-action-sm btn-delete-action" onclick="deleteEvent('music-001', 'Andalusian Music Evening')" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Flagged Event -->
                        <div class="deletion-item flagged" data-type="flagged">
                            <div class="row align-items-center">
                                <div class="col-md-2 col-sm-3 mb-2 mb-md-0">
                                    <img src="https://images.unsplash.com/photo-1507676184212-d03ab07a01bf?w=200&q=80" alt="Flagged Event" class="event-thumbnail">
                                </div>
                                <div class="col-md-6 col-sm-9 mb-2 mb-md-0">
                                    <h6 style="font-weight: 600; color: var(--indigo); margin-bottom: 0.5rem;">Controversial Theater Performance</h6>
                                    <p style="color: #666; font-size: 0.9rem; margin-bottom: 0.5rem;">
                                        <i class="fas fa-building me-1" style="color: var(--terracotta);"></i>Independent Theater Group
                                    </p>
                                    <div class="d-flex gap-2 flex-wrap mb-2">
                                        <span class="badge-moroccan badge-flagged">Flagged</span>
                                        <span class="badge-moroccan badge-theater">Theater</span>
                                        <small style="color: #666;"><i class="far fa-clock me-1"></i>Scheduled: Dec 20, 2024</small>
                                    </div>
                                    <div class="alert-moroccan alert-danger" style="padding: 0.75rem;">
                                        <small style="color: #721c24;">
                                            <i class="fas fa-exclamation-circle me-1"></i>
                                            <strong>Report:</strong> Content may not align with cultural guidelines (3 reports)
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-2 col-6 text-center mb-2 mb-md-0">
                                    <small style="color: #666; display: block; margin-bottom: 0.25rem;">Reports</small>
                                    <div style="font-family: var(--font-serif); font-size: 1.5rem; font-weight: 600; color: #dc3545;">3</div>
                                </div>
                                <div class="col-md-2 col-6 text-end">
                                    <button class="btn-action-sm btn-review-action mb-2" onclick="reviewFlaggedEvent('theater-002')" title="Review">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn-action-sm btn-delete-action" onclick="deleteEvent('theater-002', 'Controversial Theater Performance')" title="Remove">
                                        <i class="fas fa-ban"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Archive Queue Event -->
                        <div class="deletion-item archive" data-type="archive">
                            <div class="row align-items-center">
                                <div class="col-md-2 col-sm-3 mb-2 mb-md-0">
                                    <img src="https://images.unsplash.com/photo-1579783902614-a3fb3927b6a5?w=200&q=80" alt="Archive Candidate" class="event-thumbnail">
                                </div>
                                <div class="col-md-6 col-sm-9 mb-2 mb-md-0">
                                    <h6 style="font-weight: 600; color: var(--indigo); margin-bottom: 0.5rem;">Traditional Crafts Exhibition</h6>
                                    <p style="color: #666; font-size: 0.9rem; margin-bottom: 0.5rem;">
                                        <i class="fas fa-building me-1" style="color: var(--terracotta);"></i>Artisan Collective
                                    </p>
                                    <div class="d-flex gap-2 flex-wrap mb-2">
                                        <span class="badge-moroccan badge-archive">Archive Ready</span>
                                        <span class="badge-moroccan badge-exhibition">Exhibition</span>
                                        <small style="color: #666;"><i class="far fa-calendar-check me-1"></i>Ended: Oct 30, 2024</small>
                                    </div>
                                    <div style="font-size: 0.85rem; color: #17a2b8;">
                                        <i class="fas fa-check-circle me-1"></i>Event completed • 
                                        <i class="fas fa-star me-1"></i>Positive feedback • 
                                        <i class="fas fa-clock me-1"></i>90 days elapsed
                                    </div>
                                </div>
                                <div class="col-md-2 col-6 text-center mb-2 mb-md-0">
                                    <small style="color: #666; display: block; margin-bottom: 0.25rem;">Rating</small>
                                    <div style="font-family: var(--font-serif); font-size: 1.5rem; font-weight: 600; color: #28a745;">4.8★</div>
                                </div>
                                <div class="col-md-2 col-6 text-end">
                                    <button class="btn-action-sm btn-archive-action mb-2" onclick="archiveEvent('exhibition-003')" title="Archive">
                                        <i class="fas fa-archive"></i>
                                    </button>
                                    <button class="btn-action-sm btn-keep-action" onclick="keepEvent('exhibition-003')" title="Keep">
                                        <i class="fas fa-save"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Incomplete Draft -->
                        <div class="deletion-item draft" data-type="draft">
                            <div class="row align-items-center">
                                <div class="col-md-2 col-sm-3 mb-2 mb-md-0">
                                    <div class="placeholder-image">
                                        <i class="fas fa-image" style="color: var(--ochre); font-size: 1.5rem;"></i>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-9 mb-2 mb-md-0">
                                    <h6 style="font-weight: 600; color: var(--indigo); margin-bottom: 0.5rem;">Incomplete Workshop Submission</h6>
                                    <p style="color: #666; font-size: 0.9rem; margin-bottom: 0.5rem;">
                                        <i class="fas fa-user me-1" style="color: var(--terracotta);"></i>Local Artist (Incomplete Profile)
                                    </p>
                                    <div class="d-flex gap-2 flex-wrap mb-2">
                                        <span class="badge-moroccan badge-draft">Draft</span>
                                        <span class="badge-moroccan badge-workshop">Workshop</span>
                                        <small style="color: #666;"><i class="far fa-clock me-1"></i>14 days stale</small>
                                    </div>
                                    <div class="alert-moroccan alert-warning" style="padding: 0.75rem;">
                                        <small style="color: #856404;">
                                            <i class="fas fa-exclamation-triangle me-1"></i>
                                            Missing: Venue details, event description, organizer contact
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-2 col-6 text-center mb-2 mb-md-0">
                                    <small style="color: #666; display: block; margin-bottom: 0.25rem;">Days Stale</small>
                                    <div style="font-family: var(--font-serif); font-size: 1.5rem; font-weight: 600; color: #ffc107;">14</div>
                                </div>
                                <div class="col-md-2 col-6 text-end">
                                    <button class="btn-action-sm btn-review-action mb-2" onclick="contactOrganizer('workshop-004')" title="Contact">
                                        <i class="fas fa-envelope"></i>
                                    </button>
                                    <button class="btn-action-sm btn-delete-action" onclick="deleteEvent('workshop-004', 'Incomplete Workshop Submission')" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Deletion Statistics -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="glass-card reveal">
                    <div class="section-header">
                        <i class="fas fa-chart-bar"></i>
                        <h4>Deletion & Archive Statistics</h4>
                    </div>

                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <div class="stat-box">
                                <h4 style="color: var(--indigo);">247</h4>
                                <p style="color: #666; font-size: 0.9rem; margin: 0;">Total Events</p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="stat-box">
                                <h4 style="color: #28a745;">203</h4>
                                <p style="color: #666; font-size: 0.9rem; margin: 0;">Active Events</p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="stat-box">
                                <h4 style="color: #17a2b8;">32</h4>
                                <p style="color: #666; font-size: 0.9rem; margin: 0;">Archived Events</p>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="stat-box">
                                <h4 style="color: #dc3545;">12</h4>
                                <p style="color: #666; font-size: 0.9rem; margin: 0;">Deleted Events</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fas fa-exclamation-triangle me-2"></i>Confirm Deletion
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <div style="width: 80px; height: 80px; background: rgba(220,53,69,0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
                            <i class="fas fa-trash-alt text-danger fa-2x"></i>
                        </div>
                    </div>
                    <h6 class="text-center mb-3" style="color: var(--indigo); font-weight: 600;">Are you sure you want to delete this event?</h6>
                    <div class="event-preview-box">
                        <h6 class="event-title mb-2" style="color: var(--terracotta); font-weight: 600;"></h6>
                        <p class="text-muted small mb-0">
                            <i class="fas fa-info-circle me-1" style="color: var(--ochre);"></i>
                            This action cannot be undone. The event will be moved to the recycle bin for 30 days before permanent deletion.
                        </p>
                    </div>

                    <div class="mt-4">
                        <label for="deletionReason" class="form-label" style="font-weight: 500; color: var(--indigo);">Reason for deletion:</label>
                        <select class="form-select" id="deletionReason">
                            <option value="">Select reason...</option>
                            <option value="expired">Event expired</option>
                            <option value="inappropriate">Inappropriate content</option>
                            <option value="spam">Spam or duplicate</option>
                            <option value="violation">Guidelines violation</option>
                            <option value="request">Organizer request</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary btn-admin" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger btn-admin" id="confirmDeleteBtn" onclick="confirmDelete()">
                        <i class="fas fa-trash me-2"></i>Delete Event
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
        // Filter functionality
        function showExpiredEvents() {
            const items = document.querySelectorAll('.deletion-item');
            items.forEach(item => {
                item.style.display = item.dataset.type === 'expired' ? 'block' : 'none';
            });
            updateFilterButtons('expired');
        }

        function showFlaggedEvents() {
            const items = document.querySelectorAll('.deletion-item');
            items.forEach(item => {
                item.style.display = item.dataset.type === 'flagged' ? 'block' : 'none';
            });
            updateFilterButtons('flagged');
        }

        function showArchiveQueue() {
            const items = document.querySelectorAll('.deletion-item');
            items.forEach(item => {
                item.style.display = item.dataset.type === 'archive' ? 'block' : 'none';
            });
            updateFilterButtons('archive');
        }

        function showAllDeletionCandidates() {
            const items = document.querySelectorAll('.deletion-item');
            items.forEach(item => {
                item.style.display = 'block';
            });
            updateFilterButtons('all');
        }

        function updateFilterButtons(activeType) {
            const buttons = document.querySelectorAll('.filter-btn');
            buttons.forEach(btn => btn.classList.remove('active'));

            if (activeType === 'expired') buttons[1].classList.add('active');
            else if (activeType === 'flagged') buttons[2].classList.add('active');
            else if (activeType === 'archive') buttons[3].classList.add('active');
            else buttons[0].classList.add('active');
        }

        // Deletion actions
        let currentDeleteId = null;

        function deleteEvent(eventId, eventTitle) {
            currentDeleteId = eventId;
            document.querySelector('.event-title').textContent = eventTitle;
            const modal = new bootstrap.Modal(document.getElementById('deleteModal'));
            modal.show();
        }

        function confirmDelete() {
            const reason = document.getElementById('deletionReason').value;
            if (!reason) {
                alert('Please select a reason for deletion.');
                return;
            }

            const btn = document.getElementById('confirmDeleteBtn');
            btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Deleting...';

            setTimeout(() => {
                const modal = bootstrap.Modal.getInstance(document.getElementById('deleteModal'));
                modal.hide();
                btn.innerHTML = '<i class="fas fa-trash me-2"></i>Delete Event';
                document.getElementById('deletionReason').value = '';
                alert('Event moved to recycle bin successfully!');
            }, 1200);
        }

        function archiveEvent(eventId) {
            if (confirm('Archive this event? It will be moved to the archive and hidden from public view.')) {
                console.log('Archiving event:', eventId);
                alert('Event archived successfully!');
            }
        }

        function keepEvent(eventId) {
            if (confirm('Keep this event active? It will remain visible to the public.')) {
                console.log('Keeping event active:', eventId);
                alert('Event marked as active!');
            }
        }

        function reviewFlaggedEvent(eventId) {
            console.log('Reviewing flagged event:', eventId);
            alert('Opening detailed review for event ' + eventId);
        }

        function contactOrganizer(eventId) {
            console.log('Contacting organizer for event:', eventId);
            alert('Reminder email sent to organizer!');
        }

        // Bulk operations
        function bulkArchiveExpired() {
            if (confirm('Archive all 23 expired events? This action will move them to the archive.')) {
                console.log('Bulk archiving expired events');
                alert('23 expired events archived successfully!');
            }
        }

        function cleanIncompleteSubmissions() {
            if (confirm('Delete 7 incomplete draft submissions? This action cannot be undone.')) {
                console.log('Cleaning incomplete submissions');
                alert('7 incomplete submissions cleaned up!');
            }
        }

        function emptyRecycleBin() {
            if (confirm('Permanently delete all 12 events in the recycle bin? This action cannot be undone.')) {
                console.log('Emptying recycle bin');
                alert('Recycle bin emptied successfully!');
            }
        }

        function showRecycleBin() {
            alert('Recycle Bin: 12 events ready for restoration or permanent deletion');
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
