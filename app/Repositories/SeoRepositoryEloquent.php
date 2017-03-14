<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\SeoRepository;
use App\Entities\Seo;
use App\Validators\SeoValidator;

/**
 * Class SeoRepositoryEloquent
 * @package namespace App\Repositories;
 */
class SeoRepositoryEloquent extends BaseRepository implements SeoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Seo::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
