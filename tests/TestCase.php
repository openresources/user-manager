<?php

namespace Openresources\UserManager\Tests;

use Openresources\UserManager\UserManagerServiceProvider;

class TestCase extends Orchestra\Testbench\TestCase
{

    public function setup(): void
    {
        parent::setup();
    }

    public function getPackageProviders($app)
    {
        return [
            UserManagerServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}
