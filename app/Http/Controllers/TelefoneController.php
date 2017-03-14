<?php

namespace App\Http\Controllers;

use App\Repositories\TelefoneRepository;
use Illuminate\Http\Request;

class TelefoneController extends Controller
{
    /**
     * @var TelefoneRepository
     */
    private $repository;

    public function __construct(TelefoneRepository $repository)
    {
        $this->repository = $repository;
    }

    public function missingMethod($params = array())
    {
        return view('errors.404');
    }

    public function index()
    {
        $telefones = $this->repository->paginate(10);
        return view ('admin.telefones.index', compact('telefones'));
    }


    public function create()
    {
        return view('admin.telefones.create');
    }


    public function edit($id)
    {
        $telefones = $this->repository->find($id);
        return view('admin.telefones.edit', compact('telefones'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->repository->create($data);
        return redirect()->route('admin.telefone.index');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);
        return redirect()->route('admin.telefone.index');
    }


    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.telefone.index');
    }
}
