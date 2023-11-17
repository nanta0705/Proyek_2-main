<?php

namespace Database\Seeders;

use App\Models\Owner\KatalogMakeup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KatalogMakeupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KatalogMakeup::create([
            'name' => 'Makeup Ngunduh Mantu',
            'description' => 'Untuk hari akad dan resepsi',
            'price' => '8000000',
            'image' => ('katalog_makeup_image/ngunduh mantu.jpg'),
            'user_id' => 2,
        ]);

        KatalogMakeup::create([
            'name' => 'Makeup Graduation',
            'description' => 'Untuk hari wisuda',
            'price' => '350000',
            'image' => ('katalog_makeup_image/graduation.jpg'),
            'user_id' => 2,
        ]);

        KatalogMakeup::create([
            'name' => 'Makeup Prewedding',
            'description' => 'Untuk hari sakral pertunanganmu',
            'price' => '500000',
            'image' => ('katalog_makeup_image/prewedding.jpg'),
            'user_id' => 2,
        ]);

        KatalogMakeup::create([
            'name' => 'Makeup Wedding',
            'description' => 'Untuk hari pernihan impian',
            'price' => '2000000',
            'image' => ('katalog_makeup_image/wedding.jpg'),
            'user_id' => 2,
        ]);
    }
}
