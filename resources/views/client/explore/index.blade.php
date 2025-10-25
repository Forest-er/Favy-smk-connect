@extends('layouts.app')

@section('title', $task->judul ?? 'Detail Project')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">

    <!-- Breadcrumb -->
    <nav class="text-sm mb-6" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2">
            <li class="inline-flex items-center">
                <a href="{{ route('client.explore.index') }}" class="text-gray-700 hover:text-pink-500">Explore</a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="w-4 h-4 text-gray-400 mx-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 111.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/></svg>
                    <span class="text-gray-500">{{ $task->judul }}</span>
                </div>
            </li>
        </ol>
    </nav>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

        <!-- Left: Project / Freelancer Image -->
        <div class="lg:col-span-1">
            <img src="{{ asset('storage/' . $task->foto) }}"
                 onerror="this.src='https://images.pexels.com/photos/1181244/pexels-photo-1181244.jpeg'"
                 class="rounded-2xl w-full h-auto object-cover shadow-md mb-6">
            <div class="flex items-center gap-4">
                <img src="https://i.pravatar.cc/150?u={{ $task->users_id }}" class="w-12 h-12 rounded-full border">
                <div>
                    <p class="text-gray-700 font-semibold">{{ $task->user->nama ?? 'Freelancer' }}</p>
                    <p class="text-gray-500 text-sm">{{ $task->user->profesi ?? 'Freelancer' }}</p>
                </div>
            </div>
        </div>

        <!-- Right: Details -->
        <div class="lg:col-span-2 space-y-6">

            <h1 class="text-2xl font-bold text-gray-900">{{ $task->judul }}</h1>
            <div class="flex items-center gap-6 text-gray-600 text-sm">
                <span><i class="bi bi-calendar"></i> Deadline: {{ \Carbon\Carbon::parse($task->deadline)->format('d M Y') }}</span>
                <span><i class="bi bi-clock"></i> Estimation: {{ $task->waktu_estimasi }}</span>
                <span><i class="bi bi-cash-stack"></i> Budget: Rp{{ number_format($task->budget, 0, ',', '.') }}</span>
            </div>

            <hr class="border-gray-200">

            <div>
                <h2 class="text-lg font-semibold text-gray-800 mb-2">Project Description</h2>
                <p class="text-gray-700 leading-relaxed">{{ $task->deskripsi }}</p>
            </div>

            <div>
                <h2 class="text-lg font-semibold text-gray-800 mb-2">Skills Required</h2>
                <div class="flex flex-wrap gap-2">
                    @foreach ($task->skills as $skill)
                        <span class="px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-sm font-medium">{{ $skill->nama }}</span>
                    @endforeach
                </div>
            </div>

            <div class="flex gap-4 mt-4">
                <a href="{{ route('client.orders.create', $task->id) }}" 
                   class="px-6 py-3 bg-pink-500 hover:bg-pink-600 text-white rounded-lg font-semibold transition">
                    Hire Now
                </a>
                <a href="{{ route('client.explore.index') }}" 
                   class="px-6 py-3 bg-gray-200 hover:bg-gray-300 text-gray-800 rounded-lg font-semibold transition">
                    Back
                </a>
            </div>

        </div>

    </div>

</div>
@endsection
