<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test the welcome message of the dashboard as a random user.
     *
     * @return void
     */
    public function testHeaderAsRandomUser()
    {
        $user = \App\Models\User::factory()->create();

        // Will assert if db connection is working correctly and the user factory is working correctly.
        $this->assertInstanceOf(\App\Models\User::class, $user);

        $response = $this->actingAs($user)
                         ->get('/dashboard');

        // Will assert if the '/dashboard' route is found.
        $response->assertStatus(200);

        $expectedWelcomeMessage = 'Bienvenido, '.$user->name;

        // Will assert if the '/dashboard' route contains the welcome message for the random user.
        $response->assertSee($expectedWelcomeMessage);
    }

    /**
     * Test the welcome message of the dashboard as the root user.
     *
     * @return void
     */
    public function testHeaderAsRoot()
    {
        $root = \App\Models\User::where('name', 'root')->first();

        // Will assert if db connection is working correctly and the root user is found.
        $this->assertInstanceOf(\App\Models\User::class, $root);

        $response = $this->actingAs($root)
                         ->get('/dashboard');

        // Will assert if the '/dashboard' route is found.
        $response->assertStatus(200);

        $expectedWelcomeMessage = 'Bienvenido, root';

        // Will assert if the '/dashboard' route contains the welcome message for the root user.
        $response->assertSee($expectedWelcomeMessage);
    }
}
