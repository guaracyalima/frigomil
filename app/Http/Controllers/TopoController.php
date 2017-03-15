<?php

namespace App\Http\Controllers;

use App\Repositories\TopoRepository;
use Illuminate\Http\Request;

class TopoController extends Controller
{
    /**
     * @var TopoRepository
     */
    private $repository;

    public function __construct(TopoRepository $repository)
    {
        $this->repository = $repository;
    }
    public function index()
    {
        $topos = $this->repository->paginate(10);
        return view('admin.topo.index', compact('topos'));
    }

    public function create()
    {
        return view('admin.topo.create');
    }

    public function edit($id)
    {
        $topos = $this->repository->find($id);
        return view('admin.topo.edit', compact('topos'));
    }

    public function store(Request $request)
    {

        $data = $request->all();
        $file = $request->file('imagem');
        //dd($file);
        if(is_object($file) and $file->isValid()){
            $filename = time(). '-' . $file->getClientOriginalName();
            $file = $file->move(public_path().'/img/header/', $filename);
            $path = $filename;
            $data['imagem']=$path;
            $this->repository->create($data);
        }

        return redirect()->route('admin.topo.index');
    }

    public function update(Request $request, $id)
    {
//        $data = $request->all();
//        $this->repository->update($data, $id);

        $data = $request->all();
        $file = $request->file('imagem');
        if(is_object($file) and $file->isValid()){
            $filename = time(). '-'  .$file->getClientOriginalName();
            $file = $file->move(public_path().'/img/uploads/', $filename);
            $path = $filename;
            $data['imagem']=$path;
            $this->repository->update($data, $id);
        }

        return redirect()->route('admin.topo.index');
    }


    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.topo.index');
    }

}
