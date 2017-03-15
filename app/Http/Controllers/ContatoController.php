<?php

namespace App\Http\Controllers;

use App\Repositories\ContatoRepository;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /**
     * @var ContatoRepository
     */
    private $repository;

    public function __construct(ContatoRepository $repository)
    {

        $this->repository = $repository;
    }
    public function index()
    {
        $contatos = $this->repository->paginate(10);
        return view ('admin.contatos.index', compact('contatos'));
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $this->repository->create($data);
        return view('admin.contato');
    }
}
