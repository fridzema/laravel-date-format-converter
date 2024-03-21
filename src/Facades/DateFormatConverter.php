<?php

namespace Fridzema\DateFormatConverter\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Fridzema\DateFormatConverter\DateFormatConverter
 */
class DateFormatConverter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Fridzema\DateFormatConverter\DateFormatConverter::class;
    }
}
