<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\Pages\UserController;
// datatable controller
use Illuminate\Support\Facades\Route;
// Datatable Controllers
use App\Http\Controllers\Dashboard\Pages\BookExplanationController;
use App\Http\Controllers\Dashboard\Pages\YoutubeController;
use App\Http\Controllers\Dashboard\Pages\BookController;
use App\Http\Controllers\Dashboard\Pages\CategoryController;
use App\Http\Controllers\Dashboard\Pages\ScholarController;
use App\Http\Controllers\Dashboard\Pages\ArticleController;

Route::prefix('dashboard')->name('dashboard.')->group(function () {

    // Dashboard routes
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'index')->name('welcome');
    });


    // ======================================================================= //
    // ====================== START USER DATATABLE =========================== //
    // ======================================================================= //

    Route::controller(UserController::class)->prefix("users")->name("users.")->group(function () {
        Route::post('/update', 'update')->name('update');
        Route::get('/{id}/show', 'show')->name('show');
        Route::get('/datatable', 'datatable')->name('datatable');
        Route::patch('/{id}/status', 'status')->name('status');
    });
    Route::resource('users', UserController::class)->except(['show', 'update']);

    // ======================================================================= //
    // ====================== END USER DATATABLE ============================= //

    // ======================================================================= //
    // ====================== START ARTICLE DATATABLE =========================== //
    // ======================================================================= //

    Route::controller(ArticleController::class)
        ->prefix('writing')
        ->name('writing.')
        ->group(function () {
            Route::post('/update', 'update')->name('update');
            Route::get('/{id}/show', 'show');
            Route::get('/datatable', 'datatable');
            Route::patch('/{id}/status', 'status')->name('status');
        });

    Route::resource('writing', ArticleController::class)
        ->except(['show', 'update']);

    // ======================================================================= //
    // ====================== END ARTICLE DATATABLE =========================== //
    // ======================================================================= //

    // ======================================================================= //
    // ====================== START SCHOLAR DATATABLE =========================== //
    // ======================================================================= //

    Route::controller(ScholarController::class)
        ->prefix('scholars')
        ->name('scholars.')
        ->group(function () {
            Route::post('/update', 'update')->name('update');
            Route::get('/{id}/show', 'show');
            Route::get('/datatable', 'datatable');
            Route::patch('/{id}/status', 'status')->name('status');
            Route::patch('/{id}/homepage', 'homepage')->name('homepage');
        });

    Route::resource('scholars', ScholarController::class)
        ->except(['show', 'update']);

    // ======================================================================= //
    // ====================== END SCHOLAR DATATABLE =========================== //
    // ======================================================================= //

    // ======================================================================= //
    // ====================== START CATEGORY DATATABLE =========================== //
    // ======================================================================= //

    Route::controller(CategoryController::class)
        ->prefix('categories')
        ->name('categories.')
        ->group(function () {
            Route::post('/update', 'update')->name('update');
            Route::get('/{id}/show', 'show');
            Route::get('/datatable', 'datatable');
        });

    Route::resource('categories', CategoryController::class)
        ->except(['show', 'update']);

    // ======================================================================= //
    // ====================== END CATEGORY DATATABLE =========================== //

    // ======================================================================= //
    // ====================== START BOOK DATATABLE =========================== //
    // ======================================================================= //

    Route::controller(BookController::class)
        ->prefix('books')
        ->name('books.')
        ->group(function () {
            Route::post('/update', 'update')->name('update');
            Route::get('/{id}/show', 'show')->name('show');
            Route::get('/datatable', 'datatable')->name('datatable');
            Route::patch('/{id}/status', 'status')->name('status');

            // ======================================================================= //
            // ====================== START BOOK_EXPLANATION DATATABLE =========================== //
            // ======================================================================= //

            Route::controller(BookExplanationController::class)
                ->prefix('explanations')
                ->name('explanations.')
                ->group(function () {
                    Route::post('/update', 'update')->name('update');
                    Route::get('/{id}/show', 'show')->name('show');
                    Route::get('/datatable', 'datatable')->name('datatable');
                    Route::patch('/{id}/status', 'toggleStatus')->name('toggleStatus');
                });

            Route::resource('explanations', BookExplanationController::class)
                ->except(['show', 'update']);

            // ======================================================================= //
            // ====================== END BOOK_EXPLANATION DATATABLE =========================== //
            // ======================================================================= //
        });

    Route::resource('books', BookController::class)
        ->except(['show', 'update']);

    // ======================================================================= //
    // ====================== END BOOK DATATABLE =========================== //
    // ======================================================================= //

    // ======================================================================= //
    // ====================== START YOUTUBE DATATABLE =========================== //
    // ======================================================================= //

    Route::controller(YoutubeController::class)
        ->prefix('youtubes')
        ->name('youtubes.')
        ->group(function () {
            Route::post('/update', 'update')->name('update');
            Route::get('/{id}/show', 'show')->name('show');
            Route::get('/datatable', 'datatable')->name('datatable');
            Route::patch('/{id}/status', 'toggleStatus')->name('toggleStatus');
        });

    Route::resource('youtubes', YoutubeController::class)
        ->except(['show', 'update']);

    // ======================================================================= //
    // ====================== END YOUTUBE DATATABLE =========================== //
    // ======================================================================= //


    include __DIR__ . DIRECTORY_SEPARATOR . 'Privileges.php';
});
