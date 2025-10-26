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
<!-- navbar bagian 2 register -->
<body class="bg-gray-50 text-gray-800">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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
