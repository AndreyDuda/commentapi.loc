<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testIndex()
    {
        $headers = 'Accept: application/json';
        $this->json('GET', '/api/comment')
            ->assertStatus(200)
            ->assertJsonStructure(['*' => [ 'text']]);

    }
}
