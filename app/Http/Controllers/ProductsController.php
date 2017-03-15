<?php

namespace App\Http\Controllers;

use App\Entities\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class ProductsController extends Controller
{
    /**
     * @var ProductRepository
     */
    private $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $produtos = $this->repository->paginate(10);
        return view('admin.produtos.index', compact('produtos'));
    }

    public function create()
    {
//        $data = $request->all();
//        $this->repository->create($data);
        return view('admin.produtos.create');
    }

    public function edit($id)
    {
        $products = $this->repository->find($id);
        return view('admin.produtos.edit', compact('products'));
    }

    public function store(Request $request)
    {

        $data = $request->all();
        $file = $request->file('imagem');
        //dd($file);
        if(is_object($file) and $file->isValid()){
            $filename = time(). '-' . $file->getClientOriginalName();
            $file = $file->move(public_path().'/img/products/', $filename);
            $path = $filename;
            $data['imagem']= $path;
            //dd($path);
            $this->repository->create($data);
        }

        return redirect()->route('admin.produtos.index');
    }

    public function update(Request $request, $id)
    {
//        $data = $request->all();
//        $this->repository->update($data, $id);

        $data = $request->all();
        $file = $request->file('imagem');
        if(is_object($file) and $file->isValid()){
            $filename = time(). '-'  .$file->getClientOriginalName();
            $file = $file->move(public_path().'/img/products/', $filename);
            $path = $filename;
            $data['imagem']=$path;
            $this->repository->update($data, $id);
        }

        return redirect()->route('admin.produtos.index');
    }


    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.produtos.index');
    }
}
