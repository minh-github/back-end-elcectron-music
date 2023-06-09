<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MusicAppController;
use App\Http\Controllers\PlayListController;
use App\Http\Controllers\SongController;
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

Route::get('/', [MusicAppController::class, 'index']);

// songs
Route::post('add-new-song', [SongController::class, 'submitAdd']);
Route::post('update-song', [SongController::class, 'submitUpdate']);

// artists
Route::post('add-new-artist', [ArtistController::class, 'submitAdd']);
Route::post('update-artist', [ArtistController::class, 'submitUpdate']);

// categories
Route::post('add-new-category', [CategoryController::class, 'submitAdd']);
Route::post('update-category', [CategoryController::class, 'submitUpdate']);

// playList
Route::post('add-new-play-list', [PlayListController::class, 'submitAdd']);
Route::post('update-play-list', [PlayListController::class, 'submitUpdate']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
