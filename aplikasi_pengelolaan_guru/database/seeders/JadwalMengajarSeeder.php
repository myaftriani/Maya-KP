<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalMengajarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jadwal_mengajar')->insert(
            [
                [
                    'guru' => 'Maya Fitriani',
                    'mata_pelajaran' => 'Bahasa Indonesia',
                    'kelas' => '5',
                    'hari' => 'Senin',
                    'waktu' => '08.00-09.00',
                ],
            ]
        );

    }
}