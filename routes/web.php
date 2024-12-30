<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/personalities', [App\Http\Controllers\ScholarController::class, 'index'])->name('personalities');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/personalities/profile', [App\Http\Controllers\ScholarController::class, 'profile'])->name('personalityProfile');
Route::get('/articles', [App\Http\Controllers\ArticlesController::class, 'index'])->name('articles');
Route::get('/books', [App\Http\Controllers\BooksController::class, 'index'])->name('books');
Route::get('/youtube', [App\Http\Controllers\YoutubeController::class, 'index'])->name('youtube');
Route::get('/fiqh', [App\Http\Controllers\FiqhController::class, 'index'])->name('fiqh');
Route::get('/akida', [App\Http\Controllers\AkidaController::class, 'index'])->name('akida');
Route::get('/books/book', [App\Http\Controllers\BooksController::class, 'index2'])->name('book');




include __DIR__ . DIRECTORY_SEPARATOR . 'dashboard.php';


