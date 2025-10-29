<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Freelance SMK')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

    body {
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

    .gradient-bg {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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

    .project-badge {
      display: inline-flex;
      align-items: center;
      gap: 4px;
      padding: 4px 12px;
      border-radius: 20px;
      font-size: 12px;
      font-weight: 500;
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
  </style>
</head>

<body class="bg-gray-50 text-gray-800">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  @php $user = Auth::user(); @endphp

  <nav id="mainNavbar"
    class="bg-white shadow-sm py-4 px-6 md:px-12 lg:px-24 flex justify-between items-center sticky top-0 z-50 transition-all duration-300">

    <!-- Logo -->
    <div class="flex items-center">
      <a
        href="{{ Auth::check() ? route(Auth::user()->role . '.dashboard') : route('login') }}"
        class="flex items-center gap-2">
        <img
          src="{{ asset('images/LOGO-SMK-CONNECT.png') }}"
          alt="SMK BM3 Logo"
          class="h-10 w-auto object-contain">
        <h1 class="text-lg font-bold text-gray-800 leading-tight translate-y-[1px]">
          SMK Connect
        </h1>
      </a>
    </div>


    <!-- Profile Dropdown -->
    <div class="relative" x-data="{ open: false }">
      <button onclick="toggleDropdown()" id="profileButton"
        class="focus:outline-none flex items-center space-x-2">
        <img
          src="{{ $user && $user->foto_profil ? asset('storage/' . $user->foto_profil) : asset('images/profile.jpeg') }}"
          alt="Profile"
          class="w-10 h-10 rounded-full border-2 border-gray-300 object-cover">
      </button>

      {{-- Dropdown hanya muncul kalau user login --}}
      @if($user)
      <div id="profileDropdown"
        class="hidden absolute right-0 mt-3 w-40 bg-white border rounded-lg shadow-lg py-2 transition-all duration-200">
        <a href="{{ route(Auth::user()->role . '.profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings <i class="bi bi-gear"></i> </a>
        <form action="{{ route('logout') }}" method="POST" class="block">
          @csrf
          <button type="submit"
            class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout <i class="bi bi-box-arrow-right"></i></button>
        </form>
      </div>
      @endif
    </div>

  </nav>

  {{-- Konten utama --}}
  <main>
    @yield('content')
  </main>

  {{-- Footer --}}
  <footer class="relative bg-[#0B1D51] text-white pt-12 pb-8 overflow-hidden">
    <div class="container mx-auto px-6 md:px-12 lg:px-24">

      <!-- Kolom Utama Footer -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        <!-- Kolom 1: Untuk Klien -->
        <div class="text-center md:text-left">
          <h3 class="text-sm font-semibold uppercase text-white mb-6">Untuk Klien</h3>
          <ul class="space-y-3">
            <li><a href="#" class="text-sm hover:text-gray-100 transition">Cara merekrut</a></li>
            <li><a href="#" class="text-sm hover:text-gray-100 transition">Freelance Marketplace</a></li>
          </ul>
        </div>

        <!-- Kolom 2: Untuk Talenta -->
        <div class="text-center md:text-left">
          <h3 class="text-sm font-semibold uppercase text-white mb-6">Untuk Freelance</h3>
          <ul class="space-y-3">
            <li><a href="#" class="text-sm hover:text-gray-100 transition">Cara mencari pekerjaan</a></li>
            <li><a href="#" class="text-sm hover:text-gray-100 transition">Kontrak Langsung</a></li>
            <li><a href="#" class="text-sm hover:text-gray-100 transition">Cari pekerjaan freelance di seluruh dunia</a></li>
          </ul>
        </div>

        <!-- Kolom 3: Website -->
        <div class="text-center md:text-left">
          <h3 class="text-sm font-semibold uppercase text-white mb-6">Website</h3>
          <ul class="space-y-3">
            <li><a href="#" class="text-sm hover:text-gray-100 transition">Tentang kami</a></li>
            <li><a href="#" class="text-sm hover:text-gray-100 transition">Karir</a></li>
            <li><a href="#" class="text-sm hover:text-gray-100 transition">Hubungi kami</a></li>
          </ul>
        </div>

      </div>

      <!-- === BAGIAN MEDIA SOSIAL === -->
      <div class="mt-10 text-center">
        <div class="flex flex-col md:items-start items-center gap-4">
          <span class="text-sm">Ikuti kami di:</span>
          <div class="flex space-x-4">
            <a href="#" class="text-white hover:text-gray-100 transition"><i class="bi bi-facebook text-xl"></i></a>
            <a href="#" class="text-white hover:text-gray-100 transition"><i class="bi bi-linkedin text-xl"></i></a>
            <a href="#" class="text-white hover:text-gray-100 transition"><i class="bi bi-instagram text-xl"></i></a>
            <a href="#" class="text-white hover:text-gray-100 transition"><i class="bi bi-twitter-x text-xl"></i></a>
          </div>
        </div>
      </div>

      <!-- Bawah Footer -->
      <div class="border-t border-gray-400 mt-8 pt-8 text-center">
        <div class="mb-4">
          <div class="flex flex-wrap justify-center gap-4 text-sm">
            <a href="#" class="hover:text-gray-100 transition">Kebijakan Privasi</a>
            <a href="#" class="hover:text-gray-100 transition">Syarat Layanan</a>
            <a href="#" class="hover:text-gray-100 transition">Kebijakan Cookie</a>
            <a href="#" class="hover:text-gray-100 transition">Aksesibilitas</a>
          </div>
        </div>
        <p class="text-sm text-white">&copy; {{ date('Y') }} SMK Connect. Semua hak dilindungi.</p>
      </div>

    </div>

    <!-- ===== Dekorasi Latar Belakang ===== -->
    <div class="absolute -top-20 -left-20 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-16 -right-16 w-80 h-80 bg-white/10 rounded-full blur-2xl"></div>
    <div class="absolute top-10 right-1/4 w-3 h-3 bg-white/30 rounded-full"></div>
    <div class="absolute top-20 right-1/3 w-2 h-2 bg-white/40 rounded-full"></div>
    <div class="absolute bottom-24 left-1/4 w-3 h-3 bg-white/30 rounded-full"></div>
    <div class="absolute bottom-32 left-1/3 w-2 h-2 bg-white/40 rounded-full"></div>
    <div class="absolute top-1/4 left-10 w-12 h-12 border-2 border-white/20 rounded-lg rotate-12"></div>
    <div class="absolute bottom-1/4 right-16 w-16 h-16 border-2 border-white/20 rounded-full"></div>
    <svg class="absolute bottom-0 left-0 w-full opacity-10" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M0,0 C150,50 350,0 600,30 C850,60 1050,10 1200,40 L1200,120 L0,120 Z" fill="white" />
    </svg>
  </footer>

  <script>
    // Simple toggle dropdown
    function toggleDropdown() {
      const dropdown = document.getElementById('profileDropdown');
      dropdown.classList.toggle('hidden');
    }

    // Tutup dropdown jika klik di luar area
    window.addEventListener('click', function(e) {
      const button = document.getElementById('profileButton');
      const dropdown = document.getElementById('profileDropdown');
      if (!button.contains(e.target) && !dropdown.contains(e.target)) {
        dropdown.classList.add('hidden');
      }
    });
  </script>
</body>

</html>