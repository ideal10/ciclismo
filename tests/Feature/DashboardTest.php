<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    /**
     * Test the header of the dashboard as a random user.
     *
     * @return void
     */
    public function testHeaderAsRandomUser()
    {
        $user = \App\Models\User::factory()->create();
        $response = $this->actingAs($user)
                         ->get('/dashboard');

        $response->assertStatus(200);

        $expectedMessage = 'Bienvenido, '.$user->name;
        $response->assertSee($expectedMessage);
    }

    /**
     * Test the header of the dashboard as the root user.
     *
     * @return void
     */
    public function testHeaderAsRoot()
    {
        $root = \App\Models\User::where('name', 'root')->first();
        $response = $this->actingAs($root)
                         ->get('/dashboard');

        $response->assertStatus(200);

        $expectedMessage = 'Bienvenido, root';
        $response->assertSee($expectedMessage);
    }
}
