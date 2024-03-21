<?php

use Fridzema\DateFormatConverter\DateFormatConverter;

it('converts JavaScript date formats to PHP date formats', function () {
    expect(DateFormatConverter::convertJsFormatToPhp('YYYY-MM-DD'))->toEqual('Y-m-d');
});

it('converts PHP date formats to JavaScript date formats', function () {
    expect(DateFormatConverter::convertPhpFormatToJs('Y-m-d'))->toEqual('YYYY-MM-DD');
});
