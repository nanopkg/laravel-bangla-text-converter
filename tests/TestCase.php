<?php

namespace Nanopkg\BanglaTextConverter\Tests;

use Nanopkg\BanglaTextConverter\BanglaTextConverterServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            BanglaTextConverterServiceProvider::class,
        ];
    }
}
