<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;

Route::get('/home', [HomeController::class, 'home']);

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::get('admin/dashboard', [AdminController::class, 'view_product'])->name('admin.dashboard');

    Route::get('add_product', [AdminController::class, 'add_product']);
    Route::post('upload_product', [AdminController::class, 'upload_product']);
    Route::get('update_product/{id}', [AdminController::class, 'update_product']);
    Route::put('edit_product/{id}', [AdminController::class, 'edit_product']);
    Route::delete('delete_product/{id}', [AdminController::class, 'delete_product'])->name('admin.delete_product');
});
