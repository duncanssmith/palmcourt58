<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;


class PublicPagesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $response = $this->get('/menus');
        $response->assertStatus(200);

        $response = $this->get('/views');
        $response->assertStatus(200);

        $response = $this->get('/functions');
        $response->assertStatus(200);

        $response = $this->get('/about');
        $response->assertStatus(200);

        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function testSessionTest()
    {
        $response = $this->withSession(['foo' => 'bar'])
                         ->get('/');
        $response->assertStatus(200);
    }

    public function testUserTest()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
                         ->withSession(['foo' => 'bar'])
                         ->get('/');
        $response->assertStatus(200);
    }
}
