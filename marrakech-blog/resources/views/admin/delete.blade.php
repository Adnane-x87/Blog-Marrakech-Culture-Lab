@extends('layouts.admin')

@section('title', 'Remove Events - Admin Panel')
@section('page_title', 'Remove Events')
@section('page_subtitle', 'Permanently delete or archive events from the platform')

@section('content')
    <div class="admin-content bg-white p-4 rounded shadow-sm">
        <div class="alert alert-danger mb-4">
            <h5 class="alert-heading">
                <i class="fas fa-exclamation-triangle me-2"></i>Caution: Permanent Action
            </h5>
            <p class="mb-0 small">Deleting an event is a permanent action and cannot be undone. All associated data, including registrations and comments, will be permanently removed. We recommend archiving events instead if you wish to keep a record.</p>
        </div>

        <!-- Deletion Queue -->
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Event Details</th>
                        <th scope="col">Reason for Removal</th>
                        <th scope="col">Deleted By</th>
                        <th scope="col" class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Deleted Item 1 -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="bg-light rounded me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    <i class="fas fa-image text-muted"></i>
                                </div>
                                <div class="text-muted">
                                    <h6 class="mb-0 text-decoration-line-through">Outdoor Festival (Cancelled)</h6>
                                    <small>Medina Square • Dec 5, 2024</small>
                                </div>
                            </div>
                        </td>
                        <td><span class="text-danger small">Weather Cancellation</span></td>
                        <td><small class="text-muted">System Auto-Archive</small></td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-secondary" title="Restore">
                                <i class="fas fa-undo"></i>
                            </button>
                            <button class="btn btn-sm btn-danger ms-2" title="Delete Permanently">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="text-center mt-4">
            <button class="btn btn-outline-danger">
                <i class="fas fa-trash-alt me-2"></i>Clear Deletion History
            </button>
        </div>
    </div>
@endsection
