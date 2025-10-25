<!-- resources/views/client/profile.blade.php -->
@extends('layouts.app')

@section('content')
<div class="bg-white min-h-screen text-gray-800">

    <!-- Container -->
    <div class="max-w-[1400px] mx-auto px-12 py-12 grid grid-cols-1 md:grid-cols-3 gap-14">

        <!-- Left: Profile Info -->
        <div class="border border-gray-200 rounded-2xl p-10 shadow-sm">
            <div class="flex flex-col items-center">
                <!-- Avatar -->
                <div class="w-36 h-36 rounded-full bg-[#c74e7c] flex items-center justify-center text-white text-6xl font-bold">
                    A
                </div>

                <!-- Name -->
                <h2 class="mt-6 text-2xl font-semibold text-gray-800">Your Fiverr Name</h2>
                <p class="text-gray-500 text-lg">@azizah_raw</p>
            </div>

            <hr class="my-8 border-gray-200">

            <!-- Info List -->
            <div class="space-y-5 text-lg">
                <div class="flex items-center gap-3 text-gray-700">
                    <i class="bi bi-geo-alt text-[20px]"></i>
                    Located in Indonesia
                </div>
                <div class="flex items-center gap-3 text-gray-700">
                    <i class="bi bi-calendar3 text-[20px]"></i>
                    Joined in October 2025
                </div>
                <div class="flex items-center gap-3 text-gray-400">
                    <i class="bi bi-briefcase text-[20px]"></i>
                    Your industry
                </div>
                <div class="flex items-center gap-3 text-gray-400">
                    <i class="bi bi-translate text-[20px]"></i>
                    Preferred languages
                </div>
            </div>
        </div>

        <!-- Right: Profile Details -->
        <div class="md:col-span-2 space-y-10">

            <!-- Info Box -->
            <div class="border border-blue-100 bg-blue-50 rounded-2xl px-8 py-6 flex justify-between items-start">
                <div class="flex gap-4">
                    <i class="bi bi-info-circle text-blue-500 text-2xl mt-1"></i>
                    <div>
                        <p class="text-[17px] font-medium text-gray-800">
                            This is your profile when ordering services.
                        </p>
                        <p class="text-gray-600 text-[16px]">
                            For your freelancer profile click <a href="#" class="text-blue-500 hover:underline">here</a>.
                        </p>
                    </div>
                </div>
                <button class="text-[15px] text-gray-500 hover:text-gray-700">Dismiss</button>
            </div>

            <!-- Breadcrumb -->
            <div class="text-[16px] text-gray-500">
                Home / <span class="text-gray-800 font-medium">My Profile</span>
            </div>

            <!-- Intro Section -->
            <div>
                <h1 class="text-3xl font-semibold text-gray-800 flex items-center gap-3">
                    <span>👋</span> Hi, Let's help freelancers get to know you
                </h1>
                <p class="text-gray-600 mt-3 text-[17px] leading-relaxed">
                    Get the most out of Fiverr by sharing a bit more about yourself and how you prefer to work with freelancers.
                </p>
            </div>

            <!-- Profile Checklist -->
            <!-- Profile Checklist -->
<div class="border border-gray-200 rounded-2xl p-8">
    <h3 class="text-[20px] font-semibold text-gray-800 mb-6">Profile checklist</h3>

    <!-- Progress bar -->
    <div class="w-full bg-gray-100 h-3 rounded-full mb-3">
        <div class="bg-gray-800 h-3 rounded-full w-[25%]"></div>
    </div>
    <p class="text-gray-500 text-[15px] mb-6">25%</p>

    <!-- Checklist Card 1 -->
    <div class="border border-gray-200 rounded-xl p-6 hover:shadow-sm transition mb-5">
        <div class="flex justify-between items-center mb-2">
            <p class="text-gray-800 font-medium text-[17px]">Share how you plan to use Fiverr</p>
            <span class="text-gray-600 text-[15px]">75%</span>
        </div>
        <p class="text-gray-500 text-[15px]">
            Tell us if you're here to find services or offer them.
        </p>
    </div>

    <!-- Checklist Card 2 -->
    <div class="border border-gray-200 rounded-xl p-6 hover:shadow-sm transition mb-5">
        <div class="flex justify-between items-center mb-2">
            <p class="text-gray-800 font-medium text-[17px]">Add details for your profile</p>
            <button class="text-blue-500 text-[15px] hover:underline">Add</button>
        </div>
        <p class="text-gray-500 text-[15px]">
            Upload a photo and info for a more tailored experience.
        </p>
    </div>

    <!-- Checklist Card 3 -->
    <div class="border border-gray-200 rounded-xl p-6 hover:shadow-sm transition mb-5">
        <div class="flex justify-between items-center mb-2">
            <p class="text-gray-800 font-medium text-[17px]">Tell us about your business</p>
            <button class="text-blue-500 text-[15px] hover:underline">Add</button>
        </div>
        <p class="text-gray-500 text-[15px]">
            Get tailored recommendations and tips to help it grow.
        </p>
    </div>

    <!-- Checklist Card 4 -->
    <div class="border border-gray-200 rounded-xl p-6 hover:shadow-sm transition">
        <div class="flex justify-between items-center mb-2">
            <p class="text-gray-800 font-medium text-[17px]">Set your communication preferences</p>
            <button class="text-blue-500 text-[15px] hover:underline">Add</button>
        </div>
        <p class="text-gray-500 text-[15px]">
            Let freelancers know your collaboration preferences.
        </p>
    </div>
</div>

        </div>
    </div>
</div>
@endsection
