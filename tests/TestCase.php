<?php

namespace RafaelLaurindo\BrasilApi\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use RafaelLaurindo\BrasilApi\BrasilApiServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [BrasilApiServiceProvider::class];
    }
}
