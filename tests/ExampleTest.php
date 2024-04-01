<?php

use gecleanme\Xkunverio\Enums\xUnit;
use gecleanme\Xkunverio\XLength;

//
//it('can test', function () {
//    expect(true)->toBeTrue();
//});

it('returns converted values', function () {
    $conversion = XLength::convert(xUnit::Kilometer, xUnit::Meter, 1)->getResult();
    expect($conversion)->toBe(1000.0);
});
