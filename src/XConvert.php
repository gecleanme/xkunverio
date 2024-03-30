<?php

namespace gecleanme\Xkunverio;

class XConvert
{
    public function __construct(
        private readonly string $fromUnit,
        private readonly string $toUnit,
        private readonly float $length = 0,
        private float $meterValue = 0,
        private float $toMeter = 0,
        private float $result = 0,

    ) {
        //
    }

    protected function toMeter(): float
    {
        switch ($this->fromUnit) {
            case 'Inch':
                $this->meterValue = $this->length * 0.0254;
                break;
            case 'Feet':
                $this->meterValue = $this->length * 0.3048;
                break;
            case 'Yard':
                $this->meterValue = $this->length * 0.9144;
                break;
            case 'Mile':
                $this->meterValue = $this->length * 1609.344;
                break;
            case 'Millimeter':
                $this->meterValue = $this->length * 0.001;
                break;
            case 'Centimeter':
                $this->meterValue = $this->length * 0.01;
                break;
            case 'Meter':
                $this->meterValue = $this->length;
                break;

            case 'Kilometer':
                $this->meterValue = $this->length * 1000;
                break;

        }

        return $this->meterValue;
    }

    protected function fromMeter(): float
    {
        switch ($this->toUnit) {
            case 'Inch':
                $this->result = $this->meterValue / 0.0254;
                break;

            case 'Feet':
                $this->result = $this->meterValue / 0.3048;
                break;

            case 'Yard':
                $this->result = $this->meterValue / 0.9144;
                break;

            case 'Mile':
                $this->result = $this->meterValue / 1609.344;
                break;

            case 'Millimeter':
                $this->result = $this->meterValue / 0.001;
                break;

            case 'Centimeter':
                $this->result = $this->meterValue / 0.01;
                break;

            case 'Meter':
                $this->result = $this->meterValue;
                break;

            case 'Kilometer':
                $this->result = $this->meterValue / 1000;
                break;

        }

        return $this->result;

    }

    public function XConvert(): float
    {
        round($this->toMeter(), 3);

        return round($this->fromMeter(), 3);

    }
}
