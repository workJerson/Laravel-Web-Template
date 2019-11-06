<?php

namespace App\Repositories\Province;

use App\Base\BaseRepository;
use App\Province;

class ProvinceRepository extends BaseRepository implements ProvinceRepositoryInterface
{
    protected $model;

    /**
     * ArticlesRepository constructor.
     *
     * @param Article $article
     */
    public function __construct(Province $province)
    {
        $this->model = $province;
    }
}
