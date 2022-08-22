<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $f = Factory::create();
        for ($i = 1; $i < 500; $i++) {
            DB::table('submissions')->insert([
                'id_cat' => $f->numberBetween(1, 3),
                'id_user_target' => $f->numberBetween(1, 11),
                'id_user_pengirim' => $f->numberBetween(1, 11),
                'message' => $f->sentence(70),
                'file_name' => '',
                'status' => $f->randomElement(array('private', 'public')),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
    }
}
