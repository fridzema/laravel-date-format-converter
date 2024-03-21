<?php

namespace Fridzema\DateFormatConvert\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Fridzema\DateFormatConvert\DateFormatConvert
 */
class DateFormatConvert extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Fridzema\DateFormatConvert\DateFormatConvert::class;
    }
}
