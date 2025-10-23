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
  <header class="bg-white shadow-sm sticky top-0 z-30">
    <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">
      <h1 class="text-lg font-bold text-gray-800">Freelance SMK</h1>
      <nav class="space-x-6 text-sm font-medium text-gray-600">
        <a href="/" class="hover:text-pink-500">Beranda</a>
        <a href="/choose-role" class="hover:text-pink-500">Daftar</a>
        <a href="/auth" class="hover:text-pink-500">Masuk</a>
        <a href="/logout" class="bg-red-600 text-white rounded-lg p-2 hover:bg-red-200">Logout</a>
      </nav>
    </div>
  </header>

  {{-- Konten utama --}}
  <main class="py-10">
    @yield('content')
  </main>

  {{-- Footer --}}
  <footer class="text-center text-gray-500 text-sm py-6 border-t mt-12">
    &copy; {{ date('Y') }} Freelance SMK. Semua hak dilindungi.
  </footer>

</body>
</html>
