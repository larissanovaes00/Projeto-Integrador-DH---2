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

Route::get('/header', function () {
    return view('header');
});

Route::get('/footer', function () {
    return view('footer');
});

Route::get('/acesso', function () {
    return view('acesso');
});

Route::get('/profile', function () {
    return view('profile');
});



Route::get('/testeprodutos', 'pagsController@produtosDestaque');

Route::get('/exibir', 'SubcategoriaController@exibir');
Route::get('/exibirCat/{id}', 'CategoriaController@exibirPorId');

Route::get('/home', 'HomeController@index')
    ->name('home');

Route::get('produto/{id}', 'detalheProdutoController@detalheProduto');

Route::post('logout', 'LoginController@logout');

Auth::routes();

Route::get('/admin', 'adminController@admin')
    ->middleware('userType')
    ->name('userType');

Route::get('/produtoadmin', 'produtoController@cadastroProduto')
    ->middleware('userType')
    ->name('userType');
    
Route::post('/produtoadmin', 'produtoController@adicionarProduto')
    ->middleware('userType')
    ->name('userType');

Route::get('/sucessocadastro', function(){
    return view('admin/cadastrado');
});

Route::get('/admin/logout', 'adminController@logout')
    ->middleware('userType')
    ->name('userType');

