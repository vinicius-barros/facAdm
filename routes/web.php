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
    return view('autenticar');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', ['as'=>'dashboard', 'uses'=>'Home\DashboardController@dashboard']);
Route::get('/financeiro', ['as'=>'financeiro', 'uses'=>'Home\FinanceiroController@financeiro']);
Route::get('/funcionarios', ['as'=>'funcionario', 'uses'=>'Home\funcionarioController@funcionario']);
Route::get('/ops', ['as'=>'op', 'uses'=>'Home\OpController@op']);
Route::get('/manutencao', ['as'=>'manutencao', 'uses'=>'Home\manutencaoController@manutencao']);
Route::get('/estoque', ['as'=>'estoque', 'uses'=>'Home\estoqueController@estoque']);
Route::get('/inventario', ['as'=>'inventario', 'uses'=>'Home\inventarioController@inventario']);
