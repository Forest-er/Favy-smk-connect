<!-- POPULAR SERVICES CARD LAYOUT -->
<section class="py-16 bg-white relative overflow-hidden">
    <div class="absolute inset-0 bg-linear-to-br from-blue-50 to-indigo-50 opacity-30"></div>
    <div class="container mx-auto px-4 relative z-10">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Explore a Thousand Of New Job Everyday</h2>
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
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.995 1.995 0 01-2.828 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        New York, NY
                    </span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>