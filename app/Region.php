<?php

namespace App;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use Filterable;
    protected $fillable = [
        'id',
        'psgcCode',
        'regDesc',
        'regCode',
    ];

    public function provinces()
    {
        return $this->hasMany(Province::class, 'regCode', 'regCode');
    }
}
