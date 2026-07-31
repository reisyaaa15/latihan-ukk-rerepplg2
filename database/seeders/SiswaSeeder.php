<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nis' => '2026001',
                'nama' => 'Reisya Mutiara',
                'kelas' => 'XI RPL 2',
                'tanggal_mulai_pkl' => '2026-02-11',
                'tanggal_selesai_pkl' => '2027-02-05',
                'perusahaan_id' => 1,
            ],
            [
                'nis' => '2026002',
                'nama' => 'A hakim',
                'kelas' => 'XI RPL 2',
                'tanggal_mulai_pkl' => '2026-02-10',
                'tanggal_selesai_pkl' => '2027-04-04',
                'perusahaan_id' => 2,
            ],
        ];

        foreach ($data as $item) {
            Siswa::create($item);
        }
    }
}