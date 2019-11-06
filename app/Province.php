<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Filterable;

class Province extends Model
{
    use Filterable;

    public function cities()
    {
        return $this->hasMany(City::class, 'provCode', 'provCode');
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'regCode', 'regCode');
    }
}
