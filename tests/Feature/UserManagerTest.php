<?php

namespace Openresources\UserManager\Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Orchestra\Testbench\TestCase;

class UserManagerTest extends TestCase
{
    
    public function getEnvironmentSetup($app)
    {
        $app['router']->get('admin/users', ['uses' => function () {
            return 'hello world';
        }]);
    }
    
    /** @test */
    public function can_see_users_index()
    {
        $this->withoutExceptionHandling();

        // $crawler = $this->call('GET', '/admin/users');
        // $this->assertEquals('hello world', $crawler->getContent());

        $response = $this->get('/');
        $response->assertOk();
    }
    
}
