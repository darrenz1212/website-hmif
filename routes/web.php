<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AspController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AdminController;



//=================================================== FrontEnd Side ===================================================
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/aspiration', [AspController::class,'index'])->name('aspiration');
Route::post('/storeAsp',[AspController::class,'store'])->name('store-asp');
//=================================================== Auth ===================================================
Route::get('/login',[AuthenticatedSessionController::class,'index'])->name('login');
Route::get('/register',[AuthenticatedSessionController::class,'index'])->name('register');
//=================================================== Admin Side ===================================================
Route::get('/admin',[AdminController::class,'index'])->name('admin');
Route::get('/showASP',[AdminController::class,'showAspiration'])->name('show-aspiration');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
