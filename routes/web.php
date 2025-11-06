<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Hello, World!';
})->name('root');

Route::get('/posts', [PostController::class, 'index'])->name('posts');
