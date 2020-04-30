<?php

namespace Aiqfome\TotalVoiceLaravel\Tests;

use Aiqfome\TotalVoiceLaravel\TotalVoiceLaravelServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('totalvoice.token', 'token');
        $app['config']->set('totalvoice.base_uri', 'https://api2.totalvoice.com.br');
    }

    protected function getPackageProviders($app)
    {
        return [
            TotalVoiceLaravelServiceProvider::class,
        ];
    }
}
