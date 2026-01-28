<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ConsultController;

Route::view('/', 'welcome');
Route::view('/quan-tri', 'quantri');

Route::get('/chia-se', [PostController::class, 'index'])->name('posts.index');
Route::get('/chia-se/{slug}', [PostController::class, 'show'])->name('posts.show');

Route::view('/chuyen-nghe', 'chuyennghe');
Route::post('/tu-van/{type}', [ConsultController::class, 'submit'])->where('type', 'hoc|crm')->name('consult.submit');

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
    Route::get('/topics', [\App\Http\Controllers\AdminTopicController::class, 'index'])->name('admin.topics.index');
    Route::get('/topics/create', [\App\Http\Controllers\AdminTopicController::class, 'create'])->name('admin.topics.create');
    Route::post('/topics', [\App\Http\Controllers\AdminTopicController::class, 'store'])->name('admin.topics.store');
    Route::get('/topics/{topic}/edit', [\App\Http\Controllers\AdminTopicController::class, 'edit'])->name('admin.topics.edit');
    Route::put('/topics/{topic}', [\App\Http\Controllers\AdminTopicController::class, 'update'])->name('admin.topics.update');
    Route::delete('/topics/{topic}', [\App\Http\Controllers\AdminTopicController::class, 'destroy'])->name('admin.topics.destroy');
    Route::get('/authors', [\App\Http\Controllers\AdminAuthorController::class, 'index'])->name('admin.authors.index');
    Route::get('/authors/create', [\App\Http\Controllers\AdminAuthorController::class, 'create'])->name('admin.authors.create');
    Route::post('/authors', [\App\Http\Controllers\AdminAuthorController::class, 'store'])->name('admin.authors.store');
    Route::get('/authors/{author}/edit', [\App\Http\Controllers\AdminAuthorController::class, 'edit'])->name('admin.authors.edit');
    Route::put('/authors/{author}', [\App\Http\Controllers\AdminAuthorController::class, 'update'])->name('admin.authors.update');
    Route::delete('/authors/{author}', [\App\Http\Controllers\AdminAuthorController::class, 'destroy'])->name('admin.authors.destroy');
    Route::get('/industries', [\App\Http\Controllers\AdminIndustryController::class, 'index'])->name('admin.industries.index');
    Route::get('/industries/create', [\App\Http\Controllers\AdminIndustryController::class, 'create'])->name('admin.industries.create');
    Route::post('/industries', [\App\Http\Controllers\AdminIndustryController::class, 'store'])->name('admin.industries.store');
    Route::get('/industries/{industry}/edit', [\App\Http\Controllers\AdminIndustryController::class, 'edit'])->name('admin.industries.edit');
    Route::put('/industries/{industry}', [\App\Http\Controllers\AdminIndustryController::class, 'update'])->name('admin.industries.update');
    Route::delete('/industries/{industry}', [\App\Http\Controllers\AdminIndustryController::class, 'destroy'])->name('admin.industries.destroy');
});
