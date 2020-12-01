<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\News;
use App\Models\UserScope;
use Database\Factories\AddressFactory;
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
        // \App\Models\User::factory(10)->create();

        $this->call([
            UserSeeder::class,
        ]);

        Address::factory(10)->create();

    }
}
