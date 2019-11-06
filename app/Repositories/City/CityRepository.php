<?php

namespace App\Repositories\City;

use App\Base\BaseRepository;
use App\City;

class CityRepository extends BaseRepository implements CityRepositoryInterface
{
    protected $model;

    /**
     * ArticlesRepository constructor.
     *
     * @param Article $article
     */
    public function __construct(City $city)
    {
        $this->model = $city;
    }
}
