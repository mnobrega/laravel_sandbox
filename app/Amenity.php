<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    //

    protected $table = "amenities";
    public function rooms(){
        return $this->belongsToMany('App\Room');
    }
    public function amenitiable()
    {
        return $this->morphTo();
    }
}
