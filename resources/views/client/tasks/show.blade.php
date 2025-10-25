<!-- Overlay -->
<div id="overlay" class="fixed inset-0 bg-black/50 z-40 hidden"></div>

<!-- Right Popup -->
<div id="rightPopup" class="fixed top-0 right-0 h-full w-[700px] bg-white shadow-xl z-50 transform translate-x-full transition-transform rounded-l-3xl overflow-hidden">

  <!-- Header -->
  <div class="flex items-center justify-between p-6 border-b border-gray-200 sticky top-0 bg-white shadow-sm">
    <h3 class="text-xl font-semibold text-gray-800">Project Details</h3>
    <button onclick="closePopup()" class="text-gray-400 hover:text-gray-600 text-2xl">&times;</button>
  </div>

  <!-- Content Scrollable -->
  <div class="overflow-y-auto h-[calc(100%-72px)] p-6 space-y-6">

    <!-- Project Info -->
    <div class="space-y-2">
      <h2 class="text-2xl font-bold text-black">{{ $task->judul }}</h2>
      <p class="text-gray-500">{{ $task->jurusan->nama_jurusan ?? 'General' }}</p>
      <p class="text-gray-700">{{ $task->deskripsi }}</p>
      <p class="text-green-600 font-semibold">Budget: Rp {{ number_format($task->budget, 0, ',', '.') }}</p>
      <p class="text-gray-500">Deadline: {{ \Carbon\Carbon::parse($task->deadline)->format('d M Y') }}</p>
    </div>

    <!-- Client Info -->
    <div class="bg-gray-50 p-4 rounded-2xl border border-gray-100 shadow-sm">
      <h4 class="font-semibold text-gray-800">Client</h4>
      <div class="flex items-center gap-4 mt-2">
        <img src="{{ $task->user->foto ? asset('storage/' . $task->user->foto) : 'https://i.pravatar.cc/150?img=' . rand(1,70) }}"
             class="w-16 h-16 rounded-full object-cover border border-white shadow-sm">
        <div>
          <p class="font-semibold text-gray-800">{{ $task->user->nama ?? 'Anonim' }}</p>
          <p class="text-gray-500 text-sm">Member since {{ $task->user->created_at->format('M Y') }}</p>
        </div>
      </div>
    </div>

    <!-- Skills -->
    @if($task->user->skills)
      <div>
        <h4 class="font-semibold text-gray-800 mb-2">Skills</h4>
        <div class="flex flex-wrap gap-2">
          @foreach(explode(',', $task->user->skills) as $skill)
            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">{{ trim($skill) }}</span>
          @endforeach
        </div>
      </div>
    @endif

    <!-- Portfolio -->
    <div>
      <h4 class="font-semibold text-gray-800 mb-3">Portfolio</h4>
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        @if($task->user->portfolio->count() > 0)
          @foreach($task->user->portfolio as $item)
            <div class="relative overflow-hidden rounded-lg group">
              <img src="{{ asset('storage/' . $item->gambar) }}" class="w-full h-36 object-cover group-hover:scale-105 transition-transform duration-300">
              <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/60 to-transparent text-white text-xs p-2">
                {{ $item->judul }}
              </div>
            </div>
          @endforeach
        @else
          <p class="text-gray-500 text-sm">Portfolio kosong.</p>
        @endif
      </div>
    </div>

  </div>

</div>

<!-- JS -->
<script>
function openPopup() {
    document.getElementById('overlay').classList.remove('hidden');
    document.getElementById('rightPopup').classList.remove('translate-x-full');
}

function closePopup() {
    document.getElementById('overlay').classList.add('hidden');
    document.getElementById('rightPopup').classList.add('translate-x-full');
}
</script>
