<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\EnderecoRepository;
use App\Entities\Endereco;
use App\Validators\EnderecoValidator;

/**
 * Class EnderecoRepositoryEloquent
 * @package namespace App\Repositories;
 */
class EnderecoRepositoryEloquent extends BaseRepository implements EnderecoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Endereco::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
