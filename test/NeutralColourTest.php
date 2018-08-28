<?php

declare(strict_types = 1);

namespace CodingMatters\ColourTest;

use CodingMatters\Colour\Colour;
use PHPUnit\Framework\TestCase;

final class NeutralColourTest extends TestCase
{
    /**
     * @test
     */
    public function shouldReturnWhite() : void
    {
        $this->assertEquals('#ffffff', Colour::WHITE);
    }

    /**
     * @test
     */
    public function shouldReturnBlack() : void
    {
        $this->assertEquals('#000000', Colour::BLACK);
    }
}
