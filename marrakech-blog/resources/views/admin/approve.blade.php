@extends('layouts.admin')

@section('title', 'Review Pending Events - Admin Panel')
@section('page_title', 'Approve Events')
@section('page_subtitle', 'Review pending cultural event submissions from the community')

@section('content')
    <div class="admin-content bg-white p-4 rounded shadow-sm">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">Pending Approvals</h4>
            <span class="badge bg-terracotta text-white px-3">5 Events Waiting</span>
        </div>

        <!-- Pending Events List -->
        <div class="row">
            <!-- Event 1 -->
            <div class="col-12 mb-4">
                <div class="card border-0 bg-cream-white shadow-sm">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-md-3 mb-3 mb-md-0">
                                <img src="{{ asset('images/cultural_workshop_1.jpg') }}" alt="Event image" class="img-fluid rounded shadow-sm">
                            </div>
                            <div class="col-lg-7 col-md-6 mb-3 mb-md-0">
                                <div class="d-flex align-items-center mb-2">
                                    <span class="badge bg-indigo-subtle text-indigo me-2">Workshop</span>
                                    <small class="text-muted">Submitted on: Dec 1, 2024</small>
                                </div>
                                <h5 class="card-title">Berber Carpet Weaving Workshop</h5>
                                <p class="card-text small text-muted mb-2">
                                    <i class="fas fa-map-marker-alt me-1"></i>Artisan Guild, Medina
                                </p>
                                <p class="card-text small mb-0">Learn the ancient art of carpet weaving from Saharan master artisans. Participants will discover traditional techniques and symbolism...</p>
                            </div>
                            <div class="col-lg-3 col-md-3 text-md-end">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-success">
                                        <i class="fas fa-check me-2"></i>Approve
                                    </button>
                                    <button class="btn btn-outline-danger">
                                        <i class="fas fa-times me-2"></i>Reject
                                    </button>
                                    <button class="btn btn-outline-secondary btn-sm border-0">
                                        <i class="fas fa-info-circle me-1"></i>View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event 2 -->
            <div class="col-12 mb-4">
                <div class="card border-0 bg-cream-white shadow-sm">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-md-3 mb-3 mb-md-0">
                                <img src="{{ asset('images/theater_performance_0.jpg') }}" alt="Event image" class="img-fluid rounded shadow-sm">
                            </div>
                            <div class="col-lg-7 col-md-6 mb-3 mb-md-0">
                                <div class="d-flex align-items-center mb-2">
                                    <span class="badge bg-indigo-subtle text-indigo me-2">Theater</span>
                                    <small class="text-muted">Submitted on: Dec 3, 2024</small>
                                </div>
                                <h5 class="card-title">Shadows of the Atlas</h5>
                                <p class="card-text small text-muted mb-2">
                                    <i class="fas fa-map-marker-alt me-1"></i>Royal Theater Marrakech
                                </p>
                                <p class="card-text small mb-0">A contemporary theatrical performance exploring the mythology and folklore of the High Atlas mountains through shadow play and music...</p>
                            </div>
                            <div class="col-lg-3 col-md-3 text-md-end">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-success">
                                        <i class="fas fa-check me-2"></i>Approve
                                    </button>
                                    <button class="btn btn-outline-danger">
                                        <i class="fas fa-times me-2"></i>Reject
                                    </button>
                                    <button class="btn btn-outline-secondary btn-sm border-0">
                                        <i class="fas fa-info-circle me-1"></i>View Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bulk Approve Button -->
        <div class="text-center pt-3 mt-3 border-top">
            <button class="btn btn-terracotta text-white btn-lg">
                <i class="fas fa-check-double me-2"></i>Approve All Pending
            </button>
        </div>
    </div>
@endsection
