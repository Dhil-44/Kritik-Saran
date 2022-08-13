<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cats = ['Critic','Suggestion','Announcement'];

        foreach ($cats as $cat){
        DB::table('categories')->insert([
            'name_cat'=>$cat
        ]);
        }
    }
}
