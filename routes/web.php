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

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/', 'FrontController@index');
Route::post('contato', 'FrontController@contato');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/admin', 'AdminController@index');

Route::group(['prefix' => 'admin', 'middleware' => 'auth.checkrole', 'as' => 'admin.'], function (){
    Route::get('', 'AdminController@index');

    Route::get('topo', ['as' => 'topo', 'uses' =>'TopoController@index']);
    Route::post('topo', ['as' => 'topo.create', 'uses' =>'TopoController@create']);

    Route::get('contato', ['as' => 'contato', 'uses' =>'ContatoController@index']);
    Route::post('contato', ['as' => 'contato.create', 'uses' =>'ContatoController@create']);

    Route::get('sobre', ['as' => 'sobre.store', 'uses' =>'SobreController@index']);
    Route::post('sobre', ['as' => 'sobre.create', 'uses' =>'SobreController@create']);


    Route::get('produtos', ['as' => 'produtos.store', 'uses' =>'ProductsController@index']);
    Route::post('produtos/create', ['as' => 'produtos.create', 'uses' =>'ProductsController@create']);
});


