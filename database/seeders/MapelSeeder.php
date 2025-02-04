<?php

namespace Database\Seeders;

use App\Models\Mapel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mapel::create([
            "id" => '1',
            "user_id" => 1,
            "mapel" => 'Olahraga',
            "icon" => 'icon1.png',
            "video" => 'jKtbnLoYJe8'
        ]);
    }
}
