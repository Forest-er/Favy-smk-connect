<!-- HOW IT WORKS SECTION -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6 md:px-12 lg:px-24">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12 gap-6">
            <h2 class="text-2xl font-bold text-gray-900">How it works</h2>
            <div class="flex rounded-full border border-gray-300 overflow-hidden shadow-sm">
                <button id="toggleHiring" class="px-6 py-3 bg-gray-100 text-gray-800 font-medium hover:bg-gray-200 transition active:bg-white active:border-b-2 active:border-blue-500">
                    For hiring
                </button>
                <button id="toggleFinding" class="px-6 py-3 text-gray-700 font-medium hover:bg-gray-100 transition">
                    For finding work
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition group">
                <div class="relative h-48 bg-black flex items-center justify-center">
                    <div id="card1Image" class="text-white text-xl font-bold text-center p-4">
                        all in one place
                    </div>
                    <div class="absolute bottom-3 right-3 bg-white rounded-full p-2 opacity-0 group-hover:opacity-100 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <div class="p-6">
                    <h3 id="card1Title" class="font-semibold text-gray-900 mb-2">Posting jobs is always free</h3>
                    <p id="card1Desc" class="text-gray-600 text-sm">Post your project for free and get proposals from top freelancers.</p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition group">
                <div class="relative h-48 bg-gray-100 flex items-center justify-center">
                    <img id="card2Image" src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Get proposals" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 id="card2Title" class="font-semibold text-gray-900 mb-2">Get proposals and hire</h3>
                    <p id="card2Desc" class="text-gray-600 text-sm">Review proposals, interview candidates, and hire the perfect match.</p>
                </div>
            </div>

            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition group">
                <div class="relative h-48 bg-gray-100 flex items-center justify-center">
                    <img id="card3Image" src="https://images.unsplash.com/photo-1581091580497-e0d23cbdf1dc?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Pay when done" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 id="card3Title" class="font-semibold text-gray-900 mb-2">Pay when work is done</h3>
                    <p id="card3Desc" class="text-gray-600 text-sm">Only pay for completed work you’re happy with — no surprises.</p>
                </div>
            </div>
        </div>
    </div>
</section>