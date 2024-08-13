<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DataAdminSeeder extends Seeder
{
    public function run()
    {
        DB::table('data_admin')->insert([
            'nama' => 'Ali Khatami',
            'jabatan' => 'Web Developer',
            'gender' => 'Laki-laki',
            'email' => 'alirpl2643@gmail.com',
            'password' => Hash::make('12345678'),
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
