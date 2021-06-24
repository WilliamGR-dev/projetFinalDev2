<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;

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
Route::post('auth/register', [apiController::class , 'register']);
Route::post('auth/login', [apiController::class , 'login']);
Route::get('news', [apiController::class , 'showNews']);
Route::get('new/{id}', [apiController::class , 'showNew']);
Route::get('allnews', [apiController::class , 'showAllNews']);
Route::post('modify', [apiController::class , 'modifyProfile']);
Route::post('contact', [apiController::class , 'sendMail']);
Route::post('stripe/intent', [apiController::class , 'intent']);
Route::post('stripe/subscribe', [apiController::class , 'subscribe']);
Route::post('profile/url', [apiController::class , 'profileUrl']);
