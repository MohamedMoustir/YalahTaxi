<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\trajetController;
use App\Http\Controllers\driverController;
use App\Http\Controllers\passeger_courseController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// })->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/home',[driverController::class,'index'])->name('home');
Route::get('/detiles/{id}',[driverController::class,'detiles'])->name('detiles');
Route::post('/reservations',[passeger_courseController::class,'reservations'])->name('reservations');
Route::get('/historique/{id}',[passeger_courseController::class,'gethistorique'])->name('historique');
Route::get('/refuser/{id}',[passeger_courseController::class,'refuserreservation'])->name('refuser');
Route::get('/search',[driverController::class,'index'])->name('search.taxis');

// Route::middleware(['auth','role:admin'])->group(function () {});

Route::get('/admin',[trajetController::class,'index']);
Route::post('/store',[trajetController::class,'store'])->name('admin.store');

Route::get('/ditlesTrajets',[trajetController::class,'ditlesTrajets'])->name('ditlestrajets');


Route::get('/driver',[driverController::class,'getresevation'])->name('getresevation');
Route::get('/accepter/{id}',[passeger_courseController::class,'accepterresevation'])->name('accepter');
Route::post('/disponible',[driverController::class,'disponibledriver'])->name('disponible');
Route::get('/annuler/{id}',[passeger_courseController::class,'annulerresevation'])->name('annuler');


require __DIR__.'/auth.php';
