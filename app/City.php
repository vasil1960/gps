<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class City extends Model
{
    protected $table = 'regions.PopulatedPlaces';

    public function names()
    {
        return $this->belongsTo('Add\Name','city', 'ID');
    }
}
