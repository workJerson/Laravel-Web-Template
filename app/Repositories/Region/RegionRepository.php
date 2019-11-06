<?php

namespace App\Repositories\Region;

use App\Base\BaseRepository;
use App\Region;
use App\Repositories\Region\RegionRepositoryInterface;

class RegionRepository extends BaseRepository implements RegionRepositoryInterface
{
    protected $model;

    /**
     * ArticlesRepository constructor.
     * @param Article $article
     */
    public function __construct(Region $region)
    {
        $this->model = $region;
    }
}
