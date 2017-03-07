<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\SobreRepository;
use App\Entities\Sobre;
use App\Validators\SobreValidator;

/**
 * Class SobreRepositoryEloquent
 * @package namespace App\Repositories;
 */
class SobreRepositoryEloquent extends BaseRepository implements SobreRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Sobre::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
