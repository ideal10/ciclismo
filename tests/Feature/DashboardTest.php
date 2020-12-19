<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    /**
     * Test the header of the dashboard.
     *
     * @return void
     */
    public function testHeader()
    {
        $user = \App\Models\User::factory()->create();
        $response = $this->actingAs($user)
                         ->get('/dashboard');

        $response->assertStatus(200);
        $response->assertSee('Bienvenido');
    }
}
