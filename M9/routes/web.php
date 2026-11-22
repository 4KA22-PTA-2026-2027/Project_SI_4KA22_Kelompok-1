<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Modules\Shop\Http\Controllers\ShopController;

// Halaman utama
Route::get('/', function () {
    if (auth()->check()) {
        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('pelanggan.home');
    }

    return redirect()->route('login');
})->name('home');

// Login dan Register
Route::middleware('guest')->group(function () {

    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.process');

    Route::get('/register', [AuthController::class, 'showRegister'])
        ->name('register');

    Route::post('/register', [AuthController::class, 'register'])
        ->name('register.process');
});

// Route setelah login
Route::middleware('auth')->group(function () {

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');

    // Dashboard Admin
    Route::middleware('role:admin')->group(function () {

        Route::get('/admin/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
    });

    // Beranda Pelanggan
    Route::middleware('role:pelanggan')->group(function () {

        Route::get('/pelanggan/beranda', function () {
            return view('pelanggan.home');
        })->name('pelanggan.home');
    });

    // Modul Shop
    Route::middleware('verified')->group(function () {
        Route::resource('shop', ShopController::class)
            ->names('shop');
    });
});
