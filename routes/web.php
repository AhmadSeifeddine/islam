<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\File;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
], function () {
    // Landing page
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Auth routes
    Auth::routes(['verify' => true]);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/personalities', [App\Http\Controllers\ScholarController::class, 'index'])->name('personalities');
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
    Route::get('/personalities/{id}', [App\Http\Controllers\ScholarController::class, 'profile'])->name('personalityProfile');
    Route::get('/articles', [App\Http\Controllers\ArticlesController::class, 'index'])->name('articles');
    Route::get('/books', [App\Http\Controllers\BooksController::class, 'index'])->name('books');
    Route::get('/youtube', [App\Http\Controllers\YoutubeController::class, 'index'])->name('youtube');
    Route::get('/fiqh', [App\Http\Controllers\FiqhController::class, 'index'])->name('fiqh');
    Route::get('/akida', [App\Http\Controllers\AkidaController::class, 'index'])->name('akida');
    Route::get('/books/{id}', [App\Http\Controllers\BooksController::class, 'BookShow'])->name('BookShow');

    // Logout route
    Route::middleware(['auth'])->group(function () {
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    });

    Route::middleware(['verified'])->group(function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

        include __DIR__ . DIRECTORY_SEPARATOR . 'dashboard.php';
    });
});

