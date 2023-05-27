<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\userData;
class DatabaseSeeder extends Seeder
{
   
    public function run(): void
    {
        $this->call(usersDataSeeder::class);
    }
}
