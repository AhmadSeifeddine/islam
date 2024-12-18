<?php

use App\Http\Controllers\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;

Route::controller(DashboardController::class)->prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('/', 'index')->name('index');
});
