<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SNAP MASTER - Photography Portfolio</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900" rel="stylesheet" />
            @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
<body>
    <!-- Hero Section -->
    <section class="hero-bg min-vh-100 d-flex align-items-center position-relative" style="z-index: 10;">
        <div class="container py-5">
            <div class="row align-items-center g-4">
                <!-- Left Side -->
                <div class="col-lg-6">
                    <h1 class="display-1 fw-black text-dark-green mb-4 text-reveal" style="font-size: clamp(3rem, 8vw, 6rem); line-height: 0.9;">
                        SNAP<br>MASTER
                    </h1>

                    <!-- Text Box 1 -->
                    <div class="bg-white bg-opacity-80 border border-4 border-dark-green rounded-4 p-4 mb-4 hover-lift border-glow slide-in-left stagger-1">
                        <p class="fs-5 fw-medium text-dark-green mb-3">
                            What makes my photography unique is the combination of technical expertise and a personal touch.
                        </p>
                        <div class="d-flex gap-3">
                            <div class="rounded-circle border border-4 border-dark-green d-flex align-items-center justify-content-center hover-rotate" style="width: 48px; height: 48px; cursor: pointer;">
                                <svg style="width: 24px; height: 24px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div class="rounded-circle border border-4 border-dark-green d-flex align-items-center justify-content-center hover-rotate" style="width: 48px; height: 48px; cursor: pointer;">
                                <svg style="width: 24px; height: 24px;" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                </svg>
                            </div>
                            <div class="rounded-circle border border-4 border-dark-green d-flex align-items-center justify-content-center hover-rotate" style="width: 48px; height: 48px; cursor: pointer;">
                                <svg style="width: 24px; height: 24px;" fill="currentColor" viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="10"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Text Box 2 -->
                    <div class="bg-white bg-opacity-80 border border-4 border-dark-green rounded-4 p-4 hover-lift border-glow slide-in-left stagger-2">
                        <p class="fs-5 fw-medium text-dark-green mb-3">
                            Immerse yourself in a world where each frame tells a tale, capturing the beauty of the ordinary and the extraordinary.
                        </p>
                        <div class="d-flex justify-content-center">
                            <div class="rounded-circle bg-dark-green d-flex align-items-center justify-content-center hover-scale" style="width: 48px; height: 48px; cursor: pointer;">
                                <svg style="width: 24px; height: 24px; color: var(--lime-green);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side - Main Image -->
                <div class="col-lg-6 slide-in-right stagger-3">
                    <div class="glitch-effect rounded-4 overflow-hidden hover-scale">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&h=800&fit=crop"
                             alt="Photographer"
                             class="w-100 h-auto object-fit-cover rounded-4">
                    </div>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="mt-5 d-flex flex-wrap justify-content-center gap-4 gap-md-5 fade-in stagger-4">
                <a href="#about" class="fs-4 fw-bold text-dark-green text-decoration-none hover-scale" style="transition: transform 0.3s;">About</a>
                <a href="#works" class="fs-4 fw-bold text-dark-green text-decoration-none hover-scale" style="transition: transform 0.3s;">Works</a>
                <a href="#gallery" class="fs-4 fw-bold text-dark-green text-decoration-none hover-scale" style="transition: transform 0.3s;">Gallery</a>
                <a href="#contact" class="fs-4 fw-bold text-dark-green text-decoration-none hover-scale" style="transition: transform 0.3s;">Contact</a>
                </nav>

            <!-- CTA Button -->
            <div class="mt-4 d-flex justify-content-center fade-in stagger-5">
                <a href="#about" class="d-inline-flex align-items-center gap-3 bg-dark-green text-lime-green px-5 py-3 rounded-pill fw-bold fs-5 text-decoration-none hover-lift border border-4 border-dark-green"
                   onmouseover="this.style.background='var(--lime-green)'; this.style.color='var(--dark-green)';"
                   onmouseout="this.style.background='var(--dark-green)'; this.style.color='var(--lime-green)';"
                   style="transition: all 0.3s;">
                    Learn More
                    <svg style="width: 24px; height: 24px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                    </svg>
                                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5 bg-dark-green">
        <div class="container py-5">
            <h2 class="display-1 fw-black text-lime-green text-center mb-5 text-reveal" style="font-size: clamp(3rem, 8vw, 6rem);">
                about
            </h2>

            <div class="row align-items-center g-5">
                <div class="col-lg-6 slide-in-left">
                    <p class="fs-4 text-white lh-lg">
                        Welcome to my world of visual storytelling. I am <strong class="text-lime-green">Hans Schumacher</strong>, a passionate photographer dedicated to freezing moments in time. With a keen eye for detail and a love for authentic emotions.
                    </p>
                </div>

                <div class="col-lg-6 position-relative d-flex justify-content-center align-items-center slide-in-right">
                    <div class="position-relative" style="width: 320px; height: 320px;">
                        <!-- Circular Text -->
                        <svg class="position-absolute top-0 start-0 w-100 h-100 circular-text" viewBox="0 0 200 200">
                            <defs>
                                <path id="circle" d="M 100, 100 m -75, 0 a 75,75 0 1,1 150,0 a 75,75 0 1,1 -150,0" />
                            </defs>
                            <text fill="#2D4031" font-size="12" font-weight="bold">
                                <textPath href="#circle" startOffset="0%">
                                    MY GEAR MY GEAR MY GEAR MY GEAR MY GEAR MY GEAR MY GEAR MY GEAR
                                </textPath>
                            </text>
                        </svg>

                        <!-- Center Circle -->
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <div class="rounded-circle bg-lime-green border border-8 border-dark-green d-flex align-items-center justify-content-center hover-rotate pulse-glow"
                                 style="width: 256px; height: 256px; margin-top: -128px; margin-left: -128px;">
                                <img src="https://images.unsplash.com/photo-1606983340126-99ab4feaa64a?w=300&h=300&fit=crop"
                                     alt="Camera"
                                     class="w-75 h-75 object-fit-contain">
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Arrows -->
                    <button class="position-absolute start-0 rounded-circle bg-dark-green border border-4 border-lime-green d-flex align-items-center justify-content-center hover-scale"
                            style="width: 48px; height: 48px; cursor: pointer; z-index: 10;">
                        <svg style="width: 24px; height: 24px; color: var(--lime-green);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button class="position-absolute end-0 rounded-circle bg-dark-green border border-4 border-lime-green d-flex align-items-center justify-content-center hover-scale"
                            style="width: 48px; height: 48px; cursor: pointer; z-index: 10;">
                        <svg style="width: 24px; height: 24px; color: var(--lime-green);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Works Section -->
    <section id="works" class="py-5 bg-dark-green">
        <div class="container py-5">
            <h2 class="display-1 fw-black text-lime-green text-center mb-4 text-reveal" style="font-size: clamp(3rem, 8vw, 6rem);">
                works
            </h2>

            <p class="fs-4 text-white text-center mb-4 mx-auto" style="max-width: 800px;">
                Browse through a diverse works showcase, a blend of candid moments, stunning landscapes, and captivating portraits. The world through the eyes of a dedicated visual storyteller.
            </p>

            <div class="d-flex justify-content-center mb-5">
                <a href="#gallery" class="d-inline-flex align-items-center gap-3 border border-4 border-lime-green text-lime-green px-5 py-3 rounded-pill fw-bold fs-5 text-decoration-none hover-lift"
                   onmouseover="this.style.background='var(--lime-green)'; this.style.color='var(--dark-green)';"
                   onmouseout="this.style.background='transparent'; this.style.color='var(--lime-green)';"
                   style="transition: all 0.3s;">
                    View All
                    <svg style="width: 24px; height: 24px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                    </svg>
                                </a>
            </div>

            <!-- Works Timeline -->
            <div class="row g-4 mx-auto" style="max-width: 900px;">
                <!-- Work Item 1 -->
                <div class="col-12">
                    <div class="bg-white bg-opacity-5 border-start border-4 border-lime-green p-4 rounded-end-4 hover-lift border-glow">
                        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-md-between gap-3">
                            <div>
                                <div class="text-lime-green fw-bold fs-3 mb-2">2024 - Unveiling Perspectives</div>
                                <p class="text-white mb-0">Experience the magic of the exhibition firsthand, mingle with fellow art enthusiasts, and engage in conversations with the artist.</p>
                            </div>
                            <button class="border border-2 border-white text-white px-4 py-2 rounded-pill fw-semibold hover-scale align-self-md-start"
                                    onmouseover="this.style.background='white'; this.style.color='var(--dark-green)';"
                                    onmouseout="this.style.background='transparent'; this.style.color='white';"
                                    style="transition: all 0.3s;">
                                Discover
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Work Item 2 -->
                <div class="col-12">
                    <div class="bg-white bg-opacity-5 border-start border-4 border-lime-green p-4 rounded-end-4 hover-lift border-glow">
                        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-md-between gap-3">
                            <div>
                                <div class="text-lime-green fw-bold fs-3 mb-2">2023 - Real Me</div>
                                <p class="text-white mb-0">Gain a deeper understanding of the stories behind the images and the artistic choices that bring them to life.</p>
                            </div>
                            <button class="border border-2 border-white text-white px-4 py-2 rounded-pill fw-semibold hover-scale align-self-md-start"
                                    onmouseover="this.style.background='white'; this.style.color='var(--dark-green)';"
                                    onmouseout="this.style.background='transparent'; this.style.color='white';"
                                    style="transition: all 0.3s;">
                                Discover
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Work Item 3 - Highlighted -->
                <div class="col-12">
                    <div class="bg-lime-green border-start border-4 border-dark-green p-4 rounded-end-4 hover-lift border-glow">
                        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-md-between gap-3">
                            <div>
                                <div class="text-dark-green fw-bold fs-3 mb-2">2023 - Emotion Power</div>
                                <p class="text-dark-green mb-0">Witness the power of photography to evoke emotions and stir the soul. Each photograph is a visual poem.</p>
                            </div>
                            <button class="bg-dark-green text-lime-green px-4 py-2 rounded-pill fw-semibold hover-scale align-self-md-start"
                                    onmouseover="this.style.opacity='0.8';"
                                    onmouseout="this.style.opacity='1';"
                                    style="transition: opacity 0.3s;">
                                Discover
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Work Item 4 -->
                <div class="col-12">
                    <div class="bg-white bg-opacity-5 border-start border-4 border-lime-green p-4 rounded-end-4 hover-lift border-glow">
                        <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-md-between gap-3">
                            <div>
                                <div class="text-lime-green fw-bold fs-3 mb-2">2022 - Eye and eye</div>
                                <p class="text-white mb-0">Gain eye and unique perspective breathe life into each photograph, inviting viewers to see the world through a new, captivating lens.</p>
                            </div>
                            <button class="border border-2 border-white text-white px-4 py-2 rounded-pill fw-semibold hover-scale align-self-md-start"
                                    onmouseover="this.style.background='white'; this.style.color='var(--dark-green)';"
                                    onmouseout="this.style.background='transparent'; this.style.color='white';"
                                    style="transition: all 0.3s;">
                                Discover
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-5 bg-dark-green">
        <div class="container py-5">
            <h2 class="display-1 fw-black text-lime-green text-center mb-4 text-reveal" style="font-size: clamp(3rem, 8vw, 6rem);">
                gallery
            </h2>

            <p class="fs-4 text-white text-center mb-4 mx-auto" style="max-width: 800px;">
                Explore a curated collection of images that transcend landscapes, emotions, and narratives. From the intimate to the grandiose, witness the power of photography to evoke emotions.
            </p>

            <div class="d-flex justify-content-center mb-5">
                <a href="#contact" class="d-inline-flex align-items-center gap-3 border border-4 border-lime-green text-lime-green px-5 py-3 rounded-pill fw-bold fs-5 text-decoration-none hover-lift"
                   onmouseover="this.style.background='var(--lime-green)'; this.style.color='var(--dark-green)';"
                   onmouseout="this.style.background='transparent'; this.style.color='var(--lime-green)';"
                   style="transition: all 0.3s;">
                    View All
                    <svg style="width: 24px; height: 24px;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>

            <!-- Hero Image -->
            <div class="mb-5 image-overlay rounded-4 overflow-hidden hover-scale">
                <img src="https://images.unsplash.com/photo-1530549387789-4c1017266635?w=1200&h=600&fit=crop"
                     alt="Swimming"
                     class="w-100 h-auto object-fit-cover">
            </div>

            <!-- Image Carousel -->
            <div class="position-relative mx-auto" style="max-width: 900px;">
                <div class="row g-4">
                    <div class="col-md-4 image-overlay rounded-4 overflow-hidden hover-scale">
                        <img src="https://images.unsplash.com/photo-1487958449943-2429e8be8625?w=400&h=400&fit=crop"
                             alt="Architecture"
                             class="w-100 object-fit-cover" style="height: 250px;">
                    </div>
                    <div class="col-md-4 image-overlay rounded-4 overflow-hidden hover-scale">
                        <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=400&h=400&fit=crop"
                             alt="Landscape"
                             class="w-100 object-fit-cover" style="height: 250px;">
                    </div>
                    <div class="col-md-4 image-overlay rounded-4 overflow-hidden hover-scale">
                        <img src="https://images.unsplash.com/photo-1534158914592-062992fbe900?w=400&h=400&fit=crop"
                             alt="Tennis Ball"
                             class="w-100 object-fit-cover" style="height: 250px;">
                    </div>
                </div>

                <!-- Carousel Arrows -->
                <button class="position-absolute start-0 top-50 translate-middle-y rounded-circle bg-dark-green border border-4 border-lime-green d-flex align-items-center justify-content-center hover-scale"
                        style="width: 48px; height: 48px; cursor: pointer; margin-left: -60px;">
                    <svg style="width: 24px; height: 24px; color: var(--lime-green);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button class="position-absolute end-0 top-50 translate-middle-y rounded-circle bg-dark-green border border-4 border-lime-green d-flex align-items-center justify-content-center hover-scale"
                        style="width: 48px; height: 48px; cursor: pointer; margin-right: -60px;">
                    <svg style="width: 24px; height: 24px; color: var(--lime-green);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="hero-bg py-5 position-relative" style="z-index: 10;">
        <div class="container py-5">
            <h2 class="display-1 fw-black text-dark-green text-center mb-5 text-reveal" style="font-size: clamp(3rem, 8vw, 6rem);">
                CONTACT ME
            </h2>

            <div class="row align-items-center g-5 mx-auto" style="max-width: 1200px;">
                <div class="col-lg-6 slide-in-left">
                    <div class="bg-white bg-opacity-80 border border-4 border-dark-green rounded-4 p-5 hover-lift border-glow">
                        <h3 class="fs-2 fw-bold text-dark-green mb-4">Get in Touch</h3>
                        <p class="fs-5 text-dark-green mb-4">
                            Ready to capture your story? Let's create something amazing together.
                        </p>
                        <form class="d-flex flex-column gap-3">
                            <input type="text" placeholder="Your Name" class="form-control form-control-lg border border-4 border-dark-green rounded-3"
                                   style="padding: 12px;">
                            <input type="email" placeholder="Your Email" class="form-control form-control-lg border border-4 border-dark-green rounded-3"
                                   style="padding: 12px;">
                            <textarea placeholder="Your Message" rows="4" class="form-control form-control-lg border border-4 border-dark-green rounded-3"
                                      style="padding: 12px;"></textarea>
                            <button type="submit" class="btn bg-dark-green text-lime-green px-5 py-3 rounded-3 fw-bold fs-5 hover-lift"
                                    onmouseover="this.style.opacity='0.9';"
                                    onmouseout="this.style.opacity='1';"
                                    style="transition: opacity 0.3s;">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6 slide-in-right">
                    <div class="rounded-4 overflow-hidden hover-scale">
                        <img src="https://images.unsplash.com/photo-1606983340126-99ab4feaa64a?w=600&h=800&fit=crop"
                             alt="Camera Hand"
                             class="w-100 h-auto object-fit-cover rounded-4">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark-green py-5">
        <div class="container">
            <nav class="d-flex flex-wrap justify-content-center gap-4 gap-md-5 mb-4">
                <a href="#about" class="fs-4 fw-bold text-white text-decoration-none"
                   onmouseover="this.style.color='var(--lime-green)';"
                   onmouseout="this.style.color='white';"
                   style="transition: color 0.3s;">About</a>
                <a href="#works" class="fs-4 fw-bold text-white text-decoration-none"
                   onmouseover="this.style.color='var(--lime-green)';"
                   onmouseout="this.style.color='white';"
                   style="transition: color 0.3s;">Works</a>
                <a href="#gallery" class="fs-4 fw-bold text-white text-decoration-none"
                   onmouseover="this.style.color='var(--lime-green)';"
                   onmouseout="this.style.color='white';"
                   style="transition: color 0.3s;">Gallery</a>
                <a href="#contact" class="fs-4 fw-bold text-white text-decoration-none"
                   onmouseover="this.style.color='var(--lime-green)';"
                   onmouseout="this.style.color='white';"
                   style="transition: color 0.3s;">Contact</a>
            </nav>
            <h2 class="display-1 fw-black text-lime-green text-center" style="font-size: clamp(3rem, 8vw, 6rem);">
                SNAP MASTER
            </h2>
        </div>
    </footer>

    <!-- Additional inline script for immediate execution -->
    <script>
        // Ensure scripts run even if module loading is delayed
        (function() {
            // Fallback smooth scroll
            if (typeof window.scrollTo === 'function') {
                // Native smooth scroll is available
            } else {
                // Polyfill for smooth scroll
                window.scrollTo = function(options) {
                    if (typeof options === 'object') {
                        const start = window.pageYOffset || document.documentElement.scrollTop;
                        const target = options.top || 0;
                        const distance = target - start;
                        const duration = 500;
                        let startTime = null;

                        function animation(currentTime) {
                            if (startTime === null) startTime = currentTime;
                            const timeElapsed = currentTime - startTime;
                            const run = easeInOutQuad(timeElapsed, start, distance, duration);
                            window.scrollTo(0, run);
                            if (timeElapsed < duration) requestAnimationFrame(animation);
                        }

                        function easeInOutQuad(t, b, c, d) {
                            t /= d / 2;
                            if (t < 1) return c / 2 * t * t + b;
                            t--;
                            return -c / 2 * (t * (t - 2) - 1) + b;
                        }

                        requestAnimationFrame(animation);
                    }
                };
            }
        })();
    </script>
    </body>
</html>
