<?php

namespace Tests\Unit;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;

class TerceroTest extends TestCase
{

    use RefreshDatabase;

    /**
     * Creates a random user for authenticating
     * 
     * @return \App\Models\User
     */
    private function CreateRandomUser()
    {
        $user = \App\Models\User::factory()->create();
        return $user;
    }

    /**
     * Tests if an unauthenticated user is able to store a 'Tercero'.
     *
     * @return void
     */
    public function testCreateTerceroWithMiddleware()
    {
        $tercero = \App\Models\Tercero::factory()->make()->jsonSerialize();
        
        $response = $this->json('POST', '/db/tercero/', $tercero);

        $response->assertStatus(401);
    }

    /**
     * Tests the storing of a 'Tercero'.
     * 
     * @return void
     */
    public function testCreateTercero()
    {
        $tercero = \App\Models\Tercero::factory()->make()->jsonSerialize();
        

        $response = $this->actingAs($this->CreateRandomUser())->json('POST', '/db/tercero/'. $tercero);

        $response->assertStatus(200);
        $response->assertJson([
            'success' => 'Tercero creado satisfactoriamente.'
        ]);
    }

    /**
     * Tests the deleting of a 'Tercero'
     * 
     */
    public function testDeleteTercero()
    {
        $tercero = \App\Models\Tercero::factory()->create();

        $response = $this->actingAs($this->CreateRandomUser())->json('DELETE', '/db/tercero/'.$tercero->id);
    
        $response->assertStatus(200);
        $response->assertJson(['success' => 'Tercero "'.$tercero->primer_nombre.' '.$tercero->primer_apellido.'" desactivado satisfactoriamente.']);
    }
}
