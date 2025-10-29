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
            $greeting = $hour < 12 ? 'Good Morning' : ($hour < 18 ? 'Good Afternoon' : 'Good Evening' );
              @endphp
              <i class="bi bi-sun"></i> {{ $greeting }}
          </div>
          <h1 class="text-4xl md:text-5xl font-bold text-white mb-3">Haloww, {{ Auth::user()->nama }} 👋</h1>
          <p class="text-white/90 text-lg">Kamu punya {{ $OrderedTask }} projek yang lagi dikerjain nihh</p>
        </div>

      </div>

      <div class="mt-8 flex flex-col sm:flex-row gap-3">
        <div class="relative w-full sm:flex-1">
          <form method="GET">
            <div class="flex flex-row">
              <input type="text" placeholder="Telusuri projek, client, atau keahlian..." name="keyword"
                class="w-full pl-14 pr-5 py-4 rounded-l-2xl border-0 focus:ring-2 focus:ring-purple-400 shadow-lg text-gray-700">
              <button type="submit"
                class="rounded-r-2xl bg-purple-600 text-white px-6 py-2 hover:bg-purple-700 transition">
                <i class="bi bi-search text-lg"></i>
              </button>
            </div>
          </form>
        </div>
        <button type="button"
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
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- ✅ AVAILABLE PROJECTS (Total task di sistem) -->
      <div class="stat-card bg-white rounded-2xl p-6 shadow-lg card-hover border border-gray-100">
        <div class="flex items-start justify-between mb-4">
          <div class="w-12 h-12 rounded-xl bg-indigo-50 flex items-center justify-center">
            <i class="bi bi-clipboard-data text-indigo-600 text-xl"></i>
          </div>
          <span class="text-xs font-semibold text-indigo-600 bg-indigo-50 px-2 py-1 rounded-full">Semua tersedia</span>
        </div>
        <p class="text-gray-500 text-sm mb-1 font-medium"> Projek Tersedia</p>
        <p class="text-4xl font-bold text-gray-900 mb-2">{{ $totalAvailableTasks }}</p>
      </div>

      <div class="stat-card bg-white rounded-2xl p-6 shadow-lg card-hover border border-gray-100">
        <div class="flex items-start justify-between mb-4">
          <div class="w-12 h-12 rounded-xl bg-purple-50 flex items-center justify-center">
            <i class="bi bi-check-circle text-purple-600 text-xl"></i>
          </div>
          <span class="text-xs font-semibold text-blue-600 bg-blue-50 px-2 py-1 rounded-full">Sepanjang waktu</span>
        </div>
        <p class="text-gray-500 text-sm mb-1 font-medium">Selesai</p>
        <p class="text-4xl font-bold text-gray-900 mb-2">{{ $CompletedTask }}</p>
        <p class="text-xs text-gray-500">100% tepat waktu</p>
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
        <h2 class="text-2xl font-bold text-gray-900">Projek Unggulan</h2>
        <p class="text-gray-500 text-sm mt-1">Projek yang dipilih secara khusus sesuai dengan keahlian Anda</p>
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
            <span class="px-3 py-1 bg-purple-600 text-white text-xs font-semibold rounded-full">
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

          <button onclick="openPopup(
                        {{ json_encode($task->judul) }},
                        {{ json_encode($task->user->nama) }},
                        {{ json_encode($task->deadline) }},
                        {{ json_encode($task->budget) }},
                        {{ json_encode($task->deskripsi) }},
                        {{ json_encode($task->jurusan->deskripsi_1) }},
                        {{ json_encode($task->jurusan->deskripsi_2) }},
                        {{ json_encode($task->jurusan->deskripsi_3) }},
                        {{ json_encode(asset('storage/' . $task->foto)) }}
                    )"
            class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white font-semibold py-3 rounded-xl transition shadow-lg shadow-purple-200">
            Apply Now
          </button>
        </div>
      </div>
      @empty
      <div class="col-span-full text-center py-12">
        <i class="bi bi-inbox text-6xl text-gray-300 mb-4"></i>
        <p class="text-gray-500 text-lg">No available projects at the moment.</p>
        <p class="text-gray-400 text-sm">Please check back later.</p>
      </div>
      @endforelse
    </div>

    <!-- Pagination -->
    <div class="mt-8">
      {{ $tasks->links('pagination::tailwind') }}
    </div>
  </section>

  <!-- Project Details Popup -->
  <!-- Overlay -->
  <div id="overlay" class="fixed inset-0 bg-black/60 backdrop-blur-sm hidden z-40 transition-opacity"
    onclick="closePopup()"></div>

  <!-- Popup Panel -->
  <div id="rightPopup" class="fixed top-0 right-0 h-full w-full md:w-[90%] lg:w-[70%] bg-white shadow-2xl transform translate-x-full 
             transition-transform duration-500 ease-in-out z-50 overflow-y-auto rounded-l-3xl">

    <!-- HEADER -->
    <div class="sticky top-0 bg-white border-b border-gray-100 p-6 flex justify-between items-center z-10 shadow-sm">
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
              <img id="popupImage" src="https://via.placeholder.com/600x300" alt="Project Image"
                class="w-full h-60 object-cover rounded-2xl">
            </div>

            <!-- Project Title -->
            <h2 id="popupTitle" class="text-2xl font-bold text-gray-900 mb-4">UI Design for App</h2>

            <!-- Client Info -->
            <div class="flex items-center gap-3 mb-6">
              <img src="https://i.pravatar.cc/40?img=1" class="w-10 h-10 rounded-full ring-2 ring-white">
              <div>
                <p class="text-sm text-gray-500">Client</p>
                <p id="popupClient" class="font-semibold text-gray-900">John Doe</p>
              </div>
            </div>

            <!-- Budget & Deadline Grid -->
            <div class="grid grid-cols-2 gap-4 mb-6">
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
          <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 mb-6">
            <h4 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
              <i class="bi bi-file-text text-purple-600"></i> Project Description
            </h4>
            <p id="popupDesk" class="text-gray-600 leading-relaxed">
              Design a clean, minimal, and modern mobile app interface for our new product launch...
            </p>
          </div>

          <!-- SKILLS -->
          <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 mb-6">
            <h4 class="font-semibold text-gray-900 mb-3 flex items-center gap-2">
              <i class="bi bi-tag text-purple-600"></i> Skills Required
            </h4>
            <div class="flex flex-wrap gap-2">
              <span id="popup1" class="px-3 py-2 bg-purple-50 text-purple-700 rounded-lg text-sm font-medium">UI
                Design</span>
              <span id="popup2" class="px-3 py-2 bg-purple-50 text-purple-700 rounded-lg text-sm font-medium">UX
                Design</span>
              <span id="popup3" class="px-3 py-2 bg-purple-50 text-purple-700 rounded-lg text-sm font-medium">Figma</span>
            </div>
          </div>


        </div>

        <!-- STEP 2 -->
        <div id="step2" class="hidden">
          <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">
            <h3 class="font-semibold text-gray-900 mb-4 text-xl">Fill Proposal Details</h3>

            <form id="proposalForm" action="https://formspree.io/f/mjkvkavj" method="POST" enctype="multipart/form-data"
              class="space-y-4">

              <div>
                <label class="block text-gray-700 font-medium mb-2">Nama</label>
                <input type="text" name="name" placeholder="Masukkan Nama Anda" required
                  class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-400 focus:border-transparent">
              </div>

              <div>
                <label class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" name="email" placeholder="Masukkan Email Anda" required
                  class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-400 focus:border-transparent">
              </div>

              <div>
                <label class="block text-gray-700 font-medium mb-2">Deskripsi</label>
                <textarea name="message" placeholder="Masukkan Deskripsi Proposal / Portofolio" required rows="5"
                  class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-400 focus:border-transparent"></textarea>
              </div>

              <div>
                <label class="block text-gray-700 font-medium mb-2">Link CV (Google Drive / Dropbox)</label>
                <input type="url" name="cv_link" placeholder="Masukkan link CV Anda" required
                  class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-400 focus:border-transparent">
              </div>

              <div class="flex gap-3 mt-3 justify-center">
                <button onclick="backToStep1()"
                  class="bg-gray-100 hover:bg-gray-200 text-gray-700 font-semibold px-8 py-3 rounded-xl transition flex items-center justify-center gap-2 text-base">
                  <i class="bi bi-arrow-left"></i> Back
                </button>

                <button type="submit"
                  class="bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 
               text-white font-semibold px-8 py-3 rounded-xl transition shadow-lg flex items-center justify-center gap-2 text-base">
                  <i class="bi bi-send"></i> Submit Proposal
                </button>
              </div>

              <div id="formNotif" class="hidden text-green-600 font-semibold mt-2 text-center bg-green-50 p-3 rounded-lg">
                ✓ Proposal berhasil dikirim!
              </div>

          </div>
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

        <!-- About Client -->
        <div class="bg-white rounded-2xl p-6 shadow-md border border-gray-100">
          <h5 class="text-lg font-bold text-gray-900 mb-4 flex items-center gap-2">
            <i class="bi bi-person-circle text-purple-600"></i> About Client
          </h5>
          <p class="text-gray-700 text-sm leading-relaxed mb-4">
            Experienced professional looking for talented freelancers. Committed to clear communication and fair payment.
          </p>

          <div class="space-y-3 pt-4 border-t border-gray-100">
            <div class="flex items-center justify-between text-sm">
              <span class="text-gray-600">Member since</span>
              <span class="font-semibold text-gray-900">Jan 2022</span>
            </div>
            <div class="flex items-center justify-between text-sm">
              <span class="text-gray-600">Projects posted</span>
              <span class="font-semibold text-gray-900">35</span>
            </div>
            <div class="flex items-center justify-between text-sm">
              <span class="text-gray-600">Hire rate</span>
              <span class="font-semibold text-green-600">95%</span>
            </div>
          </div>

          <a href="#"
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
    function openPopup(title, client, deadline, budget, description, req1, req2, req3, imageUrl) {
      document.getElementById('popupTitle').textContent = title;
      document.getElementById('popupClient').textContent = client;
      document.getElementById('popupDeadline').textContent = deadline;
      document.getElementById('popupBudget').textContent = budget;
      document.getElementById('popupDesk').textContent = description;
      document.getElementById('popup1').textContent = req1;
      document.getElementById('popup2').textContent = req2;
      document.getElementById('popup3').textContent = req3;

      // Set image with fallback
      const imgElement = document.getElementById('popupImage');
      imgElement.src = imageUrl;
      imgElement.onerror = function() {
        this.src = 'https://images.pexels.com/photos/1181244/pexels-photo-1181244.jpeg';
      };

      document.getElementById('overlay').classList.remove('hidden');
      document.getElementById('step1').classList.remove('hidden');
      document.getElementById('step2').classList.add('hidden');
      document.getElementById('popupHeader').textContent = 'Project Details';
      document.body.style.overflow = 'hidden'; // Prevent background scrolling

      setTimeout(() => {
        document.getElementById('rightPopup').classList.remove('translate-x-full');
      }, 10);
    }

    function closePopup() {
      document.getElementById('rightPopup').classList.add('translate-x-full');
      document.body.style.overflow = ''; // Restore scrolling

      setTimeout(() => {
        document.getElementById('overlay').classList.add('hidden');
      }, 500);
    }

    function goToStep2() {
      document.getElementById('step1').classList.add('hidden');
      document.getElementById('step2').classList.remove('hidden');
      document.getElementById('popupHeader').textContent = 'Proposal Form';

      // Scroll to top of popup
      document.getElementById('rightPopup').scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    }

    function backToStep1() {
      document.getElementById('step2').classList.add('hidden');
      document.getElementById('step1').classList.remove('hidden');
      document.getElementById('popupHeader').textContent = 'Project Details';

      // Scroll to top of popup
      document.getElementById('rightPopup').scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    }

    // Form submission (Formspree)
    const proposalForm = document.getElementById('proposalForm');
    if (proposalForm) {
      proposalForm.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(proposalForm);
        const submitButton = proposalForm.querySelector('button[type="submit"]');
        const originalButtonText = submitButton.innerHTML;

        // Disable button and show loading state
        submitButton.disabled = true;
        submitButton.innerHTML = '<i class="bi bi-hourglass-split animate-spin"></i> Sending...';

        fetch(proposalForm.action, {
            method: proposalForm.method,
            body: formData,
            headers: {
              'Accept': 'application/json'
            }
          })
          .then(response => {
            if (response.ok) {
              document.getElementById('formNotif').classList.remove('hidden');
              proposalForm.reset();

              // Auto close notification after 3 seconds
              setTimeout(() => {
                document.getElementById('formNotif').classList.add('hidden');
                closePopup();
              }, 3000);
            } else {
              alert('Gagal mengirim proposal. Silakan coba lagi.');
            }
          })
          .catch(() => {
            alert('Terjadi kesalahan. Silakan coba lagi.');
          })
          .finally(() => {
            // Re-enable button
            submitButton.disabled = false;
            submitButton.innerHTML = originalButtonText;
          });
      });
    }

    // Close popup with Escape key
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') {
        const popup = document.getElementById('rightPopup');
        if (!popup.classList.contains('translate-x-full')) {
          closePopup();
        }
      }
    });
  </script>

  <style>
    /* Additional CSS for animations and hover effects */
    .card-hover {
      transition: all 0.3s ease;
    }

    .card-hover:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    .line-clamp-2 {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    /* Smooth scrollbar for popup */
    #rightPopup::-webkit-scrollbar {
      width: 8px;
    }

    #rightPopup::-webkit-scrollbar-track {
      background: #f1f1f1;
    }

    #rightPopup::-webkit-scrollbar-thumb {
      background: #9333ea;
      border-radius: 4px;
    }

    #rightPopup::-webkit-scrollbar-thumb:hover {
      background: #7e22ce;
    }

    /* Animation for notification */
    #formNotif {
      animation: slideInDown 0.5s ease;
    }

    @keyframes slideInDown {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Loading spinner animation */
    @keyframes spin {
      to {
        transform: rotate(360deg);
      }
    }

    .animate-spin {
      animation: spin 1s linear infinite;
    }
  </style>

  @endsection