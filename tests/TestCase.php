<?php

namespace PierreBarbin\Uuid\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use PierreBarbin\Uuid\UuidServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            UuidServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}
