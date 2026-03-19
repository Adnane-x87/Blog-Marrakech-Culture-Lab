@extends('layouts.admin')

@section('content')
<!-- Admin Navigation -->
    

    

    <!-- Admin Header -->
    <div class="admin-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>Event Management</h1>
                    <p>Oversee all cultural events and their publication status</p>
                </div>
                <div class="col-md-6 text-md-end mt-3 mt-md-0">
                    <button class="btn btn-terracotta btn-admin" data-bs-toggle="modal" data-bs-target="#addEventModal">
                        <i class="fas fa-plus"></i>Add New Event
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Event Management Content -->
    <div class="container-fluid py-4">
        <!-- Filter and Search Controls -->
        <div class="row mb-4">
            <div class="col-lg-8">
                <div class="glass-card reveal">
                    <div class="row align-items-center">
                        <div class="col-md-4 mb-2 mb-md-0">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-search"></i>
                                </span>
                                <input type="text" class="form-control" id="eventSearch" placeholder="Search events...">
                            </div>
                        </div>
                        <div class="col-md-3 mb-2 mb-md-0">
                            <select class="form-select" id="statusFilter">
                                <option value="">All Statuses</option>
                                <option value="published">Published</option>
                                <option value="pending">Pending Review</option>
                                <option value="draft">Draft</option>
                                <option value="archived">Archived</option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-2 mb-md-0">
                            <select class="form-select" id="categoryFilter">
                                <option value="">All Categories</option>
                                <option value="music">Music</option>
                                <option value="exhibition">Art Exhibition</option>
                                <option value="theater">Theater</option>
                                <option value="workshop">Workshop</option>
                                <option value="festival">Festival</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-outline-terracotta btn-admin w-100" onclick="applyFilters()">
                                <i class="fas fa-filter"></i>Filter
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="glass-card reveal" style="transition-delay: 0.1s;">
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                        <div class="stats-summary">
                            <div class="stat-item">
                                <span class="number" style="color: var(--terracotta);">247</span>
                                <span class="label">Total</span>
                            </div>
                            <div class="stat-divider"></div>
                            <div class="stat-item">
                                <span class="number" style="color: #28a745;">203</span>
                                <span class="label">Published</span>
                            </div>
                            <div class="stat-divider"></div>
                            <div class="stat-item">
                                <span class="number" style="color: #ffc107;">5</span>
                                <span class="label">Pending</span>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-outline-terracotta btn-admin dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                <i class="fas fa-download"></i>Export
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-file-csv me-2" style="color: var(--terracotta);"></i>Export as CSV</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-file-excel me-2" style="color: var(--terracotta);"></i>Export as Excel</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-file-pdf me-2" style="color: var(--terracotta);"></i>Export as PDF</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Events Table -->
        <div class="row">
            <div class="col-12">
                <div class="table-container reveal" style="transition-delay: 0.2s;">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th width="40">
                                        <input type="checkbox" class="form-check-input" id="selectAll">
                                    </th>
                                    <th>Event</th>
                                    <th>Category</th>
                                    <th>Date & Time</th>
                                    <th>Organizer</th>
                                    <th>Status</th>
                                    <th>Attendees</th>
                                    <th width="180">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="checkbox" class="form-check-input event-checkbox" value="1">
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://images.unsplash.com/photo-1516450360452-9312f5e86fc7?w=150&q=80" alt="Event" class="event-thumbnail me-3">
                                            <div>
                                                <h6 style="font-weight: 600; color: var(--indigo); margin-bottom: 0.25rem;">Traditional Moroccan Music Concert</h6>
                                                <small style="color: #666;"><i class="fas fa-map-marker-alt me-1" style="color: var(--terracotta);"></i>Cultural Center, Medina</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge-moroccan badge-music">Music</span></td>
                                    <td>
                                        <div style="font-weight: 500;">Dec 15, 2024</div>
                                        <small style="color: #666;"><i class="far fa-clock me-1"></i>8:00 PM</small>
                                    </td>
                                    <td>
                                        <div style="font-weight: 500;">Cultural Center</div>
                                        <small style="color: #666;">Marrakech</small>
                                    </td>
                                    <td><span class="badge-moroccan badge-published">Published</span></td>
                                    <td>
                                        <div style="font-weight: 500; margin-bottom: 0.25rem;">45 / 120</div>
                                        <div class="progress-moroccan">
                                            <div class="progress-bar-moroccan" style="width: 38%;"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn-action btn-edit" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn-action btn-view" title="View">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn-action btn-duplicate" title="Duplicate">
                                            <i class="fas fa-copy"></i>
                                        </button>
                                        <button class="btn-action btn-archive" title="Archive">
                                            <i class="fas fa-archive"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="checkbox" class="form-check-input event-checkbox" value="2">
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://images.unsplash.com/photo-1579783902614-a3fb3927b6a5?w=150&q=80" alt="Event" class="event-thumbnail me-3">
                                            <div>
                                                <h6 style="font-weight: 600; color: var(--indigo); margin-bottom: 0.25rem;">Contemporary Art Exhibition</h6>
                                                <small style="color: #666;"><i class="fas fa-map-marker-alt me-1" style="color: var(--terracotta);"></i>Gallery Moderne, Gueliz</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge-moroccan badge-exhibition">Exhibition</span></td>
                                    <td>
                                        <div style="font-weight: 500;">Dec 20, 2024</div>
                                        <small style="color: #666;"><i class="far fa-clock me-1"></i>6:00 PM</small>
                                    </td>
                                    <td>
                                        <div style="font-weight: 500;">Gallery Moderne</div>
                                        <small style="color: #666;">Private Gallery</small>
                                    </td>
                                    <td><span class="badge-moroccan badge-pending">Pending</span></td>
                                    <td>
                                        <div style="font-weight: 500; margin-bottom: 0.25rem;">12 / 80</div>
                                        <div class="progress-moroccan">
                                            <div class="progress-bar-moroccan" style="width: 15%;"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn-action btn-edit" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn-action btn-view" title="View">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn-action btn-duplicate" title="Duplicate">
                                            <i class="fas fa-copy"></i>
                                        </button>
                                        <button class="btn-action btn-archive" title="Archive">
                                            <i class="fas fa-archive"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="checkbox" class="form-check-input event-checkbox" value="3">
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://images.unsplash.com/photo-1565193566173-7a0ee3dbe261?w=150&q=80" alt="Event" class="event-thumbnail me-3">
                                            <div>
                                                <h6 style="font-weight: 600; color: var(--indigo); margin-bottom: 0.25rem;">Traditional Pottery Workshop</h6>
                                                <small style="color: #666;"><i class="fas fa-map-marker-alt me-1" style="color: var(--terracotta);"></i>Artisan Quarter, Mellah</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge-moroccan badge-workshop">Workshop</span></td>
                                    <td>
                                        <div style="font-weight: 500;">Dec 25, 2024</div>
                                        <small style="color: #666;"><i class="far fa-clock me-1"></i>2:00 PM</small>
                                    </td>
                                    <td>
                                        <div style="font-weight: 500;">Artisan Guild</div>
                                        <small style="color: #666;">Cooperative</small>
                                    </td>
                                    <td><span class="badge-moroccan badge-published">Published</span></td>
                                    <td>
                                        <div style="font-weight: 500; margin-bottom: 0.25rem;">8 / 15</div>
                                        <div class="progress-moroccan">
                                            <div class="progress-bar-moroccan" style="width: 53%;"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn-action btn-edit" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn-action btn-view" title="View">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn-action btn-duplicate" title="Duplicate">
                                            <i class="fas fa-copy"></i>
                                        </button>
                                        <button class="btn-action btn-archive" title="Archive">
                                            <i class="fas fa-archive"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="checkbox" class="form-check-input event-checkbox" value="4">
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://images.unsplash.com/photo-1507676184212-d03ab07a01bf?w=150&q=80" alt="Event" class="event-thumbnail me-3">
                                            <div>
                                                <h6 style="font-weight: 600; color: var(--indigo); margin-bottom: 0.25rem;">Tales of Marrakech</h6>
                                                <small style="color: #666;"><i class="fas fa-map-marker-alt me-1" style="color: var(--terracotta);"></i>Royal Theater Marrakech</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge-moroccan badge-theater">Theater</span></td>
                                    <td>
                                        <div style="font-weight: 500;">Dec 30, 2024</div>
                                        <small style="color: #666;"><i class="far fa-clock me-1"></i>7:30 PM</small>
                                    </td>
                                    <td>
                                        <div style="font-weight: 500;">Theater Company</div>
                                        <small style="color: #666;">Professional</small>
                                    </td>
                                    <td><span class="badge-moroccan badge-published">Published</span></td>
                                    <td>
                                        <div style="font-weight: 500; margin-bottom: 0.25rem;">67 / 150</div>
                                        <div class="progress-moroccan">
                                            <div class="progress-bar-moroccan" style="width: 45%;"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn-action btn-edit" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn-action btn-view" title="View">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn-action btn-duplicate" title="Duplicate">
                                            <i class="fas fa-copy"></i>
                                        </button>
                                        <button class="btn-action btn-archive" title="Archive">
                                            <i class="fas fa-archive"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="checkbox" class="form-check-input event-checkbox" value="5">
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://images.unsplash.com/photo-1493225255756-d9584f8606e5?w=150&q=80" alt="Event" class="event-thumbnail me-3">
                                            <div>
                                                <h6 style="font-weight: 600; color: var(--indigo); margin-bottom: 0.25rem;">Gnawa Music Festival</h6>
                                                <small style="color: #666;"><i class="fas fa-map-marker-alt me-1" style="color: var(--terracotta);"></i>Palmery Cultural Garden</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge-moroccan badge-festival">Festival</span></td>
                                    <td>
                                        <div style="font-weight: 500;">Jan 5, 2025</div>
                                        <small style="color: #666;"><i class="far fa-clock me-1"></i>7:00 PM</small>
                                    </td>
                                    <td>
                                        <div style="font-weight: 500;">Cultural Foundation</div>
                                        <small style="color: #666;">Non-Profit</small>
                                    </td>
                                    <td><span class="badge-moroccan badge-draft">Draft</span></td>
                                    <td>
                                        <div style="font-weight: 500; margin-bottom: 0.25rem;">0 / 200</div>
                                        <div class="progress-moroccan">
                                            <div class="progress-bar-moroccan" style="width: 0%;"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn-action btn-edit" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                        <button class="btn-action btn-view" title="View">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button class="btn-action btn-duplicate" title="Duplicate">
                                            <i class="fas fa-copy"></i>
                                        </button>
                                        <button class="btn-action btn-archive" title="Archive">
                                            <i class="fas fa-archive"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Bulk Actions & Pagination -->
                    <div class="d-flex justify-content-between align-items-center p-3" style="background: rgba(46, 58, 89, 0.03); border-top: 1px solid rgba(212, 163, 115, 0.2);">
                        <div class="bulk-actions d-flex align-items-center gap-2">
                            <span style="font-weight: 500; color: var(--indigo);">Bulk:</span>
                            <button class="btn btn-sm btn-outline-success" onclick="bulkPublish()">
                                <i class="fas fa-check me-1"></i>Publish
                            </button>
                            <button class="btn btn-sm btn-outline-warning" onclick="bulkArchive()">
                                <i class="fas fa-archive me-1"></i>Archive
                            </button>
                            <button class="btn btn-sm btn-outline-danger" onclick="bulkDelete()">
                                <i class="fas fa-trash me-1"></i>Delete
                            </button>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Event Modal -->
    <div class="modal fade" id="addEventModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fas fa-plus-circle me-2"></i>Add New Cultural Event</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form id="addEventForm">
                        <div class="row">
                            <div class="col-md-8 mb-3">
                                <label for="newEventTitle" class="form-label" style="font-weight: 500; color: var(--indigo);">Event Title</label>
                                <input type="text" class="form-control" id="newEventTitle" placeholder="Enter event title..." required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="newEventCategory" class="form-label" style="font-weight: 500; color: var(--indigo);">Category</label>
                                <select class="form-select" id="newEventCategory" required>
                                    <option value="">Select category...</option>
                                    <option value="music">🎵 Music</option>
                                    <option value="exhibition">🎨 Art Exhibition</option>
                                    <option value="theater">🎭 Theater</option>
                                    <option value="workshop">🖐️ Workshop</option>
                                    <option value="festival">🎪 Festival</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="newEventDescription" class="form-label" style="font-weight: 500; color: var(--indigo);">Description</label>
                            <textarea class="form-control" id="newEventDescription" rows="3" placeholder="Describe the cultural experience..." required></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="newEventDate" class="form-label" style="font-weight: 500; color: var(--indigo);">Date</label>
                                <input type="date" class="form-control" id="newEventDate" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="newEventTime" class="form-label" style="font-weight: 500; color: var(--indigo);">Time</label>
                                <input type="time" class="form-control" id="newEventTime" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="newEventStatus" class="form-label" style="font-weight: 500; color: var(--indigo);">Status</label>
                                <select class="form-select" id="newEventStatus">
                                    <option value="draft">Draft</option>
                                    <option value="pending">Pending Review</option>
                                    <option value="published">Published</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="newEventVenue" class="form-label" style="font-weight: 500; color: var(--indigo);">Venue</label>
                                <input type="text" class="form-control" id="newEventVenue" placeholder="Venue name and location..." required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="newEventOrganizer" class="form-label" style="font-weight: 500; color: var(--indigo);">Organizer</label>
                                <input type="text" class="form-control" id="newEventOrganizer" placeholder="Organizing entity..." required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="newEventCapacity" class="form-label" style="font-weight: 500; color: var(--indigo);">Capacity</label>
                                <input type="number" class="form-control" id="newEventCapacity" placeholder="Max attendees..." min="1">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="newEventImage" class="form-label" style="font-weight: 500; color: var(--indigo);">Event Image</label>
                                <input type="file" class="form-control" id="newEventImage" accept="image/*">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary btn-admin" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-terracotta btn-admin" onclick="saveNewEvent()">
                        <i class="fas fa-save me-2"></i>Save Event
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
        // Select All checkbox functionality
        const selectAllCheckbox = document.getElementById('selectAll');
        const eventCheckboxes = document.querySelectorAll('.event-checkbox');

        selectAllCheckbox.addEventListener('change', function() {
            eventCheckboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        });

        // Individual checkbox change
        eventCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const checkedBoxes = document.querySelectorAll('.event-checkbox:checked');
                selectAllCheckbox.checked = checkedBoxes.length === eventCheckboxes.length;
                selectAllCheckbox.indeterminate = checkedBoxes.length > 0 && checkedBoxes.length < eventCheckboxes.length;
            });
        });

        function applyFilters() {
            const search = document.getElementById('eventSearch').value;
            const status = document.getElementById('statusFilter').value;
            const category = document.getElementById('categoryFilter').value;

            console.log('Applying filters:', { search, status, category });
            // Animation feedback
            const btn = document.querySelector('button[onclick="applyFilters()"]');
            btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i>Filtering...';
            setTimeout(() => {
                btn.innerHTML = '<i class="fas fa-filter"></i>Filter';
            }, 800);
        }

        function bulkPublish() {
            const selectedEvents = document.querySelectorAll('.event-checkbox:checked');
            if (selectedEvents.length === 0) {
                alert('Please select events to publish.');
                return;
            }

            if (confirm(`Publish ${selectedEvents.length} selected event(s)?`)) {
                console.log('Publishing events:', Array.from(selectedEvents).map(cb => cb.value));
            }
        }

        function bulkArchive() {
            const selectedEvents = document.querySelectorAll('.event-checkbox:checked');
            if (selectedEvents.length === 0) {
                alert('Please select events to archive.');
                return;
            }

            if (confirm(`Archive ${selectedEvents.length} selected event(s)?`)) {
                console.log('Archiving events:', Array.from(selectedEvents).map(cb => cb.value));
            }
        }

        function bulkDelete() {
            const selectedEvents = document.querySelectorAll('.event-checkbox:checked');
            if (selectedEvents.length === 0) {
                alert('Please select events to delete.');
                return;
            }

            if (confirm(`Permanently delete ${selectedEvents.length} selected event(s)? This action cannot be undone.`)) {
                console.log('Deleting events:', Array.from(selectedEvents).map(cb => cb.value));
            }
        }

        function saveNewEvent() {
            const form = document.getElementById('addEventForm');
            if (form.checkValidity()) {
                const btn = document.querySelector('button[onclick="saveNewEvent()"]');
                btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Saving...';

                setTimeout(() => {
                    const modal = bootstrap.Modal.getInstance(document.getElementById('addEventModal'));
                    modal.hide();
                    btn.innerHTML = '<i class="fas fa-save me-2"></i>Save Event';
                    form.reset();
                    alert('Event added successfully!');
                }, 1200);
            } else {
                form.reportValidity();
            }
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

        // Row hover effects
        document.querySelectorAll('tbody tr').forEach(row => {
            row.addEventListener('mouseenter', function() {
                this.style.backgroundColor = 'rgba(255,255,255,0.7)';
            });
            row.addEventListener('mouseleave', function() {
                this.style.backgroundColor = '';
            });
        });
    </script>
@endpush
