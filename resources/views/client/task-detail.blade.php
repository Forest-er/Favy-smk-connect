<!-- HEADER -->
<div class="sticky top-0 z-10 bg-white">
    <div class="flex items-center justify-between border-b border-gray-300 w-full">
        <h3 class="text-xl font-semibold text-gray-800 px-4 py-3">Details</h3>
<button onclick="closePopup()" 
        class="text-gray-600 hover:text-gray-800 text-3xl font-semibold transition px-4 py-3">
    &times;
</button>
    </div>
</div>


<!-- MAIN SCROLL -->
<div id="mainScroll" class="flex-1 overflow-y-auto bg-white p-8 h-[calc(100vh-80px)]">
    <div id="profileLayout" class="flex flex-col md:flex-row gap-8">
        <!-- LEFT PANEL -->
        <div class="flex-1 space-y-8">

            <!-- Freelancer Profile -->
            <div class="flex items-center gap-5 bg-white border border-gray-100 rounded-2xl p-5 shadow-md">
                <img src="{{ $task->user->foto ? asset('storage/' . $task->user->foto) : 'https://i.pravatar.cc/150?img=' . rand(1, 70) }}"
                    class="w-20 h-20 rounded-full border-4 border-white shadow-md object-cover">
                <div class="flex flex-col flex-1">
                    <div class="flex items-center gap-2">
                        <h4 class="text-xl font-semibold text-black">{{ $task->user->nama ?? 'Anonim' }}</h4>
                        <span class="bg-green-100 text-green-700 text-xs font-medium px-2 py-0.5 rounded-full">
                            {{ ($task->user->rating ?? 4.5) >= 4.5 ? 'Top Rated' : 'Active Freelancer' }}
                        </span>
                    </div>
                    <p class="text-gray-500 text-sm mt-0.5">{{ $task->jurusan->nama_jurusan ?? 'General Freelancer' }}
                    </p>
                    <div class="flex items-center gap-1 text-yellow-500 mt-1">
                        @for ($i = 1; $i <= 5; $i++)
                            <i class="bi {{ $i <= round($task->user->rating ?? 4.5) ? 'bi-star-fill' : 'bi-star' }}"></i>
                        @endfor
                        <span
                            class="text-gray-500 ml-2 text-sm">({{ number_format($task->user->rating ?? 4.5, 1) }})</span>
                    </div>
                    <p class="text-green-600 text-sm mt-1">
                        {{ $task->user->status_online ?? true ? 'Available Now' : 'Offline' }} • Response:
                        {{ $task->user->response_time ?? '1h' }}
                    </p>
                </div>
            </div>

            <!-- Project Detail -->
            <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm space-y-5">
                <h2 class="text-2xl font-semibold text-gray-900">{{ $task->judul }}</h2>
                <img src="{{ asset('storage/' . $task->foto) }}" alt="Project Image"
                    class="rounded-xl w-full h-64 object-cover shadow-md">
                <p class="text-gray-700 leading-relaxed mt-4">{{ $task->deskripsi }}</p>

                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4 text-sm mt-6">
                    <div>
                        <p class="text-gray-500">Deadline</p>
                        <p class="font-semibold text-gray-800">
                            {{ \Carbon\Carbon::parse($task->deadline)->format('d M Y') }}</p>
                    </div>
                    <div>
                        <p class="text-gray-500">Estimasi Waktu</p>
                        <p class="font-semibold text-gray-800">{{ $task->waktu_estimasi }}</p>
                    </div>
                    <div>
                        <p class="text-gray-500">Budget</p>
                        <p class="font-semibold text-gray-800">Rp {{ number_format($task->budget, 0, ',', '.') }}</p>
                    </div>
                </div>

                <span
                    class="inline-block mt-4 px-4 py-1 rounded-full text-sm font-medium 
                          {{ $task->status === 'open' ? 'bg-green-100 text-green-700' :
    ($task->status === 'in_progress' ? 'bg-yellow-100 text-yellow-700' : 'bg-blue-100 text-blue-700') }}">
                    {{ ucfirst($task->status) }}
                </span>
            </div>

            <!-- Comments -->
            <div class="bg-white border border-gray-100 rounded-2xl p-6 shadow-sm mt-8">
                <h5
                    class="font-semibold text-lg mb-4 bg-gradient-to-r from-pink-500 via-purple-500 to-blue-500 bg-clip-text text-transparent">
                    Comments & Feedback
                </h5>

                <div class="space-y-4">
                    @foreach ($comments ?? [] as $comment)
                        <div class="flex items-start gap-4 border-b border-gray-100 pb-3">
                            <img src="{{ $comment['avatar'] ?? 'https://i.pravatar.cc/100?u=' . $comment['nama'] }}"
                                class="w-10 h-10 rounded-full object-cover shadow-sm">
                            <div class="flex-1">
                                <div class="flex items-center justify-between">
                                    <h6 class="font-semibold text-gray-900">{{ $comment['nama'] }}</h6>
                                    <span class="text-xs text-gray-500">{{ $comment['waktu'] }}</span>
                                </div>
                                <p class="text-gray-700 text-sm mt-1">{{ $comment['komentar'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Garis pembatas-->
        <div id="divider" class="w-[2px] bg-gradient-to-b from-pink-300 via-purple-300 to-blue-300 rounded-full"></div>
        <!-- SIDE PANEL -->
        <div id="sidePanel" class="w-full md:w-[300px] p-6 space-y-6">
            <div
                class="bg-gradient-to-br from-blue-100 via-pink-100 to-yellow-100 p-4 rounded-2xl shadow-sm border border-gray-200">
                <p class="font-semibold text-gray-900">You'll need Connects to bid</p>
                <p class="text-gray-600 text-sm">They're like credits that show clients you’re serious.</p>
                <a href="#" class="text-blue-600 text-sm font-medium hover:underline">Learn more</a>
            </div>

            <button
                class="w-full bg-gradient-to-r from-pink-500 to-blue-500 hover:opacity-90 text-white font-semibold py-2.5 rounded-lg transition">
                Request to Order
            </button>

            <button
                class="w-full border border-pink-400 text-pink-600 hover:bg-pink-50 font-medium py-2.5 rounded-lg flex items-center justify-center gap-2 transition">
                <i class="bi bi-heart"></i> Save Job
            </button>

            <div class="pt-4 border-t border-gray-200 space-y-5">
                <h5
                    class="text-lg font-semibold bg-gradient-to-r from-pink-500 via-purple-500 to-blue-500 bg-clip-text text-transparent">
                    About Me</h5>
                <p class="text-gray-700 text-sm mt-2">{{ $task->user->bio ?? 'I’m a passionate freelancer...' }}</p>
                <a href="/client/explore.show"
                    class="text-red-600 text-sm font-medium underline hover:text-red-800 mt-1 inline-block">See
                    details</a>
            </div>
        </div>
    </div>
</div>