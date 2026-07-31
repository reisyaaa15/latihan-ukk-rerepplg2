<?php

namespace Database\Factories;
use App\Models\Perusahaan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
 public function definition(): array
 {
 return [
 'nis' => $this->faker->unique()->numerify('#########'),
 'nama' => $this->faker->name(),
 'kelas' => $this->faker->randomElement([
    'XI RPL 1', 
    'XI RPL 2', 
    'XI TKJ 1']),
'tanggal_mulai_pkl' => now()->subMonths(3),
'tanggal_selesai_pkl' => now()->addMonths(3),
 'perusahaan_id' => Perusahaan::inRandomOrder()->first()->id ??
Perusahaan::factory(),
 ];
 }
}

