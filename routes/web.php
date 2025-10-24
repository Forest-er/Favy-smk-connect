<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FreelancerController;


Route::get('/', function () { return view('tester'); });

// Auth
Route::get('/auth', function () { return view('auth.login'); })->name('login');
Route::get('/choose-role', function () { return view('auth.choose-role'); })->name('choose.role');

// Register Client / Freelancer
Route::get('/register/{role}', function ($role) {
    if ($role === 'freelancer') return view('auth.register.freelancer');
    elseif ($role === 'client') return view('auth.register.client');
    else abort(404);
})->name('register.role');

Route::post('/register/client', [RegisterController::class, 'registerClient'])->name('register.client');
Route::post('/register/freelancer', [RegisterController::class, 'registerFreelancer'])->name('register.freelancer');

// Dashboard Client
Route::middleware(['auth', 'role:client'])->group(function () {
    Route::get('/client/dashboard', [ClientController::class, 'dashboard'])->name('client.dashboard');
    Route::get('/client/explore', [ClientController::class, 'explore'])->name('client.explore');
    Route::get('/client/explore/{id}', [ClientController::class, 'showFreelancer'])->name('client.explore.show');
    Route::get('/client/orders', [ClientController::class, 'orders'])->name('client.orders');
    Route::get('/client/messages', [ClientController::class, 'messages'])->name('client.messages');
    Route::get('/client/settings', [ClientController::class, 'settings'])->name('client.settings');
});

// Dashboard Freelancer
Route::middleware(['auth', 'role:freelancer'])->group(function () {
    Route::get('/freelancer/dashboard', [FreelancerController::class, 'dashboard'])->name('freelancer.dashboard');
});

Route::get('/client-dashboard', function () {
    return view('client.dashboard'); // memanggil resources/views/client/dashboard.blade.php
});
Route::get('/freelancers', [FreelancerController::class, 'index'])->name('freelancer.index');
Route::get('/freelancer/{id}', [FreelancerController::class, 'show'])->name('freelancer.show');
