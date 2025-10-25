@extends('layouts.app')

@section('content')

    <div class="bg-white min-h-screen text-gray-800">
        <!-- Container -->
        <div class="max-w-[1400px] mx-auto px-12 py-12 grid grid-cols-1 md:grid-cols-3 gap-14">

            <!-- Left: Profile Info -->
            <div class="rounded-2xl p-10 shadow-sm border border-pink-100 bg-white">
                <div class="flex flex-col items-center">
                    <!-- Avatar -->
                    <div
                        class="w-36 h-36 rounded-full bg-gradient-to-br from-pink-300 via-pink-400 to-rose-400 flex items-center justify-center text-white text-6xl font-bold shadow-md">
                        A
                    </div>

                    <!-- Name -->
                    <h2 class="mt-6 text-2xl font-semibold text-gray-800">Your Fiverr Name</h2>
                    <p class="text-gray-500 text-lg">@azizah_raw</p>
                </div>

                <hr class="my-8 border-pink-100">

                <!-- Info List -->
                <div class="space-y-5 text-lg">
                    <div class="flex items-center gap-3 text-gray-700">
                        <i class="bi bi-geo-alt text-[20px] text-pink-500"></i>
                        Located in Indonesia
                    </div>
                    <div class="flex items-center gap-3 text-gray-700">
                        <i class="bi bi-calendar3 text-[20px] text-pink-500"></i>
                        Joined in October 2025
                    </div>
                    <div class="flex items-center gap-3 text-gray-400">
                        <i class="bi bi-briefcase text-[20px] text-pink-400"></i>
                        Your industry
                    </div>
                    <div class="flex items-center gap-3 text-gray-400">
                        <i class="bi bi-translate text-[20px] text-pink-400"></i>
                        Preferred languages
                    </div>
                </div>
            </div>

            <!-- Right: Profile Details -->
            <div class="md:col-span-2 space-y-10">

                <!-- Info Box -->
                <div
                    class="border border-pink-100 bg-gradient-to-r from-pink-50 via-rose-50 to-white rounded-2xl px-8 py-6 flex justify-between items-start shadow-sm">
                    <div class="flex gap-4">
                        <i class="bi bi-info-circle text-pink-500 text-2xl mt-1"></i>
                        <div>
                            <p class="text-[17px] font-medium text-gray-800">
                                This is your profile when ordering services.
                            </p>
                            <p class="text-gray-600 text-[16px]">
                                For your freelancer profile click <a href="{{ route('auth.register.freelancer') }}"
                                    class="text-pink-500 hover:underline">here</a>.
                            </p>
                        </div>
                    </div>
                    <button class="text-[15px] text-gray-400 hover:text-gray-600">Dismiss</button>
                </div>

                <!-- Breadcrumb -->
                <div class="flex justify-between items-center text-[16px] text-gray-500 mb-6">
                    <div>
                        <a href="/client/dashboard" class="text-gray-500 font-medium hover:text-gray-800">Home</a> /
                        <a href="/client/profile" class="text-gray-500 font-medium hover:text-gray-800">My Profile</a> /
                        <a href="/insert/task" class="text-gray-500 font-medium hover:text-gray-800">My Tasks</a>
                    </div>
                </div>

                <!-- Intro Section -->
                <div>
                    <h1 class="text-3xl font-semibold text-gray-800 flex items-center gap-3">
                        <span>👋</span> Hi, Let's help freelancers get to know you
                    </h1>
                    <p class="text-gray-600 mt-3 text-[17px] leading-relaxed">
                        Get the most out of Fiverr by sharing a bit more about yourself and how you prefer to work with
                        freelancers.
                    </p>
                </div>

                <!-- Profile Checklist -->
                <div class="border border-pink-100 rounded-2xl p-8 bg-white shadow-sm">
                    <h3 class="text-[20px] font-semibold text-gray-800 mb-6">Profile checklist</h3>

                    <!-- Progress bar -->
                    <div class="w-full bg-pink-100 h-3 rounded-full mb-3">
                        <div class="bg-gradient-to-r from-pink-400 to-rose-500 h-3 rounded-full w-[25%]"></div>
                    </div>
                    <p class="text-gray-500 text-[15px] mb-6">25%</p>

                    <!-- Checklist Cards -->
                    <div class="space-y-5">
                        <div
                            class="border border-pink-100 rounded-xl p-6 hover:shadow-md transition bg-gradient-to-br from-white to-pink-50/40">
                            <div class="flex justify-between items-center mb-2">
                                <p class="text-gray-800 font-medium text-[17px]">Share how you plan to use Fiverr</p>
                                <span class="text-pink-500 text-[15px]">75%</span>
                            </div>
                            <p class="text-gray-500 text-[15px]">
                                Tell us if you're here to find services or offer them.
                            </p>
                        </div>

                        <div
                            class="border border-pink-100 rounded-xl p-6 hover:shadow-md transition bg-gradient-to-br from-white to-pink-50/40">
                            <div class="flex justify-between items-center mb-2">
                                <p class="text-gray-800 font-medium text-[17px]">Add details for your profile</p>
                                <button class="text-pink-500 text-[15px] hover:underline">Add</button>
                            </div>
                            <p class="text-gray-500 text-[15px]">
                                Upload a photo and info for a more tailored experience.
                            </p>
                        </div>

                        <div
                            class="border border-pink-100 rounded-xl p-6 hover:shadow-md transition bg-gradient-to-br from-white to-pink-50/40">
                            <div class="flex justify-between items-center mb-2">
                                <p class="text-gray-800 font-medium text-[17px]">Tell us about your business</p>
                                <button class="text-pink-500 text-[15px] hover:underline">Add</button>
                            </div>
                            <p class="text-gray-500 text-[15px]">
                                Get tailored recommendations and tips to help it grow.
                            </p>
                        </div>

                        <div
                            class="border border-pink-100 rounded-xl p-6 hover:shadow-md transition bg-gradient-to-br from-white to-pink-50/40">
                            <div class="flex justify-between items-center mb-2">
                                <p class="text-gray-800 font-medium text-[17px]">Set your communication preferences</p>
                                <button class="text-pink-500 text-[15px] hover:underline">Add</button>
                            </div>
                            <p class="text-gray-500 text-[15px]">
                                Let freelancers know your collaboration preferences.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

</div> @endsection