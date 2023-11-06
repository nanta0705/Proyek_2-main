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
            'name' => 'Makeup Wedding',
            'description' => 'Untuk hari akad dan resepsi',
            'price' => '8000000',
            'image' => ('katalog_makeup/image/1.jpg'),
            'user_id' => 2,
        ]);

        KatalogMakeup::create([
            'name' => 'Makeup Graduation',
            'description' => 'Untuk hari wisuda',
            'price' => '350000',
            'image' => ('katalog_makeup/image/2.jpg'),
            'user_id' => 2,
        ]);

        KatalogMakeup::create([
            'name' => 'Makeup Angagement',
            'description' => 'Untuk hari sakral pertunanganmu',
            'price' => '500000',
            'image' => ('katalog_makeup/image/3.jpg'),
            'user_id' => 2,
        ]);
    }
}
