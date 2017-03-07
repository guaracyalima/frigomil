<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\TopoRepository;
use App\Entities\Topo;
use App\Validators\TopoValidator;

/**
 * Class TopoRepositoryEloquent
 * @package namespace App\Repositories;
 */
class TopoRepositoryEloquent extends BaseRepository implements TopoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Topo::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
