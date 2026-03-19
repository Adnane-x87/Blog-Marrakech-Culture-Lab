@extends('layouts.admin')

@section('content')
<!-- Admin Navigation -->
    

    

    <!-- Admin Header -->
    <div class="admin-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>Dashboard Overview</h1>
                    <p>Manage Marrakech's cultural heartbeat</p>
                </div>
                <div class="col-md-6 text-md-end mt-3 mt-md-0">
                    <div class="current-time">
                        <i class="fas fa-clock"></i>
                        <span id="currentTime">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Dashboard Content -->
    <div class="container-fluid py-4">
        <!-- Statistics Cards -->
        <div class="row mb-4">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stat-card reveal">
                    <div class="stat-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <div class="stat-number">42</div>
                    <div class="stat-label">Active Events</div>
                    <div class="stat-trend">
                        <i class="fas fa-arrow-up"></i>
                        <span>+12% this month</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stat-card ochre reveal" style="transition-delay: 0.1s;">
                    <div class="stat-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="stat-number">5</div>
                    <div class="stat-label">Pending Approvals</div>
                    <div class="stat-trend">
                        <i class="fas fa-exclamation-circle"></i>
                        <span>Needs attention</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stat-card indigo reveal" style="transition-delay: 0.2s;">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-number">1,247</div>
                    <div class="stat-label">Total Attendees</div>
                    <div class="stat-trend">
                        <i class="fas fa-arrow-up"></i>
                        <span>+8% this week</span>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="stat-card mixed reveal" style="transition-delay: 0.3s;">
                    <div class="stat-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="stat-number">28</div>
                    <div class="stat-label">Active Organizers</div>
                    <div class="stat-trend">
                        <i class="fas fa-chart-line"></i>
                        <span>Growing</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Recent Activity -->
            <div class="col-lg-8 mb-4">
                <div class="glass-card reveal">
                    <div class="section-header">
                        <i class="fas fa-stream"></i>
                        <h4>Recent Activity</h4>
                    </div>

                    <div class="activity-feed">
                        <div class="activity-item success">
                            <div class="activity-icon bg-success text-white">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="activity-content">
                                <h6>Event Approved: "Traditional Moroccan Music Concert"</h6>
                                <small><i class="far fa-clock me-1"></i>Approved by Admin • 2 hours ago</small>
                            </div>
                        </div>

                        <div class="activity-item info">
                            <div class="activity-icon bg-primary text-white">
                                <i class="fas fa-plus"></i>
                            </div>
                            <div class="activity-content">
                                <h6>New Event Submitted: "Berber Carpet Weaving Workshop"</h6>
                                <small><i class="far fa-clock me-1"></i>Submitted by Artisan Guild • 4 hours ago</small>
                            </div>
                        </div>

                        <div class="activity-item warning">
                            <div class="activity-icon bg-warning text-white">
                                <i class="fas fa-edit"></i>
                            </div>
                            <div class="activity-content">
                                <h6>Event Updated: "Contemporary Art Exhibition"</h6>
                                <small><i class="far fa-clock me-1"></i>Updated by Gallery Moderne • 6 hours ago</small>
                            </div>
                        </div>

                        <div class="activity-item info">
                            <div class="activity-icon bg-info text-white">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <div class="activity-content">
                                <h6>New Organizer: "Atlas Heritage Center" registered</h6>
                                <small><i class="far fa-clock me-1"></i>Registration completed • 1 day ago</small>
                            </div>
                        </div>

                        <div class="activity-item danger">
                            <div class="activity-icon bg-danger text-white">
                                <i class="fas fa-trash"></i>
                            </div>
                            <div class="activity-content">
                                <h6>Event Cancelled: "Outdoor Festival"</h6>
                                <small><i class="far fa-clock me-1"></i>Cancelled due to weather • 1 day ago</small>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <a href="#" class="btn btn-outline-terracotta btn-admin">
                            View All Activity <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Quick Actions -->
                <div class="glass-card mb-4 reveal" style="transition-delay: 0.1s;">
                    <div class="section-header">
                        <i class="fas fa-bolt"></i>
                        <h5>Quick Actions</h5>
                    </div>

                    <div class="d-grid gap-2">
                        <a href="admin-approve.html" class="btn btn-terracotta btn-admin">
                            <i class="fas fa-check-circle"></i>Review Pending (5)
                        </a>
                        <a href="admin-events.html" class="btn btn-outline-terracotta btn-admin">
                            <i class="fas fa-plus"></i>Add New Event
                        </a>
                        <a href="#" class="btn btn-outline-terracotta btn-admin">
                            <i class="fas fa-file-export"></i>Export Data
                        </a>
                        <a href="#" class="btn btn-ochre btn-admin">
                            <i class="fas fa-envelope"></i>Send Newsletter
                        </a>
                    </div>
                </div>

                <!-- System Alerts -->
                <div class="glass-card mb-4 reveal" style="transition-delay: 0.2s;">
                    <div class="section-header">
                        <i class="fas fa-bell"></i>
                        <h5>System Alerts</h5>
                    </div>

                    <div class="alert alert-moroccan alert-warning mb-3">
                        <h6 class="alert-heading"><i class="fas fa-hdd me-2"></i>Storage Usage</h6>
                        <p class="mb-1 small">Image storage at 78% capacity</p>
                        <a href="#" class="small" style="color: var(--terracotta);">Manage storage →</a>
                    </div>

                    <div class="alert alert-moroccan alert-info mb-0">
                        <h6 class="alert-heading"><i class="fas fa-database me-2"></i>Backup Status</h6>
                        <p class="mb-1 small">Last backup: 2 hours ago</p>
                        <a href="#" class="small" style="color: var(--terracotta);">View logs →</a>
                    </div>
                </div>

                <!-- Top Organizers -->
                <div class="glass-card reveal" style="transition-delay: 0.3s;">
                    <div class="section-header">
                        <i class="fas fa-star"></i>
                        <h5>Top Organizers</h5>
                    </div>

                    <div class="organizer-list">
                        <div class="organizer-item">
                            <div class="organizer-avatar bg-terracotta">MC</div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1" style="font-size: 0.95rem; font-weight: 600;">Marrakech Cultural Center</h6>
                                <small style="color: #666;"><i class="fas fa-calendar me-1"></i>12 events this month</small>
                            </div>
                        </div>

                        <div class="organizer-item">
                            <div class="organizer-avatar bg-ochre">GM</div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1" style="font-size: 0.95rem; font-weight: 600;">Gallery Moderne</h6>
                                <small style="color: #666;"><i class="fas fa-calendar me-1"></i>8 events this month</small>
                            </div>
                        </div>

                        <div class="organizer-item">
                            <div class="organizer-avatar bg-indigo">AG</div>
                            <div class="flex-grow-1">
                                <h6 class="mb-1" style="font-size: 0.95rem; font-weight: 600;">Artisan Guild</h6>
                                <small style="color: #666;"><i class="fas fa-calendar me-1"></i>6 events this month</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Event Calendar Preview -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="glass-card reveal">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="section-header mb-0">
                            <i class="fas fa-calendar-alt"></i>
                            <h4>Upcoming Events</h4>
                        </div>
                        <a href="admin-events.html" class="btn btn-outline-terracotta btn-admin">
                            Full Calendar <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 mb-3">
                            <div class="event-preview-card">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="event-date-badge me-3">
                                        <span class="day">15</span>
                                        <span class="month">APR</span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1" style="font-weight: 600; color: var(--indigo);">Traditional Music Concert</h6>
                                        <small style="color: #666;"><i class="far fa-clock me-1"></i>8:00 PM • Cultural Center</small>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="status-badge status-approved">Approved</span>
                                    <small style="color: #666;"><i class="fas fa-users me-1"></i>45</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-3">
                            <div class="event-preview-card">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="event-date-badge me-3" style="background: linear-gradient(135deg, var(--ochre) 0%, #B8936B 100%);">
                                        <span class="day">22</span>
                                        <span class="month">APR</span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1" style="font-weight: 600; color: var(--indigo);">Art Exhibition Opening</h6>
                                        <small style="color: #666;"><i class="far fa-clock me-1"></i>6:00 PM • Gallery Moderne</small>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="status-badge status-pending">Pending</span>
                                    <small style="color: #666;"><i class="fas fa-users me-1"></i>12</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mb-3">
                            <div class="event-preview-card">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="event-date-badge me-3" style="background: linear-gradient(135deg, var(--indigo) 0%, var(--indigo-light) 100%);">
                                        <span class="day">01</span>
                                        <span class="month">MAY</span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1" style="font-weight: 600; color: var(--indigo);">Pottery Workshop</h6>
                                        <small style="color: #666;"><i class="far fa-clock me-1"></i>2:00 PM • Artisan Quarter</small>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="status-badge status-approved">Approved</span>
                                    <small style="color: #666;"><i class="fas fa-users me-1"></i>8</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Analytics Charts -->
        <div class="row mt-4">
            <div class="col-lg-6 mb-4">
                <div class="glass-card reveal">
                    <div class="section-header">
                        <i class="fas fa-chart-pie"></i>
                        <h5>Event Categories</h5>
                    </div>
                    <div class="chart-container">
                        <div class="chart-placeholder">
                            <i class="fas fa-chart-pie fa-3x mb-3"></i>
                            <p>Music (35%) • Exhibitions (25%)<br>Theater (20%) • Workshops (20%)</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4">
                <div class="glass-card reveal" style="transition-delay: 0.1s;">
                    <div class="section-header">
                        <i class="fas fa-chart-line"></i>
                        <h5>Monthly Trends</h5>
                    </div>
                    <div class="chart-container">
                        <div class="chart-placeholder">
                            <i class="fas fa-chart-line fa-3x mb-3"></i>
                            <p>Growth: +15% increase in submissions<br>vs. previous month</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
        // Update current time
        function updateTime() {
            const now = new Date();
            const options = { 
                weekday: 'short', 
                year: 'numeric', 
                month: 'short', 
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit'
            };
            document.getElementById('currentTime').textContent = now.toLocaleDateString('en-US', options);
        }

        updateTime();
        setInterval(updateTime, 60000);

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

        // Counter animation for stats
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-number');
            counters.forEach(counter => {
                const target = parseInt(counter.textContent.replace(/,/g, ''));
                const duration = 2000;
                const increment = target / (duration / 16);
                let current = 0;

                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        counter.textContent = Math.floor(current).toLocaleString();
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target.toLocaleString();
                    }
                };

                updateCounter();
            });
        }

        // Trigger counter animation when stats are visible
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        document.querySelectorAll('.stat-card').forEach(card => {
            statsObserver.observe(card);
        });
    </script>
@endpush
