<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/author', 'App\Http\Controllers\AuthorController@index');
Route::get('/author/{author}', 'App\Http\Controllers\AuthorController@showOne');
Route::post('/author', 'App\Http\Controllers\AuthorController@store');
Route::put('/author/{author}', 'App\Http\Controllers\AuthorController@update');
Route::put('/author/delete/{author}', 'App\Http\Controllers\AuthorController@destroy');

Route::get('/manga', 'App\Http\Controllers\MangaController@index');
Route::get('/manga/{manga}', 'App\Http\Controllers\MangaController@showOne');
Route::post('/manga', 'App\Http\Controllers\MangaController@store');
Route::put('/manga/{manga}', 'App\Http\Controllers\MangaController@update');
Route::put('/manga/delete/{manga}', 'App\Http\Controllers\MangaController@destroy');

Route::get('/poster', 'App\Http\Controllers\PosterController@index');
Route::post('/poster', 'App\Http\Controllers\PosterController@store');
Route::put('/poster/{poster}', 'App\Http\Controllers\PosterController@update');
Route::put('/poster/delete/{poster}', 'App\Http\Controllers\PosterController@destroy');
Route::get('/poster/{poster}', 'App\Http\Controllers\PosterController@showOne');