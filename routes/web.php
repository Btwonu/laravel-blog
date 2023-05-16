<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/posts', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/{id}', [PostController::class, 'show'])->where('post', '[a-zA-Z0-9_]+')->name('posts.show');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{slug}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('users/{id}', [UserController::class, 'show'])->name('users.show');

Route::post('posts', [PostController::class, 'store'])->name('posts.store');

Route::get('register', [RegisterController::class, 'create'])->name('auth.register');
Route::post('register', [RegisterController::class, 'store'])->name('auth.store');
// Route::get('login', [UserController::class, 'create'])->name('users.create');
