<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{

    //Fill by Yourself
    protected $fillable = [];


    public function rooms()
    {
        return $this->hasMany('App\Room');
    }

    public function amenities()
    {
        return $this->morphMany('App\Amenity',
            'amenitiable');
    }

}
