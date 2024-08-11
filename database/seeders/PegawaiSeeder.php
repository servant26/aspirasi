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
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Hamisah',
                'jabatan' => 'Ketua',
                'gender' => 'Perempuan',
            ],
            [
                'nama' => 'Eko Winarto',
                'jabatan' => 'Wakil Ketua',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Herniwati',
                'jabatan' => 'Sekretaris',
                'gender' => 'Perempuan',
            ],
            [
                'nama' => 'Amalia',
                'jabatan' => 'Staff ADM',
                'gender' => 'Perempuan',
            ],
            [
                'nama' => 'Wandiro Bayu Broto NS.',
                'jabatan' => 'Ketua Bidang Penyelenggaraan Pemerintahan',
                'gender' => 'Laki-laki',
            ],
            [
                'nama' => 'Nor',
                'jabatan' => 'Ketua Bidang Pembangunan',
                'gender' => 'Perempuan',
            ],
        ]);
    }
}
