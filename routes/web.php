<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'view_product'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('product_details/{id}', [HomeController::class, 'product_details']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('/profile/update-photo', [ProfileController::class, 'updateProfilePhoto'])->name('profile.update-photo');
    Route::delete('/profile/photo', [ProfileController::class, 'removeProfilePhoto'])->name('profile.remove-photo');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'view_product'])->name('admin.dashboard');

    Route::get('add_product', [AdminController::class, 'add_product']);
    Route::post('upload_product', [AdminController::class, 'upload_product']);
    Route::get('update_product/{id}', [AdminController::class, 'update_product']);
    Route::put('edit_product/{id}', [AdminController::class, 'edit_product']);
    Route::delete('delete_product/{id}', [AdminController::class, 'delete_product'])->name('admin.delete_product');
});
