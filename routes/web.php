<?php

namespace route;

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

Route::get('/', [DashboardController::class, 'index'])->name('Dashboard');
Route::prefix('posts')->group(function () {
    Route::get('/', [PostsController::class, 'index'])->name('Posts');
    // Route::view('/', 'Posts')->name('Posts');
    Route::view('addPost', 'addPost')->name('Posts Add');
    Route::post('/store', [PostsController::class, 'store']);
});
