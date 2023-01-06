<?php

namespace Nanopkg\LaravelBanglaTextConverter\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nanopkg\LaravelBanglaTextConverter\LaravelBanglaTextConverterServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Nanopkg\\LaravelBanglaTextConverter\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelBanglaTextConverterServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-bangla-text-converter_table.php.stub';
        $migration->up();
        */
    }
}
