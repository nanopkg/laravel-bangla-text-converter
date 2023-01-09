<?php

namespace Nanopkg\BanglaTextConverter;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

/**
 * BanglaTextConverterServiceProvider
 *
 * @author IQBAL HASAN <iqbalhasan.dev@gmail.com>
 *
 * @link https://iqbalhasan.dev Author Homepage
 *
 * @license LICENSE The MIT License
 */
class BanglaTextConverterServiceProvider extends PackageServiceProvider
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
}
