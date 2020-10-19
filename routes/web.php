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

Route::get('/', 'Site\HomeController@index');
Route::get('/site/ator', 'Site\AtoreController@index')->name('site.ator.index');
//Route::get('/', 'Site\DiretorController@index');
