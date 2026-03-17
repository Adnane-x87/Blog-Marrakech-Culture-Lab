  <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="brand-logo" href="index.html">
                <div class="logo-icon">
                    <svg class="logo-svg" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <!-- Decorative outer ring with Moroccan pattern -->
                        <circle cx="50" cy="50" r="48" fill="none" stroke="#D4A373" stroke-width="1" opacity="0.5"/>
                        <circle cx="50" cy="50" r="44" fill="none" stroke="#C65D3B" stroke-width="2"/>

                        <!-- Inner geometric pattern -->
                        <path d="M50 10 L60 35 L85 35 L65 50 L75 75 L50 60 L25 75 L35 50 L15 35 L40 35 Z" 
                              fill="#C65D3B" opacity="0.9"/>

                        <!-- Center element -->
                        <circle cx="50" cy="50" r="12" fill="#2E3A59"/>
                        <circle cx="50" cy="50" r="6" fill="#D4A373"/>

                        <!-- Decorative corner elements -->
                        <path d="M20 20 L25 25 M80 20 L75 25 M20 80 L25 75 M80 80 L75 75" 
                              stroke="#D4A373" stroke-width="2" stroke-linecap="round"/>

                        <!-- Arches representing Moroccan architecture -->
                        <path d="M30 70 Q30 55 40 55 Q50 55 50 70" fill="none" stroke="#2E3A59" stroke-width="2" opacity="0.6"/>
                        <path d="M50 70 Q50 55 60 55 Q70 55 70 70" fill="none" stroke="#2E3A59" stroke-width="2" opacity="0.6"/>
                    </svg>
                </div>
                <div class="logo-text-wrapper">
                    <span class="logo-main">Marrakech</span>
                    <span class="logo-sub">Cultural Scene</span>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">
                            <i class="fas fa-home me-1"></i>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="events.html">
                            <i class="fas fa-calendar-alt me-1"></i>Events
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">
                            <i class="fas fa-info-circle me-1"></i>About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="submit-event.html">
                            <i class="fas fa-plus-circle me-1"></i>Submit Event
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-th-large me-1"></i>Categories
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="category.html?cat=music"><i class="fas fa-music me-2" style="color: var(--terracotta)"></i>Music</a></li>
                            <li><a class="dropdown-item" href="category.html?cat=exhibition"><i class="fas fa-palette me-2" style="color: var(--terracotta)"></i>Art Exhibitions</a></li>
                            <li><a class="dropdown-item" href="category.html?cat=theater"><i class="fas fa-theater-masks me-2" style="color: var(--terracotta)"></i>Theater</a></li>
                            <li><a class="dropdown-item" href="category.html?cat=workshop"><i class="fas fa-hands me-2" style="color: var(--terracotta)"></i>Workshops</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>