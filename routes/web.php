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
use App\Http\Controllers\VoteController;
use App\Http\Controllers\CandidateController;


//=================================================== FrontEnd Side ===================================================
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/aspiration', [AspController::class,'index'])->name('aspiration');
Route::post('/storeAsp',[AspController::class,'store'])->name('store-asp');
Route::get('/news/{slug}', [NewsController::class,'show'])->name('news.show');
Route::get('/pkh',[VoteController::class,'validate']);


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

    Route::get('/candidatemanage',[CandidateController::class,'editCandidates'])->name('candidates.edit');
    Route::post('/candidates', [CandidateController::class, 'store'])->name('candidates.store');
    Route::put('/candidates/{id}', [CandidateController::class, 'update'])->name('candidates.update');
    Route::delete('/candidates/{id}', [CandidateController::class, 'destroy'])->name('candidates.destroy');

    Route::get('/vote/stat', [VoteController::class, 'voteStat'])->name('vote.stat');
    Route::post('/vote/stat/update', [VoteController::class, 'updateVoteStatus'])->name('vote.updateStatus');
    Route::get('/vote/count', [VoteController::class, 'voteCount'])->name('vote.count');
    Route::post('/vote/{id}', [VoteController::class, 'castVote'])->name('vote.cast');
    Route::post('/votes/clear', [VoteController::class, 'clearVotes'])->name('votes.clear');

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
