<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Name extends Model
{

   // public $timestamps = false;
    protected $table = 'iagGPS.names';

   // protected $fillable = ['name','surname', 'family','egn_eik','city','pcode', 'address','phone','email' ];

    protected $guarded = ['id'];

    public function cityes()
    {
        return $this->hasOne('App\City','ID','city');
    }

}