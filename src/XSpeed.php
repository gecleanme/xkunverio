<?php

namespace gecleanme\Xkunverio;

use gecleanme\Xkunverio\Enums\XSpeedUnit;

/**
 * XSpeed class for converting speed between different units.
 */
class XSpeed
{
    /**
     * Create a new XSpeed instance.
     *
     * @param  XSpeedUnit  $fromUnit  The unit to convert from.
     * @param  XSpeedUnit  $toUnit  The unit to convert to.
     * @param  float  $speed  The speed value to be converted.
     */
    public static function convert(XSpeedUnit $fromUnit, XSpeedUnit $toUnit, float $speed): static
    {
        return new static($fromUnit, $toUnit, $speed);
    }

    /**
     * XSpeed constructor.
     *
     * @param  XSpeedUnit  $fromUnit  The unit to convert from.
     * @param  XSpeedUnit  $toUnit  The unit to convert to.
     * @param  float  $speed  The speed value to be converted.
     */
    public function __construct(
        protected XSpeedUnit $fromUnit,
        protected XSpeedUnit $toUnit,
        protected float $speed,
    ) {
    }

    /**
     * Get the converted speed value.
     *
     * @return float The converted speed value.
     */
    public function getResult(): float
    {
        return $this->convertSpeed();
    }

    /**
     * Convert the speed to the desired unit.
     *
     * @return float The converted speed value.
     */
    protected function convertSpeed(): float
    {
        $fromFactor = $this->fromUnit->conversionFactor();
        $toFactor = $this->toUnit->conversionFactor();

        // Convert from source unit to meters per second
        $mpsValue = $this->speed * $fromFactor;

        // Convert from meters per second to target unit
        return $mpsValue / $toFactor;
    }
}
