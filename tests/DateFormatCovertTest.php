<?php


use Fridzema\DateFormatConvert\DateFormatConvert;

it('converts JavaScript date formats to PHP date formats', function () {
    expect(DateFormatConvert::convertJsFormatToPhp('YYYY-MM-DD'))->toEqual('Y-m-d');
});

it('converts PHP date formats to JavaScript date formats', function () {
    expect(DateFormatConvert::convertPhpFormatToJs('Y-m-d'))->toEqual('YYYY-MM-DD');
});
