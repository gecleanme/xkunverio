<?php

namespace gecleanme\Xkunverio;

use InvalidArgumentException;

class XLength
{
    protected static array $conversionFactors = [
        'Inch' => 0.0254,
        'Feet' => 0.3048,
        'Yard' => 0.9144,
        'Mile' => 1609.344,
        'Millimeter' => 0.001,
        'Centimeter' => 0.01,
        'Meter' => 1,
        'Kilometer' => 1000,
    ];

    public static function convert(string $fromUnit, string $toUnit, float $length): static
    {
        return new static($fromUnit, $toUnit, $length);
    }

    public function __construct(
        protected string $fromUnit,
        protected string $toUnit,
        protected float $length,
    ) {
        $this->validateUnits();
    }

    public function getResult(): float
    {
        return $this->convertLength();
    }

    protected function convertLength(): float
    {
        $fromFactor = $this->getConversionFactor($this->fromUnit);
        $toFactor = $this->getConversionFactor($this->toUnit);

        $meterValue = $this->length * $fromFactor; // Convert from source unit to meters
        return $meterValue / $toFactor;  // Convert from meters to target unit

    }

    protected function getConversionFactor(string $unit): float
    {
        if (! array_key_exists($unit, static::$conversionFactors)) {
            throw new InvalidArgumentException("Invalid unit: {$unit}");
        }

        return static::$conversionFactors[$unit];
    }

    protected function validateUnits(): void
    {
        $validUnits = collect(static::$conversionFactors)->keys()->toArray();

        if (! in_array($this->fromUnit, $validUnits)) {
            throw new InvalidArgumentException("Invalid 'from' unit: {$this->fromUnit}");
        }

        if (! in_array($this->toUnit, $validUnits)) {
            throw new InvalidArgumentException("Invalid 'to' unit: {$this->toUnit}");
        }
    }
}
