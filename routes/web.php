<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/download-cv', [PortfolioController::class, 'downloadCv'])->name('cv.download');
Route::post('/contact', [PortfolioController::class, 'contact'])->name('contact.submit');
