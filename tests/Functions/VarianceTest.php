<?php
use Simba\Statistiques\Functions\Variance;

test('test classe Standard Deviation', function () {

    $list = [4, 6, 7, 3, 8, 9, 5];

    expect(Variance::calculate($list))->toBe(4.67);
});