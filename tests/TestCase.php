<?php

namespace Fridzema\DateFormatConverter\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Fridzema\DateFormatConverter\DateFormatConverterServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Fridzema\\DateFormatConverter\\Database\\Factories\\' . class_basename($modelName) . 'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            DateFormatConverterServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-date-format-converter_table.php.stub';
        $migration->up();
        */
    }
}
