<?php
use Simba\Statistiques\Functions\Median;

test('test classe Median', function () {

    $list = [10, 15, 14, 16, 20];

    expect(Median::calculate($list))->toBe(14.0);
});