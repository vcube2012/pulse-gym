<?php

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
Route::get('/tags' , [\App\Http\Controllers\TagController::class , 'index'])->middleware('cache');
Route::get('blogs' , [\App\Http\Controllers\BlogController::class , 'index'])->middleware('cache');
Route::get('blogs/{blog:slug}' , [\App\Http\Controllers\BlogController::class , 'show'])->middleware('cache');
Route::get('feedback' , [\App\Http\Controllers\FeedbackController::class , 'index'])->middleware('cache');
Route::post('feedback' , [\App\Http\Controllers\FeedbackController::class , 'store']);
Route::get('clubs' , [\App\Http\Controllers\ClubController::class , 'index']);
Route::get('clubs/{club:slug}' , [\App\Http\Controllers\ClubController::class , 'show']);
