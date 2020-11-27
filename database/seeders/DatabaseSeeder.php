<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $rootUser = new \App\Models\User;
        $rootUser->name = 'root';
        $rootUser->email = 'root@ciclismo.test';
        $rootUser->email_verified_at = now();
        $rootUser->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
        $rootUser->remember_token = Str::random(10);
        $rootUser->save();

        \App\Models\User::factory(10)->create();
    }
}
