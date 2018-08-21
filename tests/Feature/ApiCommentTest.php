<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Comment;

class ApiCommentTest extends TestCase
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
        $headers = [
            'Accept' => 'application/json'
        ];

        $this->json('GET', '/api/comment', [], $headers)
            ->assertStatus(200)
            ->assertJsonStructure(['*' => [Comment::PROP_ID ,Comment::TEXT, Comment::PROP_PARENT_ID]]);
    }

    public function testStore()
    {
        $headers  = [
            'Accept'       => 'application/json',
            'Content-Type' => 'application/json'
        ];
        $comment  = [
            Comment::TEXT           => 'Lorem',
            Comment::PROP_PARENT_ID => '0'
        ];

        $this->json('POST', '/api/articles', $comment, $headers)
            ->assertStatus(200)
            ->assertJson([Comment::TEXT => 'Lorem', Comment::PROP_PARENT_ID => 0]);

    }
}
