    <!-- Popular Services Carousel -->
    <section class="py-16 px-6 md:px-12 lg:px-24 relative overflow-visible">
        <!-- Hiasan Dekoratif Background -->
        <div class="absolute top-10 left-6 w-40 h-6 rounded-full blur-2xl" style="background-color: rgba(255, 237, 213, 0.5);"></div>
        <div class="absolute top-1/2 left-10 w-48 h-48 rounded-full blur-2xl" style="background-color: rgba(255, 237, 213, 0.6);"></div>
        <div class="absolute bottom-16 left-6 w-36 h-36 rounded-full blur-2xl" style="background-color: rgba(255, 237, 213, 0.5);"></div>
        <div class="absolute bottom-1/3 left-12 w-40 h-40 rounded-full blur-2xl" style="background-color: rgba(255, 237, 213, 0.6);"></div>

        <!-- Circle blur di KANAN -->
        <div class="absolute top-10 right-6 w-36 h-8 bg-green-400/40 rounded-full blur-2xl"></div>
        <div class="absolute top-1/3 right-10 w-44 h-44 rounded-full blur-2xl" style="background-color: rgba(220, 252, 231, 0.6);"></div>
        <div class="absolute bottom-20 right-6 w-48 h-48 bg-teal-400/40 rounded-full blur-2xl"></div>
        <div class="absolute bottom-1/2 right-10 w-40 h-40 rounded-full blur-2xl" style="background-color: rgba(220, 252, 231, 0.6);"></div>

        <div class="absolute top-24 left-1/4 w-14 h-14 border-4 border-green-500/45 rounded-full rotate-45"></div>

        <div class="absolute top-32 right-1/4 w-4 h-4 bg-green-500/55 rotate-45"></div>
        <div class="absolute top-1/3 left-1/4 w-4 h-4 bg-teal-500/55 -rotate-12"></div>

        <svg class="absolute top-16 left-1/3 w-12 h-12 opacity-45" viewBox="0 0 100 100">
            <polygon points="50,5 90,30 90,70 50,95 10,70 10,30"
                fill="none" stroke="#10b981" stroke-width="3" />
        </svg>

        <svg class="absolute top-1/4 right-1/4 w-32 h-32 opacity-40" viewBox="0 0 100 100">
            <path d="M10,50 Q30,20 50,50 T90,50" fill="none"
                stroke="#14b8a6" stroke-width="2.5" />
            <path d="M10,60 Q30,30 50,60 T90,60" fill="none"
                stroke="#14b8a6" stroke-width="2.5" />
        </svg>

        <div class="absolute top-1/2 right-1/3 w-3 h-3 bg-green-600/50 rounded-full"></div>
        <div class="absolute top-1/2 right-1/3 w-2 h-2 bg-teal-600/50 rounded-full"
            style="margin-top: 8px; margin-right: 24px;"></div>

        <div class="absolute top-20 right-1/3 text-3xl font-bold text-green-500/45">×</div>

        <svg class="absolute bottom-1/4 left-1/4 w-16 h-16 opacity-45" viewBox="0 0 100 100">
            <circle cx="50" cy="50" r="35" fill="none" stroke="#14b8a6" stroke-width="2.5" />
            <circle cx="50" cy="50" r="5" fill="#14b8a6" />
        </svg>

        <h2 class="text-2xl font-bold text-gray-900 mb-8 relative z-10">Popular services</h2>

        <div id="popularServicesCarousel" class="relative overflow-visible z-10">
            @php
            $services = [];
            for ($i = 1; $i <= 10; $i++) {
                $services[]=[ 'id'=> $i,
                'title' => "Service $i",
                'image' => asset('images/smkbm3.png'),
                ];
                }
                $slides = array_chunk($services, 5);
                @endphp

                @foreach ($slides as $index => $slide)
                <div class="carousel-slide {{ $index === 0 ? 'active' : '' }} w-full relative z-10">
                    @if ($index > 0)
                    <button
                        class="carousel-nav-btn absolute left-0 top-1/2 -translate-y-1/2 z-10 p-2 bg-white rounded-full shadow-md hover:bg-gray-100 transition"
                        data-slide="{{ $index - 1 }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    @endif

                    <div class="flex gap-6 min-w-full px-4 md:px-6 overflow-visible">
                        @foreach ($slide as $service)
                        <div
                            class="w-60 shrink-0 bg-white rounded-xl shadow-md hover:shadow-2xl hover:-translate-y-2 transition-transform duration-300 overflow-visible">
                            <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}"
                                class="w-full h-40 object-cover rounded-t-xl">
                            <div class="p-4 text-center">
                                <h3 class="font-semibold text-gray-900 truncate">{{ $service['title'] }}</h3>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    @if ($index < count($slides) - 1)
                        <button
                        class="carousel-nav-btn absolute right-0 top-1/2 -translate-y-1/2 z-10 p-2 bg-white rounded-full shadow-md hover:bg-gray-100 transition"
                        data-slide="{{ $index + 1 }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                        </button>
                        @endif
                </div>
                @endforeach
        </div>
    </section>

    <!-- Garis dekoratif di bawah carousel -->
    <div class="relative -mt-4 h-20 w-screen left-1/2 -translate-x-1/2 overflow-visible">
        <!-- Circular dots pattern -->
        <svg class="absolute top-4 left-0 w-full h-8" viewBox="0 0 1600 40" preserveAspectRatio="none">
            <circle cx="150" cy="20" r="3" fill="#14b8a6" opacity="0.5" />
            <circle cx="450" cy="20" r="3" fill="#10b981" opacity="0.5" />
            <circle cx="750" cy="20" r="3" fill="#14b8a6" opacity="0.5" />
            <circle cx="1050" cy="20" r="3" fill="#10b981" opacity="0.5" />
            <circle cx="1350" cy="20" r="3" fill="#14b8a6" opacity="0.5" />
        </svg>

        <!-- Dashed curved line -->
        <svg class="absolute top-8 left-0 w-full h-8" viewBox="0 0 1600 40" preserveAspectRatio="none">
            <path d="M0,20 Q400,5 800,20 T1600,20"
                fill="none" stroke="#14b8a6" stroke-width="2"
                stroke-dasharray="10,8" opacity="5" />
        </svg>
    </div>