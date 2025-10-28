<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Projects - Freelancer</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
  <!-- Navbar -->
  <nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
      <h1 class="text-2xl font-bold text-indigo-600">Freelancer Panel</h1>
      <ul class="flex items-center gap-6 text-gray-700 font-medium">
        <li><a href="/freelancer/dashboard" class="hover:text-indigo-600">Dashboard</a></li>
        <li><a href="/freelancer/projects" class="text-indigo-600 font-semibold">Proyek</a></li>
        <li><a href="/freelancer/tasks" class="hover:text-indigo-600">My Tasks</a></li>
        <li><a href="/freelancer/offers" class="hover:text-indigo-600">Penawaran</a></li>
        <li><a href="/freelancer/profile" class="hover:text-indigo-600">Profil</a></li>
      </ul>
    </div>
  </nav>

  <!-- Container -->
  <div class="max-w-7xl mx-auto p-6">
    <!-- Header Section -->
    <div class="flex items-center justify-between mb-6">
      <h2 class="text-3xl font-bold text-gray-800 flex items-center gap-2">
        <i class="bi bi-folder-fill text-indigo-600"></i> Proyek Saya
      </h2>
      <div class="flex items-center gap-3">
        <div class="relative">
          <input type="text" placeholder="Cari proyek..." class="pl-10 pr-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-indigo-500">
          <i class="bi bi-search absolute left-3 top-3 text-gray-400"></i>
        </div>
      </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid md:grid-cols-4 gap-4 mb-6">
      <div class="bg-white p-4 rounded-xl shadow-md border">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-sm text-gray-600">Total Proyek</p>
            <h3 class="text-2xl font-bold text-gray-800">4</h3>
          </div>
          <i class="bi bi-folder text-3xl text-indigo-600"></i>
        </div>
      </div>
      <div class="bg-white p-4 rounded-xl shadow-md border">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-sm text-gray-600">Open</p>
            <h3 class="text-2xl font-bold text-blue-600">1</h3>
          </div>
          <i class="bi bi-door-open text-3xl text-blue-600"></i>
        </div>
      </div>
      <div class="bg-white p-4 rounded-xl shadow-md border">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-sm text-gray-600">In Progress</p>
            <h3 class="text-2xl font-bold text-yellow-600">2</h3>
          </div>
          <i class="bi bi-hourglass-split text-3xl text-yellow-600"></i>
        </div>
      </div>
      <div class="bg-white p-4 rounded-xl shadow-md border">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-sm text-gray-600">Done</p>
            <h3 class="text-2xl font-bold text-green-600">1</h3>
          </div>
          <i class="bi bi-check-circle text-3xl text-green-600"></i>
        </div>
      </div>
    </div>

    <!-- Filter Tabs -->
    <div class="flex gap-3 mb-6">
      <button class="bg-indigo-600 text-white px-4 py-2 rounded-full font-semibold">Semua</button>
      <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full font-semibold hover:bg-gray-300">Open</button>
      <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full font-semibold hover:bg-gray-300">In Progress</button>
      <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full font-semibold hover:bg-gray-300">Done</button>
      <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-full font-semibold hover:bg-gray-300">Cancelled</button>
    </div>

    <!-- Project Cards -->
    <div class="grid lg:grid-cols-2 gap-6">
      
      <!-- Project Card 1 - In Progress -->
      <div class="bg-white p-6 rounded-2xl shadow-md border hover:shadow-lg transition">
        <div class="flex items-start justify-between mb-4">
          <div class="flex-1">
            <div class="flex items-center gap-2 mb-1">
              <h3 class="text-xl font-bold text-indigo-700">Redesign Website Portfolio</h3>
            </div>
            <p class="text-xs text-gray-500 mb-2">ID: #TSK001 • Kategori: Web Development</p>
          </div>
          <span class="text-xs px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full font-medium whitespace-nowrap">In Progress</span>
        </div>
        
        <!-- Project Image -->
        <div class="mb-4 rounded-lg overflow-hidden bg-gray-100 h-32 flex items-center justify-center">
          <i class="bi bi-image text-4xl text-gray-400"></i>
        </div>
        
        <p class="text-sm text-gray-600 mb-4">Website portfolio modern dengan fitur responsive design dan animasi interaktif menggunakan teknologi terkini.</p>
        
        <div class="grid grid-cols-2 gap-3 mb-4 text-sm">
          <div class="flex items-center gap-2 text-gray-600">
            <i class="bi bi-calendar3 text-indigo-600"></i>
            <div>
              <p class="text-xs text-gray-500">Deadline</p>
              <p class="font-medium">15 Nov 2025</p>
            </div>
          </div>
          <div class="flex items-center gap-2 text-gray-600">
            <i class="bi bi-clock text-indigo-600"></i>
            <div>
              <p class="text-xs text-gray-500">Estimasi</p>
              <p class="font-medium">30 hari</p>
            </div>
          </div>
        </div>

        <div class="flex items-center justify-between py-3 border-t border-b mb-4">
          <div class="flex items-center gap-2">
            <i class="bi bi-cash-stack text-xl text-green-600"></i>
            <div>
              <p class="text-xs text-gray-500">Budget</p>
              <p class="font-semibold text-gray-800">Rp 8.500.000</p>
            </div>
          </div>
          <div class="flex items-center gap-2">
            <i class="bi bi-person-circle text-xl text-indigo-600"></i>
            <div>
              <p class="text-xs text-gray-500">Client</p>
              <p class="font-medium text-gray-800">Rayya Mahira</p>
            </div>
          </div>
        </div>

        <div class="flex items-center justify-between pt-4">
          <a href="/freelancer/tasks?project=1" class="text-indigo-600 hover:text-indigo-700 font-medium text-sm flex items-center gap-1">
            <i class="bi bi-list-task"></i> Lihat Detail
          </a>
          <div class="flex items-center gap-2">
            <a href="mailto:rayya@example.com" class="text-gray-600 hover:text-gray-800" title="Email">
              <i class="bi bi-envelope text-xl"></i>
            </a>
            <a href="https://wa.me/6281234567890?text=Halo%20Rayya" target="_blank" class="text-green-600 hover:text-green-700" title="WhatsApp">
              <i class="bi bi-whatsapp text-2xl"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Project Card 2 - In Progress -->
      <div class="bg-white p-6 rounded-2xl shadow-md border hover:shadow-lg transition">
        <div class="flex items-start justify-between mb-4">
          <div class="flex-1">
            <div class="flex items-center gap-2 mb-1">
              <h3 class="text-xl font-bold text-indigo-700">Aplikasi Kasir Online</h3>
            </div>
            <p class="text-xs text-gray-500 mb-2">ID: #TSK002 • Kategori: Mobile App</p>
          </div>
          <span class="text-xs px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full font-medium whitespace-nowrap">In Progress</span>
        </div>
        
        <!-- Project Image -->
        <div class="mb-4 rounded-lg overflow-hidden bg-gray-100 h-32 flex items-center justify-center">
          <i class="bi bi-image text-4xl text-gray-400"></i>
        </div>
        
        <p class="text-sm text-gray-600 mb-4">Aplikasi kasir berbasis web dengan fitur inventory management, laporan penjualan, dan multi-user access.</p>
        
        <div class="grid grid-cols-2 gap-3 mb-4 text-sm">
          <div class="flex items-center gap-2 text-gray-600">
            <i class="bi bi-calendar3 text-indigo-600"></i>
            <div>
              <p class="text-xs text-gray-500">Deadline</p>
              <p class="font-medium">30 Okt 2025</p>
            </div>
          </div>
          <div class="flex items-center gap-2 text-gray-600">
            <i class="bi bi-clock text-indigo-600"></i>
            <div>
              <p class="text-xs text-gray-500">Estimasi</p>
              <p class="font-medium">25 hari</p>
            </div>
          </div>
        </div>

        <div class="flex items-center justify-between py-3 border-t border-b mb-4">
          <div class="flex items-center gap-2">
            <i class="bi bi-cash-stack text-xl text-green-600"></i>
            <div>
              <p class="text-xs text-gray-500">Budget</p>
              <p class="font-semibold text-gray-800">Rp 12.000.000</p>
            </div>
          </div>
          <div class="flex items-center gap-2">
            <i class="bi bi-person-circle text-xl text-indigo-600"></i>
            <div>
              <p class="text-xs text-gray-500">Client</p>
              <p class="font-medium text-gray-800">Nurazizah Zahrah</p>
            </div>
          </div>
        </div>

        <div class="flex items-center justify-between pt-4">
          <a href="/freelancer/tasks?project=2" class="text-indigo-600 hover:text-indigo-700 font-medium text-sm flex items-center gap-1">
            <i class="bi bi-list-task"></i> Lihat Detail
          </a>
          <div class="flex items-center gap-2">
            <a href="mailto:nurazizah@example.com" class="text-gray-600 hover:text-gray-800" title="Email">
              <i class="bi bi-envelope text-xl"></i>
            </a>
            <a href="https://wa.me/6281987654321?text=Halo%20Nurazizah" target="_blank" class="text-green-600 hover:text-green-700" title="WhatsApp">
              <i class="bi bi-whatsapp text-2xl"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Project Card 3 - Open -->
      <div class="bg-white p-6 rounded-2xl shadow-md border hover:shadow-lg transition border-blue-200">
        <div class="flex items-start justify-between mb-4">
          <div class="flex-1">
            <div class="flex items-center gap-2 mb-1">
              <h3 class="text-xl font-bold text-indigo-700">Landing Page Startup</h3>
            </div>
            <p class="text-xs text-gray-500 mb-2">ID: #TSK003 • Kategori: UI/UX Design</p>
          </div>
          <span class="text-xs px-3 py-1 bg-blue-100 text-blue-700 rounded-full font-medium whitespace-nowrap">Open</span>
        </div>
        
        <!-- Project Image -->
        <div class="mb-4 rounded-lg overflow-hidden bg-gray-100 h-32 flex items-center justify-center">
          <i class="bi bi-image text-4xl text-gray-400"></i>
        </div>
        
        <p class="text-sm text-gray-600 mb-4">Landing page modern untuk startup teknologi dengan animasi scroll, parallax effect, dan contact form integration.</p>
        
        <div class="grid grid-cols-2 gap-3 mb-4 text-sm">
          <div class="flex items-center gap-2 text-gray-600">
            <i class="bi bi-calendar3 text-indigo-600"></i>
            <div>
              <p class="text-xs text-gray-500">Deadline</p>
              <p class="font-medium text-red-600">5 Nov 2025</p>
            </div>
          </div>
          <div class="flex items-center gap-2 text-gray-600">
            <i class="bi bi-clock text-indigo-600"></i>
            <div>
              <p class="text-xs text-gray-500">Estimasi</p>
              <p class="font-medium">15 hari</p>
            </div>
          </div>
        </div>

        <div class="flex items-center justify-between py-3 border-t border-b mb-4">
          <div class="flex items-center gap-2">
            <i class="bi bi-cash-stack text-xl text-green-600"></i>
            <div>
              <p class="text-xs text-gray-500">Budget</p>
              <p class="font-semibold text-gray-800">Rp 5.000.000</p>
            </div>
          </div>
          <div class="flex items-center gap-2">
            <i class="bi bi-person-circle text-xl text-indigo-600"></i>
            <div>
              <p class="text-xs text-gray-500">Client</p>
              <p class="font-medium text-gray-800">Dinda Prameswari</p>
            </div>
          </div>
        </div>

        <div class="flex items-center justify-between pt-4">
          <a href="/freelancer/tasks?project=3" class="text-indigo-600 hover:text-indigo-700 font-medium text-sm flex items-center gap-1">
            <i class="bi bi-list-task"></i> Lihat Detail
          </a>
          <div class="flex items-center gap-2">
            <a href="mailto:dinda@example.com" class="text-gray-600 hover:text-gray-800" title="Email">
              <i class="bi bi-envelope text-xl"></i>
            </a>
            <a href="https://wa.me/6281555666777?text=Halo%20Dinda" target="_blank" class="text-green-600 hover:text-green-700" title="WhatsApp">
              <i class="bi bi-whatsapp text-2xl"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Project Card 4 - Done -->
      <div class="bg-white p-6 rounded-2xl shadow-md border hover:shadow-lg transition opacity-80">
        <div class="flex items-start justify-between mb-4">
          <div class="flex-1">
            <div class="flex items-center gap-2 mb-1">
              <h3 class="text-xl font-bold text-indigo-700 line-through">E-Commerce Dashboard</h3>
            </div>
            <p class="text-xs text-gray-500 mb-2">ID: #TSK004 • Kategori: Web Development</p>
          </div>
          <span class="text-xs px-3 py-1 bg-green-100 text-green-700 rounded-full font-medium whitespace-nowrap">Done</span>
        </div>
        
        <!-- Project Image -->
        <div class="mb-4 rounded-lg overflow-hidden bg-gray-100 h-32 flex items-center justify-center">
          <i class="bi bi-check-circle text-4xl text-green-500"></i>
        </div>
        
        <p class="text-sm text-gray-600 mb-4">Dashboard admin untuk toko online dengan analytics, order management, dan product catalog management system.</p>
        
        <div class="grid grid-cols-2 gap-3 mb-4 text-sm">
          <div class="flex items-center gap-2 text-gray-600">
            <i class="bi bi-calendar-check text-green-600"></i>
            <div>
              <p class="text-xs text-gray-500">Selesai</p>
              <p class="font-medium text-green-600">28 Sep 2025</p>
            </div>
          </div>
          <div class="flex items-center gap-2 text-gray-600">
            <i class="bi bi-clock-history text-indigo-600"></i>
            <div>
              <p class="text-xs text-gray-500">Durasi</p>
              <p class="font-medium">23 hari</p>
            </div>
          </div>
        </div>

        <div class="flex items-center justify-between py-3 border-t border-b mb-4">
          <div class="flex items-center gap-2">
            <i class="bi bi-cash-stack text-xl text-green-600"></i>
            <div>
              <p class="text-xs text-gray-500">Budget</p>
              <p class="font-semibold text-gray-800">Rp 15.000.000</p>
            </div>
          </div>
          <div class="flex items-center gap-2">
            <i class="bi bi-person-circle text-xl text-indigo-600"></i>
            <div>
              <p class="text-xs text-gray-500">Client</p>
              <p class="font-medium text-gray-800">Ahmad Rizki</p>
            </div>
          </div>
        </div>

        <div class="flex items-center justify-between pt-4">
          <a href="/freelancer/tasks?project=4" class="text-indigo-600 hover:text-indigo-700 font-medium text-sm flex items-center gap-1">
            <i class="bi bi-list-task"></i> Lihat Detail
          </a>
          <div class="flex items-center gap-2">
            <a href="mailto:ahmad@example.com" class="text-gray-600 hover:text-gray-800" title="Email">
              <i class="bi bi-envelope text-xl"></i>
            </a>
            <a href="https://wa.me/6281222333444?text=Halo%20Ahmad" target="_blank" class="text-green-600 hover:text-green-700" title="WhatsApp">
              <i class="bi bi-whatsapp text-2xl"></i>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <footer class="text-center py-6 mt-12 text-sm text-gray-500">
    © 2025 Freelancer Platform. All rights reserved.
  </footer>
</body>
</html>