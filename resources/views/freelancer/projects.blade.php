@extends('layouts.app')

@section('content')
<div class="container mx-auto py-10">
    <h1 class="text-2xl font-bold mb-5">Daftar Proyek Freelancer</h1>

    @foreach($tasks as $task)
        <div class="bg-white p-4 rounded-lg shadow mb-4">
            <h2 class="text-lg font-semibold">{{ $task->judul }}</h2>
            <p class="text-gray-600">{{ $task->deskripsi }}</p>
            <p class="text-sm text-gray-500">Budget: Rp{{ number_format($task->budget, 0, ',', '.') }}</p>
            <a href="{{ route('freelancer.tasks.show', $task->id) }}" class="text-blue-600">Lihat Detail</a>
        </div>
    @endforeach
</div>
@endsection
