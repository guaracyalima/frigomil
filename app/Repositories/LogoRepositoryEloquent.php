<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\LogoRepository;
use App\Entities\Logo;
use App\Validators\LogoValidator;

/**
 * Class LogoRepositoryEloquent
 * @package namespace App\Repositories;
 */
class LogoRepositoryEloquent extends BaseRepository implements LogoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Logo::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
