// Portfolio Page JavaScript

// Wait for DOM to be fully loaded
document.addEventListener('DOMContentLoaded', function() {
    console.log('Portfolio page loaded, initializing...');

    // Smooth scrolling for anchor links
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const href = this.getAttribute('href');
                if (href === '#' || !href) return;
                
                const target = document.querySelector(href);
                if (target) {
                    const offset = 80; // Account for fixed headers if any
                    const targetPosition = target.offsetTop - offset;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }

    // Intersection Observer for scroll animations
    function initScrollAnimations() {
        if ('IntersectionObserver' in window) {
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                        entry.target.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
                        // Stop observing once animated
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Observe all animated elements
            const animatedElements = document.querySelectorAll('.slide-in-left, .slide-in-right, .text-reveal');
            animatedElements.forEach(el => {
                // Set initial state
                el.style.opacity = '0';
                if (el.classList.contains('slide-in-left')) {
                    el.style.transform = 'translateX(-50px)';
                } else if (el.classList.contains('slide-in-right')) {
                    el.style.transform = 'translateX(50px)';
                } else if (el.classList.contains('text-reveal')) {
                    el.style.transform = 'translateY(30px)';
                }
                observer.observe(el);
            });
        } else {
            // Fallback for browsers without IntersectionObserver
            document.querySelectorAll('.slide-in-left, .slide-in-right, .text-reveal').forEach(el => {
                el.style.opacity = '1';
                el.style.transform = 'none';
            });
        }
    }

    // Initialize hover effects
    function initHoverEffects() {
        // Add transition to hover elements
        const hoverElements = document.querySelectorAll('.hover-lift, .hover-scale, .hover-rotate, .border-glow');
        hoverElements.forEach(el => {
            el.style.transition = 'all 0.3s ease';
        });
    }

    // Parallax effect for hero background
    function initHeroParallax() {
        const hero = document.querySelector('.introduction-profile-background');
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        if (!hero || prefersReducedMotion) {
            return;
        }

        const updateParallax = () => {
            const scrollY = window.scrollY || document.documentElement.scrollTop;
            hero.style.setProperty('--parallax-offset', `${scrollY}px`);
        };

        updateParallax();
        window.addEventListener('scroll', updateParallax, { passive: true });
        window.addEventListener('resize', updateParallax);
    }

    // Initialize all functions
    initSmoothScroll();
    initScrollAnimations();
    initHoverEffects();
    initHeroParallax();

    // Image loading handler
    const images = document.querySelectorAll('img');
    images.forEach(img => {
        if (img.complete) {
            img.style.opacity = '1';
        } else {
            img.addEventListener('load', function() {
                this.style.opacity = '1';
                this.style.transition = 'opacity 0.5s ease';
            });
            img.style.opacity = '0';
        }
    });

    console.log('Portfolio page initialized successfully');
});

// Handle page visibility for animations
document.addEventListener('visibilitychange', function() {
    if (!document.hidden) {
        // Re-trigger animations if needed
        const animatedElements = document.querySelectorAll('.slide-in-left, .slide-in-right, .text-reveal');
        animatedElements.forEach(el => {
            if (el.style.opacity === '0') {
                el.style.opacity = '1';
                el.style.transform = 'none';
            }
        });
    }
});

