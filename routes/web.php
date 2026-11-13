<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('about', [MainController::class, 'about'])->name('about');
Route::get('contacts', [MainController::class, 'contacts'])->name('contacts');


Route::get('/{category:slug}/{post:slug}', [PostController::class, 'show'])->scopeBindings()->name('post.show');
Route::get('/{category:slug}', [CategoryController::class, 'show'])->name('category.show');
// Route::get('categories', [MainController])