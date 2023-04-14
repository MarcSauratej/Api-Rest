<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void//creado para decir cuantas veces tiene que hacer los factories de Book y User
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Book::factory(50)->create();

    }
}
