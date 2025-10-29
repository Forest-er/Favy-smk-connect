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
use App\Http\Controllers\ClientProfileController;
use App\Http\Controllers\LikedTaskController;

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
    // Form tambah task
    Route::get('/insert/task', [TaskController::class, 'create'])->name('client.orders.task');
    Route::post('/insert/task', [TaskController::class, 'store'])->name('client.orders.store');

    // Form edit task
    Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');

    // Update task (hasil dari form edit)
    Route::put('/tasks/{id}', [TaskController::class, 'update'])->name('tasks.update');

    // Hapus task
    Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');
    Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/tasks/{id}', [TaskController::class, 'update'])->name('tasks.update');

});


// ===== Freelancer Routes =====
Route::middleware(['auth', 'role:worker'])->group(function () {
    Route::get('/worker/dashboard', [FreelancerController::class, 'dashboard'])->name('worker.dashboard');
    Route::get('/worker/task/{id}', [TaskController::class, 'show'])->name('worker.task.show');
    Route::get('/worker/profile', [FreelancerController::class, 'profile'])->name('worker.profile');
    Route::get('/worker/projects', [FreelancerController::class, 'projects'])->name('worker.projects');
    
});

// ===== Client Routes =====
Route::middleware(['auth', 'role:client'])->group(function () {
    Route::get('/client/dashboard', [ClientController::class, 'dataview'])->name('client.dashboard');
    Route::get('/client/explore', [ClientController::class, 'explore'])->name('client.explore');
    Route::get('/client/explore/{id}', [ClientController::class, 'showFreelancer'])->name('client.explore.show');
    Route::get('/client/orders', [ClientController::class, 'orders'])->name('client.orders');
    Route::get('/client/messages', [ClientController::class, 'messages'])->name('client.messages');
    Route::get('/client/settings', [ClientController::class, 'settings'])->name('client.settings');
    Route::get('/client/task/{id}', [TaskController::class, 'show'])->name('client.task.show');
    Route::put('/client/update', [ClientController::class, 'update'])->name('client.update');
Route::post('/client/upload-photo', [ClientController::class, 'uploadPhoto'])->name('client.upload.photo');
    Route::get('client/task_show', [ClientController::class, 'myTask_show'])->name('client.task_show');
    Route::post('/tasks/{task}/like', [LikedTaskController::class, 'store'])->name('tasks.like');

Route::middleware(['auth'])->group(function () {
    Route::get('/client/client-profile', [ClientController::class, 'profile'])->name('client.profile'); 
    Route::post('/client/client-save', [ClientController::class, 'update'])->name('client.save');
});

Route::post('/client/upload-photo', [ClientProfileController::class, 'uploadPhoto'])
    ->name('client.upload.photo');

});

// ===== Profile Routes =====
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/client/dashboard', [DashboardController::class, 'dataview'])->name('role.dashboard');
Route::get('/insert/task', [DashboardController::class, 'insertTask'])->name('client.orders.task');

require __DIR__.'/auth.php';
Route::get('/freelancers', [FreelancerController::class, 'index'])->name('freelancer.index');
Route::get('/freelancer/{id}', [FreelancerController::class, 'show'])->name('freelancer.show');





