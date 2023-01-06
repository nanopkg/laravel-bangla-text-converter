<?php

namespace Nanopkg\LaravelBanglaTextConverter\Contracts;

interface Converter
{
    /**
     * Convert a given string
     *
     * @param  string  $string The string to convert
     * @return string
     */
    public function convert($string);
}
