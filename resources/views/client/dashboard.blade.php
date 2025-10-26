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
      <div class="flex-1 p-6 rounded-xl bg--to-br from-purple-50 to-white border border-gray-100 hover:shadow-md transition">
        <div class="flex items-center justify-between mb-2">
          <span class="text-sm text-gray-500">Projects Posted</span>
          <i class="bi bi-folder2-open text-purple-500 text-lg"></i>
        </div>
        <p class="text-3xl font-bold text-gray-800">8</p>
      </div>

      <!-- Total Spent -->
      <div class="flex-1 p-6 rounded-xl bg--to-br from-green-50 to-white border border-gray-100 hover:shadow-md transition">
        <div class="flex items-center justify-between mb-2">
          <span class="text-sm text-gray-500">Total Spent</span>
          <i class="bi bi-cash-stack text-green-500 text-lg"></i>
        </div>
        <p class="text-3xl font-bold text-gray-800">Rp5.000.000</p>
      </div>

      <!-- Active Freelancers -->
      <div class="flex-1 p-6 rounded-xl bg--to-br from-yellow-50 to-white border border-gray-100 hover:shadow-md transition">
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



<div class="max-w-7xl mx-auto px-4">
  <!-- Hero Section with Slideshow -->
  <div class="relative rounded-3xl p-10 mb-10 overflow-hidden shadow-lg border border-black/40">
    <!-- Slides Background -->
    <div class="absolute inset-0 w-full h-full">
      <div class="absolute inset-0 w-full h-full bg-[url('/images/slide1.png')] bg-cover bg-center opacity-100 transition-opacity duration-1000 slide"></div>
      <div class="absolute inset-0 w-full h-full bg-[url('/images/slide2.png')] bg-cover bg-center opacity-0 transition-opacity duration-1000 slide"></div>
      <div class="absolute inset-0 w-full h-full bg-[url('/images/slide3.png')] bg-cover bg-center opacity-0 transition-opacity duration-1000 slide"></div>
      <div class="absolute inset-0 w-full h-full bg-[url('/images/slide4.png')] bg-cover bg-center opacity-0 transition-opacity duration-1000 slide"></div>
    </div>

    <!-- Content Over Slide -->
    <div class="relative z-10 max-w-7xl mx-auto">
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
        <img src="/images/duduk.png" class="absolute -top-[60px] right-[650px] w-40 z-20 select-none hidden lg:block" alt="Illustration">
        <div class="relative w-full md:w-[50%]">
          <form method="GET" action="{{ route('client.dashboard') }}">
            <div class="flex flex-row">
              <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">
                <i class="bi bi-search"></i>
              </span>
              <input type="text" 
                     placeholder="Search projects..." 
                     name="keyword"
                     value="{{ request('keyword') }}"
                     class="w-full pl-12 p-3 border border-gray-300 rounded-l-full text-gray-800 focus:outline-none focus:border-blue-500">
              <button type="submit" class="bg-white text-black py-3 px-5 rounded-r-full hover:bg-gray-100 transition">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Client Stats Section -->
  <section class="max-w-7xl mx-auto mb-16">
    <h2 class="text-2xl font-bold mb-6 text-gray-900">Client Stats</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      <!-- Projects Posted -->
      <div class="flex-1 p-6 rounded-xl bg-gradient-to-br from-purple-50 to-white border border-gray-100 hover:shadow-md transition">
        <div class="flex items-center justify-between mb-2">
          <span class="text-sm text-gray-500">Projects Posted</span>
          <i class="bi bi-folder2-open text-purple-500 text-lg"></i>
        </div>
        <p class="text-3xl font-bold text-gray-800">{{ $totalProjects ?? 8 }}</p>
      </div>

      <!-- Total Spent -->
      <div class="flex-1 p-6 rounded-xl bg-gradient-to-br from-green-50 to-white border border-gray-100 hover:shadow-md transition">
        <div class="flex items-center justify-between mb-2">
          <span class="text-sm text-gray-500">Total Spent</span>
          <i class="bi bi-cash-stack text-green-500 text-lg"></i>
        </div>
        <p class="text-3xl font-bold text-gray-800">Rp{{ number_format($totalSpent ?? 5000000, 0, ',', '.') }}</p>
      </div>

      <!-- Active Freelancers -->
      <div class="flex-1 p-6 rounded-xl bg-gradient-to-br from-yellow-50 to-white border border-gray-100 hover:shadow-md transition">
        <div class="flex items-center justify-between mb-2">
          <span class="text-sm text-gray-500">Active Freelancers</span>
          <i class="bi bi-people text-yellow-500 text-lg"></i>
        </div>
        <p class="text-3xl font-bold text-gray-800">{{ $activeFreelancers ?? 7 }}</p>
      </div>
    </div>
  </section>

  <!-- Categories Section -->
  <div class="mb-10 flex items-center justify-between">
    <h2 class="text-2xl font-bold">Explore Categories</h2>
    <div class="flex space-x-2">
      <button onclick="scrollCategories('left')" class="w-8 h-8 flex items-center justify-center bg-white rounded-full shadow hover:bg-gray-100 transition">
        <svg class="w-4 h-4 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
      </button>
      <button onclick="scrollCategories('right')" class="w-8 h-8 flex items-center justify-center bg-white rounded-full shadow hover:bg-gray-100 transition">
        <svg class="w-4 h-4 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </button>
    </div>
  </div>

  <!-- Category Icons Grid -->
  <div id="categoryScroll" class="mb-10 w-full flex flex-row items-center space-x-6 overflow-x-auto pb-10 scrollbar-hide">
    @php
      $styles = [
        ['bg' => '#ffe2a8', 'color' => '#7a4a00', 'shadow' => 'hover:shadow-[0_6px_20px_rgba(255,226,168,0.7)]', 'icon' => '<path d="M8.25 15L3.75 12l4.5-3m7.5 6l4.5-3-4.5-3m-3.75-3.75L9 21" />'],
        ['bg' => '#eaa7f1', 'color' => '#6d005f', 'shadow' => 'hover:shadow-[0_6px_20px_rgba(234,167,241,0.7)]', 'icon' => '<path d="M8.25 8.25l7.5-2.25v9l-7.5 2.25v-9zM19.5 12a3 3 0 11-6 0" />'],
        ['bg' => '#7ac8ff', 'color' => '#0f3a4b', 'shadow' => 'hover:shadow-[0_6px_20px_rgba(122,200,255,0.6)]', 'icon' => '<path d="M12 4.5v15m-7.5-7.5h15" />'],
      ];
    @endphp

    @foreach ($jurusans as $index => $jurusan)
      @php
        $style = $styles[$index % count($styles)];
      @endphp
      <a href="{{ route('client.dashboard', ['jurusan_id' => $jurusan->id_jurusan]) }}"
         class="group bg-white rounded-xl shadow flex flex-col items-center justify-center hover:-translate-y-1 transition cursor-pointer shrink-0 {{ $style['shadow'] }}"
         style="width: 200px; height: 140px; min-width: 140px; text-decoration: none;">
        <div class="rounded-full w-12 h-12 flex items-center justify-center mb-3 transition-all group-hover:brightness-110"
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

  <!-- Category Tabs -->
  @php
    $gradients = [
      ['from' => 'from-indigo-400', 'to' => 'to-purple-400'],
      ['from' => 'from-blue-400', 'to' => 'to-indigo-400'],
      ['from' => 'from-purple-400', 'to' => 'to-pink-400'],
      ['from' => 'from-pink-400', 'to' => 'to-rose-400'],
      ['from' => 'from-cyan-400', 'to' => 'to-blue-400'],
    ];
  @endphp

  <div class="w-full overflow-x-auto scrollbar-hide mb-8">
    <div class="flex gap-4 text-sm font-medium min-w-max">
      @foreach ($jurusans as $index => $jurusan)
        @php
          $gradient = $gradients[$index % count($gradients)];
          $isActive = request('jurusan_id') == $jurusan->id_jurusan;
        @endphp
        <a href="{{ route('client.dashboard', ['jurusan_id' => $jurusan->id_jurusan]) }}"
           class="px-5 py-2.5 rounded-2xl border transition-all duration-300 whitespace-nowrap
                  {{ $isActive 
                     ? 'text-white border-transparent bg-gradient-to-r ' . $gradient['from'] . ' ' . $gradient['to'] . ' shadow-md' 
                     : 'text-gray-800 border-gray-300 bg-transparent hover:text-white hover:border-transparent hover:bg-gradient-to-r hover:' . $gradient['from'] . ' hover:' . $gradient['to'] . ' hover:shadow-md' }}">
          {{ $jurusan->nama_jurusan }}
        </a>
      @endforeach
    </div>
  </div>

  <!-- Tasks Gallery Grid -->
  <section class="mb-16">
    <h2 class="text-2xl font-bold mb-6">Available Projects</h2>
    
    @if($tasks && $tasks->count() > 0)
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach($tasks as $task)
          <div onclick="openTaskPopup({{ $task->id_task }})" 
               class="relative group cursor-pointer overflow-hidden rounded-xl bg-white shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
            
            @if($task->foto)
              <img src="{{ asset('storage/' . $task->foto) }}" 
                   class="w-full h-48 object-cover" 
                   alt="{{ $task->judul }}">
            @else
              <div class="w-full h-48 bg-gradient-to-br from-blue-400 to-purple-400 flex items-center justify-center">
                <i class="bi bi-image text-white text-4xl"></i>
              </div>
            @endif

            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end">
              <div class="w-full text-white p-4">
                <p class="font-semibold text-sm mb-1">{{ Str::limit($task->judul, 40) }}</p>
                <p class="text-xs opacity-90">by: {{ $task->user->nama ?? 'Anonymous' }}</p>
                <div class="flex items-center justify-between mt-2">
                  <span class="text-xs bg-white/20 backdrop-blur-sm px-2 py-1 rounded">
                    Rp{{ number_format($task->budget, 0, ',', '.') }}
                  </span>
                  <span class="text-xs">{{ $task->jurusan->nama_jurusan ?? 'General' }}</span>
                </div>
              </div>
            </div>

            <button class="absolute top-3 right-3 opacity-0 group-hover:opacity-100 transition duration-300 z-10"
                    onclick="event.stopPropagation(); toggleSaveJob({{ $task->id_task }})">
              <i class="bi bi-bookmark-fill text-white text-2xl hover:text-pink-500 transition-colors drop-shadow-lg"></i>
            </button>
          </div>
        @endforeach
      </div>
    @else
      <div class="text-center py-16">
        <i class="bi bi-inbox text-gray-400 text-6xl mb-4"></i>
        <p class="text-gray-500 text-lg">No projects available at the moment</p>
      </div>
    @endif
  </section>
</div>

<!-- Overlay -->
<div id="overlay" class="fixed inset-0 bg-black/50 hidden z-40 transition-opacity" onclick="closeTaskPopup()"></div>

<!-- Task Detail Popup -->
<div id="taskPopup" class="fixed top-0 right-0 h-full w-full md:w-[80%] lg:w-[70%] bg-white shadow-2xl transform translate-x-full transition-transform duration-500 ease-in-out z-50 rounded-l-3xl overflow-hidden">
  <div class="flex flex-col h-full">
    <!-- Header -->
    <div class="flex items-center justify-between p-6 border-b border-gray-200 bg-white sticky top-0 z-10 shadow-sm">
      <h3 class="text-xl font-semibold text-gray-800">Project Details</h3>
      <button onclick="closeTaskPopup()" class="text-gray-400 hover:text-gray-600 text-3xl transition">&times;</button>
    </div>

    <!-- Content -->
    <div id="taskPopupContent" class="flex-1 overflow-y-auto">
      <!-- Content will be loaded here -->
      <div class="flex items-center justify-center h-full">
        <div class="text-center">
          <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-blue-500 mx-auto mb-4"></div>
          <p class="text-gray-500">Loading...</p>
        </div>
      </div>
    </div>
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

<script>
  // Slideshow functionality
  const slides = document.querySelectorAll('.slide');
  let currentSlide = 0;

  setInterval(() => {
    slides[currentSlide].classList.remove('opacity-100');
    slides[currentSlide].classList.add('opacity-0');
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].classList.remove('opacity-0');
    slides[currentSlide].classList.add('opacity-100');
  }, 4000);

  // Category scroll functionality
  function scrollCategories(direction) {
    const container = document.getElementById('categoryScroll');
    const scrollAmount = 300;
    if (direction === 'left') {
      container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    } else {
      container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    }
  }

  // Open task popup
  async function openTaskPopup(taskId) {
    const overlay = document.getElementById('overlay');
    const popup = document.getElementById('taskPopup');
    const content = document.getElementById('taskPopupContent');

    // Show popup
    overlay.classList.remove('hidden');
    popup.classList.remove('translate-x-full');

    try {
      const response = await fetch(`/client/task/${taskId}`);
      if (!response.ok) throw new Error('Failed to fetch task details');
      
      const html = await response.text();
      content.innerHTML = html;
    } catch (error) {
      console.error(error);
      content.innerHTML = `
        <div class="flex items-center justify-center h-full p-8">
          <div class="text-center">
            <i class="bi bi-exclamation-circle text-red-500 text-5xl mb-4"></i>
            <p class="text-red-500 text-lg">Failed to load task details</p>
            <button onclick="closeTaskPopup()" class="mt-4 px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
              Close
            </button>
          </div>
        </div>
      `;
    }
  }

  // Close task popup
  function closeTaskPopup() {
    const overlay = document.getElementById('overlay');
    const popup = document.getElementById('taskPopup');
    
    overlay.classList.add('hidden');
    popup.classList.add('translate-x-full');
  }

  // Toggle save job
  function toggleSaveJob(taskId) {
    // Implement save/unsave functionality
    console.log('Toggle save for task:', taskId);
    // You can add AJAX call here to save/unsave the job
  }

  // Close popup when pressing ESC
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      closeTaskPopup();
    }
  });
</script>
@endsection