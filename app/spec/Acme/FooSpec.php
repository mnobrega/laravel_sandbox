<?php

namespace spec\Acme;

use Acme\Foo;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FooSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Foo::class);
    }
}
