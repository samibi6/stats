<?php
use Simba\Statistiques\Functions\StandardDeviation;

test('test classe Standard Deviation', function () {

    $list = [4, 6, 7, 3, 8, 9, 5];

    expect(StandardDeviation::calculate($list))->toBe(2.16);
});