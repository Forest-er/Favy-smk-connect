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
            <!-- Card 1 -->
            <div class="bg-gray-50 rounded-xl p-6 shadow-md hover:shadow-lg transition">
                <div class="flex items-start gap-4">
                    <!-- Ikon kecil sebagai pengganti gambar -->
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M9 11a2 2 0 11-4 0m8 0a2 2 0 11-4 0m8 0a2 2 0 11-4 0" />
                        </svg>
                    </div>
                    <div>
                        <h3 id="card1Title" class="font-semibold text-gray-900 mb-2">Posting jobs is always free</h3>
                        <p id="card1Desc" class="text-gray-600 text-sm">Post your project for free and get proposals from top freelancers.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-gray-50 rounded-xl p-6 shadow-md hover:shadow-lg transition">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-green-100 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 id="card2Title" class="font-semibold text-gray-900 mb-2">Get proposals and hire</h3>
                        <p id="card2Desc" class="text-gray-600 text-sm">Review proposals, interview candidates, and hire the perfect match.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-gray-50 rounded-xl p-6 shadow-md hover:shadow-lg transition">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-10 h-10 rounded-full bg-purple-100 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-6 4h12a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div>
                        <h3 id="card3Title" class="font-semibold text-gray-900 mb-2">Pay when work is done</h3>
                        <p id="card3Desc" class="text-gray-600 text-sm">Only pay for completed work you’re happy with — no surprises.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>