<?php

namespace gecleanme\Xkunverio\Enums;

enum XSpeedUnit: string
{
    /**
     * Meters per Second unit.
     */
    case Meters_Per_Second = 'Meters per Second';

    /**
     * Kilometers per Hour unit.
     */
    case Kilometers_Per_Hour = 'Kilometers per Hour';

    /**
     * Miles per Hour unit.
     */
    case Miles_Per_Hour = 'Miles per Hour';

    /**
     * Knots unit.
     */
    case Knots = 'Knots';

    // Add more speed units as needed

    /**
     * Get the conversion factor for the current unit.
     *
     * @return float The conversion factor for the current unit.
     */
    public function conversionFactor(): float
    {
        return match ($this) {
            self::Meters_Per_Second => 1.0,
            self::Kilometers_Per_Hour => 0.277778,
            self::Miles_Per_Hour => 0.44704,
            self::Knots => 0.514444,
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
