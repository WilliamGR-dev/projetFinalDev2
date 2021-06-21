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
Route::post('contact', [apiController::class , 'sendMail']);
