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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource('import-data', function () {
//     return response('hello');
// });

Route::resource('import-data', \Api\DataImportController::class)
    ->only('index');

Route::resource('record-count', \Api\CountController::class)
    ->only('index');

Route::resource('search', \Api\SearchController::class)
    ->only('store');

Route::resource('export', \Api\ExportController::class)
    ->only('store');
