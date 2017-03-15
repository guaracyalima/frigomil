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


Route::get('/', 'FrontController@index');
Route::post('contato', 'FrontController@contato');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/admin', 'AdminController@index');

Route::get('/home', 'HomeController@index');
Route::get('admin/home', 'AdminController@index');

Route::group(['prefix' => 'admin', 'middleware' => 'auth.checkrole',  'as' => 'admin.'], function (){
    Route::get('', 'AdminController@index');

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

    //admin sobre
    Route::get('sobre', ['as' => 'sobre.index', 'uses' =>'SobreController@index']);
    Route::get('sobre/create', ['as' => 'sobre.create', 'uses' =>'SobreController@create']);
    Route::get('sobre/edit/{id}', ['as' => 'sobre.edit', 'uses' =>'SobreController@edit']);
    Route::post('sobre/store', ['as' => 'sobre.store', 'uses' =>'SobreController@store']);
    Route::post('sobre/update/{id}', ['as' => 'sobre.update', 'uses' =>'SobreController@update']);
    Route::get('sobre/destroy/{id}', ['as' => 'sobre.destroy', 'uses' =>'SobreController@destroy']);


    //PRODUTOS
    Route::get('produtos', ['as' => 'produtos.index', 'uses' =>'ProductsController@index']);
    Route::get('produtos/create', ['as' => 'produtos.create', 'uses' =>'ProductsController@create']);
    Route::get('produtos/edit/{id}', ['as' => 'produtos.edit', 'uses' =>'ProductsController@edit']);
    Route::post('produtos/store', ['as' => 'produtos.store', 'uses' =>'ProductsController@store']);
    Route::post('produtos/update/{id}', ['as' => 'produtos.update', 'uses' =>'ProductsController@update']);
    Route::get('produtos/destroy/{id}', ['as' => 'produtos.destroy', 'uses' =>'ProductsController@destroy']);


    //Clientes
    Route::get('clientes', ['as' => 'clientes.index', 'uses' =>'ClientesController@index']);
    Route::get('clientes/create', ['as' => 'clientes.create', 'uses' =>'ClientesController@create']);
    Route::get('clientes/edit/{id}', ['as' => 'clientes.edit', 'uses' =>'ClientesController@edit']);
    Route::post('clientes/store', ['as' => 'clientes.store', 'uses' =>'ClientesController@store']);
    Route::post('clientes/update/{id}', ['as' => 'clientes.update', 'uses' =>'ClientesController@update']);
    Route::get('clientes/destroy/{id}', ['as' => 'clientes.destroy', 'uses' =>'ClientesController@destroy']);

    //Topo
    Route::get('topo', ['as' => 'topo.index', 'uses' =>'TopoController@index']);
    Route::get('topo/create', ['as' => 'topo.create', 'uses' =>'TopoController@create']);
    Route::get('topo/edit/{id}', ['as' => 'topo.edit', 'uses' =>'TopoController@edit']);
    Route::post('topo/store', ['as' => 'topo.store', 'uses' =>'TopoController@store']);
    Route::post('topo/update/{id}', ['as' => 'topo.update', 'uses' =>'TopoController@update']);
    Route::get('topo/destroy/{id}', ['as' => 'topo.destroy', 'uses' =>'TopoController@destroy']);

    //Email
    Route::get('email', ['as' => 'email.index', 'uses' =>'EmailController@index']);
    Route::get('email/create', ['as' => 'email.create', 'uses' =>'EmailController@create']);
    Route::get('email/edit/{id}', ['as' => 'email.edit', 'uses' =>'EmailController@edit']);
    Route::post('email/store', ['as' => 'email.store', 'uses' =>'EmailController@store']);
    Route::post('email/update/{id}', ['as' => 'email.update', 'uses' =>'EmailController@update']);
    Route::get('email/destroy/{id}', ['as' => 'email.destroy', 'uses' =>'EmailController@destroy']);

    //Endereco
    Route::get('endereco', ['as' => 'endereco.index', 'uses' =>'EnderecoController@index']);
    Route::get('endereco/create', ['as' => 'endereco.create', 'uses' =>'EnderecoController@create']);
    Route::get('endereco/edit/{id}', ['as' => 'endereco.edit', 'uses' =>'EnderecoController@edit']);
    Route::post('endereco/store', ['as' => 'endereco.store', 'uses' =>'EnderecoController@store']);
    Route::post('endereco/update/{id}', ['as' => 'endereco.update', 'uses' =>'EnderecoController@update']);
    Route::get('endereco/destroy/{id}', ['as' => 'endereco.destroy', 'uses' =>'EnderecoController@destroy']);
});

