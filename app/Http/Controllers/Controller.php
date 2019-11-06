<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Generate cached response if applicable.
     *
     * @param \Closure $callback
     *
     * @return mixed
     */
    protected function generateCachedResponse($callback)
    {
        // TODO: For refactor.
        return $callback();

        $params = request()->query();
        ksort($params);
        $rememberKey = sha1(request()->url().http_build_query($params));
    }

    /**
     * Paginate the dataset if applicable.
     *
     * @param Builder $builder
     *
     * @return Collection
     */
    protected function paginateOrGet($builder)
    {
        if (request()->has('page')) {
            return $builder->paginate(request('per_page'));
        }

        if ($builder instanceof \Illuminate\Support\Collection) {
            return $builder->values();
        }

        return $builder->get();
    }

    /**
     * Switch to CMS or WEB equivalent function.
     *
     * @param string $method
     * @param mixed  $request
     * @param mixed  $model
     *
     * @return Function
     */
    protected function switch(string $method, $request = null, $model = null)
    {
        if (request()->user()->is_cms ?? false) {
            $method .= 'Cms';
        } else {
            $method .= 'Web';
        }

        return $this->$method($request, $model);
    }

    /**
     * Get the map of resource methods to ability names.
     *
     * @return array
     */
    protected function resourceAbilityMap()
    {
        return [
            'index' => 'view',
            'show' => 'view',
            'create' => 'create',
            'store' => 'create',
            'edit' => 'update',
            'update' => 'update',
            'destroy' => 'delete',
        ];
    }
}
