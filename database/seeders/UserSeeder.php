<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt("password"),
            'alamat' => 'indramayu',
            'role_id' => '1',
            'no_tlp' => '091225638236',
        ]);
        User::create([
            'name' => 'owner',
            'username' => 'owner',
            'email' => 'owner@example.com',
            'password' => bcrypt("password"),
            'alamat' => 'indramayu',
            'role_id' => '2',
            'no_tlp' => '091225638236',
        ]);
    }
}
