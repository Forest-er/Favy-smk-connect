<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Freelancer | Freelance SMK</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-50 via-indigo-50 to-cyan-50 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-6xl w-full grid md:grid-cols-2 gap-8 items-center">
    
    <!-- Left Side - Illustration & Info -->
    <div class="hidden md:block space-y-8 px-8">
      <div class="space-y-4">
        <div class="inline-block px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-semibold">
          Platform Freelance Terpercaya
        </div>
        <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
          Mulai Karir<br/>
          <span class="text-blue-600">Freelance</span> Anda<br/>
          Bersama Kami
        </h1>
        <p class="text-gray-600 text-lg leading-relaxed">
          Bergabunglah dengan ribuan freelancer SMK yang telah mengembangkan skill dan mendapatkan penghasilan melalui platform kami.
        </p>
      </div>
      
      <!-- Feature List -->
      <div class="space-y-4">
        <div class="flex items-start gap-4">
          <div class="flex-shrink-0 w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 mb-1">Proyek Real dari Client</h3>
            <p class="text-gray-600 text-sm">Dapatkan pengalaman nyata dengan proyek-proyek berkualitas</p>
          </div>
        </div>
        
        <div class="flex items-start gap-4">
          <div class="flex-shrink-0 w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center">
            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 mb-1">Penghasilan Fleksibel</h3>
            <p class="text-gray-600 text-sm">Tentukan sendiri waktu kerja dan penghasilan Anda</p>
          </div>
        </div>
        
        <div class="flex items-start gap-4">
          <div class="flex-shrink-0 w-12 h-12 bg-indigo-100 rounded-xl flex items-center justify-center">
            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
            </svg>
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 mb-1">Portofolio Profesional</h3>
            <p class="text-gray-600 text-sm">Bangun portofolio yang menarik perhatian client</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Right Side - Registration Form -->
    <div class="relative flex justify-center">
      <img src="/images/register_freelancer.png"
           alt="Ilustrasi freelancer"
           class="hidden md:block absolute -right-[43px] top-1/2 -translate-y-1/2 w-40 drop-shadow-lg">

<<<<<<< HEAD
      <form class="space-y-5" action="{{ route('register.freelancer') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="nama" class="block text-sm font-medium">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="w-full border rounded px-3 py-2" required>
            @error('nama') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
          </div>

        <div class="mb-4">
          <label for="email" class="block text-sm font-medium">Email</label>
          <input type="email" name="email" id="email" value="{{ old('email') }}" class="w-full border rounded px-3 py-2" required>
          @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="grid grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input type="password" name="password" id="password" class="w-full border rounded px-3 py-2" required>
            @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
=======
      <div class="bg-white rounded-3xl shadow-xl p-6 lg:p-8 border border-blue-100 relative z-10 max-w-md w-full mx-auto">
        <!-- Header -->
        <div class="mb-5 text-left">
          <h2 class="text-2xl font-bold text-gray-900 mb-1">Daftar Sebagai Freelancer</h2>
          <p class="text-gray-600 text-sm">
            Sudah punya akun?
            <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 transition-colors">
              Masuk di sini
            </a>
          </p>
        </div>

        <!-- Form -->
        <form onsubmit="event.preventDefault(); alert('Registrasi berhasil!');" class="space-y-4">
          <!-- Nama -->
          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
              </div>
              <input type="text" required placeholder="Masukkan nama lengkap"
                class="w-full pl-12 pr-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all">
            </div>
>>>>>>> a8c3fd3a25276dd48f544e3a664f74def7640648
          </div>

          <!-- Email -->
          <div>
<<<<<<< HEAD
            <label class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="w-full border rounded px-3 py-2" required>
            @error('password_confirmation') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
=======
            <label class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
              </div>
              <input type="email" required placeholder="Masukkan Email"
                class="w-full pl-12 pr-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition-all">
            </div>
>>>>>>> a8c3fd3a25276dd48f544e3a664f74def7640648
          </div>

          <!-- Nomor Telepon -->
          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1">Nomor Telepon</label>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
              </div>
              <input type="tel" required placeholder="08123456789"
                class="w-full pl-12 pr-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition-all">
            </div>
          </div>

          <!-- Keahlian -->
          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1">Keahlian Utama</label>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                </svg>
              </div>
              <select required
                class="w-full pl-12 pr-10 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all appearance-none bg-white">
                <option value="">Pilih keahlian utama</option>
                <option value="web">Web Development</option>
                <option value="mobile">Mobile Development</option>
                <option value="design">UI/UX Design</option>
                <option value="content">Content Writing</option>
                <option value="digital">Digital Marketing</option>
                <option value="video">Video Editing</option>
              </select>
              <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
              </div>
            </div>
          </div>

          <!-- Password -->
          <div>
            <label class="block text-sm font-semibold text-gray-700 mb-1">Password</label>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                </svg>
              </div>
              <input type="password" required id="password" placeholder="Masukkan password"
                class="w-full pl-12 pr-12 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition-all">
              <button type="button"
                onclick="const input = document.getElementById('password'); input.type = input.type === 'password' ? 'text' : 'password'; this.querySelector('svg').classList.toggle('hidden'); this.querySelectorAll('svg')[1].classList.toggle('hidden');"
                class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-blue-600 transition-colors">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
                <svg class="h-5 w-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                </svg>
              </button>
            </div>
            <p class="mt-1 text-xs text-gray-500">Password harus minimal 8 karakter</p>
          </div>

          <!-- Terms -->
          <div class="flex items-start">
            <input type="checkbox" required id="terms"
              class="mt-0.5 h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
            <label for="terms" class="ml-2 text-sm text-gray-600">
              Saya menyetujui
              <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">Syarat & Ketentuan</a>
              serta
              <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">Kebijakan Privasi</a>
            </label>
          </div>

          <!-- Submit -->
          <button type="submit"
            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg shadow-md hover:shadow-lg transition-all duration-200">
            Daftar Sekarang
          </button>
        </form>
      </div>
    </div>

  </div>
</body>
</html>