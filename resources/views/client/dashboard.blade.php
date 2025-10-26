@extends('layouts.app')

@section('title', 'Dashboard Client')

@section('content')
<div class="max-w-7xl mx-auto px-1">
    <!-- Hero Section -->
    <div class="relative rounded-3xl p-10 mb-10 overflow-hidden shadow-lg border border-black/40">
        <!-- Slides -->
        <div class="absolute inset-0 w-full h-full">
            <div class="absolute inset-0 w-full h-full bg-[url('/images/slide1.png')] bg-cover bg-center opacity-100 transition-opacity duration-1000 slide"></div>
            <div class="absolute inset-0 w-full h-full bg-[url('/images/slide2.png')] bg-cover bg-center opacity-0 transition-opacity duration-1000 slide"></div>
            <div class="absolute inset-0 w-full h-full bg-[url('/images/slide3.png')] bg-cover bg-center opacity-0 transition-opacity duration-1000 slide"></div>
            <div class="absolute inset-0 w-full h-full bg-[url('/images/slide4.png')] bg-cover bg-center opacity-0 transition-opacity duration-1000 slide"></div>
        </div>

        <!-- Content on top of slides -->
        <div class="relative z-10 max-w-7xl mx-auto">
            @php
                $hour = now()->format('H');
                $greeting = $hour < 12 ? 'Good morning' : ($hour < 18 ? 'Good afternoon' : 'Good evening');
            @endphp
            <h1 class="text-3xl md:text-4xl font-bold mb-4 text-white">{{ $greeting }}, {{ Auth::user()->nama }} 👋</h1>
            <p class="mb-6 text-white/80">Find projects, freelancers, and more!</p>

            <div class="relative flex flex-col md:flex-row gap-3 mt-12">
                <img src="/images/duduk.png" class="absolute -top-[60px] right-[650px] w-40 z-20 select-none">
                <div class="relative w-[50%]">
                    <form>
                        <div class="flex flex-row">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"><i class="bi bi-search"></i></span>
                            <input type="text" placeholder="Search projects..." name="keyword"
                                class="w-full pl-12 p-3 border border-gray-300 rounded-l-full text-gray-800 focus:outline-none focus:border-blue-500">
                            <button type="submit" class="bg-white text-black py-3 px-5 rounded-r-full z-99"><i class="bi bi-search"></i></button>
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
        }, 4000);
    </script>

    <!-- Client Stats Section -->
    <section class="max-w-7xl mx-auto mb-16 px-4-ml-1">
        <h2 class="text-2xl font-bold mb-6 text-gray-900">Client Stats</h2>
        <div class="flex flex-col md:flex-row gap-4">
            <div class="flex-1 p-6 rounded-xl bg-gradient-to-br from-purple-50 to-white border border-gray-100 hover:shadow-md transition">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-sm text-gray-500">Projects Posted</span>
                    <i class="bi bi-folder2-open text-purple-500 text-lg"></i>
                </div>
                <p class="text-3xl font-bold text-gray-800">8</p>
            </div>
            <div class="flex-1 p-6 rounded-xl bg-gradient-to-br from-green-50 to-white border border-gray-100 hover:shadow-md transition">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-sm text-gray-500">Total Spent</span>
                    <i class="bi bi-cash-stack text-green-500 text-lg"></i>
                </div>
                <p class="text-3xl font-bold text-gray-800">Rp5.000.000</p>
            </div>
            <div class="flex-1 p-6 rounded-xl bg-gradient-to-br from-yellow-50 to-white border border-gray-100 hover:shadow-md transition">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-sm text-gray-500">Active Freelancers</span>
                    <i class="bi bi-people text-yellow-500 text-lg"></i>
                </div>
                <p class="text-3xl font-bold text-gray-800">7</p>
            </div>
        </div>
    </section>

    <!-- Explore Categories -->
    <div class="mb-10 flex items-center justify-between">
        <h2 class="text-2xl font-bold">Explore Categories</h2>
        <div class="flex space-x-2">
            <button class="w-8 h-8 flex items-center justify-center bg-white rounded-full shadow hover:bg-gray-100 transition">
                <svg class="w-4 h-4 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button class="w-8 h-8 flex items-center justify-center bg-white rounded-full shadow hover:bg-gray-100 transition">
                <svg class="w-4 h-4 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>

    <div class="mb-10 w-full flex flex-row items-center space-x-6 overflow-x-auto pb-10 scrollbar-thin scrollbar-hide scrollbar-thumb-gray-300">
        @php
            $styles = [
                ['bg'=>'#ffe2a8','color'=>'#7a4a00','shadow'=>'hover:shadow-[0_6px_20px_rgba(255,226,168,0.7)]','icon'=>'<path d="M8.25 15L3.75 12l4.5-3m7.5 6l4.5-3-4.5-3m-3.75-3.75L9 21" />'],
                ['bg'=>'#eaa7f1','color'=>'#6d005f','shadow'=>'hover:shadow-[0_6px_20px_rgba(234,167,241,0.7)]','icon'=>'<path d="M8.25 8.25l7.5-2.25v9l-7.5 2.25v-9zM19.5 12a3 3 0 11-6 0" />'],
                ['bg'=>'#7ac8ff','color'=>'#0f3a4b','shadow'=>'hover:shadow-[0_6px_20px_rgba(122,200,255,0.6)]','icon'=>'<path d="M12 4.5v15m-7.5-7.5h15" />'],
            ];
        @endphp

        @foreach ($jurusans as $index => $jurusan)
            @php $style = $styles[$index % count($styles)]; @endphp
            <a href="{{ route('client.dashboard', ['jurusan_id' => $jurusan->id_jurusan]) }}"
                class="group bg-white rounded-xl shadow flex flex-col items-center justify-center hover:-translate-y-1 transition cursor-pointer shrink-0 {{ $style['shadow'] }}"
                style="width: 200px; height: 140px; min-width: 140px; text-decoration: none;">
                <div class="rounded-full w-12 h-12 flex items-center justify-center mb-3 transition-all group-hover:brightness-110"
                    style="background: {{ $style['bg'] }}; color: {{ $style['color'] }};">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">{!! $style['icon'] !!}</svg>
                </div>
                <p class="text-sm font-medium text-gray-700 text-center px-2 leading-tight">{{ $jurusan->nama_jurusan }}</p>
            </a>
        @endforeach
    </div>

    <!-- Rekomendasi Project -->
    <section class="w-full -mt-10 mb-10 px-1 -ml-1">
        <h2 class="text-lg font-semibold text-pink-400 flex items-center gap-1 mb-1 text-2xl font-bold text-gray-900">
            Rekomendasi Project<span>🔥</span>
        </h2>
        <p class="text-gray-400 mb-6 text-sm">project terbaru minggu ini</p>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            @forelse ($tasks as $task)
                <div class="bg-white rounded-2xl shadow-md overflow-hidden transform hover:-translate-y-1 transition">
                    <div class="relative">
                        <img src="{{ asset('storage/' . $task->foto) }}"
                            onerror="this.src='https://images.pexels.com/photos/1181244/pexels-photo-1181244.jpeg'"
                            class="w-full h-40 object-cover">
                        <span class="absolute top-3 left-3 px-3 py-1 text-xs font-semibold rounded-full text-white bg-purple-500">
                            {{ $task->jurusan->nama_jurusan ?? 'Unknown' }}
                        </span>
                        <span class="absolute top-3 right-3 px-2 py-1 text-xs font-semibold rounded-md bg-white shadow">
                            ⭐ {{ rand(4,5) }}.{{ rand(0,9) }}
                        </span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-base font-semibold text-gray-800 leading-tight mb-2">{{ $task->judul }}</h3>
                        <div class="flex items-center gap-4 text-gray-500 text-xs mb-4">
                            <span class="flex items-center gap-1"><i class="bi bi-calendar"></i> Deadline: {{ \Carbon\Carbon::parse($task->deadline)->format('d M Y') }}</span>
                            <span class="flex items-center gap-1"><i class="bi bi-clock"></i> {{ $task->waktu_estimasi }}</span>
                        </div>
                        <div class="flex items-center justify-between mb-4">
                            <p class="text-lg font-bold text-gray-800">Rp{{ number_format($task->budget, 0, ',', '.') }}</p>
                            <div class="flex items-center gap-2">
                                <img src="https://i.pravatar.cc/150?u={{ $task->users_id }}" class="w-7 h-7 rounded-full border">
                                <span class="text-xs text-gray-600">{{ $task->user->nama ?? 'Freelancer' }}</span>
                            </div>
                        </div>
                        <button onclick="openPopup({{ $task->id_task }}); event.stopPropagation();"
                            class="w-full bg-pink-500 hover:bg-pink-600 text-white text-sm font-semibold py-2 px-4 rounded-lg transition">
                            Hire Now
                        </button>
                    </div>
                </div>
            @empty
                <p class="text-gray-500">Tugas yang Anda cari tidak ditemukan.</p>
            @endforelse
        </div>
    </section>

    <!-- Masih ada bagian Gigs, Inspired Works, Popup dsb... -->
     <!-- Overlay -->
<div id="overlay" class="fixed inset-0 bg-black/50 hidden z-40"></div>

<!-- Popup Container -->
<div id="rightPopup" class="fixed top-0 right-0 h-full w-[70%] bg-white backdrop-blur-xl shadow-2xl transform translate-x-full transition-transform duration-500 ease-in-out z-50 text-gray-800 font-sans rounded-l-3xl">
    <div class="flex flex-col h-full">

        <!-- HEADER -->
        <div class="flex items-center justify-between p-6 border-b border-gray-200 sticky top-0 z-10 bg-white shadow-sm rounded-t-3xl">
            <h3 class="text-xl font-semibold text-gray-800">Project</h3>
            <button onclick="closePopup()" class="text-gray-400 hover:text-gray-600 text-2xl transition">&times;</button>
        </div>

        <!-- MAIN SCROLL -->
        <div id="mainScroll" class="flex-1 overflow-y-auto bg-white p-8">
            <div id="profileLayout" class="flex flex-col md:flex-row gap-8">

                <!-- LEFT PANEL -->
                <div class="flex-1 space-y-8">

                    <!-- Freelancer Profile -->
                    <div class="flex items-center gap-5 bg-white border border-gray-100 rounded-2xl p-5 shadow-md">
                        <img src="{{ $task->user->foto ? asset('storage/' . $task->user->foto) : 'https://i.pravatar.cc/150?img=' . rand(1, 70) }}"
                             class="w-20 h-20 rounded-full border-4 border-white shadow-md object-cover">
                        <div class="flex flex-col flex-1">
                            <div class="flex items-center gap-2">
                                <h4 class="text-xl font-semibold text-black">{{ $task->user->nama ?? 'Anonim' }}</h4>
                                <span class="bg-green-100 text-green-700 text-xs font-medium px-2 py-0.5 rounded-full">
                                    {{ ($task->user->rating ?? 4.5) >= 4.5 ? 'Top Rated' : 'Active Freelancer' }}
                                </span>
                            </div>
                            <p class="text-gray-500 text-sm mt-0.5">{{ $task->jurusan->nama_jurusan ?? 'General Freelancer' }}</p>
                            <div class="flex items-center gap-1 text-yellow-500 mt-1">
                                @for ($i = 1; $i <= 5; $i++)
                                    <i class="bi {{ $i <= round($task->user->rating ?? 4.5) ? 'bi-star-fill' : 'bi-star' }}"></i>
                                @endfor
                                <span class="text-gray-500 ml-2 text-sm">({{ number_format($task->user->rating ?? 4.5, 1) }})</span>
                            </div>
                            <p class="text-green-600 text-sm mt-1">
                                {{ $task->user->status_online ?? true ? 'Available Now' : 'Offline' }} • Response: {{ $task->user->response_time ?? '1h' }}
                            </p>
                        </div>
                    </div>

                    <!-- Project Detail -->
                    <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm space-y-5">
                        <h2 class="text-2xl font-semibold text-gray-900">{{ $task->judul }}</h2>
                        <img src="{{ asset('storage/' . $task->foto) }}" alt="Project Image"
                             class="rounded-xl w-full h-64 object-cover shadow-md">
                        <p class="text-gray-700 leading-relaxed mt-4">{{ $task->deskripsi }}</p>

                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 text-sm mt-6">
                            <div>
                                <p class="text-gray-500">Deadline</p>
                                <p class="font-semibold text-gray-800">{{ \Carbon\Carbon::parse($task->deadline)->format('d M Y') }}</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Estimasi Waktu</p>
                                <p class="font-semibold text-gray-800">{{ $task->waktu_estimasi }}</p>
                            </div>
                            <div>
                                <p class="text-gray-500">Budget</p>
                                <p class="font-semibold text-gray-800">Rp {{ number_format($task->budget, 0, ',', '.') }}</p>
                            </div>
                        </div>

                        <span class="inline-block mt-4 px-4 py-1 rounded-full text-sm font-medium 
                          {{ $task->status === 'open' ? 'bg-green-100 text-green-700' : 
                             ($task->status === 'in_progress' ? 'bg-yellow-100 text-yellow-700' : 'bg-blue-100 text-blue-700') }}">
                            {{ ucfirst($task->status) }}
                        </span>
                    </div>

                    <!-- Comments -->
                    <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm mt-8">
                        <h5 class="font-semibold text-lg mb-4 bg-gradient-to-r from-pink-500 via-purple-500 to-blue-500 bg-clip-text text-transparent">
                            Comments & Feedback
                        </h5>

                        <div class="space-y-4">
                            @foreach ($comments ?? [] as $comment)
                                <div class="flex items-start gap-4 border-b border-gray-100 pb-3">
                                    <img src="{{ $comment['avatar'] ?? 'https://i.pravatar.cc/100?u='.$comment['nama'] }}" class="w-10 h-10 rounded-full object-cover shadow-sm">
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <h6 class="font-semibold text-gray-900">{{ $comment['nama'] }}</h6>
                                            <span class="text-xs text-gray-500">{{ $comment['waktu'] }}</span>
                                        </div>
                                        <p class="text-gray-700 text-sm mt-1">{{ $comment['komentar'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- SIDE PANEL -->
                <div id="sidePanel" class="w-full md:w-[300px] p-6 space-y-6">
                    <div class="bg-gradient-to-br from-blue-100 via-pink-100 to-yellow-100 p-4 rounded-2xl shadow-sm border border-gray-200">
                        <p class="font-semibold text-gray-900">You'll need Connects to bid</p>
                        <p class="text-gray-600 text-sm">They show clients you’re serious.</p>
                        <a href="#" class="text-blue-600 text-sm font-medium hover:underline">Learn more</a>
                    </div>

                    <button class="w-full bg-gradient-to-r from-pink-500 to-blue-500 hover:opacity-90 text-white font-semibold py-2.5 rounded-lg transition">
                        Request to Order
                    </button>

                    <button class="w-full border border-pink-400 text-pink-600 hover:bg-pink-50 font-medium py-2.5 rounded-lg flex items-center justify-center gap-2 transition">
                        <i class="bi bi-heart"></i> Save Job
                    </button>

                    <div class="pt-4 border-t border-gray-200 space-y-5">
                        <h5 class="text-lg font-semibold bg-gradient-to-r from-pink-500 via-purple-500 to-blue-500 bg-clip-text text-transparent">About Me</h5>
                        <p class="text-gray-700 text-sm mt-2">{{ $task->user->bio ?? 'I’m a passionate freelancer...' }}</p>
                        <a href="/client/explore.show" class="text-red-600 text-sm font-medium underline hover:text-red-800 mt-1 inline-block">See details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function openPopup(taskId) {
        document.getElementById('overlay').classList.remove('hidden');
        document.getElementById('rightPopup').classList.remove('translate-x-full');

        // Bisa pakai fetch untuk isi data dinamis
        // fetch(`/client/task/${taskId}`).then(...).catch(...)
    }

    function closePopup() {
        document.getElementById('overlay').classList.add('hidden');
        document.getElementById('rightPopup').classList.add('translate-x-full');
    }

    // Drag side panel
    const sidePanel = document.getElementById('sidePanel');
    let isDragging = false;

    sidePanel.addEventListener('mousedown', e => {
        isDragging = true;
        document.addEventListener('mousemove', drag);
        document.addEventListener('mouseup', stopDragging);
    });

    function drag(e) {
        if (!isDragging) return;
        const rect = document.getElementById('rightPopup').getBoundingClientRect();
        const newWidth = rect.right - e.clientX;
        if (newWidth > 220 && newWidth < 420) sidePanel.style.width = `${newWidth}px`;
    }

    function stopDragging() {
        isDragging = false;
        document.removeEventListener('mousemove', drag);
        document.removeEventListener('mouseup', stopDragging);
    }
</script>

</div>
@endsection
