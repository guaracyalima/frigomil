<?php

namespace App\Http\Controllers;

use App\Repositories\SocialRepository;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    /**
     * @var SocialRepository
     */
    private $repository;

    public function __construct(SocialRepository $repository)
    {

        $this->repository = $repository;
    }
    public function missingMethod($params = array())
    {
        return view('errors.404');
    }

    public function index()
    {
        $redes = $this->repository->paginate(10);
        return view ('admin.social.index', compact('redes'));
    }


    public function create()
    {
        $status = ['0' => 'ativo', '1' => 'inativo'];
        $rede = [
            '' => 'Selecione uma',
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
            'instagram' => 'Instagram',
            'linkedin' => 'Linked in',
            'whatsapp' => 'Whatsapp',
            'telegram' => 'Telegram',
            'pinterest' => 'Pinterest'
        ];
        return view('admin.social.create', compact('status', 'rede'));
    }


    public function edit($id)
    {
        $social = $this->repository->find($id);
        $status = ['0' => 'ativo', '1' => 'inativo'];
        $rede = [
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
            'instagram' => 'Instagram',
            'linkedin' => 'Linked in',
            'whatsapp' => 'Whatsapp',
            'telegram' => 'Telegram',
            'pinterest' => 'Pinterest'
        ];
        return view('admin.social.edit', compact('social', 'status', 'rede'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->repository->create($data);
        return redirect()->route('admin.social.index');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);

        return redirect()->route('admin.social.index');
    }


    public function destroy($id)
    {
        $this->repository->delete($id);
        return redirect()->route('admin.social.index');
    }
}
