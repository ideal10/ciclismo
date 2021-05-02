<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

use App\Models\Tercero;

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

        if(User::where('name', 'root')->first() == null)
        {
            User::create([
                'name' => 'root',
                'email' => 'root@ciclismo.test',
                'password' => bcrypt('password'),
                'darktheme' => true,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        Tercero::factory()->times(10)->create();
    }
}
