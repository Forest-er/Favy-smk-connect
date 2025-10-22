<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('tester');
});

// ===== Register Routes =====
Route::get('/register/{role}', function ($role) {
    if ($role === 'freelancer') {
        return view('auth.register.freelancer');
    } elseif ($role === 'client') {
        return view('auth.register.client');
    } else {
        abort(404);
    }
})->name('register.role');

Route::post('/register/client', [RegisterController::class, 'registerClient'])->name('register.client');
Route::post('/register/freelancer', [RegisterController::class, 'registerFreelancer'])->name('register.freelancer');

// ===== Auth Routes =====
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// ===== Dashboard Routes =====
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ===== Client Routes =====
Route::middleware(['auth', 'role:client'])->group(function () {
    Route::get('/client/dashboard', [ClientController::class, 'dashboard'])->name('client.dashboard');
    Route::get('/client/explore', [ClientController::class, 'explore'])->name('client.explore');
    Route::get('/client/explore/{id}', [ClientController::class, 'showFreelancer'])->name('client.explore.show');
    Route::get('/client/orders', [ClientController::class, 'orders'])->name('client.orders');
    Route::get('/client/messages', [ClientController::class, 'messages'])->name('client.messages');
    Route::get('/client/settings', [ClientController::class, 'settings'])->name('client.settings');
});

// ===== Freelancer Routes =====
Route::middleware(['auth', 'role:freelancer'])->group(function () {
    Route::get('/freelancer/dashboard', [FreelancerController::class, 'dashboard'])->name('freelancer.dashboard');
});

// ===== Profile Routes =====
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
