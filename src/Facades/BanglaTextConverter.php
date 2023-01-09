<?php

namespace Nanopkg\BanglaTextConverter\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * LaravelBanglaTextConverter
 *
 * @method static string toBijoy(string $string)
 * @method static string toUnicode(string $string)
 *
 * @author IQBAL HASAN <iqbalhasan.dev@gmail.com>
 *
 * @link https://iqbalhasan.dev Author Homepage
 *
 * @license LICENSE The MIT License
 */
class BanglaTextConverter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Nanopkg\LaravelBanglaTextConverter\BanglaTextConverter::class;
    }
}
