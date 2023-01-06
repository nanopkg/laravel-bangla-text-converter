<?php

namespace Nanopkg\LaravelBanglaTextConverter\UnicodeToBijoy;

use Nanopkg\LaravelBanglaTextConverter\Contracts\Converter;
use Nanopkg\LaravelBanglaTextConverter\UnicodeToBijoy\KeyMapping;

class UnicodeToBijoyConverter implements Converter
{
    /**
     * convert Avro Unicode string to Bijoy Classic ANSI
     *
     * @param  string  $string Text written via avro
     * @return string
     */
    public function convert($string)
    {
        $string = $this->fixOddChars($string);

        $string = $this->fixUnicode($string);

        $string = $this->replaceConjunctions($string);

        $string = $this->swapKarsLocation($string);

        $string = $this->handleSurroundingKars($string);

        $ruleSet = KeyMapping::getRules();

        $string = str_replace(
            array_keys($ruleSet),
            array_values($ruleSet),
            $string
        );

        return $string;
    }

    /**
     * Handles kars that surrounds a character
     *
     * @param  string  $string  The string
     * @return string
     */
    protected function handleSurroundingKars($string)
    {
        // We are accounting for characters that has space before
        // but for the regex we only need the kars
        // so trim the spaces, and use only unique keys
        $rules = array_keys(KeyMapping::KAR_AROUND_CHAR_RULES);
        $rules = array_map('trim', $rules);
        $rules = array_unique($rules);

        $kars = implode('', $rules);
        $prepends = implode('', KeyMapping::KAR_AROUND_CHAR_RULES_PREPENDS);

        $regEx = "/(\s)?(?P<char>[^{$kars}])(?P<b>[{$prepends}])?(?P<kar>[{$kars}])/um";

        return preg_replace_callback(
            $regEx,
            function ($match) {
                $space = '';
                $key = $match['kar'];

                if ($count = mb_strlen($match[1])) {
                    $space = ' ';
                    $key = $space . $key;
                }

                $rule = KeyMapping::KAR_AROUND_CHAR_RULES[$key];
                $char = $match['char'];
                if (isset($match['b'])) {
                    $char .= $match['b'];
                }
                $rule = str_replace('<char>', $char, $rule);

                return $space . $rule;
            },
            $string
        );
    }

    /**
     * Swaps the kars location
     *
     * @param  string  $string  The string
     * @return string
     */
    protected function swapKarsLocation($string)
    {
        $kars = implode('', KeyMapping::KARS_BEFORE_CHAR);
        $prepends = implode('', KeyMapping::KARS_BEFORE_PREPEND_CHAR);
        $edge = implode('', KeyMapping::KARS_BEFORE_EDGE_CASE);
        $regEx = "/(?<b>{$prepends})?(?P<char>[^{$kars}])(?<z>{$edge})?(?P<kar>[{$kars}])/um";

        return preg_replace_callback(
            $regEx,
            function ($match) {
                // r($match);
                $return = $match['kar'];
                if (!empty($match['b'])) {
                    $return .= $match['b'];
                }
                $return .= $match['char'];

                if (!empty($match['z'])) {
                    $return .= $match['z'];
                }

                return $return;
            },
            $string
        );
    }

    /**
     * Replaces conjunctions using KeyMapping::SORTED_CONJ_RULES
     *
     * @param  string  $string  The string
     * @return string
     */
    protected function replaceConjunctions($string)
    {
        return str_replace(
            array_keys(KeyMapping::SORTED_CONJ_RULES),
            array_values(KeyMapping::SORTED_CONJ_RULES),
            $string
        );
    }

    /**
     * Normalizes some odd chars by replacing them using KeyMapping::FIX_ODD_CHARS
     *
     * @param  string  $string  The string
     * @return string
     */
    protected function fixOddChars($string)
    {
        return str_replace(
            array_keys(KeyMapping::FIX_ODD_CHARS),
            array_values(KeyMapping::FIX_ODD_CHARS),
            $string
        );
    }

    /**
     * Normalizes some unicode chars by replacing them using KeyMapping::FIX_UNICODE
     *
     * @param  string  $string  The string
     * @return string
     */
    protected function fixUnicode($string)
    {
        return str_replace(
            array_keys(KeyMapping::FIX_UNICODE),
            array_values(KeyMapping::FIX_UNICODE),
            $string
        );
    }
}
