<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate(['email' => 'user_1@mediatriple.com'], [
            'name'              => 'User 1',
            'email'             => 'user_1@mediatriple.com',
            'email_verified_at' => now(),
            'password'          => bcrypt('12345678'), // password
            'remember_token'    => Str::random(10),
        ]);

        User::firstOrCreate(['email' => 'news_editor@farmasi.com.tr'], [
            'name'              => 'User 2',
            'email'             => 'user_2@mediatriple.com',
            'email_verified_at' => now(),
            'password'          => bcrypt('12345678'), // password
            'remember_token'    => Str::random(10)
        ]);
        User::firstOrCreate(['email' => 'news_editor@farmasi.com.tr'], [
            'name'              => 'User 3',
            'email'             => 'user_3@mediatriple.com',
            'email_verified_at' => now(),
            'password'          => bcrypt('12345678'), // password
            'remember_token'    => Str::random(10)
        ]);
    }
}
