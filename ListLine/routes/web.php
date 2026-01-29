<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TotalController;
use App\Http\Controllers\TotalTypeController;
use App\Http\Controllers\ProgramController;

// Authentication

Route::get('/', [AuthController::class, "index"])->name('auth.index');

Route::post('/', [AuthController::class, "login"])->name('auth.login');

Route::middleware(['auth'])->group(function (){

    Route::get('/report/index', [TotalController::class, "index"])->name('report.index');
    Route::post('/report/pdf', [TotalController::class, "pdf"])->name('report.pdf');

    Route::get('/logout', [AuthController::class, "logout"])->name('auth.logout');

    Route::post('/user/create', [AuthController::class, "store"])->name("user.store");

    // Totals

    Route::get('/total/create', [TotalController::class, "create"])->name('total.create');
    Route::post('/total/store', [TotalController::class, "store"])->name('total.store');

    // Messages

    Route::get('message/create', [MessageController::class, 'create'])->name('message.create');
    Route::post('message/store', [MessageController::class, 'store'])->name('message.store');
    Route::get('message/{id}', [MessageController::class, 'index'])->name('message.index');

    // Programs

    Route::get('program', [ProgramController::class, 'index'])->name('program.index');

    // TotalTypes

    Route::get('total-type', [TotalTypeController::class, 'index'])->name('total_type.index');
});

// Admin views

Route::middleware(['auth', 'isAdmin'])->group(function (){
    // Register user

    Route::get('user/create', [UserController::class, 'create'])->name('user.create');

    // Programs
    Route::get('program/create', [ProgramController::class, 'create'])->name('program.create');
    Route::get('program/{program}/edit', [ProgramController::class, 'edit'])->name('program.edit');
    Route::patch('program/{program}/update', [ProgramController::class, 'update'])->name('program.update');
    Route::patch('program/{program}/status', [ProgramController::class, 'status'])->name('program.status');
    Route::post('program/store', [ProgramController::class, 'store'])->name('program.store');

    // TotalTypes

    Route::get('total-type/create', [TotalTypeController::class, 'create'])->name('total_type.create');
    Route::get('total-type/{totalType}/edit', [TotalTypeController::class, 'edit'])->name('total_type.edit');
    Route::patch('total-type/{totalType}/update', [TotalTypeController::class, 'update'])->name('total_type.update');
    Route::patch('total-type/{totalType}/status', [TotalTypeController::class, 'status'])->name('total_type.status');
    Route::post('total-type/store', [TotalTypeController::class, 'store'])->name('total_type.store');
});





