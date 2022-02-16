<?php

namespace Braddle\Bowling;

use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    private $app;

    public function setUp()
    {
        $app = new Game();
    }

    public function testGutterBallGame()
    {
        $this->assertEquals($this->app->score(0, '-- -- -- -- -- -- -- -- -- --'));
    }

    public function testHittingASinglePin()
    {
        $this->assertEquals($this->app->score(1, '1- -- -- -- -- -- -- -- -- --'));
    }

    public function testHittingASinglePinTwice()
    {
        $this->assertEquals($this->app->score(2, '11 -- -- -- -- -- -- -- -- --'));
    }

    public function testHittingASinglePinThreeTimes()
    {
        $this->assertEquals($this->app->score(3, '11 1- -- -- -- -- -- -- -- --'));
    }
    

    public function testHittingASinglePinFourTimes()
    {
        $this->assertEquals($this->app->score(4, '11 11 -- -- -- -- -- -- -- --'));
    }

    public function testHittingASinglePinFiveTimes()
    {
        $this->assertEquals($this->app->score(5, '11 11 1- -- -- -- -- -- -- --'));
    }

    public function testHittingASinglePinSixTimes()
    {
        $this->assertEquals($this->app->score(6, '11 11 11 -- -- -- -- -- -- --'));
    }
}