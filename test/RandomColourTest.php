<?php

declare(strict_types = 1);

namespace CodingMatters\ColourTest;

use CodingMatters\Colour\Colour;
use PHPUnit\Framework\TestCase;

final class RandomColourTest extends TestCase
{
    /**
     * @test
     */
    public function randomizedColor() : void
    {
        $this->assertTrue(in_array(Colour::random(), Colour::palette()));
    }
}
