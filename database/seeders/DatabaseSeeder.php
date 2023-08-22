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
    }
}