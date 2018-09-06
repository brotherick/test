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

Route::get('/', function (){
  return view('/welcome');
});

Route::get('/clients', 'ClientesController@index');
Route::get('/clients/balance_pendiente', 'ClientesController@pend_balance');
Route::get('/invoice', 'Invoice@index');
Route::get('/invoice/balance_pendiente', 'Invoice@pend_balance');
