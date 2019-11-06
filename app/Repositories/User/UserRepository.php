<?php

namespace App\Repositories\User;

use App\User;
use App\Repositories\UserRepositoryInterface;
use App\Base\BaseRepository;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    protected $model;

    /**
     * ArticlesRepository constructor.
     * @param Article $article
     */
    public function __construct(User $user)
    {
        $this->model = $user;
    }
}
