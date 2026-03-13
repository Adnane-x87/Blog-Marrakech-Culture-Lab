@extends('layouts.admin')

@section('title', 'Manage Events - Admin Panel')
@section('page_title', 'Manage Events')
@section('page_subtitle', 'View, edit, and organize all cultural events on the platform')

@section('content')
    <div class="admin-content bg-white p-4 rounded shadow-sm">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="mb-0">All Events</h4>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEventModal">
                <i class="fas fa-plus me-2"></i>Add New Event
            </button>
        </div>

        <!-- Filters -->
        <div class="row mb-4">
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0">
                        <i class="fas fa-search text-muted"></i>
                    </span>
                    <input type="text" class="form-control border-start-0" placeholder="Search events...">
                </div>
            </div>
            <div class="col-md-3 mb-3 mb-md-0">
                <select class="form-select">
                    <option value="">All Categories</option>
                    <option value="music">Music</option>
                    <option value="exhibition">Exhibition</option>
                    <option value="theater">Theater</option>
                    <option value="workshop">Workshop</option>
                </select>
            </div>
            <div class="col-md-3 mb-3 mb-md-0">
                <select class="form-select">
                    <option value="">Sort By</option>
                    <option value="date-desc">Date (Newest)</option>
                    <option value="date-asc">Date (Oldest)</option>
                    <option value="title">Title (A-Z)</option>
                </select>
            </div>
            <div class="col-md-2">
                <button class="btn btn-outline-secondary w-100">
                    <i class="fas fa-filter me-2"></i>Filter
                </button>
            </div>
        </div>

        <!-- Events Table -->
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col" style="width: 50px;">
                            <input class="form-check-input" type="checkbox" id="selectAll">
                        </th>
                        <th scope="col">Event Details</th>
                        <th scope="col">Category</th>
                        <th scope="col">Registration</th>
                        <th scope="col">Status</th>
                        <th scope="col" class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Event Row 1 -->
                    <tr>
                        <td>
                            <input class="form-check-input" type="checkbox">
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('images/music_concert_6.jpeg') }}" alt="Event thumbnail" class="rounded me-3" style="width: 50px; height: 50px; object-fit: cover;">
                                <div>
                                    <h6 class="mb-0">Traditional Moroccan Music Concert</h6>
                                    <small class="text-muted">Dec 15, 2024 • Cultural Center</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-indigo-subtle text-indigo px-3">Music</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="progress flex-grow-1 me-2" style="height: 6px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 65%;"></div>
                                </div>
                                <small>78/120</small>
                            </div>
                        </td>
                        <td><span class="badge bg-success-subtle text-success px-3">Active</span></td>
                        <td class="text-end">
                            <div class="btn-group btn-group-sm">
                                <a href="{{ url('/event-details') }}" class="btn btn-outline-secondary" title="View">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <button type="button" class="btn btn-outline-secondary" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button type="button" class="btn btn-outline-danger" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    
                    <!-- Event Row 2 -->
                    <tr>
                        <td>
                            <input class="form-check-input" type="checkbox">
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('images/art_exhibition_2.jpg') }}" alt="Event thumbnail" class="rounded me-3" style="width: 50px; height: 50px; object-fit: cover;">
                                <div>
                                    <h6 class="mb-0">Sculptures of the Atlas</h6>
                                    <small class="text-muted">Jan 10, 2025 • Gallery Moderne</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="badge bg-indigo-subtle text-indigo px-3">Exhibition</span></td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="progress flex-grow-1 me-2" style="height: 6px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 15%;"></div>
                                </div>
                                <small>12/80</small>
                            </div>
                        </td>
                        <td><span class="badge bg-warning-subtle text-warning px-3">Pending</span></td>
                        <td class="text-end">
                            <div class="btn-group btn-group-sm">
                                <a href="#" class="btn btn-outline-secondary" title="View">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <button type="button" class="btn btn-outline-secondary" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button type="button" class="btn btn-outline-danger" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <nav class="mt-4">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a></li>
            </ul>
        </nav>
    </div>
@endsection
