<!-- resources/views/carousel.blade.php -->
<section class="py-16 bg-white relative overflow-hidden">
    <!-- Background gradient subtle -->
    <div class="absolute inset-0 bg-linear-to-br from-blue-50 to-indigo-50 opacity-30 pointer-events-none"></div>

    <!-- Hiasan Dekoratif Background -->
    <div class="absolute top-20 left-20 w-48 h-48 bg-blue-400/35 rounded-full blur-3xl"></div>
    <div class="absolute bottom-20 right-20 w-80 h-80 bg-purple-400/35 rounded-full blur-3xl"></div>
    <div class="absolute top-32 right-1/4 w-16 h-16 border-4 border-blue-500/50 rounded-lg rotate-12"></div>
    <div class="absolute bottom-24 left-1/4 w-12 h-12 border-4 border-purple-500/50 rounded-full"></div>
    <div class="absolute top-20 left-1/3 w-4 h-4 bg-blue-500/60 rounded-full"></div>
    <div class="absolute top-40 right-1/3 w-4 h-4 bg-purple-500/60 rounded-full"></div>
    <div class="absolute bottom-32 left-1/5 w-3 h-3 bg-indigo-500/60 rounded-full"></div>
    <div class="absolute bottom-20 right-1/5 w-4 h-4 bg-pink-500/60 rounded-full"></div>
    <div class="absolute top-1/3 left-16" style="width: 0; height: 0; border-left: 12px solid transparent; border-right: 12px solid transparent; border-bottom: 21px solid rgba(59, 130, 246, 0.5);"></div>
    <div class="absolute bottom-1/3 right-16" style="width: 0; height: 0; border-left: 15px solid transparent; border-right: 15px solid transparent; border-bottom: 26px solid rgba(168, 85, 247, 0.5); transform: rotate(180deg);"></div>
    <div class="absolute top-1/4 right-20 text-2xl font-bold text-blue-500/50">+</div>
    <div class="absolute bottom-1/4 left-20 text-xl font-bold text-purple-500/50">+</div>
    <svg class="absolute top-16 right-1/3 w-24 h-24 opacity-40" viewBox="0 0 100 100">
        <line x1="0" y1="0" x2="100" y2="100" stroke="#3b82f6" stroke-width="2" />
        <line x1="0" y1="100" x2="100" y2="0" stroke="#a855f7" stroke-width="2" />
    </svg>
    <svg class="absolute bottom-1/4 right-1/3 w-20 h-20 opacity-45" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="40" fill="none" stroke="#6366f1" stroke-width="2" stroke-dasharray="5,5" />
    </svg>
    <div class="absolute top-1/2 left-1/4 text-xl text-indigo-500/50">★</div>

    <div class="container mx-auto px-4 relative z-10">
        <h2 class="text-2xl font-bold text-gray-900 mb-8 text-center">
            Explore a Thousand Of New Job Everyday
        </h2>

        <!-- Carousel wrapper -->
        <div id="carouselWrapper" class="relative overflow-x-auto overflow-y-visible py-6 -mx-4 px-4">
            <div id="carouselTrack" class="flex flex-nowrap gap-4 md:gap-8 scroll-smooth">
                @php
                $colors = ['bg-pink-200','bg-blue-200','bg-orange-200','bg-green-200','bg-purple-200','bg-yellow-200'];
                $jurusans = \DB::table('kategori_jurusan')->get(); // ambil semua jurusan
                @endphp

                @foreach($jurusans as $index => $jurusan)
                @php
                $color = $colors[$index % count($colors)];
                $rotate = ($index % 2 == 0) ? '-3deg' : '3deg';
                @endphp

                <div class="shrink-0 w-64 sm:w-72 p-10 rounded-xl shadow-lg {{ $color }} transform transition-all duration-300 hover:scale-105 hover:-translate-y-2.5 hover:z-50 hover:shadow-2xl cursor-pointer relative flex flex-col items-center text-center overflow-hidden"
                    style="transform: rotate({{ $rotate }})"
                    data-index="{{ $index }}">

                    <!-- Hiasan putih di dalam Card - lebih terlihat -->
                    <!-- Circle blur putih dengan opacity lebih tinggi -->
                    <div class="absolute -top-8 -right-8 w-32 h-32 bg-white/50 rounded-full blur-2xl"></div>
                    <div class="absolute -bottom-6 -left-6 w-28 h-28 bg-white/50 rounded-full blur-2xl"></div>
                    
                    <!-- Dots putih lebih besar dan lebih terlihat -->
                    <div class="absolute top-4 right-6 w-3 h-3 bg-white/70 rounded-full"></div>
                    <div class="absolute top-8 right-4 w-2.5 h-2.5 bg-white/60 rounded-full"></div>
                    <div class="absolute bottom-6 left-4 w-3 h-3 bg-white/70 rounded-full"></div>
                    <div class="absolute bottom-10 left-6 w-2.5 h-2.5 bg-white/60 rounded-full"></div>
                    <div class="absolute top-16 left-8 w-2 h-2 bg-white/65 rounded-full"></div>
                    <div class="absolute bottom-16 right-8 w-2 h-2 bg-white/65 rounded-full"></div>
                    
                    <!-- Geometric shapes putih lebih tebal -->
                    <div class="absolute top-6 left-4 w-8 h-8 border-3 border-white/60 rounded-full rotate-45"></div>
                    <div class="absolute bottom-4 right-4 w-7 h-7 border-3 border-white/55 rotate-12" style="clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);"></div>
                    
                    <!-- Plus sign putih lebih besar -->
                    <div class="absolute top-1/4 right-8 text-lg font-bold text-white/50">+</div>
                    
                    <!-- Star putih lebih besar -->
                    <div class="absolute bottom-1/4 left-8 text-base text-white/55">★</div>
                    
                    <!-- Lines pattern putih lebih tebal -->
                    <svg class="absolute top-12 right-6 w-10 h-10 opacity-50" viewBox="0 0 100 100">
                        <line x1="0" y1="0" x2="100" y2="100" stroke="white" stroke-width="3"/>
                        <line x1="0" y1="100" x2="100" y2="0" stroke="white" stroke-width="3"/>
                    </svg>
                    
                    <!-- Tambahan circle kecil -->
                    <div class="absolute top-1/3 right-12 w-4 h-4 border-2 border-white/60 rounded-full"></div>

                    <!-- Icon -->
                    <div class="flex items-center justify-center mb-4 space-x-2 relative z-10">
                        <i class="bi bi-pc-display-horizontal"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        </svg>
                    </div>

                    <!-- Nama jurusan -->
                    <h3 class="font-bold text-gray-900 text-lg mb-2 relative z-10">{{ $jurusan->jurusan }}</h3>

                    <!-- Badge -->
                    <div class="mb-3 w-full relative z-10">
                        <div class="flex justify-center flex-wrap gap-2">
                            @if($jurusan->deskripsi_1)
                            <span class="px-3 py-1 bg-white text-xs rounded-full whitespace-normal warp-break-words">
                                {{ $jurusan->deskripsi_1 }}
                            </span>
                            @endif
                            @if($jurusan->deskripsi_2)
                            <span class="px-3 py-1 bg-white text-xs rounded-full whitespace-normal warp-break-words">
                                {{ $jurusan->deskripsi_2 }}
                            </span>
                            @endif
                        </div>

                        @if($jurusan->deskripsi_3)
                        <div class="flex justify-center mt-1">
                            <span class="px-3 py-1 bg-white text-xs rounded-full whitespace-normal warp-break-words">
                                {{ $jurusan->deskripsi_3 }}
                            </span>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Garis dekoratif di bawah carousel -->
        <div class="relative mt-8 h-16">
            <svg class="absolute inset-x-0 top-0 w-full h-12" viewBox="0 0 1200 60" preserveAspectRatio="none">
                <path d="M0,30 Q150,10 300,30 T600,30 T900,30 T1200,30" fill="none" stroke="#3b82f6" stroke-width="3" opacity="0.4" />
                <path d="M0,30 Q150,50 300,30 T600,30 T900,30 T1200,30" fill="none" stroke="#a855f7" stroke-width="3" opacity="0.4" />
            </svg>
            <svg class="absolute inset-x-0 top-6 w-full h-8" viewBox="0 0 1200 40" preserveAspectRatio="none">
                <polyline points="0,20 100,10 200,20 300,10 400,20 500,10 600,20 700,10 800,20 900,10 1000,20 1100,10 1200,20"
                    fill="none" stroke="#ec4899" stroke-width="2" opacity="0.3" />
            </svg>
            <svg class="absolute inset-x-0 top-10 w-full h-4" viewBox="0 0 1200 20" preserveAspectRatio="none">
                <line x1="0" y1="10" x2="1200" y2="10" stroke="#6366f1" stroke-width="2" stroke-dasharray="8,12" opacity="0.35" />
            </svg>
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
    padding-bottom: 3rem;
}
#carouselWrapper::-webkit-scrollbar { display: none; }
#carouselTrack>div { transition: transform 0.3s ease, box-shadow 0.3s ease; }
#carouselTrack>div:hover { box-shadow: 0 15px 30px rgba(0,0,0,0.25); }
body { overflow-x: hidden; }
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const wrapper = document.getElementById('carouselWrapper');
    const track = document.getElementById('carouselTrack');
    if (!wrapper || !track) return;

    const originalCards = Array.from(track.children);
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

    function startScroll() { if (!animationFrame) animationFrame = requestAnimationFrame(autoScroll); }
    function stopScroll() { if (animationFrame) { cancelAnimationFrame(animationFrame); animationFrame = null; } }

    wrapper.addEventListener('mouseenter', stopScroll);
    wrapper.addEventListener('mouseleave', startScroll);
    window.addEventListener('resize', () => { if (wrapper.scrollLeft >= track.scrollWidth / 2) wrapper.scrollLeft = 0; });

    startScroll();
});
</script>