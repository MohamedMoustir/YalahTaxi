<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\trajetController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','role:admin'])->group(function () {
Route::get('/admin',[trajetController::class,'index']);
Route::post('/store',[trajetController::class,'store'])->name('admin.store');
});
require __DIR__.'/auth.php';
