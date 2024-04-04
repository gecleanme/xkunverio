<?php

namespace gecleanme\Xkunverio\Enums;

enum XVolUnit: string
{
    /**
     * Cubic Inches unit.
     */
    case Cubic_Inches = 'Cubic Inches';

    /**
     * Cubic Feet unit.
     */
    case Cubic_Feet = 'Cubic Feet';

    /**
     * Cubic Centimeters unit.
     */
    case Cubic_Centimeters = 'Cubic Centimeters';

    /**
     * Cubic Meters unit.
     */
    case Cubic_Meters = 'Cubic Meters';

    /**
     * Imperial Gallons unit.
     */
    case Imperial_Gallons = 'Imperial Gallons';

    /**
     * Imperial Quarts unit.
     */
    case Imperial_Quarts = 'Imperial Quarts';

    /**
     * Imperial Pints unit.
     */
    case Imperial_Pints = 'Imperial Pints';

    /**
     * Imperial Cups unit.
     */
    case Imperial_Cups = 'Imperial Cups';

    /**
     * Imperial Ounces unit.
     */
    case Imperial_Ounces = 'Imperial Ounces';

    /**
     * Imperial Tablespoons unit.
     */
    case Imperial_Tablespoons = 'Imperial Tablespoons';

    /**
     * Imperial Teaspoons unit.
     */
    case Imperial_Teaspoons = 'Imperial Teaspoons';

    /**
     * Liters unit.
     */
    case Liters = 'Liters';

    /**
     * Milliliters unit.
     */
    case Milliliters = 'Milliliters';

    /**
     * Get the conversion factor for the current unit.
     *
     * @return float The conversion factor for the current unit.
     */
    public function conversionFactor(): float
    {
        return match ($this) {
            self::Cubic_Inches => 0.0163871,
            self::Cubic_Feet => 28.3168,
            self::Cubic_Centimeters, self::Milliliters => 0.001,
            self::Cubic_Meters => 1000,
            self::Imperial_Gallons => 4.54609,
            self::Imperial_Quarts => 1.13652,
            self::Imperial_Pints => 0.568261,
            self::Imperial_Cups => 0.284131,
            self::Imperial_Ounces => 0.0284131,
            self::Imperial_Tablespoons => 0.0177582,
            self::Imperial_Teaspoons => 0.00591939,
            self::Liters => 1,
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
