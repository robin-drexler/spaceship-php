<?php
use RobinDrexler\Spaceship\Spaceship;

class SpaceshipTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function itReturnsZeroWhenValuesAreEqual()
    {
       $spaceShip = new Spaceship();

       $this->assertSame(0, $spaceShip->compare(1, 1));
    }

    /**
     * @test
     */
    public function itReturnsOneWhenFirstValueIsGreater()
    {
        $spaceShip = new Spaceship();

        $this->assertSame(1, $spaceShip->compare(1, 0));
    }

    /**
     * @tests
     */
    public function itReturnsMinusOneWhenFirstValueIsSmaller()
    {
        $spaceShip = new Spaceship();

        $this->assertSame(-1, $spaceShip->compare(0, 1));
    }

    /**
     * @tests
     */
    public function itReturnsNullWhenValuesCantBeCompared()
    {
        $spaceShip = new Spaceship();

        $this->assertSame(null, $spaceShip->compare("0", 0));
    }
}
