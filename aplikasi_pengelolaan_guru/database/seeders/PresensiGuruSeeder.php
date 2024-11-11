<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PresensiGuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('presensis')->insert(
            [
                [
                    
                    'guru' => 'Maya Fitriani',
                    'tanggal' => '02-10-2024',
                    'status' => 'Sakit',
                    'keterangan' => '',
                ],
            ]
        );

    }
}