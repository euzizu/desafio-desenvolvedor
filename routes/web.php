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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/cliente', 'ClienteController@index')->name('view.cliente.index');
Route::get('/clientes', 'ClienteController@show')->name('view.cliente.show');
Route::get('/cliente/{id}', 'ClienteController@edit')->name('view.cliente.edit');


Route::get('/produto', 'ProdutoController@index')->name('view.produto.index');
Route::get('/produtos', 'ProdutoController@show')->name('view.produto.show');
Route::get('/produto/{id}', 'ProdutoController@edit')->name('view.produto.edit');
