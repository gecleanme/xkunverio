<?php

use gecleanme\Xkunverio\Enums\XLenUnit;
use gecleanme\Xkunverio\Enums\XMassUnit;
use gecleanme\Xkunverio\Enums\XTempUnit;
use gecleanme\Xkunverio\XLength;
use gecleanme\Xkunverio\XMass;
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
    //dd(XTempUnit::getCases());
    $conversion = XTemperature::convert(XTempUnit::Fahrenheit, XTempUnit::Celsius, 100)->getResult();
    expect(round($conversion, 1))->toBe(37.8);
});

it('returns correct converted mass values', function () {
    //dd(XTempUnit::getCases());
    $conversion = XMass::convert(XMassUnit::Kilograms, XMassUnit::Grams, 1)->getResult();
    expect(round($conversion, 1))->toBe(1000.0);
});
