<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view ('posts.index');
})->name('home');

Route::get('/posts/create', function () {
    return view ('posts.create');
})->name('posts.create');

Route::get('/posts/{id}/edit', function ($id) {
    return view ('posts.edit', ['id' => $id]);
})->name('posts.edit');

Route::get('/posts/{id}delete', function ($id) {
    return view ('posts.delete', ['id' => $id]);
})->name('posts.delete');

Route::get('/profile', function () {
    return view ('profile.profile');
})->name('profile');

Route::get('/login', function () {
    return view ('auth.login');
})->name('login');

Route::get('/register', function () {
    return view ('auth.register');
})->name('register');

require __DIR__.'/auth.php';
