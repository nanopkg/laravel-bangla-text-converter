<?php

namespace Nanopkg\BanglaTextConverter\Contracts;

/**
 * Converter
 *
 * @author IQBAL HASAN <iqbalhasan.dev@gmail.com>
 *
 * @link https://iqbalhasan.dev Author Homepage
 *
 * @license LICENSE The MIT License
 */
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
