<?php

namespace gecleanme\Xkunverio\Enums;

enum XTemperatureUnit: string
{
    /**
     * Celsius unit.
     */
    case Celsius = 'Celsius';

    /**
     * Fahrenheit unit.
     */
    case Fahrenheit = 'Fahrenheit';

    /**
     * Yard unit.
     */
    case Kelvin = 'Kelvin';

    /**
     * Get the conversion factor for the current unit.
     *
     * @return float|array The conversion factor for the current unit.
     */
    public function conversionFactor(): float|array
    {
        return match ($this) {
            self::Celsius => 0.0,
            self::Fahrenheit => ['sub_add' => 32, 'div_mul' => 1.8],
            self::Kelvin => 273.15,
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
