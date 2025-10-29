@extends('layouts.app')

@section('content')

<div class="bg-white min-h-screen text-gray-800">
    <div class="max-w-[1100px] mx-auto px-8 py-10">

        <!-- MOBILE VIEW (<768px) -->
        <div class="md:hidden space-y-10">
            @php $users = Auth::user(); @endphp

            <!-- 1. Breadcrumb -->
            <div class="flex justify-between items-center text-[14px] text-gray-500">
                <div>
                    <a href="/client/dashboard" class="text-gray-500 font-medium hover:text-gray-800">Home</a> /
                    <a href="/client/profile" class="text-gray-500 font-medium hover:text-gray-800">My Profile</a> /
                    <a href="/insert/task" class="text-gray-500 font-medium hover:text-gray-800">My Tasks</a>/
                    <a href="/client/task_show" class="text-gray-500 font-medium hover:text-gray-800">Task Show</a>
                </div>
            </div>

            <!-- 2. Info Box -->
            <div class="border border-pink-200 bg-gradient-to-r from-pink-50 via-rose-50 to-white rounded-2xl px-6 py-4 flex justify-between items-start shadow-sm">
                <div class="flex gap-3">
                    <i class="bi bi-info-circle text-pink-500 text-xl mt-[2px]"></i>
                    <div>
                            <p class="text-[15px] font-medium text-gray-800">
                                Hai {{ $users->nama }}, selamat datang di profil clientmu ✨
                            </p>
                            <p class="text-gray-600 text-[14px]">
                                Lengkapi profilmu agar klien bisa lebih mudah mengenal keahlianmu.
                            </p>
                        </div>
                </div>
            </div>

            <!-- 3. Intro Section -->
            <div>
                <h1 class="text-2xl font-semibold text-gray-800 flex items-center gap-2">
                    <span>👋</span> Perkenalkan dirimu pada freelancer
                </h1>
                <p class="text-gray-600 mt-2 text-[15px] leading-relaxed">Ceritakan sedikit tentang pengalaman, bidang usaha, atau cara komunikasi yang kamu sukai agar proses kolaborasi menjadi lebih lancar dan sesuai harapan.
                </p>
            </div>

            <!-- 4. Profil Pengguna -->
            <div class="flex flex-col items-center">
                <div class="rounded-2xl p-8 shadow-sm border border-pink-200 bg-white w-full">
                    <div class="flex flex-col items-center">
                        <img
                            src="{{ $users->foto_profil ? asset('storage/' . $users->foto_profil) : asset('images/profile.jpeg') }}"
                            alt="Profile"
                            class="w-28 h-28 rounded-full bg-gradient-to-br from-pink-300 via-pink-400 to-rose-400 flex items-center justify-center text-white text-5xl font-bold shadow-md">
                        <h2 class="mt-5 text-xl font-semibold text-gray-800">{{ $users->nama }}</h2>
                        <p class="text-gray-500 text-[15px]">{{ $users->email }}</p>
                    </div>

                    <hr class="my-6 border-pink-100">

                    <div class="space-y-4 text-[15px] mb-6">
                        <div class="flex items-center gap-3 text-gray-700">
                            <i class="bi bi-person-circle text-[18px] text-pink-500"></i>
                            {{ $users->role }}
                        </div>
                        <div class="flex items-center gap-3 text-gray-700">
                            <i class="bi bi-calendar3 text-[18px] text-pink-500"></i>
                            {{ $users->created_at->format('d M Y') }}
                        </div>
                        <div class="flex items-center gap-3 text-gray-700">
                            <i class="bi bi-briefcase text-[18px] text-pink-400"></i>
                            {{ $users->places }}
                        </div>
                    </div>

                    <p class="text-gray-500 text-sm leading-relaxed text-center">
                        {{ $users->bio ?? "tidak ada bio" }}
                    </p>
                </div>
            </div>

            <!-- 5. Profile Checklist -->
            <div class="border border-pink-200 rounded-2xl p-6 bg-white shadow-sm">
                <h3 class="text-[17px] font-semibold text-gray-800 mb-5">Hai!!!, hari ini mau ngapain?</h3>
                <div class="space-y-4">
                    <div class="border border-pink-100 rounded-xl p-5 hover:shadow-md transition bg-gradient-to-br from-white to-pink-50/40">
                        <div class="flex justify-between items-center mb-1">
                            <p class="text-gray-800 font-medium text-[15px]">Tambahkan detail profilmu</p>
                            <button class="text-pink-500 text-[13px] hover:underline">Tambah</button>
                        </div>
                        <p class="text-gray-500 text-[13px]">UUnggah foto dan info untuk pengalaman yang lebih sesuai.</p>
                    </div>
                </div>
            </div>

            <!-- 6. Tombol "Lihat Dashboard" – DI BAWAH CHECKLIST -->
            <button
                onclick="window.location.href='/client/dashboard'"
                class="w-full py-3 border border-gray-300 rounded-xl hover:bg-gray-50 transition text-gray-800 font-medium flex items-center justify-center gap-2 shadow-sm">
                Lihat Dashboard
                <i class="bi bi-arrow-right-circle"></i>
            </button>
        </div>

        <!-- DESKTOP VIEW (md and up) – TIDAK BERUBAH SAMA SEKALI -->
        <div class="hidden md:grid md:grid-cols-3 gap-10">
            <!-- Left: Profile Info + Tombol (asli) -->
            <div class="flex flex-col items-center">
                <div class="rounded-2xl p-8 shadow-sm border border-pink-200 bg-white w-full">
                    @php $users = Auth::user(); @endphp
                    <div class="flex flex-col items-center">
                        <img
                            src="{{ $users->foto_profil ? asset('storage/' . $users->foto_profil) : asset('images/profile.jpeg') }}"
                            alt="Profile"
                            class="w-28 h-28 rounded-full bg-gradient-to-br from-pink-300 via-pink-400 to-rose-400 flex items-center justify-center text-white text-5xl font-bold shadow-md">
                        <h2 class="mt-5 text-xl font-semibold text-gray-800">{{ $users->nama }}</h2>
                        <p class="text-gray-500 text-[15px]">{{ $users->email }}</p>
                    </div>

                    <hr class="my-6 border-pink-100">

                    <div class="space-y-4 text-[15px] mb-6">
                        <div class="flex items-center gap-3 text-gray-700">
                            <i class="bi bi-person-circle text-[18px] text-pink-500"></i>
                            {{ $users->role }}
                        </div>
                        <div class="flex items-center gap-3 text-gray-700">
                            <i class="bi bi-calendar3 text-[18px] text-pink-500"></i>
                            {{ $users->created_at->format('d M Y') }}
                        </div>
                        <div class="flex items-center gap-3 text-gray-700">
                            <i class="bi bi-briefcase text-[18px] text-pink-400"></i>
                            {{ $users->places }}
                        </div>
                    </div>

                    <p class="text-gray-500 text-sm leading-relaxed text-center">
                        {{ $users->bio ?? "tidak ada bio" }}
                    </p>
                </div>

                <!-- Tombol asli – hanya muncul di desktop -->
                <button
                    onclick="window.location.href='/client/dashboard'"
                    class="mt-6 w-full py-3 border border-gray-300 rounded-xl hover:bg-gray-50 transition text-gray-800 font-medium flex items-center justify-center gap-2 shadow-sm">
                    Lihat Dashboard
                    <i class="bi bi-arrow-right-circle"></i>
                </button>
            </div>

            <!-- Right: Profile Details -->
            <div class="md:col-span-2 space-y-8">
                <!-- Info Box -->
                <div class="border border-pink-200 bg-gradient-to-r from-pink-50 via-rose-50 to-white rounded-2xl px-6 py-4 flex justify-between items-start shadow-sm">
                    <div class="flex gap-3">
                    <i class="bi bi-info-circle text-pink-500 text-xl mt-[2px]"></i>
                        <div>
                            <p class="text-[15px] font-medium text-gray-800">
                                Hai {{ $users->nama }}, selamat datang di profil clientmu ✨
                            </p>
                            <p class="text-gray-600 text-[14px]">
                                Lengkapi profilmu agar klien bisa lebih mudah mengenal keahlianmu.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Breadcrumb -->
                <div class="flex justify-between items-center text-[14px] text-gray-500">
                    <div>
                        <a href="/client/dashboard" class="text-gray-500 font-medium hover:text-gray-800">Home</a> /
                        <a href="/client/profile" class="text-gray-500 font-medium hover:text-gray-800">My Profile</a> /
                        <a href="/insert/task" class="text-gray-500 font-medium hover:text-gray-800">My Tasks</a>/
                        <a href="/client/task_show" class="text-gray-500 font-medium hover:text-gray-800">Tugas Saya</a>
                    </div>
                </div>

                <!-- Intro Section -->
                <div>
                    <h1 class="text-2xl font-semibold text-gray-800 flex items-center gap-2">
                        <span>👋</span> Perkenalkan dirimu pada freelancer
                    </h1>
                    <p class="text-gray-600 mt-2 text-[15px] leading-relaxed">
                        Ceritakan sedikit tentang pengalaman, bidang usaha, atau cara komunikasi yang kamu sukai agar proses kolaborasi menjadi lebih lancar dan sesuai harapan.
                    </p>
                </div>

                <!-- Profile Checklist -->
                <div class="border border-pink-200 rounded-2xl p-6 bg-white shadow-sm">
                    <h3 class="text-[17px] font-semibold text-gray-800 mb-5">Hai!!!, hari ini mau ngapain?</h3>
                    <div class="space-y-4">
                        <div class="border border-pink-100 rounded-xl p-5 hover:shadow-md transition bg-gradient-to-br from-white to-pink-50/40">
                            <div class="flex justify-between items-center mb-1">
                                <p class="text-gray-800 font-medium text-[15px]">Tambahkan detail profilmu</p>
                                <button class="text-pink-500 text-[13px] hover:underline">Tambah</button>
                            </div>
                            <p class="text-gray-500 text-[13px]">Unggah foto dan info untuk pengalaman yang lebih sesuai.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal dan Script (tidak berubah) -->
<div id="addDetailModal" class="fixed inset-0 bg-white z-50 hidden overflow-y-auto transition-all duration-300 ease-in-out">
    <div class="max-w-2xl mx-auto px-5 py-4 border-b border-gray-200 flex justify-between items-center">
        <!-- Header modal disamakan padding horizontal dengan form -->
        <h2 class="text-lg font-semibold text-gray-800">Lengkapi profil bisnismu</h2>
        <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700 text-2xl leading-none">&times;</button>
    </div>
    <div class="max-w-2xl mx-auto px-5 py-8">
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-gray-900 mb-2">Ceritakan tentang bisnismu ✨</h1>
            <p class="text-gray-500 text-sm">Isi detail di bawah ini agar kami bisa menyesuaikan pengalamanmu.</p>
        </div>
        <div class="bg-white border border-gray-200 rounded-xl shadow-md p-6">
            <div class="flex flex-col items-center mb-8">
                <div class="relative w-20 h-20">
                    <img id="previewFoto"
                        src="{{ Auth::user()->foto_profil ? asset('storage/' . Auth::user()->foto_profil) : asset('images/profile.jpeg') }}"
                        alt="Foto Profil"
                        class="w-full h-full rounded-full object-cover shadow-md border-2 border-white">
                    <button type="button" onclick="document.getElementById('fotoInput').click()"
                        class="absolute bottom-0 right-0 bg-white p-1.5 rounded-full shadow hover:bg-gray-100 border border-gray-200 transition"
                        title="Ubah foto profil">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-1.5A2.25 2.25 0 0118 8.25l.75.75a2.25 2.25 0 010 3.182l-7.5 7.5a2.25 2.25 0 01-1.591.659H6a.75.75 0 01-.75-.75v-3.659a2.25 2.25 0 01.659-1.591l7.5-7.5z" />
                        </svg>
                    </button>
                </div>
                <p class="mt-3 text-gray-700 font-medium text-sm">{{ Auth::user()->email }}</p>
            </div>
            <form class="space-y-6" action="{{ route('client.update') }}" method="POST" enctype="multipart/form-data">
                @csrf @method('PUT')
                <input type="file" name="foto_profil" id="fotoInput" accept="image/*" class="hidden" onchange="previewImage(event)">
                <div>
                    <label class="block text-gray-800 font-medium text-sm mb-1">Lebih suka dipanggil siapa??</label>
                    <input type="text" name="nama" value="{{ old('nama', Auth::user()->nama) }}" placeholder="Masukkan nama panggilan"
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-pink-400 focus:outline-none transition">
                </div>
                <div>
                    <label class="block text-gray-800 font-medium text-sm mb-1">Tulis bio kamu disini</label>
                    <textarea name="bio" placeholder="bio kamu..."
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 h-24 text-sm focus:ring-2 focus:ring-pink-400 focus:outline-none transition">{{ old('bio', Auth::user()->bio) }}</textarea>
                </div>
                <div class="border-t border-gray-100 pt-4">
                    <div class="mb-4">
                        <label class="block text-gray-800 font-medium text-sm mb-1">Nama kantor kamu</label>
                        <input type="text" name="places" value="{{ old('places', Auth::user()->places) }}" placeholder="PT Contoh ..."
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm focus:ring-2 focus:ring-pink-400 focus:outline-none transition">
                    </div>
                </div>
                <button type="submit" class="w-full bg-gradient-to-r from-pink-500 to-rose-500 text-white py-2.5 rounded-lg font-semibold hover:opacity-90 transition">
                    Simpan Perubahan
                </button>
            </form>
        </div>
    </div>
</div>


<div id="commModal" class="fixed inset-0 bg-white z-50 hidden overflow-y-auto transition-all duration-300 ease-in-out">
    <!-- ... (tidak diubah) ... -->
</div>

<script>
    function previewImage(event) {
        const file = event.target.files[0];
        const preview = document.getElementById('previewFoto');
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    }

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

    document.querySelectorAll('button.text-pink-500').forEach(btn => {
    btn.addEventListener('click', e => {
        e.preventDefault();
        openModal();
    });
});
</script>

@endsection

