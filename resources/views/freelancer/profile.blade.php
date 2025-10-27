@extends('layouts.app');
@section('title', 'profile|worker');
@section('content')
  <!-- Container -->
  <div class="max-w-[1100px] mx-auto px-8 py-10 grid grid-cols-1 md:grid-cols-3 gap-10">

    <!-- Left: Profile Info -->
    <div class="flex flex-col items-center">

      <!-- Kotak Profil -->
      <div class="rounded-2xl p-8 shadow-sm border border-pink-200 bg-white w-full">
        <div class="flex flex-col items-center">
          <!-- Avatar -->
          <img 
            src="{{ $user->foto ? asset('storage/' . $user->foto) : asset('images/profile.jpeg') }}"
            alt="Profile"
            class="w-28 h-28 rounded-full bg-gradient-to-br from-pink-300 via-pink-400 to-rose-400 flex items-center justify-center text-white text-5xl font-bold shadow-md">

          <!-- Name -->
          <h2 class="mt-5 text-xl font-semibold text-gray-800">{{ $user->nama }}</h2>
          <p class="text-gray-500 text-[15px]">{{ $user->email }}</p>
        </div>

        <hr class="my-6 border-pink-100">

        <!-- Info List -->
        <div class="space-y-4 text-[15px] mb-6">
          <div class="flex items-center gap-3 text-gray-700">
            <i class="bi bi-briefcase text-[18px] text-pink-500"></i>
            {{ $user->role }}
          </div>
          <div class="flex items-center gap-3 text-gray-700">
            <i class="bi bi-calendar3 text-[18px] text-pink-500"></i>
            Bergabung sejak {{ $user->created_at }}
          </div>
          <div class="flex items-center gap-3 text-gray-700">
            <i class="bi bi-geo-alt text-[18px] text-pink-400"></i>
            Jakarta, Indonesia
          </div>
        </div>

        <p class="text-gray-500 text-sm leading-relaxed text-center">
          {{ $user->bio ?? 'Belum ada bio yang ditambahkan.' }}
        </p>
      </div>

      <!-- Tombol -->
      <button
        onclick="window.location.href='{{ route(Auth::user()->role . '.dashboard') }}'"
        class="mt-6 w-full py-3 border border-gray-300 rounded-xl hover:bg-gray-50 transition text-gray-800 font-medium flex items-center justify-center gap-2 shadow-sm">
        <i class="bi bi-speedometer2"></i> Kembali ke Dashboard
      </button>
    </div>

    <!-- Right: Profile Details -->
    <div class="md:col-span-2 space-y-8">

      <!-- Info Box -->
      <div class="border border-pink-200 bg-gradient-to-r from-pink-50 via-rose-50 to-white rounded-2xl px-6 py-4 flex justify-between items-start shadow-sm">
        <div class="flex gap-3">
          <i class="bi bi-stars text-pink-500 text-xl mt-[2px]"></i>
          <div>
            <p class="text-[15px] font-medium text-gray-800">
              Hai {{ $user->nama }}, selamat datang di profil freelancermu ✨
            </p>
            <p class="text-gray-600 text-[14px]">
              Lengkapi profilmu agar klien bisa lebih mudah mengenal keahlianmu.
            </p>
          </div>
        </div>
      </div>

      <!-- Breadcrumb -->
      <div class="flex justify-between items-center text-[14px] text-gray-500 mb-4">
        <div>
          <a href="{{ route(Auth::user()->role . '.dashboard') }}" class="text-gray-500 font-medium hover:text-gray-800">Home</a> /
          <a href="{{ route(Auth::user()->role . '.profile') }}" class="text-gray-500 font-medium hover:text-gray-800">My Profile</a> /
          <a href="{{ route(Auth::user()->role . '.projects') }}" class="text-gray-500 font-medium hover:text-gray-800">My Projects</a>
        </div>
      </div>

      <!-- Intro Section -->
      <div>
        <h1 class="text-2xl font-semibold text-gray-800 flex items-center gap-2">
          <span>👋</span> Perkenalkan dirimu pada klien
        </h1>
        <p class="text-gray-600 mt-2 text-[15px] leading-relaxed">
          Ceritakan tentang pengalaman, keahlian, dan layanan yang kamu tawarkan agar klien tertarik bekerja sama denganmu.
        </p>
      </div>

      <!-- Profile Checklist -->
      <div class="border border-pink-200 rounded-2xl p-6 bg-white shadow-sm">
        <h3 class="text-[17px] font-semibold text-gray-800 mb-5">Langkah-langkah meningkatkan profilmu</h3>

        <!-- Checklist Cards -->
        <div class="space-y-4">
          <div class="border border-pink-100 rounded-xl p-5 hover:shadow-md transition bg-gradient-to-br from-white to-pink-50/40">
            <div class="flex justify-between items-center mb-1">
              <p class="text-gray-800 font-medium text-[15px]">Lengkapi informasi profil</p>
              <button onclick="openModal()" class="text-pink-500 text-[13px] hover:underline">Isi Sekarang</button>
            </div>
            <p class="text-gray-500 text-[13px]">
              Tambahkan foto, bio, dan keahlian agar profilmu lebih menarik.
            </p>
          </div>

          <div class="border border-pink-100 rounded-xl p-5 hover:shadow-md transition bg-gradient-to-br from-white to-pink-50/40">
            <div class="flex justify-between items-center mb-1">
              <p class="text-gray-800 font-medium text-[15px]">Atur preferensi kerja dan komunikasi</p>
              <button onclick="openCommModal()" class="text-pink-500 text-[13px] hover:underline">Atur Sekarang</button>
            </div>
            <p class="text-gray-500 text-[13px]">
              Tentukan waktu kerja, bahasa, dan cara komunikasi favoritmu dengan klien.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Modal Placeholder -->
  <div id="addDetailModal" class="hidden fixed inset-0 bg-black/50 flex items-center justify-center z-50">
    <div class="bg-white rounded-xl p-6 max-w-md text-center">
      <h2 class="font-semibold text-lg mb-2">Lengkapi Profil</h2>
      <p class="text-gray-600 text-sm mb-4">Form untuk melengkapi profil akan ditambahkan di sini.</p>
      <button onclick="closeModal()" class="mt-2 px-4 py-2 rounded-lg bg-pink-500 text-white hover:bg-pink-600">Tutup</button>
    </div>
  </div>

  <div id="commModal" class="hidden fixed inset-0 bg-black/50 flex items-center justify-center z-50">
    <div class="bg-white rounded-xl p-6 max-w-md text-center">
      <h2 class="font-semibold text-lg mb-2">Atur Preferensi</h2>
      <p class="text-gray-600 text-sm mb-4">Pengaturan komunikasi akan ditambahkan di sini.</p>
      <button onclick="closeCommModal()" class="mt-2 px-4 py-2 rounded-lg bg-pink-500 text-white hover:bg-pink-600">Tutup</button>
    </div>
  </div>

  <script>
    function openModal() {
      document.getElementById('addDetailModal').classList.remove('hidden');
      document.body.classList.add('overflow-hidden');
    }
    function closeModal() {
      document.getElementById('addDetailModal').classList.add('hidden');
      document.body.classList.remove('overflow-hidden');
    }
    function openCommModal() {
      document.getElementById('commModal').classList.remove('hidden');
      document.body.classList.add('overflow-hidden');
    }
    function closeCommModal() {
      document.getElementById('commModal').classList.add('hidden');
      document.body.classList.remove('overflow-hidden');
    }
  </script>

</body>
@endsection
