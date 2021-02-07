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
Route::get('/', 'App\Http\Controllers\PutovanjaController@all');
Route::get('/{id}', 'App\Http\Controllers\PutovanjaController@view');
Route::resource('/{id}/{id}', 'App\Http\Controllers\PaketController')->only('view');
Route::post('/add-rezervacija', 'App\Http\Controllers\RezervacijeController@create');
