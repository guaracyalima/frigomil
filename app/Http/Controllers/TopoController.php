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
        return view('admin.topo');
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $this->repository->create($data);
        return view('admin.topo');
    }
}
