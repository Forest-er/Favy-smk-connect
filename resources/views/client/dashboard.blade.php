@extends('layouts.app')

@section('title', 'Dashboard Client')

@section('content')
<div class="max-w-7xl mx-auto px-6">
  <h1 class="text-2xl font-semibold mb-6">Welcome back, Jjjul</h1>

  <!-- Recommended for You -->
  <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-10">
    @foreach (['Post a project brief','Switch to Fiverr Pro','Download the Fiverr app'] as $rec)
      <div class="bg-white p-6 rounded-xl shadow hover:shadow-md transition">
        <p class="font-medium">{{ $rec }}</p>
      </div>
    @endforeach
  </div>

  <!-- Based on what you might be looking for -->
  <h2 class="text-xl font-semibold mb-4">Based on what you might be looking for</h2>
  <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 mb-10">
    @foreach (range(1,5) as $i)
      <div class="bg-white rounded-xl shadow hover:shadow-md p-3 text-center">
        <img src="https://i.pravatar.cc/150?img={{ $i }}" class="mx-auto rounded-lg mb-2">
        <p class="font-medium">Freelancer {{ $i }}</p>
        <p class="text-sm text-gray-500">From $100</p>
      </div>
    @endforeach
  </div>

  <!-- Gigs you may like -->
  <h2 class="text-xl font-semibold mb-4">Gigs you may like</h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-10">
    @foreach (range(1,8) as $i)
      <div class="bg-white rounded-xl shadow hover:shadow-md p-4">
        <img src="https://i.pravatar.cc/150?img={{ $i }}" class="rounded-lg w-full mb-3">
        <h3 class="font-medium mb-1">Gig {{ $i }}</h3>
        <p class="text-gray-500 text-sm">From ${{ 50 + $i*10 }}</p>
      </div>
    @endforeach
  </div>
</div>
@endsection
