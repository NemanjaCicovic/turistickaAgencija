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
Route::get('putovanja', 'App\Http\Controllers\PutovanjeController@getAll');
Route::get('putovanja/{id}', 'App\Http\Controllers\PutovanjaController@getById');
Route::get('paketi', 'App\Http\Controllers\PaketController@getAll');
Route::get('paketi/{id}', 'App\Http\Controllers\PaketController@getById');
Route::get('rezervacije', 'App\Http\Controllers\RezervacijeController@getAll');
Route::get('rezervacije/{id}', 'App\Http\Controllers\RezervacijeController@getById');
Route::post('paketi', 'App\Http\Controllers\PaketController@save');
Route::post('putovanja', 'App\Http\Controllers\PutovanjaController@save');
Route::post('rezervacije', 'App\Http\Controllers\RezervacijeController@save');
Route::delete('putovanja/{id}', 'App\Http\Controllers\PutovanjaController@delete');
Route::delete('paketi/{id}', 'App\Http\Controllers\PaketController@delete');
Route::delete('rezervacije/{id}', 'App\Http\Controllers\RezervacijeController@delete');
