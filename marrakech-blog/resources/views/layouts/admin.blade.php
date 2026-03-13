<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel - Marrakech Cultural Scene')</title>
    <meta name="description" content="@yield('meta_description', 'Administrative dashboard for managing cultural events.')">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    
    @yield('styles')
</head>
<body>
    <!-- Admin Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-indigo">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/admin') }}" style="padding-top: 0; padding-bottom: 0;">
                <img src="{{ asset('images/logo.png') }}" alt="Marrakech Cultural Scene Admin Logo" style="height: 60px; object-fit: contain;">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#adminNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="adminNavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin') ? 'active' : '' }}" href="{{ url('/admin') }}">
                            <i class="fas fa-chart-pie me-1"></i>Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/events') ? 'active' : '' }}" href="{{ url('/admin/events') }}">
                            <i class="fas fa-calendar-alt me-1"></i>Manage Events
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/approve') ? 'active' : '' }}" href="{{ url('/admin/approve') }}">
                            <i class="fas fa-check-circle me-1"></i>Approve Events
                            <span class="badge bg-terracotta ms-1">5</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('admin/delete') ? 'active' : '' }}" href="{{ url('/admin/delete') }}">
                            <i class="fas fa-trash me-1"></i>Remove Events
                        </a>
                    </li>
                </ul>
                
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="adminUserDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-circle me-1"></i>Admin User
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Profile Settings</a></li>
                            <li><a class="dropdown-item" href="#">System Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ url('/') }}">View Public Site</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Admin Header -->
    <div class="admin-header py-4 bg-light border-bottom">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>@yield('page_title', 'Dashboard Overview')</h1>
                    <p class="mb-0">@yield('page_subtitle', 'Manage Marrakech\'s cultural events and community engagement')</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="current-time">
                        <small>Last updated: <span id="currentTime">{{ date('m/d/Y, h:i:s A') }}</span></small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Dashboard Content -->
    <main class="container-fluid py-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="admin-footer py-3 bg-light border-top mt-auto">
        <div class="container-fluid text-center">
            <small class="text-muted">&copy; {{ date('Y') }} Marrakech Cultural Scene Admin Panel. All rights reserved.</small>
        </div>
    </footer>

    <!-- Bootstrap 5 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script src="{{ asset('js/main.js') }}"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Update current time if present
            const timeElement = document.getElementById('currentTime');
            if (timeElement) {
                function updateTime() {
                    const now = new Date();
                    timeElement.textContent = now.toLocaleString();
                }
                setInterval(updateTime, 60000); // Update every minute
            }
        });
    </script>
    @yield('scripts')
</body>
</html>
