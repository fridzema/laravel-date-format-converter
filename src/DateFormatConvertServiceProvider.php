<?php

namespace Fridzema\DateFormatConvert;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Fridzema\DateFormatConvert\Commands\DateFormatConvertCommand;

class DateFormatConvertServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-date-format-converter')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-date-format-converter_table')
            ->hasCommand(DateFormatConvertCommand::class);
    }
}
