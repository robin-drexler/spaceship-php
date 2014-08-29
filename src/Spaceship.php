<?php
namespace RobinDrexler\Spaceship;

class Spaceship
{

    /**
     * @param $a
     * @param $b
     * @return int
     */
    public function compare($a, $b)
    {
        if ($a === $b) {
            return 0;
        }

        if ($a > $b) {
            return 1;
        }

        if ($b > $a) {
            return -1;
        }
    }
}