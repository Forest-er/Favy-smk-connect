<!-- HEADER -->
<div class="sticky top-0 z-20 bg-white border-b border-gray-200 shadow-sm">
    <div class="flex items-center justify-between px-6 py-4">
        <h3 class="text-xl font-bold text-gray-900">Project Details</h3>
        <button onclick="closePopup()" 
            class="w-10 h-10 rounded-full hover:bg-gray-100 flex items-center justify-center transition group">
            <i class="bi bi-x-lg text-gray-600 group-hover:text-gray-900 text-lg"></i>
        </button>
    </div>
</div>

<!-- MAIN CONTENT -->
<div id="mainScroll" class="flex-1 overflow-y-auto bg-gray-50 h-[calc(100vh-73px)]">
    <div id="profileLayout" class="flex flex-col lg:flex-row gap-6 p-6">
        
        <!-- LEFT PANEL - Main Content -->
        <div class="flex-1 space-y-6">

            <!-- Freelancer Profile Card -->
            <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                <div class="flex items-start gap-5">
                    <div class="relative">
                        <img src="{{ $task->user->foto ? asset('storage/' . $task->user->foto) : 'https://i.pravatar.cc/150?img=' . rand(1, 70) }}"
                            class="w-20 h-20 rounded-full border-4 border-white shadow-lg object-cover ring-2 ring-purple-100">
                        <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 rounded-full border-4 border-white"></div>
                    </div>
                    
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-1">
                            <h4 class="text-xl font-bold text-gray-900">{{ $task->user->nama ?? 'Anonim' }}</h4>
                            @if(($task->user->rating ?? 4.5) >= 4.5)
                                <span class="px-3 py-1 bg-gradient-to-r from-yellow-400 to-orange-400 text-white text-xs font-bold rounded-full flex items-center gap-1">
                                    <i class="bi bi-star-fill"></i> Top Rated
                                </span>
                            @else
                                <span class="px-3 py-1 bg-green-100 text-green-700 text-xs font-semibold rounded-full">
                                    Active
                                </span>
                            @endif
                        </div>
                        
                        <p class="text-gray-600 text-sm mb-2">{{ $task->jurusan->nama_jurusan ?? 'General Freelancer' }}</p>
                        
                        <div class="flex items-center gap-2 mb-3">
                            <div class="flex items-center gap-1">
                                @for ($i = 1; $i <= 5; $i++)
                                    <i class="bi bi-star{{ $i <= round($task->user->rating ?? 4.5) ? '-fill' : '' }} text-yellow-400 text-sm"></i>
                                @endfor
                            </div>
                            <span class="text-gray-700 font-semibold text-sm">{{ number_format($task->user->rating ?? 4.5, 1) }}</span>
                            <span class="text-gray-400 text-sm">({{ rand(50, 200) }} reviews)</span>
                        </div>
                        
                        <div class="flex items-center gap-4 text-sm">
                            <div class="flex items-center gap-2 text-green-600 font-medium">
                                <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                Available Now
                            </div>
                            <div class="text-gray-500">
                                <i class="bi bi-clock"></i> Response: {{ $task->user->response_time ?? '1h' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Details Card -->
            <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                <div class="flex items-start justify-between mb-4">
                    <h2 class="text-2xl font-bold text-gray-900 flex-1">{{ $task->judul }}</h2>
                    <span class="px-4 py-2 rounded-full text-sm font-semibold shrink-0
                        {{ $task->status === 'open' ? 'bg-green-100 text-green-700' :
                        ($task->status === 'in_progress' ? 'bg-yellow-100 text-yellow-700' : 'bg-blue-100 text-blue-700') }}">
                        {{ ucfirst($task->status) }}
                    </span>
                </div>

                <div class="relative rounded-2xl overflow-hidden mb-6 group">
                    <img src="{{ asset('storage/' . $task->foto) }}" alt="Project Image"
                        class="w-full h-80 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>

                <div class="mb-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-3 flex items-center gap-2">
                        <i class="bi bi-file-text text-purple-600"></i>
                        Description
                    </h3>
                    <p class="text-gray-700 leading-relaxed">{{ $task->deskripsi }}</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-6 border-t border-gray-100">
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-4">
                        <div class="flex items-center gap-2 text-blue-600 mb-2">
                            <i class="bi bi-calendar-event text-xl"></i>
                            <p class="text-sm font-medium">Deadline</p>
                        </div>
                        <p class="font-bold text-gray-900 text-lg">{{ \Carbon\Carbon::parse($task->deadline)->format('d M Y') }}</p>
                        <p class="text-xs text-gray-600 mt-1">{{ \Carbon\Carbon::parse($task->deadline)->diffForHumans() }}</p>
                    </div>
                    
                    <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-4">
                        <div class="flex items-center gap-2 text-purple-600 mb-2">
                            <i class="bi bi-clock-history text-xl"></i>
                            <p class="text-sm font-medium">Duration</p>
                        </div>
                        <p class="font-bold text-gray-900 text-lg">{{ $task->waktu_estimasi }}</p>
                        <p class="text-xs text-gray-600 mt-1">Estimated time</p>
                    </div>
                    
                    <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-4">
                        <div class="flex items-center gap-2 text-green-600 mb-2">
                            <i class="bi bi-wallet2 text-xl"></i>
                            <p class="text-sm font-medium">Budget</p>
                        </div>
                        <p class="font-bold text-gray-900 text-lg">Rp {{ number_format($task->budget, 0, ',', '.') }}</p>
                        <p class="text-xs text-gray-600 mt-1">Fixed price</p>
                    </div>
                </div>
            </div>

            <!-- Skills & Requirements -->
            <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center gap-2">
                    <i class="bi bi-stars text-purple-600"></i>
                    Skills Required
                </h3>
                <div class="flex flex-wrap gap-2">
                    @php
                        $skills = ['UI/UX Design', 'Figma', 'Adobe XD', 'Prototyping', 'Wireframing'];
                    @endphp
                    @foreach($skills as $skill)
                        <span class="px-4 py-2 bg-gradient-to-r from-purple-50 to-pink-50 text-purple-700 rounded-full text-sm font-medium border border-purple-200 hover:shadow-md transition">
                            {{ $skill }}
                        </span>
                    @endforeach
                </div>
            </div>

            <!-- Comments Section -->
            <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-lg font-semibold text-gray-900 flex items-center gap-2">
                        <i class="bi bi-chat-dots text-purple-600"></i>
                        Comments & Feedback
                        <span class="ml-2 px-3 py-1 bg-gray-100 text-gray-700 rounded-full text-sm font-semibold">
                            {{ count($comments ?? []) }}
                        </span>
                    </h3>
                </div>

                <div class="space-y-4">
                    @forelse ($comments ?? [] as $comment)
                        <div class="flex items-start gap-4 p-4 rounded-xl bg-gray-50 hover:bg-gray-100 transition">
                            <img src="{{ $comment['avatar'] ?? 'https://i.pravatar.cc/100?u=' . $comment['nama'] }}"
                                class="w-12 h-12 rounded-full object-cover shadow-md ring-2 ring-white">
                            <div class="flex-1">
                                <div class="flex items-center justify-between mb-2">
                                    <h6 class="font-semibold text-gray-900">{{ $comment['nama'] }}</h6>
                                    <span class="text-xs text-gray-500">{{ $comment['waktu'] }}</span>
                                </div>
                                <p class="text-gray-700 text-sm leading-relaxed">{{ $comment['komentar'] }}</p>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-8">
                            <i class="bi bi-chat-text text-4xl text-gray-300 mb-3"></i>
                            <p class="text-gray-500">No comments yet. Be the first to comment!</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- RIGHT PANEL - Action Sidebar -->
        <div class="lg:w-[360px] space-y-6">
            
            <!-- Info Card -->
            <div class="bg-gradient-to-br from-blue-50 via-purple-50 to-pink-50 rounded-2xl p-6 border border-purple-200">
                <div class="flex items-start gap-3 mb-3">
                    <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center shrink-0">
                        <i class="bi bi-info-circle text-purple-600 text-xl"></i>
                    </div>
                    <div>
                        <p class="font-semibold text-gray-900 mb-1">Need Connects to Bid</p>
                        <p class="text-gray-600 text-sm">Connects show clients you're serious about the project.</p>
                    </div>
                </div>
                <a href="#" class="text-purple-600 text-sm font-semibold hover:text-purple-700 inline-flex items-center gap-1">
                    Learn more <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            <!-- Action Buttons -->
            <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100 space-y-3">
                <button class="w-full bg-gradient-to-r from-pink-500 to-purple-600 hover:from-pink-600 hover:to-purple-700 text-white font-bold py-4 rounded-xl transition shadow-lg shadow-purple-200 flex items-center justify-center gap-2">
                    <i class="bi bi-send-fill"></i>
                    Request to Order
                </button>

                <button class="w-full border-2 border-pink-400 text-pink-600 hover:bg-pink-50 font-semibold py-4 rounded-xl flex items-center justify-center gap-2 transition">
                    <i class="bi bi-heart"></i>
                    Save Project
                </button>

                <button class="w-full border-2 border-gray-300 text-gray-700 hover:bg-gray-50 font-semibold py-4 rounded-xl flex items-center justify-center gap-2 transition">
                    <i class="bi bi-share"></i>
                    Share
                </button>
            </div>

            <!-- About Freelancer -->
            <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                <h5 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <i class="bi bi-person-circle text-purple-600"></i>
                    About Freelancer
                </h5>
                <p class="text-gray-700 text-sm leading-relaxed mb-4">
                    {{ $task->user->bio ?? 'Experienced professional with a passion for delivering high-quality work. Committed to meeting deadlines and exceeding client expectations.' }}
                </p>
                
                <div class="space-y-3 pt-4 border-t border-gray-100">
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Member since</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Completed projects</span>
                        <span class="font-semibold text-gray-900">{{ rand(10, 50) }}</span>
                    </div>
                    <div class="flex items-center justify-between text-sm">
                        <span class="text-gray-600">Success rate</span>
                        <span class="font-semibold text-green-600">{{ rand(95, 100) }}%</span>
                    </div>
                </div>

                <a href="/client/explore.show"
                    class="mt-4 inline-flex items-center gap-2 text-purple-600 font-semibold text-sm hover:text-purple-700 transition">
                    View Full Profile <i class="bi bi-arrow-right"></i>
                </a>
            </div>

            <!-- Contact Info -->
            <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                <h5 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                    <i class="bi bi-envelope text-purple-600"></i>
                    Contact
                </h5>
                <button class="w-full bg-gray-100 hover:bg-gray-200 text-gray-800 font-semibold py-3 rounded-xl transition flex items-center justify-center gap-2">
                    <i class="bi bi-chat-dots"></i>
                    Send Message
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
    * { font-family: 'Inter', sans-serif; }
    
    #mainScroll::-webkit-scrollbar {
        width: 8px;
    }
    
    #mainScroll::-webkit-scrollbar-track {
        background: #f1f1f1;
    }
    
    #mainScroll::-webkit-scrollbar-thumb {
        background: #d1d5db;
        border-radius: 4px;
    }
    
    #mainScroll::-webkit-scrollbar-thumb:hover {
        background: #9ca3af;
    }
</style>