<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\SocialRepository;
use App\Entities\Social;
use App\Validators\SocialValidator;

/**
 * Class SocialRepositoryEloquent
 * @package namespace App\Repositories;
 */
class SocialRepositoryEloquent extends BaseRepository implements SocialRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Social::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
