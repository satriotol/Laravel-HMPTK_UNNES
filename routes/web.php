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

// Route::get('/', function () {
//     return view('pages.home');
// });
// Route::get('/','crocodicController@home');
// Route::get('/tambah', 'crocodicController@tambah');
// Route::post('/store', 'crocodicController@store');
// Route::get('/edit/{id}', 'crocodicController@edit');
// Route::put('/update/{id}', 'crocodicController@update');
// Route::get('/hapus/{id}', 'crocodicController@delete');
// Route::get('/editfoto/{id}','crocodicController@editfoto');
// Route::put('/updatefoto/{id}','crocodicController@updatefoto');

Route::get('/','beritakitaController@home');
Route::get('/lihatberita','beritakitaController@lihatberita');


