<?php

use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [GeneralController::class, 'home'])->name('homepage');
// REVIEWS
Route::get('/review/create', [ReviewController::class, 'create'])->name('review.create');
Route::post('/review/store', [ReviewController::class, 'store'])->name('review.store');
Route::get('/review/index', [ReviewController::class, 'index'])->name('review.index');
Route::get('/review/show/{review}', [ReviewController::class, 'show'])->name('review.show');
Route::get('review/edit/{review}', [ReviewController::class, 'edit'])->name('review.edit');
Route::put('/review/update/{review}', [ReviewController::class, 'update'])->name('review.update');
Route::delete('/review/delete/{review}', [ReviewController::class, 'destroy'])->name('review.delete');
Route::get('/review/creator', [ReviewController::class, 'creator'])->name('review.creator');