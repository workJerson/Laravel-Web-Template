<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Filterable;

class City extends Model
{
    use Filterable;

    public function province()
    {
        return $this->belongsTo(Province::class, 'provCode', 'provCode');
    }
}
