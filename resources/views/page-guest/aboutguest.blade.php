<!-- SMK Connect Introduction (Gradient Container) -->
<section class="py-16 bg-white relative overflow-hidden">
    <div class="container mx-auto px-6 md:px-12 lg:px-24 relative z-10">
        <div class="rounded-2xl p-8 md:p-12 lg:p-16 shadow-2xl relative overflow-hidden" style="background: linear-gradient(135deg, #244c8a 0%, #eaa7f1 100%); box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25), 0 0 0 1px rgba(0, 0, 0, 0.05);">

            <!-- Hiasan Dekoratif -->
            <div class="absolute -top-20 -left-20 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-16 -right-16 w-80 h-80 bg-white/10 rounded-full blur-2xl"></div>
            <div class="absolute top-10 right-1/4 w-3 h-3 bg-white/30 rounded-full"></div>
            <div class="absolute top-20 right-1/3 w-2 h-2 bg-white/40 rounded-full"></div>
            <div class="absolute bottom-24 left-1/4 w-3 h-3 bg-white/30 rounded-full"></div>
            <div class="absolute bottom-32 left-1/3 w-2 h-2 bg-white/40 rounded-full"></div>
            <div class="absolute top-1/4 left-10 w-12 h-12 border-2 border-white/20 rounded-lg rotate-12"></div>
            <div class="absolute bottom-1/4 right-16 w-16 h-16 border-2 border-white/20 rounded-full"></div>
            <svg class="absolute bottom-0 left-0 w-full opacity-10" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M0,0 C150,50 350,0 600,30 C850,60 1050,10 1200,40 L1200,120 L0,120 Z" fill="white" />
            </svg>

            <div class="flex flex-col md:flex-row items-center gap-12 relative z-10">
                <div class="md:w-1/2 space-y-6 text-center md:text-left">
                    <h2 class="text-3xl md:text-4xl font-bold leading-tight text-white">
                        Selamat Datang di <span class="text-yellow-200">SMK Connect</span>!
                    </h2>
                    <p class="text-lg text-white/90">
                        SMK Connect adalah platform freelance khusus siswa dan alumni SMK untuk mengembangkan karier, memperluas jaringan, serta menemukan peluang kerja nyata sesuai keahlianmu.
                    </p>
                    <a href="{{ route('login') }}"
                        class="bg-blue-300 text-white font-semibold rounded-lg px-3 py-1.5 md:px-5 md:py-2 text-xs md:text-sm hover:bg-blue-600 hover:shadow-lg transform hover:scale-105 transition-all duration-200 active:scale-95 inline-block mx-auto md:mx-0">
                        Bergabung Sekarang
                    </a>
                </div>

                <div class="md:w-1/2 flex justify-center hidden md:block">
                    <div class="relative w-full max-w-md">
                        <div class="rounded-2xl p-8 shadow-2xl" style="background: linear-gradient(180deg, #fff4d6 0%, #ffe2a8 50%, #ffd99b 100%);">
                            <div class="bg-white/90 backdrop-blur-sm rounded-xl p-6 shadow-inner">
                                <div class="relative h-40 flex items-end justify-center overflow-visible">
                                    <img
                                        src="{{ asset('images/thinking-about.png') }}"
                                        alt="SMK Connect Community"
                                        class="absolute -bottom-4 w-[50%] max-w-none object-contain z-10" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
