<?php

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

Route::get('/','beritakitaController@home');
Route::get('/lihatberita','beritakitaController@lihatberita');
Route::get('/article','beritakitaController@article');


