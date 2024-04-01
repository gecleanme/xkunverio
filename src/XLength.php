<?php

namespace gecleanme\Xkunverio;

use gecleanme\Xkunverio\Enums\xUnit;

/**
 * XLength class for converting lengths between different units.
 */
class XLength
{
    /**
     * Create a new XLength instance.
     *
     * @param  xUnit  $fromUnit The unit to convert from.
     * @param  xUnit  $toUnit   The unit to convert to.
     * @param  float  $length   The length value to be converted.
     * @return static
     */
    public static function convert(xUnit $fromUnit, xUnit $toUnit, float $length): static
    {
        return new static($fromUnit, $toUnit, $length);
    }

    /**
     * XLength constructor.
     *
     * @param  xUnit  $fromUnit The unit to convert from.
     * @param  xUnit  $toUnit   The unit to convert to.
     * @param  float  $length   The length value to be converted.
     */
    public function __construct(
        protected xUnit $fromUnit,
        protected xUnit $toUnit,
        protected float $length,
    ) {
    }

    /**
     * Get the converted length value.
     *
     * @return float The converted length value.
     */
    public function getResult(): float
    {
        return $this->convertLength();
    }

    /**
     * Convert the length to the desired unit.
     *
     * @return float The converted length value.
     */
    protected function convertLength(): float
    {
        $fromFactor = $this->fromUnit->conversionFactor();
        $toFactor = $this->toUnit->conversionFactor();

        // Convert from source unit to meters
        $meterValue = $this->length * $fromFactor;

        // Convert from meters to target unit
        return $meterValue / $toFactor;
    }
}
