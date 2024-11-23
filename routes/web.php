<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SignupController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('signup', [SignupController::class, 'showStep1'])->name('signup');
Route::post('signup', [SignupController::class, 'handleStep1'])->name('signup.step1.process');

Route::get('signup/step2', [SignupController::class, 'showStep2'])
    ->name('signup.step2')
    ->middleware('check.signup.step');

Route::post('signup/step2', [SignupController::class, 'handleStep2'])->name('signup.step2.process');

Route::get('signup/complete', [SignupController::class, 'complete'])->name('signup.complete')
->middleware('check.signup.step');

// Home page route
Route::get('/', function () {
    return view('index');
});

// Dashboard routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::post('/dashboard/transactions', [DashboardController::class, 'getModalTransactions'])->name('dashboard.transactions');
});

// Routes that require authentication
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth routes
require __DIR__.'/auth.php';
