<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\publicacion;

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

/*Publicaciones*/
Route::get('publicacion', 'PublicacionController@index');
Route::post('publicacion', 'PublicacionController@store');
Route::get('publicacion/{id}', 'PublicacionController@show');
Route::put('publicacion/{id}', 'PublicacionController@update');
Route::delete('publicacion/{id}', 'PublicacionController@delete');

/*Comentarios*/

Route::get('comentarios', 'ComentariosController@index');
Route::post('comentarios', 'ComentariosController@store');
Route::get('comentarios/{id}', 'ComentariosController@show');
Route::put('comentarios/{id}', 'ComentariosController@update');
Route::delete('comentarios/{id}', 'ComentariosController@delete');