<?php

namespace gecleanme\Xkunverio\Enums;

enum xUnit: string
{
    case Inch = 'Inch';
    case Feet = 'Feet';
    case Yard = 'Yard';
    case Mile = 'Mile';
    case Millimeter = 'Millimeter';
    case Centimeter = 'Centimeter';
    case Meter = 'Meter';
    case Kilometer = 'Kilometer';

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
