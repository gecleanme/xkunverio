<?php

namespace gecleanme\Xkunverio;

use gecleanme\Xkunverio\Enums\XAreaUnit;

/**
 * XArea class for converting Area between different units.
 */
class XArea
{
    /**
     * Create a new XArea instance.
     *
     * @param  XAreaUnit  $fromUnit  The unit to convert from.
     * @param  XAreaUnit  $toUnit  The unit to convert to.
     * @param  float  $area  The area value to be converted.
     */
    public static function convert(XAreaUnit $fromUnit, XAreaUnit $toUnit, float $area): static
    {
        return new static($fromUnit, $toUnit, $area);
    }

    /**
     * XArea constructor.
     *
     * @param  XAreaUnit  $fromUnit  The unit to convert from.
     * @param  XAreaUnit  $toUnit  The unit to convert to.
     * @param  float  $area  The area value to be converted.
     */
    public function __construct(
        protected XAreaUnit $fromUnit,
        protected XAreaUnit $toUnit,
        protected float $area,
    ) {
    }

    /**
     * Get the converted area value.
     *
     * @return float The converted area value.
     */
    public function getResult(): float
    {
        return $this->convertArea();
    }

    /**
     * Convert the area to the desired unit.
     *
     * @return float The converted area value.
     */
    protected function convertArea(): float
    {
        $fromFactor = $this->fromUnit->conversionFactor();
        $toFactor = $this->toUnit->conversionFactor();

        // Convert from source unit to Square Meters
        $sqmValue = $this->area * $fromFactor;

        // Convert from Square Meters to target unit
        return $sqmValue / $toFactor;
    }
}
