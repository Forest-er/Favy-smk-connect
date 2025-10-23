@extends('layouts.app')
@section('title', 'Daftar Client | Freelance SMK')
@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-rose-50 via-pink-50 to-fuchsia-50 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-6xl w-full grid md:grid-cols-2 gap-8 items-center">
    
    <!-- Left Side - Illustration & Info -->
    <div class="hidden md:block space-y-8 px-8">
      <div class="space-y-4">
        <div class="inline-block px-4 py-2 bg-rose-100 text-rose-700 rounded-full text-sm font-semibold">
          Platform Freelance Terpercaya
        </div>
        <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
          Temukan Talenta<br/>
          <span class="text-rose-600">Profesional</span> untuk<br/>
          Proyek Anda
        </h1>
        <p class="text-gray-600 text-lg leading-relaxed">
          Bergabunglah dengan ribuan client yang telah mempercayai platform kami untuk menyelesaikan proyek mereka dengan hasil terbaik.
        </p>
      </div>
      
      <!-- Feature List -->
      <div class="space-y-4">
        <div class="flex items-start gap-4">
          <div class="flex-shrink-0 w-12 h-12 bg-rose-100 rounded-xl flex items-center justify-center">
            <svg class="w-6 h-6 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 mb-1">Freelancer Terverifikasi</h3>
            <p class="text-gray-600 text-sm">Akses ke ribuan freelancer profesional yang telah terverifikasi</p>
          </div>
        </div>
        
        <div class="flex items-start gap-4">
          <div class="flex-shrink-0 w-12 h-12 bg-rose-100 rounded-xl flex items-center justify-center">
            <svg class="w-6 h-6 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
            </svg>
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 mb-1">Pembayaran Aman</h3>
            <p class="text-gray-600 text-sm">Sistem pembayaran yang aman dan terpercaya</p>
          </div>
        </div>
        
        <div class="flex items-start gap-4">
          <div class="flex-shrink-0 w-12 h-12 bg-rose-100 rounded-xl flex items-center justify-center">
            <svg class="w-6 h-6 text-rose-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
            </svg>
          </div>
          <div>
            <h3 class="font-semibold text-gray-900 mb-1">Support 24/7</h3>
            <p class="text-gray-600 text-sm">Tim support kami siap membantu kapan saja</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Right Side - Registration Form -->
   <div class="relative flex justify-center">
  <img src="/images/register_client.png"
       alt="Ilustrasi orang ngintip"
       class="hidden md:block absolute -right-[43px] top-1/2 -translate-y-1/2 w-40 drop-shadow-lg">

  <div class="bg-white rounded-3xl shadow-xl p-6 lg:p-8 border border-rose-100 relative z-10 max-w-md w-full mx-auto">
    <!-- Header -->
    <div class="mb-5 text-left">
      <h2 class="text-2xl font-bold text-gray-900 mb-1">Daftar Sebagai Client</h2>
      <p class="text-gray-600 text-sm">
        Sudah punya akun?
        <a href="{{ url('/login') }}" class="text-rose-600 font-semibold hover:text-rose-700 transition-colors">
          Masuk di sini
        </a>
      </p>
    </div>

    <!-- Form -->
    <form onsubmit="event.preventDefault(); window.location.href='{{ url('/client-dashboard') }}';" class="space-y-4">
      <!-- Nama -->
      <div>
        <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Perusahaan / Individu</label>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
            </svg>
          </div>
          <input type="text" required placeholder="Masukkan nama perusahaan"
            class="w-full pl-12 pr-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-rose-500 focus:border-transparent outline-none transition-all">
        </div>
      </div>

      <!-- Email -->
      <div>
        <label class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
          </div>
          <input type="email" required placeholder="Masukkan Email"
            class="w-full pl-12 pr-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-rose-500 focus:border-transparent outline-none transition-all">
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
            class="w-full pl-12 pr-12 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-rose-500 focus:border-transparent outline-none transition-all">
          <button type="button"
            onclick="const input = document.getElementById('password'); input.type = input.type === 'password' ? 'text' : 'password';"
            class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-400 hover:text-rose-600 transition-colors">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
            </svg>
          </button>
        </div>
        <p class="mt-1 text-xs text-gray-500">Password harus minimal 8 karakter</p>
      </div>

      <!-- Terms -->
      <div class="flex items-start">
        <input type="checkbox" required id="terms"
          class="mt-0.5 h-4 w-4 text-rose-600 focus:ring-rose-500 border-gray-300 rounded">
        <label for="terms" class="ml-2 text-sm text-gray-600">
          Saya menyetujui
          <a href="#" class="text-rose-600 hover:text-rose-700 font-medium">Syarat & Ketentuan</a>
          serta
          <a href="#" class="text-rose-600 hover:text-rose-700 font-medium">Kebijakan Privasi</a>
        </label>
      </div>

      <!-- Submit -->
      <button type="submit"
        class="w-full bg-rose-600 hover:bg-rose-700 text-white font-semibold py-3 rounded-lg shadow-md hover:shadow-lg transition-colors duration-200">
        Daftar Sekarang
      </button>
    </form>
  </div>
</div>


  </div>
</div>
@endsection