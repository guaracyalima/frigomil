<?php

namespace App\Http\Controllers;

use App\Repositories\SobreRepository;
use Illuminate\Http\Request;

class SobreController extends Controller
{
    /**
     * @var SobreRepository
     */
    private $repository;

    public function __construct(SobreRepository $repository)
    {

        $this->repository = $repository;
    }

    public function index()
    {
        $sobres = $this->repository->paginate(10);
        return view('admin.sobre.index', compact('sobres'));
    }

    public function create()
    {
//        $data = $request->all();
//        $this->repository->create($data);
        return view('admin.sobre.create');
    }

    public function edit($id)
    {
        $sobres = $this->repository->find($id);
        return view('admin.sobre.edit', compact('sobres'));
    }

    public function store(Request $request)
    {

        $data = $request->all();
        $file = $request->file('imagem');
        //dd($file);
        if(is_object($file) and $file->isValid()){
            $filename = time(). '-' . $file->getClientOriginalName();
            $file = $file->move(public_path().'/img/about/', $filename);
            $path = $filename;
            $data['imagem']=$path;
            $this->repository->create($data);
        }

        return redirect()->route('admin.sobre.index');
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

        return redirect()->route('admin.sobre.index');
    }


    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.sobre.index');
    }

}
