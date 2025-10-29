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

    <!-- Popular Projects -->
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
                            <p class="text-md text-gray-800">{{ $task->user->nama ?? 'Client' }}</p>
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
                        <div class="border-t border-gray-100 pt-4 mb-4">
                            <p class="text-xs text-gray-500">Budget</p>
                            <p class="text-xl font-bold text-gray-900">Rp{{ number_format($task->budget, 0, ',', '.') }}</p>
                        </div>
                        <button onclick='openPopup(@json($task))'
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

    <!-- Disukai -->
    <section class="mb-12">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="text-2xl font-bold text-gray-900 flex items-center gap-2">
                    Disukai <span class="text-3xl">❤️</span>
                </h2>
                <p class="text-gray-500 text-sm mt-1">Tugas-tugas yang anda sukai</p>
            </div>
        </div>

        <div class="flex gap-5 overflow-x-auto pb-4 scrollbar-hide snap-x snap-mandatory">
            @forelse ($likedTask as $LT)
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden flex-shrink-0 w-80 snap-center border border-gray-100 hover:shadow-xl transition-shadow duration-300">
                    <div class="relative">
                        <img 
                            src="{{ asset('storage/' . $LT->foto) }}"
                            onerror="this.src='https://images.pexels.com/photos/1181244/pexels-photo-1181244.jpeg'"
                            class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 text-xs font-semibold rounded-full text-white bg-gradient-to-r from-pink-500 to-purple-600 shadow">
                                {{ $LT->jurusan->nama_jurusan ?? 'Unknown' }}
                            </span>
                        </div>
                    </div>

                    <div class="p-5">
                        <h3 class="font-bold text-lg mb-2 text-gray-900 line-clamp-1">{{ $LT->judul }}</h3>
                        <div class="flex items-center gap-2 mb-4">
                            <img src="https://i.pravatar.cc/150?u={{ $LT->users_id }}" class="w-8 h-8 rounded-full ring-2 ring-gray-100">
                            <p class="text-md text-gray-800">{{ $LT->user->nama ?? 'Client' }}</p>
                        </div>
                        <div class="flex items-center gap-3 text-xs text-gray-500 mb-4">
                            <span class="flex items-center gap-1">
                                <i class="bi bi-calendar3"></i>
                                {{ \Carbon\Carbon::parse($LT->deadline)->format('d M Y') }}
                            </span>
                            <span class="flex items-center gap-1">
                                <i class="bi bi-clock"></i>
                                {{ $LT->waktu_estimasi }}
                            </span>
                        </div>
                        <div class="border-t border-gray-100 pt-4 mb-4">
                            <p class="text-xs text-gray-500">Budget</p>
                            <p class="text-xl font-bold text-gray-900">Rp{{ number_format($LT->budget, 0, ',', '.') }}</p>
                        </div>
                        <button onclick='openLikedPopup(@json($LT))'
                            class="w-full bg-gradient-to-r from-pink-500 to-purple-600 hover:from-pink-600 hover:to-purple-700 text-white font-semibold py-3 rounded-xl transition shadow-lg shadow-pink-200">
                            Lihat Detail
                        </button>
                    </div>
                </div>
            @empty
                <div class="text-center py-12 w-full">
                    <i class="bi bi-inbox text-6xl text-gray-300 mb-4"></i>
                    <p class="text-gray-500 text-lg">Belum ada tugas yang disukai</p>
                </div>
            @endforelse
        </div>
    </section>
</div>

<!-- POPUP UNTUK DAFTAR TASK (TASK CLIENT) -->
<div id="overlay" 
    class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden z-40 transition-all duration-300"
    onclick="closePopup()"></div>

<div id="rightPopup" 
    class="fixed top-0 right-0 h-full w-full md:w-[90%] lg:w-[75%] xl:w-[70%] bg-gray-50 shadow-2xl transform translate-x-full transition-all duration-500 ease-out z-50 overflow-y-auto">

    <header class="bg-white shadow-sm py-4 px-6 md:px-12 lg:px-24 flex justify-between items-center sticky top-0 z-50 transition-all duration-300">
        <h1 class="text-xl md:text-2xl font-semibold text-gray-800">Detail Task Saya</h1>
        <button onclick="closePopup()" 
            class="w-10 h-10 flex items-center justify-center rounded-lg bg-gray-100 hover:bg-gray-200 transition-all">
            <i class="bi bi-x-lg text-gray-700 text-xl"></i>
        </button>
    </header>

    <!-- MAIN CONTENT -->
    <div id="mainScrollClient" class="flex-1 overflow-y-auto bg-gray-50">
        <div id="profileLayoutClient" class="flex flex-col lg:flex-row gap-6 p-6">
            
            <!-- LEFT PANEL - Main Content -->
            <div class="flex-1 space-y-6">

                <!-- Client Profile Card -->
                <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                    <div class="flex items-start gap-5">
                        <div class="relative">
                            <img id="popupClientPhoto" src="https://i.pravatar.cc/150?img=12"
                                class="w-20 h-20 rounded-full border-4 border-white shadow-lg object-cover ring-2 ring-purple-100">
                            <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 rounded-full border-4 border-white"></div>
                        </div>
                        
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-1">
                                <h4 id="popupClientName" class="text-xl font-bold text-gray-900">Loading...</h4>
                                <span class="px-3 py-1 bg-gradient-to-r from-yellow-400 to-orange-400 text-white text-xs font-bold rounded-full flex items-center gap-1">
                                    <i class="bi bi-star-fill"></i> Verified Client
                                </span>
                            </div>
                            
                            <p id="popupClientRole" class="text-gray-600 text-sm mb-2">Task Owner</p>
                            
                            <div class="flex items-center gap-2 mb-3">
                                <div class="flex items-center gap-1">
                                    <i class="bi bi-star-fill text-yellow-400 text-sm"></i>
                                    <i class="bi bi-star-fill text-yellow-400 text-sm"></i>
                                    <i class="bi bi-star-fill text-yellow-400 text-sm"></i>
                                    <i class="bi bi-star-fill text-yellow-400 text-sm"></i>
                                    <i class="bi bi-star-fill text-yellow-400 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-semibold text-sm">5.0</span>
                                <span class="text-gray-400 text-sm">(My Tasks)</span>
                            </div>
                            
                            <div class="flex items-center gap-4 text-sm">
                                <div class="flex items-center gap-2 text-green-600 font-medium">
                                    <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                    Task Active
                                </div>
                                <div class="text-gray-500">
                                    <i class="bi bi-people"></i> <span id="applicantsCount">0</span> Applicants
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Details Card -->
                <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                    <div class="flex items-start justify-between mb-4">
                        <h2 id="popupTitle" class="text-2xl font-bold text-gray-900 flex-1">Loading...</h2>
                        <span id="popupStatusBadge" class="px-4 py-2 rounded-full text-sm font-semibold shrink-0 bg-green-100 text-green-700">
                            Active
                        </span>
                    </div>

                    <div class="relative rounded-2xl overflow-hidden mb-6 group">
                        <img id="popupImage" src="https://images.pexels.com/photos/1181244/pexels-photo-1181244.jpeg" 
                            alt="Project Image" class="w-full h-80 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>

                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3 flex items-center gap-2">
                            <i class="bi bi-file-text text-purple-600"></i>
                            Description
                        </h3>
                        <p id="popupDesk" class="text-gray-700 leading-relaxed">
                            Loading description...
                        </p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-6 border-t border-gray-100">
                        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-4">
                            <div class="flex items-center gap-2 text-blue-600 mb-2">
                                <i class="bi bi-calendar-event text-xl"></i>
                                <p class="text-sm font-medium">Deadline</p>
                            </div>
                            <p id="popupDeadline" class="font-bold text-gray-900 text-lg">-</p>
                        </div>
                        
                        <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-4">
                            <div class="flex items-center gap-2 text-purple-600 mb-2">
                                <i class="bi bi-clock-history text-xl"></i>
                                <p class="text-sm font-medium">Duration</p>
                            </div>
                            <p id="popupEstimation" class="font-bold text-gray-900 text-lg">-</p>
                        </div>
                        
                        <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-4">
                            <div class="flex items-center gap-2 text-green-600 mb-2">
                                <i class="bi bi-wallet2 text-xl"></i>
                                <p class="text-sm font-medium">Budget</p>
                            </div>
                            <p id="popupBudget" class="font-bold text-gray-900 text-lg">Rp 0</p>
                        </div>
                    </div>
                </div>

                <!-- Skills & Requirements -->
                <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center gap-2">
                        <i class="bi bi-stars text-purple-600"></i>
                        Skills Required
                    </h3>
                    <div class="flex flex-wrap gap-2" id="popupSkills">
                        <span class="px-4 py-2 bg-gradient-to-r from-purple-50 to-pink-50 text-purple-700 rounded-full text-sm font-medium border border-purple-200 hover:shadow-md transition">
                            Loading...
                        </span>
                    </div>
                </div>
            </div>

            <!-- RIGHT PANEL - Action Sidebar -->
            <div class="lg:w-[360px] space-y-6">
                
                <!-- Quick Actions -->
                <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100 space-y-3">
                    <h5 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                        <i class="bi bi-lightning-charge-fill text-yellow-500"></i>
                        Quick Actions
                    </h5>

                    <button onclick="viewApplicants()" 
                        class="w-full bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white font-semibold py-4 
                            rounded-xl flex items-center justify-center gap-2 transition shadow-lg hover:shadow-xl">
                        <i class="bi bi-people-fill"></i> 
                        <span>View Applicants</span>
                        <span id="applicantsBadge" class="ml-auto bg-white/30 px-3 py-1 rounded-lg text-sm font-bold">0</span>
                    </button>

                   <button onclick="editTask()"
                    class="w-full border-2 border-purple-400 text-purple-600 hover:bg-purple-50 font-semibold py-4 
                    rounded-xl flex items-center justify-center gap-2 transition">
                    <i class="bi bi-pencil-square"></i> Edit Task
                    </button>


                    <button onclick="shareTask()"
                        class="w-full border-2 border-gray-300 text-gray-700 hover:bg-gray-50 font-semibold py-4 
                            rounded-xl flex items-center justify-center gap-2 transition">
                        <i class="bi bi-share-fill"></i> Share Task
                    </button>

                    <button onclick="deleteTask()"
                        class="w-full border-2 border-red-400 text-red-600 hover:bg-red-50 font-semibold py-4 
                            rounded-xl flex items-center justify-center gap-2 transition">
                        <i class="bi bi-trash3-fill"></i> Delete Task
                    </button>
                </div>

                <!-- Task Status -->
                <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-5 border-2 border-green-200">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-white flex items-center justify-center shrink-0 shadow-sm">
                            <i class="bi bi-check-circle-fill text-green-600 text-2xl"></i>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900 text-lg mb-2">Task Active</p>
                            <p class="text-gray-700 text-sm leading-relaxed">
                                Your task is published and visible to freelancers.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Task Info -->
                <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                    <h5 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                        <i class="bi bi-info-circle text-purple-600"></i>
                        Task Information
                    </h5>
                    
                    <div class="space-y-3 pt-4 border-t border-gray-100">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Created on</span>
                            <span id="createdDate" class="font-semibold text-gray-900">-</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Total Views</span>
                            <span class="font-semibold text-gray-900">247</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Interested</span>
                            <span class="font-semibold text-green-600">18</span>
                        </div>
                    </div>
                </div>

                <!-- Tips -->
                <div class="bg-gradient-to-r from-yellow-50 to-orange-50 rounded-2xl p-5 border-2 border-yellow-300">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-yellow-400 to-orange-500 flex items-center justify-center shrink-0 shadow-md">
                            <i class="bi bi-lightbulb-fill text-white text-2xl"></i>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900 text-lg mb-2">💡 Pro Tips</p>
                            <p class="text-gray-700 text-sm leading-relaxed">
                                Respond quickly to applicants to increase engagement by up to 3x!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- POPUP UNTUK DISUKAI (LIKED TASKS) -->
<div id="overlayLiked" 
    class="fixed inset-0 bg-black/60 backdrop-blur-sm hidden z-40 transition-all duration-300"
    onclick="closeLikedPopup()"></div>

<div id="likedPopup" 
    class="fixed top-0 right-0 h-full w-full md:w-[90%] lg:w-[75%] xl:w-[70%] bg-white shadow-2xl transform translate-x-full transition-all duration-500 ease-out z-50 flex flex-col">

    <!-- HEADER -->
    <div class="sticky top-0 z-20 bg-white border-b border-gray-200 shadow-sm">
        <div class="flex items-center justify-between px-6 py-4">
            <h3 class="text-xl font-bold text-gray-900">Project Details</h3>
            <button onclick="closeLikedPopup()" 
                class="w-10 h-10 rounded-full hover:bg-gray-100 flex items-center justify-center transition group">
                <i class="bi bi-x-lg text-gray-600 group-hover:text-gray-900 text-lg"></i>
            </button>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div id="mainScroll" class="flex-1 overflow-y-auto bg-gray-50">
        <div id="profileLayout" class="flex flex-col lg:flex-row gap-6 p-6">
            
            <!-- LEFT PANEL - Main Content -->
            <div class="flex-1 space-y-6">

                <!-- Freelancer Profile Card -->
                <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                    <div class="flex items-start gap-5">
                        <div class="relative">
                            <img id="likedClientPhoto" src="https://i.pravatar.cc/150?img=12"
                                class="w-20 h-20 rounded-full border-4 border-white shadow-lg object-cover ring-2 ring-purple-100">
                            <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-green-500 rounded-full border-4 border-white"></div>
                        </div>
                        
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-1">
                                <h4 id="likedClientName" class="text-xl font-bold text-gray-900">Loading...</h4>
                                <span class="px-3 py-1 bg-gradient-to-r from-yellow-400 to-orange-400 text-white text-xs font-bold rounded-full flex items-center gap-1">
                                    <i class="bi bi-star-fill"></i> Top Rated
                                </span>
                            </div>
                            
                            <p id="likedClientRole" class="text-gray-600 text-sm mb-2">General Freelancer</p>
                            
                            <div class="flex items-center gap-2 mb-3">
                                <div class="flex items-center gap-1">
                                    <i class="bi bi-star-fill text-yellow-400 text-sm"></i>
                                    <i class="bi bi-star-fill text-yellow-400 text-sm"></i>
                                    <i class="bi bi-star-fill text-yellow-400 text-sm"></i>
                                    <i class="bi bi-star-fill text-yellow-400 text-sm"></i>
                                    <i class="bi bi-star-fill text-yellow-400 text-sm"></i>
                                </div>
                                <span class="text-gray-700 font-semibold text-sm">4.9</span>
                                <span class="text-gray-400 text-sm">(127 reviews)</span>
                            </div>
                            
                            <div class="flex items-center gap-4 text-sm">
                                <div class="flex items-center gap-2 text-green-600 font-medium">
                                    <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                    Available Now
                                </div>
                                <div class="text-gray-500">
                                    <i class="bi bi-clock"></i> Response: 1h
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Details Card -->
                <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                    <div class="flex items-start justify-between mb-4">
                        <h2 id="likedPopupTitle" class="text-2xl font-bold text-gray-900 flex-1">Loading...</h2>
                        <span class="px-4 py-2 rounded-full text-sm font-semibold shrink-0 bg-green-100 text-green-700">
                            Open
                        </span>
                    </div>

                    <div class="relative rounded-2xl overflow-hidden mb-6 group">
                        <img id="likedPopupImage" src="https://images.pexels.com/photos/1181244/pexels-photo-1181244.jpeg" 
                            alt="Project Image" class="w-full h-80 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>

                    <div class="mb-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3 flex items-center gap-2">
                            <i class="bi bi-file-text text-purple-600"></i>
                            Description
                        </h3>
                        <p id="likedPopupDesk" class="text-gray-700 leading-relaxed">
                            Loading description...
                        </p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-6 border-t border-gray-100">
                        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-4">
                            <div class="flex items-center gap-2 text-blue-600 mb-2">
                                <i class="bi bi-calendar-event text-xl"></i>
                                <p class="text-sm font-medium">Deadline</p>
                            </div>
                            <p id="likedPopupDeadline" class="font-bold text-gray-900 text-lg">-</p>
                        </div>
                        
                        <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-4">
                            <div class="flex items-center gap-2 text-purple-600 mb-2">
                                <i class="bi bi-clock-history text-xl"></i>
                                <p class="text-sm font-medium">Duration</p>
                            </div>
                            <p id="likedPopupEstimation" class="font-bold text-gray-900 text-lg">-</p>
                        </div>
                        
                        <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-4">
                            <div class="flex items-center gap-2 text-green-600 mb-2">
                                <i class="bi bi-wallet2 text-xl"></i>
                                <p class="text-sm font-medium">Budget</p>
                            </div>
                            <p id="likedPopupBudget" class="font-bold text-gray-900 text-lg">Rp 0</p>
                        </div>
                    </div>
                </div>

                <!-- Skills & Requirements -->
                <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4 flex items-center gap-2">
                        <i class="bi bi-stars text-purple-600"></i>
                        Skills Required
                    </h3>
                    <div class="flex flex-wrap gap-2" id="likedPopupSkills">
                        <span class="px-4 py-2 bg-gradient-to-r from-purple-50 to-pink-50 text-purple-700 rounded-full text-sm font-medium border border-purple-200 hover:shadow-md transition">
                            Loading...
                        </span>
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
                    <button onclick="applyToTask()"
                        class="w-full bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white font-semibold py-4 
                            rounded-xl flex items-center justify-center gap-2 transition shadow-lg hover:shadow-xl">
                        <i class="bi bi-send-fill"></i> Apply Now
                    </button>

                    <button onclick="unlikeTask()"
                        class="w-full border-2 border-pink-400 text-pink-600 hover:bg-pink-50 font-semibold py-4 
                            rounded-xl flex items-center justify-center gap-2 transition">
                        <i class="bi bi-heart-fill"></i> Remove from Saved
                    </button>
                </div>

                <!-- About Client -->
                <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
                    <h5 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
                        <i class="bi bi-person-circle text-purple-600"></i>
                        About Client
                    </h5>
                    <p class="text-gray-700 text-sm leading-relaxed mb-4">
                        Experienced client looking for talented freelancers to bring creative projects to life.
                    </p>
                    
                    <div class="space-y-3 pt-4 border-t border-gray-100">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Member since</span>
                            <span class="font-semibold text-gray-900">Jan 2023</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Completed projects</span>
                            <span class="font-semibold text-gray-900">37</span>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-600">Success rate</span>
                            <span class="font-semibold text-green-600">98%</span>
                        </div>
                    </div>

                    <a href="#"
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

                <!-- Tips -->
                <div class="bg-gradient-to-r from-yellow-50 to-orange-50 rounded-2xl p-5 border-2 border-yellow-300">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-yellow-400 to-orange-500 flex items-center justify-center shrink-0 shadow-md">
                            <i class="bi bi-lightbulb-fill text-white text-2xl"></i>
                        </div>
                        <div>
                            <p class="font-bold text-gray-900 text-lg mb-2">💡 Tips Sukses</p>
                            <p class="text-gray-700 text-sm leading-relaxed">
                                Pastikan portofolio Anda sesuai dengan skill yang dibutuhkan untuk meningkatkan peluang diterima!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Link Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<!-- Custom Styles -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
    * { font-family: 'Inter', sans-serif; }
    
    #mainScroll::-webkit-scrollbar,
    #mainScrollClient::-webkit-scrollbar {
        width: 8px;
    }
    
    #mainScroll::-webkit-scrollbar-track,
    #mainScrollClient::-webkit-scrollbar-track {
        background: #f1f1f1;
    }
    
    #mainScroll::-webkit-scrollbar-thumb,
    #mainScrollClient::-webkit-scrollbar-thumb {
        background: #d1d5db;
        border-radius: 4px;
    }
    
    #mainScroll::-webkit-scrollbar-thumb:hover,
    #mainScrollClient::-webkit-scrollbar-thumb:hover {
        background: #9ca3af;
    }
</style>

<script>
    // Variable to store current task ID
    let currentTaskId = null;
    let currentLikedTaskId = null;

    // Popup untuk Daftar Task (Client's tasks)
    function openPopup(task) {
        currentTaskId = task.id_task;
        
        // Update client photo
        const photoUrl = `https://i.pravatar.cc/150?u=${task.users_id}`;
        document.getElementById('popupClientPhoto').src = photoUrl;
        
        // Update client name
        document.getElementById('popupClientName').textContent = task.user?.nama || 'Anonymous';
        
        // Update title
        document.getElementById('popupTitle').textContent = task.judul || 'No Title';
        
        // Update image
        const imgSrc = task.foto ? "{{ asset('storage/') }}/" + task.foto : "https://images.pexels.com/photos/1181244/pexels-photo-1181244.jpeg";
        document.getElementById('popupImage').src = imgSrc;
        
        // Update description
        document.getElementById('popupDesk').textContent = task.deskripsi || 'No description available';
        
        // Update budget
        const budgetFormatted = new Intl.NumberFormat('id-ID').format(task.budget || 0);
        document.getElementById('popupBudget').textContent = 'Rp ' + budgetFormatted;
        
        // Update deadline
        if (task.deadline) {
            const deadlineDate = new Date(task.deadline);
            const options = { day: 'numeric', month: 'short', year: 'numeric' };
            document.getElementById('popupDeadline').textContent = deadlineDate.toLocaleDateString('id-ID', options);
        }
        
        // Update estimation
        document.getElementById('popupEstimation').textContent = task.waktu_estimasi || '-';
        
        // Update skills
        const skillsContainer = document.getElementById('popupSkills');
        skillsContainer.innerHTML = '';
        
        const categoryText = task.jurusan?.nama_jurusan || 'General Freelancer';
        const skillsArray = task.skills || [categoryText];
        
        skillsArray.forEach(skill => {
            const skillBadge = document.createElement('span');
            skillBadge.className = 'px-4 py-2 bg-gradient-to-r from-purple-50 to-pink-50 text-purple-700 rounded-full text-sm font-medium border border-purple-200 hover:shadow-md transition';
            skillBadge.textContent = skill;
            skillsContainer.appendChild(skillBadge);
        });
        
        // Update created date
        if (task.created_at) {
            const createdDate = new Date(task.created_at);
            const options = { day: 'numeric', month: 'short', year: 'numeric' };
            document.getElementById('createdDate').textContent = createdDate.toLocaleDateString('id-ID', options);
        }
        
        // Show popup
        document.getElementById('overlay').classList.remove('hidden');
        setTimeout(() => {
            document.getElementById('rightPopup').classList.remove('translate-x-full');
        }, 10);
    }

    function closePopup() {
        document.getElementById('rightPopup').classList.add('translate-x-full');
        setTimeout(() => {
            document.getElementById('overlay').classList.add('hidden');
        }, 500);
    }

    // Popup untuk Disukai (Liked tasks)
    function openLikedPopup(task) {
        currentLikedTaskId = task.id_task;
        
        // Update client photo
        const photoUrl = `https://i.pravatar.cc/150?u=${task.users_id}`;
        document.getElementById('likedClientPhoto').src = photoUrl;
        
        // Update client name
        document.getElementById('likedClientName').textContent = task.user?.nama || 'Anonymous';
        
        // Update client role/category
        document.getElementById('likedClientRole').textContent = task.jurusan?.nama_jurusan || 'General Freelancer';
        
        // Update title
        document.getElementById('likedPopupTitle').textContent = task.judul || 'No Title';
        
        // Update image
        const imgSrc = task.foto ? "{{ asset('storage/') }}/" + task.foto : "https://images.pexels.com/photos/1181244/pexels-photo-1181244.jpeg";
        document.getElementById('likedPopupImage').src = imgSrc;
        
        // Update description
        document.getElementById('likedPopupDesk').textContent = task.deskripsi || 'No description available';
        
        // Update deadline
        if (task.deadline) {
            const deadlineDate = new Date(task.deadline);
            const options = { day: 'numeric', month: 'short', year: 'numeric' };
            document.getElementById('likedPopupDeadline').textContent = deadlineDate.toLocaleDateString('id-ID', options);
        }
        
        // Update estimation
        document.getElementById('likedPopupEstimation').textContent = task.waktu_estimasi || '-';
        
        // Update budget
        const budgetFormatted = new Intl.NumberFormat('id-ID').format(task.budget || 0);
        document.getElementById('likedPopupBudget').textContent = 'Rp ' + budgetFormatted;
        
        // Update skills
        const skillsContainer = document.getElementById('likedPopupSkills');
        skillsContainer.innerHTML = '';
        
        const categoryText = task.jurusan?.nama_jurusan || 'General Freelancer';
        const skillsArray = task.skills || [categoryText, 'Figma', 'Adobe XD'];
        
        skillsArray.forEach(skill => {
            const skillBadge = document.createElement('span');
            skillBadge.className = 'px-4 py-2 bg-gradient-to-r from-purple-50 to-pink-50 text-purple-700 rounded-full text-sm font-medium border border-purple-200 hover:shadow-md transition';
            skillBadge.textContent = skill;
            skillsContainer.appendChild(skillBadge);
        });
        
        // Show popup
        document.getElementById('overlayLiked').classList.remove('hidden');
        setTimeout(() => {
            document.getElementById('likedPopup').classList.remove('translate-x-full');
        }, 10);
    }

    function closeLikedPopup() {
        document.getElementById('likedPopup').classList.add('translate-x-full');
        setTimeout(() => {
            document.getElementById('overlayLiked').classList.add('hidden');
        }, 500);
    }

    // Functions for Client Task Popup
    function viewApplicants() {
        if (currentTaskId) {
            window.location.href = `/tasks/${currentTaskId}/applicants`;
        } else {
            alert('Melihat daftar pelamar...');
        }
    }

function editTask() {
    if (currentTaskId) {
        window.location.href = `/tasks/${currentTaskId}/edit`;
    } else {
        alert('Edit task...');
    }
}

    function shareTask() {
        if (currentTaskId) {
            const url = window.location.origin + `/tasks/${currentTaskId}`;
            navigator.clipboard.writeText(url).then(() => {
                alert('Link task berhasil disalin!');
            });
        } else {
            alert('Bagikan task...');
        }
    }

    function deleteTask() {
        if (confirm('Apakah Anda yakin ingin menghapus task ini?')) {
            if (currentTaskId) {
                // Send delete request
                fetch(`/tasks/${currentTaskId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    alert('Task berhasil dihapus!');
                    closePopup();
                    location.reload();
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Gagal menghapus task');
                });
            } else {
                alert('Task dihapus!');
                closePopup();
            }
        }
    }

    // Functions for Liked Task Popup
    function applyToTask() {
        if (currentLikedTaskId) {
            window.location.href = `/tasks/${currentLikedTaskId}/apply`;
        } else {
            alert('Melamar ke task ini...');
        }
    }

    function unlikeTask() {
        if (confirm('Hapus dari daftar favorit?')) {
            if (currentLikedTaskId) {
                // Send unlike request
                fetch(`/tasks/${currentLikedTaskId}/unlike`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    alert('Dihapus dari favorit!');
                    closeLikedPopup();
                    location.reload();
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Gagal menghapus dari favorit');
                });
            } else {
                alert('Dihapus dari favorit!');
                closeLikedPopup();
            }
        }
    }

    function shareTaskLiked() {
        if (currentLikedTaskId) {
            const url = window.location.origin + `/tasks/${currentLikedTaskId}`;
            navigator.clipboard.writeText(url).then(() => {
                alert('Link task berhasil disalin!');
            });
        } else {
            alert('Bagikan task...');
        }
    }

    // Close on Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closePopup();
            closeLikedPopup();
        }
    });
</script>
@endsection