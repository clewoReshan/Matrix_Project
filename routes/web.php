<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'client.home')->name('home');
Route::view('/about', 'client.about')->name('about');
Route::view('/portfolio', 'client.portfolio')->name('portfolio');

Route::controller(UserController::class)->group(function () {
    Route::post('/user/register', 'registerUser')->name('reg_user');
    Route::get('/user/dashboard', 'userDashboard')->name('user_dashboard')->middleware('isLoggedIn');
});
Route::controller(AuthController::class)->group(function () {
    Route::post('/login', 'login')->name('login');
    Route::get('/logout', 'logout')->name('logout');
});

Route::get('clear_cache', function () {
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    \Illuminate\Support\Facades\Artisan::call('route:clear');
});
