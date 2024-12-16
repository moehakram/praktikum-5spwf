<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('home');

Route::redirect('home', '/');

Route::controller(AuthController::class)->group(function(){

    Route::middleware('guest')->group(function(){
        Route::get('/login', 'showLogin');
        Route::post('/login', 'login')->name('login');
    });

    Route::middleware('auth')->group(function(){
        Route::get('/user/akun', 'profile')->name('profile');
        Route::get('/logout', 'logout')->name('logout');
    });
});