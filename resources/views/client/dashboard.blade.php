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
        $greeting='Good morning' ;
        } elseif ($hour < 18) {
        $greeting='Good afternoon' ;
        } else {
        $greeting='Good evening' ;
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
    'icon' => '
    <path d="M8.25 15L3.75 12l4.5-3m7.5 6l4.5-3-4.5-3m-3.75-3.75L9 21" />'
    ],
    [
    'bg' => '#eaa7f1',
    'color' => '#6d005f',
    'shadow' => 'hover:shadow-[0_6px_20px_rgba(234,167,241,0.7)]',
    'icon' => '
    <path d="M8.25 8.25l7.5-2.25v9l-7.5 2.25v-9zM19.5 12a3 3 0 11-6 0" />'
    ],
    [
    'bg' => '#7ac8ff',
    'color' => '#0f3a4b',
    'shadow' => 'hover:shadow-[0_6px_20px_rgba(122,200,255,0.6)]',
    'icon' => '
    <path d="M12 4.5v15m-7.5-7.5h15" />'
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
            <span class="flex items-center gap-1"><i class="bi bi-calendar"></i> Deadline:
              {{ \Carbon\Carbon::parse($task->deadline)->format('d M Y') }}</span>
            <span class="flex items-center gap-1"><i class="bi bi-clock"></i>
              {{ $task->waktu_estimasi }}</span>
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
      <!-- CARD 1 -->
      <div class="bg-white rounded-2xl shadow-md overflow-hidden transform hover:-translate-y-1 hover:shadow-xl transition relative cursor-pointer">
        <span class="absolute top-4 left-4 px-3 py-1 text-xs font-semibold rounded-full bg-pink-400 text-white z-10">Best Seller</span>
        <img src="https://i.pravatar.cc/300?img=1" class="w-full h-44 object-cover">

        <div class="p-4">
          <p class="text-gray-700 text-sm mb-2 truncate">I will design modern UI/UX for mobile app or website</p>
          <div class="flex items-center mb-3">
            <img src="https://i.pravatar.cc/30?img=2" class="w-10 h-10 rounded-full border-2 border-pink-300 mr-3">
            <div class="flex flex-col">
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
        </div>
      </div>

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
        </div>
      </div>

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
        </div>
      </div>
    </div>
  </section>

  <!-- Inspired Works Section -->
  <section class="max-w-7xl mx-auto mb-16 px-4">
    <h2 class="text-2xl font-bold mb-6 text-gray-900">Get inspired by work done on Fiverr</h2>

    <!-- Category Tabs -->
    @php
    // Kumpulan variasi gradient warna
    $gradients = [
    ['from' => 'from-indigo-400', 'to' => 'to-purple-400'],
    ['from' => 'from-blue-400', 'to' => 'to-indigo-400'],
    ['from' => 'from-purple-400', 'to' => 'to-pink-400'],
    ['from' => 'from-pink-400', 'to' => 'to-rose-400'],
    ['from' => 'from-cyan-400', 'to' => 'to-blue-400'],
    ['from' => 'from-violet-400', 'to' => 'to-fuchsia-400'],
    ['from' => 'from-emerald-400', 'to' => 'to-teal-400'],
    ['from' => 'from-amber-400', 'to' => 'to-orange-400'],
    ['from' => 'from-lime-400', 'to' => 'to-green-400'],
    ];
    @endphp

    <div class="w-full overflow-x-auto scrollbar-hide mb-8">
      <div class="flex gap-4 text-[14px] font-medium min-w-max">
        @foreach ($jurusans as $index => $jurusan)
        @php
        $gradient = $gradients[$index % count($gradients)];
        @endphp
        <button
          class="px-5 py-2.5 rounded-2xl text-gray-800 border border-gray-300 bg-transparent transition-all duration-500 ease-in-out hover:text-white hover:border-transparent hover:bg-gradient-to-r hover:{{ implode(' ', $gradient) }} hover:shadow-md whitespace-nowrap">
          {{ $jurusan->nama_jurusan }}
        </button>
        @endforeach
      </div>
    </div>


    <style>
      .scrollbar-hide::-webkit-scrollbar {
        display: none;
      }

      .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
      }
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
  <!-- 🌑 FREELANCER POPUP PROFESIONAL DENGAN SCROLL & PANEL SAMPING (DINAMIS + FALLBACK) --> <!-- Overlay -->
  <div id="overlay" class="fixed inset-0 bg-black/50 hidden z-40"></div> <!-- Popup Container -->
  <div id="rightPopup" class="fixed top-0 right-0 h-full w-[70%] bg-white backdrop-blur-xl shadow-2xl transform translate-x-full transition-transform duration-500 ease-in-out z-50 text-gray-800 font-sans rounded-l-3xl">
    <div class="flex flex-col h-full">
      <!-- Header -->
      <div class="flex items-center justify-between p-6 border-b border-gray-200 sticky top-0 z-10 bg-white shadow-sm rounded-tl-3xl">
        <h3 class="text-xl font-semibold text-gray-800">Freelancer Profile</h3>
        <button onclick="closePopup()" class="text-gray-400 hover:text-gray-600 text-2xl transition">&times;</button>
      </div>

      <!-- Konten Scrollable -->
      <div id="mainScroll" class="flex-1 overflow-y-auto bg-white">
        <div id="profileLayout" class="flex gap-8 p-8">

          <!-- BAGIAN KIRI -->
          <div class="flex-1 space-y-6">

            <!-- PROFIL -->
            <div class="flex items-center gap-6 bg-white border border-gray-100 rounded-2xl p-6 shadow-md">
              <img src="{{ $task->user->foto ? asset('storage/' . $task->user->foto) : 'https://i.pravatar.cc/150?img=' . rand(1, 70) }}"
                class="w-28 h-28 rounded-full border-4 border-white shadow-md object-cover">
              <div class="flex flex-col flex-1">
                <div class="flex items-center gap-2">
                  <h4 class="text-2xl font-bold text-black">{{ $task->user->nama ?? 'Anonim' }}</h4>
                  <span class="bg-green-100 text-green-700 text-xs font-medium px-2 py-0.5 rounded-full">
                    {{ ($task->user->rating ?? 4.5) >= 4.5 ? 'Top Rated' : 'Active Freelancer' }}
                  </span>
                </div>
                <p class="text-gray-500 text-sm">{{ $task->jurusan->nama_jurusan ?? 'General Freelancer' }}</p>
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

            <!-- ABOUT & SKILLS -->
            <section class="space-y-10 mt-8">

              <!-- Tentang -->
              <div class="space-y-4">
                <h2 class="text-lg font-semibold bg-gradient-to-r from-pink-500 via-purple-500 to-blue-500 bg-clip-text text-transparent">
                  About Me
                </h2>
                <p class="text-gray-700 leading-relaxed text-[16px]">
                  {{ $task->user->bio ?? 'I’m a passionate freelancer ready to help clients achieve their goals through creative and efficient solutions.' }}
                </p>
              </div>

              <!-- Skills -->
              <div class="space-y-4">
                <h2 class="text-lg font-semibold bg-gradient-to-r from-pink-500 via-purple-500 to-blue-500 bg-clip-text text-transparent">
                  Skills & Expertise
                </h2>

                <div class="space-y-2">
                  <p class="text-gray-500 uppercase text-sm tracking-wider">Skills</p>
                  <div class="flex flex-wrap gap-3">
                    @php
                    $skills = $task->user->skills ? explode(',', $task->user->skills) : ['Communication', 'Teamwork', 'Creativity'];
                    @endphp
                    @foreach ($skills as $skill)
                    <span class="px-4 py-1 bg-gradient-to-r from-pink-100 to-blue-100 text-gray-800 rounded-full text-sm font-medium">
                      {{ trim($skill) }}
                    </span>
                    @endforeach
                  </div>
                </div>
              </div>
            </section>

            <!-- PORTFOLIO -->
            <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm">
              <h5 class="font-semibold text-lg mb-4 bg-gradient-to-r from-pink-500 via-purple-500 to-blue-500 bg-clip-text text-transparent">
                Portfolio
              </h5>
              <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                @if (isset($task->user->portfolio) && $task->user->portfolio->count() > 0)
                @foreach ($task->user->portfolio as $item)
                <div class="relative overflow-hidden rounded-lg group">
                  <img src="{{ asset('storage/' . $item->gambar) }}"
                    class="w-full h-36 object-cover transition-transform duration-300 group-hover:scale-105">
                  <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/60 to-transparent text-white text-xs p-2">
                    {{ $item->judul }}
                  </div>
                </div>
                @endforeach
                @else
                <!-- Contoh Portfolio Default -->
                @foreach ([
                ['judul' => 'Landing Page • Web', 'img' => 'https://images.pexels.com/photos/1181244/pexels-photo-1181244.jpeg'],
                ['judul' => 'Mobile UI • App', 'img' => 'https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg'],
                ['judul' => 'Dashboard Design', 'img' => 'https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg'],
                ] as $demo)
                <div class="relative overflow-hidden rounded-lg group">
                  <img src="{{ $demo['img'] }}"
                    class="w-full h-36 object-cover transition-transform duration-300 group-hover:scale-105">
                  <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/60 to-transparent text-white text-xs p-2">
                    {{ $demo['judul'] }}
                  </div>
                </div>
                @endforeach
                @endif
              </div>
            </div>

          </div>

          <!-- GARIS PEMBATAS -->
          <div id="divider" class="w-[2px] bg-gradient-to-b from-pink-300 via-purple-300 to-blue-300 rounded-full"></div>

          <!-- PANEL SAMPING -->
          <div id="sidePanel" class="w-[300px] p-6 space-y-6">

            <!-- Info -->
            <div class="bg-gradient-to-br from-blue-100 via-pink-100 to-yellow-100 p-4 rounded-2xl shadow-sm border border-gray-200">
              <p class="font-semibold text-gray-900">You'll need Connects to bid</p>
              <p class="text-gray-600 text-sm">They show clients you’re serious.</p>
              <a href="#" class="text-blue-600 text-sm font-medium hover:underline">Learn more</a>
            </div>

            <!-- Buttons -->
            <button
              class="w-full bg-gradient-to-r from-pink-500 to-blue-500 hover:opacity-90 text-white font-semibold py-2.5 rounded-lg transition">
              Request to Order
            </button>
            <button
              class="w-full border border-pink-400 text-pink-600 hover:bg-pink-50 font-medium py-2.5 rounded-lg flex items-center justify-center gap-2 transition">
              <i class="bi bi-heart"></i> Save Job
            </button>

            <!-- About Client -->
            <div class="pt-4 border-t border-gray-200">
              <h5 class="font-semibold text-gray-900 mb-2">About the Client</h5>
              <p class="text-green-600 flex items-center gap-1 mb-1"><i class="bi bi-check-circle-fill"></i> Payment verified</p>
              <p class="text-green-600 flex items-center gap-1 mb-3"><i class="bi bi-telephone-fill"></i> Phone verified</p>
              <div class="flex items-center gap-1 text-yellow-500 mb-1">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                <span class="text-gray-600 ml-1">5.0 (51 reviews)</span>
              </div>
              <p class="text-gray-700 text-sm">Indonesia • {{ now()->format('H:i') }}</p>
              <p class="text-gray-500 text-xs mt-1">Member since {{ $task->user->created_at->format('M Y') }}</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div> <!-- JS -->
  <script>
    function openPopup() {
      document.getElementById('overlay').classList.remove('hidden');
      document.getElementById('rightPopup').classList.remove('translate-x-full');
    }

    function closePopup() {
      document.getElementById('overlay').classList.add('hidden');
      document.getElementById('rightPopup').classList.add('translate-x-full');
    }
  </script>




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
  <!-- 🧠 Script Popup -->
  <script>
    async function openPopup(taskId) {
      try {
        const response = await fetch(`/task/${taskId}`);
        if (!response.ok) throw new Error('Gagal mengambil data task');

        const data = await response.json();

        // Isi data popup
        document.getElementById('popupJudul').textContent = data.judul;
        document.getElementById('popupDeskripsi').textContent = data.deskripsi;
        document.getElementById('popupJurusan').textContent = data.jurusan;
        document.getElementById('popupDeadline').textContent = data.deadline;
        document.getElementById('popupBudget').textContent = data.budget;
        document.getElementById('popupUser').textContent = data.user;
        document.getElementById('popupWaktu').textContent = data.waktu_estimasi;
        document.getElementById('popupImage').src = data.foto;

        // Tampilkan popup
        document.getElementById('overlay').classList.remove('hidden');
        document.getElementById('rightPopup').classList.remove('translate-x-full');

      } catch (error) {
        console.error(error);
        alert('Terjadi kesalahan saat menampilkan task.');
      }
    }

    function closePopup() {
      document.getElementById('overlay').classList.add('hidden');
      document.getElementById('rightPopup').classList.add('translate-x-full');
    }
  </script>

  <script>
    function changeUrl(category) {
      // Ubah URL tanpa reload halaman
      const newUrl = `${window.location.origin}${window.location.pathname}?category=${category}`;
      history.pushState(null, '', newUrl);

      // Bisa juga panggil fungsi filter task di sini:
      console.log("Filter:", category);
      // loadTasks(category); // misal kamu punya fungsi untuk filter
    }
  </script>

  <script>
    function openPopup(taskId) {
      const overlay = document.getElementById('overlay');
      const popup = document.getElementById('rightPopup');
      const popupContent = document.getElementById('popupContent');

      overlay.classList.remove('hidden');
      popup.classList.remove('translate-x-full');

      fetch(`/client/task/${taskId}`)
        .then(res => res.text())
        .then(html => {
          popupContent.innerHTML = html;
        })
        .catch(err => {
          popupContent.innerHTML = `<p class="text-red-500">Failed to load data.</p>`;
          console.error(err);
        });
    }

    function closePopup() {
      const overlay = document.getElementById('overlay');
      const popup = document.getElementById('rightPopup');

      overlay.classList.add('hidden');
      popup.classList.add('translate-x-full');
    }
  </script>




  @endsection