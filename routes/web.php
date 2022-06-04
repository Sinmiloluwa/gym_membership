<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Authentication Routes
Route::controller(AuthController::class)->group( function () {
    Route::get('/login', 'create')->name('login');
    Route::get('/register', 'regIndex')->name('register');
    Route::post('/registerUser', 'store')->name('register');
    Route::post('loginUser', 'login')->name('login');
});

Route::resource('dashboard', DashboardController::class);


Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::post('/logout', function () {
    dd('logging the user out');
});

Route::get('/users', function () {
    return Inertia::render('Users', [
        'time' => now()->toTimeString()
    ]);
});
