<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class PenggunaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            [
                'id_pengguna' => 1,
                'name' => 'Rose',
                'email' => 'roseeenn@gmail.com',
                'username' => 'Rose123',
                'role' => '1',
                'password' => Hash::make('12345'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            ];
            DB::table('pengguna')->insert($data);
    }
}
