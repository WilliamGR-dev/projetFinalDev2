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


Route::get('/', 'App\Http\Controllers\Connexion@showWelcome');
Route::get('/connexion', 'App\Http\Controllers\Connexion@showConnexion');
Route::post('/searchnews', 'App\Http\Controllers\Connexion@searchNews');
Route::get('/services', 'App\Http\Controllers\Connexion@showServices');
Route::get('/news', 'App\Http\Controllers\Connexion@showNews');
Route::get('/contact', 'App\Http\Controllers\Connexion@showContact');
Route::post('/contact', 'App\Http\Controllers\Contact@sendMail');
Route::get('/new/{id}', 'App\Http\Controllers\Connexion@showNew');
Route::post('/register', 'App\Http\Controllers\Connexion@addUser');
Route::post('/login', 'App\Http\Controllers\Connexion@connectUser');
Route::get('/logout', 'App\Http\Controllers\Connexion@disconnectUser');
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
Route::post('/profile', 'App\Http\Controllers\Connexion@modifyProfile')->name('profile');
Route::get('/upgrade', 'App\Http\Controllers\Connexion@showUpgrade');
Route::get('/users', 'App\Http\Controllers\Connexion@showUsers');
Route::get('/formuser', 'App\Http\Controllers\Connexion@showFormUser');
Route::post('/adminadduser', 'App\Http\Controllers\Connexion@addAdminUser');
Route::get('/formuser/{id}', 'App\Http\Controllers\Connexion@showFormModifyUser');
Route::post('/modifyuser/{id}', 'App\Http\Controllers\Connexion@modifyAdminUser');
Route::get('/deleteuser/{id}', 'App\Http\Controllers\Connexion@deleteUser');
Route::get('/adminartists', 'App\Http\Controllers\Connexion@showAdminArtists');
Route::get('/formartist', 'App\Http\Controllers\Connexion@showFormArtist');
Route::get('/adminalbums', 'App\Http\Controllers\Connexion@showAdminAlbums');
Route::get('/formalbum', 'App\Http\Controllers\Connexion@showFormAlbum');
Route::get('/adminnews', 'App\Http\Controllers\Connexion@showAdminNews');
Route::get('/formnew', 'App\Http\Controllers\Connexion@showFormNew');
Route::get('/modifynews/{id}', 'App\Http\Controllers\Connexion@showFormNewId');
Route::post('/addnew', 'App\Http\Controllers\Connexion@addNew');
Route::get('/deletenews/{id}', 'App\Http\Controllers\Connexion@deleteNew');
Route::get('/adminmusic', 'App\Http\Controllers\Connexion@showAdminMusic');
Route::get('/formmusic', 'App\Http\Controllers\Connexion@showFormMusic');
Route::get('/subscribe', 'App\Http\Controllers\Connexion@showSubscribe');
Route::get('/upgrade', 'App\Http\Controllers\Connexion@showUpgrade');
Route::get('/plans', 'App\Http\Controllers\Connexion@showPlans');
Route::get('/informations/{id}', 'App\Http\Controllers\Connexion@showInformations');
Route::get('/cgu/{id}', 'App\Http\Controllers\Connexion@showCGU');
Route::post('/cgu/{id}', 'App\Http\Controllers\Connexion@checkoutPayement');
Route::get('/payement', 'App\Http\Controllers\Connexion@showPayement');
Route::get('/liked', 'App\Http\Controllers\Connexion@showLiked');
