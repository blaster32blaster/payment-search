<?php

use App\Events\TestEvent;
use App\Http\Controllers\DashboardController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', 'DashboardController')
    ->only('index');

Route::get('/broadcast-test', function() {
    event(new TestEvent('The server time is now ' . date('H:i:s')));
    });

Route::get('/fire', function () {
    event(new TestEvent('here we go again'));
    return 'ok';
});
