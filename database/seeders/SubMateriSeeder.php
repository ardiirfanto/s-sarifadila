<?php

namespace Database\Seeders;

use App\Models\SubMateri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubMateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubMateri::create([
            "materi_id" => 1,
            "judul" => 'Permainan Invasi',
            "gambar" => 'materi1.jpg'
        ]);
    }
}
