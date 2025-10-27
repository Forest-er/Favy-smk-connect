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
