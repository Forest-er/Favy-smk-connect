<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Freelancer | Freelance SMK</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f8fafc 0%, #eef2ff 100%);
    }
    .card {
      box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08);
    }
  </style>
</head>

<body class="min-h-screen flex items-center justify-center px-4 py-8">
  <div class="bg-white card rounded-3xl overflow-hidden flex flex-col lg:flex-row w-full max-w-5xl">

    <!-- Left Illustration -->
    <div class="lg:w-1/2 bg-gradient-to-br from-blue-600 to-indigo-700 flex items-center justify-center relative">
      <div class="absolute inset-0 bg-black/10"></div>
      <img src="https://cdn3d.iconscout.com/3d/premium/thumb/freelancer-typing-on-laptop-3d-illustration-download-in-png-blend-fbx-gltf-file-formats--working-work-from-home-office-remote-job-pack-illustrations-7150170.png"
           alt="Freelancer Illustration"
           class="w-80 z-10">
      <div class="absolute bottom-6 left-6 text-white/90">
        <h3 class="text-lg font-semibold">Bergabung Bersama Freelancer SMK</h3>
        <p class="text-sm text-white/70">Bangun portofolio, tingkatkan skill, dan dapatkan proyek nyata.</p>
      </div>
    </div>

    <!-- Right Form -->
    <div class="lg:w-1/2 p-10 lg:p-14">
      <h2 class="text-3xl font-bold text-gray-900 mb-2">Daftar Sebagai Freelancer</h2>
      <p class="text-gray-600 mb-8">
        Sudah punya akun?
        <a href="{{ route('login') }}" class="text-blue-600 font-semibold hover:underline">Masuk</a>
      </p>

      <form class="space-y-5">
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
          <input type="text" placeholder="Masukkan nama lengkap"
            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:border-blue-500 focus:ring-2 focus:ring-blue-300 outline-none transition">
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
          <input type="email" placeholder="Masukkan email aktif"
            class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:border-blue-500 focus:ring-2 focus:ring-blue-300 outline-none transition">
        </div>

        <div class="grid grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input type="password" placeholder="Buat password"
              class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:border-blue-500 focus:ring-2 focus:ring-blue-300 outline-none transition">
          </div>
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Konfirmasi</label>
            <input type="password" placeholder="Ulangi password"
              class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:border-blue-500 focus:ring-2 focus:ring-blue-300 outline-none transition">
          </div>
        </div>

        <button type="submit"
          class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-xl transition transform hover:scale-[1.02] shadow-lg">
          Daftar Sekarang
        </button>
      </form>

      <p class="text-center text-xs text-gray-400 mt-6">
        Dengan mendaftar, kamu menyetujui <span class="text-blue-500 hover:underline cursor-pointer">Syarat & Ketentuan</span>.
      </p>
    </div>
  </div>
</body>
</html>
