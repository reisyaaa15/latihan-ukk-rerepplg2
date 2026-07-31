<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Siswa::factory()->count(30)->create();
    }
}