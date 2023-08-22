<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

         \App\Models\User::create([
             'login' => 'admin',
             'password' => 'admin224',
             'role' => 'Administrator'
         ]);

        \App\Models\User::create([
            'login' => 'manager',
            'password' => 'manager223',
            'role' => 'Manager'
        ]);
        \App\Models\Url::create([
            'url' => 'https://www.speedrun.com/',
        ]);
        \App\Models\Url::create([
            'url' => 'https://www.google.com/',
        ]);
        \App\Models\Url::create([
            'url' => 'https://www.youtube.com/',
        ]);
        \App\Models\Url::create([
            'url' => 'https://laravel.com/docs/10.x/authentication#introduction',
        ]);
        \App\Models\Url::create([
            'url' => 'https://laravel.com/',
        ]);
        \App\Models\Url::create([
            'url' => 'http://127.0.0.1:8500/',
        ]);
    }
}
