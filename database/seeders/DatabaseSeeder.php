<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kelas;
use App\Models\Student;
use Illuminate\Database\Seeder;

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

        Kelas::create([
            "nama" => "11 Berak-1"
        ]);
        Kelas::create([
            "nama" => "11 Joget-2"
        ]);
        Kelas::create([
            "nama" => "11 Ngudud-3"
        ]);
        Kelas::create([
            "nama" => "11 Jawir-4"
        ]);

        Student::factory(100)->create();
    }
}
