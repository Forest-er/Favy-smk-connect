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
      <img src="/images/register_freelancer.png" alt="Ilustrasi freelancer" class="hidden md:block absolute -right-[43px] top-1/2 -translate-y-1/2 w-40 drop-shadow-lg">

      <div class="bg-white rounded-3xl shadow-xl p-6 lg:p-8 border border-blue-100 relative z-10 max-w-md w-full mx-auto">
        <div class="mb-5 text-left">
          <h2 class="text-2xl font-bold text-gray-900 mb-1">Daftar Sebagai Freelancer</h2>
          <p class="text-gray-600 text-sm">
            Sudah punya akun?
            <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 transition-colors">Masuk di sini</a>
          </p>
        </div>

        <form action="{{ route('register.freelancer') }}" method="POST" class="space-y-4">
          @csrf
          <input type="text" name="nama" placeholder="Nama Lengkap" class="w-full border rounded px-3 py-2" required>
          <input type="email" name="email" placeholder="Email" class="w-full border rounded px-3 py-2" required>
          <input type="tel" name="telepon" placeholder="Nomor Telepon" class="w-full border rounded px-3 py-2" required>
          <input type="text" name="keahlian" placeholder="Keahlian Utama" class="w-full border rounded px-3 py-2" required>
          <input type="password" name="password" placeholder="Password" class="w-full border rounded px-3 py-2" required>
          <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" class="w-full border rounded px-3 py-2" required>

          <div class="flex items-start">
            <input type="checkbox" id="terms" required class="mt-0.5 h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
            <label for="terms" class="ml-2 text-sm text-gray-600">
              Saya menyetujui <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">Syarat & Ketentuan</a> serta <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">Kebijakan Privasi</a>
            </label>
          </div>

          <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg shadow-md hover:shadow-lg transition-all duration-200">
            Daftar Sekarang
          </button>
        </form>
      </div>
    </div>

  </div>
</body>
</html>
