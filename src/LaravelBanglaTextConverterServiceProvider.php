<?php

namespace Nanopkg\LaravelBanglaTextConverter;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;


/**
 * LaravelBanglaTextConverterServiceProvider
 *
 * @author IQBAL HASAN <iqbalhasan.dev@gmail.com>
 * @link https://iqbalhasan.dev Author Homepage
 * @version 1.0.0
 * @license LICENSE The MIT License
 * @package nanopkg\laravel-bangla-text-converter
 */
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
}
