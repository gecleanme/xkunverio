<?php

namespace gecleanme\Xkunverio;

use gecleanme\Xkunverio\Enums\xUnit;

class XLength
{
    /**
     * Create a new XLength instance.
     *
     * @param  xUnit  $fromUnit
     * @param  xUnit  $toUnit
     * @param  float $length
     * @return static
     */
    public static function convert(xUnit $fromUnit, xUnit $toUnit, float $length): static
    {
        return new static($fromUnit, $toUnit, $length);
    }

    /**
     * XLength constructor.
     *
     * @param  xUnit  $fromUnit
     * @param  xUnit  $toUnit
     * @param  float $length
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
     * @return float
     */
    public function getResult(): float
    {
        return $this->convertLength();
    }

    /**
     * Convert the length to the desired unit.
     *
     * @return float
     */
    protected function convertLength(): float
    {
        $fromFactor = $this->fromUnit->conversionFactor();
        $toFactor = $this->toUnit->conversionFactor();

        $meterValue = $this->length * $fromFactor; // Convert from source unit to meters

        return $meterValue / $toFactor; // Convert from meters to target unit
    }
}
