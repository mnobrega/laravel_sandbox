<?php

namespace spec\MyCompany\Accomodation;

use App\User;
use MyCompany\Accomodation\ReservationValidator;
use MyCompany\Accomodation\Room;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Carbon\Carbon;

class ReservationValidatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ReservationValidator::class);
    }

    function its_start_date_must_come_before_the_end_date ($start_date, $end_date, $room)
    {
        $rooms = [$room];
        $start_date = '2015-06-03';
        $end_date = '2015-06-03';
        $this->shouldThrow('\InvalidArgumentException')
            ->duringValidate($start_date, $end_date, $rooms);
    }

    function it_cannot_be_made_for_more_than_fifteen_days($start_date, $end_date, Room $room)
    {
        $start_date = '2015-06-01';
        $end_date = '2015-07-30';
        $rooms = [$room];
        $this->shouldThrow('\InvalidArgumentException')
            ->duringValidate($start_date, $end_date, $rooms);
    }

    function it_cannot_contain_more_than_four_rooms ($start_date, $end_date, Room $room1, Room $room2,
        Room $room3, Room $room4, Room $room5)
    {
        $start_date = '2015-06-1';
        $end_date = '2015-06-10';
        $rooms = [$room1,$room2,$room3,$room4,$room5];
        $this->shouldThrow('\InvalidArgumentException')
            ->duringValidate($start_date, $end_date, $rooms);
    }

}
