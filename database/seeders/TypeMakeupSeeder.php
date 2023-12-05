<?php

namespace Database\Seeders;

use App\Models\Owner\TypeMakeup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeMakeupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeMakeup::create([
            'name' => 'wedding',
            'user_id' => 2,
        ]);
        TypeMakeup::create([
            'name' => 'party',
            'user_id' => 2,
        ]);
        TypeMakeup::create([
            'name' => 'photoshoot',
            'user_id' => 2,
        ]);
        TypeMakeup::create([
            'name' => 'Graduation',
            'user_id' => 2,
        ]);
        TypeMakeup::create([
            'name' => 'Engagement',
            'user_id' => 2,
        ]);
    }
}
