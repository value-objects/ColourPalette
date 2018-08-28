<?php

declare(strict_types = 1);

namespace CodingMatters\Colour;

final class Colour
{
    /**
     * Neutral colours
     */
    public const WHITE  = "#ffffff";
    public const BLACK  = "#000000";
    public const BROWN  = "#663300";

    /**
     * Primary
     */
    public const RED    = "#ff0000";
    public const BLUE   = "#0066ff";
    public const GREEN  = "#33cc33";

    /**
     * Warm colours
     */
    public const ROSE   = "#ff8080";
    public const ORANGE = "#ff9900";
    public const YELLOW = "#ffff00";

    /**
     * Cool colours
     */
    public const NAVY   = "#000066";
    public const VIOLET = "#660066";

    /**
     * Other colours
     */
    public const PURPLE = "#cc00cc";
    public const GREY   = "#737373";
    public const SILVER = "#d9d9d9";
    public const LIME   = "#66ff33";
    public const WOOD   = "#996633";

    /**
     * As colour palette
     */
    private const COLOURS = [
        self::WHITE,
        self::BLACK,
        self::BROWN,
        self::RED,
        self::BLUE,
        self::GREEN,
        self::ROSE,
        self::ORANGE,
        self::YELLOW,
        self::NAVY,
        self::PURPLE,
        self::VIOLET,
        self::GREY,
        self::SILVER,
        self::LIME,
        self::WOOD,
    ];

    public static function random() : string
    {
        return self::COLOURS[array_rand(self::COLOURS)];
    }

    public static function palette() : array
    {
        return self::COLOURS;
    }
}
