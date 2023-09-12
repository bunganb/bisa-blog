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
    Route::match(['get', 'post'], '/store', [PostsController::class, 'store'])->name('store');
    Route::match(['get', 'put'], 'edit/{slug}', [PostsController::class, 'update'])->name('Posts Edit');
    Route::get('delete/{slug}', [PostsController::class, 'destroy'])->name('delete');
});
Route::prefix('blog')->group(function () {
    Route::get('/', [BlogsController::class, 'index'])->name('home');
    Route::get('/about', [BlogsController::class, 'about'])->name('about');
    Route::get('/list-blog', [BlogsController::class, 'showBlog'])->name('list-blog');
    Route::get('/detail-blog/{slug}', [BlogsController::class, 'blogBySlug'])->name('detail-blog');
});
