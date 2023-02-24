<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::get('test', function () {
//    app(\App\Service\TranslateService::class)->make();
//   return Artisan::call('migrate --force');
    return Artisan::call('db:seed --class=PoligonTableSeeder --force');
});

//Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    Route::any('/{view?}', function () {
        return view('welcome');
    })->where('view', '^(?!nova|nova-api|nova-vendor).*$');
//});
