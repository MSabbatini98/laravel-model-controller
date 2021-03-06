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

Route::get('/movie/', 'MovieController@index');
Route::get('/movie/{id}', 'MovieController@show');
Route::get('/', 'MovieController@home');



// Queste 2 rotte, con laravel le uniamo in un'unica route:
// Route::resource('movies', 'MovieController');

