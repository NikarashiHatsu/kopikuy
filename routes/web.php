<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', IndexController::class);

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => ['auth', 'verified']], function () {
    Route::get('/', App\Http\Controllers\DashboardController::class)->name('index');

    Route::group(['prefix' => 'master', 'as' => 'master.'], function () {
        Route::get('/category', \App\Http\Controllers\Master\CategoryController::class)->name('category.index');
        Route::get('/product', \App\Http\Controllers\Master\ProductController::class)->name('product.index');
        Route::get('/seat', \App\Http\Controllers\Master\SeatController::class)->name('seat.index');
        Route::get('/layout', \App\Http\Controllers\Master\LayoutController::class)->name('layout.index');
    });

    Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {
        Route::get('/web', \App\Http\Controllers\Settings\WebController::class)->name('web.index');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
