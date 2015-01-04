<?php

namespace spec\MantasVaitkunas;

use MantasVaitkunas\DummyClass;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * @mixin DummyClass
 */
class DummyClassSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('MantasVaitkunas\DummyClass');
    }

    public function it_returns_sum()
    {
        $this->sum(2, 5)->shouldReturn(7);
    }
}
