<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CalendarPrivateController;
use App\Http\Controllers\DashboardPrivateController;
use App\Http\Controllers\ProfilePrivateController;

Route::get('/', [DashboardPrivateController::class, 'index'])->name('dashboard.private.index');
Route::get('/calendar', [CalendarPrivateController::class, 'index'])->name('calendar.private.index');
Route::get('/profile', [ProfilePrivateController::class, 'index'])->name('profile.private.index');
