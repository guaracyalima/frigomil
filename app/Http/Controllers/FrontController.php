<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class FrontController extends Controller
{
	public function index()
	{
		$produtos = DB::select('SELECT * FROM products ORDER BY id DESC LIMIT 8');
		$sobre = DB::select('SELECT * FROM sobres ORDER BY id DESC LIMIT 1');
		$contatos = DB::select('SELECT * FROM contatos ORDER BY id DESC LIMIT 1');
		$topo = DB::select('SELECT * FROM topos ORDER BY id DESC LIMIT 1');
		$email = DB::select('SELECT * FROM emails ORDER BY id DESC LIMIT 1');
		$telefone = DB::select('SELECT * FROM telefones ORDER BY id DESC LIMIT 2');
		$endereco = DB::select('SELECT * FROM enderecos ORDER BY id DESC LIMIT 1');

		return view('index', compact(
		    'produtos',
            'sobre',
            'contatos',
            'topo',
            'email',
            'telefone',
            'endereco'
        ));

	}

	public function contato()
	{
		$rules = array( 'name' => 'required', 'email' => 'required|email', 'assunto' => 'required', 'msg' => 'required' );
		$validation = Validator::make(Input::all(), $rules);
		$data = array();
		$data['name'] = Input::get("name");
		$data['email'] = Input::get("email");
		$data['assunto'] = Input::get("assunto");
		$data['msg'] = Input::get("msg");

		if($validation->passes()) {

			Mail::send('index', $data, function($message) {

				$message->from(Input::get('email'), Input::get('name'), Input::get('assunto'), Input::get('msg'));

				$message->to('frigomil@frigomil.com.br') ->subject('Atendimento Frigomil');

			});

			return Redirect::route('/index');

		}

		return Redirect::route('/index')

		->withInput()

		->withErrors($validation)

		->with('message', 'Erro! Preencha todos os campos corretamente.');

	}


}
