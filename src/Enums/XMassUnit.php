<?php

namespace gecleanme\Xkunverio\Enums;

use function Laravel\Prompts\select;

enum XMassUnit: string
{
    /**
     * Kilograms unit.
     */
    case Kilograms = 'Kilograms';

    /**
     * Ounces unit.
     */
    case Ounces = 'Ounces';

    /**
     * Pounds unit.
     */
    case Pounds = 'Pounds';

    /**
     * Grams unit.
     */
    case Grams = 'Grams';

    /**
     * Milligrams unit.
     */
    case Milligrams = 'Milligrams';

    /**
     * Stones unit.
     */
    case Stones = 'Stones';

    /**
     * Metric Tonnes unit.
     */
    case Metric_Tonnes = 'Metric Tonnes';

    /**
     * Long Tonnes unit.
     */
    case Long_Tonnes = 'Long Tonnes';

    /**
     * Short Tonnes unit.
     */
    case Short_Tonnes = 'Short Tonnes';


    /**
     * Get the conversion factor for the current unit.
     *
     * @return float The conversion factor for the current unit.
     */
    public function conversionFactor(): float
    {
        return match ($this) {
            self::Kilograms => 1.0,
            self::Ounces => 0.0283495,
            self::Pounds => 0.453592,
            self::Stones => 6.35029,
            self::Long_Tonnes => 1016.85,
            self::Short_Tonnes => 987.185,
            self::Milligrams => 0.000001,
            self::Grams => 0.001,
            self::Metric_Tonnes => 1000,
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
