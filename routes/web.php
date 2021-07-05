<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoController;

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

Route::get('/', 'App\Http\Controllers\todoController@index');

Route::post('/todo/create', 'App\Http\Controllers\todoController@create');

Route::post('/todo/update', 'App\Http\Controllers\todoController@update');

Route::post('/todo/delete', 'App\Http\Controllers\todoController@delete');
