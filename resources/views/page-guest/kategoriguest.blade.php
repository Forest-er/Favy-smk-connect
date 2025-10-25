<!-- POPULAR SERVICES CARD LAYOUT -->
<section class="py-16 bg-white relative">
    <div class="absolute inset-0 bg-linear-to-br from-blue-50 to-indigo-50 opacity-30 pointer-events-none"></div>
    <div class="container mx-auto px-4 relative z-10">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">Explore a Thousand Of New Job Everyday</h2>

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
                <div class="shrink-0 w-64 sm:w-72 p-10 rounded-xl shadow-lg {{ $service['color'] }} transform transition-all duration-300 hover:scale-105 hover:-translate-y-2.5 hover:z-50 hover:shadow-2xl cursor-pointer relative"
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
    </div>
</section>

<style>
/* Hilangkan scrollbar tapi izinkan scroll horizontal */
#carouselWrapper {
    -ms-overflow-style: none;
    scrollbar-width: none;
    padding-bottom: 3rem; /* agar shadow & hover tidak terpotong bawah */
}
#carouselWrapper::-webkit-scrollbar {
    display: none;
}

/* Pastikan bayangan tidak terpotong */
#carouselTrack {
    overflow: visible;
}

/* Hover shadow smooth */
#carouselTrack > div {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
#carouselTrack > div:hover {
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.25);
}

/* Hilangkan horizontal scrollbar di body */
body {
    overflow-x: hidden;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const wrapper = document.getElementById('carouselWrapper');
    const track = document.getElementById('carouselTrack');
    const cards = Array.from(track.children);
    if (cards.length === 0) return;

    // Gandakan isi untuk looping tanpa ubah struktur
    track.innerHTML += track.innerHTML;
    const allCards = Array.from(track.children);

    let scrollSpeed = 0.7; // px per frame
    let animationFrame;

    function autoScroll() {
        wrapper.scrollLeft += scrollSpeed;

        // looping mulus
        if (wrapper.scrollLeft >= wrapper.scrollWidth / 2) {
            wrapper.scrollLeft = 0;
        }

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

    // Hover = pause
    wrapper.addEventListener('mouseenter', stopScroll);
    wrapper.addEventListener('mouseleave', startScroll);

    startScroll();
});
</script>
