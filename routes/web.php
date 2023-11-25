<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'client.home')->name('home');
Route::view('/about', 'client.about')->name('about');
Route::view('/portfolio', 'client.portfolio')->name('portfolio');



Route::group(['middleware' => ['web']], function () {
    Route::post('/user/register', [UserController::class, 'registerUser'])->name('reg_user');
});
