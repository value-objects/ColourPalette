<?php

declare(strict_types = 1);

namespace CodingMatters\ColourTest;

use CodingMatters\Colour\Colour;

final class CoolColourTest
{
    /**
     * @test
     */
    public function shouldReturnBlue() : void
    {
        $this->assertEquals("#0066ff", Colour::BLUE);
    }

    /**
     * @test
     */
    public function shouldReturnNavyBlue() : void
    {
        $this->assertEquals("#000066", Colour::NAVY);
    }
}
