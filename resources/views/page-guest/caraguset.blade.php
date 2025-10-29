<!-- HOW IT WORKS SECTION -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-6 md:px-12 lg:px-24">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12 gap-6">
      <h2 class="text-2xl font-bold text-gray-900">Bagaimana Caranya Rekrut/Dapat Kerjaan?</h2>
      <div class="flex rounded-full border border-gray-300 overflow-hidden shadow-sm">
        <button id="toggleHiring"
          class="px-6 py-3 bg-gray-100 text-gray-800 font-medium hover:bg-gray-200 transition active:bg-white active:border-b-2 active:border-blue-500">
          Cara rekrutmen
        </button>
        <button id="toggleFinding"
          class="px-6 py-3 text-gray-700 font-medium hover:bg-gray-100 transition">
          Cara mencari kerja
        </button>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- CARD 1 -->
      <div class="relative bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition group max-w-full">
        <div class="relative aspect-video md:h-64 lg:h-72 bg-gray-100 overflow-hidden">
          <img id="card1Image" src="{{ asset('images/smkbm3.png') }}" alt="All in one place"
            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

          <!-- Overlay deskripsi (HANYA DI DESKTOP) -->
          <div class="absolute bottom-0 left-0 right-0 bg-black/70 text-white p-4 
                      translate-y-full md:group-hover:translate-y-0 
                      transition-all duration-500 ease-in-out md:ease-in-out">
            <h3 id="card1Title" class="font-semibold text-base mb-1">
              Posting jobs is always free
            </h3>
            <p id="card1Desc" class="text-sm text-gray-200">
              Post your project for free and get proposals from top freelancers.
            </p>
          </div>
        </div>

        <!-- Deskripsi statis di bawah (HANYA DI MOBILE) -->
        <div class="p-4 md:hidden">
          <h3 id="card1TitleMobile" class="font-semibold text-base mb-1">
            Posting jobs is always free
          </h3>
          <p id="card1DescMobile" class="text-sm text-gray-600">
            Post your project for free and get proposals from top freelancers.
          </p>
        </div>
      </div>

      <!-- CARD 2 -->
      <div class="relative bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition group max-w-full">
        <div class="relative aspect-video md:h-64 lg:h-72 bg-gray-100 overflow-hidden">
          <img id="card2Image" src="{{ asset('images/smkbm3.png') }}" alt="Get proposals"
            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

          <!-- Overlay deskripsi (HANYA DI DESKTOP) -->
          <div class="absolute bottom-0 left-0 right-0 bg-black/70 text-white p-4 
                      translate-y-full md:group-hover:translate-y-0 
                      transition-all duration-500 ease-in-out">
            <h3 id="card2Title" class="font-semibold text-base mb-1">
              Get proposals and hire
            </h3>
            <p id="card2Desc" class="text-sm text-gray-200">
              Review proposals, interview candidates, and hire the perfect match.
            </p>
          </div>
        </div>

        <!-- Deskripsi statis di bawah (HANYA DI MOBILE) -->
        <div class="p-4 md:hidden">
          <h3 id="card2TitleMobile" class="font-semibold text-base mb-1">
            Get proposals and hire
          </h3>
          <p id="card2DescMobile" class="text-sm text-gray-600">
            Review proposals, interview candidates, and hire the perfect match.
          </p>
        </div>
      </div>

      <!-- CARD 3 -->
      <div class="relative bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition group max-w-full">
        <div class="relative aspect-video md:h-64 lg:h-72 bg-gray-100 overflow-hidden">
          <img id="card3Image" src="{{ asset('images/smkbm3.png') }}" alt="Pay when done"
            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

          <!-- Overlay deskripsi (HANYA DI DESKTOP) -->
          <div class="absolute bottom-0 left-0 right-0 bg-black/70 text-white p-4 
                      translate-y-full md:group-hover:translate-y-0 
                      transition-all duration-500 ease-in-out">
            <h3 id="card3Title" class="font-semibold text-base mb-1">
              Pay when work is done
            </h3>
            <p id="card3Desc" class="text-sm text-gray-200">
              Only pay for completed work you’re happy with — no surprises.
            </p>
          </div>
        </div>

        <!-- Deskripsi statis di bawah (HANYA DI MOBILE) -->
        <div class="p-4 md:hidden">
          <h3 id="card3TitleMobile" class="font-semibold text-base mb-1">
            Pay when work is done
          </h3>
          <p id="card3DescMobile" class="text-sm text-gray-600">
            Only pay for completed work you’re happy with — no surprises.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toggleHiring = document.getElementById('toggleHiring');
        const toggleFinding = document.getElementById('toggleFinding');
        const imageUrl = "{{ asset('images/smkbm3.png') }}";

        const content = {
            hiring: {
                card1: { title: 'Post jobs for free', desc: 'List your project at no cost and receive offers from top talent.' },
                card2: { title: 'Review & hire', desc: 'Compare proposals, interview, and hire the right freelancer.' },
                card3: { title: 'Pay securely', desc: 'Release payment only when you’re happy with the result.' }
            },
            finding: {
                card1: { title: 'Build your profile', desc: 'Highlight your skills and portfolio to attract clients.' },
                card2: { title: 'Apply & get hired', desc: 'Send proposals and land jobs that match your expertise.' },
                card3: { title: 'Get paid safely', desc: 'Receive payments securely through our trusted platform.' }
            }
        };

        function updateContent(mode) {
            const data = content[mode];

            for (let i = 1; i <= 3; i++) {
                // Update versi desktop (overlay)
                const title = document.getElementById(`card${i}Title`);
                const desc = document.getElementById(`card${i}Desc`);
                const image = document.getElementById(`card${i}Image`);

                // Update versi mobile (static di bawah)
                const titleMobile = document.getElementById(`card${i}TitleMobile`);
                const descMobile = document.getElementById(`card${i}DescMobile`);

                if (title && desc && image) {
                    // Fade out
                    title.classList.add('opacity-0');
                    desc.classList.add('opacity-0');
                    if (titleMobile && descMobile) {
                        titleMobile.classList.add('opacity-0');
                        descMobile.classList.add('opacity-0');
                    }

                    setTimeout(() => {
                        title.textContent = data[`card${i}`].title;
                        desc.textContent = data[`card${i}`].desc;
                        image.src = imageUrl;

                        if (titleMobile && descMobile) {
                            titleMobile.textContent = data[`card${i}`].title;
                            descMobile.textContent = data[`card${i}`].desc;
                        }

                        // Fade in
                        title.classList.remove('opacity-0');
                        desc.classList.remove('opacity-0');
                        if (titleMobile && descMobile) {
                            titleMobile.classList.remove('opacity-0');
                            descMobile.classList.remove('opacity-0');
                        }
                    }, 200);
                }
            }
        }

        if (toggleHiring && toggleFinding) {
            toggleHiring.addEventListener('click', () => {
                toggleHiring.classList.add('bg-white', 'border-b-2', 'border-blue-500');
                toggleHiring.classList.remove('bg-gray-100');
                toggleFinding.classList.remove('bg-white', 'border-b-2', 'border-blue-500');
                toggleFinding.classList.add('bg-gray-100');
                updateContent('hiring');
            });

            toggleFinding.addEventListener('click', () => {
                toggleFinding.classList.add('bg-white', 'border-b-2', 'border-blue-500');
                toggleFinding.classList.remove('bg-gray-100');
                toggleHiring.classList.remove('bg-white', 'border-b-2', 'border-blue-500');
                toggleHiring.classList.add('bg-gray-100');
                updateContent('finding');
            });

            toggleHiring.click();
        }
    });
</script>