<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Masuk ke Freelance SMK</title>
  <script src="https://cdn.tailwindcss.com"></script>
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

<body class="gradient-mesh min-h-screen">

  <!-- Header Navigation -->
  <nav class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <!-- Logo -->
        <div class="flex items-center gap-2">
          <div class="w-9 h-9 bg-gradient-to-br from-blue-400 to-pink-400 rounded-lg flex items-center justify-center">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z">
              </path>
            </svg>
          </div>
          <span class="text-xl font-bold text-gray-900">Freelance<span class="text-blue-400">SMK</span></span>
        </div>

        <!-- Right Menu -->
        <div class="flex items-center gap-6">
          <a href="#" class="text-gray-600 hover:text-gray-900 font-medium text-sm hidden sm:block">Cari Project</a>
          <a href="#" class="text-gray-600 hover:text-gray-900 font-medium text-sm hidden sm:block">Jadi Freelancer</a>
          <a href="#" class="px-4 py-2 text-sm font-semibold text-gray-700 hover:text-blue-500 transition">Daftar</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">
    <div class="grid lg:grid-cols-2 gap-12 items-center">

      <!-- Left Section - Hero Content -->
      <div class="space-y-8 order-2 lg:order-1">
        <div class="space-y-4">
          <div class="inline-flex items-center gap-2 px-4 py-2 bg-white rounded-full card-shadow badge">
            <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
              </path>
            </svg>
            <span class="text-sm font-semibold text-gray-700">Platform Freelance #1 untuk Siswa SMK</span>
          </div>

          <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
            Raih Peluang Karir <span
              class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-pink-400">Sejak SMK</span>
          </h1>

          <p class="text-lg text-gray-600 leading-relaxed">
            Bergabung dengan ribuan siswa SMK yang sudah menghasilkan dari skill mereka. Mulai perjalanan freelance-mu
            sekarang!
          </p>
        </div>

        <!-- Stats -->
        <!-- Stats -->
        <div class="grid grid-cols-3 gap-6">
          <div class="bg-white rounded-2xl p-5 text-center card-outline-hover blue">
            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mx-auto mb-3">
              <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
            </div>
            <div class="text-2xl font-bold text-gray-900">2,500+</div>
            <div class="text-xs text-gray-500 font-medium mt-1">Project Aktif</div>
          </div>

          <div class="bg-white rounded-2xl p-5 text-center card-outline-hover pink">
            <div class="w-12 h-12 bg-pink-100 rounded-xl flex items-center justify-center mx-auto mb-3">
              <svg class="w-6 h-6 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
              </svg>
            </div>
            <div class="text-2xl font-bold text-gray-900">1,200+</div>
            <div class="text-xs text-gray-500 font-medium mt-1">Freelancer</div>
          </div>

          <div class="bg-white rounded-2xl p-5 text-center card-outline-hover yellow">
            <div class="w-12 h-12 bg-yellow-100 rounded-xl flex items-center justify-center mx-auto mb-3">
              <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
              </svg>
            </div>
            <div class="text-2xl font-bold text-gray-900">4.9/5</div>
            <div class="text-xs text-gray-500 font-medium mt-1">Rating</div>
          </div>
        </div>


        <!-- Testimonial -->
        <div class="card-shadow bg-white rounded-2xl p-6">
          <div class="flex items-start gap-4">
            <div
              class="w-12 h-12 bg-gradient-to-br from-blue-400 to-pink-400 rounded-full flex items-center justify-center text-white font-bold">
              AR
            </div>
            <div class="flex-1">
              <div class="flex items-center gap-2 mb-2">
                <span class="font-semibold text-gray-900">Ahmad Rizki</span>
                <span class="text-sm text-gray-500">• SMK N 1 Jakarta</span>
              </div>
              <p class="text-sm text-gray-600 leading-relaxed">
                "Alhamdulillah sudah dapet 15+ project dari sini. Skill design UI/UX ku jadi makin terasah dan dapat
                pengalaman kerja real!"
              </p>
              <div class="flex gap-1 mt-3">
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                  </path>
                </svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                  </path>
                </svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                  </path>
                </svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                  </path>
                </svg>
                <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                  </path>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- Right Section - Login Form -->
<div class="order-1 lg:order-2 relative flex justify-center lg:justify-end">
  <!-- Illustration -->
  <img src="{{ asset('images/org.png') }}"
       alt="Login Illustration"
       class="w-28 lg:w-32 absolute -top-6 right-20 z-20 drop-shadow-md">

  <!-- Card -->
  <div class="bg-white rounded-3xl card-shadow p-8 lg:p-10 max-w-md mx-auto lg:mr-20 mt-20 relative z-10">
    <div class="mb-8">
      <h2 class="text-3xl font-bold text-gray-900 mb-2">Masuk ke Akun</h2>
      <p class="text-gray-600">
        Belum punya akun?
        <a href="{{ route('choose.role') }}" class="text-blue-500 font-semibold hover:text-blue-600 transition">
  Daftar gratis
</a>

      </p>
    </div>

    <!-- Form -->
    <form class="space-y-5">
      <!-- Email -->
      <div>
        <label class="block text-sm font-semibold text-gray-700 mb-2" for="email">Email atau Username</label>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
            </svg>
          </div>
          <input type="text" id="email" placeholder="Masukkan email atau username"
                 class="w-full pl-12 pr-4 py-3.5 border border-gray-300 rounded-xl focus:border-blue-400 focus:outline-none bg-white text-gray-900">
        </div>
      </div>

      <!-- Password -->
      <div>
        <label class="block text-sm font-semibold text-gray-700 mb-2" for="password">Password</label>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
            </svg>
          </div>
          <input type="password" id="password" placeholder="Masukkan password"
                 class="w-full pl-12 pr-4 py-3.5 border border-gray-300 rounded-xl focus:border-blue-400 focus:outline-none bg-white text-gray-900">
          <button type="button"
                  class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-gray-600">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
            </svg>
          </button>
        </div>
      </div>

      <!-- Remember & Forgot -->
      <div class="flex items-center justify-between">
        <label class="flex items-center gap-2 cursor-pointer">
          <input type="checkbox"
                 class="w-4 h-4 rounded border-gray-300 text-blue-500 focus:ring-2 focus:ring-blue-400">
          <span class="text-sm text-gray-700">Remember Me</span>
        </label>
        <a href="#" class="text-sm font-semibold text-blue-500 hover:text-blue-600 transition">
          Lupa password?
        </a>
      </div>

      <!-- Login Button -->
      <button type="submit"
              class="w-full py-3.5 rounded-xl text-white font-semibold text-base shadow-sm bg-blue-500 hover:bg-blue-600 transition">
        Masuk
      </button>
    </form>

    <!-- Catatan Keamanan -->
    <div class="mt-6 flex items-start gap-2 p-4 bg-blue-50 rounded-xl">
      <svg class="w-5 h-5 text-blue-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
           viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
      </svg>
      <p class="text-xs text-blue-700 leading-relaxed">
        Data kamu dilindungi dengan enkripsi SSL dan keamanan tingkat bank.
      </p>
    </div>
  </div>
</div>



    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-white border-t border-gray-200 mt-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
      <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
        <p class="text-sm text-gray-500">© 2025 Freelance SMK. All rights reserved.</p>
        <div class="flex gap-6">
          <a href="#" class="text-sm text-gray-500 hover:text-gray-900">Tentang Kami</a>
          <a href="#" class="text-sm text-gray-500 hover:text-gray-900">Syarat & Ketentuan</a>
          <a href="#" class="text-sm text-gray-500 hover:text-gray-900">Kebijakan Privasi</a>
          <a href="#" class="text-sm text-gray-500 hover:text-gray-900">Bantuan</a>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>