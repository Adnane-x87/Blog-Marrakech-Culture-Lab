  <style>
        :root {
            --terracotta: #C65D3B;
            --terracotta-dark: #A84B2F;
            --ochre: #D4A373;
            --ochre-light: #E9C496;
            --indigo: #2E3A59;
            --indigo-light: #3F4F75;
            --cream: #FAF7F2;
            --sand: #F5F1E8;
            --charcoal: #2C2C2C;
            --white: #FFFFFF;

            --font-serif: 'Playfair Display', serif;
            --font-sans: 'Inter', sans-serif;

            --transition-smooth: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            --shadow-soft: 0 10px 40px rgba(0,0,0,0.1);
            --shadow-lifted: 0 20px 60px rgba(0,0,0,0.15);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-sans);
            background-color: var(--cream);
            color: var(--charcoal);
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: var(--font-serif);
            font-weight: 600;
        }

        /* Custom Logo Styles */
        .brand-logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
            transition: var(--transition-smooth);
        }

        .logo-icon {
            width: 45px;
            height: 45px;
            position: relative;
            flex-shrink: 0;
        }

        .logo-svg {
            width: 100%;
            height: 100%;
            filter: drop-shadow(0 2px 4px rgba(198, 93, 59, 0.3));
            transition: var(--transition-smooth);
        }

        .brand-logo:hover .logo-svg {
            transform: rotate(5deg) scale(1.1);
            filter: drop-shadow(0 4px 8px rgba(198, 93, 59, 0.4));
        }

        .logo-text-wrapper {
            display: flex;
            flex-direction: column;
            line-height: 1.2;
        }

        .logo-main {
            font-family: var(--font-serif);
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--indigo);
            letter-spacing: 0.5px;
        }

        .logo-sub {
            font-size: 0.65rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: var(--terracotta);
            font-weight: 600;
        }

        /* Navigation */
        .navbar {
            background: rgba(250, 247, 242, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(198, 93, 59, 0.1);
            padding: 0.75rem 0;
            transition: var(--transition-smooth);
        }

        .navbar.scrolled {
            padding: 0.5rem 0;
            box-shadow: 0 4px 30px rgba(0,0,0,0.1);
        }

        .nav-link {
            font-weight: 500;
            color: var(--indigo) !important;
            position: relative;
            padding: 0.5rem 1rem !important;
            margin: 0 0.25rem;
            transition: var(--transition-smooth);
            font-size: 0.9rem;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--terracotta);
            transition: var(--transition-smooth);
            transform: translateX(-50%);
        }

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 80%;
        }

        .nav-link:hover {
            color: var(--terracotta) !important;
        }

        .dropdown-menu {
            border: none;
            box-shadow: var(--shadow-soft);
            border-radius: 12px;
            padding: 0.5rem;
            background: var(--white);
            margin-top: 0.5rem;
        }

        .dropdown-item {
            border-radius: 8px;
            padding: 0.75rem 1rem;
            transition: var(--transition-smooth);
            font-size: 0.9rem;
        }

        .dropdown-item:hover {
            background: var(--cream);
            color: var(--terracotta);
            transform: translateX(5px);
        }

        /* Hero Section with Video */
        .hero-section {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            overflow: hidden;
            background: var(--indigo);
        }

        .hero-video-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .hero-video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            transform: translate(-50%, -50%);
            object-fit: cover;
            opacity: 0.8;
        }

        .hero-video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                135deg,
                rgba(46, 58, 89, 0.85) 0%,
                rgba(46, 58, 89, 0.6) 50%,
                rgba(198, 93, 59, 0.4) 100%
            );
            z-index: 2;
        }

        .hero-content {
            position: relative;
            z-index: 3;
            padding: 8rem 0 4rem;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            background: rgba(212, 163, 115, 0.2);
            color: var(--ochre-light);
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 500;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 2rem;
            border: 1px solid rgba(212, 163, 115, 0.3);
            animation: fadeInUp 0.8s ease;
            backdrop-filter: blur(10px);
        }

        .hero-badge::before {
            content: '';
            width: 8px;
            height: 8px;
            background: var(--terracotta);
            border-radius: 50%;
            margin-right: 0.75rem;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.7; transform: scale(1.2); }
        }

        .hero-title {
            font-size: clamp(2.5rem, 6vw, 5rem);
            color: var(--white);
            line-height: 1.1;
            margin-bottom: 1.5rem;
            animation: fadeInUp 0.8s ease 0.2s both;
            text-shadow: 0 4px 20px rgba(0,0,0,0.3);
        }

        .hero-title span {
            color: var(--ochre);
            font-style: italic;
            position: relative;
            display: inline-block;
        }

        .hero-title span::after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 0;
            width: 100%;
            height: 8px;
            background: rgba(198, 93, 59, 0.3);
            z-index: -1;
            transform: skewX(-10deg);
        }

        .hero-text {
            font-size: 1.25rem;
            color: rgba(255,255,255,0.95);
            max-width: 600px;
            margin-bottom: 2.5rem;
            line-height: 1.8;
            animation: fadeInUp 0.8s ease 0.4s both;
            font-weight: 300;
        }

        .hero-buttons {
            animation: fadeInUp 0.8s ease 0.6s both;
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .btn-primary-custom {
            background: var(--terracotta);
            border: 2px solid var(--terracotta);
            color: var(--white);
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            letter-spacing: 1px;
            transition: var(--transition-smooth);
            text-transform: uppercase;
            font-size: 0.875rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            position: relative;
            overflow: hidden;
        }

        .btn-primary-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: 0.5s;
        }

        .btn-primary-custom:hover::before {
            left: 100%;
        }

        .btn-primary-custom:hover {
            background: var(--terracotta-dark);
            border-color: var(--terracotta-dark);
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(198, 93, 59, 0.4);
            color: var(--white);
        }

        .btn-outline-custom {
            background: transparent;
            border: 2px solid rgba(255,255,255,0.5);
            color: var(--white);
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            letter-spacing: 1px;
            transition: var(--transition-smooth);
            text-transform: uppercase;
            font-size: 0.875rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-outline-custom:hover {
            background: var(--white);
            color: var(--indigo);
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(255,255,255,0.2);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Video Controls */
        .video-controls {
            position: absolute;
            bottom: 2rem;
            right: 2rem;
            z-index: 4;
            display: flex;
            gap: 1rem;
        }

        .video-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.3);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition-smooth);
            backdrop-filter: blur(10px);
        }

        .video-btn:hover {
            background: rgba(255,255,255,0.2);
            transform: scale(1.1);
        }

        .scroll-indicator {
            position: absolute;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
            z-index: 4;
            color: var(--white);
            opacity: 0.7;
            animation: bounce 2s infinite;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
            transition: opacity 0.3s;
        }

        .scroll-indicator:hover {
            opacity: 1;
        }

        .scroll-indicator span {
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateX(-50%) translateY(0); }
            40% { transform: translateX(-50%) translateY(-10px); }
            60% { transform: translateX(-50%) translateY(-5px); }
        }

        /* Section Styling */
        .section-padding {
            padding: 6rem 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title h2 {
            font-size: 3rem;
            color: var(--indigo);
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: var(--terracotta);
        }

        .section-title p {
            color: #666;
            font-size: 1.1rem;
            max-width: 600px;
            margin: 1.5rem auto 0;
        }

        /* Event Cards */
        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
        }

        .event-card {
            background: var(--white);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-soft);
            transition: var(--transition-smooth);
            position: relative;
            border: 1px solid rgba(0,0,0,0.05);
        }

        .event-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lifted);
        }

        .event-card-image {
            position: relative;
            height: 250px;
            overflow: hidden;
        }

        .event-card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .event-card:hover .event-card-image img {
            transform: scale(1.1);
        }

        .event-badge {
            position: absolute;
            top: 1rem;
            left: 1rem;
            background: var(--terracotta);
            color: var(--white);
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            z-index: 2;
        }

        .event-date-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: var(--white);
            color: var(--indigo);
            padding: 0.75rem 1rem;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            z-index: 2;
            min-width: 60px;
        }

        .event-date-badge .day {
            display: block;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
            font-family: var(--font-serif);
        }

        .event-date-badge .month {
            display: block;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--terracotta);
            font-weight: 600;
        }

        .event-card-body {
            padding: 1.5rem;
        }

        .event-category {
            display: inline-block;
            color: var(--terracotta);
            font-size: 0.875rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0.5rem;
        }

        .event-card-title {
            font-size: 1.5rem;
            color: var(--indigo);
            margin-bottom: 0.75rem;
            transition: color 0.3s ease;
        }

        .event-card:hover .event-card-title {
            color: var(--terracotta);
        }

        .event-card-text {
            color: #666;
            line-height: 1.7;
            margin-bottom: 1.5rem;
        }

        .event-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 1rem;
            border-top: 1px solid rgba(0,0,0,0.05);
        }

        .event-location {
            color: #888;
            font-size: 0.875rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-view-details {
            background: transparent;
            color: var(--terracotta);
            border: 2px solid var(--terracotta);
            padding: 0.5rem 1.25rem;
            border-radius: 50px;
            font-size: 0.875rem;
            font-weight: 600;
            transition: var(--transition-smooth);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-view-details:hover {
            background: var(--terracotta);
            color: var(--white);
            transform: translateX(5px);
        }

        /* Cultural Highlights */
        .bg-sand {
            background: var(--sand);
            position: relative;
            overflow: hidden;
        }

        .bg-sand::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(198, 93, 59, 0.05) 0%, transparent 70%);
            border-radius: 50%;
        }

        .highlight-card {
            text-align: center;
            padding: 3rem 2rem;
            background: var(--white);
            border-radius: 20px;
            box-shadow: var(--shadow-soft);
            transition: var(--transition-smooth);
            position: relative;
            overflow: hidden;
            height: 100%;
        }

        .highlight-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--terracotta), var(--ochre));
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .highlight-card:hover::before {
            transform: scaleX(1);
        }

        .highlight-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lifted);
        }

        .highlight-icon {
            width: 100px;
            height: 100px;
            margin: 0 auto 1.5rem;
            background: linear-gradient(135deg, var(--terracotta) 0%, var(--ochre) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 2.5rem;
            position: relative;
            overflow: hidden;
        }

        .highlight-icon::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                45deg,
                transparent 30%,
                rgba(255,255,255,0.3) 50%,
                transparent 70%
            );
            transform: rotate(45deg) translateY(-100%);
            transition: transform 0.6s;
        }

        .highlight-card:hover .highlight-icon::after {
            transform: rotate(45deg) translateY(100%);
        }

        .highlight-card h4 {
            color: var(--indigo);
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .highlight-card p {
            color: #666;
            line-height: 1.8;
            margin: 0;
        }

        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, var(--indigo) 0%, var(--indigo-light) 100%);
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            opacity: 0.5;
        }

        .cta-content {
            position: relative;
            z-index: 1;
        }

        .cta-content h3 {
            color: var(--white);
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .cta-content p {
            color: rgba(255,255,255,0.9);
            font-size: 1.1rem;
            margin: 0;
        }

        .btn-cta {
            background: var(--ochre);
            border: 2px solid var(--ochre);
            color: var(--indigo);
            padding: 1rem 2.5rem;
            border-radius: 50px;
            font-weight: 600;
            letter-spacing: 1px;
            transition: var(--transition-smooth);
            text-transform: uppercase;
            font-size: 0.875rem;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
        }

        .btn-cta:hover {
            background: var(--ochre-light);
            border-color: var(--ochre-light);
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            color: var(--indigo);
        }

        /* Footer */
        .footer {
            background: var(--indigo);
            color: rgba(255,255,255,0.8);
            padding: 5rem 0 2rem;
            position: relative;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--terracotta), var(--ochre), var(--terracotta));
        }

        .footer h5 {
            color: var(--white);
            font-size: 1.25rem;
            margin-bottom: 1.5rem;
            font-family: var(--font-sans);
            font-weight: 600;
        }

        .footer p {
            line-height: 1.8;
            color: rgba(255,255,255,0.7);
        }

        .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 0.75rem;
        }

        .footer-links a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            transition: var(--transition-smooth);
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .footer-links a::before {
            content: '→';
            opacity: 0;
            transform: translateX(-10px);
            transition: var(--transition-smooth);
            color: var(--ochre);
        }

        .footer-links a:hover {
            color: var(--ochre);
            transform: translateX(5px);
        }

        .footer-links a:hover::before {
            opacity: 1;
            transform: translateX(0);
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .social-links a {
            width: 45px;
            height: 45px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            transition: var(--transition-smooth);
            text-decoration: none;
        }

        .social-links a:hover {
            background: var(--terracotta);
            transform: translateY(-3px);
            color: var(--white);
        }

        .newsletter-form {
            position: relative;
        }

        .newsletter-form .form-control {
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.2);
            color: var(--white);
            padding: 0.75rem 1rem;
            border-radius: 50px;
            padding-right: 50px;
        }

        .newsletter-form .form-control::placeholder {
            color: rgba(255,255,255,0.5);
        }

        .newsletter-form .form-control:focus {
            background: rgba(255,255,255,0.15);
            border-color: var(--ochre);
            box-shadow: none;
            color: var(--white);
        }

        .newsletter-form button {
            position: absolute;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
            background: var(--terracotta);
            border: none;
            color: var(--white);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition-smooth);
        }

        .newsletter-form button:hover {
            background: var(--ochre);
            transform: translateY(-50%) scale(1.1);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 2rem;
            margin-top: 3rem;
        }

        .footer-bottom a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-bottom a:hover {
            color: var(--ochre);
        }

        /* Scroll Reveal Animation */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-buttons {
                flex-direction: column;
            }

            .btn-outline-custom {
                margin-left: 0;
            }

            .events-grid {
                grid-template-columns: 1fr;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .cta-content {
                text-align: center;
                margin-bottom: 2rem;
            }

            .cta-button-wrapper {
                text-align: center;
            }

            .video-controls {
                bottom: 5rem;
                right: 1rem;
            }

            .logo-main {
                font-size: 1.1rem;
            }

            .logo-sub {
                display: none;
            }
        }

        /* Loading Animation */
        .skeleton {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
        }

        @keyframes loading {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }
    </style>