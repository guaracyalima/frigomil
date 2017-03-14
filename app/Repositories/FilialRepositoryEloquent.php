<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\FilialRepository;
use App\Entities\Filial;
use App\Validators\FilialValidator;

/**
 * Class FilialRepositoryEloquent
 * @package namespace App\Repositories;
 */
class FilialRepositoryEloquent extends BaseRepository implements FilialRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Filial::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
