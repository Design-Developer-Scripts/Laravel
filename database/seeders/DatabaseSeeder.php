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
        \App\Models\User::factory(25)->create();
        \App\Models\Blog::factory(20)->create();
        \App\Models\Distributor::factory(5)->create();
        \App\Models\DistributorError::factory(25)->create();
        \App\Models\DistributorHistory::factory(50)->create();
    }
}
