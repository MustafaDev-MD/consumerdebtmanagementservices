<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


// Frontend Routes
Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/how-it-works', [FrontendController::class, 'howItWorks'])->name('how-it-works');
Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('about-us');
Route::get('/resources', [FrontendController::class, 'resources'])->name('resources');
Route::get('/our-firm', [FrontendController::class, 'ourFirm'])->name('our-firm');
Route::get('/our-practices', [FrontendController::class, 'ourPractices'])->name('our-practices');
Route::get('/our-people', [FrontendController::class, 'ourPeople'])->name('our-people');
Route::get('/news-events', [FrontendController::class, 'newsEvents'])->name('news-events');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
