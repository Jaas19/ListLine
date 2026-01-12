<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\TotalController;

// Authentication

Route::get('/', [AuthController::class, "index"])->name('auth.index');

Route::post('/', [AuthController::class, "login"])->name('auth.login');

Route::get('/logout', [AuthController::class, "logout"])->name('auth.logout');

Route::post('/user/create', [AuthController::class, "store"])->name("user.store");

// Totals

Route::get('/total/pdf', [TotalController::class, "pdf"])->name('total.pdf');
Route::get('/total/create', [TotalController::class, "create"])->name('total.create');
Route::post('/total/store', [TotalController::class, "store"])->name('total.store');

// Messages

Route::get('message/create', [MessageController::class, 'create'])->name('message.create');
Route::post('message/store', [MessageController::class, 'store'])->name('message.store');
Route::get('message/{id}', [MessageController::class, 'index'])->name('message.index');

// Generic

Route::get('{view}', [ViewController::class, "handleView"]);
Route::get('{view}/{subview}', [ViewController::class, "handleSpecificView"]);





