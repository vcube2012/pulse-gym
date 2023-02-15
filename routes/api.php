<?php

use App\Models\Promo;
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

Route::middleware("localization")->group(function () {
    Route::get('/tags', [\App\Http\Controllers\TagController::class, 'index']);
    Route::get('blogs', [\App\Http\Controllers\BlogController::class, 'index']);
    Route::get('blogs/{blog:slug}', [\App\Http\Controllers\BlogController::class, 'show']);
    Route::get('feedback', [\App\Http\Controllers\FeedbackController::class, 'index']);
    Route::post('feedback', [\App\Http\Controllers\FeedbackController::class, 'store']);
    Route::get('clubs', [\App\Http\Controllers\ClubController::class, 'index']);

    Route::get('clubs/{club:slug}', [\App\Http\Controllers\ClubController::class, 'show']);
    Route::get('clubs/{club:slug}/coach/{coach:slug}', [\App\Http\Controllers\CoachController::class, 'show']);
    Route::get('page/{page:slug}', [\App\Http\Controllers\PageController::class, 'show']);

    Route::get('promo', [\App\Http\Controllers\PromoController::class, 'index']);
    Route::get('smartfit/{smartfit:slug}', [\App\Http\Controllers\SmartfitController::class, 'show']);
});

Route::get('test', function () {
//    app(\App\Service\TranslateService::class)->make();
    return \App\Http\Resources\BlogResource::collection(\App\Models\Coach::with('seo')->get());
});
