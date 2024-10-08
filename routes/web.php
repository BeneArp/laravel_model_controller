<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'film'])->name('film');

Route::get('/chi-siamo', [PageController::class, 'about'])->name('about');

Route::get('/contatti', [PageController::class, 'contacts'])->name('contacts');

Route::get('/dettagli/{id}', [PageController::class, 'movieDetails'])->name('movieDetails');

Route::get('/anno-film', [PageController::class, 'movieYear'])->name('movieYear');
