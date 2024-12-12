<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\SignupController;
use App\Http\Controllers\UserRecordsController;

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

// Log out route
Route::post('logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');

// Home page route
Route::get('/', function () {
    return view('index');
});


// Dashboard routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/transactions', [DashboardController::class, 'getTransactions']);

});

// User Records routes

Route::middleware(['auth', ])->group(function () {
    Route::get('/user-records', [UserRecordsController::class, 'index'])->name('user-records'); // Points to index()
    Route::get('/user-records-admin', [UserRecordsController::class, 'adminView'])->name('user-records-admin'); // Points to index()
    Route::post('/user-records', [UserRecordsController::class, 'store'])->name('user-records.store'); // Points to store()
    Route::put('/user-records/{id}', [UserRecordsController::class, 'update'])->name('user-records.update'); // Points to update()
    Route::post('/user-records/delete', [UserRecordsController::class, 'destroy'])->name('user-records.delete');
});


// Routes that require authentication
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Auth routes
require __DIR__.'/auth.php';
