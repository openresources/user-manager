<?php

namespace Openresources\UserManager\Tests;

use Orchestra\Testbench\TestCase;
use Openresources\UserManager\UserManagerServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [UserManagerServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(false);
    }
}
