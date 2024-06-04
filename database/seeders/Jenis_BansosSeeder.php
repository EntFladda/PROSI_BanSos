<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class Jenis_BansosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [

            [
                'id_jb' => 1,
                'user_id' => 1,
                'jumlah_jb' => 10,
                'deskripsi' => 'Bantuan Pangan Non Tunai (BPNT)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_jb' => 2,
                'user_id' => 2,
                'jumlah_jb' => 20,
                'deskripsi' => 'Program Keluarga Harapan (PKH)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_jb' => 3,
                'user_id' => 3,
                'jumlah_jb' => 5,
                'deskripsi' => 'Bantuan Langsung Tunai (BLT)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_jb' => 4,
                'user_id' => 3,
                'jumlah_jb' => 10,
                'deskripsi' => 'Bantuan Sosial Beras',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('jenis_bansos')->insert($data);
    }
}
