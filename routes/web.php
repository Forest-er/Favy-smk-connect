<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('page-guest.home');
});

Route::get('/choose_role', function(){return view('auth.choose-role');});

// Untuk freelancer
Route::get('/register/freelancer', [FreelancerController::class, 'jurusRegist'])
    ->name('auth.register.freelancer');

// Untuk client
Route::get('/register/client', function () {
    return view('auth.register.client');
})->name('auth.register.client');


Route::post('/register/client', [RegisterController::class, 'registerClient'])->name('register.client');
Route::post('/register/freelancer', [RegisterController::class, 'registerFreelancer'])->name('register.freelancer');
Route::get('/homepage', [HomeController::class, 'homepage'])->name('homepage');
Route::get('/register/freelancer', [FreelancerController::class, 'jurusRegist'])
    ->name('auth.register.freelancer');

// ===== Auth Routes =====
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::get('/insert/task', [TaskController::class, 'create'])->name('client.orders.task');
    Route::post('/insert/task', [TaskController::class, 'store'])->name('client.orders.task');
    Route::get('/{role}/dashboard', function ($role) {
        $user = auth()->user();

        // Cegah akses ke role lain
        if ($user->role !== $role) {
            abort(403, 'Kamu tidak memiliki akses ke halaman ini.');
        }

        // Arahkan ke dashboard sesuai role
        switch ($role) {
            case 'worker':
                return app(FreelancerController::class)->dashboard();
            case 'client':
                return app(ClientController::class)->dashboard();
            case 'admin':
                return redirect()->route('admin.dashboard');
            default:
                abort(404);
        }
    })->name('user.dashboard');
});

// ===== Client Routes =====
Route::middleware(['auth', 'role:client'])->group(function () {
    Route::get('/client/dashboard', [ClientController::class, 'dashboard'])->name('client.dashboard');
    Route::get('/client/explore', [ClientController::class, 'explore'])->name('client.explore');
    Route::get('/client/explore/{id}', [ClientController::class, 'showFreelancer'])->name('client.explore.show');
    Route::get('/client/orders', [ClientController::class, 'orders'])->name('client.orders');
    Route::get('/client/messages', [ClientController::class, 'messages'])->name('client.messages');
    Route::get('/client/settings', [ClientController::class, 'settings'])->name('client.settings');
    Route::get('/client/profile', [ClientController::class, 'profile'])->name('client.profile');
    Route::put('/client/profile', [ClientController::class, 'update'])->name('client.update');
    Route::get('/client/task/{id}', [TaskController::class, 'show'])->name('task.show');
    Route::get('/api/task/{id}', [TaskController::class, 'showJson'])->name('task.showJson');

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

Route::get('/{role}/dashboard', [DashboardController::class, 'dataview'])->name('role.dashboard');
Route::get('/insert/task', [DashboardController::class, 'insertTask'])->name('client.orders.task');

require __DIR__.'/auth.php';
Route::get('/freelancers', [FreelancerController::class, 'index'])->name('freelancer.index');
Route::get('/freelancer/{id}', [FreelancerController::class, 'show'])->name('freelancer.show');





