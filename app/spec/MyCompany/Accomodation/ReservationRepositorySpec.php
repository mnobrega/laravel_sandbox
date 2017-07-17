<?php

namespace spec\MyCompany\Accomodation;

use MyCompany\Accomodation\ReservationRepository;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ReservationRepositorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ReservationRepository::class);
    }
}
