<?php

use gecleanme\Xkunverio\Enums\XAreaUnit;
use gecleanme\Xkunverio\Enums\XLenUnit;
use gecleanme\Xkunverio\Enums\XMassUnit;
use gecleanme\Xkunverio\Enums\XSpeedUnit;
use gecleanme\Xkunverio\Enums\XTempUnit;
use gecleanme\Xkunverio\Enums\XVolUnit;
use gecleanme\Xkunverio\XArea;
use gecleanme\Xkunverio\XLength;
use gecleanme\Xkunverio\XMass;
use gecleanme\Xkunverio\XSpeed;
use gecleanme\Xkunverio\XTemperature;
use gecleanme\Xkunverio\XVol;

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
    $conversion = XMass::convert(XMassUnit::Pounds, XMassUnit::Kilograms, 50)->getResult();
    expect(round($conversion, 1))->toBe(22.7);
});

it('returns correct converted volume values', function () {
    //dd(XTempUnit::getCases());
    $conversion = XVol::convert(XVolUnit::Liters, XVolUnit::Imperial_Pints, 50)->getResult();
    expect(round($conversion, 1))->toBe(88.0);
});

it('returns correct converted area values', function () {
    //dd(XTempUnit::getCases());
    $conversion = XArea::convert(XAreaUnit::Square_Meters, XAreaUnit::Square_Feet, 50)->getResult();
    expect(round($conversion, 1))->toBe(538.2);
});

it('returns correct converted speed values', function () {
    //dd(XTempUnit::getCases());
    $conversion = XSpeed::convert(XSpeedUnit::Kilometers_Per_Hour, XSpeedUnit::Miles_Per_Hour, 500)->getResult();
    expect(round($conversion, 1))->toBe(310.7);
});
