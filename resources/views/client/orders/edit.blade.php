{{-- resources/views/client/orders/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container mx-auto sm:px-6 lg:px-8 py-6 sm:py-8">
    <!-- Breadcrumb -->
    <nav class="flex mb-6 sm:mb-8" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{ route('client.dashboard') }}" 
                   class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-purple-700">
                    <svg class="w-4 h-4 mr-2 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 20V12H14V20H19V10H14V7L10 3L6 7V10H1V20H6V12H10V20Z"/>
                    </svg>
                    Dashboard
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M7.05 9.293a1 1 0 010 1.414L4.414 13.343a1 1 0 11-1.414-1.414L5.636 10 2.999 7.364a1 1 0 111.414-1.414l2.637 2.637zM12.95 10.707a1 1 0 010-1.414L15.586 6.66a1 1 0 111.414 1.414L14.364 10l2.636 2.636a1 1 0 01-1.414 1.414l-2.636-2.636z"/>
                    </svg>
                    <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Edit Task</span>
                </div>
            </li>
        </ol>
    </nav>

    <!-- Form Edit Task -->
    <div class="bg-white shadow-lg rounded-2xl p-8 border border-gray-100">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Edit Task Saya</h1>

        <form action="{{ route('tasks.update', $task->id_task) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Judul -->
            <div>
                <label for="judul" class="block text-gray-700 font-semibold mb-2">Judul Task</label>
                <input type="text" name="judul" id="judul" value="{{ old('judul', $task->judul) }}"
                    class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:ring-2 focus:ring-purple-400 focus:border-purple-400">
            </div>

            <!-- Jurusan -->
            <div>
                <label for="jurusan_id" class="block text-gray-700 font-semibold mb-2">Jurusan</label>
                <select name="jurusan_id" id="jurusan_id"
                    class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:ring-2 focus:ring-purple-400 focus:border-purple-400">
                    <option value="">-- Pilih Jurusan --</option>
                    @foreach ($jurusans as $jurusan)
                        <option value="{{ $jurusan->id_jurusan }}" 
                            {{ $task->jurusan_id == $jurusan->id_jurusan ? 'selected' : '' }}>
                            {{ $jurusan->nama_jurusan }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Deskripsi -->
            <div>
                <label for="deskripsi" class="block text-gray-700 font-semibold mb-2">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="4"
                    class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:ring-2 focus:ring-purple-400 focus:border-purple-400">{{ old('deskripsi', $task->deskripsi) }}</textarea>
            </div>

            <!-- Budget -->
            <div>
                <label for="budget" class="block text-gray-700 font-semibold mb-2">Budget (Rp)</label>
                <input type="number" name="budget" id="budget" value="{{ old('budget', $task->budget) }}"
                    class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:ring-2 focus:ring-purple-400 focus:border-purple-400">
            </div>

            <!-- Deadline -->
            <div>
                <label for="deadline" class="block text-gray-700 font-semibold mb-2">Deadline</label>
                <input type="date" name="deadline" id="deadline" value="{{ old('deadline', $task->deadline) }}"
                    class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:ring-2 focus:ring-purple-400 focus:border-purple-400">
            </div>

            <!-- Waktu Estimasi -->
            <div>
                <label for="waktu_estimasi" class="block text-gray-700 font-semibold mb-2">Waktu Estimasi</label>
                <input type="text" name="waktu_estimasi" id="waktu_estimasi" value="{{ old('waktu_estimasi', $task->waktu_estimasi) }}"
                    class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:ring-2 focus:ring-purple-400 focus:border-purple-400">
            </div>

            <!-- Foto -->
            <div>
                <label for="foto" class="block text-gray-700 font-semibold mb-2">Ganti Foto (Opsional)</label>
                <input type="file" name="foto" id="foto"
                    class="block w-full text-sm text-gray-700 border border-gray-300 rounded-xl cursor-pointer focus:outline-none focus:ring-2 focus:ring-purple-400">
                @if ($task->foto)
                    <p class="text-sm text-gray-500 mt-2">Foto saat ini:</p>
                    <img src="{{ asset('storage/' . $task->foto) }}" alt="Foto Task" class="w-32 h-32 object-cover rounded-lg border mt-2">
                @endif
            </div>

            <!-- Tombol -->
            <div class="flex justify-end gap-4 mt-8">
                <a href="{{ route('client.dashboard') }}"
                    class="px-6 py-2 bg-gray-300 text-gray-800 rounded-xl font-semibold hover:bg-gray-400 transition">Batal</a>
                <button type="submit"
                    class="px-6 py-2 bg-purple-600 text-white rounded-xl font-semibold hover:bg-purple-700 transition">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>
@endsection
