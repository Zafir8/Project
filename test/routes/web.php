<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/branches', [BranchController::class, 'index'])->name('branches.index') ->middleware('auth');
    Route::get('/branches/create', [BranchController::class, 'create'])->name('branches.create') ->middleware('auth');
    Route::post('/branches', [BranchController::class, 'store'])->name('branches.store') ->middleware('auth');
    Route::get('/branches/{branch}/edit', [BranchController::class, 'edit'])->name('branches.edit') ->middleware('auth');
    Route::put('/branches/{branch}', [BranchController::class, 'update'])->name('branches.update') ->middleware('auth');
    Route::delete('/branches/{branch}', [BranchController::class, 'destroy'])->name('branches.destroy') ->middleware('auth');
});
