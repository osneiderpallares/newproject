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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cliente', 'ClienteController@index')->name('index');
Route::get('/cliente/crear', 'ClienteController@crear')->name('crear');
Route::post('cliente', 'ClienteController@guardar');
Route::get('/cliente/{id}', 'ClienteController@del');
Route::get('/cliente/edit/{id}', 'ClienteController@PreEdit');
Route::post('/cliente/mod/{id}', 'ClienteController@edit');