<!-- Need Help with Vibe Coding? (Pink Container) -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6 md:px-12 lg:px-24">
        <div class="bg-pink-50 rounded-2xl p-8 md:p-12 shadow-lg flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2 space-y-6">
                <h2 class="text-3xl md:text-4xl font-bold leading-tight text-gray-800">
                    Need help with Vibe coding?
                </h2>
                <p class="text-lg text-gray-600">
                    Get matched with the right expert to keep building and marketing your project.
                </p>
                <button class="bg-white border border-gray-300 text-gray-800 px-6 py-3 rounded-lg font-medium hover:bg-gray-50 transition">
                    Find an expert
                </button>
            </div>

            <div class="md:w-1/2 flex justify-center">
                <div class="relative w-full max-w-md">
                    <!-- Border abu-abu luar (tetap ukuran asli) -->
                    <div class="bg-white rounded-2xl p-6 shadow-inner border border-gray-200">
                        <!-- Kotak dalam — diperbesar ke atas dan bawah -->
                        <div class="relative h-40 flex items-end justify-center overflow-visible">
                            <!-- Gambar melebihi kotak dalam, tapi tetap dalam section -->
                            <img
                                src="{{ asset('images/thinking-about.png') }}"
                                alt="Thinking About"
                                class="absolute -bottom-4 w-[50%] max-w-none object-contain z-10" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>