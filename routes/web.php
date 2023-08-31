<?php

namespace route;

use App\Http\Controllers\BlogsController;
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
    Route::view('addPost', 'admin.addPost')->name('Posts Add');
    Route::post('/store', [PostsController::class, 'store'])->name('store');
    Route::get('edit/{slug}', [PostsController::class, 'edit'])->name('Posts Edit');
    Route::put('edit/{slug}', [PostsController::class, 'update']);
    Route::get('delete/{slug}', [PostsController::class, 'destroy']);
});
Route::prefix('blog')->group(function () {
    Route::view('/', 'blogPage.index')->name('home');
    Route::get('/list-blog', [BlogsController::class, 'index'])->name('list-blog');
    Route::get('/detail-blog/{slug}', [BlogsController::class, 'blogBySlug'])->name('detail-blog');
});
