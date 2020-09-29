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

Route::get('/', 'LojaController@index')->name('view.loja.index');

Route::get('/login', 'ClienteController@login')->name('view.cliente.formLogin');
Route::get('/cliente', 'ClienteController@formCadastrar')->name('view.cliente.formCadastrar');
Route::get('/clientes', 'ClienteController@show')->name('view.cliente.show');
Route::get('/cliente/{id}', 'ClienteController@edit')->name('view.cliente.edit');


Route::get('/produto', 'ProdutoController@formCadastrar')->name('view.produto.formCadastrar');
Route::get('/produtos', 'ProdutoController@show')->name('view.produto.show');
Route::get('/produto/{id}', 'ProdutoController@edit')->name('view.produto.edit');
