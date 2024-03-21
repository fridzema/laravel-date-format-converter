<?php

namespace Fridzema\DateFormatConvert;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Fridzema\DateFormatConvert\Commands\DateFormatConvertCommand;

class DateFormatConvertServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-date-format-converter')
            ->hasConfigFile();
    }
}
