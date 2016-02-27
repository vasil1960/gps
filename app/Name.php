<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Name extends Model
{

   // public $timestamps = false;
    protected $table = 'iagGPS.names';

    public function cityes()
    {
        return $this->hasOne('App\City','ID','city');
    }

}
