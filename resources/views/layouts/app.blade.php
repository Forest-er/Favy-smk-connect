<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Freelance SMK')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>

<body class="bg-gray-50 text-gray-800">

  {{-- Navbar --}}
  <!-- <header class="bg-white shadow-sm sticky top-0 z-30">
    <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">
      <h1 class="text-lg font-bold text-gray-800">Freelance SMK</h1>
      <nav class="space-x-6 text-sm font-medium text-gray-600">
        <a href="/" class="hover:text-pink-500">Beranda</a>
        <a href="/choose-role" class="hover:text-pink-500">Daftar</a>
        <a href="/auth" class="hover:text-pink-500">Masuk</a>
      </nav>
    </div>
  </header> -->
<!-- Pastikan CDN Bootstrap Icons sudah ada -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<nav id="mainNavbar" class="bg-white shadow-sm py-4 px-6 md:px-12 lg:px-24 flex justify-between items-center sticky top-0 z-50 transition-all duration-300">
  <div class="flex items-center space-x-4">
    <img src="{{ asset('images/smkbm3.png') }}" alt="SMK BM3 Logo" class="h-10">
    <h1 class="text-lg font-bold text-gray-800">SMK Connect</h1>
  </div>

  <!-- Search Bar Gabungan: Input + Kotak Ikon Hitam -->
  <div class="flex-1 max-w-2xl mx-6">
    <div class="flex border border-gray-300 rounded-none overflow-hidden">
      <!-- Input teks -->
      <input
        type="text"
        placeholder="Cari..."
        class="flex-1 py-2 pl-4 pr-3 text-sm focus:outline-none focus:ring-0"
      >
      <!-- Kotak ikon: memenuhi tinggi, background hitam -->
      <div class="bg-black w-10 flex items-center justify-center">
        <i class="bi bi-search text-white text-base"></i>
      </div>
    </div>
  </div>

  <div class="flex items-center space-x-6 text-sm font-bold">
    <div class="relative group">
      <button class="flex items-center space-x-1 hover:text-gray-700">
        <span>Jelajah</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </button>
      <div class="absolute left-0 mt-2 w-48 bg-white border rounded-lg shadow-lg hidden group-hover:block">
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Kategori</a>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Trending</a>
      </div>
    </div>

    <a href="#" class="hover:text-gray-700">Beranda</a>
    <button class="border border-gray-300 rounded-md px-4 py-1 hover:bg-gray-50">Akun</button>
  </div>
</nav>

  {{-- Konten utama --}}
  <main class="py-10">
    @yield('content')
  </main>

  {{-- Footer --}}
  <!-- <footer class="text-center text-gray-500 text-sm py-6 border-t mt-12">
    &copy; {{ date('Y') }} Freelance SMK. Semua hak dilindungi.
  </footer> -->


  <footer class="bg-[#0B1D51] text-white pt-12 pb-8">
    <div class="container mx-auto px-6 md:px-12 lg:px-24">

      <!-- Main Footer Columns -->
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

        <!-- Column 1: For Clients -->
        <div>
          <h3 class="text-sm font-semibold uppercase text-white mb-6">For Clients</h3>
          <ul class="space-y-3">
            <li><a href="#" class="text-sm hover:text-gray-100 transition">How to hire</a></li>
            <li><a href="#" class="text-sm hover:text-gray-100 transition">Talent Marketplace</a></li>
            <li><a href="#" class="text-sm hover:text-gray-100 transition">Project Catalog</a></li>
          </ul>
        </div>

        <!-- Column 2: For Talent -->
        <div>
          <h3 class="text-sm font-semibold uppercase text-white mb-6">For Talent</h3>
          <ul class="space-y-3">
            <li><a href="#" class="text-sm hover:text-gray-100 transition">How to find work</a></li>
            <li><a href="#" class="text-sm hover:text-gray-100 transition">Direct Contracts</a></li>
            <li><a href="#" class="text-sm hover:text-gray-100 transition">Find freelance jobs worldwide</a></li>
            <li><a href="#" class="text-sm hover:text-gray-100 transition">Find freelance jobs in the USA</a></li>
          </ul>
        </div>

        <!-- Column 3: Resources -->
        <div>
          <h3 class="text-sm font-semibold uppercase text-white mb-6">Resources</h3>
          <ul class="space-y-3">
            <li><a href="#" class="text-sm hover:text-gray-100 transition">Help & support</a></li>
            <li><a href="#" class="text-sm hover:text-gray-100 transition">Upwork reviews</a></li>
            <li><a href="#" class="text-sm hover:text-gray-100 transition">Resources</a></li>
          </ul>
        </div>

        <!-- Column 4: Company (tanpa sosial media) -->
        <div>
          <h3 class="text-sm font-semibold uppercase text-white mb-6">Company</h3>
          <ul class="space-y-3">
            <li><a href="#" class="text-sm hover:text-gray-100 transition">About us</a></li>
            <li><a href="#" class="text-sm hover:text-gray-100 transition">Leadership</a></li>
            <li><a href="#" class="text-sm hover:text-gray-100 transition">Careers</a></li>
            <li><a href="#" class="text-sm hover:text-gray-100 transition">Our impact</a></li>
            <li><a href="#" class="text-sm hover:text-gray-100 transition">Contact us</a></li>
            <li><a href="#" class="text-sm hover:text-gray-100 transition">Partners</a></li>
          </ul>
        </div>

      </div>

      <!-- === SOCIAL MEDIA SECTION (Baru, di atas copyright) === -->
      <div class="mt-10 text-center md:text-left">
        <div class="flex flex-col md:flex-row items-center justify-start gap-4 text-white">
          <span class="text-sm">Ikuti kami di:</span>
          <div class="flex space-x-4">
            <a href="#" class="text-white hover:text-gray-100 transition">
              <i class="bi bi-facebook text-xl"></i>
            </a>
            <a href="#" class="text-white hover:text-gray-100 transition">
              <i class="bi bi-linkedin text-xl"></i>
            </a>
            <a href="#" class="text-white hover:text-gray-100 transition">
              <i class="bi bi-instagram text-xl"></i>
            </a>
            <a href="#" class="text-white hover:text-gray-100 transition">
              <i class="bi bi-twitter-x"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Footer Bottom -->
      <div class="border-t border-gray-white mt-8 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-white">
        <div>
          &copy; {{ date('Y') }} SMK Connect. All rights reserved.
        </div>
        <div class="flex flex-wrap justify-center gap-4">
          <a href="#" class="hover:text-gray-100 transition">Privacy Policy</a>
          <a href="#" class="hover:text-gray-100 transition">Terms of Service</a>
          <a href="#" class="hover:text-gray-100 transition">Cookie Policy</a>
          <a href="#" class="hover:text-gray-100 transition">Accessibility</a>
        </div>
      </div>

    </div>
  </footer>

</body>

</html>