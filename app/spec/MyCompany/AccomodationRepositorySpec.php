<?php

namespace spec\MyCompany;

use MyCompany\AccomodationRepository;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AccomodationRepositorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(AccomodationRepository::class);
    }
}
