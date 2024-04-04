<?php

namespace gecleanme\Xkunverio;

use gecleanme\Xkunverio\Enums\XTemperatureUnit;

/**
 * XTemperature class for converting temperatures between different units.
 */
class XTemperature
{
    /**
     * Create a new XTemperature instance.
     *
     * @param  XTemperatureUnit  $fromUnit  The unit to convert from.
     * @param  XTemperatureUnit  $toUnit  The unit to convert to.
     * @param  float  $temperature  The temperature value to be converted.
     */
    public static function convert(XTemperatureUnit $fromUnit, XTemperatureUnit $toUnit, float $temperature): static
    {
        return new static($fromUnit, $toUnit, $temperature);
    }

    /**
     * XTemperature constructor.
     *
     * @param  XTemperatureUnit  $fromUnit  The unit to convert from.
     * @param  XTemperatureUnit  $toUnit  The unit to convert to.
     * @param  float  $temperature  The temperature value to be converted.
     */
    public function __construct(
        protected XTemperatureUnit $fromUnit,
        protected XTemperatureUnit $toUnit,
        protected float $temperature,
    ) {
    }

    /**
     * Get the converted temperature value.
     *
     * @return float The converted temperature value.
     */
    public function getResult(): float
    {
        return $this->convertTemperature();
    }

    /**
     * Convert the temperature to the desired unit.
     *
     * @return float The converted temperature value.
     */
    protected function convertTemperature(): float
    {
        $fromFactor = $this->fromUnit->conversionFactor();
        $toFactor = $this->toUnit->conversionFactor();

        if (is_array($fromFactor) && is_array($toFactor)) {
            // Handle Fahrenheit conversions
            $celsius = ($this->temperature - $fromFactor['sub_add']) / $fromFactor['div_mul'];

            return ($celsius * $toFactor['div_mul']) + $toFactor['sub_add'];
        } elseif (is_array($fromFactor)) {
            // from Fahrenheit to Celsius/Kelvin
            $celsius = ($this->temperature - $fromFactor['sub_add']) / $fromFactor['div_mul'];

            return $celsius + $toFactor;
        } elseif (is_array($toFactor)) {
            // Celsius/Kelvin to Fahrenheit
            $celsius = $this->temperature - $fromFactor;

            return ($celsius * $toFactor['div_mul']) + $toFactor['sub_add'];
        } else {
            // Celsius and Kelvin
            $celsius = $this->temperature - $fromFactor;

            return $celsius + $toFactor;
        }
    }
}
