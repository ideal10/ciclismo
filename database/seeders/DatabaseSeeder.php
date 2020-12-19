<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create a root user for dev login.
        
        \App\Models\User::create([
            'name' => 'root',
            'email' => 'root@ciclismo.test',
            'password' => bcrypt('password'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // \App\Models\Tercero::factory()->times(10)->create();
    }
}
