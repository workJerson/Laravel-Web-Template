<?php

namespace App\Providers;

use App\Repositories\User\UserRepository;
use App\Base\BaseRepository;
use App\Base\BaseRepositoryInterface;
use App\Repositories\Region\RegionRepositoryInterface;
use App\Repositories\Region\RegionRepository;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Province\ProvinceRepository;
use App\Repositories\Province\ProvinceRepositoryInterface;
use App\Repositories\City\CityRepository;
use App\Repositories\City\CityRepositoryInterface;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        $this->app->bind(BaseRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(RegionRepositoryInterface::class, RegionRepository::class);
        $this->app->bind(ProvinceRepositoryInterface::class, ProvinceRepository::class);
        $this->app->bind(CityRepositoryInterface::class, CityRepository::class);
    }
}
