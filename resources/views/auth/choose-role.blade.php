<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pilih Peran | Freelance SMK</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
    * { font-family: 'Inter', sans-serif; }

    /* Animasi halus untuk card */
    .card {
      transition: all 0.3s ease;
    }

    .card:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
    }

    /* Gradasi halus untuk background */
    body {
      background: linear-gradient(135deg, #f3f6ff 0%, #eef3ff 100%);
    }
  </style>
</head>

<body class="min-h-screen flex items-center justify-center px-4">
  <div class="max-w-3xl w-full bg-white/90 backdrop-blur-sm rounded-3xl shadow-xl p-10 text-center border border-gray-100">
    <div class="mb-8">
      <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">Pilih Peran Kamu</h1>
      <p class="text-gray-600 text-sm md:text-base">
        Tentukan peranmu di platform <span class="font-semibold text-blue-600">Freelance SMK</span> untuk melanjutkan proses pendaftaran.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
      <!-- Freelancer Card -->
      <a href="{{ route('register.role', ['role' => 'freelancer']) }}"
         class="card border border-gray-200 rounded-2xl p-8 hover:border-blue-500 group bg-gradient-to-b from-white to-blue-50">
        <img src="{{ asset('images/freelancer 2.png') }}" alt="Freelancer"
             class="w-24 mx-auto mb-5 group-hover:scale-110 transition-transform duration-300">
        <h2 class="text-xl font-semibold text-gray-800 group-hover:text-blue-600 transition-colors">
          Freelancer
        </h2>
        <p class="text-gray-500 text-sm mt-2 leading-relaxed">
          Siswa SMK yang ingin mencari project, menambah pengalaman, dan membangun portofolio profesional.
        </p>
      </a>

      <!-- Client Card -->
      <a href="{{ route('register.role', ['role' => 'client']) }}"
         class="card border border-gray-200 rounded-2xl p-8 hover:border-purple-500 group bg-gradient-to-b from-white to-purple-50">
        <img src="{{ asset('images/client 2.png') }}" alt="Client"
             class="w-24 mx-auto mb-5 group-hover:scale-110 transition-transform duration-300">
        <h2 class="text-xl font-semibold text-gray-800 group-hover:text-purple-600 transition-colors">
          Client
        </h2>
        <p class="text-gray-500 text-sm mt-2 leading-relaxed">
          Perusahaan atau individu yang mencari jasa dari siswa SMK berbakat dan profesional di bidangnya.
        </p>
      </a>
    </div>

    <div class="mt-10 text-sm text-gray-600">
      Sudah punya akun?
      <a href="{{ route('login') }}" class="text-blue-600 font-semibold hover:underline">Masuk di sini</a>
    </div>
  </div>
</body>
</html>
