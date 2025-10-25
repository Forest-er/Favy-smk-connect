<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Gig — Realistic Digital Painting</title>
  <meta name="description" content="I will draw realistic digital painting and background illustrations - frontend demo" />
  <!-- Tailwind Play CDN (no build required) -->
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Small visual tweaks */
    .glass {
      backdrop-filter: blur(6px);
      background-color: rgba(255,255,255,0.6);
    }
    /* Simple focus outline for keyboard users */
    :focus { outline: 3px solid rgba(99,102,241,0.25); outline-offset: 2px; }
  </style>
</head>
<body class="antialiased bg-gray-50 text-gray-800">
  <!-- Header -->
  <header class="bg-white border-b">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between gap-6">
      <div class="flex items-center gap-4">
        <a href="#" class="inline-flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 7h18M5 12h14M7 17h10"/></svg>
          <span class="font-semibold text-lg">Fiverr — Demo</span>
        </a>
        <nav class="hidden sm:flex items-center gap-3 text-sm text-gray-500">
          <a href="#" class="hover:underline">Graphics & Design</a>
          <span>›</span>
          <a href="#" class="hover:underline">Illustration</a>
        </nav>
      </div>

      <div class="flex items-center gap-3">
        <button class="hidden md:inline-flex items-center gap-2 px-4 py-2 border rounded-lg text-sm hover:shadow-sm">Sign in</button>
        <button class="inline-flex items-center gap-2 px-4 py-2 bg-pink-500 text-white rounded-lg text-sm shadow hover:bg-pink-600">Create a Gig</button>
      </div>
    </div>
  </header>

  <!-- Main content -->
  <main class="max-w-7xl mx-auto px-6 py-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
      <!-- Left / Main column -->
      <section class="lg:col-span-8 space-y-6">
        <!-- Title, seller -->
        <div class="bg-white p-6 rounded-2xl shadow-sm">
          <h1 class="text-2xl md:text-3xl font-extrabold text-gray-900 mb-3">I will draw realistic digital painting and background illustrations</h1>

          <div class="flex items-center justify-between gap-4">
            <div class="flex items-center gap-4">
              <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=80&auto=format&fit=crop&crop=faces" alt="seller" class="w-14 h-14 rounded-full object-cover border"/>
              <div>
                <div class="flex items-center gap-2">
                  <span class="font-semibold">Jennina</span>
                  <span class="text-xs px-2 py-0.5 rounded-lg bg-gray-100 text-gray-600">Level 2</span>
                </div>
                <div class="text-sm text-gray-500">2 orders in queue • Avg. response time: 1 hour</div>
              </div>
            </div>

            <div class="flex items-center gap-3">
              <div class="flex items-center gap-1 text-yellow-500">
                <!-- stars -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927a1 1 0 011.902 0l1.286 3.954a1 1 0 00.95.69h4.163a1 1 0 01.592 1.806l-3.37 2.45a1 1 0 00-.364 1.118l1.287 3.954a1 1 0 01-1.538 1.118L10 15.347l-3.356 2.37A1 1 0 015.106 16.6l1.286-3.954a1 1 0 00-.364-1.118L2.656 9.08A1 1 0 013.248 7.27h4.163a1 1 0 00.95-.69L9.049 2.927z"/></svg>
                <span class="font-medium">5.0</span>
                <span class="text-gray-400 text-sm">(26 reviews)</span>
              </div>
              <button class="px-3 py-2 border rounded-lg text-sm">Message</button>
            </div>
          </div>
        </div>

        <!-- Gallery -->
        <div class="bg-white p-6 rounded-2xl shadow-sm">
          <div class="relative">
            <div id="gallery" class="aspect-[16/10] rounded-xl overflow-hidden bg-gray-100">
              <!-- big image (use placeholder images or real assets) -->
              <img id="gallery-img" src="/mnt/data/e1e0881b-0b01-4715-b090-e4ddc4bf1211.png" alt="art sample" class="w-full h-full object-cover">
            </div>

            <!-- Prev / Next -->
            <button id="prevBtn" aria-label="previous image" class="absolute left-3 top-1/2 -translate-y-1/2 bg-white/90 p-2 rounded-full shadow hover:scale-105">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.293 16.293a1 1 0 010-1.414L15.586 11H5a1 1 0 110-2h10.586l-3.293-3.879a1 1 0 011.486-1.32l5 5.879a1 1 0 010 1.32l-5 5.879a1 1 0 01-1.486 0z" clip-rule="evenodd"/></svg>
            </button>
            <button id="nextBtn" aria-label="next image" class="absolute right-3 top-1/2 -translate-y-1/2 bg-white/90 p-2 rounded-full shadow hover:scale-105">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.707 3.707a1 1 0 010 1.414L4.414 9H15a1 1 0 110 2H4.414l3.293 3.879a1 1 0 11-1.486 1.32l-5-5.879a1 1 0 010-1.32l5-5.879a1 1 0 011.486 0z" clip-rule="evenodd"/></svg>
            </button>
          </div>

          <!-- thumbnails -->
          <div class="mt-4 flex items-center gap-3 overflow-auto">
            <img src="/mnt/data/e1e0881b-0b01-4715-b090-e4ddc4bf1211.png" alt="thumb1" class="w-24 h-14 object-cover rounded-md cursor-pointer border-2 border-pink-100" data-src="/mnt/data/e1e0881b-0b01-4715-b090-e4ddc4bf1211.png">
            <img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?q=80&w=600&auto=format&fit=crop" alt="thumb2" class="w-24 h-14 object-cover rounded-md cursor-pointer opacity-70" data-src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?q=80&w=1200&auto=format&fit=crop">
            <img src="https://images.unsplash.com/photo-1504198453319-5ce911bafcde?q=80&w=600&auto=format&fit=crop" alt="thumb3" class="w-24 h-14 object-cover rounded-md cursor-pointer opacity-70" data-src="https://images.unsplash.com/photo-1504198453319-5ce911bafcde?q=80&w=1200&auto=format&fit=crop">
            <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?q=80&w=600&auto=format&fit=crop" alt="thumb4" class="w-24 h-14 object-cover rounded-md cursor-pointer opacity-70" data-src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?q=80&w=1200&auto=format&fit=crop">
          </div>
        </div>

        <!-- Description -->
        <div class="bg-white p-6 rounded-2xl shadow-sm">
          <h3 class="text-lg font-semibold mb-3">About This Gig</h3>
          <p class="text-gray-700 leading-relaxed mb-4">
            I'm a professional digital artist specializing in realistic digital paintings and richly detailed background illustrations.
            I deliver high-resolution artwork suitable for printing, game backgrounds, book covers, and concept art.
          </p>
          <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-sm text-gray-600">
            <li>✔ High-resolution PSD / source file</li>
            <li>✔ Print-ready files (300 DPI)</li>
            <li>✔ Multiple revisions</li>
            <li>✔ Fast communication & professional delivery</li>
          </ul>
        </div>

        <!-- FAQ & Reviews (two-column on larger screens) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div class="bg-white p-6 rounded-2xl shadow-sm">
            <h4 class="font-semibold mb-3">Frequently Asked Questions</h4>
            <div class="space-y-3 text-sm text-gray-700">
              <details class="p-3 border rounded-md">
                <summary class="cursor-pointer font-medium">What file formats do you provide?</summary>
                <p class="mt-2 text-gray-600">I provide PSD, PNG, and JPEG. Vector formats available upon request.</p>
              </details>
              <details class="p-3 border rounded-md">
                <summary class="cursor-pointer font-medium">Can you paint from a photo?</summary>
                <p class="mt-2 text-gray-600">Yes — I can transform photos into stylized or realistic paintings.</p>
              </details>
            </div>
          </div>

          <div class="bg-white p-6 rounded-2xl shadow-sm">
            <h4 class="font-semibold mb-3">Recent Reviews</h4>
            <div class="space-y-4">
              <div>
                <div class="flex items-start gap-3">
                  <img src="https://images.unsplash.com/photo-1545996124-4b8a2a2b8d7e?q=80&w=80&auto=format&fit=crop&crop=faces" alt="" class="w-10 h-10 rounded-full object-cover">
                  <div>
                    <div class="flex items-center gap-2">
                      <strong>Raisa</strong>
                      <div class="text-xs text-gray-400">• 2 days ago</div>
                    </div>
                    <p class="text-gray-600 text-sm">Amazing work! Colors and composition were beyond expectations.</p>
                  </div>
                </div>
              </div>

              <div>
                <div class="flex items-start gap-3">
                  <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=80&auto=format&fit=crop&crop=faces" alt="" class="w-10 h-10 rounded-full object-cover">
                  <div>
                    <div class="flex items-center gap-2">
                      <strong>Aris</strong>
                      <div class="text-xs text-gray-400">• 1 month ago</div>
                    </div>
                    <p class="text-gray-600 text-sm">Delivered quickly and exactly as requested. Highly recommended.</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>

      <!-- Right / Sidebar -->
      <aside class="lg:col-span-4">
        <div class="sticky top-6 space-y-4">
          <div class="bg-white p-6 rounded-2xl shadow-sm">
            <div class="flex items-start justify-between gap-4">
              <div>
                <div class="text-sm text-gray-500">Basic Package</div>
                <div class="text-2xl font-extrabold mt-1">$75</div>
                <div class="text-xs text-gray-400 mt-1">sketch character artwork without background</div>
              </div>
              <div class="text-sm text-gray-400 text-right">
                <div class="mb-1">7-day delivery</div>
                <div class="mb-1">2 Revisions</div>
              </div>
            </div>

            <hr class="my-4">

            <ul class="text-sm text-gray-700 space-y-2">
              <li class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z" clip-rule="evenodd"/></svg> 1 figure</li>
              <li class="flex items-center gap-2 text-gray-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V7l-4-4H5z"/></svg> Include source file</li>
              <li class="flex items-center gap-2 text-gray-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path d="M3 3h14v2H3V3zm0 4h14v10H3V7z"/></svg> Printable resolution file</li>
            </ul>

            <button id="continueBtn" class="mt-5 w-full py-3 bg-black text-white rounded-lg font-medium hover:opacity-95">Continue ➜</button>
            <button id="contactBtn" class="mt-3 w-full py-2 border rounded-lg font-medium">Contact me</button>
          </div>

          <!-- Package tabs -->
          <div class="bg-white p-4 rounded-2xl shadow-sm">
            <div class="flex gap-2 mb-3">
              <button class="package-tab px-3 py-2 rounded-lg bg-pink-50 text-pink-600 font-medium" data-package="basic">Basic</button>
              <button class="package-tab px-3 py-2 rounded-lg hover:bg-gray-100 text-gray-600" data-package="standard">Standard</button>
              <button class="package-tab px-3 py-2 rounded-lg hover:bg-gray-100 text-gray-600" data-package="premium">Premium</button>
            </div>

            <div id="packageContent">
              <!-- content changed by JS -->
              <div>
                <h5 class="font-semibold">Basic Package — $75</h5>
                <p class="text-sm text-gray-600 mt-2">Sketch character artwork with basic colors. Ideal for concept previews.</p>
              </div>
            </div>
          </div>

          <!-- Seller card -->
          <div class="bg-white p-4 rounded-2xl shadow-sm">
            <div class="flex items-center gap-3">
              <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=80&auto=format&fit=crop&crop=faces" alt="seller" class="w-12 h-12 rounded-full object-cover">
              <div>
                <div class="font-semibold">Jennina</div>
                <div class="text-xs text-gray-400">Digital Artist • 5 years experience</div>
              </div>
            </div>
            <div class="mt-3 text-sm text-gray-600">Languages: English, Indonesian</div>
            <div class="mt-4 flex gap-2">
              <button class="flex-1 py-2 border rounded-lg text-sm">View profile</button>
              <button class="flex-1 py-2 bg-pink-500 text-white rounded-lg text-sm">Hire</button>
            </div>
          </div>

        </div>
      </aside>
    </div>
  </main>

  <!-- Footer -->
  <footer class="border-t mt-12">
    <div class="max-w-7xl mx-auto px-6 py-8 text-sm text-gray-500">
      <div class="flex flex-col md:flex-row md:justify-between gap-4">
        <div>© 2025 Demo — Built with Tailwind</div>
        <div class="flex gap-4">
          <a href="#" class="hover:underline">Help & Support</a>
          <a href="#" class="hover:underline">Terms</a>
          <a href="#" class="hover:underline">Privacy</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Minimal JS for interactions -->
  <script>
    // Gallery thumbnails
    const thumbs = document.querySelectorAll('[data-src]');
    const galleryImg = document.getElementById('gallery-img');
    thumbs.forEach(t => {
      t.addEventListener('click', () => {
        galleryImg.src = t.dataset.src;
        // visual active state
        thumbs.forEach(x => x.classList.remove('border-2','border-pink-100','opacity-70'));
        t.classList.add('border-2','border-pink-100');
      });
    });

    // Simple prev/next (rotate through thumbs)
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    let currentIndex = 0;
    const srcs = Array.from(thumbs).map(t => t.dataset.src || t.src);

    function showIndex(i){
      if(i < 0) i = srcs.length - 1;
      if(i >= srcs.length) i = 0;
      currentIndex = i;
      galleryImg.src = srcs[i];
      thumbs.forEach(x => x.classList.remove('border-2','border-pink-100','opacity-70'));
      thumbs[i].classList.add('border-2','border-pink-100');
    }
    showIndex(0);

    prevBtn.addEventListener('click', () => showIndex(currentIndex - 1));
    nextBtn.addEventListener('click', () => showIndex(currentIndex + 1));

    // Package tabs
    const tabs = document.querySelectorAll('.package-tab');
    const packageContent = document.getElementById('packageContent');
    const packages = {
      basic: {
        title: 'Basic Package — $75',
        desc: 'Sketch character artwork without background. 1 figure, incl. basic colors, 2 revisions. Delivery: 7 days.'
      },
      standard: {
        title: 'Standard Package — $150',
        desc: 'Full-color illustration with simple background. 1 character, source file included, 3 revisions. Delivery: 5 days.'
      },
      premium: {
        title: 'Premium Package — $300',
        desc: 'High-detailed background illustration, full PSD, commercial license. Multiple characters, unlimited revisions. Delivery: 3 days.'
      }
    };

    tabs.forEach(t => {
      t.addEventListener('click', () => {
        tabs.forEach(x => x.classList.remove('bg-pink-50','text-pink-600','font-medium'));
        t.classList.add('bg-pink-50','text-pink-600','font-medium');
        const key = t.dataset.package;
        packageContent.innerHTML = `
          <div>
            <h5 class="font-semibold">${packages[key].title}</h5>
            <p class="text-sm text-gray-600 mt-2">${packages[key].desc}</p>
          </div>
        `;
      });
    });

    // CTA hooks (demo)
    document.getElementById('continueBtn').addEventListener('click', () => {
      alert('Continue ➜ (demo) — implement checkout flow here.');
    });
    document.getElementById('contactBtn').addEventListener('click', () => {
      alert('Contact seller modal (demo).');
    });
  </script>
</body>
</html>
