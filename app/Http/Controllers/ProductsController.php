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
        return view('admin.products');
    }

    public function create(Request $request)
    {
        if ($request->hasFile('img')) {
            $name = $request->file('img')->getClientOriginalName();
            $ext = $request->file('img')->extension();
            $path = Storage::putFile('uploads', new File($request->file('img')));
            $encoding = base64_encode($request->file('img'));
            Product::create([
                'nome'  => $request->nome,
                'descricao' => $request->descricao,
                'preco' => $request->preco,
                'peso' => $request->peso,
                'fornecedor' => $request->fornecedor,
                'img' => $encoding
            ]);
        }
        else{
            Product::create([
                'nome'  => $request->nome,
                'descricao' => $request->descricao,
                'preco' => $request->preco,
                'peso' => $request->peso,
                'fornecedor' => $request->fornecedor
            ]);
        }

        return view('admin.products');
    }
}
