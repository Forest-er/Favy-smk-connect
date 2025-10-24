@extends('layouts.app')

@section('title', $freelancer->name . ' - Detail Freelancer')

@section('content')
<div class="max-w-4xl mx-auto bg-white shadow-lg rounded-2xl p-8 mt-10 border border-gray-200">
    <!-- Nama & Spesialisasi -->
    <div class="flex items-center gap-6 mb-6">
        <img src="{{ $freelancer->photo ? asset('storage/' . $freelancer->photo) : 'https://via.placeholder.com/100' }}" 
             alt="{{ $freelancer->name }}" 
             class="w-24 h-24 rounded-xl object-cover border">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">{{ $freelancer->name }}</h1>
            <p class="text-gray-500">{{ $freelancer->specialization }}</p>
            <div class="mt-2 flex items-center text-yellow-500">
                ⭐ <span class="ml-1 text-gray-700">{{ $freelancer->rating }} / 5.0</span>
                <span class="ml-2 text-gray-400">({{ $freelancer->reviews }} reviews)</span>
            </div>
        </div>
    </div>

    <!-- Deskripsi -->
    <div class="mb-8">
        <h2 class="text-lg font-semibold text-gray-800 mb-2">Tentang Freelancer</h2>
        <p class="text-gray-600 leading-relaxed">{{ $freelancer->description }}</p>
    </div>

    <!-- Rincian Jasa -->
    <div class="border-t border-gray-200 pt-4 mb-6">
        <h2 class="text-lg font-semibold text-gray-800 mb-3">Rincian Jasa</h2>
        <ul class="list-disc pl-6 text-gray-600 space-y-2">
            <li>Memodifikasi HTML & CSS sesuai kebutuhan desain</li>
            <li>Menyamakan hasil akhir dengan Figma client</li>
            <li>Pengerjaan cepat — selesai dalam 2 jam</li>
        </ul>
    </div>

    <!-- Harga dan Tombol -->
    <div class="flex justify-between items-center">
        <div>
            <p class="text-gray-500 text-sm">Harga mulai dari</p>
            <p class="text-2xl font-bold text-indigo-600">Rp{{ number_format($freelancer->price, 0, ',', '.') }}</p>
        </div>
        <button class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-xl font-medium transition">
            Hubungi Freelancer
        </button>
    </div>
</div>
@endsection
