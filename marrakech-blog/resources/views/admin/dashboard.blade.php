@extends('layouts.admin')

@section('title', 'Admin Dashboard - Marrakech Cultural Scene')
@section('page_title', 'Dashboard Overview')
@section('page_subtitle', 'Manage Marrakech\'s cultural events and community engagement')

@section('content')
    <div class="row">
        <!-- Statistics Cards -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="stat-card p-4 rounded bg-indigo text-white shadow-sm h-100">
                <h3 class="stat-number display-5 fw-bold">42</h3>
                <p class="mb-2">Active Events</p>
                <div class="stat-trend small">
                    <i class="fas fa-arrow-up me-1"></i>
                    <span>+12% from last month</span>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="stat-card p-4 rounded bg-terracotta text-white shadow-sm h-100" style="background: linear-gradient(135deg, var(--ochre-yellow), var(--terracotta-orange));">
                <h3 class="stat-number display-5 fw-bold">5</h3>
                <p class="mb-2">Pending Approvals</p>
                <div class="stat-trend small">
                    <i class="fas fa-clock me-1"></i>
                    <span>Requires attention</span>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="stat-card p-4 rounded bg-indigo text-white shadow-sm h-100" style="background: linear-gradient(135deg, var(--deep-indigo), var(--ochre-yellow));">
                <h3 class="stat-number display-5 fw-bold">1,247</h3>
                <p class="mb-2">Total Attendees</p>
                <div class="stat-trend small">
                    <i class="fas fa-arrow-up me-1"></i>
                    <span>+8% from last week</span>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="stat-card p-4 rounded bg-indigo text-white shadow-sm h-100" style="background: linear-gradient(135deg, var(--terracotta-orange), var(--deep-indigo));">
                <h3 class="stat-number display-5 fw-bold">28</h3>
                <p class="mb-2">Active Organizers</p>
                <div class="stat-trend small">
                    <i class="fas fa-users me-1"></i>
                    <span>Community growing</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Recent Activity -->
        <div class="col-lg-8 mb-4">
            <div class="admin-content bg-white p-4 rounded shadow-sm">
                <h4 class="mb-4">
                    <i class="fas fa-clock text-terracotta me-2"></i>Recent Activity
                </h4>
                
                <div class="activity-feed">
                    <div class="activity-item d-flex align-items-center mb-3 p-3 rounded" style="background-color: var(--cream-white);">
                        <div class="activity-icon bg-success text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Event Approved: "Traditional Moroccan Music Concert"</h6>
                            <small class="text-muted">Approved by Admin User • 2 hours ago</small>
                        </div>
                    </div>
                    
                    <div class="activity-item d-flex align-items-center mb-3 p-3 rounded" style="background-color: var(--cream-white);">
                        <div class="activity-icon bg-primary text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">New Event Submitted: "Berber Carpet Weaving Workshop"</h6>
                            <small class="text-muted">Submitted by Artisan Guild • 4 hours ago</small>
                        </div>
                    </div>
                    
                    <div class="activity-item d-flex align-items-center mb-3 p-3 rounded" style="background-color: var(--cream-white);">
                        <div class="activity-icon bg-warning text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            <i class="fas fa-edit"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-1">Event Updated: "Contemporary Art Exhibition"</h6>
                            <small class="text-muted">Updated by Gallery Moderne • 6 hours ago</small>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-outline-primary">View All Activity</a>
                </div>
            </div>
        </div>

        <!-- Quick Actions & Alerts -->
        <div class="col-lg-4">
            <div class="admin-content bg-white p-4 rounded shadow-sm mb-4">
                <h5 class="mb-3">
                    <i class="fas fa-bolt text-ochre me-2"></i>Quick Actions
                </h5>
                <div class="d-grid gap-2">
                    <a href="{{ url('/admin/approve') }}" class="btn btn-terracotta text-white">
                        <i class="fas fa-check-circle me-2"></i>Review Pending (5)
                    </a>
                    <a href="{{ url('/admin/events') }}" class="btn btn-outline-primary">
                        <i class="fas fa-plus me-2"></i>Add New Event
                    </a>
                    <a href="#" class="btn btn-outline-secondary">
                        <i class="fas fa-file-export me-2"></i>Export Events Data
                    </a>
                </div>
            </div>

            <div class="admin-content bg-white p-4 rounded shadow-sm">
                <h5 class="mb-3">
                    <i class="fas fa-star text-ochre me-2"></i>Top Organizers
                </h5>
                <div class="organizer-list">
                    <div class="organizer-item d-flex align-items-center mb-3">
                        <div class="organizer-avatar bg-terracotta text-white rounded-circle me-3 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                            MC
                        </div>
                        <div class="flex-grow-1">
                            <h6 class="mb-0">Marrakech Cultural Center</h6>
                            <small class="text-muted">12 events this month</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
