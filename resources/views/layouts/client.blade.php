<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Client Dashboard | Freelance SMK')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body { font-family: 'Inter', sans-serif; }
    .nav-active { color: #2563eb; font-weight: 600; }
  </style>
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Navbar -->
  <nav class="bg-white shadow-sm fixed w-full top-0 left-0 z-50">
    <div class="max-w-7xl mx-auto px-6 flex justify-between items-center h-16">
      <a href="#" class="text-2xl font-bold text-blue-600">Freelance<span class="text-gray-800">SMK</span></a>
      <div class="flex items-center gap-8">
        <a href="{{ route('client.dashboard') }}" class="hover:text-blue-600 {{ request()->routeIs('client.dashboard') ? 'nav-active' : '' }}">Dashboard</a>
        <a href="#" class="hover:text-blue-600">Cari Freelancer</a>
        <a href="#" class="hover:text-blue-600">Pesanan</a>
        <a href="#" class="hover:text-blue-600">Pesan</a>
        <a href="#" class="hover:text-blue-600">Profil</a>
      </div>
    </div>
  </nav>

  <main class="pt-20">
    @yield('content')
  </main>

</body>
</html>
