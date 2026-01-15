<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminAuthController;

Route::view('/', 'welcome');
Route::view('/quan-tri', 'quantri');

Route::get('/chia-se', [PostController::class, 'index'])->name('posts.index');
Route::get('/chia-se/{slug}', [PostController::class, 'show'])->name('posts.show');

Route::view('/chuyen-nghe', 'chuyennghe');

// Admin auth
Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.attempt');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
// Alias cho middleware auth mặc định
Route::redirect('/login', '/admin/login')->name('login');

// Admin routes (simple guard)
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/posts', [AdminPostController::class, 'index'])->name('admin.posts.index');
    Route::get('/posts/create', [AdminPostController::class, 'create'])->name('admin.posts.create');
    Route::post('/posts', [AdminPostController::class, 'store'])->name('admin.posts.store');
    Route::post('/posts/upload', [AdminPostController::class, 'uploadImage'])->name('admin.posts.upload');
    Route::get('/posts/{post}/edit', [AdminPostController::class, 'edit'])->name('admin.posts.edit');
    Route::put('/posts/{post}', [AdminPostController::class, 'update'])->name('admin.posts.update');
    Route::delete('/posts/{post}', [AdminPostController::class, 'destroy'])->name('admin.posts.destroy');
});
