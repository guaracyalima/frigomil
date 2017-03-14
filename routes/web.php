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

Route::get('/home', 'HomeController@index');
Route::get('admin/home', 'AdminController@index');

Route::group(['prefix' => 'admin', 'middleware' => 'auth.checkrole',  'as' => 'admin.'], function (){
    Route::get('', 'AdminController@index');


    Route::get('topo', ['as' => 'topo', 'uses' =>'TopoController@index']);
    Route::post('topo', ['as' => 'topo.create', 'uses' =>'TopoController@create']);

    Route::get('contato', ['as' => 'contato', 'uses' =>'ContatoController@index']);
    Route::post('contato', ['as' => 'contato.create', 'uses' =>'ContatoController@create']);

    Route::get('sobre', ['as' => 'sobre.store', 'uses' =>'SobreController@index']);
    Route::post('sobre', ['as' => 'sobre.create', 'uses' =>'SobreController@create']);

    //admin menus
    Route::get('menu', ['as' => 'menu.index', 'uses' =>'MenuController@index']);
    Route::get('menu/create', ['as' => 'menu.create', 'uses' =>'MenuController@create']);
    Route::get('menu/edit/{id}', ['as' => 'menu.edit', 'uses' =>'MenuController@edit']);
    Route::post('menu/store', ['as' => 'menu.store', 'uses' =>'MenuController@store']);
    Route::post('menu/update/{id}', ['as' => 'menu.update', 'uses' =>'MenuController@update']);
    Route::get('menu/destroy/{id}', ['as' => 'menu.destroy', 'uses' =>'MenuController@destroy']);

    //admin filiais
    Route::get('filial', ['as' => 'filial.index', 'uses' =>'FilialController@index']);
    Route::get('filial/create', ['as' => 'filial.create', 'uses' =>'FilialController@create']);
    Route::get('filial/edit/{id}', ['as' => 'filial.edit', 'uses' =>'FilialController@edit']);
    Route::post('filial/store', ['as' => 'filial.store', 'uses' =>'FilialController@store']);
    Route::post('filial/update/{id}', ['as' => 'filial.update', 'uses' =>'FilialController@update']);
    Route::get('filial/destroy/{id}', ['as' => 'filial.destroy', 'uses' =>'FilialController@destroy']);

    //contatos
    Route::get('contatos', ['as' => 'contatos.index', 'uses' =>'ContatoController@index']);
    Route::get('contatos/create', ['as' => 'contatos.create', 'uses' =>'ContatoController@create']);
    Route::get('contatos/edit/{id}', ['as' => 'contatos.edit', 'uses' =>'ContatoController@edit']);
    Route::post('contatos/store', ['as' => 'contatos.store', 'uses' =>'ContatoController@store']);
    Route::post('contatos/update/{id}', ['as' => 'contatos.update', 'uses' =>'ContatoController@update']);
    Route::get('contatos/destroy/{id}', ['as' => 'contatos.destroy', 'uses' =>'ContatoController@destroy']);

    //Redes sociais
    Route::get('social', ['as' => 'social.index', 'uses' =>'SocialController@index']);
    Route::get('social/create', ['as' => 'social.create', 'uses' =>'SocialController@create']);
    Route::get('social/edit/{id}', ['as' => 'social.edit', 'uses' =>'SocialController@edit']);
    Route::post('social/store', ['as' => 'social.store', 'uses' =>'SocialController@store']);
    Route::post('social/update/{id}', ['as' => 'social.update', 'uses' =>'SocialController@update']);
    Route::get('social/destroy/{id}', ['as' => 'social.destroy', 'uses' =>'SocialController@destroy']);

    //Redes sociais
    Route::get('servicos', ['as' => 'servicos.index', 'uses' =>'ServicoController@index']);
    Route::get('servicos/create', ['as' => 'servicos.create', 'uses' =>'ServicoController@create']);
    Route::get('servicos/edit/{id}', ['as' => 'servicos.edit', 'uses' =>'ServicoController@edit']);
    Route::post('servicos/store', ['as' => 'servicos.store', 'uses' =>'ServicoController@store']);
    Route::post('servicos/update/{id}', ['as' => 'servicos.update', 'uses' =>'ServicoController@update']);
    Route::get('servicos/destroy/{id}', ['as' => 'servicos.destroy', 'uses' =>'ServicoController@destroy']);


    //Logo
    Route::get('logo', ['as' => 'logo.index', 'uses' =>'LogoController@index']);
    Route::get('logo/create', ['as' => 'logo.create', 'uses' =>'LogoController@create']);
    Route::get('logo/edit/{id}', ['as' => 'logo.edit', 'uses' =>'LogoController@edit']);
    Route::post('logo/store', ['as' => 'logo.store', 'uses' =>'LogoController@store']);
    Route::post('logo/update/{id}', ['as' => 'logo.update', 'uses' =>'LogoController@update']);
    Route::get('logo/destroy/{id}', ['as' => 'logo.destroy', 'uses' =>'LogoController@destroy']);


    //Telefones
    Route::get('telefone', ['as' => 'telefone.index', 'uses' =>'TelefoneController@index']);
    Route::get('telefone/create', ['as' => 'telefone.create', 'uses' =>'TelefoneController@create']);
    Route::get('telefone/edit/{id}', ['as' => 'telefone.edit', 'uses' =>'TelefoneController@edit']);
    Route::post('telefone/store', ['as' => 'telefone.store', 'uses' =>'TelefoneController@store']);
    Route::post('telefone/update/{id}', ['as' => 'telefone.update', 'uses' =>'TelefoneController@update']);
    Route::get('telefone/destroy/{id}', ['as' => 'telefone.destroy', 'uses' =>'TelefoneController@destroy']);


});

