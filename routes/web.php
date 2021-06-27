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


Route::middleware('isConnected')->get('/', 'App\Http\Controllers\Connexion@showWelcome');
Route::middleware('isConnected')->get('/connexion', 'App\Http\Controllers\Connexion@showConnexion');
Route::middleware('isConnected')->post('/searchnews', 'App\Http\Controllers\Connexion@searchNews');
Route::middleware('isConnected')->get('/services', 'App\Http\Controllers\Connexion@showServices');
Route::middleware('isConnected')->get('/news', 'App\Http\Controllers\Connexion@showNews');
Route::middleware('isConnected')->get('/contact', 'App\Http\Controllers\Connexion@showContact');
Route::middleware('isConnected')->post('/contact', 'App\Http\Controllers\Contact@sendMail');
Route::middleware('isConnected')->get('/new/{id}', 'App\Http\Controllers\Connexion@showNew');
Route::middleware('isConnected')->post('/register', 'App\Http\Controllers\Connexion@addUser');
Route::middleware('isConnected')->post('/login', 'App\Http\Controllers\Connexion@connectUser');
Route::middleware('isAuth')->get('/logout', 'App\Http\Controllers\Connexion@disconnectUser');
Route::middleware('isAuth')->post('/home', 'App\Http\Controllers\Connexion@showHome');
Route::middleware('isAuth')->get('/home', 'App\Http\Controllers\Connexion@showHome');
Route::middleware('isAuth')->get('/artists', 'App\Http\Controllers\Connexion@showArtists');
Route::middleware('isAuth')->get('/artist/{id}', 'App\Http\Controllers\Connexion@showArtist');
Route::middleware('isAuth')->get('/playlists', 'App\Http\Controllers\Connexion@showPlaylists');
Route::middleware('isAuth')->get('/playlist', 'App\Http\Controllers\Connexion@showPlaylist');
Route::middleware('isAuth')->get('/recentlyplayed', 'App\Http\Controllers\Connexion@showRecentlyPlayed');
Route::middleware('isAuth')->get('/albums', 'App\Http\Controllers\Connexion@showAlbums');
Route::middleware('isAuth')->get('/album/{id}', 'App\Http\Controllers\Connexion@showAlbum');
Route::middleware('isAuth')->get('/search', 'App\Http\Controllers\Connexion@showSearch');
Route::middleware('isAuth')->get('/dashboard', 'App\Http\Controllers\Connexion@showDashboard');
Route::middleware('isAuth')->get('/profile', 'App\Http\Controllers\Connexion@showProfile');
Route::middleware('isAuth')->post('/profile', 'App\Http\Controllers\Connexion@modifyProfile')->name('profile');
Route::middleware('isAuth')->get('/upgrade', 'App\Http\Controllers\Connexion@showUpgrade');

Route::middleware('isAdmin')->get('/users', 'App\Http\Controllers\Connexion@showUsers');
Route::middleware('isAdmin')->get('/formuser', 'App\Http\Controllers\Connexion@showFormUser');
Route::middleware('isAdmin')->post('/adminadduser', 'App\Http\Controllers\Connexion@addAdminUser');
Route::middleware('isAdmin')->get('/formuser/{id}', 'App\Http\Controllers\Connexion@showFormModifyUser');
Route::middleware('isAdmin')->post('/modifyuser/{id}', 'App\Http\Controllers\Connexion@modifyAdminUser');
Route::middleware('isAdmin')->get('/deleteuser/{id}', 'App\Http\Controllers\Connexion@deleteUser');

Route::middleware('isAdmin')->get('/adminartists', 'App\Http\Controllers\Connexion@showAdminArtists');
Route::middleware('isAdmin')->get('/formartist', 'App\Http\Controllers\Connexion@showFormArtist');
Route::middleware('isAdmin')->post('/addartist', 'App\Http\Controllers\Connexion@addAdminArtist');
Route::middleware('isAdmin')->get('/deleteartist/{id}', 'App\Http\Controllers\Connexion@deleteAdminArtist');

Route::middleware('isAdmin')->get('/adminalbums', 'App\Http\Controllers\Connexion@showAdminAlbums');
Route::middleware('isAdmin')->get('/formalbum', 'App\Http\Controllers\Connexion@showFormAlbum');
Route::middleware('isAdmin')->post('/addalbum', 'App\Http\Controllers\Connexion@addAdminAlbum');

Route::middleware('isAdmin')->get('/adminnews', 'App\Http\Controllers\Connexion@showAdminNews');
Route::middleware('isAdmin')->get('/formnew', 'App\Http\Controllers\Connexion@showFormNew');
Route::middleware('isAdmin')->get('/modifynews/{id}', 'App\Http\Controllers\Connexion@showFormNewId');
Route::middleware('isAdmin')->post('/modifynews/{id}', 'App\Http\Controllers\Connexion@modifyNewId');
Route::middleware('isAdmin')->post('/addnew', 'App\Http\Controllers\Connexion@addNew');
Route::middleware('isAdmin')->get('/deletenews/{id}', 'App\Http\Controllers\Connexion@deleteNew');

Route::middleware('isAdmin')->get('/adminmusic', 'App\Http\Controllers\Connexion@showAdminMusic');
Route::middleware('isAdmin')->get('/formmusic', 'App\Http\Controllers\Connexion@showFormMusic');
Route::middleware('isAdmin')->post('/addmusic', 'App\Http\Controllers\Connexion@addAdminMusic');

Route::middleware('isAdmin')->get('/admingenres', 'App\Http\Controllers\Connexion@showAdminGenre');
Route::middleware('isAdmin')->get('/formgenre', 'App\Http\Controllers\Connexion@showFormGenre');
Route::middleware('isAdmin')->post('/addgenre', 'App\Http\Controllers\Connexion@addAdminGenre');

Route::middleware('isAdmin')->get('/adminsubscribes', 'App\Http\Controllers\Connexion@showAdminSubscribes');

Route::middleware('isAuth')->get('/subscribe', 'App\Http\Controllers\Connexion@showSubscribe');
Route::middleware('isAuth')->get('/upgrade', 'App\Http\Controllers\Connexion@showUpgrade');
Route::middleware('isAuth')->get('/plans', 'App\Http\Controllers\Connexion@showPlans');
Route::middleware('isAuth')->get('/informations/{id}', 'App\Http\Controllers\Connexion@showInformations');
Route::middleware('isAuth')->get('/cgu/{id}', 'App\Http\Controllers\Connexion@showCGU');
Route::middleware('isAuth')->post('/cgu/{id}', 'App\Http\Controllers\Connexion@checkoutPayement');
Route::middleware('isAuth')->get('/payement', 'App\Http\Controllers\Connexion@showPayement');
Route::middleware('isAuth')->get('/liked', 'App\Http\Controllers\Connexion@showLiked');
