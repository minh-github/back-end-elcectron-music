<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\PlayListController;
use App\Http\Controllers\SongController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('get-songs', [MusicController::class, 'getAllSong']);
Route::get('get-song/{id}', [MusicController::class, 'getSong']);
Route::get('get-artists', [MusicController::class, 'getAllArtist']);
Route::get('get-categories', [MusicController::class, 'getAllCategory']);
Route::get('get-playlist', [MusicController::class, 'getAllPlaylist']);

// songs
Route::get('add-new-song', [SongController::class, 'addSong']);
Route::get('update-song', [SongController::class, 'updateSong']);
Route::post('add-new-song', [SongController::class, 'submitAdd']);
Route::post('update-song', [SongController::class, 'submitUpdate']);

// artists
Route::get('add-new-artist', [ArtistController::class, 'addartist']);
Route::get('update-artist', [ArtistController::class, 'updateartist']);
Route::post('add-new-artist', [ArtistController::class, 'submitAdd']);
Route::post('update-artist', [ArtistController::class, 'submitUpdate']);

// categories
Route::get('add-new-category', [CategoryController::class, 'addcategory']);
Route::get('update-category', [CategoryController::class, 'updatecategory']);
Route::post('add-new-category', [CategoryController::class, 'submitAdd']);
Route::post('update-category', [CategoryController::class, 'submitUpdate']);

// playList
Route::get('update-play-list', [PlayListController::class, 'updateplay-list']);
Route::post('add-new-play-list', [PlayListController::class, 'submitAdd']);
Route::post('update-play-list/{id}', [PlayListController::class, 'submitUpdate']);


Route::post('auth/register', [AuthController::class, 'register']);
Route::post('auth/login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::get('new-playlist', [PlayListController::class, 'newPlaylist']);
    Route::get('add-song-playlist/{id}/{listId}', [PlayListController::class, 'addSong']);
    Route::get('get-user', [AuthController::class, 'getUser']);
    Route::get('get-playlist-song/{id}', [PlayListController::class, 'getSong']);
    Route::get('get-all-playlist', [PlayListController::class, 'getAllPlaylist']);
});

// Route::group([
//     'prefix' => 'auth'

// ], function ($router) {
//     Route::post('/logout', [AuthController::class, 'logout']);
//     Route::post('/refresh', [AuthController::class, 'refresh']);
//     Route::get('/user-profile', [AuthController::class, 'userProfile']);
//     Route::post('/change-pass', [AuthController::class, 'changePassWord']);
// });
