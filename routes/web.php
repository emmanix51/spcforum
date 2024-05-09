<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/threads/advanced', [ThreadController::class, 'search'])->name('threads.search');
Route::get('/threads/{thread}', [ThreadController::class, 'show'])->name('threads.show');
Route::get('/threads/{thread}/edit', [ThreadController::class, 'edit'])->name('threads.edit')->middleware('auth');
Route::put('/threads/{thread}', [ThreadController::class, 'update'])->name('threads.update')->middleware('auth');
Route::delete('/threads/{thread}', [ThreadController::class, 'destroy'])->name('threads.destroy')->middleware('auth');
Route::post('/create', [ThreadController::class, 'store'])->name('threads.store')->middleware('auth');
Route::get('/create', [ThreadController::class, 'create'])->name('threads.create')->middleware('auth');

Route::post('/threads/{thread}/comments', [CommentController::class, 'store'])->name('threads.comments.store')->middleware('auth');
Route::delete('/profile/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy')->middleware('auth');


Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/profile', [Usercontroller::class, 'show'])->name('users.show');
