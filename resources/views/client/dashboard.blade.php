@extends('layouts.app')

@section('title', 'Dashboard Client')

@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

    * {
        font-family: 'Inter', sans-serif;
    }

    .slide {
        transition: opacity 1.5s ease-in-out;
    }

    .card-hover {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .card-hover:hover {
        transform: translateY(-8px);
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
    }

    .glass-effect {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
    }

    .stat-card {
        position: relative;
        overflow: hidden;
    }

    .stat-card::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, transparent 50%, rgba(255, 255, 255, 0.1) 50%);
        border-radius: 0 0 0 100%;
    }

    .category-card {
        transition: all 0.3s ease;
    }

    .category-card:hover {
        transform: translateY(-4px);
    }

    .shimmer {
        position: relative;
        overflow: hidden;
    }

    .shimmer::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        animation: shimmer 3s infinite;
    }

    @keyframes shimmer {
        to {
            left: 100%;
        }
    }

    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }

    .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
</style>

<div class="bg-gradient-to-br from-gray-50 to-gray-100 min-h-screen">
    <div class="max-w-7xl mx-auto px-6 py-8">
        <!-- Hero Section -->
        <div class="relative rounded-3xl mb-10 overflow-hidden shadow-2xl">
            <div class="absolute inset-0">
                <div class="absolute inset-0 bg-[url('/images/slide1.png')] bg-cover bg-center opacity-100 slide"></div>
                <div class="absolute inset-0 bg-[url('/images/slide2.png')] bg-cover bg-center opacity-0 slide"></div>
                <div class="absolute inset-0 bg-[url('/images/slide3.png')] bg-cover bg-center opacity-0 slide"></div>
                <div class="absolute inset-0 bg-[url('/images/slide4.png')] bg-cover bg-center opacity-0 slide"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-pink-900/80 via-purple-800/70 to-indigo-900/80"></div>
            </div>

            <div class="relative z-10 p-10 md:p-14">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
                    <div>
                        <div class="inline-block px-4 py-1 bg-white/20 backdrop-blur-sm rounded-full text-white text-sm mb-4">
                            @php
                            $hour = now()->format('H');
                            $greeting = $hour < 12 ? 'Good Morning' : ($hour < 18 ? 'Good Afternoon' : 'Good Evening' );
                                @endphp
                                <i class="bi bi-sun"></i> {{ $greeting }}
                        </div>
                        <h1 class="text-4xl md:text-5xl font-bold text-white mb-3">selamat datang, {{ Auth::user()->nama }}! 👋</h1>
                        <p class="text-white/90 text-lg">Temukan freelancer yang tepat untuk proyek Anda berikutnya</p>
                    </div>
                </div>

                <div class="relative flex flex-col md:flex-row gap-3 mt-12">
                    <img src="/images/duduk.png" class="absolute -top-[60px] right-[650px] w-40 z-20 select-none">
                    <div class="relative w-full md:w-[50%]">
                        <form method="GET">
                            <input type="hidden" name="jurusan_id" value="{{ request('jurusan_id') }}">
                            <input type="hidden" name="per_page" value="{{ request('per_page', 9) }}">
                            <div class="flex flex-row">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"><i class="bi bi-search"></i></span>
                                <input type="text" placeholder="Cari Projek.." name="keyword"
                                    value="{{ request('keyword') }}"
                                    class="w-full pl-12 p-3 border border-gray-300 rounded-l-full text-gray-800 focus:outline-none focus:ring-2 focus:ring-pink-400 shadow-lg">
                                <button type="submit" class="bg-white text-black py-3 px-5 rounded-r-full hover:bg-gray-50 transition shadow-lg">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            const slides = document.querySelectorAll('.slide');
            let current = 0;
            setInterval(() => {
                slides[current].classList.remove('opacity-100');
                slides[current].classList.add('opacity-0');
                current = (current + 1) % slides.length;
                slides[current].classList.remove('opacity-0');
                slides[current].classList.add('opacity-100');
            }, 5000);
        </script>

        <!-- Client Stats -->
        <section class="mb-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="stat-card bg-white rounded-2xl p-6 shadow-lg card-hover border border-gray-100">
                    <div class="flex items-start justify-between mb-4">
                        <div class="w-12 h-12 rounded-xl bg-purple-50 flex items-center justify-center">
                            <i class="bi bi-folder2-open text-purple-600 text-xl"></i>
                        </div>
                        <span class="text-xs font-semibold text-purple-600 bg-purple-50 px-2 py-1 rounded-full">Aktif</span>
                    </div>
                    <p class="text-gray-500 text-sm mb-1 font-medium">Projek diunggah</p>
                    <p class="text-4xl font-bold text-gray-900 mb-2">{{ $totalTasks }}</p>
                    <p class="text-xs text-gray-500">{{ $totalTasks - 2 }} dalam progres</p>
                </div>

                <div class="stat-card bg-white rounded-2xl p-6 shadow-lg card-hover border border-gray-100">
                    <div class="flex items-start justify-between mb-4">
                        <div class="w-12 h-12 rounded-xl bg-yellow-50 flex items-center justify-center">
                            <i class="bi bi-people text-yellow-600 text-xl"></i>
                        </div>
                        <span class="text-xs font-semibold text-blue-600 bg-blue-50 px-2 py-1 rounded-full">Terverifikasi</span>
                    </div>
                    <p class="text-gray-500 text-sm mb-1 font-medium">Freelancer Aktif</p>
                    <p class="text-4xl font-bold text-gray-900 mb-2">{{ $totalFreelancer }}</p>
                    <div class="flex items-center text-xs text-yellow-500">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <span class="ml-2 text-gray-500">(4.8/5.0)</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Explore Categories -->
        <section class="mb-12">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900">Explore Kategori</h2>
                    <p class="text-gray-500 text-sm mt-1">Telusuri freelancer berdasarkan keahlian</p>
                </div>
                <div class="flex gap-2">
                    <button onclick="scrollCategories('left')" class="w-10 h-10 flex items-center justify-center bg-white rounded-full shadow-md hover:bg-gray-50 transition">
                        <i class="bi bi-chevron-left text-gray-700"></i>
                    </button>
                    <button onclick="scrollCategories('right')" class="w-10 h-10 flex items-center justify-center bg-white rounded-full shadow-md hover:bg-gray-50 transition">
                        <i class="bi bi-chevron-right text-gray-700"></i>
                    </button>
                </div>
            </div>

            <div id="categoriesContainer" class="flex gap-4 overflow-x-auto scrollbar-hide pb-4">
                @php
                $styles = [
                ['bg'=>'#ffe2a8','color'=>'#7a4a00','icon'=>'code-slash'],
                ['bg'=>'#eaa7f1','color'=>'#6d005f','icon'=>'palette'],
                ['bg'=>'#7ac8ff','color'=>'#0f3a4b','icon'=>'pencil-square'],
                ['bg'=>'#a8e6cf','color'=>'#0d4f2e','icon'=>'camera'],
                ['bg'=>'#ffb3ba','color'=>'#8b0000','icon'=>'megaphone'],
                ];
                @endphp

                @foreach ($jurusans as $index => $jurusan)
                @php $style = $styles[$index % count($styles)]; @endphp
                <a href="{{ route('client.dashboard', array_filter(['jurusan_id' => $jurusan->id_jurusan, 'per_page' => request('per_page', 9)])) }}"
                    class="category-card bg-white rounded-2xl shadow-md hover:shadow-xl p-6 flex flex-col items-center justify-center shrink-0 border border-gray-100"
                    style="min-width: 180px; height: 160px; text-decoration: none;">
                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center mb-4 transition-transform hover:scale-110"
                        style="background: {{ $style['bg'] }};">
                        <i class="bi bi-{{ $style['icon'] }} text-2xl" style="color: {{ $style['color'] }};"></i>
                    </div>
                    <p class="text-sm font-semibold text-gray-800 text-center leading-tight">{{ $jurusan->nama_jurusan }}</p>
                </a>
                @endforeach
            </div>
        </section>

        <script>
            function scrollCategories(direction) {
                const container = document.getElementById('categoriesContainer');
                const scrollAmount = 400;
                if (direction === 'left') {
                    container.scrollBy({
                        left: -scrollAmount,
                        behavior: 'smooth'
                    });
                } else {
                    container.scrollBy({
                        left: scrollAmount,
                        behavior: 'smooth'
                    });
                }
            }
        </script>

        <!-- Popular Projects -->
        <section class="mb-12">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 flex items-center gap-2">
                        Projek Terbaru <span class="text-3xl">🔥</span>
                    </h2>
                    <p class="text-gray-500 text-sm mt-1">Projek tersedia minggu ini</p>
                </div>
                <button class="text-pink-600 hover:text-pink-700 font-semibold text-sm flex items-center gap-2 transition">
                    View All <i class="bi bi-arrow-right"></i>
                </button>
            </div>

            {{-- ✅ RESPONSIVE GRID: 1 kolom di mobile, 3 kolom di tablet+ --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                @foreach ($tasks as $task)
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-gray-100">
                    <div class="relative">
                        <img
                            src="{{ asset('storage/' . $task->foto) }}"
                            onerror="this.src='https://images.pexels.com/photos/1181244/pexels-photo-1181244.jpeg'"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 text-xs font-semibold rounded-full text-white bg-gradient-to-r from-pink-500 to-purple-600 shadow-lg">
                                {{ $task->jurusan->nama_jurusan ?? 'Unknown' }}
                            </span>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="px-2 py-1 text-xs font-semibold rounded-lg bg-white shadow flex items-center gap-1">
                                <i class="bi bi-star-fill text-yellow-400 text-[10px]"></i>
                                {{ rand(4,5) }}.{{ rand(0,9) }}
                            </span>
                        </div>
                    </div>

                    <div class="p-5">
                        <h3 class="font-bold text-lg mb-2 text-gray-900 line-clamp-1">{{ $task->judul }}</h3>

                        <div class="flex items-center gap-2 mb-4">
                            <img src="https://i.pravatar.cc/150?u={{ $task->users_id }}" class="w-8 h-8 rounded-full ring-2 ring-gray-100">
                            <div>
                                <p class="text-md text-gray-800">{{ $task->user->nama ?? 'Client' }}</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3 text-xs text-gray-500 mb-4">
                            <span class="flex items-center gap-1">
                                <i class="bi bi-calendar3"></i>
                                {{ \Carbon\Carbon::parse($task->deadline)->format('d M Y') }}
                            </span>
                            <span class="flex items-center gap-1">
                                <i class="bi bi-clock"></i>
                                {{ $task->waktu_estimasi }}
                            </span>
                        </div>

                        <div class="flex items-center justify-between mb-4 pb-4 border-t border-gray-100 pt-4">
                            <div>
                                <p class="text-xs text-gray-500">Budget</p>
                                <p class="text-xl font-bold text-gray-900">Rp{{ number_format($task->budget, 0, ',', '.') }}</p>
                            </div>
                        </div>

                        <button onclick="openPopup({{ $task->id_task }}); event.stopPropagation();"
                            class="w-full bg-gradient-to-r from-pink-500 to-purple-600 hover:from-pink-600 hover:to-purple-700 text-white font-semibold py-3 rounded-xl transition shadow-lg shadow-pink-200">
                            Lihat Detail
                        </button>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Pagination -->
            @if ($tasks->hasPages())
            <div class="mt-8">
                {{ $tasks->links() }}
            </div>
            @endif
        </section>
    </div>
</div>

<!-- Overlay -->
<div id="overlay" class="fixed inset-0 bg-black/50 hidden z-40" onclick="closePopup()"></div>

<!-- Popup Container -->
<div id="rightPopup" class="fixed top-0 right-0 h-full w-full md:w-[90%] lg:w-[70%] bg-white backdrop-blur-xl shadow-2xl transform translate-x-full transition-transform duration-500 ease-in-out z-50 text-gray-800 font-sans rounded-l-3xl overflow-y-auto max-h-screen">
    <div class="flex flex-col h-full">
        <div id="rightPopupContent" class="p-4">
            <!-- Konten popup akan dimuat di sini -->
        </div>
    </div>
</div>

<script>
    function openPopup(taskId) {
        document.body.style.overflow = 'hidden';
        document.getElementById('overlay').classList.remove('hidden');
        document.getElementById('rightPopup').classList.remove('translate-x-full');

        fetch(`/client/task/${taskId}`)
            .then(response => response.text())
            .then(html => {
                document.getElementById('rightPopupContent').innerHTML = html;
            })
            .catch(error => console.error('Error:', error));
    }

    function closePopup() {
        document.body.style.overflow = '';
        document.getElementById('overlay').classList.add('hidden');
        document.getElementById('rightPopup').classList.add('translate-x-full');
    }

    // ✅ DETEKSI MOBILE & SET PER_PAGE
    function setPerPageOnLoad() {
        const url = new URL(window.location);
        const isMobile = window.innerWidth < 768; // Tailwind sm:768px
        const currentPerPage = url.searchParams.get('per_page');

        if (isMobile) {
            if (currentPerPage !== '9') {
                url.searchParams.set('per_page', '9');
                // Pertahankan parameter lain
                window.location.href = url.toString();
            }
        } else {
            if (currentPerPage !== '9' && currentPerPage !== null) {
                url.searchParams.set('per_page', '9');
                window.location.href = url.toString();
            }
        }
    }

    // Jalankan sekali saat halaman dimuat
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', setPerPageOnLoad);
    } else {
        setPerPageOnLoad();
    }
</script>

@endsection