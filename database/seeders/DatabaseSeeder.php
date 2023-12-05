<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\KatalogMakeupSeeder;
use Database\Seeders\TypeMakeupSeeder;
use Database\Seeders\ContentSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(KatalogMakeupSeeder::class);
        $this->call(TypeMakeupSeeder::class);
        $this->call(ContentSeeder::class);
    }
}
