# Laravel Bangla Text Converter

This is Laravel's Bengali text converter package. Through this package, you can easily convert text from Unicode to Bijoy in your Laravel application and convert Bijoy to Unicode.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nanopkg/laravel-bangla-text-converter.svg?style=flat-square)](https://packagist.org/packages/nanopkg/laravel-bangla-text-converter)
[![Issues](https://img.shields.io/github/issues/nanopkg/laravel-bangla-text-converter.svg?style=flat-square)](https://github.com/nanopkg/laravel-bangla-text-converter/issues)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/nanopkg/laravel-bangla-text-converter/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/nanopkg/laravel-bangla-text-converter/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/nanopkg/laravel-bangla-text-converter.svg?style=flat-square)](https://packagist.org/packages/nanopkg/laravel-bangla-text-converter)
[![License](https://img.shields.io/github/license/nanopkg/laravel-bangla-text-converter.svg?style=flat-square)](https://github.com/nanopkg/nanopkg/laravel-bangla-text-converter/blob/master/LICENSE.md)

## Installation

You can install the package via composer:

```bash
composer require nanopkg/laravel-bangla-text-converter
```

## Usage

### Convert Your unicode Text to Bijoy

<hr/>

```php
$avro = 'আমার সোনার বাংলা, আমি তোমার ভালোবাসি।';
$converter = Nanopkg\BanglaTextConverter\Facades\BanglaTextConverter::toBijoy($avro);
return $converter;
```

### Convert Your Bijoy Text to unicode

<hr/>

```php
$bijoy = 'Avgvi †mvbvi evsjv, Avwg †Zvgvi fv‡jvevwm|';
$converter = Nanopkg\BanglaTextConverter\Facades\BanglaTextConverter::toUnicode($bijoy);
return $converter;
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [IQBAL HASAN](https://github.com/iqbalhasandev)
-   [RABIUL HASSAN](https://github.com/rabiulhassandev)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
