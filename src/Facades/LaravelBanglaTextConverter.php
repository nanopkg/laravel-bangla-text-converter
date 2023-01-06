<?php

namespace Nanopkg\LaravelBanglaTextConverter\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nanopkg\LaravelBanglaTextConverter\LaravelBanglaTextConverter
 */
class LaravelBanglaTextConverter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Nanopkg\LaravelBanglaTextConverter\LaravelBanglaTextConverter::class;
    }
}
