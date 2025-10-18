<?php

use App\Http\Controllers\DashboardPrivateController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardPrivateController::class, 'index'])->name('dashboard.private.index');
