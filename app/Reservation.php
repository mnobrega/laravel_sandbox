<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
        protected $fillable = [
            "reservation_number",
            "date_start",
            "date_end",
            "user_id"
        ];


    public function rooms(){
        return $this->belongsToMany('App\Room','reservation_room', 'reservation_id', 'room_id')->withTimestamps();
    }

}
