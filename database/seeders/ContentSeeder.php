<?php

namespace Database\Seeders;

use App\Models\Admin\Content;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Content::create([
            'id_makeup' => '1',
            'active' => 1,
        ]);
        Content::create([
            'id_makeup' => '2',
            'active' => 1,
        ]);
        Content::create([
            'id_makeup' => '3',
            'active' => 1,
        ]);
        Content::create([
            'id_makeup' => '4',
            'active' => 1,
        ]);
    }
}
