@extends('layouts.app')
@section('title', 'SMK-connect|freelancer')
@section('content')

  <div class="max-w-7xl mx-auto px-6 py-8">

    <!-- Hero Section -->
    <div class="relative rounded-3xl mb-10 overflow-hidden shadow-2xl">
      <div class="absolute inset-0">
        <div
          class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1504384308090-c894fdcc538d')] bg-cover bg-center opacity-100 slide">
        </div>
        <div
          class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d')] bg-cover bg-center opacity-0 slide">
        </div>
        <div
          class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f')] bg-cover bg-center opacity-0 slide">
        </div>
        <div class="absolute inset-0 bg-gradient-to-r from-purple-900/80 via-purple-800/70 to-indigo-900/80"></div>
      </div>

      <div class="relative z-10 p-10 md:p-14">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
          <div>
            <div class="inline-block px-4 py-1 bg-white/20 backdrop-blur-sm rounded-full text-white text-sm mb-4">
              @php
                $hour = now()->format('H');
                $greeting = $hour < 12 ? 'Good Morning' : ($hour < 18 ? 'Good Afternoon' : 'Good Evening');
              @endphp
              <i class="bi bi-sun"></i> {{ $greeting }}
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-3">Haloww, {{ Auth::user()->nama }} 👋</h1>
            <p class="text-white/90 text-lg">Kamu punya {{ $OrderedTask }} projek yang lagi dikerjain nihh</p>
          </div>

          <div class="flex flex-col gap-3">
            <div class="bg-white/20 backdrop-blur-sm rounded-2xl p-4 text-white">
              <p class="text-sm opacity-90">This Month Earnings</p>
              <p class="text-3xl font-bold">Rp 8.750.000</p>
              <p class="text-sm mt-1"><span class="text-green-300">↑ 15%</span> from last month</p>
            </div>
          </div>
        </div>

        <div class="mt-8 flex gap-3">
          <div class="relative flex-1">
            <form method="GET">
              <div class="flex flex-row">
                <input type="text" placeholder="Search projects, clients, or skills..." name="keyword"
                  class="w-full pl-14 pr-5 py-4 rounded-l-2xl border-0 focus:ring-2 focus:ring-purple-400 shadow-lg text-gray-700">
                <button type="submit" class="rounded-r-2xl bg-white text-white px-4 py-2 hover:bg-purple-600 transition">
                  <i class="bi bi-search left-5 top-1/2 -translate-y-1/2 text-gray-400 text-lg"></i>
                </button>
              </div>
            </form>
          </div>
          <button type="submit"
            class="bg-white hover:bg-gray-50 text-purple-700 font-semibold px-8 py-4 rounded-2xl shadow-lg transition flex items-center gap-2">
            <i class="bi bi-funnel"></i> Filters
          </button>
        </div>
      </div>
    </div>

    <script>
      const slides = document.querySelectorAll('.slide');
      let current = 0;
      setInterval(() => {
        slides[current].classList.remove('opacity-100');
        slides[current].classList.add('opacity-0');
        current = (current + 1) % slides.length;
        slides[current].classList.remove('opacity-0');
        slides[current].classList.add('opacity-100');
      }, 5000);
    </script>

    <!-- Quick Stats -->
    <section class="mb-12">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="stat-card bg-white rounded-2xl p-6 shadow-lg card-hover border border-gray-100">
          <div class="flex items-start justify-between mb-4">
            <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center">
              <i class="bi bi-briefcase text-blue-600 text-xl"></i>
            </div>
            <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-full">+2 this week</span>
          </div>
          <p class="text-gray-500 text-sm mb-1 font-medium">Active Projects</p>
          <p class="text-4xl font-bold text-gray-900 mb-2">{{ $OrderedTask }}</p>
        </div>

        <div class="stat-card bg-white rounded-2xl p-6 shadow-lg card-hover border border-gray-100">
          <div class="flex items-start justify-between mb-4">
            <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center">
              <i class="bi bi-wallet2 text-green-600 text-xl"></i>
            </div>
            <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-full">+15%</span>
          </div>
          <p class="text-gray-500 text-sm mb-1 font-medium">Total Earnings</p>
          <p class="text-4xl font-bold text-gray-900 mb-2">Rp12.5M</p>
          <p class="text-xs text-gray-500">Rp2.5M this month</p>
        </div>

        <div class="stat-card bg-white rounded-2xl p-6 shadow-lg card-hover border border-gray-100">
          <div class="flex items-start justify-between mb-4">
            <div class="w-12 h-12 rounded-xl bg-purple-50 flex items-center justify-center">
              <i class="bi bi-check-circle text-purple-600 text-xl"></i>
            </div>
            <span class="text-xs font-semibold text-blue-600 bg-blue-50 px-2 py-1 rounded-full">All time</span>
          </div>
          <p class="text-gray-500 text-sm mb-1 font-medium">Completed</p>
          <p class="text-4xl font-bold text-gray-900 mb-2">{{ $CompletedTask }}</p>
          <p class="text-xs text-gray-500">100% on-time delivery</p>
        </div>

        <div class="stat-card bg-white rounded-2xl p-6 shadow-lg card-hover border border-gray-100">
          <div class="flex items-start justify-between mb-4">
            <div class="w-12 h-12 rounded-xl bg-yellow-50 flex items-center justify-center">
              <i class="bi bi-star-fill text-yellow-500 text-xl"></i>
            </div>
            <span class="text-xs font-semibold text-yellow-600 bg-yellow-50 px-2 py-1 rounded-full">Top rated</span>
          </div>
          <p class="text-gray-500 text-sm mb-1 font-medium">Success Rate</p>
          <p class="text-4xl font-bold text-gray-900 mb-2">98%</p>
          <div class="flex items-center text-xs text-yellow-500">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <span class="ml-2 text-gray-500">(4.9/5.0)</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Available Projects -->
    <section class="mb-12">
      <div class="flex justify-between items-center mb-6">
        <div>
          <h2 class="text-2xl font-bold text-gray-900">Featured Opportunities</h2>
          <p class="text-gray-500 text-sm mt-1">Hand-picked projects matching your skills</p>
        </div>
        <a href="{{ route('worker.dashboard') }}"
          class="text-purple-600 hover:text-purple-700 font-semibold text-sm flex items-center gap-2 transition">
          View All <i class="bi bi-arrow-right"></i>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($tasks as $task)
          <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover border border-gray-100">
            <div class="relative">
              <img src="{{ asset('storage/' . $task->foto) }}"
                onerror="this.src='https://images.pexels.com/photos/1181244/pexels-photo-1181244.jpeg'"
                class="w-full h-48 object-cover">
              <div class="absolute top-4 right-4">
                <span class="project-badge bg-purple-600 text-white">
                  <i class="bi bi-lightning-charge-fill"></i> {{ $task->jurusan->nama_jurusan }}
                </span>
              </div>
            </div>
            <div class="p-6">
              <div class="flex items-center gap-2 mb-3">
                <img src="https://i.pravatar.cc/30?img=1" class="w-8 h-8 rounded-full ring-2 ring-gray-100">
                <div>
                  <p class="text-sm font-semibold text-gray-800">{{ $task->user->nama }}</p>
                  <div class="flex items-center text-xs text-gray-500">
                    <i class="bi bi-star-fill text-yellow-400 text-[10px]"></i>
                    <span class="ml-1">4.9</span>
                    <span class="mx-1">•</span>
                    <span>Indonesia</span>
                  </div>
                </div>
              </div>

              <h3 class="font-bold text-lg mb-2 text-gray-900">{{ $task->judul }}</h3>
              <p class="text-sm text-gray-600 mb-4 line-clamp-2">{{ $task->deskripsi }}</p>

              <div class="flex flex-wrap gap-2 mb-4">
                <span
                  class="text-xs bg-gray-100 text-gray-700 px-3 py-1 rounded-full">{{ $task->jurusan->deskripsi_2 }}</span>
                <span
                  class="text-xs bg-gray-100 text-gray-700 px-3 py-1 rounded-full">{{ $task->jurusan->deskripsi_3 }}</span>
              </div>

              <div class="flex items-center justify-between mb-4 pb-4 border-b border-gray-100">
                <div>
                  <p class="text-xs text-gray-500">Budget</p>
                  <p class="text-xl font-bold text-gray-900">{{ $task->budget }}</p>
                </div>
                <div class="text-right">
                  <p class="text-xs text-gray-500">Deadline</p>
                  <p class="text-sm font-semibold text-gray-800">{{ $task->deadline }}</p>
                </div>
              </div>

              <button
                onclick="openPopup('{{ $task->judul }}', '{{ $task->user->nama }}', '{{ $task->deadline }}', '{{ $task->budget }}')"
                class="w-full bg-gradient-to-r from-purple-600 bottom-0 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white font-semibold py-3 rounded-xl transition shadow-lg shadow-purple-200">
                Apply Now
              </button>
            </div>
          </div>
        @empty
          <p class="text-gray-500">No available projects at the moment. Please check back later.</p>
        @endforelse
      </div>

      <!-- Pagination -->
      <div class="mt-8">
        {{ $tasks->links('pagination::tailwind') }}
      </div>
    </section>

    <!-- Progress & Achievements -->
    <section class="mb-12">
      <div class="flex justify-between items-center mb-6">
        <div>
          <h2 class="text-2xl font-bold text-gray-900">Your Progress</h2>
          <p class="text-gray-500 text-sm mt-1">Track your achievements and goals</p>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 card-hover">
          <div class="flex items-center justify-between mb-4">
            <div>
              <p class="text-gray-900 font-semibold text-lg">Profile Completion</p>
              <p class="text-sm text-gray-500 mt-1">Keep your profile updated</p>
            </div>
            <div class="w-16 h-16 rounded-full bg-purple-50 flex items-center justify-center">
              <span class="text-2xl font-bold text-purple-600">85%</span>
            </div>
          </div>
          <div class="w-full bg-gray-100 rounded-full h-3">
            <div class="bg-gradient-to-r from-purple-600 to-indigo-600 h-3 rounded-full shimmer" style="width: 85%"></div>
          </div>
          <p class="text-xs text-gray-500 mt-3">Add 3 more skills to reach 100%</p>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 card-hover">
          <div class="flex items-center justify-between mb-4">
            <div>
              <p class="text-gray-900 font-semibold text-lg">Client Satisfaction</p>
              <p class="text-sm text-gray-500 mt-1">Based on 23 reviews</p>
            </div>
            <div class="w-16 h-16 rounded-full bg-blue-50 flex items-center justify-center">
              <span class="text-2xl font-bold text-blue-600">4.9</span>
            </div>
          </div>
          <div class="w-full bg-gray-100 rounded-full h-3">
            <div class="bg-gradient-to-r from-blue-600 to-cyan-600 h-3 rounded-full shimmer" style="width: 98%"></div>
          </div>
          <div class="flex items-center gap-1 mt-3">
            <i class="bi bi-star-fill text-yellow-400 text-sm"></i>
            <i class="bi bi-star-fill text-yellow-400 text-sm"></i>
            <i class="bi bi-star-fill text-yellow-400 text-sm"></i>
            <i class="bi bi-star-fill text-yellow-400 text-sm"></i>
            <i class="bi bi-star-fill text-yellow-400 text-sm"></i>
            <span class="text-xs text-gray-500 ml-2">Excellent rating</span>
          </div>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 card-hover">
          <div class="flex items-center justify-between mb-4">
            <div>
              <p class="text-gray-900 font-semibold text-lg">Monthly Goal</p>
              <p class="text-sm text-gray-500 mt-1">Rp8.75M / Rp12.5M</p>
            </div>
            <div class="w-16 h-16 rounded-full bg-green-50 flex items-center justify-center">
              <span class="text-2xl font-bold text-green-600">70%</span>
            </div>
          </div>
          <div class="w-full bg-gray-100 rounded-full h-3">
            <div class="bg-gradient-to-r from-green-600 to-emerald-600 h-3 rounded-full shimmer" style="width: 70%"></div>
          </div>
          <p class="text-xs text-gray-500 mt-3">Rp3.75M left to reach your goal</p>
        </div>
      </div>
    </section>

    <!-- Trusted Companies -->
    <section class="mb-12">
      <div class="bg-white rounded-2xl p-10 shadow-lg border border-gray-100">
        <h2 class="text-2xl font-bold text-center mb-3 text-gray-900">Trusted by Leading Companies</h2>
        <p class="text-center text-gray-500 mb-10">Join thousands of freelancers working with top brands</p>
        <div class="flex flex-wrap justify-center items-center gap-12">
          <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo_Tokopedia.svg"
            class="h-8 grayscale hover:grayscale-0 transition opacity-60 hover:opacity-100">
          <img src="https://upload.wikimedia.org/wikipedia/commons/2/29/Shopee_logo.svg"
            class="h-8 grayscale hover:grayscale-0 transition opacity-60 hover:opacity-100">
          <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/GoTo_Logo.svg"
            class="h-8 grayscale hover:grayscale-0 transition opacity-60 hover:opacity-100">
          <img src="https://upload.wikimedia.org/wikipedia/commons/3/3f/Bukalapak_logo.svg"
            class="h-8 grayscale hover:grayscale-0 transition opacity-60 hover:opacity-100">
        </div>
      </div>
    </section>
  </div>

  <!-- Project Details Popup -->
  <!-- Overlay -->
  <div id="overlay" class="fixed inset-0 bg-black/60 backdrop-blur-sm hidden z-40 transition-opacity"
    onclick="closePopup()"></div>

  <!-- Popup Panel -->
  <div id="rightPopup" class="fixed top-0 right-0 h-full w-[70%] bg-white shadow-2xl transform translate-x-full 
           transition-transform duration-500 ease-in-out z-50 overflow-y-auto rounded-l-3xl">

    <!-- HEADER -->
    <div class="sticky top-0 bg-white border-b border-gray-100 p-6 flex justify-between items-center z-10">
      <h3 id="popupHeader" class="text-xl font-bold text-gray-900">Project Details</h3>
      <button onclick="closePopup()"
        class="w-10 h-10 rounded-full hover:bg-gray-100 flex items-center justify-center transition">
        <i class="bi bi-x-lg text-gray-600"></i>
      </button>
    </div>

    <!-- MAIN CONTENT -->
    <div class="p-6 flex flex-col lg:flex-row gap-6">

      <!-- LEFT COLUMN -->
      <div class="flex-1 space-y-6">

      <!-- STEP 1 -->
<div id="step1">
  <div class="bg-gradient-to-br from-purple-50 to-indigo-50 rounded-2xl p-6 mb-6">

    <!-- Project Image -->
    <div class="mb-4">
      <img src="https://via.placeholder.com/600x300" alt="Project Image" class="w-full h-60 object-cover rounded-2xl">
    </div>

    <!-- Project Title -->
    <h2 id="popupTitle" class="text-2xl font-bold text-gray-900 mb-4">UI Design for App</h2>

    <div class="flex items-center gap-3 mb-4">
      <img src="https://i.pravatar.cc/40?img=1" class="w-12 h-12 rounded-full ring-2 ring-white" alt="Client">
      <div>
        <p id="popupClient" class="font-semibold text-gray-900">Nova Tech</p>
        <div class="flex items-center text-sm text-gray-600">
          <i class="bi bi-star-fill text-yellow-400 text-xs"></i>
          <span class="ml-1">4.9 (120 reviews)</span>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-2 gap-4">
      <div class="bg-white rounded-xl p-4">
        <p class="text-xs text-gray-500 mb-1">Budget</p>
        <p id="popupBudget" class="text-xl font-bold text-gray-900">Rp2.000.000</p>
      </div>
      <div class="bg-white rounded-xl p-4">
        <p class="text-xs text-gray-500 mb-1">Deadline</p>
        <p id="popupDeadline" class="text-xl font-bold text-gray-900">20 Nov 2025</p>
      </div>
    </div>
  </div>

  <!-- DESCRIPTION -->
  <div class="mb-6">
    <h4 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
      <i class="bi bi-file-text text-purple-600"></i> Project Description
    </h4>
    <p class="text-gray-600 leading-relaxed">
      Design a clean, minimal, and modern mobile app interface for our new product launch...
    </p>
  </div>

  <!-- REQUIREMENTS -->
  <div class="mb-6">
    <h4 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
      <i class="bi bi-check-square text-purple-600"></i> Requirements
    </h4>
    <ul class="space-y-2">
      <li class="flex items-start gap-2 text-gray-600">
        <i class="bi bi-check-circle-fill text-green-500 mt-1"></i> 3+ years experience in UI/UX design
      </li>
      <li class="flex items-start gap-2 text-gray-600">
        <i class="bi bi-check-circle-fill text-green-500 mt-1"></i> Proficiency in Figma and Adobe XD
      </li>
      <li class="flex items-start gap-2 text-gray-600">
        <i class="bi bi-check-circle-fill text-green-500 mt-1"></i> Strong portfolio of mobile app designs
      </li>
      <li class="flex items-start gap-2 text-gray-600">
        <i class="bi bi-check-circle-fill text-green-500 mt-1"></i> Ability to work independently and meet
        deadlines
      </li>
    </ul>
  </div>

  <!-- SKILLS -->
  <div class="mb-6">
    <h4 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
      <i class="bi bi-tag text-purple-600"></i> Skills Required
    </h4>
    <div class="flex flex-wrap gap-2">
      <span class="px-3 py-2 bg-purple-50 text-purple-700 rounded-lg text-sm font-medium">UI Design</span>
      <span class="px-3 py-2 bg-purple-50 text-purple-700 rounded-lg text-sm font-medium">UX Design</span>
      <span class="px-3 py-2 bg-purple-50 text-purple-700 rounded-lg text-sm font-medium">Figma</span>
      <span class="px-3 py-2 bg-purple-50 text-purple-700 rounded-lg text-sm font-medium">Adobe XD</span>
      <span class="px-3 py-2 bg-purple-50 text-purple-700 rounded-lg text-sm font-medium">Mobile Design</span>
    </div>
  </div>
</div>

        <!-- STEP 2 -->
        <div id="step2" class="hidden">
          <h3 class="font-semibold text-gray-900 mb-4">Fill Proposal Details</h3>

          <form id="proposalForm" action="https://formspree.io/f/mjkvkavj" method="POST" enctype="multipart/form-data"
            class="space-y-3">


            <label class="block text-gray-700 font-medium">Nama</label>
            <input type="text" name="name" placeholder="Masukkan Nama Anda" required class="w-full p-3 border rounded-lg">
            <label class="block text-gray-700 font-medium">Email</label>
            <input type="email" name="email" placeholder="Masukkan Email Anda" required class="w-full p-3 border rounded-lg">
            <label class="block text-gray-700 font-medium">Deskripsi</label>
            <textarea name="message" placeholder="Masukkan Deskripsi Proposal / Portofolio" required
              class="w-full p-3 border rounded-lg"></textarea>

            <label class="block text-gray-700 font-medium">Link CV (Google Drive / Dropbox)</label>
            <input type="url" name="cv_link" placeholder="Masukkan link CV Anda" required
              class="w-full p-3 border rounded-lg">

            <button type="submit"
              class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 
                     text-white font-semibold py-4 rounded-xl transition shadow-lg flex items-center justify-center gap-2">
              <i class="bi bi-send"></i> Submit Proposal
            </button>

            <div id="formNotif" class="hidden text-green-600 font-semibold mt-2">
              Proposal berhasil dikirim!
            </div>
          </form>

          <button onclick="backToStep1()"
            class="w-full bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold py-3 rounded-xl transition mt-2">
            Back
          </button>
        </div>
      </div>

      <!-- RIGHT SIDEBAR -->
      <div class="hidden lg:block lg:w-[360px] space-y-6">

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

        <!-- Actions -->
        <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100 space-y-3">
          <button onclick="goToStep2()" class="w-full bg-gradient-to-r from-pink-500 to-purple-600 hover:from-pink-600 hover:to-purple-700 
                         text-white font-bold py-4 rounded-xl transition shadow-lg shadow-purple-200 
                         flex items-center justify-center gap-2">
            <i class="bi bi-send-fill"></i> Request to Order
          </button>

          <button class="w-full border-2 border-pink-400 text-pink-600 hover:bg-pink-50 font-semibold py-4 
                         rounded-xl flex items-center justify-center gap-2 transition">
            <i class="bi bi-heart"></i> Save Project
          </button>

          <button class="w-full border-2 border-gray-300 text-gray-700 hover:bg-gray-50 font-semibold py-4 
                         rounded-xl flex items-center justify-center gap-2 transition">
            <i class="bi bi-share"></i> Share
          </button>
        </div>

        <!-- About Freelancer -->
        <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
          <h5 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
            <i class="bi bi-person-circle text-purple-600"></i> About Freelancer
          </h5>
          <p class="text-gray-700 text-sm leading-relaxed mb-4">
            Experienced professional with a passion for delivering high-quality work. Committed to meeting deadlines and
            exceeding client expectations.
          </p>

          <div class="space-y-3 pt-4 border-t border-gray-100">
            <div class="flex items-center justify-between text-sm">
              <span class="text-gray-600">Member since</span>
              <span class="font-semibold text-gray-900">Jan 2022</span>
            </div>
            <div class="flex items-center justify-between text-sm">
              <span class="text-gray-600">Completed projects</span>
              <span class="font-semibold text-gray-900">35</span>
            </div>
            <div class="flex items-center justify-between text-sm">
              <span class="text-gray-600">Success rate</span>
              <span class="font-semibold text-green-600">98%</span>
            </div>
          </div>

          <a href="/client/explore.show"
            class="mt-4 inline-flex items-center gap-2 text-purple-600 font-semibold text-sm hover:text-purple-700 transition">
            View Full Profile <i class="bi bi-arrow-right"></i>
          </a>
        </div>

        <!-- Contact -->
        <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
          <h5 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
            <i class="bi bi-envelope text-purple-600"></i> Contact
          </h5>
          <button
            class="w-full bg-gray-100 hover:bg-gray-200 text-gray-800 font-semibold py-3 rounded-xl transition flex items-center justify-center gap-2">
            <i class="bi bi-chat-dots"></i> Send Message
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- SCRIPT -->
  <script>
    function openPopup(title, client, deadline, budget) {
      document.getElementById('popupTitle').textContent = title;
      document.getElementById('popupClient').textContent = client;
      document.getElementById('popupDeadline').textContent = deadline;
      document.getElementById('popupBudget').textContent = budget;
      document.getElementById('overlay').classList.remove('hidden');
      document.getElementById('step1').classList.remove('hidden');
      document.getElementById('step2').classList.add('hidden');
      document.getElementById('popupHeader').textContent = 'Project Details';
      setTimeout(() => document.getElementById('rightPopup').classList.remove('translate-x-full'), 10);
    }

    function closePopup() {
      document.getElementById('rightPopup').classList.add('translate-x-full');
      setTimeout(() => document.getElementById('overlay').classList.add('hidden'), 300);
    }

    function goToStep2() {
      document.getElementById('step1').classList.add('hidden');
      document.getElementById('step2').classList.remove('hidden');
      document.getElementById('popupHeader').textContent = 'Proposal Form';
    }

    function backToStep1() {
      document.getElementById('step2').classList.add('hidden');
      document.getElementById('step1').classList.remove('hidden');
      document.getElementById('popupHeader').textContent = 'Project Details';
    }

    // Form submission (Formspree)
    const proposalForm = document.getElementById('proposalForm');
    proposalForm.addEventListener('submit', function (e) {
      e.preventDefault();
      const formData = new FormData(proposalForm);
      fetch(proposalForm.action, {
        method: proposalForm.method,
        body: formData,
        headers: { 'Accept': 'application/json' }
      }).then(response => {
        if (response.ok) {
          document.getElementById('formNotif').classList.remove('hidden');
          proposalForm.reset();
        } else {
          alert('Gagal mengirim proposal. Silakan coba lagi.');
        }
      }).catch(() => alert('Terjadi kesalahan. Silakan coba lagi.'));
    });
  </script>


@endsection