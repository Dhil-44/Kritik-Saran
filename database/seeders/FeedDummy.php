<?php

namespace Database\Seeders;

use App\Models\Feed;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FeedDummy extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i<=100; $i++) {

            DB::table('feeds')->insert([
                'title' => $faker->name(),
                'category' => $faker->word(),
                'body' => $faker->sentence,
                'user_id'=>$faker->numberBetween(1,6)
            ]);
        }
    }
}
