<?php

namespace Nanopkg\LaravelBanglaTextConverter\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * LaravelBanglaTextConverter
 *
 * @method static string toBijoy(string $string)
 *
 * @method static string toUnicode(string $string)
 *
 * @author IQBAL HASAN <iqbalhasan.dev@gmail.com>
 * @link https://iqbalhasan.dev Author Homepage
 * @version 1.0.0
 * @license LICENSE The MIT License
 * @package nanopkg\laravel-bangla-text-converter
 */
class LaravelBanglaTextConverter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Nanopkg\LaravelBanglaTextConverter\LaravelBanglaTextConverter::class;
    }
}
