<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ConvMessageTest extends TestCase
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
    public function testStoreMessage(){
        $response = $this->json('POST', 'http://localhost:8000/api/message',[
            'conversation_id' => 100,
            'content' => 'salut, comment tu vas ?',
            'user_name' => 'John',
        ]);
        $response
            ->assertStatus(200);

        $response = $this->json('POST', 'http://localhost:8000/api/message',[
            'conversation_id' => 100,
            'content' => 'salut, comment tu vas ?',
        ]);
        $response
            ->assertStatus(200);
    }
}
