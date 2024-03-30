<?php

it('can test', function () {
    expect(true)->toBeTrue();
});

it('returns converted values', function () {
   $conversion= new \gecleanme\Xkunverio\XConvert('Kilometer','Meter',1000);
  expect($conversion->XConvert())->toBe(1000000.0);
});
