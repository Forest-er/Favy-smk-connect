@extends('layouts.app')

@section('content')

    <div class="bg-white min-h-screen text-gray-800">
        <!-- Container -->
        <div class="max-w-[1100px] mx-auto px-8 py-10 grid grid-cols-1 md:grid-cols-3 gap-10">

            <!-- Left: Profile Info -->
            <!-- Wrapper kiri -->
            <div class="flex flex-col items-center">

                <!-- Kotak Profil -->
                <div class="rounded-2xl p-8 shadow-sm border border-pink-200 bg-white w-full">
                    @php
                        $users = Auth::user();
                    @endphp
                    <div class="flex flex-col items-center">
                        <!-- Avatar -->
                        <img 
                            src="{{ $users->foto 
                                    ? asset('storage/' . $users->foto) 
                                    : asset('images/profile.jpeg') }}" 
                            alt="Profile"
                            class="w-28 h-28 rounded-full bg-gradient-to-br from-pink-300 via-pink-400 to-rose-400 flex items-center justify-center text-white text-5xl font-bold shadow-md">

                        <!-- Name -->
                        <h2 class="mt-5 text-xl font-semibold text-gray-800">{{ $users->nama }}</h2>
                        <p class="text-gray-500 text-[15px]">{{ $users->email }}</p>
                    </div>

                    <hr class="my-6 border-pink-100">

                    <!-- Info List -->
                    <div class="space-y-4 text-[15px] mb-6">
                        <div class="flex items-center gap-3 text-gray-700">
                            <i class="bi bi-person-circle text-[18px] text-pink-500"></i>
                            {{ $users->role }}
                        </div>
                        <div class="flex items-center gap-3 text-gray-700">
                            <i class="bi bi-calendar3 text-[18px] text-pink-500"></i>
                            {{ $users->created_at }}
                        </div>
                        <div class="flex items-center gap-3 text-gray-700">
                            <i class="bi bi-briefcase text-[18px] text-pink-400"></i>
                            {{ $users->places }}
                        </div>
                    </div>

                    <p class="text-gray-500 text-sm leading-relaxed text-center">
                        {{ $users->bio?? "tidak ada bio" }}
                    </p>
                </div>

                <!-- Tombol Explore Fiverr di luar kotak (bawah vertikal) -->
                <button
                    class="mt-6 w-full py-3 border border-gray-300 rounded-xl hover:bg-gray-50 transition text-gray-800 font-medium flex items-center justify-center gap-2 shadow-sm">
                    Explore Fiverr
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </button>
            </div>




            <!-- Right: Profile Details -->
            <div class="md:col-span-2 space-y-8">

                <!-- Info Box -->
                <div
                    class="border border-pink-200 bg-gradient-to-r from-pink-50 via-rose-50 to-white rounded-2xl px-6 py-4 flex justify-between items-start shadow-sm">
                    <div class="flex gap-3">
                        <i class="bi bi-info-circle text-pink-500 text-xl mt-[2px]"></i>
                        <div>
                            <p class="text-[15px] font-medium text-gray-800">
                                This is your client profile
                            </p>
                            <p class="text-gray-600 text-[14px]">
                                For your freelancer profile click
                                <a href="{{ route('auth.register.freelancer') }}"
                                    class="text-pink-500 hover:underline">here</a>. or <a href="{{ route('login')}}" class="text-blue-500 hover:underline"> login </a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Breadcrumb -->
                <div class="flex justify-between items-center text-[14px] text-gray-500 mb-4">
                    <div>
                        <a href="/client/dashboard" class="text-gray-500 font-medium hover:text-gray-800">Home</a> /
                        <a href="/client/profile" class="text-gray-500 font-medium hover:text-gray-800">My Profile</a> /
                        <a href="/insert/task" class="text-gray-500 font-medium hover:text-gray-800">My Tasks</a>
                    </div>
                </div>

                <!-- Intro Section -->
                <div>
                    <h1 class="text-2xl font-semibold text-gray-800 flex items-center gap-2">
                        <span>👋</span> Hi, Let's help freelancers get to know you
                    </h1>
                    <p class="text-gray-600 mt-2 text-[15px] leading-relaxed">
                        Get the most out of Fiverr by sharing a bit more about yourself and how you prefer to work with
                        freelancers.
                    </p>
                </div>

                <!-- Profile Checklist -->
                <div class="border border-pink-200 rounded-2xl p-6 bg-white shadow-sm">
                    <h3 class="text-[17px] font-semibold text-gray-800 mb-5">Hai!!!, hari ini mau ngapain?</h3>

                    <!-- Checklist Cards -->
                    <div class="space-y-4">
                        <div
                            class="border border-pink-100 rounded-xl p-5 hover:shadow-md transition bg-gradient-to-br from-white to-pink-50/40">
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-gray-800 font-medium text-[15px]">Add details for your profile</p>
                                <button class="text-pink-500 text-[13px] hover:underline">Add</button>
                            </div>
                            <p class="text-gray-500 text-[13px]">
                                Upload a photo and info for a more tailored experience.
                            </p>
                        </div>

                        <div
                            class="border border-pink-100 rounded-xl p-5 hover:shadow-md transition bg-gradient-to-br from-white to-pink-50/40">
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-gray-800 font-medium text-[15px]">Set your communication preferences</p>
                                <button class="text-pink-500 text-[13px] hover:underline">Add</button>
                            </div>
                            <p class="text-gray-500 text-[13px]">
                                Let freelancers know your collaboration preferences.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Fullscreen Modal -->
    <div id="addDetailModal"
        class="fixed inset-0 bg-white z-50 hidden overflow-y-auto transition-all duration-300 ease-in-out">

        <!-- Header -->
        <div class="flex justify-between items-center px-6 py-4 border-b border-gray-200">
            <h2 class="text-lg font-semibold text-gray-800">Complete your business profile</h2>
            <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700 text-2xl leading-none">&times;</button>
        </div>

        <!-- Content -->
        <div class="max-w-2xl mx-auto px-5 py-8">
            <div class="text-center mb-8">
                <h1 class="text-2xl font-bold text-gray-900 mb-2">Tell us about your business ✨</h1>
                <p class="text-gray-500 text-sm">
                    Fill out the details below so we can personalize your experience.
                </p>
            </div>

            <!-- Card -->
            <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6">
                <!-- Avatar -->
                <div class="flex flex-col items-center mb-8">
                    <div class="relative w-20 h-20">
                    <img 
                        src="{{ $users->foto_profil ? asset('storage/' . $users->foto_profil) : asset('images/profile.jpeg') }}" 
                        alt="Foto Profil"
                        class="w-full h-full rounded-full object-cover shadow-md border-2 border-white"
                    >

                    <!-- Tombol edit -->
                    <button 
                        class="absolute bottom-0 right-0 bg-white p-1.5 rounded-full shadow hover:bg-gray-100 border border-gray-200 transition"
                        title="Ubah foto profil"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.232 5.232l3.536 3.536m-2.036-1.5A2.25 2.25 0 0118 8.25l.75.75a2.25 2.25 0 010 3.182l-7.5 7.5a2.25 2.25 0 01-1.591.659H6a.75.75 0 01-.75-.75v-3.659a2.25 2.25 0 01.659-1.591l7.5-7.5z" />
                        </svg>
                    </button>
                </div>

                    
                    <p class="mt-3 text-gray-700 font-medium text-sm">{{ $users->email }}</p>
                </div>

                <!-- Form -->
                <form class="space-y-6" 
                    action="{{ route('client.update') }}" 
                    method="POST" 
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <!-- Display Name -->
                    <div>
                        <label class="block text-gray-800 font-medium text-sm mb-1">Lebih suka dipanggil siapa??</label>
                        <input type="text" 
                            name="nama" 
                            value="{{ old('nama', $users->nama) }}"
                            placeholder="Masukkan nama panggilan"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-pink-400 focus:outline-none transition">
                    </div>

                    <!-- Description -->
                    <div>
                        <label class="block text-gray-800 font-medium text-sm mb-1">Tulis bio kamu disini</label>
                        <textarea name="bio" 
                                placeholder="bio kamu..."
                                class="w-full border border-gray-300 rounded-lg px-3 py-2 h-24 text-sm focus:ring-2 focus:ring-pink-400 focus:outline-none transition">{{ old('bio', $users->bio) }}</textarea>
                    </div>

                    <!-- Divider -->
                    <div class="border-t border-gray-100 pt-4">
                        <!-- Industry -->
                        <div class="mb-4">
                            <label class="block text-gray-800 font-medium text-sm mb-1">Nama kantor kamu</label>
                            <input type="text" 
                                name="places"
                                value="{{ old('places', $users->places) }}"
                                placeholder="PT Contoh ..."
                                class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-pink-400 focus:outline-none transition">
                        </div>
                    </div>

                    <!-- Submit -->
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-pink-500 to-rose-500 text-white py-2.5 rounded-lg font-semibold hover:opacity-90 transition">
                        Simpan Perubahan
                    </button>
                </form>

            </div>
        </div>
    </div>

    <!-- Fullscreen Modal -->
    <div id="commModal" class="fixed inset-0 bg-white z-50 hidden overflow-y-auto transition-all duration-300 ease-in-out">

        <!-- Header -->
        <div class="flex justify-between items-center px-6 py-4 border-b border-gray-200">
            <h2 class="text-lg font-semibold text-gray-800">Collaboration preferences</h2>
            <button onclick="closeCommModal()"
                class="text-gray-500 hover:text-gray-700 text-2xl leading-none">&times;</button>
        </div>

        <!-- Content -->
        <div class="max-w-2xl mx-auto px-5 py-8">
            <div class="text-center mb-8">
                <h1 class="text-2xl font-bold text-gray-900 mb-2">Share how you like to work 💬</h1>
                <p class="text-gray-500 text-sm">
                    Let freelancers know when and how you prefer to collaborate — it helps speed up communication.
                </p>
            </div>

            <!-- Card -->
            <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6 space-y-8">

                <!-- Communication Time Preferences -->
                <div>
                    <h2 class="text-base font-semibold text-gray-800 mb-3 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        When do you prefer to communicate with freelancers?
                    </h2>
                    <p class="text-gray-500 text-sm mb-4">
                        You may still receive messages at other times, but freelancers will be aware of your preferred days
                        and hours.
                    </p>

                    <!-- Preferred Days -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 mb-5">
                        <div>
                            <label class="block text-gray-800 font-medium text-sm mb-1">Start day</label>
                            <select
                                class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-pink-400 focus:outline-none transition">
                                <option>Monday</option>
                                <option>Tuesday</option>
                                <option>Wednesday</option>
                                <option>Thursday</option>
                                <option>Friday</option>
                                <option>Saturday</option>
                                <option>Sunday</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-800 font-medium text-sm mb-1">End day</label>
                            <select
                                class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-pink-400 focus:outline-none transition">
                                <option>Monday</option>
                                <option>Tuesday</option>
                                <option>Wednesday</option>
                                <option>Thursday</option>
                                <option>Friday</option>
                                <option>Saturday</option>
                                <option>Sunday</option>
                            </select>
                        </div>
                    </div>

                    <!-- Preferred Hours -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                        <div>
                            <label class="block text-gray-800 font-medium text-sm mb-1">Start time</label>
                            <select
                                class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-pink-400 focus:outline-none transition">
                                <option>08:00 AM</option>
                                <option>09:00 AM</option>
                                <option>10:00 AM</option>
                                <option>11:00 AM</option>
                                <option>12:00 PM</option>
                                <option>01:00 PM</option>
                                <option>02:00 PM</option>
                                <option>03:00 PM</option>
                                <option>04:00 PM</option>
                                <option>05:00 PM</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-800 font-medium text-sm mb-1">End time</label>
                            <select
                                class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-pink-400 focus:outline-none transition">
                                <option>04:00 PM</option>
                                <option>05:00 PM</option>
                                <option>06:00 PM</option>
                                <option>07:00 PM</option>
                                <option>08:00 PM</option>
                                <option>09:00 PM</option>
                                <option>10:00 PM</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-800 font-medium text-sm mb-1">Timezone</label>
                            <select
                                class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-pink-400 focus:outline-none transition">
                                <option>Asia/Jakarta</option>
                                <option>Asia/Singapore</option>
                                <option>Asia/Bangkok</option>
                                <option>Asia/Tokyo</option>
                                <option>Europe/London</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Language Section -->
                <div class="border-t border-gray-100 pt-6">
                    <h2 class="text-base font-semibold text-gray-800 mb-3 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-pink-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3v1m0 16v1m8-9h1M3 12H2m15.364-7.364l.707.707M6.343 17.657l-.707.707m12.728 0l.707-.707M6.343 6.343l-.707-.707" />
                        </svg>
                        Which languages do you speak?
                    </h2>

                    <p class="text-gray-500 text-sm mb-4">Find and work with freelancers who speak your language.</p>

                    <form class="space-y-3 max-w-[500px]">
                        <div>
                            <select
                                class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-700 focus:ring-2 focus:ring-pink-400 focus:outline-none">
                                <option value="">Select language</option>
                                <option>English</option>
                                <option>Indonesian</option>
                                <option>Japanese</option>
                                <option>Spanish</option>
                            </select>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-3">
                            <div class="flex-1">
                                <select
                                    class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-700 focus:ring-2 focus:ring-pink-400 focus:outline-none">
                                    <option value="">Proficiency</option>
                                    <option>Basic</option>
                                    <option>Intermediate</option>
                                    <option>Fluent</option>
                                    <option>Native</option>
                                </select>
                            </div>

                            <div class="flex-1">
                                <select
                                    class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-700 focus:ring-2 focus:ring-pink-400 focus:outline-none">
                                    <option value="">Communication preference</option>
                                    <option>Written only</option>
                                    <option>Spoken only</option>
                                    <option>Both written and spoken</option>
                                </select>
                            </div>
                        </div>

                        <div class="flex justify-end gap-2 pt-4">
                            <button type="button"
                                class="text-gray-600 px-3 py-1.5 rounded-lg hover:bg-gray-100 transition text-sm">Cancel</button>
                            <button type="submit"
                                class="bg-gray-900 text-white px-4 py-1.5 rounded-lg hover:bg-gray-800 transition text-sm">Add</button>
                        </div>
                    </form>
                </div>

                <!-- Footer -->
                <div class="flex justify-end border-t border-gray-100 pt-6 mt-6">
                    <button type="button" onclick="closeCommModal()"
                        class="px-4 py-1.5 bg-gray-100 hover:bg-gray-200 rounded-lg text-gray-700 font-medium mr-2 text-sm transition">
                        Cancel
                    </button>
                    <button type="submit"
                        class="px-5 py-1.5 bg-gradient-to-r from-pink-500 to-rose-500 text-white rounded-lg font-medium shadow hover:from-pink-600 hover:to-rose-600 text-sm transition">
                        Done
                    </button>
                </div>
            </div>
        </div>
    </div>

    </div>
    <script>
        function openModal() {
            document.getElementById('addDetailModal').classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }

        function closeModal() {
            document.getElementById('addDetailModal').classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        function openCommModal() {
            document.getElementById('commModal').classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }

        function closeCommModal() {
            document.getElementById('commModal').classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        // Event klik tombol Add untuk masing-masing section
        document.querySelectorAll('button.text-pink-500').forEach(btn => {
            btn.addEventListener('click', e => {
                e.preventDefault();
                const parentText = btn.closest('div').querySelector('p').innerText;

                if (parentText.includes('Add details for your profile')) {
                    openModal();
                } else if (parentText.includes('Set your communication preferences')) {
                    openCommModal();
                }
            });
        });
    </script>

@endsection