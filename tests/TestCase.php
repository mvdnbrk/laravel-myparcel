<?php

namespace Mvdnbrk\Laravel\Tests;

use Mvdnbrk\Laravel\MyParcelServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('myparcel.secret', 'MYPARCEL_SECRET_TOKEN');
    }

    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            MyParcelServiceProvider::class,
        ];
    }
}
