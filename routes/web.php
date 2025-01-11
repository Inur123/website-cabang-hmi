<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CategoryController;

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/profile/sejarah', [ProfileController::class, 'sejarah'])->name('profile.sejarah');
Route::get('/profile/susunankepengurusan', [ProfileController::class, 'susunankepengurusan'])->name('profile.susunankepengurusan');

Route::get('/categories/{slug}', [CategoryController::class, 'show'])->name('categories.show');
