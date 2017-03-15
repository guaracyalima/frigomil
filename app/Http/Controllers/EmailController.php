<?php

namespace App\Http\Controllers;

use App\Repositories\EmailRepository;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    /**
     * @var EmailRepository
     */
    private $repository;

    public function __construct(EmailRepository $repository)
    {

        $this->repository = $repository;
    }

    public function missingMethod($params = array())
    {
        return view('errors.404');
    }

    public function index()
    {
        $email = $this->repository->paginate(10);
        return view ('admin.email.index', compact('email'));
    }


    public function create()
    {
        return view('admin.email.create');
    }


    public function edit($id)
    {
        $email = $this->repository->find($id);
        return view('admin.email.edit', compact('email'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->repository->create($data);
        return redirect()->route('admin.email.index');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);
        return redirect()->route('admin.email.index');
    }


    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.email.index');
    }
}
