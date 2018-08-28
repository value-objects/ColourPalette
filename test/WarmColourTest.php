<?php

declare(strict_types=1);

namespace CodingMatters\ColourTest;

use CodingMatters\Colour\Colour;
use PHPUnit\Framework\TestCase;

final class WarmColourTest extends TestCase
{
    /**
     * @test
     */
    public function shouldReturnRed() : void
    {
        $this->assertEquals("#ff0000", Colour::RED);
    }

    /**
     * @test
     */
    public function shouldReturnRose() : void
    {
        $this->assertEquals("#ff8080", Colour::ROSE);
    }

    /**
     * @test
     */
    public function shouldReturnOrange() : void
    {
        $this->assertEquals("#ff9900", Colour::ORANGE);
    }

    /**
     * @test
     */
    public function shouldReturnYellow() : void
    {
        $this->assertEquals("#ffff00", Colour::YELLOW);
    }
}
