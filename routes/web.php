<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/connexion', 'App\Http\Controllers\Connexion@showConnexion');
Route::get('/services', 'App\Http\Controllers\Connexion@showServices');
Route::get('/news', 'App\Http\Controllers\Connexion@showNews');
Route::get('/contact', 'App\Http\Controllers\Connexion@showContact');
Route::get('/new', 'App\Http\Controllers\Connexion@showNew');
Route::post('/home', 'App\Http\Controllers\Connexion@showHome');
Route::get('/home', 'App\Http\Controllers\Connexion@showHome');
Route::get('/artists', 'App\Http\Controllers\Connexion@showArtists');
Route::get('/artist', 'App\Http\Controllers\Connexion@showArtist');
Route::get('/playlists', 'App\Http\Controllers\Connexion@showPlaylists');
Route::get('/playlist', 'App\Http\Controllers\Connexion@showPlaylist');
Route::get('/recentlyplayed', 'App\Http\Controllers\Connexion@showRecentlyPlayed');
Route::get('/albums', 'App\Http\Controllers\Connexion@showAlbums');
Route::get('/album', 'App\Http\Controllers\Connexion@showAlbum');
Route::get('/search', 'App\Http\Controllers\Connexion@showSearch');
Route::get('/dashboard', 'App\Http\Controllers\Connexion@showDashboard');
Route::get('/profile', 'App\Http\Controllers\Connexion@showProfile');
Route::get('/upgrade', 'App\Http\Controllers\Connexion@showUpgrade');
Route::get('/users', 'App\Http\Controllers\Connexion@showUsers');
Route::get('/formuser', 'App\Http\Controllers\Connexion@showFormUser');
Route::get('/subscribe', 'App\Http\Controllers\Connexion@showSubscribe');
Route::get('/upgrade', 'App\Http\Controllers\Connexion@showUpgrade');
Route::get('/plans', 'App\Http\Controllers\Connexion@showPlans');
Route::get('/informations', 'App\Http\Controllers\Connexion@showInformations');
Route::get('/cgu', 'App\Http\Controllers\Connexion@showCGU');
Route::get('/payement', 'App\Http\Controllers\Connexion@showPayement');
