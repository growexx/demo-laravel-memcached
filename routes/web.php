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
use App\Http\Controllers\MemcachedDemoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cache', function() {
    return view('cache');
});

Route::post('/cache/set', [MemcachedDemoController::class, 'storeCache']);
Route::get('/cache/get', [MemcachedDemoController::class, 'getCache']);