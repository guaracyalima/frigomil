<?php

namespace App\Http\Controllers;

use App\Repositories\FilialRepository;
use Illuminate\Http\Request;

class FilialController extends Controller
{
    /**
     * @var FilialRepository
     */
    private $repository;

    public function __construct(FilialRepository $repository)
    {

        $this->repository = $repository;
    }
    public function missingMethod($params = array())
    {
        return view('errors.404');
    }

    public function index()
    {
        $filials = $this->repository->paginate(10);
        return view ('admin.filial.index', compact('filials'));
    }


    public function create()
    {
        return view('admin.filial.create');
    }


    public function edit($id)
    {
        $filials = $this->repository->find($id);
        return view('admin.filial.edit', compact('filials'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->repository->create($data);
        return redirect()->route('admin.filial.index');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);

        return redirect()->route('admin.filial.index');
    }


    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.filial.index');
    }
}
