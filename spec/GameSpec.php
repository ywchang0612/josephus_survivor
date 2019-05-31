<?php

namespace spec;

use Game;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GameSpec extends ObjectBehavior
{
    public function it_survive_100_when_100_counted_1()
    {
        $this->josephus_survivor(100, 1)->shouldBe(100);
    }

    public function it_survive_13_when_14_counted_2()
    {
        $this->josephus_survivor(14, 2)->shouldBe(13);
    }

    public function it_survive_1_when_1_counted_300()
    {
        $this->josephus_survivor(1, 300)->shouldBe(1);
    }

    public function it_survive_10_when_11_count_19()
    {
        $this->josephus_survivor(11, 19)->shouldBe(10);
    }

    public function it_survive_4_when_7_count_3()
    {
        $this->josephus_survivor(7, 3)->shouldBe(4);
    }
}
