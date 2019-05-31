<?php

class Game
{
    public function josephus_survivor(int $n, int $k): int
    {
        $elements = range(1, $n);

         while (count($elements) > 1) {

            $index = $k % count($elements);

            $left = array_splice($elements, 0, $index - 1);
            array_shift($elements);

            $elements = array_merge($elements, $left);

        }

        return reset($elements);
    }
}
