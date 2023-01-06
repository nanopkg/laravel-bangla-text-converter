<?php

namespace Nanopkg\LaravelBanglaTextConverter;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Nanopkg\LaravelBanglaTextConverter\Facades\LaravelBanglaTextConverter;

class LaravelBanglaTextConverterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-bangla-text-converter');
    }

    public function registeringPackage()
    {
        $this->app->scoped(LaravelBanglaTextConverter::class);
    }
}
