<?php

namespace gecleanme\Xkunverio\Enums;

/**
 * Enum representing different length units and their conversion factors.
 */
enum XLenUnit: string
{
    /**
     * Inch unit.
     */
    case Inch = 'Inch';

    /**
     * Feet unit.
     */
    case Feet = 'Feet';

    /**
     * Yard unit.
     */
    case Yard = 'Yard';

    /**
     * Mile unit.
     */
    case Mile = 'Mile';

    /**
     * Millimeter unit.
     */
    case Millimeter = 'Millimeter';

    /**
     * Centimeter unit.
     */
    case Centimeter = 'Centimeter';

    /**
     * Meter unit.
     */
    case Meter = 'Meter';

    /**
     * Kilometer unit.
     */
    case Kilometer = 'Kilometer';

    /**
     * Get the conversion factor for the current unit.
     *
     * @return float The conversion factor for the current unit.
     */
    public function conversionFactor(): float
    {
        return match ($this) {
            self::Inch => 0.0254,
            self::Feet => 0.3048,
            self::Yard => 0.9144,
            self::Mile => 1609.344,
            self::Millimeter => 0.001,
            self::Centimeter => 0.01,
            self::Meter => 1,
            self::Kilometer => 1000,
        };
    }
}
