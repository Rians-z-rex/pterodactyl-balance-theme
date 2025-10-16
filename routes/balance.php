<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BalanceController;

// ====================
// RUTE UNTUK USER
// ====================

// Menampilkan saldo user di dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/balance', [BalanceController::class, 'index'])->name('balance.index');
});

// ====================
// RUTE UNTUK ADMIN
// ====================

// Halaman admin kelola saldo user
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/balance', [BalanceController::class, 'adminIndex'])->name('admin.balance');
    Route::post('/admin/balance/add/{id}', [BalanceController::class, 'addBalance'])->name('admin.balance.add');
    Route::post('/admin/balance/reduce/{id}', [BalanceController::class, 'reduceBalance'])->name('admin.balance.reduce');
});
