<?php

namespace Nanopkg\LaravelBanglaTextConverter;

use App\BanglaTextConverter\Translator\UnicodeToBijoy\UnicodeToBijoyConverter;
use Nanopkg\LaravelBanglaTextConverter\BijoyToUnicode\BijoyToUnicodeConverter;

class LaravelBanglaTextConverter
{
    /**
     * Loaded string
     *
     * @var string
     */
    protected $string;

    /**
     * Translator instances
     *
     * @var array
     */
    protected $translators = [];

    /**
     * Create a new BanglaTextConverter instance
     *
     * @param  string  $string The text to be converted
     *
     * @throws \InvalidArgumentException When passed parameter is not string
     */
    public function __construct($string)
    {
        $this->string = $string;
    }

    /**
     * Translate the loaded string to Bijoy ANSI
     *
     * @return string
     */
    public static function toBijoy($string)
    {
        if (! is_string($string)) {
            throw new \InvalidArgumentException(__CLASS__.'::convert() expects parameter $string to be string, '.gettype($string).' given!');
        }

        return (new BijoyToUnicodeConverter())->convert($string);
    }

    /**
     * Translate the loaded string to Avro Unicode
     *
     * @return string
     */
    public function toUnicode($string)
    {
        if (! is_string($string)) {
            throw new \InvalidArgumentException(__CLASS__.'::convert() expects parameter $string to be string, '.gettype($string).' given!');
        }

        return (new UnicodeToBijoyConverter())->convert($string);
    }
}
