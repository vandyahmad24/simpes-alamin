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
        $this->call([
            AngkatanSeeder::class,
            SuperSeeder::class
        ]);
        \App\Models\User::factory(10)->create();
        \App\Models\Santri::factory(10)->create();
        
    }
}
