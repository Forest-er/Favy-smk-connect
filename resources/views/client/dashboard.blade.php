@extends('layouts.app')

@section('title', 'Dashboard Client')

@section('content')
    <div class="max-w-7xl mx-auto px-1">
        <!-- Hero Section -->
        <div class="relative rounded-3xl p-10 mb-10 overflow-hidden shadow-lg border border-black/40">

            <!-- 🔹 Slides -->
            <div class="absolute inset-0 w-full h-full">
                <div
                    class="absolute inset-0 w-full h-full bg-[url('/images/slide1.png')] bg-cover bg-center opacity-100 transition-opacity duration-1000 slide">
                </div>
                <div
                    class="absolute inset-0 w-full h-full bg-[url('/images/slide2.png')] bg-cover bg-center opacity-0 transition-opacity duration-1000 slide">
                </div>
                <div
                    class="absolute inset-0 w-full h-full bg-[url('/images/slide3.png')] bg-cover bg-center opacity-0 transition-opacity duration-1000 slide">
                </div>
                <div
                    class="absolute inset-0 w-full h-full bg-[url('/images/slide4.png')] bg-cover bg-center opacity-0 transition-opacity duration-1000 slide">
                </div>
            </div>

            <!-- 🔹 Konten di atas slide -->
            <div class="relative z-10 max-w-7xl mx-auto">
                <!-- Greeting -->
                @php
                    $hour = now()->format('H');
                    if ($hour < 12) {
                        $greeting = 'Good morning';
                    } elseif ($hour < 18) {
                        $greeting = 'Good afternoon';
                    } else {
                        $greeting = 'Good evening';
                    }
                @endphp

                <h1 class="text-3xl md:text-4xl font-bold mb-4 text-white">
                    {{ $greeting }}, {{ Auth::user()->nama }} 👋
                </h1>
                <p class="mb-6 text-white/80">Find projects, freelancers, and more!</p>

                <div class="relative flex flex-col md:flex-row gap-3 mt-12">
                    <img src="/images/duduk.png" class="absolute -top-[60px] right-[650px] w-40 z-20 select-none">
                    <div class="relative w-[50%]">
                        <form>
                            <div class="flex flex-row">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="text" placeholder="Search projects..." name="keyword"
                                class="w-full pl-12 p-3 border border-gray-300 rounded-l-full text-gray-800 focus:outline-none focus:border-blue-500">
                                <button type="submit" class=" bg-white text-black py-3 px-5 rounded-r-full z-99"><i class="bi bi-search"></i></button>
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
            }, 4000); // ganti tiap 4 detik
        </script>


<!-- Freelancer Stats Section -->
<section class="max-w-7xl mx-auto mb-16 px-4-ml-1">
  <h2 class="text-2xl font-bold mb-6 text-gray-900">Client Stats</h2>

  <div class="flex flex-col md:flex-row gap-4">
    <!-- Projects Posted -->
    <div class="flex-1 p-6 rounded-xl bg-gradient-to-br from-purple-50 to-white border border-gray-100 hover:shadow-md transition">
      <div class="flex items-center justify-between mb-2">
        <span class="text-sm text-gray-500">Projects Posted</span>
        <i class="bi bi-folder2-open text-purple-500 text-lg"></i>
      </div>
      <p class="text-3xl font-bold text-gray-800">8</p>
    </div>

    <!-- Total Spent -->
    <div class="flex-1 p-6 rounded-xl bg-gradient-to-br from-green-50 to-white border border-gray-100 hover:shadow-md transition">
      <div class="flex items-center justify-between mb-2">
        <span class="text-sm text-gray-500">Total Spent</span>
        <i class="bi bi-cash-stack text-green-500 text-lg"></i>
      </div>
      <p class="text-3xl font-bold text-gray-800">Rp5.000.000</p>
    </div>

    <!-- Active Freelancers -->
    <div class="flex-1 p-6 rounded-xl bg-gradient-to-br from-yellow-50 to-white border border-gray-100 hover:shadow-md transition">
      <div class="flex items-center justify-between mb-2">
        <span class="text-sm text-gray-500">Active Freelancers</span>
        <i class="bi bi-people text-yellow-500 text-lg"></i>
      </div>
      <p class="text-3xl font-bold text-gray-800">7</p>
    </div>
  </div>
</section>


        <!-- Categories Section -->
        <!-- Categories Section -->
        <div class="mb-10 flex items-center justify-between">
            <h2 class="text-2xl font-bold">Explore Categories</h2>
            <div class="flex space-x-2">
                <button
                    class="w-8 h-8 flex items-center justify-center bg-white rounded-full shadow hover:bg-gray-100 transition">
                    <svg class="w-4 h-4 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button
                    class="w-8 h-8 flex items-center justify-center bg-white rounded-full shadow hover:bg-gray-100 transition">
                    <svg class="w-4 h-4 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Category Icons Grid -->
        <div
            class="mb-10 w-full flex flex-row items-center space-x-6 overflow-x-auto pb-10 scrollbar-thin scrollbar-hide scrollbar-thumb-gray-300">

            @php
                $styles = [
                    [
                        'bg' => '#ffe2a8',
                        'color' => '#7a4a00',
                        'shadow' => 'hover:shadow-[0_6px_20px_rgba(255,226,168,0.7)]',
                        'icon' => '<path d="M8.25 15L3.75 12l4.5-3m7.5 6l4.5-3-4.5-3m-3.75-3.75L9 21" />'
                    ],
                    [
                        'bg' => '#eaa7f1',
                        'color' => '#6d005f',
                        'shadow' => 'hover:shadow-[0_6px_20px_rgba(234,167,241,0.7)]',
                        'icon' => '<path d="M8.25 8.25l7.5-2.25v9l-7.5 2.25v-9zM19.5 12a3 3 0 11-6 0" />'
                    ],
                    [
                        'bg' => '#7ac8ff',
                        'color' => '#0f3a4b',
                        'shadow' => 'hover:shadow-[0_6px_20px_rgba(122,200,255,0.6)]',
                        'icon' => '<path d="M12 4.5v15m-7.5-7.5h15" />'
                    ],
                ];
            @endphp

            @foreach ($jurusans as $index => $jurusan)
                @php
                    $style = $styles[$index % count($styles)];
                @endphp

                <a href="{{ route('client.dashboard', ['jurusan_id' => $jurusan->id_jurusan]) }}"
                class="group bg-white rounded-xl shadow flex flex-col items-center justify-center 
                        hover:-translate-y-1 transition cursor-pointer shrink-0 {{ $style['shadow'] }}"
                style="width: 200px; height: 140px; min-width: 140px; text-decoration: none;">
                
                    <div class="rounded-full w-12 h-12 flex items-center justify-center mb-3 transition-all 
                                                group-hover:brightness-110"
                        style="background: {{ $style['bg'] }}; color: {{ $style['color'] }};">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            {!! $style['icon'] !!}
                        </svg>
                    </div>

                    <p class="text-sm font-medium text-gray-700 text-center px-2 leading-tight">
                        {{ $jurusan->nama_jurusan }}
                    </p>
                </a>
            @endforeach
        </div>


        <!-- Freelancer populer-->
       <section class="w-full -mt-10 mb-10 px-1 -ml-1">
            <h2 class="text-lg font-semibold text-pink-400 flex items-center gap-1 mb-1 text-2xl font-bold text-gray-900">
                Rekomendasi Project<span>🔥</span>
            </h2>
            <p class="text-gray-400 mb-6 text-sm">project terbaru minggu ini</p>
                       <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                <!-- CARD 1 -->
                 @forelse ($tasks as $task)
                <div class="bg-white rounded-2xl shadow-md overflow-hidden transform hover:-translate-y-1 transition">
                    <div class="relative">
                        <img src="{{ asset('storage/' . $task->foto) }}"
                            onerror="this.src='https://images.pexels.com/photos/1181244/pexels-photo-1181244.jpeg'"
                            class="w-full h-40 object-cover">
                        <span
                            class="absolute top-3 left-3 px-3 py-1 text-xs font-semibold rounded-full text-white bg-purple-500">
                            {{ $task->jurusan->nama_jurusan ?? 'Unknown' }}
                        </span>
                        <span class="absolute top-3 right-3 px-2 py-1 text-xs font-semibold rounded-md bg-white shadow">
                            ⭐ {{ rand(4,5) }}.{{ rand(0,9) }}
                        </span>
                    </div>

                    <div class="p-4">
                        <h3 class="text-base font-semibold text-gray-800 leading-tight mb-2">
                            {{ $task->judul }}
                        </h3>
                        <div class="flex items-center gap-4 text-gray-500 text-xs mb-4">
                            <span class="flex items-center gap-1"><i class="bi bi-calendar"></i> Deadline:
                                {{ \Carbon\Carbon::parse($task->deadline)->format('d M Y') }}</span>
                            <span class="flex items-center gap-1"><i class="bi bi-clock"></i>
                                {{ $task->waktu_estimasi }}</span>
                        </div>

                        <div class="flex items-center justify-between mb-4">
                            <p class="text-lg font-bold text-gray-800">
                                Rp{{ number_format($task->budget, 0, ',', '.') }}
                            </p>
                            <div class="flex items-center gap-2">
                                <img src="https://i.pravatar.cc/150?u={{ $task->users_id }}" class="w-7 h-7 rounded-full border">
                                <span class="text-xs text-gray-600">
                                    {{ $task->user->nama ?? 'Freelancer' }}
                                </span>
                            </div>
                        </div>

                        <button onclick="openPopup(); event.stopPropagation();"
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

   <!-- Gigs You May Like Section -->
<section class="max-w-7xl mx-auto mb-16 px-4-ml-3">
  <div class="flex items-center justify-between mb-6">
    <h2 class="text-2xl font-bold text-gray-900">Gigs You May Like</h2>
    <div class="flex items-center space-x-2">
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

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
<<<<<<< HEAD
    <div class="bg-linear-to-br from-white via-gray-50 to-white rounded-2xl shadow-lg hover:shadow-xl transition duration-300 p-5 relative hover:-translate-y-1 cursor-pointer">
      <span class="absolute top-4 left-4 px-3 py-1 text-xs font-semibold rounded-full bg-pink-400 text-white">Best Seller</span>
      <img src="https://i.pravatar.cc/150?img=1" class="rounded-xl w-full mb-4 h-44 object-cover shadow-sm">
      <p class="text-gray-700 text-sm mb-4">I will design modern UI/UX for mobile app or website</p>
    </div>

    <div class="bg-linear-to-br from-white via-gray-50 to-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 p-5 relative">
      <span class="absolute top-4 left-4 px-3 py-1 text-xs font-semibold rounded-full bg-pink-400 text-white">Best Seller</span>
      <img src="https://i.pravatar.cc/150?img=1" class="rounded-xl w-full mb-4 h-44 object-cover shadow-sm">

      <div class="flex items-center mb-3">
        <img src="https://i.pravatar.cc/30?img=1" class="w-10 h-10 rounded-full mr-3 border-2 border-pink-300">
        <div class="flex flex-col flex-1">
          <div class="flex items-center justify-between">
=======
    <!-- CARD 1 -->
    <div class="bg-white rounded-2xl shadow-md overflow-hidden transform hover:-translate-y-1 hover:shadow-xl transition relative cursor-pointer">
      <span class="absolute top-4 left-4 px-3 py-1 text-xs font-semibold rounded-full bg-pink-400 text-white z-10">Best Seller</span>
      <img src="https://i.pravatar.cc/300?img=1" class="w-full h-44 object-cover">

      <div class="p-4">
        <p class="text-gray-700 text-sm mb-2 truncate">I will design modern UI/UX for mobile app or website</p>
        <div class="flex items-center mb-3">
          <img src="https://i.pravatar.cc/30?img=2" class="w-10 h-10 rounded-full border-2 border-pink-300 mr-3">
          <div class="flex flex-col">
>>>>>>> b0774e137fd895d4e602346889e4fe25a89cd36b
            <p class="text-gray-900 font-semibold text-sm">Sarah Anderson</p>
            <div class="flex items-center gap-1 text-xs text-gray-500">
              <i class="bi bi-star-fill text-yellow-400"></i> 4.9 (120)
            </div>
          </div>
        </div>
        <div class="flex items-center justify-between">
          <p class="text-lg font-bold text-gray-800">$50</p>
          <button class="bg-pink-500 hover:bg-pink-600 text-white text-sm font-semibold py-1 px-3 rounded-lg transition">Hire</button>
        </div>
      </div>
    </div>

    <!-- CARD 2 -->
    <div class="bg-white rounded-2xl shadow-md overflow-hidden transform hover:-translate-y-1 hover:shadow-xl transition relative cursor-pointer">
      <img src="https://i.pravatar.cc/300?img=3" class="w-full h-44 object-cover">

<<<<<<< HEAD
  <div class="flex flex-col md:flex-row gap-4">
    <!-- Completed -->
    <div class="flex-1 p-6 rounded-xl bg-linear-to-br from-blue-50 to-white border border-gray-100 hover:shadow-md transition">
      <div class="flex items-center justify-between mb-2">
        <span class="text-sm text-gray-500">Completed</span>
        <i class="bi bi-check-circle text-blue-500 text-lg"></i>
=======
      <div class="p-4">
        <p class="text-gray-700 text-sm mb-2 truncate">Custom WordPress website design with responsive layout</p>
        <div class="flex items-center mb-3">
          <img src="https://i.pravatar.cc/30?img=4" class="w-10 h-10 rounded-full border-2 border-pink-300 mr-3">
          <div class="flex flex-col">
            <p class="text-gray-900 font-semibold text-sm">John Doe</p>
            <div class="flex items-center gap-1 text-xs text-gray-500">
              <i class="bi bi-star-fill text-yellow-400"></i> 4.8 (98)
            </div>
          </div>
        </div>
        <div class="flex items-center justify-between">
          <p class="text-lg font-bold text-gray-800">$75</p>
          <button class="bg-pink-500 hover:bg-pink-600 text-white text-sm font-semibold py-1 px-3 rounded-lg transition">Hire</button>
        </div>
>>>>>>> b0774e137fd895d4e602346889e4fe25a89cd36b
      </div>
    </div>

<<<<<<< HEAD
    <!-- Total Spent -->
    <div class="flex-1 p-6 rounded-xl bg-linear-to-br from-green-50 to-white border border-gray-100 hover:shadow-md transition">
      <div class="flex items-center justify-between mb-2">
        <span class="text-sm text-gray-500">Total Spent</span>
        <i class="bi bi-cash-stack text-green-500 text-lg"></i>
=======
    <!-- CARD 3 -->
    <div class="bg-white rounded-2xl shadow-md overflow-hidden transform hover:-translate-y-1 hover:shadow-xl transition relative cursor-pointer">
      <span class="absolute top-4 left-4 px-3 py-1 text-xs font-semibold rounded-full bg-pink-400 text-white z-10">Best Seller</span>
      <img src="https://i.pravatar.cc/300?img=5" class="w-full h-44 object-cover">

      <div class="p-4">
        <p class="text-gray-700 text-sm mb-2 truncate">I will create professional logo and branding for your business</p>
        <div class="flex items-center mb-3">
          <img src="https://i.pravatar.cc/30?img=6" class="w-10 h-10 rounded-full border-2 border-pink-300 mr-3">
          <div class="flex flex-col">
            <p class="text-gray-900 font-semibold text-sm">Emily Clark</p>
            <div class="flex items-center gap-1 text-xs text-gray-500">
              <i class="bi bi-star-fill text-yellow-400"></i> 5.0 (210)
            </div>
          </div>
        </div>
        <div class="flex items-center justify-between">
          <p class="text-lg font-bold text-gray-800">$100</p>
          <button class="bg-pink-500 hover:bg-pink-600 text-white text-sm font-semibold py-1 px-3 rounded-lg transition">Hire</button>
        </div>
>>>>>>> b0774e137fd895d4e602346889e4fe25a89cd36b
      </div>
    </div>

<<<<<<< HEAD
    <!-- Freelancers Hired -->
    <div class="flex-1 p-6 rounded-xl bg-linear-to-br from-yellow-50 to-white border border-gray-100 hover:shadow-md transition">
      <div class="flex items-center justify-between mb-2">
        <span class="text-sm text-gray-500">Freelancers Hired</span>
        <i class="bi bi-people text-yellow-500 text-lg"></i>
=======
    <!-- CARD 4 -->
    <div class="bg-white rounded-2xl shadow-md overflow-hidden transform hover:-translate-y-1 hover:shadow-xl transition relative cursor-pointer">
      <img src="https://i.pravatar.cc/300?img=7" class="w-full h-44 object-cover">

      <div class="p-4">
        <p class="text-gray-700 text-sm mb-2 truncate">SEO optimization for your website to rank higher on Google</p>
        <div class="flex items-center mb-3">
          <img src="https://i.pravatar.cc/30?img=8" class="w-10 h-10 rounded-full border-2 border-pink-300 mr-3">
          <div class="flex flex-col">
            <p class="text-gray-900 font-semibold text-sm">Michael Smith</p>
            <div class="flex items-center gap-1 text-xs text-gray-500">
              <i class="bi bi-star-fill text-yellow-400"></i> 4.7 (80)
            </div>
          </div>
        </div>
        <div class="flex items-center justify-between">
          <p class="text-lg font-bold text-gray-800">$60</p>
          <button class="bg-pink-500 hover:bg-pink-600 text-white text-sm font-semibold py-1 px-3 rounded-lg transition">Hire</button>
        </div>
>>>>>>> b0774e137fd895d4e602346889e4fe25a89cd36b
      </div>
    </div>
  </div>
</section>

<!-- Inspired Works Section -->
<section class="max-w-7xl mx-auto mb-16 px-4">
  <h2 class="text-2xl font-bold mb-6 text-gray-900">Get inspired by work done on Fiverr</h2>

  <!-- Category Tabs -->
  <div class="w-full overflow-x-auto scrollbar-hide mb-8">
    <div class="flex gap-4 text-[14px] font-medium min-w-max">
      <button class="px-5 py-2.5 rounded-2xl text-gray-800 border border-gray-300 bg-transparent transition-all duration-500 ease-in-out hover:text-white hover:border-transparent hober:bg-linear-to-r hover:from-indigo-400 hover:to-purple-400 hover:shadow-md whitespace-nowrap">Book design</button>
      <button class="px-5 py-2.5 rounded-2xl text-gray-800 border border-gray-300 bg-transparent transition-all duration-500 ease-in-out hover:text-white hover:border-transparent hober:bg-linear-to-r hover:from-blue-400 hover:to-indigo-400 hover:shadow-md whitespace-nowrap">Architecture & Interior design</button>
      <button class="px-5 py-2.5 rounded-2xl text-gray-800 border border-gray-300 bg-transparent transition-all duration-500 ease-in-out hover:text-white hover:border-transparent hober:bg-linear-to-r hover:from-purple-400 hover:to-pink-400 hover:shadow-md whitespace-nowrap">Mobile app development</button>
      <button class="px-5 py-2.5 rounded-2xl text-gray-800 border border-gray-300 bg-transparent transition-all duration-500 ease-in-out hover:text-white hover:border-transparent hober:bg-linear-to-r hover:from-indigo-400 hover:to-blue-400 hover:shadow-md whitespace-nowrap">Presentation design</button>
      <button class="px-5 py-2.5 rounded-2xl text-gray-800 border border-gray-300 bg-transparent transition-all duration-500 ease-in-out hover:text-white hover:border-transparent hover:bg-linear-to-r hover:from-pink-400 hover:to-rose-400 hover:shadow-md whitespace-nowrap">Website design</button>
      <button class="px-5 py-2.5 rounded-2xl text-gray-800 border border-gray-300 bg-transparent transition-all duration-500 ease-in-out hover:text-white hover:border-transparent hober:bg-linear-to-r hover:from-cyan-400 hover:to-blue-400 hover:shadow-md whitespace-nowrap">UGC videos</button>
      <button class="px-5 py-2.5 rounded-2xl text-gray-800 border border-gray-300 bg-transparent transition-all duration-500 ease-in-out hover:text-white hover:border-transparent hober:bg-linear-to-r hover:from-violet-400 hover:to-fuchsia-400 hover:shadow-md whitespace-nowrap">AI development</button>
    </div>
  </div>

  <style>
    .scrollbar-hide::-webkit-scrollbar { display: none; }
    .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
  </style>

  <!-- Masonry Grid -->
  <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 auto-rows-[200px]">
    
    <!-- Item 1 -->
    <div class="relative group cursor-pointer row-span-2 overflow-hidden rounded-xl">
      <img src="https://fiverr-res.cloudinary.com/image/upload/f_auto,q_auto/v1/attachments/delivery/asset/d1a6f869830256edfbd3d2c7b887659b-1745375528/JAKEREID687.jpg" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-[1.02]">
      <div class="absolute inset-0 bg-linear-to-r from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex items-end rounded-xl">
        <div class="w-full flex justify-between items-center text-white text-sm p-3">
          <div>
            <p class="font-semibold">Featured in: Illustration</p>
            <p>by: banbanns</p>
          </div>
          <button class="opacity-0 group-hover:opacity-100 transition duration-300">
            <i class="bi bi-three-dots text-white text-xl hover:text-pink-400"></i>
          </button>
        </div>
      </div>
      <button class="absolute top-3 right-3 opacity-0 group-hover:opacity-100 transition duration-300">
        <i class="bi bi-bookmark-fill text-white text-2xl hover:text-pink-500 transition-colors"></i>
      </button>
    </div>

    <!-- Item 2 -->
    <div class="relative group cursor-pointer overflow-hidden rounded-xl">
      <img src="https://fiverr-res.cloudinary.com/image/upload/f_auto,q_auto,t_delivery_web_tile/v1/attachments/delivery/asset/ab4ff21f481dd694e39d66b620a9f940-1746012415/Wedding%20no%20word.png" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-[1.02]">
      <div class="absolute inset-0 bg-linear-to-r from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex items-end rounded-xl">
        <div class="text-white text-sm p-3">
          <p class="font-semibold">Featured in: Illustration</p>
          <p>by: banbanns</p>
        </div>
      </div>
      <button class="absolute top-3 right-3 opacity-0 group-hover:opacity-100 transition duration-300">
        <i class="bi bi-bookmark-fill text-white text-2xl hover:text-pink-500 transition-colors"></i>
      </button>
    </div>

    <!-- Item 3 -->
    <div class="relative group cursor-pointer col-span-1 overflow-hidden rounded-xl">
      <img src="https://images.unsplash.com/photo-1610878180933-92a6a20389d5?auto=format&fit=crop&w=800&q=60" class="w-full h-[150px] object-cover transition-transform duration-300 group-hover:scale-[1.02]">
      <div class="absolute inset-0 bg-linear-to-r from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex items-end rounded-xl">
        <div class="text-white text-sm p-3">
          <p class="font-semibold">Featured in: Concept Art</p>
          <p>by: rayyaa</p>
        </div>
      </div>
      <button class="absolute top-3 right-3 opacity-0 group-hover:opacity-100 transition duration-300">
        <i class="bi bi-bookmark-fill text-white text-2xl hover:text-pink-500 transition-colors"></i>
      </button>
    </div>

    <!-- Item 4 -->
    <div class="relative group cursor-pointer row-span-2 overflow-hidden rounded-xl">
      <img src="https://images.unsplash.com/photo-1606761568499-6f1a76e3b25d?auto=format&fit=crop&w=800&q=60" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-[1.02]">
      <div class="absolute inset-0 bg-linear-to-r from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex items-end rounded-xl">
        <div class="text-white text-sm p-3">
          <p class="font-semibold">Featured in: Fantasy</p>
          <p>by: zahrah</p>
        </div>
      </div>
      <button class="absolute top-3 right-3 opacity-0 group-hover:opacity-100 transition duration-300">
        <i class="bi bi-bookmark-fill text-white text-2xl hover:text-pink-500 transition-colors"></i>
      </button>
    </div>

    <!-- Item 5 -->
    <div class="relative group cursor-pointer overflow-hidden rounded-xl">
      <img src="https://images.unsplash.com/photo-1598387993441-73b8e3b6c4f5?auto=format&fit=crop&w=800&q=60" class="w-full h-[170px] object-cover transition-transform duration-300 group-hover:scale-[1.02]">
      <div class="absolute inset-0 bg-linear-to-r from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex items-end rounded-xl">
        <div class="text-white text-sm p-3">
          <p class="font-semibold">Featured in: Painting</p>
          <p>by: azizah</p>
        </div>
      </div>
      <button class="absolute top-3 right-3 opacity-0 group-hover:opacity-100 transition duration-300">
        <i class="bi bi-bookmark-fill text-white text-2xl hover:text-pink-500 transition-colors"></i>
      </button>
    </div>

    <!-- Item 6 -->
    <div class="relative group cursor-pointer row-span-2 overflow-hidden rounded-xl">
      <img src="https://images.unsplash.com/photo-1606112219348-204d7d8b94ee?auto=format&fit=crop&w=800&q=60" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-[1.02]">
      <div class="absolute inset-0 bg-linear-to-r from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex items-end rounded-xl">
        <div class="text-white text-sm p-3">
          <p class="font-semibold">Featured in: Digital Art</p>
          <p>by: nurazizah</p>
        </div>
      </div>
      <button class="absolute top-3 right-3 opacity-0 group-hover:opacity-100 transition duration-300">
        <i class="bi bi-bookmark-fill text-white text-2xl hover:text-pink-500 transition-colors"></i>
      </button>
    </div>

  </div>
</section>

        <!-- 🌑 FREELANCER POPUP DENGAN 1 SCROLL DAN GARIS PEMBATAS SAMPING -->
         <!-- Overlay -->
<div id="overlay" class="fixed inset-0 bg-black/50 hidden z-40"></div>

        <div id="rightPopup"
            class="fixed top-0 right-0 h-full w-[70%] bg-white backdrop-blur-xl shadow-2xl transform translate-x-full transition-transform duration-500 ease-in-out z-50 text-gray-800 font-sans rounded-l-3xl">
            <div class="flex flex-col h-full">

                <!-- Header -->
                <div
                    class="flex items-center justify-between p-6 border-b border-gray-200 sticky top-0 z-10 bg-white shadow-sm rounded-tl-3xl">

                    <button onclick="closePopup()"
                        class="text-gray-400 hover:text-gray-600 text-2xl transition">&times;</button>
                </div>

                <!-- Konten -->
                <div id="mainScroll" class="flex-1 overflow-y-auto bg-white">
                    <div id="profileLayout" class="flex gap-8 p-8">

                        <!-- KIRI -->
                        <div class="flex-1 space-y-6">

                            <!-- Profil -->
                            <div class="flex items-center gap-6 bg-white border border-gray-100 rounded-2xl p-6 shadow-md">
                                <img src="https://i.pravatar.cc/150?img=3"
                                    class="w-28 h-28 rounded-full border-4 border-white shadow-md">
                                <div class="flex flex-col flex-1">
                                    <div class="flex items-center gap-2">
                                        <h4 class="text-2xl font-bold text-black">Sarah Anderson</h4>
                                        <span
                                            class="bg-green-100 text-green-700 text-xs font-medium px-2 py-0.5 rounded-full">Top
                                            Rated</span>
                                    </div>
                                    <p class="text-gray-500 text-sm">UI/UX Designer • Web & Mobile</p>
                                    <div class="flex items-center gap-1 text-yellow-500 mt-1">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-half"></i>
                                        <span class="text-gray-500 ml-2 text-sm">(4.8)</span>
                                    </div>
                                    <p class="text-green-600 text-sm mt-1">Available Now • Response: 1h</p>
                                </div>
                            </div>

                            <!-- About & Skills Section -->
                            <section class="px-8 py-12 max-w-5xl mx-auto space-y-16 mt-4 w-[calc(99%+4rem)] -mx-8">

                                <!-- About Me -->
                                <div class="space-y-4">
                                    <h2
                                        class="text-xl font-semibold bg-linear-to-r from-pink-500 via-purple-500 to-blue-500 bg-clip-text text-transparent">
                                        About Me
                                    </h2>
                                    <p class="text-gray-700 text-[16px] leading-relaxed">
                                        Experienced UI/UX Designer with 3+ years designing modern, user-centered web &
                                        mobile interfaces. Passionate about clean design and excellent user experience.
                                    </p>
                                    <hr class="border-gray-200 mt-4 w-[calc(99%+4rem)] -mx-8">

                                </div>


                                <!-- Skills & Expertise -->
                                <div style="margin-top: 20px;" class="space-y-4">
                                    <h2
                                        class="text-lg font-semibold bg-linear-to-r from-pink-500 via-purple-500 to-blue-500 bg-clip-text text-transparent">
                                        Skills & Expertise
                                    </h2>

                                    <!-- Required Skills -->
                                    <div class="space-y-2">
                                        <p class="text-gray-500 uppercase text-sm tracking-wider">Required Skills</p>
                                        <div class="flex flex-wrap gap-4">
                                            <span
                                                class="flex items-center gap-2 px-4 py-1 bg-linear-to-r from-pink-100 to-blue-100 text-gray-800 rounded-full text-sm font-medium">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-500"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 4v16m8-8H4" />
                                                </svg>
                                                HTML
                                            </span>
                                            <span
                                                class="flex items-center gap-2 px-4 py-1 bg-linear-to-r from-pink-100 to-blue-100 text-gray-800 rounded-full text-sm font-medium">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-500"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5 12h14" />
                                                </svg>
                                                HTML5
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Preferred Skills -->
                                    <div class="space-y-2">
                                        <p class="text-gray-500 uppercase text-sm tracking-wider">Preferred Additional
                                            Skills</p>
                                        <div class="flex flex-wrap gap-4">
                                            <span
                                                class="flex items-center gap-2 px-4 py-1 bg-linear-to-r from-pink-100 to-blue-100 text-gray-800 rounded-full text-sm font-medium">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-blue-500"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 4v16m8-8H4" />
                                                </svg>
                                                CSS
                                            </span>
                                            <span
                                                class="flex items-center gap-2 px-4 py-1 bg-linear-to-r from-pink-100 to-blue-100 text-gray-800 rounded-full text-sm font-medium">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-500"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M5 12h14" />
                                                </svg>
                                                JavaScript
                                            </span>
                                            <hr class="border-gray-200 mt-4 w-[calc(99%+4rem)] -mx-8">

                                        </div>
                                    </div>
                                </div>
                            </section>


                            <!-- Portfolio -->
                            <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm">
                                <h5
                                    class="font-semibold text-lg mb-3 bg-linear-to-r from-pink-500 via-purple-500 to-blue-500 bg-clip-text text-transparent">
                                    Portfolio</h5>
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                                    <div class="relative overflow-hidden rounded-lg group">
                                        <img src="https://images.pexels.com/photos/1181244/pexels-photo-1181244.jpeg"
                                            class="w-full h-36 object-cover transition-transform duration-300 group-hover:scale-105">
                                        <div
                                            class="absolute bottom-0 left-0 w-full bg-linear-to-t from-black/60 to-transparent text-white text-xs p-2">
                                            Landing Page • Web</div>
                                    </div>
                                    <div class="relative overflow-hidden rounded-lg group">
                                        <img src="https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg"
                                            class="w-full h-36 object-cover transition-transform duration-300 group-hover:scale-105">
                                        <div
                                            class="absolute bottom-0 left-0 w-full bg-linear-to-t from-black/60 to-transparent text-white text-xs p-2">
                                            Mobile UI • App</div>
                                    </div>
                                    <div class="relative overflow-hidden rounded-lg group">
                                        <img src="https://images.pexels.com/photos/1181671/pexels-photo-1181671.jpeg"
                                            class="w-full h-36 object-cover transition-transform duration-300 group-hover:scale-105">
                                        <div
                                            class="absolute bottom-0 left-0 w-full bg-linear-to-t from-black/60 to-transparent text-white text-xs p-2">
                                            Branding Project</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Reviews -->
                            <!-- Client Reviews Section Premium -->
                            <section class="px-6 py-10 max-w-4xl mx-auto space-y-10">

                                <!-- Judul -->
                                <h5
                                    class="text-lg font-semibold mb-6 bg-linear-to-r from-pink-500 via-purple-500 to-blue-500 bg-clip-text text-transparent">
                                    Client Reviews
                                </h5>

                                <!-- Review List -->
                                <div class="space-y-6">
                                    <!-- Review 1 -->
                                    <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 transition">
                                        <img src="https://i.pravatar.cc/40?img=10"
                                            class="w-10 h-10 rounded-full border border-gray-200">
                                        <div class="flex-1">
                                            <div class="flex justify-between items-center mb-1">
                                                <span class="font-medium text-gray-900">Rina Marlina</span>
                                                <span class="text-gray-400 text-xs">2h ago</span>
                                            </div>
                                            <!-- Rating bintang -->
                                            <div class="flex gap-1 mb-1">
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.954L10 0l2.951 5.956 6.561.954-4.756 4.635 1.122 6.545z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.954L10 0l2.951 5.956 6.561.954-4.756 4.635 1.122 6.545z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.954L10 0l2.951 5.956 6.561.954-4.756 4.635 1.122 6.545z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.954L10 0l2.951 5.956 6.561.954-4.756 4.635 1.122 6.545z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.954L10 0l2.951 5.956 6.561.954-4.756 4.635 1.122 6.545z" />
                                                </svg>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">
                                                Amazing work! Really impressed with the design.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- Review 2 -->
                                    <div class="flex items-start gap-4 p-4 rounded-xl hover:bg-gray-50 transition">
                                        <img src="https://i.pravatar.cc/40?img=20"
                                            class="w-10 h-10 rounded-full border border-gray-200">
                                        <div class="flex-1">
                                            <div class="flex justify-between items-center mb-1">
                                                <span class="font-medium text-gray-900">Aditya Putra</span>
                                                <span class="text-gray-400 text-xs">5h ago</span>
                                            </div>
                                            <div class="flex gap-1 mb-1">
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.954L10 0l2.951 5.956 6.561.954-4.756 4.635 1.122 6.545z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.954L10 0l2.951 5.956 6.561.954-4.756 4.635 1.122 6.545z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-400" fill="currentColor"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.954L10 0l2.951 5.956 6.561.954-4.756 4.635 1.122 6.545z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.954L10 0l2.951 5.956 6.561.954-4.756 4.635 1.122 6.545z" />
                                                </svg>
                                                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.954L10 0l2.951 5.956 6.561.954-4.756 4.635 1.122 6.545z" />
                                                </svg>
                                            </div>
                                            <p class="text-gray-700 text-sm leading-relaxed">
                                                Great communication and very fast delivery. Highly recommended!
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Add Comment -->
                                <div class="flex gap-3 items-start mt-6">
                                    <img src="https://i.pravatar.cc/40?img=30"
                                        class="w-10 h-10 rounded-full border border-gray-200">
                                    <input type="text" placeholder="Add a comment..."
                                        class="flex-1 border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-pink-300 focus:border-transparent">
                                    <button
                                        class="bg-linear-to-r from-pink-500 to-blue-500 hover:opacity-90 text-white px-4 py-2 rounded-lg text-sm font-medium transition">
                                        Send
                                    </button>
                                </div>

                            </section>

                        </div>

                        <!-- Divider -->
                        <div id="divider"
                            class="w-[2px] bg-linear-to-b from-pink-300 via-purple-300 to-blue-300 rounded-full">
                        </div>

                        <!-- SIDE PANEL (tanpa card) -->
                        <div id="sidePanel" class="w-[300px] p-6 pt-0">
                            <!-- Info Card -->
                            <div
                                class="flex items-start gap-3 bg-linear-to-br from-blue-100 via-pink-100 to-yellow-100 p-4 rounded-2xl shadow-sm border border-gray-200 hover:shadow-md transition mb-4 mt-0">
                                <div class="shrink-0">
                                    <i class="bi bi-megaphone text-pink-500 text-xl"></i>
                                </div>
                                <div class="space-y-1">
                                    <p class="font-semibold text-gray-900">You'll need Connects to bid</p>
                                    <p class="text-gray-600 text-sm">They show clients you’re serious.</p>
                                    <a href="#" class="text-blue-600 text-sm font-medium hover:underline">Learn more</a>
                                </div>
                            </div>


                            <button
                                class="w-full bg-linear-to-r from-pink-500 to-blue-500 hover:opacity-90 text-white font-semibold py-2.5 rounded-lg mb-3 transition">Request
                                to order</button>
                            <button
                                class="w-full border border-pink-400 text-pink-600 hover:bg-pink-50 font-medium py-2.5 rounded-lg flex items-center justify-center gap-2 transition"><i
                                    class="bi bi-heart"></i> Save Job</button>

                            <div class="pt-4 mt-6">
                                <h5 class="font-semibold text-gray-900 mb-2">About the Client</h5>
                                <p class="text-green-600 flex items-center gap-1 mb-1"><i
                                        class="bi bi-check-circle-fill"></i> Payment verified</p>
                                <p class="text-green-600 flex items-center gap-1 mb-3"><i class="bi bi-telephone-fill"></i>
                                    Phone verified</p>
                                <div class="flex items-center gap-1 text-yellow-500 mb-1">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                    <span class="text-gray-600 ml-1">5.0 (51 reviews)</span>
                                </div>
                                <p class="text-gray-700 text-sm">Las Vegas, USA • 8:21 PM</p>
                                <p class="text-gray-500 text-xs mt-1">Member since Aug 13, 2015</p>
                            </div>

                            <!-- Tambahan: Tentang Freelancer -->
                            <div class="pt-6 mt-6 border-t border-gray-200">
                                <h5 class="font-semibold text-gray-900 mb-3">Freelancer Overview</h5>
                                <p class="text-gray-700 text-sm leading-relaxed mb-4">
                                    Sarah is a professional UI/UX designer who specializes in creating engaging and
                                    modern interfaces for both web and mobile applications. She focuses on crafting
                                    user-friendly experiences that help businesses grow their online presence.
                                </p>

                                <ul class="text-sm text-gray-700 space-y-2 mb-4">
                                    <li><i class="bi bi-check2-circle text-pink-500 mr-2"></i> 3+ years of professional
                                        design experience</li>
                                    <li><i class="bi bi-check2-circle text-pink-500 mr-2"></i> Delivered 120+ successful
                                        projects</li>
                                    <li><i class="bi bi-check2-circle text-pink-500 mr-2"></i> Expert in Figma, Adobe
                                        XD, and Webflow</li>
                                    <li><i class="bi bi-check2-circle text-pink-500 mr-2"></i> Known for fast
                                        communication and detailed work</li>
                                </ul>

                                <div
                                    class="bg-linear-to-r from-pink-100 to-blue-100 rounded-xl p-4 border border-pink-200">
                                    <p class="text-sm text-gray-800">
                                        “Sarah exceeded my expectations. The designs were stunning and perfectly aligned
                                        with my brand vision.”
                                    </p>
                                    <p class="text-xs text-gray-500 mt-2">— Client Feedback</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



        <script>
            const sidePanel = document.getElementById('sidePanel');
            const divider = document.getElementById('divider');
            let isDragging = false;

            function startDragging(e) {
                e.preventDefault();
                isDragging = true;
                document.addEventListener('mousemove', drag);
                document.addEventListener('mouseup', stopDragging);
            }

            function drag(e) {
                if (!isDragging) return;
                const container = document.getElementById('rightPopup');
                const rect = container.getBoundingClientRect();
                const newPanelWidth = rect.right - e.clientX;
                if (newPanelWidth > 220 && newPanelWidth < 420) {
                    sidePanel.style.width = `${newPanelWidth}px`;
                }
            }

            function stopDragging() {
                isDragging = false;
                document.removeEventListener('mousemove', drag);
                document.removeEventListener('mouseup', stopDragging);
            }

            function closePopup() {
                document.getElementById('rightPopup').classList.add('translate-x-full');
            }
        </script>



        <!-- 🧠 Script Popup -->
        <script>
          function openPopup() {
    document.getElementById('rightPopup').classList.remove('translate-x-full');
    document.getElementById('overlay').classList.remove('hidden');
}

function closePopup() {
    document.getElementById('rightPopup').classList.add('translate-x-full');
    document.getElementById('overlay').classList.add('hidden');
}

        </script>


@endsection