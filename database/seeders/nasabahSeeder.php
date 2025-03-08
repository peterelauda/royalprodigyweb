<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
#use Illuminate\Database\Console\Seeds\WithoutModelEvents;
#use Illuminate\Database\Seeder;

class nasabahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat data faker
        $faker = Faker::create('id_ID');

        //membuat dummy record
        for($i=1; $i<=50; $i++){
            DB::table('nasabah')->insert([
                'nik' => $faker->numberBetween(0000000000000000, 9999999999999999),
                'nama' => $faker->name,
                'pekerjaan' => $faker->jobTitle,
                'alamat' => $faker->address
            ]);
        }
    }
}
