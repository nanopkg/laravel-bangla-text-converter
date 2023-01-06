<?php

namespace Nanopkg\LaravelBanglaTextConverter\BijoyToUnicode;

use Nanopkg\LaravelBanglaTextConverter\Contracts\Converter;

/**
 * BijoyToUnicodeConverter
 *
 * @author IQBAL HASAN <iqbalhasan.dev@gmail.com>
 * @link https://iqbalhasan.dev Author Homepage
 * @version 1.0.0
 * @license LICENSE The MIT License
 * @package nanopkg\laravel-bangla-text-converter
 *
 */
class BijoyToUnicodeConverter implements Converter
{
    /**
     * Convert Bijoy ANSI text to Avro
     *
     * @param  string  $string The text to convert
     * @return string
     */
    public function convert($string)
    {
        // Import character maps
        $char_map = CharacterMap::getLetterCharMap();
        $kars = CharacterMap::getAvroKars();
        $def = $string;
        // Pre-replacement - All the letters, numbers and juktabornas..
        $string = str_replace(array_keys($char_map), array_values($char_map), $string);
        // Build the regex pattern for post replacement
        $regex = "/{$kars}/um";
        // Post-replacement - All kars
        $string = preg_replace_callback($regex, [$this, 'convertKarsCallback'], $string);
        // Finally hand-over the string!
        return $string;
    }

    /**
     * Callback method for self::convert()
     *
     * @param  array  $match The matches
     * @return string
     */
    protected function convertKarsCallback($match = [])
    {
        switch ($match[1]) {
            case 'w':
                return $match[2] . 'ি'; // E~ kar
            case '†':
                return $match[2] . 'ে'; // A~ kar
            case 'ˆ':
                return $match[2] . 'ৈ'; // A~ kar
            case '‡':
                return $match[2] . 'ে'; // A~ Kar ( Bijoy has 2 of 'em )
        }
    }
}
