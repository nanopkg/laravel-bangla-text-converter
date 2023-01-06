<?php

namespace Nanopkg\LaravelBanglaTextConverter;

use Nanopkg\LaravelBanglaTextConverter\BijoyToUnicode\BijoyToUnicodeConverter;
use Nanopkg\LaravelBanglaTextConverter\UnicodeToBijoy\UnicodeToBijoyConverter;

class LaravelBanglaTextConverter
{
    /**
     * Translate the loaded string to Bijoy ANSI
     *
     * @return string
     */
    public function toBijoy($string)
    {
        if (!is_string($string)) {
            throw new \InvalidArgumentException('UnicodeToBijoyConverter::convert() expects parameter $string to be string, ' . gettype($string) . ' given!');
        }

        return (new UnicodeToBijoyConverter())->convert($string);
    }

    /**
     * Translate the loaded string to Avro Unicode
     *
     * @return string
     */
    public function toUnicode($string)
    {
        if (!is_string($string)) {
            throw new \InvalidArgumentException('BijoyToUnicodeConverter::convert() expects parameter $string to be string, ' . gettype($string) . ' given!');
        }

        return (new BijoyToUnicodeConverter())->convert($string);
    }
}
