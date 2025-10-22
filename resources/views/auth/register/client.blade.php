@extends('layouts.app')

@section('title', 'Daftar Client | Freelance SMK')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50">
  <div class="bg-white rounded-3xl shadow-lg w-full max-w-md p-8 border border-gray-100">
    <h2 class="text-3xl font-bold text-gray-900 mb-2 text-center">Daftar Sebagai Client</h2>
    <p class="text-gray-600 mb-8 text-center">
      Sudah punya akun?
      <a href="login.blade.php" class="text-pink-500 font-semibold hover:text-pink-600">Masuk</a>
    </p>

<form onsubmit="event.preventDefault(); window.location.href='{{ url('/client-dashboard') }}';" class="space-y-5">
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Nama Perusahaan / Individu</label>
        <input type="text" placeholder="Masukkan nama perusahaan atau individu"
          class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:border-pink-400 focus:outline-none">
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input type="email" placeholder="Masukkan email aktif"
          class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:border-pink-400 focus:outline-none">
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <input type="password" placeholder="Buat password"
          class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:border-pink-400 focus:outline-none">
      </div>

      <button type="submit"
        class="w-full bg-pink-500 hover:bg-pink-600 text-white font-semibold py-3 rounded-xl transition">
        Daftar Client
      </button>
    </form>
  </div>
</div>
@endsection
