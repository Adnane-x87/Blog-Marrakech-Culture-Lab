@extends('layouts.app')

@section('title', 'Cultural Events in Marrakech - Browse All Events')
@section('description', 'Browse all cultural events in Marrakech. Filter by category, date, and location.')

@section('content')
<!-- Page Header -->
<section class="py-5 mt-5" style="background: linear-gradient(135deg, var(--deep-indigo), var(--terracotta-orange)); color: white;">
    <div class="container">
        <div class="text-center">
            <h1 class="display-4 mb-3">Cultural Events in Marrakech</h1>
            <p class="lead">Discover inspiring cultural experiences happening in Morocco's red city</p>
        </div>
    </div>
</section>

<!-- Search and Filter Section -->
<section class="py-4 bg-cream">
    <div class="container">
        <form action="{{ route('events.index') }}" method="GET">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-3 mb-lg-0">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="fas fa-search"></i>
                        </span>
                        <input type="text" class="form-control" name="search" id="searchInput" placeholder="Search events..." value="{{ request('search') }}">
                    </div>
                </div>
                <div class="col-lg-3 mb-3 mb-lg-0">
                    <input type="date" class="form-control" name="date" id="dateFilter" value="{{ request('date') }}">
                </div>
                <div class="col-lg-3">
                    <select class="form-select" name="location" id="locationFilter">
                        <option value="">All Locations</option>
                        <option value="medina" {{ request('location') == 'medina' ? 'selected' : '' }}>Medina</option>
                        <option value="gueliz" {{ request('location') == 'gueliz' ? 'selected' : '' }}>Gueliz</option>
                        <option value="hivernage" {{ request('location') == 'hivernage' ? 'selected' : '' }}>Hivernage</option>
                        <option value="palmery" {{ request('location') == 'palmery' ? 'selected' : '' }}>Palmery</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-primary">Apply Filters</button>
                    <a href="{{ route('events.index') }}" class="btn btn-secondary">Reset</a>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- Filter Buttons -->
<section class="py-4">
    <div class="container">
        <div class="filter-buttons text-center">
            <a href="{{ route('events.index') }}" class="filter-btn {{ !request('category') ? 'active' : '' }}">
                <i class="fas fa-th-large me-2"></i>All Events
            </a>
            <a href="{{ route('events.index', ['category' => 'music']) }}" class="filter-btn {{ request('category') == 'music' ? 'active' : '' }}">
                <i class="fas fa-music me-2"></i>Music
            </a>
            <a href="{{ route('events.index', ['category' => 'exhibition']) }}" class="filter-btn {{ request('category') == 'exhibition' ? 'active' : '' }}">
                <i class="fas fa-palette me-2"></i>Art Exhibitions
            </a>
            <a href="{{ route('events.index', ['category' => 'theater']) }}" class="filter-btn {{ request('category') == 'theater' ? 'active' : '' }}">
                <i class="fas fa-theater-masks me-2"></i>Theater
            </a>
            <a href="{{ route('events.index', ['category' => 'workshop']) }}" class="filter-btn {{ request('category') == 'workshop' ? 'active' : '' }}">
                <i class="fas fa-hands me-2"></i>Workshops
            </a>
        </div>
    </div>
</section>

<!-- Events Grid -->
<section class="py-5">
    <div class="container">
        <div class="row" id="eventsGrid">
            @forelse($events as $event)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="event-card" data-category="{{ $event->category }}" data-date="{{ $event->date }}" data-location="{{ $event->location }}">
                    <img src="{{ asset($event->image) }}" alt="{{ $event->title }}">
                    <div class="card-body">
                        <div class="event-date">
                            <i class="fas fa-calendar me-2"></i>{{ $event->date->format('F d, Y - g:i A') }}
                        </div>
                        <span class="event-category">{{ ucfirst($event->category) }}</span>
                        <h3 class="card-title">{{ $event->title }}</h3>
                        <p class="card-text">{{ Str::limit($event->description, 120) }}</p>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <small class="text-muted">
                                <i class="fas fa-map-marker-alt me-1"></i>{{ $event->venue }}
                            </small>
                            <small class="text-success fw-bold">
                                <i class="fas fa-ticket-alt me-1"></i>{{ $event->price > 0 ? $event->price . ' MAD' : 'Free Entry' }}
                            </small>
                        </div>
                        <a href="{{ route('events.show', $event->id) }}" class="btn btn-primary w-100">
                            <i class="fas fa-eye me-2"></i>View Details
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p>No events found matching your criteria.</p>
            </div>
            @endforelse
        </div>
        
        <!-- Pagination -->
        <div class="d-flex justify-content-center mt-4">
            {{ $events->links() }}
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-5 bg-indigo text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h3>Never Miss a Cultural Event</h3>
                <p class="mb-0">Subscribe to our newsletter and get notified about upcoming cultural events.</p>
            </div>
            <div class="col-lg-4">
                <form action="{{ route('newsletter.subscribe') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                        <button class="btn btn-terracotta" type="submit">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection