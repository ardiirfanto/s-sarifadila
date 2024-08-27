<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Bpk/Ibu Guru',
            'username' => 'guru123',
            'email' => 'guru@email.com',
            'role' => 'guru',
            'password' => Hash::make('guru123')
        ]);

        User::create([
            'name' => 'Siswa',
            'username' => 'siswa123',
            'nisn' => '123456',
            'email' => 'siswa@email.com',
            'role' => 'siswa',
            'password' => Hash::make('siswa123')
        ]);
        $this->call([
            MateriSeeder::class,
            SubMateriSeeder::class
        ]);
    }
}
