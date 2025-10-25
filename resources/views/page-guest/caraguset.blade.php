<!-- HOW IT WORKS SECTION -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-6 md:px-12 lg:px-24">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12 gap-6">
      <h2 class="text-2xl font-bold text-gray-900">How it works</h2>
      <div class="flex rounded-full border border-gray-300 overflow-hidden shadow-sm">
        <button id="toggleHiring"
          class="px-6 py-3 bg-gray-100 text-gray-800 font-medium hover:bg-gray-200 transition active:bg-white active:border-b-2 active:border-blue-500">
          For hiring
        </button>
        <button id="toggleFinding"
          class="px-6 py-3 text-gray-700 font-medium hover:bg-gray-100 transition">
          For finding work
        </button>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- CARD 1 -->
      <div class="relative bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition group max-w-full">
        <div class="relative aspect-video md:h-64 lg:h-72 bg-gray-100 overflow-hidden">
          <img id="card1Image" src="{{ asset('images/smkbm3.png') }}" alt="All in one place"
            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

          <div class="absolute bottom-0 left-0 right-0 bg-black/70 text-white p-4 
                      translate-y-full group-hover:translate-y-0 
                      transition-all duration-500 ease-in-out">
            <h3 id="card1Title" class="font-semibold text-base mb-1">
              Posting jobs is always free
            </h3>
            <p id="card1Desc" class="text-sm text-gray-200">
              Post your project for free and get proposals from top freelancers.
            </p>
          </div>
        </div>
      </div>

      <!-- CARD 2 -->
      <div class="relative bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition group max-w-full">
        <div class="relative aspect-video md:h-64 lg:h-72 bg-gray-100 overflow-hidden">
          <img id="card2Image" src="{{ asset('images/smkbm3.png') }}" alt="Get proposals"
            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

          <div class="absolute bottom-0 left-0 right-0 bg-black/70 text-white p-4 
                      translate-y-full group-hover:translate-y-0 
                      transition-all duration-500 ease-in-out">
            <h3 id="card2Title" class="font-semibold text-base mb-1">
              Get proposals and hire
            </h3>
            <p id="card2Desc" class="text-sm text-gray-200">
              Review proposals, interview candidates, and hire the perfect match.
            </p>
          </div>
        </div>
      </div>

      <!-- CARD 3 -->
      <div class="relative bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition group max-w-full">
        <div class="relative aspect-video md:h-64 lg:h-72 bg-gray-100 overflow-hidden">
          <img id="card3Image" src="{{ asset('images/smkbm3.png') }}" alt="Pay when done"
            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

          <div class="absolute bottom-0 left-0 right-0 bg-black/70 text-white p-4 
                      translate-y-full group-hover:translate-y-0 
                      transition-all duration-500 ease-in-out">
            <h3 id="card3Title" class="font-semibold text-base mb-1">
              Pay when work is done
            </h3>
            <p id="card3Desc" class="text-sm text-gray-200">
              Only pay for completed work you’re happy with — no surprises.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>