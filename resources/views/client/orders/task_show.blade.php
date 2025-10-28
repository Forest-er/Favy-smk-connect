{{-- resources/views/tasks/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container mx-auto sm:px-6 lg:px-8 py-6 sm:py-8">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl sm:text-3xl font-bold text-gray-900">Daftar Task</h1>
        <a href="{{ route('client.orders.task') }}" 
           class="bg-pink-600 hover:bg-pink-700 text-white px-5 py-2 rounded-lg shadow transition">
            Buat Task Baru
        </a>
    </div>

    <!-- Grid Task Cards -->
     <section class="mb-12">
            <div class="flex justify-between items-center mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-gray-900 flex items-center gap-2">
                        Popular Projects <span class="text-3xl">🔥</span>
                    </h2>
                    <p class="text-gray-500 text-sm mt-1">Trending projects this week</p>
                </div>
                <button class="text-pink-600 hover:text-pink-700 font-semibold text-sm flex items-center gap-2 transition">
                    View All <i class="bi bi-arrow-right"></i>
                </button>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @forelse ($tasks as $task)
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-gray-100">
                        <div class="relative">
                           <img 
                                src="{{ asset('storage/' . $task->foto) }}"
                                onerror="this.src='https://images.pexels.com/photos/1181244/pexels-photo-1181244.jpeg'"
                                class="w-full h-48 object-cover">
                            <div class="absolute top-4 left-4">
                                <span class="px-3 py-1 text-xs font-semibold rounded-full text-white bg-gradient-to-r from-pink-500 to-purple-600 shadow-lg">
                                    {{ $task->jurusan->nama_jurusan ?? 'Unknown' }}
                                </span>
                            </div>
                            <div class="absolute top-4 right-4">
                                <span class="px-2 py-1 text-xs font-semibold rounded-lg bg-white shadow flex items-center gap-1">
                                    <i class="bi bi-star-fill text-yellow-400 text-[10px]"></i>
                                    {{ rand(4,5) }}.{{ rand(0,9) }}
                                </span>
                            </div>
                        </div>
                        
                        <div class="p-5">
                            <h3 class="font-bold text-lg mb-2 text-gray-900 line-clamp-1">{{ $task->judul }}</h3>
                            
                            <div class="flex items-center gap-2 mb-4">
                                <img src="https://i.pravatar.cc/150?u={{ $task->users_id }}" class="w-8 h-8 rounded-full ring-2 ring-gray-100">
                                <div>
                                    <p class="text-md text-gray-800">{{ $task->user->nama ?? 'Client' }}</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center gap-3 text-xs text-gray-500 mb-4">
                                <span class="flex items-center gap-1">
                                    <i class="bi bi-calendar3"></i>
                                    {{ \Carbon\Carbon::parse($task->deadline)->format('d M Y') }}
                                </span>
                                <span class="flex items-center gap-1">
                                    <i class="bi bi-clock"></i>
                                    {{ $task->waktu_estimasi }}
                                </span>
                            </div>
                            
                            <div class="flex items-center justify-between mb-4 pb-4 border-t border-gray-100 pt-4">
                                <div>
                                    <p class="text-xs text-gray-500">Budget</p>
                                    <p class="text-xl font-bold text-gray-900">Rp{{ number_format($task->budget, 0, ',', '.') }}</p>
                                </div>
                            </div>
                            
                            <button onclick="openPopup({{ $task->id_task }}); event.stopPropagation();"
                                class="w-full bg-gradient-to-r from-pink-500 to-purple-600 hover:from-pink-600 hover:to-purple-700 text-white font-semibold py-3 rounded-xl transition shadow-lg shadow-pink-200">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                @empty
                    <div class="col-span-4 text-center py-12">
                        <i class="bi bi-inbox text-6xl text-gray-300 mb-4"></i>
                        <p class="text-gray-500 text-lg">No projects found</p>
                    </div>
                @endforelse
            </div>
        </section>
</div>
@endsection
