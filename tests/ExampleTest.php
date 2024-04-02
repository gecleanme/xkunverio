<?php

use gecleanme\Xkunverio\Enums\XLenUnit;
use gecleanme\Xkunverio\Enums\XTempUnit;
use gecleanme\Xkunverio\XLength;
use gecleanme\Xkunverio\XTemperature;

//
//it('can test', function () {
//    expect(true)->toBeTrue();
//});

it('returns correct converted length values', function () {
    $conversion = XLength::convert(XLenUnit::Mile, XLenUnit::Kilometer, 8)->getResult();
    expect(round($conversion, 3))->toBe(12.875);
});

it('returns correct converted temperature values', function () {
    $conversion = XTemperature::convert(XTempUnit::Fahrenheit, XTempUnit::Celsius, 100)->getResult();
    expect(round($conversion, 1))->toBe(37.8);
});
