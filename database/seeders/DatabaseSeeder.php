<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{User,Files, Config};

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
        User::create([
            'name' => 'Diego',
            'email' => 'dgpgean@gmail.com',
            'password' => bcrypt('451655'),
        ]);

        Files::create([
            'name' => 'logo',
            'path' => 'logo/logo.png',
        ]);

        Config::create([
            'title' => 'Lorem Opus',
            'logo_id' => 1

        ]);

    }
}
