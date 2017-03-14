<?php

namespace App\Http\Controllers;

use App\Repositories\MenuRepository;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    /**
     * @var MenuRepository
     */
    private $repository;

    public function __construct(MenuRepository $repository)
    {

        $this->repository = $repository;
    }

    public function missingMethod($params = array())
    {
        return view('errors.404');
    }

    public function index()
    {
        $menus = $this->repository->paginate(10);
        return view ('admin.menu.index', compact('menus'));
    }


    public function create()
    {
        $status = ['0' => 'ativo', '1' => 'inativo'];
        return view('admin.menu.create', compact('status'));
    }

    public function edit($id)
    {
        $menus = $this->repository->find($id);
        $status = ['0' => 'ativo', '1' => 'inativo'];
        return view('admin.menu.edit', compact('menus', 'status'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->repository->create($data);
        return redirect()->route('admin.menu.index');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);

        return redirect()->route('admin.menu.index');
    }


    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.menu.index');
    }

}
