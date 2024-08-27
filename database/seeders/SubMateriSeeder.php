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
        // BAB 1
        SubMateri::create([
            "materi_id" => 1,
            "judul" => 'SEPAK BOLA (FOOTBALL)',
            "gambar" => 'materi1_1.jpg'
        ]);
        SubMateri::create([
            "materi_id" => 1,
            "judul" => 'BOLA BASKET (BASKET BALL)',
            "gambar" => 'materi1_2.jpg'
        ]);
        SubMateri::create([
            "materi_id" => 1,
            "judul" => 'BOLA TANGAN INDOOR',
            "gambar" => 'materi1_3.jpg'
        ]);
        // BAB 2
        SubMateri::create([
            "materi_id" => 2,
            "judul" => 'BOLA VOLI (VOLLEY BALL)',
            "gambar" => 'materi2_1.jpg'
        ]);
        SubMateri::create([
            "materi_id" => 2,
            "judul" => 'BULU TANGKIS (BADMINTON)',
            "gambar" => 'materi2_2.jpg'
        ]);
        SubMateri::create([
            "materi_id" => 2,
            "judul" => 'TENIS MEJA',
            "gambar" => 'materi2_3.jpg'
        ]);
        // BAB 3
        SubMateri::create([
            "materi_id" => 3,
            "judul" => 'HAKIKAT ATLETIK',
            "gambar" => 'materi3_1.jpg'
        ]);
        SubMateri::create([
            "materi_id" => 3,
            "judul" => 'LARI JARAK PENDEK',
            "gambar" => 'materi3_2.jpg'
        ]);
        SubMateri::create([
            "materi_id" => 3,
            "judul" => 'LARI JARAK MENENGAH',
            "gambar" => 'materi3_3.jpg'
        ]);
        SubMateri::create([
            "materi_id" => 3,
            "judul" => 'LAIR JARAK JAUH',
            "gambar" => 'materi3_4.jpg'
        ]);
        // BAB 4
        SubMateri::create([
            "materi_id" => 4,
            "judul" => 'HAKIKAT PENCAK SILAT',
            "gambar" => 'materi4_1.jpg'
        ]);
        SubMateri::create([
            "materi_id" => 4,
            "judul" => 'KETERAMPILAM GERAK',
            "gambar" => 'materi4_2.jpg'
        ]);
        SubMateri::create([
            "materi_id" => 4,
            "judul" => 'KETERAMPILAN GERAK BELAAN',
            "gambar" => 'materi4_3.jpg'
        ]);
        // BAB 5
        SubMateri::create([
            "materi_id" => 5,
            "judul" => 'MANIPULATIF SENAM LANTAI',
            "gambar" => 'materi5_1.jpg'
        ]);
        SubMateri::create([
            "materi_id" => 5,
            "judul" => 'SENAM LANTAI LOKOMOTOR',
            "gambar" => 'materi5_2.jpg'
        ]);
        SubMateri::create([
            "materi_id" => 5,
            "judul" => 'SENAM LANTAI NON-LOKOMOTOR',
            "gambar" => 'materi5_3.jpg'
        ]);

    }
}
