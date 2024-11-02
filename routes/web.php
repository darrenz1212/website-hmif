<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AspController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\EventController;


//=================================================== FrontEnd Side ===================================================
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/aspiration', [AspController::class,'index'])->name('aspiration');
Route::post('/storeAsp',[AspController::class,'store'])->name('store-asp');
Route::get('/news/{slug}', [NewsController::class,'show'])->name('news.show');



//=================================================== Auth ===================================================
Route::get('/login',[AuthenticatedSessionController::class,'index'])->name('login');
Route::get('/register',[AuthenticatedSessionController::class,'index'])->name('register');


//=================================================== Admin Side ===================================================
Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/showASP', [AdminController::class, 'showAspiration'])->name('show-aspiration');

    Route::get('/newsmanage', [NewsController::class, 'manage'])->name('news.manage');
    Route::post('/news', [NewsController::class, 'store'])->name('news.store');
    Route::put('/news/{id}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('news.destroy');

    Route::get('/eventmanage', [EventController::class, 'manage'])->name('event.manage');
    Route::post('/events', [EventController::class, 'store'])->name('events.store');
    Route::put('/events/{id}', [EventController::class, 'update'])->name('events.update');
    Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
