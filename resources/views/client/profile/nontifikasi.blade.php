@extends('layouts.app')
@section('title', 'notifikasi client')
@section('content')

  <div class="max-w-6xl mx-auto px-6 py-10">
    
    <!-- Header -->
    <div class="mb-8">
      <div class="flex items-center justify-between">
        <div>
          <h1 class="text-3xl font-bold text-gray-800">Notifikasi</h1>
          <p class="text-gray-600 mt-1">Tetap update dengan aktivitas terbaru</p>
        </div>
        <button onclick="markAllRead()" class="flex items-center gap-2 px-5 py-2.5 bg-white text-gray-700 hover:bg-gray-50 border border-gray-300 rounded-lg transition font-medium shadow-sm">
          <i class="bi bi-check-all"></i>
          Mark all as read
        </button>
      </div>
    </div>

    <!-- Tabs -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-200">
      <div class="flex border-b border-gray-200">
        <button onclick="switchTab('all')" class="tab-btn tab-active px-6 py-3.5 font-medium text-gray-700 hover:bg-gray-50 transition flex items-center gap-2 border-b-2 border-gray-700">
          <i class="bi bi-list-ul"></i>
          All <span class="ml-1 px-2 py-0.5 bg-gray-100 text-gray-700 rounded-full text-xs font-medium">12</span>
        </button>
        <button onclick="switchTab('unread')" class="tab-btn px-6 py-3.5 font-medium text-gray-600 hover:bg-gray-50 transition flex items-center gap-2">
          <i class="bi bi-circle-fill text-xs"></i>
          Unread <span class="ml-1 px-2 py-0.5 bg-gray-100 text-gray-600 rounded-full text-xs font-medium">5</span>
        </button>
        <button onclick="switchTab('projects')" class="tab-btn px-6 py-3.5 font-medium text-gray-600 hover:bg-gray-50 transition flex items-center gap-2">
          <i class="bi bi-briefcase"></i>
          Projects
        </button>
        <button onclick="switchTab('messages')" class="tab-btn px-6 py-3.5 font-medium text-gray-600 hover:bg-gray-50 transition flex items-center gap-2">
          <i class="bi bi-chat-dots"></i>
          Messages
        </button>
      </div>

      <!-- Notifications List -->
      <div class="divide-y divide-gray-200">
        @forelse ($notif as $n)
          <div class="notification-item notification-unread p-6 bg-gray-50 hover:bg-gray-100 cursor-pointer transition">
            <div class="flex gap-4">
              <div class="shrink-0">
                <img src="{{ $n->task->user->foto_profile ? asset('storage/' . $n->task->user->foto_profile) : asset('images/default-profile.png') }}" 
                  alt="Foto Profil" 
                  class="w-12 h-12 object-cover rounded-full border-2 border-gray-300">
              </div>
              <div class="flex-1">
                <div class="flex items-start justify-between mb-2">
                  <h3 class="font-semibold text-gray-900">Permintaan Pengerjaan Tugas {{ $n->task->judul }}</h3>
                  <span class="text-xs text-gray-500 whitespace-nowrap ml-4">{{ $n->nama }}</span>
                </div>
                <p class="text-sm text-gray-600 mb-3">{{ $n->deskripsi }}</p>
                <div class="flex items-center gap-2 mb-3">
                  <span class="px-3 py-1 bg-gray-200 text-gray-700 rounded-full text-xs font-medium">{{ $n->email }}</span>
                </div>
                <form action="{{ route('proposal.approve', $n->id_proposal) }}" method="POST">
                  @csrf
                  <div class="flex flex-row gap-2">
                    <button type="submit" 
                        class="px-4 py-2 bg-gray-800 text-white font-medium rounded-lg text-sm hover:bg-gray-700 transition shadow-sm">
                        Setujui
                    </button>
                    <a href="{{ $n->cv_link }}" target="_blank"
                        class="px-4 py-2 bg-white text-gray-700 font-medium rounded-lg text-sm hover:bg-gray-100 transition border border-gray-300 shadow-sm">
                        Lihat CV
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>

        @empty
          <div class="p-12 text-center">
            <div class="text-gray-400 mb-3">
              <i class="bi bi-bell-slash text-5xl"></i>
            </div>
            <p class="text-gray-600 font-medium">Tidak ada notifikasi</p>
          </div>
        @endforelse
      </div>
    </div>
  </div>

  <script>
    function switchTab(tab) {
      // Remove active class from all tabs
      document.querySelectorAll('.tab-btn').forEach(btn => {
        btn.classList.remove('tab-active', 'text-gray-700', 'border-b-2', 'border-gray-700');
        btn.classList.add('text-gray-600');
      });
      
      // Add active class to clicked tab
      event.target.classList.add('tab-active', 'text-gray-700', 'border-b-2', 'border-gray-700');
      event.target.classList.remove('text-gray-600');
      
      // Here you would filter notifications based on tab
      console.log('Switched to tab:', tab);
    }
    
    function markAllRead() {
      // Remove unread styling from all notifications
      document.querySelectorAll('.notification-unread').forEach(item => {
        item.classList.remove('notification-unread', 'bg-gray-50');
        item.classList.add('bg-white');
      });
      
      // Update badge count
      const badge = document.querySelector('.badge-pulse');
      if (badge) {
        badge.textContent = '0';
      }
      
      // Show success message (you can add a toast notification here)
      console.log('All notifications marked as read');
    }
  </script>

@endsection