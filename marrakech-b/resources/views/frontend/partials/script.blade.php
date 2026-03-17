   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Video Controls
        const video = document.querySelector('.hero-video');
        const muteBtn = document.getElementById('muteBtn');
        const playPauseBtn = document.getElementById('playPauseBtn');
        let isMuted = true;
        let isPlaying = true;

        muteBtn.addEventListener('click', () => {
            isMuted = !isMuted;
            video.muted = isMuted;
            muteBtn.innerHTML = isMuted ? '<i class="fas fa-volume-mute"></i>' : '<i class="fas fa-volume-up"></i>';
            muteBtn.style.background = isMuted ? 'rgba(255,255,255,0.1)' : 'var(--terracotta)';
        });

        playPauseBtn.addEventListener('click', () => {
            if (isPlaying) {
                video.pause();
                playPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
            } else {
                video.play();
                playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
            }
            isPlaying = !isPlaying;
        });

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

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Newsletter form handling
        document.querySelector('.newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const input = this.querySelector('input');
            if (input.value) {
                const btn = this.querySelector('button');
                const originalIcon = btn.innerHTML;
                btn.innerHTML = '<i class="fas fa-check"></i>';
                btn.style.background = '#28a745';
                input.value = '';

                setTimeout(() => {
                    btn.innerHTML = originalIcon;
                    btn.style.background = '';
                }, 2000);
            }
        });

        // Parallax effect for hero video on scroll
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const heroVideo = document.querySelector('.hero-video');
            if (heroVideo && scrolled < window.innerHeight) {
                heroVideo.style.transform = `translate(-50%, -50%) translateY(${scrolled * 0.5}px)`;
            }
        });
    </script>