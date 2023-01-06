<?php

namespace Nanopkg\LaravelBanglaTextConverter\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * /**
 * @method static string toUnicode(string $string)
 * @method static string toBijoy(string $string)
 */
class LaravelBanglaTextConverter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Nanopkg\LaravelBanglaTextConverter\LaravelBanglaTextConverter::class;
    }
}
