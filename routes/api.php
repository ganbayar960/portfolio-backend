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

Route::get('/information', 'ApiController@information');
Route::get('/services', 'ApiController@services');
Route::get('/reviews', 'ApiController@reviews');
Route::get('/skills', 'ApiController@skills');
Route::get('/experience', 'ApiController@experience');
Route::get('/projects','ApiController@projects');
Route::get('/blog','ApiController@blogs');
Route::get('/contactinfo','ApiController@contact');
