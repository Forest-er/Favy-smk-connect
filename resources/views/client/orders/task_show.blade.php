{{-- resources/views/tasks/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container mx-auto sm:px-6 lg:px-8 py-6 sm:py-8">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl sm:text-3xl font-bold text-gray-900">Daftar Task</h1>
        <a href="{{ route('tasks.create') }}" 
           class="bg-pink-600 hover:bg-pink-700 text-white px-5 py-2 rounded-lg shadow transition">
            Buat Task Baru
        </a>
    </div>

    <!-- Grid Task Cards -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($tasks as $task)
            <div class="bg-white rounded-xl shadow p-5 border border-gray-200 flex flex-col justify-between">
                <div>
                    <h2 class="text-lg font-bold text-gray-900 mb-2">{{ $task->judul }}</h2>
                    <p class="text-sm text-gray-600 mb-3">{{ Str::limit($task->deskripsi, 100) }}</p>
                    <p class="text-xs text-gray-500 mb-2">Kategori: {{ $task->jurusan->nama_jurusan ?? 'Tidak ada' }}</p>
                    <p class="text-xs text-gray-500">Budget: Rp {{ number_format($task->budget, 0, ',', '.') }}</p>
                    <p class="text-xs text-gray-500">Deadline: {{ \Carbon\Carbon::parse($task->deadline)->format('d M Y') }}</p>
                </div>
                <div class="mt-4 flex justify-end">
                    <a href="{{ route('tasks.show', $task->id) }}" 
                       class="text-pink-600 font-semibold hover:underline text-sm">
                        Lihat Detail
                    </a>
                </div>
            </div>
        @empty
            <p class="text-gray-500 col-span-3 text-center">Belum ada task yang dibuat.</p>
        @endforelse
    </div>
</div>
@endsection
