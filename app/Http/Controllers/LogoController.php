<?php

namespace App\Http\Controllers;

use App\Repositories\LogoRepository;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    /**
     * @var LogoRepository
     */
    private $repository;

    public function __construct(LogoRepository $repository)
    {

        $this->repository = $repository;
    }

    public function missingMethod($params = array())
    {
        return view('errors.404');
    }
    public function index()
    {
        $logos = $this->repository->paginate(10);
        return view ('admin.logo.index', compact('logos'));
    }


    public function create()
    {
        return view('admin.logo.create');
    }


    public function edit($id)
    {
        $logos = $this->repository->find($id);

        return view('admin.logo.edit', compact('logos'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $file = $request->file('logo');
        if(is_object($file) and $file->isValid()){
            $filename = time(). '-' . $file->getClientOriginalName();
            $file = $file->move(public_path().'/img/logos/', $filename);
            $path = $filename;
            $data['logo']=$path;
            $this->repository->create($data);
        }

        return redirect()->route('admin.logo.index');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $file = $request->file('logo');
        if(is_object($file) and $file->isValid()){
            $filename = time(). '-'  .$file->getClientOriginalName();
            $file = $file->move(public_path().'/img/uploads/', $filename);
            $path = $filename;
            $data['logo']=$path;
            $this->repository->update($data, $id);
        }


        return redirect()->route('admin.logo.index');
    }


    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.logo.index');
    }
}
