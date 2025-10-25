<!-- resources/views/carousel.blade.php -->
<section class="py-16 bg-white relative overflow-hidden">
    <!-- Background gradient subtle -->
    <div class="absolute inset-0 bg-linear-to-br from-blue-50 to-indigo-50 opacity-30 pointer-events-none"></div>
    
    <!-- Hiasan Dekoratif Background -->
    <!-- Circle blur besar dengan warna lebih pekat -->
    <div class="absolute top-20 left-20 w-48 h-48 bg-blue-400/35 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 right-20 w-80 h-80 bg-purple-400/35 rounded-full blur-3xl"></div>
    
    <!-- Geometric shapes dengan warna lebih pekat -->
    <div class="absolute top-32 right-1/4 w-16 h-16 border-4 border-blue-500/50 rounded-lg rotate-12"></div>
    <div class="absolute bottom-24 left-1/4 w-12 h-12 border-4 border-purple-500/50 rounded-full"></div>
    
    <!-- Dots scattered dengan warna lebih bold -->
    <div class="absolute top-20 left-1/3 w-4 h-4 bg-blue-500/60 rounded-full"></div>
    <div class="absolute top-40 right-1/3 w-4 h-4 bg-purple-500/60 rounded-full"></div>
    <div class="absolute bottom-32 left-1/5 w-3 h-3 bg-indigo-500/60 rounded-full"></div>
    <div class="absolute bottom-20 right-1/5 w-4 h-4 bg-pink-500/60 rounded-full"></div>
    
    <!-- Triangle shapes dengan warna lebih pekat -->
    <div class="absolute top-1/3 left-16" style="width: 0; height: 0; border-left: 12px solid transparent; border-right: 12px solid transparent; border-bottom: 21px solid rgba(59, 130, 246, 0.5);"></div>
    <div class="absolute bottom-1/3 right-16" style="width: 0; height: 0; border-left: 15px solid transparent; border-right: 15px solid transparent; border-bottom: 26px solid rgba(168, 85, 247, 0.5); transform: rotate(180deg);"></div>
    
    <!-- Plus signs dengan warna lebih bold -->
    <div class="absolute top-1/4 right-20 text-2xl font-bold text-blue-500/50">+</div>
    <div class="absolute bottom-1/4 left-20 text-xl font-bold text-purple-500/50">+</div>
    
    <!-- Lines pattern dengan warna lebih pekat -->
    <svg class="absolute top-16 right-1/3 w-24 h-24 opacity-40" viewBox="0 0 100 100">
        <line x1="0" y1="0" x2="100" y2="100" stroke="#3b82f6" stroke-width="2"/>
        <line x1="0" y1="100" x2="100" y2="0" stroke="#a855f7" stroke-width="2"/>
    </svg>
    
    <!-- Dashed circle dengan warna lebih pekat -->
    <svg class="absolute bottom-1/4 right-1/3 w-20 h-20 opacity-45" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="40" fill="none" stroke="#6366f1" stroke-width="2" stroke-dasharray="5,5"/>
    </svg>
    
    <!-- Star shape -->
    <div class="absolute top-1/2 left-1/4 text-xl text-indigo-500/50">★</div>
    
    <div class="container mx-auto px-4 relative z-10">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">
            Explore a Thousand Of New Job Everyday
        </h2>

        <!-- Wrapper dengan overflow-x-auto tapi overflow-y-visible agar hover tidak terpotong -->
        <div id="carouselWrapper" class="relative overflow-x-auto overflow-y-visible py-6 -mx-4 px-4">
            <div id="carouselTrack" class="flex flex-nowrap gap-4 md:gap-8 scroll-smooth">
                @php
                    $services = [
                        ['title' => 'Senior UI/UX Designer', 'color' => 'bg-pink-100', 'icon' => 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/icons/palette.svg'],
                        ['title' => 'Junior UI/UX Designer', 'color' => 'bg-blue-100', 'icon' => 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/icons/pc-display-horizontal.svg'],
                        ['title' => 'Senior Motion Designer', 'color' => 'bg-orange-100', 'icon' => 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/icons/film.svg'],
                        ['title' => 'Senior Graphic Designer', 'color' => 'bg-green-100', 'icon' => 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/icons/pencil-square.svg'],
                        ['title' => 'Frontend Developer', 'color' => 'bg-purple-100', 'icon' => 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/icons/code-slash.svg'],
                        ['title' => 'Data Analyst', 'color' => 'bg-yellow-100', 'icon' => 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/icons/bar-chart.svg'],
                    ];
                @endphp

                @foreach($services as $index => $service)
                    @php
                        $rotate = ($index % 2 == 0) ? '-3deg' : '3deg';
                    @endphp

                    <div
                        class="shrink-0 w-64 sm:w-72 p-10 rounded-xl shadow-lg {{ $service['color'] }} transform transition-all duration-300 hover:scale-105 hover:-translate-y-2.5 hover:z-50 hover:shadow-2xl cursor-pointer relative"
                        style="transform: rotate({{ $rotate }})"
                        data-index="{{ $index }}"
                    >
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
        
        <!-- Garis dekoratif di bawah carousel -->
        <div class="relative mt-8 h-16">
            <!-- Wavy line -->
            <svg class="absolute inset-x-0 top-0 w-full h-12" viewBox="0 0 1200 60" preserveAspectRatio="none">
                <path d="M0,30 Q150,10 300,30 T600,30 T900,30 T1200,30" fill="none" stroke="#3b82f6" stroke-width="3" opacity="0.4"/>
                <path d="M0,30 Q150,50 300,30 T600,30 T900,30 T1200,30" fill="none" stroke="#a855f7" stroke-width="3" opacity="0.4"/>
            </svg>
            
            <!-- Zigzag line -->
            <svg class="absolute inset-x-0 top-6 w-full h-8" viewBox="0 0 1200 40" preserveAspectRatio="none">
                <polyline points="0,20 100,10 200,20 300,10 400,20 500,10 600,20 700,10 800,20 900,10 1000,20 1100,10 1200,20" 
                    fill="none" stroke="#ec4899" stroke-width="2" opacity="0.3"/>
            </svg>
            
            <!-- Dotted line -->
            <svg class="absolute inset-x-0 top-10 w-full h-4" viewBox="0 0 1200 20" preserveAspectRatio="none">
                <line x1="0" y1="10" x2="1200" y2="10" stroke="#6366f1" stroke-width="2" stroke-dasharray="8,12" opacity="0.35"/>
            </svg>
            
            <!-- Small circles along the path -->
            <div class="absolute top-4 left-1/4 w-3 h-3 bg-blue-500/50 rounded-full"></div>
            <div class="absolute top-8 left-1/2 w-3 h-3 bg-purple-500/50 rounded-full"></div>
            <div class="absolute top-6 right-1/4 w-3 h-3 bg-pink-500/50 rounded-full"></div>
        </div>
    </div>
</section>

<style>
#carouselWrapper {
    -ms-overflow-style: none;
    scrollbar-width: none;
    padding-bottom: 3rem; /* agar shadow & hover tidak terpotong bawah */
}
#carouselWrapper::-webkit-scrollbar {
    display: none;
}
#carouselTrack {
    overflow: visible;
}
#carouselTrack > div {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
#carouselTrack > div:hover {
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.25);
}
body {
    overflow-x: hidden;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const wrapper = document.getElementById('carouselWrapper');
    const track = document.getElementById('carouselTrack');

    if (!wrapper || !track) return;

    const originalCards = Array.from(track.children);
    if (originalCards.length === 0) return;

    originalCards.forEach(card => {
        const clone = card.cloneNode(true);
        track.appendChild(clone);
    });

    let scrollSpeed = 0.8;
    let animationFrame = null;

    function autoScroll() {
        wrapper.scrollLeft += scrollSpeed;
        if (wrapper.scrollLeft >= track.scrollWidth / 2) wrapper.scrollLeft = 0;
        animationFrame = requestAnimationFrame(autoScroll);
    }

    function startScroll() {
        if (!animationFrame) animationFrame = requestAnimationFrame(autoScroll);
    }

    function stopScroll() {
        if (animationFrame) {
            cancelAnimationFrame(animationFrame);
            animationFrame = null;
        }
    }

    wrapper.addEventListener('mouseenter', stopScroll);
    wrapper.addEventListener('mouseleave', startScroll);
    window.addEventListener('resize', () => {
        if (wrapper.scrollLeft >= track.scrollWidth / 2) wrapper.scrollLeft = 0;
    });

    startScroll();
});
</script>