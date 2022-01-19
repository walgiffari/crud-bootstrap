<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use League\CommonMark\Extension\Footnote\Node\FootnoteRef;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 50; $i++) {
            $faker = Faker::create('id_ID');
            DB::table('pegawais')->insert([
                'nama' => $faker->name,
                'jabatan' => $faker->jobTitle,
                'umur' => $faker->numberBetween(20, 35),
                'alamat' => $faker->address,
            ]);
        }
    }
}
