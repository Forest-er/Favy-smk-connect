<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Connect</title>
    @vite('resources/css/app.css')
    <!-- Add Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    
    <style>
        .carousel-slide {
            display: none;
        }

        .carousel-slide.active {
            display: block;
        }
    </style>
</head>

<body class="font-sans antialiased">

    <!-- Sticky Navbar -->
    <nav id="mainNavbar" class="bg-white shadow-sm py-4 px-6 md:px-12 lg:px-24 flex justify-between items-center sticky top-0 z-50 transition-all duration-300">
        <div class="flex items-center space-x-8">
            <img src="{{ asset('images/smkbm3.png') }}" alt="SMK BM3 Logo" class="h-8">
        </div>

        <div class="flex items-center space-x-6 text-sm font-medium">
            <div class="relative group">
                <button class="flex items-center space-x-1 hover:text-gray-700">
                    <span>Explore</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="absolute left-0 mt-2 w-48 bg-white border rounded-lg shadow-lg hidden group-hover:block">
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Categories</a>
                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Trending</a>
                </div>
            </div>

            <a href="#" class="hover:text-gray-700">Sign in</a>
            <button class="border border-gray-300 rounded-md px-4 py-1 hover:bg-gray-50">Join</button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="heroSection" class="relative h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('/images/dummy1.png');">
        <div class="absolute inset-0 bg-black opacity-50"></div>

        <div class="align-center relative z-10 flex flex-col items-start justify-center h-full px-6 md:px-12 lg:px-24 text-white">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6 max-w-2xl drop-shadow-md">
                Our freelancers<br>will take it from here
            </h1>

            <!-- <div class="w-full max-w-4xl relative mb-6">
                <input type="text" placeholder="Search for any service..." class="w-full px-6 py-4 rounded-lg text-gray-800 bg-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-black text-white p-3 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div> -->
        </div>
    </section>

    <!-- === NEW SECTION: Need Help with Vibe Coding? (Pink Container, Not Full Width) === -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 md:px-12 lg:px-24">
            <!-- Pink Container (Tidak Full Width) -->
            <div class="bg-pink-50 rounded-2xl p-8 md:p-12 shadow-lg flex flex-col md:flex-row items-center gap-12">

                <!-- Text Content -->
                <div class="md:w-1/2 space-y-6">
                    <h2 class="text-3xl md:text-4xl font-bold leading-tight text-gray-800">
                        Need help with Vibe coding?
                    </h2>
                    <p class="text-lg text-gray-600">
                        Get matched with the right expert to keep building and marketing your project.
                    </p>
                    <button class="bg-white border border-gray-300 text-gray-800 px-6 py-3 rounded-lg font-medium hover:bg-gray-50 transition">
                        Find an expert
                    </button>
                </div>

                <!-- Illustration / Mockup with Internal Gradient -->
                <div class="md:w-1/2 flex justify-center">
                    <div class="relative w-full max-w-md">
                        <!-- Outer Frame -->
                        <div class="bg-white rounded-2xl p-6 shadow-inner border border-gray-200">
                            <!-- Inner Window with Gradient Background -->
                            <div class="rounded-xl p-4 shadow-sm relative overflow-hidden">
                                <!-- Gradient Background for Illustration -->
                                <div class="absolute inset-0 bg-linear-to-br from-blue-100 via-purple-100 to-orange-100 opacity-70"></div>

                                <!-- Header Dots -->
                                <div class="flex space-x-2 mb-4 relative z-10">
                                    <div class="w-3 h-3 bg-gray-300 rounded-full"></div>
                                    <div class="w-3 h-3 bg-gray-300 rounded-full"></div>
                                    <div class="w-3 h-3 bg-gray-300 rounded-full"></div>
                                </div>

                                <!-- Content Area -->
                                <div class="h-24 bg-white/80 rounded-lg flex items-center justify-center relative z-10">
                                    <div class="w-10 h-10 bg-black rounded-full flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.674M12 3v1m6.364 1.664-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 2.828.707.707M7.878 5.878l.707-.707a2 2 0 012.828 0l.707.707m-10.97 10.97.707.707a2 2 0 002.828 0l-.707-.707m0-10.97l-.707-.707a2 2 0 00-2.828 0l-.707.707z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- === POPULAR SERVICES CARD LAYOUT (Seperti Gambar Referensi) === -->
    <section class="py-16 bg-white relative overflow-hidden">
        <!-- Background Pattern / Gradient (Opsional) -->
        <div class="absolute inset-0 bg-linear-to-br from-blue-50 to-indigo-50 opacity-30"></div>

        <div class="container mx-auto px-4 relative z-10">
            <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Explore a Thousand Of New Job Everyday</h2>

            <!-- Cards Layout (Floating & Tilted) -->
            <div class="flex flex-wrap justify-center gap-4 md:gap-8 relative">
                @php
                $services = [
                ['title' => 'Senior UI/UX Designer', 'color' => 'bg-pink-100', 'icon' => 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/icons/palette.svg'],
                ['title' => 'Junior UI/UX Designer', 'color' => 'bg-blue-100', 'icon' => 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/icons/pc-display-horizontal.svg'],
                ['title' => 'Senior Motion Designer', 'color' => 'bg-orange-100', 'icon' => 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/icons/film.svg'],
                ['title' => 'Senior Graphic Designer', 'color' => 'bg-green-100', 'icon' => 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/icons/pencil-square.svg'],
                ];
                @endphp

                @foreach($services as $index => $service)
                <div class="w-64 sm:w-72 p-10 rounded-xl shadow-lg {{ $service['color'] }} transform transition-all duration-300 hover:scale-105 hover:-translate-y-2.5 hover:z-10 hover:shadow-xl cursor-pointer"
                    style="transform: rotate({{ ($index % 2 == 0) ? '-3deg' : '3deg' }});"
                    data-index="{{ $index }}">
                    <div class="flex items-center justify-between mb-4">
                        <img src="{{ $service['icon'] }}" alt="Icon" class="w-6 h-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v14a2 2 0 01-2 2H7a2 2 0 01-2-2V5z" />
                        </svg>
                    </div>

                    <h3 class="font-bold text-gray-900 text-lg mb-2">{{ $service['title'] }}</h3>

                    <div class="flex space-x-2 mb-3">
                        <span class="px-2 py-1 bg-white text-xs rounded-full">Full Time</span>
                        <span class="px-2 py-1 bg-white text-xs rounded-full">Entry Level</span>
                        <span class="px-2 py-1 bg-white text-xs rounded-full">Distant</span>
                    </div>

                    <div class="flex items-center justify-between text-sm text-gray-600">
                        <span>$150/hr</span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.995 1.995 0 01-2.828 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>New York, NY</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Popular Services Carousel -->
    <section class="py-16 px-6 md:px-12 lg:px-24">
        <h2 class="text-2xl font-bold text-gray-900 mb-8">Popular services</h2>

        <div id="popularServicesCarousel" class="relative overflow-hidden">
            @php
            $services = [];
            for ($i = 1; $i <= 12; $i++) {
                $services[]=[ 'id'=> $i,
                'title' => "Service $i",
                'image' => asset('images/smkbm3.png'),
                ];
                }
                $slides = array_chunk($services, 5);
                @endphp

                @foreach($slides as $index => $slide)
                <div class="carousel-slide {{ $index === 0 ? 'active' : '' }} w-full">
                    <!-- Tombol Kiri -->
                    @if($index > 0)
                    <button class="carousel-nav-btn absolute left-0 top-1/2 -translate-y-1/2 z-10 p-2 bg-white rounded-full shadow-md hover:bg-gray-100 transition"
                        data-slide="{{ $index - 1 }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    @endif

                    <!-- Card Container -->
                    <div class="flex gap-6 min-w-full pl-10 pr-10">
                        @foreach($slide as $service)
                        <div class="w-60 shrink-0 bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition">
                            <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="w-full h-40 object-cover">
                            <div class="p-4 text-center">
                                <h3 class="font-semibold text-gray-900 truncate">{{ $service['title'] }}</h3>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Tombol Kanan -->
                    @if($index < count($slides) - 1)
                        <button class="carousel-nav-btn absolute right-0 top-1/2 -translate-y-1/2 z-10 p-2 bg-white rounded-full shadow-md hover:bg-gray-100 transition"
                        data-slide="{{ $index + 1 }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        </button>
                        @endif
                </div>
                @endforeach
        </div>
    </section>
    <!-- === HOW IT WORKS SECTION === -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 md:px-12 lg:px-24">

            <!-- Header & Toggle Buttons -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12 gap-6">
                <h2 class="text-2xl font-bold text-gray-900">How it works</h2>

                <div class="flex rounded-full border border-gray-300 overflow-hidden shadow-sm">
                    <button id="toggleHiring" class="px-6 py-3 bg-gray-100 text-gray-800 font-medium hover:bg-gray-200 transition active:bg-white active:border-b-2 active:border-blue-500">
                        For hiring
                    </button>
                    <button id="toggleFinding" class="px-6 py-3 text-gray-700 font-medium hover:bg-gray-100 transition">
                        For finding work
                    </button>
                </div>
            </div>

            <!-- Content Cards (3 Columns) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Card 1 -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition group">
                    <div class="relative h-48 bg-black flex items-center justify-center">
                        <div id="card1Image" class="text-white text-xl font-bold text-center p-4">
                            all in one place
                        </div>
                        <div class="absolute bottom-3 right-3 bg-white rounded-full p-2 opacity-0 group-hover:opacity-100 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 id="card1Title" class="font-semibold text-gray-900 mb-2">Posting jobs is always free</h3>
                        <p id="card1Desc" class="text-gray-600 text-sm">Post your project for free and get proposals from top freelancers.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition group">
                    <div class="relative h-48 bg-gray-100 flex items-center justify-center">
                        <img id="card2Image" src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Get proposals" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 id="card2Title" class="font-semibold text-gray-900 mb-2">Get proposals and hire</h3>
                        <p id="card2Desc" class="text-gray-600 text-sm">Review proposals, interview candidates, and hire the perfect match.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition group">
                    <div class="relative h-48 bg-gray-100 flex items-center justify-center">
                        <img id="card3Image" src="https://images.unsplash.com/photo-1581091580497-e0d23cbdf1dc?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Pay when done" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 id="card3Title" class="font-semibold text-gray-900 mb-2">Pay when work is done</h3>
                        <p id="card3Desc" class="text-gray-600 text-sm">Only pay for completed work you’re happy with — no surprises.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- === FOOTER SECTION (Bootstrap Icons) === -->
    <footer class="bg-black text-white pt-12 pb-8">
    <div class="container mx-auto px-6 md:px-12 lg:px-24">

        <!-- Main Footer Columns -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

            <!-- Column 1: For Clients -->
            <div>
                <h3 class="text-sm font-semibold uppercase text-gray-400 mb-6">For Clients</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">How to hire</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Talent Marketplace</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Project Catalog</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Hire an agency</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Enterprise</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Business Plus</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Any Hire</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Contract-to-hire</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Direct Contracts</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Hire worldwide</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Hire in the USA</a></li>
                </ul>
            </div>

            <!-- Column 2: For Talent -->
            <div>
                <h3 class="text-sm font-semibold uppercase text-gray-400 mb-6">For Talent</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">How to find work</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Direct Contracts</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Find freelance jobs worldwide</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Find freelance jobs in the USA</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Win work with ads</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Exclusive resources with Freelancer Plus</a></li>
                </ul>
            </div>

            <!-- Column 3: Resources -->
            <div>
                <h3 class="text-sm font-semibold uppercase text-gray-400 mb-6">Resources</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Help & support</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Success stories</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Upwork reviews</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Resources</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Blog</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Affiliate programme</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Free Business Tools</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Release notes</a></li>
                </ul>
            </div>

            <!-- Column 4: Company (tanpa sosial media) -->
            <div>
                <h3 class="text-sm font-semibold uppercase text-gray-400 mb-6">Company</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">About us</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Leadership</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Investor relations</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Careers</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Our impact</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Press</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Contact us</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Partners</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Trust, safety & security</a></li>
                    <li><a href="#" class="text-sm hover:text-gray-300 transition">Modern slavery statement</a></li>
                </ul>
            </div>

        </div>

        <!-- === SOCIAL MEDIA SECTION (Baru, di atas copyright) === -->
        <div class="mt-10 text-center md:text-left">
            <div class="flex flex-col md:flex-row items-center justify-start gap-4 text-gray-400">
                <span class="text-sm">Ikuti kami di:</span>
                <div class="flex space-x-4">
                    <a href="#" class="text-white hover:text-gray-300 transition">
                        <i class="bi bi-facebook text-xl"></i>
                    </a>
                    <a href="#" class="text-white hover:text-gray-300 transition">
                        <i class="bi bi-twitter-x text-xl"></i>
                    </a>
                    <a href="#" class="text-white hover:text-gray-300 transition">
                        <i class="bi bi-linkedin text-xl"></i>
                    </a>
                    <a href="#" class="text-white hover:text-gray-300 transition">
                        <i class="bi bi-instagram text-xl"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="border-t border-gray-800 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-gray-400">
            <div>
                &copy; {{ date('Y') }} SMK Connect. All rights reserved.
            </div>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#" class="hover:text-gray-300 transition">Privacy Policy</a>
                <a href="#" class="hover:text-gray-300 transition">Terms of Service</a>
                <a href="#" class="hover:text-gray-300 transition">Cookie Policy</a>
                <a href="#" class="hover:text-gray-300 transition">Accessibility</a>
            </div>
        </div>

    </div>
</footer>

    <!-- <section class="py-12 px-6 md:px-12 lg:px-24">
        <div class="flex flex-wrap justify-center gap-6">
            @php
            $categories = [
            ['icon' => 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/icons/pc-display-horizontal.svg', 'name' => 'Programming & Tech'],
            ['icon' => 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/icons/palette.svg', 'name' => 'Graphics & Design'],
            ['icon' => 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/icons/shop-window.svg', 'name' => 'Digital Marketing'],
            ['icon' => 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/icons/pencil-square.svg', 'name' => 'Writing & Translation'],
            ['icon' => 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/icons/film.svg', 'name' => 'Video & Animation'],
            ];
            @endphp

            @foreach($categories as $category)
            <div class="w-48 p-4 bg-white rounded-xl shadow-sm hover:shadow-md transition flex flex-col items-center text-center space-y-3">
                <img src="{{ $category['icon'] }}" alt="{{ $category['name'] }}" class="w-10 h-10">
                <h3 class="font-medium text-gray-900">{{ $category['name'] }}</h3>
            </div>
            @endforeach
        </div>
    </section> -->

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const navbar = document.getElementById('mainNavbar');
            const searchBtn = document.getElementById('navbarSearchBtn');
            const hero = document.getElementById('heroSection');

            if (!hero || !navbar || !searchBtn) return;

            // Hitung posisi bawah hero
            const heroBottom = hero.offsetTop + hero.offsetHeight;

            const toggleSearchButton = () => {
                if (window.scrollY > heroBottom) {
                    // Sudah melewati hero → tampilkan tombol
                    searchBtn.classList.remove('hidden');
                    searchBtn.classList.add('opacity-100', 'scale-100');
                } else {
                    // Masih di hero atau di atas → sembunyikan
                    searchBtn.classList.add('hidden');
                    searchBtn.classList.remove('opacity-100', 'scale-100');
                }
            };

            // Jalankan saat load & scroll
            window.addEventListener('scroll', toggleSearchButton);
            toggleSearchButton(); // cek saat halaman pertama kali dimuat
        });

        // === Script Carousel (tidak berubah) ===
        document.querySelectorAll('[id$="Carousel"]').forEach(carouselContainer => {
            const slides = carouselContainer.querySelectorAll('.carousel-slide');
            const navButtons = carouselContainer.querySelectorAll('.carousel-nav-btn');

            navButtons.forEach(button => {
                button.addEventListener('mousedown', (e) => {
                    if (e.button !== 0) return;
                    const targetIndex = parseInt(button.getAttribute('data-slide'));
                    if (targetIndex >= 0 && targetIndex < slides.length) {
                        slides.forEach((slide, i) => {
                            slide.classList.toggle('active', i === targetIndex);
                        });
                    }
                });
            });
        });

        document.addEventListener('DOMContentLoaded', () => {
            const toggleHiring = document.getElementById('toggleHiring');
            const toggleFinding = document.getElementById('toggleFinding');

            // Data untuk kedua mode
            const content = {
                hiring: {
                    card1: {
                        image: '<span class="text-white text-xl font-bold text-center p-4">all in one place</span>',
                        title: 'Posting jobs is always free',
                        desc: 'Post your project for free and get proposals from top freelancers.'
                    },
                    card2: {
                        image: '<img src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Get proposals" class="w-full h-full object-cover">',
                        title: 'Get proposals and hire',
                        desc: 'Review proposals, interview candidates, and hire the perfect match.'
                    },
                    card3: {
                        image: '<img src="https://images.unsplash.com/photo-1581091580497-e0d23cbdf1dc?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Pay when done" class="w-full h-full object-cover">',
                        title: 'Pay when work is done',
                        desc: 'Only pay for completed work you’re happy with — no surprises.'
                    }
                },
                finding: {
                    card1: {
                        image: '<span class="text-white text-xl font-bold text-center p-4">find your next gig</span>',
                        title: 'Create your profile',
                        desc: 'Showcase your skills, experience, and portfolio to attract clients.'
                    },
                    card2: {
                        image: '<img src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Get hired" class="w-full h-full object-cover">',
                        title: 'Get hired fast',
                        desc: 'Browse projects, submit proposals, and land your next job quickly.'
                    },
                    card3: {
                        image: '<img src="https://images.unsplash.com/photo-1581091580497-e0d23cbdf1dc?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Get paid" class="w-full h-full object-cover">',
                        title: 'Get paid securely',
                        desc: 'Receive payments safely through our platform — no delays, no hassle.'
                    }
                }
            };

            // Fungsi untuk update content
            function updateContent(mode) {
                const {
                    card1,
                    card2,
                    card3
                } = content[mode];

                document.getElementById('card1Image').innerHTML = card1.image;
                document.getElementById('card1Title').textContent = card1.title;
                document.getElementById('card1Desc').textContent = card1.desc;

                document.getElementById('card2Image').outerHTML = `<div id="card2Image">${card2.image}</div>`;
                document.getElementById('card2Title').textContent = card2.title;
                document.getElementById('card2Desc').textContent = card2.desc;

                document.getElementById('card3Image').outerHTML = `<div id="card3Image">${card3.image}</div>`;
                document.getElementById('card3Title').textContent = card3.title;
                document.getElementById('card3Desc').textContent = card3.desc;
            }

            // Event listeners
            toggleHiring.addEventListener('click', () => {
                toggleHiring.classList.add('bg-white', 'border-b-2', 'border-blue-500');
                toggleFinding.classList.remove('bg-white', 'border-b-2', 'border-blue-500');
                toggleFinding.classList.add('bg-gray-100');
                updateContent('hiring');
            });

            toggleFinding.addEventListener('click', () => {
                toggleFinding.classList.add('bg-white', 'border-b-2', 'border-blue-500');
                toggleHiring.classList.remove('bg-white', 'border-b-2', 'border-blue-500');
                toggleHiring.classList.add('bg-gray-100');
                updateContent('finding');
            });

            // Default: "For hiring"
            toggleHiring.click();
        });
    </script>

</body>

</html>