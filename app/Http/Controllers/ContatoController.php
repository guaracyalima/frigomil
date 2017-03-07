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
        return view('admin.contato');
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $this->repository->create($data);
        return view('admin.contato');
    }
}
