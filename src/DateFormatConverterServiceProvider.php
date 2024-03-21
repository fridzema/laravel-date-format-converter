<?php

namespace Fridzema\DateFormatConverter;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DateFormatConverterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-date-format-converter')
            ->hasConfigFile();
    }
}
