<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
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
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicLoginTest()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicMenuTest()
    {
        $response = $this->get('/menu');

        $response->assertStatus(200);
    }

}
