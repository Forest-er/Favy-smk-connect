@extends('layouts.app')

@section('content')
<!-- Container -->
<div class="max-w-7xl mx-auto p-6">
  <!-- Header Section -->
  <div class="flex items-center justify-between mb-5">
    <div>
      <h2 class="text-2xl font-bold text-gray-800 flex items-center gap-2">
        <i class="bi bi-folder-fill text-indigo-600"></i> Daftar Proyek
      </h2>
      <p class="text-sm text-gray-500 mt-1">Kelola dan pantau semua proyek Anda</p>
    </div>
    <div class="relative">
      <input type="text" id="searchInput" placeholder="Cari proyek..." class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent text-sm w-64">
      <i class="bi bi-search absolute left-3 top-2.5 text-gray-400"></i>
    </div>
  </div>

  <!-- Stats Cards -->
  <div class="grid grid-cols-4 gap-4 mb-5">
    <div class="bg-gradient-to-br from-indigo-50 to-white p-4 rounded-lg border border-indigo-100">
      <div class="flex items-center justify-between">
        <div>
          <p class="text-xs text-gray-600 mb-1">Total Proyek</p>
          <h3 class="text-xl font-bold text-gray-800">{{ $tasks->count() }}</h3>
        </div>
        <div class="bg-indigo-100 p-2 rounded-lg">
          <i class="bi bi-folder text-2xl text-indigo-600"></i>
        </div>
      </div>
    </div>
    <div class="bg-gradient-to-br from-blue-50 to-white p-4 rounded-lg border border-blue-100">
      <div class="flex items-center justify-between">
        <div>
          <p class="text-xs text-gray-600 mb-1">Open</p>
          <h3 class="text-xl font-bold text-blue-600">{{ $tasks->where('status', 'open')->count() }}</h3>
        </div>
        <div class="bg-blue-100 p-2 rounded-lg">
          <i class="bi bi-door-open text-2xl text-blue-600"></i>
        </div>
      </div>
    </div>
    <div class="bg-gradient-to-br from-yellow-50 to-white p-4 rounded-lg border border-yellow-100">
      <div class="flex items-center justify-between">
        <div>
          <p class="text-xs text-gray-600 mb-1">In Progress</p>
          <h3 class="text-xl font-bold text-yellow-600">{{ $tasks->where('status', 'in_progress')->count() }}</h3>
        </div>
        <div class="bg-yellow-100 p-2 rounded-lg">
          <i class="bi bi-hourglass-split text-2xl text-yellow-600"></i>
        </div>
      </div>
    </div>
    <div class="bg-gradient-to-br from-green-50 to-white p-4 rounded-lg border border-green-100">
      <div class="flex items-center justify-between">
        <div>
          <p class="text-xs text-gray-600 mb-1">Done</p>
          <h3 class="text-xl font-bold text-green-600">{{ $tasks->where('status', 'done')->count() }}</h3>
        </div>
        <div class="bg-green-100 p-2 rounded-lg">
          <i class="bi bi-check-circle text-2xl text-green-600"></i>
        </div>
      </div>
    </div>
  </div>

  <!-- Filter Tabs -->
  <div class="flex gap-2 mb-5 bg-gray-50 p-1 rounded-lg inline-flex">
    <button onclick="filterProjects('all')" class="filter-btn bg-white text-indigo-600 px-4 py-1.5 rounded-md font-medium text-sm shadow-sm" data-status="all">Semua</button>
    <button onclick="filterProjects('open')" class="filter-btn text-gray-600 px-4 py-1.5 rounded-md font-medium text-sm hover:bg-white hover:text-indigo-600 transition" data-status="open">Open</button>
    <button onclick="filterProjects('in_progress')" class="filter-btn text-gray-600 px-4 py-1.5 rounded-md font-medium text-sm hover:bg-white hover:text-indigo-600 transition" data-status="in_progress">In Progress</button>
    <button onclick="filterProjects('done')" class="filter-btn text-gray-600 px-4 py-1.5 rounded-md font-medium text-sm hover:bg-white hover:text-indigo-600 transition" data-status="done">Done</button>
    <button onclick="filterProjects('cancelled')" class="filter-btn text-gray-600 px-4 py-1.5 rounded-md font-medium text-sm hover:bg-white hover:text-indigo-600 transition" data-status="cancelled">Cancelled</button>
  </div>

  <!-- Project Cards - 4 columns -->
  <div id="projectsContainer" class="grid grid-cols-4 gap-4">
    @forelse($tasks as $task)
      @php
        $statusClasses = [
          'open' => 'bg-blue-50 text-blue-700 border-blue-200',
          'in_progress' => 'bg-yellow-50 text-yellow-700 border-yellow-200',
          'done' => 'bg-green-50 text-green-700 border-green-200',
          'cancelled' => 'bg-red-50 text-red-700 border-red-200'
        ];
        $statusText = [
          'open' => 'Open',
          'in_progress' => 'Progress',
          'done' => 'Done',
          'cancelled' => 'Cancelled'
        ];
        $status = $task->status ?? 'open';
        $badgeClass = $statusClasses[$status] ?? 'bg-gray-50 text-gray-700 border-gray-200';
        $statusLabel = $statusText[$status] ?? ucfirst($status);
        
        // Normalisasi data client
        $clientName = $task->client_name ?? ($task->user->nama ?? 'Client');
        $clientEmail = $task->client_email ?? ($task->user->email ?? null);
        $clientPhone = $task->client_phone ?? ($task->user->phone ?? null);
        $estimasiWaktu = $task->waktu_estimasi ?? ($task->estimasi ?? '-');
      @endphp

      <div class="project-card bg-white rounded-lg border border-gray-200 hover:border-indigo-300 hover:shadow-lg transition-all duration-200 {{ $status == 'done' ? 'opacity-75' : '' }}" data-status="{{ $status }}" data-title="{{ strtolower($task->judul) }}" data-category="{{ strtolower($task->kategori ?? '') }}">
        <!-- Card Header -->
        <div class="p-4 border-b border-gray-100">
          <div class="flex items-start justify-between mb-2">
            <span class="text-xs px-2 py-1 {{ $badgeClass }} border rounded-md font-medium">{{ $statusLabel }}</span>
            <span class="text-xs text-gray-400">#{{ str_pad($task->id, 4, '0', STR_PAD_LEFT) }}</span>
          </div>
          <h3 class="text-sm font-bold text-gray-800 mb-1 line-clamp-2 {{ $status == 'done' ? 'line-through' : '' }}">{{ $task->judul }}</h3>
          <p class="text-xs text-gray-500">{{ $task->kategori ?? 'Uncategorized' }}</p>
        </div>
        
        <!-- Project Image -->
        <div class="h-24 bg-gradient-to-br from-indigo-50 to-purple-50 flex items-center justify-center">
          @if($status == 'done')
            <i class="bi bi-check-circle-fill text-3xl text-green-500"></i>
          @else
            <i class="bi bi-briefcase text-3xl text-indigo-300"></i>
          @endif
        </div>
        
        <!-- Card Body -->
        <div class="p-4">
          <p class="text-xs text-gray-600 mb-3 line-clamp-2">{{ Str::limit($task->deskripsi, 60) }}</p>
          
          <!-- Budget -->
          <div class="bg-green-50 border border-green-200 rounded-lg p-2 mb-3">
            <div class="flex items-center justify-between">
              <span class="text-xs text-gray-600">Budget</span>
              <span class="text-sm font-bold text-green-700">Rp {{ number_format($task->budget / 1000, 0) }}K</span>
            </div>
          </div>
          
          <!-- Info Grid -->
          <div class="space-y-2 mb-3 text-xs">
            <div class="flex items-center justify-between">
              <span class="text-gray-500 flex items-center gap-1">
                <i class="bi bi-calendar3"></i> Deadline
              </span>
              <span class="font-medium text-gray-700">{{ $task->deadline ? \Carbon\Carbon::parse($task->deadline)->format('d M') : '-' }}</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-gray-500 flex items-center gap-1">
                <i class="bi bi-clock"></i> Estimasi
              </span>
              <span class="font-medium text-gray-700">{{ $estimasiWaktu }}</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-gray-500 flex items-center gap-1">
                <i class="bi bi-person"></i> Client
              </span>
              <span class="font-medium text-gray-700">{{ Str::limit($clientName, 12) }}</span>
            </div>
          </div>

          <!-- Actions -->
          <div class="flex items-center gap-2 pt-3 border-t border-gray-100">
            <button onclick="openPopup({{ $task->id }})" class="flex-1 bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-medium py-2 px-3 rounded-md text-center transition">
              Detail
            </button>
            <div class="flex gap-1">
              @if($clientEmail)
                <a href="mailto:{{ $clientEmail }}" class="bg-gray-100 hover:bg-gray-200 p-2 rounded-md transition" title="Email">
                  <i class="bi bi-envelope text-sm text-gray-600"></i>
                </a>
              @endif
              @if($clientPhone)
                <a href="https://wa.me/{{ $clientPhone }}" target="_blank" class="bg-green-100 hover:bg-green-200 p-2 rounded-md transition" title="WhatsApp">
                  <i class="bi bi-whatsapp text-sm text-green-600"></i>
                </a>
              @endif
            </div>
          </div>
        </div>
      </div>
    @empty
      <div class="col-span-4 text-center py-16">
        <i class="bi bi-inbox text-5xl text-gray-300"></i>
        <p class="text-gray-500 mt-3">Belum ada proyek tersedia</p>
      </div>
    @endforelse
  </div>

  <!-- Empty State for Filtered Results -->
  <div id="emptyState" class="hidden col-span-4 text-center py-16">
    <i class="bi bi-search text-5xl text-gray-300"></i>
    <p class="text-gray-500 mt-3">Tidak ada proyek yang sesuai dengan filter</p>
  </div>
</div>

<!-- Overlay -->
<div id="overlay" class="fixed inset-0 bg-black/50 hidden z-40" onclick="closePopup()"></div>

<!-- Popup Container (Slide dari Kanan) -->
<div id="rightPopup" class="fixed top-0 right-0 h-full w-[70%] bg-white shadow-2xl transform translate-x-full transition-transform duration-500 ease-in-out z-50 text-gray-800 rounded-l-3xl overflow-y-auto">
  <div class="flex flex-col h-full">
    <!-- Popup Header -->
    <div class="sticky top-0 bg-gradient-to-r from-indigo-600 to-purple-600 px-6 py-5 flex items-center justify-between rounded-tl-3xl z-10">
      <h3 class="text-2xl font-bold text-white flex items-center gap-3">
        <i class="bi bi-file-earmark-text-fill"></i>
        Detail Proyek
      </h3>
      <button onclick="closePopup()" class="text-white hover:bg-white hover:bg-opacity-20 rounded-full p-2 transition duration-200">
        <i class="bi bi-x-lg text-2xl"></i>
      </button>
    </div>

    <!-- Popup Content -->
    <div id="rightPopupContent" class="flex-1 overflow-y-auto">
      @foreach($tasks as $task)
        @php
          $statusClasses = [
            'open' => 'bg-blue-50 text-blue-700 border-blue-200',
            'in_progress' => 'bg-yellow-50 text-yellow-700 border-yellow-200',
            'done' => 'bg-green-50 text-green-700 border-green-200',
            'cancelled' => 'bg-red-50 text-red-700 border-red-200'
          ];
          $statusText = [
            'open' => 'Open',
            'in_progress' => 'In Progress',
            'done' => 'Done',
            'cancelled' => 'Cancelled'
          ];
          $status = $task->status ?? 'open';
          $badgeClass = $statusClasses[$status] ?? 'bg-gray-50 text-gray-700 border-gray-200';
          $statusLabel = $statusText[$status] ?? ucfirst($status);
          
          // Normalisasi data client untuk popup
          $clientName = $task->client_name ?? ($task->user->nama ?? 'Client');
          $clientEmail = $task->client_email ?? ($task->user->email ?? null);
          $clientPhone = $task->client_phone ?? ($task->user->phone ?? null);
          $estimasiWaktu = $task->waktu_estimasi ?? ($task->estimasi ?? '-');
        @endphp
        
        <div id="popupTask{{ $task->id }}" class="hidden p-6">
          <!-- Project Header -->
          <div class="bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-2xl p-6 mb-6">
            <div class="flex items-start justify-between mb-4">
              <div class="flex-1">
                <h2 class="text-3xl font-bold text-gray-800 mb-2">{{ $task->judul }}</h2>
                <p class="text-sm text-gray-500 flex items-center gap-2">
                  <span class="bg-gray-100 px-2 py-1 rounded">ID: #{{ str_pad($task->id, 6, '0', STR_PAD_LEFT) }}</span>
                  <span>•</span>
                  <span>{{ $task->kategori ?? 'Uncategorized' }}</span>
                </p>
              </div>
              <span class="text-sm px-4 py-2 {{ $badgeClass }} border rounded-full font-semibold whitespace-nowrap">
                {{ $statusLabel }}
              </span>
            </div>
          </div>

          <!-- Main Info Grid -->
          <div class="grid md:grid-cols-2 gap-5 mb-6">
            <!-- Budget Card -->
            <div class="bg-gradient-to-br from-green-50 via-emerald-50 to-teal-50 border-2 border-green-200 rounded-2xl p-6 shadow-md">
              <div class="flex items-center gap-4">
                <div class="bg-green-500 p-4 rounded-xl shadow-lg">
                  <i class="bi bi-cash-stack text-3xl text-white"></i>
                </div>
                <div>
                  <p class="text-sm text-gray-600 font-semibold mb-1">Budget Proyek</p>
                  <p class="text-3xl font-bold text-green-700">Rp {{ number_format($task->budget, 0, ',', '.') }}</p>
                </div>
              </div>
            </div>

            <!-- Deadline Card -->
            <div class="bg-gradient-to-br from-indigo-50 via-blue-50 to-purple-50 border-2 border-indigo-200 rounded-2xl p-6 shadow-md">
              <div class="flex items-center gap-4">
                <div class="bg-indigo-500 p-4 rounded-xl shadow-lg">
                  <i class="bi bi-calendar-check-fill text-3xl text-white"></i>
                </div>
                <div>
                  <p class="text-sm text-gray-600 font-semibold mb-1">Deadline</p>
                  <p class="text-3xl font-bold text-indigo-700">
                    {{ $task->deadline ? \Carbon\Carbon::parse($task->deadline)->format('d M Y') : 'Tidak ada' }}
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Info Cards -->
          <div class="grid md:grid-cols-3 gap-4 mb-6">
            <div class="bg-white border-2 border-gray-200 rounded-xl p-5 hover:border-indigo-300 transition">
              <div class="flex items-center gap-3 mb-2">
                <div class="bg-indigo-100 p-2 rounded-lg">
                  <i class="bi bi-clock-history text-xl text-indigo-600"></i>
                </div>
                <span class="text-xs text-gray-600 font-semibold uppercase">Estimasi Waktu</span>
              </div>
              <p class="text-xl font-bold text-gray-800">{{ $estimasiWaktu }}</p>
            </div>

            <div class="bg-white border-2 border-gray-200 rounded-xl p-5 hover:border-indigo-300 transition">
              <div class="flex items-center gap-3 mb-2">
                <div class="bg-purple-100 p-2 rounded-lg">
                  <i class="bi bi-person-circle text-xl text-purple-600"></i>
                </div>
                <span class="text-xs text-gray-600 font-semibold uppercase">Client</span>
              </div>
              <p class="text-xl font-bold text-gray-800">{{ $clientName }}</p>
            </div>

            <div class="bg-white border-2 border-gray-200 rounded-xl p-5 hover:border-indigo-300 transition">
              <div class="flex items-center gap-3 mb-2">
                <div class="bg-pink-100 p-2 rounded-lg">
                  <i class="bi bi-tag-fill text-xl text-pink-600"></i>
                </div>
                <span class="text-xs text-gray-600 font-semibold uppercase">Kategori</span>
              </div>
              <p class="text-xl font-bold text-gray-800">{{ $task->kategori ?? '-' }}</p>
            </div>
          </div>

          <!-- Description -->
          <div class="mb-6">
            <h4 class="font-bold text-gray-800 mb-4 text-xl flex items-center gap-2">
              <div class="bg-indigo-100 p-2 rounded-lg">
                <i class="bi bi-file-text-fill text-indigo-600"></i>
              </div>
              Deskripsi Proyek
            </h4>
            <div class="bg-gradient-to-br from-gray-50 to-white border-2 border-gray-200 rounded-xl p-6">
              <p class="text-gray-700 leading-relaxed text-base">{{ $task->deskripsi }}</p>
            </div>
          </div>

          <!-- Contact Section -->
          @if($clientEmail || $clientPhone)
          <div class="bg-gradient-to-br from-indigo-50 to-purple-50 border-2 border-indigo-200 rounded-2xl p-6 mb-6">
            <h4 class="font-bold text-gray-800 mb-4 text-xl flex items-center gap-2">
              <div class="bg-indigo-500 p-2 rounded-lg">
                <i class="bi bi-chat-dots-fill text-white"></i>
              </div>
              Kontak Client
            </h4>
            <div class="grid md:grid-cols-2 gap-4">
              @if($clientEmail)
                <a href="mailto:{{ $clientEmail }}" class="bg-white hover:bg-gray-50 border-2 border-gray-300 text-gray-700 py-4 px-5 rounded-xl font-semibold transition flex items-center justify-center gap-3 shadow-sm hover:shadow-md">
                  <i class="bi bi-envelope-fill text-2xl text-indigo-600"></i>
                  <span>Email Client</span>
                </a>
              @endif
              @if($clientPhone)
                <a href="https://wa.me/{{ $clientPhone }}?text=Halo, saya tertarik dengan proyek {{ urlencode($task->judul) }}" target="_blank" class="bg-green-500 hover:bg-green-600 text-white py-4 px-5 rounded-xl font-semibold transition flex items-center justify-center gap-3 shadow-md hover:shadow-lg">
                  <i class="bi bi-whatsapp text-2xl"></i>
                  <span>WhatsApp</span>
                </a>
              @endif
            </div>
          </div>
          @endif
        </div>
      @endforeach
    </div>

    <!-- Popup Footer -->
    <div class="sticky bottom-0 bg-white border-t-2 border-gray-200 px-6 py-5 flex items-center justify-end gap-4 rounded-bl-3xl shadow-lg">
      <button onclick="closePopup()" class="px-6 py-3 bg-gray-200 hover:bg-gray-300 text-gray-700 rounded-xl font-semibold transition shadow-sm">
        Tutup
      </button>
      <a href="#" id="popupApplyBtn" class="px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white rounded-xl font-semibold transition shadow-md hover:shadow-lg flex items-center gap-2">
        <i class="bi bi-send-fill"></i>
        Apply Sekarang
      </a>
    </div>
  </div>
</div>

<footer class="text-center py-6 mt-12 text-xs text-gray-400 border-t border-gray-200">
  © 2025 Freelancer Platform. All rights reserved.
</footer>

<script>
// Fungsi untuk membuka popup
function openPopup(taskId) {
  document.body.style.overflow = 'hidden';
  document.getElementById('overlay').classList.remove('hidden');
  
  const popup = document.getElementById('rightPopup');
  popup.classList.remove('translate-x-full');
  
  // Sembunyikan semua konten popup
  const allContents = document.querySelectorAll('[id^="popupTask"]');
  allContents.forEach(content => content.classList.add('hidden'));
  
  // Tampilkan konten task yang dipilih
  const selectedContent = document.getElementById('popupTask' + taskId);
  if (selectedContent) {
    selectedContent.classList.remove('hidden');
  }
  
  // Update link tombol apply
  const applyBtn = document.getElementById('popupApplyBtn');
  if (applyBtn) {
    applyBtn.href = '/worker/task/' + taskId;
  }
}

// Fungsi untuk menutup popup
function closePopup() {
  document.body.style.overflow = '';
  document.getElementById('overlay').classList.add('hidden');
  document.getElementById('rightPopup').classList.add('translate-x-full');
}

// Tutup popup dengan tombol ESC
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    closePopup();
  }
});

// Fungsi filter proyek berdasarkan status
function filterProjects(status) {
  const cards = document.querySelectorAll('.project-card');
  const filterButtons = document.querySelectorAll('.filter-btn');
  let visibleCount = 0;
  
  // Update active button
  filterButtons.forEach(btn => {
    if (btn.dataset.status === status) {
      btn.classList.add('bg-white', 'text-indigo-600', 'shadow-sm');
      btn.classList.remove('text-gray-600');
    } else {
      btn.classList.remove('bg-white', 'text-indigo-600', 'shadow-sm');
      btn.classList.add('text-gray-600');
    }
  });
  
  // Filter cards
  cards.forEach(card => {
    const cardStatus = card.dataset.status;
    if (status === 'all' || cardStatus === status) {
      card.style.display = 'block';
      visibleCount++;
    } else {
      card.style.display = 'none';
    }
  });
  
  // Show/hide empty state
  const emptyState = document.getElementById('emptyState');
  if (visibleCount === 0) {
    emptyState.classList.remove('hidden');
  } else {
    emptyState.classList.add('hidden');
  }
}

// Search functionality
document.getElementById('searchInput').addEventListener('input', function(e) {
  const searchTerm = e.target.value.toLowerCase();
  const cards = document.querySelectorAll('.project-card');
  let visibleCount = 0;
  
  cards.forEach(card => {
    const title = card.dataset.title;
    const category = card.dataset.category;
    
    if (title.includes(searchTerm) || category.includes(searchTerm)) {
      card.style.display = 'block';
      visibleCount++;
    } else {
      card.style.display = 'none';
    }
  });
  
  // Show/hide empty state
  const emptyState = document.getElementById('emptyState');
  if (visibleCount === 0) {
    emptyState.classList.remove('hidden');
  } else {
    emptyState.classList.add('hidden');
  }
});
</script>
@endsection