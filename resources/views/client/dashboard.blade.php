@extends('layouts.app')

@section('title', 'Dashboard Client')

@section('content')
    <div class="max-w-7xl mx-auto px-1">
        <!-- Hero Section -->
        <div class="relative bg-blue-600 text-white rounded-3xl p-10 mb-10 overflow-hidden">
            <!-- Background decorative shape -->
            <div class="absolute -top-10 -right-10 w-72 h-72 bg-blue-500 rounded-full opacity-30"></div>

            <div class="relative z-10 max-w-7xl mx-auto">
                <!-- Greeting -->
                <h1 class="text-3xl md:text-4xl font-bold mb-4">Welcome back, Jijul 👋</h1>
                <p class="mb-6 text-blue-100">Find projects, freelancers, and more!</p>

                <!-- Search / Filter -->
                <div class="relative flex flex-col md:flex-row gap-3 mt-12">

                    <!-- Ilustrasi Cewek -->
                    <img src="/images/duduk.png" class="absolute -top-[60px] right-[455px] w-40 z-20 select-none">

                    <!-- Search Input with Icon -->
                    <div class="relative w-[50%]">
                        <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500">
                            <i class="bi bi-search"></i>
                        </span>
                        <input type="text" placeholder="Search projects..."
                            class="w-full pl-12 p-3 border border-gray-300 rounded-full text-gray-800 focus:outline-none focus:border-blue-500">
                    </div>

                </div>



            </div>
        </div>

        <!-- Categories Section -->
        <!-- Categories Section -->
        <div class="mb-10 flex items-center justify-between">
            <h2 class="text-2xl font-bold">Explore Categories</h2>
            <div class="flex space-x-2">
                <button
                    class="w-8 h-8 flex items-center justify-center bg-white rounded-full shadow hover:bg-gray-100 transition">
                    <svg class="w-4 h-4 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button
                    class="w-8 h-8 flex items-center justify-center bg-white rounded-full shadow hover:bg-gray-100 transition">
                    <svg class="w-4 h-4 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Category Icons Grid -->
        <div class="container mb-10 w-full flex flex-row items-center space-x-6 overflow-x-auto py-10 scrollbar-hide">

            @php
                $styles = [
                    [
                        'bg' => '#ffe2a8',
                        'color' => '#7a4a00',
                        'shadow' => 'hover:shadow-[0_6px_20px_rgba(255,226,168,0.7)]',
                        'icon' => '<path d="M8.25 15L3.75 12l4.5-3m7.5 6l4.5-3-4.5-3m-3.75-3.75L9 21" />'
                    ],
                    [
                        'bg' => '#eaa7f1',
                        'color' => '#6d005f',
                        'shadow' => 'hover:shadow-[0_6px_20px_rgba(234,167,241,0.7)]',
                        'icon' => '<path d="M8.25 8.25l7.5-2.25v9l-7.5 2.25v-9zM19.5 12a3 3 0 11-6 0" />'
                    ],
                    [
                        'bg' => '#7ac8ff',
                        'color' => '#0f3a4b',
                        'shadow' => 'hover:shadow-[0_6px_20px_rgba(122,200,255,0.6)]',
                        'icon' => '<path d="M12 4.5v15m-7.5-7.5h15" />'
                    ],
                ];
            @endphp

            @foreach ($jurusans as $index => $jurusan)
                @php
                    $style = $styles[$index % count($styles)];
                @endphp

                <div class="group bg-white rounded-xl shadow flex flex-col items-center justify-center 
                    hover:-translate-y-1 transition cursor-pointer shrink-0 {{ $style['shadow'] }}"
                    style="width: 200px; height: 140px; min-width: 140px;">

                    <div class="rounded-full w-12 h-12 flex items-center justify-center mb-3 transition-all 
                        group-hover:brightness-110"
                        style="background:{{ $style['bg'] }}; color:{{ $style['color'] }};">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                            {!! $style['icon'] !!}
                        </svg>
                    </div>

                    <p class="text-sm font-medium text-gray-700 text-center px-2 leading-tight">
                        {{ $jurusan->nama_jurusan }}
                    </p>
                </div>
            @endforeach
        </div>


        <!-- Freelancer populer-->
        <section class="w-full mb-10 px-6">
            <h2 class="text-lg font-semibold text-pink-400 flex items-center gap-1 mb-1">
                Freelancer Terpopuler <span>🔥</span>
            </h2>
            <p class="text-gray-400 mb-6 text-sm">Talent-talent terbaik minggu ini</p>
             <div class="flex space-x-2">
                <button
                    class="w-8 h-8 flex items-center justify-center bg-white rounded-full shadow hover:bg-gray-100 transition">
                    <svg class="w-4 h-4 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button
                    class="w-8 h-8 flex items-center justify-center bg-white rounded-full shadow hover:bg-gray-100 transition">
                    <svg class="w-4 h-4 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                <!-- CARD 1 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden transform hover:-translate-y-1 transition">
                    <div class="relative">
                        <img src="https://images.pexels.com/photos/1181244/pexels-photo-1181244.jpeg"
                            class="w-full h-40 object-cover">
                        <span
                            class="absolute top-3 left-3 px-3 py-1 text-xs font-semibold rounded-full text-white bg-purple-500">Web
                            Developer</span>
                        <span class="absolute top-3 right-3 px-2 py-1 text-xs font-semibold rounded-md bg-white shadow">⭐
                            4.9</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-base font-semibold text-gray-800 leading-tight mb-2">John Doe</h3>
                        <div class="flex items-center gap-4 text-gray-500 text-xs mb-4">
                            <span class="flex items-center gap-1"><i class="bi bi-briefcase"></i> 25 Projects</span>
                            <span class="flex items-center gap-1"><i class="bi bi-people"></i> 185 Clients</span>
                        </div>
                        <div class="flex items-center justify-between mb-4">
                            <p class="text-lg font-bold text-gray-800">$560.00/hr</p>
                            <div class="flex items-center gap-2">
                                <img src="https://i.pravatar.cc/150?img=1" class="w-7 h-7 rounded-full border">
                                <span class="text-xs text-gray-600">Top Rated</span>
                            </div>
                        </div>
                        <button
                            class="w-full bg-pink-500 hover:bg-pink-600 text-white text-sm font-semibold py-2 px-4 rounded-lg transition">
                            Hire Now
                        </button>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden transform hover:-translate-y-1 transition">
                    <div class="relative">
                        <img src="https://images.pexels.com/photos/6779531/pexels-photo-6779531.jpeg"
                            class="w-full h-40 object-cover">
                        <span
                            class="absolute top-3 left-3 px-3 py-1 text-xs font-semibold rounded-full text-white bg-pink-500">UI/UX
                            Designer</span>
                        <span class="absolute top-3 right-3 px-2 py-1 text-xs font-semibold rounded-md bg-white shadow">⭐
                            5.0</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-base font-semibold text-gray-800 leading-tight mb-2">Jane Smith</h3>
                        <div class="flex items-center gap-4 text-gray-500 text-xs mb-4">
                            <span class="flex items-center gap-1"><i class="bi bi-briefcase"></i> 8 Projects</span>
                            <span class="flex items-center gap-1"><i class="bi bi-people"></i> 400 Clients</span>
                        </div>
                        <div class="flex items-center justify-between mb-4">
                            <p class="text-lg font-bold text-gray-800">$160.00/hr</p>
                            <div class="flex items-center gap-2">
                                <img src="https://i.pravatar.cc/150?img=2" class="w-7 h-7 rounded-full border">
                                <span class="text-xs text-gray-600">Top Rated</span>
                            </div>
                        </div>
                        <button
                            class="w-full bg-pink-500 hover:bg-pink-600 text-white text-sm font-semibold py-2 px-4 rounded-lg transition">
                            Hire Now
                        </button>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden transform hover:-translate-y-1 transition">
                    <div class="relative">
                        <img src="https://images.pexels.com/photos/1181675/pexels-photo-1181675.jpeg"
                            class="w-full h-40 object-cover">
                        <span
                            class="absolute top-3 left-3 px-3 py-1 text-xs font-semibold rounded-full text-white bg-blue-500">Data
                            Scientist</span>
                        <span class="absolute top-3 right-3 px-2 py-1 text-xs font-semibold rounded-md bg-white shadow">⭐
                            4.8</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-base font-semibold text-gray-800 leading-tight mb-2">Alex Taylor</h3>
                        <div class="flex items-center gap-4 text-gray-500 text-xs mb-4">
                            <span class="flex items-center gap-1"><i class="bi bi-briefcase"></i> 12 Projects</span>
                            <span class="flex items-center gap-1"><i class="bi bi-people"></i> 350 Clients</span>
                        </div>
                        <div class="flex items-center justify-between mb-4">
                            <p class="text-lg font-bold text-gray-800">$432.00/hr</p>
                            <div class="flex items-center gap-2">
                                <img src="https://i.pravatar.cc/150?img=3" class="w-7 h-7 rounded-full border">
                                <span class="text-xs text-gray-600">Top Rated</span>
                            </div>
                        </div>
                        <button
                            class="w-full bg-pink-500 hover:bg-pink-600 text-white text-sm font-semibold py-2 px-4 rounded-lg transition">
                            Hire Now
                        </button>
                    </div>
                </div>

                <!-- CARD 4 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden transform hover:-translate-y-1 transition">
                    <div class="relative">
                        <img src="https://images.pexels.com/photos/3184405/pexels-photo-3184405.jpeg"
                            class="w-full h-40 object-cover">
                        <span
                            class="absolute top-3 left-3 px-3 py-1 text-xs font-semibold rounded-full text-white bg-green-500">Digital
                            Marketer</span>
                        <span class="absolute top-3 right-3 px-2 py-1 text-xs font-semibold rounded-md bg-white shadow">⭐
                            4.7</span>
                    </div>
                    <div class="p-4">
                        <h3 class="text-base font-semibold text-gray-800 leading-tight mb-2">Sara Lee</h3>
                        <div class="flex items-center gap-4 text-gray-500 text-xs mb-4">
                            <span class="flex items-center gap-1"><i class="bi bi-briefcase"></i> 20 Projects</span>
                            <span class="flex items-center gap-1"><i class="bi bi-people"></i> 300 Clients</span>
                        </div>
                        <div class="flex items-center justify-between mb-4">
                            <p class="text-lg font-bold text-gray-800">$280.00/hr</p>
                            <div class="flex items-center gap-2">
                                <img src="https://i.pravatar.cc/150?img=4" class="w-7 h-7 rounded-full border">
                                <span class="text-xs text-gray-600">Top Rated</span>
                            </div>
                        </div>
                        <button
                            class="w-full bg-pink-500 hover:bg-pink-600 text-white text-sm font-semibold py-2 px-4 rounded-lg transition">
                            Hire Now
                        </button>
                    </div>
                </div>
            </div>
        </section>




        <!-- Gigs You may-->
        <h2 class="text-2xl font-bold mb-6 text-gray-900">Gigs you may like</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">

            <!-- Card Example -->
            <div
                class="bg-gradient-to-br from-white via-gray-50 to-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 p-5 relative">
                <!-- Badge kiri -->
                <span class="absolute top-4 left-4 px-3 py-1 text-xs font-semibold rounded-full bg-pink-400 text-white">
                    Best Seller
                </span>

                <img src="https://i.pravatar.cc/150?img=1" class="rounded-xl w-full mb-4 h-44 object-cover shadow-sm">

                <div class="flex items-center mb-3">
                    <img src="https://i.pravatar.cc/30?img=1" class="w-10 h-10 rounded-full mr-3 border-2 border-pink-300">
                    <div class="flex flex-col flex-1">
                        <!-- Nama + Like icon disamping -->
                        <div class="flex items-center justify-between">
                            <p class="text-gray-900 font-semibold text-sm">Sarah Anderson</p>
                            <button class="flex items-center gap-1 text-gray-400 hover:text-blue-500 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M2 20h2V9H2v11zm20-9c0-1.1-.9-2-2-2h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L13.17 2 7.59 7.59C7.22 7.95 7 8.45 7 9v9c0 1.1.9 2 2 2h7c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73v-1z" />
                                </svg>
                            </button>
                        </div>
                        <p class="text-gray-500 text-xs">Level 2 Seller</p>
                    </div>
                </div>

                <p class="text-gray-700 text-sm mb-4">
                    I will design modern UI/UX for mobile app or website
                </p>

                <div class="flex items-center justify-between mb-4">
                    <span class="flex items-center gap-1 text-yellow-400 font-semibold text-sm">
                        ★ 4.9 (234)
                    </span>
                    <span class="text-gray-500 text-xs">547 orders</span>
                </div>

                <div class="flex justify-between text-gray-500 text-xs font-medium">
                    <span>3 days</span>
                    <span>Starting at $50</span>
                </div>
            </div>

            <!-- Card lain -->
            <div
                class="bg-gradient-to-br from-white via-gray-50 to-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow duration-300 p-5 relative">
                <span class="absolute top-4 left-4 px-3 py-1 text-xs font-semibold rounded-full bg-blue-400 text-white">Top
                    Rated</span>

                <img src="https://i.pravatar.cc/150?img=2" class="rounded-xl w-full mb-4 h-44 object-cover shadow-sm">
                <div class="flex items-center mb-3">
                    <img src="https://i.pravatar.cc/30?img=2" class="w-10 h-10 rounded-full mr-3 border-2 border-blue-300">
                    <div class="flex flex-col flex-1">
                        <!-- Nama + Like icon -->
                        <div class="flex items-center justify-between">
                            <p class="text-gray-900 font-semibold text-sm">Mike Chen</p>
                            <button class="flex items-center gap-1 text-gray-400 hover:text-blue-500 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M2 20h2V9H2v11zm20-9c0-1.1-.9-2-2-2h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L13.17 2 7.59 7.59C7.22 7.95 7 8.45 7 9v9c0 1.1.9 2 2 2h7c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73v-1z" />
                                </svg>
                            </button>
                        </div>
                        <p class="text-gray-500 text-xs">Top Rated Seller</p>
                    </div>
                </div>

                <p class="text-gray-700 text-sm mb-4">I will develop full-stack React application with Node.js</p>
                <div class="flex items-center justify-between mb-4">
                    <span class="flex items-center gap-1 text-yellow-400 font-semibold text-sm">★ 5 (189)</span>
                    <span class="text-gray-500 text-xs">423 orders</span>
                </div>
                <div class="flex justify-between text-gray-500 text-xs font-medium">
                    <span>5 days</span>
                    <span>Starting at $120</span>
                </div>
            </div>

        </div>

@endsection