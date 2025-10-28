<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Freelance SMK')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');

    * {
      font-family: 'Inter', sans-serif;
    }

    .gradient-mesh {
      background-color: #f8fafc;
    }

    .card-shadow {
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.04), 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .card-shadow-hover {
      transition: all 0.3s ease;
    }

    .card-shadow-hover:hover {
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.07), 0 10px 20px rgba(0, 0, 0, 0.08);
      transform: translateY(-2px);
    }

    .input-modern {
      transition: all 0.2s ease;
    }

    .input-modern:focus {
      box-shadow: 0 0 0 3px rgba(122, 200, 255, 0.1);
    }

    .btn-primary {
      background: linear-gradient(135deg, #7ac8ff 0%, #5ab4ff 100%);
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background: linear-gradient(135deg, #5ab4ff 0%, #3aa0ff 100%);
      box-shadow: 0 8px 16px rgba(122, 200, 255, 0.3);
      transform: translateY(-1px);
    }

    .btn-outline {
      transition: all 0.2s ease;
    }

    .btn-outline:hover {
      background-color: #f8fafc;
      border-color: #7ac8ff;
    }

    .floating-element {
      animation: float 6s ease-in-out infinite;
    }

    @keyframes float {

      0%,
      100% {
        transform: translateY(0) rotate(0deg);
      }

      33% {
        transform: translateY(-20px) rotate(2deg);
      }

      66% {
        transform: translateY(-10px) rotate(-2deg);
      }
    }

    .badge {
      animation: pulse-subtle 3s ease-in-out infinite;
    }

    @keyframes pulse-subtle {

      0%,
      100% {
        opacity: 1;
      }

      50% {
        opacity: 0.8;
      }
    }

    .card-outline-hover {
      position: relative;
      transition: all 0.3s ease;
    }

    .card-outline-hover::after {
      content: "";
      position: absolute;
      inset: -4px;
      /* membuat border di luar */
      border-radius: 1rem;
      border: 2px solid transparent;
      transition: all 0.35s ease;
    }

    .card-outline-hover.blue:hover::after {
      border-color: #3b82f6;
      /* biru */
      box-shadow: 0 0 12px rgba(59, 130, 246, 0.3);
    }

    .card-outline-hover.pink:hover::after {
      border-color: #ec4899;
      /* pink */
      box-shadow: 0 0 12px rgba(236, 72, 153, 0.3);
    }

    .card-outline-hover.yellow:hover::after {
      border-color: #facc15;
      /* kuning */
      box-shadow: 0 0 12px rgba(250, 204, 21, 0.3);
    }

    .card-outline-hover:hover {
      transform: translateY(-4px);
    }
  </style>
</head>
<!-- navbar bagian 2 register -->
<body class="bg-gray-50 text-gray-800">

  <nav id="mainNavbar"
    class="bg-white shadow-sm py-4 px-6 md:px-12 lg:px-24 flex justify-between items-center sticky top-0 z-50 transition-all duration-300">

    <!-- Logo -->
    <div class="flex items-center space-x-4">
      <img src="{{ asset('images/smkbm3.png') }}" alt="SMK BM3 Logo" class="h-10">
      <h1 class="text-lg font-bold text-gray-800">SMK Connect</h1>
    </div>

  </nav>
  <main>
    @yield('content')
  </main>

  <footer class="relative bg-[#0B1D51] text-white pt-12 pb-8 overflow-hidden">
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

      <!-- Column 4: Company -->
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

    <!-- === SOCIAL MEDIA SECTION === -->
    <div class="mt-10 text-center md:text-left">
      <div class="flex flex-col md:flex-row items-center justify-start gap-4 text-white">
        <span class="text-sm">Ikuti kami di:</span>
        <div class="flex space-x-4">
          <a href="#" class="text-white hover:text-gray-100 transition"><i class="bi bi-facebook text-xl"></i></a>
          <a href="#" class="text-white hover:text-gray-100 transition"><i class="bi bi-linkedin text-xl"></i></a>
          <a href="#" class="text-white hover:text-gray-100 transition"><i class="bi bi-instagram text-xl"></i></a>
          <a href="#" class="text-white hover:text-gray-100 transition"><i class="bi bi-twitter-x"></i></a>
        </div>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="border-t border-gray-400 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-white">
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

  <!-- ===== Hiasan Dekoratif Background ===== -->
  <!-- Circle besar kiri atas -->
  <div class="absolute -top-20 -left-20 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>

  <!-- Circle sedang kanan bawah -->
  <div class="absolute -bottom-16 -right-16 w-80 h-80 bg-white/10 rounded-full blur-2xl"></div>

  <!-- Dot pattern -->
  <div class="absolute top-10 right-1/4 w-3 h-3 bg-white/30 rounded-full"></div>
  <div class="absolute top-20 right-1/3 w-2 h-2 bg-white/40 rounded-full"></div>
  <div class="absolute bottom-24 left-1/4 w-3 h-3 bg-white/30 rounded-full"></div>
  <div class="absolute bottom-32 left-1/3 w-2 h-2 bg-white/40 rounded-full"></div>

  <!-- Geometric shapes -->
  <div class="absolute top-1/4 left-10 w-12 h-12 border-2 border-white/20 rounded-lg rotate-12"></div>
  <div class="absolute bottom-1/4 right-16 w-16 h-16 border-2 border-white/20 rounded-full"></div>

  <!-- Wave pattern -->
  <svg class="absolute bottom-0 left-0 w-full opacity-10" viewBox="0 0 1200 120" preserveAspectRatio="none">
    <path d="M0,0 C150,50 350,0 600,30 C850,60 1050,10 1200,40 L1200,120 L0,120 Z" fill="white"/>
  </svg>
  </svg>
</footer>
</body>
</html>
