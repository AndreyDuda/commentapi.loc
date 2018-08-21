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
        $headers = [
            'Accept'       => 'application/json',
            'Content-Type' => 'application/json'
        ];
        $comment = [
            Comment::TEXT           => 'Lorem',
            Comment::PROP_PARENT_ID => '0'
        ];

        $this->json('POST', '/api/comment', $comment, $headers)
            ->assertStatus(200)
            ->assertJson($comment);
    }

    public function testShow()
    {
        $headers = [
            'Accept' => 'application/json'
        ];
        $comment = [
            Comment::PROP_ID => '1',
        ];

        $this->json('GET', '/api/comment/' . $comment[Comment::PROP_ID], [], $headers)
            ->assertStatus(200)
            ->assertJson([Comment::PROP_ID => '1']);
    }

    public function testUpdate()
    {
        $headers = [
            'Accept'       => 'application/json',
            'Content-Type' => 'application/json'
        ];
        $comment = [
            Comment::PROP_ID        => '1',
            Comment::TEXT           => 'Lorem update',
            Comment::PROP_PARENT_ID => '0'
        ];

        $this->json('PUT', '/api/comment/' . $comment[Comment::PROP_ID], $comment, $headers)
            ->assertStatus(200)
            ->assertJson($comment);
    }

    public function destroy()
    {
        $headers = [
            'Accept' => 'application/json'
        ];
        $comment = [
            Comment::PROP_ID => '1',
        ];

        $this->json('GET', '/api/comment/' . $comment[Comment::PROP_ID], [], $headers)
            ->assertStatus(200)
            ->assertJson(['Success' => 'ок']);
    }
}
