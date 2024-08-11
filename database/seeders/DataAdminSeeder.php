<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('data_admin')->insert([
            [
                'nama' => 'Ali Khatami',
                'jabatan' => 'Web Developer',
                'gender' => 'Laki-laki',
                'username' => 'admin',
                'password' => '12345678',
            ],
        ]);
    }
}
