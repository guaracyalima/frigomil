<?php

namespace App\Http\Controllers;

use App\Repositories\EnderecoRepository;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    /**
     * @var EnderecoRepository
     */
    private $repository;

    public function __construct(EnderecoRepository $repository)
    {

        $this->repository = $repository;
    }

    public function missingMethod($params = array())
    {
        return view('errors.404');
    }

    public function index()
    {
        $endereco = $this->repository->paginate(10);
        return view ('admin.endereco.index', compact('endereco'));
    }


    public function create()
    {
        return view('admin.endereco.create');
    }


    public function edit($id)
    {
        $endereco = $this->repository->find($id);
        return view('admin.endereco.edit', compact('endereco'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->repository->create($data);
        return redirect()->route('admin.endereco.index');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);
        return redirect()->route('admin.endereco.index');
    }


    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.endereco.index');
    }
}
