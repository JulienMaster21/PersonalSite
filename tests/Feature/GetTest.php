<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GetTest extends TestCase
{
    /**
     * Test whether a get request to home returns a 200.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Test whether a get request to over mij returns a 200.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/over-mij');

        $response->assertStatus(200);
    }

    /**
     * Test whether a get request to beroepsbeeld returns a 200.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/beroepsbeeld');

        $response->assertStatus(200);
    }

    /**
     * Test whether a get request to motivatie returns a 200.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/motivatie');

        $response->assertStatus(200);
    }


    /**
     * Test whether a get request to emperor returns a 200.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/emperor');

        $response->assertStatus(200);
    }
}
