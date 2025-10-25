<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

// public controllers
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MeCalendarPrivateController;
use App\Http\Controllers\GoogleProviderController;

// private controllers
use App\Http\Controllers\CalendarPrivateController;
use App\Http\Controllers\DashboardPrivateController;
use App\Http\Controllers\ProfilePrivateController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\IsAuthenticateMiddleware;

// auth controllers
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// google oauth controllers
Route::get('/auth/redirect', [GoogleProviderController::class, 'redirect'])->name('auth.google.redirect');
Route::get('/auth/callback', [GoogleProviderController::class, 'callback'])->name('auth.google.callback');

// public routes
Route::get('/login', [LoginController::class, 'index'])->name('login.index');

Route::get("/me/calendar", [MeCalendarPrivateController::class, "index"])->name("me.calendar.private.index");


Route::middleware([IsAuthenticateMiddleware::class])->group(function () {
    // private routes
    Route::get('/signup', [SignUpController::class, 'index'])->name('signup.index');
    Route::get('/dashboard', [DashboardPrivateController::class, 'index'])->name('dashboard.private.index');
    Route::get('/calendar', [CalendarPrivateController::class, 'index'])->name('calendar.private.index');
    Route::get('/profile', [ProfilePrivateController::class, 'index'])->name('profile.private.index');
});
