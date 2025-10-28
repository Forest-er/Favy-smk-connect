@extends('layouts.app')

@section('content')

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
            <h3 class="text-2xl font-bold text-gray-800">{{ $totalTasks }}</h3>
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
            <h3 class="text-2xl font-bold text-yellow-600">{{ $progressTasks }}</h3>
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
  <a href="{{ route('worker.projects') }}"
     class="px-4 py-2 rounded-full font-semibold {{ request('status') == null ? 'bg-indigo-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
     Semua
  </a>

  <a href="{{ route('worker.projects', ['status' => 'ordered']) }}"
     class="px-4 py-2 rounded-full font-semibold {{ request('status') == 'ordered' ? 'bg-indigo-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
     In Progress
  </a>

  <a href="{{ route('worker.projects', ['status' => 'completed']) }}"
     class="px-4 py-2 rounded-full font-semibold {{ request('status') == 'completed' ? 'bg-indigo-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
     Done
  </a>

  <a href="{{ route('worker.projects', ['status' => 'cancelled']) }}"
     class="px-4 py-2 rounded-full font-semibold {{ request('status') == 'cancelled' ? 'bg-indigo-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
     Cancelled
  </a>
</div>


    <!-- Project Cards -->
    <div class="grid lg:grid-cols-2 gap-6">
      @forelse ($tasks as $task)
        
      
      <!-- Project Card 1 - In Progress -->
      <div class="bg-white p-6 rounded-2xl shadow-md border hover:shadow-lg transition">
        <div class="flex items-start justify-between mb-4">
          <div class="flex-1">
            <div class="flex items-center gap-2 mb-1">
              <h3 class="text-xl font-bold text-indigo-700">{{ $task->judul }}</h3>
            </div>
            <p class="text-xs text-gray-500 mb-2">ID: {{ $task->id_task }} • Kategori: {{ $task->jurusan->nama_jurusan }}</p>
          </div>
          <span class="text-xs px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full font-medium whitespace-nowrap">{{ $task->status }}</span>
        </div>
        
        <!-- Project Image -->
        <div class="mb-4 rounded-lg overflow-hidden bg-gray-100 h-32 flex items-center justify-center">
          <img src="{{ asset('storage/' . $task->foto) }}" alt="{{ $task->judul }}" class="object-cover w-full h-full">
        </div>

        <p class="text-sm text-gray-600 mb-4">{{ $task->deskripsi }}</p>

        <div class="grid grid-cols-2 gap-3 mb-4 text-sm">
          <div class="flex items-center gap-2 text-gray-600">
            <i class="bi bi-calendar3 text-indigo-600"></i>
            <div>
              <p class="text-xs text-gray-500">Deadline</p>
              <p class="font-medium">{{ $task->deadline }}</p>
            </div>
          </div>
          <div class="flex items-center gap-2 text-gray-600">
            <i class="bi bi-clock text-indigo-600"></i>
            <div>
              <p class="text-xs text-gray-500">Estimasi</p>
              <p class="font-medium">{{ $task->estimasi }} hari</p>
            </div>
          </div>
        </div>

        <div class="flex items-center justify-between py-3 border-t border-b mb-4">
          <div class="flex items-center gap-2">
            <i class="bi bi-cash-stack text-xl text-green-600"></i>
            <div>
              <p class="text-xs text-gray-500">Budget</p>
              <p class="font-semibold text-gray-800">Rp {{ number_format($task->budget, 0, ',', '.') }}</p>
            </div>
          </div>
          <div class="flex items-center gap-2">
            <i class="bi bi-person-circle text-xl text-indigo-600"></i>
            <div>
              <p class="text-xs text-gray-500">Client</p>
              <p class="font-medium text-gray-800">{{ $task->user->nama }}</p>
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
      @empty
        <p>Tidak ada proyek yang ditemukan.</p>
      @endforelse


    </div>
  </div>

@endsection