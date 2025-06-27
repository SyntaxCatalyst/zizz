<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zizz Shop - Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            /* Mengembalikan background body dengan efek gradien radial */
            background: #0a0e27;
            background-image:
                radial-gradient(circle at 20% 20%, rgba(30, 58, 138, 0.3) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(59, 130, 246, 0.2) 0%, transparent 50%),
                radial-gradient(circle at 40% 60%, rgba(37, 99, 235, 0.15) 0%, transparent 50%);
            min-height: 100vh;
            color: #e2e8f0;
            line-height: 1.6;
        }

        /* Custom gradient for logo and signup button */
        .gradient-text {
            background: linear-gradient(135deg, #3b82f6 0%, #06b6d4 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .btn-gradient {
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
        }

        .btn-gradient:hover {
            background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%);
            transform: translateY(-3px);
            box-shadow: 0 8px 30px rgba(59, 130, 246, 0.4);
        }

        /* Navbar scroll effect */
        .nav-scrolled {
            padding-top: 16px !important;
            padding-bottom: 16px !important;
            /* Tetap transparan saat di-scroll, hanya menambah blur dan shadow */
            backdrop-filter: blur(20px);
            border-bottom-color: rgba(59, 130, 246, 0.25);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
        }

        /* Smooth animations */
        .animate-fade-in-up {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s ease forwards;
        }

        .delay-200ms { animation-delay: 0.2s; }
        .delay-400ms { animation-delay: 0.4s; }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container mx-auto px-4 md:px-6 lg:px-8">
        <nav class="nav flex justify-between items-center py-5 md:py-6 backdrop-filter backdrop-blur-lg sticky top-0 z-50 border-b border-blue-600 border-opacity-10 transition-all duration-300 ease-in-out">
            <div class="text-3xl md:text-4xl font-extrabold gradient-text tracking-tight cursor-pointer transform hover:scale-105 transition-transform duration-300">ZIZZ SHOP</div>
            <div class="flex items-center space-x-3 md:space-x-4">
                <?php if (isset($_SESSION['user'])): ?>
                    <a href="home" class="
                        px-5 py-2 md:px-7 md:py-3
                        btn-gradient text-white no-underline rounded-xl font-semibold text-sm md:text-base
                        shadow-lg shadow-blue-500 shadow-opacity-25
                        relative overflow-hidden transition-all duration-300 ease-in-out
                        hover:-translate-y-1 hover:shadow-xl hover:shadow-blue-500 hover:shadow-opacity-40
                    ">
                        <span class="relative z-10">Dashboard</span>
                    </a>
                <?php else: ?>
                    <a href="sign-in" class="
                        px-5 py-2 md:px-7 md:py-3
                        text-gray-300 no-underline rounded-xl font-semibold text-sm md:text-base
                        border-2 border-gray-300 border-opacity-10 bg-gray-800 bg-opacity-30
                        relative overflow-hidden transition-all duration-300 ease-in-out
                        hover:text-white hover:bg-blue-700 hover:bg-opacity-10 hover:border-blue-500 hover:border-opacity-20 hover:-translate-y-0.5
                    ">
                        <span class="relative z-10">Sign In</span>
                        <span class="absolute inset-0 bg-gradient-to-r from-transparent via-blue-500 via-opacity-10 to-transparent transform -translate-x-full transition-transform duration-500 ease-out group-hover:translate-x-full"></span>
                    </a>
                    <a href="sign-up" class="
                        px-5 py-2 md:px-7 md:py-3
                        btn-gradient text-white no-underline rounded-xl font-semibold text-sm md:text-base
                        shadow-lg shadow-blue-500 shadow-opacity-25
                        relative overflow-hidden transition-all duration-300 ease-in-out
                        hover:-translate-y-1 hover:shadow-xl hover:shadow-blue-500 hover:shadow-opacity-40
                    ">
                        <span class="relative z-10">Sign Up</span>
                    </a>
                <?php endif; ?>
            </div>
        </nav>

        <section class="hero text-center py-20 md:py-28 lg:py-32 animate-fade-in-up">
            <div class="inline-flex items-center space-x-2 bg-blue-700 bg-opacity-10 border border-blue-700 border-opacity-20 text-blue-300 px-4 py-2 rounded-full text-sm font-medium mb-8">
                ✨ Welcome to the future of shopping
            </div>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold text-white mb-6 tracking-tight leading-tight">
                Welcome to Zizz Shop
            </h1>
            <p class="text-lg md:text-xl text-gray-400 mb-12 max-w-2xl mx-auto">
                Discover premium products, exceptional service, and unmatched quality at Zizz Shop.
                Your journey to extraordinary shopping starts here.
            </p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                <a href="#features" class="
                    px-6 py-3 md:px-8 md:py-4
                    btn-gradient text-white no-underline rounded-xl font-semibold text-base md:text-lg
                    shadow-md shadow-blue-500 shadow-opacity-20
                    transition-all duration-200 ease-in-out
                    hover:scale-105 hover:shadow-lg hover:shadow-blue-500 hover:shadow-opacity-30
                ">
                    Explore Products
                </a>
                <a href="#contact" class="
                    px-6 py-3 md:px-8 md:py-4
                    text-gray-200 no-underline rounded-xl font-semibold text-base md:text-lg
                    border border-gray-700 border-opacity-40 bg-gray-900 bg-opacity-50
                    transition-all duration-200 ease-in-out
                    hover:bg-gray-800 hover:border-blue-500 hover:border-opacity-60
                ">
                    Learn More
                </a>
            </div>
        </section>

        <section class="features py-20 md:py-24 lg:py-28 animate-fade-in-up delay-200ms" id="features">
            <div class="text-center mb-16 md:mb-20">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 tracking-tight">Why Choose Zizz Shop</h2>
                <p class="text-md md:text-lg text-gray-400 max-w-xl mx-auto">
                    Experience shopping like never before with our premium services and exceptional quality standards.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10">
                <div class="feature-card bg-gray-900 bg-opacity-60 border border-gray-800 border-opacity-80 rounded-2xl p-8 md:p-10
                            transition-all duration-300 ease-in-out relative overflow-hidden group">
                    <span class="absolute top-0 left-0 right-0 h-0.5 bg-gradient-to-r from-blue-500 via-cyan-500 to-blue-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                    <div class="flex items-center justify-center w-14 h-14 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl text-2xl mb-6">🏆</div>
                    <h3 class="text-xl md:text-2xl font-semibold text-white mb-3">Premium Quality</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                    </p>
                </div>

                <div class="feature-card bg-gray-900 bg-opacity-60 border border-gray-800 border-opacity-80 rounded-2xl p-8 md:p-10
                            transition-all duration-300 ease-in-out relative overflow-hidden group">
                    <span class="absolute top-0 left-0 right-0 h-0.5 bg-gradient-to-r from-blue-500 via-cyan-500 to-blue-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                    <div class="flex items-center justify-center w-14 h-14 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl text-2xl mb-6">🚀</div>
                    <h3 class="text-xl md:text-2xl font-semibold text-white mb-3">Lightning Fast Delivery</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
                    </p>
                </div>

                <div class="feature-card bg-gray-900 bg-opacity-60 border border-gray-800 border-opacity-80 rounded-2xl p-8 md:p-10
                            transition-all duration-300 ease-in-out relative overflow-hidden group">
                    <span class="absolute top-0 left-0 right-0 h-0.5 bg-gradient-to-r from-blue-500 via-cyan-500 to-blue-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></span>
                    <div class="flex items-center justify-center w-14 h-14 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl text-2xl mb-6">💬</div>
                    <h3 class="text-xl md:text-2xl font-semibold text-white mb-3">24/7 Expert Support</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
                    </p>
                </div>
            </div>
        </section>

        <section class="contact py-20 md:py-24 lg:py-28 bg-gray-900 bg-opacity-40 border-t border-gray-800 border-opacity-80 animate-fade-in-up delay-400ms" id="contact">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                <div class="contact-content text-center lg:text-left">
                    <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 tracking-tight">Get In Touch</h2>
                    <p class="text-md md:text-lg text-gray-400 mb-8 lg:mb-12">
                        Ready to start your shopping journey? We're here to help you every step of the way.
                        Reach out to us through any of these channels.
                    </p>
                </div>

                <div class="contact-info space-y-6">
                    <div class="contact-item flex items-center space-x-4 p-4 md:p-5 bg-gray-800 bg-opacity-50 border border-blue-700 border-opacity-10 rounded-xl transition-all duration-200 ease-in-out hover:bg-gray-800 hover:bg-opacity-80 hover:border-blue-500 hover:border-opacity-30">
                        <div class="flex items-center justify-center w-10 h-10 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-lg text-lg">📧</div>
                        <div class="flex flex-col">
                            <span class="text-xs uppercase text-gray-500 font-medium tracking-wider">Email</span>
                            <span class="text-base text-gray-200 font-medium">topyws@gmail.com</span>
                        </div>
                    </div>

                    <div class="contact-item flex items-center space-x-4 p-4 md:p-5 bg-gray-800 bg-opacity-50 border border-blue-700 border-opacity-10 rounded-xl transition-all duration-200 ease-in-out hover:bg-gray-800 hover:bg-opacity-80 hover:border-blue-500 hover:border-opacity-30">
                        <div class="flex items-center justify-center w-10 h-10 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-lg text-lg">📱</div>
                        <div class="flex flex-col">
                            <span class="text-xs uppercase text-gray-500 font-medium tracking-wider">Phone</span>
                            <span class="text-base text-gray-200 font-medium">+62 857-0539-0430 </span>
                        </div>
                    </div>

                    <div class="contact-item flex items-center space-x-4 p-4 md:p-5 bg-gray-800 bg-opacity-50 border border-blue-700 border-opacity-10 rounded-xl transition-all duration-200 ease-in-out hover:bg-gray-800 hover:bg-opacity-80 hover:border-blue-500 hover:border-opacity-30">
                        <div class="flex items-center justify-center w-10 h-10 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-lg text-lg">📍</div>
                        <div class="flex flex-col">
                            <span class="text-xs uppercase text-gray-500 font-medium tracking-wider">Location</span>
                            <span class="text-base text-gray-200 font-medium">Indonesia</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('.nav');
            if (window.scrollY > 50) {
                nav.classList.add('nav-scrolled');
            } else {
                nav.classList.remove('nav-scrolled');
            }
        });

        // Smooth scroll for navigation
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

        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.hero, .features, .contact').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>