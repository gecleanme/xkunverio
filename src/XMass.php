<?php

namespace gecleanme\Xkunverio;

use gecleanme\Xkunverio\Enums\XMassUnit;

/**
 * XMass class for converting weights between different units.
 */
class XMass
{
    /**
     * Create a new XMass instance.
     *
     * @param  XMassUnit  $fromUnit  The unit to convert from.
     * @param  XMassUnit  $toUnit  The unit to convert to.
     * @param  float  $mass  The mass value to be converted.
     */
    public static function convert(XMassUnit $fromUnit, XMassUnit $toUnit, float $mass): static
    {
            return new static($fromUnit, $toUnit, $mass);
    }

    /**
     * XMass constructor.
     *
     * @param  XMassUnit  $fromUnit  The unit to convert from.
     * @param  XMassUnit  $toUnit  The unit to convert to.
     * @param  float  $mass  The mass value to be converted.
     */
    public function __construct(
        protected XMassUnit $fromUnit,
        protected XMassUnit $toUnit,
        protected float $mass,
    ) {
    }

    /**
     * Get the converted mass value.
     *
     * @return float The converted mass value.
     */
    public function getResult(): float
    {
        return $this->convertMass();
    }

    /**
     * Convert the mass to the desired unit.
     *
     * @return float The converted mass value.
     */
    protected function convertMass(): float
    {
        $fromFactor = $this->fromUnit->conversionFactor();
        $toFactor = $this->toUnit->conversionFactor();

        // Convert from source unit to Kilograms
        $kgValue = $this->mass * $fromFactor;

        // Convert from Kilograms to target unit
        return $kgValue / $toFactor;
    }
}
