<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Jalankan database seed.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawai')->insert([
            [
                'nama' => 'Jumadi Saputra',
                'jabatan' => 'Kepala Desa',
                'gender' => 'L',
            ],
            [
                'nama' => 'Hamisah',
                'jabatan' => 'Ketua',
                'gender' => 'P',
            ],
            [
                'nama' => 'Eko Winarto',
                'jabatan' => 'Wakil Ketua',
                'gender' => 'L',
            ],
            [
                'nama' => 'Herniwati',
                'jabatan' => 'Sekretaris',
                'gender' => 'P',
            ],
            [
                'nama' => 'Amalia',
                'jabatan' => 'Staff ADM',
                'gender' => 'P',
            ],
            [
                'nama' => 'Wandiro Bayu Broto NS.',
                'jabatan' => 'Ketua Bidang Penyelenggaraan Pemerintahan',
                'gender' => 'L',
            ],
            [
                'nama' => 'Nor',
                'jabatan' => 'Ketua Bidang Pembangunan',
                'gender' => 'P',
            ],
        ]);
    }
}
