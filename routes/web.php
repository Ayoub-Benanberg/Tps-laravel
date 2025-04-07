<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/', function () {
    return view('contact');
})->name('contact');


use App\Http\Controllers\PostController;

Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');
