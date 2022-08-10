<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 1; $i<=100; $i++){
            DB::table('news')->insert([
                'title'=> $faker->word(),
                'body' => $faker->sentence(80),
                'link' => $faker->imageUrl(),
                'gambar'=> $faker->imageUrl(),
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
            ]);

        }
    }
}
