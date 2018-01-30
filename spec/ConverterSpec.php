<?php

namespace spec\Acme;

use Acme\Converter;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ConverterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Converter::class);
    }

    function it_returns_ten(){
        $this->convert('X')->shouldBe(10);
    }
}
