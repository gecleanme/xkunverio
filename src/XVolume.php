<?php

namespace gecleanme\Xkunverio;

use gecleanme\Xkunverio\Enums\XVolumeUnit;

/**
 * XVolume class for converting Volumeumes between different units.
 */
class XVolume
{
    /**
     * Create a new XVolume instance.
     *
     * @param  XVolumeUnit  $fromUnit  The unit to convert from.
     * @param  XVolumeUnit  $toUnit  The unit to convert to.
     * @param  float  $vol  The volume value to be converted.
     */
    public static function convert(XVolumeUnit $fromUnit, XVolumeUnit $toUnit, float $vol): static
    {
        return new static($fromUnit, $toUnit, $vol);
    }

    /**
     * XVolume constructor.
     *
     * @param  XVolumeUnit  $fromUnit  The unit to convert from.
     * @param  XVolumeUnit  $toUnit  The unit to convert to.
     * @param  float  $vol  The volume value to be converted.
     */
    public function __construct(
        protected XVolumeUnit $fromUnit,
        protected XVolumeUnit $toUnit,
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
        return $this->convertVolume();
    }

    /**
     * Convert the volume to the desired unit.
     *
     * @return float The converted volume value.
     */
    protected function convertVolume(): float
    {
        $fromFactor = $this->fromUnit->conversionFactor();
        $toFactor = $this->toUnit->conversionFactor();

        // Convert from source unit to Liters
        $ltrValue = $this->vol * $fromFactor;

        // Convert from Liters to target unit
        return $ltrValue / $toFactor;
    }
}
