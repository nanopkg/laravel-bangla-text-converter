<?php

namespace Nanopkg\LaravelBanglaTextConverter\Contracts;

/**
 * Converter
 *
 * @author IQBAL HASAN <iqbalhasan.dev@gmail.com>
 * @link https://iqbalhasan.dev Author Homepage
 * @version 1.0.0
 * @license LICENSE The MIT License
 * @package nanopkg\laravel-bangla-text-converter
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
