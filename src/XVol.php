<?php

namespace gecleanme\Xkunverio;

use gecleanme\Xkunverio\Enums\XVolUnit;

/**
 * XVol class for converting Volumes between different units.
 */
class XVol
{
    /**
     * Create a new XVol instance.
     *
     * @param  XVolUnit  $fromUnit  The unit to convert from.
     * @param  XVolUnit  $toUnit  The unit to convert to.
     * @param  float  $vol  The volume value to be converted.
     */
    public static function convert(XVolUnit $fromUnit, XVolUnit $toUnit, float $vol): static
    {
        return new static($fromUnit, $toUnit, $vol);
    }

    /**
     * XVol constructor.
     *
     * @param  XVolUnit  $fromUnit  The unit to convert from.
     * @param  XVolUnit  $toUnit  The unit to convert to.
     * @param  float  $vol  The volume value to be converted.
     */
    public function __construct(
        protected XVolUnit $fromUnit,
        protected XVolUnit $toUnit,
        protected float $vol,
    ) {
    }

    /**
     * Get the converted volume value.
     *
     * @return float The converted volume value.
     */
    public function getResult(): float
    {
        return $this->convertVol();
    }

    /**
     * Convert the volume to the desired unit.
     *
     * @return float The converted volume value.
     */
    protected function convertVol(): float
    {
        $fromFactor = $this->fromUnit->conversionFactor();
        $toFactor = $this->toUnit->conversionFactor();

        // Convert from source unit to Liters
        $ltrValue = $this->vol * $fromFactor;

        // Convert from Liters to target unit
        return $ltrValue / $toFactor;
    }
}
