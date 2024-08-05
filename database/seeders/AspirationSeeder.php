<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class AspirationSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
                'jenis_aspirasi' => $faker->randomElement([1, 2, 3]),
                'isi_aspirasi' => $faker->paragraph,
                'status' => $faker->randomElement([1, 2, 3]),
                'tanggal' => $faker->dateTimeThisYear,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
