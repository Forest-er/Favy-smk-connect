<!-- Popular Services Carousel -->
<section class="py-16 px-6 md:px-12 lg:px-24">
    <h2 class="text-2xl font-bold text-gray-900 mb-8">Popular services</h2>

    <div id="popularServicesCarousel" class="relative overflow-hidden">
        @php
        $services = [];
        for ($i = 1; $i <= 10; $i++) {
            $services[] = [
                'id' => $i,
                'title' => "Service $i",
                'image' => asset('images/smkbm3.png'),
            ];
        }
        $slides = array_chunk($services, 5);
        @endphp

        @foreach($slides as $index => $slide)
        <div class="carousel-slide {{ $index === 0 ? 'active' : '' }} w-full">
            <!-- Tombol kiri -->
            @if($index > 0)
            <button class="carousel-nav-btn absolute left-0 top-1/2 -translate-y-1/2 z-10 p-2 bg-white rounded-full shadow-md hover:bg-gray-100 transition"
                data-slide="{{ $index - 1 }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            @endif

            <!-- Konten slide: tanpa padding kiri/kanan berlebih -->
            <div class="flex gap-6 min-w-full px-4 md:px-6">
                @foreach($slide as $service)
                <div class="w-60 shrink-0 bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition">
                    <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="w-full h-40 object-cover">
                    <div class="p-4 text-center">
                        <h3 class="font-semibold text-gray-900 truncate">{{ $service['title'] }}</h3>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Tombol kanan -->
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