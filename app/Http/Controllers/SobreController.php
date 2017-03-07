<?php

namespace App\Http\Controllers;

use App\Repositories\SobreRepository;
use Illuminate\Http\Request;

class SobreController extends Controller
{
    public function __construct(SobreRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return view('admin.sobre');
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $this->repository->create($data);
        return view('admin.sobre');
    }

}
