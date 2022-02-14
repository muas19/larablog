<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/api/users');

        $response->assertStatus(200);
    }
    public function test_user_count()
    {
        $response = $this->get('/api/users');

        $count = 10;
        $this->assertSame($response->toArray()->count(), $count);

    }
}
