<?php

use gecleanme\Xkunverio\Enums\XAreaUnit;
use gecleanme\Xkunverio\Enums\XLengthUnit;
use gecleanme\Xkunverio\Enums\XMassUnit;
use gecleanme\Xkunverio\Enums\XSpeedUnit;
use gecleanme\Xkunverio\Enums\XTemperatureUnit;
use gecleanme\Xkunverio\Enums\XVolumeUnit;
use gecleanme\Xkunverio\XArea;
use gecleanme\Xkunverio\XLength;
use gecleanme\Xkunverio\XMass;
use gecleanme\Xkunverio\XSpeed;
use gecleanme\Xkunverio\XTemperature;
use gecleanme\Xkunverio\XVolume;

it('returns correct converted length values', function () {
    $conversion = XLength::convert(XLengthUnit::Mile, XLengthUnit::Kilometer, 8)->getResult();
    expect(round($conversion, 3))->toBe(12.875);
});

it('returns correct converted temperature values', function () {
    $conversion = XTemperature::convert(XTemperatureUnit::Fahrenheit, XTemperatureUnit::Celsius, 100)->getResult();
    expect(round($conversion, 1))->toBe(37.8);
});

it('returns correct converted mass values', function () {
    $conversion = XMass::convert(XMassUnit::Pounds, XMassUnit::Kilograms, 50)->getResult();
    expect(round($conversion, 1))->toBe(22.7);
});

it('returns correct converted volume values', function () {
    $conversion = XVolume::convert(XVolumeUnit::Liters, XVolumeUnit::Imperial_Pints, 50)->getResult();
    expect(round($conversion, 1))->toBe(88.0);
});

it('returns correct converted area values', function () {
    $conversion = XArea::convert(XAreaUnit::Square_Meters, XAreaUnit::Square_Feet, 50)->getResult();
    expect(round($conversion, 1))->toBe(538.2);
});

it('returns correct converted speed values', function () {
    $conversion = XSpeed::convert(XSpeedUnit::Kilometers_Per_Hour, XSpeedUnit::Miles_Per_Hour, 500)->getResult();
    expect(round($conversion, 1))->toBe(310.7);
});
