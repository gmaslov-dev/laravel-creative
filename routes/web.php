<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello, World!';
})->name('root');

Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/update', [PostController::class, 'update'])->name('posts.update');
Route::get('/posts/delete', [PostController::class, 'delete'])->name('posts.delete');
Route::get('/posts/first_or_create', [PostController::class, 'firstOrCreate'])->name('posts.firstOrCreate');
