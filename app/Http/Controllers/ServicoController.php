<?php

namespace App\Http\Controllers;

use App\Repositories\ServicoRepository;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    /**
     * @var ServicoRepository
     */
    private $repository;

    public function __construct(ServicoRepository $repository)
    {
        $this->repository = $repository;
    }
    public function missingMethod($params = array())
    {
        return view('errors.404');
    }

    public function index()
    {
        $servicos = $this->repository->paginate(10);
        return view ('admin.servicos.index', compact('servicos'));
    }


    public function create()
    {
        return view('admin.servicos.create');
    }


    public function edit($id)
    {
        $servicos = $this->repository->find($id);

        return view('admin.servicos.edit', compact('servicos'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $file = $request->file('imagem');
        //dd($file);
        if(is_object($file) and $file->isValid()){
            $filename = time(). '-' . $file->getClientOriginalName();
            $file = $file->move(public_path().'/img/uploads/', $filename);
            $path = $filename;
            $data['imagem']=$path;
            $this->repository->create($data);
        }

        return redirect()->route('admin.servicos.index');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $file = $request->file('imagem');
        if(is_object($file) and $file->isValid()){
            $filename = time(). '-'  .$file->getClientOriginalName();
            $file = $file->move(public_path().'/img/uploads/', $filename);
            $path = $filename;
            $data['imagem']=$path;
            $this->repository->update($data, $id);
        }


        return redirect()->route('admin.servicos.index');
    }


    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.servicos.index');
    }
}
