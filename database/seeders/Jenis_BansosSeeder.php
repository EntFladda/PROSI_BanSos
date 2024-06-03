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
                'user_id' => 1,
                'jumlah_jb' => 20,
                'deskripsi' => 'Bantuan sosial untuk warga yang kurang mampu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ];
            DB::table('jenis_bansos')->insert($data);
    }
}
