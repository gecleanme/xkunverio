<?php

namespace gecleanme\Xkunverio\Enums;

enum XTempUnit: string
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
            self::Celsius => 0,
            self::Fahrenheit => ['sub_add' => 32, 'div_mul' => 1.8],
            self::Kelvin => 273.15,
        };
    }
}
