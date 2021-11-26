<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\userTableSeeder;
use Database\Seeders\TableTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            userTableSeeder::class,
            TableTableSeeder::class,
        ]);
    }
}
