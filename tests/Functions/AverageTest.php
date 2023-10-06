<?php
use Simba\Statistiques\Functions\Average;

test('test classe Average', function () {

    $list = [10, 15, 14, 16, 20];

    expect(Average::calculate($list))->toBe(15.0);
});