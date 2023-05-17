<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;

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

Route::get('register', [RegisterController::class, 'create'])->name('auth.register.create')->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->name('auth.register.store')->middleware('guest');

Route::get('login', [LoginController::class, 'create'])->name('auth.login.create')->middleware('guest');
Route::post('login', [LoginController::class, 'authenticate'])->name('auth.login.authenticate')->middleware('guest');

Route::post('logout', [LogoutController::class, 'destroy'])->name('auth.logout')->middleware('auth');
