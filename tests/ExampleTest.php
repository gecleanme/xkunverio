<?php

use gecleanme\Xkunverio\XLength;

//
//it('can test', function () {
//    expect(true)->toBeTrue();
//});

it('returns converted values', function () {
    $conversion = XLength::convert('Kilometer', 'Meter', 1000)->getResult();
    expect($conversion)->toBe(1000000.0);
});
