<?php

namespace spec\MyCompany\Accomodation;

use MyCompany\Accomodation\Room;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class RoomSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Room::class);
    }
}
