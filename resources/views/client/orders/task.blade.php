{{-- resources/views/tasks/create.blade.php --}}
@extends('layouts.app')

@section('content')
<!-- Main Content -->
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-8">
    <!-- Breadcrumb -->
    <nav class="flex mb-6 sm:mb-8" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-pink-600 transition">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <a href="" class="ml-1 text-sm font-medium text-gray-700 hover:text-pink-600 transition md:ml-2">Tasks</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Buat Task Baru</span>
                </div>
            </li>
        </ol>
    </nav>

    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 mb-2">Buat Task Baru</h1>
        <p class="text-sm sm:text-base text-gray-600">Posting project Anda dan dapatkan penawaran dari freelancer profesional</p>
    </div>

    @if ($errors->any())
        <div class="mb-6 bg-red-50 border-l-4 border-red-500 p-4 rounded-r-lg">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-red-800">Terdapat beberapa kesalahan:</h3>
                    <ul class="mt-2 text-sm text-red-700 list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endif

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="grid lg:grid-cols-3 gap-6 lg:gap-8">
            <!-- Main Form Section -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Card: Informasi Dasar -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <div class="flex items-center gap-3 mb-6 pb-4 border-b border-gray-200">
                        <div class="w-10 h-10 bg-pink-100 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-pink-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-lg font-bold text-gray-900">Informasi Dasar</h2>
                            <p class="text-sm text-gray-500">Detail utama tentang task Anda</p>
                        </div>
                    </div>

                    <div class="space-y-5">
                        <!-- Judul Task -->
                        <div>
                            <label for="judul" class="block text-sm font-semibold text-gray-700 mb-2">
                                Judul Task <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   name="judul" 
                                   id="judul"
                                   value="{{ old('judul') }}"
                                   placeholder="Contoh: Desain Logo untuk Brand Kopi" 
                                   required
                                   class="w-full px-4 py-3 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent transition @error('judul') border-red-500 @enderror">
                            @error('judul')
                                <p class="mt-1.5 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                            <p class="mt-1.5 text-xs text-gray-500">Buat judul yang jelas dan menarik perhatian</p>
                        </div>

                        <!-- Kategori/Jurusan -->
                        <div>
                            <label for="jurusan_id" class="block text-sm font-semibold text-gray-700 mb-2">
                                Kategori/Bidang <span class="text-red-500">*</span>
                            </label>
                            <select name="jurusan_id" 
                                    id="jurusan_id"
                                    required
                                    class="w-full px-4 py-3 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent transition @error('jurusan_id') border-red-500 @enderror">
                                <option value="">Pilih kategori yang sesuai</option>
                                @foreach($jurusans as $jurusan)
                                    <option value="{{ $jurusan->id_jurusan }}" {{ old('jurusan_id') == $jurusan->id_jurusan ? 'selected' : '' }}>
                                        {{ $jurusan->nama_jurusan }}
                                    </option>
                                @endforeach
                            </select>
                            @error('jurusan_id')
                                <p class="mt-1.5 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Deskripsi -->
                        <div>
                            <label for="deskripsi" class="block text-sm font-semibold text-gray-700 mb-2">
                                Deskripsi Task
                            </label>
                            <textarea name="deskripsi" 
                                      id="deskripsi"
                                      rows="6" 
                                      placeholder="Jelaskan detail task, requirement, ekspektasi hasil, dan informasi penting lainnya..."
                                      class="w-full px-4 py-3 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent transition resize-none @error('deskripsi') border-red-500 @enderror">{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
                                <p class="mt-1.5 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                            <p class="mt-1.5 text-xs text-gray-500">Semakin detail deskripsi, semakin mudah freelancer memahami kebutuhan Anda</p>
                        </div>
                    </div>
                </div>

                <!-- Card: Budget & Timeline -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <div class="flex items-center gap-3 mb-6 pb-4 border-b border-gray-200">
                        <div class="w-10 h-10 bg-pink-100 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-pink-600" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"/>
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-lg font-bold text-gray-900">Budget & Timeline</h2>
                            <p class="text-sm text-gray-500">Tentukan anggaran dan waktu pengerjaan</p>
                        </div>
                    </div>

                    <div class="grid sm:grid-cols-2 gap-5">
                        <!-- Budget -->
                        <div>
                            <label for="budget" class="block text-sm font-semibold text-gray-700 mb-2">
                                Budget (Rp)
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 text-sm font-medium">Rp</span>
                                </div>
                                <input type="text" 
                                       name="budget" 
                                       id="budget"
                                       value="{{ old('budget') }}"
                                       placeholder="1.000.000" 
                                       class="w-full pl-11 pr-4 py-3 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent transition @error('budget') border-red-500 @enderror">
                            </div>
                            @error('budget')
                                <p class="mt-1.5 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Deadline -->
                        <div>
                            <label for="deadline" class="block text-sm font-semibold text-gray-700 mb-2">
                                Deadline
                            </label>
                            <input type="date" 
                                   name="deadline" 
                                   id="deadline"
                                   value="{{ old('deadline') }}"
                                   min="{{ date('Y-m-d') }}"
                                   class="w-full px-4 py-3 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent transition @error('deadline') border-red-500 @enderror">
                            @error('deadline')
                                <p class="mt-1.5 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Waktu Estimasi -->
                        <div class="sm:col-span-2">
                            <label for="waktu_estimasi" class="block text-sm font-semibold text-gray-700 mb-2">
                                Estimasi Waktu Pengerjaan
                            </label>
                            <input type="text" 
                                   name="waktu_estimasi" 
                                   id="waktu_estimasi"
                                   value="{{ old('waktu_estimasi') }}"
                                   placeholder="Contoh: 2 minggu, 1 bulan, 3 hari"
                                   maxlength="50"
                                   class="w-full px-4 py-3 text-sm border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent transition @error('waktu_estimasi') border-red-500 @enderror">
                            @error('waktu_estimasi')
                                <p class="mt-1.5 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Card: Lampiran -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                    <div class="flex items-center gap-3 mb-6 pb-4 border-b border-gray-200">
                        <div class="w-10 h-10 bg-pink-100 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-pink-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-lg font-bold text-gray-900">Lampiran</h2>
                            <p class="text-sm text-gray-500">Upload gambar pendukung (opsional)</p>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-3">Upload Gambar/File</label>
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hover:border-pink-500 transition cursor-pointer bg-gray-50 @error('foto') border-red-500 @enderror">
                            <input type="file" 
                                   name="foto" 
                                   id="foto-upload"
                                   accept="image/*" 
                                   class="hidden">
                            <label for="foto-upload" class="cursor-pointer block">
                                <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-3">
                                    <svg class="w-8 h-8 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                    </svg>
                                </div>
                                <p class="text-sm font-medium text-gray-700 mb-1">Klik untuk upload atau drag & drop</p>
                                <p class="text-xs text-gray-500">PNG, JPG, GIF hingga 5MB</p>
                            </label>
                            <div id="file-preview" class="mt-4 hidden">
                                <div class="inline-flex items-center gap-2 bg-pink-50 border border-pink-200 rounded-lg px-4 py-2">
                                    <svg class="w-5 h-5 text-pink-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                                    </svg>
                                    <span id="file-name" class="text-sm text-gray-700 font-medium"></span>
                                    <button type="button" id="remove-file" class="text-red-500 hover:text-red-700">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        @error('foto')
                            <p class="mt-1.5 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Status Hidden -->
                <input type="hidden" name="status" value="open">
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="sticky top-24 space-y-6">
                    <!-- Tips Card -->
                    <div class="bg-gradient-to-br from-pink-50 to-purple-50 rounded-xl p-6 border border-pink-200">
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-5 h-5 text-pink-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"/>
                            </svg>
                            <h3 class="font-bold text-gray-900">Tips Membuat Task</h3>
                        </div>
                        <ul class="space-y-3 text-sm text-gray-700">
                            <li class="flex items-start gap-2">
                                <span class="text-pink-600 font-bold flex-shrink-0">✓</span>
                                <span>Tulis judul yang spesifik dan jelas</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-pink-600 font-bold flex-shrink-0">✓</span>
                                <span>Jelaskan requirement secara detail</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-pink-600 font-bold flex-shrink-0">✓</span>
                                <span>Set budget yang realistis</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <span class="text-pink-600 font-bold flex-shrink-0">✓</span>
                                <span>Upload reference jika ada</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Action Card -->
                    <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                        <h3 class="font-bold text-gray-900 mb-4">Publish Task</h3>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-gray-600">Status</span>
                                <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Open</span>
                            </div>
                            <div class="flex items-center justify-between text-sm">
                                <span class="text-gray-600">Visibilitas</span>
                                <span class="text-gray-900 font-medium">Publik</span>
                            </div>
                            <div class="pt-4 border-t border-gray-200 space-y-3">
                                <button type="submit" 
                                    class="w-full bg-gradient-to-r from-pink-600 to-pink-700 hover:from-pink-700 hover:to-pink-800 text-white font-bold py-3 rounded-lg shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition duration-200 active:scale-95">
                                    <span class="flex items-center justify-center gap-2">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd"/>
                                        </svg>
                                        Publish Task
                                    </span>
                                </button>
                                <button type="button" 
                                    onclick="window.history.back()"
                                    class="w-full bg-white hover:bg-gray-50 text-gray-700 font-semibold py-3 rounded-lg border border-gray-300 transition">
                                    Batal
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@push('scripts')
<script>
    // File upload preview
    const fileInput = document.getElementById('foto-upload');
    const filePreview = document.getElementById('file-preview');
    const fileName = document.getElementById('file-name');
    const removeFileBtn = document.getElementById('remove-file');

    fileInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            fileName.textContent = file.name;
            filePreview.classList.remove('hidden');
        }
    });

    removeFileBtn.addEventListener('click', function() {
        fileInput.value = '';
        filePreview.classList.add('hidden');
    });

    // Budget formatting
    const budgetInput = document.getElementById('budget');
    
    budgetInput.addEventListener('input', function(e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value) {
            // Format dengan thousand separator
            e.target.value = new Intl.NumberFormat('id-ID').format(value);
        }
    });

    // Remove formatting before submit
    document.querySelector('form').addEventListener('submit', function(e) {
        const rawValue = budgetInput.value.replace(/\./g, '');
        budgetInput.value = rawValue;
    });
</script>
@endpush
@endsection