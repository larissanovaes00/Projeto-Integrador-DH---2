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

Route::get('/vitrine', function () {
    return view('vitrine');
});

Route::get('/banner', function () {
    return view('banner');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/header', function () {
    return view('header');
});

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/senseadmin', 'produtoController@cadastroProduto');
Route::post('/senseadmin', 'produtoController@adicionarProduto');

Route::get('/testeprodutos', 'pagsController@produtosDestaque');

Route::get('/exibir', 'SubcategoriaController@exibir');
Route::get('/exibirCat/{id}', 'CategoriaController@exibirPorId');

Auth::routes();

Route::get('/home', 'HomeController@index');
