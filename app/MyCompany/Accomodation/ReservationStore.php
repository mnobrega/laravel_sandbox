<?php namespace MyCompany\Accomodation;

use App\Reservation;

class ReservationStore
{
    private $reservationModel;

    public function __construct()
    {
        $this->reservationModel = new Reservation();
    }

    public function create($attributes)
    {
        $modelAttributes = array_except('$attributes',['rooms']);
        $reservation = $this->reservationModel->create($modelAttributes);
        if (isset($attributes['rooms'])) {
            $reservation->rooms()->sync($attributes['rooms']);
        }

        return $reservation;
    }
}