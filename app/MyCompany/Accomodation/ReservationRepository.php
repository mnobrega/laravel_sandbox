<?php

namespace MyCompany\Accomodation;

class ReservationRepository implements RepositoryInterface
{
    private $reservation;

    function __oonstruct($reservation)
    {
        $this->reservation = $reservation;
    }

    public function create($attributes)
    {
        $this->reservation->create($attributes);
        return $this->reservation;
    }
}
