<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Perusahaan;

class PerusahaanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama_perusahaan' => 'PT Cerebrum',
                'bidang_usaha' => 'Software House',
                'alamat' => 'Jl. Bunut, Margahurip',
                'nama_pembimbing_industri' => 'Andi Saputra',
            ],
            [
                'nama_perusahaan' => 'CV Karya Teknologi',
                'bidang_usaha' => 'Jaringan & Infrastruktur IT',
                'alamat' => 'Jl. Soreang-Banjaran No. 25, Kab. Bandung',
                'nama_pembimbing_industri' => 'Siti Amelia',
            ],
        ];

        foreach ($data as $item) {
            Perusahaan::create($item);
        }
    }
}