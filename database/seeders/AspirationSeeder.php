<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AspirationSeeder extends Seeder
{
    /**
     * Jalankan database seed.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('aspirations')->insert([
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'nomor_telepon' => $faker->phoneNumber,
                'isi_aspirasi' => $faker->paragraph,
                'isi_tanggapan' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}