<?php

namespace gecleanme\Xkunverio\Enums;

enum XAreaUnit: string
{
    /**
     * Square Inches unit.
     */
    case Square_Inches = 'Square Inches';

    /**
     * Square Feet unit.
     */
    case Square_Feet = 'Square Feet';

    /**
     * Square Yards unit.
     */
    case Square_Yards = 'Square Yards';

    /**
     * Square Miles unit.
     */
    case Square_Miles = 'Square Miles';

    /**
     * Square Millimeters unit.
     */
    case Square_Millimeters = 'Square Millimeters';

    /**
     * Square Centimeters unit.
     */
    case Square_Centimeters = 'Square Centimeters';

    /**
     * Square Meters unit.
     */
    case Square_Meters = 'Square Meters';

    /**
     * Square Kilometers unit.
     */
    case Square_Kilometers = 'Square Kilometers';

    /**
     * Get the conversion factor for the current unit.
     *
     * @return float The conversion factor for the current unit.
     */
    public function conversionFactor(): float
    {
        return match ($this) {
            self::Square_Inches => pow(0.0254, 2),
            self::Square_Feet => pow(0.3048, 2),
            self::Square_Yards => pow(0.9144, 2),
            self::Square_Miles => pow(1609.344, 2),
            self::Square_Millimeters => pow(0.001, 2),
            self::Square_Centimeters => pow(0.01, 2),
            self::Square_Meters => pow(1, 2),
            self::Square_Kilometers => pow(1000, 2),
            default => null,
        };
    }

    /**
     * Get Enum case values as an array.
     *
     * @return array Enum case values array.
     */
    public static function getCases(): array
    {
        return array_column(self::cases(), 'value');
    }
}
