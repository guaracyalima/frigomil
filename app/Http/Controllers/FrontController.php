<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
        $produtos = DB::select('SELECT * FROM products ORDER BY id DESC LIMIT 8');
        $sobre = DB::select('SELECT * FROM sobres ORDER BY id DESC LIMIT 1');
        $contato = DB::select('SELECT * FROM contatos ORDER BY id DESC LIMIT 1');
        $topo = DB::select('SELECT * FROM topos ORDER BY id DESC LIMIT 1');

        return view('index', compact('produtos', 'sobre', 'contato', 'topo'));

    }
}
