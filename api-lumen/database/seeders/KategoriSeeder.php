<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            $data = [
                'kategori' => $faker->city,
                'keterangan' => $faker->text
            ];

            Kategori::create($data);
        }
    }
}
