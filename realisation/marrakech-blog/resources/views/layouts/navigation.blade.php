<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <i class="fas fa-mosque text-terracotta me-2"></i>
            Marrakech Cultural Scene
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        <i class="fas fa-home me-1"></i>Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('events.*') ? 'active' : '' }}" href="{{ route('events.index') }}">
                        <i class="fas fa-calendar-alt me-1"></i>Events
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                        <i class="fas fa-info-circle me-1"></i>About
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('events.submit') ? 'active' : '' }}" href="{{ route('events.submit') }}">
                        <i class="fas fa-plus-circle me-1"></i>Submit Event
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::routeIs('category.*') ? 'active' : '' }}" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-th-large me-1"></i>Categories
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('category.show', 'music') }}">Music</a></li>
                        <li><a class="dropdown-item" href="{{ route('category.show', 'exhibition') }}">Art Exhibitions</a></li>
                        <li><a class="dropdown-item" href="{{ route('category.show', 'theater') }}">Theater</a></li>
                        <li><a class="dropdown-item" href="{{ route('category.show', 'workshop') }}">Workshops</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>