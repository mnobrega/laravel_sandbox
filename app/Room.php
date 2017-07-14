<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    //
    protected $casts = ['room_number' => 'integer'];

    public function reservations()
    {
        $this->belongsToMany('App\Reservation', 'reservation_room', 'reservation_id', 'room_id')->withTimestamps();
    }

    public function accommodation()
    {
        return $this->belongsTo('App\Accommodation');
    }

    public function amenities()
    {
        return $this->morphMany('App\Amenity',
            'amenitiable');
    }

}