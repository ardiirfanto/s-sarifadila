<?php

namespace Database\Seeders;

use App\Models\Materi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Materi::create([
            "id" => '1',
            "bab" => 'I',
            "judul" => 'Permainan Invasi',
            "gambar" => 'materi1.jpg'
        ]);
        Materi::create([
            "id" => '2',
            "bab" => 'II',
            "judul" => 'Permainan Net',
            "gambar" => 'materi2.jpg'
        ]);
        Materi::create([
            "id" => '3',
            "bab" => 'III',
            "judul" => 'Atletik',
            "gambar" => 'materi3.jpg'
        ]);
        Materi::create([
            "id" => '4',
            "bab" => 'IV',
            "judul" => 'Pencak Silat',
            "gambar" => 'materi4.jpg'
        ]);
        Materi::create([
            "id" => '5',
            "bab" => 'V',
            "judul" => 'Kebugaran Jasmani',
            "gambar" => 'materi5.jpg'
        ]);
    }
}
